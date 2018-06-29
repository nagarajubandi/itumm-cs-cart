<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2017   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and  accept   *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
$schema['ab__deal_of_the_day'] = array(
'content' => array(
'promotion' => array(
'type' => 'enum',
'items_function' => 'fn_ab__dotd_get_promotion_data',
'hide_label' => true,
'remove_indent' => true,
'fillings' => array(
'manually' => array(
'picker' => 'addons/ab__deal_of_the_day/pickers/promotions/picker.tpl',
'picker_params' => array(
'multiple' => false,
'status' => 'A',
'zone' => 'catalog',
'default_name' => __('ab__dotd.choose_promotion')
),
),
),
),
),
'settings' => array(
'show_price' => array(
'type' => 'checkbox',
'default_value' => 'Y'
),
'enable_quick_view' => array(
'type' => 'checkbox',
'default_value' => 'N'
),
'not_scroll_automatically' => array(
'type' => 'checkbox',
'default_value' => 'N'
),
'scroll_per_page' => array(
'type' => 'checkbox',
'default_value' => 'N'
),
'speed' => array(
'type' => 'input',
'default_value' => 400
),
'pause_delay' => array(
'type' => 'input',
'default_value' => 3
),
'item_quantity' => array(
'type' => 'input',
'default_value' => 5
),
'thumbnail_width' => array(
'type' => 'input',
'default_value' => 80
),
'outside_navigation' => array(
'type' => 'checkbox',
'default_value' => 'Y'
),
'ab__show_additional_product_images' => array(
'type' => 'checkbox',
'default_value' => 'N'
)
),
'templates' => array(
'addons/ab__deal_of_the_day/blocks/ab__deal_of_the_day.tpl' => array(),
),
'wrappers' => 'blocks/wrappers',
'cache' => array(
'update_handlers' => array(
'promotions',
'promotion_descriptions',
'categories',
'products_categories',
'products',
'product_descriptions',
'product_prices',
'products_categories',
'product_popularity',
'product_options',
'product_options_descriptions',
'product_option_variants',
'product_option_variants_descriptions',
'product_options_exceptions',
'product_options_inventory',
'product_global_option_links',
),
'cookie_handlers' => array('%ALL%'),
'callable_handlers' => array(
'currency' => array('fn_get_secondary_currency'),
'date' => array('date', array('Y-m-d'))
)
)
);
if (fn_allowed_for('ULTIMATE')) {
$schema['ab__deal_of_the_day']['cache']['update_handlers'][] = 'ult_product_prices';
$schema['ab__deal_of_the_day']['cache']['update_handlers'][] = 'ult_product_descriptions';
$schema['ab__deal_of_the_day']['cache']['update_handlers'][] = 'ult_product_option_variants';
}
$schema['ab__promotions'] = array(
'content' => array(
'items' => array(
'type' => 'enum',
'items_function' => 'fn_ab__dotd_get_promotions',
'hide_label' => true,
'remove_indent' => true,
'fillings' => array(
'manually' => array(
'picker' => 'addons/ab__deal_of_the_day/pickers/promotions/picker.tpl',
'picker_params' => array(
'multiple' => true,
'status' => 'A',
'positions' => true,
)
),
'ab__dotd_sorted_promotions' => array(
'params' => array(
'active' => true,
),
'settings' => array(
'sort_by' => array(
'type' => 'selectbox',
'values' => array(
'' => 'ab__dotd.sort.created',
'to_date' => 'ab__dotd.sort.to_date',
'priority' => 'ab__dotd.sort.priority',
'name' => 'ab__dotd.sort.name',
),
'default_value' => ''
),
'sort_order' => array(
'type' => 'selectbox',
'values' => array(
'asc' => 'asc',
'desc' => 'desc',
),
'default_value' => 'desc'
),
'limit' => array(
'type' => 'input',
'default_value' => 3
),
),
),
),
),
),
'templates' => 'addons/ab__deal_of_the_day/blocks/promotions',
'wrappers' => 'blocks/wrappers',
'cache' => array(
'update_handlers' => array(
'promotions',
'promotion_descriptions'
),
'callable_handlers' => array(
'date' => array('date', array('Y-m-d'))
)
)
);
return $schema;
