<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 18:50:09
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/snippets/components/adv_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19394299275b34e089eb5a47-16064792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c43883feeaac00c12aabff9546eab3b74ff2b248' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/snippets/components/adv_buttons.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19394299275b34e089eb5a47-16064792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return_url' => 0,
    'return_url_escape' => 0,
    'result_ids' => 0,
    'type' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34e089ebe708_81259090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34e089ebe708_81259090')) {function content_5b34e089ebe708_81259090($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_snippet','add_snippet'));
?>
<?php if (fn_check_permissions("snippets","update","admin","POST")) {?>
    <?php $_smarty_tpl->tpl_vars["return_url_escape"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['return_url']->value), null, 0);?>

    <div class="cm-tab-tools hidden" id="tools_snippets">

        <?php ob_start();
echo $_smarty_tpl->__("add_snippet");
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('method'=>"POST",'id'=>"add_snippet",'text'=>$_tmp3,'title'=>$_smarty_tpl->__("add_snippet"),'act'=>"general",'icon'=>"icon-plus",'href'=>"snippets.update?snippet_id=0&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['result_ids']->value)."&type=".((string)$_smarty_tpl->tpl_vars['type']->value)."&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value)), 0);?>

    </div>
<?php }?><?php }} ?>
