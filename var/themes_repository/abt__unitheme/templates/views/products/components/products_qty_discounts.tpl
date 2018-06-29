{if $ab__is_popup}
    <a class="closer" onClick="$(this).parent().addClass('hidden');"><i class="material-icons">&#xE5CD;</i></a>
{/if}
<div class="ut-qty-discount">
    <div class="ut-qty-discount-title">{__("text_qty_discounts")}:</div>
    <div class="ut-qty-discount-table">
        <div class="col">
	        <div class="ut-qty-discount-label">{__("quantity")}</div>
	        {foreach from=$product.prices item="price"}
	            <div class="ut-qty-discount-col">{$price.lower_limit}+</div>
	        {/foreach}
        </div>
        <div class="col">
	        <div class="ut-qty-discount-label">{__("price")}</div>
	        {foreach from=$product.prices item="price"}
	            <div class="ut-qty-discount-price">{include file="common/price.tpl" value=$price.price}</div>
	        {/foreach}
        </div>
    </div>
</div>