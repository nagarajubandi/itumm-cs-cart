{if $bg.id}
    {assign var="id" value=$bg.id}
{else}
    {assign var="id" value=0}
{/if}

{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="bg_update_form" class="form-horizontal form-edit" enctype="multipart/form-data">

<div id="bg_update_form_{$id}">
    <input type="hidden" class="cm-no-hide-input" name="bg_data[id]" value="{$id}" />
    <input type="hidden" class="cm-no-hide-input" name="bg_data[type]" value="bgs" />
    <input type="hidden" name="activated" value="{$bg.activated|default:0}" />   

    {include file="common/subheader.tpl" title=__("information") target="#hwmd_info"}
    <div id="hwmd_info" class="in collapse">
        <fieldset>

        <div class="control-group">
            <label for="elm_bg_name" class="control-label cm-required">{__("hwmd_name")}:</label>
            <div class="controls">
                <input type="text" name="bg_data[name]" id="elm_bg_name" size="55" value="{$bg.name}" class="input-large" />
            </div>
        </div>

        {include file="addons/hw_modern_backend/views/hw_modern_backend/components/colorpicker.tpl" name="color" value=$bg.color type="bg"}

        <div class="control-group">
            <label class="control-label">{__("hwmd_bg_image")}:</label>
            <div class="controls">
                {include file="common/attach_images.tpl" image_name="page_main" image_object_type="page" image_pair=$bg.main_pair icon_text=__("text_product_thumbnail") detailed_text=__("text_product_detailed_image") no_thumbnail=true hide_alt=true}
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_bg_position">{__("hwmd_bg_center")}:</label>
                <div class="controls">
                    <input type="hidden" value="repeat" name="bg_data[position]">
                    <input type="checkbox" value="center repeat-y" id="elm_bg_position" name="bg_data[position]"{if $bg.position=='center'} checked="checked"{/if}>
                </div>        
        </div>

        {include file="common/select_status.tpl" input_name="bg_data[status]" id="elm_bg_status" obj=$bg hidden=true}
    
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
    move: function (color) {
        
    },
    show: function () {
    
    },
    beforeShow: function () {
    
    },
    hide: function () {
    
    },
    change: function() {
        
    },
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
    {include file="buttons/save_cancel.tpl" but_name="dispatch[hw_modern_backend.update_bgs]" hide_first_button=false hide_second_button=false but_target_form="bg_update_form" save=$id}
{/capture}

<!--bg_update_form{$id}--></div>
</form>

{/capture}

{if !$id}
    {assign var="_title" value=__('hwmb_add_bg')}
{else}
    {assign var="_title" value=__('hwmb_add_bg')}
    {assign var="_title" value="`$_title` #`$bg.name`"}
{/if}


{include file="common/mainbox.tpl" title=$_title content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons}