{** block-description:tmpl_top_buttons **}

{if $addons.wishlist.status == "A" && !$hide_wishlist_button}
    {assign var="wishlist_count" value=""|fn_wishlist_get_count}
    <div id="abt__unitheme_wishlist_count">
        <a class="cm-tooltip ty-wishlist__a {if $wishlist_count > 0}active{/if}" href="{"wishlist.view"|fn_url}" rel="nofollow" title="{__("view_wishlist")}"><i class="uni-wish1"></i>{if $wishlist_count > 0}<span class="count">{$wishlist_count}</span>{/if}</a>
        <!--abt__unitheme_wishlist_count--></div>
{/if}

{if $settings.General.enable_compare_products == "Y" && !$hide_compare_list_button || $product.feature_comparison == "Y"}
    {assign var="compared_products" value=""|fn_get_comparison_products}
    <div id="abt__unitheme_compared_products">
        <a class="cm-tooltip ty-compare__a {if $compared_products|count > 0}active{/if}" href="{"product_features.compare"|fn_url}" rel="nofollow" title="{__("compare_list")}"><i class="uni-compare"></i>{if $compared_products} <span class="count">{$compared_products|count}</span>{/if}</a>
        <!--abt__unitheme_compared_products--></div>
{/if}