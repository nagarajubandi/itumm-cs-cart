<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 19:54:11
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/ab__search_motivation/hooks/categories/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13311660375b34ef8bda80e4-10603203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce63d2e375adada6ca82965e8d466e50c2150b3b' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/ab__search_motivation/hooks/categories/detailed_content.post.tpl',
      1 => 1525365936,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13311660375b34ef8bda80e4-10603203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34ef8bdb3e25_40666219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ef8bdb3e25_40666219')) {function content_5b34ef8bdb3e25_40666219($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('ab__search_motivation','ab__search_motivation.search_phrases','ttc_ab__search_motivation.search_phrases'));
?>
<?php if (fn_check_view_permissions("ab__search_motivation.view","GET")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__search_motivation"),'target'=>"#ab__search_phrases"), 0);?>

<fieldset>
<div id="ab__search_phrases" class="in collapse <?php if (!fn_check_view_permissions("ab__search_motivation.update","POST")) {?>cm-hide-inputs<?php }?>">
<div class="control-group">
<label class="control-label" for="elm_category_search_phrases"><?php echo $_smarty_tpl->__("ab__search_motivation.search_phrases");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_ab__search_motivation.search_phrases")), 0);?>
:</label>
<div class="controls">
<textarea name="category_data[search_phrases]" id="elm_category_search_phrases" cols="55" rows="4" class="input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['search_phrases'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
</div>
</div>
</div>
</fieldset>
<?php }?><?php }} ?>
