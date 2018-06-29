{** block-description:buy_together **}

{assign var="show_scroll" value=$show_scroll|default:true}
{script src="js/tygh/exceptions.js"}

{if $chains}
<div class="ut-buy-together" id="ut-buy-together">
    {if !$config.tweaks.disable_dhtml && !$no_ajax}
        {assign var="is_ajax" value=true}
    {/if}
    
    {foreach from=$chains key="key" item="chain"}
        {assign var="obj_prefix" value="bt_`$chain.chain_id`"}
        <form {if $is_ajax}class="cm-ajax cm-ajax-full-render"{/if} action="{""|fn_url}" method="post" name="chain_form_{$chain.chain_id}" enctype="multipart/form-data">
        <input type="hidden" name="redirect_url" value="{$config.current_url}" />
        <input type="hidden" name="result_ids" value="cart_status*,wish_list*" />
        {if !$stay_in_cart || $is_ajax}
            <input type="hidden" name="redirect_url" value="{$config.current_url}" />
        {/if}
        <input type="hidden" name="product_data[{$chain.product_id}_{$chain.chain_id}][chain]" value="{$chain.chain_id}" />
        <input type="hidden" name="product_data[{$chain.product_id}_{$chain.chain_id}][product_id]" value="{$chain.product_id}" />

        <div class="ty-subheader">{$chain.name}</div>

        {assign var="buy_together_options_class" value="cm-reload-{$obj_prefix}{$chain.product_id}_{$chain.chain_id}"}

        {if $chain.products}
            {foreach from=$chain.products key="_id" item="_product"}
                {assign var="buy_together_options_class" value="{$buy_together_options_class} cm-reload-{$obj_prefix}{$_product.product_id}"}
            {/foreach}
        {/if}
    
        <div class="ty-buy-together {if $chain.products|count > 3}scroll{/if} clearfix">
            
            {if $chain.description}
                <div class="ty-buy-together__description">
                    {$chain.description nofilter}
                </div>
            {/if}
            
            <div class="ty-buy-together__box">
            <div class="ty-buy-together__products ty-scroll-x">
                
            {if $chain.products}
                <div class="ty-buy-together__product">
                    <div class="ty-buy-together__product-image cm-reload-{$obj_prefix}{$chain.product_id}_{$chain.chain_id}" id="bt_product_image_{$obj_prefix}{$chain.product_id}_{$chain.chain_id}_main">
                        <a href="{"products.view?product_id=`$chain.product_id`"|fn_url}">{include file="common/image.tpl" image_width="150" image_height="150" obj_id="`$chain.chain_id`_`$chain.product_id`" images=$chain.main_pair class="ty-buy-together__product-image"}</a>
                    <!--bt_product_image_{$obj_prefix}{$chain.product_id}_{$chain.chain_id}_main--></div>

                    <div class="ty-buy-together__product-name">
                         <a href="{"products.view?product_id=`$chain.product_id`"|fn_url}">{$chain.product_name|truncate:66:"...":true}</a>
                    </div>

                    <div class="ty-buy-together__product-price cm-reload-{$obj_prefix}{$chain.product_id}_{$chain.chain_id}" id="bt_product_price_{$obj_prefix}{$chain.product_id}_{$chain.chain_id}_main">
                        {if $chain.min_qty > 1}<span class="count">{$chain.min_qty}x</span>{/if}
                        {if !(!$auth.user_id && $settings.General.allow_anonymous_shopping == "hide_price_and_add_to_cart")}
                        <span class="price">{include file="common/price.tpl" value=$chain.discounted_price}</span>
                            {if $chain.price != $chain.discounted_price}
                                <span class="ty-strike">{include file="common/price.tpl" value=$chain.price}</span>
                            {/if}
                        {/if}
                    <!--bt_product_price_{$obj_prefix}{$chain.product_id}_{$chain.chain_id}_main--></div>
                    
                    {if $chain.product_options}
                        {capture name="buy_together_product_options"}
                            <div id="buy_together_options_{$chain.chain_id}_{$key}_main" class="ty-buy-together-box">
                                <div class="{$buy_together_options_class}" id="buy_together_options_update_{$chain.chain_id}_{$chain.product_id}_main">
                                    <input type="hidden" name="appearance[show_product_options]" value="1" />
                                    <input type="hidden" name="appearance[bt_chain]" value="{$chain.chain_id}" />
                                    <input type="hidden" name="appearance[bt_id]" value="{$key}" />
                                    
                                    {include file="views/products/components/product_options.tpl" product=$chain id="`$chain.product_id`_`$chain.chain_id`" product_options=$chain.product_options name="product_data" no_script=true extra_id="`$chain.product_id`_`$chain.chain_id`_main"}
                                <!--buy_together_options_update_{$chain.chain_id}_{$chain.product_id}_main--></div>
                                <div class="buttons-container">
                                    {include file="buttons/button.tpl" but_id="add_item_close" but_name="" but_text=__("save_and_close") but_role="action" but_meta="ty-btn__secondary cm-dialog-closer"}
                                </div>
                            </div>
                        {/capture}
                        <div class="ty-buy-together__product-options">
                            {include file="common/popupbox.tpl" id="buy_together_options_`$chain.chain_id`_`$chain.product_id`_main" link_meta="ty-btn ty-btn__primary" text=__("specify_options") content=$smarty.capture.buy_together_product_options link_text=__("specify_options") act="general"}
                        </div>
                    {/if}
                </div>
            {/if}
            
            {foreach from=$chain.products key="_id" item="_product"}
                <span class="ty-buy-together__plus chain-plus">+</span>
                
                <div class="ty-buy-together__product">
                    <input type="hidden" name="product_data[{$_product.product_id}][product_id]" value="{$_product.product_id}" />

                    <div class="ty-buy-together__product-image cm-reload-{$obj_prefix}{$_product.product_id}" id="bt_product_image_{$chain.chain_id}_{$_product.product_id}">
                        <a href="{"products.view?product_id=`$_product.product_id`"|fn_url}">{include file="common/image.tpl" image_width="150" image_height="150"  obj_id="`$chain.chain_id`_`$_product.product_id`" images=$_product.main_pair class="ty-buy-together__product-image"}</a>
                    <!--bt_product_image_{$chain.chain_id}_{$_product.product_id}--></div>

                    <div class="ty-buy-together__product-name">
                        <a href="{"products.view?product_id=`$_product.product_id`"|fn_url}">{$_product.product_name|truncate:66:"...":true}</a>
                    </div>

                    {if $_product.product_options}
                        {foreach from=$_product.product_options item="option"}
                            <div class="ty-buy-together-option"><span class="ty-buy-together-option__name">{$option.option_name}</span>: {$option.variant_name}</div>
                        {/foreach}
                    {elseif $_product.aoc}
                        {capture name="buy_together_product_options"}
                            <div id="buy_together_options_{$chain.chain_id}_{$_product.product_id}" class="ty-buy-together-box">
                                <div class="{$buy_together_options_class}" id="buy_together_options_update_{$chain.chain_id}_{$_product.product_id}">
                                    <input type="hidden" name="appearance[show_product_options]" value="1" />
                                    <input type="hidden" name="appearance[bt_chain]" value="{$chain.chain_id}" />
                                    <input type="hidden" name="appearance[bt_id]" value="{$_id}" />
                                    {include file="views/products/components/product_options.tpl" product=$_product id=$_product.product_id  product_options=$_product.options name="product_data" no_script=true extra_id="`$_product.product_id`_`$chain.chain_id`"}
                                    <!--buy_together_options_update_{$chain.chain_id}_{$_product.product_id}--></div>

                                <div class="buttons-container">
                                    {include file="buttons/button.tpl" but_id="add_item_close" but_name="" but_text=__("save_and_close") but_role="action" but_meta="ty-btn__secondary cm-dialog-closer"}
                                </div>
                            </div>
                        {/capture}
                        <div class="ty-buy-together__product-options">
                            {include file="common/popupbox.tpl" id="buy_together_options_`$chain.chain_id`_`$_product.product_id`" link_meta="ty-btn ty-btn__primary" text=__("specify_options") content=$smarty.capture.buy_together_product_options link_text=__("specify_options") act="general"}
                        </div>
                    {/if}
                    <div class="ty-buy-together__product-price cm-reload-{$obj_prefix}{$_product.product_id}" id="bt_product_price_{$chain.chain_id}_{$_product.product_id}">
                        {if $_product.amount > 1}<span class="count">{$_product.amount}x</span>{/if}
                        {if !(!$auth.user_id && $settings.General.allow_anonymous_shopping == "hide_price_and_add_to_cart")}
                        <span class="price">{include file="common/price.tpl" value=$_product.discounted_price}</span>
                            {if $_product.price != $_product.discounted_price}
                                <span class="ty-strike">{include file="common/price.tpl" value=$_product.price}</span>
                            {/if} 
                        {/if}
                    <!--bt_product_price_{$chain.chain_id}_{$_product.product_id}--></div>
                </div>

            {/foreach}
            </div>
            
            <div class="ut-together-price-block">
	            <span class="ty-buy-together__plus chain-equally">=</span>
            {if !(!$auth.user_id && $settings.General.allow_anonymous_shopping == "hide_price_and_add_to_cart")}
                <div class="ty-buy-together-price {$buy_together_options_class}" id="bt_total_price_{$obj_prefix}{$chain.product_id}_{$chain.chain_id}">
                    <div class="ty-buy-together-price__old">
                        <span class="ty-buy-together-price__title">{__("total_list_price")}</span>
                        <span class="chain-old-line ty-strike">{include file="common/price.tpl" value=$chain.total_price}</span>
                    </div>
                    <div class="ty-buy-together-price__new">
                        <span class="ty-buy-together-price__title">{__("price_for_all")}</span>
                        <span class="price">{include file="common/price.tpl" value=$chain.chain_price}</span>
                    </div>
                <!--bt_total_price_{$obj_prefix}{$chain.product_id}_{$chain.chain_id}--></div>
                {if !(!$auth.user_id && $settings.General.allow_anonymous_shopping == "hide_add_to_cart_button")}
                    <div style="width:100%" class="buttons-container cm-ty-buy-together-submit" id="wrap_chain_button_{$chain.chain_id}">
                                {include file="buttons/button.tpl" but_text=__("add_all_to_cart") but_id="chain_button_`$chain.chain_id`" but_meta="ty-btn__primary" but_name="dispatch[checkout.add]" but_role="action" obj_id=$obj_id}
                    </div>
                {/if}
            {else}
            <p>{__("sign_in_to_view_price")}</p>
            {/if}
            </div>
            </div>
        </div>

        </form>
    {/foreach}
</div>
    
    {if $show_scroll}
        {script src="js/lib/owlcarousel/owl.carousel.min.js"}
        <script type="text/javascript">
            (function(_, $) {
                $.ceEvent('on', 'ce.commoninit', function(context) {
                    var elm = context.find('#ut-buy-together');
                    var desktop = [1199, 1],
                        desktopSmall = [1024, 1],
                        tablet = [768, 1],
                        mobile = [479, 1];

                    if (elm.length) {
                        elm.owlCarousel({
                            direction: '{$language_direction}',
                            items: 1,
                            itemsDesktop: desktop,
                            itemsDesktopSmall: desktopSmall,
                            itemsTablet: tablet,
                            itemsMobile: mobile,
                            scrollPerPage: true,
                            autoPlay: true,
                            lazyLoad: true,
                            stopOnHover: true,
                            pagination: true,
                            paginationNumbers: false,
                            navigation: true,
                            navigationText: ['<i class="uni-left-sight"></i>', '<i class="uni-right-sight"></i>']
                        });
                    }
                });
            }(Tygh, Tygh.$));
        </script>
    {/if}
{/if}