<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:22
         compiled from "/var/www/html/itumm.com/design/themes/responsive/templates/blocks/menu/text_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9773737935b3372421ce827-70341044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bfd63e5a19a8e76c41ff8a6b1263bc8280887e1' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/responsive/templates/blocks/menu/text_links.tpl',
      1 => 1501124180,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9773737935b3372421ce827-70341044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'inline' => 0,
    'submenu' => 0,
    'text_links_id' => 0,
    'menu' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372421fcfa7_66055474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372421fcfa7_66055474')) {function content_5b3372421fcfa7_66055474($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_items_in_line']=='Y') {?>
    <?php $_smarty_tpl->tpl_vars["inline"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["text_links_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['snapping_id'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?>
    <div class="ty-text-links-wrapper">
        <span id="sw_text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-text-links-btn cm-combination visible-phone">
            <i class="ty-icon-short-list"></i>
            <i class="ty-icon-down-micro ty-text-links-btn__arrow"></i>
        </span>
    <?php }?>

        <ul <?php if (!$_smarty_tpl->tpl_vars['submenu']->value) {?>id="text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ty-text-links<?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?> cm-popup-box ty-text-links_show_inline<?php }?>">
            <?php  $_smarty_tpl->tpl_vars["menu"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menu"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menu"]->key => $_smarty_tpl->tpl_vars["menu"]->value) {
$_smarty_tpl->tpl_vars["menu"]->_loop = true;
?>
                <li class="ty-text-links__item ty-level-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['menu']->value['level'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> ty-text-links__active<?php }
if ($_smarty_tpl->tpl_vars['menu']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['class'], ENT_QUOTES, 'ISO-8859-1');
}
if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value&&$_smarty_tpl->tpl_vars['menu']->value['subitems']) {?> ty-text-links__subitems<?php }?>">
                    <a class="ty-text-links__a" <?php if ($_smarty_tpl->tpl_vars['menu']->value['href']) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['menu']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['item'], ENT_QUOTES, 'ISO-8859-1');?>
</a> 
                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['subitems']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/text_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['menu']->value['subitems'],'submenu'=>true), 0);?>

                    <?php }?>
                </li>
            <?php } ?>
        </ul>

    <?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?>
    </div>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/text_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/text_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_items_in_line']=='Y') {?>
    <?php $_smarty_tpl->tpl_vars["inline"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["text_links_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['snapping_id'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?>
    <div class="ty-text-links-wrapper">
        <span id="sw_text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-text-links-btn cm-combination visible-phone">
            <i class="ty-icon-short-list"></i>
            <i class="ty-icon-down-micro ty-text-links-btn__arrow"></i>
        </span>
    <?php }?>

        <ul <?php if (!$_smarty_tpl->tpl_vars['submenu']->value) {?>id="text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ty-text-links<?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?> cm-popup-box ty-text-links_show_inline<?php }?>">
            <?php  $_smarty_tpl->tpl_vars["menu"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menu"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menu"]->key => $_smarty_tpl->tpl_vars["menu"]->value) {
$_smarty_tpl->tpl_vars["menu"]->_loop = true;
?>
                <li class="ty-text-links__item ty-level-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['menu']->value['level'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> ty-text-links__active<?php }
if ($_smarty_tpl->tpl_vars['menu']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['class'], ENT_QUOTES, 'ISO-8859-1');
}
if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value&&$_smarty_tpl->tpl_vars['menu']->value['subitems']) {?> ty-text-links__subitems<?php }?>">
                    <a class="ty-text-links__a" <?php if ($_smarty_tpl->tpl_vars['menu']->value['href']) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['menu']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['item'], ENT_QUOTES, 'ISO-8859-1');?>
</a> 
                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['subitems']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/text_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['menu']->value['subitems'],'submenu'=>true), 0);?>

                    <?php }?>
                </li>
            <?php } ?>
        </ul>

    <?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?>
    </div>
    <?php }?>
<?php }
}?><?php }} ?>
