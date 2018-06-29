<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:18
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/csc_live_search/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18177615705b33723e7ded05-88609602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc92cd8dcc70b33e6fa207e16491fe66b418fbce' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/csc_live_search/hooks/index/styles.post.tpl',
      1 => 1525436173,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18177615705b33723e7ded05-88609602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'cls' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33723e804006_75158438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33723e804006_75158438')) {function content_5b33723e804006_75158438($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_style(array('src'=>"addons/csc_live_search/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/csc_live_search/animation.less"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable($_smarty_tpl->tpl_vars['addons']->value['csc_live_search'], null, 0);?>
<style>.csc_live_search_css{margin-top:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['margin'], ENT_QUOTES, 'ISO-8859-1');?>
px;}.ls-container{border:1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_border'], ENT_QUOTES, 'ISO-8859-1');?>
;border-radius:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['border_radius'], ENT_QUOTES, 'ISO-8859-1');?>
px;background-color:#fff;}.csc_snize-arrow-outer {border-bottom: 15px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_border'], ENT_QUOTES, 'ISO-8859-1');?>
;}.csc_snize-arrow-inner {border-bottom: 13px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_top_bg'], ENT_QUOTES, 'ISO-8859-1');?>
;}.csc_live_search_total{background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_top_bg'], ENT_QUOTES, 'ISO-8859-1');?>
;border-radius:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['border_radius'], ENT_QUOTES, 'ISO-8859-1');?>
px <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['border_radius'], ENT_QUOTES, 'ISO-8859-1');?>
px 0 0;}.csc_live_search_total .ls_closer{color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_bg'], ENT_QUOTES, 'ISO-8859-1');?>
}.csc_live_search_total .ls_closer:hover{color:#333;}.csc_template-small__item:hover{background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;}.csc_template-small__item:hover{background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;}.csc_live_search_css a{color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_links'], ENT_QUOTES, 'ISO-8859-1');?>
;}.csc_live_search_css a:hover{color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_links_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;}.ls-show-more-block a{border:1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_border'], ENT_QUOTES, 'ISO-8859-1');?>
;color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_text'], ENT_QUOTES, 'ISO-8859-1');?>
;background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_bg'], ENT_QUOTES, 'ISO-8859-1');?>
;border-radius:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['btn_radius'], ENT_QUOTES, 'ISO-8859-1');?>
px;}.ls-show-more-block a:hover{border:1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_border_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_text_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_bg_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;}</style><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/csc_live_search/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/csc_live_search/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_style(array('src'=>"addons/csc_live_search/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/csc_live_search/animation.less"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable($_smarty_tpl->tpl_vars['addons']->value['csc_live_search'], null, 0);?>
<style>.csc_live_search_css{margin-top:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['margin'], ENT_QUOTES, 'ISO-8859-1');?>
px;}.ls-container{border:1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_border'], ENT_QUOTES, 'ISO-8859-1');?>
;border-radius:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['border_radius'], ENT_QUOTES, 'ISO-8859-1');?>
px;background-color:#fff;}.csc_snize-arrow-outer {border-bottom: 15px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_border'], ENT_QUOTES, 'ISO-8859-1');?>
;}.csc_snize-arrow-inner {border-bottom: 13px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_top_bg'], ENT_QUOTES, 'ISO-8859-1');?>
;}.csc_live_search_total{background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_top_bg'], ENT_QUOTES, 'ISO-8859-1');?>
;border-radius:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['border_radius'], ENT_QUOTES, 'ISO-8859-1');?>
px <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['border_radius'], ENT_QUOTES, 'ISO-8859-1');?>
px 0 0;}.csc_live_search_total .ls_closer{color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_bg'], ENT_QUOTES, 'ISO-8859-1');?>
}.csc_live_search_total .ls_closer:hover{color:#333;}.csc_template-small__item:hover{background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;}.csc_template-small__item:hover{background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;}.csc_live_search_css a{color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_links'], ENT_QUOTES, 'ISO-8859-1');?>
;}.csc_live_search_css a:hover{color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_links_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;}.ls-show-more-block a{border:1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_border'], ENT_QUOTES, 'ISO-8859-1');?>
;color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_text'], ENT_QUOTES, 'ISO-8859-1');?>
;background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_bg'], ENT_QUOTES, 'ISO-8859-1');?>
;border-radius:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['btn_radius'], ENT_QUOTES, 'ISO-8859-1');?>
px;}.ls-show-more-block a:hover{border:1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_border_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_text_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls']->value['clr_btn_bg_hover'], ENT_QUOTES, 'ISO-8859-1');?>
;}</style><?php }?><?php }} ?>
