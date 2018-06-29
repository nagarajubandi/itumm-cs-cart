<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 11:39:16
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/languages/translations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11454073115b35cd0cee17d8-90659765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b96b50a54ed0b4e6ceeda43db9bc9926be37c792' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/languages/translations.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11454073115b35cd0cee17d8-90659765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'lang_data' => 0,
    'var' => 0,
    'key' => 0,
    'runtime' => 0,
    'c_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b35cd0cf18325_16279914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b35cd0cf18325_16279914')) {function content_5b35cd0cf18325_16279914($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('value','language_variable','delete','restore_default','no_data','language_variable','value','new_language_variable','add_language_variable','on_site_live_editing','translations'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<div id="content_translations">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="language_variables_form">
<input type="hidden" name="q" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'ISO-8859-1');?>
">
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'ISO-8859-1');?>
">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>

<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['lang_data']->value) {?>
<table class="table" width="100%">
<thead>
    <tr>
        <th width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="60%"><?php echo $_smarty_tpl->__("value");?>
</th>
        <th width="33%"><?php echo $_smarty_tpl->__("language_variable");?>
</th>
        <th>&nbsp;</th>
    </tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lang_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["var"]->key;
?>
<tr>
    <td>
        <input type="checkbox" name="names[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
" class="checkbox cm-item">
    </td>
    <td>
        <textarea name="lang_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][value]" rows="3" class="span7"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
    </td>
    <td>
        <input type="hidden" name="lang_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
">
        <p class="lang-name"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</span></p>
    </td>
    <td>
        <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>true,'object_id'=>$_smarty_tpl->tpl_vars['key']->value,'name'=>"lang_data[".((string)$_smarty_tpl->tpl_vars['key']->value)."][overwrite]"), 0);?>

        <?php }?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
        <a class="cm-confirm cm-post" href="<?php echo htmlspecialchars(fn_url("languages.delete_variable?name=".((string)$_smarty_tpl->tpl_vars['var']->value['name'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo $_smarty_tpl->__("delete");?>
">
            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                    <?php echo $_smarty_tpl->__("restore_default");?>

                <?php }?>
            <?php } else { ?>
                <i class="icon-trash"></i>
            <?php }?>
        </a>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php echo $_smarty_tpl->getSubTemplate ("common/table_tools_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>$_smarty_tpl->tpl_vars['var']->value['name'],'tools_list'=>Smarty::$_smarty_vars['capture']['tools_items']), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>

<?php if ($_smarty_tpl->tpl_vars['lang_data']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("delete_button", null, null); ob_start(); ?>
        <?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['delete_button'], ENT_QUOTES, 'ISO-8859-1');?>

        <li class="cm-tab-tools" id="tools_translations_delete_buttons">
            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[languages.m_delete_variables]",'form'=>"language_variables_form"));?>

        </li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("add_button", null, null); ob_start(); ?>
        <?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['add_button'], ENT_QUOTES, 'ISO-8859-1');?>

        <span class="cm-tab-tools btn-group" id="tools_translations_save_button">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.m_update_variables]",'but_role'=>"submit-link",'but_target_form'=>"language_variables_form"), 0);?>

        </span>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>


<?php $_smarty_tpl->_capture_stack[0][] = array("add_langvar", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="lang_add_var">
<input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="q" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'ISO-8859-1');?>
" />

<table class="table">
<thead>
    <tr class="cm-first-sibling">
        <th width="40%"><?php echo $_smarty_tpl->__("language_variable");?>
</th>
        <th width="50%"><?php echo $_smarty_tpl->__("value");?>
</th>
        <th width="10%">&nbsp;</th>
    </tr>
</thead>
<tbody>
    <tr id="box_new_lang_tag" valign="top">
        <td>
            <input type="text" size="30" name="new_lang_data[0][name]"></td>
        <td>
            <textarea name="new_lang_data[0][value]" cols="48" rows="2"></textarea></td>
        <td>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"new_lang_tag"), 0);?>
</td>
    </tr>
</tbody>
</table>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.update_variables]",'cancel_action'=>"close"), 0);?>

</div>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</div>

<?php echo Smarty::$_smarty_vars['capture']['popups'];?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/languages/components/langvars_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_langvar",'text'=>$_smarty_tpl->__("new_language_variable"),'title'=>$_smarty_tpl->__("add_language_variable"),'content'=>Smarty::$_smarty_vars['capture']['add_langvar'],'act'=>"general",'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("on_site_live_editing"),'href'=>fn_url("customization.update_mode?type=live_editor&status=enable"),'target'=>"_blank",'method'=>"POST"));?>
</li>
        <li class="divider"></li>
        <?php echo Smarty::$_smarty_vars['capture']['delete_button'];?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php echo Smarty::$_smarty_vars['capture']['add_button'];?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("translations"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'select_languages'=>true), 0);?>

<?php }} ?>
