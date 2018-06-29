<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 16:57:45
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/payment_order_limit/hooks/payments/update.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2566385985b3374b1ba5712-42936608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40d8418c45f0f04bca40e7983159899669e61c40' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/payment_order_limit/hooks/payments/update.post.tpl',
      1 => 1524178292,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2566385985b3374b1ba5712-42936608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'payment' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b3374b1bac357_06900371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3374b1bac357_06900371')) {function content_5b3374b1bac357_06900371($_smarty_tpl) {?><div class="control-group">
    <label class="control-label" for="elm_payment_limit_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars(_("Order Total Limit"), ENT_QUOTES, 'ISO-8859-1');?>
:</label>
    <div class="controls">
        <input id="elm_payment_limit_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" type="text" name="payment_data[min_order_limit]" class="input-mini" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['min_order_limit'], ENT_QUOTES, 'ISO-8859-1');?>
" size="4"> <?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
 - <input type="text" name="payment_data[max_order_limit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['max_order_limit'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-mini" size="4"> <?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>

    </div>
</div><?php }} ?>
