<form action="{""|fn_url}" method="post" name="bgs_form" class=" cm-hide-inputs" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />

{if $bgs}
<div class="items-container cm-sortable ui-sortable" data-ca-sortable-table="hwmb" data-ca-sortable-id-name="id" id="manage_hwmb_bgs">
<table class="table table-middle table-objects">
<thead>
<tr>
    <td class="no-padding-td" width="1%"> </td>
    <th colspan="2" class="left">{__("hwmd_name")}</th>
    <th>{__("hwmd_activated")}</th>
    <th width="6%">&nbsp;</th>
    <th width="10%" class="right">{__("status")}</th>
</tr>
</thead>
{foreach from=$bgs item=bg}
<tr class="cm-row-status-{$bg.status|lower} cm-sortable-row cm-sortable-id-{$bg.id} cm-row-item" >
    <td class="no-padding-td"><span class="handler cm-sortable-handle ui-sortable-handle"></span></td>
    <td
            class="left hwmd_bg_item hwmd_bg{if $bg.activated == 1} activated{/if}"
            style="width:25px"
            title="{$bg.name}"
            data-color="{$bg.color}"
            data-image="{$bg.main_pair.detailed.http_image_path}">

        {if !$bg.main_pair}<span style="display:block; width:25px; height:25px; border: 1px solid {if $bg.activated == 1}#D64635;{else}#707070;{/if} background: {$bg.color}"></span>{else}
        {assign var="image_data" value=$bg.main_pair|fn_image_to_display:25:25}
         <img  src="{$image_data.image_path}" width="{$image_data.width}" height="{$image_data.height}" alt="{$bg.name}" />
        {/if}
    </td>
    <td><a class="row-status" href="{"hw_modern_backend.update_bgs?id=`$bg.id`"|fn_url}">{$bg.name}</a>
    </td>
    <td class="nowrap row-status">{if $bg.activated == 1}{__("active")}{/if}</td>
    <td>
        {capture name="tools_list"}
            <li>{btn type="list" text=__("edit") href="hw_modern_backend.update_bgs?id=`$bg.id`"}</li>
            {if $bg.activated == 0}<li>{btn type="list" class="cm-confirm" text=__("delete") href="hw_modern_backend.delete?type=bgs&id=`$bg.id`"}</li>{/if}
        {/capture}
        <div class="hidden-tools">
            {dropdown content=$smarty.capture.tools_list}
        </div>
    </td>
    <td class="right">
        {include file="common/select_popup.tpl" id=$bg.id status=$bg.status hidden=true object_id_name="id" table="hwmb"}
    </td>
</tr>
{/foreach}
</table>
<!--manage_hwmb_bgs--></div>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

</form>