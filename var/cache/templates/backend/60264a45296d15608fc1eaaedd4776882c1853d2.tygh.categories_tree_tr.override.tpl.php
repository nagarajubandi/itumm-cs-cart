<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 16:26:26
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/vendor_plans/hooks/categories/categories_tree_tr.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16261262285b34bedaf12ba8-78388456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60264a45296d15608fc1eaaedd4776882c1853d2' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/vendor_plans/hooks/categories/categories_tree_tr.override.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16261262285b34bedaf12ba8-78388456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'shift' => 0,
    'show_all' => 0,
    'comb_id' => 0,
    'expand_all' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34bedaf28619_33620976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34bedaf28619_33620976')) {function content_5b34bedaf28619_33620976($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/itumm.com/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','disabled'));
?>
<?php if ($_smarty_tpl->tpl_vars['category']->value['disabled']) {?>
    <tbody>
    <tr class="<?php if ($_smarty_tpl->tpl_vars['category']->value['level']>0) {?>multiple-table-row <?php }?>cm-row-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['category']->value['status']), ENT_QUOTES, 'ISO-8859-1');?>
">
        <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['category']->value['level'])===null||$tmp==='' ? "0" : $tmp),'assign'=>"shift"),$_smarty_tpl);?>

        <td width="5%">&nbsp;</td>
        <td width="8%">&nbsp;</td>
        <td width="54%">
            <span style="padding-left: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'ISO-8859-1');?>
px;"><?php if ($_smarty_tpl->tpl_vars['category']->value['has_children']||$_smarty_tpl->tpl_vars['category']->value['subcategories']) {
if ($_smarty_tpl->tpl_vars['show_all']->value) {?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination <?php if ($_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>" /><span class="icon-caret-right"> </span></span><?php } else { ?><span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="icon-caret-down cm-combination" onclick="if (!Tygh.$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
').children().get(0)) Tygh.$.ceAjax('request', '<?php echo fn_url("categories.manage?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']));?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
result_ids: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
)"><span class="icon-caret-right"> </span></span><?php }?><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comb_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value||!$_smarty_tpl->tpl_vars['show_all']->value) {?> hidden<?php }?>"><span class="icon-caret-down"></span></span><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['category']->value['status']=="N") {?>&nbsp;<span class="small-note">-&nbsp;[<?php echo $_smarty_tpl->__("disabled");?>
]</span><?php }?></span>
        </td>
        <td width="12%" class="center">&nbsp;</td>
        <td width="5%" class="center">&nbsp;</td>
        <td width="10%" class="right">&nbsp;</td>
    </tr>
    </tbody>
<?php }?>
<?php }} ?>
