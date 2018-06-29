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

if ($mode == 'place_order') {
	// exit;
	$product_zip_avail = array();
	$shipping_zipcode = $cart['user_data']['s_zipcode'];
	foreach ($cart['products'] as $key => $value) {
		if (!fn_zip_check_availability($value['product_id'] , $shipping_zipcode)) {
			$product_zip_avail[$value['product_id']] = array('product_id' => $value['product_id'] , 'available' => 'no');
		}
	}
	if (!empty($product_zip_avail)) {
		fn_set_notification('E', __('error'), __('sorry_cannot_place_order_as_some_products_are_unable_to_ship'));
		return array(CONTROLLER_STATUS_REDIRECT, 'checkout.checkout');
	}
}