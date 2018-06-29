{if $vendor.buy_now_url}
    {assign var="url" value=$vendor.buy_now_url}
{elseif $vendor.url}
    {assign var="url" value=$vendor.url}
{/if}
{if $url}
    {include file="buttons/button.tpl" but_text=__("addons.sd_vendor_products_database.visit_dealer") but_href=$url but_meta="ty-btn__primary ty-btn__big ty-btn__add-to-cart" but_target="_blank"}
{/if}