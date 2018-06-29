<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'sell') {
        $company_id = fn_get_runtime_company_id();
        if ((ACCOUNT_TYPE == 'vendor' || Registry::get('runtime.company_id')) && !empty($dispatch_extra) && isset($_REQUEST['products_data'][$dispatch_extra]['vendors'][$company_id]) && sd_MjYzOWJlNmMxMDM4ZmIxYzdlZGRkNzE1($company_id, 'enable_copy_products')) {
            $product_data                 = $_REQUEST['products_data'][$dispatch_extra]['vendors'][$company_id];
            $product_data['category_ids'] = sd_NjY5YTc3MzE4NGRiNmZjNmE3ZDc3NWFm($dispatch_extra);
            sd_MjljYTY2ZjFlNTMyMjBkMjUyNzQ2NTk4($dispatch_extra, $product_data);
            unset(Tygh::$app['session']['product_ids']);
            fn_set_notification('N', __('notice'), __('text_changes_saved'));

            return array(CONTROLLER_STATUS_REDIRECT, 'products.manage?show_mode=all');
        }
    }
    if ($mode == 'm_add') {
        $company_id = fn_get_runtime_company_id();
        if (!empty($_REQUEST['products_data']) && (ACCOUNT_TYPE == 'vendor' || ACCOUNT_TYPE == 'admin') && Registry::get('addons.sd_vendor_products_database.allow_vendors_create_products') == 'Y' && sd_MjYzOWJlNmMxMDM4ZmIxYzdlZGRkNzE1($company_id, 'enable_create_products')) {
            foreach ($_REQUEST['products_data'] as $product_key => $product_data) {
                $_POST['products_data'][$product_key]['created_by_vendor'] = 'Y';
            }
        }
    }
    if ($mode == 'm_update') {
        if (ACCOUNT_TYPE == 'vendor' || ACCOUNT_TYPE == 'admin') {
            if (!empty($_REQUEST['products_data'])) {
                sd_NjdhZTdkZjY4YzhkMDQ2NDQ2MGRmMTNl($_REQUEST['products_data']);
                unset($_REQUEST['redirect_url']);
            }

            return array(CONTROLLER_STATUS_REDIRECT, 'products.manage');
        }
    }
    if ($mode == 'm_override') {
        if (ACCOUNT_TYPE == 'vendor' || Registry::get('runtime.company_id')) {
            if (!empty(Tygh::$app['session']['product_ids'])) {
                $product_data = !empty($_REQUEST['override_products_data']) ? $_REQUEST['override_products_data'] : array();
                foreach (Tygh::$app['session']['product_ids'] as $product_id) {
                    sd_MjljYTY2ZjFlNTMyMjBkMjUyNzQ2NTk4($product_id, $product_data);
                }
                unset($_REQUEST['redirect_url']);
            }

            return array(CONTROLLER_STATUS_REDIRECT, 'products.m_update_vendor');
        }
    }
    if ($mode == 'delete') {
        if ((ACCOUNT_TYPE == 'vendor' || Registry::get('runtime.company_id')) && !empty($_REQUEST['product_id'])) {
            $delete_only_vendor_product = sd_OWQ2MzZhNWE5NzI3ODZkYzZkYmQwNzE1($_REQUEST['product_id']);
            $result                     = sd_MjQzZWUyOTJlYWM3ZTBjNTk3YzVmYWY3($_REQUEST['product_id']);
            if (!$delete_only_vendor_product) {
                if ($result) {
                    fn_set_notification('N', __('notice'), __('text_product_has_been_deleted'));
                } else {
                    return array(CONTROLLER_STATUS_REDIRECT, 'products.update?product_id=' . $_REQUEST['product_id']);
                }

                return array(CONTROLLER_STATUS_REDIRECT, 'products.manage');
            }
        }
    }
    if ($mode == 'm_delete') {
        if ((ACCOUNT_TYPE == 'vendor' || Registry::get('runtime.company_id')) && isset($_REQUEST['product_ids'])) {
            foreach ($_REQUEST['product_ids'] as $product_id) {
                sd_MjQzZWUyOTJlYWM3ZTBjNTk3YzVmYWY3($product_id);
            }
            unset(Tygh::$app['session']['product_ids']);
            fn_set_notification('N', __('notice'), __('text_products_have_been_deleted'));

            return array(CONTROLLER_STATUS_REDIRECT, 'products.manage');
        }
    }
    if ($mode == 'm_sell') {
        $company_id = fn_get_runtime_company_id();
        if ((ACCOUNT_TYPE == 'vendor' || Registry::get('runtime.company_id')) && isset($_REQUEST['product_ids']) && sd_MjYzOWJlNmMxMDM4ZmIxYzdlZGRkNzE1($company_id, 'enable_copy_products')) {
            sd_Y2EzMjVlNWZiNTEzMzAwMWIzYWYzNDgw($_REQUEST['products_data'], $_REQUEST['product_ids']);
            unset(Tygh::$app['session']['product_ids']);
            fn_set_notification('N', __('notice'), __('text_changes_saved'));

            return array(CONTROLLER_STATUS_REDIRECT, 'products.manage?show_mode=all');
        }
    }
    if ($mode == 'global_update') {
        if (!empty($_REQUEST['update_data'])) {
            sd_ZWIzN2Y5NmI4YWYzZDBjM2UxNTQxMTFl($_REQUEST['update_data']);

            return array(CONTROLLER_STATUS_REDIRECT, 'products.global_update');
        }
    }
    if ($mode == 'store_selection') {
        if (!empty($_REQUEST['product_ids']) && (ACCOUNT_TYPE == 'vendor' || Registry::get('runtime.company_id'))) {
            Tygh::$app['session']['product_ids']     = $_REQUEST['product_ids'];
            Tygh::$app['session']['selected_fields'] = $_REQUEST['selected_fields'];
            unset($_REQUEST['redirect_url']);

            return array(CONTROLLER_STATUS_REDIRECT, 'products.m_update_vendor');
        }
    }
    if ($mode == 'export_range') {
        if (!empty($_REQUEST['product_ids']) && (ACCOUNT_TYPE == 'vendor' || Registry::get('runtime.company_id'))) {
            if (empty(Tygh::$app['session']['export_ranges'])) {
                Tygh::$app['session']['export_ranges'] = array();
            }
            if (empty(Tygh::$app['session']['export_ranges']['products'])) {
                Tygh::$app['session']['export_ranges']['products'] = array('pattern_id' => 'products');
            }
            Tygh::$app['session']['export_ranges']['products']['data'] = array('product_id' => $_REQUEST['product_ids']);
            unset($_REQUEST['redirect_url']);

            return array(CONTROLLER_STATUS_REDIRECT, 'exim.export?section=products&pattern_id=' . Tygh::$app['session']['export_ranges']['products']['pattern_id']);
        }
    }



    if ($mode == 'vendors') {
        if (ACCOUNT_TYPE == 'vendor' || ACCOUNT_TYPE == 'admin') {
            if (!empty($_REQUEST['products_data'])) {
                sd_NjdhZTdkZjY4YzhkMDQ2NDQ2MGRmMTNl($_REQUEST['products_data']);
                unset($_REQUEST['redirect_url']);
            }

            return array(CONTROLLER_STATUS_REDIRECT, 'products.vendors?product_id=' . $_REQUEST['product_id']);
        }
    }

    return;
}
if ($mode == 'm_update_vendor') {
    if (empty(Tygh::$app['session']['product_ids']) || empty(Tygh::$app['session']['selected_fields']) || empty(Tygh::$app['session']['selected_fields']['object']) || Tygh::$app['session']['selected_fields']['object'] != 'product') {
        return array(CONTROLLER_STATUS_REDIRECT, 'products.manage');
    }
    $product_ids      = Tygh::$app['session']['product_ids'];
    $selected_fields  = Tygh::$app['session']['selected_fields'];
    $field_groups     = array('A' => array('product' => 'products_data'), 'B' => array('price' => 'products_data', 'amount' => 'products_data'));
    $data             = array_keys($selected_fields['data']);
    $fields2update    = $data;
    $product_features = array();
    $features_search  = array();
    foreach ($product_ids as $product_id) {
        $products_data[$product_id] = sd_MjlhOGVhYzJiMGM3ZmNhMDU4ODU2ZDc5($product_id);
    }
    $filled_groups = array();
    $field_names   = array();
    foreach ($fields2update as $k => $field) {
        if ($field == 'amount') {
            $desc = 'quantity';
        } else {
            $desc = $field;
        }
        if (!empty($field_groups['A'][$field])) {
            $filled_groups['A'][$field] = __($desc);
            continue;
        } else if (!empty($field_groups['B'][$field])) {
            $filled_groups['B'][$field] = __($desc);
            continue;
        }
        $field_names[$field] = __($desc);
    }
    ksort($filled_groups, SORT_STRING);
    Tygh::$app['view']->assign(array('field_groups' => $field_groups, 'filled_groups' => $filled_groups, 'field_names' => $field_names, 'products_data' => $products_data));
}
if ($mode == 'update' && ACCOUNT_TYPE == 'admin') {
    $company_id = sd_NTkxZmQ2NGJjMGE4ODAzZjFjNTJmOTNk($_REQUEST['product_id']);
    /*if (Registry::get('runtime.company_id') != $company_id) {
        return array(CONTROLLER_STATUS_REDIRECT, 'products.update&product_id=' . $_REQUEST['product_id'] . '&switch_company_id=' . $company_id);
    }*/
}
if ($mode == 'manage' && isset($_REQUEST['show_mode']) && !Registry::get('runtime.company_id')) {
    return array(CONTROLLER_STATUS_REDIRECT, 'products.manage');
}