{** block-description:blog.recent_posts_advanced **}

{assign var="parent_id" value=$block.content.items.parent_page_id}

{if $items}
{assign var="obj_prefix" value="`$block.block_id`000"}

<div class="ty-mb-l">
    <div class="ty-blog-recent-posts-advanced">
        {foreach from=$items item="page" name="fp"}
        	{if $smarty.foreach.fp.iteration <=7}
            <div class="ty-blog-recent-posts-advanced__item {if $smarty.foreach.fp.first}first{/if}">
            	<a href="{"pages.view?page_id=`$page.page_id`"|fn_url}" >
                    {if $smarty.foreach.fp.first}
                    {$image_data=$page.main_pair|fn_image_to_display:550:366}
                    <div class="ty-blog-recent-posts-advanced__img-block image-cover {if !$page.main_pair}no-image{/if}" {if $page.main_pair}style="background-image: url('{$image_data.image_path}');"{/if}><div class="ty-blog__date">{$page.timestamp|date_format:"`$settings.Appearance.date_format`"}</div></div>
                    {else}
                    {$image_data=$page.main_pair|fn_image_to_display:268:179}
                    <div class="ty-blog-recent-posts-advanced__img-block image-cover {if !$page.main_pair}no-image{/if}" {if $page.main_pair}style="background-image: url('{$image_data.image_path}');"{/if}><div class="ty-blog__date">{$page.timestamp|date_format:"`$settings.Appearance.date_format`"}</div></div>
                    {/if}
                </a>
                <a href="{"pages.view?page_id=`$page.page_id`"|fn_url}" class="blog-item-title">{$page.page|truncate:70:"...":true}</a>
            </div>
            {/if}
        {/foreach}
    </div>
    {if $parent_id}
        <div class="ty-mtb-xs ty-left">
            {include file="buttons/button.tpl" but_href="pages.view?page_id=`$parent_id`" but_text=__("view_all") but_role="text" but_meta="blog-ty-text-links__button"}
        </div>
    {/if}
</div>

{/if}