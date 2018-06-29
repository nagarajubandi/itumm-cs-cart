<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:23:43
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/products/components/all_products_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16099827405b337ac7306245-68522240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1800fd302fd3a3a861233c8ca58e95491dbfaa97' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/products/components/all_products_search_form.tpl',
      1 => 1528977908,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16099827405b337ac7306245-68522240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'in_popup' => 0,
    'page_part' => 0,
    '_page_part' => 0,
    'product_search_form_prefix' => 0,
    'form_meta' => 0,
    'search_type' => 0,
    'selected_section' => 0,
    'put_request_vars' => 0,
    'extra' => 0,
    'search' => 0,
    'dispatch' => 0,
    'is_order_management' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337ac732b971_70301747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337ac732b971_70301747')) {function content_5b337ac732b971_70301747($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_array_to_fields')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.array_to_fields.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('search'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    function validate_all_product_search_form(){
        var query_len = $("#query").val().length;
        var $group = $("#query").closest("div.control-group");
        $($group).removeClass('error');
        $($group).find('label.control-label').removeClass('cm-failed-label');
        $($group).find('div.controls').find('input').removeClass('cm-failed-field');
        $($group).find('div.controls').find('span#email_error_message').remove();
        if(parseFloat(query_len) <= parseFloat(0)){
            $($group).addClass('error');
            $($group).find('label.control-label').addClass('cm-failed-label');
            $($group).find('div.controls').find('input').addClass('cm-failed-field');
            $($group).find('div.controls').append('<span id="email_error_message" class="help-inline"><p>The <b>Search</b> field is mandatory</p></span>')
            return false;
        } else {
            return true;
        }
    }
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="cm-tabs-content">
    <h4 class="subheader"><?php echo $_smarty_tpl->__("search");?>
</h4>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page_part']->value) {?>
    <?php $_smarty_tpl->tpl_vars["_page_part"] = new Smarty_variable("#".((string)$_smarty_tpl->tpl_vars['page_part']->value), null, 0);?>
<?php }?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['_page_part']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_search_form_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
search_form" method="get" class="form-horizontal form-edit form-table cm-check-changes <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'ISO-8859-1');?>
" onsubmit="return validate_all_product_search_form();" id="all_product_search_form">
<input type="hidden" name="type" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search_type']->value)===null||$tmp==='' ? "simple" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" autofocus="autofocus" />
    <input type="hidden" name="show_mode" value="all">
<?php if ($_REQUEST['redirect_url']) {?>
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['redirect_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!='') {?>
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>
<input type="hidden" name="pcode_from_q" value="Y" />

<?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
    <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback")),$_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:simple_search")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:simple_search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="control-group">
        <label class="control-label cm-required">Search for Product</label>
        <div class="controls">
            <input class="input-large" id="query" type="text" name="q" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        </div>
    </div>

    
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:simple_search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"products",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value,'is_order_management'=>$_smarty_tpl->tpl_vars['is_order_management']->value,'no_adv_link'=>true,'no_javascript'=>true), 0);?>


<!--search_form--></form>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }?><?php }} ?>
