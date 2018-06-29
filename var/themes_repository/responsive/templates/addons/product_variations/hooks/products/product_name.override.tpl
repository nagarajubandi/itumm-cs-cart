{if $product.product_type === "\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE"|constant && $product.variation_product_id}
    <span class="cm-reload-{$obj_prefix}{$obj_id}" id="name_update_{$obj_prefix}{$obj_id}">
        {if $show_name}
            <input type="hidden" name="appearance[show_name]" value="{$show_name}" />
            {if $hide_links}<strong>{else}<a href="{"products.view?product_id=`$product.variation_product_id`"|fn_url}" class="product-title" title="{$product.product|strip_tags}" {live_edit name="product:product:{$product.product_id}" phrase=$product.product}>{/if}{$product.product nofilter}{if $hide_links}</strong>{else}</a>{/if}
        {elseif $show_trunc_name}
            <input type="hidden" name="appearance[show_trunc_name]" value="{$show_trunc_name}" />
            {if $hide_links}<strong>{else}<a href="{"products.view?product_id=`$product.variation_product_id`"|fn_url}" class="product-title" title="{$product.product|strip_tags}" {live_edit name="product:product:{$product.product_id}" phrase=$product.product}>{/if}{$product.product|truncate:44:"...":true nofilter}{if $hide_links}</strong>{else}</a>{/if}
        {/if}
    <!--name_update_{$obj_prefix}{$obj_id}--></span>
{/if}
