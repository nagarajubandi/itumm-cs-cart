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
$schema['abt__ut'] = array(
'permissions' => array('GET' => 'abt__ut.settings.view', 'POST' => 'abt__ut.settings.manage'),
'modes' => array(
'settings' => array (
'permissions' => array(
'GET' => 'abt__ut.settings.view',
)
),
'update_settings' => array (
'permissions' => array(
'POST' => 'abt__ut.settings.manage',
)
),
'microdata' => array (
'permissions' => array(
'GET' => 'abt__ut.settings.view',
)
),
'update_microdata' => array (
'permissions' => array(
'POST' => 'abt__ut.settings.manage',
)
),
'demo_data' => array (
'permissions' => array(
'GET' => 'abt__ut.settings.view',
'POST' => 'abt__ut.settings.manage',
)
),
'help' => array (
'permissions' => array(
'GET' => 'abt__ut.settings.view',
)
),
),
);
$schema['abt__ut_buy_together'] = array(
'modes' => array(
'generate' => array (
'permissions' => 'abt__ut.buy_together_generate'
),
'manage' => array (
'permissions' => 'manage_catalog'
),
'update' => array (
'permissions' => 'manage_catalog'
),
'delete' => array (
'permissions' => 'manage_catalog'
),
'm_delete' => array (
'permissions' => 'manage_catalog'
),
),
);
return $schema;
