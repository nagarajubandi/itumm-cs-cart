<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:34:57
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/rma/hooks/orders/details_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3382237225b337d692aa183-12904250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1471994e34b222b942633b0a0a1c98f31c48da4e' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/rma/hooks/orders/details_tools.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3382237225b337d692aa183-12904250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337d692b1417_48692652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337d692b1417_48692652')) {function content_5b337d692b1417_48692652($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('return_registration','order_returns'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['allow_return']) {?>
    <li><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("return_registration"),'but_href'=>"rma.create_return?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_role'=>"tool"), 0);?>
</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['isset_returns']) {?>
    <li><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("order_returns"),'but_href'=>"rma.returns?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_role'=>"tool"), 0);?>
</li>
<?php }?><?php }} ?>
