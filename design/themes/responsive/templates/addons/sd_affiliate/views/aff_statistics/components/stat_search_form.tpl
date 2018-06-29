{capture name="section"}

<form action="{""|fn_url}" name="general_stats_search_form" method="get">

{include file="common/period_selector.tpl" period=$statistic_search.period form_name="general_stats_search_form" tim_from=$statistic_search.start_date time_to=$statistic_search.end_date}

<div class="ty-control-group">
    <label class="ty-control-group__title">{__("action")}:</label>
    {html_checkboxes options=$payout_options name="statistic_search[payout_id]" selected=$statistic_search.payout_id columns=4}
</div>

<div class="ty-control-group">
    <label class="ty-control-group__title">{__("amount")} ({$currencies.$primary_currency.symbol nofilter}):</label>
    <input type="text" name="statistic_search[amount_from]" value="{$statistic_search.amount_from}" size="6" class="ty-input-text-short" />&nbsp;-&nbsp;<input type="text" name="statistic_search[amount_to]" value="{$statistic_search.amount_to}" size="6" class="ty-input-text-short" />
</div>

<div class="ty-control-group">
    <label class="ty-control-group__title">{__("status")}:</label>
    {html_checkboxes options=$status_options name="statistic_search[status]" selected=$statistic_search.status columns=3}
</div>

<div class="buttons-container ty-search-form__buttons-container">
    {include file="buttons/button.tpl" but_meta="ty-btn__secondary" but_text=__("search") but_name="dispatch[`$runtime.controller`.`$runtime.mode`.search]"}
</div>

</form>

{/capture}
{include file="common/section.tpl" section_title=__("search") section_content=$smarty.capture.section}
