{** template-description:tmpl_grid **}

{if $settings.abt__unitheme.show_button_buy_in_product_lists.value == 'Y'}
    {assign var="show_add_to_cart" value=true}
{/if}

{if $settings.abt__unitheme.show_short_desc_in_multicolumns_list.value == 'Y'}
    {assign var="show_descr" value=true}
{/if}

{include file="blocks/list_templates/grid_list.tpl"
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