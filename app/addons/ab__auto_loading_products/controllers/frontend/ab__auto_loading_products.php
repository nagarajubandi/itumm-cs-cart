<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2016   *
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
if (defined('AJAX_REQUEST') and $mode == 'get_products'){
if (intval($_REQUEST['category_id']) > 0){
Registry::get('ajax')->assign("result", "N");
$__ = array('A', 'H');
$_ = fn_get_localizations_condition('localization', true);
$preview = fn_is_preview_action($auth, $_REQUEST);
if (!$preview) {
$_ .= ' AND (' . fn_find_array_in_set($auth['usergroup_ids'], 'usergroup_ids', true) . ')';
$_ .= db_quote(' AND status IN (?a)', $__);
}
if (fn_allowed_for('ULTIMATE')) {
$_ .= fn_get_company_condition('?:categories.company_id');
}
$___ = db_get_field(
"SELECT category_id FROM ?:categories WHERE category_id = ?i ?p",
$_REQUEST['category_id'],
$_
);
if (!empty($___)) {
$_SESSION['continue_url'] = "categories.view?category_id=$_REQUEST[category_id]";
$_SESSION['current_category_id'] = $_SESSION['breadcrumb_category_id'] = $_REQUEST['category_id'];
$____ = fn_get_category_data($_REQUEST['category_id'], CART_LANGUAGE, '*', true, false, $preview);
$______ = fn_explode('/', $____['id_path']);
array_pop($______);
$_____ = $_REQUEST;
if ($items_per_page = fn_change_session_param($_SESSION, $_REQUEST, 'items_per_page')) {
$_____['items_per_page'] = $items_per_page;
}
if ($sort_by = fn_change_session_param($_SESSION, $_REQUEST, 'sort_by')) {
$_____['sort_by'] = $sort_by;
}
if ($sort_order = fn_change_session_param($_SESSION, $_REQUEST, 'sort_order')) {
$_____['sort_order'] = $sort_order;
}
$_____['cid'] = $_REQUEST['category_id'];
$_____['extend'] = array('categories', 'description');
$_____['subcats'] = '';
if (Registry::get('settings.General.show_products_from_subcategories') == 'Y') {
$_____['subcats'] = 'Y';
}
list($_______, $________) = fn_get_products($_____, Registry::get('settings.Appearance.products_per_page'), CART_LANGUAGE);
if (count($_______) > 0){
fn_gather_additional_products_data($_______, array(
'get_icon' => true,
'get_detailed' => true,
'get_additional' => true,
'get_options' => true,
'get_discounts' => true,
'get_features' => false
));
$_q = fn_get_products_layout($_REQUEST);
Registry::get('view')->assign('show_qty', true);
Registry::get('view')->assign('products', $_______);
Registry::get('view')->assign('search', $________);
Registry::get('view')->assign('selected_layout', $_q);
Registry::get('view')->assign('category_data', $____);
Registry::get('view')->assign('no_pagination', true);
Registry::get('view')->assign('no_sorting', true);
Registry::get('view')->assign('redirect_url', fn_url("categories.view?category_id=" . $_REQUEST['category_id']));
$layouts = fn_get_products_views("", false);
$product_columns = Registry::get('settings.Appearance.columns_in_products_list');
if (isset($____['product_columns']) and intval($____['product_columns']) > 0){
$product_columns = intval($____['product_columns']);
}
Registry::get('view')->assign('columns', $product_columns);
if (isset($layouts[$_q]['template'])){
$html_products = Registry::get('view')->fetch($layouts[$_q]['template']);
}
Registry::get('ajax')->assign("products", Registry::get('view')->fetch($layouts[$_q]['template']));
Registry::get('ajax')->assign("result", "Y");
Registry::get('ajax')->assign("addon_name", "ab__auto_loading_products");
}
}
}
exit;
}
return;
}
