<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:32:43
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/views/checkout/components/cart_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14433490215b337769e3fdd7-53485296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a064593098c235963b6889e79194a401ffae04f' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/views/checkout/components/cart_content.tpl',
      1 => 1530100939,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14433490215b337769e3fdd7-53485296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337769e7a1d2_23179640',
  'variables' => 
  array (
    'runtime' => 0,
    'result_ids' => 0,
    'continue_url' => 0,
    'payment_methods' => 0,
    'link_href' => 0,
    'cart_products' => 0,
    'product' => 0,
    'key' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337769e7a1d2_23179640')) {function content_5b337769e7a1d2_23179640($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('cart_contents','cart_contents'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["result_ids"] = new Smarty_variable("cart_items,checkout_totals,checkout_steps,cart_status*,checkout_cart", null, 0);?>

<form name="checkout_form" class="cm-check-changes" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="redirect_mode" value="cart" />
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

<h1 class="ty-mainbox-title"><?php echo $_smarty_tpl->__("cart_contents");?>
</h1>

<div class="buttons-container ty-cart-content__top-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/clear_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.clear",'but_role'=>"text",'but_meta'=>"cm-confirm ty-cart-content__clear-button"), 0);?>

    </div>
	<div style="display:none;">
	<?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart",'but_name'=>"dispatch[checkout.update]"), 0);?>

	</div>
    <div class="ty-float-right ty-cart-content__right-buttons">
        
        <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
            <?php $_smarty_tpl->tpl_vars["m_name"] = new Smarty_variable("checkout", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["link_href"] = new Smarty_variable("checkout.checkout", null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_smarty_tpl->tpl_vars['link_href']->value,'but_meta'=>''), 0);?>

        <?php }?>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/cart_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('disable_ids'=>"button_cart"), 0);?>


</form>
<?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
 <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="product_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle  cm-processed-form">
<input name="result_ids" value="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" type="hidden">
<input name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" type="hidden">

<a class="ty-btn ty-btn__primary cm-ajax"  href="<?php echo htmlspecialchars(fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" id="remove_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" style="display:none">Remove</a>
	 
    <a class="ty-btn ty-btn__secondary   ty-add-to-wish cm-submit text-button" id="button_wishlist_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-dispatch="dispatch[wishlist.add..<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
]"  style="display:none">Move  to wish list</a>

 </form>
<?php } ?>
        <?php }?>

 <?php echo '<script'; ?>
>
        $(document).ready(function() {
			$(".movetolist").click(function() {
				document.getElementById("remove_button_"+$(this).data('product_id')).click();
				document.getElementById("button_wishlist_"+$(this).data('product_id')).click();
            });  });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('location'=>"cart"), 0);?>


<div class="buttons-container ty-cart-content__bottom-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>

    </div>
	<div style="display:none;">
	 <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_external_click_id'=>"button_cart",'but_meta'=>"cm-external-click"), 0);?>

	 </div>
    <div class="ty-float-right ty-cart-content__right-buttons">
       
        <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
            <?php $_smarty_tpl->tpl_vars["m_name"] = new Smarty_variable("checkout", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["link_href"] = new Smarty_variable("checkout.checkout", null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_smarty_tpl->tpl_vars['link_href']->value), 0);?>

        <?php }?>
    </div>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/cart_content.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/cart_content.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["result_ids"] = new Smarty_variable("cart_items,checkout_totals,checkout_steps,cart_status*,checkout_cart", null, 0);?>

<form name="checkout_form" class="cm-check-changes" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="redirect_mode" value="cart" />
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

<h1 class="ty-mainbox-title"><?php echo $_smarty_tpl->__("cart_contents");?>
</h1>

<div class="buttons-container ty-cart-content__top-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/clear_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.clear",'but_role'=>"text",'but_meta'=>"cm-confirm ty-cart-content__clear-button"), 0);?>

    </div>
	<div style="display:none;">
	<?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart",'but_name'=>"dispatch[checkout.update]"), 0);?>

	</div>
    <div class="ty-float-right ty-cart-content__right-buttons">
        
        <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
            <?php $_smarty_tpl->tpl_vars["m_name"] = new Smarty_variable("checkout", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["link_href"] = new Smarty_variable("checkout.checkout", null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_smarty_tpl->tpl_vars['link_href']->value,'but_meta'=>''), 0);?>

        <?php }?>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/cart_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('disable_ids'=>"button_cart"), 0);?>


</form>
<?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
 <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="product_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle  cm-processed-form">
<input name="result_ids" value="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" type="hidden">
<input name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" type="hidden">

<a class="ty-btn ty-btn__primary cm-ajax"  href="<?php echo htmlspecialchars(fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" id="remove_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" style="display:none">Remove</a>
	 
    <a class="ty-btn ty-btn__secondary   ty-add-to-wish cm-submit text-button" id="button_wishlist_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-dispatch="dispatch[wishlist.add..<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
]"  style="display:none">Move  to wish list</a>

 </form>
<?php } ?>
        <?php }?>

 <?php echo '<script'; ?>
>
        $(document).ready(function() {
			$(".movetolist").click(function() {
				document.getElementById("remove_button_"+$(this).data('product_id')).click();
				document.getElementById("button_wishlist_"+$(this).data('product_id')).click();
            });  });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('location'=>"cart"), 0);?>


<div class="buttons-container ty-cart-content__bottom-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>

    </div>
	<div style="display:none;">
	 <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_external_click_id'=>"button_cart",'but_meta'=>"cm-external-click"), 0);?>

	 </div>
    <div class="ty-float-right ty-cart-content__right-buttons">
       
        <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
            <?php $_smarty_tpl->tpl_vars["m_name"] = new Smarty_variable("checkout", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["link_href"] = new Smarty_variable("checkout.checkout", null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_smarty_tpl->tpl_vars['link_href']->value), 0);?>

        <?php }?>
    </div>
</div>

<?php }?><?php }} ?>
