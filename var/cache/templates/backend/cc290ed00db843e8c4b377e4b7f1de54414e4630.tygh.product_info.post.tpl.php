<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:34:56
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/rma/hooks/orders/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8914734765b337d68ae4416-47436107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc290ed00db843e8c4b377e4b7f1de54414e4630' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/rma/hooks/orders/product_info.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8914734765b337d68ae4416-47436107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
    'return_statuses' => 0,
    'key' => 0,
    'status' => 0,
    'amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337d68af1a21_10757847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337d68af1a21_10757847')) {function content_5b337d68af1a21_10757847($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('expand_sublist_of_items','collapse_sublist_of_items','returns_info','status','amount'));
?>
<?php if ($_smarty_tpl->tpl_vars['oi']->value['returns_info']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['return_statuses']->value) {
$_smarty_tpl->tpl_vars["return_statuses"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_RETURN')), null, 0);
}?>

    <p class="shift-top">
        <i title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="hand cm-combination icon-caret-right"></i>
        <i title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="hand hidden cm-combination icon-caret-down"></i>
        <a id="sw_ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination"><?php echo $_smarty_tpl->__("returns_info");?>
</a>
    </p>
    <table width="100%" class="table table-condensed table-no-bg hidden" id="ret_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <thead>
    <tr>
        <th>&nbsp;<?php echo $_smarty_tpl->__("status");?>
</th>
        <th><?php echo $_smarty_tpl->__("amount");?>
</th>
    </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars["amount"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["amount"]->_loop = false;
 $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oi']->value['returns_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["amount"]->key => $_smarty_tpl->tpl_vars["amount"]->value) {
$_smarty_tpl->tpl_vars["amount"]->_loop = true;
 $_smarty_tpl->tpl_vars["status"]->value = $_smarty_tpl->tpl_vars["amount"]->key;
?>
        <tr>
            <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['return_statuses']->value[$_smarty_tpl->tpl_vars['status']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'ISO-8859-1');?>
</td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
<?php }?>
<?php }} ?>
