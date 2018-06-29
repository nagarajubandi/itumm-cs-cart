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
$schema['testimonials']['settings'] = array(
'limit' => array (
'type' => 'input',
'default_value' => '10'
),
'random' => array (
'type' => 'checkbox',
'default_value' => 'N'
)
);
$schema['ut_advanced_subcategories_menu'] = array(
'templates' => 'addons/abt__unitheme/blocks/abt_advanced_subcategories_menu.tpl',
'content' => array(
'abt_subcategories' => array(
'type' => 'function',
'function' => array('fn_abt__get_sub_or_parent_categories')
),
),
'wrappers' => 'blocks/wrappers',
'cache' => array(
'update_handlers' => array(
'categories',
'category_descriptions'
),
'request_handlers' => array('current_category_id' => '%CATEGORY_ID%')
)
);
return $schema;