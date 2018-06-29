<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 17:01:17
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/companies/balance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8831401135b337440a8fe75-32053951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06c5f7b63d5920d3977e2cf23bcbc3f2d46c53d7' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/companies/balance.tpl',
      1 => 1530271859,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8831401135b337440a8fe75-32053951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337440af04e0_10255856',
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'search' => 0,
    'c_url' => 0,
    'payouts' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'hide_controls' => 0,
    'payout' => 0,
    'approval_statuses' => 0,
    'settings' => 0,
    'hide_extra_button' => 0,
    'totals' => 0,
    'remaining_balance' => 0,
    'show_add_button' => 0,
    'popup_title' => 0,
    'btn_title' => 0,
    'current_balance' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337440af04e0_10255856')) {function content_5b337440af04e0_10255856($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_sanitize_html')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.sanitize_html.php';
?><?php
fn_preload_lang_vars(array('expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','status','date','vendor_payouts.type','vendor','vendor_payouts.transaction_value','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','deleted','delete','comment','no_data','save','new_withdrawal','add_withdrawal','new_payout','add_payout','vendor_accounting','vendor_payouts.current_balance'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>(($tmp = @$_REQUEST['selected_section'])===null||$tmp==='' ? "transactions" : $tmp),'group_name'=>"vendor_payouts"), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php $_smarty_tpl->tpl_vars["hide_controls"] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" class="form-horizontal form-edit" name="manage_payouts_form">

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"/>
        <?php if ($_smarty_tpl->tpl_vars['payouts']->value) {?>
            <table width="100%" class="table table-middle" id="payouts_list">
                <thead>
                <tr>
                    <th class="left"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
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
                    <th width="5%"><?php echo $_smarty_tpl->__("status");?>
</th>
                    <th>
                        <a class="cm-ajax"
                           href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=sort_date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
"
                           data-ca-target-id="pagination_contents">
                            <?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="sort_date") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
                        </a>
                    </th>
                    <th><?php echo $_smarty_tpl->__("vendor_payouts.type");?>
</th>
                    <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
                        <th><?php echo $_smarty_tpl->__("vendor");?>
</th>
                    <?php }?>
                    <th class="center" width="5%">&nbsp;</th>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:balance_list_th")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:balance_list_th"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:balance_list_th"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <th width="15%" class="right"><?php echo $_smarty_tpl->__("vendor_payouts.transaction_value");?>
</th>
                </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['payout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["payouts"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['payout']->key => $_smarty_tpl->tpl_vars['payout']->value) {
$_smarty_tpl->tpl_vars['payout']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["payouts"]['iteration']++;
?>
                    <tr class="payout payout-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['payout']->value['payout_type']), ENT_QUOTES, 'ISO-8859-1');?>
">
                        <td class="left">
                            <input type="checkbox" name="payout_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-item"/>
                        </td>
                        <td class="left approval-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['payout']->value['approval_status']), ENT_QUOTES, 'ISO-8859-1');?>
">
                            <span name="plus_minus"
                                  id="on_payout_note_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['payouts']['iteration'], ENT_QUOTES, 'ISO-8859-1');?>
"
                                  alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                  title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                  class="hand cm-combination-visitors">
                                <span class="icon-caret-right"></span>
                            </span>
                            <span name="minus_plus"
                                  id="off_payout_note_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['payouts']['iteration'], ENT_QUOTES, 'ISO-8859-1');?>
"
                                  alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                  title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                  class="hand hidden cm-combination-visitors">
                                <span class="icon-caret-down"></span>
                            </span>
                        </td>
                        <td class="nowrap">
                            <?php if ($_smarty_tpl->tpl_vars['payout']->value['payout_type']==smarty_modifier_enum("VendorPayoutTypes::PAYOUT")||$_smarty_tpl->tpl_vars['payout']->value['payout_type']==smarty_modifier_enum("VendorPayoutTypes::WITHDRAWAL")) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['payout']->value['payout_id'],'status'=>$_smarty_tpl->tpl_vars['payout']->value['approval_status'],'items_status'=>$_smarty_tpl->tpl_vars['approval_statuses']->value,'notify_vendor'=>true,'update_controller'=>"companies.payouts",'st_return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url'],'st_result_ids'=>"balance_total,payouts_list",'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_controls']->value), 0);?>

                            <?php }?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['payout']->value['payout_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>

                        </td>
                        <td>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:payout_type_description")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:payout_type_description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php echo smarty_modifier_sanitize_html($_smarty_tpl->tpl_vars['payout']->value['payout_type_description']);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:payout_type_description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </td>
                        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['payout']->value['company_id']) {?>
                                    <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['payout']->value['company'])===null||$tmp==='' ? $_smarty_tpl->__("deleted") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'ISO-8859-1');?>

                                <?php }?>
                            </td>
                        <?php }?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:balance_list_tr")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:balance_list_tr"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:balance_list_tr"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <td class="center nowrap">
                            <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
                                <div class="hidden-tools">
                                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                        <li><?php ob_start();
echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'ISO-8859-1');
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"companies.payout_delete?payout_id=".((string)$_smarty_tpl->tpl_vars['payout']->value['payout_id'])."&redirect_url=".$_tmp1,'method'=>"POST"));?>
</li>
                                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                                </div>
                            <?php }?>
                        </td>
                        <td class="right">
                            
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:payout_amount")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:payout_amount"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['payout']->value['display_amount']), 0);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:payout_amount"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </td>
                    </tr>
                    <tr id="payout_note_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['payouts']['iteration'], ENT_QUOTES, 'ISO-8859-1');?>
"
                        class="row-more <?php if ($_smarty_tpl->tpl_vars['hide_extra_button']->value!="Y") {?>hidden<?php }?>">
                        <td colspan="8" class="row-more-body top row-gray">
                            <div class="control-group">
                                <label class="control-label"
                                       for="payout_comments_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                    <?php echo $_smarty_tpl->__("comment");?>

                                </label>
                                <div class="controls">
                                    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                                        <p><?php if ($_smarty_tpl->tpl_vars['payout']->value['comments']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['comments'], ENT_QUOTES, 'ISO-8859-1');
} else { ?>-<?php }?></p>
                                    <?php } else { ?>
                                        <textarea class="span6"
                                                  rows="4"
                                                  cols="25"
                                                  name="payout_comments[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'ISO-8859-1');?>
]"
                                                  id="payout_comments_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['comments'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
                                    <?php }?>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            <!--payouts_list--></table>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

        <div class="clearfix">
            <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['payouts']->value&&$_smarty_tpl->tpl_vars['totals']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/balance_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    </form>
    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value&&$_smarty_tpl->tpl_vars['payouts']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[companies.m_delete_payouts]",'form'=>"manage_payouts_form"));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[companies.update_payout_comments]",'but_role'=>"submit-link",'but_target_form'=>"manage_payouts_form"), 0);?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->tpl_vars["show_add_button"] = new Smarty_variable(false, null, 0);?>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php $_smarty_tpl->tpl_vars["show_add_button"] = new Smarty_variable(true, null, 0);?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['remaining_balance']->value>0) {?>
            <?php $_smarty_tpl->tpl_vars["show_add_button"] = new Smarty_variable(true, null, 0);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_add_button']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/balance_new_payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('c_url'=>$_smarty_tpl->tpl_vars['c_url']->value), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <?php $_smarty_tpl->tpl_vars['popup_title'] = new Smarty_variable($_smarty_tpl->__("new_withdrawal"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['btn_title'] = new Smarty_variable($_smarty_tpl->__("add_withdrawal"), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['popup_title'] = new Smarty_variable($_smarty_tpl->__("new_payout"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['btn_title'] = new Smarty_variable($_smarty_tpl->__("add_payout"), null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_payment",'text'=>$_smarty_tpl->tpl_vars['popup_title']->value,'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>$_smarty_tpl->tpl_vars['btn_title']->value,'act'=>"general",'icon'=>"icon-plus"), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"companies.balance",'view_type'=>"balance"), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/balance_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"companies.balance"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->__("vendor_accounting");?>

    <?php if ($_smarty_tpl->tpl_vars['current_balance']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("balance", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['current_balance']->value), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <span class="f-middle" style="color: #ffffff !important;"><?php echo $_smarty_tpl->__("vendor_payouts.current_balance",array("[balance]"=>Smarty::$_smarty_vars['capture']['balance']));?>
</span>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>Smarty::$_smarty_vars['capture']['mainbox_title'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>
<?php }} ?>
