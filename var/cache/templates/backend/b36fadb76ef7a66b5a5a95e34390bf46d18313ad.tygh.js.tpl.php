<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:14:14
         compiled from "/var/www/html/itumm.com/design/backend/templates/pickers/orders/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16043065395b33788e1c70e4-24113254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b36fadb76ef7a66b5a5a95e34390bf46d18313ad' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/pickers/orders/js.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16043065395b33788e1c70e4-24113254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_mode' => 0,
    'clone' => 0,
    'holder' => 0,
    'order_id' => 0,
    'hidden' => 0,
    'first_item' => 0,
    'status' => 0,
    'customer' => 0,
    'timestamp' => 0,
    'settings' => 0,
    'total' => 0,
    'view_only' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33788e1e19a4_96520401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33788e1e19a4_96520401')) {function content_5b33788e1e19a4_96520401($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('edit','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="simple") {?>
<span <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone<?php }
if ($_smarty_tpl->tpl_vars['clone']->value||$_smarty_tpl->tpl_vars['hidden']->value) {?> hidden<?php }?>"><?php if (!$_smarty_tpl->tpl_vars['first_item']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">, </span><?php }?>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span>
<?php } else { ?>
<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <td>
        <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
">&nbsp;<span>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span>&nbsp;</a></td>
    <td><?php if ($_smarty_tpl->tpl_vars['clone']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'ISO-8859-1');
} else {
echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['status']->value,'display'=>"view",'name'=>"order_statuses[".((string)$_smarty_tpl->tpl_vars['order_id']->value)."]"), 0);
}?></td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value, ENT_QUOTES, 'ISO-8859-1');?>
</td>
    <td>
        <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
" class="underlined"><?php if ($_smarty_tpl->tpl_vars['clone']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['timestamp']->value, ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['timestamp']->value,((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');
}?></a></td>
    <td class="right">
        <?php if ($_smarty_tpl->tpl_vars['clone']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'ISO-8859-1');
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['total']->value), 0);
}?></td>
    <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
    <td class="nowrap">
        <div class="hidden-tools">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_id']->value)));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['order_id']->value)."', 'o'); return false;"));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    <?php }?>
</tr>
<?php }?>
<?php }} ?>
