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

$cart = & $_SESSION['cart'];

if ($mode == 'checkout') {
	$product_zip_avail = array();
	$shipping_zipcode = $cart['user_data']['s_zipcode'];
	foreach ($cart['products'] as $key => $value) {
		if (!fn_zip_check_availability($value['product_id'] , $shipping_zipcode)) {
			$product_zip_avail[$value['product_id']] = array('product_id' => $value['product_id'] , 'available' => 'no');
		}
	}
	Registry::get('view')->assign('product_zip_avail', $product_zip_avail);
	Registry::get('view')->assign('shipping_zipcode', $shipping_zipcode);
	if (!empty($product_zip_avail)) {
		$cart['shipping'] = array();
		$cart['chosen_shipping'] = array();
		$cart['shipping_required'] = 1;
		$cart['company_shipping_failed'] = 1;
		$cart['shipping_failed'] = 1;
		Registry::get('view')->assign('cart', $cart);
	}
}