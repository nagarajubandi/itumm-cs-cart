<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 15:22:02
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/vendor_plans/views/vendor_plans/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9729178245b3601423e89f4-01014659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0323755ca4a128c9e6ed5cf95beae71743c90610' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/vendor_plans/views/vendor_plans/update.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9729178245b3601423e89f4-01014659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plan' => 0,
    'id' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'periodicities' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b36014243b7a7_70154745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b36014243b7a7_70154745')) {function content_5b36014243b7a7_70154745($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('name','vendor_plans.best_choise','description','position','price','vendor_plans.transaction_fee','vendor_plans.products_limit','vendor_plans.products_limit_tooltip','vendor_plans.revenue_up_to','vendor_plans.revenue_up_to_tooltip','vendor_plans.vendor_store','vendor_plans.vendor_store_tooltip','text_all_categories_included'));
?>
<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['plan']->value['plan_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['plan']->value['plan_id'], null, 0);?>
<?php }?>

<div id="content_plan_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" enctype="multipart/form-data" name="update_plan_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="form-horizontal form-edit ">
<input type="hidden" name="plan_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
    
    <div id="content_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_plans:details_general_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_plans:details_general_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <div class="control-group">
            <label class="control-label cm-required" for="elm_plan_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("name");?>
:</label>
            <div class="controls">
                <input type="text" id="elm_plan_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="plan_data[plan]" size="35" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-large" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("vendor_plans.best_choise");?>
:</label>
            <div class="controls">
                <input type="hidden" name="plan_data[is_default]" value="0" />
                <input type="checkbox" id="elm_is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="plan_data[is_default]" size="10" value="1"<?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?> checked="checked"<?php }?> />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_plan_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <div class="controls">
                <textarea id="elm_plan_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="plan_data[description]" cols="55" rows="2" class="input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("position");?>
:</label>
            <div class="controls">
                <input type="text" id="elm_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="plan_data[position]" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['position'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-text-short" />
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"plan_data[status]",'id'=>"plan_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['plan']->value,'hidden'=>true), 0);?>


        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_plans:details_general_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <div id="content_commission_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        
        <div class="control-group">
            <label class="control-label" for="elm_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("price");?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'], ENT_QUOTES, 'ISO-8859-1');?>
):</label>
            <div class="controls">
                <input type="text" id="elm_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="plan_data[price]" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-text-short" />
                <select name="plan_data[periodicity]" class="input-small">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['periodicities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['plan']->value['periodicity']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_commission_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("vendor_plans.transaction_fee");?>
 (%):</label>
            <div class="controls">
                <input type="text" id="elm_commission_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="plan_data[commission]" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['commission'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-text-short" />
            </div>
        </div>

    </div>

    <div id="content_restrictions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        
        <div class="control-group">
            <label class="control-label" for="elm_products_limit_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("vendor_plans.products_limit");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("vendor_plans.products_limit_tooltip")), 0);?>
:</label>
            <div class="controls">
                <input type="text" id="elm_products_limit_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="plan_data[products_limit]" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['products_limit'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-text-short" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_revenue_limit_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("vendor_plans.revenue_up_to_tooltip")), 0);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'], ENT_QUOTES, 'ISO-8859-1');?>
):</label>
            <div class="controls">
                <input type="text" id="elm_revenue_limit_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="plan_data[revenue_limit]" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['revenue_limit'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-text-short" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_vendor_store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("vendor_plans.vendor_store");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("vendor_plans.vendor_store_tooltip")), 0);?>
:</label>
            <div class="controls">
                <input type="hidden" name="plan_data[vendor_store]" value="0" />
                <input type="checkbox" id="elm_vendor_store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="plan_data[vendor_store]" size="10" value="1"<?php if ($_smarty_tpl->tpl_vars['plan']->value['vendor_store']) {?> checked="checked"<?php }?> />
            </div>
        </div>

    </div>
    
    <div id="content_categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="hidden">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_plans:details_categories")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_plans:details_categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('multiple'=>true,'input_name'=>"plan_data[categories]",'item_ids'=>$_smarty_tpl->tpl_vars['plan']->value['categories'],'data_id'=>"category_ids",'no_item_text'=>$_smarty_tpl->__("text_all_categories_included"),'use_keys'=>"N",'but_meta'=>"pull-right"), 0);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_plans:details_categories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_plans:details_tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_plans:details_tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_plans:details_tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox']), 0);?>


<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[vendor_plans.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

</div>

</form>

<!--content_plan_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php }} ?>
