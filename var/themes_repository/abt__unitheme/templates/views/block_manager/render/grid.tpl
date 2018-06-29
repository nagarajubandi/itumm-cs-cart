{if $layout_data.layout_width != "fixed"}
	{if $parent_grid.width > 0}
		{$fluid_width = fn_get_grid_fluid_width($layout_data.width, $parent_grid.width, $grid.width)}
	{else}
		{$fluid_width = $grid.width}
	{/if}
{/if}

{if $grid.status == "A" && $content}

	{if $grid.parent_id == 0}
		{if $grid.alpha}<div class="container-fluid-row{if $grid.extended == "E"} container-fluid-row-full-width{/if}{if $grid.extended == "F"} container-fluid-row-no-limit{/if}{if $grid.extended != "O"} {$grid.user_class}{/if}">{/if}
	{/if}
	
			{if $grid.alpha}<div class="{if $layout_data.layout_width != "fixed"}row-fluid {else}row{/if}">{/if}
				{$width = $fluid_width|default:$grid.width}
				<div class="span{$width}{if $grid.offset} offset{$grid.offset}{/if} {if $grid.extended != "E" and $grid.extended != "F" }{$grid.user_class}{/if}">
                    {if $grid.ab__show_in_tabs == 'Y'}
                        {include file="common/tabsbox.tpl" content=$content}
                    {else}
                        {$content nofilter}
                    {/if}
				</div>
			{if $grid.omega}</div>{/if}
		
	{if $grid.parent_id == 0}
		{if $grid.omega}</div>{/if}
	{/if}
{/if}
