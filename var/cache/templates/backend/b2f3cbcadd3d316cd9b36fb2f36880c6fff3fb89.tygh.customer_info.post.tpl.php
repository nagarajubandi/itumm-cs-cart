<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:34:56
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/discussion/hooks/orders/customer_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15626797535b337d68ea0801-58286897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2f3cbcadd3d316cd9b36fb2f36880c6fff3fb89' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/discussion/hooks/orders/customer_info.post.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15626797535b337d68ea0801-58286897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'discussion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337d68eb5d86_73942906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337d68eb5d86_73942906')) {function content_5b337d68eb5d86_73942906($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion','discussion_title_order','disabled','enabled','enabled','disabled'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")||$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>

<?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['order_info']->value['order_id'],"O"), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("discussion")), 0);?>


<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("discussion_title_order");?>
</label>
    <div class="controls">
        <?php if (fn_check_view_permissions("discussion.add")) {?>
	    <input type="hidden" name="discussion[object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
	    <input type="hidden" name="discussion[object_type]" value="O" /> 
	    <select name="discussion[type]">
	        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="D") {?>selected="selected"<?php }?> value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
	        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C") {?>selected="selected"<?php }?> value="C"><?php echo $_smarty_tpl->__("enabled");?>
</option>
	    </select>
        <?php } else { ?>
            <span class="shift-input"><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C") {
echo $_smarty_tpl->__("enabled");
} else {
echo $_smarty_tpl->__("disabled");
}?></span>
        <?php }?>
    </div>
</div>
<?php }?><?php }} ?>
