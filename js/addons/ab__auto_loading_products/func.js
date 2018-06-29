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
function fn_ab__alp_n2w(n) {
if ((n%10==1)&&(n%100!=11)) {
return ab__alp.texts.p1;
} else {
if (n%10>=2&&n%10<=4&&(n%100<10||n%100>=20)) {
return ab__alp.texts.p2;
} else {
return ab__alp.texts.p3;
}
}
}
function fn_ab__alp_find_containers (){
ab__alp.blocks.template = false;
var box = $('div.cm-pagination-container');
if (box.children("div[class*='grid-list']").length > 0){
ab__alp.blocks.products = box.children("div[class*='grid-list']");
ab__alp.blocks.template = 'grid-list';
}else if (box.children("div[class*='compact-list']").length > 0){
ab__alp.blocks.products = box.children("div[class*='compact-list']");
ab__alp.blocks.template = 'compact-list';
}else if (box.children("div[class*='product-list']").length > 0){
ab__alp.blocks.products = box;
ab__alp.blocks.template = 'product-list'
}else{
}
if (ab__alp.blocks.template !== false){
ab__alp.blocks.pagination = box.children("div[class*='pagination']:last-child");
if ($(ab__alp.blocks.pagination).length > 0){
$(ab__alp.blocks.pagination).remove();
}else{
}
}
return ab__alp.blocks.template;
}
function fn_ab__alp_search_button (status){
var ab__alp_panel = $('#ab__alp_panel');
if (status == 'show') {
if (ab__alp_panel.length == 0){
var button_ALP = $('<div/>', {
id: 'ab__alp_panel',
class: 'ab__alp_panel active'
}).append('<button class="active ' + ab__alp.config.animation + '" onclick="fn_ab__alp_get_products();"><span class="icon"></span><span class="msg"><span class="main"></span><span class="advanced"></span></span></button>');
$('div.cm-pagination-container').after(button_ALP);
}else{
ab__alp_panel.find('button').removeClass('loading').addClass('active');
}
ab__alp.blocks.button_state = 'show';
fn_ab__alp_search_button_update_msg();
}else if (status == 'disable'){
ab__alp_panel.find('button').removeClass('loading').removeClass('active');
ab__alp.blocks.button_state = 'disable';
fn_ab__alp_search_button_update_msg();
}else if (status == 'delete'){
ab__alp_panel.remove();
ab__alp.blocks.button_state = 'delete';
}
}
function fn_ab__alp_search_button_update_msg (){
var msg_main = "";
var msg_advanced = "";
var ab__alp_panel = $('#ab__alp_panel');
if (ab__alp.params.page * ab__alp.params.items_per_page < ab__alp.params.total_items) {
var ostatok = ab__alp.params.items_per_page;
if (ab__alp.params.page * ab__alp.params.items_per_page + ab__alp.params.items_per_page >= ab__alp.params.total_items){
ostatok = ab__alp.params.total_items - ab__alp.params.page * ab__alp.params.items_per_page;
}
msg_main = ab__alp.texts.t1 + ostatok + ' ' + fn_ab__alp_n2w(ostatok);
msg_advanced = ab__alp.texts.t2 + (ab__alp.params.page * ab__alp.params.items_per_page) + ab__alp.texts.t3 + ab__alp.params.total_items;
}else{
msg_main = ab__alp.texts.t4;
msg_advanced = ab__alp.params.total_items + ' ' + fn_ab__alp_n2w(ab__alp.params.total_items);
}
ab__alp_panel.find('span.msg span.main').text(msg_main);
ab__alp_panel.find('span.msg span.advanced').text(msg_advanced);
}
function fn_ab__alp_init_params(from, data){
if (from == 'page'){
ab__alp.params.page = parseInt(ab__alp.params.page);
ab__alp.params.items_per_page = parseInt(ab__alp.params.items_per_page);
ab__alp.params.category_id = parseInt(ab__alp.params.category_id);
ab__alp.params.total_items = parseInt(ab__alp.params.total_items);
}else if ((from == 'ajax') && (!!data) && (data.constructor === Object)){
ab__alp.params.page = parseInt(data.page);
ab__alp.params.items_per_page = parseInt(data.items_per_page);
ab__alp.params.category_id = parseInt(data.category_id);
ab__alp.params.total_items = parseInt(data.total_items);
ab__alp.params.features_hash = data.features_hash;
ab__alp.params.dispatch = data.dispatch;
ab__alp.params.sort_by = data.sort_by;
ab__alp.params.sort_order = data.sort_order;
ab__alp.params.subcats = data.subcats;
ab__alp.params.current_url = data.current_url;
}
}
function fn_ab__alp_init(from, data){
if (fn_ab__alp_find_containers () !== false ){
fn_ab__alp_init_params (from, data);
if (ab__alp.params.total_items <= ab__alp.params.items_per_page){
fn_ab__alp_search_button ('delete');
}else if (ab__alp.params.page * ab__alp.params.items_per_page < ab__alp.params.total_items){
fn_ab__alp_search_button ('show');
}else{
fn_ab__alp_search_button ('disable');
}
}else{
fn_ab__alp_search_button ('disable');
}
}
function fn_ab__alp_get_products_start (){
ab__alp.params.loading = true;
$('#ab__alp_panel').find('button').addClass('loading');
}
function fn_ab__alp_get_products_stop (){
ab__alp.params.loading = false;
$('#ab__alp_panel').find('button').removeClass('loading');
}
function fn_ab__alp_get_products(){
var $ = Tygh.$;
if (ab__alp.params.loading || ab__alp.blocks.button_state != 'show') return false;
if (ab__alp.params.page * ab__alp.params.items_per_page < ab__alp.params.total_items){
ab__alp.params.page = ab__alp.params.page + 1;
}else return false;
fn_ab__alp_get_products_start();
$.ceAjax('request', fn_url('ab__auto_loading_products.get_products'), {
hidden: true,
caching: false,
force_exec: true,
save_history: true,
method: 'post',
data: ab__alp.params,
callback: function(data) {
if (data.result == "Y"){
var p = data.products;
var t = $('<div/>').append(p.replace(/^\s+|\s+$/gm,''));
if ((ab__alp.blocks.template == "grid-list") || (ab__alp.blocks.template == "compact-list")){
$(ab__alp.blocks.products).append(t.children("div[class*='" + ab__alp.blocks.template + "']").children());
}else{
if (ab__alp.config.troubleshooting_products_without_options == 'Y'){
$(ab__alp.blocks.products).append("<hr>");
}
$(ab__alp.blocks.products).append(t.children());
}
if ($.isFunction($.fn.ceProductImageGallery) ) {
$('.cm-image-gallery').ceProductImageGallery();
}
if ($.isFunction($.processForms) ) {
$.processForms($(ab__alp.blocks.products));
}
$(window).scrollTop($(window).scrollTop()+10).scrollTop($(window).scrollTop()-10);
if (ab__alp.params.page * ab__alp.params.items_per_page >= ab__alp.params.total_items){
fn_ab__alp_search_button ('disable');
}else{
fn_ab__alp_search_button_update_msg();
}
fn_ab__alp_get_products_stop();
}
},
});
}
(function(_, $) {
$.ceEvent('one', 'ce.commoninit', function(url) {
fn_ab__alp_init ('page', '');
});
$.ceEvent('on', 'ce.ajaxdone', function(elms, scripts, params, response_data, response_text) {
if (response_data.addon_name == "ab__auto_loading_products"){
}else{
var p = response_data.ab__alp_params;
if ((!!p) && (p.constructor === Object)){
fn_ab__alp_init ('ajax', response_data.ab__alp_params);
}
}
});
}(Tygh, Tygh.$));
$(window).scroll(function() {
if($(window).scrollTop() + $(window).height() >= $(document).height() - parseInt(ab__alp.config.before_end)) {
if ((ab__alp.config.type_loading == 'auto') && (ab__alp.blocks.button_state == 'show') && ab__alp.params.loading == false){
fn_ab__alp_get_products ();
}
}
});
