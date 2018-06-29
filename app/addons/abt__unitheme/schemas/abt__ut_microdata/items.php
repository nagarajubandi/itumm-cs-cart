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
use Tygh\Registry;
$company = Registry::get('settings.Company');
if (Registry::get('runtime.company_id')) {
$company_id= Registry::get('runtime.company_id');
} else {
$company_id = fn_get_company_id_by_name($company['company_name']);
}
$logos = fn_get_logos($company_id);
$schema = array(
'name' => array(
'default_value' => $company['company_name'],
'group' => '',
),
'url' => array(
'default_value' => fn_url("", 'C', fn_get_storefront_protocol(), DESCR_SL),
'group' => '',
),
'logo' => array(
'default_value' => $logos['theme']['image']['image_path'],
'group' => '',
),
'sameAs' => array(
'default_value' => '',
'group' => '',
),
'streetAddress' => array(
'default_value' => $company['company_address'],
'group' => 'address',
),
'postalCode' => array(
'default_value' => $company['company_zipcode'],
'group' => 'address',
),
'addressLocality' => array(
'default_value' => fn_get_country_name($company['company_country'], CART_LANGUAGE) . ', ' . fn_get_state_name($company['company_state'], $company['company_country']) . ', г. ' . $company['company_city'],
'group' => 'address',
),
'telephone' => array(
'default_value' => $company['company_phone'],
'group' => '',
),
'email' => array(
'default_value' => $company['company_support_department'],
'group' => '',
),
);
return $schema;
