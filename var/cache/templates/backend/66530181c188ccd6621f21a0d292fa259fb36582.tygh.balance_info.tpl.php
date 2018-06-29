<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:22:31
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/companies/components/balance_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13581038185b337a7f962141-37477780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66530181c188ccd6621f21a0d292fa259fb36582' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/companies/components/balance_info.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13581038185b337a7f962141-37477780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'totals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337a7f972501_74092654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337a7f972501_74092654')) {function content_5b337a7f972501_74092654($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('vendor_payouts.income_carried_forward','vendor_payouts.income','vendor_payouts.balance_carried_forward','vendor_payouts.balance'));
?>
<div class="clearfix" id="balance_total">
    <table width="100%">
        <thead>
        <tr>
            <th></th>
            <th width="15%" class="right"><h4>Totals</h4></th>
        </tr>
        </thead>
        <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['income_carried_forward'])) {?>
            <tr>
                <td class="right"><?php echo $_smarty_tpl->__("vendor_payouts.income_carried_forward");?>
:</td>
                <td class="right"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['income_carried_forward']), 0);?>
</td>
            </tr>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['income'])) {?>
            <tr>
                <td class="right"><h4><?php echo $_smarty_tpl->__("vendor_payouts.income");?>
:</h4></td>
                <td class="right"><h4 class="text-<?php if ($_smarty_tpl->tpl_vars['totals']->value['income']>0) {?>success<?php } else { ?>error<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['income']), 0);?>
</h4></td>
            </tr>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['balance_carried_forward'])) {?>
            <tr>
                <td class="right"><?php echo $_smarty_tpl->__("vendor_payouts.balance_carried_forward");?>
:</td>
                <td class="right"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['balance_carried_forward']), 0);?>
</td>
            </tr>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['balance'])) {?>
            <tr>
                <td class="right"><h4><?php echo $_smarty_tpl->__("vendor_payouts.balance");?>
:</h4></td>
                <td class="right"><h4 class="text-<?php if ($_smarty_tpl->tpl_vars['totals']->value['balance']>0) {?>success<?php } else { ?>error<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['balance']), 0);?>
</h4></td>
            </tr>
        <?php }?>
    </table>
<!--balance_total--></div>
<?php }} ?>
