<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:12:44
         compiled from "/var/www/html/itumm.com/design/backend/mail/templates/common/scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16211963935b337834ec81e3-22146396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e10ed6b1ca539450ea92f9f7672e5b9634065f' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/mail/templates/common/scripts.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16211963935b337834ec81e3-22146396',
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
  'unifunc' => 'content_5b337834ed30b7_67584551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337834ed30b7_67584551')) {function content_5b337834ed30b7_67584551($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/translation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/scripts.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/scripts.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/translation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }
}?><?php }} ?>
