<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if($mode == 'place_order') {
    if(!empty($_REQUEST['delivery_time'])) {
        $_SESSION['cart']['delivery_time'] = $_REQUEST['delivery_time'];
    }
}
