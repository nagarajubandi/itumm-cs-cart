<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:57:45
         compiled from "/var/www/html/itumm.com/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11544394815b3374b1aadf81-25514127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66ac7d3428884926f87e0ef244b11feef73b6723' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/common/tooltip.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11544394815b3374b1aadf81-25514127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3374b1ab2522_21573091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3374b1ab2522_21573091')) {function content_5b3374b1ab2522_21573091($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'ISO-8859-1');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
