<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

//
// View product details
//
if (!empty($_REQUEST['product_id'])) {
    $product = fn_get_product_data($_REQUEST['product_id'], $auth, CART_LANGUAGE);

    if (empty($product)) {
        return array(CONTROLLER_STATUS_NO_PAGE);
    }

    fn_gather_additional_product_data($product, true, true);

    Registry::get('view')->assign('product', $product);
    Registry::get('view')->display('addons/sd_affiliate/views/banner_products/view.tpl');
    exit;
}
