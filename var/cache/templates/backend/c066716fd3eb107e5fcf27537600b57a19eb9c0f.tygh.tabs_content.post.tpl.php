<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 15:24:45
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/sd_affiliate/hooks/profiles/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9520527315b34b065b82fc6-33134143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c066716fd3eb107e5fcf27537600b57a19eb9c0f' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/sd_affiliate/hooks/profiles/tabs_content.post.tpl',
      1 => 1494628794,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9520527315b34b065b82fc6-33134143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'user_type' => 0,
    'partner' => 0,
    'affiliate_plans' => 0,
    'last_payouts' => 0,
    'period' => 0,
    'settings' => 0,
    'time_from' => 0,
    'time_to' => 0,
    'max_amount' => 0,
    'total_commissions' => 0,
    'partners' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34b065bc23d3_62940926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34b065bc23d3_62940926')) {function content_5b34b065bc23d3_62940926($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_html_options')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('affiliate_information','affiliate_code','plan','status','awaiting_approval','approved','declined','commissions_of_last_periods','total_commissions','balance_account','total_payouts','affiliate_tree'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/sd_affiliate/update_affiliate_info.js"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=='update'&&$_smarty_tpl->tpl_vars['user_type']->value=='P') {?>
    <div id="content_affiliate_information">
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("affiliate_information")), 0);?>

        <div class="control-group">
            <label class="control-label" for="elm_affiliate_code"><?php echo $_smarty_tpl->__("affiliate_code");?>
:</label>
            <div class="controls">
                <input type="text" id="elm_affiliate_code" size="32" value="<?php echo htmlspecialchars(fn_dec2any($_smarty_tpl->tpl_vars['partner']->value['user_id']), ENT_QUOTES, 'ISO-8859-1');?>
" class="span3" disabled="disabled"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_affiliate_plan"><?php echo $_smarty_tpl->__("plan");?>
:</label>
            <div class="controls">
                <select name="update_data[plan_id]" id="elm_affiliate_plan" <?php if ($_smarty_tpl->tpl_vars['partner']->value['approved']=="D"||$_smarty_tpl->tpl_vars['partner']->value['approved']=="N") {?>disabled="disabled"<?php }?> class="span3">
                    <option value="0" id="affiliate_plan_0" <?php if (!$_smarty_tpl->tpl_vars['partner']->value['plan_id']) {?>selected="selected"<?php }?>> - </option>
                    <?php if ($_smarty_tpl->tpl_vars['affiliate_plans']->value) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['affiliate_plans']->value,'selected'=>$_smarty_tpl->tpl_vars['partner']->value['plan_id']),$_smarty_tpl);
}?>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_affiliate_status"><?php echo $_smarty_tpl->__("status");?>
:</label>
            <div class="controls">
                <select name="update_data[approved]" id="elm_affiliate_status" class="span3">
                    <option value="N" <?php if ($_smarty_tpl->tpl_vars['partner']->value['approved']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("awaiting_approval");?>
</option>
                    <option value="A" <?php if ($_smarty_tpl->tpl_vars['partner']->value['approved']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("approved");?>
</option>
                    <option value="D" <?php if ($_smarty_tpl->tpl_vars['partner']->value['approved']=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("declined");?>
</option>
                </select>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("commissions_of_last_periods")), 0);?>

        <div class="well content_affiliate_information">
            <table cellpadding="4" cellspacing="1" border="0">
                <?php  $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_payouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['period']->key => $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->_loop = true;
?>
                    <tr class = "<?php if ($_smarty_tpl->tpl_vars['period']->value['range']['end']<$_smarty_tpl->tpl_vars['partner']->value['timestamp']) {?>hidden<?php }?>">
                        <td>
                        <?php $_smarty_tpl->tpl_vars["time_from"] = new Smarty_variable(rawurlencode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['period']->value['range']['start'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']))), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["time_to"] = new Smarty_variable(rawurlencode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['period']->value['range']['end'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']))), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['period']->value['amount']>0) {?><a href="<?php echo htmlspecialchars(fn_url("aff_statistics.approve?partner_id=".((string)$_smarty_tpl->tpl_vars['partner']->value['user_id'])."&plan_id=".((string)$_smarty_tpl->tpl_vars['partner']->value['plan_id'])."&period=C&time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><?php }
echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['period']->value['range']['start'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['period']->value['amount']>0) {?></a><?php }?></td>
                        <td class="progress-small"><?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/graph_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bar_width'=>"300px",'value_width'=>$_smarty_tpl->tpl_vars['period']->value['amount']/$_smarty_tpl->tpl_vars['max_amount']->value*round(100)), 0);?>
</td>
                        <td class="pull-right"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['period']->value['amount']), 0);?>
</td>
                    </tr>
                <?php } ?>
                <tr>
                    <td></td>
                    <td><div class="pull-right"><?php echo $_smarty_tpl->__("total_commissions");?>
:</div></td>
                    <td><div class="pull-right"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['total_commissions']->value), 0);?>
</div></td>
                </tr>
                <tr>
                    <td></td>
                    <td><div class="pull-right"><?php echo $_smarty_tpl->__("balance_account");?>
:</div></td>
                    <td><div class="pull-right"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['partner']->value['balance']), 0);?>
</div></td>
                </tr>
                <tr>
                    <td></td>
                    <td><div class="pull-right"><?php echo $_smarty_tpl->__("total_payouts");?>
:</div></td>
                    <td><div class="pull-right"><?php if ($_smarty_tpl->tpl_vars['partner']->value['total_payouts']) {?><a href="<?php echo htmlspecialchars(fn_url("payouts.manage?partner_id=".((string)$_smarty_tpl->tpl_vars['partner']->value['user_id'])."&period=A"), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['partner']->value['total_payouts']), 0);?>
</a><?php } else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['partner']->value['total_payouts']), 0);
}?></div></td>
                </tr>
            </table>
        </div>
    </div>

    <div id="content_affiliate_tree">
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("affiliate_tree")), 0);?>

        <div class="items-container multi-level">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/sd_affiliate/views/partners/components/partner_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('partners'=>$_smarty_tpl->tpl_vars['partners']->value,'header'=>1,'level'=>0), 0);?>

        </div>
    </div>
<?php }?><?php }} ?>
