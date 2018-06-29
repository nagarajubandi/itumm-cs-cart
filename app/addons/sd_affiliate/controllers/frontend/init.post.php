<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if (!empty($_SESSION['partner_data']) && !empty($_SESSION['partner_data']['partner_id'])) {
    Registry::get('view')->assign('partner_code', fn_dec2any($_SESSION['partner_data']['partner_id']));
}
$approved = fn_sd_affiliate_get_affiliate($auth['user_id']);
if (empty($approved) && in_array(Registry::get('runtime.controller'), Registry::get('affiliate_controllers'))) {
    return array(CONTROLLER_STATUS_REDIRECT, fn_url());
}
