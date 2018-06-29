<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:36:14
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/paypal_adaptive/hooks/companies/list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19725904805b337db6ad26b8-18013081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '461c191bad698e8a2051f919c8959d5647875845' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/paypal_adaptive/hooks/companies/list_extra_td.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19725904805b337db6ad26b8-18013081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337db6ad5654_94061794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337db6ad5654_94061794')) {function content_5b337db6ad5654_94061794($_smarty_tpl) {?><td class="row-status <?php if ($_smarty_tpl->tpl_vars['company']->value['paypal_verification']=='verified') {?>text-success<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['paypal_verification']=='not_verified') {?>text-error<?php }?>"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['company']->value['paypal_verification']);?>
</td><?php }} ?>
