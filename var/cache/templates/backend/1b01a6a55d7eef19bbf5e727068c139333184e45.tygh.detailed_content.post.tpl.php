<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:14:18
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/rma/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6626984845b337892a9ef00-94822272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b01a6a55d7eef19bbf5e727068c139333184e45' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/rma/hooks/products/detailed_content.post.tpl',
      1 => 1527165716,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6626984845b337892a9ef00-94822272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337892ab3177_58464564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337892ab3177_58464564')) {function content_5b337892ab3177_58464564($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('rma','returnable','return_period_days'));
?>
 <?php if (!($_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("rma"),'target'=>"#acc_addon_rma"), 0);?>


<div id="acc_addon_rma" class="collapse in">
<div class="control-group">
    <label class="control-label" for="is_returnable"><?php echo $_smarty_tpl->__("returnable");?>
:</label>
    <div class="controls">
        <label class="checkbox">
        <input type="hidden" name="product_data[is_returnable]" id="is_returnable" value="N" />
        <input type="checkbox" name="product_data[is_returnable]" value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['is_returnable']=="Y"||$_smarty_tpl->tpl_vars['runtime']->value['mode']=="add") {?>checked="checked"<?php }?> onclick="Tygh.$.disable_elms(['return_period'], !this.checked);" />
        </label>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="return_period"><?php echo $_smarty_tpl->__("return_period_days");?>
:</label>
    <div class="controls">
        <input type="text" id="return_period" name="product_data[return_period]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['return_period'])===null||$tmp==='' ? "30" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" size="10"  <?php if ($_smarty_tpl->tpl_vars['product_data']->value['is_returnable']!="Y"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']!="add") {?>disabled="disabled"<?php }?> />
    </div>
</div>
</div>
<?php }?><?php }} ?>
