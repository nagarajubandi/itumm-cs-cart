<div class="control-group">
    <label class="control-label" for="elm_allow_vendors_create_product_{$id}">{__("addons.sd_vendor_products_database.allow_vendors_create_product")}:</label>
    <div class="controls">
        <input type="hidden" name="plan_data[enable_create_products]" value="N" />
        <input type="checkbox" id="elm_allow_vendors_create_product_{$id}" name="plan_data[enable_create_products]" size="10" value="Y"{if $plan.enable_create_products == "Y"} checked="checked"{/if} />
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="elm_allow_vendors_to_sell_common_products_{$id}">{__("addons.sd_vendor_products_database.allow_vendors_to_sell_common_products")}:</label>
    <div class="controls">
        <input type="hidden" name="plan_data[enable_copy_products]" value="N" />
        <input type="checkbox" id="elm_youtube_{$id}" name="plan_data[enable_copy_products]" size="10" value="Y"{if $plan.enable_copy_products == "Y"} checked="checked"{/if} />
    </div>
</div>