<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 17:23:26
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/orders/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14232813525b337517bfee82-74037845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8917cf129e7ad9cd76a3f0c7f19961df9c3552d6' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/orders/manage.tpl',
      1 => 1530273203,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14232813525b337517bfee82-74037845',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337517cb3384_40405511',
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'search' => 0,
    'incompleted_view' => 0,
    'get_additional_statuses' => 0,
    'statuses' => 0,
    'order_by_statuses' => 0,
    'order_status' => 0,
    'time_from' => 0,
    'time_to' => 0,
    'url' => 0,
    'order_statuses' => 0,
    'order_ref_status' => 0,
    'statusexist' => 0,
    'failedordercount' => 0,
    'declinedordercount' => 0,
    'failedordertotal' => 0,
    'declinedordertotal' => 0,
    'orders' => 0,
    'order_status_descr' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'o' => 0,
    'notify_vendor' => 0,
    'extra_status' => 0,
    'settings' => 0,
    '_REQUEST' => 0,
    'total_pages' => 0,
    'display_totals' => 0,
    'totals' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337517cb3384_40405511')) {function content_5b337517cb3384_40405511($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('text_admin_new_orders','incompleted_orders','orders','id','status','date','customer','phone','total','order','invoice','credit_memo','view','edit','copy','no_declined_orders','no_complete_orders','no_failed_orders','no_cancel_orders','no_pending_orders','no_back_orders','no_awiting_orders','no_processed_orders','no_data','for_this_page_orders','gross_total','totally_paid','for_all_found_orders','gross_total','totally_paid','add_order','view_all_orders','incompleted_orders','bulk_print_invoice','view_purchased_products','export_selected','bulk_print_packing_slip','bulk_print_pdf'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="new") {?>
    <p><?php echo $_smarty_tpl->__("text_admin_new_orders");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"orders.manage",'view_type'=>"orders"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"orders.manage"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" target="_self" name="orders_list_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

<?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['incompleted_view']->value) {?>
    <?php $_smarty_tpl->tpl_vars["page_title"] = new Smarty_variable($_smarty_tpl->__("incompleted_orders"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["get_additional_statuses"] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["page_title"] = new Smarty_variable($_smarty_tpl->__("orders"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["get_additional_statuses"] = new Smarty_variable(false, null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars["order_status_descr"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER'),$_smarty_tpl->tpl_vars['get_additional_statuses']->value,true), null, 0);?>
<?php $_smarty_tpl->tpl_vars["extra_status"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['statuses'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["order_statuses"] = new Smarty_variable(fn_get_statuses(@constant('STATUSES_ORDER'),$_smarty_tpl->tpl_vars['statuses']->value,$_smarty_tpl->tpl_vars['get_additional_statuses']->value,true), null, 0);?>
<div class="dashboard" id="dashboard">
<table class="dashboard-card-table">
        <tbody>
            <tr> 
					<?php  $_smarty_tpl->tpl_vars["order_status"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["order_status"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_by_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["order_status"]->key => $_smarty_tpl->tpl_vars["order_status"]->value) {
$_smarty_tpl->tpl_vars["order_status"]->_loop = true;
?>
					

					<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url("orders.manage?is_search=Y&status[]=".((string)$_smarty_tpl->tpl_vars['order_status']->value['status'])), null, 0);?>
					<?php if (($_smarty_tpl->tpl_vars['order_status']->value['status']=="F")) {?>
                        
						<?php $_smarty_tpl->tpl_vars['failedordercount'] = new Smarty_variable($_smarty_tpl->tpl_vars['order_status']->value['count'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['failedordertotal'] = new Smarty_variable($_smarty_tpl->tpl_vars['order_status']->value['total'], null, 0);?>
						<?php }?>
						<?php if (($_smarty_tpl->tpl_vars['order_status']->value['status']=="D")) {?>
                        
						<?php $_smarty_tpl->tpl_vars['declinedordercount'] = new Smarty_variable($_smarty_tpl->tpl_vars['order_status']->value['count'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars['declinedordertotal'] = new Smarty_variable($_smarty_tpl->tpl_vars['order_status']->value['total'], null, 0);?>
						<?php }?>
					<?php $_smarty_tpl->tpl_vars['time_from'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['time_from']->value) ? $_smarty_tpl->tpl_vars['time_from']->value : 0, null, 0);?>	
					<?php $_smarty_tpl->tpl_vars['time_to'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['time_to']->value) ? $_smarty_tpl->tpl_vars['time_to']->value : time(), null, 0);?>
					<?php if (($_smarty_tpl->tpl_vars['order_status']->value['status']!="F")&&($_smarty_tpl->tpl_vars['order_status']->value['status']!="D")) {?>
					<td>
                        <div class="dashboard-card">
                            <div class="dashboard-card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['status_name'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                            <div class="dashboard-card-content">
								<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url("orders.manage?is_search=Y&period=C&time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status[]=".((string)$_smarty_tpl->tpl_vars['order_status']->value['status'])), null, 0);?>
<h3><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['count'], ENT_QUOTES, 'ISO-8859-1');?>
</a></h3>
<p><?php echo htmlspecialchars(_("Total : "), ENT_QUOTES, 'ISO-8859-1');
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_status']->value['total']), 0);?>
</p>

                             </div>
                        </div>
						</td>
						<?php }?>
                    
               <?php } ?>
			    
			   <?php  $_smarty_tpl->tpl_vars["order_ref_status"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["order_ref_status"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["order_ref_status"]->key => $_smarty_tpl->tpl_vars["order_ref_status"]->value) {
$_smarty_tpl->tpl_vars["order_ref_status"]->_loop = true;
?>
			   <?php $_smarty_tpl->tpl_vars['statusexist'] = new Smarty_variable(0, null, 0);?>
			    <?php  $_smarty_tpl->tpl_vars["order_status"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["order_status"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_by_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["order_status"]->key => $_smarty_tpl->tpl_vars["order_status"]->value) {
$_smarty_tpl->tpl_vars["order_status"]->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url("orders.manage?is_search=Y&period=C&time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status[]=".((string)$_smarty_tpl->tpl_vars['order_ref_status']->value['status'])), null, 0);?>
					 <?php if (($_smarty_tpl->tpl_vars['order_ref_status']->value['status']==$_smarty_tpl->tpl_vars['order_status']->value['status'])) {?>
					<?php $_smarty_tpl->tpl_vars['statusexist'] = new Smarty_variable(1, null, 0);
break 1;?>
					<?php }?>
					<?php } ?>
				<?php if (($_smarty_tpl->tpl_vars['order_ref_status']->value['status']!="F")&&($_smarty_tpl->tpl_vars['order_ref_status']->value['status']!="D")) {?>
					<?php if ((!$_smarty_tpl->tpl_vars['statusexist']->value&&$_smarty_tpl->tpl_vars['order_ref_status']->value['status']!="0")) {?>
					<td>
					
                        <div class="dashboard-card">
                            <div class="dashboard-card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_ref_status']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                            <div class="dashboard-card-content">
<h3><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'ISO-8859-1');?>
">0</a></h3>
<p><?php echo htmlspecialchars(_("Total : "), ENT_QUOTES, 'ISO-8859-1');
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>"0"), 0);?>
</p>

                             </div>
                        </div>
                    </td> 
					<?php }
}?>
					
               
			   <?php } ?>
			   <td>
			   <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url("orders.manage?is_search=Y&period=C&time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&status[]=F&status[]=D"), null, 0);?>
			   <div class="dashboard-card">
                            <div class="dashboard-card-title"><?php echo htmlspecialchars("Failed", ENT_QUOTES, 'ISO-8859-1');?>
</div>
                            <div class="dashboard-card-content">
<h3><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['failedordercount']->value+$_smarty_tpl->tpl_vars['declinedordercount']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a></h3>
<p><?php echo htmlspecialchars(_("Total : "), ENT_QUOTES, 'ISO-8859-1');
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['failedordertotal']->value+$_smarty_tpl->tpl_vars['declinedordertotal']->value), 0);?>
</p>

                             </div>
                        </div>
						 </td>
			   
					
			     </tr>
				
                    
			   
        </tbody>
    </table>
</div>
<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?> 

<table width="100%" class="table table-middle">
<thead>
<tr>
    <th  class="left">
    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>$_smarty_tpl->tpl_vars['order_status_descr']->value), 0);?>

    </th>
    <th width="17%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("id");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="order_id") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
    <th width="17%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
    <th width="15%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="date") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
    <th width="20%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("customer");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="customer") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a></th>
    <th width="15%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=phone&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("phone");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="phone") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a></th>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <th>&nbsp;</th>
    <th width="14%" class="right"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="total") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'ISO-8859-1');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=total&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("total");?>
</a></th>

</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:order_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:order_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr>
    <td class="left">
        <input type="checkbox" name="order_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['o']->value['status']), ENT_QUOTES, 'ISO-8859-1');?>
" /></td>
    <td>
        <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" class="underlined"><?php echo $_smarty_tpl->__("order");?>
 <bdi>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
</bdi></a>
        <?php if ($_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['o']->value['status']]['params']['appearance_type']=="I"&&$_smarty_tpl->tpl_vars['o']->value['invoice_id']) {?>
            <p class="muted"><?php echo $_smarty_tpl->__("invoice");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['invoice_id'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
        <?php } elseif ($_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['o']->value['status']]['params']['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['o']->value['credit_memo_id']) {?>
            <p class="muted"><?php echo $_smarty_tpl->__("credit_memo");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['credit_memo_id'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['o']->value), 0);?>

    </td>
    <td>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <?php $_smarty_tpl->tpl_vars["notify_vendor"] = new Smarty_variable(true, null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["notify_vendor"] = new Smarty_variable(false, null, 0);?>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('suffix'=>"o",'order_info'=>$_smarty_tpl->tpl_vars['o']->value,'id'=>$_smarty_tpl->tpl_vars['o']->value['order_id'],'status'=>$_smarty_tpl->tpl_vars['o']->value['status'],'items_status'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'update_controller'=>"orders",'notify'=>true,'notify_department'=>true,'notify_vendor'=>$_smarty_tpl->tpl_vars['notify_vendor']->value,'status_target_id'=>"orders_total,".((string)$_smarty_tpl->tpl_vars['rev']->value),'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['extra_status']->value),'statuses'=>$_smarty_tpl->tpl_vars['order_statuses']->value,'btn_meta'=>strtolower("btn btn-info o-status-".((string)$_smarty_tpl->tpl_vars['o']->value['status'])." btn-small")), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['o']->value['issuer_name']) {?>
        <p class="muted shift-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['issuer_name'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
        <?php }?>
    </td>
    <td class="nowrap"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['o']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['o']->value['email']) {?><a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['o']->value['email']), ENT_QUOTES, 'ISO-8859-1');?>
">@</a> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['o']->value['user_id']) {?><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['o']->value['user_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['lastname'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['o']->value['user_id']) {?></a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['o']->value['company']) {?><p class="muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['company'], ENT_QUOTES, 'ISO-8859-1');?>
</p><?php }?>
    </td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['phone'], ENT_QUOTES, 'ISO-8859-1');?>
</td>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <td width="5%" class="center">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
            <li><?php ob_start();?><?php echo $_smarty_tpl->__("view");?>
<?php $_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'text'=>$_tmp1));?>
</li>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><?php ob_start();?><?php echo $_smarty_tpl->__("edit");?>
<?php $_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"order_management.edit?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id']),'text'=>$_tmp2));?>
</li>
                <li><?php ob_start();?><?php echo $_smarty_tpl->__("copy");?>
<?php $_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"order_management.edit?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])."&copy=1",'text'=>$_tmp3));?>
</li>
                <?php $_smarty_tpl->tpl_vars["current_redirect_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items']));?>

        </div>
    </td>
    <td class="right">
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['o']->value['total']), 0);?>

    </td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:order_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>
</table>
<?php } else { ?>
 
<?php if ($_smarty_tpl->tpl_vars['_REQUEST']->value['status'][0]=='D') {?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_declined_orders");?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['_REQUEST']->value['status'][0]=='C') {?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_complete_orders");?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['_REQUEST']->value['status'][0]=='F') {?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_failed_orders");?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['_REQUEST']->value['status'][0]=='I') {?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_cancel_orders");?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['_REQUEST']->value['status'][0]=='O') {?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_pending_orders");?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['_REQUEST']->value['status'][0]=='B') {?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_back_orders");?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['_REQUEST']->value['status'][0]=='Y') {?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_awiting_orders");?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['_REQUEST']->value['status'][0]=='P') {?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_processed_orders");?>
</p>
<?php } else { ?> 
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p> 
<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <div class="statistic clearfix" id="orders_total">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:statistic_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:statistic_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <table class="pull-right ">
            <?php if ($_smarty_tpl->tpl_vars['total_pages']->value>1&&$_smarty_tpl->tpl_vars['search']->value['page']!="full_list") {?>
                <tr>
                    <td>&nbsp;</td>
                    <td width="100px"><?php echo $_smarty_tpl->__("for_this_page_orders");?>
:</td>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->__("gross_total");?>
:</td>
                    <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['display_totals']->value['gross_total']), 0);?>
</td>
                </tr>
                <?php if (!$_smarty_tpl->tpl_vars['incompleted_view']->value) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->__("totally_paid");?>
:</td>
                        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['display_totals']->value['totally_paid']), 0);?>
</td>
                    </tr>
                <?php }?>
                <hr />
                <tr>
                    <td><?php echo $_smarty_tpl->__("for_all_found_orders");?>
:</td>
                </tr>
            <?php }?>
            <tr>
                <td class="shift-right"><?php echo $_smarty_tpl->__("gross_total");?>
:</td>
                <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['gross_total']), 0);?>
</td>
            </tr>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:totals_stats")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:totals_stats"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (!$_smarty_tpl->tpl_vars['incompleted_view']->value) {?>
                    <tr>
                        <td class="shift-right"><h4><?php echo $_smarty_tpl->__("totally_paid");?>
:</h4></td>
                        <td class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['totally_paid']), 0);?>
</td>
                    </tr>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:totals_stats"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </table>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:statistic_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <!--orders_total--></div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>



<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:manage_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:manage_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"order_management.new",'prefix'=>"bottom",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_order"),'icon'=>"icon-plus"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:manage_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>}
<?php $_smarty_tpl->_capture_stack[0][] = array("incomplete_button", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['incompleted_view']->value) {?>
        <li><?php ob_start();?><?php echo $_smarty_tpl->__("view_all_orders");?>
<?php $_tmp4=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"orders.manage",'text'=>$_tmp4));?>
</li>
    <?php } else { ?>
        <li><?php ob_start();?><?php echo $_smarty_tpl->__("incompleted_orders");?>
<?php $_tmp5=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"orders.manage?skip_view=Y&status=".((string)@constant('STATUS_INCOMPLETED_ORDER')),'text'=>$_tmp5,'form'=>"orders_list_form"));?>
</li>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
		
            <li><?php ob_start();?><?php echo $_smarty_tpl->__("bulk_print_invoice");?>
<?php $_tmp6=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp6,'dispatch'=>"dispatch[orders.bulk_print]",'form'=>"orders_list_form",'class'=>"cm-new-window"));?>
</li>
            <li><?php ob_start();?><?php echo $_smarty_tpl->__("view_purchased_products");?>
<?php $_tmp7=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp7,'dispatch'=>"dispatch[orders.products_range]",'form'=>"orders_list_form"));?>
</li>

            <li class="divider"></li>
            <li><?php ob_start();?><?php echo $_smarty_tpl->__("export_selected");?>
<?php $_tmp8=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp8,'dispatch'=>"dispatch[orders.export_range]",'form'=>"orders_list_form"));?>
</li>

            <?php echo Smarty::$_smarty_vars['capture']['incomplete_button'];?>


            <?php if ($_smarty_tpl->tpl_vars['orders']->value&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
			            <li><?php ob_start();?><?php echo $_smarty_tpl->__("bulk_print_packing_slip");?>
<?php $_tmp9=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp9,'dispatch'=>"dispatch[orders.packing_slip]",'form'=>"orders_list_form",'class'=>"cm-new-window"));?>
</li>

			            <li><?php ob_start();?><?php echo $_smarty_tpl->__("bulk_print_pdf");?>
<?php $_tmp10=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp10,'dispatch'=>"dispatch[orders.bulk_print..pdf]",'form'=>"orders_list_form"));?>
</li>

                <li class="divider"></li>
				
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[orders.m_delete]",'form'=>"orders_list_form"));?>
</li>
            <?php }?>
        <?php } else { ?>
            <?php echo Smarty::$_smarty_vars['capture']['incomplete_button'];?>

        <?php }?>
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:list_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:list_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:list_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'content_id'=>"manage_orders"), 0);?>

<?php }} ?>
