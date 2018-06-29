<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:10:25
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20034769275b3377a9524082-53749914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d56c7e70fb46c58910f2e64512beb19eb46e80d' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl',
      1 => 1501124190,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20034769275b3377a9524082-53749914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'vendor_terms' => 0,
    'suffix' => 0,
    'vendor' => 0,
    'iframe_mode' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3377a95449f0_17035292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3377a95449f0_17035292')) {function content_5b3377a95449f0_17035292($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('vendor_terms.checkout_terms_and_conditions_name','vendor_terms.checkout_terms_and_conditions','vendor_terms.checkout_terms_and_conditions_name','vendor_terms.checkout_terms_and_conditions'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['vendor_terms']->value) {?>
<?php  $_smarty_tpl->tpl_vars['vendor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendor_terms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendor']->key => $_smarty_tpl->tpl_vars['vendor']->value) {
$_smarty_tpl->tpl_vars['vendor']->_loop = true;
?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <label for="product_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-check-agreement checkbox"><input type="checkbox" id="product_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" name="agreements[]" value="Y" class="cm-agreement checkbox"  <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?>/><?php $_smarty_tpl->_capture_stack[0][] = array("vendor_terms_href", null, null); ob_start(); ?><a id="sw_elm_vendor_terms_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions_name");?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><span><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions",array("[vendor]"=>$_smarty_tpl->tpl_vars['vendor']->value['company'],"[terms_href]"=>Smarty::$_smarty_vars['capture']['vendor_terms_href']));?>
</span></label>
        </div>
        <div class="hidden" id="elm_vendor_terms_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
            <?php echo $_smarty_tpl->tpl_vars['vendor']->value['terms'];?>

        </div>
    </div>
<?php } ?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['vendor_terms']->value) {?>
<?php  $_smarty_tpl->tpl_vars['vendor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendor_terms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendor']->key => $_smarty_tpl->tpl_vars['vendor']->value) {
$_smarty_tpl->tpl_vars['vendor']->_loop = true;
?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <label for="product_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-check-agreement checkbox"><input type="checkbox" id="product_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" name="agreements[]" value="Y" class="cm-agreement checkbox"  <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?>/><?php $_smarty_tpl->_capture_stack[0][] = array("vendor_terms_href", null, null); ob_start(); ?><a id="sw_elm_vendor_terms_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions_name");?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><span><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions",array("[vendor]"=>$_smarty_tpl->tpl_vars['vendor']->value['company'],"[terms_href]"=>Smarty::$_smarty_vars['capture']['vendor_terms_href']));?>
</span></label>
        </div>
        <div class="hidden" id="elm_vendor_terms_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
            <?php echo $_smarty_tpl->tpl_vars['vendor']->value['terms'];?>

        </div>
    </div>
<?php } ?>
<?php }?>
<?php }?><?php }} ?>
