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
(function(_, $) {
$(document).on('click', '.fullwidth-cat a', function() {
var state = '';
if ($(this).parent().hasClass('active')){
$(this).parent().removeClass('active');
var state = '';
}else{
$(this).parent().addClass('active');
var state = 'active';
}
if (state == 'active'){
$(".categories_grid").addClass('full_width');
}else{
$(".categories_grid").removeClass('full_width');
}
$.ceAjax('request', fn_url('categories.ab__ut_full_width'), {
hidden: true,
caching: false,
force_exec: true,
method: 'post',
data: {'full_width': state},
});
});
$(document).on('click', '.hiddenFilter a', function() {
var state = '';
if ($(this).parent().hasClass('active')){
$(this).parent().removeClass('active');
var state = '';
}else{
$(this).parent().addClass('active');
var state = 'active';
}
if (state == 'active'){
$(".categories_grid").addClass('side_hidden');
}else{
$(".categories_grid").removeClass('side_hidden');
}
$.ceAjax('request', fn_url('categories.ab__ut_hidden_filter'), {
hidden: true,
caching: false,
force_exec: true,
method: 'post',
data: {'side_hidden': state},
});
});
if ($('.subcategories').length < 1) {
$(".categories_grid .cat-menu-vertical").addClass("hidden");
}
$(window).resize(function(e){
var width = $(window).width();
if (width <= 768) {
$('.abt__ut__flying_block:not(.abt__ut__moved)').each(function() {
$(this).addClass('abt__ut__moved');
var $placeholder = $("<div></div>").uniqueId();
var $elem = $(this).replaceWith($placeholder);
var target = $('#pagination_contents').parent();
$elem.data('caID', $placeholder.attr('id'));
$elem.insertBefore(target);
});
} else {
$('.abt__ut__flying_block.abt__ut__moved').each(function() {
elem = $(this);
var target = elem.data('caID');
if (target !== undefined) {
elem.removeClass('abt__ut__moved');
$('#' + target).replaceWith(elem);
}
});
}
});
$(window).trigger('resize');
}(Tygh, Tygh.$));
