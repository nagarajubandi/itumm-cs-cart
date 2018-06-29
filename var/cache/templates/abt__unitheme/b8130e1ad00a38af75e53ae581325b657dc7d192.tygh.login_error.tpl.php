<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 15:12:29
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/hybrid_auth/views/auth/login_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4200603805b34ad85e87513-20954790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8130e1ad00a38af75e53ae581325b657dc7d192' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/hybrid_auth/views/auth/login_error.tpl',
      1 => 1501124200,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4200603805b34ad85e87513-20954790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'redirect_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34ad85e96734_24862393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ad85e96734_24862393')) {function content_5b34ad85e96734_24862393($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
 type="text/javascript" data-no-defer>

    <?php if ($_smarty_tpl->tpl_vars['redirect_url']->value) {?>
        var url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
';
        opener.location.href = url.replace(/\&amp;/g,'&');
    <?php } else { ?>
        opener.location.reload();
    <?php }?>

    close();

<?php echo '</script'; ?>
><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/views/auth/login_error.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/views/auth/login_error.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
 type="text/javascript" data-no-defer>

    <?php if ($_smarty_tpl->tpl_vars['redirect_url']->value) {?>
        var url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
';
        opener.location.href = url.replace(/\&amp;/g,'&');
    <?php } else { ?>
        opener.location.reload();
    <?php }?>

    close();

<?php echo '</script'; ?>
><?php }?><?php }} ?>
