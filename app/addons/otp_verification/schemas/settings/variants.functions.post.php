<?php
/********************************************************************
# OTP Verification - OTP Verification 								*
# ------------------------------------------------------------------*
# author    Webkul                                                	*
# copyright Copyright (C) 2010 webkul.com. All Rights Reserved.   	*
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL     	*
# Websites: http://webkul.com                                     	*
*********************************************************************
*/

/**
 * Get payment methods
 */
function fn_settings_variants_addons_otp_verification_otp_send_payments()
{
    return db_get_hash_single_array("SELECT payment_id, payment FROM ?:payment_descriptions WHERE lang_code = '" . CART_LANGUAGE . "' ORDER BY payment_id", array('payment_id', 'payment'));
}