<?php


use Tygh\Registry;
use Tygh\Mailer;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone_field = fn_check_phone_in_profile_fields();
	if(!empty($auth['user_id']) && !isset($_REQUEST['result_ids']) && $phone_field ){
		$is_exist = fn_check_user_exist($_REQUEST['user_data']['phone']);
		//$is_exist = fn_check_users($_REQUEST['user_data']['phone']);
	 	$user_id = $auth['user_id'];
		$is_verified = fn_check_is_number_verified();
		$verified_user_exist =fn_check_verified_user_exist($_REQUEST['user_data']['phone']);
	 	$phone = db_get_field('SELECT phone FROM ?:users WHERE user_id=?s',$user_id);
			if(isset($_REQUEST['user_data']['phone']) && !($is_verified && $is_exist &&  $phone == $_REQUEST['user_data']['phone'])){
				
		    	if((!$is_verified && !$is_exist && $phone != $_REQUEST['user_data']['phone']) ||($is_verified && !$is_exist && $phone != $_REQUEST['user_data']['phone']) || (!$is_verified && !$verified_user_exist &&  $phone == $_REQUEST['user_data']['phone']) ){						
				fn_save_post_data('user_data');		
					if (isset($_REQUEST['user_data']['phone'])) {
						$to = $_REQUEST['user_data']['phone'];
					}
				$return_value = fn_otp_verification_generate_otp($to);
				if($return_value == 0)
					return array(CONTROLLER_STATUS_REDIRECT , 'profiles.update');
				if (isset($_REQUEST['user_data']['phone'])) {
					$_SESSION['auth']['otp_data']['phone_number'] = $_REQUEST['user_data']['phone'];
				}
				Registry::get('view')->assign('previous_data',$_REQUEST);
				$_SESSION['previous_data'] = $_REQUEST;
				return array(CONTROLLER_STATUS_REDIRECT,'otp_verify_register.register');
	 			}else{
					fn_set_notification("W" , __("warning")  , __("phone_number_already_registered"));
					return array(CONTROLLER_STATUS_REDIRECT,'profiles.update');
				}
			}		 
 	    }

   
    if ($mode == 'update') 
    {
		$phone_field = fn_check_phone_in_profile_fields();
  		if(isset($_REQUEST['user_data']['phone']) && $phone_field)
  		{
			
  			if(!(isset($_REQUEST['profile_id']) && !empty($_REQUEST['profile_id'])) && isset($_REQUEST['result_ids']) )
	  		{
			// 	  fn_print_r($_REQUEST);
			//   exit;
		  		$user_data = $_REQUEST['user_data'];
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
						return array(CONTROLLER_STATUS_REDIRECT,'otp_verify_register.register&resend_otp=Y');
					}
				}else{
					fn_set_notification("W" , __("warning")  , 'Sorry your OTP has expired');
					
					return array(CONTROLLER_STATUS_REDIRECT,'otp_verify_register.register&resend_otp=Y');
				}
	  		}
			else if(isset($_REQUEST['profile_id']) && isset($_REQUEST['result_ids'])){
				$user_id = $auth['user_id'];
		 		$phone = db_get_field('SELECT phone FROM ?:users WHERE user_id=?s',$user_id);
				if(isset($_REQUEST['user_data']['phone']) && ($phone != $_REQUEST['user_data']['phone'])){
				$user_data = $_REQUEST['user_data'];
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
						
						return array(CONTROLLER_STATUS_REDIRECT,'otp_verify_register.register');
					}
				}else{
					fn_set_notification("W" , __("warning")  , __("sorry_your_otp_expired"));
					
					return array(CONTROLLER_STATUS_REDIRECT,'otp_verify_register.register');
				}
			}

			}
  		}    	
    }
}

if ($mode == 'add') {
	if(isset($_SESSION['previous_data']['dispatch']) && ($_SESSION['previous_data']['dispatch'] == 'otp_verify_register.register'))
	{
		if(isset($_SESSION['otp_verification_data']) && !empty($_SESSION['otp_verification_data']))
			unset($_SESSION['otp_verification_data']);
		if(isset($_SESSION['auth']['otp_data']))
			unset($_SESSION['auth']['otp_data']);
	}
}