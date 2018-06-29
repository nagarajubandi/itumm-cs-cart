<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:53:09
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11262019725b33739d8ae509-76614101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e683ddd9c82dd53e842fbe200c2bba28ebfe8490' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl',
      1 => 1525365856,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11262019725b33739d8ae509-76614101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33739d8c8310_37456783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33739d8c8310_37456783')) {function content_5b33739d8c8310_37456783($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("products_grid_html", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_button_buy_in_product_lists']['value']=='Y') {?>
        <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_short_desc_in_multicolumns_list']['value']=='Y') {?>
        <?php $_smarty_tpl->tpl_vars["show_descr"] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_trunc_name'=>true,'show_rating'=>true,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_clean_price'=>true,'show_list_buttons'=>false,'but_role'=>"action",'show_product_amount'=>false,'show_discount_label'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_REQUEST['ab__cb_banner_exists']) {?>
    <?php echo htmlspecialchars(fn_ab__cb_insert_category_banner(Smarty::$_smarty_vars['capture']['products_grid_html']), ENT_QUOTES, 'ISO-8859-1');?>

<?php }?>

<?php echo Smarty::$_smarty_vars['capture']['products_grid_html'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("products_grid_html", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_button_buy_in_product_lists']['value']=='Y') {?>
        <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_short_desc_in_multicolumns_list']['value']=='Y') {?>
        <?php $_smarty_tpl->tpl_vars["show_descr"] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_trunc_name'=>true,'show_rating'=>true,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_clean_price'=>true,'show_list_buttons'=>false,'but_role'=>"action",'show_product_amount'=>false,'show_discount_label'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_REQUEST['ab__cb_banner_exists']) {?>
    <?php echo htmlspecialchars(fn_ab__cb_insert_category_banner(Smarty::$_smarty_vars['capture']['products_grid_html']), ENT_QUOTES, 'ISO-8859-1');?>

<?php }?>

<?php echo Smarty::$_smarty_vars['capture']['products_grid_html'];
}?><?php }} ?>
