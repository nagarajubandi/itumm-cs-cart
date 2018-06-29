{if $color.id}
    {assign var="id" value=$color.id}
{else}
    {assign var="id" value=0}
{/if}

{assign var="allow_save" value=true}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="color_update_form" class="form-horizontal form-edit  {if !$allow_save}cm-hide-inputs{/if}">

<div id="color_update_form_{$id}">
    <input type="hidden" class="cm-no-hide-input" name="color_data[id]" value="{$id}" />
    <input type="hidden" class="cm-no-hide-input" name="color_data[type]" value="colors" />
    <input type="hidden" name="activated" value="{$color.activated|default:0}" />    

    {include file="common/subheader.tpl" title=__("information") target="#hwmd_info"}
    <div id="hwmd_info" class="in collapse">
        <fieldset>

        <div class="control-group">
            <label for="elm_color_name" class="control-label cm-required">{__("hwmd_name")}:</label>
            <div class="controls">
                <input type="text" name="color_data[name]" id="elm_color_name" size="55" value="{$color.name}" class="input-large" />
            </div>
        </div>

        {include file="common/select_status.tpl" input_name="color_data[status]" id="elm_color_status" obj=$color hidden=true}

        </fieldset>
    </div>

    {include file="common/subheader.tpl" title=__("hwmd_body_colors") target="#hwmd_body_setting"}
    <div id="hwmd_body_setting" class="in collapse">
        <fieldset>
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="body" value=$color.body type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="links" value=$color.links type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="btn_primary_bg" value=$color.btn_primary_bg type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="btn_primary_color" value=$color.btn_primary_color type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="btn_group" value=$color.btn_group type="color"}
        </fieldset>
    </div>

    {include file="common/subheader.tpl" title=__("hwmd_navbar_colors") target="#hwmd_navbar_setting"}
    <div id="hwmd_navbar_setting" class="in collapse">
        <fieldset>
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="navbar" value=$color.navbar type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="navbar_links" value=$color.navbar_links type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="navbar_hover_bg" value=$color.navbar_hover_bg type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="navbar_hover_links" value=$color.navbar_hover_links type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="navbar_brand" value=$color.navbar_brand type="color"}            
        </fieldset>
    </div>

    {include file="common/subheader.tpl" title=__("hwmd_subnav_colors") target="#hwmd_subnav_setting"}
    <div id="hwmd_subnav_setting" class="in collapse">
        <fieldset>
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="subnav" value=$color.subnav type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="subnav_links" value=$color.subnav_links type="color"}
        </fieldset>
    </div>

    {include file="common/subheader.tpl" title=__("hwmd_actions_colors") target="#hwmd_actions_setting" type="color"}
    <div id="hwmd_actions_setting" class="in collapse">
        <fieldset>
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="actions" value=$color.actions type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="actions_links" value=$color.actions_links type="color"}
        </fieldset>
    </div>     

    {include file="common/subheader.tpl" title=__("hwmd_dashboard_colors") target="#hwmd_dashboard_setting"}
    <div id="hwmd_dashboard_setting" class="in collapse">
        <fieldset>
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="dashboard_card_orders_title" value=$color.dashboard_card_orders_title type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="dashboard_card_orders_content" value=$color.dashboard_card_orders_content type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="dashboard_card_orders_color" value=$color.dashboard_card_orders_color type="color"}

            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="dashboard_card_sales_title" value=$color.dashboard_card_sales_title type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="dashboard_card_sales_content" value=$color.dashboard_card_sales_content type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="dashboard_card_sales_color" value=$color.dashboard_card_sales_color type="color"}

            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="dashboard_card_taxes_title" value=$color.dashboard_card_taxes_title type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="dashboard_card_taxes_content" value=$color.dashboard_card_taxes_content type="color"}
            {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="dashboard_card_taxes_color" value=$color.dashboard_card_taxes_color type="color"}
        </fieldset>
    </div>

{literal}
<script>

$(function(){ 
    if (!$.fn.spectrum) {
        $.loadCss(['js/lib/spectrum/spectrum.css'], false, true);
        $.getScript('js/lib/spectrum/spectrum.js', function(){ fn_hw_modern_backend_colorpicker(); });
    }else{
        fn_hw_modern_backend_colorpicker();
    }  

});

function fn_hw_modern_backend_colorpicker(){
    $(".colorpicker").spectrum({
    showInput: true,
    className: "full-spectrum",
    showInitial: true,
    showPalette: true,
    showSelectionPalette: true,
    maxPaletteSize: 10,
    preferredFormat: "hex6",
    localStorageKey: "hwmb_spectrum",
    palette: [
                    ["#000000", "#434343", "#666666", "#999999", "#b7b7b7", "#cccccc", "#d9d9d9", "#efefef", "#f3f3f3", "#ffffff"],
                    ["#980000", "#ff0000", "#ff9900", "#ffff00", "#00ff00", "#00ffff", "#4a86e8", "#0000ff", "#9900ff", "#ff00ff"],
                    ["#e6b8af", "#f4cccc", "#fce5cd", "#fff2cc", "#d9ead3", "#d0e0e3", "#c9daf8", "#cfe2f3", "#d9d2e9", "#ead1dc"],
                    ["#dd7e6b", "#ea9999", "#f9cb9c", "#ffe599", "#b6d7a8", "#a2c4c9", "#a4c2f4", "#9fc5e8", "#b4a7d6", "#d5a6bd"],
                    ["#cc4125", "#e06666", "#f6b26b", "#ffd966", "#93c47d", "#76a5af", "#6d9eeb", "#6fa8dc", "#8e7cc3", "#c27ba0"],
                    ["#a61c00", "#cc0000", "#e69138", "#f1c232", "#6aa84f", "#45818e", "#3c78d8", "#3d85c6", "#674ea7", "#a64d79"],
                    ["#85200c", "#990000", "#b45f06", "#bf9000", "#38761d", "#134f5c", "#1155cc", "#0b5394", "#351c75", "#741b47"],
                    ["#5b0f00", "#660000", "#783f04", "#7f6000", "#274e13", "#0c343d", "#1c4587", "#073763", "#20124d", "#4c1130"]
                ]
    });
}
</script>
{/literal}

{capture name="buttons"}
    {include file="buttons/save_cancel.tpl" but_name="dispatch[hw_modern_backend.update_colors]" hide_first_button=false hide_second_button=false but_target_form="color_update_form" save=$id}
{/capture}

<!--color_update_form{$id}--></div>
</form>

{/capture}

{capture name="sidebar"}

{/capture}

{if !$id}
    {assign var="_title" value=__('hwmb_add_color')}
{else}
    {assign var="_title" value=__('hwmb_edit_color')}
    {assign var="_title" value="`$_title` #`$color.name`"}
{/if}


{include file="common/mainbox.tpl" title=$_title sidebar=$smarty.capture.sidebar content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons}