{assign var="label" value="hwmb_color_`$name`"}
<div class="control-group">
    <label class="control-label cm-color cm-required" for="hwmb_color_{$name}">{__($label)}:</label>
    <div class="controls">
        <div class="colorpicker">
            <input type="text" name="{$type}_data[{$name}]" id="hwmb_color_{$name}" value="{$value}" class="colorpicker" >
        </div>
    </div>
</div>