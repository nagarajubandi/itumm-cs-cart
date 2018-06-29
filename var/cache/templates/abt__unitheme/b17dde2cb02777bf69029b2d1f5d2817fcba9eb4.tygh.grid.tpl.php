<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:19
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/block_manager/render/grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3150279185b33723fa0e364-01076301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b17dde2cb02777bf69029b2d1f5d2817fcba9eb4' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/views/block_manager/render/grid.tpl',
      1 => 1525364906,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3150279185b33723fa0e364-01076301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'parent_grid' => 0,
    'grid' => 0,
    'content' => 0,
    'fluid_width' => 0,
    'width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33723fa27809_89881446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33723fa27809_89881446')) {function content_5b33723fa27809_89881446($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>
	<?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width']>0) {?>
		<?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable(fn_get_grid_fluid_width($_smarty_tpl->tpl_vars['layout_data']->value['width'],$_smarty_tpl->tpl_vars['parent_grid']->value['width'],$_smarty_tpl->tpl_vars['grid']->value['width']), null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['grid']->value['width'], null, 0);?>
	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="A"&&$_smarty_tpl->tpl_vars['content']->value) {?>

	<?php if ($_smarty_tpl->tpl_vars['grid']->value['parent_id']==0) {?>
		<?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="container-fluid-row<?php if ($_smarty_tpl->tpl_vars['grid']->value['extended']=="E") {?> container-fluid-row-full-width<?php }
if ($_smarty_tpl->tpl_vars['grid']->value['extended']=="F") {?> container-fluid-row-no-limit<?php }
if ($_smarty_tpl->tpl_vars['grid']->value['extended']!="O") {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');
}?>"><?php }?>
	<?php }?>
	
			<?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
				<?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['fluid_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] : $tmp), null, 0);?>
				<div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'ISO-8859-1');
}?> <?php if ($_smarty_tpl->tpl_vars['grid']->value['extended']!="E"&&$_smarty_tpl->tpl_vars['grid']->value['extended']!="F") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');
}?>">
                    <?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']=='Y') {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['content']->value), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                    <?php }?>
				</div>
			<?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>
		
	<?php if ($_smarty_tpl->tpl_vars['grid']->value['parent_id']==0) {?>
		<?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>
	<?php }?>
<?php }?>
<?php }} ?>
