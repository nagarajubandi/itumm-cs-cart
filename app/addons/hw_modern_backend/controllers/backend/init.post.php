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
if($auth['user_id']>0 && (isset($_SESSION['hwmd']) && (int)$_SESSION['hwmd']>0) && fn_hw_modern_backend_have_user_access('view_modern_backend') ){ 
    $hwmb_settings = fn_hw_modern_backend_get_data();
    $company_id = (int)Registry::get('runtime.company_id');
    fn_hw_modern_backend_activate_store($hwmb_settings, $company_id);
    if($_SESSION['hwmd'] == 2){
    	$_SESSION['hwmd'] = 1;
    	$hwmb_settings['open'] = 1;
    }
    Registry::get('view')->assign('hwmb_settings', $hwmb_settings);
}