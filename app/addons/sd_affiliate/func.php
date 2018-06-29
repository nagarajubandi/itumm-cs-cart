<?php

use Tygh\Registry;
use Tygh\Enum\AffiliateStatuses;
use Tygh\Enum\BannerLinkTypes;
use Tygh\Enum\BannerTypes;
use Tygh\Enum\UserTypes;
use Tygh\Enum\UserStatuses;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

//
// [Install]
//

function fn_transfer_old_affiliates_install()
{
    $affiliate_old_id = db_get_fields('SELECT user_id FROM ?:users WHERE user_type = ?s', UserTypes::PARTNER);

    $data = array(
        'user_id' => '',
        'approved' => 'N',
        'plan_id' => '0',
        'balance' => '0.00',
        'referrer_partner_id' => '0',
    );

    if (!empty($affiliate_old_id)) {
        foreach ($affiliate_old_id as $id) {
            $data['user_id'] = $id;
            db_query('INSERT INTO ?:aff_partner_profiles ?e', $data);
        }
    }
}

//
//[/Install]
//

//
// The function returns banners for given conditions
//
function fn_get_aff_banners($types = array(BannerTypes::TEXT, BannerTypes::GRAPHICS), $links_to = array(BannerLinkTypes::CATEGORIES, BannerLinkTypes::PRODUCTS, BannerLinkTypes::URL), $is_avail = false, $lang_code = CART_LANGUAGE)
{
    $conditions = array();

    if (!empty($types)) {
        $conditions[] = db_quote('AND ?:aff_banners.type IN (?a)', $types);
    }

    if (!empty($links_to)) {
        $conditions[] = db_quote('AND ?:aff_banners.link_to IN (?a)', $links_to);
    }

    if (!empty($is_avail)) {
        $conditions[] = db_quote('AND ?:aff_banners.status = ?s', AffiliateStatuses::ACTIVE);
    }

    if (fn_allowed_for('ULTIMATE')) {
        if (Registry::get('runtime.company_id')) {
            $conditions[] = db_quote('AND ?:aff_banners.company_id = ?i', Registry::get('runtime.company_id'));
        }
    }

    $banners = db_get_hash_array(
        'SELECT * '
        . 'FROM ?:aff_banners '
        . 'LEFT JOIN ?:aff_banner_descriptions '
        . 'ON ?:aff_banner_descriptions.banner_id = ?:aff_banners.banner_id '
        . 'AND ?:aff_banner_descriptions.lang_code = ?s '
        . 'WHERE 1 ?p '
        . 'ORDER BY ?:aff_banner_descriptions.title',
        'banner_id',
        $lang_code,
        implode(' ', $conditions)
    );

    if (!empty($banners) && is_array($banners)) {
        foreach ($banners as $banner_id => $banner_data) {
            $banners[$banner_id] = fn_convert_aff_banner_data($banner_data);
        }
    }

    return $banners;
}

//
// Get banner title
//
function fn_get_aff_banner_name($banner_id, $lang_code = CART_LANGUAGE)
{
    $title = false;

    if (!empty($banner_id)) {
        $title = db_get_field('SELECT title FROM ?:aff_banner_descriptions WHERE banner_id = ?i AND lang_code = ?s', $banner_id, $lang_code);
    }

    return $title;
}

//
// Get banner image
//
function fn_get_aff_banner_image_data($banner_id, $image_key = 'image', $lang_code = CART_LANGUAGE)
{
    $image_data = fn_get_image_pairs($banner_id, 'aff_images', 'M', true, false, $lang_code);

    return $image_data;
}

//
// Get banner data
//
function fn_get_aff_banner_data($banner_id, $lang_code = CART_LANGUAGE, $avail_only = false)
{
    $banner_data = false;

    if (!empty($banner_id)) {
        $status_condition = '';

        if ($avail_only == true) {
            $status_condition = db_quote(' AND status = ?s', AffiliateStatuses::ACTIVE);
        }

        $banner_data = db_get_row("SELECT * FROM ?:aff_banners LEFT JOIN ?:aff_banner_descriptions ON ?:aff_banner_descriptions.banner_id = ?:aff_banners.banner_id AND ?:aff_banner_descriptions.lang_code = ?s WHERE ?:aff_banners.banner_id = ?i $status_condition", $lang_code, $banner_id);
        $banner_data = fn_convert_aff_banner_data($banner_data);

        if (!empty($banner_data['type']) && $banner_data['type'] == BannerTypes::GRAPHICS) {
            $image_data = fn_get_aff_banner_image_data($banner_data['banner_id'], 'image', $lang_code);
            if (!empty($image_data)) {
                $banner_data = fn_array_merge($banner_data, $image_data);
            }
        }
    }

    return $banner_data;
}

//
// Prepare banner data for different banner types
//
function fn_convert_aff_banner_data($banner_data)
{
    if (!empty($banner_data)) {
        $banner_data['title'] = empty($banner_data['title']) ? '' : $banner_data['title'];
        $banner_data['content'] = empty($banner_data['content']) ? '' : $banner_data['content'];

        if (!empty($banner_data['data']) && !empty($banner_data['type'])) {
            if (!empty($banner_data['link_to']) && in_array($banner_data['type'], array(BannerTypes::TEXT, BannerTypes::GRAPHICS))) {
                if ($banner_data['link_to'] == BannerLinkTypes::CATEGORIES) {
                    $banner_data['categories'] = fn_get_category_name($banner_data['data'], CART_LANGUAGE, true);
                } elseif ($banner_data['link_to'] == BannerLinkTypes::PRODUCTS) {
                    $banner_data['products'] = fn_get_product_name($banner_data['data'], CART_LANGUAGE, true);
                } elseif ($banner_data['link_to'] == BannerLinkTypes::URL) {
                    $banner_data['url'] = $banner_data['data'];
                } elseif ($banner_data['link_to'] == BannerLinkTypes::PRODUCT_GROUPS) {
                    $banner_data['group_id'] = $banner_data['data'];
                    $banner_data['group_name'] = fn_get_group_name($banner_data['group_id']);
                }
            } elseif ($banner_data['type'] == BannerTypes::PRODUCTS) {
                $data = unserialize($banner_data['data']);
                $banner_data = fn_array_merge($banner_data, $data, true);

                unset($banner_data['data'], $data);
            }
        }
    }

    return $banner_data;
}

//
// Get banner url
//
function fn_get_aff_banner_url($banner_data, $partner_id = '', $lang_code = CART_LANGUAGE)
{
    if (empty($banner_data['banner_id'])) {
        return false;
    }

    $banner_url = fn_url("aff_banners.view?bid={$banner_data['banner_id']}&sl=$lang_code", 'C');
    if (!empty($partner_id)) {
        $banner_url .= "&aff_id=$partner_id";
    }

    return $banner_url;
}

//
// Get banner url without affiliate id
//
function fn_get_aff_banner_url_without_id($banner_data, $partner_id = '', $lang_code = CART_LANGUAGE)
{
    if (empty($banner_data['banner_id'])) {
        return false;
    }

    $banner_url = fn_url("aff_banners.view?bid={$banner_data['banner_id']}&sl=$lang_code", 'C');

    return $banner_url;
}
//
// Get banner HTML code
//
function fn_get_aff_banner_html($type, $banner_data, $mode = '', $partner_id = '', $lang_code = CART_LANGUAGE)
{
    $banner_correct = true;
    $auth = &$_SESSION['auth'];

    if ((empty($banner_data['banner_id']) || empty($banner_data['type'])) && $mode != 'demo') {
        return false;
    }

    $banner_data['banner_url'] = fn_get_aff_banner_url($banner_data, $partner_id, $lang_code);
    $banner_data['flash_vars'] = "sl=$lang_code" . (empty($partner_id) ? '' : "&aff_id=$partner_id");
    if ($banner_data['type'] == BannerTypes::PRODUCTS) {
        $condition = '';
        $join = '';

        if (!empty($partner_id)) {
            $plan_data = fn_get_affiliate_plan_data_by_partner_id($partner_id);
            if (!empty($plan_data['product_ids'])) {
                $condition1 = db_quote('(?:products.product_id IN (?n))', array_keys($plan_data['product_ids']));
            }

            if (!empty($plan_data['category_ids'])) {
                $condition2 = db_quote('(category_id IN (?n))', array_keys($plan_data['category_ids']));
                $join .= ' LEFT JOIN ?:products_categories ON ?:products.product_id = ?:products_categories.product_id ';
            }

            $condition .= (!empty($condition1) && !empty($condition2)) ? " AND ($condition1 OR $condition2) " : (!empty($condition1) ? " AND $condition1 " : (!empty($condition2) ? " AND $condition2 " : ''));
        }

        if (!empty($banner_data['product_ids'])) {
            $condition .= db_quote(' AND ?:products.product_id IN (?n)', explode('-', $banner_data['product_ids']));
        }

        $prod_cnt = db_get_field("SELECT COUNT(*) FROM ?:products $join WHERE status = ?s $condition", AffiliateStatuses::ACTIVE);
        $product_id = db_get_field("SELECT ?:products.product_id FROM ?:products $join WHERE status = ?s $condition LIMIT " . rand(0, $prod_cnt - 1) . ', 1', AffiliateStatuses::ACTIVE);

        if (!empty($product_id)) {
            $banner_data['product_id'] = $product_id;
            if ($mode != 'demo') {
                $banner_data['banner_url'] .= "&product_id={$banner_data['product_id']}";
            } else {
                $banner_data['banner_url'] = '';
            }

            $prod_data = fn_get_product_data($product_id, $auth, $lang_code, '?:products.product_id, ?:products.company_id, product, full_description as product_full_description, short_description as product_short_description', false, true, false);

            $banner_data = fn_array_merge($banner_data, $prod_data);
            if (!empty($banner_data['main_pair']['icon']['image_path'])) {
                $banner_data['main_pair']['icon']['image_path'] = 'http://' . Registry::get('config.http_host') . $banner_data['main_pair']['icon']['image_path'];
            }
        } else {
            $banner_correct = false;
            $banner_data['type'] = BannerTypes::TEXT;
            $banner_data['link_to'] = BannerLinkTypes::URL;
            $banner_data['show_title'] = 'N';
            $banner_data['content'] = '<div align="center" style="font-family: tahoma, arial; font-size: 12px;">' . __('warning') .
                '</div><hr size="0" style="border-top: #3b67d2 1px solid;" /><span style="font-family: tahoma, arial; font-size: 10px; color: #3b67d2;">' .
                __('text_no_products_found') . '</span>';
        }
    }
    if (in_array($type, array('js_content', 'iframe'))) {
        $banner_data['border'] = (empty($banner_data['border']) || $banner_data['border'] != 'Y') ? '' : 'style="border: #999999 1px solid;"';
    }
    if (@$banner_data['type'] == BannerTypes::GRAPHICS) {
        $image_data = fn_get_aff_banner_image_data($banner_data['banner_id'], 'icon', $lang_code);
        if (!empty($image_data)) {
            $banner_data = fn_array_merge($banner_data, $image_data);
        }
    }

    if ((!empty($banner_data['width']) || !empty($banner_data['height']))) {
        $banner_data['wh_style'] = 'style="' . (!empty($banner_data['width']) ? "width:{$banner_data['width']}px;" : '') . (!empty($banner_data['height']) ? "height:{$banner_data['height']}px;" : '') . '"';
    } else {
        $banner_data['wh_style'] = '';
    }
    Registry::get('view')->assign(array(
        'partner_id' => $partner_id,
        'banner_type' => $type,
        'mode' => $mode,
        'banner_data' => $banner_data,
        'affiliate_opts_settings' => Registry::get('addons.sd_affiliate')
    ));

    $html_content = trim(Registry::get('view')->fetch('addons/sd_affiliate/views/banners_manager/components/banner_content.tpl'));
    if ($type == 'js_content') {
        $html_content = fn_js_escape($html_content);
    }

    // remove the http or https
    $url_parse = preg_replace('/(^http(s)*:)\/\//i', '//', $html_content);
    Registry::get('view')->assign(array(
        'http_url' => $url_parse,
        'html_content' => $html_content
    ));

    $return_content = '';
    if (($type == 'js' && $mode == 'demo') || $type == 'js_content') {
        $return_content .= fn_get_contents(Registry::get('config.dir.root') . '/js/addons/sd_affiliate/banner_script.js');
    }
    $return_content .= trim(Registry::get('view')->fetch('addons/sd_affiliate/views/banners_manager/components/banner.tpl'));

    if (in_array($type, array('iframe_content', 'js_content')) && !empty($partner_id) && $banner_correct) {
        fn_add_partner_action(
            'show',
            $banner_data['banner_id'],
            $partner_id,
            '',
            array(AFFILIATE_DATA_TYPE_REFERER => !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '')
        );
    }

    return $return_content;
}
//
// [/Banner functions]
//

//
// [Product group functions]
//

//
// Get name of product (or category) group
//
function fn_get_group_name($group_id, $lang_code = CART_LANGUAGE)
{
    $name = false;

    if (!empty($group_id)) {
        $name = db_get_field('SELECT name FROM ?:aff_group_descriptions WHERE group_id = ?i AND lang_code = ?s', $group_id, $lang_code);
    }

    return $name;
}

//
// Get product (category) group data
//
function fn_get_group_data($group_id, $lang_code = CART_LANGUAGE, $avail_only = false)
{
    $group_data = false;

    if (!empty($group_id)) {
        $status_condition = '';

        if ($avail_only == true) {
            $status_condition = db_quote(' AND status = ?s', AffiliateStatuses::ACTIVE);
        }

        $group_data = db_get_row("SELECT * FROM ?:aff_groups LEFT JOIN ?:aff_group_descriptions ON ?:aff_group_descriptions.group_id = ?:aff_groups.group_id AND ?:aff_group_descriptions.lang_code = ?s WHERE ?:aff_groups.group_id = ?i $status_condition", $lang_code, $group_id);
        $group_data = fn_convert_group_data($group_data);
    }

    return $group_data;
}

//
//
//
function fn_convert_group_data($group_data)
{
    if (!empty($group_data)) {
        $group_data['name'] = empty($group_data['name']) ? '' : $group_data['name'];
        if (!empty($group_data['link_to']) && !empty($group_data['data'])) {
            if ($group_data['link_to'] == BannerLinkTypes::CATEGORIES) {
                $group_data['categories'] = fn_get_category_name($group_data['data'], CART_LANGUAGE, true);
            } elseif ($group_data['link_to'] == BannerLinkTypes::PRODUCTS) {
                $group_data['product_ids'] = explode(',', $group_data['data']);
            } elseif ($group_data['link_to'] == BannerLinkTypes::URL) {
                $group_data['url'] = $group_data['data'];
            }

            unset($group_data['data']);
        }
    }

    return $group_data;
}

//
// [/Product group functions]
//

//
// [Affiliate plan functions]
//

//
// Get affiliate plan data
//
function fn_get_affiliate_plan_data($plan_id, $lang_code = CART_LANGUAGE)
{
    if (empty($plan_id)) {
        return false;
    }

    $plan_data = db_get_row("SELECT plans.plan_id, d.object as name, d.description, plans.payout_types, plans.commissions, plans.min_payment, plans.product_ids, plans.category_ids, plans.promotion_ids, plans.cookie_expiration, plans.status, plans.company_id, plans.method_based_selling_price, plans.use_coupon_commission FROM ?:affiliate_plans as plans LEFT JOIN ?:common_descriptions as d ON d.object_holder = 'affiliate_plans' AND d.object_id = plans.plan_id AND d.lang_code = ?s WHERE plan_id = ?i", $lang_code, $plan_id);

    if (!empty($plan_data)) {
        if (!empty($plan_data['commissions'])) {
            $plan_data['commissions'] = explode(';', $plan_data['commissions']);
        } else {
            $plan_data['commissions'] = array();
        }
        $unserialize_fields = array('payout_types', 'product_ids', 'category_ids', 'promotion_ids');
        foreach ($unserialize_fields as $field) {
            if (!empty($plan_data[$field])) {
                $plan_data[$field] = unserialize($plan_data[$field]);
            } else {
                $plan_data[$field] = array();
            }
        }
    }

    return $plan_data;
}

//
// Get list of affiliate plans
//
function fn_get_affiliate_plans_list($lang_code = CART_LANGUAGE)
{
    $plans_list = db_get_hash_single_array(
        "SELECT object_id, object "
        . "FROM ?:affiliate_plans "
        . "LEFT JOIN ?:common_descriptions ON plan_id=object_id AND lang_code = ?s AND object_holder = 'affiliate_plans' "
        . "WHERE status = ?s ORDER BY object",
        array('object_id', 'object'),
        $lang_code,
        AffiliateStatuses::ACTIVE
    );

    return $plans_list;
}

//
// Get affiliate plan name
//
function fn_get_affiliate_plan_name($plan_id, $lang_code = CART_LANGUAGE)
{
    $descr = false;

    if (!empty($plan_id)) {
        $descr = db_get_field("SELECT object FROM ?:common_descriptions WHERE object_id = ?i AND lang_code = ?s AND object_holder = 'affiliate_plans'", $plan_id, $lang_code);
    }

    return $descr;
}

//
// The function returns Partner's affiliate plan
//
function fn_get_affiliate_plan_data_by_partner_id($partner_id, $approved_only = false, $lang_code = CART_LANGUAGE)
{
    if (empty($partner_id)) {
        return false;
    }

    $approved_condition = '';
    if ($approved_only == true) {
        $approved_condition = db_quote(' AND approved = ?s', UserStatuses::APPROVED);
    }
    $plan_id = db_get_field("SELECT plan_id FROM ?:aff_partner_profiles WHERE user_id = ?i $approved_condition", $partner_id);

    if (empty($plan_id)) {
        return false;
    }

    $plan_data = fn_get_affiliate_plan_data($plan_id, $lang_code);

    return $plan_data;
}

//
// [/Affiliate plan functions]
//

//
// [Affiliate partners]
//

//
// Get partner data
//
function fn_get_partner_data($partner_id, $approved_only = false)
{
    if (empty($partner_id)) {
        return false;
    }

    $where_condition = '';
    if ($approved_only == true) {
        $where_condition = db_quote(" AND approved = ?s",  UserStatuses::APPROVED);
    }

    $partner = db_get_row(
        "SELECT ?:users.user_id, ?:users.user_login, ?:users.timestamp, ?:users.user_type, ?:users.status, ?:users.firstname, ?:users.lastname, ?:users.company, ?:users.email, ?:users.phone, ?:users.fax, ?:aff_partner_profiles.approved, ?:aff_partner_profiles.plan_id, ?:aff_partner_profiles.balance, ?:affiliate_plans.min_payment "
        . "FROM ?:users "
        . "LEFT JOIN ?:aff_partner_profiles ON ?:aff_partner_profiles.user_id = ?:users.user_id "
        . "LEFT JOIN ?:affiliate_plans ON ?:affiliate_plans.plan_id = ?:aff_partner_profiles.plan_id "
        . "WHERE ?:users.user_id = ?i AND user_type = ?s $where_condition",
        $partner_id,
        UserTypes::PARTNER
    );

    if (!empty($partner['plan_id'])) {
        $partner['plan'] = db_get_field('SELECT object FROM ?:common_descriptions WHERE object_id = ?i AND object_holder = ?s AND lang_code = ?s', $partner['plan_id'], 'affiliate_plans', CART_LANGUAGE);
    }

    return $partner;
}

//
// The function updates partner profile
//
function fn_update_partner_profile($user_id, $update_data)
{
    if (empty($user_id) || empty($update_data)) {
        return false;
    }

    $update_data['user_id'] = $user_id;
    $is_profile = db_get_field('SELECT COUNT(*) FROM ?:aff_partner_profiles WHERE user_id = ?i', $user_id);

    if (empty($is_profile)) {
        $result = db_query('INSERT INTO ?:aff_partner_profiles ?e', $update_data);
    } else {
        $old_plan_id = db_get_field('SELECT plan_id FROM ?:aff_partner_profiles WHERE user_id = ?i', $user_id);
        $empty_init_balance = db_get_field("SELECT action_id FROM ?:aff_partner_actions WHERE partner_id = ?i AND action = 'init_balance' LIMIT 1", $user_id);
        $result = db_query('UPDATE ?:aff_partner_profiles SET ?u WHERE user_id = ?i', $update_data, $user_id);
        if (!empty($result) && !empty($update_data['plan_id']) && empty($old_plan_id) && empty($empty_init_balance)) {
            fn_add_partner_action('init_balance', '', $user_id);
        }
    }

    return $result;
}

//
// The function deletes partner profile
//
function fn_delete_partner_profile($user_id)
{
    if (empty($user_id)) {
        return false;
    }
    db_query('DELETE FROM ?:aff_partner_profiles WHERE user_id = ?i', $user_id);
    db_query('DELETE FROM ?:aff_partner_actions WHERE partner_id = ?i', $user_id);
    db_query('UPDATE ?:aff_partner_profiles SET referrer_partner_id = ?i WHERE referrer_partner_id = ?i', 0, $user_id);

    return true;
}

//
// The function returns tree of related partners
//
function fn_get_partners_tree_by_partner_id($user_id, $max_level = null)
{
    if (empty($user_id)) {
        return false;
    }

    $partners = fn_get_partner_data($user_id);

    if (empty($partners)) {
        return false;
    }
    if (!isset($max_level)) {
        $aff_plan = fn_get_affiliate_plan_data_by_partner_id($user_id);
        $max_level = empty($aff_plan['commissions']) ? 0 : count($aff_plan['commissions']);
    }
    if (empty($max_level)) {
        return $partners;
    }
    $partners['partners'] = array();

    list($related_partners) = fn_get_users(array('user_type' => UserTypes::PARTNER, 'active' => 'Y', 'referrer_partner_id' => $user_id), $_SESSION['auth']);

    if (empty($related_partners)) {
        return $partners;
    }
    foreach ($related_partners as $partner) {
        $partners['partners'][$partner['user_id']] = fn_get_partners_tree_by_partner_id($partner['user_id'], $max_level - 1);
    }

    return $partners;
}

//
//
//
function fn_get_partners_tree($user_id = '')
{
    list($partners_list) = fn_get_users(array('user_type' => UserTypes::PARTNER, 'active' => 'Y'), $auth);
    if (empty($partners_list)) {
        return false;
    }
    $partners = array();
    foreach ($partners_list as $partner_data) {
        $partners[$partner_data['user_id']] = $partner_data;
    }

    $del_partners = array();
    foreach ($partners as $partner_id => $partner_data) {
        if (!empty($partner_data['referrer_partner_id']) && (empty($user_id) || $user_id != $partner_id)) {
            if (!empty($partners[$partner_data['referrer_partner_id']])) {
                if (empty($partners[$partner_data['referrer_partner_id']]['partners'])) {
                    $partners[$partner_data['referrer_partner_id']]['partners'] = array();
                }
                $partners[$partner_data['referrer_partner_id']]['partners'][$partner_id] = $partners[$partner_id];
                $partners[$partner_id] = &$partners[$partner_data['referrer_partner_id']]['partners'][$partner_id];
                $del_partners[] = $partner_id;
            }
        }
        if (!empty($partner_data['firstname']) || !empty($partner_data['lastname'])) {
            $partners[$partner_id]['affiliate'] = $partner_data['firstname'] . ' ' . $partner_data['lastname'];
        } else {
            $partners[$partner_id]['affiliate'] = __("affiliate") . '_' . $partner_id;
        }
    }
    if (!empty($del_partners)) {
        foreach ($del_partners as $partner_id) {
            if (!empty($partners[$partner_id])) {
                unset($partners[$partner_id]);
            }
        }
    }
    if (!empty($user_id)) {
        $partners = empty($partners[$user_id]) ? array() : array($user_id => $partners[$user_id]);
    }

    return $partners;
}

//
// Function increases or decreases partner balance
//
function fn_update_partner_balance($partner_id, $amount, $action = '+')
{
    $amount = floatval($amount);

    if ($amount < 0) {
        $amount = 0;
    }

    if (empty($partner_id) || empty($amount) || !in_array($action, array('+', '-'))) {
        return false;
    }

    $partner = fn_get_partner_data($partner_id);

    if (empty($partner)) {
        return false;
    }

    if ($action == '-' && $amount > $partner['balance']) {
        $text = '<hr />';
        $text .= __('payment') . ": $amount<br />";
        $text .= __('affiliate') . ": {$partner['firstname']} {$partner['lastname']}<br />";
        $text .= __('balance_account') . ": $partner[balance]";
        if (AREA == 'A') {
            fn_set_notification('E', __('error'), __('error_payout_gt_balance') . $text);
        }

        return false;
    }

    return db_query("UPDATE ?:aff_partner_profiles SET balance = balance $action $amount WHERE user_id = ?i", $partner_id);
}
//
// [/Affiliate partners]
//

//
// [Commissions]
//

//
// Add action info to partner history
//
function fn_add_partner_action($action, $banner_id, $partner_id, $customer_id = '', $additional_data = '', $amount = '0', $multi_tier_account = false)
{
    $auth = &$_SESSION['auth'];

    $auth['ip'] = fn_get_ip();
    $auth['ip'] = $auth['ip']['host'];

    $payout_types = Registry::get('payout_types');

    if (empty($action) || empty($partner_id)) {
        return false;
    }

    if (!$multi_tier_account && AREA != 'A') {
        fn_set_partner_cookie($partner_id);
    }

    $data = array();
    $data['banner_id'] = $banner_id;
    $data['partner_id'] = $partner_id;
    $data['customer_id'] = $customer_id;
    $data['date'] = TIME;
    $data['ip'] = ($action == 'init_balance') ? '' : $_SERVER['REMOTE_ADDR'];
    $data['action'] = $action;
    $data['approved'] = (Registry::get('addons.sd_affiliate.automatic_approval_commissions') == 'Y' && $action != 'sale') ? 'Y' : 'N';
    $data['plan_id'] = db_get_field('SELECT plan_id FROM ?:aff_partner_profiles WHERE user_id = ?i', $partner_id);

    $approved = fn_sd_affiliate_get_affiliate($auth['user_id']);
    if ($approved) {
        return false;
    }

    if (empty($data['plan_id'])) {
        return false;
    }

    // Checking for uniqueness
    if ($data['action'] == 'click' || $data['action'] == 'show') {
        $customer_ip = db_get_field('SELECT ip FROM ?:aff_partner_actions WHERE ip = ?s AND action = ?s', $auth['ip'], $data['action']);

        if (!empty($customer_ip)) {
            return false;
        }
    }

    if ($multi_tier_account) {
        $data['amount'] = round($amount, 2);
    } elseif (!empty($payout_types[$action])) {
        $plan_data = fn_get_affiliate_plan_data($data['plan_id']);
        $payout_values = $plan_data['payout_types'];
        $p_value = false;
        if ($action == 'sale' && !empty($additional_data[AFFILIATE_DATA_TYPE_PRODUCT])) {
            $p_value = fn_get_payout_value($data['plan_id'], $additional_data[AFFILIATE_DATA_TYPE_PRODUCT], 'product');
            if ($p_value === false) {
                $product_data = fn_get_product_data($additional_data[AFFILIATE_DATA_TYPE_PRODUCT], $auth);
                if (!empty($product_data['main_category'])) {
                    $p_value = fn_get_payout_value($data['plan_id'], $product_data['main_category'], 'category');
                }
            }
        } elseif ($action == 'use_coupon' && !empty($additional_data[AFFILIATE_DATA_TYPE_DISCOUNT])) {
            $p_value = fn_get_payout_value($data['plan_id'], $additional_data[AFFILIATE_DATA_TYPE_DISCOUNT], 'promotion');
        }

        if ($p_value === false) {
            if (empty($payout_values[$action]) || ($action != 'init_balance' && (empty($payout_types[$action]['default']) || $payout_types[$action]['default'] != 'Y'))) {
                $p_value = array('value' => 0, 'value_type' => AFFILIATE_DATA_TYPE_AFFILIATE);
            } else {
                $p_value = $payout_values[$action];
            }
        }
        $data['amount'] = (@$p_value['value_type'] == AFFILIATE_DATA_TYPE_AFFILIATE) ? @$p_value['value'] : $amount * $p_value['value'] / 100;
    }

    $action_id = db_query('INSERT INTO ?:aff_partner_actions ?e', $data);

    if (!empty($action_id)) {
        if (Registry::get('addons.sd_affiliate.automatic_approval_commissions') == 'Y' && $action != 'sale') {
            fn_update_partner_balance($data['partner_id'], $data['amount'], '+');
        }

        if (!empty($additional_data) && is_array($additional_data)) {
            foreach ($additional_data as $object_type => $object_data) {
                $object_type = substr($object_type, 0, 1);
                $object_type = strtoupper($object_type);
                $_data = array('action_id' => $action_id, 'object_data' => $object_data, 'object_type' => $object_type);

                db_query('INSERT INTO ?:aff_action_links ?e', $_data);
            }
        }

        if (!$multi_tier_account && $action != 'init_balance') {
            fn_add_commissions_to_multi_tier_affiliates($action, $data['partner_id'], array('commission' => $data['amount'], 'price' => round($amount, 2)), $action_id, $data['customer_id'], $data['banner_id'], $additional_data);
        }
    }

    Registry::set('payout_types', $payout_types);

    return true;
}

//
// Calculate commissions for multi-tier affiliates
//
function fn_add_commissions_to_multi_tier_affiliates($action, $partner_id, $amount, $action_id, $customer_id = 0, $banner_id = 0, $additional_data = array())
{
    if (empty($action) || empty($partner_id) || empty($amount) || empty($action_id)) {
        return false;
    }

    $referrer_partner_id = db_get_field('SELECT referrer_partner_id FROM ?:aff_partner_profiles WHERE user_id = ?i', $partner_id);
    if (empty($referrer_partner_id)) {
        return false;
    }

    $levels = db_get_fields('SELECT commissions FROM ?:affiliate_plans');
    if (empty($levels) || !is_array($levels)) {
        return false;
    }

    $max_level = 0;
    foreach ($levels as $level) {
        if (empty($level)) {
            continue;
        }
        $ml = substr_count($level, ';') + 1;
        if ($ml > $max_level) {
            $max_level = $ml;
        }
    }

    if (empty($max_level)) {
        return false;
    }

    $referrers = array();
    while (!empty($referrer_partner_id) && $max_level > 0) {
        $referrers[] = array('referrer_id' => $referrer_partner_id);
        --$max_level;
        $referrer_partner_id = db_get_field('SELECT referrer_partner_id FROM ?:aff_partner_profiles WHERE user_id = ?i', $referrer_partner_id);
    }

    $_add_data = $additional_data;

    foreach ($referrers as $k => $v) {
        $plan_data = fn_get_affiliate_plan_data_by_partner_id($v['referrer_id']);
        $add_action = false;

        if ($plan_data['method_based_selling_price'] == 'Y' && $action == 'sale') {
            $_amount = $amount['price'];
            $add_action = true;
        } elseif (!empty($plan_data['commissions'][$k])) {
            $_amount = $amount['commission'];
            $add_action = true;
        }

        if ($add_action == true) {
            $_add_data[AFFILIATE_DATA_TYPE_LEVEL] = $k + 1;
            $_add_data[AFFILIATE_DATA_TYPE_AFFILIATE] = $action_id;
            fn_add_partner_action(
                $action,
                $banner_id,
                $v['referrer_id'],
                $customer_id,
                $_add_data,
                $_amount / 100 * $plan_data['commissions'][$k],
                true
            );
        }
    }

    return true;
}

//
//
//
function fn_get_payout_value($plan_id, $item_id, $item_type = 'product')
{
    if (empty($plan_id) || empty($item_id) || empty($item_type)) {
        return false;
    }

    $fields = db_get_row('SELECT * FROM ?:affiliate_plans LIMIT 1');
    $fields = array_keys($fields);
    $item_type = fn_strtolower($item_type);
    $fields = array_map('fn_strtolower', $fields);
    if (!in_array($item_type . '_ids', $fields)) {
        return false;
    }

    $item_ids = db_get_field("SELECT {$item_type}_ids FROM ?:affiliate_plans WHERE plan_id = ?i", $plan_id);
    $item_ids = unserialize($item_ids);
    if ($item_type == 'category') {
        $patent_id = $item_id;
        while ($patent_id != 0) {
            if (isset($item_ids[$patent_id]['value'])) {
                return $item_ids[$patent_id];
            } else {
                $patent_id = db_get_field('SELECT parent_id FROM ?:categories WHERE category_id = ?i', $patent_id);
            }
        }
    } elseif (isset($item_ids[$item_id]['value'])) {
        return $item_ids[$item_id];
    }

    return false;
}

//
// Add commissions for a sale
//
function fn_add_sale_to_actions($order_id, $auth, $action = '', $partner_data)
{
    if (!empty($order_id)) {
        if (empty($partner_data['partner_id']) && !empty($auth['user_id'])) {
            // Restore partner_id from actions history
            $_data = db_get_row("SELECT partner_id, date FROM ?:aff_partner_actions WHERE customer_id = ?i AND action IN ('new_customer', 'new_partner') ORDER BY date DESC LIMIT 1", $auth['user_id']);
            if (!empty($_data['partner_id']) && !empty($_data['date'])) {
                $_plan_data = fn_get_affiliate_plan_data_by_partner_id($_data['partner_id']);
                if (!empty($_plan_data['cookie_expiration']) && TIME <= ($_data['date'] + $_plan_data['cookie_expiration'] * 24 * 3600)) {
                    $partner_data['partner_id'] = $_data['partner_id'];
                }
            }
        }
        if (!empty($partner_data['partner_id'])) {
            $_data = array(
                'order_id' => $order_id,
                'type' => ORDER_DATA_AFFILIATE_INFO, // affiliate information
                'data' => serialize(array('partner_id' => $partner_data['partner_id'])),
            );
            db_query('REPLACE INTO ?:order_data ?e', $_data);
        } else {
            db_query('DELETE FROM ?:order_data WHERE order_id = ?i AND type = ?s', $order_id, ORDER_DATA_AFFILIATE_INFO);
        }
        $order = fn_get_order_info($order_id);
        if (!empty($partner_data['partner_id']) && !empty($order['products'])) {
            if (empty($_plan_data)) {
                $_plan_data = fn_get_affiliate_plan_data_by_partner_id($partner_data['partner_id']);
            }
            if (@$_plan_data['use_coupon_commission'] == 'Y' && !empty($partner_data['promotion_ids']) && !empty($order['coupons'])) {
                // coupon commision should overide all others and be the only commision IF USED
                foreach ($order['coupons'] as $coupon_code => $value) {
                    foreach ($value as $promotion_id) {
                        if (!isset($_plan_data['promotion_ids'][$promotion_id]) || !isset($partner_data['promotion_ids'][$promotion_id])) {
                            continue;
                        }
                        if (!empty($promotion_id)) {
                            fn_add_partner_action(
                                'use_coupon',
                                !empty($partner_data['banner_id']) ? $partner_data['banner_id'] : 0,
                                $partner_data['partner_id'],
                                !empty($auth['user_id']) ? $auth['user_id'] : 0,
                                array(AFFILIATE_DATA_TYPE_ORDER => $order_id, AFFILIATE_DATA_TYPE_DISCOUNT => $promotion_id),
                                $order['subtotal']
                            );
                            unset($partner_data['promotion_ids'][$promotion_id]);
                        }
                    }
                }
            } else {
                if (!empty($order['products'])) {
                    foreach ($order['products'] as $product) {
                        $subtotal = empty($product['subtotal']) ? 0 : $product['subtotal'];
                        if ($subtotal) {
                            $subtotal = $subtotal - $product['tax_value'];
                        }

                        if (!empty($subtotal) && !empty($product['product_id'])) {
                            fn_add_partner_action(
                                'sale',
                                !empty($partner_data['banner_id']) ? $partner_data['banner_id'] : 0,
                                $partner_data['partner_id'],
                                !empty($auth['user_id']) ? $auth['user_id'] : 0,
                                array(AFFILIATE_DATA_TYPE_ORDER => $order_id, AFFILIATE_DATA_TYPE_PRODUCT => $product['product_id']),
                                $subtotal
                            );
                        }
                    }
                }
                if (!empty($order['coupons']) && !empty($order['subtotal'])) {
                    foreach ($order['coupons'] as $coupon_code => $value) {
                        foreach ($value as $promotion_id) {
                            if (!isset($_plan_data['promotion_ids'][$promotion_id]) || !isset($partner_data['promotion_ids'][$promotion_id])) {
                                continue;
                            }
                            $coupon_data = $_plan_data['promotion_ids'][$promotion_id];
                            $coupon_subtotal = ($coupon_data['value_type'] == AFFILIATE_DATA_TYPE_AFFILIATE) ? $coupon_data['value'] : $order['subtotal'];
                            if (!empty($coupon_subtotal)) {
                                fn_add_partner_action(
                                    'use_coupon',
                                    empty($partner_data['banner_id']) ? 0 : $partner_data['banner_id'],
                                    $partner_data['partner_id'],
                                    empty($auth['user_id']) ? 0 : $auth['user_id'],
                                    array(AFFILIATE_DATA_TYPE_ORDER => $order_id, AFFILIATE_DATA_TYPE_DISCOUNT => $promotion_id),
                                    $coupon_subtotal
                                );
                            }
                            unset($partner_data['promotion_ids'][$promotion_id]);
                        }
                    }
                }
            }
        }
    }
}

//
// Search action commissions
//
function fn_get_affiliate_actions($params, $items_per_page = 0, $lang_code = CART_LANGUAGE)
{
    $payout_types = Registry::get('payout_types');

    $default_params = array(
        'page' => 1,
        'items_per_page' => $items_per_page,
    );

    $params = array_merge($default_params, $params);

    // Define sort fields
    $sortings = array(
        'action' => 'actions.action',
        'date' => 'actions.date',
        'cost' => 'actions.amount',
        'customer' => array('customers.lastname', 'customers.firstname'),
        'partner' => 'partners.firstname',
        'banner' => '?:aff_banner_descriptions.title',
        'status' => 'actions.payout_id, actions.approved',
    );

    $sorting = db_sort($params, $sortings, 'date', 'desc');

    $condition = '1';
    if (!empty($params['action_id'])) {
        $condition .= db_quote(' AND actions.action_id = ?i', $params['action_id']);
    }

    if (!empty($params['object_type'])) {
        $condition .= db_quote(' AND alinks.object_type = ?s', $params['object_type']);
    }

    if (!empty($params['object_data'])) {
        $condition .= db_quote(' AND alinks.object_data = ?s', $params['object_data']);
    }

    if (!empty($params['payout_id'])) {
        $condition .= db_quote(' AND payout_id = ?i', $params['payout_id']);
    }

    if (!empty($params['condition'])) {
        if (!preg_match('/^\s*(AND|OR|XOR)/', $params['condition'])) {
            $condition .= ' AND ';
        }

        $condition .= $params['condition'];
    }

    $limit = '';
    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field("SELECT COUNT(*) FROM ?:aff_partner_actions as actions WHERE $condition");
        $limit = db_paginate($params['page'], $params['items_per_page']);
    }

    if (fn_allowed_for('ULTIMATE')) {
        if (Registry::get('runtime.company_id')) {
            $condition .= db_quote(' AND (?:aff_banners.company_id = ?i OR actions.banner_id = 0)', Registry::get('runtime.company_id'));
        }
    }

    $fields = array(
        'actions.*',
        'alinks.object_data as parent_action_id',
        'customers.firstname as customer_firstname',
        'customers.lastname as customer_lastname',
        'partners.firstname as partner_firstname',
        'partners.lastname as partner_lastname',
        '?:common_descriptions.object as plan',
        '?:common_descriptions.description as plan_description',
        '?:aff_banners.type as banner_type',
        '?:aff_banner_descriptions.title as banner',
    );

    $actions = db_get_hash_array(
        'SELECT ' . implode(', ', $fields)
        . ' FROM ?:aff_partner_actions as actions'
        . ' LEFT JOIN ?:users as customers ON customers.user_id = actions.customer_id'
        . ' LEFT JOIN ?:users as partners ON partners.user_id = actions.partner_id'
        . " LEFT JOIN ?:common_descriptions ON ?:common_descriptions.object_holder = 'affiliate_plans' AND ?:common_descriptions.object_id = actions.plan_id AND ?:common_descriptions.lang_code = ?s"
        . ' LEFT JOIN ?:aff_banners ON ?:aff_banners.banner_id = actions.banner_id'
        . ' LEFT JOIN ?:aff_banner_descriptions ON ?:aff_banner_descriptions.banner_id = actions.banner_id AND ?:aff_banner_descriptions.lang_code = ?s'
        . " LEFT JOIN ?:aff_action_links as alinks ON alinks.action_id = actions.action_id AND alinks.object_type = ?s"
        . " WHERE ?p $sorting $limit",
        'action_id',
        $lang_code,
        $lang_code,
        AFFILIATE_DATA_TYPE_AFFILIATE,
        $condition
    );

    if (!empty($actions)) {
        $extra_data = array();
        $order_paid_statuses = fn_get_order_paid_statuses();

        foreach ($actions as $action_id => $action_data) {
            $actions[$action_id]['customer_exists'] = fn_sd_affiliate_user_exists($action_data['customer_id']);
            $actions[$action_id]['partner_exists'] = fn_sd_affiliate_user_exists($action_data['partner_id']);
            $action_data['data'] = db_get_hash_single_array('SELECT object_data, object_type FROM ?:aff_action_links WHERE action_id = ?i', array('object_type', 'object_data'), $action_id);
            $actions[$action_id]['data'] = $action_data['data'];
            if (!empty($action_data['data'])) {
                if (!empty($actions[$action_id]['data'][AFFILIATE_DATA_TYPE_PRODUCT])) {
                    $actions[$action_id]['data']['product_name'] = fn_get_product_name($actions[$action_id]['data'][AFFILIATE_DATA_TYPE_PRODUCT], $lang_code);
                }
                if (!empty($actions[$action_id]['data'][AFFILIATE_DATA_TYPE_ORDER])) {
                    $tmp_order = fn_get_order_info($actions[$action_id]['data'][AFFILIATE_DATA_TYPE_ORDER]);

                    if (!in_array($tmp_order['status'], $order_paid_statuses) && $action_data['approved'] != 'Y') {
                        unset($actions[$action_id]);
                        continue;
                    }

                    $actions[$action_id]['data']['order_status'] = $tmp_order['status'];
                }
                if (!empty($actions[$action_id]['data'][AFFILIATE_DATA_TYPE_DISCOUNT])) {
                    $actions[$action_id]['data']['coupon'] = fn_get_promotion_data($actions[$action_id]['data'][AFFILIATE_DATA_TYPE_DISCOUNT]);
                }
            } else {
                $actions[$action_id]['data'] = array();
            }

            if (!empty($action_data['parent_action_id']) && empty($extra_data[$action_data['parent_action_id']])) {
                $extra_data[$action_data['parent_action_id']] = db_get_hash_array(
                    "SELECT actions.action_id, actions.action, actions.amount, actions.partner_id, alinks.object_data as tier, partners.firstname, partners.lastname "
                    . "FROM ?:aff_partner_actions as actions "
                    . "LEFT JOIN ?:aff_action_links as alinks ON alinks.action_id = actions.action_id AND alinks.object_type = ?s "
                    . "LEFT JOIN ?:users as partners ON partners.user_id = actions.partner_id "
                    . "WHERE actions.action_id = ?i OR actions.action_id IN (SELECT links.action_id FROM ?:aff_action_links as links WHERE links.object_type = ?s AND links.object_data = ?i) "
                    . "ORDER BY actions.action_id ASC", 'action_id',
                    AFFILIATE_DATA_TYPE_LEVEL,
                    $action_data['parent_action_id'],
                    AFFILIATE_DATA_TYPE_AFFILIATE,
                    $action_data['parent_action_id']
                );

                if (!empty($extra_data[$action_data['parent_action_id']])) {
                    foreach ($extra_data[$action_data['parent_action_id']] as $related_id => $related_data) {
                        $extra_data[$action_data['parent_action_id']][$related_id]['title'] = empty($payout_types[$related_data['action']]['title']) ? '' : __($payout_types[$related_data['action']]['title'], '', $lang_code);
                    }
                }
            }
            if (!empty($extra_data[$action_data['parent_action_id']])) {
                $actions[$action_id]['extra_data'] = $extra_data[$action_data['parent_action_id']];
            }

            $actions[$action_id]['title'] = empty($payout_types[$action_data['action']]['title']) ? '' : __($payout_types[$action_data['action']]['title'], '', $lang_code);
            if (!empty($actions[$action_id]['data'][AFFILIATE_DATA_TYPE_LEVEL]) && !empty($actions[$action_id]['title'])) {
                $_level = strval($actions[$action_id]['data'][AFFILIATE_DATA_TYPE_LEVEL]);
                $actions[$action_id]['title'] .= ' (' . $_level . ' ' . __('tier_account', '', $lang_code) . ')';
            }
        }
    }

    return array($actions, $params);
}

//
// Get order's commissions
//
function fn_sd_affiliate_get_commissions($order_id, $paid = false, $lang_code = CART_LANGUAGE)
{
    $payout_types = Registry::get('payout_types');

    if (empty($order_id)) {
        return false;
    }

    $where = ($paid == true) ? ' AND ?:aff_partner_actions.payout_id != 0' : '';

    // There is search related affiliate commissions
    $_aff_actions = db_get_array("SELECT ?:aff_partner_actions.*, ?:users.firstname, ?:users.lastname FROM ?:aff_action_links LEFT JOIN ?:aff_partner_actions ON ?:aff_partner_actions.action_id = ?:aff_action_links.action_id LEFT JOIN ?:users ON ?:users.user_id = ?:aff_partner_actions.partner_id WHERE object_data = ?i AND object_type = ?s $where", $order_id, AFFILIATE_DATA_TYPE_ORDER);
    if (!empty($_aff_actions)) {
        foreach ($_aff_actions as $key => $act) {
            $_aff_actions[$key]['title'] = __($payout_types[$act['action']]['title'], '', $lang_code);
        }
    }

    Registry::set('payout_types', $payout_types);

    return $_aff_actions;
}
//
// [/Commissions]
//

//
//
//
function fn_get_date_of_payment_period($cnt_last_periods = 1)
{
    if ($cnt_last_periods < 1) {
        return false;
    }
    $cnt_period = $cnt_last_periods;
    --$cnt_period;
    $_cur_time = TIME;
    $cur_date = getdate($_cur_time);
    if (Registry::get('addons.sd_affiliate.payment_period') === false) {
        return false;
    }

    switch (Registry::get('addons.sd_affiliate.payment_period')) {
        case '1w' :
            $_day = $cur_date['mday'] - $cur_date['wday'];
            $start_date = mktime(0, 0, 0, $cur_date['mon'], $_day, $cur_date['year']) - 7 * 24 * 3600 * $cnt_period;
            break;
        case '2w':
            $checkpoint_1 = 1;
            $checkpoint_2 = 16;
            $_day = ($cur_date['mday'] < $checkpoint_2) ? $checkpoint_1 : $checkpoint_2;
            $checkpoint_return = ($cur_date['mday'] < $checkpoint_2) ? false : true;
            if (floor($cnt_period / 2) != $cnt_period / 2) {
                if ($cur_date['mday'] < $checkpoint_2) {
                    $start_date = mktime(0, 0, 0, $cur_date['mon'] - floor($cnt_period / 2) - 1, $checkpoint_2, $cur_date['year']);
                    $checkpoint_return = true;
                } else {
                    $start_date = mktime(0, 0, 0, $cur_date['mon'] - floor($cnt_period / 2), $checkpoint_1, $cur_date['year']);
                    $checkpoint_return = false;
                }
            } else {
                $start_date = mktime(0, 0, 0, $cur_date['mon'] - floor($cnt_period / 2), $_day, $cur_date['year']);
            }
            break;
        case '1m':
            $_day = 1;
            $start_date = mktime(0, 0, 0, $cur_date['mon'], $_day, $cur_date['year']);
            $start_date = strtotime("-$cnt_period month", $start_date);
            break;
    }

    return $start_date;
}

//
// Decimal coding changes into BASE_D
//
function fn_dec2any($num, $base = BASE_D, $index = false)
{
    if (!$base) {
        $base = strlen($index);
    } elseif (!$index) {
        $index = substr(INDEX_D, 0, $base);
    }
    $_num = intval($num);
    if (empty($_num)) {
        $out = substr($index, 0, 1);
    } else {
        $out = '';
        for ($t = floor(log10($num) / log10($base)); $t >= 0; --$t) {
            $a = floor($num / pow($base, $t));
            $out = $out . substr($index, $a, 1);
            $num = $num - ($a * pow($base, $t));
        }
    }
    $max_len = 10;
    $len = $max_len - 1 - strlen($out);
    $_pref = substr(INDEX_D, $len, $len);
    $out = $_pref . 'A' . $out;

    return $out;
}

//
// BASE_D coding changes into decimal
//
function fn_any2dec($num, $base = BASE_D, $index = false)
{
    if (!$base) {
        $base = strlen($index);
    } elseif (!$index) {
        $index = substr(INDEX_D, 0, $base);
    }
    $out = 0;
    $_pos = stripos($num, 'A');
    $num = substr($num, $_pos + 1);
    $len = strlen($num) - 1;
    for ($t = 0; $t <= $len; ++$t) {
        $out = $out + stripos($index, substr($num, $t, 1)) * pow($base, $len - $t);
    }

    return $out;
}

//
// Set partner cookie
//
function fn_set_partner_cookie($partner_id)
{
    if (headers_sent()) {
        return false;
    }
    if (!empty($partner_id) && fn_get_cookie(AFFILIATE_COOKIE_NAME) != $partner_id) {
        $plan_data = fn_get_affiliate_plan_data_by_partner_id($partner_id, true);
        if (!empty($plan_data['cookie_expiration'])) {
            $partner_id_alive_time = $plan_data['cookie_expiration'] * SECONDS_IN_DAY;
            fn_set_cookie(AFFILIATE_COOKIE_NAME, $partner_id, $partner_id_alive_time);

            return true;
        }
    }

    return false;
}

//
// Get a groups
//
function fn_get_groups_list($active = true, $lang_code = CART_LANGUAGE)
{
    if (empty($active)) {
        $condition = '';
    } else {
        $condition = db_quote(" AND ?:aff_groups.status = ?s", AffiliateStatuses::ACTIVE);
    }

    if (fn_allowed_for('ULTIMATE')) {
        if (Registry::get('runtime.company_id')) {
            $condition .= db_quote(' AND ?:aff_groups.company_id = ?i', Registry::get('runtime.company_id'));
        }
    }

    $groups_list = db_get_hash_array("SELECT ?:aff_groups.group_id, ?:aff_group_descriptions.name FROM ?:aff_groups LEFT JOIN ?:aff_group_descriptions ON ?:aff_groups.group_id = ?:aff_group_descriptions.group_id AND ?:aff_group_descriptions.lang_code = ?s WHERE 1 $condition ORDER BY name", 'group_id', $lang_code);

    return $groups_list;
}

/**
 * Gets banner link types.
 *
 * @param string $banner_type Banner type
 *
 * return array with link types as keys and titles as values
 */
function fn_get_aff_banner_link_types($banner_type = '')
{
    if ($banner_type != BannerTypes::PRODUCTS) {
        $link_types = array(
            BannerLinkTypes::PRODUCT_GROUPS => __('product_groups'),
            BannerLinkTypes::CATEGORIES => __('categories'),
            BannerLinkTypes::PRODUCTS => __('products'),
        );
    }
    $link_types[BannerLinkTypes::URL] = __('url');

    return $link_types;
}

function fn_sd_affiliate_get_predefined_statuses(&$type, &$statuses)
{
    if ($type == 'affiliate') {
        $statuses['affiliate'] = array(
            AffiliateStatuses::OPEN => __('open'),
            AffiliateStatuses::SUCCESSFUL => __('successful'),
        );
    }
}

function fn_sd_affiliate_get_affiliate($id)
{
    $approved_affiliate = db_get_field('SELECT approved FROM ?:aff_partner_profiles WHERE user_id = ?i', $id);

    return $approved_affiliate == UserStatuses::APPROVED;
}

/** [HOOKS] **/

//
// Commissions are adding for new customer or partner
//
function fn_sd_affiliate_update_profile(&$action, &$user_data)
{
    if ($action == 'add' && in_array($user_data['user_type'], array(UserTypes::PARTNER, UserTypes::CUSTUMER))) {
        $partner_action = ($user_data['user_type'] == UserTypes::PARTNER) ? 'new_partner' : 'new_customer';

        if (!empty($_SESSION['partner_data']['partner_id'])) {
            fn_add_partner_action(
                $partner_action,
                !empty($_SESSION['partner_data']['banner_id']) ? $_SESSION['partner_data']['banner_id'] : 0,
                $_SESSION['partner_data']['partner_id'],
                $user_data['user_id']
            );

            if ($user_data['user_type'] == UserTypes::PARTNER) {
                fn_update_partner_profile($user_data['user_id'], array('referrer_partner_id' => $_SESSION['partner_data']['partner_id']));
            }
        }
    }

    if ($action == 'update' && $user_data['user_type'] != UserTypes::PARTNER) {
        fn_delete_partner_profile($user_data['user_id']);
    }

    if (!empty($user_data['user_type']) && $user_data['user_type'] == UserTypes::PARTNER) {
        $profile_exists = db_get_field('SELECT COUNT(*) FROM ?:aff_partner_profiles WHERE user_id = ?i', $user_data['user_id']);
        if (empty($profile_exists)) {
            $update_data = array('approved' => 'N');
            fn_update_partner_profile($user_data['user_id'], $update_data);
        }
    }

    return true;
}

function fn_sd_affiliate_place_order(&$order_id, &$action)
{
    if (!empty($_SESSION['partner_data'])) {
        fn_add_sale_to_actions($order_id, (defined('ORDER_MANAGEMENT') ? $_SESSION['customer_auth'] : $_SESSION['auth']), $action, $_SESSION['partner_data']);
    }

    if (defined('ORDER_MANAGEMENT')) {
        unset($_SESSION['partner_data']);
    }

    return true;
}

function fn_sd_affiliate_edit_place_order(&$order_id)
{
    // We are deleting partner commissions if it is not payouted
    if (!empty($_SESSION['partner_data']) && $_SESSION['partner_data']['is_payouts'] != 'Y') {
        $_commissions = fn_sd_affiliate_get_commissions($order_id);
        if (!empty($_commissions)) {
            $_action_ids = array();
            foreach ($_commissions as $_action_data) {
                $_action_ids[] = $_action_data['action_id'];
                $_SESSION['partner_data']['banner_id'] = $_action_data['banner_id'];
            }
            db_query('DELETE FROM ?:aff_partner_actions WHERE action_id IN (?n)', $_action_ids);
            db_query('DELETE FROM ?:aff_action_links WHERE action_id IN (?n)', $_action_ids);
        }
    }

    return true;
}

function fn_sd_affiliate_get_users(&$params, &$fields, &$sortings, &$condition, &$join)
{
    if (!empty($params['user_type']) && $params['user_type'] == UserTypes::PARTNER) {
        $sortings['partner_status'] = '?:aff_partner_profiles.approved';
        $sortings['plan'] = '?:common_descriptions.object';

        $fields[] = '?:aff_partner_profiles.approved';
        $fields[] = '?:aff_partner_profiles.plan_id';
        $fields[] = '?:aff_partner_profiles.balance';
        $fields[] = '?:aff_partner_profiles.referrer_partner_id';
        $fields[] = '?:common_descriptions.object as plan';

        if (!empty($params['approved'])) {
            $condition['aff_approved'] = db_quote(' AND ?:aff_partner_profiles.approved = ?s', $params['approved']);
        }

        if (!empty($params['plan_id'])) {
            if ($params['plan_id'] == -1) {
                $condition['aff_plan_id'] = db_quote(' AND (?:aff_partner_profiles.plan_id = 0 OR ISNULL(?:aff_partner_profiles.approved))');
            } else {
                $condition['aff_plan_id'] = db_quote(' AND ?:aff_partner_profiles.plan_id = ?i', $params['plan_id']);
            }
        }

        if (!empty($params['referrer_partner_id'])) {
            $condition['aff_referrer_partner_id'] = db_quote(' AND ?:aff_partner_profiles.referrer_partner_id = ?i', $params['referrer_partner_id']);
        }

        $join .= db_quote(' LEFT JOIN ?:aff_partner_profiles ON ?:aff_partner_profiles.user_id = ?:users.user_id LEFT JOIN ?:common_descriptions ON ?:aff_partner_profiles.plan_id = ?:common_descriptions.object_id AND ?:common_descriptions.object_holder = ?s AND ?:common_descriptions.lang_code = ?s', CART_LANGUAGE, 'affiliate_plans');
    }

    return true;
}

function fn_sd_affiliate_change_location(&$location, &$select, &$condition, &$params)
{
    if (!empty($_REQUEST['user_type'])) {
        $location = $_REQUEST['user_type'];
    } elseif (!empty($_SESSION['auth']['user_id']) && AREA == 'C') {
        $location = fn_sd_affiliate_get_user_type($_SESSION['auth']['user_id']);
    }
    if ($location == 'P') {
        $select = ', ?:profile_fields.partner_required as required';
        $condition .= " AND ?:profile_fields.partner_show = 'Y'";

        return true;
    }
}
function fn_sd_affiliate_get_user_type($user_id)
{
    return !empty($user_id) ? db_get_field('SELECT user_type FROM ?:users WHERE user_id = ?i', $user_id) : UserTypes::CUSTOMER;
}

function fn_sd_affiliate_get_user_type_description(&$type_descr)
{
    $type_descr['S'][UserTypes::PARTNER] = 'affiliate';
    $type_descr[UserTypes::PARTNER][UserTypes::PARTNER] = 'affiliates';

    return true;
}

function fn_sd_affiliate_check_user_type_access_rules_pre(&$user_data, &$account_type, &$rules)
{
    // affiliate might login only to the customer area
    $rules[UserTypes::PARTNER] = array('customer');
}

function fn_sd_affiliate_promotion_check_coupon(&$coupon_code, &$cart)
{
    if (Registry::get('runtime.checkout') && $partner_id = Registry::get('affiliate_partner_id')) {
        // The Coupon is saved in partner data as partner's coupon
        // and Partner ID is saved
        if (!empty($partner_id)) {
            if (empty($_SESSION['partner_data'])) {
                $_SESSION['partner_data'] = array();
            }

            $_SESSION['partner_data']['partner_id'] = $partner_id;
            $_SESSION['partner_data']['is_payouts'] = 'N';

            fn_set_partner_cookie($partner_id);
            foreach ($cart['coupons'][$coupon_code] as $promotion_id) {
                $_SESSION['partner_data']['promotion_ids'][$promotion_id] = $promotion_id;
            }
        }
    }

    return true;
}

//
// Calculate partner ID from coupon code
//

function fn_sd_affiliate_pre_promotion_check_coupon(&$coupon_code)
{
    if (empty($coupon_code) || !Registry::get('runtime.checkout')) {
        return false;
    }

    $orig_coupon = $coupon_code;
    $prefix = Registry::get('addons.sd_affiliate.coupon_prefix_delim');

    $delim_len = strlen($prefix);

    if (Registry::get('addons.sd_affiliate.use_affiliate_id') == 'Y' && !empty($delim_len)) {
        if (($delim_idx = strpos($coupon_code, $prefix)) != false) {
            $delim_chr = substr($coupon_code, $delim_idx, $delim_len);
            if ($delim_chr == $prefix) {
                $partner_id = intval(substr($coupon_code, 0, $delim_idx));
                if (!empty($partner_id)) {
                    $coupon_code = substr($coupon_code, $delim_idx + $delim_len);
                }
            }
        }
    } else {
        $prefix_length = 10;
        $delim_chr = substr($coupon_code, $prefix_length, $delim_len);
        if ($delim_chr == $prefix) {
            $partner_code = substr($coupon_code, 0, $prefix_length);
            $partner_id = fn_any2dec($partner_code);
            if (!empty($partner_id)) {
                if ($partner_code == mb_strtoupper(fn_dec2any($partner_id))) {
                    $coupon_code = substr($coupon_code, $prefix_length + $delim_len);
                } else {
                    $partner_id = 0;
                }
            }
        }
    }

    if (!empty($partner_id)) {
        $plans_data = fn_get_affiliate_plan_data_by_partner_id($partner_id, true);
        $valid_coupon = false;
        if (!empty($plans_data['promotion_ids'])) {
            $params = array(
                'promotion_id' => array_keys($plans_data['promotion_ids']),
                'expand' => true,
            );
            list($coupons) = fn_get_promotions($params);
            foreach ($coupons as $coupon_data) {
                foreach ($coupon_data['conditions']['conditions'] as $cnd) {
                    if ($cnd['condition'] == 'coupon_code' && $coupon_code == mb_strtolower($cnd['value'])) {
                        $valid_coupon = true;
                        break;
                    }
                }
                if ($valid_coupon) {
                    break;
                }
            }
        }
        if (!$valid_coupon) {
            $partner_id = 0;
            $coupon_code = $orig_coupon;
        }
    }

    if (!empty($partner_id)) {
        Registry::set('affiliate_partner_id', $partner_id);

        return true;
    } else {
        return false;
    }
}

function fn_sd_affiliate_auth_routines(&$status, &$user_data)
{
    if (!empty($user_data['user_id']) && $user_data['user_type'] == UserTypes::PARTNER) {
        $partner_profile = db_get_row('SELECT * FROM ?:aff_partner_profiles WHERE user_id = ?i', $user_data['user_id']);
        $user_data = fn_array_merge($user_data, $partner_profile);

        if ((empty($user_data['approved']) || $user_data['approved'] == UserStatuses::NOAPPROVED)) {
            fn_set_notification('W', __('warning'), __('error_account_not_approved'));
        }

        if (!empty($user_data['approved']) && $user_data['approved'] == AFFILIATE_DATA_TYPE_DISCOUNT) {
            fn_set_notification('W', __('warning'), __('error_account_declined'));
        }
    }

    return true;
}

function fn_sd_affiliate_fill_auth(&$auth, &$user_data)
{
    if (!empty($user_data['user_type']) && $user_data['user_type'] == UserTypes::PARTNER) {
        $is_approved = db_get_field('SELECT approved FROM ?:aff_partner_profiles WHERE user_id = ?i', $user_data['user_id']);
        if ($is_approved == UserStatuses::APPROVED) {
            $auth['is_affiliate'] = true;
        }
    }

    return true;
}

function fn_sd_affiliate_profile_fields_areas(&$areas)
{
    $areas['partner'] = 'affiliate';
}

function fn_sd_affiliate_get_order_info(&$order, &$additional_data)
{
    if (!empty($order['order_id'])) {
        $_aff_actions = fn_sd_affiliate_get_commissions($order['order_id']);
        if (!empty($_aff_actions)) {
            $order_info['affiliate']['commissions'] = $_aff_actions;
        }
        unset($_aff_actions);
    }
}

//
// Change referrer_partner_id from current user ID to his referrer_partner_id
//
function fn_sd_affiliate_delete_user(&$user_id)
{
    $referrer_partner_id = db_get_field('SELECT referrer_partner_id FROM ?:aff_partner_profiles WHERE user_id = ?i', $user_id);
    if ($referrer_partner_id !== false) {
        db_query('UPDATE ?:aff_partner_profiles SET ?u WHERE referrer_partner_id = ?i', array('referrer_partner_id' => $referrer_partner_id), $user_id);
    }

    db_query('DELETE FROM ?:aff_partner_profiles WHERE user_id = ?i', $user_id);
}

function fn_sd_affiliate_form_cart(&$order_info, &$cart)
{
    $_partner_data = db_get_field('SELECT data FROM ?:order_data WHERE order_id = ?i AND type = ?s', $order_info['order_id'], ORDER_DATA_AFFILIATE_INFO);
    if (!empty($_partner_data)) {
        $_partner_data = unserialize($_partner_data);
        if (!empty($_partner_data['partner_id'])) {
            $cart['affiliate']['partner_id'] = $_partner_data['partner_id'];
            $cart['affiliate']['code'] = fn_dec2any($cart['affiliate']['partner_id']);
            if ($partner_data = fn_get_partner_data($_partner_data['partner_id'])) {
                $cart['affiliate']['firstname'] = $partner_data['firstname'];
                $cart['affiliate']['lastname'] = $partner_data['lastname'];
            }
        }
    }
    $_paid_commissions = fn_sd_affiliate_get_commissions($order_info['order_id'], true);
    $cart['affiliate']['is_payouts'] = empty($_paid_commissions) ? 'N' : 'Y';
}

function fn_sd_affiliate_get_products_pre(&$params, &$items_per_page, &$lang_code)
{
    if (!empty($params['display']) && $params['display'] == 'affiliate') {
        $params['extend'][] = 'categories';
    }
}

function fn_sd_affiliate_get_products(&$params, &$fields, &$sortings, &$condition, &$join)
{
    if (!empty($params['display']) && $params['display'] == 'affiliate') {
        $plan_data = fn_get_affiliate_plan_data_by_partner_id($_SESSION['auth']['user_id']);

        if ($plan_data) {
            $condition .= db_quote(' AND (products.product_id IN (?n) OR ?:categories.category_id IN (?n)) ', array_keys($plan_data['product_ids']), array_keys($plan_data['category_ids']));
        }
    }
}

function fn_sd_affiliate_check_user_type(&$compatible_types)
{
    $compatible_types[UserTypes::CUSTUMER][] = UserTypes::PARTNER; // customer is compatible with affiliate
    $compatible_types[UserTypes::PARTNER][] = UserTypes::CUSTUMER; // affiliate is compatible with customer
}

function fn_sd_affiliate_user_need_login(&$types)
{
    $types[] = UserTypes::PARTNER;
}

function fn_sd_affiliate_change_order_status(&$status_to, &$status_from, &$order_info, &$force_notification, &$order_statuses)
{
    if (Registry::get('addons.sd_affiliate.automatic_approval_commissions') == 'Y') {
        $_commissions = fn_sd_affiliate_get_commissions($order_info['order_id']);
        if (!empty($_commissions)) {
            if ($order_statuses[$status_to]['params']['inventory'] == 'D' && substr_count(AffiliateStatuses::OPEN, $status_to) == 0 && ($order_statuses[$status_from]['params']['inventory'] != 'D' || substr_count(AffiliateStatuses::OPEN, $status_from) > 0)) {
                $approve = 'Y';
            } elseif (($order_statuses[$status_to]['params']['inventory'] != 'D' && substr_count(AffiliateStatuses::OPEN, $status_from) == 0 || substr_count(AffiliateStatuses::OPEN, $status_to) > 0) && $order_statuses[$status_from]['params']['inventory'] == 'D') {
                $approve = 'N';
            }
            if (!empty($approve)) {
                $amount = array();
                $_ids = array();
                foreach ($_commissions as $val) {
                    if ($val['payout_id'] == 0) {
                        if (empty($amount[$val['partner_id']])) {
                            $amount[$val['partner_id']] = floatval($val['amount']);
                        } else {
                            $amount[$val['partner_id']] += floatval($val['amount']);
                        }
                        $_ids[] = $val['action_id'];
                    }
                }
                foreach ($amount as $partner_id => $_amount) {
                    fn_update_partner_balance($partner_id, $_amount, $approve == 'Y' ? '+' : '-');
                }
                db_query('UPDATE ?:aff_partner_actions SET ?u WHERE action_id IN (?n)', array('approved' => $approve), $_ids);
            }
        }
    }
}

function fn_sd_affiliate_delete_order(&$order_id)
{
    $_commissions = fn_sd_affiliate_get_commissions($order_id);
    if (!empty($_commissions)) {
        foreach ($_commissions as $val) {
            if ($val['payout_id'] == 0) {
                if (Registry::get('addons.sd_affiliate.automatic_approval_commissions') != 'Y') {
                    fn_update_partner_balance($val['partner_id'], $val['amount'], '-');
                }
            } else {
                db_query('DELETE FROM ?:affiliate_payouts WHERE payout_id = ?i', $val['payout_id']);
            }
            db_query('DELETE FROM ?:aff_action_links WHERE action_id = ?i', $val['action_id']);
            db_query('DELETE FROM ?:aff_partner_actions WHERE action_id = ?i', $val['action_id']);
        }
    }
}

function fn_sd_affiliate_get_user_types(&$types)
{
    if (!fn_allowed_for('ULTIMATE')) {
        if (!Registry::get('runtime.company_id')) {
            $types[UserTypes::PARTNER] = 'add_affiliate';
        }
    }
    if (fn_allowed_for('ULTIMATE')) {
        $types[UserTypes::PARTNER] = 'add_affiliate';
    }
}

function fn_sd_affiliate_get_feedback_data(&$fdata)
{
    $fdata['general']['affiliate_plans'] = db_get_field('SELECT COUNT(*) FROM ?:affiliate_plans');
}

/**
 * Apply affiliate code to cart data.
 *
 * @param array $cart          Array of cart content and user information necessary for purchase
 * @param array $new_cart_data Array of new data for products, totals, discounts and etc. update
 * @param array $auth          Array of user authentication data (e.g. uid, usergroup_ids, etc.)
 *
 * @return bool Always true
 */
function fn_sd_affiliate_update_cart_by_data_post(&$cart, &$new_cart_data, &$auth)
{
    if (!empty($cart['order_id']) && $cart['affiliate']['is_payouts'] != 'Y') {
        $cart['affiliate']['code'] = empty($new_cart_data['affiliate_code']) ? '' : $new_cart_data['affiliate_code'];
        $_partner_id = fn_any2dec($cart['affiliate']['code']);
        $_partner_data = db_get_row("SELECT firstname, lastname, user_id as partner_id FROM ?:users WHERE user_id = ?i AND user_type = ?s", $_partner_id, UserTypes::PARTNER);
        if (!empty($_partner_data)) {
            $cart['affiliate'] = $_partner_data + $cart['affiliate'];
            $_SESSION['partner_data'] = array(
                'partner_id' => $cart['affiliate']['partner_id'],
                'is_payouts' => 'N',
            );
        } else {
            unset($cart['affiliate']['partner_id']);
            unset($cart['affiliate']['firstname']);
            unset($cart['affiliate']['lastname']);
            unset($_SESSION['partner_data']);
        }
    }

    return true;
}

/**
 * Init partner data.
 *
 * @param array $params       request parameters
 * @param int   $company_id   Current company identifier
 * @param array $company_data Current company data
 *
 * @return bool Always true
 */
function fn_sd_affiliate_init_company_data($params, $company_id, $company_data)
{
    if (!empty($_SESSION['partner_data']['partner_id'])) {
        fn_set_partner_cookie($_SESSION['partner_data']['partner_id']);
    }
}

function fn_sd_affiliate_ult_check_store_permission($params, &$object_type, &$object_name, &$table, &$key, &$key_id)
{
    if (Registry::get('runtime.controller') == 'banners_manager' && !empty($params['banner_id'])) {
        $key = 'banner_id';
        $key_id = $params[$key];
        $table = 'aff_banners';
        $object_name = fn_get_aff_banner_name($key_id, DESCR_SL);
        $object_type = __('banner');
    } elseif (Registry::get('runtime.controller') == 'affiliate_plans' && !empty($params['plan_id'])) {
        $key = 'plan_id';
        $key_id = $params[$key];
        $table = 'affiliate_plans';
        $object_name = fn_get_affiliate_plan_name($key_id, DESCR_SL);
        $object_type = __('plan');
    } elseif (Registry::get('runtime.controller') == 'product_groups' && !empty($params['group_id'])) {
        $key = 'group_id';
        $key_id = $params[$key];
        $table = 'aff_groups';
        $object_name = fn_get_group_name($key_id, DESCR_SL);
        $object_type = __('group');
    }
}

function fn_sd_affiliate_update_user_pre($user_id, &$user_data, $auth, $ship_to_another, $notify_user)
{
    if (!empty($_SESSION['partner_data']['partner_id'])) {
        $user_data['partner_id'] = $_SESSION['partner_data']['partner_id'];
    }
}

function fn_sd_affiliate_login_user_post($user_id, $cu_id, $udata, $auth, $condition, $result)
{
    if (!empty($udata['partner_id'])) {
        $_SESSION['partner_data']['partner_id'] = $udata['partner_id'];
    }
}

//
// Adding info about partner to Google Analytics data
// 
function fn_sd_affiliate_update_ga_orders_info(&$orders_info)
{
    foreach ($orders_info as $k => $order) {
        if ($order['user_id']) {
            $referrer = db_get_field('SELECT partner_id FROM ?:users WHERE user_id = ?i', $order['user_id']);
            $partner_data = db_get_row('SELECT firstname, lastname, user_id FROM ?:users WHERE user_id = ?i', $referrer);
            if ($partner_data) { 
                $partner_name = $partner_data['firstname'] . ' ' . $partner_data['lastname'];
                $partner_code = 'Partner №' . $partner_data['user_id'];
                $orders_info[$k]['ga_company_name'] = $partner_name . ' (' . $partner_code . ')';
            }
        } else {
            $partner = fn_get_partner_data($_SESSION['partner_data']['partner_id']);
            if ($partner) { 
                $partner_name = $partner['firstname'] . ' ' . $partner['lastname'];
                $partner_code = 'Partner №' . $partner['user_id'];
                $orders_info[$k]['ga_company_name'] = $partner_name . ' (' . $partner_code . ')';
            }
        }
    }
}
/* [/HOOKS] **/

function fn_sd_affiliate_user_exists($user_id)
{
    $user_exists = db_get_field('SELECT user_id FROM ?:users WHERE user_id = ?i', $user_id);
    $result = !empty($user_exists);
    return $result;
}
