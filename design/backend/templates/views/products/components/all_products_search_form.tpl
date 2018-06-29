<script type="text/javascript">
    function validate_all_product_search_form(){
        var query_len = $("#query").val().length;
        var $group = $("#query").closest("div.control-group");
        $($group).removeClass('error');
        $($group).find('label.control-label').removeClass('cm-failed-label');
        $($group).find('div.controls').find('input').removeClass('cm-failed-field');
        $($group).find('div.controls').find('span#email_error_message').remove();
        if(parseFloat(query_len) <= parseFloat(0)){
            $($group).addClass('error');
            $($group).find('label.control-label').addClass('cm-failed-label');
            $($group).find('div.controls').find('input').addClass('cm-failed-field');
            $($group).find('div.controls').append('<span id="email_error_message" class="help-inline"><p>The <b>Search</b> field is mandatory</p></span>')
            return false;
        } else {
            return true;
        }
    }
</script>

{if $in_popup}
    <div class="adv-search">
    <div class="group">
{else}
    <div class="cm-tabs-content">
    <h4 class="subheader">{__("search")}</h4>
{/if}

{if $page_part}
    {assign var="_page_part" value="#`$page_part`"}
{/if}

<form action="{""|fn_url}{$_page_part}" name="{$product_search_form_prefix}search_form" method="get" class="form-horizontal form-edit form-table cm-check-changes {$form_meta}" onsubmit="return validate_all_product_search_form();" id="all_product_search_form">
<input type="hidden" name="type" value="{$search_type|default:"simple"}" autofocus="autofocus" />
    <input type="hidden" name="show_mode" value="all">
{if $smarty.request.redirect_url}
    <input type="hidden" name="redirect_url" value="{$smarty.request.redirect_url}" />
{/if}
{if $selected_section != ""}
    <input type="hidden" id="selected_section" name="selected_section" value="{$selected_section}" />
{/if}
<input type="hidden" name="pcode_from_q" value="Y" />

{if $put_request_vars}
    {array_to_fields data=$smarty.request skip=["callback"]}
{/if}

{$extra nofilter}

{capture name="simple_search"}
    {hook name="products:simple_search"}
    <div class="control-group">
        <label class="control-label cm-required">Search for Product</label>
        <div class="controls">
            <input class="input-large" id="query" type="text" name="q" size="32" value="{$search.q}" />
        </div>
    </div>

    {*<div class="sidebar-field">
        <label>{__("price")}&nbsp;({$currencies.$primary_currency.symbol nofilter})</label>
        <input type="text" name="price_from" size="1" value="{$search.price_from}" onfocus="this.select();" class="input-small" /> - <input type="text" size="1" name="price_to" value="{$search.price_to}" onfocus="this.select();" class="input-small" />
    </div>

    <div class="sidebar-field">
        <label>{__("search_in_category")}</label>
        {if "categories"|fn_show_picker:$smarty.const.CATEGORY_THRESHOLD}
            {if $search.cid}
                {assign var="s_cid" value=$search.cid}
            {else}
                {assign var="s_cid" value="0"}
            {/if}
            <div class="controls">
            {include file="pickers/categories/picker.tpl" company_ids=$picker_selected_companies data_id="location_category" input_name="cid" item_ids=$s_cid hide_link=true hide_delete_button=true default_name=__("all_categories") extra=""}
            </div>
        {else}
            {if $runtime.mode == "picker"}
                {assign var="trunc" value="38"}
            {else}
                {assign var="trunc" value="25"}
            {/if}
            <select name="cid">
                <option value="0" {if $category_data.parent_id == "0"}selected="selected"{/if}>- {__("all_categories")} -</option>
                {foreach from=0|fn_get_plain_categories_tree:false:$smarty.const.CART_LANGUAGE:$picker_selected_companies item="search_cat" name=search_cat}
                {if $search_cat.store}
                {if !$smarty.foreach.search_cat.first}
                    </optgroup>
                {/if}

                <optgroup label="{$search_cat.category}">
                    {assign var="close_optgroup" value=true}
                    {else}
                    <option value="{$search_cat.category_id}" {if $search_cat.disabled}disabled="disabled"{/if} {if $search.cid == $search_cat.category_id}selected="selected"{/if} title="{$search_cat.category}">{$search_cat.category|escape|truncate:$trunc:"...":true|indent:$search_cat.level:"&#166;&nbsp;&nbsp;&nbsp;&nbsp;":"&#166;--&nbsp;" nofilter}</option>
                    {/if}
                    {/foreach}
                    {if $close_optgroup}
                </optgroup>
                {/if}
            </select>
        {/if}
    </div>*}
    {/hook}
{/capture}



{include file="common/advanced_search.tpl" simple_search=$smarty.capture.simple_search dispatch=$dispatch view_type="products" in_popup=$in_popup is_order_management=$is_order_management no_adv_link=true no_javascript=true }

<!--search_form--></form>
{if $in_popup}
    </div></div>
{else}
    </div><hr>
{/if}