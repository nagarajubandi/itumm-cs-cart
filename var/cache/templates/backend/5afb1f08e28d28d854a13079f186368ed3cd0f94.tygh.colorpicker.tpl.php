<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 12:09:41
         compiled from "/var/www/html/itumm.com/design/backend/templates/common/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14299947735b35d42d109a01-91544700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5afb1f08e28d28d854a13079f186368ed3cd0f94' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/common/colorpicker.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14299947735b35d42d109a01-91544700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp_name' => 0,
    'cp_id' => 0,
    'cp_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b35d42d10b9b8_39518916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b35d42d10b9b8_39518916')) {function content_5b35d42d10b9b8_39518916($_smarty_tpl) {?><div class="colorpicker">
    <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-view="palette" class="cm-colorpicker">
</div><?php }} ?>
