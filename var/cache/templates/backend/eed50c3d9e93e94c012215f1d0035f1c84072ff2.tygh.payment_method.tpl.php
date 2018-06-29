<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 19:05:22
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/order_management/components/payment_method.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5247165455b34e41a5a8053-59540694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eed50c3d9e93e94c012215f1d0035f1c84072ff2' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/order_management/components/payment_method.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5247165455b34e41a5a8053-59540694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'cart' => 0,
    'payment_methods' => 0,
    'pm' => 0,
    'payment_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34e41a5c3a99_24383543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34e41a5c3a99_24383543')) {function content_5b34e41a5c3a99_24383543($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('payment_information','method','text_min_order_amount_required'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:payment_method")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:payment_method"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['min_order_amount']<=$_smarty_tpl->tpl_vars['cart']->value['total']) {?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['total']!=0) {?>
        <div class="control-group">
            <div class="control-label">
                <h4 class="subheader"><?php echo $_smarty_tpl->__("payment_information");?>
</h4>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="payment_methods"><?php echo $_smarty_tpl->__("method");?>
</label>
            <div class="controls">
            <select name="payment_id" id="payment_methods" class="cm-submit cm-ajax cm-skip-validation" data-ca-dispatch="dispatch[order_management.update_payment]">
                <?php  $_smarty_tpl->tpl_vars["pm"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["pm"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["pm"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["pm"]->key => $_smarty_tpl->tpl_vars["pm"]->value) {
$_smarty_tpl->tpl_vars["pm"]->_loop = true;
 $_smarty_tpl->tpl_vars["pm"]->index++;
 $_smarty_tpl->tpl_vars["pm"]->first = $_smarty_tpl->tpl_vars["pm"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["pay"]['first'] = $_smarty_tpl->tpl_vars["pm"]->first;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pm']->value['payment_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_id']==$_smarty_tpl->tpl_vars['pm']->value['payment_id']||(!$_smarty_tpl->tpl_vars['cart']->value['payment_id']&&$_smarty_tpl->getVariable('smarty')->value['foreach']['pay']['first'])) {
$_smarty_tpl->tpl_vars["selected_payment_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['pm']->value['payment_id'], null, 0);?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pm']->value['payment'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['payment_method']->value['template']) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("payment_details", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['payment_method']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>$_smarty_tpl->tpl_vars['payment_method']->value['payment_id']), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php if (trim(Smarty::$_smarty_vars['capture']['payment_details'])) {?>
                <?php echo Smarty::$_smarty_vars['capture']['payment_details'];?>

            <?php }?>
        <?php }?>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['General']['min_order_amount']>$_smarty_tpl->tpl_vars['cart']->value['total']) {?>
        <label class="error-text">
            <?php echo $_smarty_tpl->__("text_min_order_amount_required");?>
&nbsp;<span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['settings']->value['General']['min_order_amount']), 0);?>
</span>
        </label>
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:payment_method"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
