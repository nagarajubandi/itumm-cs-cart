<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:36
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/products/components/product_images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8689295125b337250c48af8-96251861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd966ea0e31ef795930f6b1aa6d1ee84686a7d750' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/products/components/product_images.tpl',
      1 => 1525364906,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8689295125b337250c48af8-96251861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'thumbnails_size' => 0,
    'product' => 0,
    'image_pair_var' => 0,
    'preview_id' => 0,
    'settings' => 0,
    'image_id' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'image_pair' => 0,
    'img_id' => 0,
    'th_size' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337250cce828_05520791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337250cce828_05520791')) {function content_5b337250cce828_05520791($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["th_size"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['thumbnails_size']->value)===null||$tmp==='' ? 50 : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']['icon']||$_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['main_pair'], null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']) {?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id'], null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['preview_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["preview_id"] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php }?>

<div class="ty-product-img cm-preview-wrapper" <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>style="display:inline-block"<?php }?>>
<?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value),'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'link_class'=>"cm-image-previewer",'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>


<?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {?>
            <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'link_class'=>"cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value),'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>

    <?php }?>
<?php } ?>
<p class="ty-center"><small style="color:#999;"><?php echo $_smarty_tpl->__('hover_to_enlarge');?>
</small></p>
</div>

<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="Y") {?>
        <input type="hidden" name="no_cache" value="1" />
        <div class="ty-center ty-product-bigpicture-thumbnails_gallery"><div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__video_gallery:image_gallery_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__video_gallery:image_gallery_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ty-product-thumbnails owl-carousel cm-image-gallery" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-gallery-item cm-thumbnails-mini active ty-product-thumbnails__item" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
px"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a></div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
if ($_smarty_tpl->tpl_vars['image_pair']->value) {?><div class="cm-item-gallery ty-float-left"><?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a></div><?php }
}
}?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__video_gallery:image_gallery_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
        
    <?php } else { ?>
        <div class="ty-product-thumbnails ty-center cm-image-gallery" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_width']->value, ENT_QUOTES, 'ISO-8859-1');?>
px;">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__video_gallery:image_gallery_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__video_gallery:image_gallery_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-thumbnails-mini active ty-product-thumbnails__item"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
if ($_smarty_tpl->tpl_vars['image_pair']->value) {
if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']==0) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-thumbnails-mini ty-product-thumbnails__item"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a><?php }
}
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__video_gallery:image_gallery_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_images")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_images"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_images.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_images.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["th_size"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['thumbnails_size']->value)===null||$tmp==='' ? 50 : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']['icon']||$_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['main_pair'], null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']) {?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id'], null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['preview_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["preview_id"] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php }?>

<div class="ty-product-img cm-preview-wrapper" <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>style="display:inline-block"<?php }?>>
<?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value),'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'link_class'=>"cm-image-previewer",'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>


<?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {?>
            <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'link_class'=>"cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value),'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>

    <?php }?>
<?php } ?>
<p class="ty-center"><small style="color:#999;"><?php echo $_smarty_tpl->__('hover_to_enlarge');?>
</small></p>
</div>

<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="Y") {?>
        <input type="hidden" name="no_cache" value="1" />
        <div class="ty-center ty-product-bigpicture-thumbnails_gallery"><div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__video_gallery:image_gallery_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__video_gallery:image_gallery_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ty-product-thumbnails owl-carousel cm-image-gallery" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-gallery-item cm-thumbnails-mini active ty-product-thumbnails__item" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
px"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a></div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
if ($_smarty_tpl->tpl_vars['image_pair']->value) {?><div class="cm-item-gallery ty-float-left"><?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a></div><?php }
}
}?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__video_gallery:image_gallery_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
        
    <?php } else { ?>
        <div class="ty-product-thumbnails ty-center cm-image-gallery" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_width']->value, ENT_QUOTES, 'ISO-8859-1');?>
px;">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__video_gallery:image_gallery_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__video_gallery:image_gallery_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-thumbnails-mini active ty-product-thumbnails__item"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
if ($_smarty_tpl->tpl_vars['image_pair']->value) {
if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']==0) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-thumbnails-mini ty-product-thumbnails__item"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a><?php }
}
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__video_gallery:image_gallery_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_images")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_images"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
