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
$schema['blocks/products/products_scroller_advanced.tpl'] = array (
'settings' => array (
'not_scroll_automatically' => array (
'type' => 'checkbox',
'default_value' => 'N'
),
'scroll_per_page' => array (
'type' => 'checkbox',
'default_value' => 'N'
),
'speed' => array (
'type' => 'input',
'default_value' => 400
),
'pause_delay' => array (
'type' => 'input',
'default_value' => 5
),
'item_quantity' => array (
'type' => 'input',
'default_value' => 5
)
),
'bulk_modifier' => array (
'fn_gather_additional_products_data' => array (
'products' => '#this',
'params' => array (
'get_icon' => true,
'get_detailed' => true,
'get_options' => true,
'get_additional' => false,
),
),
)
);
$schema['blocks/categories/categories_dropdown_horizontal.tpl']['settings']['dropdown_third_level_view'] = array(
'type' => 'input',
'default_value' => '5'
);
$schema['blocks/menu/dropdown_horizontal.tpl']['settings']['dropdown_third_level_view'] = array(
'type' => 'input',
'default_value' => '5'
);
$schema['blocks/menu/dropdown_horizontal_ab__un_mwi.tpl'] = array (
'settings' => array (
'dropdown_second_level_elements' => array (
'type' => 'input',
'default_value' => '12'
),
'dropdown_third_level_elements' => array (
'type' => 'input',
'default_value' => '6'
),
'no_hidden_elements_second_level_view' => array(
'type' => 'input',
'default_value' => '5'
),
'elements_per_column_third_level_view' => array(
'type' => 'input',
'default_value' => '10'
),
'abt_menu_ajax_load' => array(
'type' => 'checkbox',
'default_value' => 'N'
),
),
);
return $schema;