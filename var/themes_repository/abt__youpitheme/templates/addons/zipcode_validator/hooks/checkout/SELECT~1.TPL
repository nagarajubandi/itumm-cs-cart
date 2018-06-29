{* Products list for available-zipcode *}
{if $product_zip_avail}
<div>
	<span style="display: inline-block; font-weight: bold; padding: 15px 0 10px;">{__("products_not_available_zipcode")}</span>
	<ul class="ty-shipping-options__products">
		{foreach from=$product_zip_avail item="product_item"}
			<li class="ty-shipping-options__products-item error-text">
				{$product_item.product_id|fn_get_product_name}
			</li>
		{/foreach}
	</ul>
</div>
{/if}