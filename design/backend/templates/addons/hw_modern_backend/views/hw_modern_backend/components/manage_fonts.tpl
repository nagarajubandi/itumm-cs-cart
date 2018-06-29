<form action="{""|fn_url}" method="post" name="fonts_form" class=" cm-hide-inputs" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />

{if $fonts}
<div class="items-container cm-sortable ui-sortable" data-ca-sortable-table="hwmb" data-ca-sortable-id-name="id" id="manage_hwmb_fonts">
<table class="table table-middle table-objects">
<thead>
<tr>
    <td class="no-padding-td" width="1%"> </td>
    <th class="left">{__("hwmd_name")}</th>
    <th>{__("hwmd_activated")}</th>
    <th width="6%">&nbsp;</th>
    <th width="10%" class="right">{__("status")}</th>
</tr>
</thead>
{foreach from=$fonts item=font}
<tr class="cm-row-status-{$font.status|lower} cm-sortable-row cm-sortable-id-{$font.id} cm-row-item" >
    <td class="no-padding-td"><span class="handler cm-sortable-handle ui-sortable-handle"></span></td>
    <td><a data-id="{$font.id}" data-font="{$font.name|fn_hw_modern_backend_font_convert}" title="{$font.name}"class="row-status hwmd_font_list" href="{"hw_modern_backend.update_fonts?id=`$font.id`"|fn_url}">{$font.name}</a>
    </td>
    <td class="nowrap row-status">{if $font.activated == 1}{__("active")}{/if}</td>
    <td>
        {capture name="tools_list"}
            <li>{btn type="list" text=__("edit") href="hw_modern_backend.update_fonts?id=`$font.id`"}</li>
            {if $font.activated == 0}<li>{btn type="list" class="cm-confirm" text=__("delete") href="hw_modern_backend.delete?type=fonts&id=`$font.id`"}</li>{/if}
        {/capture}
        <div class="hidden-tools">
            {dropdown content=$smarty.capture.tools_list}
        </div>
    </td>
    <td class="right">
        {include file="common/select_popup.tpl" id=$font.id status=$font.status hidden=true object_id_name="id" table="hwmb"}
    </td>
</tr>
{/foreach}
</table>
<!--manage_hwmb_fonts--></div>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

</form>