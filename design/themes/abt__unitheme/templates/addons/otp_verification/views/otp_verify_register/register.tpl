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
				{foreach from=$previous_data item=value key=k}
				{if $k != 'user_data' && $k != 'all_mailing_lists'}
					<input type="hidden" name="{$k}" value="{$value}" /> 
				{/if} 
				{/foreach}
				{*{$previous_data.user_data|fn_print_r}*}
				{foreach from=$previous_data.user_data item=value key=k}
				{if $k != 'user_data' && $k != 'all_mailing_lists' && $k != 'fields'}
					<input type="hidden" name="user_data[{$k}]" value="{$value}" />    
				{/if} 
				{/foreach}
			
			</div>
		{/if}
	
		<div style="margin-top: 40px;margin-left: 20px;" class="ty-control-group">
            <p class="ty-discussion-post__message"><b>{__("an_otp_has_been_send_to_your_mobile_number_please_enter_within_time_limit")}</b></p>
            <p>{__("your_mobile_no")}<b>{$previous_data.user_data.phone}</b></p>
        </div>
		<div style="margin-top: 40px;margin-left: 20px;" class="ty-control-group">
            <label for="otp_verify_input" class="ty-login__filed-label ty-control-group__label cm-required">{__("enter_otp")}</label>
            <input type="text" id="otp_verify_input" name="user_data[otp_verification_data]" size="" value="" class="ty-input-text cm-focus" />
        	<div style="margin-left:217px ;margin-top: 10px;">
				{include file="buttons/button.tpl" but_meta="ty-btn ty-btn__text cm-ajax cm-ajax-full-render" but_href="otp_verify_register.otp_resend" but_text=__("resend") but_role="tool" but_id="resend_button" but_target_id="otp_verify_div"}
			</div>
        </div>
		<div style="margin-top: 40px;margin-left: 20px;margin-bottom: 40px;" class="ty-product-block__button">         
            {include file="buttons/button.tpl" but_meta="ty-btn__secondary" but_href="profiles.add" but_text=__("start_over") but_role="tool" but_id="back_button"}
            
	            {include file="buttons/button.tpl" but_meta="ty-btn__secondary cm-ajax" but_href="otp_verify_register.change_number" but_text=__("change_no") but_role="tool" but_id="otp_change_number"}
	        
            {include file="buttons/button.tpl" but_name="dispatch[profiles.update]" but_text=__("verify") but_role="submit" but_meta="ty-btn__secondary ty-btn__big cm-form-dialog-closer ty-btn" but_id="verify_button"}
		</div>
	</form>
	</div>
	<!-- otp_verify_div -->
</fieldset>



    
