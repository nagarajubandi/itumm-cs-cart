{if $category_banner}
<div class="category-banner {$grid_item_class}">
{if $category_banner.url}
<a {if $category_banner.target_blank == 'Y'}target="_blank"{/if} href="{$category_banner.url|fn_url}">
{/if}
{include file="common/image.tpl" images=$category_banner.main_pair}
{if $category_banner.url}
</a>
{/if}
</div>
{/if}