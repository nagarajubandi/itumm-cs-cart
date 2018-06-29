<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:18
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/csc_live_search/hooks/index/meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1608853215b33723e4dde09-95102199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b83d4c49f8fa5d32fbb60075753341b1eb01476c' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/csc_live_search/hooks/index/meta.post.tpl',
      1 => 1525436173,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1608853215b33723e4dde09-95102199',
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
  'unifunc' => 'content_5b33723e4e6297_57262265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33723e4e6297_57262265')) {function content_5b33723e4e6297_57262265($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><meta name="cmsmagazine" content="b55b3ce6a6b9c4d16194dc6efd5e2613" /><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/csc_live_search/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/csc_live_search/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><meta name="cmsmagazine" content="b55b3ce6a6b9c4d16194dc6efd5e2613" /><?php }?><?php }} ?>
