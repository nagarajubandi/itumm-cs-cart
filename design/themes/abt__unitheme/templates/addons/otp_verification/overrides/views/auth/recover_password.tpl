{assign var="phone_field" value=fn_check_phone_in_profile_fields()}
<div class="ty-recover-password">
	<form name="recoverfrm" action="{""|fn_url}" method="post">
	    <div class="ty-control-group">
	        <label class="ty-login__filed-label ty-control-group__label cm-trim cm-required" for="login_id">{__("email_or_phone")}</label>
	        <input type="text" id="login_id" name="user_email" size="30" value="" class="ty-login__input cm-focus" />
	    </div>
        {if $addons.otp_verification.enable_reset_password_by_otp == 'Y' and $phone_field }
        <div class="ty-reset__with-otp">
            <label for="reset_with_otp" class="ty-reset__with-otp-label"><input class="checkbox" type="checkbox" name="reset_with_otp" id="reset_with_otp"{if $addons.otp_verification.enable_reset_password_by_otp == 'Y'}checked{/if} value="Y" />{__("reset_via_otp")}</label>
        </div>
        {/if}
	    <div class="buttons-container login-recovery">
	        {include file="buttons/reset_password.tpl" but_name="dispatch[auth.recover_password]"}
	    </div>
	</form>
</div>
{capture name="mainbox_title"}{__("recover_password")}{/capture}