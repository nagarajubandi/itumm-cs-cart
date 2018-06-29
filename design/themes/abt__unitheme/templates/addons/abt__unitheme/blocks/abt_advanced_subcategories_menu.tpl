{if $abt_subcategories}
    <ul class="subcategories clearfix">
        {foreach from=$abt_subcategories item=category name="ssubcateg"}
            {if $category.category_id == $smarty.request.category_id}
                <li class="ty-subcategories__current_item">
                    <span {live_edit name="category:category:{$category.category_id}"}>{$category.category}</span>
                </li>
            {else}
                <li class="ty-subcategories__item">
                    <a href="{"categories.view?category_id=`$category.category_id`"|fn_url}">
                        <span {live_edit name="category:category:{$category.category_id}"}>{$category.category}</span>
                    </a>
                </li>
            {/if}
        {/foreach}
    </ul>
{/if}