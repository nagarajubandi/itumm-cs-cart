<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:41:05
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/paypal_adaptive/hooks/companies/general_information.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11299321865b337ed99378f4-07590692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf2199f45431a3db9f710bdf7db91a39675d3e46' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/paypal_adaptive/hooks/companies/general_information.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11299321865b337ed99378f4-07590692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337ed9951826_69164078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337ed9951826_69164078')) {function content_5b337ed9951826_69164078($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('pp_adaptive_payments','paypal_adaptive.paypal_email','ttc_paypal_adaptive.paypal_email','addons.paypal_adaptive.first_name','ttc_addons.paypal_adaptive.first_name','addons.paypal_adaptive.last_name','ttc_addons.paypal_adaptive.last_name'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")) {?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("pp_adaptive_payments")), 0);?>

    <div class="control-group">
        <label for="email" class="control-label cm-email"><?php echo $_smarty_tpl->__("paypal_adaptive.paypal_email");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_paypal_adaptive.paypal_email")), 0);?>
:</label>
        <div class="controls">
            <input type="text" id="email" name="company_data[paypal_email]" class="input-text" size="32" maxlength="128" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['paypal_email'], ENT_QUOTES, 'ISO-8859-1');?>
"/>
        </div>
    </div>
    <div class="control-group">
        <label for="ppa_first_name" class="control-label"><?php echo $_smarty_tpl->__("addons.paypal_adaptive.first_name");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_addons.paypal_adaptive.first_name")), 0);?>
:</label>
        <div class="controls">
            <input type="text" id="ppa_first_name" name="company_data[ppa_first_name]" class="input-text" size="32" maxlength="128" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['ppa_first_name'], ENT_QUOTES, 'ISO-8859-1');?>
"/>
        </div>
    </div>
    <div class="control-group">
        <label for="ppa_last_name" class="control-label"><?php echo $_smarty_tpl->__("addons.paypal_adaptive.last_name");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_addons.paypal_adaptive.last_name")), 0);?>
:</label>
        <div class="controls">
            <input type="text" id="ppa_last_name" name="company_data[ppa_last_name]" class="input-text" size="32" maxlength="128" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['ppa_last_name'], ENT_QUOTES, 'ISO-8859-1');?>
"/>
        </div>
    </div>

<?php }?><?php }} ?>
