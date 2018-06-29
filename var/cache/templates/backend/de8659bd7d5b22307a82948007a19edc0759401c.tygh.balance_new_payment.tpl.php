<?php /* Smarty version Smarty-3.1.21, created on 2018-06-29 17:01:17
         compiled from "/var/www/html/itumm.com/design/backend/templates/views/companies/components/balance_new_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11634454995b337440cfd245-94798019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de8659bd7d5b22307a82948007a19edc0759401c' => 
    array (
      0 => '/var/www/html/itumm.com/design/backend/templates/views/companies/components/balance_new_payment.tpl',
      1 => 1530271870,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11634454995b337440cfd245-94798019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b337440d11136_87095415',
  'variables' => 
  array (
    'c_url' => 0,
    'remaining_balance' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b337440d11136_87095415')) {function content_5b337440d11136_87095415($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/itumm.com/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('payment_amount','comments','notify_vendor'));
?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" class="form-horizontal form-edit" name="new_payout_form" onSubmit="return checkpayment()">
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"payment[vendor]",'id'=>"p_vendor",'selected'=>$_REQUEST['vendor']), 0);?>


<div class="control-group">
    <label class="cm-required control-label" for="payment_amount"><?php echo $_smarty_tpl->__("payment_amount");?>
</label>
    <div class="controls">
        <input type="text" class="cm-numeric paymentcls" name="payment[amount]" id="payment_amount" />
		
    </div>
</div>
<div class="control-group"> 
    <div class="controls"><span id="payment_amount_error_message" class="help-inline" style="display: none;color:red;margin-top:-20px"><p>The <b>Payment amount</b> should not be more than balance amount (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['remaining_balance']->value), 0);?>
).</p></span></div>
</div>
<div class="control-group">
    <label class="control-label" for="payment_comments"><?php echo $_smarty_tpl->__("comments");?>
</label>
    <div class="controls">
    <textarea class="span9" rows="8" cols="55" name="payment[comments]" id="payment_comments"
    ></textarea></div>
</div>

<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <div class="control-group">
        <label for="" class="control-label">&nbsp;</label>
        <div class="controls cm-toggle-button">
            <div class="select-field notify-customer">
                <label class="checkbox" for="notify_user">
                    <input type="checkbox"
                           name="payment[notify_user]"
                           id="notify_user"
                           value="Y"
                    />
                    <?php echo $_smarty_tpl->__("notify_vendor");?>

                </label>
            </div>
        </div>
    </div>
<?php }?>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[companies.payouts_add]",'cancel_action'=>"close"), 0);?>

</div>

</form>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
function checkpayment(){
	$("#payment_amount_error_message").hide();
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>

    <?php } else { ?>
        var balance_amount=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['remaining_balance']->value, ENT_QUOTES, 'ISO-8859-1');?>
;
        var balance_request_amount=$('.paymentcls').val().replace(/,/g , '');
        if(balance_request_amount > balance_amount){
            $("#payment_amount_error_message").show();
            return false;
        }
    <?php }?>

	return true;
}
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
