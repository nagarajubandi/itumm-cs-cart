<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:59:27
         compiled from "/var/www/html/itumm.com/design/backend/templates/common/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11569371535b337517e5ca01-09370399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66d459ba6eeb8abee1d61b557763f0f987e2405e' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/common/status.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11569371535b337517e5ca01-09370399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_status_descr' => 0,
    'status_type' => 0,
    'display' => 0,
    'status' => 0,
    'name' => 0,
    'select_id' => 0,
    'columns' => 0,
    '_html_checkboxes' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337517e6abb7_65004763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337517e6abb7_65004763')) {function content_5b337517e6abb7_65004763($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_checkboxes')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php';
?><?php if (!$_smarty_tpl->tpl_vars['order_status_descr']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['status_type']->value) {
$_smarty_tpl->tpl_vars["status_type"] = new Smarty_variable(@constant('STATUSES_ORDER'), null, 0);
}?>
    <?php $_smarty_tpl->tpl_vars["order_status_descr"] = new Smarty_variable(fn_get_simple_statuses($_smarty_tpl->tpl_vars['status_type']->value), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display']->value=="view") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status_descr']->value[$_smarty_tpl->tpl_vars['status']->value], ENT_QUOTES, 'ISO-8859-1');
} elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {
echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'id'=>$_smarty_tpl->tpl_vars['select_id']->value),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['display']->value=="checkboxes") {
echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'columns'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? 4 : $tmp),'assign'=>'_html_checkboxes','labels'=>false),$_smarty_tpl);
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_html_checkboxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><label><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</label><?php }
}?>
<?php }} ?>
