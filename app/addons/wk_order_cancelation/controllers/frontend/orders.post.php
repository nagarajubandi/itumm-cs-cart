<?php
/******************************************************************
# Order Cancelation    ---  Order Cancelation     		     	  *
# ----------------------------------------------------------------*
# author    webkul                                                *
# copyright Copyright (C) 2010 webkul.com. All Rights Reserved.   *
# @license - http://www.gnu.org/licenses/gpl.html GNU/GPL         *
# Websites: http://webkul.com                                     *
*******************************************************************
*/

use Tygh\Registry;

if($mode == 'details')
{
	$order_info=fn_get_order_info($_REQUEST['order_id']);
	$result=fn_wk_check_cancel_order($order_info);
	if($result)
	{
		Registry::get('view')->assign('wk_show_cancel_order','yes');
	}
}


if($mode == 'wk_cancel_order')
{
	$order_info=fn_get_order_info($_REQUEST['order_id']);
	$result=fn_wk_check_cancel_order($order_info);
	if($result)
	{
		fn_change_order_status($order_info['order_id'], STATUS_CANCELED_ORDER, $order_info['status'], fn_get_notification_rules(array(), false));
	}
	return array(CONTROLLER_STATUS_OK,'orders.details&order_id='.$order_info['order_id']);
}
?>