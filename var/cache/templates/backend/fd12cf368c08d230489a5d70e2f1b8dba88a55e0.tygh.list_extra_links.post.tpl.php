<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 15:10:14
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/sd_affiliate/hooks/profiles/list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6137505635b34acfeb54ba5-53091123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd12cf368c08d230489a5d70e2f1b8dba88a55e0' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/sd_affiliate/hooks/profiles/list_extra_links.post.tpl',
      1 => 1494628794,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6137505635b34acfeb54ba5-53091123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34acfeb584a1_75576780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34acfeb584a1_75576780')) {function content_5b34acfeb584a1_75576780($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('view_all_orders'));
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="P") {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("orders.manage?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("view_all_orders");?>
</a></li>
<?php }?><?php }} ?>
