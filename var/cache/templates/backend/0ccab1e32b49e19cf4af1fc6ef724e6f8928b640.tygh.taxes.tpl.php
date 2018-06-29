<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:31:44
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/orders/taxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2788798455b33756ef0da92-82380385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ccab1e32b49e19cf4af1fc6ef724e6f8928b640' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/orders/taxes.tpl',
      1 => 1530100894,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2788798455b33756ef0da92-82380385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33756f02fc28_60965142',
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'search' => 0,
    'incompleted_view' => 0,
    'get_additional_statuses' => 0,
    'statuses' => 0,
    'orders' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'hide_controls' => 0,
    'width_per' => 0,
    'o' => 0,
    'settings' => 0,
    'p' => 0,
    'totals' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33756f02fc28_60965142')) {function content_5b33756f02fc28_60965142($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('text_admin_new_orders','incompleted_orders','orders','date','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','add_order','view_all_orders','incompleted_orders'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="new") {?>
    <p><?php echo $_smarty_tpl->__("text_admin_new_orders");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"orders.taxes",'view_type'=>"orders"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/taxes_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"orders.taxes"), 0);?>

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
<?php $_smarty_tpl->tpl_vars["page_title"] = new Smarty_variable("Taxes", null, 0);?>
<?php $_smarty_tpl->tpl_vars["order_status_descr"] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER'),$_smarty_tpl->tpl_vars['get_additional_statuses']->value,true), null, 0);?>
<?php $_smarty_tpl->tpl_vars["extra_status"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['statuses'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["order_statuses"] = new Smarty_variable(fn_get_statuses(@constant('STATUSES_ORDER'),$_smarty_tpl->tpl_vars['statuses']->value,$_smarty_tpl->tpl_vars['get_additional_statuses']->value,true), null, 0);?>

    <?php $_smarty_tpl->tpl_vars["hide_controls"] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["width_per"] = new Smarty_variable(15, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php $_smarty_tpl->tpl_vars["hide_controls"] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars["width_per"] = new Smarty_variable(20, null, 0);?>
    <?php }?>

<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?> 

<table width="100%" class="table table-middle">
<thead>
<tr>
    <th width="15%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="date") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
    <th width="5%">
        <span id="on_st"
              alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
              title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
              class=" hand cm-combinations-visitors">
            <span class="icon-caret-right"></span>
        </span>
        <span id="off_st"
              alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
              title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
              class="hand hidden cm-combinations-visitors">
            <span class="icon-caret-down"></span>
        </span>
    </th>
    <th>Order Id</th>
    <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
        <th>Vendor Name</th>
    <?php }?>

    
    <th width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width_per']->value, ENT_QUOTES, 'ISO-8859-1');?>
%" class="right">GST (CGST, SGST & IGST)</th>
    <th width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width_per']->value, ENT_QUOTES, 'ISO-8859-1');?>
%" class="right">Total Amount Deducting GST</th>
    <th width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width_per']->value, ENT_QUOTES, 'ISO-8859-1');?>
%" class="right">Total Order value</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orders"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orders"]['iteration']++;
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:order_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:order_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr>
    <td class="nowrap"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['o']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</td>
    <td class="left">
        <span name="plus_minus"
              id="on_payout_note_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['orders']['iteration'], ENT_QUOTES, 'ISO-8859-1');?>
"
              alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
              title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
              class="hand cm-combination-visitors">
            <span class="icon-caret-right"></span>
        </span>
        <span name="minus_plus"
              id="off_payout_note_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['orders']['iteration'], ENT_QUOTES, 'ISO-8859-1');?>
"
              alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
              title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
              class="hand hidden cm-combination-visitors">
            <span class="icon-caret-down"></span>
        </span>
    </td>
    <td>
        <a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" class="underlined"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
</a>
    </td>
    
    <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['company_name'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
    <?php }?>
    
    <td class="right">
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['o']->value['total_tax']), 0);?>

    </td>
    <td class="right">
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>($_smarty_tpl->tpl_vars['o']->value['total']-$_smarty_tpl->tpl_vars['o']->value['total_tax'])), 0);?>

    </td>
    <td class="right">
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['o']->value['total']), 0);?>

    </td>
</tr>
    <tr id="payout_note_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['orders']['iteration'], ENT_QUOTES, 'ISO-8859-1');?>
"
        class="row-more hidden">
        <?php if ($_smarty_tpl->tpl_vars['hide_controls']->value) {?>
        <td colspan="6" class="row-more-body top row-gray">
            <?php } else { ?>
        <td colspan="7" class="row-more-body top row-gray">
            <?php }?>
            <table width="100%" class="table table-middle">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th width="15%" class="right">GST Charged (in %)</th>
                    <th width="15%" class="right">GST (CGST, SGST & IGST)</th>
                    <th width="15%" class="right">Total Amount Deducting GST</th>
                    <th width="15%" class="right">Total Order value</th>
                </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars["p"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['o']->value['order_details']['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["p"]->key => $_smarty_tpl->tpl_vars["p"]->value) {
$_smarty_tpl->tpl_vars["p"]->_loop = true;
?>
                    <tr>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['product'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
                        <td class="right"><?php echo htmlspecialchars(round(($_smarty_tpl->tpl_vars['p']->value['tax_value']/($_smarty_tpl->tpl_vars['p']->value['subtotal']-$_smarty_tpl->tpl_vars['p']->value['tax_value']))*100), ENT_QUOTES, 'ISO-8859-1');?>
%</td>
                        <td class="right"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['p']->value['tax_value']), 0);?>
</td>
                        <td class="right"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['p']->value['subtotal']-$_smarty_tpl->tpl_vars['p']->value['tax_value']), 0);?>
</td>
                        <td class="right"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['p']->value['subtotal']), 0);?>
</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </td>
    </tr>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:order_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
            <td></td>
        <?php }?>
        <td class="right">
            <strong><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['tax_amount']), 0);?>
</strong>
        </td>
        <td class="right">
            <strong><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['order_amount']-$_smarty_tpl->tpl_vars['totals']->value['tax_amount']), 0);?>
</strong>
        </td>
        <td class="right">
            <strong><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['order_amount']), 0);?>
</strong>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
        <td></td>
        <?php }?>
        <td class="right">
            <strong><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['all_tax_amount']), 0);?>
</strong>
        </td>
        <td class="right">
            <strong><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['all_order_amount']-$_smarty_tpl->tpl_vars['totals']->value['all_tax_amount']), 0);?>
</strong>
        </td>
        <td class="right">
            <strong><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['all_order_amount']), 0);?>
</strong>
        </td>
    </tr>
</table>
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

<?php $_smarty_tpl->_capture_stack[0][] = array("incomplete_button", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['incompleted_view']->value) {?>
        <li><?php ob_start();?><?php echo $_smarty_tpl->__("view_all_orders");?>
<?php $_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"orders.manage",'text'=>$_tmp1));?>
</li>
    <?php } else { ?>
        <li><?php ob_start();?><?php echo $_smarty_tpl->__("incompleted_orders");?>
<?php $_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"orders.manage?skip_view=Y&status=".((string)@constant('STATUS_INCOMPLETED_ORDER')),'text'=>$_tmp2,'form'=>"orders_list_form"));?>
</li>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
		
  
         <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>   <?php echo Smarty::$_smarty_vars['capture']['incomplete_button'];?>
 <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['orders']->value&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
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

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'content_id'=>"manage_orders"), 0);?>

<?php }} ?>
