{capture name="mainbox"}

    {capture name="tabsbox"}
        {** /Item menu section **}

        {assign var="categories_company_id" value=$product_data.company_id}
        {assign var="allow_save" value=$product_data|fn_allow_save_object:"product"}

        {if "ULTIMATE"|fn_allowed_for}
            {assign var="categories_company_id" value=""}
            {if $runtime.company_id && $product_data.shared_product == "Y" && $product_data.company_id != $runtime.company_id}
                {assign var="no_hide_input_if_shared_product" value="cm-no-hide-input"}
            {/if}

            {if !$runtime.company_id && $product_data.shared_product == "Y"}
                {assign var="show_update_for_all" value=true}
            {/if}
        {/if}

        {if $product_data.product_id}
            {assign var="id" value=$product_data.product_id}
        {else}
            {assign var="id" value=0}
        {/if}
        <form id='form' action="{""|fn_url}" method="post" name="product_update_form" class="form-horizontal form-edit  cm-disable-empty-files {if ""|fn_check_form_permissions || ($runtime.company_id && $product_data.shared_product == "Y" && $product_data.company_id != $runtime.company_id)} cm-hide-inputs{/if}" enctype="multipart/form-data"> {* product update form *}
            <input type="hidden" name="fake" value="1" />
            <input type="hidden" class="{$no_hide_input_if_shared_product}" name="selected_section" id="selected_section" value="{$smarty.request.selected_section}" />
            <input type="hidden" class="{$no_hide_input_if_shared_product}" name="product_id" value="{$id}" />

            {** Product description section **}

            <div class="product-manage" id="content_detailed"> {* content detailed *}

                {** General info section **}
                {include file="common/subheader.tpl" title=__("information") target="#acc_information"}

                <div id="acc_information" class="collapse in">

                    <div class="control-group {$no_hide_input_if_shared_product}">
                        <label for="product_description_product" class="control-label cm-required">{__("name")}</label>
                        <div class="controls">
                            <input class="input-large" form="form" type="text" name="product_data[product]" id="product_description_product" size="55" value="{$product_data.product}" disabled="disabled"/>
                        </div>
                    </div>

                    {assign var="result_ids" value="product_categories"}

                    {*{hook name="companies:product_details_fields"}*}
                    {*{if "MULTIVENDOR"|fn_allowed_for && $mode != "add"}*}
                        {*{assign var="js_action" value="fn_change_vendor_for_product(elm);"}*}
                    {*{/if}*}

                    {*{if "ULTIMATE"|fn_allowed_for}*}
                        {*{assign var="companies_tooltip" value=__("text_ult_product_store_field_tooltip")}*}
                    {*{/if}*}

                    {*{include file="views/companies/components/company_field.tpl"*}
                        {*name="product_data[company_id]"*}
                        {*id="product_data_company_id"*}
                        {*selected=$product_data.company_id*}
                        {*tooltip=$companies_tooltip*}
                        {*js_action=$js_action*}
                    {*}*}

                    {*{/hook}*}

                    <input type="hidden" value="{$result_ids}" name="result_ids">

                    <div class="control-group {$no_hide_input_if_shared_product}" id="product_categories">
                        {math equation="rand()" assign="rnd"}
                        {if $smarty.request.category_id}
                            {assign var="request_category_id" value=","|explode:$smarty.request.category_id}
                        {else}
                            {assign var="request_category_id" value=""}
                        {/if}
                        <label for="ccategories_{$rnd}_ids" class="control-label cm-required">{__("categories")}</label>
                        <div class="controls">
                            {include file="pickers/categories/picker.tpl" hide_input=$product_data.shared_product company_ids=$product_data.company_id rnd=$rnd data_id="categories" input_name="product_data[category_ids]" radio_input_name="product_data[main_category]" main_category=$product_data.main_category item_ids=$product_data.category_ids|default:$request_category_id hide_link=true hide_delete_button=true display_input_id="category_ids" disable_no_item_text=true view_mode="list" but_meta="btn" show_active_path=true}
                        </div>
                    <!--product_categories--></div>

                    <div class="control-group {$no_hide_input_if_shared_product}">
                        <label for="elm_price_price" class="control-label cm-required">{__("price")} ({$currencies.$primary_currency.symbol nofilter}):</label>
                        <div class="controls">
                            <input type="text" name="product_data[price]" id="elm_price_price" size="10" value="{$product_data.price|default:"0.00"|fn_format_price:$primary_currency:null:false}" class="input-long" />
                        </div>
                    </div>





                    <div class="control-group cm-no-hide-input">
                        <label class="control-label" for="elm_product_full_descr">{__("full_description")}:</label>
                        <div class="controls">
                            {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id='full_description' name="update_all_vendors[full_description]"}
                            <textarea id="elm_product_full_descr" name="product_data[full_description]" cols="55" rows="8" class="cm-wysiwyg input-large">{$product_data.full_description}</textarea>

                            {*{if $view_uri}*}
                                {*{include*}
                                    {*file="buttons/button.tpl"*}
                                    {*but_href="customization.update_mode?type=live_editor&status=enable&frontend_url={$view_uri|urlencode}{if "ULTIMATE"|fn_allowed_for}&switch_company_id={$product_data.company_id}{/if}"*}
                                    {*but_text=__("edit_content_on_site")*}
                                    {*but_role="action"*}
                                    {*but_meta="btn-small btn-live-edit cm-post"*}
                                    {*but_target="_blank"}*}
                            {*{/if}*}
                        </div>
                    </div>
                    {** /General info section **}

                    {*{include file="common/select_status.tpl" input_name="product_data[status]" id="elm_product_status" obj=$product_data hidden=true}*}

                    <div class="control-group">
                        <label class="control-label">{__("images")}:</label>
                        <div class="controls">
                            {include file="common/attach_images.tpl" image_name="product_main_vendor" image_object_type="product" image_pair=$product_data.main_pair_vendor|default:$product_data.main_pair icon_text=__("text_product_thumbnail") detailed_text=__("text_product_detailed_image") no_thumbnail=true}
                        </div>
                    </div>

                    <div class="control-group {$no_hide_input_if_shared_product}">
                        <label for="amount" class="control-label cm-required">{__("amount")}:</label>
                        <div class="controls">

                            {if $product_data.tracking == "ProductTracking::TRACK_WITH_OPTIONS"|enum}
                                {*{include file="buttons/button.tpl" but_text=__("edit") but_href="product_options.inventory?product_id=`$product.product_id`" but_role="edit"}*}

                                {assign var="inventory" value=$product_data.product_id|fn_multiple_vendors_get_inventory}


                                {if $inventory.combinations}
                                    {capture name="edit_variants_inventory"}
                                        {if $inventory}
                                            {include file="addons/multiple_vendors/popup.tpl" product=$inventory}
                                        {/if}
                                    {/capture}
                                    {$ttt = __("edit")}

                                    {include file="common/popupbox.tpl" id="edit_variants_inventory_`$product_data.product_id`" text="`$ttt`: `$product_data.product`" content=$smarty.capture.edit_variants_inventory link_text=__("edit") act="general"}

                                {else}
                                    {include file="buttons/button.tpl" but_text=__("edit") but_href="product_options.inventory?product_id=`$product_data.product_id`" but_role="edit"}
                                {/if}

                            {else}
                                <input type="text" name="product_data[amount]" id="amount" size="10" value="{$product_data.amount}" class="input-long" />
                            {/if}

                        </div>
                    </div>

                </div>
            <!--content_detailed--></div> {* /content detailed *}

            {** /Product description section **}


            {** Form submit section **}
            {capture name="buttons"}
                {include file="common/view_tools.tpl" url="products.update?product_id="}

                {if $id}
                    {capture name="tools_list"}
                                <li>{btn type="list" target="_blank" text=__("preview") href=fn_url("products.view?product_id=`$product_data.product_id`","C")}</li>
                    {/capture}
                    {dropdown content=$smarty.capture.tools_list}
                {/if}
                {include file="buttons/save_cancel.tpl" but_role="submit-link" but_name="dispatch[vendors_products.update]" but_target_form="product_update_form" save=$id}
            {/capture}
            {** /Form submit section **}

        </form> {* /product update form *}
    {/capture}
    {include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox group_name=$runtime.controller active_tab=$smarty.request.selected_section track=true}

{/capture}

{hook name="products:update_mainbox_params"}

{if $id}
    {capture name="mainbox_title"}
        {"{__("editing_product")}: `$product_data.product`"|strip_tags}
    {/capture}
{else}
    {capture name="mainbox_title"}
        {__("new_product")}
    {/capture}
{/if}

{/hook}

{include file="common/mainbox.tpl"
    title=$smarty.capture.mainbox_title
    content=$smarty.capture.mainbox
    select_languages=$id
    buttons=$smarty.capture.buttons
    adv_buttons=$smarty.capture.adv_buttons
}

{if "MULTIVENDOR"|fn_allowed_for}
<script type="text/javascript">
  var fn_change_vendor_for_product = function(elm){
    $.ceAjax('request', Tygh.current_url, {
      data: {
        product_data: {
          company_id: $('[name="product_data[company_id]"]').val(),
          category_ids: $('[name="product_data[category_ids]"]').val()
        }
      },
      result_ids: 'product_categories'
    });
  };
</script>
{/if}