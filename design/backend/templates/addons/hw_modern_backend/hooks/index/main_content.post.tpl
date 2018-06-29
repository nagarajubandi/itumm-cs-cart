{if $hwmb_settings}
<div id="hwmb_settings"{if $hwmb_settings.open} class="open"{/if}>
	<i class="hwmb-icon-wrench"></i>
	<div class="hwmb_settings_body">
		<h2><a href="{"hw_modern_backend.manage"|fn_url}"><i class="hwmb-icon-wrench"></i> {__('hwmb_settings')}</a></h2>

		{if $runtime.company_data.company}{$name = $runtime.company_data.company}
		{else}{$name = $settings.Company.company_name}{/if}
		<input data-field="store_id" data-name="{$name}" value="{$runtime.company_id}" class="hwmb_data" type="hidden">

		<div class="hwmd_acc open hwmd_styles">
			<h3>
				{__('hwmb_layouts')}
				<i class="hwmb-icon-right-dir"></i>
				<i class="hwmb-icon-down-dir"></i>
			</h3>
			<div class="hwmd_acc_body">
				<ul>
				{assign var="layout_id" value=0}
				{foreach from=$hwmb_settings.layouts item="layout"}
					<li data-id="{$layout.id}" class="hwmd_styles_{$layout.name|strtolower}{if $layout.activated==1} active{/if}"><a href="javascript:void(0)">{$layout.name}</a></li>
					{if $layout.activated==1}{assign var="layout_id" value=$layout.id}{/if}
				{/foreach}
				</ul>
				<input data-field="layouts" value="{$layout_id}" class="hwmb_data" type="hidden">
			</div>
		</div>

		<div class="hwmd_acc open hwmd_theme_color">
			<h3>
				{__('hwmb_colors')}
				<i class="hwmb-icon-right-dir"></i>
				<i class="hwmb-icon-down-dir"></i>
			</h3>
			<div class="hwmd_acc_body">
				<ul>
				{assign var="color_id" value=0}
				{foreach from=$hwmb_settings.colors item="color"}
					<li 
						data-id="{$color.id}"
						data-color1="{$color.navbar}"
						data-color2="{$color.subnav}"
						data-color3="{$color.actions}"
						data-color4="{$color.btn_primary_bg}"
						class="{$color.id}{if $color.activated==1} active{/if}"><span style="background:{$color.navbar}" title="{$color.name}"><i class="hwmb-icon-ok"></i></span></li>
					{if $color.activated==1}{assign var="color_id" value=$color.id}{/if}
				{/foreach}
				</ul>
				<input data-field="colors" value="{$color_id}" class="hwmb_data" type="hidden">
			</div>
		</div>			

		<div class="hwmd_acc open hwmd_boxed_bgs">
			<h3>
				{__('hwmb_bgs')}
				<i class="hwmb-icon-right-dir"></i>
				<i class="hwmb-icon-down-dir"></i>
			</h3>
			<div class="hwmd_acc_body">
				<ul>
				{assign var="bg_id" value=0}
				{foreach from=$hwmb_settings.bgs item="bg"}
					<li 
						data-id="{$bg.id}"
						title="{$bg.name}" 
						{if $bg.activated == 1} class="active"{/if}
						data-color="{$bg.color}"
						data-image="{$bg.main_pair.detailed.http_image_path}">
					{if !$bg.main_pair}<span style="background: {$bg.color}"></span>{else}
						{assign var="image_data" value=$bg.main_pair|fn_image_to_display:30:30}
						<img  src="{$image_data.image_path}" width="{$image_data.width}" height="{$image_data.height}" alt="{$bg.name}"/>
					{/if}
					</li>
					{if $bg.activated==1}{assign var="bg_id" value=$bg.id}{/if}
				{/foreach}				
				</ul>
				<input data-field="bgs" value="{$bg_id}" class="hwmb_data" type="hidden">
			</div>		
		</div>

		<div class="hwmd_acc open hwmd_fonts">
			<h3>
				{__('hwmb_fonts')}
				<i class="hwmb-icon-right-dir"></i>
				<i class="hwmb-icon-down-dir"></i>
			</h3>
			<div class="hwmd_acc_body">
				<select data-field="fonts" class="hwmb_data_select" id="hwmd_settings_font">
				{foreach from=$hwmb_settings.fonts item="font"}
					<option value="{$font.id}" data-font="{$font.name|fn_hw_modern_backend_font_convert}"{if $font.activated == 1} selected="selected"{/if}>{$font.name}</option>
				{/foreach}
				</select>
			</div>
		</div>

		{assign var="return_url" value=$config.current_url|escape:"url"}
		<a href="{"hw_modern_backend.disable?return_url=`$return_url`"|fn_url}"><i class="hwmb-icon-cancel"></i> {__('hwmb_disable_settings_panel')}</a>
	</div>
</div>
{/if}