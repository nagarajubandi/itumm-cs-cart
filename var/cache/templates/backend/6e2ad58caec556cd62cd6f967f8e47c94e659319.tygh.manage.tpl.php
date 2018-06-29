<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 18:44:39
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/profile_fields/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15916205595b34df3f163b47-67296743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e2ad58caec556cd62cd6f967f8e47c94e659319' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/profile_fields/manage.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15916205595b34df3f163b47-67296743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_inputs' => 0,
    'profile_fields_areas' => 0,
    'profile_fields' => 0,
    'd' => 0,
    'section' => 0,
    '_colspan' => 0,
    's_title' => 0,
    'fields' => 0,
    'field' => 0,
    'key' => 0,
    '_show' => 0,
    '_required' => 0,
    'custom_fields' => 0,
    'update_link_text' => 0,
    'extra_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34df3f1c5219_22180391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34df3f1c5219_22180391')) {function content_5b34df3f1c5219_22180391($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('edit','view','position_short','description','type','show','required','contact_information','billing_address','shipping_address','checkbox','input_field','radiogroup','selectbox','textarea','date','email','zip_postal_code','phone','country','state','address_type','delete','no_items','add_field','profile_fields'));
?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["update_link_text"] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>
<?php if (fn_check_form_permissions('')) {?>
    <?php $_smarty_tpl->tpl_vars["update_link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["hide_inputs"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
<?php }?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="fields_form"  class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_inputs']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<?php echo smarty_function_math(array('equation'=>"x + 5",'assign'=>"_colspan",'x'=>sizeof($_smarty_tpl->tpl_vars['profile_fields_areas']->value)),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th>
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <th><?php echo $_smarty_tpl->__("position_short");?>
</th>
    <th><?php echo $_smarty_tpl->__("description");?>
</th>
    <th><?php echo $_smarty_tpl->__("type");?>
</th>
    <?php  $_smarty_tpl->tpl_vars["d"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["d"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields_areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["d"]->key => $_smarty_tpl->tpl_vars["d"]->value) {
$_smarty_tpl->tpl_vars["d"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["d"]->key;
?>
    <th class="center">
        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['d']->value);?>
<br /><?php echo $_smarty_tpl->__("show");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("required");?>

    </th>
    <?php } ?>
    <th>&nbsp;</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fields']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fields']->key => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['fields']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value!="E") {?>
    <tr>
        <td colspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="row-header">
            <?php if ($_smarty_tpl->tpl_vars['section']->value=="C") {
$_smarty_tpl->tpl_vars["s_title"] = new Smarty_variable($_smarty_tpl->__("contact_information"), null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="B") {
$_smarty_tpl->tpl_vars["s_title"] = new Smarty_variable($_smarty_tpl->__("billing_address"), null, 0);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="S") {
$_smarty_tpl->tpl_vars["s_title"] = new Smarty_variable($_smarty_tpl->__("shipping_address"), null, 0);?>
            <?php }?>
            <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s_title']->value, ENT_QUOTES, 'ISO-8859-1');?>
</h5>
        </td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
    <tr>
        <td class="center">
        <?php if ($_smarty_tpl->tpl_vars['section']->value!="B"&&$_smarty_tpl->tpl_vars['field']->value['is_default']!="Y") {?>
            <?php $_smarty_tpl->tpl_vars["extra_fields"] = new Smarty_variable(true, null, 0);?>
            <?php $_smarty_tpl->tpl_vars["custom_fields"] = new Smarty_variable(true, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['matching_id']) {?>
                <input type="hidden" name="matches[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['matching_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
            <?php }?>
            <input type="checkbox" name="field_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-item" />
        <?php }?>
        </td>
        <td><input class="input-micro input-hidden" type="text" size="3" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['position'], ENT_QUOTES, 'ISO-8859-1');?>
" /></td>
        <td>
            <a href="<?php echo htmlspecialchars(fn_url("profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"  data-ct-field-section="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</a>
        </td>
        <td class="nowrap">
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="C") {
echo $_smarty_tpl->__("checkbox");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="I") {
echo $_smarty_tpl->__("input_field");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="R") {
echo $_smarty_tpl->__("radiogroup");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="S") {
echo $_smarty_tpl->__("selectbox");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="T") {
echo $_smarty_tpl->__("textarea");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="D") {
echo $_smarty_tpl->__("date");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="E") {
echo $_smarty_tpl->__("email");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="Z") {
echo $_smarty_tpl->__("zip_postal_code");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="P") {
echo $_smarty_tpl->__("phone");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="O") {?><a href="<?php echo htmlspecialchars(fn_url("countries.manage"), ENT_QUOTES, 'ISO-8859-1');?>
" class="underlined"><?php echo $_smarty_tpl->__("country");?>
&nbsp;&rsaquo;&rsaquo;</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="A") {?><a href="<?php echo htmlspecialchars(fn_url("states.manage"), ENT_QUOTES, 'ISO-8859-1');?>
" class="underlined"><?php echo $_smarty_tpl->__("state");?>
&nbsp;&rsaquo;&rsaquo;</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="N") {
echo $_smarty_tpl->__("address_type");?>

            <?php }?>
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
][field_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
][field_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'ISO-8859-1');?>
" />
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
][section]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
][matching_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['matching_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
][field_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_type'], ENT_QUOTES, 'ISO-8859-1');?>
" />


        </td>

        <?php  $_smarty_tpl->tpl_vars["d"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["d"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields_areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["d"]->key => $_smarty_tpl->tpl_vars["d"]->value) {
$_smarty_tpl->tpl_vars["d"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["d"]->key;
?>
        <?php $_smarty_tpl->tpl_vars["_show"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['key']->value)."_show", null, 0);?>
        <?php $_smarty_tpl->tpl_vars["_required"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['key']->value)."_required", null, 0);?>
        <td class="center">
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="N" />
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>
                <input type="radio" name="fields_data[email][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y") {?>checked="checked"<?php }?> id="sw_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-switch-availability" />
            <?php } else { ?>
                <input type="checkbox" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y") {?>checked="checked"<?php }?> id="sw_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-switch-availability" />
            <?php }?>
            <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>Y<?php } else { ?>N<?php }?>" />
            <span id="req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>_email<?php }?>">
                <input type="checkbox" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_required']->value]=="Y"||$_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="N"||$_smarty_tpl->tpl_vars['field']->value['field_name']=="email") {?>disabled="disabled"<?php }?> />
            </span>
        </td>
        <?php } ?>
        <td class="nowrap">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"profile_fields.delete?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'method'=>"POST"));?>
</li>
                <?php }?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['update_link_text']->value,'href'=>fn_url("profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']))));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <div class="hidden-tools">
                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

            </div>
        </td>
    </tr>
    
    <?php $_smarty_tpl->tpl_vars["custom_fields"] = new Smarty_variable(false, null, 0);?>
    <?php } ?>
    <?php }?>
<?php } ?>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
</table>
</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"profile_fields.add",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_field"),'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['extra_fields']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[profile_fields.m_delete]",'form'=>"fields_form"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[profile_fields.m_update]",'but_role'=>"submit-link",'but_target_form'=>"fields_form"), 0);?>

    <?php }?>
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

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("profile_fields"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
