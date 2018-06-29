{strip}
{assign var=cls value= $addons.csc_live_search}
{foreach from=$products item="product" name="products"} 
<li class="csc_template-small__item clearfix">      
    <div class="csc_template-small__item-img" style="width:{$cls.image_width}px">
       <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">{include file="common/image.tpl" image_width=$cls.image_width image_height=$cls.image_height images=$product.main_pair}</a>
    </div>
    <div class="csc_template-p-description">
        {if $product.category}
            <div class="cs-label-block">
             <a href="{"categories.view&category_id=`$product.main_category`"|fn_url}" class="lvs-category-label" style="
             {if $cls.show_category_gradient=="Y"}
             	background:linear-gradient(to bottom, #fff -5px, {$product.label_color} 100%);
             {else}
             	background:{$product.label_color};
             {/if}
             ">{$product.category}</a>
         </div>
         {/if}
         <a class="csc_no_line" href="{"products.view?product_id=`$product.product_id`"|fn_url}">{$product.product nofilter} </a>
         <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
            <div class="csc_product_code">{__('product_code')}: {$product.product_code}</div>
            <div class="csc_template-item-price">                    
                <span class="csc_price{if !$product.price|floatval && !$product.zero_price_action} hidden{/if}" id="line_discounted_price_{$obj_prefix}{$obj_id}">{include file="common/price.tpl" value=$product.price}</span>               
            {if $settings.Appearance.show_prices_taxed_clean == "Y" && $product.taxed_price}
            	&nbsp;           	    
                {if $product.clean_price != $product.taxed_price && $product.included_tax}
                    <span class="csc_price tax">({include file="common/price.tpl" value=$product.taxed_price} {__("inc_tax")})</span>
                {elseif $product.clean_price != $product.taxed_price && !$product.included_tax}
                    <span class="csc_price tax">({__("including_tax")})</span>
                {/if}
        	{/if}          
            </div>
          </a>              
    </div>      
</li>
{/foreach}

{if $live_search.total_items >  $live_search.page* $live_search.items_per_page}
    {assign var=diff value = $live_search.total_items - $live_search.page* $live_search.items_per_page}
    {if $diff < $live_search.items_per_page}
        {assign var=more value=$diff}
    {else}
        {assign var=more value=$live_search.items_per_page}
    {/if}
    <li class="ls-show-more-block"><a data-ls-page="{$live_search.page+1}" data-ls-q="{$live_search.q}" data-ls-block-id='{$live_search.block_id}' class="ls-show-more"><span>{__('cls_show_more')} {$more} {__('cls_products', [$more])}</span></a>
    
    <div class="ls-show-more-loading" style="display:none">
        <div class="cssload-container">
        <span class="cssload-dots"></span>
        <span class="cssload-dots"></span>
        <span class="cssload-dots"></span>
        <span class="cssload-dots"></span>
        <span class="cssload-dots"></span>
        <span class="cssload-dots"></span>
        <span class="cssload-dots"></span>
        <span class="cssload-dots"></span>
        <span class="cssload-dots"></span>
        <span class="cssload-dots"></span>
    </div>
    </div>
    </li>
{/if}
{/strip}