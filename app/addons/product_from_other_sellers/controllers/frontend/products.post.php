<?php
 
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    return;
}

if ($mode == 'view') {
    $product = Registry::get('view')->getTemplateVars('product');
    if (!empty($product)) {
        $params = array(
            'mv_pcode' => $product['product_code'],
            'mv_pname' => $product['product']
        );
        list($products, $search) = fn_get_products($params);
        if ($search['total_items'] > 1) {
            fn_gather_additional_products_data($products, array(
                'get_icon' => true,
                'get_detailed' => true,
                'get_additional' => false,
                'get_options' => true,
                'get_discounts' => true,
                'get_features' => false
            ));
            $vendor_data = array();
            $min_price = TIME;
            foreach ($products as $p) {
                if (!empty($vendor_data[$p['company_id']])) {
                    $vendor_data[$p['company_id']]++;
                } else {
                    $vendor_data[$p['company_id']] = 1;
                }
                if (!empty($p['price']) && $p['price'] < $min_price) {
                    $min_price = $p['price'];
                }
            }

            $tabs = Registry::get('view')->getTemplateVars('tabs');
            foreach ($tabs as &$t) {
                if (!empty($t['html_id']) && $t['html_id'] == 'product_from_other_sellers') {
                    $t['name'] = count($vendor_data) . ' ' . __('companies') . ' ' . __('from') . ' ' . fn_format_price_by_currency($min_price);
                    Registry::set('navigation.tabs.' . $t['html_id'], array (
                        'title' => $t['name'],
                        'js' => true
                    ));
                    break;
                }
            }
            Registry::get('view')->assign('tabs', $tabs);
            Registry::get('view')->assign('seller_products', $products);
        }
    }
}