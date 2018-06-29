{if $addons.catalog_mode.status == 'A' && $addons.catalog_mode.main_store_mode == 'catalog'}
    {include file="common/subheader.tpl" title=__("catalog_mode") target="#acc_sd_vendor_products_database_catalog_mode"}
    <div class="collapse in" id="acc_sd_vendor_products_database_catalog_mode">
        <div class="control-group setting-wide">
            <label class="control-label" for="elm_sd_vendor_products_database_hide_price">{__("addons.sd_vendor_products_database.hide_price")}{include file="common/tooltip.tpl" tooltip={__("addons.sd_vendor_products_database.hide_price_tooltip")}}:</label>
            <div class="controls">
                <input type="hidden" name="addon_data[hide_price]" value="N" />
                <input type="checkbox" name="addon_data[hide_price]" id="elm_sd_vendor_products_database_hide_price" value="Y"{if $addons.sd_vendor_products_database.hide_price == "Y"}checked="checked"{/if} />
            </div>
        </div>

        <div class="control-group setting-wide">
            <label class="control-label" for="elm_sd_vendor_products_database_show_visit_dealer_button">{__('addons.sd_vendor_products_database.show_visit_dealer_button')}{include file="common/tooltip.tpl" tooltip={__("addons.sd_vendor_products_database.show_visit_dealer_button_tooltip")}}:</label>
            <div class="controls">
                <input type="hidden" name="addon_data[show_visit_dealer_button]" value="N" />
                <input type="checkbox" name="addon_data[show_visit_dealer_button]" id="elm_sd_vendor_products_database_show_visit_dealer_button" value="Y"{if $addons.sd_vendor_products_database.show_visit_dealer_button == "Y"}checked="checked"{/if} />
            </div>
        </div>
    <!--acc_sd_vendor_products_database_catalog_mode--></div>
{/if}
