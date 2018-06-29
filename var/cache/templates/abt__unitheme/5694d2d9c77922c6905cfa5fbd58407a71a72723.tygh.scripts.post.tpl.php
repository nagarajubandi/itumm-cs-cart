<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:22
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/ab__scroll_to_top/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16727105735b337242578f15-73704645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5694d2d9c77922c6905cfa5fbd58407a71a72723' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/ab__scroll_to_top/hooks/index/scripts.post.tpl',
      1 => 1525365912,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16727105735b337242578f15-73704645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33724259b428_36184087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33724259b428_36184087')) {function content_5b33724259b428_36184087($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
>
(function(_, $) {
$(document).ready(function(){
var scroll_height = 100;
var position = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['position'])===null||$tmp==='' ? "bottom_right" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
';
var hide_on_mobile = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['hide_on_mobile'])===null||$tmp==='' ? "N" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
';
var css_arrow = {
'font-size': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['font_size']))===null||$tmp==='' ? 64 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'font-weight': '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['font_weight'])===null||$tmp==='' ? 'normal' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
',
'color': '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['ab__stt_color'])===null||$tmp==='' ? '#000' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
',
};
var css_block = {
'margin-top': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_top']))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'margin-right': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_right']))===null||$tmp==='' ? 10 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'margin-bottom':'<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_bottom']))===null||$tmp==='' ? 10 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'margin-left': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_left']))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'display': 'none',
};
switch (position){
case 'top_right': css_block.top = 0; css_block.right = 0; break;
case 'top_left': css_block.top = 0; css_block.left = 0; break;
case 'bottom_right':css_block.bottom = 0; css_block.right = 0; break;
case 'bottom_left': css_block.bottom = 0; css_block.left = 0; break;
}
if ($(window).scrollTop() > scroll_height) css_block.display = 'block';
if (!$.isMobile() || hide_on_mobile != 'Y') {
$('body').append('<div class="ab__scroll_to_top"><span class="ab__stt-' + '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['icon'])===null||$tmp==='' ? "arrow_1" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
' + '"></span></div>');
$('div.ab__scroll_to_top').css(css_block).find('span').css(css_arrow);
}
$(window).scroll(function () {
if ($(this).scrollTop() > scroll_height) $('.ab__scroll_to_top').fadeIn();
else $('.ab__scroll_to_top').fadeOut();
});
$(document).on('click', 'div.ab__scroll_to_top', function() {
$("html, body").animate( { scrollTop: 0 } , 600);
return false;
});
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__scroll_to_top/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__scroll_to_top/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
>
(function(_, $) {
$(document).ready(function(){
var scroll_height = 100;
var position = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['position'])===null||$tmp==='' ? "bottom_right" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
';
var hide_on_mobile = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['hide_on_mobile'])===null||$tmp==='' ? "N" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
';
var css_arrow = {
'font-size': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['font_size']))===null||$tmp==='' ? 64 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'font-weight': '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['font_weight'])===null||$tmp==='' ? 'normal' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
',
'color': '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['ab__stt_color'])===null||$tmp==='' ? '#000' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
',
};
var css_block = {
'margin-top': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_top']))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'margin-right': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_right']))===null||$tmp==='' ? 10 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'margin-bottom':'<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_bottom']))===null||$tmp==='' ? 10 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'margin-left': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_left']))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'display': 'none',
};
switch (position){
case 'top_right': css_block.top = 0; css_block.right = 0; break;
case 'top_left': css_block.top = 0; css_block.left = 0; break;
case 'bottom_right':css_block.bottom = 0; css_block.right = 0; break;
case 'bottom_left': css_block.bottom = 0; css_block.left = 0; break;
}
if ($(window).scrollTop() > scroll_height) css_block.display = 'block';
if (!$.isMobile() || hide_on_mobile != 'Y') {
$('body').append('<div class="ab__scroll_to_top"><span class="ab__stt-' + '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['icon'])===null||$tmp==='' ? "arrow_1" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
' + '"></span></div>');
$('div.ab__scroll_to_top').css(css_block).find('span').css(css_arrow);
}
$(window).scroll(function () {
if ($(this).scrollTop() > scroll_height) $('.ab__scroll_to_top').fadeIn();
else $('.ab__scroll_to_top').fadeOut();
});
$(document).on('click', 'div.ab__scroll_to_top', function() {
$("html, body").animate( { scrollTop: 0 } , 600);
return false;
});
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
