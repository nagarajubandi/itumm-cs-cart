{assign var="image_size" value=$image_size|default:80}
{function name="feature_value"}
    {strip}
        {if $feature.features_hash && $feature.feature_type == "ProductFeatures::EXTENDED"|enum}
            <a href="{"categories.view?category_id=`$product.main_category`&features_hash=`$feature.features_hash`"|fn_url}">
        {/if}
        {if $feature.prefix}{$feature.prefix}{/if}
        {if $feature.feature_type == "ProductFeatures::DATE"|enum}
            <div class="ty-control-group product-list-field"><label class="ty-control-group__label">{$feature.description nofilter}:</label><span class="ty-control-group__item">{$feature.value_int|date_format:"`$settings.Appearance.date_format`"}{if $feature.suffix}{$feature.suffix}{/if}</span></div>
        {elseif $feature.feature_type == "ProductFeatures::MULTIPLE_CHECKBOX"|enum}
            <div class="ty-control-group product-list-field">
                {foreach from=$feature.variants item="fvariant" name="ffev"}
                    {if $smarty.foreach.ffev.first}<label class="ty-control-group__label">{$feature.description nofilter}:</label>{/if}<span class="ty-control-group__item">{$fvariant.variant|default:$fvariant.value}</span>{if !$smarty.foreach.ffev.last}, {/if}
                {/foreach}
            </div>
        {elseif $feature.feature_type == "ProductFeatures::TEXT_SELECTBOX"|enum || $feature.feature_type == "ProductFeatures::NUMBER_SELECTBOX"|enum || $feature.feature_type == "ProductFeatures::EXTENDED"|enum}
            <div class="ty-control-group product-list-field"><label class="ty-control-group__label">{$feature.description nofilter}:</label><span class="ty-control-group__item">{$feature.variant|default:$feature.value}</span>{if $feature.suffix}{$feature.suffix}{/if}</div>
        {elseif $feature.feature_type == "ProductFeatures::SINGLE_CHECKBOX"|enum}
            <div class="ty-control-group product-list-field"><label class="ty-control-group__label">{$feature.description}:</label><span class="ty-compare-checkbox"><i class="ty-compare-checkbox__icon ty-icon-ok"></i></span></div>
        {elseif $feature.feature_type == "ProductFeatures::NUMBER_FIELD"|enum}
            <div class="ty-control-group product-list-field"><label class="ty-control-group__label">{$feature.description}:</label><span class="ty-control-group__item">{$feature.value_int|floatval}</span>{if $feature.suffix}{$feature.suffix}{/if}</div>
        {else}
            <div class="ty-control-group product-list-field"><label class="ty-control-group__label">{$feature.description}:</label><span class="ty-control-group__item">{$feature.value}</span>{if $feature.suffix}{$feature.suffix}{/if}</div>
        {/if}
        {if $feature.feature_type == "ProductFeatures::EXTENDED"|enum && $feature.features_hash}
            </a>
        {/if}
    {/strip}
{/function}

{if $features}
    {strip}
        {if !$no_container}<div class="ty-features-list">{/if}
        {foreach from=$features name=features_list item=feature}
            {if $feature_image && $feature.variants[$feature.variant_id].image_pairs}
                {assign var="obj_id" value=$feature.variant_id}
                <a href="{"categories.view?category_id=`$product.main_category`&features_hash=`$feature.features_hash`"|fn_url}">
                    {include file="common/image.tpl" image_width=$image_size images=$feature.variants[$feature.variant_id].image_pairs no_ids=true}
                </a>
            {else}
                <span class="ty-control-group__item">{feature_value feature=$feature}{if !$smarty.foreach.features_list.last}{/if}</span>
            {/if}
        {/foreach}
        {if !$no_container}</div>{/if}
    {/strip}
{/if}
