<ul class="ty-product-filters {if $collapse}hidden{/if}" id="content_{$filter_uid}">

    {if $filter.display_count && $filter.variants|count > $filter.display_count}
    <li>
        {script src="js/tygh/filter_table.js"}

        <div class="ty-product-filters__search">
        <input type="text" placeholder="{__("search")}" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_{$filter_uid}" value="" />
        <i class="ty-product-filters__search-icon ty-icon-cancel-circle hidden" id="elm_search_clear_{$filter_uid}" title="{__("clear")}"></i>
        </div>
    </li>
    {/if}


    {* Selected variants *}
    {foreach from=$filter.selected_variants key="variant_id" item="variant"}
        <li class="cm-product-filters-checkbox-container ty-product-filters__group">
            <input class="cm-product-filters-checkbox" type="checkbox" name="product_filters[{$filter.filter_id}]" data-ca-filter-id="{$filter.filter_id}" value="{$variant.variant_id}" id="elm_checkbox_{$filter_uid}_{$variant.variant_id}" checked="checked"><label for="elm_checkbox_{$filter_uid}_{$variant.variant_id}">{$filter.prefix}{$variant.variant|fn_text_placeholders}{$filter.suffix}</label>
        </li>
    {/foreach}

    {if $filter.variants}
        <li class="ty-product-filters__item-more">
            <ul id="ranges_{$filter_uid}" {if $filter.display_count}style="max-height: {$filter.display_count * 25}px;"{/if} class="ty-product-filters__variants {if $filter.variants|@count > $filter.display_count}items-more {/if}cm-filter-table" data-ca-input-id="elm_search_{$filter_uid}" data-ca-clear-id="elm_search_clear_{$filter_uid}" data-ca-empty-id="elm_search_empty_{$filter_uid}">

                {foreach from=$filter.variants item="variant"}
                <li class="cm-product-filters-checkbox-container ty-product-filters__group">
                    <input class="cm-product-filters-checkbox" type="checkbox" name="product_filters[{$filter.filter_id}]" data-ca-filter-id="{$filter.filter_id}" value="{$variant.variant_id}" id="elm_checkbox_{$filter_uid}_{$variant.variant_id}" {if $variant.disabled}disabled="disabled"{/if}><label {if $variant.disabled}class="disabled"{/if} for="elm_checkbox_{$filter_uid}_{$variant.variant_id}">{$filter.prefix}{$variant.variant|fn_text_placeholders}{$filter.suffix}</label>
                </li>
                {/foreach}
            </ul>
            {if $filter.variants|@count > $filter.display_count}
            <a class="ty-more-btn" onclick="$(this).prev().addClass('none-overflow'); $(this).remove();">{__('more')} <i class="uni-bottom-sight"></i></a>
            {/if}
            <p id="elm_search_empty_{$filter_uid}" class="ty-product-filters__no-items-found hidden">{__("no_items_found")}</p>
        </li>
    {/if}
</ul>
