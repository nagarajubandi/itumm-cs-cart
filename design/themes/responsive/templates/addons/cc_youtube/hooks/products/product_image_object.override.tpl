{script src="js/addons/cc_youtube/func.js"}

{if $video == true && $hide_youtube_content != true}
    <iframe width="420" height="315" src="https://www.youtube-nocookie.com/embed/{$product.youtube_link}?rel=0&amp;{if $addons.cc_youtube.show_player_controls == 'N'}controls=0{/if}{if $addons.cc_youtube.show_title_and_actions == 'N'}&amp;showinfo=0{/if}" frameborder="0" allowfullscreen></iframe>
{elseif $show_video_ico && $hide_youtube_content != true && !$var.variant_id}
    {*<div id="video_iframe" data-product="{$product.product_id}">*}
        {*<iframe id="video_iframe" data-product="{$product.product_id}" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/{$product.youtube_link}?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>*}
    {*</div>*}
    <div id="video_iframe_{$product.product_id}" data-product="{$product.product_id}">
        <img class="ty-pict video-pict {$valign} {$class} {if $lazy_load}lazyOwl{/if} {if $generate_image}ty-spinner{/if} cm-image" {if $obj_id && !$no_ids}id="det_img_{$obj_id}"{/if} {if $generate_image}data-ca-image-path="{$image_data.image_path}"{/if} {if $lazy_load}data-{/if}src="http://img.youtube.com/vi/{$product.youtube_link}/0.jpg" alt="{$image_data.alt}" title="{$image_data.alt}" {if $image_onclick}onclick="{$image_onclick}"{/if}  {if $image_width || $image_height} style="max-width: 100%; min-width: 100%; max-height: 100%; max-height: 100%;"{/if}/>
    </div>
{else}
    {if $video_ico == true}
        <img class="ty-pict {$valign} {$class} {if $lazy_load}lazyOwl{/if} {if $generate_image}ty-spinner{/if} cm-image" {if $obj_id && !$no_ids}id="det_img_{$obj_id}"{/if} {if $generate_image}data-ca-image-path="{$image_data.image_path}"{/if} {if $lazy_load}data-{/if}src="{if $generate_image}{$images_dir}/icons/spacer.gif{else}{$image_data.image_path}{/if}" alt="{$image_data.alt}" title="{$image_data.alt}" {if $image_onclick}onclick="{$image_onclick}"{/if}  {if $image_width || $image_height} style="max-width: {$image_data.width}px; max-height: {$image_data.height}px; "{/if}/>
    {else}
        <img class="ty-pict {$valign} {$class} {if $lazy_load}lazyOwl{/if} {if $generate_image}ty-spinner{/if} cm-image" {if $obj_id && !$no_ids}id="det_img_{$obj_id}"{/if} {if $generate_image}data-ca-image-path="{$image_data.image_path}"{/if} {if $lazy_load}data-{/if}src="{if $generate_image}{$images_dir}/icons/spacer.gif{else}{$image_data.image_path}{/if}" alt="{$image_data.alt}" title="{$image_data.alt}" {if $image_onclick}onclick="{$image_onclick}"{/if} />
    {/if}
{/if}
