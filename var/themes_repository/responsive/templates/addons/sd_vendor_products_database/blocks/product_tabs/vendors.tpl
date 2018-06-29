{** block-description:vendors **}

{if $product.vendors && !$product.show_usual_product_template}
    {assign var="obj_id" value=$product.product_id}
    {if $addons.catalog_mode.status == 'A' && $addons.catalog_mode.main_store_mode == 'catalog'}
        {assign var="catalog_mode" value=true}
    {else}
        {assign var="catalog_mode" value=false}
    {/if}

    {assign var="c_url" value=$config.current_url|fn_query_remove:"sort_vendor_offers"}
    {assign var="rev" value="vendor_offers"}
    {if $sort_vendor_offers=="asc"}
        {assign var="c_icon" value="<i class=\"ty-select-block__arrow ty-icon-up-micro\"></i>"}
    {elseif $sort_vendor_offers=="desc"}
        {assign var="c_icon" value="<i class=\"ty-select-block__arrow ty-icon-down-micro\"></i>"}
    {else}
        {assign var="c_icon" value="<i class=\"ty-select-block__arrow ty-icon-up-micro\"></i><i class=\"ty-select-block__arrow ty-icon-down-micro\"></i>"}
    {/if}

    <form action="{""|fn_url}" method="post" name="product_vendor_form_{$vendor.company_id}" {if !$config.tweaks.disable_dhtml && !$no_ajax}class="cm-ajax cm-ajax-full-render cm-ajax-status-middle"{/if}>
        <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
        <input type="hidden" name="redirect_url" value="{$redirect_url|default:$config.current_url}">
        <div class="ty-product-block" id="vendor_offers">
            <table class="ty-table ty-product-table__block" width ="100%">
                <thead>
                    <tr>
                        <th class="ty-product-table__title" width="10%"></th>
                        <th class="ty-product-table__title" width="15%">{__("vendor")}</th>
                        {if !($catalog_mode && $addons.sd_vendor_products_database.hide_price && $addons.sd_vendor_products_database.hide_price == 'Y')}
                            <th class="ty-product-table__title" width="10%">
                                <a class="cm-ajax" href="{"`$c_url`&sort_vendor_offers=`$sort_vendor_offers_rev`"|fn_url}" data-ca-target-id={$rev}>{__("price")}{$c_icon nofilter}</a>
                            </th>
                        {/if}
                        {if $catalog_mode}
                            <th class="ty-product-table__title" width="15%">{__("location")}</th>
                        {else}
                            <th class="ty-product-table__title" width="10%">{__("availability")}</th>
                            <th class="ty-product-table__title" width="5%">{__("quantity")}</th>
                        {/if}
                        {if !($catalog_mode && (!$addons.sd_vendor_products_database.show_visit_dealer_button || $addons.sd_vendor_products_database.show_visit_dealer_button == 'N'))}
                            <th class="ty-product-table__title" width="15%">{__("addons.sd_vendor_products_database.buy")}</th>
                        {/if}
                    </tr>
                </thead>
                <tbody>
                {foreach from=$product.vendors item=vendor}
                    {if $vendor.amount > 0 || $settings.General.show_out_of_stock_products == 'Y'}

                        <tr>
                            <td class="ty-product-table__item">
                            {if $vendor.logos.theme.image}
                                <div>
                                    <a href="{"companies.products?company_id=`$vendor.company_id`"|fn_url}">
                                    {include file="common/image.tpl" images=$vendor.logos.theme.image image_width="120" class="ty-company-image"}
                                    </a>
                                </div>
                            {/if}
                            </td>

                            <td class="ty-product-table__item">
                                <div>
                                    <strong><a href="{"companies.products?company_id=`$vendor.company_id`"|fn_url}">{$vendor.company nofilter}</strong>
                                </div>
                            </td>

                            {if !($catalog_mode && $addons.sd_vendor_products_database.hide_price && $addons.sd_vendor_products_database.hide_price == 'Y') && ($product.price|floatval || $product.zero_price_action == "P" || $product.zero_price_action == "A" || (!$product.price|floatval && $product.zero_price_action == "R")) && !($settings.General.allow_anonymous_shopping == "hide_price_and_add_to_cart" && !$auth.user_id)}
                                <td class="ty-product-table__item">
                                    <div id="price_{$vendor.company_id}_{$vendor.company_id}">
                                        <span class="cm-reload-{$vendor.company_id}_{$vendor.company_id} ty-price-update">
                                            <span class="ty-price">{include file="common/price.tpl" value=$vendor.price class="ty-price-num"}</span>
                                        </span>
                                    <!--price_{$vendor.company_id}_{$vendor.company_id}--></div>
                                </td>
                            {/if}

                            {if $catalog_mode}
                                <td class="ty-product-table__item">
                                    <div class="ty-company-detail__info-list">
                                        <div class="ty-company-detail__control-group">
                                            <span>{$vendor.address}</span>
                                        </div>
                                        <div class="ty-company-detail__control-group">
                                            <span>{$vendor.city}
                                                , {$vendor.state|fn_get_state_name:$vendor.country} {$vendor.zipcode}</span>
                                        </div>
                                        <div class="ty-company-detail__control-group">
                                            <span>{$vendor.country|fn_get_country_name}</span>
                                        </div>
                                    </div>
                                </td>
                            {else}
                                {if $product.is_edp != "Y" && $settings.General.inventory_tracking == "Y"}
                                    <td class="ty-product-table__item">
                                        {if $product.is_edp != "Y" && $settings.General.inventory_tracking == "Y"}
                                            <div class="ty-product-block__field-group">
                                                <div class="cm-reload-{$vendor.company_id}_{$vendor.company_id} stock-wrap" id="amount_{$vendor.company_id}_{$vendor.company_id}">
                                                    {if $settings.Appearance.in_stock_field == "Y"}
                                                        {if $product.tracking != "ProductTracking::DO_NOT_TRACK"|enum}
                                                            {if ($vendor.amount > 0 && $vendor.amount >= $product.min_qty) && $settings.General.inventory_tracking == "Y" || $details_page}
                                                                {if ($vendor.amount > 0 && $vendor.amount >= $product.min_qty) && $settings.General.inventory_tracking == "Y"}
                                                                    <div class="ty-control-group product-list-field">
                                                                        <span id="qty_in_stock_{$vendor.company_id}_{$vendor.company_id}" class="ty-qty-in-stock ty-control-group__item">
                                                                            {$vendor.amount}&nbsp;{__("items")}
                                                                        </span>
                                                                    </div>
                                                                {elseif $settings.General.inventory_tracking == "Y"}
                                                                    <div class="ty-control-group product-list-field">
                                                                        <span class="ty-qty-out-of-stock ty-control-group__item">{__("out_of_stock_products")}</span>
                                                                    </div>
                                                                {/if}
                                                            {/if}
                                                        {/if}
                                                    {else}
                                                        {if ((($vendor.amount > 0 && $vendor.amount >= $product.min_qty) || $product.tracking == "ProductTracking::DO_NOT_TRACK"|enum) && $settings.General.inventory_tracking == "Y" && $settings.General.allow_negative_amount != "Y") || ($settings.General.inventory_tracking == "Y" && $settings.General.allow_negative_amount == "Y")}
                                                            <div class="ty-control-group product-list-field">
                                                                <span class="ty-qty-in-stock ty-control-group__item" id="in_stock_info_{$vendor.company_id}_{$vendor.company_id}">{__("in_stock")}</span>
                                                            </div>
                                                        {elseif $details_page && ($vendor.amount <= 0 || $vendor.amount < $product.min_qty) && $settings.General.inventory_tracking == "Y" && $settings.General.allow_negative_amount != "Y"}
                                                            <div class="ty-control-group product-list-field">
                                                                <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_{$vendor.company_id}_{$vendor.company_id}">{__("out_of_stock_products")}</span>
                                                            </div>
                                                        {/if}
                                                    {/if}
                                                <!--amount_{$vendor.company_id}_{$vendor.company_id}--></div>
                                            </div>
                                        {/if}
                                    </td>
                                {/if}

                                <td class="ty-product-table__item">
                                    <div class="ty-product-block__field-group">
                                        <div class="cm-reload-{$vendor.company_id}_{$vendor.company_id}" id="qty_{$vendor.company_id}_{$vendor.company_id}">
                                            {if !($product.zero_price_action == "R" && $vendor.price == 0) && !($settings.General.inventory_tracking == "Y" && $settings.General.allow_negative_amount != "Y" && (($vendor.amount <= 0 || $vendor.amount < $product.min_qty) && $product.tracking != "ProductTracking::DO_NOT_TRACK"|enum) && $product.is_edp != "Y")}
                                            {if !empty($product.selected_amount)}
                                                {assign var="default_amount" value=$product.selected_amount}
                                            {elseif !empty($product.min_qty)}
                                                {assign var="default_amount" value=$product.min_qty}
                                            {elseif !empty($product.qty_step)}
                                                {assign var="default_amount" value=$product.qty_step}
                                            {else}
                                                {assign var="default_amount" value="1"}
                                            {/if}
                                                {if $product.is_edp !== "Y" && ($settings.General.allow_anonymous_shopping == "allow_shopping" || $auth.user_id) && $product.avail_since <= $smarty.const.TIME || ($product.avail_since > $smarty.const.TIME && $product.out_of_stock_actions == "B")}
                                                    <div class="ty-qty clearfix{if $settings.Appearance.quantity_changer == "Y"} changer{/if}" id="qty_{$vendor.company_id}_{$vendor.company_id}">
                                                        <div class="ty-center ty-value-changer cm-value-changer">
                                                            {if $settings.Appearance.quantity_changer == "Y"}
                                                                <a class="cm-increase ty-value-changer__increase">&#43;</a>
                                                            {/if}
                                                            <input {if $product.qty_step > 1}readonly="readonly"{/if} type="text" size="5" class="ty-value-changer__input cm-amount" id="qty_count_{$vendor.company_id}_{$vendor.company_id}" name="product_data[{$vendor.company_id}][amount]" value="{$default_amount}"{if $product.qty_step > 1} data-ca-step="{$product.qty_step}"{/if} data-ca-min-qty="{if $product.min_qty > 1}{$product.min_qty}{else}1{/if}" />
                                                            {if $settings.Appearance.quantity_changer == "Y"}
                                                                <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                                                            {/if}
                                                        </div>
                                                    </div>
                                                {/if}
                                            {/if}
                                        <!--qty_{$vendor.company_id}_{$vendor.company_id}--></div>
                                    </div>
                                </td>
                            {/if}

                            {if !($catalog_mode && (!$addons.sd_vendor_products_database.show_visit_dealer_button || $addons.sd_vendor_products_database.show_visit_dealer_button == 'N'))}
                                <td class="ty-product-table__item">
                                    {if $addons.catalog_mode.status == 'A' && $addons.catalog_mode.main_store_mode == 'catalog'}
                                        {include file="addons/sd_vendor_products_database/common/visit_dealer_button.tpl"}
                                    {else}
                                        {if !($product.zero_price_action == "R" && $vendor.price == 0) && !($settings.General.inventory_tracking == "Y" && $settings.General.allow_negative_amount != "Y" && (($vendor.amount <= 0 || $vendor.amount < $product.min_qty)))}
                                            <div class="ty-product-block__field-group">
                                                <div class="cm-reload-{$vendor.company_id}_{$vendor.company_id}" id="button_{$vendor.company_id}_{$vendor.company_id}">
                                                <input type="hidden" name="product_data[{$vendor.company_id}][extra][vendor]" value="{$vendor.company_id}" />
                                                <input type="hidden" name="product_data[{$vendor.company_id}][product_id]" value="{$product.product_id}" />
                                                <input type="hidden" name="product_data[{$vendor.company_id}][extra][vendor_price]" value="{$vendor.price}" />
                                                <input type="hidden" name="product_data[{$vendor.company_id}][extra][vendor_name]" value="{$vendor.company}" />
                                                   {include file="buttons/add_to_cart.tpl" but_id="button_cart_`$obj_id`_`$vendor.company_id`" but_name="dispatch[checkout.add..`$vendor.company_id`]" obj_id=$vendor.company_id product=$product}
                                                <!--button_{$vendor.company_id}_{$vendor.company_id}--></div>
                                            </div>
                                        {/if}
                                    {/if}
                                </td>
                            {/if}
                        </tr>

                    {/if}
                {/foreach}
                </tbody>
            </table>
        <!--vendor_offers--></div>
    </form>
{/if}
