<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:20
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3510015345b3372406660d3-68281694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4b171c04a98e5911c0149fe299ee9bdfd6a9f86' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/block_manager/render/container.tpl',
      1 => 1525364906,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3510015345b3372406660d3-68281694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'ab__ut_full_width' => 0,
    'ab__ut_hidden_filter' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33724066c949_24139360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33724066c949_24139360')) {function content_5b33724066c949_24139360($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');?>

    <?php if (strpos($_smarty_tpl->tpl_vars['container']->value['user_class'],"categories_grid")&&$_smarty_tpl->tpl_vars['ab__ut_full_width']->value) {?>full_width<?php }?>
    <?php if (strpos($_smarty_tpl->tpl_vars['container']->value['user_class'],"categories_grid")&&$_smarty_tpl->tpl_vars['ab__ut_hidden_filter']->value) {?>side_hidden<?php }?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
