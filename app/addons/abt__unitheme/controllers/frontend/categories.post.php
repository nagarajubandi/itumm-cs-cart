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
if ($_SERVER['REQUEST_METHOD'] == 'POST' and defined('AJAX_REQUEST')){
if ($mode == 'ab__ut_full_width'){
$_SESSION['ab__ut_full_width'] = false;
if (!empty($_REQUEST['full_width']) and $_REQUEST['full_width'] == 'active'){
$_SESSION['ab__ut_full_width'] = true;
}
}
if ($mode == 'ab__ut_hidden_filter'){
$_SESSION['ab__ut_hidden_filter'] = false;
if (!empty($_REQUEST['side_hidden']) and $_REQUEST['side_hidden'] == 'active'){
$_SESSION['ab__ut_hidden_filter'] = true;
}
}
exit;
}
if ($mode == 'view'){
if (!empty($_SESSION['ab__ut_full_width'])){
Tygh::$app['view']->assign('ab__ut_full_width', true);
}
if (!empty($_SESSION['ab__ut_hidden_filter'])){
Tygh::$app['view']->assign('ab__ut_hidden_filter', true);
}
}