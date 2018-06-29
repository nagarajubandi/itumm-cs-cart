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

use Tygh\Bootstrap;
use Tygh\Registry;
use Tygh\Storage;

// --------- zip core functions ------------------

//
// Export data using pattern
// Parameters:
// @pattern - import/export pattern
// @export_fields - export defined fields only
// @options - export options
// FIXME: add export conditions

function fn_zip_export($pattern, $export_fields, $options)
{
    if (empty($pattern) || empty($export_fields)) {
        return false;
    }
    $data_exported = false;

    $_result = array();
    $product_ids = array();
    $i=0;
    if(isset($_SESSION['my_export_ranges']) && !empty($_SESSION['my_export_ranges'])){
        $data_with_ids = $_SESSION['my_export_ranges'];
        foreach ($data_with_ids as $in => $id) {
            $db_data = db_get_array("SELECT * FROM ?:zipcode_validator_list WHERE product_id = ?i" , $id);
            foreach ($db_data as $index => $data) {
                fn_set_progress('echo', __('exporting_data') . ':&nbsp;<b> '.$i.' </b>');
                $i ++;
                $_result[] = array(__('product_id') => $data['product_id'] , __('zip_code') => $data['code']);
            }
        }
    }else{
        $data_with_ids = db_get_array("SELECT * FROM ?:zipcode_validator_list");
        foreach ($data_with_ids as $index => $data) {
            fn_set_progress('echo', __('exporting_data') . ':&nbsp;<b> '.$i.' </b>');
            $i ++;
            $_result[] = array(__('product_id') => $data['product_id'] , __('zip_code') => $data['code']);
        }
    }
    // Put data
    $enclosure = '"';
    fn_echo(' .');
    if(!empty($_result) && !empty($options) && !empty($enclosure)){
        fn_zip_put_csv($_result, $options, $enclosure);
        $data_exported = true;
    }

    fn_set_progress('echo', __('processing'), false);

    if ($data_exported && file_exists(fn_get_files_dir_path() . $options['filename'])) {

        $data_exported = true;
    }else{
        $data_exported = false;
    }

    return $data_exported;
}

//
// Put data to csv file
// Parameters:
// @data - export data
// @options - options

function fn_zip_put_csv(&$data, &$options, $enclosure)
{
    static $output_started = false;

    $eol = "\n";

    if ($options['delimiter'] == 'C') {
        $delimiter = ',';
    } elseif ($options['delimiter'] == 'T') {
        $delimiter = "\t";
    } else {
        $delimiter = ';';
    }

    fn_mkdir(fn_get_files_dir_path());

    foreach ($data as $k => $v) {
        foreach ($v as $name => $value) {
            $data[$k][$name] = $enclosure . str_replace(array("\r","\n","\t",$enclosure), array('','','',$enclosure.$enclosure), $value) . $enclosure;
        }
        // If a line in a csv file ends with 3 or more double quotes (i.e. """), the mime content type is often
        // determined incorrectly, e.g. by using finfo_file or mime_content_type php functions.
        // To get round it, add an extra space to lines like this:
        if (substr($data[$k][$name], -3) == '"""') {
            $data[$k][$name] .= ' ';
        }
    }

    if ($output_started == false || isset($options['force_header'])) {
        Registry::get('view')->assign('fields', array_keys($data[0]));
    } else {
        Registry::get('view')->clearAssign('fields');
    }

    Registry::get('view')->assign('export_data', $data);
    Registry::get('view')->assign('delimiter', $delimiter);
    Registry::get('view')->assign('eol', $eol);

    $csv = Registry::get('view')->fetch('addons/zipcode_validator/views/zipcode_validator/components/export_csv.tpl');
    $fd = fopen(fn_get_files_dir_path() . $options['filename'], ($output_started && !isset($options['force_header'])) ? 'ab' : 'wb');
    if ($fd) {
        fwrite($fd, $csv, strlen($csv));
        fclose($fd);
        @chmod(fn_get_files_dir_path() . $options['filename'], DEFAULT_FILE_PERMISSIONS);
    }

    if ($output_started == false) {
        $output_started = true;
    }

    unset($options['force_header']);

    return true;
}

//
// Import data using pattern
// Parameters:
// @pattern - import/export pattern
// @import_data - data to import
// @options - import options

function fn_zip_import($pattern, $import_data, $options)
{
    if (empty($pattern) || empty($import_data)) {
        return false;
    }

    $processed_data = array (
        'E' => 0, // existent
        'N' => 0, // new
        'S' => 0, // skipped
    );
    foreach ($import_data as $key => $data) {
        if(fn_product_exists($data['product_id']) && !empty($data['product_id']) && !empty($data['zip_code'])){
            $id = db_get_field("SELECT id FROM ?:zipcode_validator_list WHERE product_id = ?i AND code = ?s", $data['product_id'] , $data['zip_code'] );
            if(empty($id)){
                $data = array(
                    'product_id' => $data['product_id'] ,
                    'code' => $data['zip_code']
                    );
                db_query('INSERT INTO ?:zipcode_validator_list ?e', $data);
                $processed_data['N']++;
            }else{
                $processed_data['E']++;
            }
        }else{
            $processed_data['S']++;
        }
        // $processed_data['N']++;
    }

    fn_set_notification('W', __('important'), __('text_zip_data_imported', array(
        '[new]' => $processed_data['N'],
        '[exist]' => $processed_data['E'],
        '[skipped]' => $processed_data['S'],
        '[total]' => $processed_data['E'] + $processed_data['N'] + $processed_data['S']
    )));

    return true;
}

//
// Process csv file using pattern
// Parameters:
// @pattern - import/export pattern
// @file - path to csv file on filesystem
// @options - processing options

function fn_zip_get_csv($pattern, $file, $options)
{
    $max_line_size = 65536; // 64 Кб
    $result = array();

    if ($options['delimiter'] == 'C') {
        $delimiter = ',';
    } elseif ($options['delimiter'] == 'T') {
        $delimiter = "\t";
    } else {
        $delimiter = ';';
    }

    if (!empty($file) && file_exists($file)) {

        $encoding = fn_detect_encoding($file, 'F', !empty($options['lang_code']) ? $options['lang_code'] : CART_LANGUAGE);

        if (!empty($encoding)) {
             $file = fn_convert_encoding($encoding, 'UTF-8', $file, 'F');
        } else {
            fn_set_notification('W', __('warning'), __('text_zip_utf8_file_format'));
        }

        $f = false;
        if ($file !== false) {
            $f = fopen($file, 'rb');
        }

        if ($f) {
            // Get import schema
            $import_schema = fgetcsv($f, $max_line_size, $delimiter);
            if (empty($import_schema)) {
                fn_set_notification('E', __('error'), __('error_zip_cant_read_file'));

                return false;
            }

            // Check if we selected correct delimiter
            // If line was read without delimition, array size will be == 1.
            if (sizeof($import_schema) == 1) {

                // we could export one column if it is correct, otherwise show error
                if (!in_array($import_schema[0], array_keys($pattern['export_fields']))) {

                    fn_set_notification('E', __('error'), __('error_zip_incorrent_delimiter'));

                    return false;
                }
            }

            // Analyze schema - check for required fields
            if (fn_zip_analyze_schema($import_schema, $pattern) == false) {
                return false;
            }

            // Collect data
            $schema_size = sizeof($import_schema);
            $skipped_lines = array();
            $line_it = 1;
            while (($data = fn_fgetcsv($f, $max_line_size, $delimiter)) !== false) {

                $line_it ++;
                if (fn_is_empty($data)) {
                    continue;
                }

                if (sizeof($data) != $schema_size) {
                    $skipped_lines[] = $line_it;
                    continue;
                }

                $result[] = array_combine($import_schema, Bootstrap::stripSlashes($data));
            }

            if (!empty($skipped_lines)) {
                fn_set_notification('W', __('warning'), __('error_zip_incorrect_lines', array(
                    '[lines]' => implode(', ', $skipped_lines)
                )));
            }

            return $result;
        } else {
            fn_set_notification('E', __('error'), __('error_zip_cant_open_file'));

            return false;
        }
    } else {
        fn_set_notification('E', __('error'), __('error_zip_file_doesnt_exist'));

        return false;
    }
}

//
// Analyze import schema and convert fields using pattern
// Parameters:
// @schema - import schema
// @pattern - import/export pattern

function fn_zip_analyze_schema(&$schema, $pattern)
{
    $failed_fields = array();
    $schema_match = false;
    array_walk($schema, 'fn_trim_helper');

    foreach ($pattern['export_fields'] as $field => $data) {

        if (!empty($data['required']) && $data['required'] == true && !in_array($field, $schema)) {
            if (empty($data['db_field']) || $data['db_field'] != 'lang_code') {
                $failed_fields[] = $field;
            }
        }

        if (in_array($field, $schema)) {
            $schema_match = true;
        }

        // Replace fields aliases with database representation
        if (!empty($data['db_field'])) {
            $key = array_search($field, $schema);
            if ($key !== false) {
                $schema[$key] = $data['db_field'];
            }
        }
    }

    if (!empty($failed_fields)) {
        fn_set_notification('E', __('error'), __('error_zip_pattern_required_fields', array(
            '[fields]' => implode(', ', $failed_fields)
        )));

        return false;
    }

    if ($schema_match == false) {
        fn_set_notification('E', __('error'), __('error_zip_pattern_dont_match'));

        return false;
    }

    return true;
}

function update_zip_in_db($products = array())
{
    if (empty($products)) {
        return false;
    }
    echo "<pre>";
    print_r($products);
    exit;
    if(isset($_REQUEST['products_data']['new_code'])){
        $zip_code_in_db = db_get_array("SELECT code FROM ?:zipcode_validator_list WHERE product_id = ?i", $p_id);
        $zip_code_list_in_db = array();
        foreach ($zip_code_in_db as $key => $value) {
            $zip_code_list_in_db[] = $value['code'];
        }
        // $limit = db_paginate($params['page'], $params['items_per_page']); //Generate SQL condition to get only the necessary items
        $list_of_all_codes = array();
        foreach ($_REQUEST['products_data']['new_code'] as $key => $code) {
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
}

function add_zip_to_db($products = array())
{
    if (empty($products)) {
        return false;
    }
    $list_of_all_codes = array();
    foreach ($products as $key => $value) {
        $p_id = $value['product_id'];
        $zip_code_in_db = db_get_array("SELECT code FROM ?:zipcode_validator_list WHERE product_id = ?i", $p_id);
        $zip_code_list_in_db = array();
        foreach ($zip_code_in_db as $kk => $vv) {
            $zip_code_list_in_db[] = $vv['code'];
        }
        $code = $value['code'];
        $list_of_all_codes[] = $code;
        // check if zip and product id have unique combination
        if(!empty($code) && !in_array( $code, $zip_code_list_in_db)){ 
            $data = array(
                'product_id' => $p_id ,
                'code' => $code
                );
            db_query('REPLACE INTO ?:zipcode_validator_list ?e', $data);
        }
        // $codes = db_get_array("SELECT * FROM ?:zipcode_validator_list WHERE product_id = ?i", $p_id);
        // foreach ($codes as $key => $v) {
        //     if(!in_array($v['code'], $list_of_all_codes) ){
        //         $res = db_query("DELETE FROM ?:zipcode_validator_list WHERE product_id = ?i AND code = ?s", $p_id , $v['code']);
        //     }
        // }
    }
    return true;
}


/**
 * Paginate query results
 *
 * @param int $page page number
 * @param int $items_per_page items per page
 * @return string SQL substring
 */
function db_paginate_array(&$page, $items_per_page, $total_items = 0)
{
    $page = intval($page);
    if (empty($page)) {
        $page  = 1;
    }

    $items_per_page = intval($items_per_page);

    // Check if page in valid limits
    if ($total_items > 0) {
        $page = db_get_valid_page($page, $items_per_page, $total_items);
    }

    $low_limit = (($page - 1) * $items_per_page);
    return array($low_limit, $items_per_page);
}

function fn_zip_check_availability($product_id , $zipcode)
{
    $result = db_get_array("SELECT * FROM ?:zipcode_validator_list WHERE product_id = ?i AND code = ?s", $product_id, $zipcode);

    if (!empty($result)) {
        return true;
    }else{
        return false;
    }
}