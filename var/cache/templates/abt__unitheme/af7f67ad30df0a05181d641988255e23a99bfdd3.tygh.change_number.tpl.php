<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 15:10:56
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/views/otp_verify_register/change_number.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8636875445b34ad28609896-45990895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af7f67ad30df0a05181d641988255e23a99bfdd3' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/views/otp_verify_register/change_number.tpl',
      1 => 1525369874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8636875445b34ad28609896-45990895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'previous_data' => 0,
    'k' => 0,
    'value' => 0,
    'id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34ad286324c5_93429814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ad286324c5_93429814')) {function content_5b34ad286324c5_93429814($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('_you_can_change_your_number_here_and_otp_will_be_send_on_updated_number','pre_no','enter_your_new_number','start_over','save','_you_can_change_your_number_here_and_otp_will_be_send_on_updated_number','pre_no','enter_your_new_number','start_over','save'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><form name="change_number_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
	<?php if ($_smarty_tpl->tpl_vars['previous_data']->value) {?>
		<div class="previous_data">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['previous_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['k']->value!='user_data'&&$_smarty_tpl->tpl_vars['k']->value!='all_mailing_lists') {?>
				<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" /> 
			<?php }?> 
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['previous_data']->value['user_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['k']->value!='user_data') {?>
				<input type="hidden" name="user_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />    
			<?php }?> 
			<?php } ?>
		</div>
	<?php }?>
	<div class="ty-control-group" style="margin-top: 40px;margin-left: 20px;">
		<p><b><?php echo $_smarty_tpl->__("_you_can_change_your_number_here_and_otp_will_be_send_on_updated_number");?>
</b></p>
		<p><b><?php echo $_smarty_tpl->__("pre_no");
echo htmlspecialchars($_smarty_tpl->tpl_vars['previous_data']->value['user_data']['phone'], ENT_QUOTES, 'ISO-8859-1');?>
</b></p>
	</div>
	<div class="ty-control-group" style="margin-top: 40px;margin-left: 20px;">
		<label for="new_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-login__filed-label ty-control-group__label cm-required"><?php echo $_smarty_tpl->__("enter_your_new_number");?>
</label>
		<input type="text" id="new_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="user_data[new_number]" size="" value="" class="ty-input-text cm-focus" />
	</div>
	<div style="margin-top: 40px;margin-left: 20px;margin-bottom: 40px;" class="ty-product-block__button">         
		<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary",'but_href'=>"profiles.add",'but_text'=>$_smarty_tpl->__("start_over"),'but_role'=>"tool",'but_id'=>"back_button"), 0);?>

			   
		<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[otp_verify_register.register]",'but_text'=>$_smarty_tpl->__("save"),'but_role'=>"submit",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"), 0);?>

	</div>
</form><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/otp_verification/views/otp_verify_register/change_number.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/otp_verification/views/otp_verify_register/change_number.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><form name="change_number_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
	<?php if ($_smarty_tpl->tpl_vars['previous_data']->value) {?>
		<div class="previous_data">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['previous_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['k']->value!='user_data'&&$_smarty_tpl->tpl_vars['k']->value!='all_mailing_lists') {?>
				<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" /> 
			<?php }?> 
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['previous_data']->value['user_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['k']->value!='user_data') {?>
				<input type="hidden" name="user_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />    
			<?php }?> 
			<?php } ?>
		</div>
	<?php }?>
	<div class="ty-control-group" style="margin-top: 40px;margin-left: 20px;">
		<p><b><?php echo $_smarty_tpl->__("_you_can_change_your_number_here_and_otp_will_be_send_on_updated_number");?>
</b></p>
		<p><b><?php echo $_smarty_tpl->__("pre_no");
echo htmlspecialchars($_smarty_tpl->tpl_vars['previous_data']->value['user_data']['phone'], ENT_QUOTES, 'ISO-8859-1');?>
</b></p>
	</div>
	<div class="ty-control-group" style="margin-top: 40px;margin-left: 20px;">
		<label for="new_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-login__filed-label ty-control-group__label cm-required"><?php echo $_smarty_tpl->__("enter_your_new_number");?>
</label>
		<input type="text" id="new_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="user_data[new_number]" size="" value="" class="ty-input-text cm-focus" />
	</div>
	<div style="margin-top: 40px;margin-left: 20px;margin-bottom: 40px;" class="ty-product-block__button">         
		<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary",'but_href'=>"profiles.add",'but_text'=>$_smarty_tpl->__("start_over"),'but_role'=>"tool",'but_id'=>"back_button"), 0);?>

			   
		<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[otp_verify_register.register]",'but_text'=>$_smarty_tpl->__("save"),'but_role'=>"submit",'but_meta'=>"ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"), 0);?>

	</div>
</form><?php }?><?php }} ?>
