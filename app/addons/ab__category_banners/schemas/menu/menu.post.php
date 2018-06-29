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
if (!defined('BOOTSTRAP')) { die('Access denied'); }
$schema['central']['ab__addons']['items']['ab__category_banners'] = array(
'attrs' => array(
'class'=>'is-addon'
),
'href' => 'ab__category_banners.manage',
'position' => 700,
'subitems' => array(
'ab__category_banners.manage' => array(
'attrs' => array(
'class' => 'is-addon'
),
'href' => 'ab__category_banners.manage',
'position' => 10
),
'ab__category_banners.help' => array(
'attrs' => array(
'class' => 'is-addon'
),
'href' => 'ab__category_banners.help',
'position' => 20
),
)
);
return $schema;
