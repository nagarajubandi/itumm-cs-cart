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
        <form id="form" action="{""|fn_url}" method="post" name="product_update_form" class="form-horizontal form-edit  cm-disable-empty-files {if ""|fn_check_form_permissions || ($runtime.company_id && $product_data.shared_product == "Y" && $product_data.company_id != $runtime.company_id)} cm-hide-inputs{/if}" enctype="multipart/form-data"> {* product update form *}
            <input type="hidden" name="fake" value="1" />
            <input type="hidden" class="{$no_hide_input_if_shared_product}" name="selected_section" id="selected_section" value="{$smarty.request.selected_section}" />
            <input type="hidden" class="{$no_hide_input_if_shared_product}" name="product_id" value="{$id}" />

            {** Product description section **}

            <div class="product-manage" id="content_detailed"> {* content detailed *}

                {** General info section **}

                    <div class="control-group">
                        <label class="control-label" for="elm_product_code">Product identifier:</label>
                        <div class="controls">
                            <select class="span3" name="product_data[sku_type]" id="elm_sku_type">
                                <option value="U" selected="selected">UPC</option>
                                <option value="E">EAN</option>
                                <option value="I">Unique Identity Number</option>
                            </select>
                            <input type="text" name="product_data[product_code]" id="elm_product_code" size="20" maxlength="32"  value="{$product_data.product_code}" class="input-long" />
                        </div>
                    </div>

                    <div class="control-group {$no_hide_input_if_shared_product}">
                        <label for="product_description_product" class="control-label cm-required">{__("product")} {__("name")}</label>
                        <div class="controls">
                            <input class="input-large" form="form" type="text" name="product_data[product]" id="product_description_product" size="55" value="{$product_data.product}" />
                            {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id='product' name="update_all_vendors[product]"}
                        </div>
                    </div>

                    {if $product_features}
                        <fieldset>
                            {include file="views/products/components/product_assign_features.tpl" product_features=$product_features}
                        </fieldset>
                    {/if}

                    <div class="control-group">
                        <label class="control-label" for="elm_list_price">Price ({$currencies.$primary_currency.symbol nofilter}) :</label>
                        <div class="controls">
                            <input type="text" name="product_data[list_price]" id="elm_list_price" size="10" value="{$product_data.list_price|default:"0.00"|fn_format_price:$primary_currency:null:false}" class="input-long" />
                        </div>
                    </div>

                    {hook name="products:product_update_price"}
                    <div class="control-group {$no_hide_input_if_shared_product}">
                        <label for="elm_price_price" class="control-label cm-required">Special Discounted Price ({$currencies.$primary_currency.symbol nofilter}):</label>
                        <div class="controls">
                            <input type="text" name="product_data[price]" id="elm_price_price" size="10" value="{$product_data.price|default:"0.00"|fn_format_price:$primary_currency:null:false}" class="input-long" />
                            {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id='price' name="update_all_vendors[price]"}
                        </div>
                    </div>
                    {/hook}
                    <div class="control-group">
                        <label class="control-label" for="elm_in_stock">Quantity:</label>
                        <div class="controls">
                            {if $product_data.tracking == "ProductTracking::TRACK_WITH_OPTIONS"|enum}
                                {include file="buttons/button.tpl" but_text=__("edit") but_href="product_options.inventory?product_id=`$id`" but_role="edit"}
                            {else}
                                <input type="text" name="product_data[amount]" id="elm_in_stock" size="10" value="{$product_data.amount|default:"1"}" class="input-small" />
                            {/if}
                        </div>
                    </div>

                    {assign var="all_categories" value=false|cpu_get_all_categories}
                    {if $smarty.request.product_data.category_ids}
                        {assign var="current_category_id" value=$smarty.request.product_data.category_ids}
                    {else}
                        {assign var="current_category_id" value=$product_data.main_category}
                    {/if}
                    {assign var="path" value=$current_category_id|cpu_get_category_path}
                    <div class="control-group" id="product_categories">
                        <label for="category_ids" class="control-label cm-required">{__("category")}</label>
                        <div class="controls">
                            {* top level categories *}
                            <select class="span3 category_ids" name="product_data[category_ids]">
                                {foreach from=$all_categories item="category"}
                                    {if !$category.parent_id}
                                        <option value="{$category.category_id}"{if $category.category_id|in_array:$path || $current_category_id == $category.category_id} selected="selected"{/if}>{$category.category}</option>
                                    {/if}
                                {/foreach}
                            </select>
                            {* /top level categories *}
                            {foreach from=$path item="parent_id"}
                                <select class="span3 category_ids" name="product_data[category_ids]">
                                     <option value="{$parent_id}"></option>
                                    {foreach from=$all_categories item="category"}
                                        {if $category.parent_id == $parent_id}
                                            <option value="{$category.category_id}"{if $category.category_id|in_array:$path || $current_category_id == $category.category_id} selected="selected"{/if}>{$category.category}</option>
                                        {/if}
                                    {/foreach}
                                </select>
                            {/foreach}
                        </div>
                        {literal}
                            <script type="text/javascript">
                                $('.category_ids').change(function() {
                                    $.ceAjax('request', Tygh.current_url, {
                                        data: {
                                            product_data: {
                                                category_ids: $( this ).val()
                                            }
                                        },
                                        result_ids: 'product_categories',
                                        force_exec: true
                                    });
                                });
                            </script>
                    {/literal}
                    <!--product_categories--></div>
                    
                    <div class="control-group cm-no-hide-input">
                        <label class="control-label" for="elm_product_full_descr">{__("full_description")}:</label>
                        <div class="controls">
                            {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id='full_description' name="update_all_vendors[full_description]"}
                            <textarea id="elm_product_full_descr" name="product_data[full_description]" cols="55" rows="8" class="cm-wysiwyg input-large">{$product_data.full_description}</textarea>

                            {if $view_uri}
                                {include
                                    file="buttons/button.tpl"
                                    but_href="customization.update_mode?type=live_editor&status=enable&frontend_url={$view_uri|urlencode}{if "ULTIMATE"|fn_allowed_for}&switch_company_id={$product_data.company_id}{/if}"
                                    but_text=__("edit_content_on_site")
                                    but_role="action"
                                    but_meta="btn-small btn-live-edit cm-post"
                                    but_target="_blank"}
                            {/if}
                        </div>
                    </div>
                    <div class="control-group {$no_hide_input_if_shared_product}">
                        <label class="control-label" for="elm_product_page_title">{__("page_title")}:</label>
                        <div class="controls">
                            <input type="text" name="product_data[page_title]" id="elm_product_page_title" size="55" value="{$product_data.page_title}" class="input-large" />
                            {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id="page_title" name="update_all_vendors[page_title]"}
                        </div>
                    </div>

                    <div class="control-group {$no_hide_input_if_shared_product}">
                        <label class="control-label" for="elm_product_meta_descr">{__("meta_description")}:</label>
                        <div class="controls">
                            <textarea name="product_data[meta_description]" id="elm_product_meta_descr" cols="55" rows="2" class="input-large">{$product_data.meta_description}</textarea>
                            {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id="meta_description" name="update_all_vendors[meta_description]"}
                        </div>
                    </div>

                    <div class="control-group {$no_hide_input_if_shared_product}">
                        <label class="control-label" for="elm_product_meta_keywords">{__("meta_keywords")}:</label>
                        <div class="controls">
                            <textarea name="product_data[meta_keywords]" id="elm_product_meta_keywords" cols="55" rows="2" class="input-large">{$product_data.meta_keywords}</textarea>
                            {include file="buttons/update_for_all.tpl" display=$show_update_for_all object_id="meta_keywords" name="update_all_vendors[meta_keywords]" }
                        </div>
                    </div>

                    {** /General info section **}

                    {hook name="products:update_detailed_images"}
                    <div class="control-group">
                        <label class="control-label">{__("images")}:</label>
                        <div class="controls">
                            {include file="common/attach_images.tpl" image_name="product_main" image_object_type="product" image_pair=$product_data.main_pair icon_text=__("text_product_thumbnail") detailed_text=__("text_product_detailed_image") no_thumbnail=true}
                        </div>
                    </div>
                    {/hook}
                {include file="common/subheader.tpl" title=__("additional_images")}
                {if $product_data.image_pairs}
                    <div class="cm-sortable sortable-box" data-ca-sortable-table="images_links" data-ca-sortable-id-name="pair_id" id="additional_images">
                        {assign var="new_image_position" value="0"}
                        {foreach from=$product_data.image_pairs item=pair name="detailed_images"}
                            <div class="cm-row-item cm-sortable-id-{$pair.pair_id} cm-sortable-box">
                                <div class="cm-sortable-handle sortable-bar"><img src="{$images_dir}/icon_sort_bar.gif" width="26" height="25" border="0" title="{__("sort_images")}" alt="{__("sort")}" class="valign" /></div>
                                <div class="sortable-item">
                                    {include file="common/attach_images.tpl" image_name="product_additional" image_object_type="product" image_key=$pair.pair_id image_type="A" image_pair=$pair icon_title=__("additional_thumbnail") detailed_title=__("additional_popup_larger_image") icon_text=__("text_additional_thumbnail") detailed_text=__("text_additional_detailed_image") delete_pair=true no_thumbnail=true}
                                </div>
                                <div class="clear"></div>
                            </div>
                            {if $new_image_position <= $pair.position}
                                {assign var="new_image_position" value=$pair.position}
                            {/if}
                        {/foreach}
                    </div>
                {/if}

                <div id="box_new_image">
                    <div class="clear cm-row-item">
                        <input type="hidden" name="product_add_additional_image_data[0][position]" value="{$new_image_position}" class="cm-image-field" />
                        <div class="image-upload-wrap pull-left">{include file="common/attach_images.tpl" image_name="product_add_additional" image_object_type="product" image_type="A" icon_title=__("additional_thumbnail") detailed_title=__("additional_popup_larger_image") icon_text=__("text_additional_thumbnail") detailed_text=__("text_additional_detailed_image") no_thumbnail=true}</div>
                        <div class="pull-right">{include file="buttons/multiple_buttons.tpl" item_id="new_image"}</div>
                    </div>
                </div>

            {** Form submit section **}
            {capture name="buttons"}
                {include file="common/view_tools.tpl" url="products.update?product_id="}

                {if $id}
                    {capture name="tools_list"}
                        {hook name="products:update_tools_list"}
                            {if $view_uri}
                                <li>{btn type="list" target="_blank" text=__("preview") href=$view_uri}</li>
                                <li class="divider"></li>
                            {/if}
                            <li>{btn type="list" text=__("clone") href="products.clone?product_id=`$id`" method="POST"}</li>
                            {if $allow_save}
                                <li>{btn type="list" text=__("delete") class="cm-confirm" href="products.delete?product_id=`$id`" method="POST"}</li>
                            {/if}
                        {/hook}
                    {/capture}
                    {dropdown content=$smarty.capture.tools_list}
                {/if}
                {include file="buttons/save_cancel.tpl" but_role="submit-link" but_name="dispatch[products.update]" but_target_form="product_update_form" save=$id}
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

