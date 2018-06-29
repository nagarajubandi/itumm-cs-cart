<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:22
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/ab__auto_loading_products/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13264478315b3372424dbd78-22785533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26df420258c12fefea621ac5c6a7cf94993b0662' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/ab__auto_loading_products/hooks/index/scripts.post.tpl',
      1 => 1525365836,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13264478315b3372424dbd78-22785533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'search' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337242526481_23924485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337242526481_23924485')) {function content_5b337242526481_23924485($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="categories") {?><?php echo '<script'; ?>
 type="text/javascript">var ab__alp = {};ab__alp = {config : {type_loading : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['addons']->value['ab__auto_loading_products']['type_loading'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "auto" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",before_end : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['addons']->value['ab__auto_loading_products']['before_end'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "100" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",animation : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['addons']->value['ab__auto_loading_products']['animation'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "css" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",troubleshooting_products_without_options : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['addons']->value['ab__auto_loading_products']['troubleshooting_products_without_options'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "N" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",},blocks : {products : "",last_product : "",template : false,pagination : false,button_state : 'delete'},params : {page : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['page'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? 1 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",features_hash : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['features_hash'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",items_per_page : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['items_per_page'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? 12 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",dispatch : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['dispatch'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",category_id : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['category_id'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",sort_by : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['sort_by'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",sort_order : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['sort_order'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",subcats : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['subcats'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "Y" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",total_items : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['total_items'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "Y" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",current_url : "<?php echo htmlspecialchars(fn_url("categories.view&category_id=".((string)$_smarty_tpl->tpl_vars['search']->value['category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
",loading : false,},texts : {t1 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_t1'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "Show another " : $tmp);?>
",t2 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_t2'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? ". Showing " : $tmp);?>
",t3 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_t3'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? " from " : $tmp);?>
",t4 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_t4'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "Showing all " : $tmp);?>
",p1 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_p1'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "product" : $tmp);?>
",p2 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_p2'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "products" : $tmp);?>
",p3 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_p3'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "products" : $tmp);?>
",},};<?php echo '</script'; ?>
><?php echo smarty_function_script(array('src'=>"js/addons/ab__auto_loading_products/func.js"),$_smarty_tpl);
}?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__auto_loading_products/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__auto_loading_products/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="categories") {?><?php echo '<script'; ?>
 type="text/javascript">var ab__alp = {};ab__alp = {config : {type_loading : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['addons']->value['ab__auto_loading_products']['type_loading'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "auto" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",before_end : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['addons']->value['ab__auto_loading_products']['before_end'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "100" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",animation : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['addons']->value['ab__auto_loading_products']['animation'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "css" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",troubleshooting_products_without_options : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['addons']->value['ab__auto_loading_products']['troubleshooting_products_without_options'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "N" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",},blocks : {products : "",last_product : "",template : false,pagination : false,button_state : 'delete'},params : {page : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['page'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? 1 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",features_hash : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['features_hash'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",items_per_page : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['items_per_page'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? 12 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",dispatch : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['dispatch'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",category_id : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['category_id'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",sort_by : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['sort_by'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",sort_order : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['sort_order'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",subcats : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['subcats'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "Y" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",total_items : "<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['total_items'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "Y" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
",current_url : "<?php echo htmlspecialchars(fn_url("categories.view&category_id=".((string)$_smarty_tpl->tpl_vars['search']->value['category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
",loading : false,},texts : {t1 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_t1'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "Show another " : $tmp);?>
",t2 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_t2'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? ". Showing " : $tmp);?>
",t3 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_t3'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? " from " : $tmp);?>
",t4 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_t4'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "Showing all " : $tmp);?>
",p1 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_p1'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "product" : $tmp);?>
",p2 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_p2'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "products" : $tmp);?>
",p3 : "<?php echo (($tmp = @strtr($_smarty_tpl->__('ab__alp_texts_p3'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "products" : $tmp);?>
",},};<?php echo '</script'; ?>
><?php echo smarty_function_script(array('src'=>"js/addons/ab__auto_loading_products/func.js"),$_smarty_tpl);
}?>
<?php }?><?php }} ?>
