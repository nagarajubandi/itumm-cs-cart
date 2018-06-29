{hook name="blocks:topmenu_dropdown"}
{strip}
{if $items}
    <ul class="ty-menu__items cm-responsive-menu">
        {hook name="blocks:topmenu_dropdown_top_menu"}

            <li class="ty-menu__item ty-menu__menu-btn visible-phone">
                <a class="ty-menu__item-link" onclick="$('.cat-menu-horizontal .ty-menu__items').toggleClass('open');">
                    <i class="ty-icon-short-list"></i>
                    <span>{__("catalog_products")}</span>
                </a>
            </li>

        {foreach from=$items item="item1" name="item1" key="k"}
            {assign var="cat_image" value=$item1.category_id|fn_get_image_pairs:'category':'M':true:true}
            {assign var="item1_url" value=$item1|fn_form_dropdown_object_link:$block.type}
            {assign var="unique_elm_id" value="`$item1_url`-`$k`"|md5}
            {assign var="unique_elm_id" value="topmenu_`$block.block_id`_`$unique_elm_id`"}

            {assign var="subitems_count" value=$item1.$childs|count}
            {assign var="cols" value=0}
            {if $subitems_count}
                {math assign="divider" equation="ceil(x / 3)" x=$subitems_count}
                {math assign="cols" equation="ceil(x / y)" x=$subitems_count y=$divider}
            {/if}
            <li class="ty-menu__item {if !$item1.$childs} ty-menu__item-nodrop{else} cm-menu-item-responsive{/if} {if $item1.active || $item1|fn_check_is_active_menu_item:$block.type} ty-menu__item-active{/if} first-lvl{if $smarty.foreach.item1.last} last{/if} {if $item1.class} {$item1.class}{/if} ">
                {if $item1.$childs}
                    <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                        <i class="ty-menu__icon-open ty-icon-down-open"></i>
                        <i class="ty-menu__icon-hide ty-icon-up-open"></i>
                    </a>
                {/if}

                <a {if $item1_url} href="{$item1_url}"{/if} class="ty-menu__item-link a-first-lvl">
                    <div class="menu-lvl-ctn">
                        {if $item1.ab__ut_mwi__status == 'Y' and $item1.ab__ut_mwi__icon}
                            <img class="ab-ut-mwi-icon" src="{$item1.ab__ut_mwi__icon}" alt="">
                        {/if}

                        {$item1.$name}{if $item1.$childs}<i class="icon-right-dir"></i>{/if}

                        {if $item1.ab__ut_mwi__status == 'Y' and $item1.ab__ut_mwi__label}
                            <span class="m-label" style="color: {$item1.ab__ut_mwi__label_color}; background-color: {$item1.ab__ut_mwi__label_background}">{$item1.ab__ut_mwi__label}</span>
                        {/if}
                    </div>
                </a>
                {if $item1.$childs}
                    {capture name="children"}
                    {strip}
                    {if !$item1.$childs|fn_check_second_level_child_array:$childs}
                        {* Only two levels. Vertical output *}
                        {if $block.properties.abt_menu_ajax_load != 'Y'}<div class="ty-menu__submenu" id="{$unique_elm_id}">{/if}
                            <ul class="ty-menu__submenu-items ty-menu__submenu-items-simple {if $item1.ab__ut_mwi__text}with-pic{/if} cm-responsive-menu-submenu">
                                {hook name="blocks:topmenu_dropdown_2levels_elements"}

                                {foreach from=$item1.$childs item="item2" name="item2"}
                                    {assign var="item_url2" value=$item2|fn_form_dropdown_object_link:$block.type}
                                    <li class="ty-menu__submenu-item{if $item2.active || $item2|fn_check_is_active_menu_item:$block.type} ty-menu__submenu-item-active{/if}">
                                        <a class="ty-menu__submenu-link" {if $item_url2} href="{$item_url2}"{/if}>{$item2.$name}</a>
                                        {if $item2.ab__ut_mwi__status == 'Y' and $item2.ab__ut_mwi__label}
                                            <span class="m-label" style="color: {$item2.ab__ut_mwi__label_color}; background-color: {$item2.ab__ut_mwi__label_background}">{$item2.ab__ut_mwi__label}</span>
                                        {/if}
                                    </li>
                                {/foreach}

                                {if $item1.ab__ut_mwi__status == 'Y' and $item1.ab__ut_mwi__text}
                                    <ul class="ab-ut-mwi-html {$item1.ab__ut_mwi__text_position}">{$item1.ab__ut_mwi__text nofilter}</ul>
                                {else}
                                    {if $item1.show_more && $item1_url}
                                        <li class="ty-menu__submenu-item ty-menu__submenu-alt-link">
                                            <a href="{$item1_url}" class="ty-menu__submenu-alt-link">{__("text_topmenu_view_more")}</a>
                                        </li>
                                    {/if}
                                {/if}

                                {/hook}
                            </ul>
                        {if $block.properties.abt_menu_ajax_load != 'Y'}</div>{/if}
                    {else}
                        {if $cols == 1}
                            {assign var="dropdown_class" value="dropdown-1column"}
                        {elseif $cols >= 4}
                            {assign var="dropdown_class" value="dropdown-fullwidth"}
                        {else}
                            {assign var="dropdown_class" value="dropdown-`$cols`columns"}
                        {/if}
                        {if $block.properties.abt_menu_ajax_load != 'Y'}<div class="ty-menu__submenu" id="{$unique_elm_id}">{/if}
                            {hook name="blocks:topmenu_dropdown_3levels_cols"}
                                <ul class="ty-menu__submenu-items cm-responsive-menu-submenu dropdown-column-item {if $item1.ab__ut_mwi__dropdown == "Y"}tree-level-dropdown hover-zone2{else} {$dropdown_class} {if $item1.ab__ut_mwi__text and $item1.ab__ut_mwi__text_position != 'bottom'}with-pic{/if}{/if} clearfix">

                                    {assign var="rows" value=(($item1.$childs|count)/3)|ceil}
                                    {split data=$item1.$childs size=$rows assign="splitted_categories" skip_complete=true}

                                    {foreach from=$splitted_categories item="row"}
                                        <li><ul class="ty-menu__submenu-col">

                                                {foreach from=$row item="item2" name="item2"}
                                                    {$Viewlimit=$block.properties.no_hidden_elements_second_level_view|default:5}
                                                    <li class="ty-top-mine__submenu-col second-lvl">

                                                        {assign var="item2_url" value=$item2|fn_form_dropdown_object_link:$block.type}
                                                        <div class="ty-menu__submenu-item-header {if $item2.active || $item2|fn_check_is_active_menu_item:$block.type} ty-menu__submenu-item-header-active{/if}">
                                                            <a{if $item2_url} href="{$item2_url}"{/if} class="ty-menu__submenu-link{if empty($item2.$childs)} no-items{/if}">{$item2.$name}</a>
                                                            {if $item3.ab__ut_mwi__status == 'Y' and $item3.ab__ut_mwi__label}
                                                                <span class="m-label" style="color: {$item2.ab__ut_mwi__label_color};background-color: {$item2.ab__ut_mwi__label_background}">{$item2.ab__ut_mwi__label}</span>
                                                            {/if}
                                                        </div>
                                                        {if !empty($item2.$childs)}
                                                            <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                                                                <i class="ty-menu__icon-open ty-icon-down-open"></i>
                                                                <i class="ty-menu__icon-hide ty-icon-up-open"></i>
                                                            </a>
                                                            <div class="ty-menu__submenu">
                                                                {if $item1.ab__ut_mwi__dropdown == "Y"}
                                                                    <div class="sub-title-two-level">{$item2.$name}</div>
                                                                    {$max_amount3=2*$block.properties.elements_per_column_third_level_view}
                                                                    {$item2.$childs=array_slice($item2.$childs, 0, $max_amount3, true)}
                                                                    {foreach from=array_chunk($item2.$childs, ceil($item2.$childs|count / 2), true) item="item2_childs"}
                                                                        <ul class="ty-menu__submenu-list {if $item1.ab__ut_mwi__dropdown == "Y"}tree-level-col {else}{if $item2_childs|count > $Viewlimit}hiddenCol {/if}{/if}cm-responsive-menu-submenu" {if $item2_childs|count > $Viewlimit and $item1.ab__ut_mwi__dropdown !="Y"}style="height: {$Viewlimit * 19}px;"{/if}>
                                                                            {if $item2_childs}
                                                                                {hook name="blocks:topmenu_dropdown_3levels_col_elements"}
                                                                                {foreach from=$item2_childs item="item3" name="item3"}
                                                                                    {assign var="item3_url" value=$item3|fn_form_dropdown_object_link:$block.type}
                                                                                    <li class="ty-menu__submenu-item{if $item3.active || $item3|fn_check_is_active_menu_item:$block.type} ty-menu__submenu-item-active{/if}">
                                                                                        <a{if $item3_url} href="{$item3_url}"{/if} class="ty-menu__submenu-link">{$item3.$name}</a>
                                                                                        {if $item3.ab__ut_mwi__status == 'Y' and $item3.ab__ut_mwi__label}
                                                                                            <span class="m-label" style="color: {$item3.ab__ut_mwi__label_color}; background-color: {$item3.ab__ut_mwi__label_background}">{$item3.ab__ut_mwi__label}</span>
                                                                                        {/if}
                                                                                    </li>
                                                                                {/foreach}
                                                                                {/hook}
                                                                            {/if}
                                                                        </ul>
                                                                    {/foreach}
                                                                {else}
                                                                    <ul class="ty-menu__submenu-list {if $item1.ab__ut_mwi__dropdown == "Y"}tree-level-col {else}{if $item2.$childs|count > $Viewlimit}hiddenCol {/if}{/if}cm-responsive-menu-submenu" {if $item2.$childs|count > $Viewlimit and $item1.ab__ut_mwi__dropdown !="Y"}style="height: {$Viewlimit * 19}px;"{/if}>
                                                                        {if $item2.$childs}
                                                                            {if $item1.ab__ut_mwi__dropdown == "Y"}<div class="sub-title-two-level">{$item2.$name}</div>{/if}
                                                                            {hook name="blocks:topmenu_dropdown_3levels_col_elements"}
                                                                            {foreach from=$item2.$childs item="item3" name="item3"}
                                                                                {assign var="item3_url" value=$item3|fn_form_dropdown_object_link:$block.type}
                                                                                <li class="ty-menu__submenu-item{if $item3.active || $item3|fn_check_is_active_menu_item:$block.type} ty-menu__submenu-item-active{/if}">
                                                                                    <a{if $item3_url} href="{$item3_url}"{/if} class="ty-menu__submenu-link">{$item3.$name}</a>
                                                                                    {if $item3.ab__ut_mwi__status == 'Y' and $item3.ab__ut_mwi__label}
                                                                                        <span class="m-label" style="color: {$item3.ab__ut_mwi__label_color}; background-color: {$item3.ab__ut_mwi__label_background}">{$item3.ab__ut_mwi__label}</span>
                                                                                    {/if}
                                                                                </li>
                                                                            {/foreach}
                                                                            {/hook}
                                                                        {/if}
                                                                    </ul>
                                                                {/if}

                                                                {if $item2.$childs|count > $Viewlimit and $item1.ab__ut_mwi__dropdown !="Y"}
                                                                    <a href="javascript:void(0);" onMouseOver="$(this).prev().addClass('view');$(this).addClass('hidden');" class="ty-menu__submenu-link-more">{__("more")} <i class="ty-icon-plus-circle"></i></a>
                                                                {/if}
                                                            </div>
                                                        {/if}
                                                    </li>
                                                {/foreach}

                                            </ul></li>
                                    {/foreach}

                                    {if $item1.ab__ut_mwi__status == 'Y' and $item1.ab__ut_mwi__text}
                                        <li class="ab-ut-mwi-html {if $item1.ab__ut_mwi__dropdown == "Y"}bottom{else}{$item1.ab__ut_mwi__text_position}{/if}">{$item1.ab__ut_mwi__text nofilter}</li>
                                    {else}
                                        {if $item1.show_more && $item1_url}
                                            <li class="ty-menu__submenu-item ty-menu__submenu-alt-link">
                                                <a href="{$item1_url}">{__("text_topmenu_more", ["[item]" => $item1.$name])}</a>
                                            </li>
                                        {/if}
                                    {/if}

                                </ul>
                            {/hook}
                        {if $block.properties.abt_menu_ajax_load != 'Y'}</div>{/if}
                    {/if}
                    {/strip}
                    {/capture}

                    {if $block.properties.abt_menu_ajax_load != 'Y'}
                        {$smarty.capture.children nofilter}
                    {else}
                        <div class="abtam ty-menu__submenu" id="{$unique_elm_id}_{$smarty.const.DESCR_SL}"></div>
                        {$smarty.capture.children|fn_abt__ajax_menu_save:$unique_elm_id}
                    {/if}
                {/if}
            </li>
        {/foreach}
        {/hook}
    </ul>
{/if}
{/strip}
{/hook}