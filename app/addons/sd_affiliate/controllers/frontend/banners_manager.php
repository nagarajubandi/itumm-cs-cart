<?php

use Tygh\Registry;
use Tygh\Enum\BannerLinkTypes;
use Tygh\Enum\BannerTypes;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$_SESSION['banner_product_ids'] = empty($_SESSION['banner_product_ids']) ? array() : $_SESSION['banner_product_ids'];
$banner_product_ids = & $_SESSION['banner_product_ids'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'do_add_linked') {
        if (!empty($_REQUEST['banner_id']) && !empty($_REQUEST['product_data'])) {
            $add_products_ids = array_keys($_REQUEST['product_data']);
            $banner_product_ids[$_REQUEST['banner_id']] = array_unique(fn_array_merge($banner_product_ids[$_REQUEST['banner_id']], $add_products_ids, false));
            $_suffix = '?banner_id=' . $_REQUEST['banner_id'];
        }
    }

    if ($mode == 'do_delete_linked') {
        if (!empty($_REQUEST['banner_id']) && !empty($_REQUEST['delete'])) {
            $banner_product_ids[$_REQUEST['banner_id']] = array_unique(array_diff($banner_product_ids[$_REQUEST['banner_id']], $_REQUEST['delete']));
            $_suffix = '?banner_id=' . $_REQUEST['banner_id'];
        }
    }

    return array(CONTROLLER_STATUS_OK, "banners_manager.select_product$_suffix");
}

if ($mode == 'select_product' && !empty($_REQUEST['banner_id'])) {
    if (!empty($_REQUEST['banner_id']) && !isset($banner_product_ids[$_REQUEST['banner_id']])) {
        $banner_product_ids = array($_REQUEST['banner_id'] => array());
    }

    $banner_data = fn_get_aff_banner_data($_REQUEST['banner_id'], CART_LANGUAGE, true);
    $banner_data['product_ids'] = implode('-', $banner_product_ids[$_REQUEST['banner_id']]);
    $banner_data['example'] = fn_get_aff_banner_html('js', $banner_data);
    $banner_data['code'] = fn_get_aff_banner_html('js', $banner_data, '', $auth['user_id']);
    $banner_data['url'] = fn_get_aff_banner_url($banner_data, $auth['user_id']);
    $banner_data['url_without_id'] = fn_get_aff_banner_url_without_id($banner_data, $auth['user_id']); // FleAffair change

    // [Breadcrumbs]
    fn_add_breadcrumb(__('product_banners'), 'banners_manager.manage?banner_type=P');
    fn_add_breadcrumb($banner_data['title']);
    // [/Breadcrumbs]

    $linked_products = array();
    foreach ($banner_product_ids[$_REQUEST['banner_id']] as $prod_id) {
        $linked_products[$prod_id] = fn_get_product_data($prod_id, $auth);
        $linked_products[$prod_id]['url'] = "$banner_data[url]&product_id=$prod_id";
    }

    Registry::get('view')->assign(array(
        'banner_id' => $banner_data['banner_id'],
        'banner' => $banner_data,
        'linked_products' => $linked_products
    ));

} else {
    // [Page sections]
    if ($_REQUEST['banner_type'] != BannerTypes::PRODUCTS) {
        foreach (array('groups' => 'product_groups', 'categories' => 'categories', 'products' => 'products', 'url' => 'url') as $k => $v) {
            Registry::set('navigation.tabs.' . $k, array (
                'title' => __($v),
                'href' => "banners_manager.manage?banner_type=$_REQUEST[banner_type]&selected_section=$k"
            ));
        }
    }
    // [/Page sections]

    $banners = array();

    $selected_section = empty($_REQUEST['selected_section']) ? ($_REQUEST['banner_type'] == BannerTypes::PRODUCTS ? 'url': 'groups') : $_REQUEST['selected_section'];

    if ($selected_section == 'groups') {
        // [Groups banners]
        $all_groups_list = fn_get_groups_list();
        Registry::get('view')->assign('all_groups_list', $all_groups_list);

        $banners['groups'] = fn_get_aff_banners($_REQUEST['banner_type'], BannerTypes::GRAPHICS, true);
        if (!empty($banners['groups'])) {
            foreach ($banners['groups'] as $k => $banner) {
                if (empty($banner['group_name'])) {
                    unset($banners['groups'][$k]);
                    continue;
                }
                $banners['groups'][$k]['groups'] = fn_get_group_data($banner['group_id']);
                if ($banners['groups'][$k]['groups']['status'] == 'D') {
                    unset($banners['groups'][$k]);
                    continue;
                }
                if (!empty($banners['groups'][$k]['groups']['product_ids'])) {
                    $banners['groups'][$k]['groups']['products'] = fn_get_product_name($banners['groups'][$k]['groups']['product_ids']);
                }
            }
        }
        // [/Groups banners]
    }
    if ($selected_section == 'categories') {
        // [Categoties banners]
        $all_categories_list = fn_get_plain_categories_tree(0, false);
        Registry::get('view')->assign('all_categories_list', $all_categories_list);

        $banners['categories'] = fn_get_aff_banners($_REQUEST['banner_type'], BannerLinkTypes::CATEGORIES, true);
        // [/Categoties banners]
    }
    if ($selected_section == 'products') {
        // [Products banners]
        $banners['products'] = fn_get_aff_banners($_REQUEST['banner_type'], BannerLinkTypes::PRODUCTS, true);
        // [/Products banners]
    }
    if ($selected_section == 'url') {
        // [Products banners]
        $banners['url'] = fn_get_aff_banners($_REQUEST['banner_type'], BannerLinkTypes::URL, true);
        // [/Products banners]
    }

    $js_banners = array();
    foreach ($banners as $_key => $bans) {
        if (!empty($bans)) {
            foreach ($bans as $__key => $ban) {
                $js_banners[$ban['banner_id']]['example'] = fn_get_aff_banner_html('js', $ban);
                $js_banners[$ban['banner_id']]['code'] = fn_get_aff_banner_html('js', $ban, '', $auth['user_id']);
                if ($_REQUEST['banner_type'] == BannerTypes::GRAPHICS) {
                    $image_data = fn_get_aff_banner_image_data($ban['banner_id'], 'icon');
                    if (!empty($image_data)) {
                        $banners[$_key][$__key] = fn_array_merge($ban, $image_data);
                    }
                }
                $js_banners[$ban['banner_id']]['link_url'] = $ban['url'] . '?aff_id=' . $_SESSION['partner_data']['partner_id']; // FleAffair change
                if ($_REQUEST['banner_type'] != BannerTypes::PRODUCTS) {
                    $js_banners[$ban['banner_id']]['url'] = fn_get_aff_banner_url($ban, $auth['user_id']);
                }
            }
        }
    }

    fn_add_breadcrumb(__('affiliates_partnership'));

    if ($_REQUEST['banner_type'] == BannerTypes::GRAPHICS) {
        Registry::get('view')->assign('mainbox_title', __('graphic_banners'));
    } elseif ($_REQUEST['banner_type'] == BannerTypes::PRODUCTS) {
        Registry::get('view')->assign('mainbox_title', __('product_banners'));
    } else {
        Registry::get('view')->assign('mainbox_title', __('text_banners'));
    }
    Registry::get('view')->assign(array(
        'selected_section' => $selected_section,
        'banners' => $banners,
        'js_banners' => $js_banners
    ));
}

/** /Body **/
