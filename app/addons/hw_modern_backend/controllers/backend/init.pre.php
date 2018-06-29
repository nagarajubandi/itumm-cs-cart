<?php
/*
 * © 2014 Hungryweb.net
 * 
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  
 * IN  THE "HW-LICENSE.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE. 
 * 
 * @website: www.hungryweb.net
 * @support: support@hungryweb.net
 *  
 */

if ( !defined('BOOTSTRAP') ) { die('Access denied'); }

use Tygh\Registry;

$auth = $_SESSION['auth'];
if($auth['user_id']>0 && isset($_GET['hw_modern_backend_update'])){

	if (!fn_hw_modern_backend_have_user_access('manage_modern_backend')){
		 return array(CONTROLLER_STATUS_DENIED);
	}

	$company_id = (int)Registry::get('runtime.company_id');
	fn_hw_modern_backend_update_styles('', $company_id);
	$suffix = '.'.$mode.'?id='.$_REQUEST['id'];
	return array(CONTROLLER_STATUS_OK, "hw_modern_backend$suffix"); 
}

#custom style for every store
$hwmb_store_id = (int)db_get_field('SELECT name FROM ?:hwmb WHERE name=?i AND type=?s', Registry::get('runtime.company_id'), 'stores');
Registry::get('view')->assign('hwmb_store_id', $hwmb_store_id);