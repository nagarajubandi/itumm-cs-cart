<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:26
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/ecl_tabbed_blocks/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6454119765b3372465868a8-23791188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7994aab52af31d319b0569014f02999316ab5ba7' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/ecl_tabbed_blocks/hooks/index/scripts.post.tpl',
      1 => 1484070556,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6454119765b3372465868a8-23791188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33724658c510_14231611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33724658c510_14231611')) {function content_5b33724658c510_14231611($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.inline_script.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='addons'&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=='manage'&&!Smarty::$_smarty_vars['capture']['ecl_icon']) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript" class="cm-ajax-force">
(function(_, $) {
    $(document).ready(function(){
            $('[id^="addon_ecl_"] .bg-icon').css('background-image', 'url(https://ecom-labs.com/images/ecl_logo.png)').css('background-size', 'cover');
            $('[id^="addon_ecl_"] .bg-icon i').css('display', 'none');
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("ecl_icon", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?><?php }} ?>
