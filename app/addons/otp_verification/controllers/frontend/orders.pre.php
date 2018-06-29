<?php
/******************************************************************
# otp verification--- otp verification                                            *
# ----------------------------------------------------------------*
# author    Webkul                                                *
# copyright Copyright (C) 2010 webkul.com. All Rights Reserved.   *
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL     *
# Websites: http://webkul.com                                     *
*******************************************************************
*/ 

use Tygh\Registry;
use Tygh\Mailer;
use Tygh\Navigation\LastView;
use Tygh\Tools\Url;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'repay') {
    $order_id=$_REQUEST["order_id"];
	$enable_checkout = Registry::get('addons.otp_verification.enable_checkout_for_non_verified_user');
	$is_verified = fn_check_is_number_verified();
	//fn_print_r($is_verified);
	if (fn_otp_verification_check_payment($_REQUEST['payment_id']) && $enable_checkout=='N' && !$is_verified) {
		if (isset($_SESSION['auth']['otp_data'])) {
			if ($_SESSION['auth']['otp_data']['is_verified'] != 'Y') {
				fn_set_notification("N" , __("notice")  , __("otp_incorrect"));
				return array(CONTROLLER_STATUS_REDIRECT , "orders.details&order_id=$order_id");
			}else{ 
		        unset($_SESSION['auth']['otp_data']);  
	            if (isset($_SESSION['otp_verification_data']['otp_resend'])) 
		        unset($_SESSION['otp_verification_data']['otp_resend']);  
            }
		}else{
			fn_set_notification("W" , __("warning")  , __("please_verify_your_otp"));
            return array(CONTROLLER_STATUS_REDIRECT , "orders.details&order_id=$order_id");
		}
	}
}

if ($mode == 'send_otp' || $mode == 'otp_resend') {
    $order_id=$_REQUEST["order_id"];
	if ($mode == 'otp_resend') {
		$retry_chance = Registry::get('addons.otp_verification.otp_otp_retry_chance');
		if ($retry_chance) {
			$ret_chance = substr($retry_chance, 10);
			$retry_chance = intval($ret_chance);
			if (isset($_SESSION['otp_verification_data']['otp_resend'])) {
				if($retry_chance <= $_SESSION['otp_verification_data']['otp_resend']) {
					fn_set_notification('W' , __('warning') , __('your_resend_tries_have_extended'));
					return array(CONTROLLER_STATUS_REDIRECT , "orders.details&order_id=$order_id");
				}else{
					$_SESSION['otp_verification_data']['otp_resend'] += 1; 
				}
			}else{
				$_SESSION['otp_verification_data']['otp_resend'] = 1;
			}
		}
	}
	if ($mode == 'send_otp' && isset($_SESSION['otp_verification_data']['otp_resend'])) {
		unset($_SESSION['otp_verification_data']['otp_resend']);
	}
	if ($mode == 'send_otp' && isset($_SESSION['auth']['otp_data'])) {
		unset($_SESSION['auth']['otp_data']);
	}
	require(Registry::get('config.dir.addons') . 'otp_verification/lib/twilio-phone-verification/Services/Twilio.php');
	$expire_time = Registry::get('addons.otp_verification.otp_otp_time_of_expiration_of_otp_code');
	$exp_time = substr($expire_time, 11);
	$expire_time = intval($exp_time);
	$twilio_phone_number = Registry::get('addons.otp_verification.otp_twilio_phone_number');
	$twilio_account_sid = Registry::get('addons.otp_verification.otp_twilio_account_sid');
	$twilio_access_token = Registry::get('addons.otp_verification.otp_twilio_access_token');
	
	$otp_length = Registry::get('addons.otp_verification.otp_otp_length');
	$characters = Registry::get('addons.otp_verification.otp_otp_characters');
	$otp_pattern = '';
	if (isset($characters['otp_all_chars']) && $characters['otp_all_chars'] == 'Y') {
		$otp_pattern .= '0123456789';
		$otp_pattern .= strtolower('abcdefghijklmnopqrstuvwxyz');
		$otp_pattern .= strtoupper('abcdefghijklmnopqrstuvwxyz');
		$otp_pattern .= "!#$%\&*+-/=?^_{|}~";
	}else{
		if (isset($characters['otp_numeral']) && $characters['otp_numeral'] == 'Y') {
			$otp_pattern .= '0123456789';
		}
		if (isset($characters['otp_alphabet_small']) && $characters['otp_alphabet_small'] == 'Y') {
			$otp_pattern .= strtolower('abcdefghijklmnopqrstuvwxyz');
		}
		if (isset($characters['otp_alphabet_caps']) && $characters['otp_alphabet_caps'] == 'Y') {
			$otp_pattern .= strtoupper('abcdefghijklmnopqrstuvwxyz');
		}
		if (isset($characters['otp_special_char']) && $characters['otp_special_char'] == 'Y') {
			$otp_pattern .= "!#$%\&"."'"."*+-/=?^_`{|}~";
		}
	}
	if (empty($otp_pattern)) {
		$otp_pattern .= '0123456789';
		$otp_pattern .= strtoupper('abcdefghijklmnopqrstuvwxyz');
	}
	if (!$otp_length) {
		$otp_length = 4;
	}

	$final_code = fn_otp_verification_random($otp_length , $otp_pattern);
	if (empty($twilio_account_sid) || empty($twilio_access_token) || empty($twilio_phone_number)) {
		fn_set_notification('E' , __('error') , __('ask_admin_to_configure_otp_verification'));
		return array(CONTROLLER_STATUS_REDIRECT , "orders.details&order_id=$order_id");
	}
	$body = __('otp_prefix_code');
	$body .= ' ';
	$body .= $final_code;
	if ($mode == 'otp_resend') {
		if (isset($_SESSION['auth']['otp_data']['phone_number'])) {
			$to = $_SESSION['auth']['otp_data']['phone_number'];
		}else{
			fn_set_notification('W' , __('warning') , __('please_change_you_phone_no'));
			return array(CONTROLLER_STATUS_REDIRECT , "orders.details&order_id=$order_id");
		}
	}else{
		if (isset($_REQUEST['otp_number'])) {
			$to = $_REQUEST['otp_number'];
		}
	}
	$body = html_entity_decode($body, ENT_QUOTES, 'UTF-8');
	try{
		$client = new Services_Twilio($twilio_account_sid, $twilio_access_token);
		$message = $client->account->messages->create(array( 
			'To' => $to, 
			'From' => $twilio_phone_number,
			'Body' => $body,
		));
		fn_set_notification("N" , __("notice")  , __('your_otp_is_send_to').' '.$to);
		$_SESSION['auth']['otp_data']['otp_key'] = $final_code;
		$_SESSION['auth']['otp_data']['is_verified'] = 'N';
		$_SESSION['auth']['otp_data']['generate_time'] = TIME;
		if (isset($_REQUEST['otp_number'])) {
			$_SESSION['auth']['otp_data']['phone_number'] = $_REQUEST['otp_number'];
		}
		if (is_numeric($expire_time)) {
			$total_expire_time = TIME + (60 * $expire_time);
			fn_set_notification('N' , __('notice') , __('please_note_your_otp_code_will_expire',array('[expire_time]' => $expire_time)) ,'I');
			$_SESSION['auth']['otp_data']['expire_time'] = $total_expire_time;//expiration time of key
		}
	}catch(Exception $e){
		unset($_SESSION['auth']['otp_data']);
		fn_set_notification('E' , __('error') , $e->getMessage());
	}
	return array(CONTROLLER_STATUS_REDIRECT , "orders.details&order_id=$order_id");
}

if ($mode == 'otp_verify') {
    $order_id=$_REQUEST["order_id"];
   
	if (isset($_SESSION['auth']['otp_data'])) {
		if (TIME > $_SESSION['auth']['otp_data']['expire_time']) {
			unset($_SESSION['auth']['otp_data']);
		}
	}
	if (isset($_SESSION['auth']['otp_data'])) {
		if ($_REQUEST['input_otp_key'] == $_SESSION['auth']['otp_data']['otp_key']) {
			$_SESSION['auth']['otp_data']['is_verified'] = 'Y';
			fn_set_notification("N" , __("notice")  , __("correct"));
		}else{
			fn_set_notification("W" , __("warning")  , __("incorrect"));
		}
	}else{
		fn_set_notification("W" , __("warning")  , __("sorry_your_otp_expired"));
	}
	return array(CONTROLLER_STATUS_REDIRECT , "orders.details&order_id=$order_id");
}

if ($mode == 'change_number') {
    fn_print_r($_REQUEST);
    
    $order_id=$_REQUEST["order_id"];
	if (isset($_SESSION['auth']['otp_data'])) {
		unset($_SESSION['auth']['otp_data']);
	}
	if (isset($_SESSION['otp_verification_data']['otp_resend'])) {
		unset($_SESSION['otp_verification_data']['otp_resend']);
	}
    fn_print_r($_SESSION['auth']['otp_data']);
	return array(CONTROLLER_STATUS_REDIRECT , "orders.details&order_id=$order_id");
}
// if($mode == 'repay')
// {
// 	if(isset($_REQUEST['start_over']) && ($_REQUEST['start_over'] == 'Y'))
// 		if (isset($_SESSION['otp_verification_data']['otp_resend'])) {
// 			unset($_SESSION['otp_verification_data']['otp_resend']);
// 		}
// }