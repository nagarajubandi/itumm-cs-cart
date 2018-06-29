<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:20
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/blocks/static_templates/top_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6473720675b3372406226f4-99679944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6878111d4369f9aeb0cd477f398143769fd05def' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/blocks/static_templates/top_buttons.tpl',
      1 => 1530078133,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6473720675b3372406226f4-99679944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'hide_wishlist_button' => 0,
    'auth' => 0,
    'wishlist_count' => 0,
    'config' => 0,
    'return_current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372406424c0_05196652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372406424c0_05196652')) {function content_5b3372406424c0_05196652($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('view_wishlist','view_wishlist'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
    <?php $_smarty_tpl->tpl_vars["wishlist_count"] = new Smarty_variable(fn_wishlist_get_count(''), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <div id="abt__unitheme_wishlist_count">
        <a class="cm-tooltip ty-wishlist__a <?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?>active<?php }?>" href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("view_wishlist");?>
"><i class="uni-wish1"></i><?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span><?php }?></a>
        <!--abt__unitheme_wishlist_count--></div>
<?php } else { ?>
<a class="cm-tooltip ty-wishlist__a cm-dialog-opener cm-dialog-auto-size" href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'ISO-8859-1');
}?>" data-ca-target-id="login_block789"   rel="nofollow"><i class="uni-wish1"></i><?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span><?php }?></a>
<?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/top_buttons.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/top_buttons.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
    <?php $_smarty_tpl->tpl_vars["wishlist_count"] = new Smarty_variable(fn_wishlist_get_count(''), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <div id="abt__unitheme_wishlist_count">
        <a class="cm-tooltip ty-wishlist__a <?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?>active<?php }?>" href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("view_wishlist");?>
"><i class="uni-wish1"></i><?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span><?php }?></a>
        <!--abt__unitheme_wishlist_count--></div>
<?php } else { ?>
<a class="cm-tooltip ty-wishlist__a cm-dialog-opener cm-dialog-auto-size" href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'ISO-8859-1');
}?>" data-ca-target-id="login_block789"   rel="nofollow"><i class="uni-wish1"></i><?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span><?php }?></a>
<?php }?>
<?php }?>
<?php }?><?php }} ?>
