{if ''|fn_catalog_mode_enabled == 'Y'}
    <!--this template overriden in sd_vendor_products_database add-on-->
    {if $product.buy_now_url != '' && $addons.sd_vendor_products_database.show_visit_dealer_button == 'Y'}
        {include file="buttons/button.tpl" but_id=$but_id but_text=$but_text but_href=$product.buy_now_url but_role=$but_role|default:"text" but_meta="ty-btn__primary" but_name="" but_target="_blank"}
    {/if}
{/if}
