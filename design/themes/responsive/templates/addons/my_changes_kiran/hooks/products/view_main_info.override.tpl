{if $product}
    {assign var="obj_id" value=$product.product_id}
    {include file="common/product_data.tpl" product=$product but_role="big" but_text=__("add_to_cart")}

    <div class="ty-product-bigpicture__left">
        <div class="ty-product-bigpicture__left-wrapper">
            {if !$hide_title}
                <h1 class="ty-product-block-title" {live_edit name="product:product:{$product.product_id}"}>{$product.product nofilter}</h1>
            {/if}
            
            {hook name="products:brand"}
                <div class="ty-product-bigpicture__brand">
                    {include file="views/products/components/product_features_short_list.tpl" features=$product.header_features}
                </div>
            {/hook}

            {hook name="products:image_wrap"}
                {if !$no_images}
                    <div class="ty-product-bigpicture__img {if $product.image_pairs|@count < 1} ty-product-bigpicture__no-thumbs{/if} cm-reload-{$product.product_id} {if $settings.Appearance.thumbnails_gallery == "Y"}ty-product-bigpicture__as-gallery{else}ty-product-bigpicture__as-thumbs{/if}" id="product_images_{$product.product_id}_update">
                        {include file="views/products/components/product_images.tpl" product=$product show_detailed_link="Y" thumbnails_size=55 }
                    <!--product_images_{$product.product_id}_update--></div>
                {/if}
            {/hook}
        </div>
    </div>


    <div class="ty-product-bigpicture__right">

                {hook name="products:brand"}
                    {hook name="products:brand_bigpicture"}
                        <div class="ty-product-bigpicture__brand">
                            {include file="views/products/components/product_features_short_list.tpl" features=$product.header_features feature_image=true}
                        </div>
                    {/hook}
                {/hook}

                {assign var="form_open" value="form_open_`$obj_id`"}
                {$smarty.capture.$form_open nofilter}

                {assign var="old_price" value="old_price_`$obj_id`"}
                {assign var="price" value="price_`$obj_id`"}
                {assign var="clean_price" value="clean_price_`$obj_id`"}
                {assign var="list_discount" value="list_discount_`$obj_id`"}
                {assign var="discount_label" value="discount_label_`$obj_id`"}

                <div class="{if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}prices-container {/if}price-wrap">
                    {if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}
                        <div class="ty-product-bigpicture__prices">
                            {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}
                    {/if}

                    {if $smarty.capture.$price|trim}
                        <div class="ty-product-block__price-actual">
                            {$smarty.capture.$price nofilter}
                        </div>
                    {/if}

                    {if $smarty.capture.$old_price|trim || $smarty.capture.$clean_price|trim || $smarty.capture.$list_discount|trim}
                            {$smarty.capture.$clean_price nofilter}
                            {$smarty.capture.$list_discount nofilter}

                            {assign var="discount_label" value="discount_label_`$obj_prefix``$obj_id`"}
                            {$smarty.capture.$discount_label nofilter}
                        </div>
                    {/if}
					
                    
                </div>

                <div class="ty-product-bigpicture__sidebar-bottom">
{$product.short_description nofilter}
                    {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
                    <div class="ty-product-block__option">
                        {assign var="product_options" value="product_options_`$obj_id`"}
                        {$smarty.capture.$product_options nofilter}
                    </div>
                    {if $capture_options_vs_qty}{/capture}{/if}

                    {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
                    <div class="ty-product-block__advanced-option clearfix">
                        {assign var="advanced_options" value="advanced_options_`$obj_id`"}
                        {$smarty.capture.$advanced_options nofilter}
                    </div>
                    {if $capture_options_vs_qty}{/capture}{/if}

                    <div class="ty-product-block__sku">
                        {assign var="sku" value="sku_`$obj_id`"}
                        {$smarty.capture.$sku nofilter}
                    </div>

                    {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
                    <div class="ty-product-block__field-group">
                        {assign var="product_amount" value="product_amount_`$obj_id`"}
                        {$smarty.capture.$product_amount nofilter}

                        {assign var="qty" value="qty_`$obj_id`"}
                        {$smarty.capture.$qty nofilter}

                        {assign var="min_qty" value="min_qty_`$obj_id`"}
                        {$smarty.capture.$min_qty nofilter}
                    </div>
                    {if $capture_options_vs_qty}{/capture}{/if}

                    {assign var="product_edp" value="product_edp_`$obj_id`"}
                    {$smarty.capture.$product_edp nofilter}

                    {hook name="products:promo_text"}
                    {if $product.promo_text}
                    <div class="ty-product-block__note">
                        {$product.promo_text nofilter}
                    </div>
                    {/if}
                    {/hook}

                    {if $show_descr}
                    {assign var="prod_descr" value="prod_descr_`$obj_id`"}
                        <h3 class="ty-product-block__description-title">{__("description")}</h3>
                        <div class="ty-product-block__description">{$smarty.capture.$prod_descr nofilter}</div>
                    {/if}
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
					
        		</span>
        		<span>
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
                    {if $capture_buttons}{capture name="buttons"}{/if}
                    <div class="ty-product-block__button">
                        {if $show_details_button}
                            {include file="buttons/button.tpl" but_href="products.view?product_id=`$product.product_id`" but_text=__("view_details") but_role="submit"}
                        {/if}

                        {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                        {$smarty.capture.$add_to_cart nofilter}

                        {assign var="list_buttons" value="list_buttons_`$obj_id`"}
                        {$smarty.capture.$list_buttons nofilter}
                    </div>
                    {if $capture_buttons}{/capture}{/if}
                </div>

                {assign var="form_close" value="form_close_`$obj_id`"}
                {$smarty.capture.$form_close nofilter}

                {hook name="products:product_detail_bottom"}
                {/hook}

                {if $show_product_tabs}
                {include file="views/tabs/components/product_popup_tabs.tpl"}
                {$smarty.capture.popupsbox_content nofilter}
                {/if}
            </div>
    <div class="clearfix"></div>
{/if}
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
<script type="text/javascript">
	$(document).ready(function(){
	
		$('#button_cart_'+'{$product.product_id}').attr('disabled', true);
	    $('#button_cart_'+'{$product.product_id}').addClass('disabled');
	    $('#button_cart_'+'{$product.product_id}').removeClass('ty-btn__primary');
	});
</script>