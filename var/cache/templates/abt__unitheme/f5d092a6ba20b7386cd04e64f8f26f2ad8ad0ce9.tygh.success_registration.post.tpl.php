<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 18:14:46
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/rma/hooks/profiles/success_registration.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6052834345b34d83ebcbbd5-14171612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d092a6ba20b7386cd04e64f8f26f2ad8ad0ce9' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/rma/hooks/profiles/success_registration.post.tpl',
      1 => 1501124192,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6052834345b34d83ebcbbd5-14171612',
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
  'unifunc' => 'content_5b34d83ebd7b21_22460857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34d83ebd7b21_22460857')) {function content_5b34d83ebd7b21_22460857($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('return_requests','return_requests_note','return_requests','return_requests_note'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><li class="ty-success-registration__item">
    <a href="<?php echo htmlspecialchars(fn_url("rma.returns"), ENT_QUOTES, 'ISO-8859-1');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("return_requests");?>
</a>
    <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("return_requests_note");?>
</span>
</li><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/hooks/profiles/success_registration.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/hooks/profiles/success_registration.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><li class="ty-success-registration__item">
    <a href="<?php echo htmlspecialchars(fn_url("rma.returns"), ENT_QUOTES, 'ISO-8859-1');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("return_requests");?>
</a>
    <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("return_requests_note");?>
</span>
</li><?php }?><?php }} ?>
