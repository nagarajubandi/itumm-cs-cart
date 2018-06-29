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

use Tygh\Registry;

if ($mode == 'view' || $mode == 'quick_view') {
	$current_zip_code = fn_get_cookie('zip_code');
	if(!empty($current_zip_code)){
		Registry::get('view')->assign('zip_code_active', 'yes');
		Registry::get('view')->assign('current_zip_code', $current_zip_code);
		$pin_zip_code = $current_zip_code;
		$product_id = $_REQUEST['product_id'];
		$result = db_get_array("SELECT * FROM ?:zipcode_validator_list WHERE product_id = ?i AND code = ?s", $product_id, $pin_zip_code);
		if(!empty($result)){
			Registry::get('view')->assign('is_available', 'yes');
		}else{
			Registry::get('view')->assign('is_available', 'no');
		}
	}else{
		Registry::get('view')->assign('zip_code_active', 'no');
		Registry::get('view')->assign('current_zip_code', '');
	}
}