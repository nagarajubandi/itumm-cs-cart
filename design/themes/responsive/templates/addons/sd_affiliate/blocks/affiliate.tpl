{** block-description:affiliate **}
{assign var="approved" value=$auth.user_id|fn_sd_affiliate_get_affiliate}
{if $approved}
    {include file="addons/sd_affiliate/common/affiliate_menu.tpl"}
{/if}
