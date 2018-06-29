<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:34:56
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/product_variations/hooks/orders/items_list_row.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6736585435b337d68a7f384-28728723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b66b66de0ff48c90cfa09422abc8f13c7455426' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/product_variations/hooks/orders/items_list_row.pre.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6736585435b337d68a7f384-28728723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337d68a83232_73616351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337d68a83232_73616351')) {function content_5b337d68a83232_73616351($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['variation_product_id']) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('oi', null, 1);
$_smarty_tpl->tpl_vars['oi']->value['product_id'] = $_smarty_tpl->tpl_vars['oi']->value['extra']['variation_product_id'];
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['oi'] = clone $_smarty_tpl->tpl_vars['oi'];?>
<?php }?><?php }} ?>
