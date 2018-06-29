{if !$product.show_usual_product_template}
    {if $runtime.controller == "products" && $runtime.mode == "view"}
        {*{capture name="price_`$obj_id`"}
        {/capture}
        {capture name="clean_price_`$obj_id`"}
        {/capture}
        {capture name="old_price_`$obj_id`"}
        {/capture}
        {capture name="list_discount_`$obj_id`"}
        {/capture}
        {capture name="discount_label_`$obj_prefix``$obj_id`"}
        {/capture}
        {capture name="product_amount_`$obj_id`"}
        {/capture}*}
    {/if}
    {*{capture name="qty_`$obj_id`"}
    {/capture}
    {capture name="advanced_options_`$obj_id`"}
    {/capture}*}
{/if}

{if $addons.catalog_mode.status == 'A' && $addons.catalog_mode.main_store_mode == 'catalog' && $addons.sd_vendor_products_database.hide_price == 'Y' }
    {capture name="price_`$obj_id`"}
    {/capture}
    {capture name="clean_price_`$obj_id`"}
    {/capture}
    {capture name="old_price_`$obj_id`"}
    {/capture}
    {capture name="list_discount_`$obj_id`"}
    {/capture}
    {capture name="discount_label_`$obj_prefix``$obj_id`"}
    {/capture}
    {capture name="product_amount_`$obj_id`"}
    {/capture}
    {capture name="qty_`$obj_id`"}
    {/capture}
{/if}