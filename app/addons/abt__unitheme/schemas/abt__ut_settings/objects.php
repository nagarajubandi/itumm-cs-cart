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
$schema[] = array(
'name' => 'hide_product_description',
'type' => 'input',
'position' => 100,
'value' => '250',
'multilanguage' => 'N',
);
$schema[] = array(
'name' => 'hide_feature_descriptions',
'type' => 'input',
'position' => 200,
'value' => '250',
'multilanguage' => 'N',
);
$schema[] = array(
'name' => 'show_short_desc_in_multicolumns_list',
'type' => 'checkbox',
'position' => 300,
'value' => 'N',
'multilanguage' => 'N',
);
$schema[] = array(
'name' => 'hide_short_features_in_product_list',
'type' => 'checkbox',
'position' => 400,
'value' => 'N',
'multilanguage' => 'N',
);
$schema[] = array(
'name' => 'show_short_desc_in_product',
'type' => 'checkbox',
'position' => 500,
'value' => 'N',
'multilanguage' => 'N',
);
$schema[] = array(
'name' => 'show_features_in_product',
'type' => 'checkbox',
'position' => 600,
'value' => 'Y',
'multilanguage' => 'N',
);
$schema[] = array(
'name' => 'show_block_in_product',
'type' => 'input',
'position' => 700,
'value' => '',
'multilanguage' => 'N',
);
$schema[] = array(
'name' => 'show_button_buy_in_product_lists',
'type' => 'checkbox',
'position' =>800,
'value' => 'Y',
'multilanguage' => 'N',
);
$schema[] = array(
'name' => 'hide_subcategories_in_category',
'type' => 'checkbox',
'position' => 900,
'value' => 'Y',
'multilanguage' => 'N',
);
return $schema;
