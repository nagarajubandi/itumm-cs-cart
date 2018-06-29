<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 11:08:34
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/rma/views/rma/components/rma_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16607244725b35c5dae4b4e9-16841374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '293b410d254bfca6bfc5c3c547b304342878253a' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/rma/views/rma/components/rma_search_form.tpl',
      1 => 1526039787,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16607244725b35c5dae4b4e9-16841374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'action' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b35c5dae72e08_58501305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b35c5dae72e08_58501305')) {function content_5b35c5dae72e08_58501305($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('return_status','search_by_order','order','id','order_status','search','return_status','search_by_order','order','id','order_status','search'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" name="rma_search_form" method="get" class="ty-rma-search">


<div class="ty-control-group" style="float:left;padding: 5px 0px 0px 0px;">
    <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("return_status");?>
</label>
    <div class="ty-rma-search__status">
        <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_REQUEST['request_status'],'display'=>"select",'name'=>"request_status",'status_type'=>@constant('STATUSES_RETURN')), 0);?>

    </div>
	
</div>
<div class="ty-control-group__item" style="padding: 0px 0px 0px 20px;">
<?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_REQUEST['period'],'form_name'=>"rma_search_form"), 0);?>

</div>
<div class="ty-rma-search__toggle cm-combination cm-save-state cm-ss-reverse" id="sw_s_show_options">
    <span class="ty-rma-search__toggle-title"><?php echo $_smarty_tpl->__("search_by_order");?>
<i id="on_s_show_options" class="ty-rma-search__toggle-icon ty-icon-down-open"></i><i id="off_s_show_options" class="ty-rma-search__toggle-icon ty-icon-up-open hidden"></i></span>
</div>

<div id="s_show_options"<?php if (!($_REQUEST['order_status']||$_REQUEST['order_id'])) {?> class="rma-options hidden"<?php }?>>
    <div class="ty-control-group">
        <label class="ty-control-group__title" for="r_id"><?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php echo $_smarty_tpl->__("id");?>
</label>
        <input type="text" name="order_id" value="<?php echo htmlspecialchars($_REQUEST['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" size="30" class="ty-input-text" />
    </div>
    
    <div class="ty-control-group">
        <label class="ty-control-group__title" for="r_id"><?php echo $_smarty_tpl->__("order_status");?>
</label>
        <div class="ty-rma-search__status">
            <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_REQUEST['order_status'],'display'=>"select",'name'=>"order_status"), 0);?>

        </div>
    </div>
</div>

<div class="ty-rma-search__buttons buttons-container">
    <?php if ($_smarty_tpl->tpl_vars['action']->value) {?>
        <?php $_smarty_tpl->tpl_vars["_action"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['action']->value), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("search"),'but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['action'])."]",'but_meta'=>"ty-btn__secondary"), 0);?>

</div>
</form><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/views/rma/components/rma_search_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/views/rma/components/rma_search_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" name="rma_search_form" method="get" class="ty-rma-search">


<div class="ty-control-group" style="float:left;padding: 5px 0px 0px 0px;">
    <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("return_status");?>
</label>
    <div class="ty-rma-search__status">
        <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_REQUEST['request_status'],'display'=>"select",'name'=>"request_status",'status_type'=>@constant('STATUSES_RETURN')), 0);?>

    </div>
	
</div>
<div class="ty-control-group__item" style="padding: 0px 0px 0px 20px;">
<?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_REQUEST['period'],'form_name'=>"rma_search_form"), 0);?>

</div>
<div class="ty-rma-search__toggle cm-combination cm-save-state cm-ss-reverse" id="sw_s_show_options">
    <span class="ty-rma-search__toggle-title"><?php echo $_smarty_tpl->__("search_by_order");?>
<i id="on_s_show_options" class="ty-rma-search__toggle-icon ty-icon-down-open"></i><i id="off_s_show_options" class="ty-rma-search__toggle-icon ty-icon-up-open hidden"></i></span>
</div>

<div id="s_show_options"<?php if (!($_REQUEST['order_status']||$_REQUEST['order_id'])) {?> class="rma-options hidden"<?php }?>>
    <div class="ty-control-group">
        <label class="ty-control-group__title" for="r_id"><?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php echo $_smarty_tpl->__("id");?>
</label>
        <input type="text" name="order_id" value="<?php echo htmlspecialchars($_REQUEST['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" size="30" class="ty-input-text" />
    </div>
    
    <div class="ty-control-group">
        <label class="ty-control-group__title" for="r_id"><?php echo $_smarty_tpl->__("order_status");?>
</label>
        <div class="ty-rma-search__status">
            <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_REQUEST['order_status'],'display'=>"select",'name'=>"order_status"), 0);?>

        </div>
    </div>
</div>

<div class="ty-rma-search__buttons buttons-container">
    <?php if ($_smarty_tpl->tpl_vars['action']->value) {?>
        <?php $_smarty_tpl->tpl_vars["_action"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['action']->value), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("search"),'but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['action'])."]",'but_meta'=>"ty-btn__secondary"), 0);?>

</div>
</form><?php }?><?php }} ?>
