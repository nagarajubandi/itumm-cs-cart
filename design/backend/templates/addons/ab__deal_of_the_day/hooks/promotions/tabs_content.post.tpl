{if 'ab__deal_of_the_day.view'|fn_check_view_permissions}
<div id="content_ab__dotd" {if !'ab__deal_of_the_day.manage'|fn_check_view_permissions}class="cm-hide-inputs"{/if}>
<div class="control-group">
<label class="control-label" for="elm_ab__dotd_h1">{__("ab__dotd.form.h1")}</label>
<div class="controls">
<input type="text" name="promotion_data[h1]" id="elm_ab__dotd_h1" size="25" value="{$promotion_data.h1}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__dotd_page_title">{__("ab__dotd.form.page_title")}</label>
<div class="controls">
<input type="text" name="promotion_data[page_title]" id="elm_ab__dotd_page_title" value="{$promotion_data.page_title}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__dotd_meta_description">{__("ab__dotd.form.meta_description")}</label>
<div class="controls">
<input type="text" name="promotion_data[meta_description]" id="elm_ab__dotd_meta_description" value="{$promotion_data.meta_description}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__dotd_meta_keywords">{__("ab__dotd.form.meta_keywords")}</label>
<div class="controls">
<input type="text" name="promotion_data[meta_keywords]" id="elm_ab__dotd_meta_keywords" value="{$promotion_data.meta_keywords}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label">{__("ab__dotd.form.page_image")}:</label>
<div class="controls">
{include file="common/attach_images.tpl" image_name="promotion_main" image_object_type="promotion" image_pair=$promotion_data.main_pair image_type="M" no_detailed=true}
</div>
</div>
<div class="control-group">
<label class="control-label">{__("ab__dotd.form.list_image")}:</label>
<div class="controls">
{include file="common/attach_images.tpl" image_name="promotion_list" image_object_type="promotion" image_pair=$promotion_data.list_pair image_type="A" no_detailed=true}
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__dotd_filter">{__("ab__dotd.form.filter")}:</label>
<div class="controls">
<input type="hidden" name="promotion_data[filter]" value="N" />
<input type="checkbox" name="promotion_data[filter]" id="elm_ab__dotd_filter" value="Y" {if $promotion_data.filter == "Y"}checked="checked"{/if} />
</div>
</div>
{if $addons.seo.status == 'A'}
{include file="addons/seo/common/seo_name_field.tpl" object_data=$promotion_data object_name="promotion_data" object_id=$promotion_data.page_id object_type="x"}
{/if}
<!--content_ab__dotd--></div>
{/if}