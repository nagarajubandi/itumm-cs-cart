<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 18:26:17
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/products/vendors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14098946185b338971b92c32-71267758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdf1070d9cad0d7cd5c3f9415ebc98dcfe4e5ccf' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/products/vendors.tpl',
      1 => 1529502761,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14098946185b338971b92c32-71267758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'redirect_url' => 0,
    'config' => 0,
    'product_data' => 0,
    'product' => 0,
    'hide_inputs_if_shared_product' => 0,
    'primary_currency' => 0,
    'title_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b338971bd6822_31951428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b338971bd6822_31951428')) {function content_5b338971bd6822_31951428($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('no_data','text_select_fields2edit_note','modify_selected','select_fields_to_edit'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="" method="post" name="manage_products_form" id="manage_products_form">
<input type="hidden" name="category_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['cid'], ENT_QUOTES, 'ISO-8859-1');?>
" />

    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

    <?php $_smarty_tpl->tpl_vars["title_page"] = new Smarty_variable("Product vendors", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product_data']->value['vendors']) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    
    <th>Vendor</th>
    <th>Price (₹)</th>
    <th>Quantity</th>
    <th width="10%" class="right">Status</th>
</tr>
</thead>

<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_data']->value['vendors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

    <?php $_smarty_tpl->tpl_vars["title_page"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product_data']->value['product'])." - Vendors", null, 0);?>


<tr class="cm-row-status-<?php if ($_smarty_tpl->tpl_vars['product_data']->value['status']==='D') {
echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['product_data']->value['status']), ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['product']->value['status']), ENT_QUOTES, 'ISO-8859-1');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

   
    <td>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['company'], ENT_QUOTES, 'ISO-8859-1');?>

    </td>
    <td>
        <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][vendors][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][price]" size="6" value="<?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'ISO-8859-1');?>
" class="input-mini input-hidden"/>
    </td>
    <td>
        <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][vendors][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][amount]" size="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-mini input-hidden"/>
    </td>

    <?php if ($_smarty_tpl->tpl_vars['product_data']->value['status']==='D') {?>
        <td class="right nowrap">
            <div class="cm-popup-box dropleft dropdown dropleft">
                <a id="sw_select_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_vendor_sell_id'], ENT_QUOTES, 'ISO-8859-1');?>
_wrap" class="btn-text btn dropdown-toggle cm-combination" data-toggle="dropdown">
                    Disabled
                </a>
            </div>
        </td>
    <?php } else { ?>
        <td class="right nowrap">
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['product']->value['product_vendor_sell_id'],'status'=>$_smarty_tpl->tpl_vars['product']->value['status'],'hidden'=>false,'object_id_name'=>"product_vendor_sell_id",'table'=>"product_vendor_sell"), 0);?>

        </td>
    <?php }?>


</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("select_fields_to_edit", null, null); ob_start(); ?>

<p><?php echo $_smarty_tpl->__("text_select_fields2edit_note");?>
</p>
<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_select_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("modify_selected"),'but_name'=>"dispatch[products.store_selection]",'cancel_action'=>"close"), 0);?>

</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    
    
    <?php if ($_smarty_tpl->tpl_vars['product_data']->value['vendors']&&$_smarty_tpl->tpl_vars['product_data']->value['status']!=='D') {?>
         <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-button",'but_target_form'=>"manage_products_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"select_fields_to_edit",'text'=>$_smarty_tpl->__("select_fields_to_edit"),'content'=>Smarty::$_smarty_vars['capture']['select_fields_to_edit']), 0);?>


<div class="clearfix">
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>$_REQUEST['content_id']), 0);?>

</div>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title_page']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content_id'=>"manage_products"), 0);?>
<?php }} ?>
