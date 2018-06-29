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
use Tygh\Settings;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'update' && $_REQUEST['addon'] == 'wk_order_cancelation' && (!empty($_REQUEST['order_cancelation_data'])))
    {
        fn_update_order_cancelation_data($_REQUEST['order_cancelation_data']);          
    }
}

if ($mode == 'update') {
    if ($_REQUEST['addon'] == 'wk_order_cancelation') {
        Registry::get('view')->assign('order_cancelation_data', fn_get_order_cancelation_data());
    }
}

function fn_update_order_cancelation_data($order_cancelation_data, $company_id = null)
{
    if (!$setting_id = Settings::instance()->getId('order_cancelation_tpl_data', '')) {
        $setting_id = Settings::instance()->update(array(
            'name' =>           'order_cancelation_tpl_data',
            'section_id' =>     0,
            'section_tab_id' => 0,
            'type' =>           'A', // any not existing type
            'position' =>       0,
            'is_global' =>      'N',
            'handler' =>        ''
        ));
    }   

    Settings::instance()->updateValueById($setting_id, serialize($order_cancelation_data), $company_id);
}