<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 11:08:34
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/rma/views/rma/returns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2210363185b35c5dadde5a1-78940965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d25ec6700c19d7b5fc716657c53a0a082bba73f' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/rma/views/rma/returns.tpl',
      1 => 1525941254,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2210363185b35c5dadde5a1-78940965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'search' => 0,
    'ajax_class' => 0,
    'c_url' => 0,
    'sort_sign' => 0,
    'return_requests' => 0,
    'request' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b35c5dae428f1_43122471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b35c5dae428f1_43122471')) {function content_5b35c5dae428f1_43122471($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('search_options','id','status','customer','date','order','id','quantity','no_return_requests_found','return_requests','search_options','id','status','customer','date','order','id','quantity','no_return_requests_found','return_requests'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-rma-return">
<?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/rma/views/rma/components/rma_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_title'=>$_smarty_tpl->__("search_options"),'section_content'=>Smarty::$_smarty_vars['capture']['section']), 0);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="rma_list_form">
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-up-dir\"></i>", null, 0);?>
<?php }?>
<table class="ty-table ty-rma-return__table">
    <thead>
        <tr>
            <th style="width: 10%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=return_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="return_id") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th style="width: 13%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th style="width: 35%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("customer");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="customer") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th style="width: 20%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th style="width: 5%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="order_id") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th style="width: 5%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("quantity");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="amount") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
        </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars["request"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["request"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return_requests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["request"]->key => $_smarty_tpl->tpl_vars["request"]->value) {
$_smarty_tpl->tpl_vars["request"]->_loop = true;
?>
        <tr>
            <td><a href="<?php echo htmlspecialchars(fn_url("rma.details?return_id=".((string)$_smarty_tpl->tpl_vars['request']->value['return_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['return_id'], ENT_QUOTES, 'ISO-8859-1');?>
</strong></a></td>
            <td>
                <input type="hidden" name="origin_statuses[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['return_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['status'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['request']->value['status'],'display'=>"view",'name'=>"return_statuses[".((string)$_smarty_tpl->tpl_vars['request']->value['return_id'])."]",'status_type'=>@constant('STATUSES_RETURN')), 0);?>

            </td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['lastname'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['request']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td class="ty-center"><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['request']->value['order_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
</a></td>
            <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['total_amount'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
        </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars["request"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_return_requests_found");?>
</p></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("return_requests");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/views/rma/returns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/views/rma/returns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-rma-return">
<?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/rma/views/rma/components/rma_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_title'=>$_smarty_tpl->__("search_options"),'section_content'=>Smarty::$_smarty_vars['capture']['section']), 0);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="rma_list_form">
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["sort_sign"] = new Smarty_variable("<i class=\"ty-icon-up-dir\"></i>", null, 0);?>
<?php }?>
<table class="ty-table ty-rma-return__table">
    <thead>
        <tr>
            <th style="width: 10%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=return_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="return_id") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th style="width: 13%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th style="width: 35%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("customer");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="customer") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th style="width: 20%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th style="width: 5%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php echo $_smarty_tpl->__("id");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="order_id") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
            <th style="width: 5%"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("quantity");?>
</a><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="amount") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
}?></th>
        </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars["request"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["request"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return_requests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["request"]->key => $_smarty_tpl->tpl_vars["request"]->value) {
$_smarty_tpl->tpl_vars["request"]->_loop = true;
?>
        <tr>
            <td><a href="<?php echo htmlspecialchars(fn_url("rma.details?return_id=".((string)$_smarty_tpl->tpl_vars['request']->value['return_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['return_id'], ENT_QUOTES, 'ISO-8859-1');?>
</strong></a></td>
            <td>
                <input type="hidden" name="origin_statuses[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['return_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['status'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['request']->value['status'],'display'=>"view",'name'=>"return_statuses[".((string)$_smarty_tpl->tpl_vars['request']->value['return_id'])."]",'status_type'=>@constant('STATUSES_RETURN')), 0);?>

            </td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['lastname'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['request']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td class="ty-center"><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['request']->value['order_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
</a></td>
            <td class="ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value['total_amount'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
        </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars["request"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="6"><p class="ty-no-items"><?php echo $_smarty_tpl->__("no_return_requests_found");?>
</p></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("return_requests");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</div><?php }?><?php }} ?>
