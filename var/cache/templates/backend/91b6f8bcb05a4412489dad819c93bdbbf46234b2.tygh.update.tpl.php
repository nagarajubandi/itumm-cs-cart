<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 16:34:13
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/newsletters/views/mailing_lists/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19322610835b36122d7eb650-76710577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91b6f8bcb05a4412489dad819c93bdbbf46234b2' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/newsletters/views/mailing_lists/update.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19322610835b36122d7eb650-76710577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mailing_list' => 0,
    'id' => 0,
    'settings' => 0,
    'autoresponders' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b36122d825116_32730579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b36122d825116_32730579')) {function content_5b36122d825116_32730579($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('general','name','from_name','tt_addons_newsletters_views_mailing_lists_update_from_name','from_email','tt_addons_newsletters_views_mailing_lists_update_from_email','reply_to','tt_addons_newsletters_views_mailing_lists_update_reply_to','register_autoresponder','no_autoresponder','show_on_checkout','addons.newsletters.show_on_registration_and_profile','subscribers','manage_subscribers'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['mailing_list']->value['list_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['mailing_list']->value['list_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" enctype="multipart/form-data" name="mailing_lists_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="form-horizontal form-edit ">
<input type="hidden" name="list_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_campaign_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">
    <div id="content_tab_campaign_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <fieldset>
        <div class="control-group">
            <label for="elm_mailing_list_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" name="mailing_list_data[name]" id="elm_mailing_list_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailing_list']->value['object'], ENT_QUOTES, 'ISO-8859-1');?>
"/>
            </div>
        </div>

        <div class="control-group">
            <label for="elm_mailing_list_from_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="control-label"><?php echo $_smarty_tpl->__("from_name");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_addons_newsletters_views_mailing_lists_update_from_name")), 0);?>
</label>
            <div class="controls">
                <input type="text" name="mailing_list_data[from_name]" id="elm_mailing_list_from_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailing_list']->value['from_name'], ENT_QUOTES, 'ISO-8859-1');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label cm-email cm-required" for="elm_mailing_list_from_email_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" ><?php echo $_smarty_tpl->__("from_email");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_addons_newsletters_views_mailing_lists_update_from_email")), 0);?>
</label>
            <div class="controls">
                <input type="text" name="mailing_list_data[from_email]" id="elm_mailing_list_from_email_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['mailing_list']->value['from_email'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Company']['company_newsletter_email'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label cm-email cm-required" for="elm_mailing_list_reply_to_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("reply_to");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_addons_newsletters_views_mailing_lists_update_reply_to")), 0);?>
</label>
            <div class="controls">
                <input type="text" name="mailing_list_data[reply_to]" id="elm_mailing_list_reply_to_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['mailing_list']->value['reply_to'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Company']['company_newsletter_email'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_mailing_list_register_autoresponder_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("register_autoresponder");?>
</label>
            <div class="controls">
                <select name="mailing_list_data[register_autoresponder]" id="elm_mailing_list_register_autoresponder_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                    <option value="0"><?php echo $_smarty_tpl->__("no_autoresponder");?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['autoresponders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['mailing_list']->value['register_autoresponder']==$_smarty_tpl->tpl_vars['a']->value['newsletter_id']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['newsletter_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['newsletter'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_mailing_list_show_on_checkout_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("show_on_checkout");?>
</label>
            <div class="controls">
                <input type="hidden" name="mailing_list_data[show_on_checkout]" value="0" />
                <input type="checkbox" name="mailing_list_data[show_on_checkout]" id="elm_mailing_list_show_on_checkout_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['mailing_list']->value['show_on_checkout']) {?>checked="checked"<?php }?>/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_mailing_list_show_on_registration_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("addons.newsletters.show_on_registration_and_profile");?>
</label>
            <div class="controls">
                <input type="hidden" name="mailing_list_data[show_on_registration]" value="0" />
                <input type="checkbox" name="mailing_list_data[show_on_registration]" id="elm_mailing_list_show_on_registration_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['mailing_list']->value['show_on_registration']) {?>checked="checked"<?php }?> />
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("subscribers");?>
</label>
                <div class="controls shift-top">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailing_list']->value['subscribers_num'], ENT_QUOTES, 'ISO-8859-1');?>

                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("manage_subscribers"),'but_href'=>"subscribers.manage?list_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'but_role'=>"text"), 0);?>

                </div>
            </div>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"mailing_list_data[status]",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['mailing_list']->value,'hidden'=>true), 0);?>

    </fieldset>
    </div>
</div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[mailing_lists.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

</div>
    
</form>

<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php }} ?>
