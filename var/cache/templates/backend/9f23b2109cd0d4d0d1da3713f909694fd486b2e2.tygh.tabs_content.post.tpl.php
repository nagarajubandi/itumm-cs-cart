<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:41:05
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/vendor_terms/hooks/companies/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14968422545b337ed9bd1ee0-76904420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f23b2109cd0d4d0d1da3713f909694fd486b2e2' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/vendor_terms/hooks/companies/tabs_content.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14968422545b337ed9bd1ee0-76904420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337ed9bdde36_92152019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337ed9bdde36_92152019')) {function content_5b337ed9bdde36_92152019($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('vendor_terms.terms_and_conditions','vendor_terms.terms_and_conditions_tooltip'));
?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div id="content_terms_and_conditions" class="hidden">
    <div class="control-group">
        <label class="control-label" for="elm_company_terms"><?php echo $_smarty_tpl->__("vendor_terms.terms_and_conditions");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("vendor_terms.terms_and_conditions_tooltip")), 0);?>
:</label>
        <div class="controls">
            <textarea id="elm_company_terms" name="company_data[terms]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['terms'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
        </div>
    </div>
</div>
<?php }?>
<?php }} ?>
