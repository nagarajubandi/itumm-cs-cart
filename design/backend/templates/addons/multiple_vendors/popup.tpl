{if $product}
        {*<form action="{fn_url("")}" method="POST" class="form-horizontal form-edit">*}
            {*<input type="hidden" name="redirect_url" value="{$config.current_url}" />*}
            {*<input type="hidden" name="product_id" value="{$product.product_id}" />*}
	<fieldset>


            {assign var="product_id" value=$product.product_id}
			{foreach from=$product.combinations item="combination" key="kc"}
				<div class="control-group">
                    <label class="control-label" for="qty_{$combination.combination_hash}" style="
            margin-bottom: 0px;
            max-width: 300px  !important;
            min-width: 200px  !important;
            display: inline-block !important;
            width: 200px  !important;">
						{foreach from=$combination.combination item="variant_id" key="option_id"}
							{$product.options.$product_id.$option_id.option_name}: {$product.options.$product_id.$option_id.variants.$variant_id.variant_name}
						{/foreach}
					</label>
					<div class="controls" style="
                        display: inline-block  !important;
                    ">
					<input type="text" id="qty_{$combination.combination_hash}" name="qty[{$combination.combination_hash}]" class="input-text" value="{$combination.amount}"/>
					</div>
				</div>
			{/foreach}
			<div class="buttons-container buttons-bg">
				<div class="float-left">
					{include file="buttons/save.tpl" but_name="dispatch[vendors_products.m_update]" but_role="button_main" but_id="save_button" but_meta="cm-ajax cm-dialog-closer btn btn-primary"}
					<a class="cm-dialog-closer tool-link">{__("cancel")}</a>
				</div>
			</div>
	</fieldset>
        {*</form>*}
{/if}
