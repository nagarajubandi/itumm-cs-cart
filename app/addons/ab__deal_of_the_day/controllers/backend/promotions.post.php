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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
}
if ($mode == 'update' || $mode == 'add') {
if (fn_check_view_permissions('ab__deal_of_the_day.view')) {
Registry::set(ab_____(base64_decode('b2J3amhidWpwby91YmN0L2JjYGBlcHVl')), array(
'title' => __('ab__deal_of_the_day'),
'js' => true
));
$promotion_data = Tygh::$app['view']->getTemplateVars('promotion_data');
if (!empty($promotion_data)) {
$promotion_data = call_user_func(ab_____(base64_decode('Z29gYmNgYGVwdWVgaGZ1YHFzcG5wdWpwb2B0ZnBgZWJ1Yg==')),$promotion_data, DESCR_SL);
Tygh::$app['view']->assign('promotion_data', $promotion_data);
}
}
} elseif ($mode == 'picker') {
list($promotions, $search) = fn_get_promotions($_REQUEST, Registry::get('settings.Appearance.admin_elements_per_page'), DESCR_SL);
Tygh::$app['view']->assign('search', $search);
Tygh::$app['view']->assign('promotions', $promotions);
Tygh::$app['view']->display('addons/ab__deal_of_the_day/pickers/promotions/picker_contents.tpl');
exit;
}
