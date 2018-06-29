<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:26
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/csc_live_search/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17734356995b33724657b6c0-24759521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c76af57d9a04a9d3db201555a203084aec2c675' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/csc_live_search/hooks/index/scripts.post.tpl',
      1 => 1525435417,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17734356995b33724657b6c0-24759521',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33724657d115_04598694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33724657d115_04598694')) {function content_5b33724657d115_04598694($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.inline_script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript" >
(function(_, $){
    $.ceEvent('on', 'ce.commoninit', function(context) {
		$('input[id^="addon_option_csc_live_search_clr"]').ceColorpicker();
	});
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
