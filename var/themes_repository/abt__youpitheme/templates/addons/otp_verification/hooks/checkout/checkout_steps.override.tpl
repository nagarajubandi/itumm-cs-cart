{assign var="phone_field" value=fn_check_phone_in_profile_fields_at_checkout()}
{assign var="is_verified" value=fn_check_is_number_verified()}
{assign var=user_data value=fn_get_user_info($auth.user_id)}
{if $phone_field}
<script type="text/javascript">
 (function(_, $) {
 	$.ceEvent('on', 'ce.ajaxdone', function(elms, scripts, params, response_data, response_text) {
    
	$('input[name="user_data[phone]"]').on('change',function(){
        if($('input[name="user_data[phone]"]').val() != {$user_data.phone}){
            $('#verify_at_checkout').attr('name','dispatch[checkout.send_checkout_step]');
			
		}else{
			 $('#verify_at_checkout').attr('name','dispatch[checkout.update_steps]');
		}

		});
	
			
 });
 	$('input[name="user_data[phone]"]').on('change',function(){
        if($('input[name="user_data[phone]"]').val() != {$user_data.phone}){
            $('#verify_at_checkout').attr('name','dispatch[checkout.send_checkout_step]');
			
		}else{
			 $('#verify_at_checkout').attr('name','dispatch[checkout.update_steps]');
		}
		   
		});
	
 })(Tygh,Tygh.$);
</script>


{assign var="otp_mode" value=fn_otp_verification_check_step_mode()}
	{if $otp_mode == "send"}

		{include file="addons/otp_verification/views/verify_at_checkout.tpl"}

	{else if $otp_mode == "verify"}

		{include file="addons/otp_verification/views/verify_at_checkout_key.tpl"}

	{/if}
{else}
{if $auth.user_id}
    <div class="ty-checkout-buttons">
        {include file="buttons/button.tpl" but_meta="ty-btn__secondary" but_name="dispatch[checkout.update_steps]" but_text=$but_text}
    </div>
{/if}	
{/if}