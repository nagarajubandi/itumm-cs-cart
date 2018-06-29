<script>
(function(_, $) {
$(document).ready(function(){
var scroll_height = 100;
var position = '{$addons.ab__scroll_to_top.position|default:"bottom_right"}';
var hide_on_mobile = '{$addons.ab__scroll_to_top.hide_on_mobile|default:"N"}';
var css_arrow = {
'font-size': '{$addons.ab__scroll_to_top.font_size|intval|default:64}px',
'font-weight': '{$addons.ab__scroll_to_top.font_weight|default:'normal'}',
'color': '{$addons.ab__scroll_to_top.ab__stt_color|default:'#000'}',
};
var css_block = {
'margin-top': '{$addons.ab__scroll_to_top.margin_top|intval|default:0}px',
'margin-right': '{$addons.ab__scroll_to_top.margin_right|intval|default:10}px',
'margin-bottom':'{$addons.ab__scroll_to_top.margin_bottom|intval|default:10}px',
'margin-left': '{$addons.ab__scroll_to_top.margin_left|intval|default:0}px',
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
$('body').append('<div class="ab__scroll_to_top"><span class="ab__stt-' + '{$addons.ab__scroll_to_top.icon|default:"arrow_1"}' + '"></span></div>');
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
</script>
