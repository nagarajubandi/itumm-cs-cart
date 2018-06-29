{if $smarty.session.auth.user_type == 'V' && $addons.sd_vendor_products_database.allow_vendors_create_products == 'Y' && $runtime.mode == 'add'}
    <input type="hidden" value="Y" name="product_data[created_by_vendor]">
{/if}
{if $addons.sd_vendor_products_database.allow_vendors_create_products == 'Y'}
    {*<div class="control-group">
        <label class="control-label" for="product_allow_sharing">{__("addons.sd_vendor_products_database.allow_sharing")}:</label>
        <div class="controls">
            <input type="hidden" name="product_data[allow_sharing]" value="N" />
            <input type="checkbox" name="product_data[allow_sharing]" id="product_allow_sharing" value="Y" {if empty($product_data.allow_sharing) || $product_data.allow_sharing == "Y"}checked="checked"{/if} />
        </div>
    </div>*}
    <input type="hidden" name="product_data[allow_sharing]" value="Y" />
{/if}
