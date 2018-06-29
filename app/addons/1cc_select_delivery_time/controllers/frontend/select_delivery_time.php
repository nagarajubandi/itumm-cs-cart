<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if($mode == 'save') {
    if(!empty($_REQUEST['time'])) {
        $_SESSION['cart']['delivery_time'] = $_REQUEST['time'];
    }
    exit;
}
