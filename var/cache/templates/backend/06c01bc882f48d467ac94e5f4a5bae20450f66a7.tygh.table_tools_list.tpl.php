<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 11:39:16
         compiled from "/var/www/html/itumm.com/design/backend/templates/common/table_tools_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6458138115b35cd0cf27007-11752307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06c01bc882f48d467ac94e5f4a5bae20450f66a7' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/common/table_tools_list.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6458138115b35cd0cf27007-11752307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'popup' => 0,
    'skip_check_permissions' => 0,
    'href' => 0,
    'id' => 0,
    'text' => 0,
    'link_text' => 0,
    'act' => 0,
    'link_class' => 0,
    '_href' => 0,
    'link_extra' => 0,
    'extra_class' => 0,
    'tools_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b35cd0cf36807_96658393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b35cd0cf36807_96658393')) {function content_5b35cd0cf36807_96658393($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('view','edit'));
?>
<?php if ($_smarty_tpl->tpl_vars['popup']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['skip_check_permissions']->value||fn_check_view_permissions($_smarty_tpl->tpl_vars['href']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value,'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'act'=>$_smarty_tpl->tpl_vars['act']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'link_class'=>$_smarty_tpl->tpl_vars['link_class']->value), 0);?>

    <?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['href']->value) {?>
<?php $_smarty_tpl->tpl_vars["_href"] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['href']->value), null, 0);?>
<?php if (!fn_check_view_permissions($_smarty_tpl->tpl_vars['_href']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['act']->value=="link") {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_href']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php echo $_smarty_tpl->tpl_vars['link_extra']->value;?>
 class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 cm-tooltip"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_text']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a>
<?php } else { ?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_href']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php echo $_smarty_tpl->tpl_vars['link_extra']->value;?>
 class="icon-edit <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 cm-tooltip" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['link_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("edit") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"></a>
<?php }?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['skip_check_permissions']->value||fn_check_view_permissions($_smarty_tpl->tpl_vars['tools_list']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['tools_list']->value;?>

<?php }?><?php }} ?>
