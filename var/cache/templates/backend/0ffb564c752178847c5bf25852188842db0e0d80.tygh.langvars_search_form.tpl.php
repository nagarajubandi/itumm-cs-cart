<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 11:39:17
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/languages/components/langvars_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3295569545b35cd0d012db6-87397003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ffb564c752178847c5bf25852188842db0e0d80' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/languages/components/langvars_search_form.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3295569545b35cd0d012db6-87397003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b35cd0d01c8f9_33682568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b35cd0d01c8f9_33682568')) {function content_5b35cd0d01c8f9_33682568($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','search_for_pattern'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" name="langvars_search_form" method="get">

<div class="sidebar-field">
	<label><?php echo $_smarty_tpl->__("search_for_pattern");?>
</label>
	<input type="text" name="q" size="20" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'ISO-8859-1');?>
" class="search-input-text" />
</div>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.translations]"), 0);?>

</form>

</div><?php }} ?>
