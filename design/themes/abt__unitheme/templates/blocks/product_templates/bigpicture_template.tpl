{script src="js/tygh/exceptions.js"}

<div class="ty-product-bigpicture uni-extended-blocks">
    {hook name="products:view_main_info"}
    {if $product}
        {assign var="obj_id" value=$product.product_id}
        {include file="common/product_data.tpl" product=$product but_role="big" but_text=__("add_to_cart")}

        {if !$hide_title}
            <h1 class="ty-product-block-title" {live_edit name="product:product:{$product.product_id}"}><bdi>{$product.product nofilter}</bdi></h1>
        {/if}
        {include file="common/breadcrumbs.tpl"}
        <div class="ty-product-bigpicture__left">
            <div class="ty-product-bigpicture__left-wrapper">

                {hook name="products:image_wrap"}
                {if !$no_images}
                    <div class="ty-product-bigpicture__img {if $product.image_pairs|@count < 1} ty-product-bigpicture__no-thumbs{/if} cm-reload-{$product.product_id} {if $settings.Appearance.thumbnails_gallery == "Y"}ty-product-bigpicture__as-gallery{else}ty-product-bigpicture__as-thumbs{/if}"
                         id="product_images_{$product.product_id}_update">
                        {assign var="discount_label" value="discount_label_`$obj_prefix``$obj_id`"}
                        {if $product.image_pairs}
                            <div class="{if $settings.Appearance.thumbnails_gallery == "N"}{if count($product.image_pairs) > 5}active-gallery two-col{else}active-gallery one-col{/if}{/if}">
                                {$smarty.capture.$discount_label nofilter}
                            </div>
                        {else}
                            {$smarty.capture.$discount_label nofilter}
                        {/if}

                        <div class="{if $settings.Appearance.thumbnails_gallery == "N"}{if count($product.image_pairs) > 5}two-col{else}one-col{/if}{/if}">{include file="views/products/components/product_images.tpl" product=$product show_detailed_link="Y" thumbnails_size=70}
                            <div class="sb-grid ty-center">{hook name="products:product_detail_bottom"}{/hook}</div>
                        </div>
                        <!--product_images_{$product.product_id}_update--></div>
                {/if}
                {/hook}
                <div class="clearfix"></div>
                {hook name="products:ab__deal_of_the_day_product_view"}{/hook}
            </div>
        </div>
        <div class="ty-product-bigpicture__right">
            <div class="advanced-layer-01">
                {if $product.discussion_type && $product.discussion_type != 'D'}
                    <div class="ty-product-block__rating">
                        {assign var="rating" value="rating_`$obj_id`"}
                        {if $product.discussion.search.total_items > 0}
                            <div class="ty-discussion__rating-wrapper" id="average_rating_product">
                                {$smarty.capture.$rating nofilter}
                                <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion">{$product.discussion.search.total_items} {__("reviews", [$product.discussion.search.total_items])}</a><a class="ty-discussion__review-write cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="new_post_dialog_{$obj_id}" rel="nofollow">{__("write_review")}</a>
                            </div>
                        {else}
                            <div class="ty-discussion__rating-wrapper">
                                <span class="ty-nowrap no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span>
                                <a class="ty-discussion__review-write cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="new_post_dialog_{$obj_id}" rel="nofollow">{__("write_review")}</a>
                            </div>
                        {/if}
                    </div>
                {/if}
            </div>

            {assign var="form_open" value="form_open_`$obj_id`"}
            {$smarty.capture.$form_open nofilter}

            {assign var="old_price" value="old_price_`$obj_id`"}
            {assign var="price" value="price_`$obj_id`"}
            {assign var="clean_price" value="clean_price_`$obj_id`"}
            {assign var="list_discount" value="list_discount_`$obj_id`"}
            {assign var="discount_label" value="discount_label_`$obj_id`"}

            <div class="{if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}prices-container {/if}price-wrap">
                {if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}
                <div class="ty-product-bigpicture__prices">
                    {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}
                    {/if}

                    {if $smarty.capture.$price|trim}
                        <div class="ty-product-block__price-actual">
                            {$smarty.capture.$price nofilter}
                        </div>
                    {/if}

                    {if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}
                    {$smarty.capture.$clean_price nofilter}
                    {$smarty.capture.$list_discount nofilter}
                </div>
                {/if}
				{if $show_descr}
                    {assign var="prod_descr" value="prod_descr_`$obj_id`"}
                       
                        <div class="ty-product-block__description">{$smarty.capture.$prod_descr nofilter}</div>
                    {/if}
            </div>

            <div class="ty-product-bigpicture__sidebar-bottom">

                {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
                <div class="ty-product-block__option">
                    {assign var="product_options" value="product_options_`$obj_id`"}
                    {$smarty.capture.$product_options nofilter}
                </div>
                {if $capture_options_vs_qty}{/capture}{/if}

                {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
                <div class="ty-product-block__advanced-option clearfix">
                    {assign var="advanced_options" value="advanced_options_`$obj_id`"}
                    {$smarty.capture.$advanced_options nofilter}
                </div>
                {if $capture_options_vs_qty}{/capture}{/if}

                {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
                <div class="ty-product-block__field-group">
                    {assign var="product_amount" value="product_amount_`$obj_id`"}
                    {$smarty.capture.$product_amount nofilter}

                    {assign var="qty" value="qty_`$obj_id`"}
                    {$smarty.capture.$qty nofilter}

                    {assign var="min_qty" value="min_qty_`$obj_id`"}
                    {$smarty.capture.$min_qty nofilter}
                </div>
                {if $capture_options_vs_qty}{/capture}{/if}

                {assign var="product_edp" value="product_edp_`$obj_id`"}
                {$smarty.capture.$product_edp nofilter}

                {hook name="products:brand"}
                    <div class="ty-product-bigpicture__brand">
                        {include file="views/products/components/product_features_short_list.tpl" features=$product.header_features feature_image=true}
                    </div>
                {/hook}
 
                {hook name="products:promo_text"}
                {if $product.promo_text}
                    <div class="ty-product-block__note">
                        {$product.promo_text nofilter}
                    </div>
                {/if}
                {/hook}

              {*  <div class="ty-product-block__sku">
                    {assign var="sku" value="sku_`$obj_id`"}
                    {$smarty.capture.$sku nofilter}
                </div>
				*}
{*<div class="ty-zipcode-validator clearfix">
    <span class="ty-zipcode-validator">
        <div class="buttons-container">
        	<span class="my-zip-data" id="my_product_id_{$product.product_id}">
        		<span class="normal-con" style="{if $zip_code_active == 'no'}display:none{/if}">
        			<span class='is_product_avail'>
						{if $is_available == 'yes'}
							{__('this_product_is_available_at')}&nbsp;
							<span id="current_zip_code_text">{$current_zip_code}</span>
						{else}
							<span style="color:red;">
								{__('this_product_is_not_available_at')}&nbsp;
								<span id="current_zip_code_text">{$current_zip_code}</span>
							</span>
						{/if}
					</span>
					<br>
					
        		</span>
        		<span>
					<span>
						<input class="input-text cm-autocomplete-off" type="text" name="pin_zip_code" placeholder="{__('insert_pincode_or_zipcode')}" id="pin_zip_code" value="{$current_zip_code}">
					</span>
					<span style="vertical-align: top;">
						{include file="buttons/button.tpl" but_name="dispatch[zipcode_validator.check_pid]" but_text=__('check_availability_by_code') but_role="button_main" but_meta="cm-process-items" but_id=product_check_availability}
					</span>
				</span>
	        </span>
        </div>
    </span>
</div>*}
                {if $capture_buttons}{capture name="buttons"}{/if}
                <div class="ty-product-block__button">
                    {if $show_details_button}
                        {include file="buttons/button.tpl" but_href="products.view?product_id=`$product.product_id`" but_text=__("view_details") but_role="submit"}
                    {/if}

                    {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                    {$smarty.capture.$add_to_cart nofilter}

                    {assign var="list_buttons" value="list_buttons_`$obj_id`"}
                    {$smarty.capture.$list_buttons nofilter}
                </div>
                {if $capture_buttons}{/capture}{/if}

            </div>

            <!-- List/Advanced buttons -->
            <div class="advanced-buttons">
                {if $addons.wishlist.status == "A" && !$hide_wishlist_button}
                    {include file="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" but_id="button_wishlist_`$obj_prefix``$product.product_id`" but_name="dispatch[wishlist.add..`$product.product_id`]" but_role="text"}
                {/if}
                {if $settings.General.enable_compare_products == "Y" && !$hide_compare_list_button || $product.feature_comparison == "Y"}
                    {include file="buttons/add_to_compare_list.tpl" product_id=$product.product_id}
                {/if}
            </div>

            {assign var="form_close" value="form_close_`$obj_id`"}
            {$smarty.capture.$form_close nofilter}

            {if $show_product_tabs}
                {include file="views/tabs/components/product_popup_tabs.tpl"}
                {$smarty.capture.popupsbox_content nofilter}
            {/if}
        </div>
        <!-- End fixed block product options -->
        <div class="clearfix"></div>
    {/if}

    {/hook}

    {if $smarty.capture.hide_form_changed == "Y"}
        {assign var="hide_form" value=$smarty.capture.orig_val_hide_form}
    {/if}
    
    {hook name="products:product_btg"}{/hook}

    <div class="row-fluid ">

        <div class="{if $settings.abt__unitheme.show_block_in_product.value !== ''}ty-product-bigpicture__btleft{else} span16{/if}">
            {if $show_product_tabs}

                {include file="views/tabs/components/product_tabs.tpl"}

                {if $blocks.$tabs_block_id.properties.wrapper}
                    <div class="ty-product-bigpicture__tabs_content">{include file=$blocks.$tabs_block_id.properties.wrapper content=$smarty.capture.tabsbox_content title=$blocks.$tabs_block_id.description}</div>
                {else}
                    <div class="ty-product-bigpicture__tabs_content">{$smarty.capture.tabsbox_content nofilter}</div>
                {/if}

            {/if}
        </div>

        {if $settings.abt__unitheme.show_block_in_product.value !== ''}
            <div class="ty-product-bigpicture__btright">
                {render_block block_id=$settings.abt__unitheme.show_block_in_product.value dispatch="products.view"  use_cache=false parse_js=false}
            </div>
        {/if}

    </div>
</div>

{capture name="mainbox_title"}{assign var="details_page" value=true}{/capture}
