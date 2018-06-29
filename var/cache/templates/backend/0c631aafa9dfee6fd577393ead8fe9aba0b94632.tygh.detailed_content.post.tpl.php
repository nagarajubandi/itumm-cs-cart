<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:41:05
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/sd_vendor_products_database/hooks/companies/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9550390185b337ed9b629b8-55602403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c631aafa9dfee6fd577393ead8fe9aba0b94632' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/sd_vendor_products_database/hooks/companies/detailed_content.post.tpl',
      1 => 1527946374,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9550390185b337ed9b629b8-55602403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'addons' => 0,
    'id' => 0,
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337ed9b73dd7_58506635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337ed9b73dd7_58506635')) {function content_5b337ed9b73dd7_58506635($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('addons.sd_vendor_products_database.title','addons.sd_vendor_products_database.allow_vendors_create_product','addons.sd_vendor_products_database.allow_vendors_to_sell_common_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']!='V'&&$_smarty_tpl->tpl_vars['addons']->value['vendor_plans']['status']=='A') {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addons.sd_vendor_products_database.title"),'target'=>"#sd_vendor_products_database_setting"), 0);?>

    <div id="sd_vendor_products_database_setting" class="collapse in">
        <div class="control-group">
            <label class="control-label" for="elm_allow_vendors_create_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("addons.sd_vendor_products_database.allow_vendors_create_product");?>
:</label>
            <div class="controls">
                <input type="hidden" name="company_data[enable_create_products]" value="N" />
                <input type="checkbox" id="elm_allow_vendors_create_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="company_data[enable_create_products]" size="10" value="Y"<?php if ($_smarty_tpl->tpl_vars['company_data']->value['enable_create_products']=="Y") {?> checked="checked"<?php }?> />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_allow_vendors_to_sell_common_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("addons.sd_vendor_products_database.allow_vendors_to_sell_common_products");?>
:</label>
            <div class="controls">
                <input type="hidden" name="company_data[enable_copy_products]" value="N" />
                <input type="checkbox" id="elm_allow_vendors_to_sell_common_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="company_data[enable_copy_products]" size="10" value="Y"<?php if ($_smarty_tpl->tpl_vars['company_data']->value['enable_copy_products']=="Y") {?> checked="checked"<?php }?> />
            </div>
        </div>
    </div>
<?php }?><?php }} ?>
