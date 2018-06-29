<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:56:20
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/csc_live_search/components/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18013683175b33826c03ca24-28498567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ecd4992c272b76d815480b859da4aac351e29f9' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/csc_live_search/components/list.tpl',
      1 => 1529435805,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18013683175b33826c03ca24-28498567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'products' => 0,
    'product' => 0,
    'variants' => 0,
    'variant' => 0,
    'varian' => 0,
    'cls' => 0,
    'imageurl' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'settings' => 0,
    'live_search' => 0,
    'diff' => 0,
    'more' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33826c104379_05709010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33826c104379_05709010')) {function content_5b33826c104379_05709010($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('inc_tax','including_tax','inc_tax','including_tax'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['cls'] = new Smarty_variable($_smarty_tpl->tpl_vars['addons']->value['csc_live_search'], null, 0);
$_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
$_smarty_tpl->tpl_vars['imageurl'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], null, 0);
$_smarty_tpl->tpl_vars['variants'] = new Smarty_variable(fn_get_product_options($_smarty_tpl->tpl_vars['product']->value['product_id'],'CART_LANGUAGE'), null, 0);
if (count($_smarty_tpl->tpl_vars['variants']->value)) {
$_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
$_smarty_tpl->tpl_vars["varian"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["varian"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variant']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["varian"]->key => $_smarty_tpl->tpl_vars["varian"]->value) {
$_smarty_tpl->tpl_vars["varian"]->_loop = true;
$_smarty_tpl->tpl_vars['imageurl'] = new Smarty_variable($_smarty_tpl->tpl_vars['varian']->value['image_pair']['icon']['image_path'], null, 0);
break 1;
}
break 1;
}
}?><li class="csc_template-small__item clearfix"><div class="csc_template-small__item-img" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['image_width'], ENT_QUOTES, 'ISO-8859-1');?>
px"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"> <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageurl']->value, ENT_QUOTES, 'ISO-8859-1');?>
" width="50"></a></div><div class="csc_template-p-description"><?php if ($_smarty_tpl->tpl_vars['product']->value['category']) {?><div class="cs-label-block"><a href="<?php echo htmlspecialchars(fn_url("categories.view&category_id=".((string)$_smarty_tpl->tpl_vars['product']->value['main_category'])), ENT_QUOTES, 'ISO-8859-1');?>
" class="lvs-category-label" style="<?php if ($_smarty_tpl->tpl_vars['cls']->value['show_category_gradient']=="Y") {?>background:linear-gradient(to bottom, #fff -5px, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['label_color'], ENT_QUOTES, 'ISO-8859-1');?>
 100%);<?php } else { ?>background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['label_color'], ENT_QUOTES, 'ISO-8859-1');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['category'], ENT_QUOTES, 'ISO-8859-1');?>
</a></div><?php }?><a class="csc_no_line" href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
 </a><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><div class="csc_product_code"><?php echo $_smarty_tpl->__('product_code');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'ISO-8859-1');?>
</div><div class="csc_template-item-price"><span class="csc_price<?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price'])&&!$_smarty_tpl->tpl_vars['product']->value['zero_price_action']) {?> hidden<?php }?>" id="line_discounted_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['taxed_price']) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['product']->value['clean_price']!=$_smarty_tpl->tpl_vars['product']->value['taxed_price']&&$_smarty_tpl->tpl_vars['product']->value['included_tax']) {?><span class="csc_price tax">(<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['taxed_price']), 0);?>
 <?php echo $_smarty_tpl->__("inc_tax");?>
)</span><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['clean_price']!=$_smarty_tpl->tpl_vars['product']->value['taxed_price']&&!$_smarty_tpl->tpl_vars['product']->value['included_tax']) {?><span class="csc_price tax">(<?php echo $_smarty_tpl->__("including_tax");?>
)</span><?php }
}?></div></a></div></li><?php }
if ($_smarty_tpl->tpl_vars['live_search']->value['total_items']>$_smarty_tpl->tpl_vars['live_search']->value['page']*$_smarty_tpl->tpl_vars['live_search']->value['items_per_page']) {
$_smarty_tpl->tpl_vars['diff'] = new Smarty_variable($_smarty_tpl->tpl_vars['live_search']->value['total_items']-$_smarty_tpl->tpl_vars['live_search']->value['page']*$_smarty_tpl->tpl_vars['live_search']->value['items_per_page'], null, 0);
if ($_smarty_tpl->tpl_vars['diff']->value<$_smarty_tpl->tpl_vars['live_search']->value['items_per_page']) {
$_smarty_tpl->tpl_vars['more'] = new Smarty_variable($_smarty_tpl->tpl_vars['diff']->value, null, 0);
} else {
$_smarty_tpl->tpl_vars['more'] = new Smarty_variable($_smarty_tpl->tpl_vars['live_search']->value['items_per_page'], null, 0);
}?><li class="ls-show-more-block"><a data-ls-page="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['page']+1, ENT_QUOTES, 'ISO-8859-1');?>
" data-ls-q="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['q'], ENT_QUOTES, 'ISO-8859-1');?>
" data-ls-block-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
' class="ls-show-more"><span><?php echo $_smarty_tpl->__('cls_show_more');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['more']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__('cls_products',array($_smarty_tpl->tpl_vars['more']->value));?>
</span></a><div class="ls-show-more-loading" style="display:none"><div class="cssload-container"><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span></div></div></li><?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/csc_live_search/components/list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/csc_live_search/components/list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['cls'] = new Smarty_variable($_smarty_tpl->tpl_vars['addons']->value['csc_live_search'], null, 0);
$_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
$_smarty_tpl->tpl_vars['imageurl'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], null, 0);
$_smarty_tpl->tpl_vars['variants'] = new Smarty_variable(fn_get_product_options($_smarty_tpl->tpl_vars['product']->value['product_id'],'CART_LANGUAGE'), null, 0);
if (count($_smarty_tpl->tpl_vars['variants']->value)) {
$_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
$_smarty_tpl->tpl_vars["varian"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["varian"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variant']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["varian"]->key => $_smarty_tpl->tpl_vars["varian"]->value) {
$_smarty_tpl->tpl_vars["varian"]->_loop = true;
$_smarty_tpl->tpl_vars['imageurl'] = new Smarty_variable($_smarty_tpl->tpl_vars['varian']->value['image_pair']['icon']['image_path'], null, 0);
break 1;
}
break 1;
}
}?><li class="csc_template-small__item clearfix"><div class="csc_template-small__item-img" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['image_width'], ENT_QUOTES, 'ISO-8859-1');?>
px"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"> <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageurl']->value, ENT_QUOTES, 'ISO-8859-1');?>
" width="50"></a></div><div class="csc_template-p-description"><?php if ($_smarty_tpl->tpl_vars['product']->value['category']) {?><div class="cs-label-block"><a href="<?php echo htmlspecialchars(fn_url("categories.view&category_id=".((string)$_smarty_tpl->tpl_vars['product']->value['main_category'])), ENT_QUOTES, 'ISO-8859-1');?>
" class="lvs-category-label" style="<?php if ($_smarty_tpl->tpl_vars['cls']->value['show_category_gradient']=="Y") {?>background:linear-gradient(to bottom, #fff -5px, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['label_color'], ENT_QUOTES, 'ISO-8859-1');?>
 100%);<?php } else { ?>background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['label_color'], ENT_QUOTES, 'ISO-8859-1');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['category'], ENT_QUOTES, 'ISO-8859-1');?>
</a></div><?php }?><a class="csc_no_line" href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
 </a><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><div class="csc_product_code"><?php echo $_smarty_tpl->__('product_code');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'ISO-8859-1');?>
</div><div class="csc_template-item-price"><span class="csc_price<?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price'])&&!$_smarty_tpl->tpl_vars['product']->value['zero_price_action']) {?> hidden<?php }?>" id="line_discounted_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['taxed_price']) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['product']->value['clean_price']!=$_smarty_tpl->tpl_vars['product']->value['taxed_price']&&$_smarty_tpl->tpl_vars['product']->value['included_tax']) {?><span class="csc_price tax">(<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['taxed_price']), 0);?>
 <?php echo $_smarty_tpl->__("inc_tax");?>
)</span><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['clean_price']!=$_smarty_tpl->tpl_vars['product']->value['taxed_price']&&!$_smarty_tpl->tpl_vars['product']->value['included_tax']) {?><span class="csc_price tax">(<?php echo $_smarty_tpl->__("including_tax");?>
)</span><?php }
}?></div></a></div></li><?php }
if ($_smarty_tpl->tpl_vars['live_search']->value['total_items']>$_smarty_tpl->tpl_vars['live_search']->value['page']*$_smarty_tpl->tpl_vars['live_search']->value['items_per_page']) {
$_smarty_tpl->tpl_vars['diff'] = new Smarty_variable($_smarty_tpl->tpl_vars['live_search']->value['total_items']-$_smarty_tpl->tpl_vars['live_search']->value['page']*$_smarty_tpl->tpl_vars['live_search']->value['items_per_page'], null, 0);
if ($_smarty_tpl->tpl_vars['diff']->value<$_smarty_tpl->tpl_vars['live_search']->value['items_per_page']) {
$_smarty_tpl->tpl_vars['more'] = new Smarty_variable($_smarty_tpl->tpl_vars['diff']->value, null, 0);
} else {
$_smarty_tpl->tpl_vars['more'] = new Smarty_variable($_smarty_tpl->tpl_vars['live_search']->value['items_per_page'], null, 0);
}?><li class="ls-show-more-block"><a data-ls-page="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['page']+1, ENT_QUOTES, 'ISO-8859-1');?>
" data-ls-q="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['q'], ENT_QUOTES, 'ISO-8859-1');?>
" data-ls-block-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['live_search']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
' class="ls-show-more"><span><?php echo $_smarty_tpl->__('cls_show_more');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['more']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__('cls_products',array($_smarty_tpl->tpl_vars['more']->value));?>
</span></a><div class="ls-show-more-loading" style="display:none"><div class="cssload-container"><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span><span class="cssload-dots"></span></div></div></li><?php }
}?><?php }} ?>
