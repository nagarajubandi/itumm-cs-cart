<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 18:50:09
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/snippets/components/tools_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20415928605b34e089e561a7-94724352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f7b92766ad1becfaf166b3a60e8f047b2d9a2b1' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/snippets/components/tools_list.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20415928605b34e089e561a7-94724352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'additional_snippet_tools_list_items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34e089e5c185_09365586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34e089e5c185_09365586')) {function content_5b34e089e5c185_09365586($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('delete_selected'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"snippets:update_tools_list_snippets")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"snippets:update_tools_list_snippets"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['additional_snippet_tools_list_items']->value;?>

        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete_selected"),'class'=>"cm-ajax cm-confirm",'dispatch'=>"dispatch[snippets.delete]",'form'=>"snippets_form"));?>
</li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"snippets:update_tools_list_snippets"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"cm-tab-tools hidden",'id'=>"tools_snippets"));?>
<?php }} ?>
