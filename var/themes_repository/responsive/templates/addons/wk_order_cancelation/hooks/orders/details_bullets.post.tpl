{if isset($wk_show_cancel_order)}
	{include file="buttons/button.tpl" but_meta="ty-btn__text cm-ajax" but_role="text" but_text=__("cancel_order") but_href="orders.wk_cancel_order?order_id=`$order_info.order_id`" but_icon="ty-orders__actions-icon ty-icon-cancel" but_id="wk_cancel_order_btn" but_target_id=""}

<script type="text/javascript">
	var order_id = {$order_info.order_id};
</script>
{literal}
<script type="text/javascript">
	Tygh.$('#wk_cancel_order_btn').on('click',function(){
		$.ceAjax('request', fn_url('orders.wk_cancel_order?order_id=`$order_info.order_id`'), {
			cache: false,
			data: {'order_id': order_id},
			callback: function(data) {
		   		window.location.reload(true);
			}
		})
	});
</script>
{/literal}


{/if}