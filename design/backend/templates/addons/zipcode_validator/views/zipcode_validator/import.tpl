{capture name="mainbox"}

<div id="content">

    {include file="common/subheader.tpl" title={__("import_details")} target="zip_data_import"}
    <div id="zip_data_import" class="in collapse">
        <p class="p-notice">{__("text_zip_import_notice")}</p>
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

    {include file="common/subheader.tpl" title=__("import_options") target="#import_options"}
    <div id="import_options" class="in collapse">
    <!-- cm-ajax cm-comet-->
    <form action="{""|fn_url}" method="post" name="my_import_form" enctype="multipart/form-data" class="form-horizontal form-edit">
    <input type="hidden" name="section" value="import" />

    {if $pattern.options}
    {foreach from=$pattern.options key=k item=o}
    <div class="control-group">
        <label for="{$k}" class="control-label">
            {__($o.title)}{if $o.description}{include file="common/tooltip.tpl" tooltip=__($o.description)}{/if}:
        </label>
        <div class="controls">
            {if $o.type == "checkbox"}
                <input type="hidden" name="import_options[{$k}]" value="N" />
                <input id="{$k}" class="checkbox" type="checkbox" name="import_options[{$k}]" value="Y" {if $o.default_value == "Y"}checked="checked"{/if} />
            {elseif $o.type == "input"}
                <input id="{$k}" class="input-large" type="text" name="import_options[{$k}]" value="{$o.default_value}" />
            {elseif $o.type == "select"}
                <select name="import_options[{$k}]" id="{$k}">
                    {foreach from=$o.variants key=vk item=vi}
                        <option value="{$vk}" {if $vk == $o.default_value}checked="checked"{/if}>{__($vi)}</option>
                    {/foreach}
                </select>
            {/if}

            {if $o.notes}
                <p class="muted">{$o.notes nofilter}</p>
            {/if}
        </div>
    </div>
    {/foreach}
    {/if}

    <div class="control-group">
        <label class="control-label">{__("csv_delimiter")}:</label>
        <div class="controls">{include file="addons/zipcode_validator/views/zipcode_validator/components/csv_delimiters.tpl" name="import_options[delimiter]"}</div>
    </div>

    <div class="control-group">
        <label class="control-label">{__("select_file")}:</label>
        <div class="controls">{include file="common/fileuploader.tpl" var_name="csv_file[0]" prefix="my_import"}</div>
    </div>

    {capture name="buttons"}
        <div class="cm-tab-tools" id="tools_my_import">
            {include file="buttons/button.tpl" but_text=__("import") but_name="dispatch[zipcode_validator.my_import]" but_role="submit-link" but_target_form="my_import_form" but_meta="cm-tab-tools"}
            </div>
    {/capture}

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
    </div>
</div>

{/capture}
{include file="common/mainbox.tpl" title=__("import_data") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons}