<script type="text/javascript">
(function(_, $) {

    function getFieldType(element) {
        if ($(element).is('input[type=radio], input[type=checkbox], select')) {
            return 'elm-disabled';
        } else if ($(element).is('div')){
            return '';
        } else {
            return 'input-text-disabled';
        }
    }

    $(document).ready(function(){
        $(_.doc).on('click', '[id*=elements-switcher-]', function(){
            var id = $(this).prop('id');
            var id_template = /elements-switcher-(\S+)/i;
            id = 'field_' + id.match(id_template)[1];

            var checked = $(this).prop('checked');
            $('[id*=' + id + ']').each(function(index, element){
                $el = $(element);
                $el.toggleClass(getFieldType(element), !checked);
                $el.prop('disabled', !checked);
                if (!checked) {
                    $el.prop('checked', false);
                }
            });
            $('#' + id + ' .correct-picker-but input').prop('disabled', !checked);
            $('#' + id + ' .correct-picker-but a').toggle(checked);
        });

        $('[id*=field_] .correct-picker-but a').hide();

        // Double scroll
        var elm_orig = $("#scrolled_div");
        var elm_scroller = $("#scrolled_div_top");

        var dummy = $("<div></div>");
        dummy.width(elm_orig.get(0).scrollWidth);
        dummy.height(24);
        elm_scroller.append(dummy);

        elm_scroller.scroll(function(){
            elm_orig.scrollLeft(elm_scroller.scrollLeft());
        });
        elm_orig.scroll(function(){
            elm_scroller.scrollLeft(elm_orig.scrollLeft());
        });
    });
}(Tygh, Tygh.$));
</script>

{assign var="all_categories_list" value=0|fn_get_plain_categories_tree:false}
{capture name="mainbox"}

{capture name="extra_tools"}
    {include file="buttons/button.tpl" but_text=__("override_product_data") but_onclick="Tygh.$('#override_box').toggle()" but_role="tool"}
{/capture}

<div id="override_box" class="hidden">

<form action="{""|fn_url}" method="post" name="override_form" class="form-horizontal form-edit" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="redirect_url" value="{"products.m_update"|fn_url}" />

<table>
<tr>
    <td>
        <div class="scroll-x scroll-border">
        <table class="table-fixed">
        <tr>
            {foreach from=$filled_groups item=v}
            <th>&nbsp;</th>
            {/foreach}
            {foreach from=$field_names item="field_name" key="field_key"}
            {if $field_key == "company_id"}
            <th>{__("vendor")}</th>
            {else}
            <th>{if $field_name|is_array}{__($field_key)}{else}{$field_name}{/if}</th>
            {/if}
            {/foreach}
        </tr>
        <tr >
            {foreach from=$filled_groups item=v key=type}
            <td valign="top" class="pad">
            {if $type != "L" || $localizations}
                <table>
                {foreach from=$field_groups.$type item=name key=field}
                {if $v.$field}
                <tr>
                    <td valign="top" class="nowrap pad {if $field == "product"}strong{/if}"><label class="checkbox" for="elements-switcher-{$field}__"><input type="checkbox" name="" id="elements-switcher-{$field}__" value="Y" />{$v.$field}:&nbsp;</label></td>
                    <td valign="top" class="pad">
                        {if $type == "A"}
                        <input id="field_{$field}__" type="text" value="" name="override_{$name}[{$field}]" disabled="disabled" />
                        {elseif $type == "B"}
                        <input id="field_{$field}__" type="text" value=""  size="3" name="override_{$name}[{$field}]" disabled="disabled" />
                        {/if}
                    </td>
                </tr>
                {/if}
                {/foreach}
                </table>
            {/if}
            </td>
            {/foreach}

        </tr>
        </table>
        </div>
    </td>
</tr>
</table>

<div class="buttons-container">
    {include file="buttons/button.tpl" but_text=__("apply") but_name="dispatch[products.m_override]" but_role="button_main"}
</div>

</form>
</div>
{* ================================ *}

<form action="{""|fn_url}" method="post" name="products_m_update_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="redirect_url" value="{"products.m_update"|fn_url}" />

<table>
<tr>
    <td>

        <div id="scrolled_div_top" class="scroll-x scroll-top"></div>
        <div id="scrolled_div" class="scroll-x scroll-border">
        <table class="table-fixed">
        <tr>
            {foreach from=$filled_groups item=v}
            <th>&nbsp;</th>
            {/foreach}
            {foreach from=$field_names item="field_name" key=field_key}
            {if $field_key == "company_id"}
            <th>{__("vendor")}</th>
            {else}
            <th>{if $field_name|is_array}{__($field_key)}{else}{$field_name}{/if}</th>
            {/if}
            {/foreach}
        </tr>
        {foreach from=$products_data item="product"}
        <tr >
            {foreach from=$filled_groups item=v key=type}
            <td valign="top" class="pad">
            {if $type != "L" || $localizations}
                <table class="no-border">
                {foreach from=$field_groups.$type item=name key=field}
                {if $v.$field}
                <tr>
                    <td valign="top" class="nowrap pad {if $field == "product"}strong{/if}">{$v.$field}:&nbsp;</td>
                    <td valign="top" class="pad nowrap">
                        {if $type == "A"}
                        {if $field == "product"}
                            <input type="text" disabled="disabled" value="{$product.$field}" class="input-medium" name="{$name}[{$product.product_id}][{$field}]"/>
                        {else}
                            <input type="text" value="{$product.$field}" class="input-medium" name="{$name}[{$product.product_id}][{$field}]"/>
                        {/if}
                        {elseif $type == "B"}
                            <input type="text" value="{$product.$field|default:0}" class="input-medium" size="5" name="{$name}[{$product.product_id}][{$field}]" />
                        {/if}
                    </td>
                </tr>
                {/if}
                {/foreach}
                </table>
            {/if}
            </td>
            {/foreach}

            {foreach from=$field_names key="field" item=v}
            {if $field == "product"}
            <td valign="top" class="pad">
                <span>{$product.$field}</span>
            </td>
            {/if}
            {/foreach}
        </tr>
        {/foreach}
        </table>
        </div>
    </td>
</tr>
</table>

</form>
{/capture}
{capture name="buttons"}
    {include file="buttons/save.tpl" but_name="dispatch[products.m_update]" but_role="submit-link" but_target_form="products_m_update_form"}
{/capture}

{include file="common/mainbox.tpl" title=__("update_products") content=$smarty.capture.mainbox select_languages=true extra_tools=$smarty.capture.extra_tools buttons=$smarty.capture.buttons}
