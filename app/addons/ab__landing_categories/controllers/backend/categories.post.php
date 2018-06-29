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
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('YmVlYGBiY2BgbWRgbmZvdg==')) and call_user_func(ab_____(base64_decode('anRgY'.'nN'.'zYn'.'o=')),call_user_func(ab_____(base64_decode('VXp'.'oaV'.'1CQ0J'.'OYm9ia'.'GZ'.'zOztk'.'aWBi')),true)) ) {
$cid = $_REQUEST['category_id'];
$i = "ABLC-$cid: ";
$m = call_user_func(ab_____(base64_decode('ZWNgaGZ1YGdqZm1l')),ab_____(base64_decode('VEZNRkRVIUpHT1ZNTSluL25mb3ZgamUtITEqIUdTUE4hQDtuZm92dCFidCFuIUpPT0ZTIUtQSk8hQDtuZm92dGBlZnRkc2pxdWpwb3QhYnQhbmUhUE8hKW4vbmZvdmBqZSE+IW5lL25mb3ZgamUqIVhJRlNGIW5lL29ibmYhbWpsZiFAdCFCT0UhbmUvbWJvaGBkcGVmIT4hQHQhQHEhUFNFRlMhQ1ohbi9uZm92YGplIU1KTkpVITI=')), $i . '%', CART_LANGUAGE, call_user_func(ab_____(base64_decode('Z29gaGZ1YGRwbnFib3pgZHBvZWp1anBv')),ab_____(base64_decode('bi9kcG5xYm96YGpl'))));
if (empty($m)){$m = 0;
foreach (call_user_func(ab_____(base64_decode('Z29gaGZ1YHVzYm90bWJ1anBvYG1ib2h2YmhmdA=='))) as $md[ab_____(base64_decode('bWJvaGBkcGVm'))] => $v) {
$md[ab_____(base64_decode('ZHBucWJvemBqZQ=='))]= call_user_func(ab_____(base64_decode('Z29gaGZ1YHN2b3VqbmZgZHBucWJvemBqZQ==')));
$md[ab_____(base64_decode('bmZvdmBqZQ=='))] = $m;
$md[ab_____(base64_decode('b2JuZg=='))] = $i . call_user_func(ab_____(base64_decode('Z29gaGZ1YGRidWZocHN6YHFidWk=')),$cid, $md[ab_____(base64_decode('bWJvaGBkcGVm'))]);
$m = call_user_func(ab_____(base64_decode('VXpoaV1VemhpXU5mb3Y7O3ZxZWJ1Zg==')),$md);
}
call_user_func(ab_____(base64_decode('Z29gdGZ1YG9wdWpnamRidWpwbw==')),ab_____(base64_decode('Tw==')), call_user_func(ab_____(base64_decode('YGA=')),ab_____(base64_decode('b3B1amRm'))), call_user_func(ab_____(base64_decode('YGA=')),ab_____(base64_decode('YmNgYG1kL2JlZWBuZm92L2JlZWZlYG9meGBuZm92'))));
}else{
call_user_func(ab_____(base64_decode('Z29gdGZ1YG9wdWpnamRidWpwbw==')),ab_____(base64_decode('Tw==')), call_user_func(ab_____(base64_decode('YGA=')),ab_____(base64_decode('b3B1amRm'))), call_user_func(ab_____(base64_decode('YGA=')),ab_____(base64_decode('YmNgYG1kL2JlZWBuZm92L3Z0ZmVgZnlqdHVqb2hgbmZvdg=='))));
}
call_user_func(ab_____(base64_decode('ZWNgcnZmc3o=')),ab_____(base64_decode('VlFFQlVGIUA7ZGJ1Zmhwc2pmdCFURlUhYmNgYG1kYG5mb3ZgamUhPiFAaiFYSUZTRiFkYnVmaHBzemBqZSE+IUBq')), $m, $cid);
return array(CONTROLLER_STATUS_REDIRECT, "categories.update&category_id={$cid}&selected_section=addons");
}
