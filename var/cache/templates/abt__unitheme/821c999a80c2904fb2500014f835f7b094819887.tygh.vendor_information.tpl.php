<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:16:17
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/blocks/vendors/vendor_information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5276153405b337909271201-59239443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '821c999a80c2904fb2500014f835f7b094819887' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/blocks/vendors/vendor_information.tpl',
      1 => 1501124180,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5276153405b337909271201-59239443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'vendor_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33790927db57_74641656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33790927db57_74641656')) {function content_5b33790927db57_74641656($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="ty-vendor-information">
    <span><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['vendor_info']->value['company_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_info']->value['company'], ENT_QUOTES, 'ISO-8859-1');?>
</a></span>
    <span><?php echo $_smarty_tpl->tpl_vars['vendor_info']->value['company_description'];?>
</span>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/vendors/vendor_information.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/vendors/vendor_information.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="ty-vendor-information">
    <span><a href="<?php echo htmlspecialchars(fn_url("companies.view?company_id=".((string)$_smarty_tpl->tpl_vars['vendor_info']->value['company_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_info']->value['company'], ENT_QUOTES, 'ISO-8859-1');?>
</a></span>
    <span><?php echo $_smarty_tpl->tpl_vars['vendor_info']->value['company_description'];?>
</span>
</div><?php }?><?php }} ?>
