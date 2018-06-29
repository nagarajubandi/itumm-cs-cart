<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:41:05
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9943994895b337ed9b41516-51996608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ed2c49a0e761f2cec5089238378ba2d423b8d94' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/detailed_content.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9943994895b337ed9b41516-51996608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337ed9b5e355_06730218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337ed9b5e355_06730218')) {function content_5b337ed9b5e355_06730218($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('vendor_data_premoderation','pre_moderation','pre_moderation_edit','pre_moderation_edit_vendors'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['products_prior_approval']=='custom'||$_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['products_updates_approval']=='custom'||$_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['vendor_profile_updates_approval']=='custom') {?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("vendor_data_premoderation"),'target'=>"#collapsable_vendor_moderate"), 0);?>


<div id="collapsable_vendor_moderate" class="in collapse">
    <fieldset>
    
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['products_prior_approval']=='custom') {?>
        <div class="control-group setting-wide">
            <label class="control-label" for="company_pre_moderation"><?php echo $_smarty_tpl->__("pre_moderation");?>
:</label>
            <div class="controls">
                <input type="hidden" name="company_data[pre_moderation]" value="N" />
                <input type="checkbox" id="company_pre_moderation" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['pre_moderation']=="Y") {?>checked="checked"<?php }?> name="company_data[pre_moderation]" value="Y">
            </div>
        </div>
        <?php }?>
    
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['products_updates_approval']=='custom') {?>
        <div class="control-group setting-wide">
            <label class="control-label" for="company_pre_moderation_edit"><?php echo $_smarty_tpl->__("pre_moderation_edit");?>
:</label>
            <div class="controls">
                <input type="hidden" name="company_data[pre_moderation_edit]" value="N" />
                <input type="checkbox" id="company_pre_moderation_edit" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['pre_moderation_edit']=="Y") {?>checked="checked"<?php }?> name="company_data[pre_moderation_edit]" value="Y">
            </div>
        </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['vendor_profile_updates_approval']=='custom') {?>
        <div class="control-group setting-wide">
            <label class="control-label" for="company_pre_moderation_edit_vendors"><?php echo $_smarty_tpl->__("pre_moderation_edit_vendors");?>
:</label>
            <div class="controls">
                <input type="hidden" name="company_data[pre_moderation_edit_vendors]" value="N" />
                <input type="checkbox" id="company_pre_moderation_edit_vendors" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['pre_moderation_edit_vendors']=="Y") {?>checked="checked"<?php }?> name="company_data[pre_moderation_edit_vendors]" value="Y">
            </div>
        </div>
        <?php }?>
         
    </fieldset>
</div>
<?php }?>
<?php }?><?php }} ?>
