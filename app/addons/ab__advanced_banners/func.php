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
function fn_ab__advanced_banners_install(){
$sql = "SHOW COLUMNS FROM ?:banner_descriptions;";
$fields = db_get_array($sql);
$fields_list = Array();
$fields_to_install = Array();
$fields_to_install['ab__title'] = 'ALTER TABLE `?:banner_descriptions` ADD `ab__title` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER `banner`;';
$fields_to_install['ab__adv_text'] = 'ALTER TABLE `?:banner_descriptions` ADD `ab__adv_text` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER `banner`;';
$fields_to_install['ab__button_text'] = 'ALTER TABLE `?:banner_descriptions` ADD `ab__button_text` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER `banner`;';
$fields_to_install['ab__bg_color'] = 'ALTER TABLE `?:banner_descriptions` ADD `ab__bg_color` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER `banner`;';
$fields_to_install['ab__color_scheme'] = 'ALTER TABLE `?:banner_descriptions` ADD `ab__color_scheme` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER `banner`;';
foreach ($fields as $field) {
$fields_list[] = $field['Field'];
}
foreach ($fields_to_install as $field => $sql) {
if (!in_array($field, $fields_list)){
db_query($sql);
}
}
}
function fn_ab__advanced_banners_get_banner_data($banner_id, $lang_code, &$fields, $joins, $condition){
$fields[] = '?:banner_descriptions.ab__title';
$fields[] = '?:banner_descriptions.ab__adv_text';
$fields[] = '?:banner_descriptions.ab__button_text';
$fields[] = '?:banner_descriptions.ab__bg_color';
$fields[] = '?:banner_descriptions.ab__color_scheme';
}
function fn_ab__advanced_banners_get_banners_post(&$banners, $params){
foreach ($banners as &$banner){
$banner_id = $banner['banner_id'];
$banner['bg_image'] = fn_get_image_pairs($banner_id, 'bg_image', 'M', true, false);
$banner = array_merge($banner, db_get_row("SELECT ab__title,ab__adv_text,ab__button_text,ab__bg_color,ab__color_scheme FROM ?:banner_descriptions WHERE banner_id = $banner_id AND lang_code = '".CART_LANGUAGE."'"));
}
}
function fn_ab__advanced_banners_get_banner_data_post($banner_id, $lang_code, &$banner){
$banner['bg_image'] = fn_get_image_pairs($banner_id, 'bg_image', 'M', true, false, $lang_code);
}
