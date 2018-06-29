<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:41:05
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/vendor_plans/hooks/companies/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4964326165b337ed9be1a08-68192141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20593f3383747337cc62a681be18f03dba16d343' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/vendor_plans/hooks/companies/tabs_content.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4964326165b337ed9be1a08-68192141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'vendor_plans' => 0,
    'company_data' => 0,
    'plan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337ed9bf1b59_35055322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337ed9bf1b59_35055322')) {function content_5b337ed9bf1b59_35055322($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('vendor_plans.choose_your_plan','vendor_plans.plan'));
?>
<div id="content_plan" class="hidden">

    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <p><?php echo $_smarty_tpl->__("vendor_plans.choose_your_plan");?>
</p>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/plans_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('plans'=>$_smarty_tpl->tpl_vars['vendor_plans']->value,'current_plan_id'=>$_smarty_tpl->tpl_vars['company_data']->value['plan_id'],'name'=>"company_data[plan_id]"), 0);?>

    <?php } else { ?>
        <div class="control-group">
            <label class="control-label" for="elm_company_plan"><?php echo $_smarty_tpl->__("vendor_plans.plan");?>
:</label>
            <div class="controls">
                <select name="company_data[plan_id]" id="elm_company_plan" class="cm-object-selector">
                    <?php  $_smarty_tpl->tpl_vars["plan"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["plan"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendor_plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["plan"]->key => $_smarty_tpl->tpl_vars["plan"]->value) {
$_smarty_tpl->tpl_vars["plan"]->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php if (($_smarty_tpl->tpl_vars['plan']->value['plan_id']==$_smarty_tpl->tpl_vars['company_data']->value['plan_id'])||(!$_smarty_tpl->tpl_vars['company_data']->value['plan_id']&&$_smarty_tpl->tpl_vars['plan']->value['is_default'])) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value->plan, ENT_QUOTES, 'ISO-8859-1');?>
 (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value->price), 0);?>
)</option>
                    <?php } ?>
                </select>
            </div>
        </div>
    <?php }?>

</div>
<?php }} ?>
