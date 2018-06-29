{include file="addons/sd_affiliate/common/affiliate_menu.tpl"}
{include file="addons/sd_affiliate/views/aff_statistics/components/stat_search_form.tpl"}

<div id="general_statistics" class="general-statistics">
    <table class="table ty-table">
        <thead>
            <tr>
                <th style="width: 40%">{__("action")}</th>
                <th style="width: 20%">{__("count")}</th>
                <th style="width: 20%">{__("sum")}</th>
                <th style="width: 20%">{__("avg")}</th>
            </tr>
        </thead>
        <tbody>
            {if $general_stats}
                {foreach from=$payout_types key="payout_id" item="a"}
                    {assign var="payout" value=$general_stats.$payout_id}
                    {assign var="payout_var" value=$a.title}
                    {if $payout.count}
                        <tr>
                            <td><strong>{__($payout_var)}</strong></td>
                            <td>{$payout.count|default:"0"}</td>
                            <td>{include file="common/price.tpl" value=$payout.sum|round:2}</td>
                            <td>{include file="common/price.tpl" value=$payout.avg|round:2}</td>
                        </tr>
                    {/if}
                {/foreach}

                {if $general_stats.total}
                    {assign var="payout" value=$general_stats.total}
                    <tr>
                        <td><strong>{__("total")}</strong></td>
                        <td><strong>{$payout.count|default:"0"}</strong></td>
                        <td><strong>{include file="common/price.tpl" value=$payout.sum|round:2}</strong></td>
                        <td><strong>{include file="common/price.tpl" value=$payout.avg|round:2}</strong></td>
                    </tr>
                {/if}
            {else}
                <tr class="ty-table__no-items">
                    <td colspan="4"><p class="ty-no-items">{__("no_data_found")}</p></td>
                </tr>
            {/if}
        </tbody>
    </table>

    {if $additional_stats}
        <div class="clearfix affiliate-plan-block">
            <table class="affiliate-plan__table">
                {foreach from=$additional_stats key="a_stats_name" item="a_stats_value" name="additional_stat"}
                    <tr class="affiliate-plan__row">
                        <td>{__($a_stats_name)}:</td>
                        <td style="width: 57%">{$a_stats_value}</td>
                    </tr>
                {/foreach}
            </table>
        </div>
    {/if}
</div>

{include file="common/pagination.tpl"}

{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{if $search.sort_order_rev == "asc"}
{assign var="sort_sign" value="<i class=\"ty-icon-down-dir\"></i>"}
{else}
{assign var="sort_sign" value="<i class=\"ty-icon-up-dir\"></i>"}
{/if}
{if !$config.tweaks.disable_dhtml}
    {assign var="ajax_class" value="cm-ajax"}
{/if}

<table class="table ty-table commissions-table">
    <thead>
        <tr>
            <th width="30%"><a class="{$ajax_class}" href="{"`$c_url`&sort_by=action&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("action")}</a>{if $search.sort_by == "action"}{$sort_sign nofilter}{/if}</th>
            <th width="16%"><a class="{$ajax_class}" href="{"`$c_url`&sort_by=date&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("date")}</a>{if $search.sort_by == "date"}{$sort_sign nofilter}{/if}</th>
            <th width="11%"><a class="{$ajax_class}" href="{"`$c_url`&sort_by=cost&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("cost")}</a>{if $search.sort_by == "cost"}{$sort_sign nofilter}{/if}</th>
            <th width="12%"><a class="{$ajax_class}" href="{"`$c_url`&sort_by=customer&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("customer")}</a>{if $search.sort_by == "customer"}{$sort_sign nofilter}{/if}</th>
            <th width="10%"><a class="{$ajax_class}" href="{"`$c_url`&sort_by=banner&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("banner")}</a>{if $search.sort_by == "banner"}{$sort_sign nofilter}{/if}</th>
            <th width="9%"><a class="{$ajax_class}" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("status")}</a>{if $search.sort_by == "status"}{$sort_sign nofilter}{/if}</th>
            <th width="12%" class="center">
                <i id="on_st" class="icon-right-dir dir-list cm-combinations-commissions" title="{__("expand_collapse_list")}"></i><i id="off_st" class="icon-down-dir dir-list hidden cm-combinations-commissions" title="{__("expand_collapse_list")}"></i>{__("extra")}</th>
        </tr>
    </thead>
    {foreach from=$list_stats item="row_stats" name="commissions"}
    {include file="addons/sd_affiliate/views/aff_statistics/components/additional_data.tpl" data=$row_stats.data assign="additional_data"}
    <tr {if $smarty.foreach.commissions.iteration is even}class="alt-row"{/if}>
        <td>
            <strong>{$row_stats.title}{$action_title}</strong>
        </td>
        <td>{$row_stats.date|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</td>
        <td class="ty-right">{include file="common/price.tpl" value=$row_stats.amount|round:2}{$action_amount}</td>
        <td>
            {$row_stats.customer_lastname} {$row_stats.customer_firstname}
            {if $row_stats.ip}<p><em>({$row_stats.ip})</em></p>{/if}</td>
        <td>{if $row_stats.banner}<a href="{"banners_manager.update?banner_type=`$row_stats.banner_type`&banner_id=`$row_stats.banner_id`"|fn_url}">{$row_stats.banner}</a>{else}&nbsp;&nbsp;---&nbsp;{/if}</td>
        <td>{if $row_stats.payout_id}{__("paidup")}{elseif $row_stats.approved=="Y"}{__("approved")}{elseif $row_stats.amount > 0}{__("awaiting_approval")}{else}&nbsp;&nbsp;---&nbsp;{/if}</td>
        <td class="ty-center nowrap">
            {if $row_stats.extra_data || $additional_data|strip_tags|trim}
                <a id="sw_commission_{$smarty.foreach.commissions.iteration}" class="cm-combination-commissions"><i id="on_commission_{$smarty.foreach.commissions.iteration}" class="icon-right-dir dir-list cm-combination-commissions" title="{__("expand_collapse_list")}"></i><i id="off_commission_{$smarty.foreach.commissions.iteration}" class="icon-down-dir dir-list hidden cm-combination-commissions" title="{__("expand_collapse_list")}"></i>{__("extra")}</a>
            {else}
            &nbsp;
            {/if}
        </td>
    </tr>
    {if $row_stats.extra_data || $additional_data|trim}
    <tr id="commission_{$smarty.foreach.commissions.iteration}" class="{$row_class_name} extra-row hidden">
        <td colspan="7">
        <div class="box">
            {if $row_stats.extra_data}
            <table class="table sortable table-width">
                <tr>
                    <th style="width: 25%">{__("action")}</th>
                    <th style="width: 10%">{__("cost")}</th>
                    <th>{__("affiliate")}</th>
                </tr>
            {foreach from=$row_stats.extra_data item="r_action" name="related_action"}
                <tr>
                    <td>{if $r_action.action_id == $row_stats.action_id}<strong>{/if}{$r_action.title}{if $r_action.tier} ({$r_action.tier} {__("tier_account")}){/if}{if $r_action.action_id == $row_stats.action_id}</strong>{/if}</td>
                    <td>{include file="common/price.tpl" value=$r_action.amount|round:2}</td>
                    <td>{if $r_action.firstname || $r_action.lastname} {$r_action.firstname} {$r_action.lastname}{/if}</td>
                <tr>
            {/foreach}
            </table>
            {/if}
            {if $additional_data|strip_tags|trim}
                {__("additional_data")}: {$additional_data nofilter}
            {/if}
        </div>
        </td>
    </tr>
    {/if}
{foreachelse}
    <tr class="ty-table__no-items">
        <td colspan="7"><p class="ty-no-items">{__("no_data_found")}</p></td>
    </tr>
{/foreach}
</table>
{include file="common/pagination.tpl"}

{capture name="mainbox_title"}
    {__(affiliates_partnership)} <span class="subtitle">/ {__("commissions")}</span>
{/capture}
