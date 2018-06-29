<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:22
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18812951085b3372425b8d24-10421773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5696e753c2fa5d0cb97a889596f4ad18a4e9ee3' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/otp_verification/hooks/index/scripts.post.tpl',
      1 => 1525369874,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18812951085b3372425b8d24-10421773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'otp_verification_phone_mask_codes' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372425cd078_14047403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372425cd078_14047403')) {function content_5b3372425cd078_14047403($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/lib/maskedinput/jquery.maskedinput.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/otp_verification/flipclock.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jquery-bind-first/jquery.bind-first-0.2.3.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/inputmask-multi/jquery.inputmask-multi.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        _.otp_verification_phone_masks_list = <?php echo $_smarty_tpl->tpl_vars['otp_verification_phone_mask_codes']->value;?>
;
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['otp_verification']['otp_phone_mask']) {?>
            _.otp_phone_mask = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['otp_verification']['otp_phone_mask'], ENT_QUOTES, 'ISO-8859-1');?>
'
        <?php }?>
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/addons/otp_verification/otp_phone_verify.js"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/otp_verification/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/otp_verification/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/lib/maskedinput/jquery.maskedinput.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/otp_verification/flipclock.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jquery-bind-first/jquery.bind-first-0.2.3.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/inputmask-multi/jquery.inputmask-multi.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        _.otp_verification_phone_masks_list = <?php echo $_smarty_tpl->tpl_vars['otp_verification_phone_mask_codes']->value;?>
;
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['otp_verification']['otp_phone_mask']) {?>
            _.otp_phone_mask = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['otp_verification']['otp_phone_mask'], ENT_QUOTES, 'ISO-8859-1');?>
'
        <?php }?>
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/addons/otp_verification/otp_phone_verify.js"),$_smarty_tpl);
}?><?php }} ?>
