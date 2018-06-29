<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:09:32
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/hooks/profiles/profile_fields.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11565938865b3377748419d1-97891530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8223bea98deda3b744dc51a4998029a42711e216' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/hooks/profiles/profile_fields.pre.tpl',
      1 => 1525369874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11565938865b3377748419d1-97891530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'field' => 0,
    'auth' => 0,
    'phone_field' => 0,
    'is_verified' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337774858928_43778438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337774858928_43778438')) {function content_5b337774858928_43778438($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('verified','not_verified','verified','not_verified'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["is_verified"] = new Smarty_variable(fn_check_is_number_verified(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["phone_field"] = new Smarty_variable(fn_check_phone_in_profile_fields(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="phone"&&$_smarty_tpl->tpl_vars['field']->value['section']=='C'&&$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['phone_field']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['is_verified']->value) {?>
        <div style="color: green"><?php echo $_smarty_tpl->__("verified");?>
</div>
    <?php } else { ?>
        <div style="color: red"><?php echo $_smarty_tpl->__("not_verified");?>
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
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/otp_verification/hooks/profiles/profile_fields.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/otp_verification/hooks/profiles/profile_fields.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["is_verified"] = new Smarty_variable(fn_check_is_number_verified(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["phone_field"] = new Smarty_variable(fn_check_phone_in_profile_fields(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="phone"&&$_smarty_tpl->tpl_vars['field']->value['section']=='C'&&$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['phone_field']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['is_verified']->value) {?>
        <div style="color: green"><?php echo $_smarty_tpl->__("verified");?>
</div>
    <?php } else { ?>
        <div style="color: red"><?php echo $_smarty_tpl->__("not_verified");?>
</div>
    <?php }?>
    
<?php }
}?><?php }} ?>
