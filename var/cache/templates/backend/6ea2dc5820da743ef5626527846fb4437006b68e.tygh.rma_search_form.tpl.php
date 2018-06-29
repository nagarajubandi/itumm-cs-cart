<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 17:13:33
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/rma/views/rma/components/rma_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16980816735b34c9e55673c4-74103908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ea2dc5820da743ef5626527846fb4437006b68e' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/rma/views/rma/components/rma_search_form.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16980816735b34c9e55673c4-74103908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'actions' => 0,
    'action_id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34c9e5598538_82420274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34c9e5598538_82420274')) {function content_5b34c9e5598538_82420274($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','customer','email','quantity','rma_return','id','action','all_actions','order','id','return_status','order_status'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" name="rma_search_form" method="get">
    <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
        <div class="sidebar-field">
            <label for="cname"><?php echo $_smarty_tpl->__("customer");?>
:</label>
            <input type="text" name="cname" id="cname" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['cname'], ENT_QUOTES, 'ISO-8859-1');?>
" size="30" />
        </div>

        <div class="sidebar-field">
            <label for="email"><?php echo $_smarty_tpl->__("email");?>
:</label>
            <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'ISO-8859-1');?>
" size="30"/>
        </div>

        <div class="sidebar-field">
            <label for="rma_amount_from"><?php echo $_smarty_tpl->__("quantity");?>
:</label>
            <input type="text" name="rma_amount_from" id="rma_amount_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['rma_amount_from'], ENT_QUOTES, 'ISO-8859-1');?>
" size="3" class="input-small" />&nbsp;&ndash;&nbsp;<input type="text" name="rma_amount_to" class="input-small" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['rma_amount_to'], ENT_QUOTES, 'ISO-8859-1');?>
" size="3" />
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
    <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"rma_search_form"), 0);?>

    </div>
</div>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label" for="return_id"><?php echo $_smarty_tpl->__("rma_return");?>
&nbsp;<?php echo $_smarty_tpl->__("id");?>
:</label>
            <div class="controls">
                <input type="text" name="return_id" id="return_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['return_id'], ENT_QUOTES, 'ISO-8859-1');?>
" size="30" />
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['actions']->value) {?>
            <div class="control-group">
                <label class="control-label" for="action"><?php echo $_smarty_tpl->__("action");?>
:</label>
                <div class="controls">
                    <select name="action" id="action">
                        <option value="0"><?php echo $_smarty_tpl->__("all_actions");?>
</option>
                        <?php  $_smarty_tpl->tpl_vars["action"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["action"]->_loop = false;
 $_smarty_tpl->tpl_vars["action_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["action"]->key => $_smarty_tpl->tpl_vars["action"]->value) {
$_smarty_tpl->tpl_vars["action"]->_loop = true;
 $_smarty_tpl->tpl_vars["action_id"]->value = $_smarty_tpl->tpl_vars["action"]->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['action']==$_smarty_tpl->tpl_vars['action_id']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value['property'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        <?php }?>

        <div class="control-group">
            <label class="control-label" for="order_id"><?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php echo $_smarty_tpl->__("id");?>
:</label>
            <div class="controls">
                <input type="text" name="order_id" id="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" size="30" />
            </div>
        </div>
    </div>

    <div class="group span6">
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("return_status");?>
:</label>
            <div class="controls checkbox-list">
                <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['search']->value['request_status'],'display'=>"checkboxes",'name'=>"request_status",'status_type'=>@constant('STATUSES_RETURN')), 0);?>

            </div>
        </div>
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("order_status");?>
:</label>
            <div class="controls checkbox-list">
                <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['search']->value['order_status'],'display'=>"checkboxes",'name'=>"order_status"), 0);?>

            </div>
        </div>
    </div>
</div>

<div class="group">
    <div class="control-group">
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/products_to_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>"rma.returns",'view_type'=>"rma"), 0);?>


</form>
</div>
<?php }} ?>
