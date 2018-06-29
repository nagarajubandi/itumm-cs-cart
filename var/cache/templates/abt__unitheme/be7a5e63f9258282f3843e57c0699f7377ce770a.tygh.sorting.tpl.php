<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:53:09
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/products/components/sorting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13560823325b33739d9fc5c3-95962704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be7a5e63f9258282f3843e57c0699f7377ce770a' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/products/components/sorting.tpl',
      1 => 1525364906,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13560823325b33739d9fc5c3-95962704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'id' => 0,
    'settings' => 0,
    'search' => 0,
    'sorting' => 0,
    'ab__ut_full_width' => 0,
    'ab__ut_hidden_filter' => 0,
    'avail_sorting' => 0,
    'category_data' => 0,
    'hide_layouts' => 0,
    'layouts' => 0,
    'layout' => 0,
    'item' => 0,
    'selected_layout' => 0,
    'ajax_class' => 0,
    'pagination_id' => 0,
    'curl' => 0,
    'sort_order' => 0,
    'pagination' => 0,
    'product_steps' => 0,
    'step' => 0,
    'range_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33739da652d4_37664144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33739da652d4_37664144')) {function content_5b33739da652d4_37664144($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('full_width','hidden_filters','per_page','per_page','full_width','hidden_filters','per_page','per_page'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-sort-container">

    <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
        <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars["curl"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids","layout"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["sorting"] = new Smarty_variable(fn_get_products_sorting(''), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["sorting_orders"] = new Smarty_variable(fn_get_products_sorting_orders(''), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,false), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["pagination_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["avail_sorting"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['available_product_list_sortings'], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev']=="asc") {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("sorting_text", null, null); ob_start(); ?>
            <a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'ISO-8859-1');?>
<i class="ty-icon-up-dir"></i></a>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php } else { ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("sorting_text", null, null); ob_start(); ?>
            <a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'ISO-8859-1');?>
<i class="ty-icon-down-dir"></i></a>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>

    <?php if ($_REQUEST['dispatch']=='categories.view') {?>
        <div class="width-tools ty-float-left">
            <div class="fullwidth-cat <?php if ($_smarty_tpl->tpl_vars['ab__ut_full_width']->value) {?>active<?php }?>"><a href="javascript:void(0)" class="cm-tooltip" title="<?php echo $_smarty_tpl->__("full_width");?>
" rel="nofollow"><i class="uni-width"></i></a></div>
            <div class="hiddenFilter <?php if ($_smarty_tpl->tpl_vars['ab__ut_hidden_filter']->value) {?>active<?php }?>"><a href="javascript:void(0)" class="cm-tooltip" title="<?php echo $_smarty_tpl->__("hidden_filters");?>
"  rel="nofollow"><i class="uni-filter-empty"></i></a></div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['avail_sorting']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!((count($_smarty_tpl->tpl_vars['category_data']->value['selected_views'])==1)||(count($_smarty_tpl->tpl_vars['category_data']->value['selected_views'])==0&&count(fn_get_products_views('',true))<=1))&&!$_smarty_tpl->tpl_vars['hide_layouts']->value) {?>
        <div class="ty-sort-container__views-icons">

            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["layout"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['layouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["layout"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                <?php if (($_smarty_tpl->tpl_vars['category_data']->value['selected_views'][$_smarty_tpl->tpl_vars['layout']->value])||(!$_smarty_tpl->tpl_vars['category_data']->value['selected_views']&&$_smarty_tpl->tpl_vars['item']->value['active'])) {?>
                    <?php if ($_smarty_tpl->tpl_vars['layout']->value==$_smarty_tpl->tpl_vars['selected_layout']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['sort_order'] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['sort_order'] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['sort_order'], null, 0);?>
                    <?php }?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__so_seohide:layout_link")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__so_seohide:layout_link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a class="ty-sort-container__views-a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['layout']->value==$_smarty_tpl->tpl_vars['selected_layout']->value) {?>active<?php }?>" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)."&layout=".((string)$_smarty_tpl->tpl_vars['layout']->value)), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">
                            <i class="ty-icon-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['layout']->value,"_","-"), ENT_QUOTES, 'ISO-8859-1');?>
"></i>
                        </a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__so_seohide:layout_link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php }?>
            <?php } ?>
        </div>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars["pagination"] = new Smarty_variable(fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_items']) {?>
        <?php $_smarty_tpl->tpl_vars["range_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"items_per_page","page"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["product_steps"] = new Smarty_variable(fn_get_product_pagination_steps($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['products_per_page']), null, 0);?>
        <div class="ty-sort-dropdown">
            <a id="sw_elm_pagination_steps" class="ty-sort-dropdown__wrapper cm-combination"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['items_per_page'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__("per_page");?>
<i class="ty-sort-dropdown__icon ty-icon-down-micro"></i></a>
            <ul id="elm_pagination_steps" class="ty-sort-dropdown__content cm-popup-box hidden">
                <?php  $_smarty_tpl->tpl_vars["step"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["step"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["step"]->key => $_smarty_tpl->tpl_vars["step"]->value) {
$_smarty_tpl->tpl_vars["step"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['step']->value!=$_smarty_tpl->tpl_vars['pagination']->value['items_per_page']) {?>
                        <li class="ty-sort-dropdown__content-item">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__so_seohide:items_per_page_link")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__so_seohide:items_per_page_link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 ty-sort-dropdown__content-item-a" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['range_url']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['step']->value)), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['step']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__("per_page");?>
</a>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__so_seohide:items_per_page_link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </li>
                    <?php }?>
                <?php } ?>
            </ul>
        </div>
    <?php }?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/sorting.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/sorting.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-sort-container">

    <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
        <?php $_smarty_tpl->tpl_vars["ajax_class"] = new Smarty_variable("cm-ajax", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars["curl"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids","layout"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["sorting"] = new Smarty_variable(fn_get_products_sorting(''), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["sorting_orders"] = new Smarty_variable(fn_get_products_sorting_orders(''), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,false), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["pagination_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["avail_sorting"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['available_product_list_sortings'], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev']=="asc") {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("sorting_text", null, null); ob_start(); ?>
            <a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'ISO-8859-1');?>
<i class="ty-icon-up-dir"></i></a>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php } else { ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("sorting_text", null, null); ob_start(); ?>
            <a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'ISO-8859-1');?>
<i class="ty-icon-down-dir"></i></a>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>

    <?php if ($_REQUEST['dispatch']=='categories.view') {?>
        <div class="width-tools ty-float-left">
            <div class="fullwidth-cat <?php if ($_smarty_tpl->tpl_vars['ab__ut_full_width']->value) {?>active<?php }?>"><a href="javascript:void(0)" class="cm-tooltip" title="<?php echo $_smarty_tpl->__("full_width");?>
" rel="nofollow"><i class="uni-width"></i></a></div>
            <div class="hiddenFilter <?php if ($_smarty_tpl->tpl_vars['ab__ut_hidden_filter']->value) {?>active<?php }?>"><a href="javascript:void(0)" class="cm-tooltip" title="<?php echo $_smarty_tpl->__("hidden_filters");?>
"  rel="nofollow"><i class="uni-filter-empty"></i></a></div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['avail_sorting']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php if (!((count($_smarty_tpl->tpl_vars['category_data']->value['selected_views'])==1)||(count($_smarty_tpl->tpl_vars['category_data']->value['selected_views'])==0&&count(fn_get_products_views('',true))<=1))&&!$_smarty_tpl->tpl_vars['hide_layouts']->value) {?>
        <div class="ty-sort-container__views-icons">

            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["layout"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['layouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["layout"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                <?php if (($_smarty_tpl->tpl_vars['category_data']->value['selected_views'][$_smarty_tpl->tpl_vars['layout']->value])||(!$_smarty_tpl->tpl_vars['category_data']->value['selected_views']&&$_smarty_tpl->tpl_vars['item']->value['active'])) {?>
                    <?php if ($_smarty_tpl->tpl_vars['layout']->value==$_smarty_tpl->tpl_vars['selected_layout']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['sort_order'] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['sort_order'] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['sort_order'], null, 0);?>
                    <?php }?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__so_seohide:layout_link")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__so_seohide:layout_link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a class="ty-sort-container__views-a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['layout']->value==$_smarty_tpl->tpl_vars['selected_layout']->value) {?>active<?php }?>" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)."&layout=".((string)$_smarty_tpl->tpl_vars['layout']->value)), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">
                            <i class="ty-icon-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['layout']->value,"_","-"), ENT_QUOTES, 'ISO-8859-1');?>
"></i>
                        </a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__so_seohide:layout_link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php }?>
            <?php } ?>
        </div>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars["pagination"] = new Smarty_variable(fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_items']) {?>
        <?php $_smarty_tpl->tpl_vars["range_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"items_per_page","page"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["product_steps"] = new Smarty_variable(fn_get_product_pagination_steps($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['products_per_page']), null, 0);?>
        <div class="ty-sort-dropdown">
            <a id="sw_elm_pagination_steps" class="ty-sort-dropdown__wrapper cm-combination"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['items_per_page'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__("per_page");?>
<i class="ty-sort-dropdown__icon ty-icon-down-micro"></i></a>
            <ul id="elm_pagination_steps" class="ty-sort-dropdown__content cm-popup-box hidden">
                <?php  $_smarty_tpl->tpl_vars["step"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["step"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["step"]->key => $_smarty_tpl->tpl_vars["step"]->value) {
$_smarty_tpl->tpl_vars["step"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['step']->value!=$_smarty_tpl->tpl_vars['pagination']->value['items_per_page']) {?>
                        <li class="ty-sort-dropdown__content-item">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__so_seohide:items_per_page_link")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__so_seohide:items_per_page_link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 ty-sort-dropdown__content-item-a" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['range_url']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['step']->value)), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['step']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__("per_page");?>
</a>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__so_seohide:items_per_page_link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </li>
                    <?php }?>
                <?php } ?>
            </ul>
        </div>
    <?php }?>
</div><?php }?><?php }} ?>
