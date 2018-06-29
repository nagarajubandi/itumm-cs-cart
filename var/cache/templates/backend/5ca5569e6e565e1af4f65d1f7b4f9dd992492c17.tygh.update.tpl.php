<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 18:50:23
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/email_templates/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18173637005b34e097f34ab2-67223784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ca5569e6e565e1af4f65d1f7b4f9dd992492c17' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/email_templates/update.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18173637005b34e097f34ab2-67223784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'return_url' => 0,
    'email_template' => 0,
    'id' => 0,
    'params_schema' => 0,
    'name' => 0,
    'field' => 0,
    'params' => 0,
    'variant_key' => 0,
    'variant_name' => 0,
    'variables' => 0,
    'variable' => 0,
    'snippets' => 0,
    'snippet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34e09804a9c5_00820699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34e09804a9c5_00820699')) {function content_5b34e09804a9c5_00820699($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_in_array')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.in_array.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('subject','template','variables','snippets','send_test_email','preview','text_restore_question','restore','editing_email_template'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/email_templates.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["return_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["return_url_escape"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['return_url']->value), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['email_template']->value->getId(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable($_smarty_tpl->tpl_vars['email_template']->value->getParams(), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<div id="content_general">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" enctype="multipart/form-data" name="email_template_form" class="form-horizontal">

    <input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="hidden" name="result_ids" value="preview_dialog" />
    <input type="hidden" name="template_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

    <fieldset>
        <div class="control-group">
            <label for="elm_email_template_subject_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-required control-label"><?php echo $_smarty_tpl->__("subject");?>
:</label>
            <div class="controls">
                <input id="elm_email_template_subject_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="text" name="email_template[subject]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email_template']->value->getSubject(), ENT_QUOTES, 'ISO-8859-1');?>
" class="span9 cm-emltpl-set-active cm-focus">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_email_template_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("template");?>
:</label>
            <div class="controls">
                <textarea id="elm_email_template_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="email_template[template]" cols="55" rows="14" class="span9 cm-emltpl-set-active"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email_template']->value->getTemplate(), ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"email_template[status]",'id'=>"elm_email_template_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['email_template']->value->toArray(),'hidden'=>false), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['params_schema']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params_schema']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
                <div class="control-group">
                    <label class="control-label" for="elm_email_template_params_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['title']);
if ($_smarty_tpl->tpl_vars['field']->value['description']) {
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description'])), 0);
}?>:</label>
                    <div class="controls">

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
                            <input type="hidden" name="email_template[params][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="N">
                            <input type="checkbox" id="elm_email_template_params_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="email_template[params][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="Y"<?php if ($_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['name']->value]=="Y") {?> checked="checked"<?php }?> />
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='selectbox') {?>
                            <select name="email_template[params][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" id="elm_email_template_params_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                                <option value=""> - </option>
                                <?php  $_smarty_tpl->tpl_vars["variant_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["variant_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant_name"]->key => $_smarty_tpl->tpl_vars["variant_name"]->value) {
$_smarty_tpl->tpl_vars["variant_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["variant_key"]->value = $_smarty_tpl->tpl_vars["variant_name"]->key;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['variant_key']->value==$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['name']->value]) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                                <?php } ?>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='checkboxes') {?>
                            <input type="hidden" name="email_template[params][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
]">
                            <?php  $_smarty_tpl->tpl_vars["variant_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["variant_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant_name"]->key => $_smarty_tpl->tpl_vars["variant_name"]->value) {
$_smarty_tpl->tpl_vars["variant_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["variant_key"]->value = $_smarty_tpl->tpl_vars["variant_name"]->key;
?>
                                <label class="checkbox inline" for="elm_email_template_params_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                                    <input type="checkbox" id="elm_email_template_params_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="email_template[params][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['variant_key']->value,$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['name']->value])) {?> checked="checked"<?php }?> />
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'ISO-8859-1');?>

                                </label>
                            <?php } ?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='textarea') {?>
                            <textarea id="elm_email_template_params_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="email_template[params][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" cols="55" rows="3" class="span9"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
                        <?php } else { ?>
                            <input type="text" id="elm_email_template_params_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="email_template[params][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'ISO-8859-1');?>
" />
                        <?php }?>
                    </div>
                </div>
            <?php } ?>
        <?php }?>

    </fieldset>
    
    </form>

</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'track'=>true), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("views/email_templates/preview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('preview'=>array()), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("variables");?>
</h6>
        <ul class="nav nav-list">
            <?php  $_smarty_tpl->tpl_vars["variable"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variable"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variable"]->key => $_smarty_tpl->tpl_vars["variable"]->value) {
$_smarty_tpl->tpl_vars["variable"]->_loop = true;
?>
                <li><span class="cm-emltpl-insert-variable label hand" data-ca-template-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variable']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variable']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span></li>
            <?php } ?>
        </ul>
    </div>
    
    <div class="sidebar-row" id="sidebar_snippets">
        <h6><?php echo $_smarty_tpl->__("snippets");?>
</h6>
        <ul class="nav nav-list">
            <?php  $_smarty_tpl->tpl_vars["snippet"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["snippet"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['snippets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["snippet"]->key => $_smarty_tpl->tpl_vars["snippet"]->value) {
$_smarty_tpl->tpl_vars["snippet"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['snippet']->value->getStatus()=="A") {?>
                    <li><span class="cm-emltpl-insert-variable label label-info hand" data-ca-template-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getCallTag(), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getCode(), ENT_QUOTES, 'ISO-8859-1');?>
</span></li>
                <?php }?>
            <?php } ?>
        </ul>
    <!--sidebar_snippets--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"email_templates:update_tools_list_general")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"email_templates:update_tools_list_general"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("send_test_email"),'class'=>"cm-ajax",'dispatch'=>"dispatch[email_templates.send]",'form'=>"email_template_form"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("preview"),'class'=>"cm-ajax cm-form-dialog-opener",'dispatch'=>"dispatch[email_templates.preview]",'form'=>"email_template_form"));?>
</li>

            <?php if ($_smarty_tpl->tpl_vars['email_template']->value->isModified()) {?>
                <?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                <li><?php ob_start();
echo $_smarty_tpl->__("text_restore_question");
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'href'=>"email_templates.restore?template_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_tmp1),'text'=>$_smarty_tpl->__("restore"),'method'=>"POST"));?>
</li>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"email_templates:update_tools_list_general"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"cm-tab-tools",'id'=>"tools_general"));?>


    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[email_templates.update]",'but_target_form'=>"email_template_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();
echo $_smarty_tpl->__("editing_email_template");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp2.": ".((string)$_smarty_tpl->tpl_vars['email_template']->value->getName()),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'sidebar_position'=>"left"), 0);?>

<?php }} ?>
