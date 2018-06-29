<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:20
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/checkout/dropdown_title.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13196948835b3372400e3331-29817104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b13147b93e8f35c79ae4a6c142c025619cd6a487' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/checkout/dropdown_title.override.tpl',
      1 => 1525364936,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13196948835b3372400e3331-29817104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372400f9563_87173356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372400f9563_87173356')) {function content_5b3372400f9563_87173356($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('adv_items_in_cart','your','cart_is_empty','adv_items_in_cart','your','cart_is_empty'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:dropdown_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_SESSION['cart']['amount']) {?>
    <i class="ty-minicart__icon ty-icon-basket filled"><span class="basket-cart-amount"><?php echo htmlspecialchars($_SESSION['cart']['amount'], ENT_QUOTES, 'ISO-8859-1');?>
</span></i>
    <span class="ty-minicart-title ty-hand"><small><?php echo $_smarty_tpl->__("adv_items_in_cart");?>
</small>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>
</span>
    <i class="ty-icon-down-micro"></i>
<?php } else { ?>
    <i class="ty-minicart__icon ty-icon-basket empty"><span class="basket-cart-amount">0</span></i>
    <span class="ty-minicart-title empty-cart ty-hand"><small><?php echo $_smarty_tpl->__("your");?>
</small>&nbsp;<?php echo $_smarty_tpl->__("cart_is_empty");?>
</span>
    <i class="ty-icon-down-micro"></i>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme/hooks/checkout/dropdown_title.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme/hooks/checkout/dropdown_title.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:dropdown_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_SESSION['cart']['amount']) {?>
    <i class="ty-minicart__icon ty-icon-basket filled"><span class="basket-cart-amount"><?php echo htmlspecialchars($_SESSION['cart']['amount'], ENT_QUOTES, 'ISO-8859-1');?>
</span></i>
    <span class="ty-minicart-title ty-hand"><small><?php echo $_smarty_tpl->__("adv_items_in_cart");?>
</small>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>
</span>
    <i class="ty-icon-down-micro"></i>
<?php } else { ?>
    <i class="ty-minicart__icon ty-icon-basket empty"><span class="basket-cart-amount">0</span></i>
    <span class="ty-minicart-title empty-cart ty-hand"><small><?php echo $_smarty_tpl->__("your");?>
</small>&nbsp;<?php echo $_smarty_tpl->__("cart_is_empty");?>
</span>
    <i class="ty-icon-down-micro"></i>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
