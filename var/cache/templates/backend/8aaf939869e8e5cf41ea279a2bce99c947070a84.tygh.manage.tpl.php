<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:57:45
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/payments/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15286721895b3374b17c7662-67388890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aaf939869e8e5cf41ea279a2bce99c947070a84' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/payments/manage.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15286721895b3374b17c7662-67388890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_processors' => 0,
    'p' => 0,
    'payments' => 0,
    'runtime' => 0,
    'payment' => 0,
    'status' => 0,
    'skip_delete' => 0,
    'can_change_status' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3374b17f7fa4_05267181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3374b17f7fa4_05267181')) {function content_5b3374b17f7fa4_05267181($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('editing_payment','no_data','new_payments','add_payment','payment_methods'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
var processor_descriptions = [];
<?php  $_smarty_tpl->tpl_vars["p"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_processors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["p"]->key => $_smarty_tpl->tpl_vars["p"]->value) {
$_smarty_tpl->tpl_vars["p"]->_loop = true;
?>
processor_descriptions[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['processor_id'], ENT_QUOTES, 'ISO-8859-1');?>
] = '<?php echo strtr($_smarty_tpl->tpl_vars['p']->value['description'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
<?php } ?>
function fn_switch_processor(payment_id, processor_id)
{
    Tygh.$('#tab_conf_' + payment_id).toggleBy(processor_id == 0);
    if (processor_id != 0) {
        Tygh.$('#tab_conf_' + payment_id + ' a').prop('href', fn_url('payments.processor?payment_id=' + payment_id + '&processor_id=' + processor_id));
        Tygh.$('#content_tab_conf_' + payment_id).remove();
        Tygh.$('#elm_payment_tpl_' + payment_id).prop('disabled', true);
        if (processor_descriptions[processor_id]) {
            Tygh.$('#elm_processor_description_' + payment_id).html(processor_descriptions[processor_id]).show();
        } else {
            Tygh.$('#elm_processor_description_' + payment_id).hide();
        }
    } else {
        Tygh.$('#elm_payment_tpl_' + payment_id).prop('disabled', false);
        Tygh.$('#elm_processor_description_' + payment_id).hide();
    }
}
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="items-container cm-sortable" data-ca-sortable-table="payments" data-ca-sortable-id-name="payment_id" id="payments_list">
<?php $_smarty_tpl->tpl_vars["skip_delete"] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['payments']->value) {?>
<table class="table table-middle table-objects table-striped">
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']!=$_smarty_tpl->tpl_vars['payment']->value['company_id']) {?>
                    <?php $_smarty_tpl->tpl_vars["skip_delete"] = new Smarty_variable(true, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["hide_for_vendor"] = new Smarty_variable(true, null, 0);?>

                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["skip_delete"] = new Smarty_variable(false, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["hide_for_vendor"] = new Smarty_variable(false, null, 0);?>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_status']=="D") {?>
                <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable("D", null, 0);?>
                <?php $_smarty_tpl->tpl_vars['can_change_status'] = new Smarty_variable(false, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable("text", null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment']->value['status'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['can_change_status'] = new Smarty_variable(true, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable('', null, 0);?>
            <?php }?>

            <?php $_smarty_tpl->_capture_stack[0][] = array("tool_items", null, null); ob_start(); ?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php $_smarty_tpl->_capture_stack[0][] = array("extra_data", null, null); ob_start(); ?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:extra_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:extra_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:extra_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php ob_start();
echo $_smarty_tpl->__("editing_payment");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id'],'text'=>$_smarty_tpl->tpl_vars['payment']->value['payment'],'status'=>$_smarty_tpl->tpl_vars['status']->value,'href'=>"payments.update?payment_id=".((string)$_smarty_tpl->tpl_vars['payment']->value['payment_id']),'object_id_name'=>"payment_id",'table'=>"payments",'href_delete'=>"payments.delete?payment_id=".((string)$_smarty_tpl->tpl_vars['payment']->value['payment_id']),'delete_target_id'=>"payments_list",'skip_delete'=>$_smarty_tpl->tpl_vars['skip_delete']->value,'header_text'=>$_tmp1.": ".((string)$_smarty_tpl->tpl_vars['payment']->value['payment']),'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['payment']->value['payment_id']),'no_table'=>true,'draggable'=>true,'can_change_status'=>$_smarty_tpl->tpl_vars['can_change_status']->value,'display'=>$_smarty_tpl->tpl_vars['display']->value,'tool_items'=>Smarty::$_smarty_vars['capture']['tool_items'],'extra_data'=>Smarty::$_smarty_vars['capture']['extra_data']), 0);?>

        <?php } ?>
    </tbody>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
<!--payments_list--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/payments/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment'=>array(),'hide_for_vendor'=>false), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_payments",'text'=>$_smarty_tpl->__("new_payments"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>$_smarty_tpl->__("add_payment"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("payment_methods"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>
