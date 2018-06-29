<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:37
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/products/components/buy_together.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7550784615b3372514d0a54-13447210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4241b41c9e3017fbd8b48de670409c3e71a3f2d2' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/products/components/buy_together.tpl',
      1 => 1525364936,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7550784615b3372514d0a54-13447210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_scroll' => 0,
    'chains' => 0,
    'config' => 0,
    'no_ajax' => 0,
    'chain' => 0,
    'is_ajax' => 0,
    'stay_in_cart' => 0,
    'obj_prefix' => 0,
    'buy_together_options_class' => 0,
    '_product' => 0,
    'auth' => 0,
    'settings' => 0,
    'key' => 0,
    'option' => 0,
    '_id' => 0,
    'obj_id' => 0,
    'language_direction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372515ed682_62586555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372515ed682_62586555')) {function content_5b3372515ed682_62586555($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('save_and_close','specify_options','specify_options','save_and_close','specify_options','specify_options','total_list_price','price_for_all','add_all_to_cart','sign_in_to_view_price','save_and_close','specify_options','specify_options','save_and_close','specify_options','specify_options','total_list_price','price_for_all','add_all_to_cart','sign_in_to_view_price'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["show_scroll"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_scroll']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['chains']->value) {?>
<div class="ut-buy-together" id="ut-buy-together">
    <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']&&!$_smarty_tpl->tpl_vars['no_ajax']->value) {?>
        <?php $_smarty_tpl->tpl_vars["is_ajax"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    
    <?php  $_smarty_tpl->tpl_vars["chain"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["chain"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["chain"]->key => $_smarty_tpl->tpl_vars["chain"]->value) {
$_smarty_tpl->tpl_vars["chain"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["chain"]->key;
?>
        <?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable("bt_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']), null, 0);?>
        <form <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="chain_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" enctype="multipart/form-data">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        <input type="hidden" name="result_ids" value="cart_status*,wish_list*" />
        <?php if (!$_smarty_tpl->tpl_vars['stay_in_cart']->value||$_smarty_tpl->tpl_vars['is_ajax']->value) {?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        <?php }?>
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
][chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />

        <div class="ty-subheader"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</div>

        <?php $_smarty_tpl->tpl_vars["buy_together_options_class"] = new Smarty_variable("cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['chain']->value['products']) {?>
            <?php  $_smarty_tpl->tpl_vars["_product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_product"]->_loop = false;
 $_smarty_tpl->tpl_vars["_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chain']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_product"]->key => $_smarty_tpl->tpl_vars["_product"]->value) {
$_smarty_tpl->tpl_vars["_product"]->_loop = true;
 $_smarty_tpl->tpl_vars["_id"]->value = $_smarty_tpl->tpl_vars["_product"]->key;
?>
                <?php $_smarty_tpl->tpl_vars["buy_together_options_class"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['buy_together_options_class']->value)." cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']), null, 0);?>
            <?php } ?>
        <?php }?>
    
        <div class="ty-buy-together <?php if (count($_smarty_tpl->tpl_vars['chain']->value['products'])>3) {?>scroll<?php }?> clearfix">
            
            <?php if ($_smarty_tpl->tpl_vars['chain']->value['description']) {?>
                <div class="ty-buy-together__description">
                    <?php echo $_smarty_tpl->tpl_vars['chain']->value['description'];?>

                </div>
            <?php }?>
            
            <div class="ty-buy-together__box">
            <div class="ty-buy-together__products ty-scroll-x">
                
            <?php if ($_smarty_tpl->tpl_vars['chain']->value['products']) {?>
                <div class="ty-buy-together__product">
                    <div class="ty-buy-together__product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main">
                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['chain']->value['main_pair'],'class'=>"ty-buy-together__product-image"), 0);?>
</a>
                    <!--bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main--></div>

                    <div class="ty-buy-together__product-name">
                         <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['chain']->value['product_name'],66,"...",true), ENT_QUOTES, 'ISO-8859-1');?>
</a>
                    </div>

                    <div class="ty-buy-together__product-price cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main">
                        <?php if ($_smarty_tpl->tpl_vars['chain']->value['min_qty']>1) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['min_qty'], ENT_QUOTES, 'ISO-8859-1');?>
x</span><?php }?>
                        <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?>
                        <span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['discounted_price']), 0);?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['chain']->value['price']!=$_smarty_tpl->tpl_vars['chain']->value['discounted_price']) {?>
                                <span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['price']), 0);?>
</span>
                            <?php }?>
                        <?php }?>
                    <!--bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main--></div>
                    
                    <?php if ($_smarty_tpl->tpl_vars['chain']->value['product_options']) {?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?>
                            <div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
_main" class="ty-buy-together-box">
                                <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main">
                                    <input type="hidden" name="appearance[show_product_options]" value="1" />
                                    <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                    <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
                                    
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['chain']->value,'id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'product_options'=>$_smarty_tpl->tpl_vars['chain']->value['product_options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_main"), 0);?>

                                <!--buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main--></div>
                                <div class="buttons-container">
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->__("save_and_close"),'but_role'=>"action",'but_meta'=>"ty-btn__secondary cm-dialog-closer"), 0);?>

                                </div>
                            </div>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <div class="ty-buy-together__product-options">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_main",'link_meta'=>"ty-btn ty-btn__primary",'text'=>$_smarty_tpl->__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>$_smarty_tpl->__("specify_options"),'act'=>"general"), 0);?>

                        </div>
                    <?php }?>
                </div>
            <?php }?>
            
            <?php  $_smarty_tpl->tpl_vars["_product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_product"]->_loop = false;
 $_smarty_tpl->tpl_vars["_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chain']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_product"]->key => $_smarty_tpl->tpl_vars["_product"]->value) {
$_smarty_tpl->tpl_vars["_product"]->_loop = true;
 $_smarty_tpl->tpl_vars["_id"]->value = $_smarty_tpl->tpl_vars["_product"]->key;
?>
                <span class="ty-buy-together__plus chain-plus">+</span>
                
                <div class="ty-buy-together__product">
                    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />

                    <div class="ty-buy-together__product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['_product']->value['main_pair'],'class'=>"ty-buy-together__product-image"), 0);?>
</a>
                    <!--bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>

                    <div class="ty-buy-together__product-name">
                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['_product']->value['product_name'],66,"...",true), ENT_QUOTES, 'ISO-8859-1');?>
</a>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['_product']->value['product_options']) {?>
                        <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value) {
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?>
                            <div class="ty-buy-together-option"><span class="ty-buy-together-option__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_name'], ENT_QUOTES, 'ISO-8859-1');?>
</span>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['variant_name'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                        <?php } ?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['_product']->value['aoc']) {?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?>
                            <div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-buy-together-box">
                                <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                    <input type="hidden" name="appearance[show_product_options]" value="1" />
                                    <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                    <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['_product']->value,'id'=>$_smarty_tpl->tpl_vars['_product']->value['product_id'],'product_options'=>$_smarty_tpl->tpl_vars['_product']->value['options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])), 0);?>

                                    <!--buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>

                                <div class="buttons-container">
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->__("save_and_close"),'but_role'=>"action",'but_meta'=>"ty-btn__secondary cm-dialog-closer"), 0);?>

                                </div>
                            </div>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <div class="ty-buy-together__product-options">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__primary",'text'=>$_smarty_tpl->__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>$_smarty_tpl->__("specify_options"),'act'=>"general"), 0);?>

                        </div>
                    <?php }?>
                    <div class="ty-buy-together__product-price cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['_product']->value['amount']>1) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
x</span><?php }?>
                        <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?>
                        <span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['discounted_price']), 0);?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['_product']->value['price']!=$_smarty_tpl->tpl_vars['_product']->value['discounted_price']) {?>
                                <span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['price']), 0);?>
</span>
                            <?php }?> 
                        <?php }?>
                    <!--bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                </div>

            <?php } ?>
            </div>
            
            <div class="ut-together-price-block">
	            <span class="ty-buy-together__plus chain-equally">=</span>
            <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?>
                <div class="ty-buy-together-price <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="bt_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                    <div class="ty-buy-together-price__old">
                        <span class="ty-buy-together-price__title"><?php echo $_smarty_tpl->__("total_list_price");?>
</span>
                        <span class="chain-old-line ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['total_price']), 0);?>
</span>
                    </div>
                    <div class="ty-buy-together-price__new">
                        <span class="ty-buy-together-price__title"><?php echo $_smarty_tpl->__("price_for_all");?>
</span>
                        <span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['chain_price']), 0);?>
</span>
                    </div>
                <!--bt_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_add_to_cart_button")) {?>
                    <div style="width:100%" class="buttons-container cm-ty-buy-together-submit" id="wrap_chain_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_all_to_cart"),'but_id'=>"chain_button_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'but_meta'=>"ty-btn__primary",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action",'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0);?>

                    </div>
                <?php }?>
            <?php } else { ?>
            <p><?php echo $_smarty_tpl->__("sign_in_to_view_price");?>
</p>
            <?php }?>
            </div>
            </div>
        </div>

        </form>
    <?php } ?>
</div>
    
    <?php if ($_smarty_tpl->tpl_vars['show_scroll']->value) {?>
        <?php echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>

        <?php echo '<script'; ?>
 type="text/javascript">
            (function(_, $) {
                $.ceEvent('on', 'ce.commoninit', function(context) {
                    var elm = context.find('#ut-buy-together');
                    var desktop = [1199, 1],
                        desktopSmall = [1024, 1],
                        tablet = [768, 1],
                        mobile = [479, 1];

                    if (elm.length) {
                        elm.owlCarousel({
                            direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
                            items: 1,
                            itemsDesktop: desktop,
                            itemsDesktopSmall: desktopSmall,
                            itemsTablet: tablet,
                            itemsMobile: mobile,
                            scrollPerPage: true,
                            autoPlay: true,
                            lazyLoad: true,
                            stopOnHover: true,
                            pagination: true,
                            paginationNumbers: false,
                            navigation: true,
                            navigationText: ['<i class="uni-left-sight"></i>', '<i class="uni-right-sight"></i>']
                        });
                    }
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme/hooks/products/components/buy_together.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme/hooks/products/components/buy_together.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars["show_scroll"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_scroll']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['chains']->value) {?>
<div class="ut-buy-together" id="ut-buy-together">
    <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']&&!$_smarty_tpl->tpl_vars['no_ajax']->value) {?>
        <?php $_smarty_tpl->tpl_vars["is_ajax"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    
    <?php  $_smarty_tpl->tpl_vars["chain"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["chain"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["chain"]->key => $_smarty_tpl->tpl_vars["chain"]->value) {
$_smarty_tpl->tpl_vars["chain"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["chain"]->key;
?>
        <?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable("bt_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']), null, 0);?>
        <form <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>class="cm-ajax cm-ajax-full-render"<?php }?> action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="chain_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" enctype="multipart/form-data">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        <input type="hidden" name="result_ids" value="cart_status*,wish_list*" />
        <?php if (!$_smarty_tpl->tpl_vars['stay_in_cart']->value||$_smarty_tpl->tpl_vars['is_ajax']->value) {?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        <?php }?>
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
][chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />

        <div class="ty-subheader"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</div>

        <?php $_smarty_tpl->tpl_vars["buy_together_options_class"] = new Smarty_variable("cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['chain']->value['products']) {?>
            <?php  $_smarty_tpl->tpl_vars["_product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_product"]->_loop = false;
 $_smarty_tpl->tpl_vars["_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chain']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_product"]->key => $_smarty_tpl->tpl_vars["_product"]->value) {
$_smarty_tpl->tpl_vars["_product"]->_loop = true;
 $_smarty_tpl->tpl_vars["_id"]->value = $_smarty_tpl->tpl_vars["_product"]->key;
?>
                <?php $_smarty_tpl->tpl_vars["buy_together_options_class"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['buy_together_options_class']->value)." cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']), null, 0);?>
            <?php } ?>
        <?php }?>
    
        <div class="ty-buy-together <?php if (count($_smarty_tpl->tpl_vars['chain']->value['products'])>3) {?>scroll<?php }?> clearfix">
            
            <?php if ($_smarty_tpl->tpl_vars['chain']->value['description']) {?>
                <div class="ty-buy-together__description">
                    <?php echo $_smarty_tpl->tpl_vars['chain']->value['description'];?>

                </div>
            <?php }?>
            
            <div class="ty-buy-together__box">
            <div class="ty-buy-together__products ty-scroll-x">
                
            <?php if ($_smarty_tpl->tpl_vars['chain']->value['products']) {?>
                <div class="ty-buy-together__product">
                    <div class="ty-buy-together__product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main">
                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['chain']->value['main_pair'],'class'=>"ty-buy-together__product-image"), 0);?>
</a>
                    <!--bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main--></div>

                    <div class="ty-buy-together__product-name">
                         <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['chain']->value['product_name'],66,"...",true), ENT_QUOTES, 'ISO-8859-1');?>
</a>
                    </div>

                    <div class="ty-buy-together__product-price cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main">
                        <?php if ($_smarty_tpl->tpl_vars['chain']->value['min_qty']>1) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['min_qty'], ENT_QUOTES, 'ISO-8859-1');?>
x</span><?php }?>
                        <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?>
                        <span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['discounted_price']), 0);?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['chain']->value['price']!=$_smarty_tpl->tpl_vars['chain']->value['discounted_price']) {?>
                                <span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['price']), 0);?>
</span>
                            <?php }?>
                        <?php }?>
                    <!--bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main--></div>
                    
                    <?php if ($_smarty_tpl->tpl_vars['chain']->value['product_options']) {?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?>
                            <div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
_main" class="ty-buy-together-box">
                                <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main">
                                    <input type="hidden" name="appearance[show_product_options]" value="1" />
                                    <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                    <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
                                    
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['chain']->value,'id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'product_options'=>$_smarty_tpl->tpl_vars['chain']->value['product_options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_main"), 0);?>

                                <!--buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_main--></div>
                                <div class="buttons-container">
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->__("save_and_close"),'but_role'=>"action",'but_meta'=>"ty-btn__secondary cm-dialog-closer"), 0);?>

                                </div>
                            </div>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <div class="ty-buy-together__product-options">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_main",'link_meta'=>"ty-btn ty-btn__primary",'text'=>$_smarty_tpl->__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>$_smarty_tpl->__("specify_options"),'act'=>"general"), 0);?>

                        </div>
                    <?php }?>
                </div>
            <?php }?>
            
            <?php  $_smarty_tpl->tpl_vars["_product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_product"]->_loop = false;
 $_smarty_tpl->tpl_vars["_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chain']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_product"]->key => $_smarty_tpl->tpl_vars["_product"]->value) {
$_smarty_tpl->tpl_vars["_product"]->_loop = true;
 $_smarty_tpl->tpl_vars["_id"]->value = $_smarty_tpl->tpl_vars["_product"]->key;
?>
                <span class="ty-buy-together__plus chain-plus">+</span>
                
                <div class="ty-buy-together__product">
                    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />

                    <div class="ty-buy-together__product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['_product']->value['main_pair'],'class'=>"ty-buy-together__product-image"), 0);?>
</a>
                    <!--bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>

                    <div class="ty-buy-together__product-name">
                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['_product']->value['product_name'],66,"...",true), ENT_QUOTES, 'ISO-8859-1');?>
</a>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['_product']->value['product_options']) {?>
                        <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value) {
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?>
                            <div class="ty-buy-together-option"><span class="ty-buy-together-option__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_name'], ENT_QUOTES, 'ISO-8859-1');?>
</span>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['variant_name'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                        <?php } ?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['_product']->value['aoc']) {?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?>
                            <div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-buy-together-box">
                                <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                    <input type="hidden" name="appearance[show_product_options]" value="1" />
                                    <input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                    <input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['_product']->value,'id'=>$_smarty_tpl->tpl_vars['_product']->value['product_id'],'product_options'=>$_smarty_tpl->tpl_vars['_product']->value['options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])), 0);?>

                                    <!--buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>

                                <div class="buttons-container">
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->__("save_and_close"),'but_role'=>"action",'but_meta'=>"ty-btn__secondary cm-dialog-closer"), 0);?>

                                </div>
                            </div>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <div class="ty-buy-together__product-options">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__primary",'text'=>$_smarty_tpl->__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>$_smarty_tpl->__("specify_options"),'act'=>"general"), 0);?>

                        </div>
                    <?php }?>
                    <div class="ty-buy-together__product-price cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['_product']->value['amount']>1) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
x</span><?php }?>
                        <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?>
                        <span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['discounted_price']), 0);?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['_product']->value['price']!=$_smarty_tpl->tpl_vars['_product']->value['discounted_price']) {?>
                                <span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['price']), 0);?>
</span>
                            <?php }?> 
                        <?php }?>
                    <!--bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                </div>

            <?php } ?>
            </div>
            
            <div class="ut-together-price-block">
	            <span class="ty-buy-together__plus chain-equally">=</span>
            <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?>
                <div class="ty-buy-together-price <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="bt_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                    <div class="ty-buy-together-price__old">
                        <span class="ty-buy-together-price__title"><?php echo $_smarty_tpl->__("total_list_price");?>
</span>
                        <span class="chain-old-line ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['total_price']), 0);?>
</span>
                    </div>
                    <div class="ty-buy-together-price__new">
                        <span class="ty-buy-together-price__title"><?php echo $_smarty_tpl->__("price_for_all");?>
</span>
                        <span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['chain_price']), 0);?>
</span>
                    </div>
                <!--bt_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                <?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_add_to_cart_button")) {?>
                    <div style="width:100%" class="buttons-container cm-ty-buy-together-submit" id="wrap_chain_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_all_to_cart"),'but_id'=>"chain_button_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'but_meta'=>"ty-btn__primary",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action",'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0);?>

                    </div>
                <?php }?>
            <?php } else { ?>
            <p><?php echo $_smarty_tpl->__("sign_in_to_view_price");?>
</p>
            <?php }?>
            </div>
            </div>
        </div>

        </form>
    <?php } ?>
</div>
    
    <?php if ($_smarty_tpl->tpl_vars['show_scroll']->value) {?>
        <?php echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>

        <?php echo '<script'; ?>
 type="text/javascript">
            (function(_, $) {
                $.ceEvent('on', 'ce.commoninit', function(context) {
                    var elm = context.find('#ut-buy-together');
                    var desktop = [1199, 1],
                        desktopSmall = [1024, 1],
                        tablet = [768, 1],
                        mobile = [479, 1];

                    if (elm.length) {
                        elm.owlCarousel({
                            direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
                            items: 1,
                            itemsDesktop: desktop,
                            itemsDesktopSmall: desktopSmall,
                            itemsTablet: tablet,
                            itemsMobile: mobile,
                            scrollPerPage: true,
                            autoPlay: true,
                            lazyLoad: true,
                            stopOnHover: true,
                            pagination: true,
                            paginationNumbers: false,
                            navigation: true,
                            navigationText: ['<i class="uni-left-sight"></i>', '<i class="uni-right-sight"></i>']
                        });
                    }
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>
<?php }
}?><?php }} ?>
