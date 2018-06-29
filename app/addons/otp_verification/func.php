<?php
/******************************************************************
# OTP Verification - OTP Verification							  *
# ----------------------------------------------------------------*
# author    Webkul                                                *
# copyright Copyright (C) 2010 webkul.com. All Rights Reserved.   *
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL     *
# Websites: http://webkul.com                                     *
*******************************************************************
*/


if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Http;
use Tygh\Registry;

function fn_otp_verification_install(){
	fn_set_notification('N',__("notice"),__("user_guide"),true);
}

function fn_otp_verification_check_payment($payment_id)
{
	$enable_checkout = Registry::get('addons.otp_verification.enable_checkout_for_non_verified_user');
	$payment_ids = Registry::get('addons.otp_verification.otp_send_payments');
	$is_verified = fn_check_is_number_verified();
	if (array_key_exists( $payment_id , $payment_ids) && $enable_checkout=='N' && !$is_verified) {
		return true;
	}else{
		return false;
	}
}

function fn_otp_verification_check_mode()
{
	if (isset($_SESSION['auth']['otp_data'])) {
		if (TIME > $_SESSION['auth']['otp_data']['expire_time']) {
			unset($_SESSION['auth']['otp_data']);
		}
	}
	if (isset($_SESSION['auth']['otp_data']['otp_key'])) {
		$otp_mode = 'verify';
	}else{
		$otp_mode = 'send';
	}
	return $otp_mode;
}
function fn_otp_verification_is_verifed()
{
	if (isset($_SESSION['auth']['otp_data'])) {
		if (TIME > $_SESSION['auth']['otp_data']['expire_time']) {
			unset($_SESSION['auth']['otp_data']);
		}
	}
	if (isset($_SESSION['auth']['otp_data'])) {
		if($_SESSION['auth']['otp_data']['is_verified'] == 'Y'){
			return 'Y';
		}else{
			return 'N';
		}
	}else{
		fn_set_notification("W" , __("warning")  , 'Sorry your OTP has expired.');
		return 'N';
	}
}
function fn_otp_verification_check_step_mode()
{
	if (isset($_SESSION['auth']['otp_data'])) {
		if (TIME > $_SESSION['auth']['otp_data']['expire_time']) {
			unset($_SESSION['auth']['otp_data']);
		}
	}
	if (isset($_SESSION['auth']['otp_data']['step_1'])) {
		if(isset($_SESSION['auth']['otp_data']['otp_key']))
		$otp_mode = 'verify';
	}else{
		$otp_mode = 'send';
	}
	return $otp_mode;
}
function fn_check_user_exists($phone){
	$user_id=$_SESSION['auth']['user_id'];
	$count = db_get_field('SELECT user_id FROM ?:users WHERE phone=?s AND user_id!=?i',$phone,$user_id);
	if(!empty($count)){
	return true;	
	}
	return false;
}
/*function fn_otp_verification_update_user_pre(&$user_id, &$user_data, &$auth, $ship_to_another, $notify_user)
{
	if (isset($auth['otp_data'])) {
		if (TIME > $auth['otp_data']['expire_time']) {
			unset($auth['otp_data']);
		}
	}
	if (isset($auth['otp_data'])) {
		if ($user_data['otp_verification_data'] == $auth['otp_data']['otp_key']) {
			$auth['otp_data']['is_verified'] = 'Y';
			fn_set_notification("N" , __("notice")  , __("correct"));
		}else{
			fn_set_notification("W" , __("warning")  , __("incorrect"));
			$auth['otp_data']['resend_otp'] = 'Y';
			return false;
		}
	}else{
		fn_set_notification("W" , __("warning")  , __("sorry_your_otp_expired"));
			$auth['otp_data']['resend_otp'] = 'Y';
		return false;
	}
}*/

function fn_otp_verification_place_order(&$order_id, &$fake, &$fake1, &$cart)
{
    if (!empty($order_id)) {
    $save_phone = Registry::get('addons.otp_verification.otp_otp_save_phone_no');
    if (isset($save_phone) && $save_phone == 'Y') {			
				if (isset($_SESSION['auth']['otp_data'])) {
					if (isset($_SESSION['auth']['otp_data']['phone_number'])) {
			            $order_data = array(
			                'order_id' => $order_id,
			                'type' => 'O',
			                'data' => $_SESSION['auth']['otp_data']['phone_number']
			            );
			            db_query("REPLACE INTO ?:order_data ?e", $order_data);
					}
					if (isset($_SESSION['auth']['otp_data'])) {
						unset($_SESSION['auth']['otp_data']);
					}
				}
		}
    }
}

function fn_otp_verification_get_order_info(&$order, &$additional_data)
{
    if (empty($order)) {
        return false;
    }
    if (isset($additional_data['O'])) {
		
		
        $order['otp_data']['phone'] = $additional_data['O'];
    }

}

function fn_otp_verification_auth_routines(&$request, &$auth, &$field, &$condition, &$user_login){
	
	if(is_numeric($request['user_login'])){
		$field = 'phone';
	}
}

function fn_otp_verification_update_user_profile_post(&$user_id, &$user_data, &$action){
	
    if($_REQUEST['dispatch']=='profiles.update'){
	$enable_otp_on_register = Registry::get('addons.otp_verification.enable_otp_on_register');
	if($action=='update' || ($action == 'add' && $enable_otp_on_register == 'Y')){
	$phone_field = fn_check_phone_in_profile_fields();
	if($phone_field){
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
		}
	}
	}
}

function fn_otp_verification_pre_delete_user(&$user_id){
	$u_info=fn_get_user_info($user_id);
	$status = db_get_field('SELECT status FROM ?:otp_verification_users WHERE email=?s',$u_info['email']);
	if($status){
    db_query("DELETE FROM ?:otp_verification_users WHERE email=?s", $u_info['email']);
	}
}

function fn_otp_verification_random($characters=6 ,$letters = '23456789bcdfghjkmnpqrstvwxyz@#$'){
	$str='';
	for ($i=0; $i<$characters; $i++) { 
		$str .= substr($letters, mt_rand(0, strlen($letters)-1), 1);
	}
	return $str;
}

function fn_otp_verification_info_for_otp_special_char()
{
	return __('otp_special_characters_info');
}

function fn_check_user_exist($phone){
	$count = db_get_fields('SELECT user_id FROM ?:users WHERE phone=?s',$phone);
	if(!empty($count)){
	return true;	
	}
	return false;
}
function fn_check_user_email_exist($email){
	$count = db_get_field('SELECT user_id FROM ?:users WHERE email=?s',$email);
	if(!empty($count)){
	return true;	
	}
	return false;
}

function fn_check_is_number_verified(){
	$user_id= Tygh::$app['session']['auth']['user_id'];
	if($user_id){
	$user_info= fn_get_user_info($user_id);
	$phone= $user_info['phone'];
	$email= $user_info['email'];
	$status = db_get_field('SELECT status FROM ?:otp_verification_users WHERE phone=?s AND email=?s',$phone,$email );
		if(!empty($status)){
			return true;	
		}
	}
	return false;
}
function fn_check_users($phone){
	$users = db_get_fields('SELECT user_id FROM ?:users WHERE phone=?s',$phone);
	if(!empty($users) && count($users)>1){
	return true;	
	}
	return false;
}
function fn_check_verified_user_exist($phone){
	$status = db_get_field('SELECT status FROM ?:otp_verification_users WHERE phone=?s',$phone );
	if(!empty($status)){
			return true;	
		}
	return false;
}

function fn_check_phone_in_profile_fields(){
	$enabled = db_get_field("SELECT field_id from ?:profile_fields WHERE field_name=?s AND profile_show=?s AND profile_required=?s",'phone','Y','Y');
	if(!empty($enabled)){
	return true;
	}
	return false;
}
function fn_check_phone_in_profile_fields_at_checkout(){
	$enabled = db_get_field("SELECT field_id from ?:profile_fields WHERE field_name=?s AND checkout_show=?s AND checkout_required=?s",'phone','Y','Y');
	if(!empty($enabled) && $_SESSION['auth']['user_id']){
	return true;
	}
	return false;
}

function fn_check_phone_no_is_verified($phone,$user_id){
	$status = db_get_field("SELECT status FROM ?:otp_verification_users WHERE user_id=?i AND phone=?i",$user_id,$phone);
	return $status;
}

function fn_otp_verification_generate_otp($to)
{
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
        return 0;
    }
    $body = 'OTP for verification is ';
    $body .= $final_code;
    $body .= '. This is valid for 3 mins.';
    //
    $body = html_entity_decode($body, ENT_QUOTES, 'UTF-8');
    try{
        /*$client = new Services_Twilio($twilio_account_sid, $twilio_access_token);
        $message = $client->account->messages->create(array(
            'To' => $to,
            'From' => $twilio_phone_number,
            'Body' => $body,
        ));*/

        $credentials = Registry::get('addons.sms_notification_msg91');

        $body = html_entity_decode($body, ENT_QUOTES, 'UTF-8');
        if(empty($credentials['client_id'])) {
            $credentials['client_id'] = rand(100000,999999);
        }

        $postData = array(
            'authkey' => $credentials['authkey'],
            'mobiles' => $to,
            'message' => urlencode($body),
            'sender' => $credentials['client_id'],
            'route' => $credentials['route']
        );

        $res = Http::post('https://control.msg91.com/api/sendhttp.php', $postData);

        //fn_set_notification("N" , __("notice")  , __('your_otp_is_send_to').' '.$to);
        // fn_set_notification("N" , __("notice")  , __('your_otp_is').' '.$final_code);
        $_SESSION['auth']['otp_data']['otp_key'] = $final_code;
        $_SESSION['auth']['otp_data']['is_verified'] = 'N';
        $_SESSION['auth']['otp_data']['generate_time'] = TIME;
        /*if (isset($_REQUEST['user_data']['phone'])) {
            $_SESSION['auth']['otp_data']['phone_number'] = $_REQUEST['user_data']['phone'];
        }*/
        if (is_numeric($expire_time)) {
            $total_expire_time = TIME + (60 * $expire_time);
            fn_set_notification('N' , __('notice') , __('your_otp_is_send_to').' '.$to . '. ' .__('please_note_your_otp_code_will_expire',array('[expire_time]' => $expire_time)) ,'I');
            $_SESSION['auth']['otp_data']['expire_time'] = $total_expire_time;//expiration time of key
        } else {
            fn_set_notification("N" , __("notice")  , __('your_otp_is_send_to').' '.$to);
        }
    }catch(Exception $e){
        unset($_SESSION['auth']['otp_data']);
        fn_set_notification('E' , __('error') , $e->getMessage());
        fn_save_post_data('user_data');
        return 0;
    }
    $timer = 60 * $expire_time;
    return $timer;

}