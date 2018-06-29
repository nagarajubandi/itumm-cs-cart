{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="manage_products_zip_form" class="form-horizontal">
{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}
{assign var="rev" value=$smarty.request.content_id|default:"pagination_contents"}
{assign var="c_icon" value="<i class=\"exicon-`$search.sort_order_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"exicon-dummy\"></i>"}
{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{if $products_with_zip}
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th width="1%" class="center">{include file="common/check_items.tpl"}</th>
    <th class="nowrap" width="10%"><a href="{"`$c_url`&sort_by=product_id&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("product_id")}{if $search.sort_by == "product_id"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
    <th class="nowrap" width="50%"><a href="{"`$c_url`&sort_by=product_name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("product_name")}{if $search.sort_by == "product_name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
    <th width="20%">{__("associated_pin_zip_codes")}</th>
    <th width="4%"class="right">&nbsp</th>
</tr>
</thead>
{foreach from=$products_with_zip item=product}
<tr>
	<td class="center">
        <input type="checkbox" name="product_ids[]" value="{$product.product_id}" class="checkbox cm-item" />
    </td>
    <td >
        {$product.product_id}
    </td>
    <td >
        <input type="hidden" name="products_data[{$product.product_id}][product]" value="{$product.product}" {if $no_hide_input_if_shared_product} class="{$no_hide_input_if_shared_product}"{/if} />
        <a class="row-status" href="{"products.update?product_id=`$product.product_id`"|fn_url}">{$product.product}</a>
    </td>
    <td >
        {if $product.codes}
        	{assign var=val value=$product.product_id}
			{capture name="manage_zip_codes"}
				{include file="addons/zipcode_validator/views/zipcode_validator/components/view_edit_code.tpl" product_id=$product.product_id zip_codes=$product.codes product_name=$product.product}
				<div class="buttons-container">
					{include file="buttons/save_cancel.tpl" but_text=__("save") but_name="dispatch[zipcode_validator.manage_zips.`$product.product_id`]" cancel_action="close"}
				</div>
			{/capture}
			{include file="common/popupbox.tpl" id="view_zip_$val" text="{__('list_of_zip_codes')}" content=$smarty.capture.manage_zip_codes link_text="{__('view_edit')}" act="edit"}
		{else}
			<span>{__("no_codes")}</span>
        {/if}
    </td>
    <td  class="nowrap">
        <div class="hidden-tools">
			{capture name="tools_list"}
				<li>{btn type="list" text=__("delete") class="cm-confirm cm-post" href="zipcode_validator.delete?product_id=`$product.product_id`"}</li>
            {/capture}
            {dropdown content=$smarty.capture.tools_list}
        </div>
    </td>
</tr>
{/foreach}
</table>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}
<div class="clearfix">
    {include file="common/pagination.tpl" div_id=$smarty.request.content_id}
</div>
</form>
{/capture}
{capture name="add_product_with_zip"}
	{include file="common/tools.tpl" tool_href="zipcode_validator.single_product" prefix="top" title=__("insert_product") hide_tools=true icon="icon-plus"}
    {capture name="tools_list"}
    	<li>
    		{btn type="list" text=__("export_selected") dispatch="dispatch[zipcode_validator.m_export]" form="manage_products_zip_form"}
    	</li>
        <li>
        	{btn type="delete_selected" dispatch="dispatch[zipcode_validator.m_delete]" form="manage_products_zip_form"}
        </li>
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
{/capture}

{capture name="sidebar"}
    {include file="addons/zipcode_validator/views/zipcode_validator/components/products_search_form.tpl" dispatch="zipcode_validator.manage" search=$search}
{/capture}

{include file="common/mainbox.tpl" title=__("list_of_product_with_their_zip_codes") content=$smarty.capture.mainbox title_extra=$smarty.capture.title_extra adv_buttons=$smarty.capture.add_product_with_zip select_languages=true buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar content_id="manage_products_with_zips"}