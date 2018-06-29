<?php /* Smarty version Smarty-3.1.21, created on 2018-06-28 19:05:22
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/sd_affiliate/hooks/order_management/totals_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10282031235b34e41a430ff0-19897912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fbaf061ab8b2776e4c42fec5192333cfa1edd03' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/sd_affiliate/hooks/order_management/totals_extra.post.tpl',
      1 => 1494628788,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10282031235b34e41a430ff0-19897912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b34e41a442c08_18195856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b34e41a442c08_18195856')) {function content_5b34e41a442c08_18195856($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('affiliate','affiliate_code'));
?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['affiliate']['partner_id']) {?>
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("affiliate");?>
:</label>
    <div class="controls">
    	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['affiliate']['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['affiliate']['lastname'], ENT_QUOTES, 'ISO-8859-1');?>

    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']&&$_smarty_tpl->tpl_vars['cart']->value['affiliate']['is_payouts']!="Y") {?>
<div class="control-group">
    <label class="control-label" for="affiliate_code"><?php echo $_smarty_tpl->__("affiliate_code");?>
:</label>
    <div class="controls">
    	<input type="text" name="affiliate_code" id="affiliate_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['affiliate']['code'], ENT_QUOTES, 'ISO-8859-1');?>
" size="10" maxlength="10" />
    </div>
</div>
<?php }?><?php }} ?>
