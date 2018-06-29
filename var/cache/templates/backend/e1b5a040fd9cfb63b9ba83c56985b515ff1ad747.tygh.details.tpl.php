<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:34:56
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/orders/details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19955732615b337d6882cbf2-82295351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1b5a040fd9cfb63b9ba83c56985b515ff1ad747' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/orders/details.tpl',
      1 => 1528905447,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19955732615b337d6882cbf2-82295351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'shipping' => 0,
    'group' => 0,
    'settings' => 0,
    'oi' => 0,
    'order_tax_total' => 0,
    'coupon' => 0,
    'take_surcharge_from_vendor' => 0,
    'get_additional_statuses' => 0,
    'config' => 0,
    'statuses' => 0,
    'order_status_descr' => 0,
    'notify_vendor' => 0,
    'extra_status' => 0,
    'order_statuses' => 0,
    'item' => 0,
    'key' => 0,
    'cc_exists' => 0,
    'extra_url' => 0,
    'auth' => 0,
    'shipment_key' => 0,
    'shipments' => 0,
    'shipment' => 0,
    'shipment_id' => 0,
    'carrier' => 0,
    'shipment_btn' => 0,
    'align' => 0,
    'is_group_shippings' => 0,
    'downloads_exist' => 0,
    'file' => 0,
    'status_settings' => 0,
    'print_order' => 0,
    'print_pdf_order' => 0,
    'notify_customer_status' => 0,
    'notify_department_status' => 0,
    'notify_vendor_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337d689866c7_79233990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337d689866c7_79233990')) {function content_5b337d689866c7_79233990($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_math')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('new_shipment','new_shipment','product','price','quantity','discount','tax','subtotal','sku','free','shipped','free','totals','subtotal','shipping_cost','including_discount','order_discount','discount_coupon','taxes','tax_exempt','payment_surcharge','total','customer_notes','staff_only_notes','status','payment_information','method','credit_card','expiry_date','remove_cc_info','manager','assign_to_me','shipping_information','none','method','track_on_carrier_site','tracking_number','edit','tracking_number','carrier','new_shipment','create_detailed_shipment','shipments','shipments','new_shipment','new_shipment','shipments','filename','activation_mode','downloads_max_left','download_key_expiry','active','manually','immediately','after_full_payment','none','time_unlimited_download','download_key_expiry','prolongate_download_key','file_doesnt_have_key','active','not_active','order','total','invoice','credit_memo','print_credit_memo','print_pdf_credit_memo','print_order_details','print_pdf_order_details','print_invoice','print_pdf_invoice','edit_and_send_invoice','print_packing_slip','print_pdf_packing_slip','edit_order','copy','notify_customer','notify_orders_department','notify_vendor'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['shipping']) {?>
    <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["shipping_id"]->value = $_smarty_tpl->tpl_vars["shipping"]->key;
?>
        <?php if (fn_check_view_permissions("shipments.add")) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/shipments/components/new_shipment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('group_key'=>$_smarty_tpl->tpl_vars['shipping']->value['group_key']), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_shipment_".((string)$_smarty_tpl->tpl_vars['shipping']->value['group_key']),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'text'=>$_smarty_tpl->__("new_shipment"),'act'=>"hidden"), 0);?>

        <?php }?>
    <?php } ?>
<?php } else { ?>
    <?php  $_smarty_tpl->tpl_vars["group"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group"]->_loop = false;
 $_smarty_tpl->tpl_vars["group_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['product_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group"]->key => $_smarty_tpl->tpl_vars["group"]->value) {
$_smarty_tpl->tpl_vars["group"]->_loop = true;
 $_smarty_tpl->tpl_vars["group_id"]->value = $_smarty_tpl->tpl_vars["group"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']) {?>
            <?php if (fn_check_view_permissions("shipments.add")) {?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/shipments/components/new_shipment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('group_key'=>0), 0);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_shipment_0",'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'text'=>$_smarty_tpl->__("new_shipment"),'act'=>"hidden"), 0);?>

            <?php }?>
        <?php }?>
    <?php } ?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="order_info_form" id="order_info_form" class="form-horizontal form-edit">
<input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_REQUEST['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="order_status" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['status'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="result_ids" value="content_general" />
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'ISO-8859-1');?>
" />

<div id="content_general">
    <div class="row-fluid">
        <div class="span8">
            
            <table width="100%" class="table table-middle">
            <thead>
                <tr>
                    <th width="50%"><?php echo $_smarty_tpl->__("product");?>
</th>
                    <th width="10%"><?php echo $_smarty_tpl->__("price");?>
</th>
                    <th class="center" width="10%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                    <th width="5%"><?php echo $_smarty_tpl->__("discount");?>
</th>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
                    <th width="10%">&nbsp;<?php echo $_smarty_tpl->__("tax");?>
</th>
                    <?php }?>
                    <th width="10%" class="right">&nbsp;<?php echo $_smarty_tpl->__("subtotal");?>
</th>
                </tr>
            </thead>
                <?php $_smarty_tpl->tpl_vars["order_tax_total"] = new Smarty_variable(0, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["oi"]->key;
?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (!$_smarty_tpl->tpl_vars['oi']->value['extra']['parent']) {?>
            <tr>
                <td>
                    <div class="order-product-image">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>(($tmp = @$_smarty_tpl->tpl_vars['oi']->value['main_pair']['icon'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oi']->value['main_pair']['detailed'] : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['oi']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id']))), 0);?>

                    </div>
                    <div class="order-product-info">
                        <?php if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php }
echo $_smarty_tpl->tpl_vars['oi']->value['product'];
if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?></a><?php }?>
                        <div class="products-hint">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_code']) {?><p><?php echo $_smarty_tpl->__("sku");?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'ISO-8859-1');?>
</p><?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><div class="options-info"><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);?>
</div><?php }?>
                    </div>
                </td>
                <td class="nowrap">
                    <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['original_price']-($_smarty_tpl->tpl_vars['oi']->value['tax_value']/$_smarty_tpl->tpl_vars['oi']->value['amount'])), 0);
}?></td>
                <td class="center">
                    &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
<br />
                    <?php if (!fn_allowed_for("ULTIMATE:FREE")&&$_smarty_tpl->tpl_vars['oi']->value['shipped_amount']>0) {?>
                        &nbsp;<span class="muted"><small>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['shipped_amount'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;<?php echo $_smarty_tpl->__("shipped");?>
)</small></span>
                    <?php }?>
                </td>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                <td class="nowrap">
                    <?php if (floatval($_smarty_tpl->tpl_vars['oi']->value['extra']['discount'])) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['extra']['discount']), 0);
} else { ?>-<?php }?></td>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {?>
                <td class="nowrap">
                    <?php if (floatval($_smarty_tpl->tpl_vars['oi']->value['tax_value'])) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['tax_value']), 0);
} else { ?>-<?php }?></td>
                <?php }?>
                <td class="right">&nbsp;<span><?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['display_subtotal']), 0);
}?></span></td>
            </tr>
                <?php $_smarty_tpl->tpl_vars["order_tax_total"] = new Smarty_variable($_smarty_tpl->tpl_vars['order_tax_total']->value+$_smarty_tpl->tpl_vars['oi']->value['tax_value'], null, 0);?>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php } ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:extra_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:extra_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:extra_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </table>

            <!---->
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:totals")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:totals"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="order-notes statistic">

            <div class="clearfix">
            <table class="pull-right">
                <tr class="totals">
                    <td>&nbsp;</td>
                    <td width="100px"><h4><?php echo $_smarty_tpl->__("totals");?>
</h4></td>
                </tr>

                <tr>
                    <td><?php echo $_smarty_tpl->__("subtotal");?>
:</td>
                    <td data-ct-totals="subtotal"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_subtotal']-$_smarty_tpl->tpl_vars['order_tax_total']->value), 0);?>
</td>
                </tr>

                <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost'])) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("shipping_cost");?>
:</td>
                        <td data-ct-totals="shipping_cost"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost']), 0);?>
</td>
                    </tr>
                <?php }?>

                <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['discount'])) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("including_discount");?>
:</td>
                        <td data-ct-totals="including_discount"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['discount']), 0);?>
</td>
                    </tr>
                <?php }?>

                <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount'])) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("order_discount");?>
:</td>
                        <td data-ct-totals="order_discount"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount']), 0);?>
</td>
                    </tr>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['coupons']) {?>
                    <?php  $_smarty_tpl->tpl_vars["_c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_c"]->_loop = false;
 $_smarty_tpl->tpl_vars["coupon"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['coupons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_c"]->key => $_smarty_tpl->tpl_vars["_c"]->value) {
$_smarty_tpl->tpl_vars["_c"]->_loop = true;
 $_smarty_tpl->tpl_vars["coupon"]->value = $_smarty_tpl->tpl_vars["_c"]->key;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->__("discount_coupon");?>
:</td>
                            <td data-ct-totals="discount_coupon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['coupon']->value, ENT_QUOTES, 'ISO-8859-1');?>
</td>
                        </tr>
                    <?php } ?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("taxes");?>
:</td>
                        <td>&nbsp;</td>
                    </tr>

                    
                            <tr>
                                <td>&nbsp;CGST&nbsp;</td>
                                <td data-ct-totals="taxes-CGST"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_tax_total']->value/2), 0);?>
</td>
                            </tr>
                            <tr>
                                <td>&nbsp;SGST&nbsp;</td>
                                <td data-ct-totals="taxes-SGST"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_tax_total']->value/2), 0);?>
</td>
                            </tr>
                       
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['tax_exempt']=="Y") {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("tax_exempt");?>
</td>
                        <td>&nbsp;</td>
                    </tr>
                <?php }?>

                <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge'])&&!$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
                    <tr>
                        <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['order_info']->value['payment_method']['surcharge_title'])===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
:</td>
                        <td data-ct-totals="payment_surcharge"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge']), 0);?>
</td>
                    </tr>
                <?php }?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:totals_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:totals_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:totals_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <tr>
                    <td><h4><?php echo $_smarty_tpl->__("total");?>
:</h4></td>
                    <td class="price" data-ct-totals="total"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['total']), 0);?>
</td>
                </tr>
            </table>
            </div>

            <div class="note clearfix">
                <div class="span6">
                    <label for="notes"><?php echo $_smarty_tpl->__("customer_notes");?>
</label>
                    <textarea class="span12" name="update_order[notes]" id="notes" cols="40" rows="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['notes'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
                </div>
                <div class="span6">
                    <label for="details"><?php echo $_smarty_tpl->__("staff_only_notes");?>
</label>
                    <textarea class="span12" name="update_order[details]" id="details" cols="40" rows="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['details'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
                </div>
            </div>

            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:totals"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <!---->

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:staff_only_note")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:staff_only_note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:staff_only_note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        </div>
        <div class="span4">
            <div class="well orders-right-pane form-horizontal">
                <div class="control-group">
                    <div class="control-label"><h4 class="subheader"><?php echo $_smarty_tpl->__("status");?>
</h4></div>
                    <div class="controls">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:order_status")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:order_status"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['status']==@constant('STATUS_INCOMPLETED_ORDER')) {?>
                                <?php $_smarty_tpl->tpl_vars["get_additional_statuses"] = new Smarty_variable(true, null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["get_additional_statuses"] = new Smarty_variable(false, null, 0);?>
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars["order_status_descr"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER'),$_smarty_tpl->tpl_vars['get_additional_statuses']->value,true), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["extra_status"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                                <?php $_smarty_tpl->tpl_vars["notify_vendor"] = new Smarty_variable(true, null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["notify_vendor"] = new Smarty_variable(false, null, 0);?>
                            <?php }?>

                            <?php $_smarty_tpl->tpl_vars['statuses'] = new Smarty_variable(array(), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["order_statuses"] = new Smarty_variable(fn_get_statuses(@constant('STATUSES_ORDER'),$_smarty_tpl->tpl_vars['statuses']->value,$_smarty_tpl->tpl_vars['get_additional_statuses']->value,true), null, 0);?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('suffix'=>"o",'id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'status'=>$_smarty_tpl->tpl_vars['order_info']->value['status'],'items_status'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'update_controller'=>"orders",'notify'=>true,'notify_department'=>true,'notify_vendor'=>$_smarty_tpl->tpl_vars['notify_vendor']->value,'status_target_id'=>"content_downloads",'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['extra_status']->value),'statuses'=>$_smarty_tpl->tpl_vars['order_statuses']->value,'popup_additional_class'=>"dropleft"), 0);?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:order_status"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>

                <div class="control-group shift-top">
                    <div class="control-label">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("payment_information")), 0);?>

                    </div>
                </div>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:payment_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:payment_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id']) {?>
                    <div class="control-group">
                        <div class="control-label"><?php echo $_smarty_tpl->__("method");?>
</div>
                        <div id="tygh_payment_info" class="controls"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['payment'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description']) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description'], ENT_QUOTES, 'ISO-8859-1');?>
)<?php }?>
                        </div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_info']) {?>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['payment_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <div class="control-group">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value&&$_smarty_tpl->tpl_vars['key']->value!="expiry_year") {?>
                                <div class="control-label">
                                <?php if ($_smarty_tpl->tpl_vars['key']->value=="card_number") {
$_smarty_tpl->tpl_vars["cc_exists"] = new Smarty_variable(true, null, 0);
echo $_smarty_tpl->__("credit_card");
} elseif ($_smarty_tpl->tpl_vars['key']->value=="expiry_month") {
echo $_smarty_tpl->__("expiry_date");
} else {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['key']->value);
}?>
                                </div>
                                <div class="controls">
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value=="order_status") {?>
                                        <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['item']->value,'display'=>"view",'status_type'=>''), 0);?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value=="reason_text") {?>
                                        <?php echo htmlspecialchars(nl2br($_smarty_tpl->tpl_vars['item']->value), ENT_QUOTES, 'ISO-8859-1');?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value=="expiry_month") {?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'ISO-8859-1');?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['payment_info']['expiry_year'], ENT_QUOTES, 'ISO-8859-1');?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value=="card_number"||$_smarty_tpl->tpl_vars['key']->value=="cvv"||$_smarty_tpl->tpl_vars['key']->value=="cvv2") {?>
                                        <div class="wrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'ISO-8859-1');?>
</div>
                                    <?php } else { ?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'ISO-8859-1');?>

                                    <?php }?>
                                </div>
                            <?php }?>
                        </div>
                        <?php } ?>

                        <?php if ($_smarty_tpl->tpl_vars['cc_exists']->value) {?>
                        <div class="control-group">
                            <div class="control-label">
                                <input type="hidden" name="order_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("remove_cc_info"),'but_meta'=>"cm-ajax cm-comet",'but_name'=>"dispatch[orders.remove_cc_info]"), 0);?>

                            </div>
                        </div>
                        <?php }?>
                    <?php }?>
                   <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:payment_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



                <div class="control-group shift-top" id="select_manager">
                    <div class="control-label">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("manager")), 0);?>

                    </div>
                    <div class="control">
                        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                            <?php $_smarty_tpl->tpl_vars['extra_url'] = new Smarty_variable("&user_type=V", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['extra_url'] = new Smarty_variable("&user_type=A", null, 0);?>
                        <?php }?>

                        <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>"radio",'but_meta'=>"btn",'extra_url'=>$_smarty_tpl->tpl_vars['extra_url']->value,'view_mode'=>"single_button",'user_info'=>$_smarty_tpl->tpl_vars['order_info']->value['issuer_data'],'data_id'=>"issuer_info",'input_name'=>"update_order[issuer_id]"), 0);?>


                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']!=$_smarty_tpl->tpl_vars['order_info']->value['issuer_id']) {?>
                            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'title'=>$_smarty_tpl->__("assign_to_me"),'href'=>"orders.assign_manager?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'class'=>"btn cm-ajax cm-post",'data'=>array("data-ca-target-id"=>"select_manager"),'icon'=>"icon-many-user"));?>

                        <?php }?>
                    </div>
                <!--select_manager--></div>

                
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:shipping_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:shipping_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['shipping']) {?>
                        <div class="control-group shift-top">
                            <div class="control-label">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("shipping_information")), 0);?>

                            </div>
                        </div>
                        <?php $_smarty_tpl->tpl_vars["is_group_shippings"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['order_info']->value['shipping'])>1, null, 0);?>

                        <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["shipping_id"]->value = $_smarty_tpl->tpl_vars["shipping"]->key;
?>

                            <div class="control-group" >
                                <span> <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['group_name'])===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</span>
                            </div>

                            <div class="control-group">
                                <div class="control-label"><?php echo $_smarty_tpl->__("method");?>
</div>
                                <div id="tygh_shipping_info" class="controls">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>

                                </div>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['shipment_keys']) {?>
                                
                                <p>
                                    <strong><?php echo $_smarty_tpl->__("track_on_carrier_site");?>
</strong>
                                </p>
                                <?php  $_smarty_tpl->tpl_vars["shipment_key"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipment_key"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['shipment_keys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipment_key"]->key => $_smarty_tpl->tpl_vars["shipment_key"]->value) {
$_smarty_tpl->tpl_vars["shipment_key"]->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['shipment'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipment_key']->value], null, 0);?>

                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:data_shipping")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:data_shipping"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <div class="control-group">
                                        <div class="control-label">
                                            <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['name'], ENT_QUOTES, 'ISO-8859-1');?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->__("tracking_number");?>

                                            <?php }?>
                                        </div>
                                        <div class="controls">
                                            <a class="hand cm-tooltip icon-edit cm-combination tracking-number-edit-link" title="<?php echo $_smarty_tpl->__("edit");?>
" id="sw_tracking_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"></a>
                                            <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url']) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url'];?>
" target="_blank" id="on_tracking_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php if ($_smarty_tpl->tpl_vars['shipment']->value['tracking_number']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'ISO-8859-1');
} else { ?>&mdash;<?php }?></a>
                                            <?php } else { ?>
                                                <span id="on_tracking_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                                            <?php }?>
                                            <div class="hidden" id="tracking_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                                                <input class="input-small" type="text" name="update_shipping[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'ISO-8859-1');?>
][tracking_number]" size="45" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                                <input type="hidden" name="update_shipping[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'ISO-8859-1');?>
][shipping_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                                <input type="hidden" name="update_shipping[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'ISO-8859-1');?>
][carrier]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['carrier'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                            </div>
                                        </div>
                                    </div>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:data_shipping"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php } ?>
                            
                            <?php } else { ?>
                                
                                <?php $_smarty_tpl->tpl_vars['shipment_id'] = new Smarty_variable(0, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['carrier'] = new Smarty_variable('', null, 0);?>
                                <div class="control-group">
                                    <label class="control-label" for="tracking_number"><?php echo $_smarty_tpl->__("tracking_number");?>
</label>
                                    <div class="controls">
                                        <input id="tracking_number" class="input-small" type="text" name="update_shipping[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][tracking_number]" size="45" value="" />
                                        <input type="hidden" name="update_shipping[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['group_key'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][shipping_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="carrier_key"><?php echo $_smarty_tpl->__("carrier");?>
</label>
                                    <div class="controls">
                                        <?php echo $_smarty_tpl->getSubTemplate ("common/carriers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"carrier_key",'meta'=>"input-small",'name'=>"update_shipping[".((string)$_smarty_tpl->tpl_vars['shipping']->value['group_key'])."][".((string)$_smarty_tpl->tpl_vars['shipment_id']->value)."][carrier]",'carrier'=>$_smarty_tpl->tpl_vars['carrier']->value), 0);?>

                                    </div>
                                </div>
                                <hr>
                            <?php }?>
                            <div class="clearfix">
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['need_shipment']) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['shipment_keys']) {?>
                                        <?php $_smarty_tpl->tpl_vars["shipment_btn"] = new Smarty_variable($_smarty_tpl->__("new_shipment"), null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['align'] = new Smarty_variable("left", null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars["shipment_btn"] = new Smarty_variable($_smarty_tpl->__("create_detailed_shipment"), null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['align'] = new Smarty_variable("right", null, 0);?>
                                    <?php }?>
                                    <div class="clearfix">
                                    <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                                        <?php if (fn_check_view_permissions("shipments.add")) {?>
                                            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_shipment_".((string)$_smarty_tpl->tpl_vars['shipping']->value['group_key']),'content'=>'','link_text'=>((string)$_smarty_tpl->tpl_vars['shipment_btn']->value)."<i class='icon icon-angle-right'></i>",'act'=>"link",'link_class'=>"pull-".((string)$_smarty_tpl->tpl_vars['align']->value)), 0);?>

                                        <?php }?>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action",'but_meta'=>"cm-promo-popup pull-".((string)$_smarty_tpl->tpl_vars['align']->value),'allow_href'=>false,'but_text'=>$_smarty_tpl->tpl_vars['shipment_btn']->value), 0);?>

                                    <?php }?>
                                    </div>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['is_group_shippings']->value) {?><hr><?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['shipment_keys']) {?>
                                    <?php if (!$_smarty_tpl->tpl_vars['is_group_shippings']->value) {?>
                                        <div class="pull-right">
                                            <a href="<?php echo htmlspecialchars(fn_url("shipments.manage?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("shipments");?>
&nbsp;(<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['order_info']->value['shipment_ids']), ENT_QUOTES, 'ISO-8859-1');?>
)</a>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>
                        <?php } ?>

                        <?php if ($_smarty_tpl->tpl_vars['is_group_shippings']->value) {?>
                        <div class="clearfix">
                            <a class="pull-right" href="<?php echo htmlspecialchars(fn_url("shipments.manage?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("shipments");?>
&nbsp;(<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['order_info']->value['shipment_ids']), ENT_QUOTES, 'ISO-8859-1');?>
)</a>
                        </div>
                        <?php }?>
                    <?php } else { ?>

                        <?php  $_smarty_tpl->tpl_vars["group"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group"]->_loop = false;
 $_smarty_tpl->tpl_vars["group_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['product_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group"]->key => $_smarty_tpl->tpl_vars["group"]->value) {
$_smarty_tpl->tpl_vars["group"]->_loop = true;
 $_smarty_tpl->tpl_vars["group_id"]->value = $_smarty_tpl->tpl_vars["group"]->key;
?>
                             <?php if ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']) {?>
                                     <div class="clearfix">
                                         <?php if ($_smarty_tpl->tpl_vars['order_info']->value['need_shipping']) {?>
                                             <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                                                 <?php if (fn_check_view_permissions("shipments.add")) {?>
                                                     <div class="clearfix">
                                                         <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_shipment_0",'content'=>'','but_text'=>$_smarty_tpl->__("new_shipment"),'act'=>"create",'but_meta'=>"btn"), 0);?>

                                                     </div>
                                                 <?php }?>
                                             <?php } else { ?>
                                                 <div class="clearfix">
                                                     <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action",'but_meta'=>"cm-promo-popup",'allow_href'=>false,'but_text'=>$_smarty_tpl->__("new_shipment")), 0);?>

                                                 </div>
                                             <?php }?>
                                         <?php }?>

                                         <a class="pull-right" href="<?php echo htmlspecialchars(fn_url("shipments.manage?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("shipments");?>
&nbsp;(<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['order_info']->value['shipment_ids']), ENT_QUOTES, 'ISO-8859-1');?>
)</a>
                                     </div>
                             <?php }?>
                        <?php } ?>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:shipping_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:customer_shot_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:customer_shot_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:customer_shot_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>
<!--content_general--></div>

<div id="content_addons">

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:customer_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:customer_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:customer_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<!--content_addons--></div>

<?php if ($_smarty_tpl->tpl_vars['downloads_exist']->value) {?>
<div id="content_downloads">
    <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_REQUEST['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="order_status" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['status'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['is_edp']=="Y") {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:download_products_list_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:download_products_list_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p><a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product'], ENT_QUOTES, 'ISO-8859-1');?>
</a></p>
            <?php if ($_smarty_tpl->tpl_vars['oi']->value['files']) {?>
            <input type="hidden" name="files_exists[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
            <table cellpadding="5" cellspacing="0" border="0" class="table">
            <tr>
                <th><?php echo $_smarty_tpl->__("filename");?>
</th>
                <th><?php echo $_smarty_tpl->__("activation_mode");?>
</th>
                <th><?php echo $_smarty_tpl->__("downloads_max_left");?>
</th>
                <th><?php echo $_smarty_tpl->__("download_key_expiry");?>
</th>
                <th><?php echo $_smarty_tpl->__("active");?>
</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oi']->value['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
?>
            <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_name'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['file']->value['activation_type']=="M") {
echo $_smarty_tpl->__("manually");?>
</label><?php } elseif ($_smarty_tpl->tpl_vars['file']->value['activation_type']=="I") {
echo $_smarty_tpl->__("immediately");
} else {
echo $_smarty_tpl->__("after_full_payment");
}?>
                </td>
                <td><?php if ($_smarty_tpl->tpl_vars['file']->value['max_downloads']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['max_downloads'], ENT_QUOTES, 'ISO-8859-1');?>
 / <input type="text" name="edp_downloads[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['ekey'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a-b",'a'=>$_smarty_tpl->tpl_vars['file']->value['max_downloads'],'b'=>(($tmp = @$_smarty_tpl->tpl_vars['file']->value['downloads'])===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>
" size="3" /><?php } else {
echo $_smarty_tpl->__("none");
}?></td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['unlimited_download']=='Y') {?>
                        <?php echo $_smarty_tpl->__("time_unlimited_download");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['file']->value['ekey']) {?>
                    <p><label><?php echo $_smarty_tpl->__("download_key_expiry");?>
: </label><span><?php echo htmlspecialchars((($tmp = @smarty_modifier_date_format($_smarty_tpl->tpl_vars['file']->value['ttl'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])))===null||$tmp==='' ? "n/a" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</span></p>

                    <p><label><?php echo $_smarty_tpl->__("prolongate_download_key");?>
: </label><?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"prolongate_date_".((string)$_smarty_tpl->tpl_vars['file']->value['file_id']),'date_name'=>"prolongate_data[".((string)$_smarty_tpl->tpl_vars['file']->value['ekey'])."]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['file']->value['ttl'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>
</p>
                    <?php } else {
echo $_smarty_tpl->__("file_doesnt_have_key");
}?>
                </td>
                <td>
                    <select name="activate_files[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'ISO-8859-1');?>
]">
                        <option value="Y" <?php if ($_smarty_tpl->tpl_vars['file']->value['active']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                        <option value="N" <?php if ($_smarty_tpl->tpl_vars['file']->value['active']!="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("not_active");?>
</option>
                    </select>
                </td>
            </tr>
            <?php } ?>
            </table>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:download_products_list_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
    <?php } ?>
<!--content_downloads--></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value['promotions']) {?>
<div id="content_promotions">
    <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/promotions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('promotions'=>$_smarty_tpl->tpl_vars['order_info']->value['promotions']), 0);?>

<!--content_promotions--></div>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</form>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->__("order");?>
 &lrm;#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
 <span class="f-middle"><?php echo $_smarty_tpl->__("total");?>
: <span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['total']), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['order_info']->value['company_id']) {?> / <?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['order_info']->value['company_id']), ENT_QUOTES, 'ISO-8859-1');
}?></span>

    <span class="f-small">
    <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="I"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
        (<?php echo $_smarty_tpl->__("invoice");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']], ENT_QUOTES, 'ISO-8859-1');?>
)
    <?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
        (<?php echo $_smarty_tpl->__("credit_memo");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']], ENT_QUOTES, 'ISO-8859-1');?>
)
    <?php }?>
    <?php $_smarty_tpl->tpl_vars["timestamp"] = new Smarty_variable(rawurlencode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']))), null, 0);?>
    / <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'ISO-8859-1');?>
,<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>

    </span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:details_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:details_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/order_management/components/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['order_info']->value,'location'=>"I",'form_id'=>"order_info_form"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:details_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('url'=>"orders.details?order_id="), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
        <?php $_smarty_tpl->tpl_vars["print_order"] = new Smarty_variable($_smarty_tpl->__("print_credit_memo"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["print_pdf_order"] = new Smarty_variable($_smarty_tpl->__("print_pdf_credit_memo"), null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="O") {?>
        <?php $_smarty_tpl->tpl_vars["print_order"] = new Smarty_variable($_smarty_tpl->__("print_order_details"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["print_pdf_order"] = new Smarty_variable($_smarty_tpl->__("print_pdf_order_details"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["print_order"] = new Smarty_variable($_smarty_tpl->__("print_invoice"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["print_pdf_order"] = new Smarty_variable($_smarty_tpl->__("print_pdf_invoice"), null, 0);?>
    <?php }?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:details_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:details_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['print_order']->value,'href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'class'=>"cm-new-window"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['print_pdf_order']->value,'href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&format=pdf"));?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['email_templates']=='new') {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit_and_send_invoice"),'href'=>"orders.modify_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])));?>
</li>
            <?php }?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("print_packing_slip"),'href'=>"orders.print_packing_slip?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'class'=>"cm-new-window"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("print_pdf_packing_slip"),'href'=>"orders.print_packing_slip?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&format=pdf",'class'=>"cm-new-window"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit_order"),'href'=>"order_management.edit?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("copy"),'href'=>"order_management.edit?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&copy=1"));?>
</li>
            <?php echo Smarty::$_smarty_vars['capture']['adv_tools'];?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:details_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <div class="btn-group btn-hover dropleft">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-no-ajax dropdown-toggle",'but_role'=>"submit-link",'but_target_form'=>"order_info_form",'but_name'=>"dispatch[orders.update_details]",'save'=>true), 0);?>

        <ul class="dropdown-menu">
            <?php $_smarty_tpl->tpl_vars['notify_customer_status'] = new Smarty_variable(false, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['notify_department_status'] = new Smarty_variable(false, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['notify_vendor_status'] = new Smarty_variable(false, null, 0);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:notify_checkboxes")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:notify_checkboxes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a><input type="checkbox" name="notify_user" <?php if ($_smarty_tpl->tpl_vars['notify_customer_status']->value==true) {?> checked="checked" <?php }?> id="notify_user" value="Y" form="order_info_form" />
                    <?php echo $_smarty_tpl->__("notify_customer");?>
</a></li>
                <li><a><input type="checkbox" name="notify_department" <?php if ($_smarty_tpl->tpl_vars['notify_department_status']->value==true) {?> checked="checked" <?php }?> id="notify_department" value="Y" form="order_info_form" />
                    <?php echo $_smarty_tpl->__("notify_orders_department");?>
</a></li>
                <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <li>
                    <a><input type="checkbox" name="notify_vendor" <?php if ($_smarty_tpl->tpl_vars['notify_vendor_status']->value==true) {?> checked="checked" <?php }?> id="notify_vendor" value="Y" form="order_info_form" />
                        <?php echo $_smarty_tpl->__("notify_vendor");?>
</a>
                </li>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:notify_checkboxes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>Smarty::$_smarty_vars['capture']['mainbox_title'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'sidebar_position'=>"left"), 0);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:detailed_after_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:detailed_after_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:detailed_after_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
