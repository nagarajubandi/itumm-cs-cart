<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
    'update_product_pre',
    'update_product_post',
    'gather_additional_products_data_post',
    'get_products',
    'get_product_data_post',
    'get_product_filter_fields',
    'get_products_before_select',
    'get_filters_products_count_before_select'
);
