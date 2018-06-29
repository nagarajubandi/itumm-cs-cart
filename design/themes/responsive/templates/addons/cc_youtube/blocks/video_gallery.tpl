{** block-description:video_gallery **}
{assign var="th_size" value=$thumbnails_size|default:150}

{assign var="gallery_video_limit" value=$block.properties.video_limit|default:6}

{assign var="videos" value=$gallery_video_limit|fn_cc_youtube_get_products_videos}

{if $videos}
    {assign var="show_player_controls" value=0}
    {assign var="show_title_and_actions" value=0}
    {if $addons.cc_youtube.show_player_controls == 'Y'}
        {$show_player_controls = 1}
    {/if}
    {if $addons.cc_youtube.show_title_and_actions == 'Y'}
        {$show_title_and_actions = 1}
    {/if}
    <a href="{"youtube_gallery.view"|fn_url}"><h1 class="ty-mainbox-title">{__("video_gallery")} </h1></a>
    <div class="video-gallery-block ty-product-img cm-preview-wrapper" style="{if $block.properties.play_video_block == 'N'}display: none;{/if}">
        {assign var="main_video" value=$videos|array_rand:1}
        <iframe id="youtube_galary_block" class="youtube-video" width="100%" src="https://www.youtube-nocookie.com/embed/{$videos.$main_video}?{if $addons.cc_youtube.show_suggested_videos_after_finish == 'Y'}rel=0&amp;{/if}controls={$show_player_controls}&amp;showinfo={$show_title_and_actions}" frameborder="0" allowfullscreen></iframe>
    </div>
    <input type="hidden" name="no_cache" value="1" />
    {strip}
    <div class="ty-center">
        {strip}
        <div class="owl-carousel owl-carousel-youtube" id="images_preview_{$preview_id}">
            {if $videos|count > 1}
                {foreach from=$videos item="video_image" key="product_id"}
                    <div class="cm-item-gallery ty-float-left">
                        {assign var="video_ico_arr" value=$video_image|fn_cc_youtube_get_video_ico:$product_id}
                        <a data-ca-gallery-large-id="det_img_link_{$product_id}_{$video_image}" onclick='gallery_show_video("{$video_image}", {$show_player_controls}, "block", {$show_title_and_actions})' class="cm-gallery-item" style="width: {$th_size}px">
                            {include file="common/image.tpl" images=$video_ico_arr image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$product_id`_`$video_image`_mini" video_ico="true"}
                        </a>
                    </div>
                {/foreach}
            {/if}
        </div>
        {/strip}
    </div>
    {/strip}
{/if}

{script src="js/tygh/product_image_gallery.js"}
