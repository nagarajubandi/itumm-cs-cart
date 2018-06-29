<?php

use Tygh\Registry;
use Tygh\Mailer;
use Tygh\Ajax;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'change_number') {
	if (isset($_SESSION['auth']['otp_data'])) {
		unset($_SESSION['auth']['otp_data']);
	}
	if (isset($_SESSION['otp_verification_data']['otp_resend'])) {
			unset($_SESSION['otp_verification_data']['otp_resend']);
		}
	Registry::get('view')->assign('previous_data',$_SESSION['previous_data']);
	$res = Registry::get('view')->fetch('addons/otp_verification/views/otp_verify_register/change_number.tpl');
	Registry::get('ajax')->assignHtml('change_number_div',$res);
	return array(CONTROLLER_STATUS_REDIRECT , 'otp_verify_register.register');
}



if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if($mode == 'register')
	{
		if(isset($_REQUEST['user_data']['new_number']) && !empty($_REQUEST['user_data']['new_number'])){
        $is_exist = fn_check_user_exist($_REQUEST['user_data']['new_number']);
		$user_exist=false;
		}else{
		$is_exist = fn_check_user_exist($_REQUEST['user_data']['phone']);
		$user_exist = fn_check_user_email_exist($_REQUEST['user_data']['email']);
		}
        if(!$is_exist && !$user_exist){
		if ($mode == 'register' && isset($_SESSION['otp_verification_data']['otp_resend'])) {
			unset($_SESSION['otp_verification_data']['otp_resend']);
		}
		if ($mode == 'register' && isset($_SESSION['auth']['otp_data'])) {
			unset($_SESSION['auth']['otp_data']);
		}
	 	if(isset($_REQUEST['user_data']['new_number']) && !empty($_REQUEST['user_data']['new_number']))
		{
			$user_data = $_SESSION['saved_post_data']['user_data'];
			$user_data['phone'] = $_REQUEST['user_data']['new_number'];
			$_REQUEST['user_data']['phone'] = $_REQUEST['user_data']['new_number'];
			fn_save_post_data('user_data');
			$to = $user_data['phone'];

		}else
		{
			fn_save_post_data('user_data');		
				if (isset($_REQUEST['user_data']['phone'])) {
					$to = $_REQUEST['user_data']['phone'];
				}
		}
		$return_value = fn_otp_verification_generate_otp($to);
		if($return_value == 0)
			return array(CONTROLLER_STATUS_REDIRECT , 'profiles.add');
		if (isset($_REQUEST['user_data']['phone'])) {
				$_SESSION['auth']['otp_data']['phone_number'] = $_REQUEST['user_data']['phone'];
			}
		Registry::get('view')->assign('previous_data',$_REQUEST);
		$_SESSION['previous_data'] = $_REQUEST;
		if(isset($_SESSION['otp_verification_data']['otp_resend']))
			$_SESSION['otp_verification_data']['otp_resend'] += 1;
		else
			$_SESSION['otp_verification_data']['otp_resend'] = 1;
		return array(CONTROLLER_STATUS_OK,$_REQUEST['dispatch']);
	}
	else{
		fn_set_notification("W" , __("warning")  , __("user_already_exist"));
		return array(CONTROLLER_STATUS_REDIRECT,'profiles.update');
		}
	
}

	if($mode == 'forgot_pass')
	 {
		 if(isset($_REQUEST['reset_via_otp']) && $_REQUEST['reset_via_otp'] == 'Y'){
          
  		 if(!(isset($_REQUEST['profile_id']) && !empty($_REQUEST['profile_id'])))
	  	   {
		  	    $user_data = $_REQUEST['user_data'];
				$field = 'email';
				$u_data = db_get_row("SELECT * FROM ?:users WHERE $field = ?s", $_REQUEST['user_login']);
				$ekey = fn_generate_ekey($u_data['user_id'], 'U', SECONDS_IN_DAY);
                $reset_url = fn_url("auth.recover_password?ekey=$ekey", $u_data['user_type']);
		        if (isset($auth['otp_data'])) {
					if (TIME > $auth['otp_data']['expire_time']) {
						unset($auth['otp_data']);
					}
				}
				if (isset($auth['otp_data'])) {
					if ($user_data['otp_verification_data'] == $auth['otp_data']['otp_key']) {
						$auth['otp_data']['is_verified'] = 'Y';
						fn_set_notification("N" , __("notice")  , __("correct"));
						if (isset($_SESSION['auth']['otp_data'])) {
							unset($_SESSION['auth']['otp_data']);
						}
						return array(CONTROLLER_STATUS_REDIRECT,$reset_url);
					}else{
						fn_set_notification("W" , __("warning")  , __("incorrect"));
						
						return array(CONTROLLER_STATUS_REDIRECT,'otp_verify_register.otp_login&resend_otp=Y');
					}
				}else{
					fn_set_notification("W" , __("warning")  , 'Sorry your OTP has expired');
					
					return array(CONTROLLER_STATUS_REDIRECT,'otp_verify_register.otp_login&resend_otp=Y');
				}
	  	    }
        }

	 }
//login with otp

	// if($mode == 'otp_login')
	// {
	// 	if(isset($_REQUEST['login_with_otp']) && $_REQUEST['login_with_otp'] == 'Y'){
    //         // echo "in auth pre";
    //         // exit;
    //         $user_login = (!empty($_REQUEST['user_login'])) ? trim($_REQUEST['user_login']) : '';
    //         $field = 'email';
    //         if(is_numeric($user_login)){
	// 	        $field = 'phone';
	//         }
    //         $user_data = db_get_row("SELECT * FROM ?:users WHERE $field = ?s", $user_login);

    //         if (!empty($user_data)) {              
    //             if (isset($user_data['phone'])) {
	// 				$to = $user_data['phone'];
	// 			}
	// 		$return_value = fn_otp_verification_generate_otp($to);
	// 		if($return_value == 0){
	// 			return array(CONTROLLER_STATUS_REDIRECT , 'auth.login_form');
    //         }
	// 		if (isset($user_data['phone'])) {
	// 			$_SESSION['auth']['otp_data']['phone_number'] = $user_data['phone'];
	// 		}
	// 		Registry::get('view')->assign('previous_data',$user_data);
	// 		$_SESSION['previous_data'] = $user_data;
	// 		// fn_print_r($_REQUEST);
	// 		// exit;
	// 		// return array(CONTROLLER_STATUS_OK, 'otp_verify_register.otp_login');
    //         }
    //         // echo "not exist";
    //         // exit;
    //     }
	
	// }
	
}
if($mode == 'register')
{   
	if (isset($_SESSION['previous_data']))
	Registry::get('view')->assign('previous_data',$_SESSION['previous_data']);

}
//
if($mode == 'otp_login')
{ 
	//fn_print_r("===");
	//exit;
	if (isset($_SESSION['previous_data']))
	Registry::get('view')->assign('previous_data',$_SESSION['previous_data']);

}
//
if($mode == 'otp_resend')
{
	$retry_chance = Registry::get('addons.otp_verification.otp_otp_retry_chance');
    $ret_chance = substr($retry_chance, 10);
	$retry_chance = intval($ret_chance);
	if ($retry_chance) {
		if (isset($_SESSION['otp_verification_data']['otp_resend'])) {
			if($retry_chance <= $_SESSION['otp_verification_data']['otp_resend']) {
				fn_set_notification('W' , __('warning') , __('your_resend_tries_have_extended'));
				exit;
			}else{
				$_SESSION['otp_verification_data']['otp_resend'] += 1; 
			}
		}else{
			$_SESSION['otp_verification_data']['otp_resend'] = 1;
		}
	}
	if (isset($_SESSION['auth']['otp_data']['phone_number'])) {
				$to = $_SESSION['auth']['otp_data']['phone_number'];
				$return_value = fn_otp_verification_generate_otp($to);
				if($return_value == 0)
					return array(CONTROLLER_STATUS_REDIRECT , 'profiles.add');
				if (isset($_REQUEST['user_data']['phone'])) {
						$_SESSION['auth']['otp_data']['phone_number'] = $_REQUEST['user_data']['phone'];
					}
				exit;
				
			}else{
				fn_set_notification('W' , __('warning') , __('please_change_you_phone_no'));
				exit;
				
			}
}
