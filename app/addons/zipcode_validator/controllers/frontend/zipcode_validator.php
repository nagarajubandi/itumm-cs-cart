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
if($mode == "check_pid"){
	if (defined('AJAX_REQUEST')) {
        // Registry::get('ajax')->assign('autocomplete', 'himanshu');
		$pin_zip_code = $_REQUEST['pin_zip_code'];
		$product_id = $_REQUEST['product_id'];
		$result = db_get_array("SELECT * FROM ?:zipcode_validator_list WHERE product_id = ?i AND code = ?s", $product_id, $pin_zip_code);
		$data_array['product_id'] = $product_id;
		fn_set_cookie('zip_code' , $pin_zip_code , COOKIE_ALIVE_TIME);
		if(!empty($result)){
			echo "yes";
			$data_array['available'] = 'yes';
			// fn_set_notification('N', __('Notice'), __('zip_pin_available'));
		}else{
			echo "no";
			$data_array['available'] = 'no';
			// fn_set_notification('W', __('Warning'), __("not_available"));
		}
		exit;
	}
}
if ($mode == 'remove_zip_code') {
	fn_set_cookie('zip_code' , null , -1 );
	// fn_set_notification('N', __('Notice'), __("code_removed"));
	exit;
}
if( $mode == 'fetch_zip_code' ){
	$current_zip_code = fn_get_cookie('zip_code');
	if(!empty($current_zip_code)){
		// Registry::get('view')->assign('zip_code_active', 'yes');
		// Registry::get('view')->assign('current_zip_code', $current_zip_code);
		$pin_zip_code = $current_zip_code;
		$product_id = $_REQUEST['product_id'];
		$result = db_get_array("SELECT * FROM ?:zipcode_validator_list WHERE product_id = ?i AND code = ?s", $product_id, $pin_zip_code);
		if(!empty($result)){
			echo $current_zip_code.'_yes' ;
			// Registry::get('view')->assign('is_available', 'yes');
		}else{
			echo $current_zip_code.'_no' ;
			// Registry::get('view')->assign('is_available', 'no');
		}
	}else{
		echo "no";
		// Registry::get('view')->assign('zip_code_active', 'no');
		// Registry::get('view')->assign('current_zip_code', '');
	}
	exit;
}