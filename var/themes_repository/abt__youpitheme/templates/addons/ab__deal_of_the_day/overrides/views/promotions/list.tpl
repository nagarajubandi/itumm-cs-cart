{include file="common/pagination.tpl"}
<div class="ab__dotd_promotions clearfix">
    {foreach $promotions as $promotion}
        {if $promotion.promotion_id}
        <div class="ab__dotd_promotions-item">
            <div class="ab__dotd_promotions-item_image">
                <a href="{"promotions.view?promotion_id=`$promotion.promotion_id`"|fn_url}">
                    {include file="common/image.tpl" images=$promotion.list_pair image_width=369 image_height=224}
                </a>
            </div>
            {if $promotion.to_date}
                {assign var="days_left" value=(($promotion.to_date-$smarty.now)/86400)|ceil}
                <div class="ab__dotd_promotions-item_days_left{if $days_left <= $addons.ab__deal_of_the_day.highlight_when_left} ab__dotd_highlight{/if}">
                    {if $days_left > 1}
                        {__('ab__dotd.days_left', [$days_left])}
                    {else}
                        {__('ab__dotd.today_only')}
                    {/if}
                </div>
            {/if}
            <div class="ab__dotd_promotions-item_date">
                {if $promotion.from_date}
                    {__('ab__dotd.from')} {$promotion.from_date|date_format:"`$settings.Appearance.date_format`"}
                {/if}
                {if $promotion.to_date}
                    {__('ab__dotd.to')} {$promotion.to_date|date_format:"`$settings.Appearance.date_format`"}
                {/if}
                <div class="ab__dotd_promotions-item_title"><a href="{"promotions.view?promotion_id=`$promotion.promotion_id`"|fn_url}">{$promotion.name nofilter}</a></div>
            </div>
        </div>
        {/if}
        {foreachelse}
        <p>{__("text_no_active_promotions")}</p>
    {/foreach}
</div>
{include file="common/pagination.tpl"}

{if $chains}
    <div class="ab__dotd_chains">
        <div class="ab__dotd_chains_title">{__('ab__dotd.chains_list.title')}</div>
        <div class="ab__dotd_chains_content">
            {include file="addons/abt__youpitheme/hooks/products/components/buy_together.tpl" chains=$chains show_scroll=false}
            {if $chains_search.total_pages > 1}
                <div class="ab__dotd_chains-show_more">
                    <span class="ab__dotd-text_get_more">{__('ab__dotd.get_more_combinations', [$chains_search.items_per_page])}</span>
                    <span class="ab__dotd-text_showed">{__('ab__dotd.showed_combitations', ['[n]' => $chains_search.items_per_page, '[total]' => $chains_search.total_items])}</span></span>
                </div>
            {/if}
        </div>
    </div>
{/if}

{capture name="mainbox_title"}{__("active_promotions")}{/capture}