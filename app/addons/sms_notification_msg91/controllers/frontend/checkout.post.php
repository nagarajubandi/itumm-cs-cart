<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }
if ($mode == 'complete') {

    if (!empty($_REQUEST['order_id'])) {
        
        $order_info = fn_get_order_info($_REQUEST['order_id']);

        if (!empty($order_info['is_parent_order']) && $order_info['is_parent_order'] == 'Y') {
            $child_ids = db_get_fields(
                "SELECT order_id FROM ?:orders WHERE parent_order_id = ?i", $_REQUEST['order_id']
            );

            foreach ($child_ids as $key => $sub_order_id) {
            	$sub_order_info = fn_get_order_info($sub_order_id);
            	fn_set_msg91_sms_order_place_notification($sub_order_info,$sub_order_id);
            }
        } else {
            fn_set_msg91_sms_order_place_notification($order_info,$_REQUEST['order_id']);
        }   
    }
}