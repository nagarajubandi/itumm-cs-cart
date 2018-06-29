<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:16:17
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/companies/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3397890195b337909116e39-50860401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f864ca4dc8aa12dc7244620506327cca024aabe7' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/companies/products.tpl',
      1 => 1529503553,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3397890195b337909116e39-50860401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_data' => 0,
    'block' => 0,
    'products' => 0,
    'search' => 0,
    'settings' => 0,
    'selected_layout' => 0,
    'layouts' => 0,
    'product_columns' => 0,
    'subcategories' => 0,
    '_title' => 0,
    'title_extra' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3379091485c5_42073442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3379091485c5_42073442')) {function content_5b3379091485c5_42073442($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('vendor_products','products_found','text_no_matching_products_found','vendor_products','products_found','text_no_matching_products_found'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["_title"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['category'])===null||$tmp==='' ? $_smarty_tpl->__("vendor_products") : $tmp), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="products_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
">

    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("products_found");
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title_extra"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['product_columns'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value,'show_qty'=>true), 0);?>

        <?php }?>
    <?php } elseif (!$_smarty_tpl->tpl_vars['subcategories']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_results_no_matching_found")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_products_found");?>
</p>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['subcategories']->value||$_smarty_tpl->tpl_vars['category_data']->value['description']||$_smarty_tpl->tpl_vars['category_data']->value['main_pair']) {?>
		<div class="ab-category-description ty-wysiwyg-content ty-mb-l"><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
    <?php }?>
    
<!--products_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_results_mainbox_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-mainbox-title__left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_title']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span><span class="ty-mainbox-title__right" id="products_search_total_found_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>
<!--products_search_total_found_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["_title"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['category'])===null||$tmp==='' ? $_smarty_tpl->__("vendor_products") : $tmp), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="products_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
">

    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("products_found");
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title_extra"] = new Smarty_variable($_tmp2.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['product_columns'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value,'show_qty'=>true), 0);?>

        <?php }?>
    <?php } elseif (!$_smarty_tpl->tpl_vars['subcategories']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_results_no_matching_found")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_products_found");?>
</p>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['subcategories']->value||$_smarty_tpl->tpl_vars['category_data']->value['description']||$_smarty_tpl->tpl_vars['category_data']->value['main_pair']) {?>
		<div class="ab-category-description ty-wysiwyg-content ty-mb-l"><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
    <?php }?>
    
<!--products_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:search_results_mainbox_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-mainbox-title__left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_title']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span><span class="ty-mainbox-title__right" id="products_search_total_found_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>
<!--products_search_total_found_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
