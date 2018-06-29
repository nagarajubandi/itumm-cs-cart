<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 17:41:32
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/overrides/views/auth/recover_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100934045b34d074af1cd3-21665123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f89c35e50993beadeebb32a0801a3b3bda54160a' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/overrides/views/auth/recover_password.tpl',
      1 => 1525369874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '100934045b34d074af1cd3-21665123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'phone_field' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34d074b0d799_15755518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34d074b0d799_15755518')) {function content_5b34d074b0d799_15755518($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('email_or_phone','reset_via_otp','recover_password','email_or_phone','reset_via_otp','recover_password'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["phone_field"] = new Smarty_variable(fn_check_phone_in_profile_fields(), null, 0);?>
<div class="ty-recover-password">
	<form name="recoverfrm" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
	    <div class="ty-control-group">
	        <label class="ty-login__filed-label ty-control-group__label cm-trim cm-required" for="login_id"><?php echo $_smarty_tpl->__("email_or_phone");?>
</label>
	        <input type="text" id="login_id" name="user_email" size="30" value="" class="ty-login__input cm-focus" />
	    </div>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['otp_verification']['enable_reset_password_by_otp']=='Y'&&$_smarty_tpl->tpl_vars['phone_field']->value) {?>
        <div class="ty-reset__with-otp">
            <label for="reset_with_otp" class="ty-reset__with-otp-label"><input class="checkbox" type="checkbox" name="reset_with_otp" id="reset_with_otp"<?php if ($_smarty_tpl->tpl_vars['addons']->value['otp_verification']['enable_reset_password_by_otp']=='Y') {?>checked<?php }?> value="Y" /><?php echo $_smarty_tpl->__("reset_via_otp");?>
</label>
        </div>
        <?php }?>
	    <div class="buttons-container login-recovery">
	        <?php echo $_smarty_tpl->getSubTemplate ("buttons/reset_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.recover_password]"), 0);?>

	    </div>
	</form>
</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("recover_password");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/overrides/views/auth/recover_password.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/overrides/views/auth/recover_password.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["phone_field"] = new Smarty_variable(fn_check_phone_in_profile_fields(), null, 0);?>
<div class="ty-recover-password">
	<form name="recoverfrm" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
	    <div class="ty-control-group">
	        <label class="ty-login__filed-label ty-control-group__label cm-trim cm-required" for="login_id"><?php echo $_smarty_tpl->__("email_or_phone");?>
</label>
	        <input type="text" id="login_id" name="user_email" size="30" value="" class="ty-login__input cm-focus" />
	    </div>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['otp_verification']['enable_reset_password_by_otp']=='Y'&&$_smarty_tpl->tpl_vars['phone_field']->value) {?>
        <div class="ty-reset__with-otp">
            <label for="reset_with_otp" class="ty-reset__with-otp-label"><input class="checkbox" type="checkbox" name="reset_with_otp" id="reset_with_otp"<?php if ($_smarty_tpl->tpl_vars['addons']->value['otp_verification']['enable_reset_password_by_otp']=='Y') {?>checked<?php }?> value="Y" /><?php echo $_smarty_tpl->__("reset_via_otp");?>
</label>
        </div>
        <?php }?>
	    <div class="buttons-container login-recovery">
	        <?php echo $_smarty_tpl->getSubTemplate ("buttons/reset_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.recover_password]"), 0);?>

	    </div>
	</form>
</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("recover_password");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
