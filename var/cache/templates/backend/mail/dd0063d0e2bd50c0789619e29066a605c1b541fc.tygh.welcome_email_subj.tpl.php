<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:38:56
         compiled from "/var/www/html/itumm.com/design/backend/mail/templates/companies/welcome_email_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2697738385b337e5813a792-85717620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd0063d0e2bd50c0789619e29066a605c1b541fc' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/mail/templates/companies/welcome_email_subj.tpl',
      1 => 1529694054,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2697738385b337e5813a792-85717620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337e58145287_80948053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337e58145287_80948053')) {function content_5b337e58145287_80948053($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

Welcome to iTumm Sellerhub. Thanks for registering with us.
Please provide the following details on info@itumm.com
Registered GST Number.
PAN Number
Bank Account Details
A copy of Cancelled Cheque.
Once you provide these details, these will be reviewed by our iTumm Sellerhub team and you will be notified in 2 working days.
Once the details are verified manually by iTumm Admin team, they will enable the new Vendors account manually.

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="companies/welcome_email_subj.tpl" id="<?php echo smarty_function_set_id(array('name'=>"companies/welcome_email_subj.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

Welcome to iTumm Sellerhub. Thanks for registering with us.
Please provide the following details on info@itumm.com
Registered GST Number.
PAN Number
Bank Account Details
A copy of Cancelled Cheque.
Once you provide these details, these will be reviewed by our iTumm Sellerhub team and you will be notified in 2 working days.
Once the details are verified manually by iTumm Admin team, they will enable the new Vendors account manually.

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
