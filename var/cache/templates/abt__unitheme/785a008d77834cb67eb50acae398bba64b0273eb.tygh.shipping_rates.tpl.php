<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:10:21
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/views/checkout/components/shipping_rates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13227579835b3377a56e4770-56154923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '785a008d77834cb67eb50acae398bba64b0273eb' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/views/checkout/components/shipping_rates.tpl',
      1 => 1525408244,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13227579835b3377a56e4770-56154923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_header' => 0,
    'no_form' => 0,
    'use_ajax' => 0,
    'product_groups' => 0,
    'group' => 0,
    'product' => 0,
    'group_key' => 0,
    'cart' => 0,
    'shipping' => 0,
    'rate' => 0,
    'tax' => 0,
    'inc_tax_lang' => 0,
    'checked' => 0,
    'shipping_id' => 0,
    'delivery_time' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3377a577cfc7_16071059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3377a577cfc7_16071059')) {function content_5b3377a577cfc7_16071059($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('select_shipping_method','free_shipping','total','free_shipping','no_shipping_required','text_no_shipping_methods','no_shipping_required','free_shipping','select','select_shipping_method','free_shipping','total','free_shipping','no_shipping_required','text_no_shipping_methods','no_shipping_required','free_shipping','select'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['show_header']->value==true) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("select_shipping_method")), 0);?>

<?php }?>


<?php if (!$_smarty_tpl->tpl_vars['no_form']->value) {?>
    <form <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?>class="cm-ajax"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="shippings_form">
        <input type="hidden" name="redirect_mode" value="checkout" />
        <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?>
            <input type="hidden" name="result_ids" value="checkout_totals,checkout_steps" />
        <?php }?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_rates")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <div id="shipping_rates_list">

        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars["group_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['group']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['group']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars["group_key"]->value = $_smarty_tpl->tpl_vars['group']->key;
 $_smarty_tpl->tpl_vars['group']->iteration++;
 $_smarty_tpl->tpl_vars['group']->last = $_smarty_tpl->tpl_vars['group']->iteration === $_smarty_tpl->tpl_vars['group']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["spg"]['last'] = $_smarty_tpl->tpl_vars['group']->last;
?>
            
            <?php if (!fn_allowed_for("ULTIMATE")||count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                <span class="ty-shipping-options__vendor-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
            <?php }?>

            
            <?php if (!fn_allowed_for("ULTIMATE")||count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                <ul class="ty-shipping-options__products">
                    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
                        <?php if (!(($_smarty_tpl->tpl_vars['product']->value['is_edp']=='Y'&&$_smarty_tpl->tpl_vars['product']->value['edp_shipping']!='Y')||$_smarty_tpl->tpl_vars['product']->value['free_shipping']=='Y')) {?>
                            <li class="ty-shipping-options__products-item">
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars(fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'ISO-8859-1');?>

                                <?php }?>
                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
            <?php }?>

            
            <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>

                <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
?>

                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable("checked=\"checked\"", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_begin"] = new Smarty_variable("<strong>", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_end"] = new Smarty_variable("</strong>", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_begin"] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_end"] = new Smarty_variable('', null, 0);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']||$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time']) {?>
                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable("(".((string)(($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] : $tmp)).")", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable('', null, 0);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "rate", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                            <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (", null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price']&&$_smarty_tpl->tpl_vars['shipping']->value['taxed_price']!=$_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', "tax", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"ty-nowrap"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['tax']->value)." ", null, 0);?>
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars["inc_tax_lang"] = new Smarty_variable($_smarty_tpl->__('inc_tax'), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")", null, 0);?>
                        <?php }?>
                    <?php } elseif (fn_is_lang_var_exists("free_shipping")) {?>
                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable($_smarty_tpl->__("free_shipping"), null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable('', null, 0);?>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_method")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_method"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div class="ty-shipping-options__method">
                            <input type="radio" class="ty-valign ty-shipping-options__checkbox" id="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'ISO-8859-1');?>
" name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'ISO-8859-1');?>
" onclick="fn_calculate_total_shipping_cost();" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checked']->value, ENT_QUOTES, 'ISO-8859-1');?>
 />
                            <div class="ty-shipping-options__group">
                                <label for="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-valign ty-shipping-options__title">
                                    <bdi>
                                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['image']) {?>
                                            <div class="ty-shipping-options__image">
                                                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['shipping_id']->value,'images'=>$_smarty_tpl->tpl_vars['shipping']->value['image'],'class'=>"ty-shipping-options__image"), 0);?>

                                            </div>
                                        <?php }?>

                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'ISO-8859-1');?>

                                        <?php if ($_smarty_tpl->tpl_vars['rate']->value) {?> <?php echo $_smarty_tpl->tpl_vars['rate']->value;
}?>
                                   </bdi>
                                </label>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['description']) {?>
                            <div class="ty-checkout__shipping-tips">
                                <p><?php echo $_smarty_tpl->tpl_vars['shipping']->value['description'];?>
</p>
                            </div>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_method"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php } ?>

                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['spg']['last']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                    <p class="ty-shipping-options__total"><?php echo $_smarty_tpl->__("total");?>
:&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost'],'class'=>"ty-price"), 0);?>
</p>
                <?php }?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']) {?>
                     <p><?php echo $_smarty_tpl->__("free_shipping");?>
</p>
                <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                    <p><?php echo $_smarty_tpl->__("no_shipping_required");?>
</p>
                <?php } else { ?>
                    <p class="ty-error-text">
                        <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                    </p>
                <?php }?>
            <?php }?>

        <?php }
if (!$_smarty_tpl->tpl_vars['group']->_loop) {
?>
            <p>
                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_required']) {?>
                    <?php echo $_smarty_tpl->__("no_shipping_required");?>

                <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value['free_shipping']) {?>
                    <?php echo $_smarty_tpl->__("free_shipping");?>

                <?php }?>
            </p>
        <?php } ?>

    <!--shipping_rates_list--></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!$_smarty_tpl->tpl_vars['no_form']->value) {?>
        <div class="cm-noscript buttons-container ty-center"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.update_shipping]",'but_text'=>$_smarty_tpl->__("select")), 0);?>
</div>
    </form>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/shipping_rates.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/shipping_rates.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_smarty_tpl->tpl_vars['show_header']->value==true) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("select_shipping_method")), 0);?>

<?php }?>


<?php if (!$_smarty_tpl->tpl_vars['no_form']->value) {?>
    <form <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?>class="cm-ajax"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="shippings_form">
        <input type="hidden" name="redirect_mode" value="checkout" />
        <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {?>
            <input type="hidden" name="result_ids" value="checkout_totals,checkout_steps" />
        <?php }?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_rates")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <div id="shipping_rates_list">

        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars["group_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['group']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['group']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars["group_key"]->value = $_smarty_tpl->tpl_vars['group']->key;
 $_smarty_tpl->tpl_vars['group']->iteration++;
 $_smarty_tpl->tpl_vars['group']->last = $_smarty_tpl->tpl_vars['group']->iteration === $_smarty_tpl->tpl_vars['group']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["spg"]['last'] = $_smarty_tpl->tpl_vars['group']->last;
?>
            
            <?php if (!fn_allowed_for("ULTIMATE")||count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                <span class="ty-shipping-options__vendor-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
            <?php }?>

            
            <?php if (!fn_allowed_for("ULTIMATE")||count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
                <ul class="ty-shipping-options__products">
                    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
                        <?php if (!(($_smarty_tpl->tpl_vars['product']->value['is_edp']=='Y'&&$_smarty_tpl->tpl_vars['product']->value['edp_shipping']!='Y')||$_smarty_tpl->tpl_vars['product']->value['free_shipping']=='Y')) {?>
                            <li class="ty-shipping-options__products-item">
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars(fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'ISO-8859-1');?>

                                <?php }?>
                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
            <?php }?>

            
            <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>

                <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
?>

                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable("checked=\"checked\"", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_begin"] = new Smarty_variable("<strong>", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_end"] = new Smarty_variable("</strong>", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_begin"] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["strong_end"] = new Smarty_variable('', null, 0);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']||$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time']) {?>
                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable("(".((string)(($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] : $tmp)).")", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["delivery_time"] = new Smarty_variable('', null, 0);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "rate", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                            <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (", null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price']&&$_smarty_tpl->tpl_vars['shipping']->value['taxed_price']!=$_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', "tax", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"ty-nowrap"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['tax']->value)." ", null, 0);?>
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars["inc_tax_lang"] = new Smarty_variable($_smarty_tpl->__('inc_tax'), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")", null, 0);?>
                        <?php }?>
                    <?php } elseif (fn_is_lang_var_exists("free_shipping")) {?>
                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable($_smarty_tpl->__("free_shipping"), null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["rate"] = new Smarty_variable('', null, 0);?>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_method")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_method"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div class="ty-shipping-options__method">
                            <input type="radio" class="ty-valign ty-shipping-options__checkbox" id="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'ISO-8859-1');?>
" name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'ISO-8859-1');?>
" onclick="fn_calculate_total_shipping_cost();" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checked']->value, ENT_QUOTES, 'ISO-8859-1');?>
 />
                            <div class="ty-shipping-options__group">
                                <label for="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-valign ty-shipping-options__title">
                                    <bdi>
                                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['image']) {?>
                                            <div class="ty-shipping-options__image">
                                                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['shipping_id']->value,'images'=>$_smarty_tpl->tpl_vars['shipping']->value['image'],'class'=>"ty-shipping-options__image"), 0);?>

                                            </div>
                                        <?php }?>

                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'ISO-8859-1');?>

                                        <?php if ($_smarty_tpl->tpl_vars['rate']->value) {?> <?php echo $_smarty_tpl->tpl_vars['rate']->value;
}?>
                                   </bdi>
                                </label>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['description']) {?>
                            <div class="ty-checkout__shipping-tips">
                                <p><?php echo $_smarty_tpl->tpl_vars['shipping']->value['description'];?>
</p>
                            </div>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_method"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php } ?>

                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['spg']['last']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                    <p class="ty-shipping-options__total"><?php echo $_smarty_tpl->__("total");?>
:&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost'],'class'=>"ty-price"), 0);?>
</p>
                <?php }?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']) {?>
                     <p><?php echo $_smarty_tpl->__("free_shipping");?>
</p>
                <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                    <p><?php echo $_smarty_tpl->__("no_shipping_required");?>
</p>
                <?php } else { ?>
                    <p class="ty-error-text">
                        <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                    </p>
                <?php }?>
            <?php }?>

        <?php }
if (!$_smarty_tpl->tpl_vars['group']->_loop) {
?>
            <p>
                <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_required']) {?>
                    <?php echo $_smarty_tpl->__("no_shipping_required");?>

                <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value['free_shipping']) {?>
                    <?php echo $_smarty_tpl->__("free_shipping");?>

                <?php }?>
            </p>
        <?php } ?>

    <!--shipping_rates_list--></div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!$_smarty_tpl->tpl_vars['no_form']->value) {?>
        <div class="cm-noscript buttons-container ty-center"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[checkout.update_shipping]",'but_text'=>$_smarty_tpl->__("select")), 0);?>
</div>
    </form>
<?php }
}?><?php }} ?>
