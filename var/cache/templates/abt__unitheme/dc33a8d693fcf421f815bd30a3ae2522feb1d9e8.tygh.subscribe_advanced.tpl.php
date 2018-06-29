<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:22
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/blocks/static_templates/subscribe_advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13078761585b3372420b65b5-32753454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc33a8d693fcf421f815bd30a3ae2522feb1d9e8' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/blocks/static_templates/subscribe_advanced.tpl',
      1 => 1525364906,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13078761585b3372420b65b5-32753454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'config' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372420cee89_15964839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372420cee89_15964839')) {function content_5b3372420cee89_15964839($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('stay_connected','exclusive_promotions','exclusive_promotions_content','email','email','subscribe','stay_connected','exclusive_promotions','exclusive_promotions_content','email','email','subscribe'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['newsletters']) {?>
<div class="ty-footer-form-block no-help">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="subscribe_form">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        <input type="hidden" name="newsletter_format" value="2" />
        <div class="ty-footer-form-block__form ty-control-group with-side">
        <div class="ty-footer-form-block__title"><?php echo $_smarty_tpl->__("stay_connected");?>
</div>
            <!-- <i class="ty-icon-uni-mail"></i> --><div class="ty-uppercase ty-social-link__title"><?php echo $_smarty_tpl->__("exclusive_promotions");?>
<br><?php echo $_smarty_tpl->__("exclusive_promotions_content");?>
</div>
        </div>
        <div class="ty-footer-form-block__input cm-block-add-subscribe">
        <label class="cm-required cm-email hidden" for="subscr_email<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("email");?>
</label>
            <input type="text" name="subscribe_email" id="subscr_email<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
" size="20" placeholder="<?php echo $_smarty_tpl->__("email");?>
" class="cm-hint ty-input-text-medium ty-valign-top" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_name'=>"dispatch[newsletters.add_subscriber]",'but_text'=>$_smarty_tpl->__("subscribe"),'but_meta'=>"ty-btn__subscribe ty-btn__primary"), 0);?>

        </div>
    </form>
</div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/subscribe_advanced.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/subscribe_advanced.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['newsletters']) {?>
<div class="ty-footer-form-block no-help">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="subscribe_form">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        <input type="hidden" name="newsletter_format" value="2" />
        <div class="ty-footer-form-block__form ty-control-group with-side">
        <div class="ty-footer-form-block__title"><?php echo $_smarty_tpl->__("stay_connected");?>
</div>
            <!-- <i class="ty-icon-uni-mail"></i> --><div class="ty-uppercase ty-social-link__title"><?php echo $_smarty_tpl->__("exclusive_promotions");?>
<br><?php echo $_smarty_tpl->__("exclusive_promotions_content");?>
</div>
        </div>
        <div class="ty-footer-form-block__input cm-block-add-subscribe">
        <label class="cm-required cm-email hidden" for="subscr_email<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("email");?>
</label>
            <input type="text" name="subscribe_email" id="subscr_email<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
" size="20" placeholder="<?php echo $_smarty_tpl->__("email");?>
" class="cm-hint ty-input-text-medium ty-valign-top" />
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_name'=>"dispatch[newsletters.add_subscriber]",'but_text'=>$_smarty_tpl->__("subscribe"),'but_meta'=>"ty-btn__subscribe ty-btn__primary"), 0);?>

        </div>
    </form>
</div>
<?php }
}?><?php }} ?>
