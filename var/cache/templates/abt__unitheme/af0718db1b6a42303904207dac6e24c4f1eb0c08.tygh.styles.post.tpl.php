<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:18
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/ab__search_motivation/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9095887175b33723e76c070-22849050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af0718db1b6a42303904207dac6e24c4f1eb0c08' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/ab__search_motivation/hooks/index/styles.post.tpl',
      1 => 1525365936,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9095887175b33723e76c070-22849050',
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
  'unifunc' => 'content_5b33723e775c66_27463103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33723e775c66_27463103')) {function content_5b33723e775c66_27463103($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><style>
#search_input:focus::-webkit-input-placeholder {
color: transparent !important
}
#search_input:focus::-moz-placeholder {
color: transparent !important
}
#search_input:focus:-moz-placeholder {
color: transparent !important
}
#search_input:focus:-ms-input-placeholder {
color: transparent !important
}
</style>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__search_motivation/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__search_motivation/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><style>
#search_input:focus::-webkit-input-placeholder {
color: transparent !important
}
#search_input:focus::-moz-placeholder {
color: transparent !important
}
#search_input:focus:-moz-placeholder {
color: transparent !important
}
#search_input:focus:-ms-input-placeholder {
color: transparent !important
}
</style>
<?php }?><?php }} ?>
