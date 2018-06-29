<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:37
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_vendor_products_database/blocks/product_tabs/vendors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2803053865b3372516ef909-19439464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4efd500eb39cea453f6946d21e71ef5e2a395d2' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_vendor_products_database/blocks/product_tabs/vendors.tpl',
      1 => 1529407302,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2803053865b3372516ef909-19439464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'addons' => 0,
    'config' => 0,
    'sort_vendor_offers' => 0,
    'vendor' => 0,
    'no_ajax' => 0,
    'redirect_url' => 0,
    'catalog_mode' => 0,
    'c_url' => 0,
    'sort_vendor_offers_rev' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'settings' => 0,
    'auth' => 0,
    'details_page' => 0,
    'default_amount' => 0,
    'obj_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33725180ddd2_49193264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33725180ddd2_49193264')) {function content_5b33725180ddd2_49193264($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('vendor','price','location','availability','quantity','addons.sd_vendor_products_database.buy','items','out_of_stock_products','in_stock','out_of_stock_products','vendor','price','location','availability','quantity','addons.sd_vendor_products_database.buy','items','out_of_stock_products','in_stock','out_of_stock_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['vendors']&&!$_smarty_tpl->tpl_vars['product']->value['show_usual_product_template']) {?>
    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['status']=='A'&&$_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['main_store_mode']=='catalog') {?>
        <?php $_smarty_tpl->tpl_vars["catalog_mode"] = new Smarty_variable(true, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["catalog_mode"] = new Smarty_variable(false, null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_vendor_offers"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable("vendor_offers", null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['sort_vendor_offers']->value=="asc") {?>
        <?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"ty-select-block__arrow ty-icon-up-micro\"></i>", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['sort_vendor_offers']->value=="desc") {?>
        <?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"ty-select-block__arrow ty-icon-down-micro\"></i>", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"ty-select-block__arrow ty-icon-up-micro\"></i><i class=\"ty-select-block__arrow ty-icon-down-micro\"></i>", null, 0);?>
    <?php }?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="product_vendor_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']&&!$_smarty_tpl->tpl_vars['no_ajax']->value) {?>class="cm-ajax cm-ajax-full-render cm-ajax-status-middle"<?php }?>>
        <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
">
        <div class="ty-product-block" id="vendor_offers">
            <table class="ty-table ty-product-table__block" width ="100%">
                <thead>
                    <tr>
                        
                        <th class="ty-product-table__title" width="15%"><?php echo $_smarty_tpl->__("vendor");?>
</th>
                        <?php if (!($_smarty_tpl->tpl_vars['catalog_mode']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['hide_price']&&$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['hide_price']=='Y')) {?>
                            <th class="ty-product-table__title" width="10%">
                                <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_vendor_offers=".((string)$_smarty_tpl->tpl_vars['sort_vendor_offers_rev']->value)), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("price");
echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
</a>
                            </th>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['catalog_mode']->value) {?>
                            <th class="ty-product-table__title" width="15%"><?php echo $_smarty_tpl->__("location");?>
</th>
                        <?php } else { ?>
                            <th class="ty-product-table__title" width="10%"><?php echo $_smarty_tpl->__("availability");?>
</th>
                            <th class="ty-product-table__title" width="5%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                        <?php }?>
                        <?php if (!($_smarty_tpl->tpl_vars['catalog_mode']->value&&(!$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['show_visit_dealer_button']||$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['show_visit_dealer_button']=='N'))) {?>
                            <th class="ty-product-table__title" width="15%"><?php echo $_smarty_tpl->__("addons.sd_vendor_products_database.buy");?>
</th>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['vendor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['vendors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendor']->key => $_smarty_tpl->tpl_vars['vendor']->value) {
$_smarty_tpl->tpl_vars['vendor']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['vendor']->value['amount']>0&&$_smarty_tpl->tpl_vars['vendor']->value['status']=='A') {?>

                        <tr>
                            

                            <td class="ty-product-table__item">
                                <div>
                                    <strong><a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['vendor']->value['company_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['vendor']->value['company'];?>
</strong>
                                </div>
                            </td>

                            <?php if (!($_smarty_tpl->tpl_vars['catalog_mode']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['hide_price']&&$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['hide_price']=='Y')&&(floatval($_smarty_tpl->tpl_vars['product']->value['price'])||$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="P"||$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A"||(!floatval($_smarty_tpl->tpl_vars['product']->value['price'])&&$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="R"))&&!($_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart"&&!$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
                                <td class="ty-product-table__item">
                                    <div id="price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                        <span class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
 ty-price-update">
                                            <span class="ty-price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['vendor']->value['price'],'class'=>"ty-price-num"), 0);?>
</span>
                                        </span>
                                    <!--price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                </td>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['catalog_mode']->value) {?>
                                <td class="ty-product-table__item">
                                    <div class="ty-company-detail__info-list">
                                        <div class="ty-company-detail__control-group">
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['address'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                                        </div>
                                        <div class="ty-company-detail__control-group">
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['city'], ENT_QUOTES, 'ISO-8859-1');?>

                                                , <?php echo htmlspecialchars(fn_get_state_name($_smarty_tpl->tpl_vars['vendor']->value['state'],$_smarty_tpl->tpl_vars['vendor']->value['country']), ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['zipcode'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                                        </div>
                                        <div class="ty-company-detail__control-group">
                                            <span><?php echo htmlspecialchars(fn_get_country_name($_smarty_tpl->tpl_vars['vendor']->value['country']), ENT_QUOTES, 'ISO-8859-1');?>
</span>
                                        </div>
                                    </div>
                                </td>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']!="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y") {?>
                                    <td class="ty-product-table__item">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']!="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y") {?>
                                            <div class="ty-product-block__field-group">
                                                <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
 stock-wrap" id="amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['in_stock_field']=="Y") {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['tracking']!=smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")) {?>
                                                            <?php if (($_smarty_tpl->tpl_vars['vendor']->value['amount']>0&&$_smarty_tpl->tpl_vars['vendor']->value['amount']>=$_smarty_tpl->tpl_vars['product']->value['min_qty'])&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"||$_smarty_tpl->tpl_vars['details_page']->value) {?>
                                                                <?php if (($_smarty_tpl->tpl_vars['vendor']->value['amount']>0&&$_smarty_tpl->tpl_vars['vendor']->value['amount']>=$_smarty_tpl->tpl_vars['product']->value['min_qty'])&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y") {?>
                                                                    <div class="ty-control-group product-list-field">
                                                                        <span id="qty_in_stock_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-qty-in-stock ty-control-group__item">
                                                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>

                                                                        </span>
                                                                    </div>
                                                                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y") {?>
                                                                    <div class="ty-control-group product-list-field">
                                                                        <span class="ty-qty-out-of-stock ty-control-group__item"><?php echo $_smarty_tpl->__("out_of_stock_products");?>
</span>
                                                                    </div>
                                                                <?php }?>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <?php if (((($_smarty_tpl->tpl_vars['vendor']->value['amount']>0&&$_smarty_tpl->tpl_vars['vendor']->value['amount']>=$_smarty_tpl->tpl_vars['product']->value['min_qty'])||$_smarty_tpl->tpl_vars['product']->value['tracking']==smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"))&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']!="Y")||($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']=="Y")) {?>
                                                            <div class="ty-control-group product-list-field">
                                                                <span class="ty-qty-in-stock ty-control-group__item" id="in_stock_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("in_stock");?>
</span>
                                                            </div>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['details_page']->value&&($_smarty_tpl->tpl_vars['vendor']->value['amount']<=0||$_smarty_tpl->tpl_vars['vendor']->value['amount']<$_smarty_tpl->tpl_vars['product']->value['min_qty'])&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']!="Y") {?>
                                                            <div class="ty-control-group product-list-field">
                                                                <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("out_of_stock_products");?>
</span>
                                                            </div>
                                                        <?php }?>
                                                    <?php }?>
                                                <!--amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                            </div>
                                        <?php }?>
                                    </td>
                                <?php }?>

                                <td class="ty-product-table__item">
                                    <div class="ty-product-block__field-group">
                                        <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                            <?php if (!($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="R"&&$_smarty_tpl->tpl_vars['vendor']->value['price']==0)&&!($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']!="Y"&&(($_smarty_tpl->tpl_vars['vendor']->value['amount']<=0||$_smarty_tpl->tpl_vars['vendor']->value['amount']<$_smarty_tpl->tpl_vars['product']->value['min_qty'])&&$_smarty_tpl->tpl_vars['product']->value['tracking']!=smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"))&&$_smarty_tpl->tpl_vars['product']->value['is_edp']!="Y")) {?>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['selected_amount'])) {?>
                                                <?php $_smarty_tpl->tpl_vars["default_amount"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['selected_amount'], null, 0);?>
                                            <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['min_qty'])) {?>
                                                <?php $_smarty_tpl->tpl_vars["default_amount"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['min_qty'], null, 0);?>
                                            <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['qty_step'])) {?>
                                                <?php $_smarty_tpl->tpl_vars["default_amount"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['qty_step'], null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars["default_amount"] = new Smarty_variable("1", null, 0);?>
                                            <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']!=="Y"&&($_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="allow_shopping"||$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&$_smarty_tpl->tpl_vars['product']->value['avail_since']<=@constant('TIME')||($_smarty_tpl->tpl_vars['product']->value['avail_since']>@constant('TIME')&&$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']=="B")) {?>
                                                    <div class="ty-qty clearfix<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?> changer<?php }?>" id="qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                                        <div class="ty-center ty-value-changer cm-value-changer">
                                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?>
                                                                <a class="cm-increase ty-value-changer__increase">&#43;</a>
                                                            <?php }?>
                                                            <input <?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step']>1) {?>readonly="readonly"<?php }?> type="text" size="5" class="ty-value-changer__input cm-amount" id="qty_count_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['default_amount']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step']>1) {?> data-ca-step="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> data-ca-min-qty="<?php if ($_smarty_tpl->tpl_vars['product']->value['min_qty']>1) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['min_qty'], ENT_QUOTES, 'ISO-8859-1');
} else { ?>1<?php }?>" />
                                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?>
                                                                <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            <?php }?>
                                        <!--qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                    </div>
                                </td>
                            <?php }?>

                            <?php if (!($_smarty_tpl->tpl_vars['catalog_mode']->value&&(!$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['show_visit_dealer_button']||$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['show_visit_dealer_button']=='N'))) {?>
                                <td class="ty-product-table__item">
                                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['status']=='A'&&$_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['main_store_mode']=='catalog') {?>
                                        <?php echo $_smarty_tpl->getSubTemplate ("addons/sd_vendor_products_database/common/visit_dealer_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                    <?php } else { ?>
                                        <?php if (!($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="R"&&$_smarty_tpl->tpl_vars['vendor']->value['price']==0)&&!($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']!="Y"&&(($_smarty_tpl->tpl_vars['vendor']->value['amount']<=0||$_smarty_tpl->tpl_vars['vendor']->value['amount']<$_smarty_tpl->tpl_vars['product']->value['min_qty'])))) {?>
                                            <div class="ty-product-block__field-group">
                                                <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                                   <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."_".((string)$_smarty_tpl->tpl_vars['vendor']->value['company_id']),'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->tpl_vars['vendor']->value['company_id'])."]",'obj_id'=>$_smarty_tpl->tpl_vars['vendor']->value['company_id'],'product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

                                                <!--button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                </td>
                            <?php }?>
                        </tr>

                    <?php }?>
                <?php } ?>
                </tbody>
            </table>
        <!--vendor_offers--></div>
    </form>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_vendor_products_database/blocks/product_tabs/vendors.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_vendor_products_database/blocks/product_tabs/vendors.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['vendors']&&!$_smarty_tpl->tpl_vars['product']->value['show_usual_product_template']) {?>
    <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['status']=='A'&&$_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['main_store_mode']=='catalog') {?>
        <?php $_smarty_tpl->tpl_vars["catalog_mode"] = new Smarty_variable(true, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["catalog_mode"] = new Smarty_variable(false, null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_vendor_offers"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable("vendor_offers", null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['sort_vendor_offers']->value=="asc") {?>
        <?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"ty-select-block__arrow ty-icon-up-micro\"></i>", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['sort_vendor_offers']->value=="desc") {?>
        <?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"ty-select-block__arrow ty-icon-down-micro\"></i>", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"ty-select-block__arrow ty-icon-up-micro\"></i><i class=\"ty-select-block__arrow ty-icon-down-micro\"></i>", null, 0);?>
    <?php }?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="product_vendor_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']&&!$_smarty_tpl->tpl_vars['no_ajax']->value) {?>class="cm-ajax cm-ajax-full-render cm-ajax-status-middle"<?php }?>>
        <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
">
        <div class="ty-product-block" id="vendor_offers">
            <table class="ty-table ty-product-table__block" width ="100%">
                <thead>
                    <tr>
                        
                        <th class="ty-product-table__title" width="15%"><?php echo $_smarty_tpl->__("vendor");?>
</th>
                        <?php if (!($_smarty_tpl->tpl_vars['catalog_mode']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['hide_price']&&$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['hide_price']=='Y')) {?>
                            <th class="ty-product-table__title" width="10%">
                                <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_vendor_offers=".((string)$_smarty_tpl->tpl_vars['sort_vendor_offers_rev']->value)), ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'ISO-8859-1');?>
><?php echo $_smarty_tpl->__("price");
echo $_smarty_tpl->tpl_vars['c_icon']->value;?>
</a>
                            </th>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['catalog_mode']->value) {?>
                            <th class="ty-product-table__title" width="15%"><?php echo $_smarty_tpl->__("location");?>
</th>
                        <?php } else { ?>
                            <th class="ty-product-table__title" width="10%"><?php echo $_smarty_tpl->__("availability");?>
</th>
                            <th class="ty-product-table__title" width="5%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                        <?php }?>
                        <?php if (!($_smarty_tpl->tpl_vars['catalog_mode']->value&&(!$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['show_visit_dealer_button']||$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['show_visit_dealer_button']=='N'))) {?>
                            <th class="ty-product-table__title" width="15%"><?php echo $_smarty_tpl->__("addons.sd_vendor_products_database.buy");?>
</th>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['vendor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['vendors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendor']->key => $_smarty_tpl->tpl_vars['vendor']->value) {
$_smarty_tpl->tpl_vars['vendor']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['vendor']->value['amount']>0&&$_smarty_tpl->tpl_vars['vendor']->value['status']=='A') {?>

                        <tr>
                            

                            <td class="ty-product-table__item">
                                <div>
                                    <strong><a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['vendor']->value['company_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['vendor']->value['company'];?>
</strong>
                                </div>
                            </td>

                            <?php if (!($_smarty_tpl->tpl_vars['catalog_mode']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['hide_price']&&$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['hide_price']=='Y')&&(floatval($_smarty_tpl->tpl_vars['product']->value['price'])||$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="P"||$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A"||(!floatval($_smarty_tpl->tpl_vars['product']->value['price'])&&$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="R"))&&!($_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart"&&!$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
                                <td class="ty-product-table__item">
                                    <div id="price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                        <span class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
 ty-price-update">
                                            <span class="ty-price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['vendor']->value['price'],'class'=>"ty-price-num"), 0);?>
</span>
                                        </span>
                                    <!--price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                </td>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['catalog_mode']->value) {?>
                                <td class="ty-product-table__item">
                                    <div class="ty-company-detail__info-list">
                                        <div class="ty-company-detail__control-group">
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['address'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                                        </div>
                                        <div class="ty-company-detail__control-group">
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['city'], ENT_QUOTES, 'ISO-8859-1');?>

                                                , <?php echo htmlspecialchars(fn_get_state_name($_smarty_tpl->tpl_vars['vendor']->value['state'],$_smarty_tpl->tpl_vars['vendor']->value['country']), ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['zipcode'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                                        </div>
                                        <div class="ty-company-detail__control-group">
                                            <span><?php echo htmlspecialchars(fn_get_country_name($_smarty_tpl->tpl_vars['vendor']->value['country']), ENT_QUOTES, 'ISO-8859-1');?>
</span>
                                        </div>
                                    </div>
                                </td>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']!="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y") {?>
                                    <td class="ty-product-table__item">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']!="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y") {?>
                                            <div class="ty-product-block__field-group">
                                                <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
 stock-wrap" id="amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['in_stock_field']=="Y") {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['tracking']!=smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")) {?>
                                                            <?php if (($_smarty_tpl->tpl_vars['vendor']->value['amount']>0&&$_smarty_tpl->tpl_vars['vendor']->value['amount']>=$_smarty_tpl->tpl_vars['product']->value['min_qty'])&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"||$_smarty_tpl->tpl_vars['details_page']->value) {?>
                                                                <?php if (($_smarty_tpl->tpl_vars['vendor']->value['amount']>0&&$_smarty_tpl->tpl_vars['vendor']->value['amount']>=$_smarty_tpl->tpl_vars['product']->value['min_qty'])&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y") {?>
                                                                    <div class="ty-control-group product-list-field">
                                                                        <span id="qty_in_stock_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-qty-in-stock ty-control-group__item">
                                                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>

                                                                        </span>
                                                                    </div>
                                                                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y") {?>
                                                                    <div class="ty-control-group product-list-field">
                                                                        <span class="ty-qty-out-of-stock ty-control-group__item"><?php echo $_smarty_tpl->__("out_of_stock_products");?>
</span>
                                                                    </div>
                                                                <?php }?>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <?php if (((($_smarty_tpl->tpl_vars['vendor']->value['amount']>0&&$_smarty_tpl->tpl_vars['vendor']->value['amount']>=$_smarty_tpl->tpl_vars['product']->value['min_qty'])||$_smarty_tpl->tpl_vars['product']->value['tracking']==smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"))&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']!="Y")||($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']=="Y")) {?>
                                                            <div class="ty-control-group product-list-field">
                                                                <span class="ty-qty-in-stock ty-control-group__item" id="in_stock_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("in_stock");?>
</span>
                                                            </div>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['details_page']->value&&($_smarty_tpl->tpl_vars['vendor']->value['amount']<=0||$_smarty_tpl->tpl_vars['vendor']->value['amount']<$_smarty_tpl->tpl_vars['product']->value['min_qty'])&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']!="Y") {?>
                                                            <div class="ty-control-group product-list-field">
                                                                <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("out_of_stock_products");?>
</span>
                                                            </div>
                                                        <?php }?>
                                                    <?php }?>
                                                <!--amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                            </div>
                                        <?php }?>
                                    </td>
                                <?php }?>

                                <td class="ty-product-table__item">
                                    <div class="ty-product-block__field-group">
                                        <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                            <?php if (!($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="R"&&$_smarty_tpl->tpl_vars['vendor']->value['price']==0)&&!($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']!="Y"&&(($_smarty_tpl->tpl_vars['vendor']->value['amount']<=0||$_smarty_tpl->tpl_vars['vendor']->value['amount']<$_smarty_tpl->tpl_vars['product']->value['min_qty'])&&$_smarty_tpl->tpl_vars['product']->value['tracking']!=smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"))&&$_smarty_tpl->tpl_vars['product']->value['is_edp']!="Y")) {?>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['selected_amount'])) {?>
                                                <?php $_smarty_tpl->tpl_vars["default_amount"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['selected_amount'], null, 0);?>
                                            <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['min_qty'])) {?>
                                                <?php $_smarty_tpl->tpl_vars["default_amount"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['min_qty'], null, 0);?>
                                            <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['qty_step'])) {?>
                                                <?php $_smarty_tpl->tpl_vars["default_amount"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['qty_step'], null, 0);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->tpl_vars["default_amount"] = new Smarty_variable("1", null, 0);?>
                                            <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp']!=="Y"&&($_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="allow_shopping"||$_smarty_tpl->tpl_vars['auth']->value['user_id'])&&$_smarty_tpl->tpl_vars['product']->value['avail_since']<=@constant('TIME')||($_smarty_tpl->tpl_vars['product']->value['avail_since']>@constant('TIME')&&$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']=="B")) {?>
                                                    <div class="ty-qty clearfix<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?> changer<?php }?>" id="qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                                        <div class="ty-center ty-value-changer cm-value-changer">
                                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?>
                                                                <a class="cm-increase ty-value-changer__increase">&#43;</a>
                                                            <?php }?>
                                                            <input <?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step']>1) {?>readonly="readonly"<?php }?> type="text" size="5" class="ty-value-changer__input cm-amount" id="qty_count_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['default_amount']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step']>1) {?> data-ca-step="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> data-ca-min-qty="<?php if ($_smarty_tpl->tpl_vars['product']->value['min_qty']>1) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['min_qty'], ENT_QUOTES, 'ISO-8859-1');
} else { ?>1<?php }?>" />
                                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer']=="Y") {?>
                                                                <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            <?php }?>
                                        <!--qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                    </div>
                                </td>
                            <?php }?>

                            <?php if (!($_smarty_tpl->tpl_vars['catalog_mode']->value&&(!$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['show_visit_dealer_button']||$_smarty_tpl->tpl_vars['addons']->value['sd_vendor_products_database']['show_visit_dealer_button']=='N'))) {?>
                                <td class="ty-product-table__item">
                                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['status']=='A'&&$_smarty_tpl->tpl_vars['addons']->value['catalog_mode']['main_store_mode']=='catalog') {?>
                                        <?php echo $_smarty_tpl->getSubTemplate ("addons/sd_vendor_products_database/common/visit_dealer_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                    <?php } else { ?>
                                        <?php if (!($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="R"&&$_smarty_tpl->tpl_vars['vendor']->value['price']==0)&&!($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount']!="Y"&&(($_smarty_tpl->tpl_vars['vendor']->value['amount']<=0||$_smarty_tpl->tpl_vars['vendor']->value['amount']<$_smarty_tpl->tpl_vars['product']->value['min_qty'])))) {?>
                                            <div class="ty-product-block__field-group">
                                                <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
][extra][vendor_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                                   <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."_".((string)$_smarty_tpl->tpl_vars['vendor']->value['company_id']),'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->tpl_vars['vendor']->value['company_id'])."]",'obj_id'=>$_smarty_tpl->tpl_vars['vendor']->value['company_id'],'product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

                                                <!--button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                </td>
                            <?php }?>
                        </tr>

                    <?php }?>
                <?php } ?>
                </tbody>
            </table>
        <!--vendor_offers--></div>
    </form>
<?php }?>
<?php }?><?php }} ?>
