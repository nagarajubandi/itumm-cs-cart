{if $auth.user_id && $auth.user_type == "P"}
    {assign var="approved" value=$auth.user_id|fn_sd_affiliate_get_affiliate}
    {if $approved}
        <li class="ty-account-info__item ty-dropdown-box__item"><a href="{"affiliate_plans.list"|fn_url}" rel="nofollow" class="ty-account-info__a underlined">{__("affiliates_partnership")}</a></li>
    {/if}
{/if}