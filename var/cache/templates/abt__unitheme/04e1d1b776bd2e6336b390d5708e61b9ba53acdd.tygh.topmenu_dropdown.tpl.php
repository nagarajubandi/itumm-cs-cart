<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:19
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/blocks/topmenu_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8954780085b33723f8027a4-78536433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e1d1b776bd2e6336b390d5708e61b9ba53acdd' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/blocks/topmenu_dropdown.tpl',
      1 => 1525364906,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8954780085b33723f8027a4-78536433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'item1' => 0,
    'block' => 0,
    'item1_url' => 0,
    'unique_elm_id' => 0,
    'childs' => 0,
    'subitems_count' => 0,
    'divider' => 0,
    'name' => 0,
    'cat_image' => 0,
    'item2' => 0,
    'item_url2' => 0,
    'cols' => 0,
    'dropdown_class' => 0,
    'rows' => 0,
    'splitted_categories' => 0,
    'row' => 0,
    'item2_url' => 0,
    'Viewlimit' => 0,
    'item3' => 0,
    'item3_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33723f8c0150_58374831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33723f8c0150_58374831')) {function content_5b33723f8c0150_58374831($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_math')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_split')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('catalog_products','text_topmenu_view_more','more','text_topmenu_more','catalog_products','text_topmenu_view_more','more','text_topmenu_more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <ul class="ty-menu__items cm-responsive-menu">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<li class="ty-menu__item ty-menu__menu-btn visible-phone">
		    <a class="ty-menu__item-link" onclick="$('.cat-menu-horizontal .ty-menu__items').toggleClass('open');">
		        <i class="ty-icon-short-list"></i>
		        <span><?php echo $_smarty_tpl->__("catalog_products");?>
</span>
		    </a>
		</li>

        <?php  $_smarty_tpl->tpl_vars["item1"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item1"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item1"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item1"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["item1"]->key => $_smarty_tpl->tpl_vars["item1"]->value) {
$_smarty_tpl->tpl_vars["item1"]->_loop = true;
 $_smarty_tpl->tpl_vars["item1"]->iteration++;
 $_smarty_tpl->tpl_vars["item1"]->last = $_smarty_tpl->tpl_vars["item1"]->iteration === $_smarty_tpl->tpl_vars["item1"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item1"]['last'] = $_smarty_tpl->tpl_vars["item1"]->last;
?>
            <?php $_smarty_tpl->tpl_vars["cat_image"] = new Smarty_variable(fn_get_image_pairs($_smarty_tpl->tpl_vars['item1']->value['category_id'],'category','M',true,true), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["item1_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['item1_url']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable("topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['unique_elm_id']->value), null, 0);?>

            <?php $_smarty_tpl->tpl_vars["subitems_count"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["cols"] = new Smarty_variable(0, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['subitems_count']->value) {?>
                <?php echo smarty_function_math(array('assign'=>"divider",'equation'=>"ceil(x / 3)",'x'=>$_smarty_tpl->tpl_vars['subitems_count']->value),$_smarty_tpl);?>

                <?php echo smarty_function_math(array('assign'=>"cols",'equation'=>"ceil(x / y)",'x'=>$_smarty_tpl->tpl_vars['subitems_count']->value,'y'=>$_smarty_tpl->tpl_vars['divider']->value),$_smarty_tpl);?>

            <?php }?>
            <li class="ty-menu__item <?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> ty-menu__item-nodrop<?php } else { ?> cm-menu-item-responsive<?php }?> <?php if ($_smarty_tpl->tpl_vars['item1']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }?> first-lvl<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item1']['last']) {?> last<?php }?> <?php if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'ISO-8859-1');
}?> ">
                    <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                        <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                            <i class="ty-menu__icon-open ty-icon-down-open"></i>
                            <i class="ty-menu__icon-hide ty-icon-up-open"></i>
                        </a>
                    <?php }?>
                    <a <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ty-menu__item-link a-first-lvl">
                        <div class="menu-lvl-ctn">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><i class="icon-right-dir"></i><?php }?>
                        </div>
                    </a>
                <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>

                    <?php if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)) {?>
                    
                        <div class="ty-menu__submenu">
                            <ul class="ty-menu__submenu-items ty-menu__submenu-items-simple <?php if ($_smarty_tpl->tpl_vars['cat_image']->value['pair_id']) {?>with-pic <?php }?> cm-responsive-menu-submenu">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                                <?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars["item_url2"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                    <li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>">
                                        <a class="ty-menu__submenu-link" <?php if ($_smarty_tpl->tpl_vars['item_url2']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_url2']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'ISO-8859-1');?>
</a>
                                    </li>
                                <?php } ?>

                                <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>
                                    <li class="ty-menu__submenu-item ty-menu__submenu-alt-link">
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                                           class="ty-menu__submenu-alt-link"><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a>
                                    </li>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['cat_image']->value['pair_id']) {?>
                                    <div class="category-image">
                                    <a <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['cat_image']->value['detailed']), 0);?>
</a>
                                    </div>
                                <?php }?>

                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                 <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['cols']->value==1) {?>
                            <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-1column", null, 0);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cols']->value==5) {?>
                            <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-fullwidth", null, 0);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cols']->value==6) {?>
                            <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-fullwidth", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-".((string)$_smarty_tpl->tpl_vars['cols']->value)."columns", null, 0);?>
                        <?php }?>
                        <div class="ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <ul class="ty-menu__submenu-items cm-responsive-menu-submenu dropdown-column-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['cat_image']->value['pair_id']) {?>with-pic <?php }?> clearfix">

                                <?php $_smarty_tpl->tpl_vars["rows"] = new Smarty_variable(ceil(((count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]))/3)), null, 0);?>
		                        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_categories",'skip_complete'=>true),$_smarty_tpl);?>


		                        	<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value) {
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
									<ul class="ty-menu__submenu-col">

                                    <?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
?>

                                    	<?php $_smarty_tpl->tpl_vars['Viewlimit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_third_level_view'])===null||$tmp==='' ? 5 : $tmp), null, 0);?>

                                        <li class="ty-top-mine__submenu-col">

                                            <?php $_smarty_tpl->tpl_vars["item2_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                            <div class="ty-menu__submenu-item-header <?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-header-active<?php }?>">
                                                <a<?php if ($_smarty_tpl->tpl_vars['item2_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ty-menu__submenu-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'ISO-8859-1');?>
</a>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                                <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                                                    <i class="ty-menu__icon-open ty-icon-down-open"></i>
                                                    <i class="ty-menu__icon-hide ty-icon-up-open"></i>
                                                </a>
                                            <?php }?>
                                            <div class="ty-menu__submenu">
                                                <ul class="ty-menu__submenu-list <?php if (count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>hiddenCol <?php }?>cm-responsive-menu-submenu" <?php if (count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Viewlimit']->value*19, ENT_QUOTES, 'ISO-8859-1');?>
px;"<?php }?>>
                                                    <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                        <?php  $_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value) {
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
?>
                                                            <?php $_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                                            <li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>">
                                                                <a<?php if ($_smarty_tpl->tpl_vars['item3_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ty-menu__submenu-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'ISO-8859-1');?>
</a>
                                                            </li>
                                                        <?php } ?>
                                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                    <?php }?>
                                                </ul>
                                               	<?php if (count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>
                                                <a href="javascript:void(0);" onMouseOver="$(this).prev().addClass('view');$(this).addClass('hidden');" class="ty-menu__submenu-link-more"><?php echo $_smarty_tpl->__("more");?>
 <i class="ty-icon-plus-circle"></i></a>
                                                <?php }?>
                                            </div>
                                        </li>
                                    <?php } ?>

                                    </ul>
                                    <?php } ?>

                                    <?php if (!$_smarty_tpl->tpl_vars['cat_image']->value['pair_id']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>
                                    <li class="last-delim-spacer"></li>
                                    <li class="ty-menu__submenu-dropdown-bottom">
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a>
                                    </li>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['cat_image']->value['pair_id']) {?>
                                        <div class="category-image">
                                        <a <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['cat_image']->value['detailed']), 0);?>
</a>
                                        </div>
                                    <?php }?>

                                </ul>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                    <?php }?>

                <?php }?>
            </li>
        <?php } ?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/topmenu_dropdown.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/topmenu_dropdown.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <ul class="ty-menu__items cm-responsive-menu">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<li class="ty-menu__item ty-menu__menu-btn visible-phone">
		    <a class="ty-menu__item-link" onclick="$('.cat-menu-horizontal .ty-menu__items').toggleClass('open');">
		        <i class="ty-icon-short-list"></i>
		        <span><?php echo $_smarty_tpl->__("catalog_products");?>
</span>
		    </a>
		</li>

        <?php  $_smarty_tpl->tpl_vars["item1"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item1"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item1"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item1"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["item1"]->key => $_smarty_tpl->tpl_vars["item1"]->value) {
$_smarty_tpl->tpl_vars["item1"]->_loop = true;
 $_smarty_tpl->tpl_vars["item1"]->iteration++;
 $_smarty_tpl->tpl_vars["item1"]->last = $_smarty_tpl->tpl_vars["item1"]->iteration === $_smarty_tpl->tpl_vars["item1"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item1"]['last'] = $_smarty_tpl->tpl_vars["item1"]->last;
?>
            <?php $_smarty_tpl->tpl_vars["cat_image"] = new Smarty_variable(fn_get_image_pairs($_smarty_tpl->tpl_vars['item1']->value['category_id'],'category','M',true,true), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["item1_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['item1_url']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable("topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['unique_elm_id']->value), null, 0);?>

            <?php $_smarty_tpl->tpl_vars["subitems_count"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["cols"] = new Smarty_variable(0, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['subitems_count']->value) {?>
                <?php echo smarty_function_math(array('assign'=>"divider",'equation'=>"ceil(x / 3)",'x'=>$_smarty_tpl->tpl_vars['subitems_count']->value),$_smarty_tpl);?>

                <?php echo smarty_function_math(array('assign'=>"cols",'equation'=>"ceil(x / y)",'x'=>$_smarty_tpl->tpl_vars['subitems_count']->value,'y'=>$_smarty_tpl->tpl_vars['divider']->value),$_smarty_tpl);?>

            <?php }?>
            <li class="ty-menu__item <?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> ty-menu__item-nodrop<?php } else { ?> cm-menu-item-responsive<?php }?> <?php if ($_smarty_tpl->tpl_vars['item1']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }?> first-lvl<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item1']['last']) {?> last<?php }?> <?php if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'ISO-8859-1');
}?> ">
                    <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                        <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                            <i class="ty-menu__icon-open ty-icon-down-open"></i>
                            <i class="ty-menu__icon-hide ty-icon-up-open"></i>
                        </a>
                    <?php }?>
                    <a <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ty-menu__item-link a-first-lvl">
                        <div class="menu-lvl-ctn">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><i class="icon-right-dir"></i><?php }?>
                        </div>
                    </a>
                <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>

                    <?php if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)) {?>
                    
                        <div class="ty-menu__submenu">
                            <ul class="ty-menu__submenu-items ty-menu__submenu-items-simple <?php if ($_smarty_tpl->tpl_vars['cat_image']->value['pair_id']) {?>with-pic <?php }?> cm-responsive-menu-submenu">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                                <?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars["item_url2"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                    <li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>">
                                        <a class="ty-menu__submenu-link" <?php if ($_smarty_tpl->tpl_vars['item_url2']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_url2']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'ISO-8859-1');?>
</a>
                                    </li>
                                <?php } ?>

                                <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>
                                    <li class="ty-menu__submenu-item ty-menu__submenu-alt-link">
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
                                           class="ty-menu__submenu-alt-link"><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a>
                                    </li>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['cat_image']->value['pair_id']) {?>
                                    <div class="category-image">
                                    <a <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['cat_image']->value['detailed']), 0);?>
</a>
                                    </div>
                                <?php }?>

                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                 <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['cols']->value==1) {?>
                            <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-1column", null, 0);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cols']->value==5) {?>
                            <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-fullwidth", null, 0);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cols']->value==6) {?>
                            <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-fullwidth", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars["dropdown_class"] = new Smarty_variable("dropdown-".((string)$_smarty_tpl->tpl_vars['cols']->value)."columns", null, 0);?>
                        <?php }?>
                        <div class="ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <ul class="ty-menu__submenu-items cm-responsive-menu-submenu dropdown-column-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['cat_image']->value['pair_id']) {?>with-pic <?php }?> clearfix">

                                <?php $_smarty_tpl->tpl_vars["rows"] = new Smarty_variable(ceil(((count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]))/3)), null, 0);?>
		                        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_categories",'skip_complete'=>true),$_smarty_tpl);?>


		                        	<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value) {
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
									<ul class="ty-menu__submenu-col">

                                    <?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
?>

                                    	<?php $_smarty_tpl->tpl_vars['Viewlimit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_third_level_view'])===null||$tmp==='' ? 5 : $tmp), null, 0);?>

                                        <li class="ty-top-mine__submenu-col">

                                            <?php $_smarty_tpl->tpl_vars["item2_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                            <div class="ty-menu__submenu-item-header <?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-header-active<?php }?>">
                                                <a<?php if ($_smarty_tpl->tpl_vars['item2_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ty-menu__submenu-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'ISO-8859-1');?>
</a>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                                <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                                                    <i class="ty-menu__icon-open ty-icon-down-open"></i>
                                                    <i class="ty-menu__icon-hide ty-icon-up-open"></i>
                                                </a>
                                            <?php }?>
                                            <div class="ty-menu__submenu">
                                                <ul class="ty-menu__submenu-list <?php if (count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>hiddenCol <?php }?>cm-responsive-menu-submenu" <?php if (count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Viewlimit']->value*19, ENT_QUOTES, 'ISO-8859-1');?>
px;"<?php }?>>
                                                    <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                        <?php  $_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value) {
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
?>
                                                            <?php $_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
                                                            <li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>">
                                                                <a<?php if ($_smarty_tpl->tpl_vars['item3_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ty-menu__submenu-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'ISO-8859-1');?>
</a>
                                                            </li>
                                                        <?php } ?>
                                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                    <?php }?>
                                                </ul>
                                               	<?php if (count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>
                                                <a href="javascript:void(0);" onMouseOver="$(this).prev().addClass('view');$(this).addClass('hidden');" class="ty-menu__submenu-link-more"><?php echo $_smarty_tpl->__("more");?>
 <i class="ty-icon-plus-circle"></i></a>
                                                <?php }?>
                                            </div>
                                        </li>
                                    <?php } ?>

                                    </ul>
                                    <?php } ?>

                                    <?php if (!$_smarty_tpl->tpl_vars['cat_image']->value['pair_id']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>
                                    <li class="last-delim-spacer"></li>
                                    <li class="ty-menu__submenu-dropdown-bottom">
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a>
                                    </li>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['cat_image']->value['pair_id']) {?>
                                        <div class="category-image">
                                        <a <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['cat_image']->value['detailed']), 0);?>
</a>
                                        </div>
                                    <?php }?>

                                </ul>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>
                    <?php }?>

                <?php }?>
            </li>
        <?php } ?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
