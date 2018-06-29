<div class="sidebar-row">
	<h6>
	{__("search")}
	</h6>

	<form action="{""|fn_url}" name="search_form" method="get" class="cm-disable-empty">
	{capture name="simple_search"}
		<div class="sidebar-field">
			<label>{__("product_id")}</label>
			<input type="text" name="product_id" value="{$search.product_id}" onfocus="this.select();" class="cm-value-integer" />
		</div>

		<div class="sidebar-field">
			<label>{__("product_name")}</label>
			<input type="text" name="product_name" value="{$search.product_name}" onfocus="this.select();"/>
		</div>

		<div class="sidebar-field">
			<label>{__("products_with_zip_code")}</label>
			<input type="text" name="code" value="{$search.code}" onfocus="this.select();"/>
		</div>
	{/capture}
	{include file="common/advanced_search.tpl" simple_search=$smarty.capture.simple_search dispatch=$dispatch  no_adv_link=no_adv_link}

	</form>
</div>
<hr>