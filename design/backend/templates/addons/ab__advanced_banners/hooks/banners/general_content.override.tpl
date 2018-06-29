<script type="text/javascript">
$(document).ready(function(){
$('#elm_banner_type').change(function(){
var type = $(this).find('option:selected').val();
if (type == 'G'){
$('#banner_graphic').show();
$('#banner_target').show();
$('#banner_url').show();
$('#ab__color_scheme').hide();
$('#ab__title').hide();
$('#ab__button_text').hide();
$('#ab__adv_text').hide();
$('#banner_text').hide();
$('#ab__background_image').hide();
$('#ab__bg_color').hide();
}
if (type == 'T'){
$('#banner_text').show();
$('#banner_graphic').hide();
$('#banner_target').hide();
$('#banner_url').hide();
$('#ab__color_scheme').hide();
$('#ab__title').hide();
$('#ab__button_text').hide();
$('#ab__adv_text').hide();
$('#ab__background_image').hide();
$('#ab__bg_color').hide();
}
if (type == 'C'){
$('#banner_text').hide();
$('#ab__color_scheme').show();
$('#ab__title').show();
$('#ab__button_text').show();
$('#ab__adv_text').show();
$('#banner_graphic').show();
$('#banner_target').show();
$('#banner_url').show();
$('#ab__background_image').show();
$('#ab__bg_color').show();
}
});
});
</script>
<div class="control-group">
<label for="elm_banner_name" class="control-label cm-required">{__("name")}</label>
<div class="controls">
<input type="text" name="banner_data[banner]" id="elm_banner_name" value="{$banner.banner}" size="25" class="input-large" /></div>
</div>
{if "ULTIMATE"|fn_allowed_for}
{include file="views/companies/components/company_field.tpl"
name="banner_data[company_id]"
id="banner_data_company_id"
selected=$banner.company_id
}
{/if}
<div class="control-group">
<label for="elm_banner_position" class="control-label">{__("position_short")}</label>
<div class="controls">
<input type="text" name="banner_data[position]" id="elm_banner_position" value="{$banner.position|default:"0"}" size="3"/>
</div>
</div>
<div class="control-group">
<label for="elm_banner_type" class="control-label cm-required">{__("type")}</label>
<div class="controls">
<select name="banner_data[type]" id="elm_banner_type">
<option {if $banner.type == "G"}selected="selected"{/if} value="G">{__("graphic_banner")}</option>
<option {if $banner.type == "T"}selected="selected"{/if} value="T">{__("text_banner")}</option>
<option {if $banner.type == "C"}selected="selected"{/if} value="C">{__("abab.type")}</option>
</select>
</div>
</div>
<div class="control-group {if $b_type == "T"}hidden{/if}" id="banner_graphic">
<label class="control-label">{__("image")}</label>
<div class="controls">
{include file="common/attach_images.tpl" image_name="banners_main" image_object_type="promo" image_pair=$banner.main_pair image_object_id=$id no_detailed=true hide_titles=true}
</div>
</div>
<div class="control-group {if $b_type == "G" || $b_type == "T"}hidden{/if}" id="ab__color_scheme">
<label for="elm_ab__color_scheme" class="control-label">{__("abab.color_scheme")}:</label>
<div class="controls">
<select name="banner_data[ab__color_scheme]" id="elm_ab__color_scheme">
<option {if $banner.ab__color_scheme == "light"}selected="selected"{/if} value="light">{__("abab.color_scheme.light")}</option>
<option {if $banner.ab__color_scheme == "dark"}selected="selected"{/if} value="dark">{__("abab.color_scheme.dark")}</option>
</select>
</div>
</div>
<div class="control-group {if $b_type == "G" || $b_type == "T"}hidden{/if}" id="ab__title">
<label class="control-label" for="elm_ab__title">{__("abab.title")}:</label>
<div class="controls">
<input id="elm_ab__title" name="banner_data[ab__title]" type="text" value="{$banner.ab__title}" class="input-large">
</div>
</div>
<div class="control-group {if $b_type == "G" || $b_type == "T"}hidden{/if}" id="ab__adv_text">
<label class="control-label" for="elm_ab__adv_text">{__("abab.description")}:</label>
<div class="controls">
<input id="elm_ab__adv_text" name="banner_data[ab__adv_text]" type="text" value="{$banner.ab__adv_text}" class="input-large">
</div>
</div>
<div class="control-group {if $b_type == "G" || $b_type == "T"}hidden{/if}" id="ab__button_text">
<label class="control-label" for="elm_ab__button_text">{__("abab.button")}:</label>
<div class="controls">
<input id="elm_ab__button_text" value="{$banner.ab__button_text}" name="banner_data[ab__button_text]" type="text" class="input-large">
</div>
</div>
<div class="control-group {if $b_type == "G" || $b_type == "T"}hidden{/if}" id="ab__background_image">
<label class="control-label" for="elm_ab__adv_text">{__("abab.background_image")}:</label>
<div class="controls">
{include file="common/attach_images.tpl" image_name="banners_background_image" image_object_type="bg_image" image_pair=$banner.bg_image image_object_id=$id no_detailed=true hide_titles=true}
</div>
</div>
<div class="control-group {if $b_type == "G" || $b_type == "T"}hidden{/if}" id="ab__bg_color">
<label class="control-label" for="elm_ab__bg_color">{__("abab.background_color")}:</label>
<div class="controls">
<input id="elm_ab__bg_color" name="banner_data[ab__bg_color]" type="text" value="{$banner.ab__bg_color}">
</div>
</div>
<div class="control-group {if $b_type == "G" || $b_type == "C"}hidden{/if}" id="banner_text">
<label class="control-label" for="elm_banner_description">{__("description")}:</label>
<div class="controls">
<textarea id="elm_banner_description" name="banner_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large">{$banner.description}</textarea>
</div>
</div>
<div class="control-group {if $b_type == "T"}hidden{/if}" id="banner_target">
<label class="control-label" for="elm_banner_target">{__("open_in_new_window")}</label>
<div class="controls">
<input type="hidden" name="banner_data[target]" value="T" />
<input type="checkbox" name="banner_data[target]" id="elm_banner_target" value="B" {if $banner.target == "B"}checked="checked"{/if} />
</div>
</div>
<div class="control-group {if $b_type == "T"}hidden{/if}" id="banner_url">
<label class="control-label" for="elm_banner_url">{__("url")}:</label>
<div class="controls">
<input type="text" name="banner_data[url]" id="elm_banner_url" value="{$banner.url}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_banner_timestamp_{$id}">{__("creation_date")}</label>
<div class="controls">
{include file="common/calendar.tpl" date_id="elm_banner_timestamp_`$id`" date_name="banner_data[timestamp]" date_val=$banner.timestamp|default:$smarty.const.TIME start_year=$settings.Company.company_start_year}
</div>
</div>
{include file="views/localizations/components/select.tpl" data_name="banner_data[localization]" data_from=$banner.localization}
{include file="common/select_status.tpl" input_name="banner_data[status]" id="elm_banner_status" obj_id=$id obj=$banner hidden=true}
