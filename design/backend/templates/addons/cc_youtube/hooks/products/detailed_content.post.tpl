{if $runtime.company_id && "ULTIMATE"|fn_allowed_for || "MULTIVENDOR"|fn_allowed_for}
    {include file="common/subheader.tpl" title=__("youtube") target="#youtube_setting"}
    <div id="youtube_setting" class="collapse in">
        {include file="addons/cc_youtube/settings/product_youtube_videos.tpl"}
    </div>
{/if}