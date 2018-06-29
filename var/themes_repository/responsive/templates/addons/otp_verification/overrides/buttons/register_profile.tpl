{assign var="phone_field" value=fn_check_phone_in_profile_fields()}
{if $addons.otp_verification.enable_otp_on_register == 'Y' && $phone_field}
{include file="buttons/button.tpl" but_text=__("register") but_onclick=$but_onclick but_href=$but_href but_target=$but_target but_meta="ty-btn__secondary" but_role=$but_role but_name="dispatch[otp_verify_register.register]"}

<script type="text/javascript">
	(function(_, $) {
		var form = $('form[name="profiles_register_form"]');
        var val_value = form.find('[name="user_data[phone]"]').length;
        if(!val_value)
        {	
        	var but = $('.ty-profile-field__buttons button').attr('name');
        	$('.ty-profile-field__buttons button').attr('name','dispatch[profiles.update]"]');
        }		
	})(Tygh,Tygh.$);
</script>
{else}
{include file="buttons/button.tpl" but_text=__("register") but_onclick=$but_onclick but_href=$but_href but_target=$but_target but_meta="ty-btn__secondary" but_role=$but_role but_name="dispatch[profiles.update]"}
{/if}