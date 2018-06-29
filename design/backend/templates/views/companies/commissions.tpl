{capture name="mainbox"}

    {capture name="tabsbox"}
    {/capture}

    {*{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section|default:"transactions" group_name="vendor_payouts"}*}

    {if $runtime.company_id}
        {assign var="hide_controls" value=true}
    {/if}

    {assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
    {assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
    {assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}

    <form action="{""|fn_url}" method="post" class="form-horizontal form-edit" name="manage_payouts_form">

        {include file="common/pagination.tpl" save_current_page=true save_current_url=true}

        <input type="hidden" name="redirect_url" value="{$c_url}"/>
        {if $payouts}
            <table width="100%" class="table table-middle" id="payouts_list">
                <thead>
                <tr>
                    {*<th class="left">{include file="common/check_items.tpl"}</th>*}
                    <th>
                        <a class="cm-ajax"
                           href="{"`$c_url`&sort_by=sort_date&sort_order=`$search.sort_order_rev`"|fn_url}"
                           data-ca-target-id="pagination_contents">
                            {__("date")}{if $search.sort_by == "sort_date"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}
                        </a>
                    </th>
                    <th>Order Id</th>
                    {if !$hide_controls}
                        <th>{__("vendor")}</th>
                    {/if}
                    <th class="right">Order Value</th>
                    <th class="right">Commission charged (in %)</th>
                    {if !$hide_controls}
                        <th class="right">Amount paid to Vendor</th>
                        <th class="right">Commission Earned</th>
                    {else}
                        <th class="right">Commission Paid</th>
                        <th class="right">Total amount received</th>
                    {/if}
                </tr>
                </thead>
                {foreach name="payouts" from=$payouts item=payout}
                    <tr class="payout payout-{$payout.payout_type|lower}">
                        {*<td class="left">
                            <input type="checkbox" name="payout_ids[]" value="{$payout.payout_id}" class="cm-item"/>
                        </td>*}
                        <td>
                            {$payout.payout_date|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}
                        </td>
                        <td>
                            <a href="{"orders.details?order_id=`$payout['order_id']`"|fn_url}">{$payout.order_id}</a>
                        </td>
                        {if !$runtime.company_id}
                            <td>
                                {if $payout.company_id}
                                    {$payout.company|default:__("deleted")}
                                {else}
                                    {$settings.Company.company_name}
                                {/if}
                            </td>
                        {/if}
                        <td class="right">
                            {include file="common/price.tpl" value=$payout.order_amount}
                        </td>
                        <td class="right">
                            {$payout.commission}%
                        </td>
                        {if !$runtime.company_id}
                            <td class="right">
                                {include file="common/price.tpl" value=($payout.order_amount-$payout.commission_amount)}
                            </td>
                            <td class="right">
                                {include file="common/price.tpl" value=$payout.commission_amount}
                            </td>
                        {else}
                            <td class="right">
                                {include file="common/price.tpl" value=$payout.commission_amount}
                            </td>
                            <td class="right">
                                {include file="common/price.tpl" value=($payout.order_amount-$payout.commission_amount)}
                            </td>
                        {/if}
                    </tr>
                {/foreach}

                <tr class="payout">
                    {*<td class="left">
                    </td>*}
                    <td>

                    </td>
                    <td>
                    </td>
                    {if !$runtime.company_id}
                        <td>
                        </td>
                    {/if}
                    <td class="right">
                        <strong>{include file="common/price.tpl" value=$totals.order_amount}</strong>
                    </td>
                    <td class="right">
                    </td>
                    {if !$runtime.company_id}
                        <td class="right">
                            <strong>{include file="common/price.tpl" value=($totals.order_amount-$totals.commission_amount)}</strong>
                        </td>
                        <td class="right">
                            <strong>{include file="common/price.tpl" value=$totals.commission_amount}</strong>
                        </td>
                    {else}
                        <td class="right">
                            <strong>{include file="common/price.tpl" value=$totals.commission_amount}</strong>
                        </td>
                        <td class="right">
                            <strong>{include file="common/price.tpl" value=($totals.order_amount-$totals.commission_amount)}</strong>
                        </td>
                    {/if}
                </tr>

                <tr class="payout">
                    {*<td class="left">
                    </td>*}
                    <td>

                    </td>
                    <td>
                    </td>
                    {if !$runtime.company_id}
                        <td>
                        </td>
                    {/if}
                    <td class="right">
                        <strong>{include file="common/price.tpl" value=$totals.all_order_amount}</strong>
                    </td>
                    <td class="right">
                    </td>
                    {if !$runtime.company_id}
                        <td class="right">
                            <strong>{include file="common/price.tpl" value=($totals.all_order_amount-$totals.all_commission_amount)}</strong>
                        </td>
                        <td class="right">
                            <strong>{include file="common/price.tpl" value=$totals.all_commission_amount}</strong>
                        </td>
                    {else}
                        <td class="right">
                            <strong>{include file="common/price.tpl" value=$totals.all_commission_amount}</strong>
                        </td>
                        <td class="right">
                            <strong>{include file="common/price.tpl" value=($totals.all_order_amount-$totals.all_commission_amount)}</strong>
                        </td>
                    {/if}
                </tr>
            <!--payouts_list--></table>
        {else}
            <p class="no-items">No commissions found.</p>
        {/if}

        <div class="clearfix">
            {include file="common/pagination.tpl"}
        </div>

        {*{if $payouts && $totals}
            {include file="views/companies/components/balance_info.tpl"}
        {/if}*}
    </form>
    {capture name="buttons"}
       {* {if !$hide_controls && $payouts}
            {capture name="tools_list"}
                <li>{btn type="delete_selected" dispatch="dispatch[companies.m_delete_payouts]" form="manage_payouts_form"}</li>
            {/capture}
            {dropdown content=$smarty.capture.tools_list}

            {include file="buttons/button.tpl"
                     but_text=__("save")
                     but_name="dispatch[companies.update_payout_comments]"
                     but_role="submit-link"
                     but_target_form="manage_payouts_form"
            }
        {/if}*}

        <a class="btn btn-secondary" onclick="printDiv('payouts_list')"> Print </a>
    {/capture}

    {*{capture name="adv_buttons"}
        {capture name="add_new_picker"}
            {include file="views/companies/components/balance_new_payment.tpl" c_url=$c_url}
        {/capture}
        {if $runtime.company_id}
            {$popup_title = __("new_withdrawal")}
            {$btn_title = __("add_withdrawal")}
        {else}
            {$popup_title = __("new_payout")}
            {$btn_title = __("add_payout")}
        {/if}
        {include file="common/popupbox.tpl"
                 id="add_payment"
                 text=$popup_title
                 content=$smarty.capture.add_new_picker
                 title=$btn_title
                 act="general"
                 icon="icon-plus"
        }
    {/capture}*}

    {capture name="sidebar"}
        {include file="common/saved_search.tpl" dispatch="companies.commissions" view_type="commissions"}
        {include file="views/companies/components/commissions_search_form.tpl" dispatch="companies.commissions"}
    {/capture}

{/capture}
{*{capture name="mainbox_title"}
    {__("vendor_accounting")}
    {if $current_balance}
        {capture name="balance"}
            {include file="common/price.tpl" value=$current_balance}
        {/capture}
        <span class="f-middle" style="color: #ffffff !important;">{__("vendor_payouts.current_balance", ["[balance]" => $smarty.capture.balance])}</span>
    {/if}
{/capture}*}
{capture name="mainbox_title"}
    Commissions
{/capture}
{include file="common/mainbox.tpl"
         title=$smarty.capture.mainbox_title
         content=$smarty.capture.mainbox
         buttons=$smarty.capture.buttons
         adv_buttons=$smarty.capture.adv_buttons
         sidebar=$smarty.capture.sidebar
}



<script language="javascript" type="text/javascript">
    function printDiv(divID) {
        //Get the HTML of div
        var divElements = document.getElementById(divID).innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;

        //Reset the page's HTML with div's HTML only
        document.body.innerHTML =
            "<html><head><title></title></head><body><table>" +
            divElements + "</table></body>";

        $('a').contents().unwrap();

        //Print Page
        window.print();

        //Restore orignal HTML
        document.body.innerHTML = oldPage;


    }
</script>