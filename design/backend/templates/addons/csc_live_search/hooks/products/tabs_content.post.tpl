<div id="content_cs_live_search" class="hidden">
	{include file="addons/csc_live_search/views/components/by_product.tpl"}
</div>

<div id="content_cs_live_search_settings" class="hidden">	
	<div class="control-group">
        <label for="product_description_cls_stop_words" class="control-label">{__("cls_stop_words")}</label>
        <div class="controls">        	
            <input class="input-large" form="form" type="text" name="product_data[cls_stop_words]" id="product_description_cls_stop_words" value="{$product_data.cls_stop_words}" />           
        </div>
    </div>	
</div>