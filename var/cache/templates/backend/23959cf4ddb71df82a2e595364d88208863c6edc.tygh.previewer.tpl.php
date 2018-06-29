<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:52:36
         compiled from "/var/www/html/itumm.com/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9279385195b33737c9baca5-03643378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23959cf4ddb71df82a2e595364d88208863c6edc' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/common/previewer.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9279385195b33737c9baca5-03643378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33737c9bc6f5_22051634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33737c9bc6f5_22051634')) {function content_5b33737c9bc6f5_22051634($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
