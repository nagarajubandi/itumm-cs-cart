
{capture name="cartbox"}
{if $runtime.mode == "checkout"}
    {if $cart.coupons|floatval}<input type="hidden" name="c_id" value="" />{/if}
    {hook name="checkout:form_data"}
    {/hook}
{/if}

<div id="cart_items">
    <table class="ty-cart-content ty-table">

    {assign var="prods" value=false}

    <thead>
        <tr>
            <th class="ty-cart-content__title ty-left">{__("product")}</th>
            <th class="ty-cart-content__title ty-left">&nbsp;</th>
            <th class="ty-cart-content__title ty-right">{__("unit_price")}</th>
            <th class="ty-cart-content__title quantity-cell">{__("quantity")}</th>
            <th class="ty-cart-content__title ty-right">{__("total_price")}</th>
        </tr>
    </thead>

    <tbody>
    {if $cart_products}
        {foreach from=$cart_products item="product" key="key" name="cart_products"}
            {assign var="obj_id" value=$product.object_id|default:$key}
            {hook name="checkout:items_list"}

                {if !$cart.products.$key.extra.parent}
                    <tr>
                        <td class="ty-cart-content__product-elem ty-cart-content__image-block">
                            {if $runtime.mode == "cart" || $show_images}
                                <div class="ty-cart-content__image cm-reload-{$obj_id}" id="product_image_update_{$obj_id}">
                                    {hook name="checkout:product_icon"}
                                        <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                        {include file="common/image.tpl" obj_id=$key images=$product.main_pair image_width=$settings.Thumbnails.product_cart_thumbnail_width image_height=$settings.Thumbnails.product_cart_thumbnail_height}</a>
                                    {/hook}
                                <!--product_image_update_{$obj_id}--></div>
                            {/if}
                        </td>

                        <td class="ty-cart-content__product-elem ty-cart-content__description" style="width: 50%;">
                            {strip}
                                <a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="ty-cart-content__product-title">
                                    {$product.product nofilter}
                                </a>
                                {if !$product.exclude_from_calculate}
                                    {*<a class="{$ajax_class} ty-cart-content__product-delete ty-delete-big" href="{"checkout.delete?cart_id=`$key`&redirect_mode=`$runtime.mode`"|fn_url}"  onclick="return confirm('Are you sure you want to delete the product?')"data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" title="{__("remove")}">&nbsp;<i class="ty-delete-big__icon ty-icon-cancel-circle"></i>
                                    </a>*}
                                    <a data-ca-target-id="cart_remove_product_block{$product.product_id}"
                                       class="cm-dialog-opener cm-dialog-auto-size {$ajax_class} ty-cart-content__product-delete ty-delete-big"
                                       rel="nofollow">&nbsp;<i class="ty-delete-big__icon ty-icon-cancel-circle"></i></a>



                                    <div  id="cart_remove_product_block{$product.product_id}"
                                          class="hidden ng-remove-product-popup" title="Are you sure you want to remove this product?">
                                        <div class="ty-remove-product-popup">
                                            <div class="ty-product-notification__item clearfix">
                                                {include file="common/image.tpl" image_width="50" image_height="50" images=$product.main_pair no_ids=true class="ty-product-notification__image"}
                                                <div class="ty-product-notification__content clearfix">
                                                    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="ty-product-notification__product-name">{$product.product_id|fn_get_product_name nofilter}</a>
                                                    {if !($settings.General.allow_anonymous_shopping == "hide_price_and_add_to_cart" && !$auth.user_id)}
                                                        <div class="ty-product-notification__price">
                                                            {if !$hide_amount}
                                                                <span class="none">{$product.amount}</span>&nbsp;x&nbsp;{include file="common/price.tpl" value=$product.display_price span_id="price_`$key`" class="none"}
                                                            {/if}
                                                        </div>
                                                    {/if}

                                                </div>
                                            </div>
                                        </div>

                                        <div style="margin-bottom: 70px;">
                                            <div class="ty-float-right">
												
												{if !$auth.user_id}
												<a href="{''|fn_url}''?dispatch=auth.login_form&amp;return_url=index.php&mv_product_id={$product.product_id}" data-ca-target-id="login_block789" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary storelocal" rel="nofollow" data-product_id="{$product.product_id}"> Move to wish list</a>
												
												{else}
                                                <button type="button" class="movetolist movetolist{$product.product_id} ty-btn ty-btn__secondary cm-dialog-closer" role="button" title="Close" data-dismiss="modal" data-product_id="{$product.product_id}">
                                                    Move to wish list
                                                </button>
												{/if}
                                            </div>
                                            <div class="ty-float-left">		 
                                                <a class="ty-btn ty-btn__primary"
                                                   href="{"checkout.delete?cart_id=`$key`&redirect_mode=`$runtime.mode`"|fn_url}"
                                                   data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart"
                                                >Remove</a>
								     </div>

                                             
                                        </div>
                                    </div>
                                {/if}
                            {/strip}
                            <div class="ty-cart-content__sku ty-sku cm-hidden-wrapper{if !$product.product_code} hidden{/if}" id="sku_{$key}" style="display:none;">
                                {__("sku")}: <span class="cm-reload-{$obj_id}" id="product_code_update_{$obj_id}">{$product.product_code}<!--product_code_update_{$obj_id}--></span>
                            </div>
                            {if $product.product_options}
                                <div class="options-info">
                                {include file="common/options_info.tpl" product_options=$product.product_options inline_option=false}
                                </div>
                                <div class="cm-reload-{$obj_id} ty-cart-content__options" id="options_update_{$obj_id}" style="display: none;">
                                {include file="views/products/components/product_options.tpl" product_options=$product.product_options product=$product name="cart_products" id=$key location="cart" disable_ids=$disable_ids form_name="checkout_form"}
                                <!--options_update_{$obj_id}--></div>
                            {/if}

                            {assign var="name" value="product_options_$key"}
                            {capture name=$name}

                            {capture name="product_info_update"}
                                {hook name="checkout:product_info"}
                                    {if $product.exclude_from_calculate}
                                        <strong><span class="price">{__("free")}</span></strong>
                                    {elseif $product.discount|floatval || ($product.taxes && $settings.General.tax_calculation != "subtotal")}
                                        {if $product.discount|floatval}
                                            {assign var="price_info_title" value=__("discount")}
                                        {else}
                                            {assign var="price_info_title" value=__("taxes")}
                                        {/if}
                                        <p><a data-ca-target-id="discount_{$key}" class="cm-dialog-opener cm-dialog-auto-size" rel="nofollow">{$price_info_title}</a></p>

                                        <div class="ty-group-block hidden" id="discount_{$key}" title="{$price_info_title}">
                                            <table class="ty-cart-content__more-info ty-table">
                                                <thead>
                                                    <tr>
                                                        <th class="ty-cart-content__more-info-title">{__("price")}</th>
                                                        <th class="ty-cart-content__more-info-title">{__("quantity")}</th>
                                                        {if $product.discount|floatval}<th class="ty-cart-content__more-info-title">{__("discount")}</th>{/if}
                                                        {if $product.taxes && $settings.General.tax_calculation != "subtotal"}<th>{__("tax")}</th>{/if}
                                                        <th class="ty-cart-content__more-info-title">{__("subtotal")}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{include file="common/price.tpl" value=$product.original_price span_id="original_price_`$key`" class="none"}</td>
                                                        <td class="ty-center">{$product.amount}</td>
                                                        {if $product.discount|floatval}<td>{include file="common/price.tpl" value=$product.discount span_id="discount_subtotal_`$key`" class="none"}</td>{/if}
                                                        {if $product.taxes && $settings.General.tax_calculation != "subtotal"}<td>{include file="common/price.tpl" value=$product.tax_summary.total span_id="tax_subtotal_`$key`" class="none"}</td>{/if}
                                                        <td>{include file="common/price.tpl" span_id="product_subtotal_2_`$key`" value=$product.display_subtotal class="none"}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    {/if}
                                    {include file="views/companies/components/product_company_data.tpl" company_name=$product.company_name company_id=$product.company_id}
                                {/hook}
                            {/capture}
                            {if $smarty.capture.product_info_update|trim}
                                <div class="cm-reload-{$obj_id}" id="product_info_update_{$obj_id}">
                                    {$smarty.capture.product_info_update nofilter}
                                <!--product_info_update_{$obj_id}--></div>
                            {/if}
                            {/capture}

                            {if $smarty.capture.$name|trim}
                            <div id="options_{$key}" class="ty-product-options ty-group-block" style="display:none;">
                                <div class="ty-group-block__arrow">
                                    <span class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                                </div>
                                <bdi>{$smarty.capture.$name nofilter}</bdi>
                            </div>
                            {/if}
                        </td>

                        <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-{$obj_id}" id="price_display_update_{$obj_id}">
                        {include file="common/price.tpl" value=$product.display_price span_id="product_price_`$key`" class="ty-sub-price"}
                        <!--price_display_update_{$obj_id}--></td>

                        <td class="ty-cart-content__product-elem ty-cart-content__qty {if $product.is_edp == "Y" || $product.exclude_from_calculate} quantity-disabled{/if}">
                            {if $use_ajax == true && $cart.amount != 1}
                                {assign var="ajax_class" value="cm-ajax"}
                            {/if}

                            <div class="quantity cm-reload-{$obj_id}{if $settings.Appearance.quantity_changer == "Y"} changer{/if}" id="quantity_update_{$obj_id}">
                                <input type="hidden" name="cart_products[{$key}][product_id]" value="{$product.product_id}" />
                                {if $product.exclude_from_calculate}<input type="hidden" name="cart_products[{$key}][extra][exclude_from_calculate]" value="{$product.exclude_from_calculate}" />{/if}

                                <label for="amount_{$key}"></label>
                                {if $product.is_edp == "Y" || $product.exclude_from_calculate}
                                    {$product.amount}
                                {else}
                                    {if $settings.Appearance.quantity_changer == "Y"}
                                        <div class="ty-center ty-value-changer cm-value-changer">
                                        <a class="cm-increase ty-value-changer__increase">&#43;</a>
                                    {/if}
                                    <input type="text" size="3" id="amount_{$key}" name="cart_products[{$key}][amount]" value="{$product.amount}" class="ty-value-changer__input cm-amount"{if $product.qty_step > 1} data-ca-step="{$product.qty_step}"{/if} />
                                    {if $settings.Appearance.quantity_changer == "Y"}
                                        <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                                        </div>
                                    {/if}
                                {/if}
                                {if $product.is_edp == "Y" || $product.exclude_from_calculate}
                                    <input type="hidden" name="cart_products[{$key}][amount]" value="{$product.amount}" />
                                {/if}
                                {if $product.is_edp == "Y"}
                                    <input type="hidden" name="cart_products[{$key}][is_edp]" value="Y" />
                                {/if}
                            <!--quantity_update_{$obj_id}--></div>
                        </td>

                        <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-{$obj_id}" id="price_subtotal_update_{$obj_id}">
                            {include file="common/price.tpl" value=$product.display_subtotal span_id="product_subtotal_`$key`" class="price"}
                            {if $product.zero_price_action == "A"}
                                <input type="hidden" name="cart_products[{$key}][price]" value="{$product.base_price}" />
                            {/if}
                        <!--price_subtotal_update_{$obj_id}--></td>
                    </tr>
                {/if}
            {/hook}
        {/foreach}
        {/if}

        {hook name="checkout:extra_list"}
        {/hook}

    </tbody>
    </table>
<!--cart_items--></div>

{/capture}

<script>
           $(document).ready(function() {
			
            $("form[name='checkout_form']").addClass("cm-ajax");
            $("form[name='checkout_form']").addClass("cm-ajax-full-render");
            
            $(".ty-value-changer__increase").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".ty-value-changer__decrease").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".cm-amount").bind('keyup', function(e) {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
        });
        $(document).ajaxComplete(function(event,request, settings) {
            $("form[name='checkout_form']").addClass("cm-ajax");
            $("form[name='checkout_form']").addClass("cm-ajax-full-render");
            
            $(".ty-value-changer__increase").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".ty-value-changer__decrease").click(function() {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            $(".cm-amount").bind('keyup', function(e) {
                setTimeout(function () { $('#button_cart').click(); }, 1000);
            });
            var url = settings.url;
            if (url.indexOf("products.options") >= 1) {
                $('#button_cart').click();
            }
        }); 
    </script>
{include file="common/mainbox_cart.tpl" title=__("cart_items") content=$smarty.capture.cartbox}

