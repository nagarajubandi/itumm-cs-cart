{style src="addons/otp_verification/style.css"}
{capture name="mainbox_title"}{__("otp_verification")}{/capture}

<fieldset data-form-name="servicenumber" data-step="1" class="current" id="otp_verify_div">
	<legend>
		<i class="fieldset-icon"></i>
		  <span style="position:relative;top:-36px;color:blue">{__('verify_your_number')}</span>
		
	</legend>

	<div id="change_number_div">
		<form name="otp_verification_form" action="{""|fn_url}" method="post" class="cm-reload" id="otp_verification_form_id">
			<input type="hidden" name="result_ids" value="otp_verify_div" /> 
		{if $previous_data}
			<div class="previous_data">				
					<input type="hidden" name="user_login" value="{$previous_data.email}" />
					<input type="hidden" name="return_url" value="{$previous_data.retURL}" />
    				<input type="hidden" name="redirect_url" value="{$previous_data.redURL}" /> 
					{if $previous_data.reset_via_otp}
					<input type="hidden" name="reset_via_otp" value="{$previous_data.reset_via_otp}" /> 
					{/if}
			</div>
		{/if}
	
		<div style="margin-top: 40px;margin-left: 20px;" class="ty-control-group">
            <p class="ty-discussion-post__message"><b>{__("an_otp_has_been_send_to_your_mobile_number_please_enter_within_time_limit")}</b></p>
            <p>{__("your_mobile_no")} <b>********{$previous_data.phone|substr:8}</b></p>
        </div>
		<div style="margin-top: 40px;margin-left: 20px;" class="ty-control-group">
            <label for="otp_verify_input" class="ty-login__filed-label ty-control-group__label cm-required">{__("enter_otp")}</label>
            <input type="text" id="otp_verify_input" name="user_data[otp_verification_data]" size="" value="" class="ty-input-text cm-focus" />
        	<div style="margin-left:217px ;margin-top: 10px;">
				{include file="buttons/button.tpl" but_meta="ty-btn ty-btn__text cm-ajax cm-ajax-full-render" but_href="otp_verify_register.otp_resend" but_text=__("resend") but_role="tool" but_id="resend_button" but_target_id="otp_verify_div"}
			</div>
        </div>
		<div style="margin-top: 40px;margin-left: 20px;margin-bottom: 40px;" class="ty-product-block__button">         
            {include file="buttons/button.tpl" but_meta="ty-btn__secondary" but_href="auth.login_form" but_text=__("start_over") but_role="tool" but_id="back_button"}
			{if !$previous_data.reset_via_otp}
            <span>
	            {*{include file="buttons/button.tpl" but_meta="ty-btn__secondary cm-ajax" but_href="otp_verify_register.change_number" but_text=__("change_no") but_role="tool" but_id="otp_change_number"}*}
	        </span>
			{/if}
			{if $previous_data.reset_via_otp}
            {include file="buttons/button.tpl" but_name="dispatch[otp_verify_register.forgot_pass]" but_text=__("verify") but_role="submit" but_meta="ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn" but_id="verify_button"}
			{else}
            {include file="buttons/button.tpl" but_name="dispatch[auth.login]" but_text=__("verify") but_role="submit" but_meta="ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn" but_id="verify_button"}
			{/if}
		</div>
	</form>
	</div>
	<!-- otp_verify_div -->
</fieldset>



    
