<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:24:15
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/sales_reports/components/table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3508712965b337ae75cfa94-38915145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f186567d224352c790ed0809d2c89652e851bc5' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/sales_reports/components/table.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3508712965b337ae75cfa94-38915145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table_id' => 0,
    'table_conditions' => 0,
    'i' => 0,
    'o' => 0,
    'table' => 0,
    'ajax_div_ids' => 0,
    'count_limit' => 0,
    'count_part' => 0,
    'row' => 0,
    'element' => 0,
    'element_hash' => 0,
    'interval_id' => 0,
    'totals' => 0,
    'interval_name' => 0,
    'percent_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337ae761c2f9_87514932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337ae761c2f9_87514932')) {function content_5b337ae761c2f9_87514932($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_math')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('table_conditions','total','total'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/infinite_scroll.js"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['table_conditions']->value[$_smarty_tpl->tpl_vars['table_id']->value]) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("table_conditions"),'meta'=>"collapsed",'target'=>"#box_table_conditions_".((string)$_smarty_tpl->tpl_vars['table_id']->value)), 0);?>

    <div id="box_table_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="collapse">
        <dl class="dl-horizontal">
        <?php  $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["i"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table_conditions']->value[$_smarty_tpl->tpl_vars['table_id']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["i"]->key => $_smarty_tpl->tpl_vars["i"]->value) {
$_smarty_tpl->tpl_vars["i"]->_loop = true;
?>
            <dt><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
:</dt>
            <dd>
                <?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['objects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["o"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["o"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
 $_smarty_tpl->tpl_vars["o"]->iteration++;
 $_smarty_tpl->tpl_vars["o"]->last = $_smarty_tpl->tpl_vars["o"]->iteration === $_smarty_tpl->tpl_vars["o"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["feco"]['last'] = $_smarty_tpl->tpl_vars["o"]->last;
?>
                    <?php if ($_smarty_tpl->tpl_vars['o']->value['href']) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['o']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['name'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['o']->value['href']) {?></a><?php }
if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['feco']['last']) {?>, <?php }?>
                <?php } ?>
            </dd>
        <?php } ?>
        </dl>
    </div>
<?php }?>

<?php $_smarty_tpl->tpl_vars['ajax_div_ids'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['table_id']->value).",data_list_orders_".((string)$_smarty_tpl->tpl_vars['table_id']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['table']->value['interval_id']!=1) {?>

<div class="cm-scroll-data" id="scroll_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <input type="hidden" id="count_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_limit']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" id="begin_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_part']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
    <table width="100%" class="table cm-table-list-orders">
        <thead class="cm-table-thead">
        <tr valign="top">
            <th style="padding: 1px;" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['parameter'], ENT_QUOTES, 'ISO-8859-1');?>
</th>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <th class="center cm-tooltip" style="padding: 1px;">&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;<a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['iso8601_from'], ENT_QUOTES, 'ISO-8859-1');?>
 &ndash; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['iso8601_to'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-tooltip"><i class="icon-question-sign"></i></a></th>
            <?php } ?>
        </tr>
        </thead>
        <tbody class="cm-scroll-content cm-ajax cm-table-tbody" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            <?php echo smarty_function_cycle(array('values'=>'','assign'=>''),$_smarty_tpl);?>

            <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                <tr>
                    <td class="sales-report-title" ><?php echo $_smarty_tpl->tpl_vars['element']->value['description'];?>
&nbsp;</td>
                    <?php $_smarty_tpl->tpl_vars["element_hash"] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['element_hash'], null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars["interval_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['interval_id'], null, 0);?>
                        <td class="center">
                            <?php if ($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]) {?>
                                <?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number") {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]), 0);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value], ENT_QUOTES, 'ISO-8859-1');
}?>
                            <?php } else { ?>-<?php }?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['totals']->value) {?>
                <tr class="td-no-bg cm-table-footer" id="total_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                    <td class="right"><?php echo $_smarty_tpl->__("total");?>
:</td>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k_row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['totals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k_row']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                        <td class="center">
                            <?php if ($_smarty_tpl->tpl_vars['row']->value) {?>
                                <span><?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number") {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['row']->value), 0);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value, ENT_QUOTES, 'ISO-8859-1');
}?></span>
                            <?php } else { ?>-<?php }?>
                        </td>
                    <?php } ?>
                </tr>
            <?php }?>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></tbody>
    </table>
</div>
<?php } else { ?>
<div class="cm-scroll-data" id="scroll_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<input type="hidden" id="count_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_limit']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" id="begin_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_part']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
    <table class="table table-middle">
        <thead id="elm_head_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_part']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-table-thead">
            <tr valign="top">
                <th style="padding: 1px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['parameter'], ENT_QUOTES, 'ISO-8859-1');?>
</th>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars["interval_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['interval_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["interval_name"] = new Smarty_variable("reports_interval_".((string)$_smarty_tpl->tpl_vars['interval_id']->value), null, 0);?>
                    <th class="right" width="70%"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['interval_name']->value);?>
</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody class="cm-scroll-content cm-ajax cm-table-tbody" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            <?php $_smarty_tpl->tpl_vars["elements_count"] = new Smarty_variable(sizeof($_smarty_tpl->tpl_vars['table']->value['elements']), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["element_hash"] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['element_hash'], null, 0);?>
                <tr>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['intervals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars["interval_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value['interval_id'], null, 0);?>
                        <?php echo smarty_function_math(array('equation'=>"round(element_value/max_value*100)",'element_value'=>(($tmp = @$_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value])===null||$tmp==='' ? "0" : $tmp),'max_value'=>(($tmp = @$_smarty_tpl->tpl_vars['table']->value['max_value'])===null||$tmp==='' ? "1" : $tmp),'assign'=>"percent_value"),$_smarty_tpl);?>

                        <td width="85%">
                            <?php echo $_smarty_tpl->tpl_vars['element']->value['description'];?>
&nbsp;
                            <?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/graph_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bar_width'=>"100px",'value_width'=>$_smarty_tpl->tpl_vars['percent_value']->value), 0);?>

                        </td>
                        <td class="right">
                            <?php if ($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]) {?>
                                <?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number") {?>
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value]), 0);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['values'][$_smarty_tpl->tpl_vars['element_hash']->value][$_smarty_tpl->tpl_vars['interval_id']->value], ENT_QUOTES, 'ISO-8859-1');?>

                                <?php }?>
                            <?php } else { ?>
                                -
                            <?php }?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['totals']->value) {?>
            <tr class="td-no-bg" id="total_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                <td class="right" width="70%"><?php if ($_smarty_tpl->tpl_vars['totals']->value) {
echo $_smarty_tpl->__("total");?>
:<?php }?></td>
                <td class="right" width="30%">
                    <?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['totals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value) {
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['table']->value['display']!="product_number"&&$_smarty_tpl->tpl_vars['table']->value['display']!="order_number") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['row']->value), 0);?>

                            <?php } else { ?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value, ENT_QUOTES, 'ISO-8859-1');?>

                            <?php }?>
                        <?php } else { ?>
                            -
                        <?php }?>
                    <?php } ?>
                </td>
            </tr>
            <?php }?>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></tbody>
    </table>
</div>
<?php }?>
<?php }} ?>
