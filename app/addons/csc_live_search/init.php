<?php
/*****************************************************************************
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
* 			http://www.cs-commerce.com/license-agreement.html 				 *
*                                                                            *
*****************************************************************************/
if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(   
    'get_products',
	'get_products_before_select',
	'get_products_pre',
	'url_post',
	'update_product_pre'
);
