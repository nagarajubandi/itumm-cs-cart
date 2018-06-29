{assign var="th_size" value=$thumbnails_size|default:35}

{if $product.main_pair.icon || $product.main_pair.detailed}
    {assign var="image_pair_var" value=$product.main_pair}
{elseif $product.option_image_pairs}
    {assign var="image_pair_var" value=$product.option_image_pairs|reset}
{/if}

{if $image_pair_var.image_id}
    {assign var="image_id" value=$image_pair_var.image_id}
{else}
    {assign var="image_id" value=$image_pair_var.detailed_id}
{/if}

{if !$preview_id}
    {assign var="preview_id" value=$product.product_id|uniqid}
{/if}

<div class="ty-product-img cm-preview-wrapper ty-product-video">

{if $image_pair_var.pair_id == $product.youtube_link && $details_page}
    {include file="addons/cc_youtube/common/image.tpl" obj_id="`$preview_id`_`$image_id`" images=$image_pair_var link_class="cm-image-previewer" image_width=$image_width image_height=$image_height video="true" image_id="preview[product_images_`$preview_id`]"}
{else}
    {include file="addons/cc_youtube/common/image.tpl" obj_id="`$preview_id`_`$image_id`" images=$image_pair_var link_class="cm-image-previewer" image_width=$image_width image_height=$image_height image_id="preview[product_images_`$preview_id`]"}
{/if}

{foreach from=$product.image_pairs item="image_pair"}
    {if $image_pair}
        {if $image_pair.image_id}
            {assign var="img_id" value=$image_pair.image_id}
        {else}
            {assign var="img_id" value=$image_pair.detailed_id}
        {/if}
        {if $image_pair.pair_id == $product.youtube_link && $details_page}
            {include file="addons/cc_youtube/common/image.tpl" images=$image_pair link_class="cm-image-previewer hidden" obj_id="`$preview_id`_`$img_id`" image_width=$image_width image_height=$image_height video="true" image_id="preview[product_images_`$preview_id`]"}
        {else}
            {include file="addons/cc_youtube/common/image.tpl" images=$image_pair link_class="cm-image-previewer hidden" obj_id="`$preview_id`_`$img_id`" image_width=$image_width image_height=$image_height image_id="preview[product_images_`$preview_id`]"}
        {/if}
    {/if}
{/foreach}
</div>

{if $product.image_pairs}
    {if $settings.Appearance.thumbnails_gallery == "Y"}
        <input type="hidden" name="no_cache" value="1" />
        {strip}
        <div class="ty-center ty-product-bigpicture-thumbnails_gallery">
            <div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block">
                {strip}
                <div class="ty-product-thumbnails owl-carousel cm-image-gallery" id="images_preview_{$preview_id}">
                    {if $image_pair_var}
                        <div class="cm-item-gallery ty-float-left">
                            <a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$image_id}" class="cm-gallery-item cm-thumbnails-mini active ty-product-thumbnails__item" style="width: {$th_size}px">
                                {if $img_id == $product.youtube_link && $details_page}
                                    {include file="addons/cc_youtube/common/image.tpl" images=$image_pair_var image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$image_id`_mini" video_ico="true"}
                                {else}
                                    {include file="addons/cc_youtube/common/image.tpl" images=$image_pair_var image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$image_id`_mini"}
                                {/if}
                            </a>
                        </div>
                    {/if}
                    {if $product.image_pairs}
                        {foreach from=$product.image_pairs item="image_pair"}
                            {if $image_pair}
                                <div class="cm-item-gallery ty-float-left">
                                    {if $image_pair.image_id}
                                        {assign var="img_id" value=$image_pair.image_id}
                                    {else}
                                        {assign var="img_id" value=$image_pair.detailed_id}
                                    {/if}
                                    <a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$img_id}" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item">
                                        {if $img_id == $product.youtube_link && $details_page}
                                            {include file="addons/cc_youtube/common/image.tpl" images=$image_pair image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$img_id`_mini" video_ico="true"}
                                        {else}
                                            {include file="addons/cc_youtube/common/image.tpl" images=$image_pair image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$img_id`_mini"}
                                        {/if}
                                    </a>
                                </div>
                            {/if}
                        {/foreach}
                    {/if}
                </div>
                {/strip}
            </div>
        </div>
        {/strip}
    {else}
        <div class="ty-product-thumbnails ty-center cm-image-gallery" id="images_preview_{$preview_id}" style="width: {$image_width}px;">
            {strip}
                {if $image_pair_var}
                <a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$image_id}" class="cm-thumbnails-mini active ty-product-thumbnails__item">
                    {if $image_id == $product.youtube_link && $details_page}
                        {include file="addons/cc_youtube/common/image.tpl" images=$image_pair_var image_width=$th_size image_height=$th_size show_detailed_link=false video_ico="true" obj_id="`$preview_id`_`$image_id`_mini"}
                    {else}
                        {include file="addons/cc_youtube/common/image.tpl" images=$image_pair_var image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$image_id`_mini"}
                    {/if}
                </a>
                {/if}
                {if $product.image_pairs}
                    {foreach from=$product.image_pairs item="image_pair"}
                        {if $image_pair}
                                {if $image_pair.image_id == 0}
                                    {assign var="img_id" value=$image_pair.detailed_id}
                                {else}
                                    {assign var="img_id" value=$image_pair.image_id}
                                {/if}
                                <a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$img_id}" class="cm-thumbnails-mini ty-product-thumbnails__item">

                                    {if $img_id == $product.youtube_link && $details_page}
                                        {include file="addons/cc_youtube/common/image.tpl" images=$image_pair image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$img_id`_mini" video_ico="true"}
                                    {else}
                                        {include file="addons/cc_youtube/common/image.tpl" images=$image_pair image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$img_id`_mini"}
                                    {/if}
                                </a>
                        {/if}
                    {/foreach}
                {/if}
            {/strip}
        </div>
    {/if}
{/if}


{include file="common/previewer.tpl"}
{script src="js/tygh/product_image_gallery.js"}

{hook name="products:product_images"}{/hook}