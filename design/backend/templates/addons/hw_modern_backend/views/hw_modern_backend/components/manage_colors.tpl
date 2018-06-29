<form action="{""|fn_url}" method="post" name="colors_form" class=" cm-hide-inputs" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />

{if $colors}
<div class="items-container cm-sortable ui-sortable" data-ca-sortable-table="hwmb" data-ca-sortable-id-name="id" id="manage_hwmb_colors">
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
{foreach from=$colors item=color}
<tr class="cm-row-status-{$color.status|lower} cm-sortable-row cm-sortable-id-{$color.id} cm-row-item" >
    <td class="no-padding-td"><span class="handler cm-sortable-handle ui-sortable-handle"></span></td>
    <td 
        class="left"
        style="width:100px"
        data-color1="{$color.navbar}"
        data-color2="{$color.subnav}"
        data-color3="{$color.actions}"
        data-color4="{$color.btn_primary_bg}"
    >
        <div style="width:100px; border: 1px solid {if $color.activated == 1}#D64635{else}#ddd{/if}; height: 25px" class="hwmd_colors_list" title="{$color.name}">
    	<span title="{__('hwmb_color_navbar')}" style="width:25px; height: 25px; float:left;display:block;background: {$color.navbar}"></span>
                <span title="{__('hwmb_color_subnav')}" style="width:25px; height: 25px; float:left;display:block; background: {$color.subnav}"></span>
                <span title="{__('hwmb_color_actions')}" style="width:25px; height: 25px; float:left;display:block; background: {$color.actions}"></span>
                <span title="{__('hwmb_color_btn_primary_bg')}" style="width:25px; height: 25px; float:left;display:block; background: {$color.btn_primary_bg}"></span>                
        </div>
    </td>
    <td><a class="row-status" href="{"hw_modern_backend.update_colors?id=`$color.id`"|fn_url}">{$color.name}</a>
    </td>
    <td class="nowrap row-status">{if $color.activated == 1}{__("active")}{/if}</td>
    <td>
        {capture name="tools_list"}
            <li>{btn type="list" text=__("edit") href="hw_modern_backend.update_colors?id=`$color.id`"}</li>
            <li>{btn type="list" class="cm-confirm" text=__("clone") href="hw_modern_backend.clone?type=colors&id=`$color.id`"}</li>
            <li>{btn type="list" text=__("export") href="hw_modern_backend.export?type=colors&id=`$color.id`"}</li>
            {if $color.activated == 0}<li>{btn type="list" class="cm-confirm" text=__("delete") href="hw_modern_backend.delete?type=colors&id=`$color.id`"}</li>{/if}
        {/capture}
        <div class="hidden-tools">
            {dropdown content=$smarty.capture.tools_list}
        </div>
    </td>
    <td class="right">
        {include file="common/select_popup.tpl" id=$color.id status=$color.status hidden=true object_id_name="id" table="hwmb"}
    </td>
</tr>
{/foreach}
</table>
<!--manage_hwmb_colors--></div>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}
</form>