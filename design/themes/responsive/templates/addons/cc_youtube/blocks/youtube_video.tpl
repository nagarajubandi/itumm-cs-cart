{if !$video_block_id}
    {$video_block_id = $block.block_id}
{/if}

<div id="product_video_{$video_block_id}">
    {if !empty($product.youtube_link)}
        <iframe width="420" height="315" src="https://www.youtube-nocookie.com/embed/{$product.youtube_link}?rel=0&amp;controls={if $addons.cc_youtube.show_player_controls == 'Y'}1{else}0{/if}&amp;showinfo={if $addons.cc_youtube.show_title_and_actions == 'Y'}1{else}0{/if}" frameborder="0" allowfullscreen></iframe>
    {/if}
<!--product_bestbuy_review_list_{$video_block_id}--></div>

