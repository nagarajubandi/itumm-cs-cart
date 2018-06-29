{capture name="mainbox"}

<form action="" method="post" name="manage_products_form" id="manage_products_form">
<input type="hidden" name="category_id" value="{$search.cid}" />

    <input type="hidden" name="redirect_url" value="{$redirect_url}">

{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}

{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}

{assign var="rev" value=$smarty.request.content_id|default:"pagination_contents"}
{assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}

    {assign var="title_page" value="Product vendors"}

{if $product_data['vendors']}
<table width="100%" class="table table-middle">
<thead>
<tr>
    {*<th></th>*}
    <th>Vendor</th>
    <th>Price (₹)</th>
    <th>Quantity</th>
    <th width="10%" class="right">Status</th>
</tr>
</thead>

{foreach from=$product_data['vendors'] item=product}

    {assign var="title_page" value="`$product_data.product` - Vendors"}


<tr class="cm-row-status-{if $product_data.status === 'D'}{$product_data.status|lower}{else}{$product.status|lower}{/if} {$hide_inputs_if_shared_product}">

   {* <td class="left">
    <input type="checkbox" name="product_ids[]" value="{$product.product_id}" class="checkbox cm-item cm-item-status-{$product.status|lower}" /></td>
*}
    <td>
        {$product.company}
    </td>
    <td>
        <input type="text" name="products_data[{$product.product_id}][vendors][{$product.company_id}][price]" size="6" value="{$product.price|fn_format_price:$primary_currency:null:false}" class="input-mini input-hidden"/>
    </td>
    <td>
        <input type="text" name="products_data[{$product.product_id}][vendors][{$product.company_id}][amount]" size="6" value="{$product.amount}" class="input-mini input-hidden"/>
    </td>

    {if $product_data.status === 'D'}
        <td class="right nowrap">
            <div class="cm-popup-box dropleft dropdown dropleft">
                <a id="sw_select_{$product.product_vendor_sell_id}_wrap" class="btn-text btn dropdown-toggle cm-combination" data-toggle="dropdown">
                    Disabled
                </a>
            </div>
        </td>
    {else}
        <td class="right nowrap">
        {include file="common/select_popup.tpl" popup_additional_class="dropleft" id=$product.product_vendor_sell_id status=$product.status hidden=false object_id_name="product_vendor_sell_id" table="product_vendor_sell"}
        </td>
    {/if}


</tr>
{/foreach}
</table>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{capture name="select_fields_to_edit"}

<p>{__("text_select_fields2edit_note")}</p>
{include file="views/products/components/products_select_fields.tpl"}

<div class="buttons-container">
    {include file="buttons/save_cancel.tpl" but_text=__("modify_selected") but_name="dispatch[products.store_selection]" cancel_action="close"}
</div>

{/capture}

{capture name="buttons"}
    {*{capture name="tools_list"}
        {hook name="products:action_buttons"}
        <li>{btn type="list" text=__("global_update") href="products.global_update"}</li>
       {if ! $runtime.company_id} <li>{btn type="list" text=__("bulk_product_addition") href="products.m_add"}</li>
        <li>{btn type="list" text=__("product_subscriptions") href="products.p_subscr"}</li>{/if}
		{if $products}
            <li class="divider"></li>
            <li>{btn type="dialog" class="cm-process-items" text=__("edit_selected") target_id="content_select_fields_to_edit" form="manage_products_form"}</li>
            <li>{btn type="list" text=__("clone_selected") dispatch="dispatch[products.m_clone]" form="manage_products_form"}</li>
            <li>{btn type="list" text=__("export_selected") dispatch="dispatch[products.export_range]" form="manage_products_form"}</li>
            <li>{btn type="delete_selected" dispatch="dispatch[products.m_delete]" form="manage_products_form"}</li>
        {/if}
        {/hook}
    {/capture}*}
    {*{dropdown content=$smarty.capture.tools_list}*}
    {if $product_data['vendors'] && $product_data.status !== 'D'}
         {include file="buttons/save.tpl" but_name="dispatch[products.m_update]" but_role="submit-button" but_target_form="manage_products_form"}
    {/if}
{/capture}

{*{capture name="adv_buttons"}
    {hook name="products:manage_tools"}
        {include file="common/tools.tpl" tool_href="products.add" prefix="top" title=__("add_product") hide_tools=true icon="icon-plus"}
    {/hook}
{/capture}*}

{include file="common/popupbox.tpl" id="select_fields_to_edit" text=__("select_fields_to_edit") content=$smarty.capture.select_fields_to_edit}

<div class="clearfix">
    {include file="common/pagination.tpl" div_id=$smarty.request.content_id}
</div>

</form>

{/capture}

{*{capture name="sidebar"}
    {hook name="products:manage_sidebar"}
    {include file="common/saved_search.tpl" dispatch="products.manage" view_type="products"}
    {include file="views/products/components/products_search_form.tpl" dispatch="products.manage"}
    {/hook}
{/capture}*}

{include file="common/mainbox.tpl" title=$title_page content=$smarty.capture.mainbox title_extra=$smarty.capture.title_extra adv_buttons=$smarty.capture.adv_buttons select_languages=true buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar content_id="manage_products"}