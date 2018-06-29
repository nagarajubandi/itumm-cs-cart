<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:26:47
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/products/components/product_assign_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15564684905b337b7f73eae3-48598662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba6f2f68a5b8bd53ae4b2ae5225150129a00b237' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/products/components/product_assign_features.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15564684905b337b7f73eae3-48598662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_features' => 0,
    'feature' => 0,
    'feature_id' => 0,
    'selected' => 0,
    'product_id' => 0,
    'descr_sl' => 0,
    'variant' => 0,
    'allow_enter_variant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337b7f77cda8_36537110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337b7f77cda8_36537110')) {function content_5b337b7f77cda8_36537110($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.enum.php';
?><?php
fn_preload_lang_vars(array('none','none','none','enter_other','search','enter_other'));
?>
<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars["feature_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars["feature_id"]->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
    <?php $_smarty_tpl->tpl_vars['allow_enter_variant'] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['feature']->value,"product_features"), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']!=smarty_modifier_enum("ProductFeatures::GROUP")) {?>
        <div class="control-group">
            <label class="control-label" for="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</label>
            <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'ISO-8859-1');?>
</span><?php }?>

            <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX")||$_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")||$_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>
                <?php $_smarty_tpl->tpl_vars["value_selected"] = new Smarty_variable(false, null, 0);?>
                <input type="hidden" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                       value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['selected']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['feature']->value['variant_id'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"/>
                <div class="object-selector">
                    <select id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                            class="cm-object-selector"
                            name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]"
                            data-ca-enable-images="true"
                            data-ca-image-width="30"
                            data-ca-image-height="30"
                            data-ca-enable-search="true"
                            data-ca-load-via-ajax="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['use_variant_picker'])===null||$tmp==='' ? false : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"
                            data-ca-page-size="10"
                            data-ca-data-url="<?php echo fn_url("product_features.get_variants_list?include_empty=Y&feature_id=".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&lang_code=".((string)$_smarty_tpl->tpl_vars['descr_sl']->value));?>
"
                            data-ca-placeholder="-<?php echo $_smarty_tpl->__("none");?>
-"
                            data-ca-allow-clear="true">
                        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                        <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                        <?php } ?>
                        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                    </select>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['allow_enter_variant']->value) {?>
                    <input type="text"
                           class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {?> cm-value-decimal<?php }?>"
                           name="product_data[add_new_variant][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'ISO-8859-1');?>
][variant]" id="input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                           placeholder="<?php echo $_smarty_tpl->__("enter_other");?>
"/>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")) {?>
                <input type="hidden" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value=""/>
                <div class="object-selector">
                    <select id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                            class="cm-object-selector"
                            name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][]"
                            multiple
                            data-ca-load-via-ajax="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['use_variant_picker'])===null||$tmp==='' ? false : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"
                            data-ca-placeholder="<?php echo $_smarty_tpl->__("search");?>
"
                            data-ca-enable-search="true"
                            data-ca-enable-images="true"
                            data-ca-image-width="30"
                            data-ca-image-height="30"
                            data-ca-close-on-select="false"
                            data-ca-page-size="10"
                            data-ca-data-url="<?php echo fn_url("product_features.get_variants_list?feature_id=".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&lang_code=".((string)$_smarty_tpl->tpl_vars['descr_sl']->value));?>
">
                        <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                        <?php } ?>
                    </select>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['allow_enter_variant']->value) {?>
                    <input type="text" name="product_data[add_new_variant][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'ISO-8859-1');?>
][variant]"
                           id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" placeholder="<?php echo $_smarty_tpl->__("enter_other");?>
"/>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {?>
                <label class="checkbox">
                <input type="hidden" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="N" />
                <input type="checkbox" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="Y" id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['value']=="Y") {?>checked="checked"<?php }?> /></label>
            <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::DATE")) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_".((string)$_smarty_tpl->tpl_vars['feature_id']->value),'date_name'=>"product_data[product_features][".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['feature']->value['value_int'])===null||$tmp==='' ? '' : $tmp)), 0);?>

            <?php } else { ?>
                <input type="text" name="product_data[product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
if ($_smarty_tpl->tpl_vars['feature']->value['value_int']!='') {
echo htmlspecialchars(floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']), ENT_QUOTES, 'ISO-8859-1');
}
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'ISO-8859-1');
}?>" id="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {?> cm-value-decimal<?php }?>" />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'ISO-8859-1');?>
</span><?php }?>
            </div>
        </div>
    <?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars["feature_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars["feature_id"]->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::GROUP")&&$_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description']), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['feature']->value['subfeatures']), 0);?>

    <?php }?>
<?php } ?>
<?php }} ?>
