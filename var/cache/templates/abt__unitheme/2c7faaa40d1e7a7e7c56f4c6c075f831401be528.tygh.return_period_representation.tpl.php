<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:36
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/rma/views/products/components/return_period_representation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16714807055b337250b98187-48789764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7faaa40d1e7a7e7c56f4c6c075f831401be528' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/rma/views/products/components/return_period_representation.tpl',
      1 => 1501124192,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16714807055b337250b98187-48789764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337250ba8079_93791793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337250ba8079_93791793')) {function content_5b337250ba8079_93791793($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('return_period','days','return_period','days'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['rma']['display_product_return_period']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['return_period']&&$_smarty_tpl->tpl_vars['product']->value['is_returnable']=="Y") {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("return_period");?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['return_period'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;<?php echo $_smarty_tpl->__("days");?>
</span>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/views/products/components/return_period_representation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/views/products/components/return_period_representation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['rma']['display_product_return_period']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['return_period']&&$_smarty_tpl->tpl_vars['product']->value['is_returnable']=="Y") {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("return_period");?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['return_period'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;<?php echo $_smarty_tpl->__("days");?>
</span>
    </div>
<?php }
}?><?php }} ?>
