<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 02:21:11
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/bestsellers/views/products/bestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5846308735b33f8bfb5e1a9-17859717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '693289ee8a25e7889c0e9c144b9ae18fa4dd8806' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/bestsellers/views/products/bestsellers.tpl',
      1 => 1501124194,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5846308735b33f8bfb5e1a9-17859717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33f8bfb6d877_20530367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33f8bfb6d877_20530367')) {function content_5b33f8bfb6d877_20530367($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="bestsellers_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/bestsellers/views/products/components/products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--bestsellers_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/bestsellers/views/products/bestsellers.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/bestsellers/views/products/bestsellers.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="bestsellers_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/bestsellers/views/products/components/products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--bestsellers_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div><?php }?><?php }} ?>
