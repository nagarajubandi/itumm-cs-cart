<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:55:52
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/vendor_plans/hooks/companies/payout_amount.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9489641005b337440ce3033-50562357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '008626df6438ac222cdafac227258f2decc4e6d6' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/vendor_plans/hooks/companies/payout_amount.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9489641005b337440ce3033-50562357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'payout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337440cef849_35570711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337440cef849_35570711')) {function content_5b337440cef849_35570711($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('addons.vendor_plans.commission_description_absolute','addons.vendor_plans.commission_description_percent'));
?>
<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['payout']->value['order_id']&&($_smarty_tpl->tpl_vars['payout']->value['commission']!=0||$_smarty_tpl->tpl_vars['payout']->value['commission_amount']!=0)) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("order_amount", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['payout']->value['order_amount']), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <br>
    <small class="muted">
        <?php if ($_smarty_tpl->tpl_vars['payout']->value['commission_type']=="A") {?> 
            <?php $_smarty_tpl->_capture_stack[0][] = array("commission_amount", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['payout']->value['commission']), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo $_smarty_tpl->__("addons.vendor_plans.commission_description_absolute",array("[amount]"=>Smarty::$_smarty_vars['capture']['commission_amount'],"[sum]"=>Smarty::$_smarty_vars['capture']['order_amount']));?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("addons.vendor_plans.commission_description_percent",array("[amount]"=>$_smarty_tpl->tpl_vars['payout']->value['commission'],"[sum]"=>Smarty::$_smarty_vars['capture']['order_amount']));?>

        <?php }?>
    </small>
<?php }?><?php }} ?>
