<form action="{""|fn_url}" method="post" class="form-horizontal form-edit" name="new_payout_form" onSubmit="return checkpayment()">
<input type="hidden" name="redirect_url" value="{$c_url}" />

{include file="views/companies/components/company_field.tpl"
    name="payment[vendor]"
    id="p_vendor"
    selected=$smarty.request.vendor
}

<div class="control-group">
    <label class="cm-required control-label" for="payment_amount">{__("payment_amount")}</label>
    <div class="controls">
        <input type="text" class="cm-numeric paymentcls" name="payment[amount]" id="payment_amount" />
		
    </div>
</div>
<div class="control-group"> 
    <div class="controls"><span id="payment_amount_error_message" class="help-inline" style="display: none;color:red;margin-top:-20px"><p>The <b>Payment amount</b> should not be more than balance amount ({include file="common/price.tpl" value=$remaining_balance}).</p></span></div>
</div>
<div class="control-group">
    <label class="control-label" for="payment_comments">{__("comments")}</label>
    <div class="controls">
    <textarea class="span9" rows="8" cols="55" name="payment[comments]" id="payment_comments"
    ></textarea></div>
</div>

{if !$runtime.company_id}
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
                    {__("notify_vendor")}
                </label>
            </div>
        </div>
    </div>
{/if}

<div class="buttons-container">
    {include file="buttons/save_cancel.tpl" but_name="dispatch[companies.payouts_add]" cancel_action="close"}
</div>

</form>
<script type="text/javascript">
function checkpayment(){
	$("#payment_amount_error_message").hide();
    {if !$runtime.company_id}

    {else}
        var balance_amount={$remaining_balance};
        var balance_request_amount=$('.paymentcls').val().replace(/,/g , '');
        if(balance_request_amount > balance_amount){
            $("#payment_amount_error_message").show();
            return false;
        }
    {/if}

	return true;
}
</script>