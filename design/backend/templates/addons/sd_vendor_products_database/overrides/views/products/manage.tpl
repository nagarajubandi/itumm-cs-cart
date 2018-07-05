{capture name="mainbox"}
<!--overrided in addon sd_vendor_products_database-->

    {assign var="show_search_form_by_default" value="false"}

    {if $search.show_mode && $search.show_mode == "all"}
        {if !($search.is_search && $search.is_search == "Y")}
            {assign var="show_search_form_by_default" value="true"}
        {/if}
    {/if}

    {if $show_search_form_by_default == "false"}
<form action="{""|fn_url}" method="post" name="manage_products_form" id="manage_products_form">
<input type="hidden" name="category_id" value="{$search.cid}" />

{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}

{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}

{assign var="rev" value=$smarty.request.content_id|default:"pagination_contents"}
{assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}
{if $smarty.const.ACCOUNT_TYPE == "vendor"}
    {$vendor_view=true}
    {assign var="hide_input_for_vendor" value="cm-hide-inputs"}
    {$non_editable=true}
{/if}
{if $smarty.request.show_mode}
    {assign var="hide_input_for_show_mode" value="cm-hide-inputs"}
    {$title=__("addons.sd_vendor_products_database.all_products")}
{else}
    {$title=__("products")}
{/if}

{if $smarty.const.ACCOUNT_TYPE == "admin"}
    {assign var="hide_input_for_vendor" value="cm-hide-inputs"}
    {assign var="hide_input_for_admin" value="cm-hide-inputs"}
    {$non_editable=true}
{/if}

{if $products} 
<table width="100%" class="table table-middle">
<thead>
<tr>
    {hook name="products:manage_head"}
    <th width="5%">
        {include file="common/check_items.tpl" check_statuses=''|fn_get_default_status_filters:true}
    </th>
    {if $search.cid && $search.subcats != "Y"}
    <th class="nowrap"><a class="cm-ajax" href="{"`$c_url`&sort_by=position&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("position_short")}{if $search.sort_by == "position"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
    {/if}
    <th width="5%"><span>{__("image")}</span></th>
    <th width="35%"><a class="cm-ajax" href="{"`$c_url`&sort_by=product&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("name")}{if $search.sort_by == "product"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a> /&nbsp;&nbsp;&nbsp; <a class="{$ajax_class}" href="{"`$c_url`&sort_by=code&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("sku")}{if $search.sort_by == "code"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
    <th width="10%"><a class="cm-ajax" href="{"`$c_url`&sort_by=price&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("price")} ({$currencies.$primary_currency.symbol nofilter}){if $search.sort_by == "price"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
    <th width="10%"><a class="cm-ajax" href="{"`$c_url`&sort_by=list_price&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("list_price")} ({$currencies.$primary_currency.symbol nofilter}){if $search.sort_by == "list_price"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
    {if $search.order_ids}
    <th width="5%"><a class="cm-ajax" href="{"`$c_url`&sort_by=p_qty&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("purchased_qty")}{if $search.sort_by == "p_qty"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
    <th width="5%"><a class="cm-ajax" href="{"`$c_url`&sort_by=p_subtotal&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("subtotal_sum")} ({$currencies.$primary_currency.symbol nofilter}){if $search.sort_by == "p_subtotal"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
    {/if}
    {*{if !$hide_input_for_show_mode}
    <th width="5%" class="nowrap"><a class="cm-ajax" href="{"`$c_url`&sort_by=amount&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("quantity")}{if $search.sort_by == "amount"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
    {/if}*}
        <th width="5%">Quantity</th>
	{if !$vendor_view}
	 <th width="15%">Number of Vendors</th>
	{/if}
    {/hook}
	
    <th width="5%">&nbsp;</th>
    <th width="10%" class="right"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
</tr>
</thead>
 
{foreach from=$products item=product}
	 
{if $vendor_view || $runtime.company_id}
    {assign var="product_url" value="products.view?product_id=`$product.product_id`"|fn_url:"C"}
{else}
    {assign var="product_url" value="products.update?product_id=`$product.product_id`"|fn_url}
{/if}

<tr class="cm-row-status-{$product.status|lower}">
    {hook name="products:manage_body"}
    <td class="left">
    <input type="checkbox" name="product_ids[]" value="{$product.product_id}" {if $hide_input_for_show_mode}onclick="fn_sd_vendor_products_database_enable_price(this, {$product.product_id});"{/if} class="checkbox cm-item cm-item-status-{$product.status|lower}" /></td>
    {if $search.cid && $search.subcats != "Y"}
    <td>
        <input type="text" name="products_data[{$product.product_id}][position]" size="3" value="{$product.position}" class="input-micro" /></td>
    {/if}
    <td>
        {include file="common/image.tpl" image=$product.main_pair.icon|default:$product.main_pair.detailed image_id=$product.main_pair.image_id image_width=$settings.Thumbnails.product_admin_mini_icon_width image_height=$settings.Thumbnails.product_admin_mini_icon_height href=$product_url}
    </td>
    <td>
        <input type="hidden" name="products_data[{$product.product_id}][product]" value="{$product.product}" />
        <{if $product_url}a{else}span{/if} class="row-status" title="{$product.product|strip_tags}" {if $product_url}href="{$product_url}" {if ($runtime.company_id)} target="_blank"{/if} {/if}>{$product.product|truncate:40 nofilter}</{if $product_url}a{else}span{/if}>
        <div class="product-code {$hide_input_for_vendor}">
            <span class="product-code-label row-status">{__("sku")} </span>
            <input type="text" name="products_data[{$product.product_id}][product_code]" size="17" maxlength="32" value="{$product.product_code}" class="input-hidden span3" />
        </div>
        {*{if !($smarty.request.show_mode && $smarty.request.show_mode == 'all') && $runtime.company_id}
            <div class="product-code">
                <span class="product-code-label row-status">{__("buy_now_url")} </span>
                <input type="text" name="products_data[{$product.product_id}][vendors][{$runtime.company_id}][buy_now_url]" size="15" value="{$product.vendors[$runtime.company_id].buy_now_url}" class="input-hidden span3" />
            </div>
        {/if}*}
        {if !$vendor_view}
            {include file="views/companies/components/company_name.tpl" object=$product}
        {/if}
    </td>
    {if $vendor_view or $runtime.company_id}
    <td>
        {if $hide_input_for_show_mode}<span id="span_price_{$product.product_id}">{if $product.vendors[$runtime.company_id].price}{$product.vendors[$runtime.company_id].price|fn_format_price:$primary_currency:null:false}{else}{$product.price|fn_format_price:$primary_currency:null:false}{/if}</span>{/if}
        <input type="text" {if $hide_input_for_show_mode}id="price_{$product.product_id}"{/if} name="products_data[{$product.product_id}][vendors][{$runtime.company_id}][price]" size="6" value="{if $product.vendors[$runtime.company_id].price}{$product.vendors[$runtime.company_id].price|fn_format_price:$primary_currency:null:false}{else}{$product.price|fn_format_price:$primary_currency:null:false}{/if}" class="input-mini input-hidden {if $hide_input_for_show_mode}hidden{/if}"/>
    </td>
    {else}
    <td class="{$hide_input_for_admin}">
        {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id="price_`$product.product_id`" name="update_all_vendors[price][`$product.product_id`]"}
        <input type="text" name="products_data[{$product.product_id}][price]" size="6" value="{$product.price|fn_format_price:$primary_currency:null:false}" class="input-mini input-hidden"/>
    </td>
    {/if}
    <td class="{$hide_input_for_vendor}">
        <input type="text" name="products_data[{$product.product_id}][list_price]" size="6" value="{$product.list_price}" class="input-mini input-hidden" />
    </td>
    {if $search.order_ids}
    <td>{$product.purchased_qty}</td>
    <td>{$product.purchased_subtotal}</td>
    {/if}
    {*{if !$hide_input_for_show_mode && ($vendor_view || $runtime.company_id)}
    <td>
        {if $hide_input_for_show_mode}<span id="span_amount_{$product.product_id}">{$product.vendors[$runtime.company_id].amount}</span>{/if}
        <input type="text" {if $hide_input_for_show_mode}id="amount_{$product.product_id}"{/if} name="products_data[{$product.product_id}][vendors][{$runtime.company_id}][amount]" size="6" value="{$product.vendors[$runtime.company_id].amount}" class="input-micro input-hidden {if $hide_input_for_show_mode}hidden{/if}" />
    </td>
    {elseif !$hide_input_for_show_mode}
    <td>
        {if $product.tracking == "ProductTracking::TRACK_WITH_OPTIONS"|enum}
        {include file="buttons/button.tpl" but_text=__("edit") but_href="product_options.inventory?product_id=`$product.product_id`" but_role="edit"}
        {else}
        <input type="text" name="products_data[{$product.product_id}][amount]" size="6" value="{$product.amount}" class="input-micro input-hidden" />
        {/if}
    </td>
    {/if}*}
    {/hook}

   <!-- <td class="{$hide_input_for_admin}">
        <span id="span_amount_{$product.product_id}">{if $product.vendors[$runtime.company_id].amount}{$product.vendors[$runtime.company_id].amount}{else}{$product.amount}{/if}</span> 
    </td>-->
	
	 {if $vendor_view or $runtime.company_id}

    {if $smarty.request.show_mode}
        <td>
            {if $hide_input_for_show_mode}<span id="span_amount_{$product.product_id}"></span>{/if}
            <input type="text" {if $hide_input_for_show_mode}id="amount_{$product.product_id}"{/if} name="products_data[{$product.product_id}][vendors][{$runtime.company_id}][amount]" size="6" value="" class="input-mini input-hidden {if $hide_input_for_show_mode}hidden{/if}"/>
        </td>
    {else}
    <td>
        {if $hide_input_for_show_mode}<span id="span_price_{$product.product_id}">{if $runtime.company_id}{$product.vendors[$runtime.company_id].amount}{else}{$product.amount}{/if}</span>{/if}
        <input type="text" {if $hide_input_for_show_mode}id="price_{$product.product_id}"{/if} name="products_data[{$product.product_id}][vendors][{$runtime.company_id}][amount]" size="6" value="{if $runtime.company_id}{$product.vendors[$runtime.company_id].amount}{else}{$product.amount}{/if}" class="input-mini input-hidden {if $hide_input_for_show_mode}hidden{/if}"/>
    </td>
    {/if}
	 
    {else}
    <td class="{$hide_input_for_admin}">
        {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id="price_`$product.product_id`" name="update_all_vendors[price][`$product.product_id`]"}
        <input type="text" name="products_data[{$product.product_id}][price]" size="6" value="{if $product.vendors[$runtime.company_id].amount}{$product.vendors[$runtime.company_id].amount}{else}{$product.amount}{/if}" class="input-mini input-hidden"/>
    </td>
    {/if}
	
	
	
	
	
	
	
	{if !$vendor_view}
	 <td align="center"><a href="{""|fn_url}?dispatch=products.vendors&product_id={$product.product_id}">{count($vendor_sell_product[$product.product_id])}<a></td>
	{/if}
    <td class="nowrap">
        {if !$hide_input_for_show_mode}
            <div {*class="hidden-tools"*}>
                {capture name="tools_list"}
                    {hook name="products:list_extra_links"}
                        {if $smarty.session.auth.user_type == 'A' || ($smarty.session.auth.user_type == 'V' && $product.show_usual_product_template && $enable_create_products)}
                            <li>{btn type="list" text=__("edit") href="products.update?product_id=`$product.product_id`"}</li>
                        {/if}
                        <li>{btn type="list" text=__("delete") class="cm-confirm" href="products.delete?product_id=`$product.product_id`" method="POST"}</li>
                        {if $smarty.session.auth.user_type == 'A' }
                            <li>{btn type="list" text="Vendors" href="products.vendors?product_id=`$product.product_id`"}</li>
                        {/if}
                    {/hook}
                {/capture}
                {dropdown content=$smarty.capture.tools_list}
            </div>
        {else}
            {include file="buttons/button.tpl" but_id="sell_button_{$product.product_id}" but_name="dispatch[products.sell..`$product.product_id`]" but_role="submit-button" but_meta="hidden" but_target_form="manage_products_form" but_text=__("addons.sd_vendor_products_database.sell")}
            {include file="buttons/button.tpl" but_id="disbaled_sell_button_{$product.product_id}" but_name="dispatch[products.sell..`$product.product_id`]" but_disabled="true" but_target_form="manage_products_form" but_text=__("addons.sd_vendor_products_database.sell")}

        {/if}
    </td>
    <td class="right nowrap">

    {if $smarty.session.auth.user_type == 'V' && !($product.show_usual_product_template && $enable_create_products)}
        {$non_editable_status = true}
    {else}
        {$non_editable_status = false}
    {/if}
    {if $smarty.session.auth.user_type == 'V'}
   <div> {include file="common/select_popup.tpl" popup_additional_class="dropleft" id=$product.product_id status=$product.status   items_status="products"|fn_get_default_product_statuses:$product.status hidden=true object_id_name="product_id" table="products" non_editable=$non_editable_status} </div>
	{if $product.status == 'D'}	<div style="color: red"><a href="/support/" style="color: red" target="_blank"> Click here</a> to request for enabling product</a></span></div>
	 {/if}
    {else} 
    {include file="common/select_popup.tpl" popup_additional_class="dropleft" id=$product.product_id status=$product.status    hidden=true object_id_name="product_id" table="products" non_editable=$non_editable_status}
	{/if}
    </td>
</tr>
{/foreach}
</table>
{else}
    <p class="no-items">No results found.</p>
{/if}

{capture name="select_fields_to_edit"}

<p>{__("text_select_fields2edit_note")}</p>
{include file="views/products/components/products_select_fields.tpl"}

<div class="buttons-container">
    {include file="buttons/save_cancel.tpl" but_text=__("modify_selected") but_name="dispatch[products.store_selection]" cancel_action="close"}
</div>
{/capture}

{capture name="buttons"}
    {capture name="tools_list"}
        {hook name="products:action_buttons"}
        {if !$hide_input_for_show_mode}
        <li>{btn type="list" text=__("global_update") href="products.global_update"}</li>
        {/if}
        {*{if !$hide_input_for_show_mode}
        {if !($smarty.const.ACCOUNT_TYPE == "vendor" && $smarty.request.show_mode && $addons.sd_vendor_products_database.allow_vendors_create_products == 'Y' && $addons.sd_vendor_products_database.share_vendor_products == 'N') && $enable_create_products}
            <li>{btn type="list" text=__("bulk_product_addition") href="products.m_add"}</li>
        {/if}
        {/if}
        <li>{btn type="list" text=__("product_subscriptions") href="products.p_subscr"}</li>*}
        {if $products}
            {if !$vendor_view}
            <li class="divider"></li>
            {/if}
            {if !$hide_input_for_show_mode}
            <li>{btn type="dialog" class="cm-process-items" text=__("edit_selected") target_id="content_select_fields_to_edit" form="manage_products_form"}</li>
            {/if}
            <li>{btn type="list" text=__("clone_selected") dispatch="dispatch[products.m_clone]" form="manage_products_form"}</li>
            {if !$hide_input_for_show_mode}
            <li>{btn type="list" text=__("export_selected") dispatch="dispatch[products.export_range]" form="manage_products_form"}</li>
            <li>{btn type="delete_selected" dispatch="dispatch[products.m_delete]" form="manage_products_form"}</li>
            {else}
            <li>{btn type="list" text=__("addons.sd_vendor_products_database.sell_selected") dispatch="dispatch[products.m_sell]" form="manage_products_form"}</li>
            {/if}
        {/if}
        {/hook}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
    {if $products && !$hide_input_for_show_mode && $smarty.const.ACCOUNT_TYPE == "vendor"}
         {include file="buttons/save.tpl" but_name="dispatch[products.m_update]" but_role="submit-button" but_target_form="manage_products_form"}
    {/if}
{/capture}

{capture name="adv_buttons"}
    {hook name="products:manage_tools"}
        {if (!($smarty.const.ACCOUNT_TYPE == "vendor" && $smarty.request.show_mode && $addons.sd_vendor_products_database.allow_vendors_create_products == 'Y' && $addons.sd_vendor_products_database.share_vendor_products == 'N') && $enable_create_products && !$hide_input_for_show_mode) || $smarty.const.ACCOUNT_TYPE == "admin"}
            {include file="common/tools.tpl" tool_href="products.add" prefix="top" title=__("add_product") hide_tools=true icon="icon-plus"}
        {/if}
    {/hook}
{/capture}

{include file="common/popupbox.tpl" id="select_fields_to_edit" text=__("select_fields_to_edit") content=$smarty.capture.select_fields_to_edit}

<div class="clearfix">
    {include file="common/pagination.tpl" div_id=$smarty.request.content_id}
</div>

</form>
    {else}
        {$title=__("addons.sd_vendor_products_database.all_products")}
        {include file="common/saved_search.tpl" dispatch="products.manage" view_type="products"}
        {include file="views/products/components/all_products_search_form.tpl" dispatch="products.manage"}
    {/if}


{/capture}

{if !$search.show_mode || $search.show_mode != "all"}
    {if $show_search_form_by_default == "false"}
        {capture name="sidebar"}
            {include file="common/saved_search.tpl" dispatch="products.manage" view_type="products"}
            {include file="views/products/components/products_search_form.tpl" dispatch="products.manage"}
        {/capture}
    {/if}
{/if}

{include file="common/mainbox.tpl" title=$title content=$smarty.capture.mainbox title_extra=$smarty.capture.title_extra adv_buttons=$smarty.capture.adv_buttons select_languages=true buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar content_id="manage_products"}
