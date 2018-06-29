<div class="control-group">
	<label class="control-label" for="account_id">Account Id:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][account_id]" id="account_id" value="{$processor_params.account_id}" class="input-text" />
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="secret_key">Secret Key:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][secret_key]" id="secret_key" value="{$processor_params.secret_key}" class="input-text" />
	</div>
</div>

<!--<div class="control-group">
	<label class="control-label" for="page_id">Page Id:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][page_id]" id="page_id" value="{$processor_params.page_id}" class="input-text" />
	</div>
</div>-->


<div class="control-group">
	<label class="control-label" for="mode">Mode:</label>
	<div class="controls">
		<select name="payment_data[processor_params][mode]" id="mode">
			<option value="TEST" {if $processor_params.mode == "TEST"}selected="selected"{/if}>Test</option>
			<option value="LIVE" {if $processor_params.mode == "LIVE"}selected="selected"{/if}>Live</option>
		</select>
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="hash_type">Hash Type :</label>
	<div class="controls">
		<select name="payment_data[processor_params][hash_type]" id="hash_type">
			<option value="md5" {if $processor_params.hash_type == "md5"}selected="selected"{/if}>MD5</option>
			<option value="SHA1" {if $processor_params.hash_type == "SHA1"}selected="selected"{/if}>SHA1</option>
			<option value="SHA512" {if $processor_params.hash_type == "SHA512"}selected="selected"{/if}>SHA512</option>
		</select>
	</div>
</div>

