<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 16:46:03
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/sd_vendor_products_database/overrides/views/products/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1098507195b33788da11289-24359224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ddf28b59c5224be4f69bd52c271dac8101fc7dd' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/sd_vendor_products_database/overrides/views/products/manage.tpl',
      1 => 1530270957,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1098507195b33788da11289-24359224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33788dafc3a6_37066329',
  'variables' => 
  array (
    'search' => 0,
    'show_search_form_by_default' => 0,
    'config' => 0,
    'products' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'ajax_class' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'vendor_view' => 0,
    'runtime' => 0,
    'product' => 0,
    'hide_input_for_show_mode' => 0,
    'settings' => 0,
    'product_url' => 0,
    'hide_input_for_vendor' => 0,
    'hide_input_for_admin' => 0,
    'show_update_for_all' => 0,
    'vendor_sell_product' => 0,
    'enable_create_products' => 0,
    'non_editable_status' => 0,
    'addons' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33788dafc3a6_37066329')) {function content_5b33788dafc3a6_37066329($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
fn_preload_lang_vars(array('addons.sd_vendor_products_database.all_products','products','position_short','image','name','sku','price','list_price','purchased_qty','subtotal_sum','status','sku','edit','delete','addons.sd_vendor_products_database.sell','addons.sd_vendor_products_database.sell','text_select_fields2edit_note','modify_selected','global_update','edit_selected','clone_selected','export_selected','addons.sd_vendor_products_database.sell_selected','add_product','select_fields_to_edit','addons.sd_vendor_products_database.all_products'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<!--overrided in addon sd_vendor_products_database-->

    <?php $_smarty_tpl->tpl_vars["show_search_form_by_default"] = new Smarty_variable("false", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['search']->value['show_mode']&&$_smarty_tpl->tpl_vars['search']->value['show_mode']=="all") {?>
        <?php if (!($_smarty_tpl->tpl_vars['search']->value['is_search']&&$_smarty_tpl->tpl_vars['search']->value['is_search']=="Y")) {?>
            <?php $_smarty_tpl->tpl_vars["show_search_form_by_default"] = new Smarty_variable("true", null, 0);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_search_form_by_default']->value=="false") {?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="manage_products_form" id="manage_products_form">
<input type="hidden" name="category_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['cid'], ENT_QUOTES, 'ISO-8859-1');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>
<?php if (@constant('ACCOUNT_TYPE')=="vendor") {?>
    <?php $_smarty_tpl->tpl_vars['vendor_view'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars["hide_input_for_vendor"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(true, null, 0);?>
<?php }?>
<?php if ($_REQUEST['show_mode']) {?>
    <?php $_smarty_tpl->tpl_vars["hide_input_for_show_mode"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("addons.sd_vendor_products_database.all_products"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("products"), null, 0);?>
<?php }?>

<?php if (@constant('ACCOUNT_TYPE')=="admin") {?>
    <?php $_smarty_tpl->tpl_vars["hide_input_for_vendor"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
    <?php $_smarty_tpl->tpl_vars["hide_input_for_admin"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?> 
<table width="100%" class="table table-middle">
<thead>
<tr>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:manage_head")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:manage_head"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <th width="5%">
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>fn_get_default_status_filters('',true)), 0);?>

    </th>
    <?php if ($_smarty_tpl->tpl_vars['search']->value['cid']&&$_smarty_tpl->tpl_vars['search']->value['subcats']!="Y") {?>
    <th class="nowrap"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=position&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("position_short");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="position") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
    <?php }?>
    <th width="5%"><span><?php echo $_smarty_tpl->__("image");?>
</span></th>
    <th width="35%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=product&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="product") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a> /&nbsp;&nbsp;&nbsp; <a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=code&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("sku");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="code") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
    <th width="10%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=price&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="price") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
    <th width="10%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=list_price&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("list_price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="list_price") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
    <?php if ($_smarty_tpl->tpl_vars['search']->value['order_ids']) {?>
    <th width="5%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=p_qty&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("purchased_qty");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="p_qty") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
    <th width="5%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=p_subtotal&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("subtotal_sum");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="p_subtotal") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
    <?php }?>
    
        <th width="5%">Quantity</th>
	<?php if (!$_smarty_tpl->tpl_vars['vendor_view']->value) {?>
	 <th width="15%">Number of Vendors</th>
	<?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:manage_head"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	
    <th width="5%">&nbsp;</th>
    <th width="10%" class="right"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
</tr>
</thead>
 
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	 
<?php if ($_smarty_tpl->tpl_vars['vendor_view']->value||$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars["product_url"] = new Smarty_variable(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),"C"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["product_url"] = new Smarty_variable(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), null, 0);?>
<?php }?>

<tr class="cm-row-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['product']->value['status']), ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:manage_body")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:manage_body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <td class="left">
    <input type="checkbox" name="product_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?>onclick="fn_sd_vendor_products_database_enable_price(this, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
);"<?php }?> class="checkbox cm-item cm-item-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['product']->value['status']), ENT_QUOTES, 'ISO-8859-1');?>
" /></td>
    <?php if ($_smarty_tpl->tpl_vars['search']->value['cid']&&$_smarty_tpl->tpl_vars['search']->value['subcats']!="Y") {?>
    <td>
        <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][position]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['position'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-micro" /></td>
    <?php }?>
    <td>
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>(($tmp = @$_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'] : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>$_smarty_tpl->tpl_vars['product_url']->value), 0);?>

    </td>
    <td>
        <input type="hidden" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        <<?php if ($_smarty_tpl->tpl_vars['product_url']->value) {?>a<?php } else { ?>span<?php }?> class="row-status" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']), ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['product_url']->value) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?> target="_blank"<?php }?> <?php }?>><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],40);?>
</<?php if ($_smarty_tpl->tpl_vars['product_url']->value) {?>a<?php } else { ?>span<?php }?>>
        <div class="product-code <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_input_for_vendor']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            <span class="product-code-label row-status"><?php echo $_smarty_tpl->__("sku");?>
 </span>
            <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_code]" size="17" maxlength="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-hidden span3" />
        </div>
        
        <?php if (!$_smarty_tpl->tpl_vars['vendor_view']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

        <?php }?>
    </td>
    <?php if ($_smarty_tpl->tpl_vars['vendor_view']->value||$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?><span id="span_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['price']) {
echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'ISO-8859-1');
}?></span><?php }?>
        <input type="text" <?php if ($_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?>id="price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][vendors][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][price]" size="6" value="<?php if ($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['price']) {
echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'ISO-8859-1');
}?>" class="input-mini input-hidden <?php if ($_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?>hidden<?php }?>"/>
    </td>
    <?php } else { ?>
    <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_input_for_admin']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"price_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'name'=>"update_all_vendors[price][".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]"), 0);?>

        <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][price]" size="6" value="<?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'ISO-8859-1');?>
" class="input-mini input-hidden"/>
    </td>
    <?php }?>
    <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_input_for_vendor']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][list_price]" size="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['list_price'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-mini input-hidden" />
    </td>
    <?php if ($_smarty_tpl->tpl_vars['search']->value['order_ids']) {?>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['purchased_qty'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['purchased_subtotal'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
    <?php }?>
    
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:manage_body"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


   <!-- <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_input_for_admin']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <span id="span_amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['amount']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['amount'], ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'ISO-8859-1');
}?></span> 
    </td>-->
	
	 <?php if ($_smarty_tpl->tpl_vars['vendor_view']->value||$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>

    <?php if ($_REQUEST['show_mode']) {?>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?><span id="span_amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
"></span><?php }?>
            <input type="text" <?php if ($_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?>id="amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][vendors][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][amount]" size="6" value="" class="input-mini input-hidden <?php if ($_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?>hidden<?php }?>"/>
        </td>
    <?php } else { ?>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?><span id="span_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['amount']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['amount'], ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'ISO-8859-1');
}?></span><?php }?>
        <input type="text" <?php if ($_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?>id="price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][vendors][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][amount]" size="6" value="<?php if ($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['amount']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['amount'], ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'ISO-8859-1');
}?>" class="input-mini input-hidden <?php if ($_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?>hidden<?php }?>"/>
    </td>
    <?php }?>
	 
    <?php } else { ?>
    <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_input_for_admin']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"price_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'name'=>"update_all_vendors[price][".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]"), 0);?>

        <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][price]" size="6" value="<?php if ($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['amount']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['vendors'][$_smarty_tpl->tpl_vars['runtime']->value['company_id']]['amount'], ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'ISO-8859-1');
}?>" class="input-mini input-hidden"/>
    </td>
    <?php }?>
	
	
	
	
	
	
	
	<?php if (!$_smarty_tpl->tpl_vars['vendor_view']->value) {?>
	 <td align="center"><a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
?dispatch=products.vendors&product_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['vendor_sell_product']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']]), ENT_QUOTES, 'ISO-8859-1');?>
<a></td>
	<?php }?>
    <td class="nowrap">
        <?php if (!$_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?>
            <div >
                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_SESSION['auth']['user_type']=='A'||($_SESSION['auth']['user_type']=='V'&&$_smarty_tpl->tpl_vars['product']->value['show_usual_product_template']&&$_smarty_tpl->tpl_vars['enable_create_products']->value)) {?>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])));?>
</li>
                        <?php }?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"products.delete?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'method'=>"POST"));?>
</li>
                        <?php if ($_SESSION['auth']['user_type']=='A') {?>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>"Vendors",'href'=>"products.vendors?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])));?>
</li>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

            </div>
        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"sell_button_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[products.sell..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"submit-button",'but_meta'=>"hidden",'but_target_form'=>"manage_products_form",'but_text'=>$_smarty_tpl->__("addons.sd_vendor_products_database.sell")), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"disbaled_sell_button_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[products.sell..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_disabled'=>"true",'but_target_form'=>"manage_products_form",'but_text'=>$_smarty_tpl->__("addons.sd_vendor_products_database.sell")), 0);?>


        <?php }?>
    </td>
    <td class="right nowrap">

    <?php if ($_SESSION['auth']['user_type']=='V'&&!($_smarty_tpl->tpl_vars['product']->value['show_usual_product_template']&&$_smarty_tpl->tpl_vars['enable_create_products']->value)) {?>
        <?php $_smarty_tpl->tpl_vars['non_editable_status'] = new Smarty_variable(true, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['non_editable_status'] = new Smarty_variable(false, null, 0);?>
    <?php }?>
    <?php if ($_SESSION['auth']['user_type']=='V') {?>
   <div> <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'status'=>$_smarty_tpl->tpl_vars['product']->value['status'],'items_status'=>fn_get_default_product_statuses("products",$_smarty_tpl->tpl_vars['product']->value['status']),'hidden'=>true,'object_id_name'=>"product_id",'table'=>"products",'non_editable'=>$_smarty_tpl->tpl_vars['non_editable_status']->value), 0);?>
 </div>
	<?php if ($_smarty_tpl->tpl_vars['product']->value['status']=='D') {?>	<div style="color: red"><a href="/support/" style="color: red" target="_blank"> Click here</a> to request for enabling product</a></span></div>
	 <?php }?>
    <?php } else { ?> 
    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'status'=>$_smarty_tpl->tpl_vars['product']->value['status'],'hidden'=>true,'object_id_name'=>"product_id",'table'=>"products",'non_editable'=>$_smarty_tpl->tpl_vars['non_editable_status']->value), 0);?>

	<?php }?>
    </td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items">No results found.</p>
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
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:action_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:action_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if (!$_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("global_update"),'href'=>"products.global_update"));?>
</li>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <?php if (!$_smarty_tpl->tpl_vars['vendor_view']->value) {?>
            <li class="divider"></li>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"manage_products_form"));?>
</li>
            <?php }?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("clone_selected"),'dispatch'=>"dispatch[products.m_clone]",'form'=>"manage_products_form"));?>
</li>
            <?php if (!$_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[products.export_range]",'form'=>"manage_products_form"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[products.m_delete]",'form'=>"manage_products_form"));?>
</li>
            <?php } else { ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("addons.sd_vendor_products_database.sell_selected"),'dispatch'=>"dispatch[products.m_sell]",'form'=>"manage_products_form"));?>
</li>
            <?php }?>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:action_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php if ($_smarty_tpl->tpl_vars['products']->value&&!$_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value&&@constant('ACCOUNT_TYPE')=="vendor") {?>
         <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-button",'but_target_form'=>"manage_products_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:manage_tools")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:manage_tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ((!(@constant('ACCOUNT_TYPE')=="vendor"&&$_REQUEST['show_mode']&&$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['allow_vendors_create_products']=='Y'&&$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['share_vendor_products']=='N')&&$_smarty_tpl->tpl_vars['enable_create_products']->value&&!$_smarty_tpl->tpl_vars['hide_input_for_show_mode']->value)||@constant('ACCOUNT_TYPE')=="admin") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"products.add",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_product"),'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:manage_tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("addons.sd_vendor_products_database.all_products"), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"products.manage",'view_type'=>"products"), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/all_products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"products.manage"), 0);?>

    <?php }?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['search']->value['show_mode']||$_smarty_tpl->tpl_vars['search']->value['show_mode']!="all") {?>
    <?php if ($_smarty_tpl->tpl_vars['show_search_form_by_default']->value=="false") {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"products.manage",'view_type'=>"products"), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"products.manage"), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content_id'=>"manage_products"), 0);?>

<?php }} ?>
