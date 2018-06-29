<div class="control-group">
    <label class="control-label" for="youtube_link">{__("youtube_link")}:</label>
    <div class="controls">
        <input type="text" id="youtube_link" name="product_data[youtube_link]" value="{$product_data.youtube_link}" class="input-large" size="5" />
    </div>
</div>

<div class="control-group">
    <label class="control-label">{__("show_youtube_video")}:</label>
    <div class="controls">
        <input type="hidden" name="product_data[show_youtube_video]" value="N"/>
        <input type="checkbox" name="product_data[show_youtube_video]" id="show_youtube_video" {if $product_data.show_youtube_video == 'Y'}checked="checked"{/if} value="Y" />
    </div>
</div>