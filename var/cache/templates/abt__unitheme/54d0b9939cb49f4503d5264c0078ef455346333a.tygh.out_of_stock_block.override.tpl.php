<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:16:45
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/product_variations/hooks/products/out_of_stock_block.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8457167745b337925ccfc20-33144108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54d0b9939cb49f4503d5264c0078ef455346333a' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/product_variations/hooks/products/out_of_stock_block.override.tpl',
      1 => 1525450682,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8457167745b337925ccfc20-33144108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'details_page' => 0,
    'product_amount' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'out_of_stock_text' => 0,
    'product_notification_enabled' => 0,
    'auth' => 0,
    'product_id' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'product_notification_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337925d18f94_37520381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337925d18f94_37520381')) {function content_5b337925d18f94_37520381($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('notify_when_back_in_stock','email','enter_email','enter_email','go','notify_when_back_in_stock','email','enter_email','enter_email','go'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("addons/product_variations/common/selected_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>


<?php $_smarty_tpl->tpl_vars["show_qty"] = new Smarty_variable(false, null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['details_page']->value) {?>
    <?php if ((!$_smarty_tpl->tpl_vars['product']->value['hide_stock_info']&&!(($_smarty_tpl->tpl_vars['product_amount']->value<=0||$_smarty_tpl->tpl_vars['product_amount']->value<$_smarty_tpl->tpl_vars['product']->value['min_qty'])&&($_smarty_tpl->tpl_vars['product']->value['avail_since']>@constant('TIME'))))) {?>
        <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['out_of_stock_text']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span>
    <?php }?>
<?php } elseif ((($_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']=="S")&&($_smarty_tpl->tpl_vars['product']->value['tracking']!=smarty_modifier_enum("ProductTracking::TRACK_WITH_OPTIONS")||$_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")))) {?>
    <?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['variation_product_id']) {?>
        <?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_product_id'], null, 0);?>
    <?php }?>

    <div class="ty-control-group">
        <label for="sw_product_notify_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-strong">
            <input id="sw_product_notify_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="checkbox" class="checkbox cm-switch-availability cm-switch-visibility" name="product_notify" <?php if ($_smarty_tpl->tpl_vars['product_notification_enabled']->value=="Y") {?>checked="checked"<?php }?> onclick="
            <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                    if (!this.checked) {
                        Tygh.$.ceAjax('request', '<?php echo htmlspecialchars(fn_url("products.product_notifications?enable="), ENT_QUOTES, 'ISO-8859-1');?>
' + 'N&amp;product_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;email=' + $('#product_notify_email_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
').get(0).value, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
cache: false<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
                    }
            <?php } else { ?>
                    Tygh.$.ceAjax('request', '<?php echo htmlspecialchars(fn_url("products.product_notifications?enable="), ENT_QUOTES, 'ISO-8859-1');?>
' + (this.checked ? 'Y' : 'N') + '&amp;product_id=' + '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
cache: false<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
            <?php }?>
                    "/><?php echo $_smarty_tpl->__("notify_when_back_in_stock");?>

        </label>
    </div>
    <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <div class="ty-control-group ty-input-append ty-product-notify-email <?php if ($_smarty_tpl->tpl_vars['product_notification_enabled']->value!="Y") {?>hidden<?php }?>" id="product_notify_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

            <input type="hidden" name="enable" value="Y" disabled />
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" disabled />

            <label id="product_notify_email_label" for="product_notify_email_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-required cm-email hidden"><?php echo $_smarty_tpl->__("email");?>
</label>
            <input type="text" name="email" id="product_notify_email_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" size="20" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_notification_email']->value)===null||$tmp==='' ? $_smarty_tpl->__("enter_email") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-product-notify-email__input cm-hint" title="<?php echo $_smarty_tpl->__("enter_email");?>
" disabled />

            <button class="ty-btn-go cm-ajax" type="submit" name="dispatch[products.product_notifications]" title="<?php echo $_smarty_tpl->__("go");?>
"><i class="ty-btn-go__icon ty-icon-right-dir"></i></button>

        </div>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/out_of_stock_block.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/out_of_stock_block.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("addons/product_variations/common/selected_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>


<?php $_smarty_tpl->tpl_vars["show_qty"] = new Smarty_variable(false, null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['details_page']->value) {?>
    <?php if ((!$_smarty_tpl->tpl_vars['product']->value['hide_stock_info']&&!(($_smarty_tpl->tpl_vars['product_amount']->value<=0||$_smarty_tpl->tpl_vars['product_amount']->value<$_smarty_tpl->tpl_vars['product']->value['min_qty'])&&($_smarty_tpl->tpl_vars['product']->value['avail_since']>@constant('TIME'))))) {?>
        <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['out_of_stock_text']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span>
    <?php }?>
<?php } elseif ((($_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']=="S")&&($_smarty_tpl->tpl_vars['product']->value['tracking']!=smarty_modifier_enum("ProductTracking::TRACK_WITH_OPTIONS")||$_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")))) {?>
    <?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['variation_product_id']) {?>
        <?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_product_id'], null, 0);?>
    <?php }?>

    <div class="ty-control-group">
        <label for="sw_product_notify_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-strong">
            <input id="sw_product_notify_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="checkbox" class="checkbox cm-switch-availability cm-switch-visibility" name="product_notify" <?php if ($_smarty_tpl->tpl_vars['product_notification_enabled']->value=="Y") {?>checked="checked"<?php }?> onclick="
            <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                    if (!this.checked) {
                        Tygh.$.ceAjax('request', '<?php echo htmlspecialchars(fn_url("products.product_notifications?enable="), ENT_QUOTES, 'ISO-8859-1');?>
' + 'N&amp;product_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;email=' + $('#product_notify_email_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
').get(0).value, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
cache: false<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
                    }
            <?php } else { ?>
                    Tygh.$.ceAjax('request', '<?php echo htmlspecialchars(fn_url("products.product_notifications?enable="), ENT_QUOTES, 'ISO-8859-1');?>
' + (this.checked ? 'Y' : 'N') + '&amp;product_id=' + '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
cache: false<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
            <?php }?>
                    "/><?php echo $_smarty_tpl->__("notify_when_back_in_stock");?>

        </label>
    </div>
    <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <div class="ty-control-group ty-input-append ty-product-notify-email <?php if ($_smarty_tpl->tpl_vars['product_notification_enabled']->value!="Y") {?>hidden<?php }?>" id="product_notify_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

            <input type="hidden" name="enable" value="Y" disabled />
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" disabled />

            <label id="product_notify_email_label" for="product_notify_email_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-required cm-email hidden"><?php echo $_smarty_tpl->__("email");?>
</label>
            <input type="text" name="email" id="product_notify_email_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" size="20" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_notification_email']->value)===null||$tmp==='' ? $_smarty_tpl->__("enter_email") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-product-notify-email__input cm-hint" title="<?php echo $_smarty_tpl->__("enter_email");?>
" disabled />

            <button class="ty-btn-go cm-ajax" type="submit" name="dispatch[products.product_notifications]" title="<?php echo $_smarty_tpl->__("go");?>
"><i class="ty-btn-go__icon ty-icon-right-dir"></i></button>

        </div>
    <?php }?>
<?php }
}?><?php }} ?>
