<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 18:52:39
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/documents/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12132582025b34e11f3ba648-55832713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '442ea086705a8ed1a3405afc58b713475b1963af' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/documents/manage.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12132582025b34e11f3ba648-55832713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'can_update' => 0,
    'documents' => 0,
    'document' => 0,
    'edit_link_text' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34e11f3e82b3_06539732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34e11f3e82b3_06539732')) {function content_5b34e11f3e82b3_06539732($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('edit','view','name','code','export','no_data','import','export_selected','import','import','documents'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php $_smarty_tpl->tpl_vars["can_update"] = new Smarty_variable(fn_check_permissions('snippets','update','admin','POST'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["edit_link_text"] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['can_update']->value) {?>
    <?php $_smarty_tpl->tpl_vars["edit_link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
<?php }?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="manage_documents_form" id="manage_documents_form">
    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <div class="items-container" id="documents_list">
        <?php if ($_smarty_tpl->tpl_vars['documents']->value) {?>
            <table width="100%" class="table table-middle table-objects">
                <thead>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                        <th class="left" width="1%">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </th>
                    <?php }?>
                    <th width="60%"><?php echo $_smarty_tpl->__("name");?>
</th>
                    <th width="30%"><?php echo $_smarty_tpl->__("code");?>
</th>
                    <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                        <th width="5%">&nbsp;</th>
                    <?php }?>
                </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars["document"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["document"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['documents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["document"]->key => $_smarty_tpl->tpl_vars["document"]->value) {
$_smarty_tpl->tpl_vars["document"]->_loop = true;
?>
                    <tr class="cm-row-item">
                        <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                            <td class="left">
                                <input type="checkbox" name="document_id[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['document']->value->getId(), ENT_QUOTES, 'ISO-8859-1');?>
" class="checkbox cm-item" />
                            </td>
                        <?php }?>
                        <td>
                            <div class="object-group-link-wrap">
                                <a href="<?php echo htmlspecialchars(fn_url("documents.update?document_id=".((string)$_smarty_tpl->tpl_vars['document']->value->getId())), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['document']->value->getName(), ENT_QUOTES, 'ISO-8859-1');?>
</a>
                            </div>
                        </td>
                        <td>
                            <span class="block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['document']->value->getType(), ENT_QUOTES, 'ISO-8859-1');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['document']->value->getCode(), ENT_QUOTES, 'ISO-8859-1');?>
</span>
                        </td>
                        <td class="nowrap">
                            <div class="hidden-tools">
                                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['edit_link_text']->value,'href'=>"documents.update?document_id=".((string)$_smarty_tpl->tpl_vars['document']->value->getId())));?>
</li>
                                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_smarty_tpl->__("export"),'href'=>"documents.export?document_id=".((string)$_smarty_tpl->tpl_vars['document']->value->getId()),'method'=>"POST"));?>
</li>
                                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                            </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <!--documents_list--></div>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("import_form", null, null); ob_start(); ?>
    <div class="install-addon">
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" class="form-horizontal form-edit" name="import_documents" enctype="multipart/form-data">
            <div class="install-addon-wrapper">
                <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/addon_box.png" width="151" height="141" />
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"filename[]",'allowed_ext'=>"xml"), 0);?>

            </div>
            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("import"),'but_name'=>"dispatch[documents.import]",'cancel_action'=>"close"), 0);?>

            </div>
        </form>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[documents.export]",'form'=>"manage_documents_form"));?>
</li>

        <?php if (fn_check_permissions("documents","import","admin","POST")) {?>
            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"import_form",'link_text'=>$_smarty_tpl->__("import"),'act'=>"link",'link_class'=>"cm-dialog-auto-size",'text'=>$_smarty_tpl->__("import"),'content'=>Smarty::$_smarty_vars['capture']['import_form'],'general_class'=>"action-btn"), 0);?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("documents"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
