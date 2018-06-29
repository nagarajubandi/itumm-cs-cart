<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 19:05:22
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/order_management/components/discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13971014415b34e41a3ccda2-32771470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc4249bd52184f27c0d007d292699030e97d51b5' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/order_management/components/discounts.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13971014415b34e41a3ccda2-32771470',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34e41a3d6e69_31759172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34e41a3d6e69_31759172')) {function content_5b34e41a3d6e69_31759172($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discounts','discount_coupon_code'));
?>
<div class="orders-discounts">
	<h4><?php echo $_smarty_tpl->__("discounts");?>
</h4>
	<div class="orders-discount">
	    <label for="coupon_code"><?php echo $_smarty_tpl->__("discount_coupon_code");?>
:</label>
	    <input type="text" name="coupon_code" id="coupon_code" class="input-text-large" size="30" value="" />
	</div>
</div><?php }} ?>
