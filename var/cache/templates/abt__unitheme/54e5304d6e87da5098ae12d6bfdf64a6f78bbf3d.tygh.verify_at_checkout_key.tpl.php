<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 15:13:19
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/views/verify_at_checkout_key.tpl" */ ?>
<?php /*%%SmartyHeaderCode:673654535b34adb75cf245-37630833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54e5304d6e87da5098ae12d6bfdf64a6f78bbf3d' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/views/verify_at_checkout_key.tpl',
      1 => 1525436152,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '673654535b34adb75cf245-37630833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'config' => 0,
    '_REQUEST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34adb75f8898_22514214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34adb75f8898_22514214')) {function content_5b34adb75f8898_22514214($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('otp_key','verify','change_no','verify','change_no','otp_key','verify','change_no','verify','change_no'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
     <?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {
		$.ceEvent('on', 'ce.ajaxdone', function(elms, scripts, params, response_data, response_text) {
			$('input[name="user_data[phone]"]').val("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth']->value['otp_data']['phone_number'], ENT_QUOTES, 'ISO-8859-1');?>
");
 		});
        $('input[name="user_data[phone]"]').val("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth']->value['otp_data']['phone_number'], ENT_QUOTES, 'ISO-8859-1');?>
");
        })(Tygh,Tygh.$);
    <?php echo '</script'; ?>
>
<form name="otp_verification_verify_form" id="otp_processform" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" class="">
	<fieldset data-form-name="servicenumber" data-step="1" class="current">
		<legend> Enter OTP(One Time Password)</legend>
		<div style="display: table;">
		<label for="input_otp_key" class="cm-required"><?php echo $_smarty_tpl->__("otp_key");?>
</label>
		<input type="text" id="input_otp_key" name="input_otp_key" class="input-small cm-focus cm-autocomplete-off">
		<div style="text-align:right;">
		    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=='details') {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['customer_index'], ENT_QUOTES, 'ISO-8859-1');?>
?dispatch=orders.otp_resend&order_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_REQUEST']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="" data-ca-target-id="elm_payments_list*">Resend</a>
			<?php } else { ?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['customer_index'], ENT_QUOTES, 'ISO-8859-1');?>
?dispatch=checkout.otp_resend" class="" data-ca-target-id="checkout_*">Resend</a>
			<?php }?>
		</div>
		</div>
		<br>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=='details') {?>
		<input type="hidden" name="order_id" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_REQUEST']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[orders.otp_verify]",'but_text'=>$_smarty_tpl->__("verify"),'but_role'=>"submit",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"), 0);?>


        <span>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary cm-ajax",'but_href'=>"orders.change_number&order_id=".((string)$_smarty_tpl->tpl_vars['_REQUEST']->value['order_id']),'but_target_id'=>"elm_payments_list",'but_text'=>$_smarty_tpl->__("change_no"),'but_role'=>"tool"), 0);?>

        </span>
		<?php } else { ?>
	    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.otp_verify]",'but_text'=>$_smarty_tpl->__("verify"),'but_role'=>"submit",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"), 0);?>


        <span>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary ",'but_href'=>"checkout.change_number",'but_text'=>$_smarty_tpl->__("change_no"),'but_role'=>"tool"), 0);?>

        </span>
        <?php }?>
	</fieldset>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/otp_verification/views/verify_at_checkout_key.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/otp_verification/views/verify_at_checkout_key.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
     <?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {
		$.ceEvent('on', 'ce.ajaxdone', function(elms, scripts, params, response_data, response_text) {
			$('input[name="user_data[phone]"]').val("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth']->value['otp_data']['phone_number'], ENT_QUOTES, 'ISO-8859-1');?>
");
 		});
        $('input[name="user_data[phone]"]').val("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth']->value['otp_data']['phone_number'], ENT_QUOTES, 'ISO-8859-1');?>
");
        })(Tygh,Tygh.$);
    <?php echo '</script'; ?>
>
<form name="otp_verification_verify_form" id="otp_processform" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" class="">
	<fieldset data-form-name="servicenumber" data-step="1" class="current">
		<legend> Enter OTP(One Time Password)</legend>
		<div style="display: table;">
		<label for="input_otp_key" class="cm-required"><?php echo $_smarty_tpl->__("otp_key");?>
</label>
		<input type="text" id="input_otp_key" name="input_otp_key" class="input-small cm-focus cm-autocomplete-off">
		<div style="text-align:right;">
		    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=='details') {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['customer_index'], ENT_QUOTES, 'ISO-8859-1');?>
?dispatch=orders.otp_resend&order_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_REQUEST']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="" data-ca-target-id="elm_payments_list*">Resend</a>
			<?php } else { ?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['customer_index'], ENT_QUOTES, 'ISO-8859-1');?>
?dispatch=checkout.otp_resend" class="" data-ca-target-id="checkout_*">Resend</a>
			<?php }?>
		</div>
		</div>
		<br>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=='details') {?>
		<input type="hidden" name="order_id" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_REQUEST']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[orders.otp_verify]",'but_text'=>$_smarty_tpl->__("verify"),'but_role'=>"submit",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"), 0);?>


        <span>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary cm-ajax",'but_href'=>"orders.change_number&order_id=".((string)$_smarty_tpl->tpl_vars['_REQUEST']->value['order_id']),'but_target_id'=>"elm_payments_list",'but_text'=>$_smarty_tpl->__("change_no"),'but_role'=>"tool"), 0);?>

        </span>
		<?php } else { ?>
	    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.otp_verify]",'but_text'=>$_smarty_tpl->__("verify"),'but_role'=>"submit",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"), 0);?>


        <span>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary ",'but_href'=>"checkout.change_number",'but_text'=>$_smarty_tpl->__("change_no"),'but_role'=>"tool"), 0);?>

        </span>
        <?php }?>
	</fieldset>
</form>
<?php }?><?php }} ?>
