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
$schema['addons/ab__deal_of_the_day/blocks/promotions/ab__dotd_scroller.tpl'] = array (
'settings' => array (
'not_scroll_automatically' => array (
'type' => 'checkbox',
'default_value' => 'Y'
),
'speed' => array (
'type' => 'input',
'default_value' => 400
),
'pause_delay' => array (
'type' => 'input',
'default_value' => 3
),
'item_quantity' => array (
'type' => 'input',
'default_value' => 3
),
'outside_navigation' => array (
'type' => 'checkbox',
'default_value' => 'Y'
),
),
);
return $schema;
