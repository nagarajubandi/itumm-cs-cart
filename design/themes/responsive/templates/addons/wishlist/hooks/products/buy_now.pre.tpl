{*
{if !$hide_wishlist_button}
    {include file="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" but_id="button_wishlist_`$obj_prefix``$product.product_id`" but_name="dispatch[wishlist.add..`$product.product_id`]" but_role="text"}
{/if}*}

{if !$hide_wishlist_button}

    {$is_wishlist=false}
    {if $smarty.session.wishlist.products}
        {foreach from=$smarty.session.wishlist.products key="key" item=p}
            {if $p.product_id == $product.product_id}
                {$is_wishlist=true}
                {$product.cart_id=$key}
            {/if}
        {/foreach}
    {/if}

1345esrt qwet qwetwet
    {if $auth.user_id == 0}
        <a href="{if $runtime.controller == "auth" && $runtime.mode == "login_form"}{$config.current_url|fn_url}{else}{"auth.login_form?return_url=`$return_current_url`"|fn_url}{/if}" {if $settings.Security.secure_storefront != "partial"} data-ca-target-id="login_block{$block.snapping_id}" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__text ty-add-to-wish text-button" title="Sign in"{else} class="ty-btn ty-btn__primary"{/if} rel="nofollow">Add to wishlist</a>

        {*{if $settings.Security.secure_storefront != "partial"}
            <div  id="login_block{$block.snapping_id}" class="hidden ng-login-popup" title="{__("sign_in")}">
                <div class="ty-login-popup">
                    {include file="views/auth/login_form.tpl" style="popup" id="popup`$block.snapping_id`"}
                </div>
            </div>
        {/if}*}

    {elseif $is_wishlist}
        <div class="wishlist-remove-item">
            <a href="{"wishlist.delete?cart_id=`$product.cart_id`"|fn_url}" class="ty-btn ty-btn__text ty-add-to-wish1 cm-submit text-button" title="{__("remove")}"><span class="ty-remove__txt">{__("remove")}</span></a>
        </div>
    {else}
        {include file="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" but_id="button_wishlist_`$obj_prefix``$product.product_id`" but_name="dispatch[wishlist.add..`$product.product_id`]" but_role="text"}
    {/if}

{/if}
