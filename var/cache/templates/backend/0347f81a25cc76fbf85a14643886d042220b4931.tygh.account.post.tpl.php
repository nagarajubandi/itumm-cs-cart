<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 15:24:45
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/sd_affiliate/hooks/profiles/account.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6307886195b34b0659b09e4-07796211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0347f81a25cc76fbf85a14643886d042220b4931' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/sd_affiliate/hooks/profiles/account.post.tpl',
      1 => 1494628796,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6307886195b34b0659b09e4-07796211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_u_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34b0659b3001_90412892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34b0659b3001_90412892')) {function content_5b34b0659b3001_90412892($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('affiliate'));
?>
<option value="P" <?php if ($_smarty_tpl->tpl_vars['_u_type']->value=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("affiliate");?>
</option><?php }} ?>
