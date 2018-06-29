<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:34:56
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/sd_affiliate/hooks/orders/payment_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16324921525b337d68d58d29-07764350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7641e66221bbecf966a2ec254a8d59610f586d8' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/sd_affiliate/hooks/orders/payment_info.pre.tpl',
      1 => 1494628792,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16324921525b337d68d58d29-07764350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'comm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337d68d63026_79718211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337d68d63026_79718211')) {function content_5b337d68d63026_79718211($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('affiliate_commissions'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['affiliate']['commissions']) {?>
    <fieldset>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("affiliate_commissions")), 0);?>

        <table class="table">
        <?php  $_smarty_tpl->tpl_vars['comm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['affiliate']['commissions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comm']->key => $_smarty_tpl->tpl_vars['comm']->value) {
$_smarty_tpl->tpl_vars['comm']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['comm']->value['action_id']) {?>
        <tr>
            <td><a href="<?php echo htmlspecialchars(fn_url("aff_statistics.view?action_id=".((string)$_smarty_tpl->tpl_vars['comm']->value['action_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comm']->value['action_id'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comm']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
</a></td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comm']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comm']->value['lastname'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['comm']->value['amount']), 0);?>
</td>
        </tr>
        <?php }?>
        <?php } ?>
        </table>
    </fieldset>
<?php }?><?php }} ?>
