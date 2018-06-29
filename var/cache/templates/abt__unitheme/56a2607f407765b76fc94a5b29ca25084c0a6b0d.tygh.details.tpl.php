<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:18:32
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/views/orders/details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21327705385b33799046e666-19146882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56a2607f407765b76fc94a5b29ca25084c0a6b0d' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/views/orders/details.tpl',
      1 => 1528905219,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21327705385b33799046e666-19146882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'settings' => 0,
    'view_only' => 0,
    'status_settings' => 0,
    'print_pdf_order' => 0,
    'selected_section' => 0,
    'without_customer' => 0,
    'product' => 0,
    'colsp' => 0,
    'use_shipments' => 0,
    'shipping_method' => 0,
    'shipping' => 0,
    'shipments' => 0,
    'shipment' => 0,
    'key' => 0,
    'take_surcharge_from_vendor' => 0,
    'payment_methods' => 0,
    'product_hash' => 0,
    'amount' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3379905d6817_96028889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3379905d6817_96028889')) {function content_5b3379905d6817_96028889($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('order','status','order','status','print_invoice','print_pdf_invoice','print_credit_memo','print_pdf_credit_memo','print_order_details','print_pdf_order_details','re_order','products_information','product','price','quantity','discount','subtotal','download','sku','free','free','customer_notes','summary','payment_method','shipping_method','tracking_number','tracking_number','carrier','subtotal','shipping_cost','including_discount','order_discount','coupon','tax_exempt','payment_surcharge','total','shipment','carrier','tracking_number','product','quantity','download','sku','comments','text_no_shipments_found','order','status','order','status','print_invoice','print_pdf_invoice','print_credit_memo','print_pdf_credit_memo','print_order_details','print_pdf_order_details','re_order','products_information','product','price','quantity','discount','subtotal','download','sku','free','free','customer_notes','summary','payment_method','shipping_method','tracking_number','tracking_number','carrier','subtotal','shipping_cost','including_discount','order_discount','coupon','tax_exempt','payment_surcharge','total','shipment','carrier','tracking_number','product','quantity','download','sku','comments','text_no_shipments_found'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:details")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:details"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:details"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<h1 class="ty-mainbox-title">
<?php echo $_smarty_tpl->__("order");?>
&nbsp;<bdi>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
</bdi>
    <em class="ty-date">(<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>
)</em>
    <em class="ty-status"><?php echo $_smarty_tpl->__("status");?>
: <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['order_info']->value['status'],'display'=>"view",'name'=>"update_order[status]"), 0);?>
</em>
</h1>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->__("order");?>
&nbsp;<bdi>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
</bdi>
    <em class="ty-date">(<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>
)</em>
    <em class="ty-status"><?php echo $_smarty_tpl->__("status");?>
: <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['order_info']->value['status'],'display'=>"view",'name'=>"update_order[status]"), 0);?>
</em>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="ty-orders-detail">

    <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("order_actions", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['view_only']->value!="Y") {?>
                <div class="ty-orders__actions">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:details_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:details_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                       <?php $_smarty_tpl->tpl_vars["print_order"] = new Smarty_variable($_smarty_tpl->__("print_invoice"), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["print_pdf_order"] = new Smarty_variable($_smarty_tpl->__("print_pdf_invoice"), null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
                            <?php $_smarty_tpl->tpl_vars["print_order"] = new Smarty_variable($_smarty_tpl->__("print_credit_memo"), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["print_pdf_order"] = new Smarty_variable($_smarty_tpl->__("print_pdf_credit_memo"), null, 0);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="O") {?>
                            <?php $_smarty_tpl->tpl_vars["print_order"] = new Smarty_variable($_smarty_tpl->__("print_order_details"), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["print_pdf_order"] = new Smarty_variable($_smarty_tpl->__("print_pdf_order_details"), null, 0);?>
                        <?php }?>

                        

                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"orders-print__pdf ty-btn__text cm-no-ajax",'but_text'=>$_smarty_tpl->tpl_vars['print_pdf_order']->value,'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&format=pdf",'but_icon'=>"ty-icon-doc-text orders-print__icon"), 0);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:details_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <div class="ty-orders__actions-right">
                        <?php if ($_smarty_tpl->tpl_vars['view_only']->value!="Y") {?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:details_bullets")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:details_bullets"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:details_bullets"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php }?>

                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__text",'but_role'=>"text",'but_text'=>$_smarty_tpl->__("re_order"),'but_href'=>"orders.reorder?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-cw"), 0);?>

                    </div>

                </div>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

        <div id="content_general" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value&&$_smarty_tpl->tpl_vars['selected_section']->value!="general") {?>hidden<?php }?>">

            <?php if ($_smarty_tpl->tpl_vars['without_customer']->value!="Y") {?>
            
                <div class="orders-customer">
                <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['order_info']->value,'location'=>"I"), 0);?>

                </div>
            
            <?php }?>


        <?php $_smarty_tpl->_capture_stack[0][] = array("group", null, null); ob_start(); ?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("products_information")), 0);?>


            <table class="ty-orders-detail__table ty-table">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:items_list_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:items_list_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <thead>
                        <tr>
                            <th class="ty-orders-detail__table-product"><?php echo $_smarty_tpl->__("product");?>
</th>
                            <th class="ty-orders-detail__table-price"><?php echo $_smarty_tpl->__("price");?>
</th>
                            <th class="ty-orders-detail__table-quantity"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                                <th class="ty-orders-detail__table-discount"><?php echo $_smarty_tpl->__("discount");?>
</th>
                            <?php }?>
                            
                            <th class="ty-orders-detail__table-subtotal"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                        </tr>
                    </thead>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:items_list_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['parent']) {?>
                            <tr class="ty-valign-top">
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?></a><?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['is_edp']=="Y") {?>
                                        <div class="ty-right"><a href="<?php echo htmlspecialchars(fn_url("orders.order_downloads?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">[<?php echo $_smarty_tpl->__("download");?>
]</a></div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                                        <div class="ty-orders-detail__table-code"><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                                    <?php }?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {
echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'inline_option'=>true), 0);
}?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </td>
                                <td class="ty-right">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price']), 0);
}?>
                                </td>
                                <td class="ty-center">&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
                                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                                    <td class="ty-right">
                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['extra']['discount'])) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['extra']['discount']), 0);
} else { ?>-<?php }?>
                                    </td>
                                <?php }?>
                                
                                <td class="ty-right">
                                     &nbsp;<?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal']), 0);
}?>
                                 </td>
                            </tr>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php } ?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:extra_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:extra_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_smarty_tpl->tpl_vars["colsp"] = new Smarty_variable(5, null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {
$_smarty_tpl->tpl_vars["colsp"] = new Smarty_variable($_smarty_tpl->tpl_vars['colsp']->value+1, null, 0);
}?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {
$_smarty_tpl->tpl_vars["colsp"] = new Smarty_variable($_smarty_tpl->tpl_vars['colsp']->value+1, null, 0);
}?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:extra_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            </table>

            
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['notes']) {?>
                <div class="ty-orders-notes">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("customer_notes")), 0);?>

                    <div class="ty-orders-notes__body">
                        <span class="ty-caret"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['notes'], ENT_QUOTES, 'ISO-8859-1');?>

                    </div>
                </div>
                <?php }?>
            

            <div class="ty-orders-summary clearfix">
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("summary")), 0);?>


                <div class="ty-orders-summary__right">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>

                <div class="ty-orders-summary__wrapper">
                    <table class="ty-orders-summary__table">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:totals")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:totals"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id']) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("payment_method");?>
:</td>
                                    <td style="width: 57%" data-ct-orders-summary="summary-payment">
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:totals_payment")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:totals_payment"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['payment'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description']) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description'], ENT_QUOTES, 'ISO-8859-1');?>
)<?php }?>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:totals_payment"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </td>
                                </tr>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['shipping']) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("shipping_method");?>
:</td>
                                    <td data-ct-orders-summary="summary-ship">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:totals_shipping")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:totals_shipping"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <?php if ($_smarty_tpl->tpl_vars['use_shipments']->value) {?>
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars["shipping_method"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping_method"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping_method"]->key => $_smarty_tpl->tpl_vars["shipping_method"]->value) {
$_smarty_tpl->tpl_vars["shipping_method"]->_loop = true;
?>
                                                <li><?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['shipping']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php } else { ?> – <?php }?></li>
                                            <?php } ?>
                                        </ul>
                                    <?php } else { ?>
                                        <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["shipping"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["shipping"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["shipping"]->iteration++;
 $_smarty_tpl->tpl_vars["shipping"]->last = $_smarty_tpl->tpl_vars["shipping"]->iteration === $_smarty_tpl->tpl_vars["shipping"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["f_shipp"]['last'] = $_smarty_tpl->tpl_vars["shipping"]->last;
?>

                                            <?php if ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier']&&$_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number']) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;(<?php echo $_smarty_tpl->__("tracking_number");?>
: <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier_info']['tracking_url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number'], ENT_QUOTES, 'ISO-8859-1');?>
</a>)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number']) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;(<?php echo $_smarty_tpl->__("tracking_number");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number'], ENT_QUOTES, 'ISO-8859-1');?>
)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier']) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;(<?php echo $_smarty_tpl->__("carrier");?>
: <?php echo $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier_info']['name'];?>
)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>

                                            <?php }?>
                                            <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['f_shipp']['last']) {?><br><?php }?>
                                        <?php } ?>
                                    <?php }?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:totals_shipping"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </td>
                                </tr>
                            <?php }?>

                            <tr class="ty-orders-summary__row">
                                <td><?php echo $_smarty_tpl->__("subtotal");?>
:&nbsp;</td>
                                <td data-ct-orders-summary="summary-subtotal"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_subtotal']), 0);?>
</td>
                            </tr>
                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost'])) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("shipping_cost");?>
:&nbsp;</td>
                                    <td data-ct-orders-summary="summary-shipcost"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost']), 0);?>
</td>
                                </tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['discount'])) {?>
                            <tr class="ty-orders-summary__row">
                                <td class="ty-strong"><?php echo $_smarty_tpl->__("including_discount");?>
:</td>
                                <td class="ty-nowrap" data-ct-orders-summary="summary-discount">
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['discount']), 0);?>

                                </td>
                            </tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount'])) {?>
                                <tr class="ty-orders-summary__row">
                                    <td class="ty-strong"><?php echo $_smarty_tpl->__("order_discount");?>
:</td>
                                    <td class="ty-nowrap" data-ct-orders-summary="summary-sub-discount">
                                        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount']), 0);?>

                                    </td>
                                </tr>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['coupons']) {?>
                                <?php  $_smarty_tpl->tpl_vars["coupon"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["coupon"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['coupons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["coupon"]->key => $_smarty_tpl->tpl_vars["coupon"]->value) {
$_smarty_tpl->tpl_vars["coupon"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["coupon"]->key;
?>
                                    <tr class="ty-orders-summary__row">
                                        <td class="ty-nowrap"><?php echo $_smarty_tpl->__("coupon");?>
:</td>
                                        <td data-ct-orders-summary="summary-coupons"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
</td>
                                    </tr>
                                <?php } ?>
                            <?php }?>

                            
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['tax_exempt']=="Y") {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("tax_exempt");?>
</td>
                                    <td>&nbsp;</td>
                                <tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge'])&&!$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['order_info']->value['payment_method']['surcharge_title'])===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
:&nbsp;</td>
                                    <td data-ct-orders-summary="summary-surchange"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge']), 0);?>
</td>
                                </tr>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:order_total")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:order_total"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <tr class="ty-orders-summary__row">
                                    <td class="ty-orders-summary__total"><?php echo $_smarty_tpl->__("total");?>
:&nbsp;</td>
                                    <td class="ty-orders-summary__total" data-ct-orders-summary="summary-total"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['total']), 0);?>
</td>
                                </tr>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:order_total"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:totals"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </table>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['promotions']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/promotions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('promotions'=>$_smarty_tpl->tpl_vars['order_info']->value['promotions']), 0);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['view_only']->value!="Y") {?>
                <div class="ty-orders-repay">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:repay")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:repay"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['repay']=="Y"&&$_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/order_repay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:repay"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php }?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="ty-orders-detail__products orders-product">
            <?php echo $_smarty_tpl->getSubTemplate ("common/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['group']), 0);?>

        </div>
        </div><!-- main order info -->

        <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
        <?php if ($_smarty_tpl->tpl_vars['use_shipments']->value) {?>
            <div id="content_shipment_info" class="ty-orders-shipment <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="shipment_info") {?>hidden<?php }?>">
                <?php  $_smarty_tpl->tpl_vars["shipment"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipment"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipment"]->key => $_smarty_tpl->tpl_vars["shipment"]->value) {
$_smarty_tpl->tpl_vars["shipment"]->_loop = true;
?>
                    <?php ob_start();
echo $_smarty_tpl->__("shipment");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1." #".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])), 0);?>

                    <div class="ty-orders-shipment__info">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:shipment_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:shipment_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
                            <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier']) {?>
                                <p><?php echo $_smarty_tpl->__("carrier");?>
: <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['name'];
if ($_smarty_tpl->tpl_vars['shipment']->value['tracking_number']) {?> (<?php echo $_smarty_tpl->__("tracking_number");?>
: <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url']) {?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url'];?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url']) {?></a><?php }?>)<?php }?></p>

                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                            <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:shipment_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>

                    <table class="ty-orders-shipment__table ty-table">
                        <thead>
                            <tr>
                                <th style="width: 90%"><?php echo $_smarty_tpl->__("product");?>
</th>
                                <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
                            </tr>
                        </thead>
                            <?php  $_smarty_tpl->tpl_vars["amount"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["amount"]->_loop = false;
 $_smarty_tpl->tpl_vars["product_hash"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipment']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["amount"]->key => $_smarty_tpl->tpl_vars["amount"]->value) {
$_smarty_tpl->tpl_vars["amount"]->_loop = true;
 $_smarty_tpl->tpl_vars["product_hash"]->value = $_smarty_tpl->tpl_vars["amount"]->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['product_hash']->value]) {?>
                                <?php $_smarty_tpl->tpl_vars["product"] = new Smarty_variable($_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['product_hash']->value], null, 0);?>
                                <tr style="vertical-align: top;">
                                    <td><?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" class="product-title"><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?></a><?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['is_edp']=="Y") {?>
                                        <div class="ty-right"><a href="<?php echo htmlspecialchars(fn_url("orders.order_downloads?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">[<?php echo $_smarty_tpl->__("download");?>
]</a></div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                                        <p><?php echo $_smarty_tpl->__("sku");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {
echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'inline_option'=>true), 0);
}?>
                                    </td>
                                    <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'ISO-8859-1');?>
</td>
                                </tr>
                            <?php }?>
                            <?php } ?>
                    </table>

                    <?php if ($_smarty_tpl->tpl_vars['shipment']->value['comments']) {?>
                        <div class="ty-orders-shipment-notes__info">
                            <h4 class="ty-orders-shipment-notes__header"><?php echo $_smarty_tpl->__("comments");?>
: </h4>
                            <div class="ty-orders-shipment-notes__body">
                                <span class="caret"> <span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></span>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['comments'], ENT_QUOTES, 'ISO-8859-1');?>

                            </div>
                        </div>
                    <?php }?>

                <?php }
if (!$_smarty_tpl->tpl_vars["shipment"]->_loop) {
?>
                    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_shipments_found");?>
</p>
                <?php } ?>
            </div>
        <?php }?>
        <?php }?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('top_order_actions'=>Smarty::$_smarty_vars['capture']['order_actions'],'content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section']), 0);?>


    <?php }?>
</div>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/details.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/details.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:details")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:details"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:details"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<h1 class="ty-mainbox-title">
<?php echo $_smarty_tpl->__("order");?>
&nbsp;<bdi>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
</bdi>
    <em class="ty-date">(<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>
)</em>
    <em class="ty-status"><?php echo $_smarty_tpl->__("status");?>
: <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['order_info']->value['status'],'display'=>"view",'name'=>"update_order[status]"), 0);?>
</em>
</h1>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->__("order");?>
&nbsp;<bdi>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
</bdi>
    <em class="ty-date">(<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>
)</em>
    <em class="ty-status"><?php echo $_smarty_tpl->__("status");?>
: <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['order_info']->value['status'],'display'=>"view",'name'=>"update_order[status]"), 0);?>
</em>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="ty-orders-detail">

    <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("order_actions", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['view_only']->value!="Y") {?>
                <div class="ty-orders__actions">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:details_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:details_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                       <?php $_smarty_tpl->tpl_vars["print_order"] = new Smarty_variable($_smarty_tpl->__("print_invoice"), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["print_pdf_order"] = new Smarty_variable($_smarty_tpl->__("print_pdf_invoice"), null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
                            <?php $_smarty_tpl->tpl_vars["print_order"] = new Smarty_variable($_smarty_tpl->__("print_credit_memo"), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["print_pdf_order"] = new Smarty_variable($_smarty_tpl->__("print_pdf_credit_memo"), null, 0);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="O") {?>
                            <?php $_smarty_tpl->tpl_vars["print_order"] = new Smarty_variable($_smarty_tpl->__("print_order_details"), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["print_pdf_order"] = new Smarty_variable($_smarty_tpl->__("print_pdf_order_details"), null, 0);?>
                        <?php }?>

                        

                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"orders-print__pdf ty-btn__text cm-no-ajax",'but_text'=>$_smarty_tpl->tpl_vars['print_pdf_order']->value,'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&format=pdf",'but_icon'=>"ty-icon-doc-text orders-print__icon"), 0);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:details_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <div class="ty-orders__actions-right">
                        <?php if ($_smarty_tpl->tpl_vars['view_only']->value!="Y") {?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:details_bullets")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:details_bullets"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:details_bullets"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php }?>

                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__text",'but_role'=>"text",'but_text'=>$_smarty_tpl->__("re_order"),'but_href'=>"orders.reorder?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-cw"), 0);?>

                    </div>

                </div>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

        <div id="content_general" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value&&$_smarty_tpl->tpl_vars['selected_section']->value!="general") {?>hidden<?php }?>">

            <?php if ($_smarty_tpl->tpl_vars['without_customer']->value!="Y") {?>
            
                <div class="orders-customer">
                <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['order_info']->value,'location'=>"I"), 0);?>

                </div>
            
            <?php }?>


        <?php $_smarty_tpl->_capture_stack[0][] = array("group", null, null); ob_start(); ?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("products_information")), 0);?>


            <table class="ty-orders-detail__table ty-table">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:items_list_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:items_list_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <thead>
                        <tr>
                            <th class="ty-orders-detail__table-product"><?php echo $_smarty_tpl->__("product");?>
</th>
                            <th class="ty-orders-detail__table-price"><?php echo $_smarty_tpl->__("price");?>
</th>
                            <th class="ty-orders-detail__table-quantity"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                                <th class="ty-orders-detail__table-discount"><?php echo $_smarty_tpl->__("discount");?>
</th>
                            <?php }?>
                            
                            <th class="ty-orders-detail__table-subtotal"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                        </tr>
                    </thead>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:items_list_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['parent']) {?>
                            <tr class="ty-valign-top">
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?></a><?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['is_edp']=="Y") {?>
                                        <div class="ty-right"><a href="<?php echo htmlspecialchars(fn_url("orders.order_downloads?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">[<?php echo $_smarty_tpl->__("download");?>
]</a></div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                                        <div class="ty-orders-detail__table-code"><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                                    <?php }?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {
echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'inline_option'=>true), 0);
}?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </td>
                                <td class="ty-right">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price']), 0);
}?>
                                </td>
                                <td class="ty-center">&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
                                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                                    <td class="ty-right">
                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['extra']['discount'])) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['extra']['discount']), 0);
} else { ?>-<?php }?>
                                    </td>
                                <?php }?>
                                
                                <td class="ty-right">
                                     &nbsp;<?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal']), 0);
}?>
                                 </td>
                            </tr>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php } ?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:extra_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:extra_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_smarty_tpl->tpl_vars["colsp"] = new Smarty_variable(5, null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {
$_smarty_tpl->tpl_vars["colsp"] = new Smarty_variable($_smarty_tpl->tpl_vars['colsp']->value+1, null, 0);
}?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['General']['tax_calculation']!="subtotal") {
$_smarty_tpl->tpl_vars["colsp"] = new Smarty_variable($_smarty_tpl->tpl_vars['colsp']->value+1, null, 0);
}?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:extra_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            </table>

            
                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['notes']) {?>
                <div class="ty-orders-notes">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("customer_notes")), 0);?>

                    <div class="ty-orders-notes__body">
                        <span class="ty-caret"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['notes'], ENT_QUOTES, 'ISO-8859-1');?>

                    </div>
                </div>
                <?php }?>
            

            <div class="ty-orders-summary clearfix">
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("summary")), 0);?>


                <div class="ty-orders-summary__right">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>

                <div class="ty-orders-summary__wrapper">
                    <table class="ty-orders-summary__table">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:totals")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:totals"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id']) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("payment_method");?>
:</td>
                                    <td style="width: 57%" data-ct-orders-summary="summary-payment">
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:totals_payment")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:totals_payment"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['payment'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description']) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description'], ENT_QUOTES, 'ISO-8859-1');?>
)<?php }?>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:totals_payment"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </td>
                                </tr>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['shipping']) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("shipping_method");?>
:</td>
                                    <td data-ct-orders-summary="summary-ship">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:totals_shipping")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:totals_shipping"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <?php if ($_smarty_tpl->tpl_vars['use_shipments']->value) {?>
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars["shipping_method"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping_method"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping_method"]->key => $_smarty_tpl->tpl_vars["shipping_method"]->value) {
$_smarty_tpl->tpl_vars["shipping_method"]->_loop = true;
?>
                                                <li><?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['shipping']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php } else { ?> – <?php }?></li>
                                            <?php } ?>
                                        </ul>
                                    <?php } else { ?>
                                        <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["shipping"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["shipping"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["shipping"]->iteration++;
 $_smarty_tpl->tpl_vars["shipping"]->last = $_smarty_tpl->tpl_vars["shipping"]->iteration === $_smarty_tpl->tpl_vars["shipping"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["f_shipp"]['last'] = $_smarty_tpl->tpl_vars["shipping"]->last;
?>

                                            <?php if ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier']&&$_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number']) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;(<?php echo $_smarty_tpl->__("tracking_number");?>
: <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier_info']['tracking_url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number'], ENT_QUOTES, 'ISO-8859-1');?>
</a>)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number']) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;(<?php echo $_smarty_tpl->__("tracking_number");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number'], ENT_QUOTES, 'ISO-8859-1');?>
)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier']) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;(<?php echo $_smarty_tpl->__("carrier");?>
: <?php echo $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier_info']['name'];?>
)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>

                                            <?php }?>
                                            <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['f_shipp']['last']) {?><br><?php }?>
                                        <?php } ?>
                                    <?php }?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:totals_shipping"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </td>
                                </tr>
                            <?php }?>

                            <tr class="ty-orders-summary__row">
                                <td><?php echo $_smarty_tpl->__("subtotal");?>
:&nbsp;</td>
                                <td data-ct-orders-summary="summary-subtotal"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_subtotal']), 0);?>
</td>
                            </tr>
                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost'])) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("shipping_cost");?>
:&nbsp;</td>
                                    <td data-ct-orders-summary="summary-shipcost"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost']), 0);?>
</td>
                                </tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['discount'])) {?>
                            <tr class="ty-orders-summary__row">
                                <td class="ty-strong"><?php echo $_smarty_tpl->__("including_discount");?>
:</td>
                                <td class="ty-nowrap" data-ct-orders-summary="summary-discount">
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['discount']), 0);?>

                                </td>
                            </tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount'])) {?>
                                <tr class="ty-orders-summary__row">
                                    <td class="ty-strong"><?php echo $_smarty_tpl->__("order_discount");?>
:</td>
                                    <td class="ty-nowrap" data-ct-orders-summary="summary-sub-discount">
                                        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount']), 0);?>

                                    </td>
                                </tr>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['coupons']) {?>
                                <?php  $_smarty_tpl->tpl_vars["coupon"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["coupon"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['coupons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["coupon"]->key => $_smarty_tpl->tpl_vars["coupon"]->value) {
$_smarty_tpl->tpl_vars["coupon"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["coupon"]->key;
?>
                                    <tr class="ty-orders-summary__row">
                                        <td class="ty-nowrap"><?php echo $_smarty_tpl->__("coupon");?>
:</td>
                                        <td data-ct-orders-summary="summary-coupons"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
</td>
                                    </tr>
                                <?php } ?>
                            <?php }?>

                            
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['tax_exempt']=="Y") {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("tax_exempt");?>
</td>
                                    <td>&nbsp;</td>
                                <tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge'])&&!$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['order_info']->value['payment_method']['surcharge_title'])===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
:&nbsp;</td>
                                    <td data-ct-orders-summary="summary-surchange"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge']), 0);?>
</td>
                                </tr>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:order_total")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:order_total"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <tr class="ty-orders-summary__row">
                                    <td class="ty-orders-summary__total"><?php echo $_smarty_tpl->__("total");?>
:&nbsp;</td>
                                    <td class="ty-orders-summary__total" data-ct-orders-summary="summary-total"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['total']), 0);?>
</td>
                                </tr>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:order_total"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:totals"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </table>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['promotions']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/promotions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('promotions'=>$_smarty_tpl->tpl_vars['order_info']->value['promotions']), 0);?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['view_only']->value!="Y") {?>
                <div class="ty-orders-repay">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:repay")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:repay"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['repay']=="Y"&&$_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/order_repay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:repay"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php }?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="ty-orders-detail__products orders-product">
            <?php echo $_smarty_tpl->getSubTemplate ("common/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['group']), 0);?>

        </div>
        </div><!-- main order info -->

        <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
        <?php if ($_smarty_tpl->tpl_vars['use_shipments']->value) {?>
            <div id="content_shipment_info" class="ty-orders-shipment <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!="shipment_info") {?>hidden<?php }?>">
                <?php  $_smarty_tpl->tpl_vars["shipment"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipment"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipment"]->key => $_smarty_tpl->tpl_vars["shipment"]->value) {
$_smarty_tpl->tpl_vars["shipment"]->_loop = true;
?>
                    <?php ob_start();
echo $_smarty_tpl->__("shipment");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp2." #".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])), 0);?>

                    <div class="ty-orders-shipment__info">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:shipment_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:shipment_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
                            <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier']) {?>
                                <p><?php echo $_smarty_tpl->__("carrier");?>
: <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['name'];
if ($_smarty_tpl->tpl_vars['shipment']->value['tracking_number']) {?> (<?php echo $_smarty_tpl->__("tracking_number");?>
: <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url']) {?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url'];?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url']) {?></a><?php }?>)<?php }?></p>

                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                            <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:shipment_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>

                    <table class="ty-orders-shipment__table ty-table">
                        <thead>
                            <tr>
                                <th style="width: 90%"><?php echo $_smarty_tpl->__("product");?>
</th>
                                <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
                            </tr>
                        </thead>
                            <?php  $_smarty_tpl->tpl_vars["amount"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["amount"]->_loop = false;
 $_smarty_tpl->tpl_vars["product_hash"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipment']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["amount"]->key => $_smarty_tpl->tpl_vars["amount"]->value) {
$_smarty_tpl->tpl_vars["amount"]->_loop = true;
 $_smarty_tpl->tpl_vars["product_hash"]->value = $_smarty_tpl->tpl_vars["amount"]->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['product_hash']->value]) {?>
                                <?php $_smarty_tpl->tpl_vars["product"] = new Smarty_variable($_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['product_hash']->value], null, 0);?>
                                <tr style="vertical-align: top;">
                                    <td><?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" class="product-title"><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?></a><?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['is_edp']=="Y") {?>
                                        <div class="ty-right"><a href="<?php echo htmlspecialchars(fn_url("orders.order_downloads?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">[<?php echo $_smarty_tpl->__("download");?>
]</a></div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                                        <p><?php echo $_smarty_tpl->__("sku");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {
echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'inline_option'=>true), 0);
}?>
                                    </td>
                                    <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'ISO-8859-1');?>
</td>
                                </tr>
                            <?php }?>
                            <?php } ?>
                    </table>

                    <?php if ($_smarty_tpl->tpl_vars['shipment']->value['comments']) {?>
                        <div class="ty-orders-shipment-notes__info">
                            <h4 class="ty-orders-shipment-notes__header"><?php echo $_smarty_tpl->__("comments");?>
: </h4>
                            <div class="ty-orders-shipment-notes__body">
                                <span class="caret"> <span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></span>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['comments'], ENT_QUOTES, 'ISO-8859-1');?>

                            </div>
                        </div>
                    <?php }?>

                <?php }
if (!$_smarty_tpl->tpl_vars["shipment"]->_loop) {
?>
                    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_shipments_found");?>
</p>
                <?php } ?>
            </div>
        <?php }?>
        <?php }?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('top_order_actions'=>Smarty::$_smarty_vars['capture']['order_actions'],'content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section']), 0);?>


    <?php }?>
</div>


<?php }?><?php }} ?>
