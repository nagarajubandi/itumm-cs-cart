{if $smarty.session.cart.amount}
    <span class="ty-minicart-title ty-hand" style="text-transform: none !important;">{$smarty.session.cart.amount}&nbsp;iTumm(s)</span>
    <i class="ty-minicart__icon ty-icon-cart"></i>
{else}
    <span class="ty-minicart-title ty-hand" style="text-transform: none !important;">0 &nbsp;iTumm(s)</span>
    <i class="ty-minicart__icon ty-icon-cart"></i>
{/if}