<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:18
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_affiliate/hooks/index/meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20123245105b33723e4c0eb3-18141336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1938bc61c1a5e93ab2a16a35382039c036d129df' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/addons/sd_affiliate/hooks/index/meta.post.tpl',
      1 => 1494630708,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20123245105b33723e4c0eb3-18141336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'banner_detail' => 0,
    'config' => 0,
    'url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33723e4dbce3_68518253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33723e4dbce3_68518253')) {function content_5b33723e4dbce3_68518253($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_REQUEST['dispatch']=='aff_banners.view') {?>
<meta property="og:url"           content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_detail']->value['url'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_detail']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<meta property="og:description"   content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_detail']->value['content'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_detail']->value['icon']['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
" />

<?php } elseif ($_REQUEST['dispatch']=='profiles.add'&&strstr($_SERVER['REQUEST_URI'],'?user_type=P')) {?>
<?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable(fn_url(((string)$_smarty_tpl->tpl_vars['config']->value['current_location'])."/".((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])), null, 0);?>

<meta property="og:url"           content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="FleAffair Affiliate Registration" />
<meta property="og:description"   content="Register as an Affiliate with FleAffair.com and Earn Extra Cash by Working from Home." />
<meta property="og:image" content="https://www.fleaffair.com/images/aff_images/111/Affiliates-work-from-Home.jpg?t=1489660340" />

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_affiliate/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_affiliate/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_REQUEST['dispatch']=='aff_banners.view') {?>
<meta property="og:url"           content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_detail']->value['url'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_detail']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<meta property="og:description"   content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_detail']->value['content'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_detail']->value['icon']['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
" />

<?php } elseif ($_REQUEST['dispatch']=='profiles.add'&&strstr($_SERVER['REQUEST_URI'],'?user_type=P')) {?>
<?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable(fn_url(((string)$_smarty_tpl->tpl_vars['config']->value['current_location'])."/".((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])), null, 0);?>

<meta property="og:url"           content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="FleAffair Affiliate Registration" />
<meta property="og:description"   content="Register as an Affiliate with FleAffair.com and Earn Extra Cash by Working from Home." />
<meta property="og:image" content="https://www.fleaffair.com/images/aff_images/111/Affiliates-work-from-Home.jpg?t=1489660340" />

<?php }?>
<?php }?><?php }} ?>
