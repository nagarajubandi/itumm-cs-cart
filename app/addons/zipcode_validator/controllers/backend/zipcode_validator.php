<?php
/*********************************************************************************************
# Product Availability By Picode Or Zipcode  ---  Product Availability By Picode Or Zipcode  *
# -------------------------------------------------------------------------------------------*
# author    Himanshu Dangwal                                                                 *
# copyright Copyright (C) 2010 webkul.com. All Rights Reserved.                              *
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL                                *
# Websites: http://webkul.com                                                                *
**********************************************************************************************
*/

use Tygh\Enum\ProductTracking;
use Tygh\Registry;
use Tygh\BlockManager\SchemesManager;
use Tygh\Bootstrap;
use Tygh\Storage;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

set_time_limit(0);
fn_define('DB_LIMIT_SELECT_ROW', 30);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //
    // Add Single Product
    //
    if ($mode == 'single_product') {
        if(isset($_REQUEST['products_data'])){
            Registry::get('view')->assign('new_products_data', $_REQUEST['products_data']['new_code']);
            if(empty($_REQUEST['products_data']['product_id'])){
                fn_set_notification('E', __('error'), __('please_choose_any_product'));
                // return array(CONTROLLER_STATUS_REDIRECT, 'zipcode_validator.single_product');
            }elseif(empty($_REQUEST['products_data']['new_code'])){
                fn_set_notification('E', __('error'), __('please_insert_zip_code'));
                // return array(CONTROLLER_STATUS_REDIRECT, 'zipcode_validator.single_product');
            }else{
                $products = array();
                $p_id = $_REQUEST['products_data']['product_id'];
                foreach ($_REQUEST['products_data']['new_code'] as $key => $value) {
                    $products[] = array('product_id' => $p_id , 'code' => $value);
                }
                if(add_zip_to_db($products)){
                    fn_set_notification('N', __('notice'), __('single_product_added_successfully'));
                    return array(CONTROLLER_STATUS_OK, 'zipcode_validator.manage');
                }else{
                    fn_set_notification('E', __('error'), __('cannot_add_product_with_zip'));
                    // return array(CONTROLLER_STATUS_REDIRECT, 'zipcode_validator.single_product');
                }
            }
        }
    }

    //
    // Perform import
    //
    if ($mode == 'my_import') {
		$option['delimiter'] = $_REQUEST['delimeter'];

        $file = fn_filter_uploaded_data('csv_file');

        if (!empty($file)) {
            // $pattern = fn_zip_get_pattern_definition($_REQUEST['pattern_id'], 'import');
            // $pattern = array('product_id' , 'zip_code');
            $pattern = array(
            		'export_fields' => array(
            			__("product_id") => array(
            			'db_field' => "product_id",
            			'alt_key' => true,
            			'required' => true,
            			'alt_field' => "product_id",
            			),
            			__("zip_code") => array(
            			'db_field' => "zip_code",
            			'alt_key' => true,
            			'required' => true,
            			'alt_field' => "zip_code",
            			)
            		)
            	);

            if (($data = fn_zip_get_csv($pattern, $file[0]['path'], $option)) != false) {

                fn_zip_import($pattern, $data, $option);
            }
        } else {
            fn_set_notification('E', __('error'), __('error_zip_no_file_uploaded'));
        }

        return array(CONTROLLER_STATUS_OK, 'zipcode_validator.import');
    }

    //
    // Perform export
    //
    if ($mode == 'm_export') {
        if (!empty($_REQUEST['product_ids'])) {
            $_SESSION['my_export_ranges'] = $_REQUEST['product_ids'];
        }
        fn_set_notification('N', __('notice'), __('range_changed'));
        return array(CONTROLLER_STATUS_OK, 'zipcode_validator.export');
    }

    //
    // multiple delete
    //
    if ($mode == 'm_delete') {
        if (!empty($_REQUEST['product_ids'])) {
            foreach ($_REQUEST['product_ids'] as $v) {
                db_query('DELETE FROM ?:zipcode_validator_list WHERE product_id = ?i', $v);
            }
        }
        fn_set_notification('N', __('notice'), __('multiple_products_deleted_with_zip'));
        return array(CONTROLLER_STATUS_OK, 'zipcode_validator.manage');
    }

    //
    // delete product
    //
    if ($mode == 'delete') {
        if (!empty($_REQUEST['product_id'])) {
            db_query('DELETE FROM ?:zipcode_validator_list WHERE product_id = ?i', $_REQUEST['product_id']);
        }
        fn_set_notification('N', __('notice'), __('product_deleted_with_zip'));
        return array(CONTROLLER_STATUS_OK, 'zipcode_validator.manage');
    }

    //
    // manage zip code i.e add or delete
    //
    if ($mode == 'manage_zips') {
        $p_id_array = explode('.', $_REQUEST['dispatch']);
        $p_id = end($p_id_array);
        if(isset($_REQUEST['products_data_'.$p_id]['new_code'])){
            $zip_code_in_db = db_get_array("SELECT code FROM ?:zipcode_validator_list WHERE product_id = ?i", $p_id);
            $zip_code_list_in_db = array();
            foreach ($zip_code_in_db as $key => $value) {
                $zip_code_list_in_db[] = $value['code'];
            }
            // $limit = db_paginate($params['page'], $params['items_per_page']); //Generate SQL condition to get only the necessary items
            $list_of_all_codes = array();
            foreach ($_REQUEST['products_data_'.$p_id]['new_code'] as $key => $code) {
                $list_of_all_codes[] = $code;
                if(!empty($code) && !in_array( $code, $zip_code_list_in_db)){
                    $data = array(
                        'product_id' => $p_id ,
                        'code' => $code
                        );
                    $res = db_query('REPLACE INTO ?:zipcode_validator_list ?e', $data);
                }
            }
            $codes = db_get_array("SELECT * FROM ?:zipcode_validator_list WHERE product_id = ?i", $p_id);
            foreach ($codes as $key => $value) {
                if(!in_array($value['code'], $list_of_all_codes) ){
                    $res = db_query("DELETE FROM ?:zipcode_validator_list WHERE product_id = ?i AND code = ?s", $p_id , $value['code']);
                }
            }
        }else{
            db_query("DELETE FROM ?:zipcode_validator_list WHERE product_id = ?i", $p_id);
        }
        fn_set_notification('W', __('important'), __('zip_updated'));
        return array(CONTROLLER_STATUS_OK, 'zipcode_validator.manage');
    }

    if ($mode == 'my_export') {
        $pattern['export_fields'] = array(
            __("product_id") => array(
                'db_field' => "product_id",
                'alt_key' => true,
                'required' => true,
                'alt_field' => "product_id",
            ),
            __("zip_code") => array(
                'db_field' => "zip_code",
                'alt_key' => true,
                'required' => true,
                'alt_field' => "zip_code",
            )
        );
        $export_options = array(
                    'delimiter' => $_REQUEST['delimeter'],
                    'output' => $_REQUEST['export_options']['output'],
                    'filename' => $_REQUEST['export_options']['filename']
                );
        $layout_data['cols'] = array( __('product_id') , __('zip_code') );
        if (!empty($layout_data['cols'])) {

            if (fn_zip_export($pattern, $layout_data['cols'], $export_options) == true) {

                fn_set_notification('N', __('notice'), __('text_zipdata_exported'));

                // Direct download
                if ($_REQUEST['export_options']['output'] == 'D') {
                    $url = fn_url("zipcode_validator.get_file?filename=" . $export_options['filename'], 'A', 'current');

                // Output to screen
                } elseif ($_REQUEST['export_options']['output'] == 'C') {
                    $url = fn_url("exim.get_file?to_screen=Y&filename=" . $_REQUEST['export_options']['filename'], 'A', 'current');
                }

                if (defined('AJAX_REQUEST') && !empty($url)) {
                    Registry::get('ajax')->assign('force_redirection', $url);

                    exit;
                }
                return array(CONTROLLER_STATUS_OK, 'zipcode_validator.manage');

            } else {
                fn_set_notification('E', __('error'), __('error_zip_no_data_exported'));
            }
        } else {
            fn_set_notification('E', __('error'), __('error_zip_fields_not_selected'));
        }

        exit;
    }

    if ($mode == 'delete_file' && !empty($_REQUEST['filename'])) {
        $file = fn_basename($_REQUEST['filename']);
        fn_rm(fn_get_files_dir_path() . $file);

        return array(CONTROLLER_STATUS_REDIRECT);

    }

    if ($mode == 'delete_range') {
        unset($_SESSION['my_export_ranges']);
        return array(CONTROLLER_STATUS_REDIRECT, 'zipcode_validator.export');
    }

}

// 
// Manage listing 
// 
if($mode == 'manage'){
    $all_products_with_zip = array();
    if (isset($_REQUEST['is_search'])) {
        $field_list = "?:zipcode_validator_list.*";
        $join = $condition = '';
        if (!empty($_REQUEST['product_id'])) {
            $condition = db_quote(' AND ?:zipcode_validator_list.product_id = ?i', $_REQUEST['product_id']);
        }
        if (!empty($_REQUEST['code'])) {
            $code= $_REQUEST['code'];
            $condition = db_quote(' AND tb2.code LIKE ?l', "%$code%");
            if (!empty($_REQUEST['product_id'])) {
                $product_id = $_REQUEST['product_id'];
                // $condition = db_quote('AND tb1.product_id = ?i' , $product_id);
                $all_products_with_zip = db_get_array("SELECT tb1.* FROM ?:zipcode_validator_list AS tb1 LEFT JOIN ?:zipcode_validator_list AS tb2 ON tb1.product_id = tb2.product_id WHERE tb1.product_id = ?i AND tb2.code = ?s ",$product_id ,$code);
            }else{
                $all_products_with_zip = db_get_array("SELECT tb1.* FROM ?:zipcode_validator_list AS tb1 LEFT JOIN ?:zipcode_validator_list AS tb2 ON tb1.product_id = tb2.product_id WHERE tb2.code = ?s ",$code);
            }
        }else{
            $all_products_with_zip = db_get_array("SELECT * FROM ?:zipcode_validator_list WHERE 1 $condition");
        }
        // db_get_hash_single_array
    }else{
        $all_products_with_zip = db_get_array('SELECT * FROM ?:zipcode_validator_list');
    }
    $params = $_REQUEST;
	$auth = $_SESSION['auth'];
	$all_products = array();
	foreach ($all_products_with_zip as $key => $value) {
		$all_products[$value['product_id']][] = $value['code'];
	}
	$all_prods = array();
	foreach ($all_products as $p_id => $value) {
		$product = fn_get_product_data($p_id,$auth);
		$all_prods[$p_id] = array('product_id' => $p_id , 'product' => $product['product'] , 'codes' => $value);
	}
    if (isset($_REQUEST['is_search'])) {
        if (!empty($_REQUEST['product_name'])) {
            $new_array = array();
            $product_name = $_REQUEST['product_name'];
            foreach ($all_prods as $key => $value) {
                if (stripos($value['product'],$product_name) !== false) {
                    $new_array[$key] = $value;
                }
            }
            $all_prods = $new_array;
        }
    }
    if(isset($_REQUEST['items_per_page'])){
        $params['items_per_page'] = $_REQUEST['items_per_page'];
    }else{
        $params['items_per_page'] = Registry::get('settings.Appearance.admin_products_per_page');
    }
    $params['total_items'] = count($all_prods);
    
    if (isset($_REQUEST['sort_order'])) {
        if($_REQUEST['sort_order'] == 'asc'){
            $params['sort_order_rev'] = 'desc';
            $params['sort_order'] = $_REQUEST['sort_order'];
        }else{
            $params['sort_order_rev'] = 'asc';
            $params['sort_order'] = $_REQUEST['sort_order'];
        }
    }else{
        $params['sort_order_rev'] = 'asc';
        $params['sort_order'] = 'desc';
    }
    if (isset($_REQUEST['sort_by'])) {
        if ($_REQUEST['sort_by'] == 'product_id') {
            if ($_REQUEST['sort_order'] == 'asc') {
                ksort($all_prods);
            }elseif ($_REQUEST['sort_order'] == 'desc') {
                krsort($all_prods);
            }
            $params['sort_by'] = 'product_id';
        }elseif ($_REQUEST['sort_by'] == 'product_name') {
            if ($_REQUEST['sort_order'] == 'asc') {
                // sort($all_prods);
                $inventory = $all_prods;
                $price = array();
				foreach ($inventory as $key => $row)
				{
				    $price[$key] = $row['product'];
				}
				array_multisort($price, SORT_ASC, $inventory);
				$new_prod_list = array();
				foreach ($price as $i => $name) {
					foreach ($all_prods as $pid => $data) {
						if($name == $data['product']){
							$new_prod_list[$pid] = $data;
						}
					}
				}
				$all_prods = array();
				$all_prods = $new_prod_list;
            }elseif ($_REQUEST['sort_order'] == 'desc') {
                // rsort($all_prods);
                $inventory = $all_prods;
                $price = array();
				foreach ($inventory as $key => $row)
				{
				    $price[$key] = $row['product'];
				}
				array_multisort($price, SORT_DESC, $inventory);
				$new_prod_list = array();
				foreach ($price as $i => $name) {
					foreach ($all_prods as $pid => $data) {
						if($name == $data['product']){
							$new_prod_list[$pid] = $data;
						}
					}
				}
				$all_prods = array();
				$all_prods = $new_prod_list;
            }
            $params['sort_by'] = 'product_name';
        }
    }else{
        ksort($all_prods);
        $params['sort_by'] = 'product_id';
    }
    list($low_limit , $up_limit) = db_paginate_array($params['page'], $params['items_per_page'], $params['total_items']);
    $sliced_data = array_slice( $all_prods, $low_limit, $up_limit );
    Registry::get('view')->assign('products_with_zip', $sliced_data);
    // echo "<pre>";
    // print_r($params);
    // exit;
    Registry::get('view')->assign('search', $params);
}

if ($mode == 'export') {

    if (empty($_REQUEST['section'])) {
        $_REQUEST['section'] = 'products';
    }

    $patterns['export_fields'] = array(
        __("product_id") => array(
            'db_field' => "product_id",
            'alt_key' => true,
            'required' => true,
            'alt_field' => "product_id",
        ),
        __("zip_code") => array(
            'db_field' => "zip_code",
            'alt_key' => true,
            'required' => true,
            'alt_field' => "zip_code",
        )
    );

    $patterns['range_options'] = true;
    if (isset($_SESSION['my_export_ranges']) && !empty($_SESSION['my_export_ranges'])) {
        Registry::get('view')->assign('export_range', count($_SESSION['my_export_ranges']) );
        Registry::get('view')->assign('active_tab', $_SESSION['my_export_ranges']);
    }

    // Get export files
    $export_files = fn_get_dir_contents(fn_get_files_dir_path(), false, true);
    $result = array();

    foreach ($export_files as $file) {
        $result[] = array (
            'name' => $file,
            'size' => filesize(fn_get_files_dir_path() . $file),
        );
    }

    Registry::get('view')->assign('export_files', $result);
    Registry::get('view')->assign('files_rel_dir', fn_get_rel_dir(fn_get_files_dir_path()));

    Registry::get('view')->assign('pattern', $patterns);

} elseif ($mode == 'import') {

    // if (empty($_REQUEST['section'])) {
    //     $_REQUEST['section'] = 'products';
    // }

    // list($sections, $patterns) = fn_get_patterns($_REQUEST['section'], 'import');

    // if (empty($sections) && empty($patterns) || (isset($_REQUEST['section']) && empty($sections[$_REQUEST['section']]))) {
    //     return array(CONTROLLER_STATUS_DENIED);
    // }

    // $pattern_id = empty($_REQUEST['pattern_id']) ? key($patterns) : $_REQUEST['pattern_id'];

    // foreach ($patterns as $p_id => $p) {
    //     Registry::set('navigation.tabs.' . $p_id, array (
    //         'title' => $p['name'],
    //         'href' => "exim.import?pattern_id=" . $p_id . '&section=' . $_REQUEST['section'],
    //         'ajax' => true
    //     ));
    // }

    // Registry::set('navigation.dynamic.sections', $sections);
    // Registry::set('navigation.dynamic.active_section', $_REQUEST['section']);

    // unset($patterns[$pattern_id]['options']['lang_code']);
    // Registry::get('view')->assign('pattern', $patterns[$pattern_id]);
    // Registry::get('view')->assign('sections', $sections);

}

if ($mode == 'get_file' && !empty($_REQUEST['filename'])) {
    $file = fn_basename($_REQUEST['filename']);

    if (!empty($_REQUEST['to_screen'])) {
        header("Content-type: text/plain");
        readfile(fn_get_files_dir_path() . $file);
        exit;
    } else {
        fn_get_file(fn_get_files_dir_path() . $file);
    }

} elseif ($mode == 'select_range') {
    return array(CONTROLLER_STATUS_REDIRECT, 'zipcode_validator.manage');
}
if($mode == 'import' || $mode == 'export' || $mode == 'manage'){
    $my_sections['manage'] = array (
            'title' => __('list_view'),
            'href' => "zipcode_validator.manage"
        );
    $my_sections['import'] = array (
            'title' => __('import_products_with_zip'),
            'href' => "zipcode_validator.import"
        );
    $my_sections['export'] = array (
            'title' => __('export_products_with_zip'),
            'href' => "zipcode_validator.export"
        );
    Registry::set('navigation.dynamic.sections', $my_sections);
    Registry::set('navigation.dynamic.active_section', $mode);
}