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

use Tygh\Development;
use Tygh\Registry;
use Tygh\Helpdesk;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($mode == 'login') {
        $phone_field = fn_check_phone_in_profile_fields();
        if($phone_field){
        if(isset($_REQUEST['login_with_otp']) && $_REQUEST['login_with_otp'] == 'Y'){
            $user_login = (!empty($_REQUEST['user_login'])) ? trim($_REQUEST['user_login']) : '';
            $field = 'email';
            if(is_numeric($user_login)){
		        $field = 'phone';
	        }
            $all_user_data = db_get_array("SELECT * FROM ?:users WHERE $field = ?s", $user_login);
            $user_data=array();
            
            foreach($all_user_data as $users){
               $status = fn_check_phone_no_is_verified($users['phone'],$users['user_id']);
               if($status == 'verified'){
               $user_data=$users;
               break;
               }
            }
            // fn_print_r($user_data);
            // exit;
           
            if (!empty($user_data) && isset($user_data['phone']) && !empty($user_data['phone'])) {              

			$to = $user_data['phone'];
			$return_value = fn_otp_verification_generate_otp($to);
			if($return_value == 0){
				return array(CONTROLLER_STATUS_REDIRECT , $_REQUEST['redURL']);
            }
			if (isset($user_data['phone'])) {
				$_SESSION['auth']['otp_data']['phone_number'] = $user_data['phone'];
			}
            $user_data['retURL']= $_REQUEST['retURL'];
            $user_data['redURL']= $_REQUEST['redURL'];
			Registry::get('view')->assign('previous_data',$user_data);
			$_SESSION['previous_data'] = $user_data;

			return array(CONTROLLER_STATUS_REDIRECT, 'otp_verify_register.otp_login');
            }else{
                fn_set_notification("E" , __("error")  , __("please_verify_your_number_to_use_this_feature"));
                return array(CONTROLLER_STATUS_REDIRECT, $_REQUEST['redURL']);
                // $_REQUEST['redirect_url']=$_REQUEST['redURL'];
                // $_REQUEST['return_url']=$_REQUEST['retURL'];
            }
            
        }else{
            $login_via_otp = Registry::get('addons.otp_verification.login_via_otp');
             if(!isset($_REQUEST['result_ids']) && $login_via_otp == 'Y'){
                if(AREA == 'C'){
                    $_REQUEST['redirect_url']=$_REQUEST['redURL'];
                    $_REQUEST['return_url']=$_REQUEST['retURL'];
                }
             }
        }

        if(isset($_REQUEST['result_ids'])){
        
  		if(!(isset($_REQUEST['profile_id']) && !empty($_REQUEST['profile_id'])))
	  	{
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
						
						return array(CONTROLLER_STATUS_REDIRECT,'otp_verify_register.otp_login&resend_otp=Y');
					}
				}else{
					fn_set_notification("W" , __("warning")  , __("sorry_your_otp_expired"));
					
					return array(CONTROLLER_STATUS_REDIRECT,'otp_verify_register.otp_login&resend_otp=Y');
				}
	  	}
        
        $redirect_url = '';
         
        fn_restore_processed_user_password($_REQUEST, $_POST);
        list($status, $user_data, $user_login, $password, $salt) = fn_auth_routines($_REQUEST, $auth);

        if (!empty($_REQUEST['redirect_url'])) {
            $redirect_url = $_REQUEST['redirect_url'];
        } else {
            $redirect_url = fn_url('auth.login_form');
        }

        if ($status === false) {
            fn_save_post_data('user_login');

            return array(CONTROLLER_STATUS_REDIRECT, $redirect_url);
        }

        //
        // Success login
        //
        if (!empty($user_data)) {

            // Regenerate session ID for security reasons
            Tygh::$app['session']->regenerateID();

            //
            // If customer placed orders before login, assign these orders to this account
            //
            if (!empty($auth['order_ids'])) {
                foreach ($auth['order_ids'] as $k => $v) {
                    db_query("UPDATE ?:orders SET ?u WHERE order_id = ?i", array('user_id' => $user_data['user_id']), $v);
                }
            }

            fn_login_user($user_data['user_id'], true);

            Helpdesk::auth();

            // Set system notifications
            if (Registry::get('config.demo_mode') != true && AREA == 'A') {
                // If username equals to the password
                if (!fn_is_development() && fn_compare_login_password($user_data, $password)) {
                    $lang_var = 'warning_insecure_password_email';

                    fn_set_notification('E', __('warning'), __($lang_var, array(
                        '[link]' => fn_url('profiles.update')
                    )), 'S', 'insecure_password');
                }
                if (empty($user_data['company_id']) && !empty($user_data['user_id'])) {
                    // Insecure admin script
                    if (!fn_is_development() && Registry::get('config.admin_index') == 'admin.php') {
                        fn_set_notification('E', __('warning'), __('warning_insecure_admin_script', array('[href]' => Registry::get('config.resources.admin_protection_url'))), 'S');
                    }

                    if (!fn_is_development() && is_file(Registry::get('config.dir.root') . '/install/index.php')) {
                        fn_set_notification('W', __('warning'), __('delete_install_folder'), 'S');
                    }

                    if (Development::isEnabled('compile_check')) {
                        fn_set_notification('W', __('warning'), __('warning_store_optimization_dev', array('[link]' => fn_url("themes.manage"))));
                    }

                    fn_set_hook('set_admin_notification', $user_data);
                }

            }

            if (!empty($_REQUEST['remember_me'])) {
                fn_set_session_data(AREA . '_user_id', $user_data['user_id'], COOKIE_ALIVE_TIME);
                fn_set_session_data(AREA . '_password', $user_data['password'], COOKIE_ALIVE_TIME);
            }

            if (!empty($_REQUEST['return_url'])) {
                $redirect_url = $_REQUEST['return_url'];
            }

            unset($_REQUEST['redirect_url']);

            if (AREA == 'C') {
                fn_set_notification('N', __('notice'), __('successful_login'));
            }

            if (AREA == 'A' && Registry::get('runtime.unsupported_browser')) {
                $redirect_url = "upgrade_center.ie7notify";
            }
            unset(Tygh::$app['session']['cart']['edit_step']);
            return array(CONTROLLER_STATUS_REDIRECT, $redirect_url);


        } else {
        // 
        // Login incorrect
        //
            // Log user failed login
            fn_log_event('users', 'failed_login', array (
                'user' => $user_login
            ));

            $auth = fn_fill_auth();
            fn_set_notification('E', __('error'), __('error_incorrect_login'));
            fn_save_post_data('user_login');

            return array(CONTROLLER_STATUS_REDIRECT, $redirect_url);
        }

        unset(Tygh::$app['session']['edit_step']);
            
        }
       
    }
}

     if ($mode == 'recover_password') {
          if(isset($_REQUEST['reset_with_otp']) && $_REQUEST['reset_with_otp'] == 'Y'){

            $user_login = (!empty($_REQUEST['user_email'])) ? trim($_REQUEST['user_email']) : '';
            $field = 'email';
            if(is_numeric($user_login)){
		        $field = 'phone';
	        }
           // $user_data = db_get_row("SELECT * FROM ?:users WHERE $field = ?s", $user_login);
            $all_user_data = db_get_array("SELECT * FROM ?:users WHERE $field = ?s", $user_login);
            $user_data=array();
            
            foreach($all_user_data as $users){
               $status = fn_check_phone_no_is_verified($users['phone'],$users['user_id']);
               if($status == 'verified'){
               $user_data=$users;
               break;
               }
            }
            if (!empty($user_data)) {              
                if (isset($user_data['phone'])) {
					$to = $user_data['phone'];
				}
                if(empty($to)){
                    fn_set_notification('E', __('error'), __("phone_number_is_not_registered_with_this_email"));
                    return array(CONTROLLER_STATUS_REDIRECT, 'auth.recover_password');
                }
			$return_value = fn_otp_verification_generate_otp($to);
			if($return_value == 0){
				return array(CONTROLLER_STATUS_REDIRECT , 'auth.recover_password');
            }
			if (isset($user_data['phone'])) {
				$_SESSION['auth']['otp_data']['phone_number'] = $user_data['phone'];
			}
			Registry::get('view')->assign('previous_data',$user_data);
            $user_data['reset_via_otp']= "Y";
			$_SESSION['previous_data'] = $user_data;

			return array(CONTROLLER_STATUS_REDIRECT, 'otp_verify_register.otp_login');
            }else{
                fn_set_notification('E', __('error'), __("please_verify_your_number_to_use_this_feature"));
                return array(CONTROLLER_STATUS_REDIRECT, 'auth.recover_password');
            }
        }
     }
}
?>