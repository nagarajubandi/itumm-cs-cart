{hook name="checkout:dropdown_title"}
{if $smarty.session.cart.amount}
    <i class="ty-minicart__icon ty-icon-basket filled"><span class="basket-cart-amount">{$smarty.session.cart.amount}</span></i>
    <span class="ty-minicart-title ty-hand"><small>{__("adv_items_in_cart")}</small>&nbsp;{include file="common/price.tpl" value=$smarty.session.cart.display_subtotal}</span>
    <i class="ty-icon-down-micro"></i>
{else}
    <i class="ty-minicart__icon ty-icon-basket empty"><span class="basket-cart-amount">0</span></i>
    <span class="ty-minicart-title empty-cart ty-hand"><small>{__("your")}</small>&nbsp;{__("cart_is_empty")}</span>
    <i class="ty-icon-down-micro"></i>
{/if}
{/hook}