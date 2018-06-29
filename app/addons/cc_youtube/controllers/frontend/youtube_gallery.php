<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'view') {
    if (!empty($_REQUEST['product_id'])) {
        $params = array(
            'page' => (isset($_REQUEST['page']) ? $_REQUEST['page'] : '1')
        );

        $product_data = fn_get_product_data(
            $_REQUEST['product_id'],
            $auth,
            CART_LANGUAGE,
            '',
            true,
            true,
            true,
            true,
            fn_is_preview_action($auth, $_REQUEST),
            true,
            false,
            true
        );

        if ((empty($_SESSION['current_category_id']) || empty($product_data['category_ids'][$_SESSION['current_category_id']])) && !empty($product_data['main_category'])) {
            if (!empty($_SESSION['breadcrumb_category_id']) && in_array($_SESSION['breadcrumb_category_id'], $product_data['category_ids'])) {
                $_SESSION['current_category_id'] = $_SESSION['breadcrumb_category_id'];
            } else {
                $_SESSION['current_category_id'] = $product_data['main_category'];
            }
        }

        if (!empty($product_data['meta_description']) || !empty($product_data['meta_keywords'])) {
            Registry::get('view')->assign('meta_description', $product_data['meta_description']);
            Registry::get('view')->assign('meta_keywords', $product_data['meta_keywords']);

        } else {
            $meta_tags = db_get_row(
                'SELECT meta_description, meta_keywords'
                . ' FROM ?:category_descriptions'
                . ' WHERE category_id = ?i AND lang_code = ?s',
                $_SESSION['current_category_id'], CART_LANGUAGE
            );
            if (!empty($meta_tags)) {
                Registry::get('view')->assign('meta_description', $meta_tags['meta_description']);
                Registry::get('view')->assign('meta_keywords', $meta_tags['meta_keywords']);
            }
        }

        fn_add_breadcrumb(__('video_gallery'), 'youtube_gallery.view');

        fn_add_breadcrumb($product_data['product']);

        if (!empty($_REQUEST['combination'])) {
            $product_data['combination'] = $_REQUEST['combination'];
        }

        fn_gather_additional_product_data($product_data, true, true);

        Registry::get('view')->assign('play_video_product_data', $product_data);
        Registry::get('view')->assign('dont_show_points', true);

    } else {
        fn_add_breadcrumb(__('video_gallery'));
    }

    $_statuses = array('A', 'H');
    $_condition = fn_get_localizations_condition('localization', true);
    $preview = fn_is_preview_action($auth, $_REQUEST);

    if (!$preview) {
        $_condition .= ' AND (' . fn_find_array_in_set($auth['usergroup_ids'], 'usergroup_ids', true) . ')';
        $_condition .= db_quote(' AND status IN (?a)', $_statuses);
    }

    if (fn_allowed_for('ULTIMATE')) {
        $_condition .= fn_get_company_condition('?:products.company_id');
    }

    $video_exists = db_get_array(
        'SELECT product_id, youtube_link'
        .' FROM ?:products'
        .' WHERE'
            .' youtube_link != ?s'
            .' AND 1 ?p'
        , '', $_condition
    );

    if (!empty($video_exists)) {

        // Save current url to session for 'Continue shopping' button
        $_SESSION['continue_url'] = 'youtube_gallery.view';

        $params = $_REQUEST;

        if ($items_per_page = fn_change_session_param($_SESSION, $_REQUEST, 'items_per_page')) {
            $params['items_per_page'] = $items_per_page;
        }
        if ($sort_by = fn_change_session_param($_SESSION, $_REQUEST, 'sort_by')) {
            $params['sort_by'] = $sort_by;
        }
        if ($sort_order = fn_change_session_param($_SESSION, $_REQUEST, 'sort_order')) {
            $params['sort_order'] = $sort_order;
        }

        $params['with_video'] = true;

        list($products, $search) = fn_get_products($params, Registry::get('settings.Appearance.products_per_page'), CART_LANGUAGE);

        if (isset($search['page']) && ($search['page'] > 1) && empty($products)) {
            return array(CONTROLLER_STATUS_NO_PAGE);
        }

        fn_gather_additional_products_data($products, array(
            'get_icon' => true,
            'get_detailed' => true,
            'get_additional' => true,
            'get_options' => true,
            'get_discounts' => true,
            'get_features' => false
        ));

        $show_no_products_block = (!empty($params['features_hash']) && !$products);
        if ($show_no_products_block && defined('AJAX_REQUEST')) {
            fn_filters_not_found_notification();
            exit;
        }

        Registry::get('view')->assign('show_no_products_block', $show_no_products_block);

        foreach ($products as &$product) {
            if (!empty($product['image_pairs'])) {
                unset($product['image_pairs']);
            }
        }

        $selected_layout = fn_get_products_layout($_REQUEST);

        Registry::get('view')->assign('show_video_ico', true);
        Registry::get('view')->assign('show_qty', true);
        Registry::get('view')->assign('products', $products);
        Registry::get('view')->assign('search', $search);
        Registry::get('view')->assign('selected_layout', $selected_layout);

    } else {
        return array(CONTROLLER_STATUS_NO_PAGE);
    }
}