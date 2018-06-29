{if $font.id}
    {assign var="id" value=$font.id}
{else}
    {assign var="id" value=0}
{/if}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="font_update_form" class="form-horizontal form-edit">

<div id="font_update_form_{$id}">
    <input type="hidden" class="cm-no-hide-input" name="font_data[id]" value="{$id}" />
    <input type="hidden" class="cm-no-hide-input" name="font_data[type]" value="fonts" />
    <input type="hidden" name="activated" value="{$font.activated|default:0}" />   

    {include file="common/subheader.tpl" title=__("information") target="#hwmd_info"}
    <div id="hwmd_info" class="in collapse">
        <fieldset>

        <div class="control-group">
            <label for="elm_font_name" class="control-label cm-required">{__("hwmd_name")}:</label>
            <div class="controls">
                <input type="text" name="font_data[name]" id="elm_font_name" size="55" value="{$font.name}" class="input-large" />
                <p class="tips">{__('hwmd_how_to_add_fonts')}</p>
            </div>
        </div>
        
        {include file="common/select_status.tpl" input_name="font_data[status]" id="elm_font_status" obj=$font hidden=true}
        
        </fieldset>
    </div>



{capture name="buttons"}
    {include file="buttons/save_cancel.tpl" but_name="dispatch[hw_modern_backend.update_fonts]" hide_first_button=false hide_second_button=false but_target_form="font_update_form" save=$id}
{/capture}

<!--font_update_form{$id}--></div>
</form>

{/capture}

{capture name="sidebar"}

{/capture}

{if !$id}
    {assign var="_title" value=__('hwmb_add_font')}
{else}
    {assign var="_title" value=__('hwmb_edit_font')}
    {assign var="_title" value="`$_title` #`$font.name`"}
{/if}


{include file="common/mainbox.tpl" title=$_title sidebar=$smarty.capture.sidebar content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons}