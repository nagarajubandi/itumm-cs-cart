<form name="otp_verification_send_form" id="otp_processform_send" action="{""|fn_url}" method="post" class="">
	<fieldset data-form-name="servicenumber" data-step="1" class="current">
		<legend>{__('enter_your_mobile_number')} </legend>
		<div>
			<label for="otp_number" class="cm-required">{__("phone")}</label>
			<input type="text" id="otp_number" name="otp_number" class="cm-otp-mask-phone cm-focus cm-autocomplete-off">
			<label class="number-error error-msg"></label>
		</div>
		<br>
		{if $runtime.mode == 'details'}
		 <input type="hidden" name="order_id" value={$_REQUEST.order_id}>
         {include file="buttons/button.tpl" but_name="dispatch[orders.send_otp]" but_text=__("send_otp") but_role="submit" but_meta="ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"}
		{else}
	    {include file="buttons/button.tpl" but_name="dispatch[checkout.send_otp]" but_text=__("send_otp") but_role="submit" but_meta="ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"}
		{/if}
	</fieldset>
</form>