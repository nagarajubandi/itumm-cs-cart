<?php

use Tygh\Registry;
use Tygh\Enum\BannerLinkTypes;
use Tygh\Enum\BannerTypes;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
    fn_trusted_vars('banner', 'banners_data');
    $suffix = '';

    if ($mode == 'm_delete') {
        if (!empty($_REQUEST['banner_ids'])) {
            $deleted_banners_names = array();
            $undeleted_banners_names = array();
            foreach ($_REQUEST['banner_ids'] as $banner_id) {
                if (fn_allowed_for('ULTIMATE')) {
                    if (Registry::get('runtime.company_id')) {
                        $banner_company_id = db_get_field('SELECT company_id FROM ?:aff_banners WHERE banner_id = ?i', $banner_id);
                        if ($banner_company_id != Registry::get('runtime.company_id')) {
                            $banner_id = 0;
                        }
                    } else {
                        //admin should select store before be will be able to delete banner
                        $banner_id = 0;
                    }
                }

                $banner_name = fn_get_aff_banner_name($banner_id, DESCR_SL);
                if (fn_delete_banner($banner_id)) {
                    $deleted_banners_names[] = $banner_name;
                } else {
                    $undeleted_banners_names[] = $banner_name;
                }
            }
            if (!empty($deleted_banners_names)) {
                $banners_names = '&nbsp;-&nbsp;' . implode('<br />&nbsp;-&nbsp;', $deleted_banners_names);
                fn_set_notification('N', __('information'), __('deleted_banners') . ':<br />' . $banners_names);
            }
            if (!empty($undeleted_banners_names)) {
                $banners_names = '&nbsp;-&nbsp;' . implode('<br />&nbsp;-&nbsp;', $undeleted_banners_names);
                fn_set_notification('W', __('warning'), __('undeleted_banners') . ':<br />' . $banners_names);
            }
        } else {
            fn_set_notification('E', __('error'), __('error_no_data'));
        }
        $suffix = ".manage?banner_type=$_REQUEST[banner_type]&link_to=$_REQUEST[link_to]";
    }

    if ($mode == 'm_update') {
        if (!empty($_REQUEST['banners_data']) && is_array($_REQUEST['banners_data'])) {
            $banners_data = $_REQUEST['banners_data'];
            foreach ($banners_data as $banner_id => $b_data) {
                if (fn_allowed_for('ULTIMATE')) {
                    if (Registry::get('runtime.company_id')) {
                        $banner_company_id = db_get_field('SELECT company_id FROM ?:aff_banners WHERE banner_id = ?i', $banner_id);
                        $b_data['company_id'] = !empty($banner_company_id) ? $banner_company_id : Registry::get('runtime.company_id');
                    }
                }

                db_query('UPDATE ?:aff_banners SET ?u WHERE banner_id = ?i', $b_data, $banner_id);
            }
        }

        $suffix = ".manage?banner_type=$_REQUEST[banner_type]&link_to=$_REQUEST[link_to]";
    }

    if ($mode == 'update') {
        $banner_id = fn_update_banner($_REQUEST['banner'], $_REQUEST['banner_id'], DESCR_SL);
        if ($banner_id === false) {
            fn_set_notification('E', __('error'), __('aff_cant_create_banner'));

            return array(CONTROLLER_STATUS_REDIRECT, 'banners_manager.manage?banner_type=T');
        }

        $suffix = ".update?banner_id=$banner_id&banner_type=" . $_REQUEST['banner']['type'] . '&link_to=' . $_REQUEST['banner']['link_to'];

        if (!empty($_REQUEST['return_to_list'])) {
            // rewrite redirect_url to set correct link_to parameter from request data
            $_REQUEST['redirect_url'] = 'banners_manager.manage?banner_type=' . $_REQUEST['banner']['type'] . '&link_to=' . $_REQUEST['banner']['link_to'];
        }
    }

    return array(CONTROLLER_STATUS_OK, "banners_manager$suffix");
}

if ($mode == 'update') {
    $banner = fn_get_aff_banner_data($_REQUEST['banner_id'], DESCR_SL);

    if (fn_allowed_for('ULTIMATE')) {
        if (Registry::get('runtime.company_id') && $banner['company_id'] != Registry::get('runtime.company_id')) {
            unset($banner);
        }
    }

    if (empty($banner)) {
        return array(CONTROLLER_STATUS_NO_PAGE);
    }

    if ($banner['type'] != BannerTypes::GRAPHICS) {
        $banner['code'] = fn_get_aff_banner_html('js', $banner, '', '', DESCR_SL);
    }

    if ($banner['link_to'] == BannerLinkTypes::PRODUCT_GROUPS) {
        Registry::get('view')->assign('all_groups_list', fn_get_groups_list(false, DESCR_SL));
    }

    Registry::get('view')->assign(array(
        'banner' => $banner,
        'banner_type' => $banner['type'],
        'link_to' => $banner['link_to']
    ));

} elseif ($mode == 'add') {
    $banner_type = empty($_REQUEST['banner_type']) ? BannerTypes::TEXT : $_REQUEST['banner_type'];
    $link_to = empty($_REQUEST['link_to']) ? BannerLinkTypes::PRODUCT_GROUPS : $_REQUEST['link_to'];

    if ($link_to == BannerLinkTypes::PRODUCT_GROUPS) {
        Registry::get('view')->assign('all_groups_list', fn_get_groups_list(true, DESCR_SL));
    }
    Registry::get('view')->assign(array(
        'banner_type' => $banner_type,
        'link_to' => $link_to
    ));
} elseif ($mode == 'manage') {
    $banner_type = empty($_REQUEST['banner_type']) ? BannerTypes::TEXT : $_REQUEST['banner_type'];
    $link_to = empty($_REQUEST['link_to']) ? ($banner_type == BannerTypes::PRODUCTS ? BannerLinkTypes::URL : BannerLinkTypes::PRODUCT_GROUPS) : $_REQUEST['link_to'];
    $link_types = fn_get_aff_banner_link_types($banner_type);

    // [Page sections]
    $navigation_tabs = array();
    foreach ($link_types as $link_type => $title) {
        $navigation_tabs[$link_type] = array(
            'title' => $title,
            'href' => "banners_manager.manage?banner_type=$banner_type&link_to=$link_type",
            'ajax' => true,
        );
    }

    Registry::set('navigation.tabs', $navigation_tabs);
    // [/Page sections]

    $banners = fn_get_aff_banners($banner_type, $link_to, false, DESCR_SL);
    Registry::get('view')->assign(array(
        'banners' => $banners,
        'link_types' => $link_types,
        'banner_type' => $banner_type,
        'link_to' => $link_to
    ));

    if ($link_to == BannerLinkTypes::PRODUCT_GROUPS) {
        $all_groups_list = fn_get_groups_list(true, DESCR_SL);
        Registry::get('view')->assign('all_groups_list', $all_groups_list);
    }

    Registry::set('navigation.dynamic.sections', array(
        BannerTypes::TEXT => array(
            'title' => __('text_banners'),
            'href' => 'banners_manager.manage?banner_type=T',
        ),
        BannerTypes::GRAPHICS => array(
            'title' => __('graphic_banners'),
            'href' => 'banners_manager.manage?banner_type=G',
        ),
        BannerTypes::PRODUCTS => array(
            'title' => __('product_banners'),
            'href' => 'banners_manager.manage?banner_type=P',
        ),
    ));
    Registry::set('navigation.dynamic.active_section', $banner_type);
} elseif ($mode == 'delete') {
    if (!empty($_REQUEST['banner_id'])) {
        fn_delete_banner($_REQUEST['banner_id']);
        fn_set_notification('N', __('information'), __('banner_deleted'));
    } else {
        fn_set_notification('E', __('error'), __('error_no_data'));
    }

    return array(CONTROLLER_STATUS_REDIRECT, "banners_manager.manage?banner_type=$_REQUEST[banner_type]&link_to=$_REQUEST[link_to]");
}

//
// Delete a banner
//
function fn_delete_banner($banner_id)
{
    if (empty($banner_id)) {
        return false;
    }

    $banner_type = db_get_field('SELECT type FROM ?:aff_banners WHERE banner_id = ?i', $banner_id);
    db_query('DELETE FROM ?:aff_banner_descriptions WHERE banner_id = ?i', $banner_id);
    db_query('DELETE FROM ?:aff_banners WHERE banner_id = ?i', $banner_id);

    if ($banner_type == BannerTypes::GRAPHICS) {
        fn_delete_image_pairs($banner_id, 'common', 'aff_images');
    }

    return true;
}

//
// Update a banner
//
function fn_update_banner($data, $banner_id, $lang_code = DESCR_SL)
{
    if (!empty($data['width'])) {
        $data['width'] = abs(intval($data['width']));
    }

    if (!empty($data['height'])) {
        $data['height'] = abs(intval($data['height']));
    }

    if ($data['type'] == BannerTypes::PRODUCTS) {
        $data['data'] = serialize($data['data']);
    }


    if (fn_allowed_for('ULTIMATE')) {
        if (Registry::get('runtime.company_id')) {
            $data['company_id'] = Registry::get('runtime.company_id');
            if (!empty($banner_id)) {
                $banner_company_id = db_get_field('SELECT company_id FROM ?:aff_banners WHERE banner_id = ?i', $banner_id);
                if ($banner_company_id != $data['company_id']) {
                    return false;
                }
            }
            //Check if selected group_id belongs to current company
            if ($data['link_to'] == BannerLinkTypes::PRODUCT_GROUPS && !empty($data['data'])) {
                $group_company_id = db_get_field('SELECT company_id FROM ?:aff_groups WHERE group_id = ?i', $data['data']);
                if ($data['company_id'] != $group_company_id) {
                    $data['data'] = 0;
                }
            }
        } else {
            return false;
        }
    }

    if (!empty($banner_id)) {
        db_query('UPDATE ?:aff_banners SET ?u WHERE banner_id = ?i', $data, $banner_id);
        db_query('UPDATE ?:aff_banner_descriptions SET ?u WHERE banner_id = ?i AND lang_code = ?s', $data, $banner_id, $lang_code);
    } else {
        $banner_id = $data['banner_id'] = db_query('INSERT INTO ?:aff_banners ?e', $data);

        foreach (fn_get_translation_languages() as $data['lang_code'] => $v) {
            db_query('INSERT INTO ?:aff_banner_descriptions ?e', $data);
        }
    }

    if ($data['type'] == BannerTypes::GRAPHICS) {
        // Adding banner images pair
        fn_attach_image_pairs('banner', 'aff_images', $banner_id, $lang_code);
    }

    return $banner_id;
}
