<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:41:30
         compiled from "/var/www/html/itumm.com/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3796643505b337ef29f27e0-07991187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6752cbc0ad185a843f3731824b48216df1e5b4ae' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/common/sidebox.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3796643505b337ef29f27e0-07991187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337ef29f7790_00380212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337ef29f7790_00380212')) {function content_5b337ef29f7790_00380212($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
