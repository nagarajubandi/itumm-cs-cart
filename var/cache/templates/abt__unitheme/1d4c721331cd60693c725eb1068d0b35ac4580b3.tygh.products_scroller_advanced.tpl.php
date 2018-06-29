<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:20
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/blocks/products/products_scroller_advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18142370055b337240bbd751-17612485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d4c721331cd60693c725eb1068d0b35ac4580b3' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/blocks/products/products_scroller_advanced.tpl',
      1 => 1525939416,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18142370055b337240bbd751-17612485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'show_add_to_cart' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'form_open' => 0,
    'discount_label' => 0,
    'quick_view' => 0,
    'settings' => 0,
    'quick_nav_ids' => 0,
    'addons' => 0,
    'hide_wishlist_button' => 0,
    'p' => 0,
    'key' => 0,
    'auth' => 0,
    'config' => 0,
    'return_current_url' => 0,
    'is_wishlist_product' => 0,
    'hide_compare_list_button' => 0,
    'rating' => 0,
    'ab_dotd_product_ids' => 0,
    'item_number' => 0,
    'cur_number' => 0,
    'name' => 0,
    'price' => 0,
    'old_price' => 0,
    'clean_price' => 0,
    'list_discount' => 0,
    'capture_options_vs_qty' => 0,
    'product_amount' => 0,
    'add_to_cart' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337240c7cc95_98437131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337240c7cc95_98437131')) {function content_5b337240c7cc95_98437131($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_in_array')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.in_array.php';
if (!is_callable('smarty_function_math')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["show_name"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_old_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_rating"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_clean_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_product_amount"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_list_discount"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_list_buttons"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["but_role"] = new Smarty_variable("action", null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_discount_label"] = new Smarty_variable(true, null, 0);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
<?php $_smarty_tpl->createLocalArrayVariable('block', null, 0);
$_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] = "N";?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
"
     class="jcarousel-skin owl-carousel ty-scroller-list grid-list <?php if (!$_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>no-buttons<?php }?> ty-scroller-advanced">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_scroller_advanced_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="ty-scroller-list__item">
                <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

                    <div class="ty-grid-list__item">
                        <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


                        <div class="ty-grid-list__image">
                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_gallery'=>false), 0);?>


                            <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>


                            <div class="grid-list-buttons">
                                                <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=='Y') {?>
                                                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);?>

                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
                                                    <?php $_smarty_tpl->tpl_vars['is_wishlist_product'] = new Smarty_variable(false, null, 0);?>
                                                    <?php if ($_SESSION['wishlist']['products']) {?>
                                                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_SESSION['wishlist']['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars['p']->key;
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['p']->value['product_id']==$_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
                                                                <?php $_smarty_tpl->tpl_vars['is_wishlist_product'] = new Smarty_variable(true, null, 0);?>
                                                                <?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['cart_id'] = $_smarty_tpl->tpl_vars['key']->value;?>
                                                            <?php }?>
                                                        <?php } ?>
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']==0) {?>
                                                        <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'ISO-8859-1');
}?>" <?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']!="partial") {?> data-ca-target-id="login_block<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__text ty-add-to-wish text-button" title="Sign in"<?php } else { ?> class="ty-btn ty-btn__primary"<?php }?> rel="nofollow">Add to wishlist</a>

                                                        

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['is_wishlist_product']->value) {?>
                                                        <div class="wishlist-remove-item">
                                                            <a href="<?php echo htmlspecialchars(fn_url("wishlist.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['product']->value['cart_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-btn ty-btn__text ty-remove-from-wish text-button" title="<?php echo $_smarty_tpl->__("remove");?>
">Remove from wish list</a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0);?>

                                                    <?php }?>
                                                    
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=="Y"&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']=="Y") {?>
                                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0);?>

                                                <?php }?>
                                            </div>
                                        
                        </div>

                        <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php if (strlen(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value])>40) {?>
                            <div class="grid-list__rating">
                                <?php if (($_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['product']->value['product_id'],$_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value))||($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['status']=='A'&&$_smarty_tpl->tpl_vars['product']->value['promotions'])) {?>
                                    <div class="ab_dotd_product_label"><?php echo $_smarty_tpl->__('ab_dotd_product_label');?>
</div>
                                <?php }?>
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];
if ($_smarty_tpl->tpl_vars['product']->value['discussion_amount_posts']>0) {?><span class="cn-comments">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion_amount_posts'], ENT_QUOTES, 'ISO-8859-1');?>
)</span><?php }?>
                            </div>
                        <?php } else { ?>
                            <div class="grid-list__rating no-rating">
                                <?php if (($_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['product']->value['product_id'],$_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value))||($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['status']=='A'&&$_smarty_tpl->tpl_vars['product']->value['promotions'])) {?>
                                    <div class="ab_dotd_product_label"><?php echo $_smarty_tpl->__('ab_dotd_product_label');?>
</div>
                                <?php }?>
                                <i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><?php if ($_smarty_tpl->tpl_vars['product']->value['discussion_amount_posts']>0) {?><span class="cn-comments">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion_amount_posts'], ENT_QUOTES, 'ISO-8859-1');?>
)</span><?php }?>
                            </div>
                        <?php }?>

                        <div class="ty-grid-list__item-name">
                            <?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?>
                                <span class="item-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'ISO-8859-1');?>
.&nbsp;</span>
                                <?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);?>

                            <?php }?>

                            <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

                        </div>

                        <div class="ty-grid-list__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price']==0) {?>ty-grid-list__no-price<?php }?>">
                            <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>


                            <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}?>

                            <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>


                            <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                        <div class="stock-grid ty-product-block__field-group">
                            <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                        <div class="ty-grid-list__control">
                            <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                                <div class="button-container ty-quick-view-button__wrapper">
                                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                                </div>
                            <?php }?>
                        </div>

                        <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

                    </div>
                <?php }?>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_scroller_advanced.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_scroller_advanced.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["show_name"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_old_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_rating"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_clean_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_product_amount"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_list_discount"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_list_buttons"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["but_role"] = new Smarty_variable("action", null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_discount_label"] = new Smarty_variable(true, null, 0);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
<?php $_smarty_tpl->createLocalArrayVariable('block', null, 0);
$_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] = "N";?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
"
     class="jcarousel-skin owl-carousel ty-scroller-list grid-list <?php if (!$_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>no-buttons<?php }?> ty-scroller-advanced">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_scroller_advanced_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="ty-scroller-list__item">
                <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

                    <div class="ty-grid-list__item">
                        <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


                        <div class="ty-grid-list__image">
                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_gallery'=>false), 0);?>


                            <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>


                            <div class="grid-list-buttons">
                                                <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=='Y') {?>
                                                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);?>

                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
                                                    <?php $_smarty_tpl->tpl_vars['is_wishlist_product'] = new Smarty_variable(false, null, 0);?>
                                                    <?php if ($_SESSION['wishlist']['products']) {?>
                                                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_SESSION['wishlist']['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars['p']->key;
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['p']->value['product_id']==$_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
                                                                <?php $_smarty_tpl->tpl_vars['is_wishlist_product'] = new Smarty_variable(true, null, 0);?>
                                                                <?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['cart_id'] = $_smarty_tpl->tpl_vars['key']->value;?>
                                                            <?php }?>
                                                        <?php } ?>
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']==0) {?>
                                                        <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'ISO-8859-1');
}?>" <?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']!="partial") {?> data-ca-target-id="login_block<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__text ty-add-to-wish text-button" title="Sign in"<?php } else { ?> class="ty-btn ty-btn__primary"<?php }?> rel="nofollow">Add to wishlist</a>

                                                        

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['is_wishlist_product']->value) {?>
                                                        <div class="wishlist-remove-item">
                                                            <a href="<?php echo htmlspecialchars(fn_url("wishlist.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['product']->value['cart_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-btn ty-btn__text ty-remove-from-wish text-button" title="<?php echo $_smarty_tpl->__("remove");?>
">Remove from wish list</a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0);?>

                                                    <?php }?>
                                                    
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=="Y"&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']=="Y") {?>
                                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0);?>

                                                <?php }?>
                                            </div>
                                        
                        </div>

                        <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php if (strlen(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value])>40) {?>
                            <div class="grid-list__rating">
                                <?php if (($_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['product']->value['product_id'],$_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value))||($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['status']=='A'&&$_smarty_tpl->tpl_vars['product']->value['promotions'])) {?>
                                    <div class="ab_dotd_product_label"><?php echo $_smarty_tpl->__('ab_dotd_product_label');?>
</div>
                                <?php }?>
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];
if ($_smarty_tpl->tpl_vars['product']->value['discussion_amount_posts']>0) {?><span class="cn-comments">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion_amount_posts'], ENT_QUOTES, 'ISO-8859-1');?>
)</span><?php }?>
                            </div>
                        <?php } else { ?>
                            <div class="grid-list__rating no-rating">
                                <?php if (($_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['product']->value['product_id'],$_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value))||($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['status']=='A'&&$_smarty_tpl->tpl_vars['product']->value['promotions'])) {?>
                                    <div class="ab_dotd_product_label"><?php echo $_smarty_tpl->__('ab_dotd_product_label');?>
</div>
                                <?php }?>
                                <i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><?php if ($_smarty_tpl->tpl_vars['product']->value['discussion_amount_posts']>0) {?><span class="cn-comments">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion_amount_posts'], ENT_QUOTES, 'ISO-8859-1');?>
)</span><?php }?>
                            </div>
                        <?php }?>

                        <div class="ty-grid-list__item-name">
                            <?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?>
                                <span class="item-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'ISO-8859-1');?>
.&nbsp;</span>
                                <?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);?>

                            <?php }?>

                            <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>

                        </div>

                        <div class="ty-grid-list__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price']==0) {?>ty-grid-list__no-price<?php }?>">
                            <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>


                            <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}?>

                            <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>


                            <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                        <div class="stock-grid ty-product-block__field-group">
                            <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                        <div class="ty-grid-list__control">
                            <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                                <div class="button-container ty-quick-view-button__wrapper">
                                    <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                                </div>
                            <?php }?>
                        </div>

                        <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

                    </div>
                <?php }?>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?><?php }} ?>
