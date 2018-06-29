<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:36
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/common/breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5700174115b337250789c09-53589944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e68e7426114505f37b418205e67f8a1014cc6f3f' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/common/breadcrumbs.tpl',
      1 => 1526037177,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5700174115b337250789c09-53589944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'breadcrumbs' => 0,
    'key' => 0,
    'bc' => 0,
    'additional_class' => 0,
    'category_data' => 0,
    'search' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372507bf308_89471771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372507bf308_89471771')) {function content_5b3372507bf308_89471771($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="breadcrumbs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
">

    <?php if ($_smarty_tpl->tpl_vars['breadcrumbs']->value&&sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value)>1) {?>
        <div itemscope itemtype="http://schema.org/BreadcrumbList" class="ty-breadcrumbs clearfix">
            <?php  $_smarty_tpl->tpl_vars["bc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bc"]->key => $_smarty_tpl->tpl_vars["bc"]->value) {
$_smarty_tpl->tpl_vars["bc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["bc"]->key;
if ($_smarty_tpl->tpl_vars['key']->value!="0") {?><span class="ty-breadcrumbs__slash">/</span><?php }?><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><?php if ($_smarty_tpl->tpl_vars['bc']->value['link']) {?><a itemprop="item" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['bc']->value['link']), ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-breadcrumbs__a<?php if ($_smarty_tpl->tpl_vars['additional_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'ISO-8859-1');
}?>"<?php if ($_smarty_tpl->tpl_vars['bc']->value['nofollow']) {?> rel="nofollow"<?php }?>><meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'ISO-8859-1');?>
" /><meta itemprop="name" content="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'ISO-8859-1', true);?>
" /><bdi><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'ISO-8859-1', true);?>
</bdi></a><?php } else { ?><span itemprop="item" class="ty-breadcrumbs__current"><meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'ISO-8859-1');?>
" /><meta itemprop="name" content="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'ISO-8859-1', true);?>
" /><bdi><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'ISO-8859-1', true);?>
 </bdi> </span><?php if (sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value)<4) {
if ((int)$_smarty_tpl->tpl_vars['category_data']->value['product_count']>0) {?>(<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['total_items'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "Y" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
)<?php }?> <?php }
}?></span><?php }
echo $_smarty_tpl->getSubTemplate ("common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php }?>
    <!--breadcrumbs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/breadcrumbs.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/breadcrumbs.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="breadcrumbs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
">

    <?php if ($_smarty_tpl->tpl_vars['breadcrumbs']->value&&sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value)>1) {?>
        <div itemscope itemtype="http://schema.org/BreadcrumbList" class="ty-breadcrumbs clearfix">
            <?php  $_smarty_tpl->tpl_vars["bc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bc"]->key => $_smarty_tpl->tpl_vars["bc"]->value) {
$_smarty_tpl->tpl_vars["bc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["bc"]->key;
if ($_smarty_tpl->tpl_vars['key']->value!="0") {?><span class="ty-breadcrumbs__slash">/</span><?php }?><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><?php if ($_smarty_tpl->tpl_vars['bc']->value['link']) {?><a itemprop="item" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['bc']->value['link']), ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-breadcrumbs__a<?php if ($_smarty_tpl->tpl_vars['additional_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'ISO-8859-1');
}?>"<?php if ($_smarty_tpl->tpl_vars['bc']->value['nofollow']) {?> rel="nofollow"<?php }?>><meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'ISO-8859-1');?>
" /><meta itemprop="name" content="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'ISO-8859-1', true);?>
" /><bdi><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'ISO-8859-1', true);?>
</bdi></a><?php } else { ?><span itemprop="item" class="ty-breadcrumbs__current"><meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'ISO-8859-1');?>
" /><meta itemprop="name" content="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'ISO-8859-1', true);?>
" /><bdi><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'ISO-8859-1', true);?>
 </bdi> </span><?php if (sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value)<4) {
if ((int)$_smarty_tpl->tpl_vars['category_data']->value['product_count']>0) {?>(<?php echo htmlspecialchars((($tmp = @strtr($_smarty_tpl->tpl_vars['search']->value['total_items'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )))===null||$tmp==='' ? "Y" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
)<?php }?> <?php }
}?></span><?php }
echo $_smarty_tpl->getSubTemplate ("common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php }?>
    <!--breadcrumbs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php }?><?php }} ?>
