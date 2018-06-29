<div class="ab__dotd_promotion {if $promotion.to_date && $promotion.to_date < $smarty.now}action-is-over{/if}">
<div class="row-fluid ab__dotd_promotion-main_info">
{if $promotion.main_pair}
<div class="span8 ab__dotd_promotion-image">
{include file="common/image.tpl" images=$promotion.main_pair}
</div>
{/if}
<div class="span8 ab__dotd_promotion-content">
<h1>{$promotion.h1 nofilter}
{if $promotion.to_date && $promotion.to_date < $smarty.now}
<span>({__('ab__dotd.promotion_expired')})</span>
{/if}
</h1>
<div class="ab__dotd_promotion-description ty-wysiwyg-content">{$promotion.detailed_description nofilter}</div>
{if $promotion.to_date && $promotion.to_date > $smarty.now}
<div class="ab__dotd_promotion-timer">
<div class="ab__dotd_promotion-timer_title"><b>{__('ab__dotd_time_left')}:</b></div>
{include file="addons/ab__deal_of_the_day/components/init_countdown.tpl" count_to_promo_end=true}
</div>
{/if}
{if $promotion.to_date || $promotion.from_date}
<div class="ab__dotd_promotions-item_date">
<p>{__("ab__dotd.page_action_period")}
{if $promotion.from_date}
{__('ab__dotd.from')} {$promotion.from_date|date_format:"`$settings.Appearance.date_format`"}
{/if}
{if $promotion.to_date}
{__('ab__dotd.to')} {$promotion.to_date|date_format:"`$settings.Appearance.date_format`"}
{/if}
</p>
</div>
{/if}
<div class="actions-link"><a href="{"promotions.list"|fn_url}">{__("active_promotions")}→</a></div>
</div>
</div>
{if $categories && $promotion.filter == 'Y'}
{$ajax_div_ids = "promotion_filter,promotion_products"}
{$filter_base_url = $config.current_url|fn_query_remove:"result_ids":"full_render":"category_id"}
<div class="ab__dotd_promotions-filter" data-ca-target-id="{$ajax_div_ids}" data-ca-base-url="{$filter_base_url|fn_url}" id="promotion_filter">
<div class="ab__dotd_promotions-filter_item{if !$selected_category_id} active{/if}">{__('ab__dotd.clear_filter')}</div>
{foreach $categories as $category_id => $category_name}
<div class="ab__dotd_promotions-filter_item{if $selected_category_id == $category_id} active{/if}" data-ca-category-id="{$category_id}">{$category_name nofilter}</div>
{/foreach}
<!--promotion_filter--></div>
{/if}
<div class="ab__dotd_promotions-products" id="promotion_products">
{if $products}
{assign var="layouts" value=""|fn_get_products_views:false:0}
{if $layouts.$selected_layout.template}
{include file="`$layouts.$selected_layout.template`" columns=$settings.Appearance.columns_in_products_list}
{/if}
{/if}
<!--promotion_products--></div>
</div>