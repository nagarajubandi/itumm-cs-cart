<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:34:56
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/rma/hooks/orders/totals_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15757295785b337d68c20162-94969389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c688a53196fa546e7818248e9d8f1f16e6ff6362' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/rma/hooks/orders/totals_content.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15757295785b337d68c20162-94969389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337d68c23810_26648586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337d68c23810_26648586')) {function content_5b337d68c23810_26648586($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('rma_return'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['return']) {?>
    <li>
        <em><?php echo $_smarty_tpl->__("rma_return");?>
:&nbsp;</em>
        <span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['return']), 0);?>
</span>
    </li>
<?php }?><?php }} ?>
