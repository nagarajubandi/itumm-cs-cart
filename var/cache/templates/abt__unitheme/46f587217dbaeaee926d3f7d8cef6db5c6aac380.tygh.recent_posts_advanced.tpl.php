<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:22
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/blog/blocks/recent_posts_advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12912876855b337242059252-99309422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46f587217dbaeaee926d3f7d8cef6db5c6aac380' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/blog/blocks/recent_posts_advanced.tpl',
      1 => 1525364936,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12912876855b337242059252-99309422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'page' => 0,
    'image_data' => 0,
    'settings' => 0,
    'parent_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372420922b3_65234400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372420922b3_65234400')) {function content_5b3372420922b3_65234400($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('view_all','view_all'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["parent_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['content']['items']['parent_page_id'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>

<div class="ty-mb-l">
    <div class="ty-blog-recent-posts-advanced">
        <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["page"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fp"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["page"]->index++;
 $_smarty_tpl->tpl_vars["page"]->first = $_smarty_tpl->tpl_vars["page"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fp"]['first'] = $_smarty_tpl->tpl_vars["page"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fp"]['iteration']++;
?>
        	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fp']['iteration']<=7) {?>
            <div class="ty-blog-recent-posts-advanced__item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fp']['first']) {?>first<?php }?>">
            	<a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" >
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fp']['first']) {?>
                    <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['page']->value['main_pair'],550,366), null, 0);?>
                    <div class="ty-blog-recent-posts-advanced__img-block image-cover <?php if (!$_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>no-image<?php }?>" <?php if ($_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?>><div class="ty-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</div></div>
                    <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['page']->value['main_pair'],268,179), null, 0);?>
                    <div class="ty-blog-recent-posts-advanced__img-block image-cover <?php if (!$_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>no-image<?php }?>" <?php if ($_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?>><div class="ty-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</div></div>
                    <?php }?>
                </a>
                <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" class="blog-item-title"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value['page'],70,"...",true), ENT_QUOTES, 'ISO-8859-1');?>
</a>
            </div>
            <?php }?>
        <?php } ?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
        <div class="ty-mtb-xs ty-left">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['parent_id']->value),'but_text'=>$_smarty_tpl->__("view_all"),'but_role'=>"text",'but_meta'=>"blog-ty-text-links__button"), 0);?>

        </div>
    <?php }?>
</div>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/blocks/recent_posts_advanced.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/blocks/recent_posts_advanced.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars["parent_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['content']['items']['parent_page_id'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>

<div class="ty-mb-l">
    <div class="ty-blog-recent-posts-advanced">
        <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["page"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fp"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["page"]->index++;
 $_smarty_tpl->tpl_vars["page"]->first = $_smarty_tpl->tpl_vars["page"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fp"]['first'] = $_smarty_tpl->tpl_vars["page"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fp"]['iteration']++;
?>
        	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fp']['iteration']<=7) {?>
            <div class="ty-blog-recent-posts-advanced__item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fp']['first']) {?>first<?php }?>">
            	<a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" >
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fp']['first']) {?>
                    <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['page']->value['main_pair'],550,366), null, 0);?>
                    <div class="ty-blog-recent-posts-advanced__img-block image-cover <?php if (!$_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>no-image<?php }?>" <?php if ($_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?>><div class="ty-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</div></div>
                    <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['page']->value['main_pair'],268,179), null, 0);?>
                    <div class="ty-blog-recent-posts-advanced__img-block image-cover <?php if (!$_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>no-image<?php }?>" <?php if ($_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
');"<?php }?>><div class="ty-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</div></div>
                    <?php }?>
                </a>
                <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" class="blog-item-title"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value['page'],70,"...",true), ENT_QUOTES, 'ISO-8859-1');?>
</a>
            </div>
            <?php }?>
        <?php } ?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
        <div class="ty-mtb-xs ty-left">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['parent_id']->value),'but_text'=>$_smarty_tpl->__("view_all"),'but_role'=>"text",'but_meta'=>"blog-ty-text-links__button"), 0);?>

        </div>
    <?php }?>
</div>

<?php }
}?><?php }} ?>
