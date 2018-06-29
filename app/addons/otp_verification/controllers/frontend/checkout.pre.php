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
   	if(!isset($_SESSION['auth']['otp_data']['step_1']) && !isset($_SESSION['auth']['otp_data']['step_4']) && !isset($_SESSION['auth']['otp_data']['register_step'])){
		if (isset($_SESSION['auth']['otp_data'])) {
			unset($_SESSION['auth']['otp_data']);
		}
		
   	}
if ($mode == 'place_order') {
	$enable_checkout = Registry::get('addons.otp_verification.enable_checkout_for_non_verified_user');
	$is_verified = fn_check_is_number_verified();
	$is_enabled_at_checkout = fn_check_phone_in_profile_fields_at_checkout();
	if (fn_otp_verification_check_payment($_REQUEST['payment_id']) && $enable_checkout=='N' && !$is_verified) {
		if (isset($_SESSION['auth']['otp_data'])) {
			if ($_SESSION['auth']['otp_data']['is_verified'] != 'Y') {
				fn_set_notification("N" , __("notice")  , __("otp_incorrect"));
				return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
			}
		}else{
			fn_set_notification("W" , __("warning")  , __("please_verify_your_otp"));
			return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
		}
	}else{
		if (isset($_SESSION['auth']['otp_data'])) {
			if ($_SESSION['auth']['otp_data']['is_verified'] != 'Y') {
				fn_set_notification("N" , __("notice")  , __("otp_incorrect"));
				return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
			}
		}else if(!$is_verified && $is_enabled_at_checkout && $enable_checkout=='N'){
			fn_set_notification("W" , __("warning")  , __("please_verify_your_number"));
			return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
		}
	}
	// if (isset($_SESSION['auth']['otp_data'])) {
	// 	unset($_SESSION['auth']['otp_data']);
	// }

}

if ($mode == 'change_number') {
	if (isset($_SESSION['auth']['otp_data'])) {
		unset($_SESSION['auth']['otp_data']);
	}
	if (isset($_SESSION['otp_verification_data']['otp_resend'])) {
		unset($_SESSION['otp_verification_data']['otp_resend']);
	}
	return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
}

if ($mode == 'send_otp' || $mode == 'otp_resend') {
	if ($mode == 'otp_resend') {
		$retry_chance = Registry::get('addons.otp_verification.otp_otp_retry_chance');
		$ret_chance = substr($retry_chance, 10);
		$retry_chance = intval($ret_chance);
		if ($retry_chance) {
			
			if (isset($_SESSION['otp_verification_data']['otp_resend'])) {
				if($retry_chance <= $_SESSION['otp_verification_data']['otp_resend']) {
					fn_set_notification('W' , __('warning') , __('your_resend_tries_have_extended'));
					return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
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
		return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
	}
	$body = __('otp_prefix_code');
	$body .= ' ';
	$body .= $final_code;
	if ($mode == 'otp_resend') {
		// fn_print_r($_SESSION);
		// exit;
		if (isset($_SESSION['auth']['otp_data']['phone_number'])) {
			$to = $_SESSION['auth']['otp_data']['phone_number'];
		}
		else{
			fn_set_notification('W' , __('warning') , __('please_change_you_phone_no'));
			return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
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
		// fn_set_notification("N" , __("notice")  , __('your_otp_is').' '.$final_code);
		$_SESSION['auth']['otp_data']['otp_key'] = $final_code;
		$_SESSION['auth']['otp_data']['is_verified'] = 'N';
		$_SESSION['auth']['otp_data']['generate_time'] = TIME;
		$_SESSION['auth']['otp_data']['step_4'] = 'Y';
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
	return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
}

if($mode== 'send_checkout_step'){
      
		// $is_exist = fn_check_user_exists($_REQUEST['user_data']['phone']);
	 	$is_exist = fn_check_verified_user_exist($_REQUEST['user_data']['phone']);
	   	//$user_info
	  if(!$is_exist){
		  if (isset($_REQUEST['user_data']['phone'])){
		  $to = $_REQUEST['user_data']['phone'];
		}
	     $return_value = fn_otp_verification_generate_otp($to);
		if($return_value == 0)
			return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
		if(isset($_SESSION['otp_verification_data']['otp_resend']))
			$_SESSION['otp_verification_data']['otp_resend'] += 1;
		else
			$_SESSION['otp_verification_data']['otp_resend'] = 0;
		$_SESSION['auth']['otp_data']['phone_number']=$_REQUEST['user_data']['phone'];
        $_SESSION['auth']['otp_data']['phone'] = $_REQUEST['user_data']['phone'];
		$_SESSION['auth']['otp_data']['step_1'] = 'Y';
		return array(CONTROLLER_STATUS_REDIRECT,'checkout.checkout');	
	  	//fn_print_r($return_value);
	  }else{
		fn_set_notification("W" , __("warning")  , __("user_already_exist"));
		return array(CONTROLLER_STATUS_REDIRECT,'checkout.checkout');
	  }
}

if ($mode == 'otp_verify') {
	// fn_print_r($_SESSION);
	if (isset($_SESSION['auth']['otp_data'])) {
		if (TIME > $_SESSION['auth']['otp_data']['expire_time']) {
			unset($_SESSION['auth']['otp_data']);
		}
	}
	if (isset($_SESSION['auth']['otp_data'])) {
		if ($_REQUEST['input_otp_key'] == $_SESSION['auth']['otp_data']['otp_key']) {
			$_SESSION['auth']['otp_data']['is_verified'] = 'Y';
			fn_set_notification("N" , __("notice")  , __("correct"));
			
			if(isset($_REQUEST['update_step']) && $_REQUEST['update_step']== "step_one"){
				fn_update_user($auth['user_id'], $_SESSION['auth']['otp_data']);
				if (isset($_SESSION['auth']['otp_data'])) {
					unset($_SESSION['auth']['otp_data']);
				}
				$user_info = fn_get_user_info($auth['user_id']);
				$data = array(
					'user_id' => $auth['user_id'],
					'email' => $user_info['email'],
					'phone' => $user_info['phone'], 
					'status' => 'verified' 
					);
				$user_exist = db_get_field('SELECT user_id FROM ?:otp_verification_users WHERE user_id=?s',$user_info['user_id']);
				if(!empty($user_exist)){
					db_query("UPDATE ?:otp_verification_users SET ?u WHERE user_id = ?s", $data, $user_info['user_id']);
				}else{
					db_query('INSERT INTO ?:otp_verification_users ?e', $data);
				}
			}
		}else{
			fn_set_notification("W" , __("warning")  , __("incorrect"));
		}
	}else{
		fn_set_notification("W" , __("warning")  , __("sorry_your_otp_expired"));
	}
	return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
}
if ($mode == 'add_profile') {
	$enable_otp_on_register = Registry::get('addons.otp_verification.enable_otp_on_register');
	if(isset($_REQUEST['user_data']['phone']) && $enable_otp_on_register == 'Y')
	{   $is_exist = fn_check_user_exist($_REQUEST['user_data']['phone']);
		if($is_exist){
			fn_set_notification("E" , __("error")  , __("phone_number_already_registered"));
		 	return array(CONTROLLER_STATUS_REDIRECT, 'checkout.checkout?login_type=register');
		}
	    $user_exist = fn_check_user_email_exist($_REQUEST['user_data']['email']);
		if($user_exist){
			fn_set_notification("E" , __("error")  , __("error_user_exists"));
		 	return array(CONTROLLER_STATUS_REDIRECT, 'checkout.checkout?login_type=register');
		}
		
			if (fn_image_verification('register', $_REQUEST) == false) {
				fn_save_post_data('user_data');
				return array(CONTROLLER_STATUS_REDIRECT, 'checkout.checkout?login_type=register');
			}
			fn_save_post_data('user_data');
			if (isset($_REQUEST['user_data']['new_number'])) {
				$to = $_REQUEST['user_data']['new_number'];
				$_REQUEST['user_data']['phone'] = $_REQUEST['user_data']['new_number'];
			}else if (isset($_REQUEST['user_data']['phone'])) {
				$to = $_REQUEST['user_data']['phone'];
			}	
			if(isset($to) && !empty($to))
			{
				$return_value = fn_otp_verification_generate_otp($to);
				if($return_value == 0)
					return array(CONTROLLER_STATUS_REDIRECT, 'checkout.checkout?login_type=register');
				if(isset($_REQUEST['user_data']['phone'])) {
					$_SESSION['auth']['otp_data']['phone_number'] = $_REQUEST['user_data']['phone'];
					$_SESSION['auth']['otp_data']['register_step'] = 'Y';
				}
				Registry::get('view')->assign('previous_data',$_REQUEST);
				$_SESSION['previous_data'] = $_REQUEST;
				$res = Registry::get('view')->fetch('addons/otp_verification/views/checkout/register.tpl');
				Registry::get('ajax')->assignHtml('step_one',$res);
				exit;
			}else
			{
				fn_set_notification('E', __('error'), __("number_field_not_found"));
				return array(CONTROLLER_STATUS_REDIRECT, 'checkout.checkout?login_type=register');
			}
	}
	       
}
if($mode == 'verify_number')
{
	$user_data = $_SESSION['previous_data']['user_data'];
	fn_print_r($auth);
	if (isset($auth['otp_data'])) {
		if (TIME > $auth['otp_data']['expire_time']) {
			unset($auth['otp_data']);
		}
	}
	if (isset($auth['otp_data'])) {
		if ($_REQUEST['user_data']['otp_verification_data'] == $auth['otp_data']['otp_key']) {
			$auth['otp_data']['is_verified'] = 'Y';
			fn_set_notification("N" , __("notice")  , __("correct"));
			if (list($user_id, $profile_id) = fn_update_user(0, $user_data, $auth, false, true)) {
            $profile_fields = fn_get_profile_fields('O');

			$data = array(
					'user_id' => $user_id,
					'email' => $user_data['email'],
					'phone' => $user_data['phone'], 
					'status' => 'verified' 
					);
			$user_exist = db_get_field('SELECT user_id FROM ?:otp_verification_users WHERE user_id=?s',$user_id);
			if(!empty($user_exist)){
					db_query("UPDATE ?:otp_verification_users SET ?u WHERE user_id = ?s", $data, $user_id);
			}else{
					db_query('INSERT INTO ?:otp_verification_users ?e', $data);
			}
            
            db_query(
                "DELETE FROM ?:user_session_products WHERE session_id = ?s AND type = ?s AND user_type = ?s",
                Tygh::$app['session']->getID(),
                'C', 'U'
            );
            fn_save_cart_content($cart, $user_id);
            fn_login_user($user_id, true);
            $step = 'step_two';
            if (empty($profile_fields['B']) && empty($profile_fields['S'])) {
                $step = 'step_three';
            }

            $suffix = '?edit_step=' . $step;
	        } else {
	            fn_save_post_data('user_data');
	            $suffix = '?login_type=register';
	        }
            return array(CONTROLLER_STATUS_REDIRECT, 'checkout.checkout' .  $suffix);
		}else{
			fn_set_notification("W" , __("warning")  , __("incorrect"));
			return array(CONTROLLER_STATUS_REDIRECT , 'checkout.register');
       		exit;
		}
	}else{
		fn_set_notification("W" , __("warning")  , __("sorry_your_otp_expired"));
       	return array(CONTROLLER_STATUS_REDIRECT , 'checkout.register');
       	exit;
	}
	exit;
}
if($mode == 'change_number_profile')
{
	if (isset($_SESSION['auth']['otp_data'])) {
		unset($_SESSION['auth']['otp_data']);
	}
	if (isset($_SESSION['otp_verification_data']['otp_resend'])) {
		unset($_SESSION['otp_verification_data']['otp_resend']);
	}
	Registry::get('view')->assign('previous_data',$_SESSION['previous_data']);
	$res = Registry::get('view')->fetch('addons/otp_verification/views/checkout/change_number.tpl');
	Registry::get('ajax')->assignHtml('step_one',$res);
	return array(CONTROLLER_STATUS_REDIRECT , 'checkout.checkout');
	exit;
}
if($mode == 'checkout')
{
	if(isset($_REQUEST['start_over']) && ($_REQUEST['start_over'] == 'Y'))
		if (isset($_SESSION['otp_verification_data']['otp_resend'])) {
			unset($_SESSION['otp_verification_data']['otp_resend']);
		}
}