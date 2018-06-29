<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 15:10:39
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/views/otp_verify_register/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15839492305b34ad179ab3c7-82162371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efa5504602d325ee5cf916ede526080fa8fbb597' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/views/otp_verify_register/register.tpl',
      1 => 1525860902,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15839492305b34ad179ab3c7-82162371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'previous_data' => 0,
    'k' => 0,
    'value' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34ad179e0ca6_36628796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ad179e0ca6_36628796')) {function content_5b34ad179e0ca6_36628796($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('otp_verification','an_otp_has_been_send_to_your_mobile_number_please_enter_within_time_limit','your_mobile_no','enter_otp','resend','start_over','change_no','verify','otp_verification','an_otp_has_been_send_to_your_mobile_number_please_enter_within_time_limit','your_mobile_no','enter_otp','resend','start_over','change_no','verify'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_style(array('src'=>"addons/otp_verification/style.css"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("otp_verification");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<fieldset data-form-name="servicenumber" data-step="1" class="current" id="otp_verify_div">
	<legend>
		<i class="fieldset-icon"></i>
		  <span style="position:relative;top:-36px;color:blue"><?php echo $_smarty_tpl->__('verify_your_number');?>
</span>
		
	</legend>

	<div id="change_number_div">
		<form name="otp_verification_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" class="cm-reload" id="otp_verification_form_id">
			<input type="hidden" name="result_ids" value="otp_verify_div" /> 
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
				<?php if ($_smarty_tpl->tpl_vars['k']->value!='user_data'&&$_smarty_tpl->tpl_vars['k']->value!='all_mailing_lists'&&$_smarty_tpl->tpl_vars['k']->value!='fields') {?>
					<input type="hidden" name="user_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />    
				<?php }?> 
				<?php } ?>
			
			</div>
		<?php }?>
	
		<div style="margin-top: 40px;margin-left: 20px;" class="ty-control-group">
            <p class="ty-discussion-post__message"><b><?php echo $_smarty_tpl->__("an_otp_has_been_send_to_your_mobile_number_please_enter_within_time_limit");?>
</b></p>
            <p><?php echo $_smarty_tpl->__("your_mobile_no");?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['previous_data']->value['user_data']['phone'], ENT_QUOTES, 'ISO-8859-1');?>
</b></p>
        </div>
		<div style="margin-top: 40px;margin-left: 20px;" class="ty-control-group">
            <label for="otp_verify_input" class="ty-login__filed-label ty-control-group__label cm-required"><?php echo $_smarty_tpl->__("enter_otp");?>
</label>
            <input type="text" id="otp_verify_input" name="user_data[otp_verification_data]" size="" value="" class="ty-input-text cm-focus" />
        	<div style="margin-left:217px ;margin-top: 10px;">
				<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn ty-btn__text cm-ajax cm-ajax-full-render",'but_href'=>"otp_verify_register.otp_resend",'but_text'=>$_smarty_tpl->__("resend"),'but_role'=>"tool",'but_id'=>"resend_button",'but_target_id'=>"otp_verify_div"), 0);?>

			</div>
        </div>
		<div style="margin-top: 40px;margin-left: 20px;margin-bottom: 40px;" class="ty-product-block__button">         
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary",'but_href'=>"profiles.add",'but_text'=>$_smarty_tpl->__("start_over"),'but_role'=>"tool",'but_id'=>"back_button"), 0);?>

            
	            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary cm-ajax",'but_href'=>"otp_verify_register.change_number",'but_text'=>$_smarty_tpl->__("change_no"),'but_role'=>"tool",'but_id'=>"otp_change_number"), 0);?>

	        
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[profiles.update]",'but_text'=>$_smarty_tpl->__("verify"),'but_role'=>"submit",'but_meta'=>"ty-btn__secondary ty-btn__big cm-form-dialog-closer ty-btn",'but_id'=>"verify_button"), 0);?>

		</div>
	</form>
	</div>
	<!-- otp_verify_div -->
</fieldset>



    
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/otp_verification/views/otp_verify_register/register.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/otp_verification/views/otp_verify_register/register.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_style(array('src'=>"addons/otp_verification/style.css"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("otp_verification");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<fieldset data-form-name="servicenumber" data-step="1" class="current" id="otp_verify_div">
	<legend>
		<i class="fieldset-icon"></i>
		  <span style="position:relative;top:-36px;color:blue"><?php echo $_smarty_tpl->__('verify_your_number');?>
</span>
		
	</legend>

	<div id="change_number_div">
		<form name="otp_verification_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" class="cm-reload" id="otp_verification_form_id">
			<input type="hidden" name="result_ids" value="otp_verify_div" /> 
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
				<?php if ($_smarty_tpl->tpl_vars['k']->value!='user_data'&&$_smarty_tpl->tpl_vars['k']->value!='all_mailing_lists'&&$_smarty_tpl->tpl_vars['k']->value!='fields') {?>
					<input type="hidden" name="user_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />    
				<?php }?> 
				<?php } ?>
			
			</div>
		<?php }?>
	
		<div style="margin-top: 40px;margin-left: 20px;" class="ty-control-group">
            <p class="ty-discussion-post__message"><b><?php echo $_smarty_tpl->__("an_otp_has_been_send_to_your_mobile_number_please_enter_within_time_limit");?>
</b></p>
            <p><?php echo $_smarty_tpl->__("your_mobile_no");?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['previous_data']->value['user_data']['phone'], ENT_QUOTES, 'ISO-8859-1');?>
</b></p>
        </div>
		<div style="margin-top: 40px;margin-left: 20px;" class="ty-control-group">
            <label for="otp_verify_input" class="ty-login__filed-label ty-control-group__label cm-required"><?php echo $_smarty_tpl->__("enter_otp");?>
</label>
            <input type="text" id="otp_verify_input" name="user_data[otp_verification_data]" size="" value="" class="ty-input-text cm-focus" />
        	<div style="margin-left:217px ;margin-top: 10px;">
				<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn ty-btn__text cm-ajax cm-ajax-full-render",'but_href'=>"otp_verify_register.otp_resend",'but_text'=>$_smarty_tpl->__("resend"),'but_role'=>"tool",'but_id'=>"resend_button",'but_target_id'=>"otp_verify_div"), 0);?>

			</div>
        </div>
		<div style="margin-top: 40px;margin-left: 20px;margin-bottom: 40px;" class="ty-product-block__button">         
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary",'but_href'=>"profiles.add",'but_text'=>$_smarty_tpl->__("start_over"),'but_role'=>"tool",'but_id'=>"back_button"), 0);?>

            
	            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary cm-ajax",'but_href'=>"otp_verify_register.change_number",'but_text'=>$_smarty_tpl->__("change_no"),'but_role'=>"tool",'but_id'=>"otp_change_number"), 0);?>

	        
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[profiles.update]",'but_text'=>$_smarty_tpl->__("verify"),'but_role'=>"submit",'but_meta'=>"ty-btn__secondary ty-btn__big cm-form-dialog-closer ty-btn",'but_id'=>"verify_button"), 0);?>

		</div>
	</form>
	</div>
	<!-- otp_verify_div -->
</fieldset>



    
<?php }?><?php }} ?>
