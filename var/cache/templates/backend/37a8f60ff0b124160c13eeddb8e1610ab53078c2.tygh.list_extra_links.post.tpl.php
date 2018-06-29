<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:14:13
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/product_variations/hooks/products/list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1760916595b33788dc59ed5-65724107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37a8f60ff0b124160c13eeddb8e1610ab53078c2' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/product_variations/hooks/products/list_extra_links.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1760916595b33788dc59ed5-65724107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33788dc5ea65_21398729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33788dc5ea65_21398729')) {function content_5b33788dc5ea65_21398729($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_variations.variations'));
?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <li><?php ob_start();
echo htmlspecialchars(constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_VARIATION"), ENT_QUOTES, 'ISO-8859-1');
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("product_variations.variations"),'href'=>"products.manage?parent_product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&product_type=".$_tmp1));?>
</li>
<?php }?><?php }} ?>
