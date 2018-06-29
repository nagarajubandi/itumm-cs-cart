<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:21:07
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/product_variations/blocks/products/variations_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16423519215b337a2bb99944-77124276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fe243a6733ec36093f3d1e1c6008386ac135ca7' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/product_variations/blocks/products/variations_list.tpl',
      1 => 1525450682,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16423519215b337a2bb99944-77124276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'block' => 0,
    'items' => 0,
    '_show_add_to_wishlist' => 0,
    '_show_add_to_cart' => 0,
    'settings' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'obj_id' => 0,
    'list_buttons' => 0,
    'show_variations' => 0,
    'products' => 0,
    'show_sku' => 0,
    'first_product' => 0,
    'po' => 0,
    'show_product_amount' => 0,
    'obj_prefix' => 0,
    'obj_id_prefix' => 0,
    'sku' => 0,
    'product_amount' => 0,
    'config' => 0,
    'old_price' => 0,
    'price' => 0,
    'clean_price' => 0,
    'add_to_cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337a2bc2e5d9_52089935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337a2bc2e5d9_52089935')) {function content_5b337a2bc2e5d9_52089935($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('sku','availability','sku','availability'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_cart'] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_cart'] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.hide_add_to_wishlist_button"]=="Y") {?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_wishlist'] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_wishlist'] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['items']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_add_to_wishlist'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['_show_add_to_wishlist']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_sku'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_price'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_add_to_cart'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['_show_add_to_cart']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_role'] = new Smarty_variable("action", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['hide_form'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_product_amount'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["hide_stock_info"] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_out_of_stock'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_amount_label'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_variations'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_sku_label'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? 40 : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? 40 : $tmp), null, 0);?>

    <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>



    <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
        <?php $_smarty_tpl->tpl_vars["first_product"] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

        <div class="ty-variations-list__wrapper">
        <table class="ty-variations-list ty-table">
            <?php $_smarty_tpl->tpl_vars['prods'] = new Smarty_variable(false, null, 0);?>
            <thead>
                <tr>
                    <th class="ty-variations-list__title ty-left">&nbsp;</th>
                    <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                        <th class="ty-variations-list__title ty-left"><?php echo $_smarty_tpl->__("sku");?>
</th>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
                        <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['first_product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
?>
                            <th class="ty-variations-list__title ty-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'ISO-8859-1');?>
</th>
                        <?php } ?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>
                        <th class="ty-variations-list__title ty-right"><?php echo $_smarty_tpl->__("availability");?>
</th>
                    <?php }?>
                    <th class="ty-variations-list__title ty-left">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
                    <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['obj_id_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_variations_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_variations_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <tr class="ty-variations-list__item">
                            <td class="ty-variations-list__product-elem ty-variations-list__image">
                                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['variation_product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0);?>

                                </a>
                            </td>
                            
                            <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>                            
                                <td class="ty-variations-list__product-elem ty-variations-list__product-elem-options ty-variations-list__sku">
                                    <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['variation_product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">
                                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

                                    </a>
                                </td>
                            <?php }?>

                            <?php if (!Smarty::$_smarty_vars['capture']['capt_options_vs_qty']&&$_smarty_tpl->tpl_vars['show_variations']->value) {?>
                                <?php $_smarty_tpl->tpl_vars['product_options'] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'show_options_title'=>false,'no_block'=>true), 0);?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>                            
                                <td class="ty-variations-list__product-elem ty-variations-list__product-elem-options">
                                    <?php $_smarty_tpl->tpl_vars['product_amount'] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>

                                </td>
                            <?php }?>
                            
                            <td class="ty-variations-list__product-elem ty-variations-list__controls">
                                <form 
                                    <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
                                        class="cm-ajax cm-ajax-full-render"
                                    <?php }?>
                                    action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="variations_list_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                                    
                                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*" />
                                    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

                                    <div class="ty-variations-list__price">
                                        <?php $_smarty_tpl->tpl_vars['old_price'] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?>
                                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>

                                        <?php }?>

                                        <?php $_smarty_tpl->tpl_vars['price'] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>


                                        <?php $_smarty_tpl->tpl_vars['clean_price'] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                                    </div>
                                    
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"variations_list:list_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->tpl_vars['add_to_cart'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </form>                                    
                            </td>
                        </tr>                
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_variations_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php } ?>
            </tbody>
        </table>
        </div>
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/blocks/products/variations_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/blocks/products/variations_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_cart'] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_cart'] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.hide_add_to_wishlist_button"]=="Y") {?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_wishlist'] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_wishlist'] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['items']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_add_to_wishlist'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['_show_add_to_wishlist']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_sku'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_price'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_add_to_cart'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['_show_add_to_cart']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_role'] = new Smarty_variable("action", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['hide_form'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_product_amount'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["hide_stock_info"] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_out_of_stock'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_amount_label'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_variations'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_sku_label'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? 40 : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? 40 : $tmp), null, 0);?>

    <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>



    <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
        <?php $_smarty_tpl->tpl_vars["first_product"] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

        <div class="ty-variations-list__wrapper">
        <table class="ty-variations-list ty-table">
            <?php $_smarty_tpl->tpl_vars['prods'] = new Smarty_variable(false, null, 0);?>
            <thead>
                <tr>
                    <th class="ty-variations-list__title ty-left">&nbsp;</th>
                    <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                        <th class="ty-variations-list__title ty-left"><?php echo $_smarty_tpl->__("sku");?>
</th>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
                        <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['first_product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
?>
                            <th class="ty-variations-list__title ty-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'ISO-8859-1');?>
</th>
                        <?php } ?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>
                        <th class="ty-variations-list__title ty-right"><?php echo $_smarty_tpl->__("availability");?>
</th>
                    <?php }?>
                    <th class="ty-variations-list__title ty-left">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
                    <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['obj_id_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_variations_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_variations_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <tr class="ty-variations-list__item">
                            <td class="ty-variations-list__product-elem ty-variations-list__image">
                                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['variation_product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0);?>

                                </a>
                            </td>
                            
                            <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>                            
                                <td class="ty-variations-list__product-elem ty-variations-list__product-elem-options ty-variations-list__sku">
                                    <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['variation_product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">
                                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

                                    </a>
                                </td>
                            <?php }?>

                            <?php if (!Smarty::$_smarty_vars['capture']['capt_options_vs_qty']&&$_smarty_tpl->tpl_vars['show_variations']->value) {?>
                                <?php $_smarty_tpl->tpl_vars['product_options'] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'show_options_title'=>false,'no_block'=>true), 0);?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>                            
                                <td class="ty-variations-list__product-elem ty-variations-list__product-elem-options">
                                    <?php $_smarty_tpl->tpl_vars['product_amount'] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>

                                </td>
                            <?php }?>
                            
                            <td class="ty-variations-list__product-elem ty-variations-list__controls">
                                <form 
                                    <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
                                        class="cm-ajax cm-ajax-full-render"
                                    <?php }?>
                                    action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="variations_list_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                                    
                                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*" />
                                    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

                                    <div class="ty-variations-list__price">
                                        <?php $_smarty_tpl->tpl_vars['old_price'] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {?>
                                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>

                                        <?php }?>

                                        <?php $_smarty_tpl->tpl_vars['price'] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>


                                        <?php $_smarty_tpl->tpl_vars['clean_price'] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                                    </div>
                                    
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"variations_list:list_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->tpl_vars['add_to_cart'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </form>                                    
                            </td>
                        </tr>                
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_variations_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php } ?>
            </tbody>
        </table>
        </div>
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
