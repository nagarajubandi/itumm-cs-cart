{capture name="mainbox"}

{if $runtime.mode == "new"}
    <p>{__("text_admin_new_orders")}</p>
{/if}

{capture name="sidebar"}
    {hook name="orders:manage_sidebar"}
    {include file="common/saved_search.tpl" dispatch="orders.taxes" view_type="orders"}
    {include file="views/orders/components/taxes_search_form.tpl" dispatch="orders.taxes"}
    {/hook}
{/capture}

<form action="{""|fn_url}" method="post" target="_self" name="orders_list_form">

{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}

{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}

{assign var="rev" value=$smarty.request.content_id|default:"pagination_contents"}

{if $incompleted_view}
    {assign var="page_title" value=__("incompleted_orders")}
    {assign var="get_additional_statuses" value=true}
{else}
    {assign var="page_title" value=__("orders")}
    {assign var="get_additional_statuses" value=false}
{/if}
{assign var="page_title" value="Taxes"}
{assign var="order_status_descr" value=$smarty.const.STATUSES_ORDER|fn_get_simple_statuses:$get_additional_statuses:true}
{assign var="extra_status" value=$config.current_url|escape:"url"}
{$statuses = []}
{assign var="order_statuses" value=$smarty.const.STATUSES_ORDER|fn_get_statuses:$statuses:$get_additional_statuses:true}

    {assign var="hide_controls" value=false}
    {assign var="width_per" value=15}
    {if $runtime.company_id}
        {assign var="hide_controls" value=true}
        {assign var="width_per" value=20}
    {/if}

{if $orders} 

<table width="100%" class="table table-middle">
<thead>
<tr>
    <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=date&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("date")}{if $search.sort_by == "date"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
    <th width="5%">
        <span id="on_st"
              alt="{__("expand_collapse_list")}"
              title="{__("expand_collapse_list")}"
              class=" hand cm-combinations-visitors">
            <span class="icon-caret-right"></span>
        </span>
        <span id="off_st"
              alt="{__("expand_collapse_list")}"
              title="{__("expand_collapse_list")}"
              class="hand hidden cm-combinations-visitors">
            <span class="icon-caret-down"></span>
        </span>
    </th>
    <th>Order Id</th>
    {if !$hide_controls}
        <th>Vendor Name</th>
    {/if}

    {*<th width="{$width_per}%" class="right">GST Charged (in %)</th>*}
    <th width="{$width_per}%" class="right">GST (CGST, SGST & IGST)</th>
    <th width="{$width_per}%" class="right">Total Amount Deducting GST</th>
    <th width="{$width_per}%" class="right">Total Order value</th>
</tr>
</thead>
{foreach name="orders" from=$orders item="o"}
{hook name="orders:order_row"}
<tr>
    <td class="nowrap">{$o.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</td>
    <td class="left">
        <span name="plus_minus"
              id="on_payout_note_{$smarty.foreach.orders.iteration}"
              alt="{__("expand_collapse_list")}"
              title="{__("expand_collapse_list")}"
              class="hand cm-combination-visitors">
            <span class="icon-caret-right"></span>
        </span>
        <span name="minus_plus"
              id="off_payout_note_{$smarty.foreach.orders.iteration}"
              alt="{__("expand_collapse_list")}"
              title="{__("expand_collapse_list")}"
              class="hand hidden cm-combination-visitors">
            <span class="icon-caret-down"></span>
        </span>
    </td>
    <td>
        <a href="{"orders.details?order_id=`$o.order_id`"|fn_url}" class="underlined">{$o.order_id}</a>
    </td>
    {*<td>
        {include file="views/companies/components/company_name.tpl" object=$o}
    </td>*}
    {if !$hide_controls}
    <td>{$o.company_name}</td>
    {/if}
    {*<td class="right">{round(($o.total_tax/($o.total-$o.total_tax))*100, 2)}%</td>*}
    <td class="right">
        {include file="common/price.tpl" value=$o.total_tax}
    </td>
    <td class="right">
        {include file="common/price.tpl" value=($o.total-$o.total_tax)}
    </td>
    <td class="right">
        {include file="common/price.tpl" value=$o.total}
    </td>
</tr>
    <tr id="payout_note_{$smarty.foreach.orders.iteration}"
        class="row-more hidden">
        {if $hide_controls}
        <td colspan="6" class="row-more-body top row-gray">
            {else}
        <td colspan="7" class="row-more-body top row-gray">
            {/if}
            <table width="100%" class="table table-middle">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th width="15%" class="right">GST Charged (in %)</th>
                    <th width="15%" class="right">GST (CGST, SGST & IGST)</th>
                    <th width="15%" class="right">Total Amount Deducting GST</th>
                    <th width="15%" class="right">Total Order value</th>
                </tr>
                </thead>
                <tbody>
                    {foreach from=$o.order_details.products item="p"}
                    <tr>
                        <td>{$p.product}</td>
                        <td class="right">{round(($p.tax_value/($p.subtotal-$p.tax_value))*100)}%</td>
                        <td class="right">{include file="common/price.tpl" value=$p.tax_value}</td>
                        <td class="right">{include file="common/price.tpl" value=$p.subtotal-$p.tax_value}</td>
                        <td class="right">{include file="common/price.tpl" value=$p.subtotal}</td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </td>
    </tr>

{/hook}
{/foreach}

    <tr>
        <td></td>
        <td></td>
        <td></td>
        {if !$hide_controls}
            <td></td>
        {/if}
        <td class="right">
            <strong>{include file="common/price.tpl" value=$totals.tax_amount}</strong>
        </td>
        <td class="right">
            <strong>{include file="common/price.tpl" value=$totals.order_amount-$totals.tax_amount}</strong>
        </td>
        <td class="right">
            <strong>{include file="common/price.tpl" value=$totals.order_amount}</strong>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        {if !$hide_controls}
        <td></td>
        {/if}
        <td class="right">
            <strong>{include file="common/price.tpl" value=$totals.all_tax_amount}</strong>
        </td>
        <td class="right">
            <strong>{include file="common/price.tpl" value=$totals.all_order_amount-$totals.all_tax_amount}</strong>
        </td>
        <td class="right">
            <strong>{include file="common/price.tpl" value=$totals.all_order_amount}</strong>
        </td>
    </tr>
</table>
{/if}

{*{if $orders}
    <div class="statistic clearfix" id="orders_total">
        {hook name="orders:statistic_list"}
        <table class="pull-right ">
            {if $total_pages > 1 && $search.page != "full_list"}
                <tr>
                    <td>&nbsp;</td>
                    <td width="100px">{__("for_this_page_orders")}:</td>
                </tr>
                <tr>
                    <td>{__("gross_total")}:</td>
                    <td>{include file="common/price.tpl" value=$display_totals.gross_total}</td>
                </tr>
                {if !$incompleted_view}
                    <tr>
                        <td>{__("totally_paid")}:</td>
                        <td>{include file="common/price.tpl" value=$display_totals.totally_paid}</td>
                    </tr>
                {/if}
                <hr />
                <tr>
                    <td>{__("for_all_found_orders")}:</td>
                </tr>
            {/if}
            <tr>
                <td class="shift-right">{__("gross_total")}:</td>
                <td>{include file="common/price.tpl" value=$totals.gross_total}</td>
            </tr>
            {hook name="orders:totals_stats"}
                {if !$incompleted_view}
                    <tr>
                        <td class="shift-right"><h4>{__("totally_paid")}:</h4></td>
                        <td class="price">{include file="common/price.tpl" value=$totals.totally_paid}</td>
                    </tr>
                {/if}
            {/hook}
        </table>
        {/hook}
    <!--orders_total--></div>
{/if}*}

{include file="common/pagination.tpl" div_id=$smarty.request.content_id}


{capture name="adv_buttons"}
    {hook name="orders:manage_tools"}
        {include file="common/tools.tpl" tool_href="order_management.new" prefix="bottom" hide_tools="true" title=__("add_order") icon="icon-plus"}
    {/hook}
{/capture}

</form>
{/capture}

{capture name="incomplete_button"}
    {if $incompleted_view}
        <li>{btn type="list" href="orders.manage" text={__("view_all_orders")}}</li>
    {else}
        <li>{btn type="list" href="orders.manage?skip_view=Y&status=`$smarty.const.STATUS_INCOMPLETED_ORDER`" text={__("incompleted_orders")} form="orders_list_form"}</li>
    {/if}
{/capture}

{capture name="buttons"}
    {capture name="tools_list"}
        {if $orders}
		
  
         {if ! $runtime.company_id}   {$smarty.capture.incomplete_button nofilter} {/if}

            {if $orders && !$runtime.company_id}
                <li class="divider"></li>
                <li>{btn type="delete_selected" dispatch="dispatch[orders.m_delete]" form="orders_list_form"}</li>
            {/if}
        {else}
            {$smarty.capture.incomplete_button nofilter}
        {/if}
        {hook name="orders:list_tools"}
        {/hook}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
{/capture}

{include file="common/mainbox.tpl" title=$page_title sidebar=$smarty.capture.sidebar content=$smarty.capture.mainbox content_id="manage_orders"}
