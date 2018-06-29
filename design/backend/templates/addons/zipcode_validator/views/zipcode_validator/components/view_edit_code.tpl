<div class="form-horizontal">
	<h4>{$product_name}</h4>
	<table class="table table-middle" width="100%">
	<thead class="cm-first-sibling">
		<tr>
			<th width="20%">{__("zip_code")}</th>
			<th width="15%">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	{foreach from=$zip_codes item=code}
		{assign var=id value=rand()}
		<tr class="cm-row-item" id="box_zip_code_row_{$id}">
			<td>
				<input type="text" name="products_data_{$product_id}[new_code][]" value="{$code}" class="all-zips-enter" onkeypress="myFunction(event)">
			</td>
			<td class="right">
				{include file="addons/zipcode_validator/buttons/multiple_buttons.tpl" item_id="zip_code_row_$id"}
			</td>
		</tr>
	{/foreach}
	</tbody>
	</table>
	<script>
		function myFunction(event) {
            if (event.keyCode == 10 || event.keyCode == 13){
                event.preventDefault();
            }
		}
	</script>

</div>