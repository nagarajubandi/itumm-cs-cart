<div id="autosuggest_results_container">
    {strip}
        <ul class="autosuggest">
            {if $products}
                {foreach from=$products item="product" name="autosuggest"}
                    <li>
                        <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                            <div class="result-row">
                            
                                {if $thumb.show eq 'Y'}
                                    <div class="result-row-image-container">
                                    {include file="common/image.tpl" image_width=$thumb.width images=$product.main_pair object_type="product" show_thumbnail="Y" image_height=$thumb.height}
                                    </div>
                                {/if}
                                <div class="result-row-text-container">
                                {if $product.product_code}
                                    {$product.product_code} - 
                                {/if}
                                {if $char_limit.enabled eq 'Y'}
                                    {$product.product|truncate:$char_limit.value}
                                {else}{$product.product}
                                {/if}
                                {if $product.price && $product.price != 0}
                                    <br><span class="ty-price-num">${$product.price|string_format:"%.2f"}</span>
                                {/if}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </a>        
                    </li>
                {/foreach}
                <li class='search-results-extra'>{__("showing")} {$products_total_count} {__("resulting")} {$total_found_items} {__("matches")} </li>
            {else}
                <li class="no-search-results">{__("no_matching_products")}</li>  
            {/if}
        </ul>
    {/strip}
<!--autosuggest_results_container--></div>