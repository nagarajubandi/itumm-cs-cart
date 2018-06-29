<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:09:32
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/hooks/checkout/checkout_steps.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21227902785b3377748feff7-02445240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44f356ddb0c0c0a2682cc033496a9667c50c9d82' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/hooks/checkout/checkout_steps.override.tpl',
      1 => 1525436584,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21227902785b3377748feff7-02445240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'phone_field' => 0,
    'user_data' => 0,
    'otp_mode' => 0,
    'but_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337774920a89_87202462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337774920a89_87202462')) {function content_5b337774920a89_87202462($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["phone_field"] = new Smarty_variable(fn_check_phone_in_profile_fields_at_checkout(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["is_verified"] = new Smarty_variable(fn_check_is_number_verified(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['user_data'] = new Smarty_variable(fn_get_user_info($_smarty_tpl->tpl_vars['auth']->value['user_id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['phone_field']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">
 (function(_, $) {
 	$.ceEvent('on', 'ce.ajaxdone', function(elms, scripts, params, response_data, response_text) {
    
	$('input[name="user_data[phone]"]').on('change',function(){
        if($('input[name="user_data[phone]"]').val() != "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['phone'], ENT_QUOTES, 'ISO-8859-1');?>
"){
            $('#verify_at_checkout').attr('name','dispatch[checkout.send_checkout_step]');
			
		}else{
			 $('#verify_at_checkout').attr('name','dispatch[checkout.update_steps]');
		}

		});
	
			
 });
 	$('input[name="user_data[phone]"]').on('change',function(){
        if($('input[name="user_data[phone]"]').val() != "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['phone'], ENT_QUOTES, 'ISO-8859-1');?>
"){
            $('#verify_at_checkout').attr('name','dispatch[checkout.send_checkout_step]');
			
		}else{
			 $('#verify_at_checkout').attr('name','dispatch[checkout.update_steps]');
		}
		   
		});
	
 })(Tygh,Tygh.$);
<?php echo '</script'; ?>
>


<?php $_smarty_tpl->tpl_vars["otp_mode"] = new Smarty_variable(fn_otp_verification_check_step_mode(), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['otp_mode']->value=="send") {?>

		<?php echo $_smarty_tpl->getSubTemplate ("addons/otp_verification/views/verify_at_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php } elseif ($_smarty_tpl->tpl_vars['otp_mode']->value=="verify") {?>

		<?php echo $_smarty_tpl->getSubTemplate ("addons/otp_verification/views/verify_at_checkout_key.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php }?>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <div class="ty-checkout-buttons">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary",'but_name'=>"dispatch[checkout.update_steps]",'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value), 0);?>

    </div>
<?php }?>	
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/otp_verification/hooks/checkout/checkout_steps.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/otp_verification/hooks/checkout/checkout_steps.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["phone_field"] = new Smarty_variable(fn_check_phone_in_profile_fields_at_checkout(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["is_verified"] = new Smarty_variable(fn_check_is_number_verified(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['user_data'] = new Smarty_variable(fn_get_user_info($_smarty_tpl->tpl_vars['auth']->value['user_id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['phone_field']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">
 (function(_, $) {
 	$.ceEvent('on', 'ce.ajaxdone', function(elms, scripts, params, response_data, response_text) {
    
	$('input[name="user_data[phone]"]').on('change',function(){
        if($('input[name="user_data[phone]"]').val() != "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['phone'], ENT_QUOTES, 'ISO-8859-1');?>
"){
            $('#verify_at_checkout').attr('name','dispatch[checkout.send_checkout_step]');
			
		}else{
			 $('#verify_at_checkout').attr('name','dispatch[checkout.update_steps]');
		}

		});
	
			
 });
 	$('input[name="user_data[phone]"]').on('change',function(){
        if($('input[name="user_data[phone]"]').val() != "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['phone'], ENT_QUOTES, 'ISO-8859-1');?>
"){
            $('#verify_at_checkout').attr('name','dispatch[checkout.send_checkout_step]');
			
		}else{
			 $('#verify_at_checkout').attr('name','dispatch[checkout.update_steps]');
		}
		   
		});
	
 })(Tygh,Tygh.$);
<?php echo '</script'; ?>
>


<?php $_smarty_tpl->tpl_vars["otp_mode"] = new Smarty_variable(fn_otp_verification_check_step_mode(), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['otp_mode']->value=="send") {?>

		<?php echo $_smarty_tpl->getSubTemplate ("addons/otp_verification/views/verify_at_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php } elseif ($_smarty_tpl->tpl_vars['otp_mode']->value=="verify") {?>

		<?php echo $_smarty_tpl->getSubTemplate ("addons/otp_verification/views/verify_at_checkout_key.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php }?>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <div class="ty-checkout-buttons">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary",'but_name'=>"dispatch[checkout.update_steps]",'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value), 0);?>

    </div>
<?php }?>	
<?php }
}?><?php }} ?>
