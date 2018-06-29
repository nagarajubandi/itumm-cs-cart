<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:25
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/hw_modern_backend/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20979325035b337245106f91-49850379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b262de525a09379b2734d669e88f14b12905592' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/hw_modern_backend/hooks/index/styles.post.tpl',
      1 => 1505869340,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20979325035b337245106f91-49850379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hwmb_store_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372451097f9_70215675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372451097f9_70215675')) {function content_5b3372451097f9_70215675($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.style.php';
?><?php echo smarty_function_style(array('src'=>"addons/hw_modern_backend/icons.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/hw_modern_backend/styles-".((string)$_smarty_tpl->tpl_vars['hwmb_store_id']->value).".css"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/hw_modern_backend/settings.less"),$_smarty_tpl);?>
<?php }} ?>
