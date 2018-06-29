{assign var="_title" value=$category_data.category|default:__("vendor_products")}
{include file="common/breadcrumbs.tpl"}
<div id="products_search_{$block.block_id}">

    {if $products}
        {assign var="title_extra" value="{__("products_found")}: `$search.total_items`"}
        {assign var="layouts" value=""|fn_get_products_views:false:0}
        {if $category_data.product_columns}
            {assign var="product_columns" value=$category_data.product_columns}
        {else}
            {assign var="product_columns" value=$settings.Appearance.columns_in_products_list}
        {/if}

        {if $layouts.$selected_layout.template}
            {include file="`$layouts.$selected_layout.template`" columns=$product_columns show_qty=true}
        {/if}
    {elseif !$subcategories}
        {hook name="products:search_results_no_matching_found"}
            <p class="ty-no-items">{__("text_no_matching_products_found")}</p>
        {/hook}
    {/if}
    
    {if $subcategories or $category_data.description || $category_data.main_pair}
		<div class="ab-category-description ty-wysiwyg-content ty-mb-l">{$category_data.description nofilter}</div>
    {/if}
    
<!--products_search_{$block.block_id}--></div>

{hook name="products:search_results_mainbox_title"}
{capture name="mainbox_title"}<span class="ty-mainbox-title__left">{$_title}</span><span class="ty-mainbox-title__right" id="products_search_total_found_{$block.block_id}">{$title_extra nofilter}<!--products_search_total_found_{$block.block_id}--></span>{/capture}
{/hook}