{* block-description:abab_combined *}
{** отслеживаем https **}
{assign var="img_path" value="http_image_path"}
{if $smarty.const.HTTPS}{assign var="img_path" value="https_image_path"}{/if}
{foreach from=$items item="banner" key="key"}
{if $banner.ab__button_text ==""}
<a
href="{$banner.url|fn_url}"
{if $banner.target == "B"}target="_blank"{/if}
class="ab-advanced-banner ty-banner__image-item {if $block.properties.shadow_title =="Y"}shadow{/if} {if $banner.ab__color_scheme == "light"}light{else}dark{/if}"
style="background: {if $banner.ab__bg_color !=""}{$banner.ab__bg_color}{/if} {if $banner.bg_image.icon.$img_path}url('{$banner.bg_image.icon.$img_path}'){/if};
{if $block.properties.margin !=""}margin:{$block.properties.margin};{/if}">
{else}
<div
class="ab-advanced-banner ty-banner__image-item {if $block.properties.shadow_title =="Y"}shadow{/if} {if $banner.ab__color_scheme == "light"}light{else}dark{/if}"
style="background: {if $banner.ab__bg_color !=""}{$banner.ab__bg_color}{/if} {if $banner.bg_image.icon.$img_path}url('{$banner.bg_image.icon.$img_path}'){/if};
{if $block.properties.margin !=""}margin:{$block.properties.margin};{/if}">
{/if}
<div class="advanced-banner-content" {if $block.properties.min_height !=""}style="min-height:{$block.properties.min_height}"{/if}>
{if !empty($banner.main_pair) and is_array($banner.main_pair)}
<div class="advanced-banner-image {if $block.properties.align =="left"}right{/if}{if $block.properties.align =="right"}left{/if}{if $block.properties.align =="center"}center{/if}" style=" line-height: {if $block.properties.align =="center"}{$block.properties.min_height/2}px;padding-bottom:20px;{else}{$block.properties.min_height}{/if}">
<img src="{$banner.main_pair.icon.$img_path}" alt="{$banner.main_pair.icon.alt}" title="{$banner.main_pair.icon.alt}" style="max-height:{$block.properties.min_height};width:auto">
</div>
{/if}
<div class="advanced-banner-block {if $block.properties.conent_tr_bg =="Y"}mask{/if} {if $block.properties.full_width_content =="Y"}fullwidth{/if} {$block.properties.align}" style="{if $block.properties.valign =="top"}{$block.properties.valign}: 0;{/if}{if $block.properties.valign =="bottom"}{$block.properties.valign}: 0;{/if}{if $block.properties.padding !=""}padding:{$block.properties.padding};{/if}{if $block.properties.valign == "center"}padding-top:0;padding-bottom:0;{/if}">
<div class="advanced-banner-mb" {if $block.properties.valign == "center"}style="display:table-cell;height:{if !empty($banner.main_pair) and is_array($banner.main_pair) && $block.properties.align =="center"}{$block.properties.min_height/2}px{else}{$block.properties.min_height}{/if};vertical-align:middle;"{/if}>
<{$block.properties.title_h} class="advanced-banner-title" style="font-size: {$block.properties.title_font_size}">{$banner.ab__title nofilter}</{$block.properties.title_h}>
<div class="advanced-banner-text {if $block.properties.desc_mark_color != "transparent"}mark{/if}" style="font-size:{$block.properties.desc_font_size};background: {$block.properties.desc_mark_color}">{$banner.ab__adv_text nofilter}</div>
{if $banner.ab__button_text !=""}<br><a href="{$banner.url|fn_url}" class="ty-btn ty-btn__primary" {if $banner.target == "B"}target="_blank"{/if}>{$banner.ab__button_text nofilter}</a>{/if}
</div>
</div>
</div>
{if $banner.ab__button_text == ""}</a>{else}</div>{/if}
{/foreach}