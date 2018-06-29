{assign var="is_verified" value=fn_check_is_number_verified()}
{assign var="phone_field" value=fn_check_phone_in_profile_fields()}
{if $field.field_name == "phone" && $field.section == 'C' && $auth.user_id && $phone_field}
    {if $is_verified}
        <div style="color: green">{__("verified")}</div>
    {else}
        <div style="color: red">{__("not_verified")}</div>
    {/if}
    {*{if $runtime.mode == 'checkout'}
        <script type="text/javascript">
        (function(_, $) {
        $('input[x-autocompletetype=phone-full]').prop("readonly", true); 	
        })(Tygh,Tygh.$);
        </script>
    {/if}*}
{/if}