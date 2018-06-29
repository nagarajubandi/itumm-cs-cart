<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:14:18
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/csc_live_search/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9980652445b337892b7e289-26968218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '575928963ddf2d52737cd848b007d055bf429645' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/csc_live_search/hooks/products/tabs_content.post.tpl',
      1 => 1525435423,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9980652445b337892b7e289-26968218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337892b877e0_02033746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337892b877e0_02033746')) {function content_5b337892b877e0_02033746($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('cls_stop_words'));
?>
<div id="content_cs_live_search" class="hidden">
	<?php echo $_smarty_tpl->getSubTemplate ("addons/csc_live_search/views/components/by_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div id="content_cs_live_search_settings" class="hidden">	
	<div class="control-group">
        <label for="product_description_cls_stop_words" class="control-label"><?php echo $_smarty_tpl->__("cls_stop_words");?>
</label>
        <div class="controls">        	
            <input class="input-large" form="form" type="text" name="product_data[cls_stop_words]" id="product_description_cls_stop_words" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['cls_stop_words'], ENT_QUOTES, 'ISO-8859-1');?>
" />           
        </div>
    </div>	
</div><?php }} ?>
