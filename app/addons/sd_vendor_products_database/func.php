<?php
if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

use Tygh\Registry;
use Tygh\Enum\ProductTracking;
use Tygh\Mailer;
use Tygh\Models\VendorPlan;

function fn_sd_vendor_products_database_get_products($params, &$fields, $sortings, &$condition, &$join, $sorting, $group_by, $lang_code, $having)
{
    $fields['created_by_vendor'] = 'products.created_by_vendor';
    $company_id                  = (!empty($params['company_id'])) ? $params['company_id'] : Registry::get('runtime.company_id');
    if (!empty($company_id)) {
        $addon_settings = Registry::get('addons.sd_vendor_products_database');
        $condition      = str_replace(" AND products.company_id = $company_id", '', $condition);
        if (empty($params['show_mode'])) {
            $join      .= db_quote(' INNER JOIN ?:product_vendor_sell as vendor_sell ON vendor_sell.product_id = products.product_id');
            $condition .= db_quote(' AND vendor_sell.company_id = ?i ', $company_id);
        } else {
            $plan = VendorPlan::model()->find(array('company_id' => $company_id));
            if ($plan && $plan->category_ids) {
                $condition .= db_quote(' AND (products.company_id = ?i OR ?:categories.category_id IN (?n))', $company_id, $plan->category_ids);
            }
            if(AREA == 'C'){
                $join      .= db_quote(' LEFT JOIN ?:product_vendor_sell as vendor_sell ON vendor_sell.product_id = products.product_id AND vendor_sell.company_id = ?i AND vendor_sell.status = ?s', $company_id, 'A');
            } else {
                $join      .= db_quote(' LEFT JOIN ?:product_vendor_sell as vendor_sell ON vendor_sell.product_id = products.product_id AND vendor_sell.company_id = ?i', $company_id);
            }
            $condition .= db_quote(' AND IF (vendor_sell.company_id, vendor_sell.company_id != ?i, 1)', $company_id);
            if ($addon_settings['allow_vendors_create_products'] == 'Y' && $addon_settings['share_vendor_products'] == 'N') {
                $condition .= db_quote(' AND products.created_by_vendor = ?s', 'N');
            }
            $condition .= db_quote(' AND (products.company_id = ?i OR products.allow_sharing = ?s)', $company_id, 'Y');
        }
        if (AREA == 'A' && (isset($params['price_to']) || isset($params['price_from'])) && empty($params['show_mode'])) {
            $condition = str_replace(' AND prices_2.price IS NULL', '', $condition);
            $condition .= db_quote(' AND prices.company_id = ?i ', $company_id);
        }
    }
}

function fn_sd_vendor_products_database_update_product_pre($product_data, $product_id, $lang_code, $can_update)
{
    if (AREA == 'A' && ACCOUNT_TYPE != 'vendor' && !empty($product_id)) {
        $product_prices = db_get_array('SELECT * FROM ?:product_prices WHERE product_id = ?i', $product_id);
        if (!empty($product_prices)) {
            Registry::set('vendor_product_prices', $product_prices);
        }
    }
}

function fn_sd_vendor_products_database_update_product_count_post($category_ids)
{
    if (!empty($category_ids)) {
        sd_OTQyM2Y2MmU5ZGM0OTc5MWE5NTlkZTM2($category_ids);
    }
}

function sd_OTQyM2Y2MmU5ZGM0OTc5MWE5NTlkZTM2($category_ids = array())
{
    $company_id = fn_get_runtime_company_id();
    $condition  = '1=1';
    if (!empty($category_ids)) {
        $condition .= db_quote(' AND category_id IN (?n)', $category_ids);
    }
    db_query('DELETE FROM ?:category_vendor_product_count WHERE ?p AND company_id = ?i', $condition, $company_id);
    db_query('INSERT INTO ?:category_vendor_product_count (company_id, category_id, product_count)' . ' SELECT ?i, c.category_id, COUNT(product_id) FROM ?:products_categories c' . ' INNER JOIN ?:products p USING (product_id)' . ' INNER JOIN ?:product_vendor_sell as vendor_sell USING (product_id)' . ' WHERE ?p AND vendor_sell.company_id = ?i' . ' GROUP BY c.category_id', $company_id, $condition, $company_id);
}

function sd_NjdhZTdkZjY4YzhkMDQ2NDQ2MGRmMTNl($products_data)
{
    if ($products_data) {
        $company_id = Registry::get('runtime.company_id');
        foreach ($products_data as $id => $product) {
            if (!empty($product['vendors'][$company_id])) {
                sd_MjljYTY2ZjFlNTMyMjBkMjUyNzQ2NTk4($id, $product['vendors'][$company_id]);
            } else if(isset($product['vendors']) && !empty($product['vendors'])){
                foreach($product['vendors'] as $company_id => $productVendors ){
                    $productVendors['company_id'] = $company_id;
                    //fn_print_die($productVendors);
                    sd_MjljYTY2ZjFlNTMyMjBkMjUyNzQ2NTk4($id, $productVendors);
                }
            } else if (!empty($product)) {
                fn_print_die($product);
                sd_MjljYTY2ZjFlNTMyMjBkMjUyNzQ2NTk4($id, $product);
            }
        }
    }

    return true;
}

function sd_Y2EzMjVlNWZiNTEzMzAwMWIzYWYzNDgw($products_data, $product_ids)
{
    if ($products_data && $product_ids) {
        $company_id = Registry::get('runtime.company_id');
        foreach ($product_ids as $id) {
            if (!empty($products_data[$id]['vendors'][$company_id])) {
                sd_MjljYTY2ZjFlNTMyMjBkMjUyNzQ2NTk4($id, $products_data[$id]['vendors'][$company_id]);
            }
        }
    }

    return true;
}

function sd_Y2ExY2NiMDYxYWIzZTdkNTlmMDA1ZTMy($company_id, $product_id)
{
    return db_get_field('SELECT product_vendor_sell_id FROM ?:product_vendor_sell WHERE company_id = ?i AND product_id = ?i', $company_id, $product_id);
}

function sd_YzUwMDEzYjkxZDMxNTA5NzJkYTExODc5($company_id, $product_id)
{
    return db_get_field('SELECT amount FROM ?:product_vendor_sell WHERE company_id = ?i AND product_id = ?i', $company_id, $product_id);
}

function sd_MjljYTY2ZjFlNTMyMjBkMjUyNzQ2NTk4($product_id, $product_data)
{
    if (empty($product_data['company_id'])) {
        $product_data['company_id'] = fn_get_runtime_company_id();
    }
   // fn_print_r($product_id);
    /*if (!sd_Y2E2MDI5ODRjNThiMjJkODQ2OTkzM2Zm($product_id)) {
        return false;
    }*/
    //fn_print_die($product_data);
    if (!empty($product_data) && !empty($product_id)) {
        $product_data['product_id'] = $product_id;
        $product_vendor_sell_id     = sd_Y2ExY2NiMDYxYWIzZTdkNTlmMDA1ZTMy($product_data['company_id'], $product_id);
        if (!empty($product_vendor_sell_id)) {
            db_query('UPDATE ?:product_vendor_sell SET ?u WHERE company_id = ?i AND product_id = ?i', $product_data, $product_data['company_id'], $product_id);
        } else {
            $product_data['product_vendor_sell_id'] = $product_vendor_sell_id = db_query('INSERT INTO ?:product_vendor_sell ?e', $product_data);
        }
        if (isset($product_data['amount'])) {
            sd_OGNhNWY2ZTU2YjZmYWY5ZGVjNGI5NTlh($product_id, $product_data);
        }
        if (!isset($product_data['category_ids'])) {
            $category_ids = sd_NjY5YTc3MzE4NGRiNmZjNmE3ZDc3NWFm($product_id);
        } else {
            $category_ids = $product_data['category_ids'];
        }
        if ($category_ids) {
            sd_OTQyM2Y2MmU5ZGM0OTc5MWE5NTlkZTM2($category_ids);
        }
        if (isset($product_data['price'])) {
            sd_OWRkZmM5NGVjMTc2YTQ0YzU0MWFlNjQx(array('product_id' => $product_id, 'price' => $product_data['price'], 'company_id' => $product_data['company_id']));
        }
    }

    return $product_vendor_sell_id;
}

function sd_MWQyY2NmOGU4NDZiZjEyNzRhNmNjYTQy($product_id, $root = true)
{
    if (empty($product_id)) {
        return false;
    }
    $company_id   = fn_get_runtime_company_id();
    $product_data = db_get_row('SELECT allow_sharing, company_id FROM ?:products WHERE product_id = ?i', $product_id);
    $owner        = false;
    if ($product_data && $company_id) {
        $owner = $company_id == $product_data['company_id'];
    } else if ($root && ACCOUNT_TYPE == 'admin' && empty($company_id)) {
        $owner = true;
    }

    return $owner;
}

function sd_Y2E2MDI5ODRjNThiMjJkODQ2OTkzM2Zm($product_id)
{
    if (empty($product_id)) {
        return true;
    }
    $company_id   = fn_get_runtime_company_id();
    $product_data = db_get_row('SELECT allow_sharing, company_id FROM ?:products WHERE product_id = ?i', $product_id);
    if ($product_data && $company_id && ($product_data['allow_sharing'] == 'Y' || $company_id == $product_data['company_id'])) {
        return true;
    }

    return false;
}

function sd_ZWI1NTUzYmRlM2NjOGYzMmQzODEwOTE1()
{
    return array(array('name' => '[data][product]', 'text' => __('product_name'), 'disabled' => 'Y'), array('name' => '[data][price]', 'text' => __('price')), array('name' => '[data][amount]', 'text' => __('quantity')),);
}

function sd_MjlhOGVhYzJiMGM3ZmNhMDU4ODU2ZDc5($product_id)
{
    $company_id           = Registry::get('runtime.company_id');
    $product_vendor_sells = db_get_row('SELECT ?:product_vendor_sell.*, ?:companies.company, ?:product_prices.price, ?:product_descriptions.product FROM ?:product_vendor_sell LEFT JOIN ?:companies ON ?:product_vendor_sell.company_id = ?:companies.company_id ' . 'LEFT JOIN ?:product_prices ON ?:product_vendor_sell.company_id = ?:product_prices.company_id AND ?:product_vendor_sell.product_id = ?:product_prices.product_id ' . 'LEFT JOIN ?:product_descriptions ON ?:product_vendor_sell.product_id = ?:product_descriptions.product_id ' . 'WHERE ?:product_vendor_sell.product_id = ?i AND ?:product_vendor_sell.company_id = ?i', $product_id, $company_id);

    return $product_vendor_sells;
}

function sd_MjQzZWUyOTJlYWM3ZTBjNTk3YzVmYWY3($product_id)
{
    $res        = false;
    $company_id = Registry::get('runtime.company_id');
    if (!empty($company_id) && !empty($product_id)) {
        $product_vendor_sell_id = sd_Y2ExY2NiMDYxYWIzZTdkNTlmMDA1ZTMy($company_id, $product_id);
        $res                    = db_query('DELETE FROM ?:product_vendor_sell WHERE product_id = ?i AND company_id = ?i', $product_id, $company_id);
        $check_company_id       = sd_NTkxZmQ2NGJjMGE4ODAzZjFjNTJmOTNk($product_id);
        if ($check_company_id != $company_id) {
            db_query('DELETE FROM ?:product_prices WHERE product_id = ?i AND company_id = ?i', $product_id, $company_id);
        }
        sd_OGNhNWY2ZTU2YjZmYWY5ZGVjNGI5NTlh($product_id);
        $category_ids = sd_NjY5YTc3MzE4NGRiNmZjNmE3ZDc3NWFm($product_id);
        if (!empty($category_ids)) {
            sd_OTQyM2Y2MmU5ZGM0OTc5MWE5NTlkZTM2($category_ids);
        }
    }

    return $res;
}

function fn_sd_vendor_products_database_delete_product_post($product_id, $product_deleted)
{
    if ($product_deleted) {
        db_query('DELETE FROM ?:product_vendor_sell WHERE product_id = ?i', $product_id);
    }
}

function sd_NTkxZmQ2NGJjMGE4ODAzZjFjNTJmOTNk($product_id)
{
    return db_get_field('SELECT company_id FROM ?:products WHERE product_id = ?i', $product_id);
}

function fn_sd_vendor_products_database_get_categories($params, $join, &$condition, $fields, $group_by, $sortings, $lang_code)
{
    if (AREA == 'C' && !empty($params['company_ids'])) {
        $company_id        = (int)$params['company_ids'];
        $id_paths          = db_get_fields("SELECT id_path FROM ?:categories c" . " JOIN ?:category_vendor_product_count p USING(category_id)" . " WHERE p.company_id = ?i", $company_id);
        $replace_condition = sd_NTYwZGVlYTdmNzQwNDcxNjlkYWU4NDFm($id_paths);
        $condition         = str_replace("$replace_condition", '', $condition);
        $id_paths          = db_get_fields("SELECT id_path FROM ?:categories c" . " JOIN ?:products_categories p USING(category_id)" . " JOIN ?:product_vendor_sell v USING(product_id)" . " WHERE v.company_id = ?i", $company_id);
        $condition         .= sd_NTYwZGVlYTdmNzQwNDcxNjlkYWU4NDFm($id_paths);
    }
}

function sd_NTYwZGVlYTdmNzQwNDcxNjlkYWU4NDFm($id_paths)
{
    $condition = '';
    if ($id_paths) {
        $vendor_category_ids = array();
        foreach ($id_paths as $id_path) {
            foreach (explode('/', $id_path) as $category_id) {
                $vendor_category_ids[] = $category_id;
            }
        }
        if ($vendor_category_ids) {
            $condition = db_quote(" AND ?:categories.category_id IN(?n)", array_unique($vendor_category_ids));
        } else {
            $condition = db_quote(" AND 0");
        }
    }

    return $condition;
}

function sd_Nzk5MDJiZmU2ZGQ1MGM3OTFlNWM0Yjcz()
{
    $products = db_get_array('SELECT product_id, company_id FROM ?:products WHERE 1', 'product_id');
    if (!empty($products)) {
        foreach ($products as $product) {
            sd_OWRkZmM5NGVjMTc2YTQ0YzU0MWFlNjQx(array('product_id' => $product['product_id'], 'company_id' => $product['company_id']));
        }
    }
}

function sd_OWUzNmUwMGZiOTcyZjFlZTVjMDdjMWYz()
{
    $products = db_get_array('SELECT product_id, company_id FROM ?:products WHERE 1');
    if (!empty($products)) {
        foreach ($products as $product) {
            db_query('DELETE FROM ?:product_prices WHERE product_id = ?i AND company_id != ?i', $product['product_id'], $product['company_id']);
        }
    }
    db_query('ALTER TABLE ?:product_prices DROP INDEX usergroup');
    db_query('ALTER TABLE ?:product_prices ADD UNIQUE KEY usergroup (product_id,usergroup_id,lower_limit)');
    db_query('ALTER TABLE ?:product_prices DROP company_id');
}

function fn_sd_vendor_products_database_get_products_post(&$products, $params, $lang_code)
{
    if ($products) {
        if (AREA == 'A' && Registry::get('runtime.mode') == 'picker') {
            $product_vendor_sells = db_get_hash_array('SELECT ?:product_vendor_sell.company_id, ?:product_vendor_sell.product_vendor_sell_id, ?:product_vendor_sell.product_id, ?:companies.company FROM ?:product_vendor_sell LEFT JOIN ?:companies ON ?:product_vendor_sell.company_id = ?:companies.company_id ' . 'WHERE 1', 'product_vendor_sell_id');
            if (!empty($product_vendor_sells)) {
                foreach ($products as $product_id => $product) {
                    foreach ($product_vendor_sells as $vendor) {
                        if ($vendor['product_id'] == $product['product_id']) {
                            $products[$product_id]['vendors'][$vendor['company_id']] = $vendor;
                        }
                    }
                }
            }
        } else if (AREA == 'A' && (ACCOUNT_TYPE == 'vendor' || Registry::get('runtime.company_id'))) {
            $company_id           = Registry::get('runtime.company_id');
            $addon_settings       = Registry::get('addons.sd_vendor_products_database');
            $product_vendor_sells = db_get_hash_array('SELECT * FROM ?:product_vendor_sell LEFT JOIN ?:product_prices ON ?:product_vendor_sell.company_id = ?:product_prices.company_id ' . 'AND ?:product_vendor_sell.product_id = ?:product_prices.product_id WHERE ?:product_vendor_sell.company_id = ?i', 'product_id', $company_id);
            if (!empty($product_vendor_sells)) {
                foreach ($products as $product_id => $product) {
                    if (!empty($product_vendor_sells[$product['product_id']])) {
                        $products[$product_id]['vendors'][$company_id] = $product_vendor_sells[$product['product_id']];
                        $product_vendor_sells_amount                   = db_get_field('SELECT count(product_vendor_sell_id)' . ' FROM ?:product_vendor_sell' . ' WHERE product_id = ?i', $product_id);
                        if ($product_vendor_sells_amount != 1) {
                            continue;
                        }
                        if ($addon_settings['allow_vendors_create_products'] == 'Y' && $product['created_by_vendor'] == 'Y' && !empty($product_vendor_sells[$product['product_id']])) {
                            if (!empty($product_vendor_sells[$product['product_id']]['company_id']) && $product_vendor_sells[$product['product_id']]['company_id'] == $product['company_id']) {
                                $products[$product_id]['show_usual_product_template'] = true;
                            }
                        }
                    }
                }
            }
        }
    }
}

function sd_NGE3ZjhjY2VlODcyMzBlMzAzNjEyOTRj($product_id)
{
    if (!empty($product_id)) {
        $fields               = array('sells' => '?:product_vendor_sell.*', 'prices' => '?:product_prices.price', 'companies' => '?:companies.*',);
        $joins                = array('prices' => 'LEFT JOIN ?:product_prices ON ?:product_vendor_sell.company_id = ?:product_prices.company_id AND ?:product_vendor_sell.product_id = ?:product_prices.product_id', 'companies' => 'LEFT JOIN ?:companies ON ?:product_vendor_sell.company_id = ?:companies.company_id',);
        $conditions           = array('product_id' => db_quote('?:product_vendor_sell.product_id = ?i', $product_id),);
        $product_vendor_sells = db_get_hash_array('SELECT ?p, ?:product_vendor_sell.status AS status' . ' FROM ?:product_vendor_sell ?p' . ' WHERE ?p', 'company_id', implode(', ', $fields), implode(' ', $joins), implode(' AND ', $conditions));
    }
    return !empty($product_vendor_sells) ? $product_vendor_sells : array();
}

function fn_sd_vendor_products_database_get_product_data_post(&$product_data, $auth, $preview, $lang_code)
{
    if ($product_data) {
        $addon_settings       = Registry::get('addons.sd_vendor_products_database');
        $product_vendor_sells = sd_NGE3ZjhjY2VlODcyMzBlMzAzNjEyOTRj($product_data['product_id']);
        if (!empty($product_vendor_sells)) {
            if (AREA == 'C') {
                foreach ($product_vendor_sells as $key => $company) {
                    $product_vendor_sells[$key]['logos'] = fn_get_logos($company['company_id']);
                    if ($addon_settings['plan_change_action'] == 'hide' && !sd_MjYzOWJlNmMxMDM4ZmIxYzdlZGRkNzE1($company['company_id'], 'enable_copy_products') && !($addon_settings['allow_vendors_create_products'] == 'Y' && $product_data['created_by_vendor'] == 'Y' && $product_data['company_id'] == $company['company_id'] && sd_MjYzOWJlNmMxMDM4ZmIxYzdlZGRkNzE1($company['company_id'], 'enable_create_products'))) {
                        unset($product_vendor_sells[$key]);
                    }
                }
            }
            $product_data['vendors'] = $product_vendor_sells;
            if ($addon_settings['allow_vendors_create_products'] == 'Y' && $product_data['created_by_vendor'] == 'Y' && !empty($product_data['vendors']) && count($product_data['vendors']) == 1) {
                $vendor_data = reset($product_data['vendors']);
                if (!empty($vendor_data['company_id']) && $vendor_data['company_id'] == $product_data['company_id']) {
                    $product_data['show_usual_product_template'] = true;
                    if (!empty($vendor_data['buy_now_url'])) {
                        $url = $vendor_data['buy_now_url'];
                    } else if (!empty($vendor_data['url'])) {
                        $url = $vendor_data['url'];
                    } else {
                        $url = '';
                    }
                    $product_data['buy_now_url'] = $url;
                }
            }

            $is_product_first_vendor = true;
            foreach($product_data['vendors'] as $product_vendor_data) {
                if($product_vendor_data['status'] === 'A' && ((int)$product_vendor_data['amount'] > 0) && ((float)$product_vendor_data['price'] > 0)){
                    if($is_product_first_vendor){
                        $product_data['company_id'] = $product_vendor_data['company_id'];
                        $product_data['amount'] = $product_vendor_data['amount'];
                        $product_data['price'] = $product_vendor_data['price'];
                        $product_data['company_name'] = $product_vendor_data['company'];
                        $product_data['base_price'] = $product_vendor_data['price'];
                    } else if($product_data['price'] > $product_vendor_data['price']) {
                        $product_data['company_id'] = $product_vendor_data['company_id'];
                        $product_data['amount'] = $product_vendor_data['amount'];
                        $product_data['price'] = $product_vendor_data['price'];
                        $product_data['company_name'] = $product_vendor_data['company'];
                        $product_data['base_price'] = $product_vendor_data['price'];
                    }
                    $is_product_first_vendor = false;
                }
            }
        }
    }
}

function fn_sd_vendor_products_database_post_check_amount_in_stock($product_id, &$amount, $product_options, $cart_id, $is_edp, $original_amount, &$cart)
{
    if (!empty($cart['products'])) {
        $allow_negative_amount = Registry::get('settings.General.allow_negative_amount');
        foreach ($cart['products'] as $id => &$product) {
            if ($id == $cart_id && !empty($product['extra']['vendor'])) {
                $current_amount = sd_YzUwMDEzYjkxZDMxNTA5NzJkYTExODc5($product['extra']['vendor'], $product['product_id']);
                if (!empty(Tygh::$app['session']['notifications']) && $current_amount != $amount) {
                    unset(Tygh::$app['session']['notifications']);
                }
                if ($current_amount - $amount < 0 && $allow_negative_amount != 'Y') {
                    $amount = $current_amount;
                    fn_set_notification('W', __('important'), __('text_cart_amount_changed', array('[product]' => $product['product'])));
                } else {
                    $product['amount'] = $amount;
                }
            }
        }
    }
}

function fn_sd_vendor_products_database_generate_cart_id(&$_cid, $extra, $only_selectable)
{
    if (!empty($extra['vendor'])) {
        $_cid[] = $extra['vendor'];
    }
}

function fn_sd_vendor_products_database_calculate_cart_items(&$cart, &$cart_products, $auth)
{
    if (!empty($cart['products'])) {
        foreach ($cart['products'] as $product_code => &$product) {
            if (!empty($product['extra']['vendor'])) {
                if (!empty($product['extra']['vendor_price'])) {
                    $cart_products[$product_code]['extra']['vendor_price'] = $product['extra']['vendor_price'];
                    $cart_products[$product_code]['extra']['vendor']       = $product['extra']['vendor'];
                    $cart_products[$product_code]['extra']['vendor_name']  = $product['extra']['vendor_name'];
                    $cart_products[$product_code]['company_id']            = $product['extra']['vendor'];
                    $cart_products[$product_code]['company_name']          = $product['extra']['vendor_name'];
                    if (empty($cart_products[$product_code]['stored_price']) || $cart_products[$product_code]['stored_price'] == 'N') {
                        $cart_products[$product_code]['display_price'] = $cart_products[$product_code]['base_price'] = $cart_products[$product_code]['price'] = $product['price'] = $product['display_price'] = $product['extra']['vendor_price'];
                        if (AREA == 'A') {
                            $cart_products[$product_code]['original_price'] = $product['extra']['vendor_price'];
                        }
                    }
                }
            }
        }
    }
}

function fn_sd_vendor_products_database_change_order_status($status_to, $status_from, $order_info, $force_notification, $order_statuses, $place_order)
{
    $_error             = false;
    $inventory_tracking = Registry::get('settings.General.inventory_tracking');
    foreach ($order_info['products'] as $id => $product) {
        if (!empty($product['extra']['is_edp']) && $product['extra']['is_edp'] == 'Y') {
            continue;
        }
        if ($inventory_tracking == 'Y') {
            if ($order_statuses[$status_to]['params']['inventory'] == 'D' && $order_statuses[$status_from]['params']['inventory'] == 'I') {
                if (sd_YmQ0YThmNzBlMWE3M2RjZmE4YTg3OGU1($product['product_id'], $product['amount'], $product['extra']['vendor'], '-') == false) {
                    $status_to = STATUS_BACKORDERED_ORDER;
                    $_error    = true;
                    fn_set_notification('W', __('warning'), __('low_stock_subj', array('[product]' => fn_get_product_name($product['product_id']) . ' #' . $product['product_id'])));
                    break;
                } else {
                    $_updated_ids[] = $id;
                }
            } else if ($order_statuses[$status_to]['params']['inventory'] == 'I' && $order_statuses[$status_from]['params']['inventory'] == 'D') {
                sd_YmQ0YThmNzBlMWE3M2RjZmE4YTg3OGU1($product['product_id'], $product['amount'], $product['extra']['vendor'], '+');
            }
        }
    }
    if ($_error) {
        if (!empty($_updated_ids)) {
            foreach ($_updated_ids as $id) {
                sd_YmQ0YThmNzBlMWE3M2RjZmE4YTg3OGU1($order_info['products'][$id]['product_id'], $order_info['products'][$id]['amount'], $order_info['products'][$id]['extra']['vendor'], '+');
            }
        }
    }
    if ($status_from == $status_to) {
        if (!empty($_updated_ids)) {
            foreach ($_updated_ids as $id) {
                sd_YmQ0YThmNzBlMWE3M2RjZmE4YTg3OGU1($order_info['products'][$id]['product_id'], $order_info['products'][$id]['amount'], $order_info['products'][$id]['extra']['vendor'], '+');
            }
        }
    }
}

function sd_YmQ0YThmNzBlMWE3M2RjZmE4YTg3OGU1($product_id, $amount, $vendor_id, $sign)
{
    $result = false;
    if (!empty($product_id) && !empty($vendor_id)) {
        $product = db_get_row('SELECT tracking, product_code FROM ?:products WHERE product_id = ?i', $product_id);
        if ($product['tracking'] == ProductTracking::TRACK_WITHOUT_OPTIONS && Registry::get('settings.General.inventory_tracking') == 'Y') {
            $result         = true;
            $current_amount = sd_YzUwMDEzYjkxZDMxNTA5NzJkYTExODc5($vendor_id, $product_id);
            $product_code   = $product['product_code'];
            if ($sign == '-') {
                $new_amount = $current_amount - $amount;
                if ($new_amount <= Registry::get('settings.General.low_stock_threshold') && !defined('ORDER_MANAGEMENT')) {
                    $company_id = fn_get_company_id('products', 'product_id', $product_id);
                    fn_log_event('products', 'low_stock', array('product_id' => $product_id,));
                    $lang_code = fn_get_company_language($company_id);
                    $lang_code = !empty($lang_code) ? $lang_code : Registry::get('settings.Appearance.backend_default_language');
                    Mailer::sendMail(array('to' => 'company_orders_department', 'from' => 'default_company_orders_department', 'data' => array('product_options' => !empty($selected_product_options) ? $selected_product_options : array(), 'new_amount' => $new_amount, 'product_id' => $product_id, 'product_code' => $product_code, 'product' => fn_get_product_name($product_id, $lang_code)), 'tpl' => 'orders/low_stock.tpl', 'company_id' => $company_id,), 'A', $lang_code);
                }
                if ($new_amount < 0 && Registry::get('settings.General.allow_negative_amount') != 'Y') {
                    $result = false;
                }
            } else {
                $new_amount = $current_amount + $amount;
            }
            db_query('UPDATE ?:product_vendor_sell SET amount = ?i WHERE product_id = ?i AND company_id = ?i', $new_amount, $product_id, $vendor_id);
            if (($current_amount <= 0) && ($new_amount > 0)) {
                fn_send_product_notifications($product_id);
            }
        }
    }

    return $result;
}

function sd_N2EzYjhiYzljNTQyMmQ0YjZiYjJkODA1($product_id, $company_id)
{
    $price = db_get_field('SELECT MIN(price) FROM ?:product_prices WHERE product_id = ?i AND company_id = ?i', $product_id, $company_id);

    return (empty($price)) ? 0 : floatval($price);
}

function sd_OWRkZmM5NGVjMTc2YTQ0YzU0MWFlNjQx($price_data)
{
    //fn_print_die($price_data);
    $res = false;
    if (!empty($price_data['product_id']) && !empty($price_data['company_id'])) {
        if (isset($price_data['price'])) {
            if (empty($price_data['lower_limit'])) {
                $price_data['lower_limit'] = 1;
            }
            $res = db_query('REPLACE INTO ?:product_prices ?e', $price_data);
        } else {
            $res = db_query('UPDATE ?:product_prices SET company_id = ?i WHERE product_id = ?i AND company_id = ?i', $price_data['company_id'], $price_data['product_id'], 0);
        }
    }

    return $res;
}

function sd_OGNhNWY2ZTU2YjZmYWY5ZGVjNGI5NTlh($product_id, $product_data = array())
{
    $product_vendor_sell_amount = db_get_array('SELECT amount, company_id FROM ?:product_vendor_sell WHERE product_id = ?i', $product_id);
    if (!empty($product_vendor_sell_amount)) {
        $max_amount = 0;
        foreach ($product_vendor_sell_amount as $vendor_sell_amount) {
            if (!empty($amount) && $vendor_sell_amount['company_id'] == $product_data['company_id']) {
                $add_amount = $product_data['amount'];
            } else {
                $add_amount = $vendor_sell_amount['amount'];
            }
            $max_amount += $add_amount;
        }
        db_query('UPDATE ?:products SET amount = ?i WHERE product_id = ?i', $max_amount, $product_id);
    }
}

function fn_sd_vendor_products_database_get_product_data($product_id, $field_list, &$join, $auth, $lang_code, &$condition)
{
    if (AREA == 'A') {
        if (ACCOUNT_TYPE == 'vendor') {
            $company_id = Registry::get('runtime.company_id');
            $join       = str_replace(" AND ?:products.company_id = $company_id", '', $join);
            $join       .= db_quote(" INNER JOIN ?:product_vendor_sell as vendor_sell ON vendor_sell.product_id = ?:products.product_id");
        } else {
            $condition .= ' AND ?:products.company_id = ?:product_prices.company_id';
        }
    }
}

function fn_sd_vendor_products_database_update_product_post($product_data, $product_id, $lang_code, $create)
{
    if (AREA == 'A') {
        if (ACCOUNT_TYPE == 'vendor' || ACCOUNT_TYPE == 'admin') {
            $product_data['product_id'] = $product_id;
            sd_MjljYTY2ZjFlNTMyMjBkMjUyNzQ2NTk4($product_id, $product_data);
        } else {
            $product_prices = Registry::get('vendor_product_prices');
            if (!empty($product_prices)) {
                if (empty($product_data['company_id'])) {
                    $product_data['company_id'] = sd_NTkxZmQ2NGJjMGE4ODAzZjFjNTJmOTNk($product_id);;
                }
                foreach ($product_prices as $price_data) {
                    if ($price_data['company_id'] == $product_data['company_id'] && isset($product_data['price'])) {
                        $price_data['price'] = $product_data['price'];
                    }
                    sd_OWRkZmM5NGVjMTc2YTQ0YzU0MWFlNjQx($price_data);
                }
                db_query('DELETE FROM ?:product_prices WHERE product_id = ?i AND company_id = ?i', $product_id, 0);
            } else {
                sd_OWRkZmM5NGVjMTc2YTQ0YzU0MWFlNjQx(array('product_id' => $product_id, 'company_id' => $product_data['company_id']));
            }
        }
    }
}

function sd_ZTIwN2UzMjdjZThmZTRlZTM0MzhlYjI3($product_id, $price, $store = '')
{
    if (!empty($store)) {
        $company_id = fn_get_company_id_by_name($store);
    } else {
        $company_id = Registry::get('runtime.company_id');
    }
    sd_ZmFmNWMxYTIzNWRlMDA1YmU0MDhlZjAx($product_id, array('price' => $price), $company_id);
}

function sd_NTcyYjNhZGY5MmY2YWZiMTY4YmQwODlk($product_id, $amount)
{
    $product_data = array('amount' => $amount,);
    sd_MjljYTY2ZjFlNTMyMjBkMjUyNzQ2NTk4($product_id, $product_data);
}

function sd_NzcxZTQ0ZjZkMjE5ZGE2YjVlMDU3N2E0($primary_object_id, &$processed_data, &$object, &$skip_record)
{
    $product_id = isset($primary_object_id['product_id']) ? $primary_object_id['product_id'] : 0;
    if (!sd_MWQyY2NmOGU4NDZiZjEyNzRhNmNjYTQy($product_id)) {
        if (!sd_Y2E2MDI5ODRjNThiMjJkODQ2OTkzM2Zm($product_id)) {
            $processed_data['S']++;
            $skip_record = true;
        } else {
            $allow_fields = array('Price', 'Quantity', 'lang_code');
            if (empty($product_id)) {
                $allow_fields[] = 'company_id';
            }
            $new_object = array();
            foreach ($allow_fields as $field) {
                if (isset($object[$field])) {
                    $new_object[$field] = $object[$field];
                }
            }
            $object = $new_object;
        }
    }
}

function sd_ZmFmNWMxYTIzNWRlMDA1YmU0MDhlZjAx($product_id, $product_data, $company_id = 0)
{
    $_product_data = $product_data;
    if (isset($_product_data['price'])) {
        $_price = array('price' => abs($_product_data['price']), 'lower_limit' => 1,);
        if (!isset($_product_data['prices'])) {
            $_product_data['prices'] = array($_price);
        } else {
            unset($_product_data['prices'][0]);
            array_unshift($_product_data['prices'], $_price);
        }
    }
    if (!empty($_product_data['prices'])) {
        if (!empty($company_id)) {
            $condition = db_quote(' AND company_id = ?i', $company_id);
        }
        foreach ($_product_data['prices'] as $v) {
            $v['type']         = !empty($v['type']) ? $v['type'] : 'A';
            $v['usergroup_id'] = !empty($v['usergroup_id']) ? $v['usergroup_id'] : 0;
            if ($v['lower_limit'] == 1 && $v['type'] == 'P' && $v['usergroup_id'] == 0) {
                fn_set_notification('W', __('warning'), __('cant_save_percentage_price'));
                continue;
            }
            if (!empty($v['lower_limit'])) {
                $v['product_id'] = $product_id;
                if (!empty($company_id)) {
                    $v['company_id'] = $company_id;
                }
                if ($v['type'] == 'P') {
                    $v['percentage_discount'] = ($v['price'] > 100) ? 100 : $v['price'];
                    $v['price']               = $_product_data['price'];
                }
                unset($v['type']);
                sd_OWRkZmM5NGVjMTc2YTQ0YzU0MWFlNjQx($v);
            }
        }
    }

    return $_product_data;
}

function sd_ZWIzN2Y5NmI4YWYzZDBjM2UxNTQxMTFl($update_data)
{
    $table              = $field = $value = $type = array();
    $msg                = '';
    $all_product_notify = false;
    $currencies         = Registry::get('currencies');
    if (ACCOUNT_TYPE == 'vendor') {
        $company_id = Registry::get('runtime.company_id');
    }
    if (!empty($update_data['product_ids'])) {
        $update_data['product_ids'] = explode(',', $update_data['product_ids']);
    } else {
        $all_product_notify = true;
        if (ACCOUNT_TYPE == 'vendor') {
            $update_data['product_ids'] = db_get_fields('SELECT product_id FROM ?:product_vendor_sell WHERE company_id = ?i', $company_id);
        } else {
            $update_data['product_ids'] = db_get_fields('SELECT product_id FROM ?:products WHERE 1 ?p', fn_get_company_condition('?:products.company_id'));
        }
    }
    if (!empty($update_data['price'])) {
        $table[] = '?:product_prices';
        $field[] = 'price';
        $value[] = $update_data['price'];
        $type[]  = $update_data['price_type'];
        $msg     .= ($update_data['price'] > 0 ? __('price_increased') : __('price_decreased')) . ' ' . abs($update_data['price']) . ($update_data['price_type'] == 'A' ? $currencies[CART_PRIMARY_CURRENCY]['symbol'] : '%') . '.<br />';
    }
    if (!empty($update_data['list_price'])) {
        $table[] = '?:products';
        $field[] = 'list_price';
        $value[] = $update_data['list_price'];
        $type[]  = $update_data['list_price_type'];
        $msg     .= ($update_data['list_price'] > 0 ? __('list_price_increased') : __('list_price_decreased')) . ' ' . abs($update_data['list_price']) . ($update_data['list_price_type'] == 'A' ? $currencies[CART_PRIMARY_CURRENCY]['symbol'] : '%') . '.<br />';
    }
    if (!empty($update_data['amount'])) {
        $table[] = (ACCOUNT_TYPE == 'vendor') ? '?:product_vendor_sell' : '?:products';
        $field[] = 'amount';
        $value[] = $update_data['amount'];
        $type[]  = 'A';
        if (!(ACCOUNT_TYPE == 'vendor')) {
            $table[] = '?:product_options_inventory';
            $field[] = 'amount';
            $value[] = $update_data['amount'];
            $type[]  = 'A';
        }
        $msg .= ($update_data['amount'] > 0 ? __('amount_increased') : __('amount_decreased')) . ' ' . abs($update_data['amount']) . '.<br />';
    }
    $where = !empty($update_data['product_ids']) ? db_quote(" AND product_id IN (?n)", $update_data['product_ids']) : '';
    foreach ($table as $k => $v) {
        $_value         = db_quote("?d", $value[$k]);
        $sql_expression = $type[$k] == 'A' ? ($field[$k] . ' + ' . $_value) : ($field[$k] . ' * (1 + ' . $_value . '/ 100)');
        if (($type[$k] == 'A') && !empty($update_data['product_ids']) && ($_value > 0)) {
            foreach ($update_data['product_ids'] as $product_id) {
                $send_notification = false;
                $product           = fn_get_product_data($product_id, $auth, DESCR_SL, '', true, true, true, true);
                if (($product['tracking'] == ProductTracking::TRACK_WITHOUT_OPTIONS) && ($product['amount'] <= 0)) {
                    $send_notification = true;
                } else if ($product['tracking'] == ProductTracking::TRACK_WITH_OPTIONS) {
                    $inventory = db_get_array("SELECT * FROM ?:product_options_inventory WHERE product_id = ?i", $product_id);
                    foreach ($inventory as $inventory_item) {
                        if ($inventory_item['amount'] <= 0) {
                            $send_notification = true;
                        }
                    }
                }
                if ($send_notification) {
                    fn_send_product_notifications($product_id);
                }
            }
        }
        if ($field[$k] == 'price' && ACCOUNT_TYPE == 'vendor') {
            $company_condition = "";
            if (ACCOUNT_TYPE == 'vendor') {
                $company_condition .= db_quote(" AND company_id = ?i", $company_id);
            }
            $sql_expression = $type[$k] == 'A' ? '`price` + ?d' : '`price` * (1 + ?d / 100)';
            $sql_expression = db_quote($sql_expression, $update_data['price']);
            db_query("UPDATE ?:product_prices SET `price` = IF(?p < 0, 0, ?p) WHERE 1 ?p ?p", $sql_expression, $sql_expression, $where, $company_condition);
        } else {
            db_query("UPDATE ?p SET ?p = IF(?p < 0, 0, ?p) WHERE 1 ?p", $v, $field[$k], $sql_expression, $sql_expression, $where);
        }
    }
    if (empty($update_data['product_ids']) || $all_product_notify) {
        fn_set_notification('N', __('notice'), __('all_products_have_been_updated') . '<br />' . $msg);
    } else {
        fn_set_notification('N', __('notice'), __('text_products_updated'));
    }

    return true;
}

function sd_OWQ2MzZhNWE5NzI3ODZkYzZkYmQwNzE1($product_id)
{
    $result = false;
    if (!empty($product_id)) {
        $addon_settings       = Registry::get('addons.sd_vendor_products_database');
        $product_vendor_sells = db_get_hash_array('SELECT ?:product_vendor_sell.*, ?:companies.company FROM ?:product_vendor_sell LEFT JOIN ?:companies ON ?:product_vendor_sell.company_id = ?:companies.company_id' . ' WHERE ?:product_vendor_sell.product_id = ?i', 'company_id', $product_id);
        $product_data         = db_get_row('SELECT company_id, created_by_vendor ' . ' FROM ?:products' . ' WHERE product_id = ?i', $product_id);
        if (!empty($product_vendor_sells)) {
            if ($addon_settings['allow_vendors_create_products'] == 'Y' && $product_data['created_by_vendor'] == 'Y' && !empty($product_vendor_sells) && count($product_vendor_sells) == 1) {
                $vendor_data = reset($product_vendor_sells);
                if (!empty($vendor_data['company_id']) && $vendor_data['company_id'] == $product_data['company_id']) {
                    $result = true;
                }
            }
        }
    }

    return $result;
}

function sd_MjYzOWJlNmMxMDM4ZmIxYzdlZGRkNzE1($company_id, $type = 'enable_create_products')
{
    $result = false;
    if (Registry::get('addons.vendor_plans.status') != 'A') {
        $result = true;
    } else if (!empty($company_id)) {
        $company_data = fn_get_company_data($company_id);
        if (!empty($company_data[$type]) && $company_data[$type] == 'Y') {
            $result = true;
        } else if (!empty($company_data['plan_id'])) {
            $enable = db_get_field('SELECT ?p FROM ?:vendor_plans WHERE plan_id = ?i', $type, $company_data['plan_id']);
            if (!empty($enable) && $enable == 'Y') {
                $result = true;
            }
        }
    }

    return $result;
}

function sd_YzNiZTNkZjE1YjdjOGFmN2MxZDQzZmVm(&$conditions, $options)
{
    if ($options['export_all_products'] == 'N') {
        $company_id   = Registry::get('runtime.company_id');
        $conditions[] = db_quote('product_vendor_sell.company_id = ?i AND product_prices.company_id = ?i', $company_id, $company_id);
    }
}

function sd_NjY5YTc3MzE4NGRiNmZjNmE3ZDc3NWFm($product_id)
{
    if (empty($product_id)) {
        return array();
    }

    return db_get_fields('SELECT category_id FROM ?:products_categories WHERE product_id = ?i', $product_id);
}