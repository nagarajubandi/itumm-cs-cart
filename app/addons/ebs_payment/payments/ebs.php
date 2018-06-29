<?php

/******************************************************************
# EBS Payment Method - EBS Payment Method                         *
# ----------------------------------------------------------------*
# author    Webkul                                                *
# copyright Copyright (C) 2010 webkul.com. All Rights Reserved.   *
# @license - http://www.gnu.org/licenses/gpl.html GNU/GPL         *
# Websites: http://webkul.com                                     *
*******************************************************************
*/   
use Tygh\Registry;

if ( !defined('AREA') ) { die('Access denied'); }

    if (defined('PAYMENT_NOTIFICATION')) {
	    if($mode == 'return') {
            $order_info = fn_get_order_info($_REQUEST['order_id'], true);
            $processor_data = fn_get_processor_data($order_info['payment_method']['payment_id']);	
            $secret_key = $processor_data['processor_params']['ebs_secret_key'];
		    $response = $_POST;		
		    $secureHash = $response['SecureHash'];
		    $params = $secret_key;
		    $hashData = $secret_key;
		    $hashType = $processor_data['processor_params']['ebs_hashtype'];
            ksort($response);
                foreach ($response as $key => $value){
                    if (strlen($value) > 0) {
                        $params .= '|'.$value;
			            }
                }		
                if (strlen($params) > 0) {
                    if($hashType == "MD5")
                        $hashValue = strtoupper(md5($hashData));
                    if($hashType == "SHA512")
			            $hashValue = strtoupper(hash('SHA512',$hashData));	
		            if($hashType == "SHA1")
			            $hashValue = strtoupper(sha1($hashData));
		        }				
            $hashValid = ($hashValue == $secureHash) ? true : false; 
            if ($response['ResponseCode']==0) {
                $order_info = fn_get_order_info($_REQUEST['order_id'], true);
                // if ($order_info['status'] == 'N') {
                    $pp_response['order_status'] = $processor_data['processor_params']['wk_order_status'];
			        $pp_response["reason_text"] = $response['ResponseMessage'];
			        $pp_response["transaction_id"] = $response['TransactionID'];
			        $pp_response["payment_id"] = $response['PaymentID'];
			        $pp_response["request_id"] = $response['RequestID'];
			        $pp_response["amount"] = $response['Amount'].' INR';
			        $pp_response["ebs_mode"] = $response['Mode'];
			        fn_finish_payment($_REQUEST['order_id'], $pp_response, false);
		        // }			
		    }
		    else{
			    $pp_response['order_status'] = 'F';
			    $pp_response["reason_text"] = $response['ResponseMessage'];
			    $pp_response["transaction_id"] = $response['TransactionID'];
			    fn_finish_payment($_REQUEST['order_id'], $pp_response, false);
		    }
		    fn_order_placement_routines('route', $_REQUEST['order_id']);		
	    }
    }
    else {
        $account_id = $processor_data['processor_params']['ebs_account_id'];
        $mode = $processor_data['processor_params']['ebs_mode'];
	    $ebsUrl = "https://secure.ebs.in/pg/ma/payment/request/";	
	    $order_id = $order_info['order_id'];	
	    $currencies = Registry::get('currencies');
    	
    	if(isset($currencies['INR']) && !empty($currencies['INR']))
    	{
    		$amount = fn_format_price_by_currency($order_info['total'],'INR');
    	} else {
    		$pp_response['order_status'] = 'I';
    		return array(CONTROLLER_STATUS_REDIRECT, "checkout.checkout");
    	}
	        if(!empty($order_info['notes'])){
		        $description = $order_info['notes'];
	        } else {
		        $description = "Order Number : ".$order_id;
	        }
	    $name = $order_info['b_firstname']." ".$order_info['b_lastname'];
	    $address = trim($order_info['b_address']." ".$order_info['b_address_2']); 
	    $city = $order_info['b_city'];
	    $state = $order_info['b_state'];
	    $Code = array("AF" =>  "AFG", "AL" => "ALB", "DZ" => "DZA", "AS" => "ASM", "AD" => "AND", "AO" => "AGO", "AI" => "AIA", "AQ" => "ATA", "AG" => "ATG", "AR" => "ARG", "AM" => "ARM","AW" => "ABW", "AU" => "AUS", "AT" => "AUT", "AZ" => "AZE", "BS" => "BHS", "BH" => "BHR","BD" => "BGD", "BB" => "BRB", "BY" => "BLR", "BE" => "BEL", "BZ" => "BLZ", "BJ" => "BEN", "BM" => "BMU", "BT" => "BTN", "BO" => "BOL", "BA" => "BIH", "BW" => "BWA", "BV" => "BVT", "BR" => "BRA", "IO" => "IOT", "VG" => "VGB", "BN" => "BRN", "BG" => "BGR", "BF" => "BFA", "BI" => "BDI","KH" => "KHM", "CM" => "CMR", "CA" => "CAN", "CV" => "CPV", "KY" => "CYM", "CF" => "CAF", "TD" => "TCD", "CL" => "CHL", "CN" => "CHN", "CX" => "CXR", "CC" => "CCK", "CO" => "COL", "KM" => "COM", "CG" => "COG", "CK" => "COK", "CR" => "CRI", "CI" => "CIV", "HR" => "HRV", "CU" => "CUB", "CY" => "CYP", "CZ" => "CZE", "DK" => "DNK", "DM" => "DMA","DO" => "DOM", "TL" => "TLS", "EC" => "ECU", "EG" => "EGY", "SV" => "SLV", "GQ" => "GNQ","ER" => "ERI", "EE" => "EST", "ET" => "ETH", "FK" => "FLK","FO" => "FRO","FJ" => "FJI","FI" => "FIN","FR => FRA","FX" => "FXX","GF" => "GUF","PF" => "PYF","TF" => "ATF","GA" => "GAB","GE" => "GEO","GM" => "GMB","PS" => "PSE","DE" => "DEU","GH" => "GHA","GI" => "GIB","GR" => "GRC","GL" => "GRL","GD" => "GRD","GP" => "GLP","GU" => "GUM","GT" => "GTM","GN" => "GIN","GW" => "GNB","GY" => "GUY","HT" => "HTI","HM" => "HMD","HN" => "HND","HK" => "HKG","HU" => "HUN","IS" => "ISL","IN" => "IND","ID" => "IDN","IQ" => "IRQ","IE" => "IRL","IR" => "IRN","IL" => "ISR","IT" => "ITA","JM" => "JAM","JP" => "JPN","JO" => "JOR","KZ" => "KAZ","KE" => "KEN","KI" => "KIR","KP" => "PRK","KR" => "KOR","KW" => "KWT","KG" => "KGZ","LA" => "LAO","LV" => "LVA","LB" => "LBN","LS" => "LSO","LR" => "LBR","LY" => "LBY","LI" => "LIE","LT"=>"LTU","LU" => "LUX","MO" => "MAC","MK" => "MKD","MG" => "MDG","MW" => "MWI","MY" => "MYS","MV" => "MDV","ML" => "MLI","MT" => "MLT","MH" => "MHL","MQ" => "MTQ","MR" => "MRT","MU" => "MUS","YT" => "MYT","MX" => "MEX","FM" => "FSM","MD" => "MDA","MC" => "MCO","MN" => "MNG","MS" => "MSR","MA" => "MAR","MZ" => "MOZ","MM" => "MMR","NA" => "NAM","NR" => "NRU","NP" => "NPL","NL" => "NLD","NC" => "NCL","NZ" => "NZL","NI" => "NIC","NE" => "NER","NG" => "NGA","NU" => "NIU","NF" => "NFK","MP" => "MNP","NO" => "NOR","OM" => "OMN","PK" => "PAK","PW" => "PLW","PA" => "PAN","PG" => "PNG","PY" => "PRY","PE" => "PER","PH" => "PHL","PN" => "PCN","PL" => "POL","PT" => "PRT","PR" => "PRI","QA" => "QAT","RE" => "REU","RO" => "ROU","RU" => "RUS","RW" => "RWA","LC" => "LCA","WS" => "WSM","SM" => "SMR","ST" => "STP","SA" => "SAU","SN" => "SEN","SC" => "SYC","SL" => "SLE","SG" => "SGP","SK" => "SVK","SI" => "SVN","SB" => "SLB","SO" => "SOM","ZA" => "ZAF","ES" => "ESP","LK" => "LKA","SH" => "SHN","KN" => "KNA","PM" => "SPM","VC" => "VCT","SD" => "SDN","SR"=> "SUR","SJ" => "SJM","SZ" => "SWZ","SE" => "SWE","CH" => "CHE","SY" => "SYR","TW" => "TWN","TJ" => "TJK","TZ" => "TZA","TH" => "THA","TG" => "TGO","TK" => "TKL","TO" => "TON","TT" => "TTO","TN" => "TUN","TR" => "TUR","TM" => "TKM","TC" => "TCA","TV" => "TUV","UG" => "UGA","UA" => "UKR","AE" => "ARE","GB" => "GBR","US" => "USA","VI" => "VIR","UY" => "URY","UZ" => "UZB","VU" => "VUT","VA" => "VAT","VE" => "VEN","VN" => "VNM","WF" => "WLF","EH" => "ESH","YE" => "YEM","CS" => "SCG","ZR" => "ZAR","ZM" => "ZMB","ZW" => "ZWE","AP" => "   ","RS" => "SRB","AX" => "ALA" , "EU" => "" ,"ME" => "MNE","GG" => "GGY","JE" => "JEY","IM" => "IMN","CW" => "CUW","SX" => "SXM"); 
	    $country_code = $Code[$order_info['b_country']]; 
	    $postal_code = $order_info['b_zipcode'];
	    $phone = $order_info['b_phone'];
	    $email = $order_info['email'];
	    $ship_name = $order_info['s_firstname']." ".$order_info['s_lastname'];
	    $ship_address = trim($order_info['s_address']." ".$order_info['s_address_2']);
	    $ship_city = $order_info['s_city'];
	    $ship_state = $order_info['s_state'];
	    $ship_postal_code = $order_info['s_zipcode'];
	    $ship_country_code = $Code[$order_info['s_country']];
	    $return_url = fn_url("payment_notification.return?payment=ebs&order_id=$order_id",'current');
        $channel = '10';
        $page_id = $processor_data['processor_params']['ebs_page_id'];
        $currency = 'INR';

        $ebs_args =  array(
                        'channel' => 0,
					    'account_id' => $account_id,
                        'page_id' => $page_id,
					    'mode' => $mode,
                        'currency' => $currency,
					    'reference_no' => $order_id,
					    'amount' => $amount,
					    'description' => $description,
					    'name' => $name,
					    'address' => $address,
					    'city' => $city,
					    'state' => $state,
					    'postal_code' => $postal_code,
					    'country' => $country_code,
					    'email' => $email,
					    'phone' => $phone,
					    'ship_name' => $ship_name,
					    'ship_address' => $ship_address,
					    'ship_city' => $ship_city,
					    'ship_state' => $ship_state,
					    'ship_country' => $ship_country_code,
					    'ship_postal_code' => $ship_postal_code,
                        'ship_phone' => $phone,
					    'return_url' => 'https://itumm.com'.$return_url,
			    );	
        $hashData = $processor_data['processor_params']['ebs_secret_key'];
        $hashType = $processor_data['processor_params']['ebs_hashtype'];
        ksort($ebs_args);		
            foreach ($ebs_args as $key => $value){
                if (strlen($value) > 0) {
				    $hashData .= '|'.$value;
			    }
		    }
       
            if (strlen($hashData) > 0) {
                if($hashType == "MD5")
			        $hashValue = strtoupper(md5($hashData));
                if($hashType == "SHA512")
				    $hashValue = strtoupper(hash('SHA512',$hashData));	
			    if($hashType == "SHA1")
				    $hashValue = strtoupper(sha1($hashData));			
		    }	
            
            $var =  array(
                        'channel' => 0,
					    'account_id' => $account_id,
                        'page_id' => $page_id,
					    'mode' => $mode,
                        'currency' => $currency,
					    'reference_no' => $order_id,
					    'amount' => $amount,
					    'description' => $description,
					    'name' => $name,
					    'address' => $address,
					    'city' => $city,
					    'state' => $state,
					    'postal_code' => $postal_code,
					    'country' => $country_code,
					    'email' => $email,
					    'phone' => $phone,
					    'ship_name' => $ship_name,
					    'ship_address' => $ship_address,
					    'ship_city' => $ship_city,
					    'ship_state' => $ship_state,
					    'ship_country' => $ship_country_code,
					    'ship_postal_code' => $ship_postal_code,
					    'return_url' => 'https://itumm.com'.$return_url,
                        'ship_phone' => $phone,
                        'secure_hash' => $hashValue,
			    );	

        $output = "<form id=\"hdfc_form\" name=\"hdfc_form\" method=\"post\" action=\"$ebsUrl\">\n";
            foreach($var as $n=>$v) {
                $output .= "<input type=\"hidden\" name=\"$n\" value=\"$v\" />\n";
            }
         $output .= "<p>Please wait.. Redirecting to payment page.</p></form>";	
	    echo $output."<script language=\"javascript\" type=\"text/javascript\">document.getElementById('hdfc_form').submit();</script>";
    }
exit;
?>
