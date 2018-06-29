<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:09:22
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_vendor_products_database/hooks/checkout/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7388792035b33776a260199-72757533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0161fc772c5d51aa259ee857fb8b34ffd5194133' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_vendor_products_database/hooks/checkout/product_info.post.tpl',
      1 => 1528277351,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7388792035b33776a260199-72757533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'key' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33776a2720e6_86722276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33776a2720e6_86722276')) {function content_5b33776a2720e6_86722276($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['extra']['vendor']&&$_smarty_tpl->tpl_vars['product']->value['extra']['vendor_price']) {?>
    <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['extra']['vendor'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['extra']['vendor_price'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['extra']['vendor_name'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_vendor_products_database/hooks/checkout/product_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_vendor_products_database/hooks/checkout/product_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['extra']['vendor']&&$_smarty_tpl->tpl_vars['product']->value['extra']['vendor_price']) {?>
    <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['extra']['vendor'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['extra']['vendor_price'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['extra']['vendor_name'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }
}?><?php }} ?>
