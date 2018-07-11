<?php

use Tygh\Registry;

if ( !defined('AREA') ) { die('Access denied'); }

function fn_payment_order_limit_prepare_checkout_payment_methods(&$cart, &$auth, &$payment_groups)
{
    foreach ($payment_groups as $g_key => $group) {
        foreach ($group as $p_key => $payment) {
            if(isset($cart['total'])){
                if($payment['min_order_limit'] != 0.00 && $payment['max_order_limit'] != 0.00){
                    if($payment['min_order_limit'] > $cart['total'] && $cart['total'] > $payment['max_order_limit']) {
                        unset($payment_groups[$g_key][$p_key]);
                    }
                } elseif($payment['min_order_limit'] >= 0.00 && $payment['max_order_limit'] == 0.00) {
                    if($payment['min_order_limit'] > $cart['total']) {
                        unset($payment_groups[$g_key][$p_key]);
                    }
                } elseif ($payment['max_order_limit'] != 0.00 && $payment['min_order_limit'] == 0.00) {
                    if($cart['total'] > $payment['max_order_limit']) {
                        unset($payment_groups[$g_key][$p_key]);
                    }
                }
            }
        }
        if (empty($payment_groups[$g_key])) {
            unset($payment_groups[$g_key]);
        }
    }
    if(count($payment_groups) == 1){
        foreach ($payment_groups as $g_key => $group) {
            if(count($group) == 1){
                foreach ($group as $p_key => $payment) {
                    $payment_groups[$g_key][$p_key]['instructions'] .= ' '
                        . '<div style="width: 150%; float: left; margin-top: 20px;">'
                        . 'Cash on Delivery is not applicable for the orders above Rs. 5000. <br><br>Please proceed further and make the payment through EBS.'
                        . '</div>';
                }
            }
        }
    }
}

function fn_payment_order_limit_checkout_select_default_payment_method(&$cart, &$payment_methods, &$completed_steps)
{
    $available_payment_ids = array();
    foreach ($payment_methods as $group) {
        foreach ($group as $method) {
            $available_payment_ids[] = $method['payment_id'];
        }
    }
    
    // Change default payment if it doesn't exists
    if (floatval($cart['total']) != 0 && !in_array($cart['payment_id'], $available_payment_ids)) {
        $cart['payment_id'] = reset($available_payment_ids);
        $cart['payment_method_data'] = fn_get_payment_method_data($cart['payment_id']);
    }
}

?>