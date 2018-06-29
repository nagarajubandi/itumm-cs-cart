<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:10:25
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/views/checkout/components/terms_and_conditions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18846992595b3377a93ba4b3-78629218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a63165a58c2f8f4843afd164bd3124dbc9b9b8a' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/views/checkout/components/terms_and_conditions.tpl',
      1 => 1525408244,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18846992595b3377a93ba4b3-78629218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'suffix' => 0,
    'iframe_mode' => 0,
    'cart_agreements' => 0,
    'product_agreements' => 0,
    'agreement' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3377a93efd12_72851997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3377a93efd12_72851997')) {function content_5b3377a93efd12_72851997($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('checkout_terms_n_conditions_name','checkout_terms_n_conditions','terms_and_conditions_content','checkout_edp_terms_n_conditions','license_agreement','checkout_terms_n_conditions_alert','checkout_terms_n_conditions_name','checkout_terms_n_conditions','terms_and_conditions_content','checkout_edp_terms_n_conditions','license_agreement','checkout_terms_n_conditions_alert'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['agree_terms_conditions']=="Y") {?>
    <div class="ty-control-group ty-checkout__terms">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:terms_and_conditions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="cm-field-container">
            <label for="id_accept_terms<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-check-agreement"><input type="checkbox" id="id_accept_terms<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="accept_terms" value="Y" class="cm-agreement checkbox" <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?> /><?php $_smarty_tpl->_capture_stack[0][] = array("terms_link", null, null); ob_start(); ?><a id="sw_terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("checkout_terms_n_conditions_name");?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->__("checkout_terms_n_conditions",array("[terms_href]"=>Smarty::$_smarty_vars['capture']['terms_link']));?>
</label>

            <div class="hidden" id="terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                <?php echo $_smarty_tpl->__("terms_and_conditions_content");?>

            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:terms_and_conditions_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['cart_agreements']->value) {?>
    <div class="ty-control-group ty-license-agreement__checkbox">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:terms_and_conditions_downloadable")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_downloadable"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="cm-field-container">
            <label for="product_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-check-agreement ty-license-agreement__checkbox__checkbox"><input type="checkbox" id="product_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="agreements[]" value="Y" class="cm-agreement checkbox"  <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?>/><span><?php echo $_smarty_tpl->__("checkout_edp_terms_n_conditions");?>
</span>&nbsp;<a id="sw_elm_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("license_agreement");?>
</a></label>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_downloadable"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <div class="hidden" id="elm_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php  $_smarty_tpl->tpl_vars["product_agreements"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product_agreements"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_agreements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product_agreements"]->key => $_smarty_tpl->tpl_vars["product_agreements"]->value) {
$_smarty_tpl->tpl_vars["product_agreements"]->_loop = true;
?>
            <?php  $_smarty_tpl->tpl_vars["agreement"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["agreement"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_agreements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["agreement"]->key => $_smarty_tpl->tpl_vars["agreement"]->value) {
$_smarty_tpl->tpl_vars["agreement"]->_loop = true;
?>
                <p><?php echo $_smarty_tpl->tpl_vars['agreement']->value['license'];?>
</p>
            <?php } ?>
        <?php } ?>
        </div>
    </div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-check-agreement',
            message: '<?php echo strtr($_smarty_tpl->__("checkout_terms_n_conditions_alert"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            func: function(id) {
                return $('#' + id).prop('checked');
            }
        });     
    }(Tygh, Tygh.$));

    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        function fn_check_agreements(suffix) {
            var checked = true;

            $('form[name=payments_form_' + suffix + '] input[type=checkbox].cm-agreement').each(function(index, value) {
                if($(value).prop('checked') === false) {
                    checked = false;
                }
            });

            $('#payment_method_iframe_' + suffix).toggleClass('hidden', checked);
        }
    <?php }?>
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/terms_and_conditions.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/terms_and_conditions.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['agree_terms_conditions']=="Y") {?>
    <div class="ty-control-group ty-checkout__terms">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:terms_and_conditions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="cm-field-container">
            <label for="id_accept_terms<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-check-agreement"><input type="checkbox" id="id_accept_terms<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="accept_terms" value="Y" class="cm-agreement checkbox" <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?> /><?php $_smarty_tpl->_capture_stack[0][] = array("terms_link", null, null); ob_start(); ?><a id="sw_terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("checkout_terms_n_conditions_name");?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->__("checkout_terms_n_conditions",array("[terms_href]"=>Smarty::$_smarty_vars['capture']['terms_link']));?>
</label>

            <div class="hidden" id="terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                <?php echo $_smarty_tpl->__("terms_and_conditions_content");?>

            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:terms_and_conditions_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['cart_agreements']->value) {?>
    <div class="ty-control-group ty-license-agreement__checkbox">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:terms_and_conditions_downloadable")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_downloadable"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="cm-field-container">
            <label for="product_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-check-agreement ty-license-agreement__checkbox__checkbox"><input type="checkbox" id="product_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="agreements[]" value="Y" class="cm-agreement checkbox"  <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?>/><span><?php echo $_smarty_tpl->__("checkout_edp_terms_n_conditions");?>
</span>&nbsp;<a id="sw_elm_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("license_agreement");?>
</a></label>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:terms_and_conditions_downloadable"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <div class="hidden" id="elm_agreements_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php  $_smarty_tpl->tpl_vars["product_agreements"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product_agreements"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_agreements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product_agreements"]->key => $_smarty_tpl->tpl_vars["product_agreements"]->value) {
$_smarty_tpl->tpl_vars["product_agreements"]->_loop = true;
?>
            <?php  $_smarty_tpl->tpl_vars["agreement"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["agreement"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_agreements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["agreement"]->key => $_smarty_tpl->tpl_vars["agreement"]->value) {
$_smarty_tpl->tpl_vars["agreement"]->_loop = true;
?>
                <p><?php echo $_smarty_tpl->tpl_vars['agreement']->value['license'];?>
</p>
            <?php } ?>
        <?php } ?>
        </div>
    </div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-check-agreement',
            message: '<?php echo strtr($_smarty_tpl->__("checkout_terms_n_conditions_alert"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            func: function(id) {
                return $('#' + id).prop('checked');
            }
        });     
    }(Tygh, Tygh.$));

    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        function fn_check_agreements(suffix) {
            var checked = true;

            $('form[name=payments_form_' + suffix + '] input[type=checkbox].cm-agreement').each(function(index, value) {
                if($(value).prop('checked') === false) {
                    checked = false;
                }
            });

            $('#payment_method_iframe_' + suffix).toggleClass('hidden', checked);
        }
    <?php }?>
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
