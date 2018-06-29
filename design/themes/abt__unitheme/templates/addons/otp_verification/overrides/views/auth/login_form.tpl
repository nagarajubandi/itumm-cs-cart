{assign var="id" value=$id|default:"main_login"}
{assign var="phone_field" value=fn_check_phone_in_profile_fields()}

{capture name="login"}
    <form name="{$id}_form" action="{""|fn_url}" method="post">
  
    {if $addons.otp_verification.login_via_otp == 'N' || !$phone_field }
    <input type="hidden" name="return_url" value="{$smarty.request.return_url|default:$config.current_url}" />
    <input type="hidden" name="redirect_url" value="{$config.current_url}" />
    {else}
    <input type="hidden" name="retURL" value="{$smarty.request.return_url|default:$config.current_url}" />
    <input type="hidden" name="redURL" value="{$config.current_url}" />
    {/if}
        {if $style == "checkout"}
            <div class="ty-checkout-login-form">{include file="common/subheader.tpl" title=__("returning_customer")}
        {/if}
        <div class="ty-control-group">
            <label for="login_{$id}" class="ty-login__filed-label ty-control-group__label cm-required cm-trim {if $addons.otp_verification.login_via_phone_or_email == 'N' }cm-email{/if}">{if $addons.otp_verification.login_via_phone_or_email == 'N' || ($addons.otp_verification.login_via_phone_or_email == 'Y' and !$phone_field)}{__("email")}{else}{__("email_or_phone")}{/if}</label>
            <input type="text" id="login_{$id}" name="user_login" size="30" value="{$config.demo_username}" class="ty-login__input cm-focus" />
        </div>

        <div class="ty-control-group ty-password-forgot">
            <label for="psw_{$id}" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label {if $addons.otp_verification.login_via_otp == 'N' || ($addons.otp_verification.login_via_otp == 'Y' and !$phone_field) }cm-required{/if}">{__("password")}</label><a href="{"auth.recover_password"|fn_url}" class="ty-password-forgot__a"  tabindex="5">{__("forgot_password_question")}</a>
            <input type="password" id="psw_{$id}" name="password" size="30" value="{$config.demo_password}" class="ty-login__input" maxlength="32" />
        </div>

        {if $addons.otp_verification.login_via_otp == 'Y' and $phone_field }
        <div class="ty-login__with-otp">
            {*<label for="login_with_otp_{$id}" class="ty-login__with-otp-label"><input class="checkbox" type="checkbox" name="login_with_otp" id="login_with_otp_{$id}"{if $addons.otp_verification.login_via_otp == 'Y'}checked{/if} value="Y" />{__("login_with_otp")}</label>*}
              <label for="login_with_otp_{$id}" class="ty-login__with-otp-label"><input class="checkbox login_via_otp" type="checkbox" name="login_with_otp" id="login_with_otp_{$id}" value="Y" />{__("login_with_otp")}</label>
        </div>
        {/if}

        {if $style == "popup"}
            <div class="ty-login-reglink ty-center">
                <a class="ty-login-reglink__a" href="{"profiles.add"|fn_url}" rel="nofollow">{__("register_new_account")}</a>
            </div>
        {/if}

        {include file="common/image_verification.tpl" option="login" align="left"}

        {if $style == "checkout"}
            </div>
        {/if}

        {hook name="index:login_buttons"}
            <div class="buttons-container clearfix">
                <div class="ty-float-right">
                    {include file="buttons/login.tpl" but_name="dispatch[auth.login]" but_role="submit"}
                </div>
                <div class="ty-login__remember-me">
                    <label for="remember_me_{$id}" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_{$id}" value="Y" />{__("remember_me")}</label>
                </div>
            </div>
        {/hook}
    </form>
{/capture}

{if $style == "popup"}
    {$smarty.capture.login nofilter}
{else}
    <div class="ty-login">
        {$smarty.capture.login nofilter}
    </div>

    {capture name="mainbox_title"}{__("sign_in")}{/capture}
{/if}

<script type="text/javascript">
 (function(_, $) {
 	$('.login_via_otp').on('change', function(){
        if(this.checked){
            $('.ty-password-forgot').hide();
            console.log("++");
        }else{
            $('.ty-password-forgot').show();
        }
     });
})(Tygh,Tygh.$);
</script>