<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 11:53:46
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/views/orders/components/order_repay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13499409115b35d07284f5d6-32315153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dec6c2d5af9273d8feb40a306c066f2d14a86eb1' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/views/orders/components/order_repay.tpl',
      1 => 1525690748,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13499409115b35d07284f5d6-32315153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b35d072860df6_11569655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b35d072860df6_11569655')) {function content_5b35d072860df6_11569655($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (floatval($_smarty_tpl->tpl_vars['order_info']->value['total'])) {?>
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>


<?php if ($_REQUEST['payment_id']) {?>

<?php echo '<script'; ?>
 type="text/javascript">
    Tygh.$(document).ready(function() {
        Tygh.$.scrollToElm(Tygh.$('#repay_order'));
    });
<?php echo '</script'; ?>
>

<?php }?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/order_repay.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/order_repay.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (floatval($_smarty_tpl->tpl_vars['order_info']->value['total'])) {?>
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>


<?php if ($_REQUEST['payment_id']) {?>

<?php echo '<script'; ?>
 type="text/javascript">
    Tygh.$(document).ready(function() {
        Tygh.$.scrollToElm(Tygh.$('#repay_order'));
    });
<?php echo '</script'; ?>
>

<?php }?>

<?php }
}?><?php }} ?>
