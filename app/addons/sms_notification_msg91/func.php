<?php
/******************************************************************
# SMS Notification By Msg91 - SMS Notification By Msg91           *
# ----------------------------------------------------------------*
# author    Webkul                                                *
# copyright Copyright (C) 2010 webkul.com. All Rights Reserved.   *
# @license - http://www.gnu.org/licenses/gpl.html GNU/GPL         *
# Websites: http://webkul.com                                     *
*******************************************************************
*/ 

use Tygh\Http;
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_sms_notification_msg91_create_shipment_post($shipment_data, $order_info, $group_key, $all_products, $shipment_id) {
    // Customer Notification
    $carriers = fn_get_carriers();
    if(Registry::get('addons.sms_notification_msg91.sms_shipment_status') == 'Y')
    {
        $body = Registry::get('addons.sms_notification_msg91.sms_shipment_status_template');

        $payment_method = isset($order_info['payment_method']['payment']) ? $order_info['payment_method']['payment'] : "-";
        
        $products = NULL;
        if(!empty($shipment_data['products'])) {
            foreach ($shipment_data['products'] as $product_cart_id => $product_qty) {
                if($product_qty > 0)
                $products .= $order_info['products'][$product_cart_id]['product'].", ";
            }
        }

        $body = str_replace("%order_id%", $shipment_data['order_id'], $body);
        $body = str_replace("%tracking_number%", $shipment_data['tracking_number'], $body);
        $body = str_replace("%carrier%", $carriers[$shipment_data['carrier']]['name'], $body);
        $body = str_replace("%first_name%", $order_info['firstname'], $body);
        $body = str_replace("%last_name%", $order_info['lastname'], $body);
        $body = str_replace("%email%", $order_info['email'], $body);
        $body = str_replace("%payment_method%", $payment_method, $body);
        $body = str_replace("%date%", date("d/m/Y h:i A",$shipment_data['timestamp']), $body);
        $body = str_replace("%products%", $products, $body);
        if(count($order_info['products'])==1)
			$body = str_replace("products are", "product is", $body);
		
        fn_send_msg91_sms_notification($body, $order_info['b_phone']);   
    }

    // admin notification
    
    if(Registry::get('addons.sms_notification_msg91.sms_shipment_status_admin') == 'Y')
    {
        $body = Registry::get('addons.sms_notification_msg91.sms_shipment_status_admin_template');

        $payment_method = isset($order_info['payment_method']['payment']) ? $order_info['payment_method']['payment'] : "-";

        $products = NULL;
        if(!empty($shipment_data['products'])) {
            foreach ($shipment_data['products'] as $product_cart_id => $product_qty) {
                if($product_qty > 0)
                $products .= $order_info['products'][$product_cart_id]['product'].", ";
            }
        }
    
        $body = str_replace("%order_id%", $shipment_data['order_id'], $body);
        $body = str_replace("%tracking_number%", $shipment_data['tracking_number'], $body);
        $body = str_replace("%carrier%", $carriers[$shipment_data['carrier']]['name'], $body);
        $body = str_replace("%first_name%", $order_info['firstname'], $body);
        $body = str_replace("%last_name%", $order_info['lastname'], $body);
        $body = str_replace("%email%", $order_info['email'], $body);
        $body = str_replace("%payment_method%", $payment_method, $body);
        $body = str_replace("%date%", date("d/m/Y h:i A",$shipment_data['timestamp']), $body);
        $body = str_replace("%products%", $products, $body);
		if(count($order_info['products'])==1)
			$body = str_replace("products are", "product is", $body);
        fn_send_msg91_sms_notification($body, Registry::get('addons.sms_notification_msg91.admin_phone')); 
    }

    if(Registry::get('addons.sms_notification_msg91.sms_shipment_status_vendor') == 'Y' && fn_allowed_for('MULTIVENDOR'))
    {
        $body = Registry::get('addons.sms_notification_msg91.sms_shipment_status_vendor_template');
        $payment_method = isset($order_info['payment_method']['payment']) ? $order_info['payment_method']['payment'] : "-";
        $products = NULL;

        if(!empty($shipment_data['products'])) {
            foreach ($shipment_data['products'] as $product_cart_id => $product_qty) {
                if($product_qty > 0)
                $products .= $order_info['products'][$product_cart_id]['product'].", ";
            }
        }
    
        
        $body = str_replace("%order_id%", $shipment_data['order_id'], $body);
        $body = str_replace("%tracking_number%", $shipment_data['tracking_number'], $body);
        $body = str_replace("%carrier%", $carriers[$shipment_data['carrier']]['name'], $body);
        $body = str_replace("%first_name%", $order_info['firstname'], $body);
        $body = str_replace("%last_name%", $order_info['lastname'], $body);
        $body = str_replace("%email%", $order_info['email'], $body);
        $body = str_replace("%payment_method%", $payment_method, $body);
        $body = str_replace("%date%", date("d/m/Y h:i A",$shipment_data['timestamp']), $body);
		
		if(count($order_info['products'])==1)
			$body = str_replace("products are", "product is", $body);
        $body = str_replace("%products%", $products, $body);

        fn_send_msg91_sms_notification($body,fn_sms_notification_msg91__get_seller_phone($order_info['company_id']));
    }
}

function fn_sms_notification_msg91_get_notification_rules($force_notification, $params, $disable_notification)
{
    $runtime_mode = Registry::get('runtime.mode');
    $runtime_controller = Registry::get('runtime.controller');
    if($runtime_mode == "update_status" && $runtime_controller == "profiles") {
        if(isset($params['id']) && isset($force_notification['C']) && !$disable_notification && $force_notification['C'] && Registry::get('addons.sms_notification_msg91.sms_user_status') == 'Y') {
            $user_data = fn_get_user_info($params['id']);

            $body = Registry::get('addons.sms_notification_msg91.sms_user_status_template');
            if($user_data['status'] == 'A') {
                $user_data['status_desc'] = fn_get_lang_var('active');
            } elseif($user_data['status'] == 'D') {
                $user_data['status_desc'] = fn_get_lang_var('disable');
            } elseif($user_data['status'] == 'P') {
                $user_data['status_desc'] = fn_get_lang_var('pending');            
            } else {
                $user_data['status_desc'] = "-";
            }

            $body = str_replace("%email%", $user_data['email'], $body);
            $body = str_replace("%first_name%", $user_data['firstname'], $body);
            $body = str_replace("%last_name%", $user_data['lastname'], $body);
            $body = str_replace("%status%", $user_data['status_desc'], $body);

            fn_send_msg91_sms_notification($body, $user_data['phone']);
        }
    }
}

function fn_sms_notification_msg91_update_profile($action, $user_data ,$current_user_data)
{   
    if ($action == 'update' && $current_user_data['status'] != $user_data['status'] && Registry::get('addons.sms_notification_msg91.sms_user_status') == 'Y') {
        $body = Registry::get('addons.sms_notification_msg91.sms_user_status_template');
        if($user_data['status'] == 'A') {
            $user_data['status_desc'] = fn_get_lang_var('active');
        } elseif($user_data['status'] == 'D') {
            $user_data['status_desc'] = fn_get_lang_var('disable');
        } elseif($user_data['status'] == 'P') {
            $user_data['status_desc'] = fn_get_lang_var('pending');            
        } else {
            $user_data['status_desc'] = "-";
        }

        $body = str_replace("%email%", $user_data['email'], $body);
        $body = str_replace("%first_name%", $user_data['firstname'], $body);
        $body = str_replace("%last_name%", $user_data['lastname'], $body);
        $body = str_replace("%status%", $user_data['status_desc'], $body);

        fn_send_msg91_sms_notification($body, $user_data['phone']);
    }

    if ($action == 'add' && $user_data['user_type'] == 'C' && Registry::get('addons.sms_notification_msg91.sms_new_cusomer_registered') == 'Y') {
        $body = Registry::get('addons.sms_notification_msg91.sms_new_cusomer_registered_template');
        $body = str_replace("%email%", $user_data['email'], $body);
        $body = str_replace("%first_name%", $user_data['firstname'], $body);
        $body = str_replace("%last_name%", $user_data['lastname'], $body);
        $body = str_replace("%date%", date("d/m/Y h:i A",$user_data['timestamp']), $body);
        fn_send_msg91_sms_notification($body, $user_data['phone']);
    }
    if ($action == 'add' && $user_data['user_type'] == 'C' && Registry::get('addons.sms_notification_msg91.sms_new_cusomer_registered_admin') == 'Y') {
        $body = Registry::get('addons.sms_notification_msg91.sms_new_cusomer_registered_admin_template');
        $body = str_replace("%email%", $user_data['email'], $body);
        $body = str_replace("%first_name%", $user_data['firstname'], $body);
        $body = str_replace("%last_name%", $user_data['lastname'], $body);
        $body = str_replace("%date%", date("d/m/Y h:i A",$user_data['timestamp']), $body);
        fn_send_msg91_sms_notification($body,Registry::get('addons.sms_notification_msg91.admin_phone'));
    }
}

function fn_send_msg91_sms_notification($body, $phone)
{
    if(!empty($phone)) {
        $credentials = Registry::get('addons.sms_notification_msg91');
        $body = html_entity_decode($body, ENT_QUOTES, 'UTF-8');        
        if(empty($credentials['client_id'])) {
            $credentials['client_id'] = rand(100000,999999);
        }        
        
        $postData = array(
            'authkey' => $credentials['authkey'],
            'mobiles' => $phone,
            'message' => urlencode($body),
            'sender' => $credentials['client_id'],
            'route' => $credentials['route']
        );
        $res = Http::post('https://control.msg91.com/api/sendhttp.php', $postData);
        // fn_set_notification('E',$res,$body."--------------".$phone);
    }
}


function fn_sms_notification_msg91__get_seller_phone($company_id){
    $phone = db_get_field("SELECT phone FROM ?:companies WHERE company_id = ?i",$company_id);
    return $phone;  
}

function fn_set_msg91_sms_order_place_notification($order_info,$order_id)
{
     if (Registry::get('addons.sms_notification_msg91.sms_new_order_placed') == 'Y') {
        
        $payment_method = isset($order_info['payment_method']['payment']) ? $order_info['payment_method']['payment'] : "-";
        $products = NULL;
        if(!empty($order_info['products'])) {
            foreach ($order_info['products'] as $key => $product) {
                $products .= $product['product'].", ";
            }
        }
		$products=substr(trim($products), 0, -1);
        $body = Registry::get('addons.sms_notification_msg91.sms_new_order_placed_template'); 
		 
        $body = str_replace("%order_id%", $order_id, $body);
        $body = str_replace("%first_name%", $order_info['firstname'], $body);
        $body = str_replace("%last_name%", $order_info['lastname'], $body);
        $body = str_replace("%email%", $order_info['email'], $body);
        $body = str_replace("%payment_method%", $payment_method, $body);
        $body = str_replace("%date%", date("d/m/Y h:i A",$order_info['timestamp']), $body);
        $body = str_replace("%products%", $products, $body);
        $body = str_replace("%price%", $order_info['total'], $body);
		  if(count($order_info['products'])==1)
			$body = str_replace("products are", "product is", $body);
        fn_send_msg91_sms_notification($body, $order_info['b_phone']);
    }
    if (Registry::get('addons.sms_notification_msg91.sms_new_order_placed_admin') == 'Y') {
        
        $payment_method = isset($order_info['payment_method']['payment']) ? $order_info['payment_method']['payment'] : "-";
        $products = NULL;
        if(!empty($order_info['products'])) {
            foreach ($order_info['products'] as $key => $product) {
                 $products .= $product['product'].", ";
            }
        }
       $products=substr(trim($products), 0, -1);
        $body = Registry::get('addons.sms_notification_msg91.sms_new_order_placed_admin_template');  
        $body = str_replace("%order_id%", $order_id, $body);
        $body = str_replace("%first_name%", $order_info['firstname'], $body);
        $body = str_replace("%last_name%", $order_info['lastname'], $body);
        $body = str_replace("%email%", $order_info['email'], $body);
        $body = str_replace("%payment_method%", $payment_method, $body);
        $body = str_replace("%date%", date("d/m/Y h:i A",$order_info['timestamp']), $body);
        $body = str_replace("%products%", $products, $body);
        $body = str_replace("%price%", $order_info['total'], $body);
        fn_send_msg91_sms_notification($body,Registry::get('addons.sms_notification_msg91.admin_phone'));

    }

    if (Registry::get('addons.sms_notification_msg91.sms_new_order_placed_vendor') == 'Y' && fn_allowed_for('MULTIVENDOR')) {
        
        $payment_method = isset($order_info['payment_method']['payment']) ? $order_info['payment_method']['payment'] : "-";
        $products = NULL;
        if(!empty($order_info['products'])) {
            foreach ($order_info['products'] as $key => $product) {
                 $products .= $product['product'].", ";
            }
        } 
		
		$products=substr(trim($products), 0, -1);
        $body = Registry::get('addons.sms_notification_msg91.sms_new_order_placed_vendor_template');  
        $body = str_replace("%order_id%", $order_id, $body);
        $body = str_replace("%first_name%", $order_info['firstname'], $body);
        $body = str_replace("%last_name%", $order_info['lastname'], $body);
        $body = str_replace("%email%", $order_info['email'], $body);
        $body = str_replace("%payment_method%", $payment_method, $body);
        $body = str_replace("%date%", date("d/m/Y h:i A",$order_info['timestamp']), $body);
        $body = str_replace("%products%", $products, $body);
        $body = str_replace("%price%", $order_info['total'], $body);

        fn_send_msg91_sms_notification($body,fn_sms_notification_msg91__get_seller_phone($order_info['company_id']));
    }
}

function fn_sms_notification_msg91_change_company_status_before_mail($company_id, $status_to, $reason, $status_from, $skip_query, $notify, $company_data, $user_data, $result)
{ 
    if(fn_allowed_for('MULTIVENDOR') && $notify && Registry::get('addons.sms_notification_msg91.sms_vendor_status_vendor') == 'Y') {
        $body = Registry::get('addons.sms_notification_msg91.sms_vendor_status_vendor_template');
        if($status_to == 'A') {
            $status_desc = fn_get_lang_var('active');
        } elseif($status_to == 'D') {
            $status_desc = fn_get_lang_var('disable');
        } elseif($status_to == 'P') {
            $status_desc = fn_get_lang_var('pending');            
        } else {
            $status_desc = "-";
        }

        $body = str_replace("%email%", $company_data['email'], $body);
        $body = str_replace("%vendor%", $company_data['company'], $body);
        $body = str_replace("%first_name%", $user_data['firstname'], $body);
        $body = str_replace("%last_name%", $user_data['lastname'], $body);
        $body = str_replace("%status%", $status_desc, $body);

        fn_send_msg91_sms_notification($body, $company_data['phone']);
    }
}

function fn_sms_notification_msg91_update_product_amount(&$new_amount, &$product_id)
{
    if ($new_amount <= Registry::get('settings.General.low_stock_threshold') && Registry::get('addons.sms_notification_msg91.sms_low_stock_admin') == 'Y') {
        $product_data = fn_get_product_data($product_id,$_SESSION['auth']);
        $body = Registry::get('addons.sms_notification_msg91.sms_low_stock_admin_template');
        $body = str_replace("%product%", $product_data['product'], $body);
        $body = str_replace("%product_code%", $product_data['product_code'], $body);
        $body = str_replace("%amount%", $new_amount, $body);

        fn_send_msg91_sms_notification($body,Registry::get('addons.sms_notification_msg91.admin_phone'));
    }

    if (fn_allowed_for('MULTIVENDOR') && $new_amount <= Registry::get('settings.General.low_stock_threshold') && Registry::get('addons.sms_notification_msg91.sms_low_stock_vendor') == 'Y') {
        $product_data = fn_get_product_data($product_id,$_SESSION['auth']);
        $body = Registry::get('addons.sms_notification_msg91.sms_low_stock_vendor_template');
        $body = str_replace("%product%", $product_data['product'], $body);
        $body = str_replace("%product_code%", $product_data['product_code'], $body);
        $body = str_replace("%amount%", $new_amount, $body);

        fn_send_msg91_sms_notification($body,fn_sms_notification_msg91__get_seller_phone($product_data['company_id']));
    }
}