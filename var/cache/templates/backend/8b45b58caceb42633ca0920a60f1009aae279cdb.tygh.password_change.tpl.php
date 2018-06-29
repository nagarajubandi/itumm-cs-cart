<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:39:57
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/auth/password_change.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315488245b337e95179a63-39075057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b45b58caceb42633ca0920a60f1009aae279cdb' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/auth/password_change.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '315488245b337e95179a63-39075057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337e95190389_55493579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337e95190389_55493579')) {function content_5b337e95190389_55493579($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('administration_panel','error_password_expired','email','password','confirm_password','save','sign_out'));
?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="main_login_form" class=" cm-skip-check-items">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_url($_REQUEST['return_url']), ENT_QUOTES, 'ISO-8859-1');?>
">

        <div class="modal-header">
            <h4><?php echo $_smarty_tpl->__("administration_panel");?>
</h4>
        </div>
        <div class="modal-body">
            <p><?php echo $_smarty_tpl->__("error_password_expired");?>
</p>
            <label><?php echo $_smarty_tpl->__("email");?>
:</label>
            <div id="email" class="input-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
            <label for="password1" class="cm-required"><?php echo $_smarty_tpl->__("password");?>
:</label>
            <input type="password" id="password1" name="user_data[password1]" class="input-text cm-autocomplete-off" size="20" maxlength="32" value="            ">

            <label for="password2" class="cm-required"><?php echo $_smarty_tpl->__("confirm_password");?>
:</label>
            <input type="password" id="password2" name="user_data[password2]" class="input-text cm-autocomplete-off" size="20" maxlength="32" value="            ">
        </div>
        <div class="modal-footer">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[auth.password_change]",'but_role'=>"button_main"), 0);?>

            <a href="<?php echo htmlspecialchars(fn_url("auth.logout"), ENT_QUOTES, 'ISO-8859-1');?>
" class="pull-right"><?php echo $_smarty_tpl->__("sign_out");?>
</a>
        </div>
    </form>
</div><?php }} ?>
