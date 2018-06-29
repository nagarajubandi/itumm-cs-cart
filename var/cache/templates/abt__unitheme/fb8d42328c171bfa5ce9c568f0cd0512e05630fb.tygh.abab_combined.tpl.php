<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:21
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/ab__advanced_banners/blocks/abab_combined.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15538639625b337241ed8ab7-91346940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb8d42328c171bfa5ce9c568f0cd0512e05630fb' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/ab__advanced_banners/blocks/abab_combined.tpl',
      1 => 1525365788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15538639625b337241ed8ab7-91346940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'banner' => 0,
    'block' => 0,
    'img_path' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337242017423_87667132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337242017423_87667132')) {function content_5b337242017423_87667132($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["img_path"] = new Smarty_variable("http_image_path", null, 0);?>
<?php if (@constant('HTTPS')) {
$_smarty_tpl->tpl_vars["img_path"] = new Smarty_variable("https_image_path", null, 0);
}?>
<?php  $_smarty_tpl->tpl_vars["banner"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["banner"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["banner"]->key => $_smarty_tpl->tpl_vars["banner"]->value) {
$_smarty_tpl->tpl_vars["banner"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["banner"]->key;
?>
<?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__button_text']=='') {?>
<a
href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'ISO-8859-1');?>
"
<?php if ($_smarty_tpl->tpl_vars['banner']->value['target']=="B") {?>target="_blank"<?php }?>
class="ab-advanced-banner ty-banner__image-item <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['shadow_title']=="Y") {?>shadow<?php }?> <?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__color_scheme']=="light") {?>light<?php } else { ?>dark<?php }?>"
style="background: <?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__bg_color']!='') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['ab__bg_color'], ENT_QUOTES, 'ISO-8859-1');
}?> <?php if ($_smarty_tpl->tpl_vars['banner']->value['bg_image']['icon'][$_smarty_tpl->tpl_vars['img_path']->value]) {?>url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bg_image']['icon'][$_smarty_tpl->tpl_vars['img_path']->value], ENT_QUOTES, 'ISO-8859-1');?>
')<?php }?>;
<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['margin']!='') {?>margin:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'ISO-8859-1');?>
;<?php }?>">
<?php } else { ?>
<div
class="ab-advanced-banner ty-banner__image-item <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['shadow_title']=="Y") {?>shadow<?php }?> <?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__color_scheme']=="light") {?>light<?php } else { ?>dark<?php }?>"
style="background: <?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__bg_color']!='') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['ab__bg_color'], ENT_QUOTES, 'ISO-8859-1');
}?> <?php if ($_smarty_tpl->tpl_vars['banner']->value['bg_image']['icon'][$_smarty_tpl->tpl_vars['img_path']->value]) {?>url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bg_image']['icon'][$_smarty_tpl->tpl_vars['img_path']->value], ENT_QUOTES, 'ISO-8859-1');?>
')<?php }?>;
<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['margin']!='') {?>margin:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'ISO-8859-1');?>
;<?php }?>">
<?php }?>
<div class="advanced-banner-content" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['min_height']!='') {?>style="min-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>>
<?php if (!empty($_smarty_tpl->tpl_vars['banner']->value['main_pair'])&&is_array($_smarty_tpl->tpl_vars['banner']->value['main_pair'])) {?>
<div class="advanced-banner-image <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['align']=="left") {?>right<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['align']=="right") {?>left<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['align']=="center") {?>center<?php }?>" style=" line-height: <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['align']=="center") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height']/2, ENT_QUOTES, 'ISO-8859-1');?>
px;padding-bottom:20px;<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height'], ENT_QUOTES, 'ISO-8859-1');
}?>">
<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon'][$_smarty_tpl->tpl_vars['img_path']->value], ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['alt'], ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['alt'], ENT_QUOTES, 'ISO-8859-1');?>
" style="max-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height'], ENT_QUOTES, 'ISO-8859-1');?>
;width:auto">
</div>
<?php }?>
<div class="advanced-banner-block <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['conent_tr_bg']=="Y") {?>mask<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['full_width_content']=="Y") {?>fullwidth<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['align'], ENT_QUOTES, 'ISO-8859-1');?>
" style="<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['valign']=="top") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['valign'], ENT_QUOTES, 'ISO-8859-1');?>
: 0;<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['valign']=="bottom") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['valign'], ENT_QUOTES, 'ISO-8859-1');?>
: 0;<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['padding']!='') {?>padding:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['padding'], ENT_QUOTES, 'ISO-8859-1');?>
;<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['valign']=="center") {?>padding-top:0;padding-bottom:0;<?php }?>">
<div class="advanced-banner-mb" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['valign']=="center") {?>style="display:table-cell;height:<?php if (!empty($_smarty_tpl->tpl_vars['banner']->value['main_pair'])&&is_array($_smarty_tpl->tpl_vars['banner']->value['main_pair'])&&$_smarty_tpl->tpl_vars['block']->value['properties']['align']=="center") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height']/2, ENT_QUOTES, 'ISO-8859-1');?>
px<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height'], ENT_QUOTES, 'ISO-8859-1');
}?>;vertical-align:middle;"<?php }?>>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['title_h'], ENT_QUOTES, 'ISO-8859-1');?>
 class="advanced-banner-title" style="font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['title_font_size'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['banner']->value['ab__title'];?>
</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['title_h'], ENT_QUOTES, 'ISO-8859-1');?>
>
<div class="advanced-banner-text <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['desc_mark_color']!="transparent") {?>mark<?php }?>" style="font-size:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['desc_font_size'], ENT_QUOTES, 'ISO-8859-1');?>
;background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['desc_mark_color'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['banner']->value['ab__adv_text'];?>
</div>
<?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__button_text']!='') {?><br><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-btn ty-btn__primary" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target']=="B") {?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['banner']->value['ab__button_text'];?>
</a><?php }?>
</div>
</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__button_text']=='') {?></a><?php } else { ?></div><?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__advanced_banners/blocks/abab_combined.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__advanced_banners/blocks/abab_combined.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars["img_path"] = new Smarty_variable("http_image_path", null, 0);?>
<?php if (@constant('HTTPS')) {
$_smarty_tpl->tpl_vars["img_path"] = new Smarty_variable("https_image_path", null, 0);
}?>
<?php  $_smarty_tpl->tpl_vars["banner"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["banner"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["banner"]->key => $_smarty_tpl->tpl_vars["banner"]->value) {
$_smarty_tpl->tpl_vars["banner"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["banner"]->key;
?>
<?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__button_text']=='') {?>
<a
href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'ISO-8859-1');?>
"
<?php if ($_smarty_tpl->tpl_vars['banner']->value['target']=="B") {?>target="_blank"<?php }?>
class="ab-advanced-banner ty-banner__image-item <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['shadow_title']=="Y") {?>shadow<?php }?> <?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__color_scheme']=="light") {?>light<?php } else { ?>dark<?php }?>"
style="background: <?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__bg_color']!='') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['ab__bg_color'], ENT_QUOTES, 'ISO-8859-1');
}?> <?php if ($_smarty_tpl->tpl_vars['banner']->value['bg_image']['icon'][$_smarty_tpl->tpl_vars['img_path']->value]) {?>url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bg_image']['icon'][$_smarty_tpl->tpl_vars['img_path']->value], ENT_QUOTES, 'ISO-8859-1');?>
')<?php }?>;
<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['margin']!='') {?>margin:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'ISO-8859-1');?>
;<?php }?>">
<?php } else { ?>
<div
class="ab-advanced-banner ty-banner__image-item <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['shadow_title']=="Y") {?>shadow<?php }?> <?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__color_scheme']=="light") {?>light<?php } else { ?>dark<?php }?>"
style="background: <?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__bg_color']!='') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['ab__bg_color'], ENT_QUOTES, 'ISO-8859-1');
}?> <?php if ($_smarty_tpl->tpl_vars['banner']->value['bg_image']['icon'][$_smarty_tpl->tpl_vars['img_path']->value]) {?>url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bg_image']['icon'][$_smarty_tpl->tpl_vars['img_path']->value], ENT_QUOTES, 'ISO-8859-1');?>
')<?php }?>;
<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['margin']!='') {?>margin:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'ISO-8859-1');?>
;<?php }?>">
<?php }?>
<div class="advanced-banner-content" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['min_height']!='') {?>style="min-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>>
<?php if (!empty($_smarty_tpl->tpl_vars['banner']->value['main_pair'])&&is_array($_smarty_tpl->tpl_vars['banner']->value['main_pair'])) {?>
<div class="advanced-banner-image <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['align']=="left") {?>right<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['align']=="right") {?>left<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['align']=="center") {?>center<?php }?>" style=" line-height: <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['align']=="center") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height']/2, ENT_QUOTES, 'ISO-8859-1');?>
px;padding-bottom:20px;<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height'], ENT_QUOTES, 'ISO-8859-1');
}?>">
<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon'][$_smarty_tpl->tpl_vars['img_path']->value], ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['alt'], ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['main_pair']['icon']['alt'], ENT_QUOTES, 'ISO-8859-1');?>
" style="max-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height'], ENT_QUOTES, 'ISO-8859-1');?>
;width:auto">
</div>
<?php }?>
<div class="advanced-banner-block <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['conent_tr_bg']=="Y") {?>mask<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['full_width_content']=="Y") {?>fullwidth<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['align'], ENT_QUOTES, 'ISO-8859-1');?>
" style="<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['valign']=="top") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['valign'], ENT_QUOTES, 'ISO-8859-1');?>
: 0;<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['valign']=="bottom") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['valign'], ENT_QUOTES, 'ISO-8859-1');?>
: 0;<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['padding']!='') {?>padding:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['padding'], ENT_QUOTES, 'ISO-8859-1');?>
;<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['valign']=="center") {?>padding-top:0;padding-bottom:0;<?php }?>">
<div class="advanced-banner-mb" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['valign']=="center") {?>style="display:table-cell;height:<?php if (!empty($_smarty_tpl->tpl_vars['banner']->value['main_pair'])&&is_array($_smarty_tpl->tpl_vars['banner']->value['main_pair'])&&$_smarty_tpl->tpl_vars['block']->value['properties']['align']=="center") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height']/2, ENT_QUOTES, 'ISO-8859-1');?>
px<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['min_height'], ENT_QUOTES, 'ISO-8859-1');
}?>;vertical-align:middle;"<?php }?>>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['title_h'], ENT_QUOTES, 'ISO-8859-1');?>
 class="advanced-banner-title" style="font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['title_font_size'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['banner']->value['ab__title'];?>
</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['title_h'], ENT_QUOTES, 'ISO-8859-1');?>
>
<div class="advanced-banner-text <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['desc_mark_color']!="transparent") {?>mark<?php }?>" style="font-size:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['desc_font_size'], ENT_QUOTES, 'ISO-8859-1');?>
;background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['desc_mark_color'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['banner']->value['ab__adv_text'];?>
</div>
<?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__button_text']!='') {?><br><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-btn ty-btn__primary" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target']=="B") {?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['banner']->value['ab__button_text'];?>
</a><?php }?>
</div>
</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__button_text']=='') {?></a><?php } else { ?></div><?php }?>
<?php }
}?><?php }} ?>
