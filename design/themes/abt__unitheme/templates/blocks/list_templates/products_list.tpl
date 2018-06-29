{if $products}

    {script src="js/tygh/exceptions.js"}

    {if !$no_pagination}
        {include file="common/pagination.tpl"}
    {/if}

    {if !$no_sorting}
        {include file="views/products/components/sorting.tpl"}
    {/if}
    <div class="product-list">
        {foreach from=$products item=product key=key name="products"}
            {capture name="capt_options_vs_qty"}{/capture}

            <div class="ty-product-list clearfix">
            {hook name="products:product_block"}
            {assign var="obj_id" value=$product.product_id}
            {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
                {include file="common/product_data.tpl" product=$product min_qty=true}

            {assign var="form_open" value="form_open_`$obj_id`"}
            {$smarty.capture.$form_open nofilter}
            {if $bulk_addition}
                <input class="cm-item ty-float-right ty-product-list__bulk" type="checkbox"
                       id="bulk_addition_{$obj_prefix}{$product.product_id}"
                       name="product_data[{$product.product_id}][amount]"
                       value="{if $js_product_var}{$product.product_id}{else}1{/if}"
                       {if ($product.zero_price_action == "R" && $product.price == 0)}disabled="disabled"{/if} />
            {/if}
                <div class="span4 ty-product-list__image">
	                {assign var="product_link" value="products.view?product_id=`$product.product_id`"|fn_url}
                    {hook name="products:product_block_image"}
                        <span class="cm-reload-{$obj_prefix}{$obj_id} image-reload"
                              id="list_image_update_{$obj_prefix}{$obj_id}">
                        {if !$hide_links}
                            <a href="{$product_link}">
                            <input type="hidden" name="image[list_image_update_{$obj_prefix}{$obj_id}][link]"
                                   value="{"products.view?product_id=`$product.product_id`"|fn_url}"/>
                                {/if}

                                {assign var="discount_label" value="discount_label_`$obj_prefix``$obj_id`"}
                                {$smarty.capture.$discount_label nofilter}

                                <input type="hidden" name="image[list_image_update_{$obj_prefix}{$obj_id}][data]"
                                       value="{$obj_id_prefix},{$settings.Thumbnails.product_lists_thumbnail_width},{$settings.Thumbnails.product_lists_thumbnail_height},product"/>
                                {include file="common/image.tpl" image_width=$settings.Thumbnails.product_lists_thumbnail_width
                                obj_id=$obj_id_prefix images=$product.main_pair image_height=$settings.Thumbnails.product_lists_thumbnail_height}

                            {if !$hide_links}</a>{/if}
                            <!--list_image_update_{$obj_prefix}{$obj_id}--></span>
                    {/hook}
                </div>
                <div class="ty-product-list__content">
                    {hook name="products:product_block_content"}
                    {if $js_product_var}
                        <input type="hidden" id="product_{$obj_prefix}{$product.product_id}"
                               value="{$product.product}"/>
                    {/if}
                        <div class="span11 ty-product-list__info">
                            <div class="ty-product-list__item-name">
                                {if $item_number == "Y"}<strong>{$smarty.foreach.products.iteration}.&nbsp;</strong>{/if}

                                {assign var="name" value="name_$obj_id"}
                                <bdi>{$smarty.capture.$name nofilter}</bdi>

                                {if ($ab_dotd_product_ids && $product.product_id|in_array:$ab_dotd_product_ids) or ($addons.ab__deal_of_the_day.status == 'A' && $product.promotions)}
                                    <div class="ab_dotd_product_label">{__('ab_dotd_product_label')}</div>
                                {/if}
                            </div>

                            <div class="advanced-layer">
                                {assign var="rating" value="rating_$obj_id"}
                                {if $smarty.capture.$rating|strlen > 40}
                                    <div class="product-list__rating">
                                        {$smarty.capture.$rating nofilter}{if $product.discussion_amount_posts > 0}<span class="cn-comments">({$product.discussion_amount_posts})</span>{/if}
                                    </div>
                                {else}
                                    <div class="product-list__rating no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i>{if $product.discussion_amount_posts > 0}<span class="cn-comments">({$product.discussion_amount_posts})</span>{/if}</div>
                                {/if}

                                {*{if $product.product_code}{assign var="sku" value="sku_$obj_id"}{$smarty.capture.$sku nofilter}{/if}*}
                            </div>

                            <div class="ty-product-list__description">
                                {assign var="prod_descr" value="prod_descr_`$obj_id`"}
                                {$smarty.capture.$prod_descr nofilter}
                            </div>

                            <div class="ty-product-list__feature">
                                {assign var="product_features" value="product_features_`$obj_id`"}
                                {$smarty.capture.$product_features nofilter}
                            </div>

                        </div>
                        <div class="span5 ty-product-list__control">

                            <div class="ty-product-list__buttons">
                                <div class="ty-product-list__price">
                                    {assign var="price" value="price_`$obj_id`"}
                                    {$smarty.capture.$price nofilter}

                                    {assign var="old_price" value="old_price_`$obj_id`"}
                                    {if $smarty.capture.$old_price|trim}
                                        {$smarty.capture.$old_price nofilter}
                                    {/if}

                                    {assign var="clean_price" value="clean_price_`$obj_id`"}
                                    {$smarty.capture.$clean_price nofilter}

                                    {assign var="list_discount" value="list_discount_`$obj_id`"}
                                    {$smarty.capture.$list_discount nofilter}
                                </div>

                                {if !$smarty.capture.capt_options_vs_qty}
                                    <div class="ty-product-list__option">
                                        {assign var="product_options" value="product_options_`$obj_id`"}
                                        {$smarty.capture.$product_options nofilter}
                                    </div>
                                    {assign var="product_amount" value="product_amount_`$obj_id`"}
                                    {$smarty.capture.$product_amount nofilter}
                                    <div class="ty-product-list__qty">
                                        {assign var="qty" value="qty_`$obj_id`"}
                                        {$smarty.capture.$qty nofilter}
                                    </div>
                                {/if}

                                {assign var="advanced_options" value="advanced_options_`$obj_id`"}
                                {$smarty.capture.$advanced_options nofilter}

                                {assign var="min_qty" value="min_qty_`$obj_id`"}
                                {$smarty.capture.$min_qty nofilter}

                                {assign var="product_edp" value="product_edp_`$obj_id`"}
                                {$smarty.capture.$product_edp nofilter}

                                {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                                {$smarty.capture.$add_to_cart nofilter}

                                {if $addons.wishlist.status == "A" && !$hide_wishlist_button}
                                    {*{include file="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" but_id="button_wishlist_`$obj_prefix``$product.product_id`" but_name="dispatch[wishlist.add..`$product.product_id`]" but_role="text"}*}
                                    {$is_wishlist_product=false}
                                    {if $smarty.session.wishlist.products}
                                        {foreach from=$smarty.session.wishlist.products key="key" item=p}
                                            {if $p.product_id == $product.product_id}
                                                {$is_wishlist_product=true}
                                                {$product.cart_id=$key}
                                            {/if}
                                        {/foreach}
                                    {/if}

                                    {if $auth.user_id == 0}
                                        <a href="{if $runtime.controller == "auth" && $runtime.mode == "login_form"}{$config.current_url|fn_url}{else}{"auth.login_form?return_url=`$return_current_url`"|fn_url}{/if}" {if $settings.Security.secure_storefront != "partial"} data-ca-target-id="login_block{$block.snapping_id}" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__text ty-add-to-wish text-button" title="Sign in"{else} class="ty-btn ty-btn__primary"{/if} rel="nofollow">Add to wishlist</a>

                                        {*{if $settings.Security.secure_storefront != "partial"}
                                            <div  id="login_block{$block.snapping_id}" class="hidden ng-login-popup" title="{__("sign_in")}">
                                                <div class="ty-login-popup">
                                                    {include file="views/auth/login_form.tpl" style="popup" id="popup`$block.snapping_id`"}
                                                </div>
                                            </div>
                                        {/if}*}

                                    {elseif $is_wishlist_product}
                                        <div class="wishlist-remove-item">
                                            <a href="{"wishlist.delete?cart_id=`$product.cart_id`"|fn_url}" class="ty-btn ty-btn__text ty-remove-from-wish text-button" title="{__("remove")}">Remove from wish list</a>
                                        </div>
                                    {else}
                                        {include file="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" but_id="button_wishlist_`$obj_prefix``$product.product_id`" but_name="dispatch[wishlist.add..`$product.product_id`]" but_role="text"}
                                    {/if}
                                {/if}
                                {if $settings.General.enable_compare_products == "Y" && !$hide_compare_list_button || $product.feature_comparison == "Y"}
                                    {include file="buttons/add_to_compare_list.tpl" product_id=$product.product_id}
                                {/if}
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    {/hook}
                </div>
            {assign var="form_close" value="form_close_`$obj_id`"}
            {$smarty.capture.$form_close nofilter}
                </div>
            {/hook}
        {/foreach}
    </div>
    <div class="clearfix"></div>
    {if $bulk_addition}
        <script type="text/javascript">
            (function (_, $) {

                $(document).ready(function () {

                    $.ceEvent('on', 'ce.commoninit', function (context) {
                        if (context.find('input[type=checkbox][id^=bulk_addition_]').length) {
                            context.find('.cm-picker-product-options').switchAvailability(true, false);
                        }
                    });

                    $(_.doc).on('click', '.cm-item', function () {
                        $('#opt_' + $(this).prop('id').replace('bulk_addition_', '')).switchAvailability(!this.checked, false);
                    });
                });

            }(Tygh, Tygh.$));
        </script>
    {/if}

    {if !$no_pagination}
        {include file="common/pagination.tpl" force_ajax=$force_ajax}
    {/if}

{/if}

{capture name="mainbox_title"}{$title}{/capture}