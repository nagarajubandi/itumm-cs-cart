<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 17:42:35
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/logs/components/logs_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14094128565b34d0b3ae3293-59499245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a12acdbf48ee478f6fa1bc766c87be53e0863019' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/logs/components/logs_search_form.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14094128565b34d0b3ae3293-59499245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'log_types' => 0,
    'o' => 0,
    'k' => 0,
    'v' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34d0b3b069b4_42359360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34d0b3b069b4_42359360')) {function content_5b34d0b3b069b4_42359360($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('search','user','type','action','all','all'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" name="logs_form" method="get">
    <input type="hidden" name="object" value="<?php echo htmlspecialchars($_REQUEST['object'], ENT_QUOTES, 'ISO-8859-1');?>
">

    <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'extra'=>'','display'=>"form",'button'=>"false"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    
    <?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
    
    <div class="group form-horizontal">
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("user");?>
:</label>
            <div class="controls">
                <input type="text" name="q_user" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q_user'], ENT_QUOTES, 'ISO-8859-1');?>
">
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("type");?>
/<?php echo $_smarty_tpl->__("action");?>
:</label>
            <div class="controls">
                <select id="q_type" name="q_type" onchange="fn_logs_build_options();">
                    <option value=""<?php if (!$_smarty_tpl->tpl_vars['search']->value['q_type']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
                    <?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['type'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['search']->value['q_type']==$_smarty_tpl->tpl_vars['o']->value['type']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                    <?php } ?>
                </select>
                &nbsp;&nbsp;
                <select id="q_action" class="hidden" name="q_action">
                </select>
            </div>
        </div>
    </div>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"logs:search_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"logs:search_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"logs:search_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    
    <?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'dispatch'=>"logs.manage",'view_type'=>"logs"), 0);?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    var types = new Array();
    <?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
?>
    types['<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['type'], ENT_QUOTES, 'ISO-8859-1');?>
'] = new Array();
    <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['o']->value['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
    types['<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['type'], ENT_QUOTES, 'ISO-8859-1');?>
']['<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
'] = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'ISO-8859-1');?>
';
    <?php } ?>
    <?php } ?>
    
    Tygh.tr('all', '<?php echo strtr($_smarty_tpl->__("all"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    
    
    function fn_logs_build_options(current_action)
    {
        var elm_t = Tygh.$('#q_type');
        var elm_a = Tygh.$('#q_action');
    
        elm_a.html('<option value="">' + Tygh.tr('all') + '</option>');
    
        for (var action in types[elm_t.val()]) {
            elm_a.append('<option value="' + action + '"' + (current_action && current_action == action ? ' selected="selected"' : '') + '>' + types[elm_t.val()][action] + '</option>');
        }
    
        Tygh.$('#q_action').toggleBy((Tygh.$('option', elm_a).length == 1));
    }
    
    
    Tygh.$(document).ready(function() <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>

        fn_logs_build_options('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q_action'], ENT_QUOTES, 'ISO-8859-1');?>
');
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</form>
</div><?php }} ?>
