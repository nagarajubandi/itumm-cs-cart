{if $product.main_pair && $product.main_pair.detailed}
    <meta itemprop="image" content="{$product.main_pair.detailed.image_path}">
{/if}

{$brand = $product.product_id|fn_abt__ut_get_product_brand}
{if $brand}
    <meta itemprop="brand" content="{$brand}">
{/if}