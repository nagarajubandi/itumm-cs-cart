{script src="js/addons/sd_affiliate/update_affiliate_info.js"}
{if $runtime.mode == 'update' && $user_type == 'P'}
    <div id="content_affiliate_information">
        {include file="common/subheader.tpl" title=__("affiliate_information")}
        <div class="control-group">
            <label class="control-label" for="elm_affiliate_code">{__("affiliate_code")}:</label>
            <div class="controls">
                <input type="text" id="elm_affiliate_code" size="32" value="{$partner.user_id|fn_dec2any}" class="span3" disabled="disabled"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_affiliate_plan">{__("plan")}:</label>
            <div class="controls">
                <select name="update_data[plan_id]" id="elm_affiliate_plan" {if $partner.approved == "D" || $partner.approved == "N"}disabled="disabled"{/if} class="span3">
                    <option value="0" id="affiliate_plan_0" {if !$partner.plan_id}selected="selected"{/if}> - </option>
                    {if $affiliate_plans}{html_options options=$affiliate_plans selected=$partner.plan_id}{/if}
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_affiliate_status">{__("status")}:</label>
            <div class="controls">
                <select name="update_data[approved]" id="elm_affiliate_status" class="span3">
                    <option value="N" {if $partner.approved == "N"}selected="selected"{/if}>{__("awaiting_approval")}</option>
                    <option value="A" {if $partner.approved == "A"}selected="selected"{/if}>{__("approved")}</option>
                    <option value="D" {if $partner.approved == "D"}selected="selected"{/if}>{__("declined")}</option>
                </select>
            </div>
        </div>
        {include file="common/subheader.tpl" title=__("commissions_of_last_periods")}
        <div class="well content_affiliate_information">
            <table cellpadding="4" cellspacing="1" border="0">
                {foreach from=$last_payouts item=period}
                    <tr class = "{if $period.range.end < $partner.timestamp}hidden{/if}">
                        <td>
                        {assign var="time_from" value=$period.range.start|date_format:"`$settings.Appearance.date_format`"|escape:url}
                        {assign var="time_to" value=$period.range.end|date_format:"`$settings.Appearance.date_format`"|escape:url}
                        {if $period.amount > 0}<a href="{"aff_statistics.approve?partner_id=`$partner.user_id`&plan_id=`$partner.plan_id`&period=C&time_from=`$time_from`&time_to=`$time_to`"|fn_url}">{/if}{$period.range.start|date_format:$settings.Appearance.date_format}{if $period.amount > 0}</a>{/if}</td>
                        <td class="progress-small">{include file="views/sales_reports/components/graph_bar.tpl" bar_width="300px" value_width=$period.amount/$max_amount*100|round}</td>
                        <td class="pull-right">{include file="common/price.tpl" value=$period.amount}</td>
                    </tr>
                {/foreach}
                <tr>
                    <td></td>
                    <td><div class="pull-right">{__("total_commissions")}:</div></td>
                    <td><div class="pull-right">{include file="common/price.tpl" value=$total_commissions}</div></td>
                </tr>
                <tr>
                    <td></td>
                    <td><div class="pull-right">{__("balance_account")}:</div></td>
                    <td><div class="pull-right">{include file="common/price.tpl" value=$partner.balance}</div></td>
                </tr>
                <tr>
                    <td></td>
                    <td><div class="pull-right">{__("total_payouts")}:</div></td>
                    <td><div class="pull-right">{if $partner.total_payouts}<a href="{"payouts.manage?partner_id=`$partner.user_id`&period=A"|fn_url}">{include file="common/price.tpl" value=$partner.total_payouts}</a>{else}{include file="common/price.tpl" value=$partner.total_payouts}{/if}</div></td>
                </tr>
            </table>
        </div>
    </div>

    <div id="content_affiliate_tree">
        {include file="common/subheader.tpl" title=__("affiliate_tree")}
        <div class="items-container multi-level">
            {include file="addons/sd_affiliate/views/partners/components/partner_tree.tpl" partners=$partners header=1 level=0}
        </div>
    </div>
{/if}