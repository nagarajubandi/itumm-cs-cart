<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 17:13:39
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/paypal/hooks/rma/details_actions.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10088543245b34c9eb044cf8-74958923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '082267d945e2539b93350c45624c487481a25d04' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/paypal/hooks/rma/details_actions.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10088543245b34c9eb044cf8-74958923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_refund' => 0,
    'order_info' => 0,
    'return_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34c9eb0525e3_47306432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34c9eb0525e3_47306432')) {function content_5b34c9eb0525e3_47306432($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('addons.paypal.rma.perform_refund','ttc_addons.paypal.rma.perform_refund','refunded'));
?>
<?php if ($_smarty_tpl->tpl_vars['is_refund']->value=="Y"&&fn_is_paypal_processor($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['processor_id'])) {?>
<div class="control-group notify-department">
    <label class="control-label" for="elm_paypal_perform_refund"><?php echo $_smarty_tpl->__("addons.paypal.rma.perform_refund");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_addons.paypal.rma.perform_refund")), 0);?>
</label>
    <div class="controls">
        <?php if (fn_is_paypal_refund_performed($_smarty_tpl->tpl_vars['return_info']->value['return_id'])) {?>
            <p class="label label-success"><?php echo $_smarty_tpl->__("refunded");?>
</p>
        <?php } else { ?>
            <label class="checkbox">
                <input type="checkbox" name="change_return_status[paypal_perform_refund]" id="elm_paypal_perform_refund" value="Y" />
            </label>
        <?php }?>
    </div>
</div>
<?php }?><?php }} ?>
