<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:16:45
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/product_variations/common/selected_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9167620995b337925d1d385-20437075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5657580da452430013c761389e6bfcf878c80b77' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/product_variations/common/selected_options.tpl',
      1 => 1525450682,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9167620995b337925d1d385-20437075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'option_id' => 0,
    'option_value' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337925d2c818_76344056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337925d2c818_76344056')) {function content_5b337925d2c818_76344056($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['for_variations_list']) {?>
    <?php  $_smarty_tpl->tpl_vars['option_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_value']->_loop = false;
 $_smarty_tpl->tpl_vars['option_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['selected_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_value']->key => $_smarty_tpl->tpl_vars['option_value']->value) {
$_smarty_tpl->tpl_vars['option_value']->_loop = true;
 $_smarty_tpl->tpl_vars['option_id']->value = $_smarty_tpl->tpl_vars['option_value']->key;
?>
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
    <?php } ?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/common/selected_options.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/common/selected_options.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['for_variations_list']) {?>
    <?php  $_smarty_tpl->tpl_vars['option_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_value']->_loop = false;
 $_smarty_tpl->tpl_vars['option_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['selected_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_value']->key => $_smarty_tpl->tpl_vars['option_value']->value) {
$_smarty_tpl->tpl_vars['option_value']->_loop = true;
 $_smarty_tpl->tpl_vars['option_id']->value = $_smarty_tpl->tpl_vars['option_value']->key;
?>
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
    <?php } ?>
<?php }
}?><?php }} ?>
