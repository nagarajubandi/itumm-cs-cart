<!--overrided in addon sd_vendor_products_database-->
{*{if $product.show_usual_product_template}*}
    <input type="hidden" name="product_data[{$product.product_id}][extra][vendor]" value="{$product.company_id}" />
    <input type="hidden" name="product_data[{$product.product_id}][product_id]" value="{$product.product_id}" />
    <input type="hidden" name="product_data[{$product.product_id}][extra][vendor_price]" value="{$product.price}" />
    <input type="hidden" name="product_data[{$product.product_id}][extra][vendor_name]" value="{$product.company_id|fn_get_company_name}" />
 
    {if $product.has_options && !$show_product_options && !$details_page}
        {if $but_role == "text"}
            {$opt_but_role="text"}
        {else}
            {$opt_but_role="action"}
        {/if}
        {include file="buttons/button.tpl" but_id="button_cart_`$obj_prefix``$obj_id`" but_text=__("select_options") but_href="products.view?product_id=`$product.product_id`" but_role=$opt_but_role but_name="" but_meta="ty-btn__primary ty-btn__big"}
    {else}
        {if $extra_button}{$extra_button nofilter}&nbsp;{/if}
            {if $addons.catalog_mode.status == 'A' && $addons.catalog_mode.main_store_mode == 'catalog'}
                {assign var="but_text" value=__("addons.sd_vendor_products_database.visit_dealer")}
            {else}
                {assign var="but_text" value=$but_text|default:__("add_to_cart")}
            {/if}
 
            {include file="buttons/add_to_cart.tpl" but_id="button_cart_`$obj_prefix``$obj_id`" but_name="dispatch[checkout.add..`$obj_id`]" but_role=$but_role block_width=$block_width obj_id=$obj_id product=$product but_meta=$add_to_cart_meta but_text=$but_text}

        {assign var="cart_button_exists" value=true}
    {/if}
{*{/if}*}
