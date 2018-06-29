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
function fn_settings_actions_addons_ab__auto_loading_products_licence ($v, $o){
fn_ab__alp_clear_cache ();
}
function fn_settings_actions_addons_ab__auto_loading_products_type_loading ($v, $o){
fn_ab__alp_clear_cache ();
}
function fn_settings_actions_addons_ab__auto_loading_products_before_end ($v, $o){
fn_ab__alp_clear_cache ();
}
function fn_settings_actions_addons_ab__auto_loading_products_troubleshooting_products_without_options ($v, $o){
fn_ab__alp_clear_cache ();
}
function fn_settings_actions_addons_ab__auto_loading_products_log ($v, $o){
fn_ab__alp_clear_cache ();
}
function fn_settings_actions_addons_ab__auto_loading_products_animation ($v, $o){
fn_ab__alp_clear_cache ();
}
function fn_ab__alp_clear_cache (){
fn_clear_cache();
fn_set_notification('N', __('notice'), __('cache_cleared'));
fn_set_notification('W', __('notice'), __('ab__alp_cache_cleared'));
}