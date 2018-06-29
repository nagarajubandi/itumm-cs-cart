<div class="{if $layout_data.layout_width != "fixed"}container-fluid {else}container{/if} {$container.user_class}
    {if $container.user_class|strpos:"categories_grid" and $ab__ut_full_width}full_width{/if}
    {if $container.user_class|strpos:"categories_grid" and $ab__ut_hidden_filter}side_hidden{/if}
">
    {$content nofilter}
</div>