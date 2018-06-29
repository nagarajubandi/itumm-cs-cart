<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:21
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_vendor_products_database/hooks/products/add_to_cart.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1653506815b3372414a1e67-30435850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f7f541e8640ea7942caabcd7079cf206b6a646d' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_vendor_products_database/hooks/products/add_to_cart.override.tpl',
      1 => 1529300111,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1653506815b3372414a1e67-30435850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'show_product_options' => 0,
    'details_page' => 0,
    'but_role' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'opt_but_role' => 0,
    'extra_button' => 0,
    'addons' => 0,
    'but_text' => 0,
    'block_width' => 0,
    'add_to_cart_meta' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372414d8db9_66006680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372414d8db9_66006680')) {function content_5b3372414d8db9_66006680($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('select_options','addons.sd_vendor_products_database.visit_dealer','add_to_cart','select_options','addons.sd_vendor_products_database.visit_dealer','add_to_cart'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><!--overrided in addon sd_vendor_products_database-->

    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_name]" value="<?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['product']->value['company_id']), ENT_QUOTES, 'ISO-8859-1');?>
" />
 
    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_options']&&!$_smarty_tpl->tpl_vars['show_product_options']->value&&!$_smarty_tpl->tpl_vars['details_page']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['but_role']->value=="text") {?>
            <?php $_smarty_tpl->tpl_vars['opt_but_role'] = new Smarty_variable("text", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['opt_but_role'] = new Smarty_variable("action", null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_text'=>$_smarty_tpl->__("select_options"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>$_smarty_tpl->tpl_vars['opt_but_role']->value,'but_name'=>'','but_meta'=>"ty-btn__primary ty-btn__big"), 0);?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['extra_button']->value) {
echo $_smarty_tpl->tpl_vars['extra_button']->value;?>
&nbsp;<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['status']=='A'&&$_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['main_store_mode']=='catalog') {?>
                <?php $_smarty_tpl->tpl_vars["but_text"] = new Smarty_variable($_smarty_tpl->__("addons.sd_vendor_products_database.visit_dealer"), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["but_text"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") : $tmp), null, 0);?>
            <?php }?>
 
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."]",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'block_width'=>$_smarty_tpl->tpl_vars['block_width']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_meta'=>$_smarty_tpl->tpl_vars['add_to_cart_meta']->value,'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value), 0);?>


        <?php $_smarty_tpl->tpl_vars["cart_button_exists"] = new Smarty_variable(true, null, 0);?>
    <?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_vendor_products_database/hooks/products/add_to_cart.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_vendor_products_database/hooks/products/add_to_cart.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><!--overrided in addon sd_vendor_products_database-->

    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_name]" value="<?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['product']->value['company_id']), ENT_QUOTES, 'ISO-8859-1');?>
" />
 
    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_options']&&!$_smarty_tpl->tpl_vars['show_product_options']->value&&!$_smarty_tpl->tpl_vars['details_page']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['but_role']->value=="text") {?>
            <?php $_smarty_tpl->tpl_vars['opt_but_role'] = new Smarty_variable("text", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['opt_but_role'] = new Smarty_variable("action", null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_text'=>$_smarty_tpl->__("select_options"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>$_smarty_tpl->tpl_vars['opt_but_role']->value,'but_name'=>'','but_meta'=>"ty-btn__primary ty-btn__big"), 0);?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['extra_button']->value) {
echo $_smarty_tpl->tpl_vars['extra_button']->value;?>
&nbsp;<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['status']=='A'&&$_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['main_store_mode']=='catalog') {?>
                <?php $_smarty_tpl->tpl_vars["but_text"] = new Smarty_variable($_smarty_tpl->__("addons.sd_vendor_products_database.visit_dealer"), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["but_text"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_cart") : $tmp), null, 0);?>
            <?php }?>
 
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."]",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'block_width'=>$_smarty_tpl->tpl_vars['block_width']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_meta'=>$_smarty_tpl->tpl_vars['add_to_cart_meta']->value,'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value), 0);?>


        <?php $_smarty_tpl->tpl_vars["cart_button_exists"] = new Smarty_variable(true, null, 0);?>
    <?php }?>

<?php }?><?php }} ?>
