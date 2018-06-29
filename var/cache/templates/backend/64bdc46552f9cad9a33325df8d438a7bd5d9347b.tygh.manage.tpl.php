<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 18:50:09
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/email_templates/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21069965525b34e089d8dc39-22641472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64bdc46552f9cad9a33325df8d438a7bd5d9347b' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/email_templates/manage.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21069965525b34e089d8dc39-22641472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'can_update' => 0,
    'groups' => 0,
    'group_id' => 0,
    'group' => 0,
    'email_template' => 0,
    'edit_link_text' => 0,
    'snippets' => 0,
    'return_url' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34e089db9fe0_87691449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34e089db9fe0_87691449')) {function content_5b34e089db9fe0_87691449($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('edit','view','editing_email_template','import','import','export','import','email_templates'));
?>
<?php $_smarty_tpl->tpl_vars["return_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["can_update"] = new Smarty_variable(fn_check_permissions('snippets','update','admin','POST'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["edit_link_text"] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['can_update']->value) {?>
    <?php $_smarty_tpl->tpl_vars["edit_link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars["group"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group"]->_loop = false;
 $_smarty_tpl->tpl_vars["group_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group"]->key => $_smarty_tpl->tpl_vars["group"]->value) {
$_smarty_tpl->tpl_vars["group"]->_loop = true;
 $_smarty_tpl->tpl_vars["group_id"]->value = $_smarty_tpl->tpl_vars["group"]->key;
?>

<div id="content_email_templates_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['group_id']->value!="C") {?>class="hidden"<?php }?>>
<div class="items-container">
    <table class="table table-middle table-objects">
        <tbody>
            <?php  $_smarty_tpl->tpl_vars["email_template"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["email_template"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["email_template"]->key => $_smarty_tpl->tpl_vars["email_template"]->value) {
$_smarty_tpl->tpl_vars["email_template"]->_loop = true;
?>
                <?php ob_start();
echo $_smarty_tpl->__("editing_email_template");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id_prefix'=>$_smarty_tpl->tpl_vars['group_id']->value,'id'=>$_smarty_tpl->tpl_vars['email_template']->value->getId(),'text'=>$_smarty_tpl->tpl_vars['email_template']->value->getName(),'status'=>$_smarty_tpl->tpl_vars['email_template']->value->getStatus(),'href'=>"email_templates.update?template_id=".((string)$_smarty_tpl->tpl_vars['email_template']->value->getId()),'object_id_name'=>"template_id",'table'=>"template_emails",'href_delete'=>'','delete_target_id'=>'','skip_delete'=>true,'header_text'=>$_tmp1.": ".((string)$_smarty_tpl->tpl_vars['email_template']->value->getName()),'no_popup'=>true,'no_table'=>true,'draggable'=>false,'link_text'=>$_smarty_tpl->tpl_vars['edit_link_text']->value,'nostatus'=>!$_smarty_tpl->tpl_vars['can_update']->value), 0);?>

            <?php } ?>
        </tbody>
    </table>
</div>
<!--content_email_templates_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php } ?>

<div class="hidden" id="content_snippets">
        <?php echo $_smarty_tpl->getSubTemplate ("views/snippets/components/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('snippets'=>$_smarty_tpl->tpl_vars['snippets']->value,'result_ids'=>"content_snippets",'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value), 0);?>

<!--content_snippets--></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox']), 0);?>



<?php $_smarty_tpl->_capture_stack[0][] = array("import_form", null, null); ob_start(); ?>
    <div class="install-addon">
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" class="form-horizontal form-edit" name="import_email_templates" enctype="multipart/form-data">
            <div class="install-addon-wrapper">
                <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/addon_box.png" width="151" height="141" />
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"filename[]",'allowed_ext'=>"xml"), 0);?>

            </div>
            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("import"),'but_name'=>"dispatch[email_templates.import]",'cancel_action'=>"close"), 0);?>

            </div>
        </form>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_smarty_tpl->__("import"),'content'=>Smarty::$_smarty_vars['capture']['import_form'],'id'=>"import_email_templates_form"), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'href'=>"email_templates.export",'text'=>$_smarty_tpl->__("export"),'method'=>"POST"));?>
</li>

        <?php if (fn_check_permissions("email_templates","import","admin","POST")) {?>
            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"import_email_templates_form",'link_text'=>$_smarty_tpl->__("import"),'act'=>"link",'link_class'=>"cm-dialog-auto-size",'content'=>'','general_class'=>"action-btn"), 0);?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/snippets/components/tools_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('additional_snippet_tools_list_items'=>Smarty::$_smarty_vars['capture']['tools_items']), 0);?>


    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items'],'class'=>"cm-tab-tools hidden",'id'=>"tools_email_templates_C"));?>

    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items'],'class'=>"cm-tab-tools hidden",'id'=>"tools_email_templates_A"));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/snippets/components/adv_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('result_ids'=>"content_snippets",'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value,'type'=>'mail','addon'=>''), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("email_templates"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>
