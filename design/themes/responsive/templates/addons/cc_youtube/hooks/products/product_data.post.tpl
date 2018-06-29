{capture name="discount_label_`$obj_prefix``$obj_id`"}
    {if $show_discount_label && ($product.discount_prc || $product.list_discount_prc) && $show_price_values}
        <span class="ty-discount-label cm-reload-{$obj_prefix}{$obj_id}" id="discount_label_update_{$obj_prefix}{$obj_id}">
        <span class="ty-discount-label__item" id="line_prc_discount_value_{$obj_prefix}{$obj_id}"><span class="ty-discount-label__value" id="prc_discount_value_label_{$obj_prefix}{$obj_id}">{__("save_discount")} {if $product.discount}{$product.discount_prc}{else}{$product.list_discount_prc}{/if}%</span></span>
        <!--discount_label_update_{$obj_prefix}{$obj_id}--></span>
    {/if}

    {assign var="runtime_flag" value=false}

    {if $runtime.controller == 'categories' || $runtime.controller == 'companies' || $runtime.mode == 'search'}
        {$runtime_flag=true}
    {/if}

    {if $product.youtube_link && $runtime_flag}
        <div class="ty-youtube-play-label cm-reload-{$obj_prefix}{$obj_id}" id="youtube_play_label_update_{$obj_prefix}{$obj_id}">
            <div class="ty-youtube-play-label__value">
                {include file="addons/cc_youtube/common/youtube_play.tpl"
                    name=$product.product
                    youtube_link=$product.youtube_link}
            </div>
        <!--youtube_play_label_update_{$obj_prefix}{$obj_id}--></div>
    {/if}
{/capture}