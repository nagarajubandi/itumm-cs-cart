<?php /* Smarty version Smarty-3.1.21, created on 2018-06-27 17:34:56
         compiled from "/var/www/html/itumm.com/design/backend/templates/addons/rma/hooks/orders/totals.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19651155905b337d68bb0d91-87462818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75946c9028c5d690cfcceb09cfc5e7dc32e78045' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/addons/rma/hooks/orders/totals.pre.tpl',
      1 => 1498580732,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19651155905b337d68bb0d91-87462818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337d68bbf669_95008255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337d68bbf669_95008255')) {function content_5b337d68bbf669_95008255($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('sku','returned_product','amount','subtotal','free'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['returned_products']) {?>
<table width="100%" class="table">
    <tr>
        <th width="5%"><?php echo $_smarty_tpl->__("sku");?>
</th>
        <th><?php echo $_smarty_tpl->__("returned_product");?>
</th>
        <th width="5%"><?php echo $_smarty_tpl->__("amount");?>
</th>
        <th width="7%" class="rigth"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['returned_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
?>
    <tr class="top">
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
        <td>
            <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product'], ENT_QUOTES, 'ISO-8859-1');?>
</a>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:returned_product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:returned_product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:returned_product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><div class="options-info">&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);?>
</div><?php }?>
            </td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
        <td class="right"><span><?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['subtotal']), 0);
}?></span></td>
    </tr>
    <?php } ?>
</table>
<?php }?><?php }} ?>
