<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:26
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/hw_modern_backend/hooks/index/main_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21061638315b3372462bc5d5-84098145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db6d930b25747f4af01bdc9b7dbb4b339aba982' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/hw_modern_backend/hooks/index/main_content.post.tpl',
      1 => 1505869340,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21061638315b3372462bc5d5-84098145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hwmb_settings' => 0,
    'runtime' => 0,
    'settings' => 0,
    'name' => 0,
    'layout' => 0,
    'layout_id' => 0,
    'color' => 0,
    'color_id' => 0,
    'bg' => 0,
    'image_data' => 0,
    'bg_id' => 0,
    'font' => 0,
    'config' => 0,
    'return_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3372462f22b7_12924617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3372462f22b7_12924617')) {function content_5b3372462f22b7_12924617($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['hwmb_settings']->value) {?>
<div id="hwmb_settings"<?php if ($_smarty_tpl->tpl_vars['hwmb_settings']->value['open']) {?> class="open"<?php }?>>
	<i class="hwmb-icon-wrench"></i>
	<div class="hwmb_settings_body">
		<h2><a href="<?php echo htmlspecialchars(fn_url("hw_modern_backend.manage"), ENT_QUOTES, 'ISO-8859-1');?>
"><i class="hwmb-icon-wrench"></i> <?php echo $_smarty_tpl->__('hwmb_settings');?>
</a></h2>

		<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company']) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], null, 0);?>
		<?php } else {
$_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], null, 0);
}?>
		<input data-field="store_id" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="hwmb_data" type="hidden">

		<div class="hwmd_acc open hwmd_styles">
			<h3>
				<?php echo $_smarty_tpl->__('hwmb_layouts');?>

				<i class="hwmb-icon-right-dir"></i>
				<i class="hwmb-icon-down-dir"></i>
			</h3>
			<div class="hwmd_acc_body">
				<ul>
				<?php $_smarty_tpl->tpl_vars["layout_id"] = new Smarty_variable(0, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars["layout"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["layout"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hwmb_settings']->value['layouts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["layout"]->key => $_smarty_tpl->tpl_vars["layout"]->value) {
$_smarty_tpl->tpl_vars["layout"]->_loop = true;
?>
					<li data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="hwmd_styles_<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['layout']->value['name']), ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['layout']->value['activated']==1) {?> active<?php }?>"><a href="javascript:void(0)"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li>
					<?php if ($_smarty_tpl->tpl_vars['layout']->value['activated']==1) {
$_smarty_tpl->tpl_vars["layout_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['layout']->value['id'], null, 0);
}?>
				<?php } ?>
				</ul>
				<input data-field="layouts" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="hwmb_data" type="hidden">
			</div>
		</div>

		<div class="hwmd_acc open hwmd_theme_color">
			<h3>
				<?php echo $_smarty_tpl->__('hwmb_colors');?>

				<i class="hwmb-icon-right-dir"></i>
				<i class="hwmb-icon-down-dir"></i>
			</h3>
			<div class="hwmd_acc_body">
				<ul>
				<?php $_smarty_tpl->tpl_vars["color_id"] = new Smarty_variable(0, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars["color"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["color"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hwmb_settings']->value['colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["color"]->key => $_smarty_tpl->tpl_vars["color"]->value) {
$_smarty_tpl->tpl_vars["color"]->_loop = true;
?>
					<li 
						data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
"
						data-color1="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['navbar'], ENT_QUOTES, 'ISO-8859-1');?>
"
						data-color2="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['subnav'], ENT_QUOTES, 'ISO-8859-1');?>
"
						data-color3="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['actions'], ENT_QUOTES, 'ISO-8859-1');?>
"
						data-color4="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['btn_primary_bg'], ENT_QUOTES, 'ISO-8859-1');?>
"
						class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['id'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['color']->value['activated']==1) {?> active<?php }?>"><span style="background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['navbar'], ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
"><i class="hwmb-icon-ok"></i></span></li>
					<?php if ($_smarty_tpl->tpl_vars['color']->value['activated']==1) {
$_smarty_tpl->tpl_vars["color_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['color']->value['id'], null, 0);
}?>
				<?php } ?>
				</ul>
				<input data-field="colors" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="hwmb_data" type="hidden">
			</div>
		</div>			

		<div class="hwmd_acc open hwmd_boxed_bgs">
			<h3>
				<?php echo $_smarty_tpl->__('hwmb_bgs');?>

				<i class="hwmb-icon-right-dir"></i>
				<i class="hwmb-icon-down-dir"></i>
			</h3>
			<div class="hwmd_acc_body">
				<ul>
				<?php $_smarty_tpl->tpl_vars["bg_id"] = new Smarty_variable(0, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars["bg"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bg"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hwmb_settings']->value['bgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bg"]->key => $_smarty_tpl->tpl_vars["bg"]->value) {
$_smarty_tpl->tpl_vars["bg"]->_loop = true;
?>
					<li 
						data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
"
						title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
" 
						<?php if ($_smarty_tpl->tpl_vars['bg']->value['activated']==1) {?> class="active"<?php }?>
						data-color="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg']->value['color'], ENT_QUOTES, 'ISO-8859-1');?>
"
						data-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg']->value['main_pair']['detailed']['http_image_path'], ENT_QUOTES, 'ISO-8859-1');?>
">
					<?php if (!$_smarty_tpl->tpl_vars['bg']->value['main_pair']) {?><span style="background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg']->value['color'], ENT_QUOTES, 'ISO-8859-1');?>
"></span><?php } else { ?>
						<?php $_smarty_tpl->tpl_vars["image_data"] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['bg']->value['main_pair'],30,30), null, 0);?>
						<img  src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
"/>
					<?php }?>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['bg']->value['activated']==1) {
$_smarty_tpl->tpl_vars["bg_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['bg']->value['id'], null, 0);
}?>
				<?php } ?>				
				</ul>
				<input data-field="bgs" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="hwmb_data" type="hidden">
			</div>		
		</div>

		<div class="hwmd_acc open hwmd_fonts">
			<h3>
				<?php echo $_smarty_tpl->__('hwmb_fonts');?>

				<i class="hwmb-icon-right-dir"></i>
				<i class="hwmb-icon-down-dir"></i>
			</h3>
			<div class="hwmd_acc_body">
				<select data-field="fonts" class="hwmb_data_select" id="hwmd_settings_font">
				<?php  $_smarty_tpl->tpl_vars["font"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["font"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hwmb_settings']->value['fonts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["font"]->key => $_smarty_tpl->tpl_vars["font"]->value) {
$_smarty_tpl->tpl_vars["font"]->_loop = true;
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
" data-font="<?php echo htmlspecialchars(fn_hw_modern_backend_font_convert($_smarty_tpl->tpl_vars['font']->value['name']), ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['font']->value['activated']==1) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
				<?php } ?>
				</select>
			</div>
		</div>

		<?php $_smarty_tpl->tpl_vars["return_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
		<a href="<?php echo htmlspecialchars(fn_url("hw_modern_backend.disable?return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><i class="hwmb-icon-cancel"></i> <?php echo $_smarty_tpl->__('hwmb_disable_settings_panel');?>
</a>
	</div>
</div>
<?php }?><?php }} ?>
