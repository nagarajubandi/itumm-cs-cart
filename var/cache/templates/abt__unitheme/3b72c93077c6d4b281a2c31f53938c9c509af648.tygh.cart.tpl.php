<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:09:21
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/views/checkout/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10356276355b337769e22d10-66044939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b72c93077c6d4b281a2c31f53938c9c509af648' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/views/checkout/cart.tpl',
      1 => 1525408722,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10356276355b337769e22d10-66044939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'continue_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337769e396f0_41949079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337769e396f0_41949079')) {function content_5b337769e396f0_41949079($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_cart_empty','text_cart_empty'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>


<?php if (!fn_cart_is_empty($_smarty_tpl->tpl_vars['cart']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_cart_empty");?>
</p>

    <div class="buttons-container wrap">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"submit"), 0);?>

    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>


<?php if (!fn_cart_is_empty($_smarty_tpl->tpl_vars['cart']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_cart_empty");?>
</p>

    <div class="buttons-container wrap">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"submit"), 0);?>

    </div>
<?php }
}?><?php }} ?>
