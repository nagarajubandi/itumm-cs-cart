<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:26:47
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/product_variations/overrides/views/products/components/products_update_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13116317485b337b7f822d42-94013085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f1d3c3b8572f54256322bd91f606ece85bbd81' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/product_variations/overrides/views/products/components/products_update_options.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13116317485b337b7f822d42-94013085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global_options' => 0,
    'option_' => 0,
    'product_options' => 0,
    'product_data' => 0,
    'except_title' => 0,
    'has_inventory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337b7f856468_73006660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337b7f856468_73006660')) {function content_5b337b7f856468_73006660($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('global_options','vendor','apply_as_link','apply','add_global_option','add_global_option','forbidden_combinations','allowed_combinations','forbidden_combinations','allowed_combinations','product_variations.btn_generate','option_combinations','text_options_no_inventory','note','option_combinations'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("extra", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['global_options']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("add_global_option", null, null); ob_start(); ?>
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" enctype="multipart/form-data" name="apply_global_option" class="form-horizontal form-edit">
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_REQUEST['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                <input type="hidden" name="selected_section" value="options" />

                <div class="control-group">
                    <label class="control-label" for="global_option_id"><?php echo $_smarty_tpl->__("global_options");?>
</label>
                    <div class="controls">
                        <select name="global_option[id]" id="global_option_id">
                            <?php  $_smarty_tpl->tpl_vars["option_"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option_"]->_loop = false;
 $_smarty_tpl->tpl_vars["id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['global_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option_"]->key => $_smarty_tpl->tpl_vars["option_"]->value) {
$_smarty_tpl->tpl_vars["option_"]->_loop = true;
 $_smarty_tpl->tpl_vars["id"]->value = $_smarty_tpl->tpl_vars["option_"]->key;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_']->value['option_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_']->value['option_name'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['option_']->value['company_id']) {?> (<?php echo $_smarty_tpl->__("vendor");?>
: <?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['option_']->value['company_id']), ENT_QUOTES, 'ISO-8859-1');?>
)<?php }?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="global_option_link"><?php echo $_smarty_tpl->__("apply_as_link");?>
</label>
                    <div class="controls">
                        <input type="hidden" name="global_option[link]" value="N" />
                        <input type="checkbox" name="global_option[link]" id="global_option_link" value="Y"/>
                    </div>
                </div>

                <div class="buttons-container">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("apply"),'but_name'=>"dispatch[products.apply_global_option]",'cancel_action'=>"close"), 0);?>

                </div>

            </form>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="pull-right shift-left">
            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_global_option",'text'=>$_smarty_tpl->__("add_global_option"),'content'=>Smarty::$_smarty_vars['capture']['add_global_option'],'link_text'=>$_smarty_tpl->__("add_global_option"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

        </div>
    <?php }?>

    <div class="pull-left">
        <?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']!==constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
                <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                    <?php if ($_smarty_tpl->tpl_vars['product_data']->value['exceptions_type']=="F") {?>
                        <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("forbidden_combinations"), null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("allowed_combinations"), null, 0);?>
                    <?php }?>
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['except_title']->value,'but_href'=>"product_options.exceptions?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'but_meta'=>"btn",'but_role'=>"text"), 0);?>

                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['product_data']->value['exceptions_type']=="F") {?>
                        <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("forbidden_combinations"), null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("allowed_combinations"), null, 0);?>
                    <?php }?>
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['except_title']->value,'but_meta'=>"btn cm-promo-popup",'but_role'=>"text"), 0);?>

                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("product_variations.btn_generate"),'but_href'=>"product_variations.generate?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'but_meta'=>"btn",'but_role'=>"text"), 0);?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['has_inventory']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("option_combinations"),'but_href'=>"product_options.inventory?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'but_meta'=>"btn",'but_role'=>"text"), 0);?>

                <?php } else { ?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array("notes_picker", null, null); ob_start(); ?>
                        <?php echo $_smarty_tpl->__("text_options_no_inventory");?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('act'=>"button",'id'=>"content_option_combinations",'text'=>$_smarty_tpl->__("note"),'content'=>Smarty::$_smarty_vars['capture']['notes_picker'],'link_text'=>$_smarty_tpl->__("option_combinations"),'but_href'=>"product_options.inventory?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'but_role'=>"text",'extra_act'=>"notes"), 0);?>

                <?php }?>
            <?php }?>
        <?php }?>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("views/product_options/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>"product",'extra'=>Smarty::$_smarty_vars['capture']['extra'],'product_id'=>$_REQUEST['product_id'],'view_mode'=>"embed"), 0);?>
<?php }} ?>
