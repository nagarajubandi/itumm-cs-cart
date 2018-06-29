<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 15:22:02
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/sd_vendor_products_database/hooks/vendor_plans/details_general_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2879213005b3601424a16e1-89586764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cd1a1115a2108ddc13d0d563f9ce00c606e51e4' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/sd_vendor_products_database/hooks/vendor_plans/details_general_content.post.tpl',
      1 => 1527946384,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2879213005b3601424a16e1-89586764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'plan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3601424b1305_29203094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3601424b1305_29203094')) {function content_5b3601424b1305_29203094($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('addons.sd_vendor_products_database.allow_vendors_create_product','addons.sd_vendor_products_database.allow_vendors_to_sell_common_products'));
?>
<div class="control-group">
    <label class="control-label" for="elm_allow_vendors_create_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("addons.sd_vendor_products_database.allow_vendors_create_product");?>
:</label>
    <div class="controls">
        <input type="hidden" name="plan_data[enable_create_products]" value="N" />
        <input type="checkbox" id="elm_allow_vendors_create_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="plan_data[enable_create_products]" size="10" value="Y"<?php if ($_smarty_tpl->tpl_vars['plan']->value['enable_create_products']=="Y") {?> checked="checked"<?php }?> />
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="elm_allow_vendors_to_sell_common_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("addons.sd_vendor_products_database.allow_vendors_to_sell_common_products");?>
:</label>
    <div class="controls">
        <input type="hidden" name="plan_data[enable_copy_products]" value="N" />
        <input type="checkbox" id="elm_youtube_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="plan_data[enable_copy_products]" size="10" value="Y"<?php if ($_smarty_tpl->tpl_vars['plan']->value['enable_copy_products']=="Y") {?> checked="checked"<?php }?> />
    </div>
</div><?php }} ?>
