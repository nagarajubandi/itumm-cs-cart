<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:10:25
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/hooks/checkout/payment_method_check.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1378228095b3377a90a9032-74721331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9cb3f07ed12d1ffa927ea7d2f52ac457628b2dc' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/hooks/checkout/payment_method_check.pre.tpl',
      1 => 1525369874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1378228095b3377a90a9032-74721331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'payment_id' => 0,
    'is_otp_payment' => 0,
    'otp_mode' => 0,
    'payment' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3377a90c2f29_87437399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3377a90c2f29_87437399')) {function content_5b3377a90c2f29_87437399($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('otp_verification','otp_verification'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["is_otp_payment"] = new Smarty_variable(fn_otp_verification_check_payment($_smarty_tpl->tpl_vars['payment_id']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['is_otp_payment']->value) {?>
	<div style="width: 100%; text-align: center; font-size: 20px;">
		<strong><?php echo $_smarty_tpl->__("otp_verification");?>
 </strong>
	</div>

	<?php $_smarty_tpl->tpl_vars["otp_mode"] = new Smarty_variable(fn_otp_verification_check_mode(), null, 0);?>

	<?php if ($_smarty_tpl->tpl_vars['otp_mode']->value=="send") {?>

		<?php echo $_smarty_tpl->getSubTemplate ("addons/otp_verification/views/otp_send_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>$_smarty_tpl->tpl_vars['payment_id']->value,'sec_payment_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0);?>


	<?php } elseif ($_smarty_tpl->tpl_vars['otp_mode']->value=="verify") {?>

		<?php echo $_smarty_tpl->getSubTemplate ("addons/otp_verification/views/otp_verify_key.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>$_smarty_tpl->tpl_vars['payment_id']->value,'sec_payment_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0);?>


	<?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/otp_verification/hooks/checkout/payment_method_check.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/otp_verification/hooks/checkout/payment_method_check.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["is_otp_payment"] = new Smarty_variable(fn_otp_verification_check_payment($_smarty_tpl->tpl_vars['payment_id']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['is_otp_payment']->value) {?>
	<div style="width: 100%; text-align: center; font-size: 20px;">
		<strong><?php echo $_smarty_tpl->__("otp_verification");?>
 </strong>
	</div>

	<?php $_smarty_tpl->tpl_vars["otp_mode"] = new Smarty_variable(fn_otp_verification_check_mode(), null, 0);?>

	<?php if ($_smarty_tpl->tpl_vars['otp_mode']->value=="send") {?>

		<?php echo $_smarty_tpl->getSubTemplate ("addons/otp_verification/views/otp_send_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>$_smarty_tpl->tpl_vars['payment_id']->value,'sec_payment_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0);?>


	<?php } elseif ($_smarty_tpl->tpl_vars['otp_mode']->value=="verify") {?>

		<?php echo $_smarty_tpl->getSubTemplate ("addons/otp_verification/views/otp_verify_key.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>$_smarty_tpl->tpl_vars['payment_id']->value,'sec_payment_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0);?>


	<?php }?>
<?php }?>
<?php }?><?php }} ?>
