<?php
/******************************************************************
# EBS Payment Method - EBS Payment Method                         *
# ----------------------------------------------------------------*
# author    Webkul                                                *
# copyright Copyright (C) 2010 webkul.com. All Rights Reserved.   *
# @license - http://www.gnu.org/licenses/gpl.html GNU/GPL         *
# Websites: http://webkul.com                                     *
*******************************************************************
*/   

if ( !defined('AREA') ) { die('Access denied'); }

function fn_ebs_install()
{
	$data = array (
				'processor' => 'EBS Payment Gateway',
				'processor_script' => 'ebs.php',
				'processor_template' => 'views/orders/components/payments/cc_outside.tpl',
				'admin_template' => 'ebs.tpl',
				'callback' => 'Y',
				'type' => 'P',
				'addon' => 'ebs_payment'
				);
	db_query('INSERT INTO ?:payment_processors ?e', $data);
	fn_set_notification('I',__("ebs_note"),__("please_ensure_inr_should_be_configured_in_your_store"));
}
function fn_ebs_uninstall()
{
	$condition = array (
				'processor' => 'EBS Payment Gateway',
				'processor_script' => 'ebs.php',
				'processor_template' => 'views/orders/components/payments/cc_outside.tpl',
				'admin_template' => 'ebs.tpl',
				'callback' => 'Y',
				'type' => 'P',
				'addon' => 'ebs_payment'
				);
	db_query("DELETE FROM ?:payment_processors WHERE ?w", $condition);
}