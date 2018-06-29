<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:18:32
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/rma/hooks/orders/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16047899225b337990a74509-26493928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e843d14a7c65c275dab304b6a587f0660262196c' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/rma/hooks/orders/product_info.post.tpl',
      1 => 1501124192,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16047899225b337990a74509-26493928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'return_statuses' => 0,
    'key' => 0,
    'status' => 0,
    'amount' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337990a930a1_88006715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337990a930a1_88006715')) {function content_5b337990a930a1_88006715($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('expand_sublist_of_items','collapse_sublist_of_items','returns_info','items','expand_sublist_of_items','collapse_sublist_of_items','returns_info','items'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['returns_info']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['return_statuses']->value) {
$_smarty_tpl->tpl_vars["return_statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_RETURN')), null, 0);
}?>
        <div class="ty-mtb-xs"><a class="cm-combination combination-link" id="sw_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><i title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-icon-right-dir ty-dir-list"></i><i title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-icon-down-dir ty-dir-list hidden"></i><?php echo $_smarty_tpl->__("returns_info");?>
</a></div>
    <div class="hidden" id="ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php  $_smarty_tpl->tpl_vars["amount"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["amount"]->_loop = false;
 $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['returns_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["amount"]->key => $_smarty_tpl->tpl_vars["amount"]->value) {
$_smarty_tpl->tpl_vars["amount"]->_loop = true;
 $_smarty_tpl->tpl_vars["status"]->value = $_smarty_tpl->tpl_vars["amount"]->key;
?>
            <p><strong><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['return_statuses']->value[$_smarty_tpl->tpl_vars['status']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</strong>:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__("items");?>
</p>
        <?php } ?>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/hooks/orders/product_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/hooks/orders/product_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['returns_info']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['return_statuses']->value) {
$_smarty_tpl->tpl_vars["return_statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_RETURN')), null, 0);
}?>
        <div class="ty-mtb-xs"><a class="cm-combination combination-link" id="sw_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><i title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-icon-right-dir ty-dir-list"></i><i title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-icon-down-dir ty-dir-list hidden"></i><?php echo $_smarty_tpl->__("returns_info");?>
</a></div>
    <div class="hidden" id="ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php  $_smarty_tpl->tpl_vars["amount"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["amount"]->_loop = false;
 $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['returns_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["amount"]->key => $_smarty_tpl->tpl_vars["amount"]->value) {
$_smarty_tpl->tpl_vars["amount"]->_loop = true;
 $_smarty_tpl->tpl_vars["status"]->value = $_smarty_tpl->tpl_vars["amount"]->key;
?>
            <p><strong><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['return_statuses']->value[$_smarty_tpl->tpl_vars['status']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</strong>:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__("items");?>
</p>
        <?php } ?>
    </div>
<?php }?>
<?php }?><?php }} ?>
