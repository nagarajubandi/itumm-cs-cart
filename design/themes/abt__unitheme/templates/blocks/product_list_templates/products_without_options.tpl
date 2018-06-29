{** template-description:tmpl_list_without_options **}

{if $settings.abt__unitheme.hide_short_features_in_product_list.value == 'N'}
    {$show_features=true}
{/if}

{include file="blocks/list_templates/products_list.tpl"
show_name=true 
show_sku=true 
show_rating=true
show_prod_descr=true 
show_old_price=true 
show_price=true 
show_clean_price=true 
show_list_discount=true 
show_discount_label=true 
show_product_amount=true 
show_product_edp=true 
show_qty=false
show_add_to_cart=true 
show_list_buttons=false 
show_descr=true 
but_role="action"}