{if $product.vendors}
    <div class="cm-picker-product-options form-horizontal product-options">
        <div class="control-group">
            <label class="control-label" for="company">{__("company")}:</label>
            <div class="controls">
                <select id="company" name="product_data[{$product.product_id}][vendor]">
                    {foreach from=$product.vendors item=vendor}
                        <option value="{$vendor.company_id}">{$vendor.company}</option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
{/if}
