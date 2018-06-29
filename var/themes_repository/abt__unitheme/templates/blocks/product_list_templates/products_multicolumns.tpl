{** template-description:tmpl_grid **}

{if $settings.abt__unitheme.show_button_buy_in_product_lists.value == 'Y'}
    {assign var="show_add_to_cart" value=true}
{/if}

{if $settings.abt__unitheme.show_short_desc_in_multicolumns_list.value == 'Y'}
    {assign var="show_descr" value=true}
{/if}

{include file="blocks/list_templates/grid_list.tpl"
show_trunc_name=true
show_rating=true
show_old_price=true
show_price=true
show_list_discount=true
show_clean_price=true
show_list_buttons=false
but_role="action"
show_product_amount=false
show_discount_label=true
}