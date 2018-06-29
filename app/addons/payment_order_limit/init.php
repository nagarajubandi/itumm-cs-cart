<?php

if ( !defined('AREA') ) { die('Access denied'); }

fn_register_hooks(
	'prepare_checkout_payment_methods',
	'checkout_select_default_payment_method'
);

?>