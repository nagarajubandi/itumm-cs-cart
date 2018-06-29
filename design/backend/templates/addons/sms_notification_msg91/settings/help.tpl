<div class="alert alert-info">
	<p><b>{__("msg_shipment_creation")}</b> : %order_id% , %tracking_number% , %carrier% , %first_name% , %last_name% , %email% , %payment_method% , %date% , %products%</p>
	<p><b>{__("msg_order_placement")}</b> : %order_id% , %first_name% , %last_name% , %email% , %payment_method% , %date% , %products% </p>
	<p><b>{__("msg_user_registration")}</b> :  %first_name% , %last_name% , %email% , %date%</p>
	<p><b>{__("msg_user_status_change")}</b> :  %first_name% , %last_name% , %email% , %status%</p>
	{if "MULTIVENDOR"|fn_allowed_for}
	<p><b>{__("msg_company_status_change")}</b> :  %vendor% , %first_name% , %last_name% , %email% , %status%</p>
	{/if}
	<p><b>{__("msg_low_inventory")}</b> :  %product% , %product_code% , %amount%</p>
</div>