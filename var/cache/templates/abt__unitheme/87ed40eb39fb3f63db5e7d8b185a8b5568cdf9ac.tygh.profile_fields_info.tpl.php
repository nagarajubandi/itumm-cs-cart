<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:18:32
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/views/profiles/components/profile_fields_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20280495455b337990892753-00353970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87ed40eb39fb3f63db5e7d8b185a8b5568cdf9ac' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/views/profiles/components/profile_fields_info.tpl',
      1 => 1501124180,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20280495455b337990892753-00353970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'fields' => 0,
    'user_data' => 0,
    'field' => 0,
    'value' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3379908a71e1_20640367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3379908a71e1_20640367')) {function content_5b3379908a71e1_20640367($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['user_data']->value,$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
        <div class="ty-info-field <?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['field_name'],"_","-"), ENT_QUOTES, 'ISO-8859-1');?>
">
            <?php if ($_smarty_tpl->tpl_vars['field']->value['is_default']=="N") {?>
                <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
:</label>
            <?php }?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>

        </div>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/components/profile_fields_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/profiles/components/profile_fields_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['user_data']->value,$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
        <div class="ty-info-field <?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['field_name'],"_","-"), ENT_QUOTES, 'ISO-8859-1');?>
">
            <?php if ($_smarty_tpl->tpl_vars['field']->value['is_default']=="N") {?>
                <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
:</label>
            <?php }?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>

        </div>
    <?php }?>
<?php }
}?><?php }} ?>
