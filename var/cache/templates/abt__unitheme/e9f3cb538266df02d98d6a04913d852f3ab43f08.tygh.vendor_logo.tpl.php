<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:16:17
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/blocks/vendors/vendor_logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9688951205b3379092545c6-77695922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9f3cb538266df02d98d6a04913d852f3ab43f08' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/blocks/vendors/vendor_logo.tpl',
      1 => 1501124180,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9688951205b3379092545c6-77695922',
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
  'unifunc' => 'content_5b337909263e75_76520865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337909263e75_76520865')) {function content_5b337909263e75_76520865($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="ty-logo-container-vendor">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_x'], ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_y'], ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['alt'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-logo-container-vendor__image">
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/vendors/vendor_logo.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/vendors/vendor_logo.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="ty-logo-container-vendor">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_x'], ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_y'], ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['alt'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-logo-container-vendor__image">
</div>
<?php }?><?php }} ?>
