<?php

use Tygh\Registry;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    return;
}

if ($mode == 'products') {
    if (!empty($_REQUEST['company_id'])) {
        $products = Registry::get('view')->getTemplateVars('products');
        if (!empty($products)) {
            foreach ($products as $key => $value) {
                /*$isset_vendor_product_data = db_get_row("SELECT * FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", Registry::get('runtime.vendor_company_id'), $value['product_id']);
                
                if (!empty($isset_vendor_product_data)) {
                    if ($isset_vendor_product_data['price'] == 0) {
                        $products[$key]['price'] = db_get_field("SELECT price FROM ?:product_prices WHERE product_id = ?i", $value['product_id']);
                    } else {
                        $products[$key]['price'] = $isset_vendor_product_data['price'];
                    }
                    $products[$key]['amount'] = $isset_vendor_product_data['amount'];
                } else {*/
                    $products[$key]['price'] = db_get_field("SELECT price FROM ?:product_prices WHERE company_id = ?i AND product_id = ?i", Registry::get('runtime.vendor_company_id'), $value['product_id']);
                    $products[$key]['amount'] = db_get_field("SELECT amount FROM ?:product_vendor_sell WHERE company_id = ?i AND product_id = ?i", Registry::get('runtime.vendor_company_id'), $value['product_id']);
                /*}*/
            }
        } 
        Registry::get('view')->assign('products', $products);
    }
}