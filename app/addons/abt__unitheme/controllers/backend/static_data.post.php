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
return;
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('dnFlYnVm'))) {
$static_data = Tygh::$app['view']->getTemplateVars(ab_____(base64_decode('dHVidWpkYGVidWI=')));
if (!empty($static_data[ab_____(base64_decode('YmNgYHZ1YG54amBgdHVidXZ0'))]) and $static_data[ab_____(base64_decode('YmNgYHZ1YG54amBgdHVidXZ0'))] == ab_____(base64_decode('Wg==')) and call_user_func(ab_____(base64_decode('anR'.'gYn'.'Nz'.'Yno=')),call_user_func(ab_____(base64_decode('VXpo'.'aV1CQ'.'0JO'.'Ym9i'.'aGZzOz'.'tkaW'.'Bi')),true)) ){
$s_data = call_user_func(ab_____(base64_decode('ZWNgaGZ1YHNweA==')),ab_____(base64_decode('VEZNRkRVIWJjYGB2dWBueGpgYHVmeXUtIWJjYGB2dWBueGpgYG1iY2ZtIUdTUE4hQDt0dWJ1amRgZWJ1YmBlZnRkc2pxdWpwb3QhWElGU0YhbWJvaGBkcGVmIT4hQHQhQk9FIXFic2JuYGplIT4hQGo=')), DESCR_SL, $_REQUEST[ab_____(base64_decode('cWJzYm5gamU='))]);
$static_data = call_user_func(ab_____(base64_decode('YnNzYnpgbmZzaGY=')),$static_data, $s_data);
$static_data[ab_____(base64_decode('YmNgYHZ1YG54amBgamRwbw=='))] = call_user_func(ab_____(base64_decode('Z29gaGZ1YGpuYmhmYHFianN0')),$_REQUEST[ab_____(base64_decode('cWJzYm5gamU='))], ab_____(base64_decode('YmNgYHZ1YG54amBgamRwbw==')), ab_____(base64_decode('Tg==')), true, false);
Tygh::$app['view']->assign(ab_____(base64_decode('dHVidWpkYGVidWI=')), $static_data);
}
}
