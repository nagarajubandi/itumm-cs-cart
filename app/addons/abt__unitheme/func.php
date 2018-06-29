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
use Tygh\ABTUT;
use Tygh\Embedded;
if (!defined('BOOTSTRAP')) { die('Access denied'); }
function fn_abt__ut_install (){
$company_id = fn_allowed_for('ULTIMATE') ? fn_get_default_company_id() : 0;
$objects = array(
array(
"table" => "?:bm_grids",
"field" => "extended",
"sql" => "ALTER TABLE ?:bm_grids ADD extended CHAR(1) NOT NULL DEFAULT '0'",
),
array(
"table" => "?:bm_grids",
"field" => "ab__show_in_tabs",
"sql" => "ALTER TABLE ?:bm_grids ADD ab__show_in_tabs CHAR(1) NOT NULL DEFAULT 'N'",
),
array(
"table" => "?:bm_grids",
"field" => "ab__use_ajax",
"sql" => "ALTER TABLE ?:bm_grids ADD ab__use_ajax CHAR(1) NOT NULL DEFAULT 'N'",
),
array(
"table" => "?:static_data",
"field" => "ab__ut_mwi__status",
"sql" => "ALTER TABLE ?:static_data ADD ab__ut_mwi__status CHAR(1) NOT NULL DEFAULT 'N'",
),
array(
"table" => "?:static_data_descriptions",
"field" => "ab__ut_mwi__text",
"sql" => "ALTER TABLE ?:static_data_descriptions ADD ab__ut_mwi__text TEXT",
),
array(
"table" => "?:static_data",
"field" => "ab__ut_mwi__text_position",
"sql" => "ALTER TABLE ?:static_data ADD ab__ut_mwi__text_position varchar(32) NOT NULL DEFAULT 'bottom'",
),
array(
"table" => "?:static_data",
"field" => "ab__ut_mwi__dropdown",
"sql" => "ALTER TABLE ?:static_data ADD ab__ut_mwi__dropdown CHAR(1) NOT NULL DEFAULT 'N'",
),
array(
"table" => "?:static_data_descriptions",
"field" => "ab__ut_mwi__label",
"sql" => "ALTER TABLE ?:static_data_descriptions ADD ab__ut_mwi__label varchar(100)",
),
array(
"table" => "?:static_data",
"field" => "ab__ut_mwi__label_color",
"sql" => "ALTER TABLE ?:static_data ADD ab__ut_mwi__label_color varchar(10)",
),
array(
"table" => "?:static_data",
"field" => "ab__ut_mwi__label_background",
"sql" => "ALTER TABLE ?:static_data ADD ab__ut_mwi__label_background varchar(10)",
),
array(
"table" => "?:abt__ut_microdata",
"field" => "company_id",
"sql" => "ALTER TABLE ?:abt__ut_microdata ADD company_id int(11) unsigned NOT NULL DEFAULT 0",
"add_sql" => array(
db_quote('UPDATE ?:abt__ut_microdata SET company_id = ?i', fn_allowed_for('ULTIMATE') ? fn_get_default_company_id() : 0),
),
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
function fn_abt__unitheme_get_products_post(&$products, $params, $lang_code){
if (AREA == "C" and Registry::get("addons.discussion.status") == "A" and empty($params['get_conditions']) and $products){
$posts = db_get_hash_single_array("SELECT p.product_id, ifnull(count(dp.post_id),0) as discussion_amount_posts
FROM ?:discussion
INNER JOIN ?:products as p ON (?:discussion.object_id = p.product_id)
INNER JOIN ?:discussion_posts as dp ON (?:discussion.thread_id = dp.thread_id AND ?:discussion.object_type = 'P' ?p)
WHERE dp.status = 'A' and p.product_id in (?n)
GROUP BY p.product_id", array('product_id', 'discussion_amount_posts'), fn_get_discussion_company_condition('?:discussion.company_id'), array_keys($products));
foreach ($products as $p_id => $p) {
$products[$p_id]['discussion_amount_posts'] = !empty($posts[$p_id])?$posts[$p_id]:0;
}
}
}
function fn_abt__unitheme_render_blocks(&$grid, &$block, $that, &$content){
if ($grid['ab__show_in_tabs'] == 'Y' and $block['status'] == 'A') {
$block['tab_id'] = 'ab__grid_tab_' . $grid['grid_id'] . '_' . $block['block_id'];
$block['ab__use_ajax'] = $grid['ab__use_ajax'];
$tab_data = array('title' => $block['name']);
if ($grid['ab__use_ajax'] == 'Y') {
$tab_data['href'] = 'ab__grid_tabs.load?block_id=' . $block['block_id'];
$tab_data['ajax'] = true;
$tab_data['ab__grid_tabs'] = true;
$block['first'] = empty($content);
} else {
$tab_data['js'] = true;
}
Registry::set('navigation.tabs.' . $block['tab_id'], $tab_data);
Registry::set('navigation.ab__grid_tab', 'Y');
}
}
function fn_abt__unitheme_render_block_content_after($block_schema, $block, &$block_content){
if (!empty($block['tab_id']) && !empty($block_content) && !defined('AJAX_REQUEST')) {
if ($block['ab__use_ajax'] != 'Y' || !empty($block['first'])) {
$block_content = '<div id="content_' . $block['tab_id'] . '">' . $block_content . '</div>';
} else {
$block_content = '<div id="content_' . $block['tab_id'] . '"><span></span></div>';
}
}
}
function fn_abt__ut_get_microdata(){
if (Embedded::isEnabled()) {
return false;
}
$schema_items = fn_get_schema('abt__ut_microdata', 'items');
$schema_groups = fn_get_schema('abt__ut_microdata', 'groups');
$data = ABTUT::fn_get_microdata(CART_LANGUAGE);
if (empty($data)) {
return false;
}
$microdata = (object) array(
'@context' => 'http://schema.org',
'@type' => 'Organization',
);
foreach ($data as $item) {
if (empty($schema_items[$item['field']])) {
continue;
}
if (empty($schema_items[$item['field']]['group'])) {
$item_parent = &$microdata;
} else {
$group_name = $schema_items[$item['field']]['group'];
if (empty($microdata -> {$group_name})) {
$microdata -> {$group_name} = new stdClass();
}
$item_parent = &$microdata -> {$group_name};
if (!empty($schema_groups[$group_name]) && !empty($schema_groups[$group_name]['@type'])) {
$item_parent -> {'@type'} = $schema_groups[$group_name]['@type'];
}
}
if (empty($item_parent -> {$item['field']})) {
$item_parent -> {$item['field']} = $item['value'];
} else {
if (!is_array($item_parent -> {$item['field']})) {
$item_parent -> {$item['field']} = array($item_parent -> {$item['field']});
}
$item_parent -> {$item['field']}[] = $item['value'];
}
}
return $microdata;
}
function fn_abt__ut_get_product_brand($product_id)
{
$brand_id = Registry::get('addons.abt__unitheme.brand_feature_id');
if (empty($brand_id)) {
return false;
}
return db_get_field('SELECT variant_descriptions.variant FROM ?:product_features_values AS v
LEFT JOIN ?:product_feature_variant_descriptions AS variant_descriptions ON variant_descriptions.variant_id = v.variant_id
WHERE v.product_id = ?i AND v.feature_id = ?i', $product_id, $brand_id);
}
function fn_abt__ut_get_locale()
{
$schema = fn_get_schema('abt__ut_demo_data', 'og_locales');
return empty($schema[CART_LANGUAGE]) ? CART_LANGUAGE : $schema[CART_LANGUAGE];
}
function fn_abt__unitheme_init_templater_post (&$view){
$view->addPluginsDir(Registry::get('config.dir.addons') . 'abt__unitheme/functions/smarty_plugins');
}
function fn_abt__unitheme_dispatch_assign_template (){
Registry::set('settings.abt__unitheme', fn_get_abt__unitheme_settings());
}
function fn_get_abt__unitheme_settings(){
$lang_code = DESCR_SL;
$company_id = 0;
if (fn_allowed_for('ULTIMATE')) {
$company_id = Registry::get('runtime.company_id');
if (empty($company_id)){
$company_id = Registry::get('runtime.forced_company_id');
}
}
$settings = fn_get_schema('abt__ut_settings', 'objects');
usort($settings, function ($a,$b){
if ($a['position'] > $b['position']){
return 1;
}elseif ($a['position'] < $b['position']){
return -1;
}else{
return strcasecmp($a['name'], $b['name']);
}
});
$settings = fn_array_value_to_key($settings, 'name');
foreach ($settings as &$setting) {
$s = db_get_row("SELECT name, value FROM ?:abt__ut_settings WHERE company_id = ?i AND lang_code = ?s AND name = ?s", $company_id, $lang_code, $setting['name']);
if (!empty($s) and is_array($s)){
$setting['value'] = $s['value'];
}
}
return $settings;
}
function fn_update_abt__unitheme_settings($data){
$lang_code = DESCR_SL;
$company_id = 0;
if (fn_allowed_for('ULTIMATE')) {
$company_id = Registry::get('runtime.company_id');
if (empty($company_id)){
$company_id = Registry::get('runtime.forced_company_id');
}
}
$settings = fn_get_abt__unitheme_settings();
foreach ($settings as $name => $setting) {
$v = (isset($data[$name])?$data[$name]:$setting['value']);
$d = array(
'name' => $name,
'company_id' => $company_id,
'lang_code' => $lang_code,
'value' => $v,
);
db_query("REPLACE INTO ?:abt__ut_settings ?e", $d);
if (isset($setting['multilanguage']) and $setting['multilanguage'] == 'N'){
db_query("UPDATE ?:abt__ut_settings SET value = ?s WHERE name = ?s AND company_id = ?i", $v, $name, $company_id);
}
}
return true;
}
function fn_abt__unitheme_update_static_data (&$data, $param_id, $condition, $section, $lang_code){
if (Registry::get('runtime.mode') == 'update') {
$data['ab__ut_mwi__text'] = $_POST['static_data']['ab__ut_mwi__text'];
fn_attach_image_pairs('ab__ut_mwi__icon', 'ab__ut_mwi__icon', $param_id, $lang_code);
}
}
function fn_abt__unitheme_get_static_data ($params, &$fields, $condition, $sorting, $lang_code){
$fields[] = '?:static_data_descriptions.ab__ut_mwi__text';
$fields[] = '?:static_data_descriptions.ab__ut_mwi__label';
$fields[] = 'sd.ab__ut_mwi__status';
$fields[] = 'sd.ab__ut_mwi__text_position';
$fields[] = 'sd.ab__ut_mwi__dropdown';
$fields[] = 'sd.ab__ut_mwi__label_color';
$fields[] = 'sd.ab__ut_mwi__label_background';
}
function fn_abt__unitheme_top_menu_form_post (&$top_menu, $level, $active){
if (!empty($top_menu) and is_array($top_menu)){
foreach ($top_menu as $i => $m){
if (!empty($m['ab__ut_mwi__status']) and $m['ab__ut_mwi__status'] == 'Y'){
$img = fn_get_image_pairs($i, 'ab__ut_mwi__icon', 'M', true, false);
if ($img){
$top_menu[$i]['ab__ut_mwi__icon'] = $img['icon'][fn_get_storefront_protocol() . '_image_path'];
}
}
}
}
}
function fn_abt__ajax_menu_save ($data, $id, $lang_code = DESCR_SL){
static $init_cache = false;
$cache_name = 'abtam';
$key = $id . '_' . $lang_code;
if (!$init_cache) {
$init_cache = true;
Registry::registerCache($cache_name, array('static_data', 'static_data_descriptions'), Registry::cacheLevel('static'), true);
}
Registry::set($cache_name . '.' . $key , $data);
}
function fn_abt__ajax_menu_get ($key){
static $init_cache = false;
$cache_name = 'abtam';
if (!$init_cache) {
$init_cache = true;
Registry::registerCache($cache_name, array('static_data', 'static_data_descriptions'), Registry::cacheLevel('static'), true);
}
static $data;
if (empty($data)){
$data = Registry::get($cache_name);
}
return isset($data[$key]) ? $data[$key] : '';
}
function fn_abt__get_sub_or_parent_categories()
{
if(!empty($_REQUEST['category_id'])) {
$subcategories = fn_get_subcategories($_REQUEST['category_id']);
if (empty($subcategories)) {
$parent_category_id = db_get_field("SELECT parent_id FROM ?:categories WHERE company_id = ?i AND category_id = ?i", fn_get_runtime_company_id(), $_REQUEST['category_id']);
$subcategories = fn_get_subcategories($parent_category_id);
}
return $subcategories;
} else {
return false;
}
}