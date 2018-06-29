{*{assign var="is_verifed" value=fn_check_is_number_verified()}
{if !$is_verifed}*}
     <script type="text/javascript">
        (function(_, $) {
		$.ceEvent('on', 'ce.ajaxdone', function(elms, scripts, params, response_data, response_text) {
			$('input[name="user_data[phone]"]').val("{$auth.otp_data.phone_number}");
 		});
        $('input[name="user_data[phone]"]').val("{$auth.otp_data.phone_number}");
        })(Tygh,Tygh.$);
    </script>
<form name="otp_verification_verify_form" id="otp_processform" action="{""|fn_url}" method="post" class="">
	<fieldset data-form-name="servicenumber" data-step="1" class="current">
		<legend> Enter OTP(One Time Password)</legend>
		<div style="display: table;">
		<label for="input_otp_key" class="cm-required">{__("otp_key")}</label>
		<input type="text" id="input_otp_key" name="input_otp_key" class="input-small cm-focus cm-autocomplete-off">
		<div style="text-align:right;">
		    {if $runtime.mode == 'details'}
			<a href="{$config.customer_index}?dispatch=orders.otp_resend&order_id={$_REQUEST.order_id}" class="" data-ca-target-id="elm_payments_list*">Resend</a>
			{else}
			<a href="{$config.customer_index}?dispatch=checkout.otp_resend" class="" data-ca-target-id="checkout_*">Resend</a>
			{/if}
		</div>
		</div>
		<br>
        {if $runtime.mode == 'details'}
		<input type="hidden" name="order_id" value={$_REQUEST.order_id}>
        {include file="buttons/button.tpl" but_name="dispatch[orders.otp_verify]" but_text=__("verify") but_role="submit" but_meta="ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"}

        <span>
            {include file="buttons/button.tpl" but_meta="ty-btn__secondary cm-ajax" but_href="orders.change_number&order_id={$_REQUEST.order_id}" but_target_id="elm_payments_list"  but_text=__("change_no") but_role="tool"}
        </span>
		{else}
	    {include file="buttons/button.tpl" but_name="dispatch[checkout.otp_verify]" but_text=__("verify") but_role="submit" but_meta="ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"}

        <span>
            {include file="buttons/button.tpl" but_meta="ty-btn__secondary " but_href="checkout.change_number"  but_text=__("change_no") but_role="tool"}
        </span>
        {/if}
	</fieldset>
</form>
{*{else}
	<div class="ty-checkout-buttons">
        {include file="buttons/button.tpl" but_id="verify_at_checkout" but_meta="ty-btn__secondary" but_name="dispatch[checkout.update_steps]" but_role="submit" but_text=__("continue")}
    </div>
{/if}*}