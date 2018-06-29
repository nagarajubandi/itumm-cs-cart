{if $pattern.range_options}
    {assign var="r_url" value="zipcode_validator.export?section=export"|fn_url}
    {assign var="oname" value=__('products')|lower}
    {notes}
    {if $export_range}
        {__("text_objects_for_export", ["[total]" => $export_range, "[name]" => $oname])}
        <p>
        <a href="{"zipcode_validator.select_range"|fn_url}">{__("change_range")} &rsaquo;&rsaquo;</a>&nbsp;&nbsp;&nbsp;<a class="cm-post" href="{"zipcode_validator.delete_range"|fn_url}">{__("delete_range")} &rsaquo;&rsaquo;</a>
        </p>
    {else}
        {__("text_select_range", ["[name]" => $oname])}: <a href="{"zipcode_validator.select_range"|fn_url}" id="zip_select_range">{__("select")} &rsaquo;&rsaquo;</a>
    {/if}
    {/notes}
{/if}

{capture name="mainbox"}

{capture name="tabsbox"}
{assign var="p_id" value=$pattern.pattern_id}
<div id="content_{$p_id}">
    {include file="common/subheader.tpl" title=__("general")}

    <form action="{""|fn_url}" method="post" name="{$p_id}_manage_layout_form" class="cm-ajax cm-comet form-edit form-horizontal cm-disable-check-changes">

    {include file="common/subheader.tpl" title={__("export_details")} target="zip_data_export"}
    <div id="zip_data_export" class="in collapse">
        <p class="p-notice">{__("text_zip_export_notice")}</p>
        <table class="table table-striped table-zip">
            <tr>
                <td>
                    <ul class="unstyled">
                        <li style="display:inline-block;"><strong>{__("product_id")}</strong></li>
                        <li style="display:inline-block;"><strong>{__("zip_code")}</strong></li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>

    {include file="common/subheader.tpl" title=__("export_options")}
    {assign var="override_options" value=$pattern.override_options}
    {if $override_options.delimiter}
        <input type="hidden" name="export_options[delimiter]" value="{$override_options.delimiter}" />
    {else}
    <div class="control-group">
        <label class="control-label">{__("csv_delimiter")}:</label>
        <div class="controls">
            {include file="addons/zipcode_validator/views/zipcode_validator/components/csv_delimiters.tpl" name="export_options[delimiter]" value=$active_layout.options.delimiter}
        </div>
    </div>
    {/if}
    {if $override_options.output}
        <input type="hidden" name="export_options[output]" value="{$override_options.output}" />
    {else}
    <div class="control-group">
        <label for="output" class="control-label">{__("output")}:</label>
        <div class="controls">
            {include file="addons/zipcode_validator/views/zipcode_validator/components/csv_output.tpl" name="export_options[output]" value=$active_layout.options.output}
        </div>
    </div>
    {/if}
    <div class="control-group">
        <label for="filename" class="control-label">{__("filename")}:</label>
        <div class="controls">
            <input type="text" name="export_options[filename]" id="filename" size="50" class="input-large" value="file_{$smarty.const.TIME|date_format:"%m%d%Y"}.csv" />
            {assign var="filename_description" value=$pattern.filename_description}
            {if $pattern.filename_description}<p><small>{__($filename_description)}</small></p>{/if}

            <p class="muted">
                {__('text_file_editor_notice', ["[href]" => "file_editor.manage?path=/"|fn_url])}
            </p>
        </div>
    </div>
</form>
    <style type="text/css">
        .table-zip strong {
            .border-radius(2px);
            position: relative;
            left: -4px;
            display: inline-block;
            padding: 0 4px;
            background: #333;
            color: #fff;
        }
    </style>
<!--content_{$p_id}--></div>

{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$p_id}

{assign var="c_url" value=$config.current_url|escape:url}
<div class="hidden" title="{__("exported_files")}" id="content_exported_files">
{if $export_files}
    <table class="table">
    <thead>
        <tr>
            <th width="70%">{__("filename")}</th>
            <th width="20%">{__("filesize")}</th>
            <th width="10%">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$export_files item=file name="export_files"}
    {assign var="file_name" value=$file.name|escape:"url"}
    <tr>
        <td>
            <a href="{"zipcode_validator.get_file?filename=`$file_name`"|fn_url}">{$file.name}</a></td>
        <td>
            {$file.size|number_format}&nbsp;{__("bytes")}</td>
        <td class="right">
            <div class="hidden-tools">
                <a href="{"zipcode_validator.get_file?filename=`$file_name`"|fn_url}" title="{__("download")}" class="cm-tooltip icon-download"></a>    
                <a class="cm-ajax cm-confirm cm-post icon-trash cm-tooltip" title="{__("delete")}" href="{"zipcode_validator.delete_file?filename=`$file_name`&redirect_url=`$c_url`"|fn_url}" data-ca-target-id="content_exported_files"></a>
            </div>
        </td>
    </tr>
    {/foreach}
    </tbody>
    </table>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}
<!--content_exported_files--></div>

{capture name="buttons"}
    {capture name="tools_list"}
        <li>{btn type="dialog" text=__("exported_files") target_id="content_exported_files"}</li>
    {/capture}
    {dropdown content=$smarty.capture.tools_list}

    <div class="cm-tab-tools pull-right shift-left" id="tools_{$p_id}">
        {include file="buttons/button.tpl" but_text=__("export") but_name="dispatch[zipcode_validator.my_export]" but_role="submit-link" but_target_form="`$p_id`_manage_layout_form" but_meta="cm-tab-tools cm-comet"}
        <!--tools_{$p_id}--></div>
{/capture}

{/capture}

{include file="common/mainbox.tpl" title=__("export_data") buttons=$smarty.capture.buttons content=$smarty.capture.mainbox}

{if $smarty.request.output == "D"}
<meta http-equiv="Refresh" content="0;URL={"zipcode_validator.get_file?filename=`$smarty.request.filename`"|fn_url}" />
{/if}