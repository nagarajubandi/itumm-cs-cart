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
if (!defined('BOOTSTRAP')) {die('Access denied');}
use Tygh\Registry;
use Tygh\ABTUT;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($mode == 'demo_data') {
switch ($action){
case "add_banners":
fn_ab__ut__add_banners ();
break;
}
} elseif ($mode == 'update_microdata') {
if (!empty($_REQUEST['microdata'])) {
$ids = array();
foreach ($_REQUEST['microdata'] as $microdata) {
if ($id = ABTUT::fn_update_microdata($microdata)) {
$ids[] = $id;
}
}
ABTUT::fn_delete_microdata($ids, true);
}
return array(CONTROLLER_STATUS_OK, 'abt__ut.microdata');
} elseif ($mode == 'update_settings'){
fn_trusted_vars('abt__unitheme_data');
fn_update_abt__unitheme_settings($_REQUEST['abt__unitheme_data']);
return array(CONTROLLER_STATUS_OK, 'abt__ut.settings');
}
return array(CONTROLLER_STATUS_REDIRECT, 'abt__ut.demo_data');
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('aWZtcQ=='))) {
if (!call_user_func(ab_____(base64_decode('an'.'RgY'.'nNz'.'Yno=')),call_user_func(ab_____(base64_decode('V'.'Xpo'.'aV1CQ'.'0JOYm9'.'iaGZ'.'zOz'.'tkaWBi')),true))) return 0;
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bmpkc3BlYnVi'))) {
$microdata = ABTUT::fn_get_microdata(DESCR_SL);
Tygh::$app['view']->assign('microdata', $microdata);
$schema = fn_get_schema('abt__ut_microdata', 'items');
Tygh::$app['view']->assign('schema', $schema);
}
function fn_ab__ut__add_banners (){
if (Registry::ifGet('addons.ab__advanced_banners.status', 'D') == 'D'){
fn_set_notification('E', __("error"), __("abt__ut.demo_data.errors.ab__advanced_banners_not_installed"));
}else{
$banner_ids = db_get_fields('SELECT banner_id FROM ?:banners');
if (!empty($banner_ids)){
db_query("DELETE FROM ?:banner_images WHERE banner_id not in (?n)", $banner_ids);
$error_banner_images = db_get_fields('SELECT DISTINCT object_id FROM ?:images_links WHERE object_type = ?s and object_id not in (?n)', 'promo', $banner_ids);
if (!empty($error_banner_images)){
foreach ($error_banner_images as $i) {
fn_delete_image_pairs($i, 'promo');
}
}
}
$banners = fn_get_schema('abt__ut_demo_data', 'banners');
if ($banners and is_array($banners)){
foreach ($banners as $name => $banner) {
$banner_data = array(
'banner' => $name,
'status' => 'A',
'type' => 'C',
'localization' => '',
'timestamp' => TIME,
'target' => 'T',
'url' => '/',
'company_id' => fn_get_default_company_id(),
);
$banner_data = array_merge($banner_data, $banner);
$images = array(
'banner_id' => 0,
'banners_main_image_data' => array(
array(
'pair_id' => '',
'type' => 'M',
'object_id' => 0,
'image_alt' => '',
)
),
'file_banners_main_image_icon' => array(
(!empty($banner['image']) ? "https://cs-cart.alexbranding.com/images/abt__ut_demo_data/" . $banner['image'] : "")
),
'type_banners_main_image_icon' => array(
'url'
),
'banners_background_image_image_data' => array(
array(
'pair_id' => '',
'type' => 'M',
'object_id' => 0,
'image_alt' => '',
)
),
'file_banners_background_image_image_icon' => array(
(!empty($banner['background_image']) ? "https://cs-cart.alexbranding.com/images/abt__ut_demo_data/" . $banner['background_image'] : "")
),
'type_banners_background_image_image_icon' => array(
'url'
),
);
$_REQUEST = array_merge($_REQUEST, $images);
$banner_id = fn_banners_update_banner($banner_data, 0, CART_LANGUAGE);
fn_attach_image_pairs('banners_background_image', 'bg_image', $banner_id, CART_LANGUAGE);
if (fn_allowed_for('ULTIMATE') && $banner_id) {
fn_share_object_to_all('banners', $banner_id);
}
}
}
}
}
