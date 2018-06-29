<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:36
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/paypal_adaptive/overrides/views/companies/components/product_company_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3472537065b337250ab7a86-35594498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fd1ed019c5085497f560f431deec39f3796c796' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/paypal_adaptive/overrides/views/companies/components/product_company_data.tpl',
      1 => 1523981500,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3472537065b337250ab7a86-35594498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_name' => 0,
    'company_id' => 0,
    'settings' => 0,
    'capture_options_vs_qty' => 0,
    'product' => 0,
    'object_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337250adc3e7_74983500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337250adc3e7_74983500')) {function content_5b337250adc3e7_74983500($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('vendor','vendor'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['company_name']->value||$_smarty_tpl->tpl_vars['company_id']->value)&&$_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor']=="Y") {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'])&&$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']=='verified') {?>paypal-adaptive-vendor-name-text<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'ISO-8859-1');
}?></a></span>
        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair'])) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['width'],'image_height'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['height'],'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair']), 0);?>

        <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'])&&$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']=='verified') {?>
            <span class="ty-control-group__item"><?php echo $_smarty_tpl->__('verified_by_paypal');?>
</span>
        <?php }?>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/html/itumm.com/design/themes/responsive/templates/addons/paypal_adaptive/overrides/views/companies/components/product_company_data.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/var/www/html/itumm.com/design/themes/responsive/templates/addons/paypal_adaptive/overrides/views/companies/components/product_company_data.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['company_name']->value||$_smarty_tpl->tpl_vars['company_id']->value)&&$_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor']=="Y") {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'])&&$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']=='verified') {?>paypal-adaptive-vendor-name-text<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'ISO-8859-1');
}?></a></span>
        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair'])) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['width'],'image_height'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['height'],'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair']), 0);?>

        <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'])&&$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']=='verified') {?>
            <span class="ty-control-group__item"><?php echo $_smarty_tpl->__('verified_by_paypal');?>
</span>
        <?php }?>
    </div>
<?php }?>
<?php }?><?php }} ?>
