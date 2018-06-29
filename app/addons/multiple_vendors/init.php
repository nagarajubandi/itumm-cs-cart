<?php

fn_register_hooks(
	'get_products',
	'get_product_data',
	'get_additional_product_data_before_discounts',
    'gather_additional_product_data_post',
	'get_additional_information',
    'get_product_options',
    'generate_cart_id',
    'get_cart_product_data',
    'get_cart_product_data_post',
    'calculate_options',
    'check_add_to_cart_pre',
    'get_product_data_post'
);