<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 18:56:57
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/discussion/items_list_row.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2725559765b3390a1c13e74-69151624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3370ebd28117fa23401ddae2cb162846d3694bc9' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/discussion/items_list_row.override.tpl',
      1 => 1525364936,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2725559765b3390a1c13e74-69151624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'post' => 0,
    'discussion' => 0,
    'product' => 0,
    'category_data' => 0,
    'page' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3390a1c470f1_03489724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3390a1c470f1_03489724')) {function content_5b3390a1c470f1_03489724($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <span itemscope itemtype="http://schema.org/Review">
        <span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
            <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['rating_value'], ENT_QUOTES, 'ISO-8859-1');?>
">
        </span>
        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=='P') {?>
            <meta itemprop="itemReviewed" content="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'ISO-8859-1', true), ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=='C') {?>
            <meta itemprop="itemReviewed" content="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'ISO-8859-1', true), ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=='A') {?>
            <meta itemprop="itemReviewed" content="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'ISO-8859-1', true), ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=='E') {?>
            <meta itemprop="itemReviewed" content="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], ENT_QUOTES, 'ISO-8859-1', true), ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php }?>
        <span itemprop="author" itemscope itemtype="http://schema.org/Person">
            <meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
">
        </span>
        <meta itemprop="datePublished" content="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],"%Y-%m-%d"), ENT_QUOTES, 'ISO-8859-1');?>
">
        <meta itemprop="reviewBody" content="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'ISO-8859-1', true), ENT_QUOTES, 'ISO-8859-1');?>
">
    </span>
    <div class="row-fluid">
	<div class="span3">
	<span class="ty-discussion-post__author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
	<?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B"&&$_smarty_tpl->tpl_vars['post']->value['rating_value']>0) {?>
	    <div class="clearfix ty-discussion-post__rating">
	        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0);?>

	    </div>
	<?php }?>
	<p><span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</span></p>
	</div>
	<div class="span13">	
    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
        <div class="ty-discussion-post__message"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'ISO-8859-1', true));?>
</div>
    <?php }?>
	</div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme/hooks/discussion/items_list_row.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme/hooks/discussion/items_list_row.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <span itemscope itemtype="http://schema.org/Review">
        <span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
            <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['rating_value'], ENT_QUOTES, 'ISO-8859-1');?>
">
        </span>
        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=='P') {?>
            <meta itemprop="itemReviewed" content="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'ISO-8859-1', true), ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=='C') {?>
            <meta itemprop="itemReviewed" content="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'ISO-8859-1', true), ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=='A') {?>
            <meta itemprop="itemReviewed" content="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'ISO-8859-1', true), ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=='E') {?>
            <meta itemprop="itemReviewed" content="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], ENT_QUOTES, 'ISO-8859-1', true), ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php }?>
        <span itemprop="author" itemscope itemtype="http://schema.org/Person">
            <meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
">
        </span>
        <meta itemprop="datePublished" content="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],"%Y-%m-%d"), ENT_QUOTES, 'ISO-8859-1');?>
">
        <meta itemprop="reviewBody" content="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'ISO-8859-1', true), ENT_QUOTES, 'ISO-8859-1');?>
">
    </span>
    <div class="row-fluid">
	<div class="span3">
	<span class="ty-discussion-post__author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
	<?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B"&&$_smarty_tpl->tpl_vars['post']->value['rating_value']>0) {?>
	    <div class="clearfix ty-discussion-post__rating">
	        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0);?>

	    </div>
	<?php }?>
	<p><span class="ty-discussion-post__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</span></p>
	</div>
	<div class="span13">	
    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C"||$_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>
        <div class="ty-discussion-post__message"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'ISO-8859-1', true));?>
</div>
    <?php }?>
	</div>
    </div>
</div>
<?php }?><?php }} ?>
