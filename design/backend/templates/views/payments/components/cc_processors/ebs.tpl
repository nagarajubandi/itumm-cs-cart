<div class="control-group">
	<div class="controls">
		<p style="color:red"><b>{__("ebs_note")} : </b>{__("please_ensure_inr_should_be_configured_in_your_store")}</p>
	</div>	
</div>

<div class="control-group">
	<label class="control-label" for="ebs_account">{__("ebs_account_id")}:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][ebs_account_id]" id="ebs_account" value="{$processor_params.ebs_account_id}" class="input-text" />
	</div>	
</div>

<div class="control-group">
	<label class="control-label" for="ebs_item_name">{__("ebs_secret_key")}:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][ebs_secret_key]" id="ebs_item_name" value="{$processor_params.ebs_secret_key}" class="input-text" />
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="ebs_mode">{__("ebs_mode")}:</label>
	<div class="controls">
		<select name="payment_data[processor_params][ebs_mode]" id="ebs_mode">
			<option value="TEST" {if $processor_params.ebs_mode == "TEST"}selected="selected"{/if}>{__("ebs_test")}</option>
			<option value="LIVE" {if $processor_params.ebs_mode == "LIVE"}selected="selected"{/if}>{__("ebs_live")}</option>
		</select>
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="pageId">{__("ebs_page_id")}:</label>
	<div class="controls">
		<input type="text" name="payment_data[processor_params][ebs_page_id]" id="account" value="{$processor_params.ebs_page_id}" class="input-text" />
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="hashtype">{__("ebs_hash_type")}:</label>
	<div class="controls">
		<select name="payment_data[processor_params][ebs_hashtype]">
	    	<option value="MD5" {if $processor_params.ebs_hashtype == "MD5"}selected="selected"{/if}>MD5</option>
	        <option value="SHA512" {if $processor_params.ebs_hashtype == "SHA512"}selected="selected"{/if}>SHA512</option>
	        <option value="SHA1" {if $processor_params.ebs_hashtype == "SHA1"}selected="selected"{/if}>SHA1</option>
		</select>
	</div>
</div>

<div class="control-group">
    <label class="control-label" for="wk_order_status">{__("order_status")}:</label>
    {assign var=wk_o_s value=fn_get_statuses()}
    <div class="controls">
        <select name="payment_data[processor_params][wk_order_status]" id="wk_order_status">
            {foreach from=$wk_o_s item="s" key="key"}
            	{if $s.status neq 'F' && $s.status neq 'D' && $s.status neq 'B' && $s.status neq 'I' && $s.status neq 'Y'}
            		<option style="color:gray" value={$s.status} {if $processor_params.wk_order_status == $s.status}selected="selected"{/if}>{$s.description}</option>
            	{/if}
            {/foreach}
        </select>
    </div>
</div>
