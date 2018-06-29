{if isset($wk_show_cancel_order)}
	{*{include file="buttons/button.tpl" but_meta="ty-btn__text cm-ajax" but_role="text" but_text=__("cancel_order") but_href="orders.wk_cancel_order?order_id=`$order_info.order_id`" but_icon="ty-orders__actions-icon ty-icon-cancel" but_id="wk_cancel_order_btn" but_target_id=""}*}

	<a class="ty-btn ty-btn__text cm-dialog-opener cm-dialog-auto-size text-button " data-ca-target-id="wk_cancel_order_btn" href="javascript:void(0);" rel="nofollow"><i class="ty-orders__actions-icon ty-icon-cancel"></i>Cancel Order</a>


	<div  id="wk_cancel_order_btn"
		  class="hidden ng-remove-product-popup" title="Confirmation">
		<div class="ty-remove-product-popup">
			<div class="ty-product-notification__item clearfix">
				<div class="ty-product-notification__content clearfix">
					Are you sure you want to cancel the order?
				</div>
			</div>
		</div>

		<div style="margin-bottom: 10px;">
			<div class="ty-float-right">
				<button type="button"class="ty-btn ty-btn__secondary cm-dialog-closer" role="button" title="Close" data-dismiss="modal">
					No
				</button>
			</div>
			<div class="ty-float-right" style="margin-right: 10px;">
				<a class="ty-btn ty-btn__secondary"
				   href="javascript:void(0);"
				   onclick="fn_nags_cancel_order();"
				>Yes</a>

			</div>
		</div>
	</div>

<script type="text/javascript">
	var order_id = {$order_info.order_id};
</script>
{literal}
<script type="text/javascript">
	/*Tygh.$('#wk_cancel_order_btn').on('click',function(){
        if (confirm("Are you sure you want to cancel the order?")) {
			$.ceAjax('request', fn_url('orders.wk_cancel_order?order_id=`$order_info.order_id`'), {
				cache: false,
				data: {'order_id': order_id},
				callback: function(data) {
					window.location.reload(true);
				}
			});
		}
	});*/
    function fn_nags_cancel_order()
    {
        $.ceAjax('request', fn_url('orders.wk_cancel_order?order_id=`$order_info.order_id`'), {
            cache: false,
            data: {'order_id': order_id},
            callback: function(data) {
                window.location.reload(true);
            }
        });
    }
</script>
{/literal}


{/if}