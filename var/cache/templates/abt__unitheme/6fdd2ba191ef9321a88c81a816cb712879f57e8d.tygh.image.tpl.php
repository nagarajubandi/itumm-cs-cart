<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:20
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/common/image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2057909125b3372406cc9c9-99532795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fdd2ba191ef9321a88c81a816cb712879f57e8d' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/common/image.tpl',
      1 => 1525364906,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2057909125b3372406cc9c9-99532795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'capture_image' => 0,
    'obj_id' => 0,
    'images' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'image_data' => 0,
    'external' => 0,
    'show_detailed_link' => 0,
    'image_id' => 0,
    'link_class' => 0,
    'valign' => 0,
    'class' => 0,
    'lazy_load' => 0,
    'generate_image' => 0,
    'no_ids' => 0,
    'images_dir' => 0,
    'image_onclick' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372407240e8_33860400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372407240e8_33860400')) {function content_5b3372407240e8_33860400($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('no_image','no_image'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
$_smarty_tpl->_capture_stack[0][] = array("image", null, null); ob_start();
}
if (!$_smarty_tpl->tpl_vars['obj_id']->value) {
echo smarty_function_math(array('equation'=>"rand()",'assign'=>"obj_id"),$_smarty_tpl);
}
$_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value), null, 0);
$_smarty_tpl->tpl_vars['generate_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['generate_image']&&!$_smarty_tpl->tpl_vars['external']->value, null, 0);
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?><a id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']&&$_smarty_tpl->tpl_vars['image_id']->value) {?>data-ca-image-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>cm-previewer ty-previewer<?php }?>" data-ca-image-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images']->value['detailed']['image_x'], ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-image-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images']->value['detailed']['image_y'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__images_seo:images_detailed_alt")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__images_seo:images_detailed_alt"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images']->value['detailed']['alt'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__images_seo:images_detailed_alt"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {
$_smarty_tpl->_capture_stack[0][] = array("product_image_object", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_image_object")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_image_object"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<img class="ty-pict <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['valign']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>ty-spinner<?php }?> cm-image" <?php if ($_smarty_tpl->tpl_vars['obj_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value) {?>id="det_img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>data-ca-image-path="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>data-<?php }?>src="<?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/icons/spacer.gif<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');
}?>" <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__images_seo:image_data_alt")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__images_seo:image_data_alt"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__images_seo:image_data_alt"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__images_seo:image_data_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__images_seo:image_data_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__images_seo:image_data_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['image_onclick']->value) {?>onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_onclick']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> /><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_image_object"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo Smarty::$_smarty_vars['capture']['product_image_object'];
} else { ?><span class="ty-no-image" style="height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px; width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px; "><i class="ty-no-image__icon ty-icon-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></span><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {
if ($_smarty_tpl->tpl_vars['images']->value['detailed_id']) {?><span class="ty-previewer__icon hidden-phone"></span><?php }?></a><?php }
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array("icon_image_path", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array("detailed_image_path", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'ISO-8859-1');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/image.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/image.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
$_smarty_tpl->_capture_stack[0][] = array("image", null, null); ob_start();
}
if (!$_smarty_tpl->tpl_vars['obj_id']->value) {
echo smarty_function_math(array('equation'=>"rand()",'assign'=>"obj_id"),$_smarty_tpl);
}
$_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value), null, 0);
$_smarty_tpl->tpl_vars['generate_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['generate_image']&&!$_smarty_tpl->tpl_vars['external']->value, null, 0);
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?><a id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']&&$_smarty_tpl->tpl_vars['image_id']->value) {?>data-ca-image-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>cm-previewer ty-previewer<?php }?>" data-ca-image-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images']->value['detailed']['image_x'], ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-image-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images']->value['detailed']['image_y'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__images_seo:images_detailed_alt")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__images_seo:images_detailed_alt"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images']->value['detailed']['alt'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__images_seo:images_detailed_alt"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {
$_smarty_tpl->_capture_stack[0][] = array("product_image_object", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_image_object")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_image_object"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<img class="ty-pict <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['valign']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>ty-spinner<?php }?> cm-image" <?php if ($_smarty_tpl->tpl_vars['obj_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value) {?>id="det_img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>data-ca-image-path="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>data-<?php }?>src="<?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/icons/spacer.gif<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');
}?>" <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__images_seo:image_data_alt")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__images_seo:image_data_alt"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__images_seo:image_data_alt"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__images_seo:image_data_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__images_seo:image_data_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__images_seo:image_data_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['image_onclick']->value) {?>onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_onclick']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> /><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_image_object"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo Smarty::$_smarty_vars['capture']['product_image_object'];
} else { ?><span class="ty-no-image" style="height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px; width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px; "><i class="ty-no-image__icon ty-icon-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></span><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {
if ($_smarty_tpl->tpl_vars['images']->value['detailed_id']) {?><span class="ty-previewer__icon hidden-phone"></span><?php }?></a><?php }
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array("icon_image_path", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array("detailed_image_path", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'ISO-8859-1');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
<?php }?><?php }} ?>
