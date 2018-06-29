<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 17:38:51
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/products/quick_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18636530395b34cfd3142182-99821961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ce97eb4d90fd98ff735f8b429aaabaa6946a5f5' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/products/quick_view.tpl',
      1 => 1529676879,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18636530395b34cfd3142182-99821961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'obj_prefix' => 0,
    'product' => 0,
    'obj_id' => 0,
    'settings' => 0,
    'form_open' => 0,
    'no_images' => 0,
    'thumbnail_width' => 0,
    'thumbnail_height' => 0,
    'discount_label' => 0,
    'product_detail_view_url' => 0,
    'hide_title' => 0,
    'old_price' => 0,
    'clean_price' => 0,
    'list_discount' => 0,
    'price' => 0,
    'capture_options_vs_qty' => 0,
    'product_options' => 0,
    'advanced_options' => 0,
    'product_amount' => 0,
    'qty' => 0,
    'min_qty' => 0,
    'product_edp' => 0,
    'capture_buttons' => 0,
    'add_to_cart' => 0,
    'list_buttons' => 0,
    'prod_descr' => 0,
    'sku' => 0,
    'form_close' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34cfd32180e5_17066064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34cfd32180e5_17066064')) {function content_5b34cfd32180e5_17066064($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_live_edit')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('add_to_cart','add_to_cart'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-quick-view__wrapper">
    <?php $_smarty_tpl->tpl_vars["quick_view"] = new Smarty_variable("true", null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_hide_form", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_options_vs_qty", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_buttons", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_no_ajax", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj_prefix']->value)===null||$tmp==='' ? "ajax" : $tmp), null, 0);?>
    <div class="ty-product-block" id="product_main_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <div class="ty-product-block__wrapper clearfix">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:view_main_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>

            <div class="ty-quick-view-tools">
                <?php echo $_smarty_tpl->getSubTemplate ("common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_view'=>true), 0);?>

            </div>

            <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_prefix'=>$_smarty_tpl->tpl_vars['obj_prefix']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart"),'add_to_cart_meta'=>"cm-form-dialog-closer",'show_sku'=>true,'show_rating'=>false,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_clean_price'=>true,'details_page'=>true,'show_discount_label'=>true,'show_product_amount'=>true,'show_product_options'=>true,'hide_form'=>Smarty::$_smarty_vars['capture']['val_hide_form'],'min_qty'=>true,'show_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>false,'capture_buttons'=>Smarty::$_smarty_vars['capture']['val_capture_buttons'],'capture_options_vs_qty'=>Smarty::$_smarty_vars['capture']['val_capture_options_vs_qty'],'separate_buttons'=>true,'block_width'=>true,'no_ajax'=>Smarty::$_smarty_vars['capture']['val_no_ajax'],'show_descr'=>true,'quick_view'=>true), 0);?>


            <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["product_detail_view_url"] = new Smarty_variable("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>

            <?php $_smarty_tpl->tpl_vars['thumbnail_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['thumbnail_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height'], null, 0);?>

            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:quick_view_image_wrap")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                <div class="ty-product-block__img cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" style="width:<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_height']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_width']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px;" id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_update">
                    <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>


                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>true,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height']), 0);?>

                    <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_update--></div>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <div class="ty-product-block__left">

                <?php $_smarty_tpl->_capture_stack[0][] = array("product_detail_view_url", null, null); ob_start(); ?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_view_url")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_detail_view_url']->value, ENT_QUOTES, 'ISO-8859-1');?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php $_smarty_tpl->tpl_vars['product_detail_view_url'] = new Smarty_variable(trim(Smarty::$_smarty_vars['capture']['product_detail_view_url']), null, 0);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:quick_view_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:quick_view_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                    <h1 class="ty-product-block-title">
                        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['product_detail_view_url']->value), ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-quick-view__title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></a>
                    </h1>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:quick_view_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap clearfix">
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                    <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap clearfix">
                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                        <div class="ty-float-left ty-product-prices">
                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
                            <?php }?>

                            <div class="ty-product-block__price-actual">
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                            </div>

                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                        </div>
                        <?php }?>
                    </div>

                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value])) {?>
                        <div class="ty-float-left">
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>

                        </div>
                    <?php }?>

                </div>

                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                <div class="ty-product-block__option">
                    <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

                </div>

                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                <div class="ty-product-block__advanced-option clearfix">
                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                    <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                <div class="ty-product-block__field-group">
                    <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                    <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>


                    <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>


                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start();
}?>
                <div class="ty-product-block__button">
                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


                    <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                <div class="ty-product-block__note">
                    <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                </div>

                <?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value])) {?>
                    <div class="ty-product-block__description"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</div>
                <?php }?>

                <div class="ty-product-features">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

                </div>
            </div>
        </div>
        <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

        <?php }?>

        <?php if (Smarty::$_smarty_vars['capture']['hide_form_changed']=="Y") {?>
            <?php $_smarty_tpl->tpl_vars["hide_form"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['orig_val_hide_form'], null, 0);?>
        <?php }?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:view_main_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <!--product_main_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/quick_view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/quick_view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-quick-view__wrapper">
    <?php $_smarty_tpl->tpl_vars["quick_view"] = new Smarty_variable("true", null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_hide_form", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_options_vs_qty", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_buttons", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_no_ajax", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj_prefix']->value)===null||$tmp==='' ? "ajax" : $tmp), null, 0);?>
    <div class="ty-product-block" id="product_main_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <div class="ty-product-block__wrapper clearfix">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:view_main_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>

            <div class="ty-quick-view-tools">
                <?php echo $_smarty_tpl->getSubTemplate ("common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_view'=>true), 0);?>

            </div>

            <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_prefix'=>$_smarty_tpl->tpl_vars['obj_prefix']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart"),'add_to_cart_meta'=>"cm-form-dialog-closer",'show_sku'=>true,'show_rating'=>false,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_clean_price'=>true,'details_page'=>true,'show_discount_label'=>true,'show_product_amount'=>true,'show_product_options'=>true,'hide_form'=>Smarty::$_smarty_vars['capture']['val_hide_form'],'min_qty'=>true,'show_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>false,'capture_buttons'=>Smarty::$_smarty_vars['capture']['val_capture_buttons'],'capture_options_vs_qty'=>Smarty::$_smarty_vars['capture']['val_capture_options_vs_qty'],'separate_buttons'=>true,'block_width'=>true,'no_ajax'=>Smarty::$_smarty_vars['capture']['val_no_ajax'],'show_descr'=>true,'quick_view'=>true), 0);?>


            <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["product_detail_view_url"] = new Smarty_variable("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>

            <?php $_smarty_tpl->tpl_vars['thumbnail_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['thumbnail_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height'], null, 0);?>

            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:quick_view_image_wrap")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                <div class="ty-product-block__img cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" style="width:<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_height']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_width']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px;" id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_update">
                    <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>


                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>true,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height']), 0);?>

                    <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_update--></div>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <div class="ty-product-block__left">

                <?php $_smarty_tpl->_capture_stack[0][] = array("product_detail_view_url", null, null); ob_start(); ?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_view_url")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_detail_view_url']->value, ENT_QUOTES, 'ISO-8859-1');?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php $_smarty_tpl->tpl_vars['product_detail_view_url'] = new Smarty_variable(trim(Smarty::$_smarty_vars['capture']['product_detail_view_url']), null, 0);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:quick_view_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:quick_view_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                    <h1 class="ty-product-block-title">
                        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['product_detail_view_url']->value), ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-quick-view__title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></a>
                    </h1>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:quick_view_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap clearfix">
                    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                    <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap clearfix">
                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                        <div class="ty-float-left ty-product-prices">
                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
                            <?php }?>

                            <div class="ty-product-block__price-actual">
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                            </div>

                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                        </div>
                        <?php }?>
                    </div>

                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value])) {?>
                        <div class="ty-float-left">
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>

                        </div>
                    <?php }?>

                </div>

                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                <div class="ty-product-block__option">
                    <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

                </div>

                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                <div class="ty-product-block__advanced-option clearfix">
                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                    <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                <div class="ty-product-block__field-group">
                    <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                    <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>


                    <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>


                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start();
}?>
                <div class="ty-product-block__button">
                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


                    <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                <div class="ty-product-block__note">
                    <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                </div>

                <?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value])) {?>
                    <div class="ty-product-block__description"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</div>
                <?php }?>

                <div class="ty-product-features">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

                </div>
            </div>
        </div>
        <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

        <?php }?>

        <?php if (Smarty::$_smarty_vars['capture']['hide_form_changed']=="Y") {?>
            <?php $_smarty_tpl->tpl_vars["hide_form"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['orig_val_hide_form'], null, 0);?>
        <?php }?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:view_main_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <!--product_main_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
</div><?php }?><?php }} ?>
