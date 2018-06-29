<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Registry;

$otp_verification_phone_mask_codes = Registry::get('config.dir.root') . '/js/lib/inputmask-multi/phone-codes.json';
if (file_exists($otp_verification_phone_mask_codes)) {
    Tygh::$app['view']->assign('otp_verification_phone_mask_codes', file_get_contents($otp_verification_phone_mask_codes));
}