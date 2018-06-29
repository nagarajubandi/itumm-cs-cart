{assign var="is_otp_payment" value=$payment_id|fn_otp_verification_check_payment}
{*{if $runtime.mode == 'checkout'}*}
{if $is_otp_payment}
	<div style="width: 100%; text-align: center; font-size: 20px;">
		<strong>{__("otp_verification")} </strong>
	</div>

	{assign var="otp_mode" value=fn_otp_verification_check_mode()}

	{if $otp_mode == "send"}

		{include file="addons/otp_verification/views/otp_send_verification.tpl" payment_id = $payment_id sec_payment_id = $payment.payment_id}

	{elseif $otp_mode == "verify"}

		{include file="addons/otp_verification/views/otp_verify_key.tpl" payment_id = $payment_id sec_payment_id = $payment.payment_id}

	{/if}
{/if}
{*{/if}*}