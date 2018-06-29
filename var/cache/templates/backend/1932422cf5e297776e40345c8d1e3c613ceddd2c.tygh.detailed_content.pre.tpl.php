<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 19:54:11
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/ab__landing_categories/hooks/categories/detailed_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18679876995b34ef8bd492d5-95119425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1932422cf5e297776e40345c8d1e3c613ceddd2c' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/ab__landing_categories/hooks/categories/detailed_content.pre.tpl',
      1 => 1525365894,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18679876995b34ef8bd492d5-95119425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_data' => 0,
    'id' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34ef8bd8f239_07780767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34ef8bd8f239_07780767')) {function content_5b34ef8bd8f239_07780767($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('ab__lc_catalog','ab__lc.catalog.image_control','ttc_ab__lc.catalog.image_control','ab__lc.catalog.image_control.none','ab__lc.catalog.image_control.top','ab__lc.catalog.image_control.left','ab__lc.catalog.icon','ttc_ab__lc.catalog.icon','ab__lc_landing_category','ab__lc.landing_category.landing','ttc_ab__lc.landing_category.landing','ab__lc.landing_category.subsubcategories','ttc_ab__lc.landing_category.subsubcategories','ab__lc.control_subcategory_structure','ab__lc.control_subcategory_structure.menu_id','ttc_ab__lc.control_subcategory_structure.menu_id','ab__lc.control_subcategory_structure.how_to_use_menu','ab__lc.control_subcategory_structure.inherit_control','ttc_ab__lc.control_subcategory_structure.inherit_control'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__lc_catalog"),'target'=>"#ab__lc_catalog"), 0);?>

<div id="ab__lc_catalog" class="in collapse">
<div class="control-group">
<label class="control-label" for="ab__lc_catalog_image_control"><?php echo $_smarty_tpl->__("ab__lc.catalog.image_control");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_ab__lc.catalog.image_control")), 0);?>
:</label>
<div class="controls">
<select name="category_data[ab__lc_catalog_image_control]" id="ab__lc_catalog_image_control" class="input-large">
<option <?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_catalog_image_control']=='none') {?>selected="selected"<?php }?> value="none"><?php echo $_smarty_tpl->__("ab__lc.catalog.image_control.none");?>
</option>
<option <?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_catalog_image_control']=='top') {?>selected="selected"<?php }?> value="top"><?php echo $_smarty_tpl->__("ab__lc.catalog.image_control.top");?>
</option>
<option <?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_catalog_image_control']=='left') {?>selected="selected"<?php }?> value="left"><?php echo $_smarty_tpl->__("ab__lc.catalog.image_control.left");?>
</option>
</select>
</div>
</div>

<div class="control-group">
<label class="control-label"><?php echo $_smarty_tpl->__("ab__lc.catalog.icon");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_ab__lc.catalog.icon")), 0);?>
:</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"ab__lc_catalog_icon",'image_object_type'=>"ab__lc_catalog_icon",'image_key'=>$_smarty_tpl->tpl_vars['id']->value,'hide_titles'=>true,'no_detailed'=>true,'hide_alt'=>true,'image_pair'=>$_smarty_tpl->tpl_vars['category_data']->value['ab__lc_catalog_icon']), 0);?>

</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__lc_landing_category"),'target'=>"#ab__lc_landing_category"), 0);?>

<div id="ab__lc_landing_category" class="in collapse">
<div class="control-group">
<label class="control-label" for="ab__lc_landing"><?php echo $_smarty_tpl->__("ab__lc.landing_category.landing");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_ab__lc.landing_category.landing")), 0);?>
:</label>
<div class="controls">
<input type="hidden" value="N" name="category_data[ab__lc_landing]">
<input type="checkbox" value="Y" id="ab__lc_landing" name="category_data[ab__lc_landing]" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_landing']=='Y') {?>checked="checked"<?php }?>>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__lc_subsubcategories"><?php echo $_smarty_tpl->__("ab__lc.landing_category.subsubcategories");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_ab__lc.landing_category.subsubcategories")), 0);?>
:</label>
<div class="controls">
<input type="text" name="category_data[ab__lc_subsubcategories]" id="ab__lc_subsubcategories" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['ab__lc_subsubcategories'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" class="input-text-short" />
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__lc.control_subcategory_structure"),'target'=>"#ab__lc_control_subcategory_structure"), 0);?>

<div id="ab__lc_control_subcategory_structure" class="in collapse">
<div class="control-group">
<label class="control-label" for="ab__lc_menu_id"><?php echo $_smarty_tpl->__("ab__lc.control_subcategory_structure.menu_id");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_ab__lc.control_subcategory_structure.menu_id")), 0);?>
:</label>
<div class="controls">
<input type="text" name="category_data[ab__lc_menu_id]" id="ab__lc_menu_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['ab__lc_menu_id'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" class="input-text-short cm-trim" />
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['ab__lc_menu_id'])===null||$tmp==='' ? 0 : $tmp)==0) {?>
<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
<?php echo $_smarty_tpl->__('ab__lc.control_subcategory_structure.add_menu.info.multiplestore');?>

<?php } else { ?>
<?php ob_start();
echo $_smarty_tpl->__('ab__lc.control_subcategory_structure.add_menu');
$_tmp1=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__('ab__lc.control_subcategory_structure.add_menu.info');
$_tmp2=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(fn_url("categories.add__ab__lc_menu&category_id=".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])), ENT_QUOTES, 'ISO-8859-1');
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_tmp1,'title'=>$_tmp2,'class'=>"cm-tooltip btn",'href'=>$_tmp3));?>

<?php }?>
<?php } else { ?>
<a target="_blank" href="<?php echo htmlspecialchars(fn_url("static_data.manage&section=A&menu_id=".((string)$_smarty_tpl->tpl_vars['category_data']->value['ab__lc_menu_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__('manage_items');?>
: <?php echo htmlspecialchars(fn_ab__lc_get_menu_name($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_menu_id']), ENT_QUOTES, 'ISO-8859-1');?>
</a>
<?php }?>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__lc_how_to_use_menu"><?php echo $_smarty_tpl->__("ab__lc.control_subcategory_structure.how_to_use_menu");?>
:</label>
<div class="controls">
<select name="category_data[ab__lc_how_to_use_menu]" id="ab__lc_how_to_use_menu" class="input-large">
<option value="N"<?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_how_to_use_menu']=='N') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__('ab__lc.control_subcategory_structure.how_to_use_menu.not_to_use');?>
</option>
<option value="P"<?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_how_to_use_menu']=='P') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__('ab__lc.control_subcategory_structure.how_to_use_menu.prepend');?>
</option>
<option value="A"<?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_how_to_use_menu']=='A') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__('ab__lc.control_subcategory_structure.how_to_use_menu.append');?>
</option>
<option value="R"<?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_how_to_use_menu']=='R') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__('ab__lc.control_subcategory_structure.how_to_use_menu.replace');?>
</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__lc_control_subcategory_structure_inherit_control"><?php echo $_smarty_tpl->__("ab__lc.control_subcategory_structure.inherit_control");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_ab__lc.control_subcategory_structure.inherit_control")), 0);?>
:</label>
<div class="controls">
<input type="hidden" value="N" name="category_data[ab__lc_inherit_control]">
<input type="checkbox" value="Y" id="ab__lc_control_subcategory_structure_inherit_control" name="category_data[ab__lc_inherit_control]" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__lc_inherit_control']=='Y') {?>checked="checked"<?php }?>>
</div>
</div>
</div>
<?php }} ?>
