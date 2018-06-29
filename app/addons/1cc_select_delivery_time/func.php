<?php


use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_1cc_select_delivery_time_place_order($order_id, $action, $order_status, $cart, $auth) {
    db_query('UPDATE ?:orders SET ?u WHERE order_id = ?i', array('delivery_time' => $cart['delivery_time']), $order_id);
}

