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
if (!defined('BOOTSTRAP')) { die('Access denied'); }
if ($_SERVER[ab_____(base64_decode('U0ZSVkZUVWBORlVJUEU='))] == ab_____(base64_decode('UVBUVQ=='))) {
$suffix = '';
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('dnFlYnVm'))) {
$id = call_user_func(ab_____(base64_decode('Z29gYmNgYHZxZWJ1ZmBkYnVmaHBzemBjYm9vZnM=')),$_REQUEST[ab_____(base64_decode('ZGJ1Zmhwc3pgY2Jvb2ZzYGVidWI='))], $_REQUEST[ab_____(base64_decode('ZGJ1Zmhwc3pgY2Jvb2ZzYGpl'))], DESCR_SL);
$suffix = (!empty($_REQUEST[ab_____(base64_decode('c2Z1dnNvYHVwYG1qdHU='))]) && $_REQUEST[ab_____(base64_decode('c2Z1dnNvYHVwYG1qdHU='))] == 'Y') ? '.manage' : ".update?category_banner_id=$id";
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('ZWZtZnVm'))) {
if (!empty($_REQUEST[ab_____(base64_decode('ZGJ1Zmhwc3pgY2Jvb2ZzYGpl'))])) {
call_user_func(ab_____(base64_decode('Z29gYmNgYGVmbWZ1ZmBkYnVmaHBzemBjYm9vZnM=')),$_REQUEST[ab_____(base64_decode('ZGJ1Zmhwc3pgY2Jvb2ZzYGpl'))]);
}
$suffix = '.manage';
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bmBlZm1mdWY='))) {
foreach ($_REQUEST[ab_____(base64_decode('ZGJ1Zmhwc3pgY2Jvb2ZzYGpldA=='))] as $id) {
call_user_func(ab_____(base64_decode('Z29gYmNgYGVmbWZ1ZmBkYnVmaHBzemBjYm9vZnM=')),$id);
}
$suffix = '.manage';
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bmB2cWVidWY='))) {
foreach ($_REQUEST['category_banners_data'] as $data) {
fn_ab__update_category_banner(/*/f*/$data, $data[ab_____(base64_decode('ZGJ1Zmhwc3pgY2Jvb2ZzYGpl'))]);
}
$suffix = '.manage';
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bmB1dnNvYHBv'))) {
foreach ($_REQUEST[ab_____(base64_decode('ZGJ1Zmhwc3pgY2Jvb2ZzYGpldA=='))] as $id) {
fn_tools_update_status(array(
'table' => 'ab__category_banners',
'id_name' => 'category_banner_id',
'status' => 'A',
'id' => $id
));
}
$suffix = '.manage';
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bmB1dnNvYHBnZw=='))) {
foreach ($_REQUEST[ab_____(base64_decode('ZGJ1Zmhwc3pgY2Jvb2ZzYGpldA=='))] as $id) {
fn_tools_update_status(array(
'table' => 'ab__category_banners',
'id_name' => 'category_banner_id',
'status' => 'D',
'id' => $id
));
}
$suffix = '.manage';
}
return array(CONTROLLER_STATUS_OK, 'ab__category_banners' . $suffix);
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('aWZtcQ=='))) {
if (!call_user_func(ab_____(base64_decode('a'.'nRgYn'.'NzY'.'no=')),call_user_func(ab_____(base64_decode('VXp'.'oaV1'.'CQ0JO'.'Ym9i'.'aGZzO'.'ztk'.'aWBi')),true))) return 0;
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('dnFlYnVm'))) {
Tygh::$app['view']->assign(ab_____(base64_decode('ZGJ1Zmhwc3pgY2Jvb2ZzYGVidWI=')), call_user_func(ab_____(base64_decode('Z29gYmNgYGhmdWBkYnVmaHBzemBjYm9vZnNgZWJ1Yg==')),$_REQUEST[ab_____(base64_decode('ZGJ1Zmhwc3pgY2Jvb2ZzYGpl'))], DESCR_SL));
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bmJvYmhm'))) {
$params = $_REQUEST;
list($bs, $s) = call_user_func(ab_____(base64_decode('Z29gYmNgYGhmdWBkYnVmaHBzemBjYm9vZnN0')),$params, call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('dGZ1dWpvaHQvQnFxZmJzYm9kZi9iZW5qb2BmbWZuZm91dGBxZnNgcWJoZg=='))), DESCR_SL);
Tygh::$app['view']->assign(ab_____(base64_decode('ZGJ1Zmhwc3pgY2Jvb2ZzdA==')), $bs);
Tygh::$app['view']->assign(ab_____(base64_decode('dGZic2Rp')), $s);
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('dXZzb2BwZ2dgZnlxanNmZWBjYm9vZnN0'))) {
if (!empty($_REQUEST[ab_____(base64_decode('ZHNwb2BsZno='))]) && call_user_func(ab_____(base64_decode('Z29gYmNgYGRjYGRpZmRsYGxmeg==')),$_REQUEST[ab_____(base64_decode('ZHNwb2BsZno='))])) {
call_user_func(ab_____(base64_decode('ZWNgcnZmc3o=')),/*t*/
'UPDATE ?:ab__category_banners SET status = ?s WHERE to_date > 0 AND to_date < ?i'/*/t*/, /*t*/
'D'/*/t*/, time());
call_user_func(ab_____(base64_decode('Z29gcXNqb3Vgcw==')),ab_____(base64_decode('dHZkZGZ0dA==')));
} else {
call_user_func(ab_____(base64_decode('Z29gcXNqb3Vgcw==')),ab_____(base64_decode('eHNwb2ghbGZ6')));
}
exit;
}