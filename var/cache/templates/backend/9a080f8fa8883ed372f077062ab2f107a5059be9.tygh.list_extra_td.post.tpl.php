<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:36:14
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1140811475b337db6acf9d3-20064369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a080f8fa8883ed372f077062ab2f107a5059be9' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1140811475b337db6acf9d3-20064369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337db6ad1014_99157783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337db6ad1014_99157783')) {function content_5b337db6ad1014_99157783($_smarty_tpl) {?><td class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['plan'], ENT_QUOTES, 'ISO-8859-1');?>
</td><?php }} ?>
