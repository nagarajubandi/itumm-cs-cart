<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

define('ORDER_DATA_AFFILIATE_INFO', 'J');
define('AFFILIATE_DATA_TYPE_ORDER', 'O');
define('AFFILIATE_DATA_TYPE_PRODUCT', 'P');
define('AFFILIATE_DATA_TYPE_DISCOUNT', 'D');
define('AFFILIATE_DATA_TYPE_LEVEL', 'L');
define('AFFILIATE_DATA_TYPE_REFERER', 'R');
define('AFFILIATE_DATA_TYPE_AFFILIATE', 'A');
define('AFFILIATE_COOKIE_NAME', 'partner_id');
define('SECONDS_IN_WEEK', SECONDS_IN_DAY * 7);
define('SECONDS_IN_FORTNIGHT', SECONDS_IN_DAY * 15);

fn_define('BASE_D', 22);
fn_define('INDEX_D', 'VYMSCEDJHIXBLNPQRGKTUW');

if (AREA == 'C') {
    if (empty($_SESSION['partner_data'])) {
        $_SESSION['partner_data'] = array();
    }
    $partner_id = fn_get_cookie('partner_id');

    if (empty($_SESSION['partner_data']['partner_id']) && !empty($partner_id)) {
        $_SESSION['partner_data']['partner_id'] = $partner_id;
    }

    if ((empty($_SESSION['auth']['user_id']) || empty($_SESSION['partner_data']['partner_id'])) && empty($partner_id)) {
        if (!empty($_REQUEST['aff_id'])) {
            $_SESSION['partner_data']['partner_id'] = $_REQUEST['aff_id'];

        } elseif (!empty($_REQUEST['partner_id'])) {
            $_SESSION['partner_data']['partner_id'] = $_REQUEST['partner_id'];
        }
    }
}

//
// Commission types
//

$abs = array('A' => 'absolute');
$abs_and_per = array('A' => 'absolute', 'P' => 'percent');

$payout_types = array(
    'show' => array (
        'id' => 'show',
        'title' => 'payout_show',
        'value_types' => $abs,
        'default' => 'Y',
    ),
    'click' => array (
        'id' => 'click',
        'title' => 'payout_click',
        'value_types' => $abs,
        'default' => 'Y',
    ),
    'sale' => array (
        'id' => 'sale',
        'title' => 'payout_sales',
        'value_types' => $abs_and_per,
        'default' => 'Y',
    ),
    'new_customer' => array (
        'id' => 'new_customer',
        'title' => 'new_customer',
        'value_types' => $abs,
        'default' => 'Y',
    ),
    'new_partner' => array (
        'id' => 'new_partner',
        'title' => 'payout_new_partner',
        'value_types' => $abs,
        'default' => 'Y',
    ),
    'use_coupon' => array (
        'id' => 'use_coupon',
        'title' => 'payout_use_coupon',
        'value_types' => $abs_and_per,
        'default' => 'N',
    ),
    'init_balance' => array (
        'id' => 'init_balance',
        'title' => 'payout_init_balance',
        'value_types' => $abs,
        'default' => 'N',
    )
);

if (fn_allowed_for('MULTIVENDOR')) {
    $payout_types['new_vendor'] = array (
        'id' => 'new_vendor',
        'title' => 'new_vendor',
        'value_types' => $abs,
        'default' => 'Y',
    );
}
Registry::set('payout_types', $payout_types);
Registry::set('affiliate_controllers', array (
    'aff_statistics', 'affiliate_plans', 'banner_products', 'banners_manager', 'partners', 'payouts'
));
