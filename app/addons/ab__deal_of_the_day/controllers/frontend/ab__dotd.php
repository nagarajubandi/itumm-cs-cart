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
use Tygh\Registry;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('aGZ1YGRpYmpvdA=='))) {
list($chains, $search) = fn_ab__dotd_get_chains($_REQUEST);
Tygh::$app['view']->assign('chains', $chains);
$more = min($search['items_per_page'], $search['total_items'] - $search['items_per_page'] * $search['page']);
$search['text_get_more'] = __('ab__dotd.get_more_combinations', array($more));
$search['text_showed'] = __('ab__dotd.showed_combitations', array('[n]' => $search['items_per_page'] * $search['page'], '[total]' => $search['total_items']));
Tygh::$app['ajax']->assign('html', Tygh::$app['view']->fetch('addons/buy_together/blocks/product_tabs/buy_together.tpl'));
Tygh::$app['ajax']->assign('search', $search);
}
exit;
}
