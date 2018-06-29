{capture name="mainbox"}

<form action="{"zipcode_validator.single_product"|fn_url}" method="post" name="add_new_product" class="form-horizontal">
    {include file="common/subheader.tpl" title=__("add_new_product") target="#content_add_new_product"}
    <div id="content_add_new_product">
        <div class="control-group">
            <label class="control-label cm-required" for="appendedInputButton">{__("choose_product")}</label>
            <div class="controls">
                {include file="pickers/products/picker.tpl"  data_id="added_products" input_name="products_data[product_id]" type="single"}
            </div>
        </div>
        <div class="control-group">
            <label class="control-label cm-required" for="added_zip_code">{__("add_zip_codes")}</label>
            <div class="controls">
                <div class="form-horizontal">
                    <table class="table table-middle" width="100%">
                    {if $new_products_data}
                        <tbody>
                            {foreach from=$new_products_data item="code"}
                            {assign var=id value=rand()}
                            <tr class="cm-row-item" id="box_zip_code_row_{$id}">
                                <td>
                                    <input type="text" name="products_data[new_code][]" value="{$code}" id="added_zip_code">
                                </td>
                                <td class="right">
                                    {include file="addons/zipcode_validator/buttons/multiple_buttons.tpl" item_id="zip_code_row_$id"}
                                </td>
                            </tr>
                            {/foreach}
                        </tbody>
                    {else}
                        <tbody>
                            {assign var=id value=rand()}
                            <tr class="cm-row-item" id="box_zip_code_row_{$id}">
                                <td>
                                    <input type="text" name="products_data[new_code][]" value="" id="added_zip_code">
                                </td>
                                <td class="right">
                                    {include file="addons/zipcode_validator/buttons/multiple_buttons.tpl" item_id="zip_code_row_$id"}
                                </td>
                            </tr>
                        </tbody>
                    {/if}
                    </table>
                </div>
            </div> 
        </div>
    </div>
</form>
{/capture}

{capture name="add_product_with_zip"}
    {hook name="zipcode:manage_tools"}
        {include file="buttons/save.tpl" but_role="submit-link" but_name="dispatch[zipcode_validator.single_product]" but_target_form="add_new_product"}
    {/hook}
{/capture}

{capture name="sidebar"}
{/capture}

{include file="common/mainbox.tpl" title=__("add_update_product_with_zip") content=$smarty.capture.mainbox title_extra=$smarty.capture.title_extra adv_buttons=$smarty.capture.add_product_with_zip select_languages=true buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar content_id="manage_products_with_zips"}