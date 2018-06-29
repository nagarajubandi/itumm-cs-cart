<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:53:09
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/ab__landing_categories/hooks/categories/view.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5933231995b33739d846c48-50882668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e7d81dc132c7e8a6fe05f3ff9893e4a3fb7fa30' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/ab__landing_categories/hooks/categories/view.override.tpl',
      1 => 1525365894,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5933231995b33739d846c48-50882668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ab__lc_landing_categories' => 0,
    'category_data' => 0,
    'settings' => 0,
    'item1' => 0,
    'item2' => 0,
    'show_max_item' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33739d89f401_60708542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33739d89f401_60708542')) {function content_5b33739d89f401_60708542($_smarty_tpl) {?><?php if (!is_callable('smarty_function_live_edit')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('ab__lc.landing_category.show_more','ab__lc.landing_category.show_more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!empty($_smarty_tpl->tpl_vars['ab__lc_landing_categories']->value)) {
echo $_smarty_tpl->getSubTemplate ("common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
$_smarty_tpl->_capture_stack[0][] = array("title", null, null); ob_start(); ?><span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php if (trim($_smarty_tpl->tpl_vars['category_data']->value['ab__custom_category_h1'])) {
echo htmlspecialchars(trim($_smarty_tpl->tpl_vars['category_data']->value['ab__custom_category_h1']), ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(trim($_smarty_tpl->tpl_vars['category_data']->value['category']), ENT_QUOTES, 'ISO-8859-1');
}?></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->tpl_vars['show_max_item'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['ab__lc_subsubcategories'])===null||$tmp==='' ? 0 : $tmp), null, 0);?><div class="row-fluid <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']=="5") {?>v-col<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']=="4") {?>f-col<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']=="3") {?>t-col<?php }?>"><?php  $_smarty_tpl->tpl_vars["item1"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item1"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__lc_landing_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item1"]->key => $_smarty_tpl->tpl_vars["item1"]->value) {
$_smarty_tpl->tpl_vars["item1"]->_loop = true;
if ($_smarty_tpl->tpl_vars['item1']->value['param_id']) {?><div class="ab-lc-landing"><div class="head"><div class="image"><?php if ($_smarty_tpl->tpl_vars['item1']->value['main_pair']) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['item1']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['item1']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height']), 0);?>
</a><?php }?></div><div class="cat-title"><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['item1']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['item'], ENT_QUOTES, 'ISO-8859-1');?>
</a></div></div><?php if (intval($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_subsubcategories'])>0&&!empty($_smarty_tpl->tpl_vars['item1']->value['subitems'])) {?><ul class="items-level-2"><?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value['subitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['iteration']++;
if ($_smarty_tpl->tpl_vars['item2']->value['param_id']) {
if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['iteration']>$_smarty_tpl->tpl_vars['show_max_item']->value) {
break 1;
}?><li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['item'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li><?php }
} ?></ul><?php if (count($_smarty_tpl->tpl_vars['item1']->value['subitems'])>$_smarty_tpl->tpl_vars['show_max_item']->value) {?><ul class="hidden-items-level-2"><?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value['subitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['iteration']++;
if ($_smarty_tpl->tpl_vars['item2']->value['param_id']) {
if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['iteration']<=$_smarty_tpl->tpl_vars['show_max_item']->value) {
continue 1;
}?><li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['item'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li><?php }
} ?></ul><span class="show-hidden-items-level-2"><?php echo $_smarty_tpl->__("ab__lc.landing_category.show_more");?>
</span><?php }
}?></div><?php }
}
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__multiple_cat_descriptions:category_description")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__multiple_cat_descriptions:category_description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['category_data']->value['description']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?><div class="ab-category-description ty-wysiwyg-content ty-mt-l" <?php echo smarty_function_live_edit(array('name'=>"category:description:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__multiple_cat_descriptions:category_description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div><?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__landing_categories/hooks/categories/view.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__landing_categories/hooks/categories/view.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!empty($_smarty_tpl->tpl_vars['ab__lc_landing_categories']->value)) {
echo $_smarty_tpl->getSubTemplate ("common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
$_smarty_tpl->_capture_stack[0][] = array("title", null, null); ob_start(); ?><span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php if (trim($_smarty_tpl->tpl_vars['category_data']->value['ab__custom_category_h1'])) {
echo htmlspecialchars(trim($_smarty_tpl->tpl_vars['category_data']->value['ab__custom_category_h1']), ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(trim($_smarty_tpl->tpl_vars['category_data']->value['category']), ENT_QUOTES, 'ISO-8859-1');
}?></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->tpl_vars['show_max_item'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['ab__lc_subsubcategories'])===null||$tmp==='' ? 0 : $tmp), null, 0);?><div class="row-fluid <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']=="5") {?>v-col<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']=="4") {?>f-col<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']=="3") {?>t-col<?php }?>"><?php  $_smarty_tpl->tpl_vars["item1"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item1"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__lc_landing_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item1"]->key => $_smarty_tpl->tpl_vars["item1"]->value) {
$_smarty_tpl->tpl_vars["item1"]->_loop = true;
if ($_smarty_tpl->tpl_vars['item1']->value['param_id']) {?><div class="ab-lc-landing"><div class="head"><div class="image"><?php if ($_smarty_tpl->tpl_vars['item1']->value['main_pair']) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['item1']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['item1']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height']), 0);?>
</a><?php }?></div><div class="cat-title"><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['item1']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['item'], ENT_QUOTES, 'ISO-8859-1');?>
</a></div></div><?php if (intval($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_subsubcategories'])>0&&!empty($_smarty_tpl->tpl_vars['item1']->value['subitems'])) {?><ul class="items-level-2"><?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value['subitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['iteration']++;
if ($_smarty_tpl->tpl_vars['item2']->value['param_id']) {
if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['iteration']>$_smarty_tpl->tpl_vars['show_max_item']->value) {
break 1;
}?><li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['item'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li><?php }
} ?></ul><?php if (count($_smarty_tpl->tpl_vars['item1']->value['subitems'])>$_smarty_tpl->tpl_vars['show_max_item']->value) {?><ul class="hidden-items-level-2"><?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value['subitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item2"]['iteration']++;
if ($_smarty_tpl->tpl_vars['item2']->value['param_id']) {
if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item2']['iteration']<=$_smarty_tpl->tpl_vars['show_max_item']->value) {
continue 1;
}?><li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['item2']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['item'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li><?php }
} ?></ul><span class="show-hidden-items-level-2"><?php echo $_smarty_tpl->__("ab__lc.landing_category.show_more");?>
</span><?php }
}?></div><?php }
}
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__multiple_cat_descriptions:category_description")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__multiple_cat_descriptions:category_description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['category_data']->value['description']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?><div class="ab-category-description ty-wysiwyg-content ty-mt-l" <?php echo smarty_function_live_edit(array('name'=>"category:description:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__multiple_cat_descriptions:category_description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div><?php }
}?><?php }} ?>
