<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'cart') {
    if (empty($_SESSION['cart']['products'])) {
        if (defined('AJAX_REQUEST')) {
            Tygh::$app['ajax']->assign('force_redirection', fn_url('checkout.' . $_REQUEST['redirect_mode']));
            exit;
        }
    }
}

?>