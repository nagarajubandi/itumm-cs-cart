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
use Tygh\Languages\Languages;
if (!defined('BOOTSTRAP')) { die('Access denied'); }
function fn_ab__cb_install (){
$objects = array(
array(
"table" => "?:ab__category_banners",
"field" => "position",
"sql" => "ALTER TABLE ?:ab__category_banners ADD position VARCHAR(255) NOT NULL DEFAULT ''",
),
array(
"table" => "?:ab__category_banners",
"field" => "rand_position",
"sql" => "ALTER TABLE ?:ab__category_banners ADD rand_position CHAR(1) NOT NULL DEFAULT 'Y'",
),
array(
"table" => "?:ab__category_banners",
"field" => "include_subcategories",
"sql" => "ALTER TABLE ?:ab__category_banners ADD include_subcategories CHAR(1) NOT NULL DEFAULT 'N'",
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
function fn_ab__cb_parse_time($time)
{
if (is_numeric($time)) {
return $time;
}
if (strpos($time, ':') !== false) {
list($h, $m) = explode(':', $time);
return intval($h)*3600 + intval($m)*60;
}
return false;
}
function fn_ab__update_category_banner($category_banner_data, $category_banner_id, $lang_code = DESCR_SL)
{
if (!empty($category_banner_data['from_date'])) {
$category_banner_data['from_date'] = fn_parse_date($category_banner_data['from_date']) + fn_ab__cb_parse_time($category_banner_data['from_time']);
}
if (!empty($category_banner_data['to_date'])) {
$category_banner_data['to_date'] = fn_parse_date($category_banner_data['to_date']) + fn_ab__cb_parse_time($category_banner_data['to_time']);
}
foreach ($category_banner_data['repeat'] as &$day) {
if (!empty($day['time_from'])) {
$day['time_from'] = fn_ab__cb_parse_time($day['time_from']);
}
if (!empty($day['time_to'])) {
$day['time_to'] = fn_ab__cb_parse_time($day['time_to']);
}
}
$category_banner_data['repeat'] = serialize($category_banner_data['repeat']);
if (!empty($category_banner_id)) {
db_query("UPDATE ?:ab__category_banners SET ?u WHERE category_banner_id = ?i", $category_banner_data, $category_banner_id);
$lang_codes = array($lang_code);
} else {
$category_banner_id = $category_banner_data['category_banner_id'] = db_query("REPLACE INTO ?:ab__category_banners ?e", $category_banner_data);
$lang_codes = array_keys(Languages::getAll());
}
if (!empty($category_banner_id) && !empty($lang_codes)) {
$prev_image_id = 0;
foreach ($lang_codes as $v) {
$category_banner_data['lang_code'] = $v;
$category_banner_image_id = db_get_field('SELECT category_banner_image_id FROM ?:ab__category_banner_images_and_descr WHERE category_banner_id = ?i AND lang_code = ?s', $category_banner_id, $v);
if (empty($category_banner_image_id)) {
$category_banner_image_id = db_query("INSERT INTO ?:ab__category_banner_images_and_descr ?e", $category_banner_data);
} else {
db_query("UPDATE ?:ab__category_banner_images_and_descr SET ?u WHERE category_banner_image_id = ?i", $category_banner_data, $category_banner_image_id);
}
if (empty($prev_image_id)) {
fn_attach_image_pairs('category_banners_main', 'category_banner', $category_banner_image_id, $v);
$prev_image_id = $category_banner_image_id;
} else {
fn_clone_image_pairs($category_banner_image_id, $prev_image_id, 'category_banner', $v);
}
}
if (!empty($category_banner_data['category_ids'])) {
db_query("DELETE FROM ?:ab__category_banner_categories WHERE category_banner_id = ?i", $category_banner_id);
foreach (explode(',', $category_banner_data['category_ids']) as $cid) {
db_query("INSERT INTO ?:ab__category_banner_categories ?e", array(
'category_banner_id' => $category_banner_id,
'category_id' => $cid
));
}
}
}
return $category_banner_id;
}
function fn_ab__delete_category_banner($category_banner_id)
{
if (!empty($category_banner_id)) {
$category_banner_image_ids = db_get_fields('SELECT category_banner_image_id FROM ?:ab__category_banner_images_and_descr WHERE category_banner_id = ?i', $category_banner_id);
foreach ($category_banner_image_ids as $image_id) {
fn_delete_image_pairs($image_id, 'category_banner');
}
db_query('DELETE FROM ?:ab__category_banners WHERE category_banner_id = ?i', $category_banner_id);
db_query('DELETE FROM ?:ab__category_banner_categories WHERE category_banner_id = ?i', $category_banner_id);
db_query('DELETE FROM ?:ab__category_banner_images_and_descr WHERE category_banner_id = ?i', $category_banner_id);
return true;
}
return false;
}
function fn_ab__get_category_banners($params = array(), $items_per_page = 0, $lang_code = CART_LANGUAGE)
{
$default_params = array(
'page' => 1,
'items_per_page' => $items_per_page,
);
$params = array_merge($default_params, $params);
$sortings = array(
'name' => '?:ab__category_banner_images_and_descr.category_banner',
'status' => '?:ab__category_banners.status',
'to_date' => '?:ab__category_banners.to_date',
'from_date' => '?:ab__category_banners.from_date',
);
$sorting = db_sort($params, $sortings, 'name', 'asc');
$condition = $limit = $join = '';
if (AREA == 'C') {
$condition .= " AND ?:ab__category_banners.status = 'A' ";
$condition .= " AND ?:ab__category_banner_images_and_descr.category_banner_image_id IS NOT NULL ";
}
if (!empty($params['item_ids'])) {
$condition .= db_quote(' AND ?:ab__category_banners.category_banner_id IN (?n)', explode(',', $params['item_ids']));
}
if (!empty($params['timestamp'])) {
$condition .= db_quote(" AND (IF(?:ab__category_banners.from_date, ?:ab__category_banners.from_date <= ?i, 1) AND IF(?:ab__category_banners.to_date, ?:ab__category_banners.to_date >= ?i, 1))", $params['timestamp'], $params['timestamp']);
}
if (!empty($params['cid'])) {
$join .= db_quote(' LEFT JOIN ?:ab__category_banner_categories AS ab__category_banner_categories ON ab__category_banner_categories.category_banner_id = ?:ab__category_banners.category_banner_id ');
$category_condition = db_quote('ab__category_banner_categories.category_id = ?i', $params['cid']);
$cur_id_path = db_get_field("SELECT id_path FROM ?:categories WHERE category_id = ?i", $params['cid']);
if (!empty($cur_id_path)) {
$parent_categories_ids = explode('/', $cur_id_path);
$join .= db_quote(' LEFT JOIN ?:ab__category_banner_categories AS ab__category_banner_categories1 ON ab__category_banner_categories1.category_banner_id = ?:ab__category_banners.category_banner_id');
$category_condition .= db_quote(' OR (ab__category_banner_categories1.category_id IN (?n) AND ?:ab__category_banners.include_subcategories = ?s)', $parent_categories_ids, 'Y');
}
$condition .= db_quote(' AND (?p)', $category_condition);
}
$fields = array (
'?:ab__category_banners.category_banner_id',
'?:ab__category_banners.repeat',
'?:ab__category_banners.position',
'?:ab__category_banners.rand_position',
'?:ab__category_banners.target_blank',
'?:ab__category_banners.include_subcategories',
'?:ab__category_banners.status',
'?:ab__category_banners.to_date',
'?:ab__category_banners.from_date',
'?:ab__category_banner_images_and_descr.category_banner',
'?:ab__category_banner_images_and_descr.url',
'?:ab__category_banner_images_and_descr.category_banner_image_id',
);
if (!empty($params['items_per_page'])) {
$params['total_items'] = db_get_field('SELECT COUNT(DISTINCT(?:ab__category_banners.category_banner_id)) FROM ?:ab__category_banners WHERE 1 ?p', $condition);
$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
}
$category_banners = db_get_hash_array('SELECT ?p FROM ?:ab__category_banners
LEFT JOIN ?:ab__category_banner_images_and_descr ON ?:ab__category_banner_images_and_descr.category_banner_id = ?:ab__category_banners.category_banner_id AND ?:ab__category_banner_images_and_descr.lang_code = ?s
' . $join . '
WHERE 1 ?p ?p ?p',
'category_banner_id', implode(", ", $fields), $lang_code, $condition, $sorting, $limit
);
return array($category_banners, $params);
}
function fn_ab__get_category_banner_data($category_banner_id, $lang_code = CART_LANGUAGE)
{
$fields = array (
'?:ab__category_banners.category_banner_id',
'?:ab__category_banners.repeat',
'?:ab__category_banners.position',
'?:ab__category_banners.rand_position',
'?:ab__category_banners.target_blank',
'?:ab__category_banners.include_subcategories',
'?:ab__category_banners.status',
'?:ab__category_banners.to_date',
'?:ab__category_banners.from_date',
'GROUP_CONCAT(?:ab__category_banner_categories.category_id) as category_ids',
'?:ab__category_banner_images_and_descr.category_banner',
'?:ab__category_banner_images_and_descr.url',
'?:ab__category_banner_images_and_descr.category_banner_image_id',
);
$join = db_quote('LEFT JOIN ?:ab__category_banner_images_and_descr ON ?:ab__category_banner_images_and_descr.category_banner_id = ?:ab__category_banners.category_banner_id AND ?:ab__category_banner_images_and_descr.lang_code = ?s', $lang_code);
$join .= 'LEFT JOIN ?:ab__category_banner_categories ON ?:ab__category_banner_categories.category_banner_id = ?:ab__category_banners.category_banner_id';
$condition = db_quote('?:ab__category_banners.category_banner_id = ?i', $category_banner_id);
$category_banner = db_get_row('SELECT ?p FROM ?:ab__category_banners ?p WHERE ?p', implode(",", $fields), $join, $condition);
if (empty($category_banner)) {
return false;
}
$category_banner['main_pair'] = fn_get_image_pairs($category_banner['category_banner_image_id'], 'category_banner', 'M', true, false, $lang_code);
$category_banner['repeat'] = unserialize($category_banner['repeat']);
if (AREA == 'C') {
if (empty($category_banner['position'])) {
$category_banner['position'] = Registry::get('addons.ab__category_banners.item_nth');
}
$positions = array();
foreach (explode(',', $category_banner['position']) as $item) {
if (strpos($item, '-') !== false) {
list($from, $to) = explode('-', $item);
$positions = array_merge($positions, range(trim($from), trim($to)));
} else {
$positions[] = trim($item);
}
}
if (!empty($category_banner['rand_position']) && $category_banner['rand_position'] == 'Y') {
$positions = array_unique($positions);
shuffle($positions);
}
if (!empty($positions)) {
if (empty($_SESSION['ab__category_banners']) || !is_array($_SESSION['ab__category_banners']) || empty($_SESSION['ab__category_banners']['banner_last_pos']) || empty($_SESSION['ab__category_banners']['banner_last_pos'][$category_banner_id])) {
$_SESSION['ab__category_banners']['banner_last_pos'][$category_banner_id] = 0;
}
$banner_last_pos = & $_SESSION['ab__category_banners']['banner_last_pos'][$category_banner_id];
if (!empty($banner_last_pos) && count($positions) > 1) {
$keys = array_keys($positions);
$current_key = array_search($banner_last_pos, $positions);
$next_key = ($current_key === false || $current_key == end($keys)) ? reset($keys) : $current_key+1;
$banner_last_pos = $positions[$next_key];
} else {
$banner_last_pos = reset($positions);
}
$category_banner['position'] = $banner_last_pos;
} else {
$category_banner['position'] = 7;
}
}
return $category_banner;
}
function fn_ab__cb_pick_banner_by_cid($category_id)
{
static $banner = null;
if ($banner === null) {
list($category_banners) = fn_ab__get_category_banners(array(
'cid' => $category_id,
'timestamp' => time(),
));
$day = date('N');
$time = fn_ab__cb_parse_time(date('H:i:s'));
$proper_banners = array();
while (!empty($category_banners)) {
$category_banner = array_shift($category_banners);
$repeat = unserialize($category_banner['repeat']);
if ($repeat[$day]['active'] == 'Y' &&
(empty($repeat[$day]['time_from']) || $repeat[$day]['time_from'] <= $time) &&
(empty($repeat[$day]['time_to']) || $repeat[$day]['time_to'] >= $time)
) {
$proper_banners[$category_banner['category_banner_id']] = $category_banner;
}
}
if (!empty($proper_banners)) {
if (empty($_SESSION['ab__category_banners']) || !is_array($_SESSION['ab__category_banners']) || empty($_SESSION['ab__category_banners']['last_banner_id_by_cid']) || empty($_SESSION['ab__category_banners']['last_banner_id_by_cid'][$category_id])) {
$_SESSION['ab__category_banners']['last_banner_id_by_cid'][$category_id] = 0;
};
$last_banner_id = & $_SESSION['ab__category_banners']['last_banner_id_by_cid'][$category_id];
if (!empty($last_banner_id) && count($proper_banners) > 1 && !empty($proper_banners[$last_banner_id])) {
$category_banner_ids = array_keys($proper_banners);
$keys = array_keys($category_banner_ids);
$current_key = array_search($last_banner_id, $category_banner_ids);
$next_key = ($current_key == end($keys)) ? reset($keys) : $current_key+1;
$last_banner_id = $category_banner_ids[$next_key];
} else {
$last_banner_id = key($proper_banners);
}
$banner = fn_ab__get_category_banner_data($last_banner_id);
}
}
return $banner;
}
function fn_ab__category_banners_get_products_pre(&$params, $items_per_page, $lang_code)
{
$params['items_per_page'] = empty($params['items_per_page']) ? $items_per_page : $params['items_per_page'];
if (!empty($params['ab__cb_banner_exists']) && !empty($params['items_per_page']) && Registry::ifGet('addons.ab__category_banners.decrease_items_per_page', 'N') == 'Y') {
$category_banner = fn_ab__cb_pick_banner_by_cid($params['category_id']);
if ($params['items_per_page'] >= $category_banner['position']) {
$params['items_per_page']--;
} else {
$params['ab__cb_banner_exists'] = false;
}
}
}
function fn_ab__category_banners_get_products_post($products, &$params, $lang_code)
{
if (!empty($params['ab__cb_banner_exists'])) {
$params['items_per_page']++;
}
}
function fn_ab__cb_cron_links()
{
$cron_key = trim(Registry::get('addons.ab__category_banners.cron_key'));
if (strlen($cron_key) < 10 or strlen($cron_key) > 20) {
return __('ab__cb.errors.cron_key');
} else {
$cron_cmd = '* * 1 * * php ' . Registry::get('config.dir.root') . '/' . Registry::get('config.admin_index') . ' --dispatch=ab__category_banners.turn_off_expired_banners --cron_key=' . $cron_key;
$cron_url = fn_url('ab__category_banners.turn_off_expired_banners?cron_key=' . $cron_key);
return __('ab__cb.cron_links', array('[cron_cmd]' => $cron_cmd, '[cron_url]' => $cron_url));
}
}
function fn_ab__cb_check_key($cron_key)
{
$key = trim(Registry::get('addons.ab__category_banners.cron_key'));
return (strlen($key) >= 10 and strlen($key) <= 20
and strlen(trim($cron_key)) >= 10 and strlen(trim($cron_key)) <= 20
and trim($cron_key) == $key);
}
function fn_ab__cb_insert_category_banner(&$html)
{
if (!empty($html) && !empty($_REQUEST['category_id'])) {
$category_banner = fn_ab__cb_pick_banner_by_cid($_REQUEST['category_id']);
if (preg_match('@\"(?:ty-)?column\d[^"]*\"@', $html, $match)) {
$start_from = 0;
$count = 0;
while (($position = strpos($html,"<div class=$match[0]",$start_from)) !== false) {
if (++$count == $category_banner['position']) {
Tygh::$app['view']->assign('category_banner', $category_banner);
Tygh::$app['view']->assign('grid_item_class', trim($match[0], '"'));
$category_banner_html = Tygh::$app['view']->fetch('addons/ab__category_banners/components/category_banner.tpl');
$html = substr_replace ($html, $category_banner_html, $position, 0);
break;
} elseif ($count > 100) { // предохранитель
break;
} else {
$start_from = $position+1; // ищем следующий товар в сетке
}
}
}
}
}