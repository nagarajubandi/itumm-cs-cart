<?php

use Tygh\Registry;
use Tygh\Enum\ProductTracking;

function fn_multiple_vendors_check_account_type($user_id) {
	$company_id = db_get_field("SELECT company_id FROM ?:users WHERE user_id = ?i", $user_id);

	if ($company_id !== 0) {
		return true;
	} else {
		return false;
	}
}

function fn_multiple_vendors_get_products(&$params, $fields, $sortings, &$condition, $join, $sorting, $group_by, $lang_code, $having) {

	if (Registry::get('runtime.company_id') && !empty($params['vendors_products'])) {
		$params['company_id'] = Registry::get('runtime.company_id');
		$text = 'products.company_id = '.$params['company_id'];
		$new_text = 'products.company_id != '.$params['company_id'];
		$condition = str_replace($text, $new_text, $condition);
	}

    if (Registry::get('runtime.company_id') && !empty($params['only_this_vendor'])) {

        $p_ids1 = db_get_fields("SELECT product_id FROM ?:product_options_inventory WHERE vendor_id = ?i AND amount > ?i", Registry::get('runtime.company_id'), 0);
        $p_ids2 = db_get_fields('SELECT product_id FROM ?:vendors_products_data WHERE amount > 0 AND company_id = ?i', Registry::get('runtime.company_id'));

        $p_ids = array_merge($p_ids1, $p_ids2);

        $p_ids = array_unique($p_ids);

        if(!empty($p_ids)) {
            $condition .= db_quote(' AND products.product_id IN (?n)', $p_ids);
        } else {
            $condition .= db_quote(' AND products.product_id = ?i', 0);
        }
    }


    $vendor_company_id = Registry::get('runtime.vendor_company_id');
    if (!empty($vendor_company_id)) {

        $p_ids1 = db_get_fields("SELECT product_id FROM ?:product_options_inventory WHERE vendor_id = ?i AND amount > ?i", $vendor_company_id, 0);
        $p_ids2 = db_get_fields('SELECT product_id FROM ?:vendors_products_data WHERE amount > 0 AND company_id = ?i', $vendor_company_id);

        $p_ids = array_merge($p_ids1, $p_ids2);
        $p_ids = array_unique($p_ids);

        if (!empty($p_ids)) {
            $new_condition = db_quote( ' AND ( products.company_id = ?i OR products.product_id IN (?n) )', $vendor_company_id, $p_ids);

            $condition = str_replace('AND products.company_id = ' . $vendor_company_id, $new_condition, $condition);

        }
    }
}

function fn_multiple_vendors_get_product_data (&$product_id, &$field_list, &$join, &$auth, &$lang_code, &$condition) {
	//if dispatch is 'vendors_products'
	$vendors_products_dispatch = substr_count($_REQUEST['dispatch'], 'vendors_products');
	if ($vendors_products_dispatch !== 0) {
		//unset company_id condition
		$str = "AND ?:products.company_id = " . Registry::get('runtime.company_id');
		$join = str_replace($str, '', $join);
	}

}

function fn_multiple_vendors_update_product($product_data, $product_id = 0, $lang_code = CART_LANGUAGE)
{
	$_data = $product_data;
	if (!empty($product_data['timestamp'])) {
		$_data['timestamp'] = fn_parse_date($product_data['timestamp']); // Minimal data for product record
	}

	if (empty($product_id) && Registry::get('runtime.company_id')) {
		$_data['company_id'] = Registry::get('runtime.company_id');
	}

	if (!empty($product_data['avail_since'])) {
		$_data['avail_since'] = fn_parse_date($product_data['avail_since']);
	}

	if (isset($product_data['tax_ids'])) {
		$_data['tax_ids'] = empty($product_data['tax_ids']) ? '' : fn_create_set($product_data['tax_ids']);
	}

	if (isset($product_data['localization'])) {
		$_data['localization'] = empty($product_data['localization']) ? '' : fn_implode_localizations($_data['localization']);
	}

	if (isset($product_data['usergroup_ids'])) {
		$_data['usergroup_ids'] = empty($product_data['usergroup_ids']) ? '0' : implode(',', $_data['usergroup_ids']);
	}

	if (Registry::get('settings.General.allow_negative_amount') == 'N' && isset($_data['amount'])) {
		$_data['amount'] = abs($_data['amount']);
	}

	$shipping_params = array();
	if (!empty($product_id)) {
		$shipping_params = db_get_field('SELECT shipping_params FROM ?:products WHERE product_id = ?i', $product_id);
		if (!empty($shipping_params)) {
			$shipping_params = unserialize($shipping_params);
		}
	}

	// Save the product shipping params
	$_shipping_params = array(
		'min_items_in_box' => isset($_data['min_items_in_box']) ? intval($_data['min_items_in_box']) : (!empty($shipping_params['min_items_in_box']) ? $shipping_params['min_items_in_box'] : 0),
		'max_items_in_box' => isset($_data['max_items_in_box']) ? intval($_data['max_items_in_box']) : (!empty($shipping_params['max_items_in_box']) ? $shipping_params['max_items_in_box'] : 0),
		'box_length' => isset($_data['box_length']) ? intval($_data['box_length']) : (!empty($shipping_params['box_length']) ? $shipping_params['box_length'] : 0),
		'box_width' => isset($_data['box_width']) ? intval($_data['box_width']) : (!empty($shipping_params['box_width']) ? $shipping_params['box_width'] : 0),
		'box_height' => isset($_data['box_height']) ? intval($_data['box_height']) : (!empty($shipping_params['box_height']) ? $shipping_params['box_height'] : 0),
	);

	$_data['shipping_params'] = serialize($_shipping_params);
	unset($_shipping_params);

	// add new product
	if (empty($product_id)) {
		$create = true;
		// product title can't be empty
		if(empty($product_data['product'])) {
			return false;
		}

		$product_id = db_query("INSERT INTO ?:products ?e", $_data);

		if (empty($product_id)) {
			return false;
		}

		//
		// Adding same product descriptions for all cart languages
		//
		$_data = $product_data;
		$_data['product_id'] =	$product_id;
		$_data['product'] = trim($_data['product'], " -");

		foreach ((array)Registry::get('languages') as $_data['lang_code'] => $_v) {
			db_query("INSERT INTO ?:product_descriptions ?e", $_data);
		}

	// update product
	} else {
		$create = false;
		if (isset($product_data['product']) && empty($product_data['product'])) {
			unset($product_data['product']);
		}

		$old_product_data = fn_get_product_data($product_id, $_SESSION['auth'], DESCR_SL, '', true, true, true, true);
		if (isset($old_product_data['amount']) && isset($_data['amount']) && ($old_product_data['amount'] <= 0) && ($_data['amount'] > 0)) {
			fn_send_product_notifications($product_id, $_data['product']);
		}

		db_query("UPDATE ?:products SET ?u WHERE product_id = ?i", $_data, $product_id);

		$_data = $product_data;
		if (!empty($_data['product'])){
			$_data['product'] = trim($_data['product'], " -");
		}
		db_query("UPDATE ?:product_descriptions SET ?u WHERE product_id = ?i AND lang_code = ?s", $_data, $product_id, $lang_code);
	}

	// Log product add/update
	fn_log_event('products', !empty($create) ? 'create' : 'update', array(
		'product_id' => $product_id
	));

	if (!empty($product_data['product_features'])) {
		$i_data = array(
			'product_id' => $product_id,
			'lang_code' => $lang_code
		);


		foreach ($product_data['product_features'] as $feature_id => $value) {

			// Check if feature is applicable for this product
			$id_paths = db_get_fields("SELECT ?:categories.id_path FROM ?:products_categories LEFT JOIN ?:categories ON ?:categories.category_id = ?:products_categories.category_id WHERE product_id = ?i", $product_id);

			$_params = array(
				'category_ids' => array_unique(explode('/', implode('/', $id_paths))),
				'feature_id' => $feature_id
			);
			list($_feature) = fn_get_product_features($_params);

			if (empty($_feature)) {
				$_feature = db_get_field("SELECT description FROM ?:product_features_descriptions WHERE feature_id = ?i AND lang_code = ?s", $feature_id, CART_LANGUAGE);
				$_product = db_get_field("SELECT product FROM ?:product_descriptions WHERE product_id = ?i AND lang_code = ?s", $product_id, CART_LANGUAGE);
				fn_set_notification('E', fn_get_lang_var('error'), str_replace(array('[feature_name]', '[product_name]'), array($_feature, $_product), fn_get_lang_var('product_feature_cannot_assigned')));
				continue;
			}

			$i_data['feature_id'] = $feature_id;
			unset($i_data['value']);
			unset($i_data['variant_id']);
			unset($i_data['value_int']);
			$feature_type = db_get_field("SELECT feature_type FROM ?:product_features WHERE feature_id = ?i", $feature_id);

			// Delete variants in current language
			if ($feature_type == 'T') {
				db_query("DELETE FROM ?:product_features_values WHERE feature_id = ?i AND product_id = ?i AND lang_code = ?s", $feature_id, $product_id, $lang_code);
			} else {
				db_query("DELETE FROM ?:product_features_values WHERE feature_id = ?i AND product_id = ?i", $feature_id, $product_id);
			}

			if ($feature_type == 'D') {
				$i_data['value_int'] = fn_parse_date($value);
			} elseif ($feature_type == 'M') {
				if (!empty($product_data['add_new_variant'][$feature_id]['variant'])) {
					$value = empty($value) ? array() : $value;
					$value[] = fn_add_feature_variant($feature_id, $product_data['add_new_variant'][$feature_id]);
				}

				if (!empty($value)) {
					foreach ($value as $variant_id) {
						foreach (Registry::get('languages') as $i_data['lang_code'] => $_d) { // insert for all languages
							$i_data['variant_id'] = $variant_id;

							db_query("REPLACE INTO ?:product_features_values ?e", $i_data);
						}
					}
				}

				continue;
			} elseif (in_array($feature_type, array('S', 'N', 'E'))) {
				if (!empty($product_data['add_new_variant'][$feature_id]['variant'])) {
					$i_data['variant_id'] = fn_add_feature_variant($feature_id, $product_data['add_new_variant'][$feature_id]);

				} elseif (!empty($value) && $value != 'disable_select') {
					if ($feature_type == 'N') {
						$i_data['value_int'] = db_get_field("SELECT variant FROM ?:product_feature_variant_descriptions WHERE variant_id = ?i AND lang_code = ?s", $value, CART_LANGUAGE);
					}
					$i_data['variant_id'] = $value;
				} else {
					continue;
				}
			} else {
				if ($value == '') {
					continue;
				}
				if ($feature_type == 'O') {
					$i_data['value_int'] = $value;
				} else {
					$i_data['value'] = $value;
				}
			}

			if ($feature_type != 'T') { // feature values are common for all languages, except text (T)
				foreach (Registry::get('languages') as $i_data['lang_code'] => $_d) {
					db_query("REPLACE INTO ?:product_features_values ?e", $i_data);
				}
			} else { // for text feature, update current language only
				$i_data['lang_code'] = $lang_code;
				db_query("INSERT INTO ?:product_features_values ?e", $i_data);
			}
		}
	}

	// Update product prices
	if (isset($product_data['price'])) {
		if (!isset($product_data['prices'])) {
			$product_data['prices'] = array();
			$skip_price_delete = true;
		}
		$_price = array (
			'price' => abs($product_data['price']),
			'lower_limit' => 1,
		);

		array_unshift($product_data['prices'], $_price);
	}

	if (!empty($product_data['prices'])) {
		if (empty($skip_price_delete)) {
			db_query("DELETE FROM ?:product_prices WHERE product_id = ?i", $product_id);
		}

		foreach ($product_data['prices'] as $v) {
			if (!empty($v['lower_limit'])) {
				$v['product_id'] = $product_id;
				db_query("REPLACE INTO ?:product_prices ?e", $v);
			}
		}
	}

	if (!empty($product_data['popularity'])) {
		$_data = array (
			'product_id' => $product_id,
			'total' => intval($product_data['popularity'])
		);

		db_query("INSERT INTO ?:product_popularity ?e ON DUPLICATE KEY UPDATE total = ?i", $_data, $product_data['popularity']);
	}

	return $product_id;
}

function fn_multiple_vendors_get_inventory($product_id) {
	$product = db_get_row("SELECT p.product_id, product FROM ?:products AS p LEFT JOIN ?:product_descriptions AS pd ON p.product_id=pd.product_id WHERE p.product_id=?i AND pd.lang_code=?s", $product_id, DESCR_SL);
    Registry::set('runtime.vsp_query', true);
    $product['options'] = fn_get_product_options($product, DESCR_SL, true, true);
    Registry::set('runtime.vsp_query', false);

    //get parent vendor combination
	$product['combinations'] = db_get_array("SELECT * FROM ?:product_options_inventory WHERE product_id = ?i AND vendor_id = ?i", $product['product_id'], 0);

	foreach ($product['combinations'] as &$value) {
		//get vendor amount for parent vendor combination
		$amount = db_get_field ("SELECT amount FROM ?:product_options_inventory WHERE combination_hash = ?i AND vendor_id = ?i", $value['combination_hash'], Registry::get('runtime.company_id'));
		if (!empty($amount)) {
			$value['amount'] = $amount;
		} else {
			$value['amount'] = 0;
		}
	}

	foreach ($product['combinations'] as &$v) {
		$v['combination'] = fn_get_product_options_by_combination($v['combination']);
	}
	return $product;
}

function fn_multiple_vendors_get_product_options($fields, &$condition, $join, $extra_variant_fields, $product_ids, $lang_code)
{
    if (AREA == 'A' && Registry::get('runtime.company_id')) {
        $condition = str_replace('AND a.company_id IN (0, ' . Registry::get('runtime.company_id') . ')', '', $condition);
    }
}

function fn_create_product_exceptions($product_id)
{
    $tracking = db_get_field("SELECT ?:products.tracking FROM ?:products WHERE ?:products.product_id = ?i", $product_id);

    if ($tracking == 'O' &&  Registry::get('settings.General.allow_negative_amount') != 'Y') {
        db_query("DELETE FROM ?:product_options_exceptions WHERE product_id=?i", $product_id);

        $null_combinations = array_unique(db_get_fields("SELECT combination_hash FROM ?:product_options_inventory WHERE product_id = ?i AND amount <= 0", $product_id));
        $not_null_combinations = array_unique(db_get_fields("SELECT combination_hash FROM ?:product_options_inventory WHERE product_id = ?i AND amount > 0", $product_id));

        if(!empty($null_combinations)) {
            foreach ($null_combinations as $n_comb) {
                if (!empty($not_null_combinations)) {
                    $result = false;
                    foreach ($not_null_combinations as $n_n_comb) {
                        if ($n_comb == $n_n_comb) {
                            $result = true; break;
                        }
                    }
                    if (!$result) {
                        $combinations[] = db_get_field ("SELECT combination FROM ?:product_options_inventory WHERE combination_hash = ?i", $n_comb);
                    }
                } else {
                    $combinations[] = db_get_field ("SELECT combination FROM ?:product_options_inventory WHERE combination_hash = ?i", $n_comb);
                }
            }
        }

        if (!empty($combinations)) {
            foreach ($combinations as $_comb) {
                $exist = fn_check_combination(fn_get_product_options_by_combination($_comb), $product_id);
                $_data = array(
                    'product_id' => $product_id,
                    'combination' => serialize(fn_get_product_options_by_combination($_comb)),
                );
                if (!$exist) {
                    db_query("INSERT INTO ?:product_options_exceptions ?e", $_data);
                }
            }
            fn_update_exceptions($product_id);
        }
        return true;
    }
    return false;
}

function fn_companies_filter_company_product_categories(&$request, &$product_data)
{
    if (Registry::get('runtime.company_id')) {
        $company_data = fn_get_company_data(Registry::get('runtime.company_id'));//Registry::get('s_companies.' . Registry::get('runtime.comapy_id'));

        $company_categories = !empty($company_data['categories']) ? explode(',', $company_data['categories']) : array();
        if (empty($company_categories)) {
            // all categories are allowed
            return true;
        }

        if (!empty($request['category_id']) && !in_array($request['category_id'], $company_categories)) {
            unset($request['category_id']);
            $changed = true;
        }
        if (!empty($product_data['main_category']) && !in_array($product_data['main_category'], $company_categories)) {
            unset($product_data['main_category']);
            $changed = true;
        }
        if (!empty($product_data['add_categories'])) {
            $add_categories = explode(',', $product_data['add_categories']);
            foreach ($add_categories as $k => $v) {
                if (!in_array($v, $company_categories)) {
                    unset($add_categories[$k]);
                    $changed = true;
                }
            }
            $product_data['add_categories'] = implode(',', $add_categories);
        }
    }

    return empty($changed);
}

function fn_multiple_vendors_gather_additional_product_data_post(&$product, $auth, $params)
{

    if (empty($product['company_id'])) {
        $product['company_id'] = db_get_field("SELECT company_id FROM ?:products WHERE product_id = ?i", $product['product_id']);
    }

    if (!empty($product['combination_hash'])) {
        $vendors_ids = db_get_fields ("SELECT vendor_id FROM ?:product_options_inventory WHERE product_id = ?i AND combination_hash = ?i AND vendor_id != 0 AND amount > 0", $product['product_id'], $product['combination_hash']);

        if (!empty($vendors_ids)) {
            foreach ($vendors_ids as $vendor_id) {
                $vendor_name = db_get_field ("SELECT company FROM ?:companies WHERE company_id = ?i", $vendor_id);
                $vendor_price = db_get_field ("SELECT price FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", $vendor_id, $product['product_id']);
                $product['vendors_products'][$vendor_id] = array ('name' => $vendor_name, 'price' => $vendor_price);
            }
        }

        $retailer_amount = db_get_field ("SELECT amount FROM ?:product_options_inventory WHERE product_id = ?i AND combination_hash = ?i AND vendor_id = 0", $product['product_id'], $product['combination_hash']);

        if ($retailer_amount > 0) {

            if (Registry::get('runtime.controller') == 'checkout' || Registry::get('runtime.fake_company_id')) {
                $company_id = db_get_field("SELECT company_id FROM ?:products WHERE product_id = ?i", $product['product_id']);
                $price = fn_get_product_price($product['product_id'], $product['amount'], $auth);
            } else {

                $company_id = $product['company_id'];
                if (!empty($product['price'])) {
                    $price = $product['price'];
                } else {
                    $price = fn_get_product_price($product['product_id'], !empty($product['amount']) ? $product['amount'] : 1, $_SESSION['auth']);
                }
            }

            $product['vendors_products'][$company_id] = array ('name' => fn_get_company_name($company_id), 'price' => $price);
        }
    } else {
        $vendors_ids = db_get_fields ("SELECT company_id FROM ?:vendors_products_data WHERE product_id = ?i AND amount > 0", $product['product_id']);

        if (!empty($vendors_ids)) {
            foreach ($vendors_ids as $vendor_id) {
                $vendor_name = db_get_field ("SELECT company FROM ?:companies WHERE company_id = ?i", $vendor_id);
                $vendor_price = db_get_field ("SELECT price FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", $vendor_id, $product['product_id']);
                $product['vendors_products'][$vendor_id] = array ('name' => $vendor_name, 'price' => $vendor_price);

            }
        }

        $retailer_amount = $product['amount'];

        if ($retailer_amount > 0) {

            if (Registry::get('runtime.controller') == 'checkout' || Registry::get('runtime.fake_company_id')) {
                $company_id = db_get_field("SELECT company_id FROM ?:products WHERE product_id = ?i", $product['product_id']);
                $price = fn_get_product_price($product['product_id'], $product['amount'], $auth);
            } else {
                $company_id = $product['company_id'];
                $price = $product['price'];
            }

            $amount = db_get_field("SELECT amount FROM ?:product_vendor_sell WHERE company_id = ?i AND product_id = ?i", $company_id, $product['product_id']);

            $product['vendors_products'][$company_id] = array ('name' => fn_get_company_name($company_id), 'price' => $price, 'amount' => $amount);
        }
    }

    if (AREA == 'C' && Registry::get('runtime.controller') != 'checkout') {


        $origin_comapny_id = db_get_field('SELECT company_id FROM ?:products WHERE product_id = ?i', $product['product_id']);
        $tracking = db_get_field("SELECT tracking FROM ?:products WHERE product_id = ?i", $product['product_id']);

        if (!empty($product['vendor_id'])) {
            $product['company_id'] = $product['vendor_id'];
        }

        if ($origin_comapny_id != $product['company_id']) {

            if ($tracking == ProductTracking::TRACK_WITHOUT_OPTIONS) {
                //$product['amount'] = db_get_field("SELECT amount FROM ?:vendors_products_data WHERE product_id = ?i and company_id = ?i", $product['product_id'], $product['company_id']);
            } else {
                $cart_id = fn_generate_cart_id($product['product_id'], array('product_options' => $product['selected_options']), true);
                $product['invetory_amount'] = $product['amount'] = db_get_field("SELECT amount FROM ?:product_options_inventory WHERE combination_hash = ?i AND vendor_id = ?i", $cart_id, $product['company_id']);
                $update_amount = true;
            }




        } else {

            if ($tracking == ProductTracking::TRACK_WITHOUT_OPTIONS) {
                //$product['amount'] = db_get_field("SELECT amount FROM ?:products WHERE product_id = ?i", $product['product_id']);
            } else {
                $cart_id = fn_generate_cart_id($product['product_id'], array('product_options' => $product['selected_options']), true);
                $product['invetory_amount'] = $product['amount'] = db_get_field("SELECT amount FROM ?:product_options_inventory WHERE combination_hash = ?i AND vendor_id = ?i", $cart_id, 0);
                $update_amount = true;
            }
        }

        if ($tracking == ProductTracking::TRACK_WITH_OPTIONS && !empty($update_amount)) {
            $product['inventory_amount'] = $product['amount'];
        }


//        if ($tracking == ProductTracking::TRACK_WITH_OPTIONS && $product['invetory_amount'] == 0) {
//            $company_id = $product['company_id'];
//            $price = $product['price'];
//            $product['vendors_products'][$company_id] = array ('name' => fn_get_company_name($company_id), 'price' => $price);
//        }



        if (empty($product['amount']) || $tracking == ProductTracking::TRACK_WITH_OPTIONS && empty($product['invetory_amount'])) {
            if (!empty($product['vendors_products']) && is_array($product['vendors_products'])) {
                $vendors = array_keys($product['vendors_products']);
                $v_company_id = reset($vendors);
            }

            if (!empty($v_company_id)) {
                $product['company_id'] = $v_company_id;
                if ($origin_comapny_id != $product['company_id']) {

                    if ($tracking == ProductTracking::TRACK_WITHOUT_OPTIONS) {
                        $product['amount'] = db_get_field("SELECT amount FROM ?:vendors_products_data WHERE product_id = ?i and company_id = ?i", $product['product_id'], $product['company_id']);
                    } else {
                        $cart_id = fn_generate_cart_id($product['product_id'], array('product_options' => $product['selected_options']), true);
                        $product['invetory_amount'] = $product['amount'] = db_get_field("SELECT amount FROM ?:product_options_inventory WHERE combination_hash = ?i AND vendor_id = ?i", $cart_id, $product['company_id']);
                        $update_amount = true;
                    }
                } else {

                    if ($tracking == ProductTracking::TRACK_WITHOUT_OPTIONS) {
                        $product['amount'] = db_get_field("SELECT amount FROM ?:products WHERE product_id = ?i", $product['product_id']);
                    } else {
                        $cart_id = fn_generate_cart_id($product['product_id'], array('product_options' => $product['selected_options']), true);
                        $product['invetory_amount'] = $product['amount'] = db_get_field("SELECT amount FROM ?:product_options_inventory WHERE combination_hash = ?i AND vendor_id = ?i", $cart_id, 0);
                        $update_amount = true;
                    }
                }

                if ($tracking == ProductTracking::TRACK_WITH_OPTIONS && !empty($update_amount)) {
                    $product['inventory_amount'] = $product['amount'];
                }
            }
        }



        if (!empty($origin_comapny_id) && $origin_comapny_id != $product['company_id']) {
            $isset_vendor_product_data = db_get_row("SELECT * FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", $product['company_id'], $product['product_id']);

            if (!empty($isset_vendor_product_data) && !empty($isset_vendor_product_data['price'])) {
                //$product['price'] = $isset_vendor_product_data['price'];
            }
        }

    }
}

function fn_multiple_vendors_check_add_to_cart_pre($cart, $product, $product_id, &$result)
{
    $_company_id = db_get_field('SELECT company_id FROM ?:products WHERE product_id = ?i', $product_id);

    if (!empty($product['extra']['product_vendor']) && $_company_id != $product['extra']['product_vendor']) {

        $tracking = db_get_field("SELECT tracking FROM ?:products WHERE product_id = ?i", $product_id);

        if ($tracking == ProductTracking::TRACK_WITH_OPTIONS) {
            $hash = fn_generate_cart_id($product_id, array('product_options' => $product['product_options']));
            $amount = db_get_array('SELECT amount FROM ?:product_options_inventory WHERE combination_hash = ?s AND vendor_id = ?i', $hash, $product['extra']['product_vendor']);

        } else {
            $amount = db_get_field('SELECT amount FROM ?:vendors_products_data WHERE product_id = ?i AND company_id = ?i', $product_id, $product['extra']['product_vendor']);
        }
        if (empty($amount)) {
            $result = false;
        }
    }
}

function fn_multiple_vendors_get_product_data_post(&$product_data, $auth, $preview, $lang_code)
{
    if ($company_id = Registry::get('runtime.for_vendor')) {
        $product_data['base_price'] = $product_data['price'] = db_get_field ("SELECT price FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", $company_id, $product_data['product_id']);
        $product_data['amount'] = db_get_field ("SELECT amount FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", $company_id, $product_data['product_id']);
    }
}


function fn_multiple_vendors_get_additional_information (&$product, &$product_data) {
	if (!empty($product_data['product_data'][$product['product_id']]['extra']['product_vendor']) && $product_data['product_data'][$product['product_id']]['extra']['product_vendor'] !== $product['company_id']) {
		$product['vendor_id'] = $product_data['product_data'][$product['product_id']]['extra']['product_vendor'];
        $product['base_price'] = $product['price'] = db_get_field ("SELECT price FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", $product_data['product_data'][$product['product_id']]['extra']['product_vendor'], $product['product_id']);
        $product['amount'] = db_get_field ("SELECT amount FROM ?:vendors_products_data WHERE company_id = ?i AND product_id = ?i", $product_data['product_data'][$product['product_id']]['extra']['product_vendor'], $product['product_id']);


        $product['prices'] = array();
	} else {
        $product['vendor_id'] = $product['company_id'];
    }
}

function fn_multiple_vendors_calculate_options(&$cart_products, &$_cart, $auth)
{
    foreach ($cart_products as $item_id => $product) {
        if (!empty($product['extra']['product_vendor'])) {
            if (isset($_cart['products'][$item_id])) {
                $_cart['products'][$item_id]['extra']['product_vendor'] = $product['extra']['product_vendor'];
            }
        }
    }
}

function fn_multiple_vendors_get_cart_product_data($product_id, &$_pdata, &$product, $auth, $cart, $hash)
{
    if (!empty($product['extra']['product_vendor'])) {
        $_price = db_get_field('SELECT price FROM ?:vendors_products_data WHERE product_id = ?i AND company_id = ?i', $product_id, $product['extra']['product_vendor']);

        if (!empty($_price)) {
            $product['base_price'] = $product['price'] = $_pdata['base_price'] = $_pdata['price'] = $_price;
        }
    }
}

function fn_multiple_vendors_generate_cart_id(&$_cid, $extra, $only_selectable)
{
    if (!empty($extra['product_vendor'])) {
        $_cid[] = $extra['product_vendor'];
    }
}

function fn_multiple_vendors_get_cart_product_data_post($hash, &$product, $skip_promotion, $cart, $auth, $promotion_amount, &$_pdata)
{
    if (!empty($product['extra']['product_vendor'])) {
        $_pdata['company_id'] = $_pdata['extra']['product_vendor'] = $product['extra']['product_vendor'];
    }
}
