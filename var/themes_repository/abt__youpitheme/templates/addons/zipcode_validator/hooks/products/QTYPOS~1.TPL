<style type="text/css">
	#current_zip_code_text{
		font-weight: bold;
	}
</style>
<div class="ty-zipcode-validator clearfix">
    <span class="ty-zipcode-validator">
        <div class="buttons-container">
        	<span class="my-zip-data" id="my_product_id_{$product.product_id}">
        		<span class="normal-con" style="{if $zip_code_active == 'no'}display:none{/if}">
        			<span class='is_product_avail'>
						{if $is_available == 'yes'}
							{__('this_product_is_available_at')}&nbsp;
							<span id="current_zip_code_text">{$current_zip_code}</span>
						{else}
							<span style="color:red;">
								{__('this_product_is_not_available_at')}&nbsp;
								<span id="current_zip_code_text">{$current_zip_code}</span>
							</span>
						{/if}
					</span>
					<br>
					<a><span id="remove_code_cookie">{__('change_code')}</span></a>
        		</span>
        		<span class="text-con" style="{if $zip_code_active == 'yes'}display:none{/if}">
					<span>
						<input class="input-text cm-autocomplete-off" type="text" name="pin_zip_code" placeholder="{__('insert_pincode_or_zipcode')}" id="pin_zip_code" value="{$current_zip_code}">
					</span>
					<span style="vertical-align: top;">
						{include file="buttons/button.tpl" but_name="dispatch[zipcode_validator.check_pid]" but_text=__('check_availability_by_code') but_role="button_main" but_meta="cm-process-items" but_id=product_check_availability}
					</span>
				</span>
	        </span>
        </div>
    </span>
</div>
{script src="js/addons/zipcode_validator/func.js"}
<script type="text/javascript">
	var product_id = '{$product.product_id}';
	var available_product_text = "{__('this_product_is_available_at')}";
	var not_available_product_text = "{__('this_product_is_not_available_at')}";
	var change_code = "{__('change_code')}";
</script>
{if $zip_code_active == 'yes'}
{if $is_available == 'yes'}
<script type="text/javascript">
	$(document).ready(function(){
		$('#button_cart_ajax'+'{$product.product_id}').attr('disabled', false);
		$('#button_cart_ajax'+'{$product.product_id}').removeClass('disabled');
		$('#button_cart_ajax'+'{$product.product_id}').addClass('ty-btn__primary');
	});
</script>
{else if $is_available == 'no'}
<script type="text/javascript">
	$(document).ready(function(){
		$('#button_cart_ajax'+'{$product.product_id}').attr('disabled', true);
	    $('#button_cart_ajax'+'{$product.product_id}').addClass('disabled');
	    $('#button_cart_ajax'+'{$product.product_id}').removeClass('ty-btn__primary');
	});
</script>
{/if}
{/if}