{*{include file="buttons/button.tpl" but_name="dispatch[checkout.send_checkout_step]" but_text=__("send_otp") but_role="submit" but_meta="ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn"}*}
{assign var="is_verified" value=fn_check_is_number_verified()}
{assign var="phone_field" value=fn_check_phone_in_profile_fields_at_checkout()}
{if $phone_field && $is_verified}
<div class="ty-checkout-buttons">
{include file="buttons/button.tpl" but_id="verify_at_checkout" but_meta="ty-btn__secondary" but_name="dispatch[checkout.update_steps]" but_role="submit" but_text=__("continue")}
</div>
{else}
<div class="ty-checkout-buttons">
{include file="buttons/button.tpl" but_id="verify_at_checkout" but_meta="ty-btn__secondary" but_name="dispatch[checkout.send_checkout_step]" but_role="submit" but_text=__("continue")}
</div>
{/if}
