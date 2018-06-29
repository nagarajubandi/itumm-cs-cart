<?php

use Tygh\Registry;
$view = Registry::get('view');
if (!Registry::get('runtime.company_id')) {
	return array(CONTROLLER_STATUS_REDIRECT, "products.manage");
} else {

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		if ($mode == 'm_update') {
		
			// Update multiple products data
			if (!empty($_REQUEST['products_data'])) {
				foreach ($_REQUEST['products_data'] as $k => &$v) {
					$isset_product = db_get_field ("SELECT id FROM ?:vendors_products_data WHERE product_id = ?i AND company_id = ?i", $k, COMPANY_ID);
					if(!isset($v['amount'])) {
						$v['amount'] = 0;
					}
					if (!empty($isset_product)) {
						db_query ("UPDATE ?:vendors_products_data SET price = ?d, amount = ?i WHERE id = ?i", $v['price'], $v['amount'], $isset_product);
					} else {
						db_query ("INSERT INTO ?:vendors_products_data (company_id, product_id, price, amount) VALUES (?i, ?i, ?d, ?i)", COMPANY_ID, $k, $v['price'], $v['amount']);
					}
				}
			}
			
			
			//update qty product combination
			if(!empty($_REQUEST['qty'])) {
				foreach($_REQUEST['qty'] as $combination_hash => $qty) {
					
					$is_vendor_combination = db_get_field ("SELECT combination FROM ?:product_options_inventory WHERE combination_hash = ?i AND vendor_id = ?i", $combination_hash, COMPANY_ID);
					if (!empty($is_vendor_combination)) {
						db_query("UPDATE ?:product_options_inventory SET amount = ?i WHERE combination_hash = ?i AND vendor_id = ?i", $qty, $combination_hash, COMPANY_ID);
					} else {
						$product_id = db_get_field ("SELECT product_id FROM ?:product_options_inventory WHERE combination_hash = ?i", $combination_hash);
						$combination = db_get_field ("SELECT combination FROM ?:product_options_inventory WHERE combination_hash = ?i", $combination_hash);
						db_query("INSERT INTO ?:product_options_inventory (product_id, combination, amount, combination_hash, vendor_id) VALUES (?i, ?s, ?i, ?i, ?i)", $product_id, $combination, $qty, $combination_hash, COMPANY_ID);
					}
				}
			}
			
			return array(CONTROLLER_STATUS_OK, "my_vendors_products.manage");
		}
		
		
		if ($mode == 'update') {
			
			if (!empty($_REQUEST['product_data'])) {
				
				fn_companies_filter_company_product_categories($_REQUEST, $_REQUEST['product_data']);
				
				
				
				//Set vendor prices
				$isset_product = db_get_field ("SELECT id FROM ?:vendors_products_data WHERE product_id = ?i AND company_id = ?i", $_REQUEST['product_id'], COMPANY_ID);
				if (!empty($isset_product)) {
					db_query ("UPDATE ?:vendors_products_data SET price = ?d WHERE id = ?i", $_REQUEST['product_data']['price'], $isset_product);
				} else {
					db_query ("INSERT INTO ?:vendors_products_data (company_id, product_id, price) VALUES (?i, ?i, ?d)", COMPANY_ID, $_REQUEST['product_id'], $_REQUEST['product_data']['price']);
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
		
		unset($_SESSION['product_ids']);
		unset($_SESSION['selected_fields']);

		$params = $_REQUEST;
		$params['only_short_fields'] = true;
		$params['extend'][] = 'companies';
		
		$params['vendors_products'] = true;
		
		$params['only_this_vendor'] = true;
		
		if ($mode == 'p_subscr') {
			$params['get_subscribers'] = true;
			fn_add_breadcrumb(__('products'), "products.manage");
		}


		list($products, $search) = fn_get_products($params, Registry::get('settings.Appearance.admin_elements_per_page'), DESCR_SL);
		fn_gather_additional_products_data($products, array('get_icon' => true, 'get_detailed' => true, 'get_options' => false, 'get_discounts' => false));


		if (!empty($products)) {
			foreach ($products as $key => $value) {
				$isset_vendor_product_data = db_get_row("SELECT * FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", COMPANY_ID, $value['product_id']);
				
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
		}
		
		$view->assign('products', $products);
		$view->assign('search', $search);
		$view->assign('companies', fn_get_short_companies());

		if (!empty($_REQUEST['redirect_if_one']) && $product_count == 1) {
			return array(CONTROLLER_STATUS_REDIRECT, "products.update?product_id={$products[0]['product_id']}");
		}

		$selected_fields = array(
			array(
				'name' => '[data][popularity]',
				'text' => __('popularity')
			),
			array(
				'name' => '[data][status]',
				'text' => __('status'),
				'disabled' => 'Y'
			),
			array(
				'name' => '[data][product]',
				'text' => __('product_name'),
				'disabled' => 'Y'
			),
			array(
				'name' => '[data][price]',
				'text' => __('price')
			),
			array(
				'name' => '[data][list_price]',
				'text' => __('list_price')
			),
			array(
				'name' => '[data][short_description]',
				'text' => __('short_description')
			),
			array(
				'name' => '[add_categories]',
				'text' => __('categories')
			),
			array(
				'name' => '[data][full_description]',
				'text' => __('full_description')
			),
			array(
				'name' => '[data][search_words]',
				'text' => __('search_words')
			),
			array(
				'name' => '[data][meta_keywords]',
				'text' => __('meta_keywords')
			),
			array(
				'name' => '[data][meta_description]',
				'text' => __('meta_description')
			),
			array(
				'name' => '[data][usergroup_ids]',
				'text' => __('usergroups')
			),
			array(
				'name' => '[main_pair]',
				'text' => __('image_pair')
			),
			array(
				'name' => '[data][min_qty]',
				'text' => __('min_order_qty')
			),
			array(
				'name' => '[data][max_qty]',
				'text' => __('max_order_qty')
			),
			array(
				'name' => '[data][qty_step]',
				'text' => __('quantity_step')
			),
			array(
				'name' => '[data][list_qty_count]',
				'text' => __('list_quantity_count')
			),
			array(
				'name' => '[data][product_code]',
				'text' => __('product_code')
			),
			array(
				'name' => '[data][weight]',
				'text' => __('weight')
			),
			array(
				'name' => '[data][shipping_freight]',
				'text' => __('shipping_freight')
			),
			array(
				'name' => '[data][is_edp]',
				'text' => __('downloadable')
			),
			array(
				'name' => '[data][edp_shipping]',
				'text' => __('edp_enable_shipping')
			),
			array(
				'name' => '[data][tracking]',
				'text' => __('inventory')
			),
			array(
				'name' => '[data][free_shipping]',
				'text' => __('free_shipping')
			),
			array(
				'name' => '[data][feature_comparison]',
				'text' => __('feature_comparison')
			),
			array(
				'name' => '[data][zero_price_action]',
				'text' => __('zero_price_action')
			),
			array(
				'name' => '[data][taxes]',
				'text' => __('taxes')
			),
			array(
				'name' => '[data][features]',
				'text' => __('features')
			),
			array(
				'name' => '[data][page_title]',
				'text' => __('page_title')
			),
			array(
				'name' => '[data][timestamp]',
				'text' => __('creation_date')
			),
			array(
				'name' => '[data][amount]',
				'text' => __('quantity')
			),
			array(
				'name' => '[data][avail_since]',
				'text' => __('available_since')
			),
			array(
				'name' => '[data][out_of_stock_actions]',
				'text' => __('out_of_stock_actions')
			),
			array(
				'name' => '[data][localization]',
				'text' => __('localization')
			),
			array(
				'name' => '[data][details_layout]',
				'text' => __('product_details_layout')
			),
			array(
				'name' => '[data][min_items_in_box]',
				'text' => __('minimum_items_in_box')
			),
			array(
				'name' => '[data][max_items_in_box]',
				'text' => __('maximum_items_in_box')
			),
			array(
				'name' => '[data][box_length]',
				'text' => __('box_length')
			),
			array(
				'name' => '[data][box_width]',
				'text' => __('box_width')
			),
			array(
				'name' => '[data][box_height]',
				'text' => __('box_height')
			),
		);


        $selected_fields[] = array(
            'name' => '[data][company_id]',
            'text' => __('vendor')
        );

		$view->assign('selected_fields', $selected_fields);
		$filter_params = array(
			'get_fields' => true,
			'get_variants' => true
		);
		
		list($filters) = fn_get_product_filters($filter_params);
		$view->assign('filter_items', $filters);
		$feature_params = array(
			'get_fields' => true,
			'plain' => true,
			'variants' => true,
			'exclude_group' => true,
			'exclude_filters' => true
		);
		list($features) = fn_get_product_features($feature_params);

		$view->assign('feature_items', $features);

		
	} elseif ($mode == 'update') {

		$selected_section = (empty($_REQUEST['selected_section']) ? 'detailed' : $_REQUEST['selected_section']);

		// Get current product data
		$product_data = fn_get_product_data($_REQUEST['product_id'], $_SESSION['auth'], DESCR_SL, '', true, true, true, true);

		
		
		
		
		
		// Set vendor price
		if (!empty($product_data)) {
			$vendor_price = db_get_field("SELECT price FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", COMPANY_ID, $product_data['product_id']);
			
			if (!empty($vendor_price)) {
				if ($vendor_price == 0) {
					$product_data['price'] = db_get_field("SELECT price FROM ?:product_prices WHERE product_id = ?i", $product_data['product_id']);
				} else {
					$product_data['price'] = $vendor_price;
				}
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

		fn_add_breadcrumb(__('products'), "my_vendors_products.manage.reset_view");

		fn_add_breadcrumb(__('search_results'), "my_vendors_products.manage.last_view");

		fn_add_breadcrumb(__('category') . ': ' . fn_get_category_name($product_data['main_category']), "my_vendors_products.manage.reset_view?cid=$product_data[main_category]");

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

		// If the product is electronnicaly distributed, get the assigned files
		$view->assign('product_files', fn_get_product_files($_REQUEST['product_id']));
		
		
		
		// [Page sections]
		$tabs = array (
			'detailed' => array (
				'title' => __('general'),
				'js' => true
			)
		);
		
		if (!defined('COMPANY_ID')) {
			$tabs['blocks'] = array (
				'title' => __('blocks'),
				'js' => true
			);
		}
		Registry::set('navigation.tabs', $tabs);
		// [/Page sections]
		
		
		
		// [Block manager]
		// block manager is disabled for vendors.
		if (!(PRODUCT_TYPE == 'MULTIVENDOR' && defined('SELECTED_COMPANY_ID') && SELECTED_COMPANY_ID != 'all')) {
			$block_settings = fn_get_all_blocks('products');
			$view->assign('block_settings', $block_settings);
			list($blocks, $object_id) = fn_get_blocks(array('location' => 'products', 'all' => true, 'product_id' => $_REQUEST['product_id']), false, DESCR_SL);
			list($all_blocks) = fn_get_blocks(array('location' => 'all_pages', 'all' => true, 'block_properties_location' => 'products'), false);
			$blocks = fn_array_merge($blocks, $all_blocks, true);
			$blocks = fn_sort_blocks($object_id, 'products', $blocks);
			$blocks = fn_check_blocks_availability($blocks, $block_settings);
			$view->assign('location', $selected_section);
			$view->assign('blocks', $blocks);
			$view->assign('avail_positions', fn_get_available_group('products', $_REQUEST['product_id'], DESCR_SL));
		}
		// [/Block manager]
		
		
	}

}
