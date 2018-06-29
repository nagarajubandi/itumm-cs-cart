{if $page.page_type == $smarty.const.PAGE_TYPE_BLOG}

{if $subpages}

    {capture name="mainbox_title"}{/capture}

    <div class="ty-blog">
        {include file="common/pagination.tpl"}

        {foreach from=$subpages item="subpage"}
            <div class="ty-blog__item">
                <a href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}">
                    <h2 class="ty-blog__post-title">
                        {$subpage.page}
                    </h2>
                </a>
                
                {if $subpage.main_pair}
                <a href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}">
                    <div class="ty-blog__img-block">
                        {include file="common/image.tpl" image_width="320" obj_id=$subpage.page_id images=$subpage.main_pair}
                    </div>
                </a>
                {/if}
                
                <div class="ty-blog__description">
                    {if $addons.discussion.status == 'A'}
                        {include file="addons/discussion/views/discussion/info_in_blog.tpl"}
                    {/if}
	                <div class="ty-blog__date">{$subpage.timestamp|date_format:"`$settings.Appearance.date_format`"}</div>
	                <div class="ty-blog__author">{__("by")}: {$subpage.author}</div>
					
                    <div class="ty-wysiwyg-content">
                        <div>{$subpage.spoiler|strip_tags|truncate:380:"..." nofilter}</div>
                    </div>
                    <div class="ty-blog__read-more ty-mt-l">
                        <a class="ty-more-btn" href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}">{__("blog.read_more")}→</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        {/foreach}

        {include file="common/pagination.tpl"}
    </div>

{/if}

{if $page.description}
    {capture name="mainbox_title"}<span class="ty-blog__post-title" {live_edit name="page:page:{$page.page_id}"}>{$page.page}</span>{/capture}
{/if}

{/if}