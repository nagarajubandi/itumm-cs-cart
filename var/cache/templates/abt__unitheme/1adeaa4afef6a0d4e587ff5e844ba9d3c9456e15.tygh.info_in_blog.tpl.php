<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 19:23:52
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/discussion/views/discussion/info_in_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3850103835b34e8708e7082-43535070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1adeaa4afef6a0d4e587ff5e844ba9d3c9456e15' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/discussion/views/discussion/info_in_blog.tpl',
      1 => 1525364936,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3850103835b34e8708e7082-43535070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'subpage' => 0,
    'discussion' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34e870903666_20594593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34e870903666_20594593')) {function content_5b34e870903666_20594593($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['subpage']->value['page_id'],"A",true,$_REQUEST), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
    <div class="ty-discussion-post__rating">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating((($tmp = @$_smarty_tpl->tpl_vars['discussion']->value['average_rating'])===null||$tmp==='' ? 0 : $tmp))), 0);?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D"&&$_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']>0) {?>
<div class="ty-discussion-post__count">
<i class="ty-icon-uni-comment"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'ISO-8859-1');?>

</div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/info_in_blog.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/info_in_blog.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['subpage']->value['page_id'],"A",true,$_REQUEST), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
    <div class="ty-discussion-post__rating">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating((($tmp = @$_smarty_tpl->tpl_vars['discussion']->value['average_rating'])===null||$tmp==='' ? 0 : $tmp))), 0);?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['type']!="D"&&$_smarty_tpl->tpl_vars['discussion']->value['search']['total_items']>0) {?>
<div class="ty-discussion-post__count">
<i class="ty-icon-uni-comment"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion']->value['search']['total_items'], ENT_QUOTES, 'ISO-8859-1');?>

</div>
<?php }?>
<?php }?><?php }} ?>
