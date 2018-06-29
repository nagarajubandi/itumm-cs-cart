<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 06:08:57
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/overrides/buttons/register_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15364352415b342e21457065-01200552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f1974c325132bcad2d2379261aa0ff06b61baf2' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/overrides/buttons/register_profile.tpl',
      1 => 1525369874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15364352415b342e21457065-01200552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'phone_field' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'but_target' => 0,
    'but_role' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b342e2146f181_28305915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b342e2146f181_28305915')) {function content_5b342e2146f181_28305915($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('register','register','register','register'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["phone_field"] = new Smarty_variable(fn_check_phone_in_profile_fields(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['otp_verification']['enable_otp_on_register']=='Y'&&$_smarty_tpl->tpl_vars['phone_field']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("register"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_meta'=>"ty-btn__secondary",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>"dispatch[otp_verify_register.register]"), 0);?>


<?php echo '<script'; ?>
 type="text/javascript">
	(function(_, $) {
		var form = $('form[name="profiles_register_form"]');
        var val_value = form.find('[name="user_data[phone]"]').length;
        if(!val_value)
        {	
        	var but = $('.ty-profile-field__buttons button').attr('name');
        	$('.ty-profile-field__buttons button').attr('name','dispatch[profiles.update]"]');
        }		
	})(Tygh,Tygh.$);
<?php echo '</script'; ?>
>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("register"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_meta'=>"ty-btn__secondary",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>"dispatch[profiles.update]"), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/overrides/buttons/register_profile.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/overrides/buttons/register_profile.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["phone_field"] = new Smarty_variable(fn_check_phone_in_profile_fields(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['otp_verification']['enable_otp_on_register']=='Y'&&$_smarty_tpl->tpl_vars['phone_field']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("register"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_meta'=>"ty-btn__secondary",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>"dispatch[otp_verify_register.register]"), 0);?>


<?php echo '<script'; ?>
 type="text/javascript">
	(function(_, $) {
		var form = $('form[name="profiles_register_form"]');
        var val_value = form.find('[name="user_data[phone]"]').length;
        if(!val_value)
        {	
        	var but = $('.ty-profile-field__buttons button').attr('name');
        	$('.ty-profile-field__buttons button').attr('name','dispatch[profiles.update]"]');
        }		
	})(Tygh,Tygh.$);
<?php echo '</script'; ?>
>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("register"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_meta'=>"ty-btn__secondary",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>"dispatch[profiles.update]"), 0);?>

<?php }
}?><?php }} ?>
