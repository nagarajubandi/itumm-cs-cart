{** block-description:product_from_other_sellers **}

{if $seller_products}
<style type="text/css">
    .product-from-sellers td {$ldelim} border: none !important; {$rdelim}
</style>
<div class="product-from-sellers">
{include file="blocks/list_templates/compact_list.tpl" 
show_name=true 
show_sku=false 
show_price=true 
show_old_price=true 
show_add_to_cart=$show_add_to_cart|default:true 
but_role="action" 
hide_form=true
hide_qty_label=true
show_discount_label=true
products=$seller_products
show_list_buttons=false
no_pagination=true
no_sorting=true
show_company_data=true
details_page=false
show_product_options=false}
</div>
{/if}