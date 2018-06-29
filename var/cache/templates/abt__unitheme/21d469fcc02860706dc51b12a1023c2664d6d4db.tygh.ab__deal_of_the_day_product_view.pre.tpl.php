<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:47:37
         compiled from "/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17348259955b33725103d274-50511832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21d469fcc02860706dc51b12a1023c2664d6d4db' => 
    array (
      0 => '/var/www/html/itumm.com/design/themes/abt__unitheme/templates/addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl',
      1 => 1525365876,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17348259955b33725103d274-50511832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'promotion' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b33725105f895_77594701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b33725105f895_77594701')) {function content_5b33725105f895_77594701($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->tpl_vars['promotion'] = new Smarty_variable(fn_get_promotion_data(key($_smarty_tpl->tpl_vars['product']->value['promotions'])), null, 0);?>
    <div class="ab__deal_of_the_day">
    		<div class="<?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?>col1<?php }?>">
	        <div class="action-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
	        <div class="promotion-descr"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>
</div>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?>
        <div class="col2">
            <b class="time-left"><?php echo $_smarty_tpl->__('ab__dotd_time_left');?>
:</b>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <?php }?>
   
        <div class="actions-link">
	        <?php if (count($_smarty_tpl->tpl_vars['product']->value['promotions'])>1) {?>
	        	<i class="cm-tooltip ty-icon-help-circle" title="<?php echo $_smarty_tpl->__('ab__dotd.all_promotions.title');?>
"></i>
	        	<a class="also-in-promos-link cm-external-click" 
	        	data-ca-scroll="content_ab__deal_of_the_day" 
	        	data-ca-external-click-id="ab__deal_of_the_day"> <?php echo $_smarty_tpl->__('ab__dotd.all_promotions');?>
</a>
	        <?php }?>
	        	<a class="ty-float-right" href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" title="" target="_blank"><?php echo $_smarty_tpl->__('ab__dotd.detailed');?>
→</a>
				</div>
        
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/hooks/products/ab__deal_of_the_day_product_view.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->tpl_vars['promotion'] = new Smarty_variable(fn_get_promotion_data(key($_smarty_tpl->tpl_vars['product']->value['promotions'])), null, 0);?>
    <div class="ab__deal_of_the_day">
    		<div class="<?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?>col1<?php }?>">
	        <div class="action-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
	        <div class="promotion-descr"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>
</div>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?>
        <div class="col2">
            <b class="time-left"><?php echo $_smarty_tpl->__('ab__dotd_time_left');?>
:</b>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <?php }?>
   
        <div class="actions-link">
	        <?php if (count($_smarty_tpl->tpl_vars['product']->value['promotions'])>1) {?>
	        	<i class="cm-tooltip ty-icon-help-circle" title="<?php echo $_smarty_tpl->__('ab__dotd.all_promotions.title');?>
"></i>
	        	<a class="also-in-promos-link cm-external-click" 
	        	data-ca-scroll="content_ab__deal_of_the_day" 
	        	data-ca-external-click-id="ab__deal_of_the_day"> <?php echo $_smarty_tpl->__('ab__dotd.all_promotions');?>
</a>
	        <?php }?>
	        	<a class="ty-float-right" href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" title="" target="_blank"><?php echo $_smarty_tpl->__('ab__dotd.detailed');?>
→</a>
				</div>
        
    </div>
<?php }
}?><?php }} ?>
