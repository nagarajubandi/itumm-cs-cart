<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 17:13:38
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/rma/views/rma/details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6218021795b34c9eac9ea23-54164079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8341e37a73a22bfa902808d22b192d463f5dc0bf' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/rma/views/rma/details.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6218021795b34c9eac9ea23-54164079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return_info' => 0,
    'settings' => 0,
    'time_from' => 0,
    'time_to' => 0,
    'check_disabled' => 0,
    'ri' => 0,
    'key' => 0,
    'reason_id' => 0,
    'reasons' => 0,
    'order_info' => 0,
    'is_refund' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34c9ead42848_77418849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34c9ead42848_77418849')) {function content_5b34c9ead42848_77418849($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('rma_return','by','on','decline_products','product','price','quantity','reason','free','no_data','accept_products','product','price','quantity','reason','free','no_data','comments','customer_information','status','recalculate_order','manually_recalculate_order','dont_recalculate_order','notify_customer','notify_orders_department','notify_vendor','print_slip','delete_this_return','rma_reasons','rma_actions','rma_request_statuses','related_order','return_info'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['return_info']->value) {?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="return_info_form" class="form-horizontal form-edit" />
<input type="hidden" name="change_return_status[order_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="change_return_status[action]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['action'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="change_return_status[status_from]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['status'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="change_return_status[return_id]" value="<?php echo htmlspecialchars($_REQUEST['return_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="total_amount" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['total_amount'], ENT_QUOTES, 'ISO-8859-1');?>
" />

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
<div class="sidebar-row">
    <?php echo $_smarty_tpl->__("rma_return");?>
&nbsp;&nbsp;<span>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['return_id'], ENT_QUOTES, 'ISO-8859-1');?>
</span>&nbsp;
    <?php echo $_smarty_tpl->__("by");?>
&nbsp;&nbsp;<span><?php if ($_smarty_tpl->tpl_vars['return_info']->value['user_id']) {?><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['return_info']->value['user_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php }
echo htmlspecialchars(fn_get_user_name($_smarty_tpl->tpl_vars['return_info']->value['user_id']), ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['return_info']->value['user_id']) {?></a><?php }?></span>&nbsp;
        <?php $_smarty_tpl->tpl_vars["time_from"] = new Smarty_variable(rawurlencode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['return_info']->value['timestamp'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["time_to"] = new Smarty_variable(rawurlencode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['return_info']->value['timestamp'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), null, 0);?>
        <?php echo $_smarty_tpl->__("on");?>
&nbsp;<a href="<?php echo htmlspecialchars(fn_url("rma.returns?period=C&time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['return_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</a>,&nbsp;&nbsp;<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['return_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"rma:items_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"rma:items_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"rma:items_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->tpl_vars["check_disabled"] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['return_info']->value['status']!=@constant('RMA_DEFAULT_STATUS')) {?>
    <?php $_smarty_tpl->tpl_vars["check_disabled"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

    <div id="content_return_products">
        <?php if ($_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_ACCEPTED')]) {?>
        <div class="clearfix">
            <div class="buttons-container pull-right">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"rma:return_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"rma:return_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['return_info']->value['status']==@constant('RMA_DEFAULT_STATUS')) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("decline_products"),'but_name'=>"dispatch[rma.decline_products]",'but_role'=>"button_main",'but_meta'=>"cm-process-items"), 0);?>

            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"rma:return_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>

        <table width="100%" class="table table-middle">
        <thead>
        <tr>
            <th width="1%" class="center">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"rma:returned_items_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"rma:returned_items_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_disabled'=>$_smarty_tpl->tpl_vars['check_disabled']->value), 0);?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"rma:returned_items_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </th>
            <th width="100%"><?php echo $_smarty_tpl->__("product");?>
</th>
            <th><?php echo $_smarty_tpl->__("price");?>
</th>
            <th class="nowrap"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th><?php echo $_smarty_tpl->__("reason");?>
</th>
        </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars["ri"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ri"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_ACCEPTED')]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ri"]->key => $_smarty_tpl->tpl_vars["ri"]->value) {
$_smarty_tpl->tpl_vars["ri"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["ri"]->key;
?>
        <tr>
            <td width="1%" class="center">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"rma:returned_items_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"rma:returned_items_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <input type="checkbox" name="accepted[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['item_id'], ENT_QUOTES, 'ISO-8859-1');?>
][chosen]" value="Y"<?php if ($_smarty_tpl->tpl_vars['return_info']->value['status']!=@constant('RMA_DEFAULT_STATUS')) {?> disabled="disabled"<?php }?> class="cm-item" />
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"rma:returned_items_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </td>
            <td><?php if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['ri']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php }
echo (($tmp = @$_smarty_tpl->tpl_vars['ri']->value['product'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ri']->value['product'] : $tmp);
if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?></a><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ri']->value['product_options']) {?><div class="options-info">&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['ri']->value['product_options']), 0);?>
</div><?php }?>
            </td>
            <td width="10%" class="nowrap">
                <?php if (!$_smarty_tpl->tpl_vars['ri']->value['price']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['ri']->value['price']), 0);
}?></td>
            <td>
                <input type="hidden" name="accepted[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['item_id'], ENT_QUOTES, 'ISO-8859-1');?>
][previous_amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"rma:returned_items_amount")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"rma:returned_items_amount"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <select name="accepted[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['item_id'], ENT_QUOTES, 'ISO-8859-1');?>
][amount]"<?php if ($_smarty_tpl->tpl_vars['return_info']->value['status']!=@constant('RMA_DEFAULT_STATUS')) {?> disabled="disabled"<?php }?> class="input-mini">
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"rma:returned_items_amount"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value])) unset($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['name'] = $_smarty_tpl->tpl_vars['key']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ri']->value['amount']+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = (int) "1";
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] = ((int) "1") == 0 ? 1 : (int) "1";
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total']);
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index']==$_smarty_tpl->tpl_vars['ri']->value['amount']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php endfor; endif; ?>
                </select></td>
            <td class="nowrap">
                <?php $_smarty_tpl->tpl_vars["reason_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['ri']->value['reason'], null, 0);?>
                &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reasons']->value[$_smarty_tpl->tpl_vars['reason_id']->value]['property'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;</td>
        </tr>
        <?php } ?>
        </table>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    </div>



    <div id="content_declined_products" class="hidden">
       <?php if ($_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_DECLINED')]&&$_smarty_tpl->tpl_vars['return_info']->value['status']==@constant('RMA_DEFAULT_STATUS')) {?>
        <div class="clearfix">
            <div class="pull-right">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("accept_products"),'but_name'=>"dispatch[rma.accept_products]",'but_role'=>"button_main",'but_meta'=>"cm-process-items"), 0);?>

            </div>
        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_DECLINED')]) {?>
        <table width="100%" class="table table-middle">
        <thead>
        <tr>
            <th>
                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_disabled'=>$_smarty_tpl->tpl_vars['check_disabled']->value), 0);?>

            <th width="100%"><?php echo $_smarty_tpl->__("product");?>
</th>
            <th><?php echo $_smarty_tpl->__("price");?>
</th>
            <th class="nowrap"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th><?php echo $_smarty_tpl->__("reason");?>
</th>
        </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars["ri"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ri"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['return_info']->value['items'][@constant('RETURN_PRODUCT_DECLINED')]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ri"]->key => $_smarty_tpl->tpl_vars["ri"]->value) {
$_smarty_tpl->tpl_vars["ri"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["ri"]->key;
?>
        <tr>
            <td width="1%" class="center">
                <input type="checkbox" name="declined[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['item_id'], ENT_QUOTES, 'ISO-8859-1');?>
][chosen]" value="Y" <?php if ($_smarty_tpl->tpl_vars['return_info']->value['status']!=@constant('RMA_DEFAULT_STATUS')) {?>disabled="disabled"<?php }?> class="checkbox cm-item" /></td>
            <td><?php if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['ri']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php }
echo $_smarty_tpl->tpl_vars['ri']->value['product'];
if (!$_smarty_tpl->tpl_vars['ri']->value['deleted_product']) {?></a><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ri']->value['product_options']) {?><div class="options-info">&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['ri']->value['product_options']), 0);?>
</div><?php }?>
            </td>
            <td class="nowrap">
                <?php if (!$_smarty_tpl->tpl_vars['ri']->value['price']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['ri']->value['price']), 0);
}?></td>
            <td>
                <input type="hidden" name="declined[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['item_id'], ENT_QUOTES, 'ISO-8859-1');?>
][previous_amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                <select name="declined[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ri']->value['item_id'], ENT_QUOTES, 'ISO-8859-1');?>
][amount]" <?php if ($_smarty_tpl->tpl_vars['return_info']->value['status']!=@constant('RMA_DEFAULT_STATUS')) {?>disabled="disabled"<?php }?> class="input-mini">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value])) unset($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['name'] = $_smarty_tpl->tpl_vars['key']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ri']->value['amount']+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = (int) "1";
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] = ((int) "1") == 0 ? 1 : (int) "1";
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section'][$_smarty_tpl->tpl_vars['key']->value]['total']);
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index']==$_smarty_tpl->tpl_vars['ri']->value['amount']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section'][$_smarty_tpl->tpl_vars['key']->value]['index'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php endfor; endif; ?>
                </select></td>
            <td class="nowrap">
                <?php $_smarty_tpl->tpl_vars["reason_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['ri']->value['reason'], null, 0);?>
                &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reasons']->value[$_smarty_tpl->tpl_vars['reason_id']->value]['property'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;</td>
        </tr>
        <?php } ?>
        </table>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    </div>



<div id="content_comments" class="cm-hide-save-button hidden">
<fieldset>
    <div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("comments");?>
</label>
        <div class="controls">
            <textarea name="comment" cols="55" rows="8" class="input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_info']->value['comment'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
        </div>
    </div>
</fieldset>

<div class="buttons-container">
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("customer_information"),'but_onclick'=>"Tygh."."$"."('#customer_info').toggle();",'but_role'=>"text",'but_meta'=>"text-button"), 0);?>

    </div>
</div>
<div id="customer_info" class="hidden">
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['order_info']->value,'location'=>"I"), 0);?>

    </div>
</div>


<div class="control-group">
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[rma.update_details]",'but_role'=>"button_main"), 0);?>

    </div>
</div>
</div>

<div id="content_actions" class="cm-hide-save-button hidden">

<fieldset>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"rma:details_actions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"rma:details_actions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="control-group">
    <label class="control-label" for="elm_status"><?php echo $_smarty_tpl->__("status");?>
:</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('select_id'=>"elm_status",'status'=>$_smarty_tpl->tpl_vars['return_info']->value['status'],'display'=>"select",'name'=>"change_return_status[status_to]",'status_type'=>@constant('STATUSES_RETURN')), 0);?>

    </div>
</div>

<div class="control-group">
    <label for="elm_recalc_order" class="control-label"><?php echo $_smarty_tpl->__("recalculate_order");?>
</label>
    <div class="controls">
        <label class="radio">
            <input id="elm_recalc_order" type="radio" name="change_return_status[recalculate_order]" value="R" />
        </label>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['is_refund']->value=="Y") {?>
<div class="control-group">
    <label for="elm_recalc_manually" class="control-label"><?php echo $_smarty_tpl->__("manually_recalculate_order");?>
</label>
    <div class="controls">
        <label class="radio">
            <input id="elm_recalc_manually" type="radio" name="change_return_status[recalculate_order]" value="M" />
        </label>
    </div>
</div>
<?php }?>

<div class="control-group">
    <label class="control-label" for="elm_recalc_skip"><?php echo $_smarty_tpl->__("dont_recalculate_order");?>
</label>
    <div class="controls">
        <label class="radio">
            <input id="elm_recalc_skip" type="radio" name="change_return_status[recalculate_order]" value="D" checked="checked" />
        </label>
    </div>
</div>

<div class="control-group notify-customer">
    <label class="control-label" for="notify_user"><?php echo $_smarty_tpl->__("notify_customer");?>
</label>
    <div class="controls">
        <label class="checkbox">
            <input type="checkbox" name="change_return_status[notify_user]" id="notify_user" value="Y"/>
        </label>
    </div>
</div>

<div class="control-group notify-department">
    <label class="control-label" for="notify_department"><?php echo $_smarty_tpl->__("notify_orders_department");?>
</label>
    <div class="controls">
        <label class="checkbox">
            <input type="checkbox" name="change_return_status[notify_department]" id="notify_department" value="Y"/>
        </label>
    </div>
</div>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div class="control-group notify-department">
    <label class="control-label" for="notify_vendor"><?php echo $_smarty_tpl->__("notify_vendor");?>
</label>
    <div class="controls">
        <label class="checkbox">
            <input type="checkbox" name="change_return_status[notify_vendor]" id="notify_vendor" value="Y" />
        </label>
    </div>
</div>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"rma:details_actions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</fieldset>

<div class="control-group">
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[rma.update_details]",'but_role'=>"button_main"), 0);?>

    </div>
</div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"rma:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"rma:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"rma:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox']), 0);?>



</form>
<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('url'=>"rma.details?return_id="), 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("print_slip"),'href'=>"rma.print_slip?return_id=".((string)$_smarty_tpl->tpl_vars['return_info']->value['return_id']),'class'=>"cm-new-window"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete_this_return"),'class'=>"cm-confirm",'href'=>"rma.delete?return_id=".((string)$_smarty_tpl->tpl_vars['return_info']->value['return_id']),'method'=>"POST"));?>
</li>
        <li class="divider"></li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("rma_reasons"),'href'=>"rma.properties?property_type=R"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("rma_actions"),'href'=>"rma.properties?property_type=A"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("rma_request_statuses"),'href'=>"statuses.manage?type=R"));?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"rma:details_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"rma:details_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("related_order"),'but_href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['return_info']->value['order_id']),'but_role'=>"tool"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"rma:details_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("return_info"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
