<?php

use Tygh\Registry;

if ($mode == 'view') {

    $product = Registry::get('view')->getTemplateVars('product');

    if (empty($product['vendor_id']) && isset($product['vendors_products']) && count($product['vendors_products']) > 1) {

        $vednor_ids = array_keys($product['vendors_products']);
        $random_vendor = rand(0, (count($vednor_ids) - 1));

        $product['vendor_id'] = $vednor_ids[$random_vendor];

        if ($product['vendor_id'] != $product['company_id']) {
            $vendor_product = $product['vendor_id'];
            Registry::set('runtime.for_vendor', $product['vendor_id']);
            $product = fn_get_product_data($product['product_id'], $_SESSION['auth']);
            Registry::set('runtime.for_vendor', 0);
            $product['extra']['vendor_product'] = $vendor_product;
            fn_gather_additional_product_data($product, true, true, true, true, true);

        }

        Registry::get('view')->assign('product', $product);

    }
} elseif ($mode == '') {
    
}