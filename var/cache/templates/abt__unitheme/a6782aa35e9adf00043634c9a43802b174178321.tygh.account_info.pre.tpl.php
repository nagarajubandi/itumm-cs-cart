<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:09:32
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_affiliate/hooks/profiles/account_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14174935035b337774629fa0-60623598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6782aa35e9adf00043634c9a43802b174178321' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_affiliate/hooks/profiles/account_info.pre.tpl',
      1 => 1494630714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14174935035b337774629fa0-60623598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'user_data' => 0,
    'u_type' => 0,
    '_but' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337774653435_04123303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337774653435_04123303')) {function content_5b337774653435_04123303($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('account_type','customer','affiliate','register','save','affiliate_agree_to_terms_conditions','account_type','customer','affiliate','register','save','affiliate_agree_to_terms_conditions'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!fn_check_user_type_admin_area($_smarty_tpl->tpl_vars['user_data']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["u_type"] = new Smarty_variable((($tmp = @$_REQUEST['user_type'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value['user_type'] : $tmp), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']!='checkout') {?>
        <div class="ty-control-group">
            <label for="user_type" class="ty-control-group__title"><?php echo $_smarty_tpl->__("account_type");?>
</label>
            <select id="user_type" name="user_data[user_type]" onchange="Tygh.$.redirect('<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])."?user_type="), ENT_QUOTES, 'ISO-8859-1');?>
' + this.value);">
                <option value="C" <?php if ($_smarty_tpl->tpl_vars['u_type']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("customer");?>
</option>
                <option value="P" <?php if ($_smarty_tpl->tpl_vars['u_type']->value=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("affiliate");?>
</option>
            </select>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['u_type']->value=="P"&&$_smarty_tpl->tpl_vars['u_type']->value!=$_smarty_tpl->tpl_vars['user_data']->value['user_type']) {?>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="add") {
$_smarty_tpl->tpl_vars["_but"] = new Smarty_variable($_smarty_tpl->__("register"), null, 0);
} else {
$_smarty_tpl->tpl_vars["_but"] = new Smarty_variable($_smarty_tpl->__("save"), null, 0);
}?>
        <div><p id="id_affiliate_agree_notification"><?php echo $_smarty_tpl->__("affiliate_agree_to_terms_conditions",array("[button_name]"=>$_smarty_tpl->tpl_vars['_but']->value));?>
</p></div>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_affiliate/hooks/profiles/account_info.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_affiliate/hooks/profiles/account_info.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!fn_check_user_type_admin_area($_smarty_tpl->tpl_vars['user_data']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["u_type"] = new Smarty_variable((($tmp = @$_REQUEST['user_type'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value['user_type'] : $tmp), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']!='checkout') {?>
        <div class="ty-control-group">
            <label for="user_type" class="ty-control-group__title"><?php echo $_smarty_tpl->__("account_type");?>
</label>
            <select id="user_type" name="user_data[user_type]" onchange="Tygh.$.redirect('<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])."?user_type="), ENT_QUOTES, 'ISO-8859-1');?>
' + this.value);">
                <option value="C" <?php if ($_smarty_tpl->tpl_vars['u_type']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("customer");?>
</option>
                <option value="P" <?php if ($_smarty_tpl->tpl_vars['u_type']->value=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("affiliate");?>
</option>
            </select>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['u_type']->value=="P"&&$_smarty_tpl->tpl_vars['u_type']->value!=$_smarty_tpl->tpl_vars['user_data']->value['user_type']) {?>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="add") {
$_smarty_tpl->tpl_vars["_but"] = new Smarty_variable($_smarty_tpl->__("register"), null, 0);
} else {
$_smarty_tpl->tpl_vars["_but"] = new Smarty_variable($_smarty_tpl->__("save"), null, 0);
}?>
        <div><p id="id_affiliate_agree_notification"><?php echo $_smarty_tpl->__("affiliate_agree_to_terms_conditions",array("[button_name]"=>$_smarty_tpl->tpl_vars['_but']->value));?>
</p></div>
    <?php }?>
<?php }
}?><?php }} ?>
