<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 18:56:35
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/discussion/views/discussion_manager/components/discussion_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20194069985b33908b81ac94-92311850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '707aa9a35616f8d0a8feb66b8983dcfab8c6b43e' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/discussion/views/discussion_manager/components/discussion_search_form.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20194069985b33908b81ac94-92311850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33908b860d20_54448098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33908b860d20_54448098')) {function content_5b33908b860d20_54448098($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','author','message','rating','excellent','very_good','average','fair','poor','discussion','rating','communication','rating','communication','period','ip_address','approved','yes','no','sort_by','author','approved','date','ip_address','desc','asc'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" name="discussion_search_form" method="get">
<input type="hidden" name="object_type" id="obj_type" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search']->value['object_type'])===null||$tmp==='' ? "P" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
">
<input type="hidden" name="dispatch" value="discussion_manager.manage">

<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
            <div class="sidebar-field">
                <label for="author"><?php echo $_smarty_tpl->__("author");?>
</label>
                <input type="text" class="input-text" id="author" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
">
            </div>
            
            <div class="sidebar-field">
                <label for="message"><?php echo $_smarty_tpl->__("message");?>
</label>
                <input type="text" class="input-text" id="message" name="message" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['message'], ENT_QUOTES, 'ISO-8859-1');?>
">
            </div>
            
            <div class="sidebar-field">
                <label for="rating_value"><?php echo $_smarty_tpl->__("rating");?>
</label>
                <select name="rating_value" id="rating_value" class="input-medium">
                <option value="">--</option>
                    <option value="5" <?php if ($_smarty_tpl->tpl_vars['search']->value['rating_value']=="5") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("excellent");?>
</option>
                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['search']->value['rating_value']=="4") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("very_good");?>
</option>
                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['search']->value['rating_value']=="3") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("average");?>
</option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['search']->value['rating_value']=="2") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("fair");?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['search']->value['rating_value']=="1") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("poor");?>
</option>
                </select>
            </div>
            
            <div class="sidebar-field">
                <label for="discussion_type"><?php echo $_smarty_tpl->__("discussion");?>
</label>
                <select name="type" id="discussion_type">
                    <option value="">--</option>
                    <option value="B" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("rating");?>
 & <?php echo $_smarty_tpl->__("communication");?>
</option>
                    <option value="R" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="R") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("rating");?>
</option>
                    <option value="C" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("communication");?>
</option>
                </select>
            </div>               
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
<div class="group form-horizontal">
    <div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("period");?>
</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"discussion_search_form"), 0);?>

    </div>
</div>
</div>

<div class="group form-horizontal">
<div class="control-group">
    <label class='control-label' for="ip_address"><?php echo $_smarty_tpl->__("ip_address");?>
</label>
    <div class="controls">
    <input type="text" id="ip_address" name="ip_address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['ip_address'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="status"><?php echo $_smarty_tpl->__("approved");?>
</label>
    <div class="controls">
    <select name="status" id="status">
        <option value="">--</option>
        <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
        <option value="D" <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
    </select>
    </div>
</div>
</div>
<div class="group form-horizontal">
<div class="control-group">
    <label class="control-label" for="sort_by"><?php echo $_smarty_tpl->__("sort_by");?>
</label>
    <div class="controls">
    <select name="sort_by" id="sort_by" class="input-small">
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="name") {?>selected="selected"<?php }?> value="name"><?php echo $_smarty_tpl->__("author");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {?>selected="selected"<?php }?> value="status"><?php echo $_smarty_tpl->__("approved");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {?>selected="selected"<?php }?> value="timestamp"><?php echo $_smarty_tpl->__("date");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="ip_address") {?>selected="selected"<?php }?> value="ip_address"><?php echo $_smarty_tpl->__("ip_address");?>
</option>
    </select>

    <select name="sort_order" class="input-small">
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev']=="desc") {?>selected="selected"<?php }?> value="desc"><?php echo $_smarty_tpl->__("desc");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev']=="asc") {?>selected="selected"<?php }?> value="asc"><?php echo $_smarty_tpl->__("asc");?>
</option>
    </select>
    </div>
</div>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>"discussion_manager.manage",'view_type'=>"discussion"), 0);?>


</form>

</div>
<hr><?php }} ?>
