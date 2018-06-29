<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 16:26:26
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/categories/components/categories_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18893302375b34bedae52ee3-94206629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc87466bfac574e88557b954d1b4cae955964e8f' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/categories/components/categories_tree.tpl',
      1 => 1527168331,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18893302375b34bedae52ee3-94206629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_id' => 0,
    'categories_tree' => 0,
    'category' => 0,
    'header' => 0,
    'show_all' => 0,
    'expand_all' => 0,
    'shift' => 0,
    'comb_id' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'hide_inputs' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34bedaea9f35_26253546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34bedaea9f35_26253546')) {function content_5b34bedaea9f35_26253546($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_math')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('position_short','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','name','products','status','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','disabled','add_product','edit','category_deletion_side_effects','delete'));
?>
<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
<div class="hidden" id="cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<?php }?>
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["comb_id"] = new Smarty_variable("cat_".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']), null, 0);?>
    <table class="table table-tree table-middle">
        <?php if ($_smarty_tpl->tpl_vars['header']->value&&!$_smarty_tpl->tpl_vars['parent_id']->value) {?>
            <?php $_smarty_tpl->tpl_vars["header"] = new Smarty_variable('', null, 0);?>
            <thead>
            <tr>
                <th width="5%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>fn_get_default_status_filters('',true)), 0);?>
</th>
                <th width="8%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                <th width="54%">
                    <?php if ($_smarty_tpl->tpl_vars['show_all']->value&&!$_REQUEST['b_id']) {?>
                        <div class="pull-left">
                            <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="on_cat" class="cm-combinations<?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>"><span class="icon-caret-right"> </span></span>
                            <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="off_cat" class="cm-combinations<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>"><span class="icon-caret-down"> </span></span>
                        </div>
                    <?php }?>
                    &nbsp;<?php echo $_smarty_tpl->__("name");?>

                </th>
                <th width="12%" class="center"><?php echo $_smarty_tpl->__("products");?>
</th>
                <th width="5%" class="center">&nbsp;</th>
                <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
            </tr>
            </thead>
        <?php }?>
    
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:categories_tree_tr")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:categories_tree_tr"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <tr class="<?php if ($_smarty_tpl->tpl_vars['category']->value['level']>0) {?>multiple-table-row <?php }?>cm-row-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['category']->value['status']), ENT_QUOTES, 'ISO-8859-1');?>
">
            <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['category']->value['level'])===null||$tmp==='' ? "0" : $tmp),'assign'=>"shift"),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['category']->value['company_categories']) {?>
                <?php $_smarty_tpl->tpl_vars["comb_id"] = new Smarty_variable("comp_".((string)$_smarty_tpl->tpl_vars['category']->value['company_id']), null, 0);?>
                <td width="5%">
                    &nbsp;</td>
                <td width="8%">
                    &nbsp;</td>
                <td width="54%">
                    <span style="padding-left: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'ISO-8859-1');?>
px;"><?php if ($_smarty_tpl->tpl_vars['show_all']->value) {?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination <?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>"><span class="icon-caret-right"></span> </span><?php } else { ?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination" onclick="if (!Tygh.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
').children().get(0)) Tygh.$.ceAjax('request', '<?php echo fn_url("categories.manage?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']));?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
result_ids: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
)"> <span class="icon-caret-right"></span></span><?php }?><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value||!$_smarty_tpl->tpl_vars['show_all']->value) {?> hidden<?php }?>"><span class="icon-caret-down"></span></span><span class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'ISO-8859-1');?>
</span></span>
                </td>
                <td width="12%" class="center">
                    &nbsp;</td>
                <td width="10%" class="center">
                    &nbsp;</td>
                <td width="10%" class="right">
                    &nbsp;</td>
            <?php } else { ?>
                <td width="5%">
                    <input type="checkbox" name="category_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="checkbox cm-item  cm-item-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['category']->value['status']), ENT_QUOTES, 'ISO-8859-1');?>
" /></td>
                <td width="8%">
                    <input type="text" name="categories_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'ISO-8859-1');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['position'], ENT_QUOTES, 'ISO-8859-1');?>
" size="3" class="input-micro input-hidden" /></td>
                <td width="54%">
                    <span style="padding-left: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'ISO-8859-1');?>
px;"><?php if ($_smarty_tpl->tpl_vars['category']->value['has_children']||$_smarty_tpl->tpl_vars['category']->value['subcategories']) {
if ($_smarty_tpl->tpl_vars['show_all']->value) {?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination <?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>" ><span class="icon-caret-right"> </span></span><?php } else { ?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination" onclick="if (!Tygh.$('#cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'ISO-8859-1');?>
').children().get(0)) Tygh.$.ceAjax('request', '<?php echo fn_url("categories.manage?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']));?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
result_ids: 'cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'ISO-8859-1');?>
'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
)"><span class="icon-caret-right"> </span></span><?php }?><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value||!$_smarty_tpl->tpl_vars['show_all']->value) {?> hidden<?php }?>" ><span class="icon-caret-down"> </span></span><?php }?><a class="row-status <?php if ($_smarty_tpl->tpl_vars['category']->value['status']=="N") {?> manage-root-item-disabled<?php }
if (!$_smarty_tpl->tpl_vars['category']->value['subcategories']) {?> normal<?php }?>" href="<?php echo htmlspecialchars(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"<?php if (!$_smarty_tpl->tpl_vars['category']->value['subcategories']) {?> style="padding-left: 14px;"<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'ISO-8859-1');?>
</a><?php if ($_smarty_tpl->tpl_vars['category']->value['status']=="N") {?>&nbsp;<span class="small-note">-&nbsp;[<?php echo $_smarty_tpl->__("disabled");?>
]</span><?php }?></span>
                </td>
                <td width="12%" class="center">
                    <a href="<?php echo htmlspecialchars(fn_url("products.manage?cid=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" class="badge"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['product_count'], ENT_QUOTES, 'ISO-8859-1');?>
</a>
                </td>
                <td width="10%" class="center">
                    <div class="hidden-tools">
                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("add_product"),'href'=>"products.add?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])));?>
</li>
                            <?php if (!$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
                            <li class="divider"></li>
                            <?php }?>
                            <?php if (!($_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?> <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])));?>
</li><?php }?>
                            <li><?php ob_start();
echo $_smarty_tpl->__("category_deletion_side_effects");
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_tmp2),'text'=>$_smarty_tpl->__("delete"),'href'=>"categories.delete?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']),'method'=>"POST"));?>
</li>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items']));?>

                    </div>
                </td>
                <td width="10%" class="nowrap right">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['category']->value['category_id'],'status'=>$_smarty_tpl->tpl_vars['category']->value['status'],'hidden'=>true,'object_id_name'=>"category_id",'table'=>"categories",'non_editable'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0);?>

                </td>
            <?php }?>
        </tr>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:categories_tree_tr"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </table>
    
    <?php if ($_smarty_tpl->tpl_vars['category']->value['has_children']||$_smarty_tpl->tpl_vars['category']->value['subcategories']) {?>
        <div class="<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            <?php if ($_smarty_tpl->tpl_vars['category']->value['subcategories']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categories_tree'=>$_smarty_tpl->tpl_vars['category']->value['subcategories'],'parent_id'=>false), 0);?>

            <?php }?>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
    <?php }?>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?><!--cat_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div><?php }?>
<?php }} ?>
