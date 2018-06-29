{capture name="mainbox"}

{include file="views/products/components/products_search_form.tpl" dispatch="vendors_products.manage"}

<div id="content_manage_products">
<form action="{""|fn_url}" method="post" name="manage_products_form">
<input type="hidden" name="category_id" value="{$search.cid}" />

{* [andyye] added: "disable_caching=true" *}
{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id disable_caching=true}
{* [/andyye] *}

{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}

{if $settings.DHTML.admin_ajax_based_pagination == "Y"}
	{assign var="ajax_class" value="cm-ajax cm-history"}
{/if}

{assign var="rev" value=$smarty.request.content_id|default:"pagination_contents"}

<table cellpadding="0" cellspacing="0" border="0" width="100%" class="table sortable hidden-inputs">
<tr>
	{if $search.cid && $search.subcats != "Y"}
	<th><a class="{$ajax_class}{if $search.sort_by == "position"} sort-link-{$search.sort_order}{/if}" href="{"`$c_url`&amp;sort_by=position&amp;sort_order=`$search.sort_order`"|fn_url}" rev={$rev}>{$lang.position_short}</a></th>
	{/if}
	<th width="5%"><span>{$lang.image}</span></th>
	<th width="60%"><a class="{$ajax_class}{if $search.sort_by == "product"} sort-link-{$search.sort_order}{/if}" href="{"`$c_url`&amp;sort_by=product&amp;sort_order=`$search.sort_order`"|fn_url}" rev={$rev}>{$lang.name}</a> / <a class="{$ajax_class}{if $search.sort_by == "code"} sort-link-{$search.sort_order}{/if}" href="{"`$c_url`&amp;sort_by=code&amp;sort_order=`$search.sort_order`"|fn_url}" rev={$rev}>{$lang.product_code}</a></th>
	<th width="5%"><a class="{$ajax_class}{if $search.sort_by == "price"} sort-link-{$search.sort_order}{/if}" href="{"`$c_url`&amp;sort_by=price&amp;sort_order=`$search.sort_order`"|fn_url}" rev={$rev}>{$lang.price} ({$currencies.$primary_currency.symbol})</a></th>
	<th width="5%"><a class="{$ajax_class}{if $search.sort_by == "amount"} sort-link-{$search.sort_order}{/if}" href="{"`$c_url`&amp;sort_by=amount&amp;sort_order=`$search.sort_order`"|fn_url}" rev={$rev}>{$lang.quantity}</a></th>
	<th>&nbsp;</th>
</tr>
{foreach from=$products item=product}
<tr {cycle values="class=\"table-row\", "}>
	{if $search.cid && $search.subcats != "Y"}
	<td><input type="text" name="products_data[{$product.product_id}][position]" size="3" value="{$product.position}" class="input-text-short" /></td>
	{/if}
	<td class="product-image-table">{include file="common/image.tpl" image=$product.main_pair.icon|default:$product.main_pair.detailed image_id=$product.main_pair.image_id image_width=50 object_type=$object_type href="vendors_products.update?product_id=`$product.product_id`"|fn_url}</td>
	<td>
		<div class="float-left">
			<input type="hidden" name="products_data[{$product.product_id}][product]" value="{$product.product}" />
			<a href="{"vendors_products.update?product_id=`$product.product_id`"|fn_url}" class="strong{if $product.status == "N"} manage-root-item-disabled{/if}">{$product.product|unescape} {include file="views/companies/components/company_name.tpl" company_name=$product.company_name company_id=$product.company_id}</a><div><span class="product-code-label">{$lang.product_code}: </span><input type="text" name="products_data[{$product.product_id}][product_code]" size="15" maxlength="32" value="{$product.product_code}" class="input-text product-code" disabled="disabled" /></div>
		</div>
	</td>
	<td>
		<input type="text" name="products_data[{$product.product_id}][price]" size="6" value="{$product.price}" class="input-text" /></td>
		
	<td>
		
		
		
		
		{if $product.tracking == "O"}
			{capture name="edit_variants_inventory"}
				{assign var="inventory" value=$product.product_id|fn_multiple_vendors_get_inventory}
				{if $inventory}
					{include file="addons/multiple_vendors/popup.tpl" product=$inventory}
				{/if}
			{/capture}
			{include file="common/popupbox.tpl" id="edit_variants_inventory_`$product.product_id`" text=$lang.inventory content=$smarty.capture.edit_variants_inventory link_text=$lang.edit act="general"}
		{else}
			<input type="text" name="products_data[{$product.product_id}][amount]" size="6" value="{$product.amount}" class="input-text-short" />
		{/if}
		
		
		
		
	</td>
	
	<td class="nowrap">
		{capture name="tools_items"}{/capture}
		{include file="common/table_tools_list.tpl" prefix=$product.product_id tools_list=$smarty.capture.tools_items href="my_vendors_products.update?product_id=`$product.product_id`"}
	</td>
</tr>
{foreachelse}
<tr class="no-items">
	<td colspan="{if $search.cid && $search.subcats != "Y"}12{else}11{/if}"><p>{$lang.no_data}</p></td>
</tr>
{/foreach}
</table>

{if $products}
	{include file="common/table_tools.tpl" href="#products" visibility="Y"}
{/if}

{include file="common/pagination.tpl" div_id=$smarty.request.content_id}

{if $products}
<div class="buttons-container buttons-bg">
	<div class="float-left">
		{capture name="tools_list"}
		<ul>
			<li><a class="cm-process-items cm-dialog-opener" rev="content_select_fields_to_edit" >{$lang.edit_selected}</a></li>
		</ul>
		{/capture}

		{include file="buttons/save.tpl" but_name="dispatch[my_vendors_products.m_update]" but_role="button_main" but_onclick="$('#save_button').click();"}
		{include file="common/tools.tpl" prefix="main`$smarty.request.content_id`" hide_actions=true tools_list=$smarty.capture.tools_list display="inline" link_text=$lang.choose_action}
	</div>
</div>
{/if}


{capture name="select_fields_to_edit"}

<p>{$lang.text_select_fields2edit_note}</p>
{include file="views/products/components/products_select_fields.tpl"}

<div class="buttons-container">
	{include file="buttons/save_cancel.tpl" but_text=$lang.modify_selected but_name="dispatch[products.store_selection]" cancel_action="close"}
</div>
{/capture}
{include file="common/popupbox.tpl" id="select_fields_to_edit" text=$lang.select_fields_to_edit content=$smarty.capture.select_fields_to_edit}


</form>
<!--content_manage_products--></div>

{/capture}
{include file="common/mainbox.tpl" title=$lang.my_shared_products content=$smarty.capture.mainbox title_extra=$smarty.capture.title_extra tools=$smarty.capture.tools select_languages=true}
