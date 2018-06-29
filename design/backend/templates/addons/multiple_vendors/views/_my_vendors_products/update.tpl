{capture name="mainbox"}

{capture name="tabsbox"}
{** /Item menu section **}

<form action="{""|fn_url}" method="post" name="product_update_form" class="cm-form-highlight cm-disable-empty-files{if ""|fn_check_form_permissions} cm-hide-inputs{/if}" enctype="multipart/form-data"> {* product update form *}
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="selected_section" id="selected_section" value="{$smarty.request.selected_section}" />
<input type="hidden" name="product_id" value="{$product_data.product_id}" />

{** Product description section **}

<div id="content_detailed"> {* content detailed *}

{** General info section **}
<fieldset>

{include file="common_templates/subheader.tpl" title=$lang.information}

<div class="form-field">
	<label for="product_description_product" class="cm-required">{$lang.name}:</label>
	<span class="input-helper"><input type="text" name="product_data[product]" id="product_description_product" size="55" value="{$product_data.product}" class="input-text-large main-input" disabled="disabled"/></span>
</div>

<div class="form-field">
	{math equation="rand()" assign="rnd"}
	{assign var="request_category_id" value=","|explode:$smarty.request.category_id|array_flip}
	<label for="ccategories_{$rnd}_ids" class="cm-required">{$lang.categories}:</label>
	<div class="categories">{include file="pickers/categories_picker.tpl" rnd=$rnd data_id="categories" input_name="product_data[add_categories]" radio_input_name="product_data[main_category]" item_ids=$product_data.category_ids|default:$request_category_id hide_link=true hide_delete_button=true display_input_id="category_ids" disable_no_item_text=true view_mode="list"}</div>
</div>

<div class="form-field">
	<label for="price_price" class="cm-required">{$lang.price} ({$currencies.$primary_currency.symbol}):</label>
	<input type="text" name="product_data[price]" id="price_price" size="10" value="{$product_data.price|default:"0.00"}" class="input-text-medium" />
</div>

<div class="form-field">
	<label for="product_full_descr">{$lang.full_description}:</label>
	<textarea id="product_full_descr" name="product_data[full_description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long">{$product_data.full_description}</textarea>
</div>
{** /General info section **}

{include file="views/companies/components/company_field.tpl" title=$lang.vendor id="product_data_company_id" selected=$product_data.company_id}

<div class="form-field">
	<label>{$lang.images}:</label>
	{include file="common_templates/attach_images.tpl" image_name="product_main" image_object_type="product" image_pair=$product_data.main_pair icon_text=$lang.text_product_thumbnail detailed_text=$lang.text_product_detailed_image no_thumbnail=true}
</div>
</fieldset>

</div> {* /content detailed *}

{** /Product description section **}



{** Form submit section **}

<div class="buttons-container cm-toggle-button buttons-bg">
	{if $mode != "add"}
		{include file="buttons/save_cancel.tpl" but_name="dispatch[my_vendors_products.update]"}
	{/if}
</div>
{** /Form submit section **}

</form> {* /product update form *}

{/capture}
{include file="common_templates/tabsbox.tpl" content=$smarty.capture.tabsbox group_name=$controller active_tab=$smarty.request.selected_section track=true}

{/capture}
{if $mode != "add"}
	{include file="common_templates/view_tools.tpl" url="my_vendors_products.update?product_id="}
	
	{capture name="preview"}
		{assign var="view_uri" value="products.view?product_id=`$product_data.product_id`"}
		{assign var="view_uri_escaped" value="`$view_uri`&amp;action=preview"|fn_url:'C':'http':'&':$smarty.const.DESCR_SL|escape:"url"}
		
		<a target="_blank" class="tool-link" title="{$view_uri|fn_url:'C':'http':'&':$smarty.const.DESCR_SL}" href="{$view_uri|fn_url:'C':'http':'&':$smarty.const.DESCR_SL}">{$lang.preview}</a>
		<a target="_blank" class="tool-link" title="{$view_uri|fn_url:'C':'http':'&':$smarty.const.DESCR_SL}" href="{"profiles.act_as_user?user_id=`$auth.user_id`&amp;area=C&amp;redirect_url=`$view_uri_escaped`"|fn_url}">{$lang.preview_as_admin}</a>
	{/capture}
	{include file="common_templates/mainbox.tpl" title="`$lang.editing_product`:&nbsp;`$product_data.product`"|unescape|strip_tags content=$smarty.capture.mainbox select_languages=true tools=$smarty.capture.view_tools}
{/if}
