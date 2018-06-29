<?php

use Tygh\Enum\ProductFeatures;
use Tygh\Enum\ProductTracking;
use Tygh\Registry;
use Tygh\BlockManager\SchemesManager;

$view = Registry::get('view');

if (!Registry::get('runtime.company_id')) {
	return array(CONTROLLER_STATUS_REDIRECT, "products.manage");
} else {

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		if ($mode == 'm_update') {
		
			// Update multiple products data
			if (!empty($_REQUEST['products_data'])) {
				foreach ($_REQUEST['products_data'] as $k => &$v) {
					$isset_product = db_get_field ("SELECT id FROM ?:vendors_products_data WHERE product_id = ?i AND company_id = ?i", $k, Registry::get('runtime.company_id'));
					if(!isset($v['amount'])) {
						$v['amount'] = 0;
					}
					if (!empty($isset_product)) {
						db_query ("UPDATE ?:vendors_products_data SET price = ?d, amount = ?i WHERE id = ?i", $v['price'], $v['amount'], $isset_product);
					} else {
						db_query ("INSERT INTO ?:vendors_products_data (company_id, product_id, price, amount) VALUES (?i, ?i, ?d, ?i)", Registry::get('runtime.company_id'), $k, $v['price'], $v['amount']);
					}
				}
			}
			
			
			//update qty product combination
			if(!empty($_REQUEST['qty'])) {
				foreach($_REQUEST['qty'] as $combination_hash => $qty) {
					
					$is_vendor_combination = db_get_field ("SELECT combination FROM ?:product_options_inventory WHERE combination_hash = ?i AND vendor_id = ?i", $combination_hash, Registry::get('runtime.company_id'));
					$product_id = db_get_field ("SELECT product_id FROM ?:product_options_inventory WHERE combination_hash = ?i", $combination_hash);
					
					if (!empty($is_vendor_combination)) {
						db_query("UPDATE ?:product_options_inventory SET amount = ?i WHERE combination_hash = ?i AND vendor_id = ?i", $qty, $combination_hash, Registry::get('runtime.company_id'));
					} else {
						$combination = db_get_field ("SELECT combination FROM ?:product_options_inventory WHERE combination_hash = ?i", $combination_hash);
						db_query("INSERT INTO ?:product_options_inventory (product_id, combination, amount, combination_hash, vendor_id) VALUES (?i, ?s, ?i, ?i, ?i)", $product_id, $combination, $qty, $combination_hash, Registry::get('runtime.company_id'));
					}
					
					fn_create_product_exceptions($product_id);
				}
			}
			
			return array(CONTROLLER_STATUS_OK, "my_vendors_products.manage");
		}
		
		
		if ($mode == 'update') {
			
			if (!empty($_REQUEST['product_data'])) {
				
				fn_companies_filter_company_product_categories($_REQUEST, $_REQUEST['product_data']);
				
				//Set vendor prices
				$isset_product = db_get_field ("SELECT id FROM ?:vendors_products_data WHERE product_id = ?i AND company_id = ?i", $_REQUEST['product_id'], Registry::get('runtime.company_id'));
				if (!empty($isset_product)) {
					db_query ("UPDATE ?:vendors_products_data SET price = ?d WHERE id = ?i", $_REQUEST['product_data']['price'], $isset_product);
                    if (!empty($_REQUEST['product_data']['amount'])) {
                        db_query ("UPDATE ?:vendors_products_data SET amount = ?d WHERE id = ?i", $_REQUEST['product_data']['amount'], $isset_product);
                    }

				} else {
					db_query ("INSERT INTO ?:vendors_products_data (company_id, product_id, price, amount) VALUES (?i, ?i, ?d, ?i)", Registry::get('runtime.company_id'), $_REQUEST['product_id'], $_REQUEST['product_data']['price'], $_REQUEST['product_data']['amount']);
				}
				unset($_REQUEST['product_data']['price']);

				// Updating product record
				fn_multiple_vendors_update_product($_REQUEST['product_data'], $_REQUEST['product_id'], DESCR_SL);

				$_main_category = db_get_row("SELECT category_id, position FROM ?:products_categories WHERE product_id = ?i AND link_type = 'M'", $_REQUEST['product_id']);
				$_add_categories = db_get_array("SELECT category_id, position FROM ?:products_categories WHERE product_id = ?i ORDER BY category_id", $_REQUEST['product_id']);					

				$add_categories = Array();
				foreach($_add_categories as $_category) {
					$add_categories[] = $_category['category_id'];
					$add_categories_positions[$_category['category_id']] = $_category['position'];					
				}
				$prev_cat = $add_categories;
				$main_category_position = $_main_category['position'];			
					
				if (!empty($_REQUEST['product_data']['add_categories'])) {
					$add_categories = explode(',', $_REQUEST['product_data']['add_categories']);
					$main_category = (!empty($_REQUEST['product_data']['main_category'])) ? $_REQUEST['product_data']['main_category'] : $add_categories[0];				
				} else {				
					$main_category = $_main_category['category_id'];				
				}
				
				db_query("DELETE FROM ?:products_categories WHERE product_id = ?i", $_REQUEST['product_id']);
				fn_update_product_count($prev_cat);
				$new_ids = $add_categories;
				$_data = array (
					'product_id' => $_REQUEST['product_id'],
					'link_type' => 'A',
				);

				foreach ($add_categories as $c_id) {
					$_data['category_id'] = $c_id;
					if (isset($add_categories_positions[$c_id])) {
						$_data['position'] = $add_categories_positions[$c_id];					
					} else {
						$_data['position'] = 0;
					}
					db_query("INSERT INTO ?:products_categories ?e", $_data);
				}
				fn_update_product_count($new_ids);
				db_query("UPDATE ?:products_categories SET link_type = 'M' WHERE product_id = ?i AND category_id = ?i", $_REQUEST['product_id'], $main_category);

				// Update main images pair
				fn_attach_image_pairs('product_main', 'product', $_REQUEST['product_id'], DESCR_SL);

			}

			return array(CONTROLLER_STATUS_OK, "my_vendors_products.update?product_id=".$_REQUEST['product_id']);
		}
		
	}



	if ($mode == 'manage') {

	    if (!empty($action) && $action == 'last_view') {
	        return array(CONTROLLER_STATUS_REDIRECT, 'my_vendors_products.manage');
        }

		unset($_SESSION['product_ids']);
		unset($_SESSION['selected_fields']);

		$params = $_REQUEST;
		$params['only_short_fields'] = true;
		$params['extend'][] = 'companies';

        $params['vendors_products'] = true;

        $params['only_this_vendor'] = true;

		if ($mode == 'p_subscr') {
			$params['get_subscribers'] = true;
			fn_add_breadcrumb(fn_get_lang_var('products'), "products.manage");
		}

		list($products, $search) = fn_get_products($params, Registry::get('settings.Appearance.admin_elements_per_page'), DESCR_SL);
		fn_gather_additional_products_data($products, array('get_icon' => true, 'get_detailed' => true, 'get_options' => false, 'get_discounts' => false));

		foreach ($products as $key => $value) {
			$isset_vendor_product_data = db_get_row("SELECT * FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", Registry::get('runtime.company_id'), $value['product_id']);
			
			if (!empty($isset_vendor_product_data)) {
				if ($isset_vendor_product_data['price'] == 0) {
					$products[$key]['price'] = db_get_field("SELECT price FROM ?:product_prices WHERE product_id = ?i", $value['product_id']);
				} else {
					$products[$key]['price'] = $isset_vendor_product_data['price'];
				}
				$products[$key]['amount'] = $isset_vendor_product_data['amount'];
			} else {
				$products[$key]['price'] = db_get_field("SELECT price FROM ?:product_prices WHERE product_id = ?i", $value['product_id']);
				$products[$key]['amount'] = 0;
			}
		}

        $page = $search['page'];
        $valid_page = db_get_valid_page($page, $search['items_per_page'], $search['total_items']);

        if ($page > $valid_page) {
            $_REQUEST['page'] = $valid_page;

            return array(CONTROLLER_STATUS_REDIRECT, Registry::get('config.current_url'));
        }

        Tygh::$app['view']->assign('products', $products);
        Tygh::$app['view']->assign('search', $search);

        if (!empty($_REQUEST['redirect_if_one']) && $search['total_items'] == 1) {
            return array(CONTROLLER_STATUS_REDIRECT, 'products.update?product_id=' . $products[0]['product_id']);
        }

        $selected_fields = fn_get_product_fields();

        Tygh::$app['view']->assign('selected_fields', $selected_fields);
        if (!fn_allowed_for('ULTIMATE:FREE')) {
            $filter_params = array(
                'get_variants' => true,
                'short' => true,
                'feature_type' => str_split(ProductFeatures::getAllTypes())
            );
            list($filters) = fn_get_product_filters($filter_params);
            Tygh::$app['view']->assign('filter_items', $filters);
            unset($filters);
        }

        $feature_params = array(
            'plain' => true,
            'statuses' => array('A', 'H'),
            'variants' => true,
            'exclude_group' => true,
            'exclude_filters' => true
        );

        // Preload variants selected at search form. They will be shown at AJAX variants loader as pre-selected.
        if (!empty($_REQUEST['feature_variants'])) {
            $feature_params['variants_only'] = $_REQUEST['feature_variants'];
        }

        list($features, $features_search) = fn_get_product_features($feature_params, PRODUCT_FEATURES_THRESHOLD);

        if ($features_search['total_items'] <= PRODUCT_FEATURES_THRESHOLD) {
            Tygh::$app['view']->assign('feature_items', $features);
        } else {
            Tygh::$app['view']->assign('feature_items_too_many', true);
        }




	} elseif ($mode == 'update') {

		$selected_section = (empty($_REQUEST['selected_section']) ? 'detailed' : $_REQUEST['selected_section']);

		// Get current product data
		$product_data = fn_get_product_data($_REQUEST['product_id'], $auth, DESCR_SL, '', true, true, true, true);

		// Set vendor price
		if (!empty($product_data)) {
			$vendor_price = db_get_field("SELECT price FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", Registry::get('runtime.company_id'), $product_data['product_id']);
			
			if (!empty($vendor_price)) {
				if ($vendor_price == 0) {
					$product_data['price'] = db_get_field("SELECT price FROM ?:product_prices WHERE product_id = ?i", $product_data['product_id']);
				} else {
					$product_data['price'] = $vendor_price;
				}

                $product_data['amount'] = db_get_field("SELECT amount FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", Registry::get('runtime.company_id'), $product_data['product_id']);


            } else {
				$product_data['price'] = db_get_field("SELECT price FROM ?:product_prices WHERE product_id = ?i", $product_data['product_id']);
			}
		}
		
		if (!empty($_REQUEST['deleted_subscription_id'])) {
			db_query("DELETE FROM ?:product_subscriptions WHERE subscription_id = ?i", $_REQUEST['deleted_subscription_id']);
		}

		if (empty($product_data)) {
			return array(CONTROLLER_STATUS_NO_PAGE);
		}

		fn_add_breadcrumb(fn_get_lang_var('products'), "my_vendors_products.manage.reset_view");

		fn_add_breadcrumb(fn_get_lang_var('search_results'), "my_vendors_products.manage.last_view");

		fn_add_breadcrumb(fn_get_lang_var('category') . ': ' . fn_get_category_name($product_data['main_category']), "vendors_products.manage.reset_view?cid=$product_data[main_category]");

		$taxes = fn_get_taxes();

		arsort($product_data['category_ids']);
		
		$companies = fn_get_short_companies();
		$companies[$product_data['company_id']] = db_get_field ("SELECT company FROM ?:companies WHERE company_id = ?i", $product_data['company_id']);
		
		$view->assign('product_data', $product_data);
		$view->assign('taxes', $taxes);
		$view->assign('companies', $companies);

		$product_options = fn_get_product_options($_REQUEST['product_id'], DESCR_SL);
		if (!empty($product_options)) {
			$has_inventory = false;
			foreach ($product_options as $p) {
				if ($p['inventory'] == 'Y') {
					$has_inventory = true;
					break;
				}
			}
			$view->assign('has_inventory', $has_inventory);
		}
		
		$view->assign('product_options', $product_options);
		$view->assign('global_options', fn_get_product_options(0));

		$tabs = array (
			'detailed' => array (
				'title' => fn_get_lang_var('general'),
				'js' => true
			)
		);

		Registry::set('navigation.tabs', $tabs);

    }

}
