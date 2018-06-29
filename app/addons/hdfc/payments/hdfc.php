<?php
use Tygh\Registry;
if ( !defined('AREA') ) { die('Access denied'); }

if (defined('PAYMENT_NOTIFICATION')) {
	
	if($mode == 'response'){

		$sql = "INSERT INTO ?:hdfc SET order_id = '".$_REQUEST['order_id']."',response = '".serialize($_REQUEST)."'";
		db_query($sql);

		$order_info = fn_get_order_info($_REQUEST['order_id']);

		$payment_id = $order_info['payment_id'];
		$email = $order_info['email'];

        $processor_data = fn_get_payment_method_data($payment_id);
		
		$pp_response = array();

		$response = $_POST;
		$secureHash = $response['SecureHash'];
		unset($response['SecureHash']);
		unset($response['route']);
		
		$hashType = $processor_data['processor_params']['hash_type'];
		$params = $processor_data['processor_params']['secret_key'];	
		
		ksort($response);
		foreach ($response as $key => $value){
			if (strlen($value) > 0) {
				$params .= '|'.$value;
			}
		}		
		if (strlen($params) > 0) {
			if($hashType == "SHA512")
				$hashValue = strtoupper(hash('SHA512',$params));	
			if($hashType == "SHA1")
				$hashValue = strtoupper(sha1($params));	
            if($hashType == "md5")
             	$hashValue = strtoupper(md5($params));
		}		
		
		$hashValid = ($hashValue == $secureHash) ? true : false;
			
		if($response['ResponseCode']=='0' && $response['Amount'] == $order_info['total']) {
			$pp_response["order_status"] = 'P';
            $pp_response["reason_text"] = "Success";
            $pp_response['transaction_id'] = $_REQUEST['order_id'];
            $pp_response['customer_email'] = $email;							
		} else {		
			$pp_response["order_status"] = 'F';
            $pp_response["reason_text"] = "Fail: hash not matched";
            $pp_response['transaction_id'] = $_REQUEST['order_id'];
		}	

		if (fn_check_payment_script('hdfc.php', $_REQUEST['order_id'])) {
	        fn_finish_payment($_REQUEST['order_id'], $pp_response, false);
	        fn_order_placement_routines('route', $_REQUEST['order_id']);
	    }
	}
} else{

	$account_id = $processor_data['processor_params']['account_id'];
    $secret_key = $processor_data['processor_params']['secret_key'];
    $hash_type = $processor_data['processor_params']['hash_type'];
    //$page_id = $processor_data['processor_params']['page_id'];
    $mode = $processor_data['processor_params']['mode'];
	
	$current_location = Registry::get('config.current_location');

	$hdfc_url = "https://secure.ebs.in/pg/ma/payment/request/";

	$rurl =  fn_url("payment_notification.response&payment=hdfc&order_id=$order_id", AREA, 'current');

	$description = ''; 

	foreach ($order_info['products'] as $value) {
		$description .= $value['product'].' ';
	}

    $posted = array();

    $posted['channel'] = '10';
    $posted['account_id'] = $account_id;
    $posted['reference_no'] = $order_info['order_id'];
    //$posted['page_id'] = $page_id;
    $posted['amount'] = $order_info['total'];
    $posted['description'] = $description;
    $posted['currency'] = 'INR';
    $posted['name'] = $order_info['b_firstname']." ".$order_info['b_lastname'];
    $posted['address'] = $order_info['b_address'];
    $posted['city'] = $order_info['b_city'];;
    $posted['state'] = $order_info['b_state'];;
    $posted['postal_code'] = $order_info['b_zipcode'];
    $posted['country'] = 'IND';
    $posted['email'] = $order_info['email'];
    $posted['phone'] = (!empty($order_info['b_phone'])) ? $order_info['b_phone'] : $order_info['s_phone'];

    $posted['ship_name'] = $order_info['s_firstname'].' '.$order_info['s_lastname'];
	$posted['ship_address']	= $order_info['s_address'];
	$posted['ship_city'] = $order_info['s_city'];
	$posted['ship_state'] = $order_info['s_state'];
	$posted['ship_postal_code'] = $order_info['s_zipcode'];
	$posted['ship_country'] = 'IND';

    $posted['return_url'] = $rurl;
    $posted['mode'] = $mode;

    $hashData = $secret_key;
	$hashType = $hash_type; 
	ksort($posted);		
	foreach ($posted as $key => $value){
		if (strlen($value) > 0) {
			$hashData .= '|'.$value;
		}
	}
		
	if (strlen($hashData) > 0) {
		if($hashType == "SHA512")
			$hashValue = strtoupper(hash('SHA512',$hashData));	
		if($hashType == "SHA1")
			$hashValue = strtoupper(sha1($hashData));	
        if($hashType == "md5")
        $hashValue = strtoupper(md5($hashData));

	}

    $posted['secure_hash'] = $hashValue;

	fn_create_payment_form($hdfc_url, $posted, 'HDFC Payment Gateway');
    exit;
}