<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 19:05:00
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/shipments/details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18883858735b339284045d90-53174775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '614f7e5bf2e5cca3d2a4a9cafaebb4652f41bfdb' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/shipments/details.tpl',
      1 => 1502317848,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18883858735b339284045d90-53174775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipment' => 0,
    'order_info' => 0,
    'oi' => 0,
    'settings' => 0,
    'shipment_statuses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b339284316be8_14089365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b339284316be8_14089365')) {function content_5b339284316be8_14089365($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('product','quantity','sku','comments','shipment_date','shipment_info','shipment','on','by','status','order','print_packing_slip','print_pdf_packing_slip','delete','shipment_details'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<div id="content_general">

<form name="update_shipment_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
<input type="hidden" name="shipment_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    
    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['order_info']->value,'location'=>"I"), 0);?>

    

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shipments:additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shipments:additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shipments:additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <table width="100%" class="table table-middle">
    <thead>
        <tr>
            <th><?php echo $_smarty_tpl->__("product");?>
</th>
            <th width="5%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
        </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["oi"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['oi']->value['amount']>0) {?>
    <tr>
        <td>
            <?php if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php }
echo $_smarty_tpl->tpl_vars['oi']->value['product'];
if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?></a><?php }?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shipments:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shipments:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_code']) {?></p><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'ISO-8859-1');?>
</p><?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shipments:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><div class="options-info"><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);?>
</div><?php }?>
        </td>
        <td class="center">
            &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
<br />
        </td>
    </tr>
    <?php }?>
    <?php } ?>
    </table>

    <div class="order-notes statistic">
        <div class="row-fluid">
            <h3><label for="notes"><?php echo $_smarty_tpl->__("comments");?>
</label></h3>
            <textarea class="input-xxlarge" cols="40" rows="5" name="shipment_data[comments]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['comments'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
        </div>
        <div class="row-fluid">
            <h3><label for="elm_date_holder"><?php echo $_smarty_tpl->__("shipment_date");?>
</label></h3>
            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_date_holder",'date_name'=>"shipment_data[date][date]",'date_val'=>$_smarty_tpl->tpl_vars['shipment']->value['shipment_timestamp'],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'show_time'=>true,'time_name'=>"shipment_data[date][time]"), 0);?>

        </div>
    </div>
</form>
<!--content_general--></div>
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

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("shipment_info");?>
</h6>
        <p><?php echo $_smarty_tpl->__("shipment");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'ISO-8859-1');?>

        <?php echo $_smarty_tpl->__("on");?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['shipment']->value['shipment_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'ISO-8859-1');?>
 <br />
        <?php echo $_smarty_tpl->__("by");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['shipping'], ENT_QUOTES, 'ISO-8859-1');?>
 <br /><?php if ($_smarty_tpl->tpl_vars['shipment']->value['tracking_number']) {?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'ISO-8859-1');?>
)<?php }
if ($_smarty_tpl->tpl_vars['shipment']->value['carrier']) {?> (<?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['name'];?>
)<?php }?></p>

        <h6><?php echo $_smarty_tpl->__("status");?>
</h6>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'],'status'=>$_smarty_tpl->tpl_vars['shipment']->value['status'],'items_status'=>$_smarty_tpl->tpl_vars['shipment_statuses']->value,'table'=>"shipments",'object_id_name'=>"shipment_id",'popup_additional_class'=>"dropleft"), 0);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shipments:customer_shot_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shipments:customer_shot_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shipments:customer_shot_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_form'=>"update_shipment_form",'but_name'=>"dispatch[shipments.update]",'save'=>true), 0);?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shipments:details_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shipments:details_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><?php ob_start();
echo $_smarty_tpl->__("order");
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('raw'=>true,'type'=>"list",'text'=>$_tmp1." <bdi>#".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."</bdi>",'href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("print_packing_slip"),'href'=>"shipments.packing_slip?shipment_ids[]=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id']),'class'=>"cm-new-window"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("print_pdf_packing_slip"),'href'=>"shipments.packing_slip?shipment_ids[]=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])."&format=pdf",'class'=>"cm-new-window"));?>
</li>
            <li class="divider"></li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"shipments.delete?shipment_ids[]=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id']),'method'=>"POST"));?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shipments:details_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("shipment_details"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
