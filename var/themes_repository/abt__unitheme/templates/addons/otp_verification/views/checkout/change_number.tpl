{style src="addons/otp_verification/style.css"}

<fieldset data-form-name="servicenumber" data-step="1" class="current" id="otp_verify_div">
    <legend>
        <i class="fieldset-icon"></i>
          <span style="position:relative;top:-36px;color:blue">{__('verify_your_number')}</span>
        
    </legend>
<form name="change_number_form" action="{""|fn_url}" method="post">
        {if $previous_data}
            <div class="previous_data">
                {foreach from=$previous_data item=value key=k}
                {if $k != 'user_data'}
                    <input type="hidden" name="{$k}" value="{$value}" /> 
                {/if} 
                {/foreach}
                {foreach from=$previous_data.user_data item=value key=k}
                {if $k != 'user_data'}
                    <input type="hidden" name="user_data[{$k}]" value="{$value}" />    
                {/if} 
                {/foreach}
            </div>
        {/if}
	<div class="ty-control-group" style="margin-top: 40px;margin-left: 20px;">
        <p><b>{__("_you_can_change_your_number_here_and_otp_will_be_send_on_updated_number")}</b></p>
        <p><b>{__("pre_no")}{$previous_data.user_data.phone}</b></p>
    </div>
	<div class="ty-control-group" style="margin-top: 40px;margin-left: 20px;">
        <label for="new_number_{$id}" class="ty-login__filed-label ty-control-group__label cm-required">{__("enter_your_new_number")}</label>
        <input type="text" id="new_number_{$id}" name="user_data[new_number]" size="" value="" class="ty-input-text cm-focus" />
    </div>
    <div style="margin-top: 40px;margin-left: 20px;margin-bottom: 40px;" class="ty-product-block__button">         
        {include file="buttons/button.tpl" but_meta="ty-btn__secondary" but_href="checkout.checkout" but_text=__("start_over") but_role="tool" but_id="back_button"}
               
		{include file="buttons/button.tpl" but_name="dispatch[checkout.add_profile]" but_text=__("save") but_role="submit" but_meta="ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn cm-ajax cm-ajax-full-render"}
	</div>
</form>
</fieldset>