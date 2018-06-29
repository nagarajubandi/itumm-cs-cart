<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 15:24:45
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/profiles/components/multiple_profiles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2324518885b34b065a40bc6-56146121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a1db3df4d3bf73c9db8557bdef4b97d45d05453' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/profiles/components/multiple_profiles.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2324518885b34b065a40bc6-56146121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'user_profiles' => 0,
    'up' => 0,
    'user_data' => 0,
    'config' => 0,
    'skip_create' => 0,
    'profile_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34b065a60ac3_76482232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34b065a60ac3_76482232')) {function content_5b34b065a60ac3_76482232($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('select_profile','or','create_profile','profile_name','new','main','main'));
?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['user_multiple_profiles']=="Y") {?>

<div class="control-group" id="profiles_list">
    <label class="control-label"><?php echo $_smarty_tpl->__("select_profile");?>
</label>
    <div class="controls">
    <?php  $_smarty_tpl->tpl_vars["up"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["up"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["up"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["up"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["up"]->key => $_smarty_tpl->tpl_vars["up"]->value) {
$_smarty_tpl->tpl_vars["up"]->_loop = true;
 $_smarty_tpl->tpl_vars["up"]->iteration++;
 $_smarty_tpl->tpl_vars["up"]->last = $_smarty_tpl->tpl_vars["up"]->iteration === $_smarty_tpl->tpl_vars["up"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["pfe"]['last'] = $_smarty_tpl->tpl_vars["up"]->last;
?>
        <?php if ($_smarty_tpl->tpl_vars['up']->value['profile_id']==$_smarty_tpl->tpl_vars['user_data']->value['profile_id']) {?>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['up']->value['profile_name'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
        <?php } else { ?>
            <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"profile_id=".((string)$_smarty_tpl->tpl_vars['up']->value['profile_id']))), ENT_QUOTES, 'ISO-8859-1');?>
#profiles_list"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['up']->value['profile_name'], ENT_QUOTES, 'ISO-8859-1');?>
</a>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['up']->value['profile_type']!="P") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-confirm cm-post",'but_icon'=>"icon-trash",'but_href'=>"profiles.delete_profile?user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])."&profile_id=".((string)$_smarty_tpl->tpl_vars['up']->value['profile_id']),'but_role'=>"delete_item"), 0);?>

        <?php }?>

        <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['pfe']['last']) {?>&nbsp;|&nbsp;<?php }?>
    <?php } ?>
    <?php if (!$_smarty_tpl->tpl_vars['skip_create']->value) {?>
        &nbsp;&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;&nbsp;&nbsp;<a class="lowercase" href="<?php echo htmlspecialchars(fn_url(fn_link_attach(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"profile_id"),"profile=new")), ENT_QUOTES, 'ISO-8859-1');?>
#profiles_list"><?php echo $_smarty_tpl->__("create_profile");?>
</a>
    <?php }?>
    </div>
</div>

<div class="control-group">
    <label for="profile_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("profile_name");?>
</label>
    <div class="controls">
    <?php if ($_REQUEST['profile']=="new") {?>
        <?php $_smarty_tpl->tpl_vars["profile_name"] = new Smarty_variable($_smarty_tpl->__("new"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["profile_name"] = new Smarty_variable($_smarty_tpl->__("main"), null, 0);?>
    <?php }?>
    <input type="hidden" id="profile_id" name="user_data[profile_id]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['profile_id'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" />
    <input type="text" id="profile_name" name="user_data[profile_name]" size="32" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['profile_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['profile_name']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" class="input-text" />
    </div>
</div>
<?php } else { ?>
<div>
    <input type="hidden" id="profile_name" name="user_data[profile_name]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['profile_name'])===null||$tmp==='' ? $_smarty_tpl->__("main") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" />
</div>
<?php }?><?php }} ?>
