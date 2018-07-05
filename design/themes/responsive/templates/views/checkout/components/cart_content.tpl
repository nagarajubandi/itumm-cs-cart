{assign var="result_ids" value="cart_items,checkout_totals,checkout_steps,cart_status*,checkout_cart"}

<form name="checkout_form" class="cm-check-changes" action="{""|fn_url}" method="post" enctype="multipart/form-data">
<input type="hidden" name="redirect_mode" value="cart" />
<input type="hidden" name="result_ids" value="{$result_ids}" />

<h1 class="ty-mainbox-title">{__("cart_contents")}</h1>

<div class="buttons-container ty-cart-content__top-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        {include file="buttons/continue_shopping.tpl" but_href=$continue_url|fn_url }
        {include file="buttons/clear_cart.tpl" but_href="checkout.clear" but_role="text" but_meta="cm-confirm ty-cart-content__clear-button"}
    </div>
	<div style="display:none;">
	{include file="buttons/update_cart.tpl" but_id="button_cart" but_name="dispatch[checkout.update]"}
	</div>
    <div class="ty-float-right ty-cart-content__right-buttons">
        
        {if $payment_methods}
            {assign var="m_name" value="checkout"}
            {assign var="link_href" value="checkout.checkout"}
            {include file="buttons/proceed_to_checkout.tpl" but_href=$link_href but_meta=""}
        {/if}
    </div>
</div>

{include file="views/checkout/components/cart_items.tpl" disable_ids="button_cart"}

</form>
{if $cart_products}
        {foreach from=$cart_products item="product" key="key" name="cart_products"}
 <form action="{''|fn_url}" method="post" name="product_form_{$product.product_id}" id="product_form_{$product.product_id}" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle  cm-processed-form">
<input name="result_ids" value="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" type="hidden">
<input name="product_data[{$product.product_id}][product_id]" value="{$product.product_id}" type="hidden">

<a class="ty-btn ty-btn__primary cm-ajax cm-ajax-full-render"  href="{"checkout.delete?cart_id=`$key`&redirect_mode=`$runtime.mode`"|fn_url}" 
   data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" id="remove_button_{$product.product_id}" style="display:none">Remove</a>
	 
    <a class="ty-btn ty-btn__secondary ty-add-to-wish cm-submit text-button" id="button_wishlist_{$product.product_id}"
	   data-ca-dispatch="dispatch[wishlist.add..{$product.product_id}]"  style="display:none" data-product_id="{$product.product_id}">Move  to wish list</a>

 </form>

{/foreach}
        {/if}

 <script>
        $(document).ready(function() {
			$(".movetolist").click(function() {
				 localStorage.setItem('mv_product_id', $(this).data('product_id'));
			   // $("#product_form_"+$(this).data('product_id')).find("#remove_button_"+$(this).data('product_id')).click();
			    $("#product_form_"+$(this).data('product_id')).find("#button_wishlist_"+$(this).data('product_id')).click();
				
				//document.getElementById("remove_button_"+$(this).data('product_id')).click();
				//document.getElementById("button_wishlist_"+$(this).data('product_id')).click();
            }); 
		
		$(".storelocal").click(function() { 	 
			localStorage.setItem('remove_mv_product_id', $(this).data('product_id'));
		});
		 $(".movetolist"+productid).click(function() {
			localStorage.setItem('mv_product_id', $(this).data('product_id')); 
			$("#product_form_"+$(this).data('product_id')).find("#button_wishlist_"+$(this).data('product_id')).click(); 
		}); 
		if(localStorage.getItem('mv_product_id')!= ''){
	    	var productid=localStorage.getItem('mv_product_id');
			 localStorage.setItem('mv_product_id', '');
			 localStorage.setItem('remove_mv_product_id','');
			 document.getElementById("remove_button_"+productid).click();
         }
	 if(localStorage.getItem('remove_mv_product_id') != ''){ 
		  var productid=localStorage.getItem('remove_mv_product_id');
		  $(".movetolist"+productid).click();		  
	 }
		});
	

	
   		  	 
		 
 
            
</script> 
 
{include file="views/checkout/components/checkout_totals.tpl" location="cart"}

<div class="buttons-container ty-cart-content__bottom-buttons clearfix">
    <div class="ty-float-left ty-cart-content__left-buttons">
        {include file="buttons/continue_shopping.tpl" but_href=$continue_url|fn_url}
    </div>
	<div style="display:none;">
	 {include file="buttons/update_cart.tpl" but_external_click_id="button_cart" but_meta="cm-external-click"}
	 </div>
    <div class="ty-float-right ty-cart-content__right-buttons">
       
        {if $payment_methods}
            {assign var="m_name" value="checkout"}
            {assign var="link_href" value="checkout.checkout"}
            {include file="buttons/proceed_to_checkout.tpl" but_href=$link_href}
        {/if}
    </div>
</div>
{*{if $checkout_add_buttons}
    <div class="ty-cart-content__payment-methods payment-methods" id="payment-methods">
        <span class="ty-cart-content__payment-methods-title payment-metgods-or">{__("or_use")}</span>
        <table class="ty-cart-content__payment-methods-block">
            <tr>
                {foreach from=$checkout_add_buttons item="checkout_add_button"}
                    <td class="ty-cart-content__payment-methods-item">{$checkout_add_button nofilter}</td>
                {/foreach}
            </tr>
    </table>
    <!--payment-methods--></div>
{/if}*}
