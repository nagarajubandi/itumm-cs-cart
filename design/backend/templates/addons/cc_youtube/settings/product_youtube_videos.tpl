<div id="content_youtube_videos">
    <table class="table table-middle" width="100%">
    <thead class="cm-first-sibling">
    <tr>
        <th width="5%">{__("id")}</th>
        <th width="40%">{__("comment")}</th>
        <th width="45%">{__("youtube_link")}</th>
        <th width="10%">&nbsp;</th>
    </tr>
    </thead>
    <tbody>

    {foreach from=$product_data.youtube_videos item="video" key="_key" name="prod_videos"}
    <tr class="cm-row-item">
        <td width="5%" class="{$no_hide_input_if_shared_product}">
            <input type="text" name="product_data[youtube_videos][{$_key}][{$_key}]" value="{$_key}" disabled="disabled" class="input-micro" />
            <input type="hidden" name="product_data[youtube_videos][{$_key}][video_id]" value="{$video.video_id}">
        </td>
        <td width="40%" class="{$no_hide_input_if_shared_product}">
            <input type="text" name="product_data[youtube_videos][{$_key}][comment]" value="{$video.comment}" size="30" class="input-medium" />
        </td>
        <td width="45%" class="{$no_hide_input_if_shared_product}">
            <input type="text" name="product_data[youtube_videos][{$_key}][youtube_link]" value="{$video.youtube_link}" size="20" class="input-medium" />
        </td>
        <td width="10%" class="nowrap {$no_hide_input_if_shared_product} right">
            {include file="buttons/clone_delete.tpl" microformats="cm-delete-row" no_confirm=true}
        </td>
    </tr>
    {/foreach}

    {$last_video= $product_data.prices|end}

    {math equation="x+1" x=$_key|default:0 assign="new_key"}
    <tr class="{cycle values="table-row , " reset=1}{$no_hide_input_if_shared_product}" id="box_add_youtube_video">
        <td width="5%">
            <input type="hidden" name="product_data[youtube_videos][{$new_key}][video_id]" value="">
        <td width="40%">
            <input type="text" name="product_data[youtube_videos][{$new_key}][comment]" value="" size="30" class="input-medium" /></td>
        <td width="45%">
            <input type="text" name="product_data[youtube_videos][{$new_key}][youtube_link]" value="" size="20" class="input-medium" /></td>
        </td>
        <td width="10%" class="right">
            {include file="buttons/multiple_buttons.tpl" item_id="add_youtube_video"}
        </td>
    </tr>
    </tbody>
    </table>
</div>