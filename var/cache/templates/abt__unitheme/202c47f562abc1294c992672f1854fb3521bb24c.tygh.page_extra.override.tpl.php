<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 19:23:50
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/pages/page_extra.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18002466425b34e86e78b2b5-89224694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '202c47f562abc1294c992672f1854fb3521bb24c' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/pages/page_extra.override.tpl',
      1 => 1525364936,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18002466425b34e86e78b2b5-89224694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page' => 0,
    'subpages' => 0,
    'subpage' => 0,
    'addons' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34e86e7bcf03_29768269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34e86e7bcf03_29768269')) {function content_5b34e86e7bcf03_29768269($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_function_live_edit')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('by','blog.read_more','by','blog.read_more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_BLOG')) {?>

<?php if ($_smarty_tpl->tpl_vars['subpages']->value) {?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="ty-blog">
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php  $_smarty_tpl->tpl_vars["subpage"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subpage"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subpages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subpage"]->key => $_smarty_tpl->tpl_vars["subpage"]->value) {
$_smarty_tpl->tpl_vars["subpage"]->_loop = true;
?>
            <div class="ty-blog__item">
                <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">
                    <h2 class="ty-blog__post-title">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subpage']->value['page'], ENT_QUOTES, 'ISO-8859-1');?>

                    </h2>
                </a>
                
                <?php if ($_smarty_tpl->tpl_vars['subpage']->value['main_pair']) {?>
                <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">
                    <div class="ty-blog__img-block">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"320",'obj_id'=>$_smarty_tpl->tpl_vars['subpage']->value['page_id'],'images'=>$_smarty_tpl->tpl_vars['subpage']->value['main_pair']), 0);?>

                    </div>
                </a>
                <?php }?>
                
                <div class="ty-blog__description">
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status']=='A') {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/info_in_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
	                <div class="ty-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['subpage']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</div>
	                <div class="ty-blog__author"><?php echo $_smarty_tpl->__("by");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subpage']->value['author'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
					
                    <div class="ty-wysiwyg-content">
                        <div><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['subpage']->value['spoiler']),380,"...");?>
</div>
                    </div>
                    <div class="ty-blog__read-more ty-mt-l">
                        <a class="ty-more-btn" href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("blog.read_more");?>
→</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        <?php } ?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['description']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-blog__post-title" <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'ISO-8859-1');?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme/hooks/pages/page_extra.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme/hooks/pages/page_extra.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_BLOG')) {?>

<?php if ($_smarty_tpl->tpl_vars['subpages']->value) {?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="ty-blog">
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php  $_smarty_tpl->tpl_vars["subpage"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subpage"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subpages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subpage"]->key => $_smarty_tpl->tpl_vars["subpage"]->value) {
$_smarty_tpl->tpl_vars["subpage"]->_loop = true;
?>
            <div class="ty-blog__item">
                <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">
                    <h2 class="ty-blog__post-title">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subpage']->value['page'], ENT_QUOTES, 'ISO-8859-1');?>

                    </h2>
                </a>
                
                <?php if ($_smarty_tpl->tpl_vars['subpage']->value['main_pair']) {?>
                <a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">
                    <div class="ty-blog__img-block">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"320",'obj_id'=>$_smarty_tpl->tpl_vars['subpage']->value['page_id'],'images'=>$_smarty_tpl->tpl_vars['subpage']->value['main_pair']), 0);?>

                    </div>
                </a>
                <?php }?>
                
                <div class="ty-blog__description">
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status']=='A') {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/info_in_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
	                <div class="ty-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['subpage']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</div>
	                <div class="ty-blog__author"><?php echo $_smarty_tpl->__("by");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subpage']->value['author'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
					
                    <div class="ty-wysiwyg-content">
                        <div><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['subpage']->value['spoiler']),380,"...");?>
</div>
                    </div>
                    <div class="ty-blog__read-more ty-mt-l">
                        <a class="ty-more-btn" href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("blog.read_more");?>
→</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        <?php } ?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['description']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-blog__post-title" <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'ISO-8859-1');?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php }
}?><?php }} ?>
