<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:20
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_affiliate/hooks/profiles/my_account_menu.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9044552215b3372403515f5-95051030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac56562f4ab9aceadc91be891113cab9cc4535e' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_affiliate/hooks/profiles/my_account_menu.post.tpl',
      1 => 1494630714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9044552215b3372403515f5-95051030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'approved' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337240364467_70130042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337240364467_70130042')) {function content_5b337240364467_70130042($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('affiliates_partnership','affiliates_partnership'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']=="P") {?>
    <?php $_smarty_tpl->tpl_vars["approved"] = new Smarty_variable(fn_sd_affiliate_get_affiliate($_smarty_tpl->tpl_vars['auth']->value['user_id']), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['approved']->value) {?>
        <li class="ty-account-info__item ty-dropdown-box__item"><a href="<?php echo htmlspecialchars(fn_url("affiliate_plans.list"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" class="ty-account-info__a underlined"><?php echo $_smarty_tpl->__("affiliates_partnership");?>
</a></li>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_affiliate/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_affiliate/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']=="P") {?>
    <?php $_smarty_tpl->tpl_vars["approved"] = new Smarty_variable(fn_sd_affiliate_get_affiliate($_smarty_tpl->tpl_vars['auth']->value['user_id']), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['approved']->value) {?>
        <li class="ty-account-info__item ty-dropdown-box__item"><a href="<?php echo htmlspecialchars(fn_url("affiliate_plans.list"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" class="ty-account-info__a underlined"><?php echo $_smarty_tpl->__("affiliates_partnership");?>
</a></li>
    <?php }?>
<?php }
}?><?php }} ?>
