{if $product.extra.vendor && $product.extra.vendor_price}
    <input type="hidden" name="cart_products[{$key}][extra][vendor]" value="{$product.extra.vendor}" />
    <input type="hidden" name="cart_products[{$key}][extra][vendor_price]" value="{$product.extra.vendor_price}" />
    <input type="hidden" name="cart_products[{$key}][extra][vendor_name]" value="{$product.extra.vendor_name}" />
{/if}