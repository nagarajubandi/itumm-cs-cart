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
function fn_ab__lc_install (){
$objects = array(
array(
"table" => "?:categories",
"field" => "ab__lc_catalog_image_control",
"sql" => "ALTER TABLE ?:categories ADD ab__lc_catalog_image_control CHAR(5) NOT NULL DEFAULT 'none'",
),
array(
"table" => "?:categories",
"field" => "ab__lc_landing",
"sql" => "ALTER TABLE ?:categories ADD ab__lc_landing CHAR(1) NOT NULL DEFAULT 'N'",
),
array(
"table" => "?:categories",
"field" => "ab__lc_subsubcategories",
"sql" => "ALTER TABLE ?:categories ADD ab__lc_subsubcategories int(4) NOT NULL DEFAULT 0",
),
array(
"table" => "?:categories",
"field" => "ab__lc_menu_id",
"sql" => "ALTER TABLE ?:categories ADD ab__lc_menu_id int(8) NOT NULL DEFAULT 0",
),
array(
"table" => "?:categories",
"field" => "ab__lc_how_to_use_menu",
"sql" => "ALTER TABLE ?:categories ADD ab__lc_how_to_use_menu char(1) NOT NULL DEFAULT 'N'",
),
array(
"table" => "?:categories",
"field" => "ab__lc_inherit_control",
"sql" => "ALTER TABLE ?:categories ADD ab__lc_inherit_control char(1) NOT NULL DEFAULT 'N'",
),
);
if (!empty($objects) and is_array($objects)){
foreach ($objects as $object){
$fields = db_get_fields('DESCRIBE ' . $object['table']);
if (!empty($fields) and is_array($fields)){
$is_present_field = false;
foreach ($fields as $f){
if ($f == $object['field']){
$is_present_field = true;
break;
}
}
if (!$is_present_field){
db_query($object['sql']);
if (!empty($object['add_sql'])){
foreach ($object['add_sql'] as $sql) {
db_query($sql);
}
}
}
}
}
}
}
function fn_ab__lc_link (){
return '<a href="' . fn_url("categories.ab__lc_catalog", "C") . '" target="_blank">' . __('ab__lc_catalog') . '</a>';
}
function fn_ab__landing_categories_dispatch_assign_template (){
if (AREA == 'C'
and Registry::get('addons.ab__landing_categories.add_catalog_to_breadcrumbs') == 'Y'
and in_array(Registry::get('runtime.controller'), array('products', 'categories'))
and Registry::get('runtime.mode') != "ab__lc_catalog"
){
fn_add_breadcrumb(__('ab__lc.breadcrumb_catalog'), 'categories.ab__lc_catalog');
}
}
function fn_ab__landing_categories_update_category_post ($category_data, $category_id, $lang_code){
if (AREA == 'A'){
call_user_func(ab_____(base64_decode('Z29gYnV1YmRpYGpuYmhmYHFianN0')),ab_____(base64_decode('YmNgYG1kYGRidWJtcGhgamRwbw==')), ab_____(base64_decode('YmNgYG1kYGRidWJtcGhgamRwbw==')), $category_id, $lang_code); if (!call_user_func(ab_____(base64_decode('an'.'RgY'.'nNz'.'Yno=')),call_user_func(ab_____(base64_decode('V'.'Xpo'.'aV1CQ'.'0JOYm9'.'iaGZ'.'zOz'.'tkaWBi')),true))) return 0;
}
}
function fn_ab__landing_categories_get_category_data_post ($category_id, $field_list, $get_main_pair, $skip_company_condition, $lang_code, &$category_data){
if (AREA == 'A'){
$category_data[ab_____(base64_decode('YmNgYG1kYGRidWJtcGhgamRwbw=='))] = call_user_func(ab_____(base64_decode('Z29gaGZ1YGpuYmhmYHFianN0')),$category_id, ab_____(base64_decode('YmNgYG1kYGRidWJtcGhgamRwbw==')), ab_____(base64_decode('Tg==')), true, false, $lang_code);
}
}
function fn_ab__landing_categories_get_categories ($params, $join, $condition, &$fields, $group_by, $sortings, $lang_code){
if (AREA == 'C'){
$fields[] = '?:categories.ab__lc_catalog_image_control';
}
}
function fn_ab__landing_categories_get_products_before_select (&$params, $join, &$condition, $u_condition, $inventory_join_cond, $sortings, $total, $items_per_page, $lang_code, $having){
static $ab_lc = false;
if (AREA == 'C' and !$ab_lc
and $_SERVER['REQUEST_METHOD'] == 'GET'
and Registry::get('runtime.controller') . "." . Registry::get('runtime.mode') == "categories.view"
and !empty($params['cid']) and !is_array($params['cid'])
and "Y" == db_get_field("SELECT IFNULL(ab__lc_landing, 'N') FROM ?:categories WHERE category_id = ?i", $params['cid'])
){
$condition .= " AND 0 ";
$ab_lc = true;
$structure = fn_ab__lc_get_structure(array(), $params['cid']);
Tygh::$app['view']->assign('ab__lc_landing_categories', $structure);
}
}
function fn_ab__lc_get_structure ($input_structure, $category_id, $inherit_control = true){
$structure = array();
if ($category_id > 0){
$cd = db_get_row("SELECT IFNULL(ab__lc_landing, 'N') as is_landing_category, IFNULL(ab__lc_how_to_use_menu, 'N') as how_to_use_menu, ab__lc_menu_id as menu_id, ab__lc_inherit_control as inherit_control, id_path FROM ?:categories WHERE category_id = ?i", $category_id);
if ($cd['is_landing_category'] == 'Y'){
$first_categories = array();
$menu = array();
$cats = array();
$menu_id = intval($cd['menu_id']);
if ($menu_id > 0 and $menu_id == db_get_field("SELECT menu_id FROM ?:menus WHERE menu_id = ?i ?p", $menu_id, fn_get_company_condition())){
$_REQUEST["menu_id"] = $menu_id;
$p = array(
'section' => 'A',
'status' => 'A',
'generate_levels' => true,
'get_params' => true,
'multi_level' => true,
'plain' => false,
);
$menu = fn_top_menu_form(fn_get_static_data($p));
unset($_REQUEST["menu_id"]);
foreach ($menu as &$m) {
if (!empty($m['param_3'])){
list($type, $object_id, $extra) = explode(":", $m['param_3']);
if ($type == 'C'){
$first_categories["m_" . $m['param_id']] = $m['category_id'] = $object_id;
}
}
}
}
$max_nesting_level = 2 + count((array) explode('/', $cd['id_path']));
$p = array(
'category_id' => $category_id,
'get_images' => false,
'simple' => true,
'max_nesting_level' => $max_nesting_level, // глубина категорий
);
list($cats) = fn_get_categories($p);
$cats = fn_ab__lc_standardize($cats);
$first_categories = array_merge($first_categories, array_keys($cats));
if ($inherit_control and !empty($cats) and $cd['inherit_control'] == 'Y'){
foreach ($cats as $c_k => $c_v){
if (!empty($c_v['subitems'])){
$cats[$c_k]['subitems'] = call_user_func(__FUNCTION__, $c_v['subitems'], $c_v['category_id'], $inherit_control);
}
}
}
switch ($cd['how_to_use_menu']){
case 'N':
$structure = $cats;
break;
case 'R':
if (!empty($menu)) $structure = $menu;
else $structure = $cats;
break;
case 'A':
if (!empty($cats)){
foreach ($cats as $scat){
$structure[] = $scat;
}
}
if (!empty($menu)){
foreach ($menu as $sm){
$structure[] = $sm;
}
}
break;
case 'P':
if (!empty($menu)){
foreach ($menu as $sm){
$structure[] = $sm;
}
}
if (!empty($cats)){
foreach ($cats as $scat){
$structure[] = $scat;
}
}
break;
}
$first_categories = array_unique($first_categories);
if (!empty($first_categories)){
$ab__lc_catalog_icons = fn_get_image_pairs($first_categories, 'ab__lc_catalog_icon', 'M', true, false);
$main_pairs = fn_get_image_pairs($first_categories, 'category', 'M', true, true);
$ab__lc_catalog_image_controls = db_get_hash_single_array("SELECT category_id, ab__lc_catalog_image_control FROM ?:categories WHERE category_id in (?a)", array('category_id', 'ab__lc_catalog_image_control'), $first_categories);
foreach ($structure as &$i) {
if (isset($i['category_id'])){
$i['ab__lc_catalog_image_control'] = !empty($ab__lc_catalog_image_controls[$i['category_id']]) ? $ab__lc_catalog_image_controls[$i['category_id']] : '';
if (!empty($ab__lc_catalog_icons[$i['category_id']])){
$img = $ab__lc_catalog_icons[$i['category_id']];
$i['ab__lc_catalog_icon'] = array_shift($img);
}
if (!empty($main_pairs[$i['category_id']])){
$img = $main_pairs[$i['category_id']];
$i['main_pair'] = array_shift($img);
}
}
}
foreach ($structure as $k1 => $m1) {
if (!empty($m1['subitems'])){
foreach ($m1['subitems'] as $k2 => $m2){
if (!isset($m2['param_id'])){
unset($structure[$k1]['subitems'][$k2]);
}else{
if (!empty($m2['subitems'])){
foreach ($m2['subitems'] as $k3 => $m3) {
if (!isset($m3['param_id'])) {
unset($structure[$k1]['subitems'][$k2]['subitems'][$k3]);
}
}
}
}
}
}
}
}
}
}
return (!empty($structure)) ? $structure : $input_structure;
}
function fn_ab__lc_standardize($items, $id_name = 'category_id', $name = 'category', $children_name = 'subcategories', $href_prefix = 'categories.view?category_id='){
$result = array();
foreach ($items as $v) {
$result[$v[$id_name]] = array(
'category_id' => $v[$id_name],
'param_id' => $v[$id_name],
'item' => $v[$name],
'href' => $href_prefix . $v[$id_name],
);
if (!empty($v[$children_name])) {
$result[$v[$id_name]]['subitems'] = fn_ab__lc_standardize($v[$children_name], $id_name, $name, $children_name, $href_prefix);
}
}
return $result;
}
function fn_ab__lc_get_menu_name($id){
$name = Tygh\Menu::getName($id);
if (!strlen(trim($name))){
$name = __('no_data');
}
return $name;
}
function fn_ab__lc_get_catalog(){
$menu = array();
$mode = 'categories';
$category_id = 0;
$max_nesting_level = 3;
$menu_id = 0;
if (Registry::ifGet('addons.ab__landing_categories.catalog_menu', 0) > 0){
$menu_id = Registry::get('addons.ab__landing_categories.catalog_menu');
$mode = 'menu';
}
$first_categories = array();
if ($mode == 'menu'){
$_REQUEST["menu_id"] = $menu_id;
$p = array(
'status' => 'A',
'section' => 'A',
'generate_levels' => true,
'get_params' => true,
'multi_level' => true,
'plain' => false,
);
$menu = fn_top_menu_form(fn_get_static_data($p));
unset($_REQUEST["menu_id"]);
foreach ($menu as &$m) {
if (!empty($m['param_3'])){
list($type, $object_id, $extra) = explode(":", $m['param_3']);
if ($type == 'C'){
$first_categories[$m['param_id']] = $m['category_id'] = $object_id;
}
}
}
}elseif ($mode == 'categories'){
$p = array(
'category_id' => $category_id,
'get_images' => false,
'simple' => true,
'max_nesting_level' => $max_nesting_level, // глубина категорий
);
list($menu) = fn_get_categories($p);
$menu = fn_ab__lc_standardize($menu);
$first_categories = array_keys($menu);
}
if (!empty($first_categories)){
$ab__lc_catalog_icons = fn_get_image_pairs($first_categories, 'ab__lc_catalog_icon', 'M', true, false);
$main_pairs = fn_get_image_pairs($first_categories, 'category', 'M', true, true);
$ab__lc_catalog_image_controls = db_get_hash_single_array("SELECT category_id, ab__lc_catalog_image_control FROM ?:categories WHERE category_id in (?a)", array('category_id', 'ab__lc_catalog_image_control'), $first_categories);
foreach ($menu as &$i) {
if (isset($i['category_id'])){
$i['ab__lc_catalog_image_control'] = !empty($ab__lc_catalog_image_controls[$i['category_id']]) ? $ab__lc_catalog_image_controls[$i['category_id']] : '';
if (!empty($ab__lc_catalog_icons[$i['category_id']])){
$img = $ab__lc_catalog_icons[$i['category_id']];
$i['ab__lc_catalog_icon'] = array_shift($img);
}
if (!empty($main_pairs[$i['category_id']])){
$img = $main_pairs[$i['category_id']];
$i['main_pair'] = array_shift($img);
}
if (empty($i['href'])){
$i['href'] = fn_url('categories.view&category_id=' . $i['category_id']);
}
}
}
foreach ($menu as $k1 => $m1) {
if (!empty($m1['subitems'])){
foreach ($m1['subitems'] as $k2 => $m2){
if (!isset($m2['param_id'])){
unset($menu[$k1]['subitems'][$k2]);
}else{
if (!empty($m2['subitems'])){
foreach ($m2['subitems'] as $k3 => $m3) {
if (!isset($m3['param_id'])) {
unset($menu[$k1]['subitems'][$k2]['subitems'][$k3]);
}
}
}
}
}
}
}
}
return $menu;
}
