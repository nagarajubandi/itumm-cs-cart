{capture name="mainbox"}

{capture name="tabsbox"}

    <div id="content_colors">
        {include file="addons/hw_modern_backend/views/hw_modern_backend/components/manage_colors.tpl" colors=$hwmb.colors}
    </div>

    <div id="content_fonts">
        {include file="addons/hw_modern_backend/views/hw_modern_backend/components/manage_fonts.tpl" fonts=$hwmb.fonts}
    </div>    

    <div id="content_bgs">
        {include file="addons/hw_modern_backend/views/hw_modern_backend/components/manage_bgs.tpl" bgs=$hwmb.bgs}
    </div>

{capture name="upload_theme"}
    {include file="addons/hw_modern_backend/views/hw_modern_backend/components/upload_theme.tpl"}
{/capture}

{capture name="buttons"}
    {if !$hwmb_settings}
        {assign var="return_url" value=$config.current_url|escape:"url"}
        {assign var="activate_url" value="hw_modern_backend.enable?return_url=`$return_url`"|fn_url}
        {include file="buttons/button.tpl" but_href=$activate_url but_text=__("hwmb_activate_settings_panel") but_role="action" but_meta="btn-primary"}
    {/if}

    {include file="common/popupbox.tpl" id="upload_theme" text=__("upload_theme") title=__("upload_theme") content=$smarty.capture.upload_theme act="general" link_class="cm-dialog-auto-size" icon="icon-plus" link_text=__('upload_theme')}
    
    {capture name="tools_list"}
            <li>{btn type="list" text=__("hwmb_add_color") href="hw_modern_backend.update_colors"}</li>
            <li>{btn type="list" text=__("hwmb_add_font") href="hw_modern_backend.update_fonts"}</li>                
            <li>{btn type="list" text=__("hwmb_add_bg") href="hw_modern_backend.update_bgs"}</li>
    {/capture}
    {dropdown content=$smarty.capture.tools_list icon="icon-plus" no_caret=true placement="right"}

{/capture}

{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox track=true}

{/capture}

{capture name="sidebar"}
    <div class="sidebar-row">
        <h6>{__("total")}</h6>
        <ul class="unstyled sidebar-stat">
            <li>{__('hwmb_layouts')} <span>{$hwmb.layouts|count}</span></li>
            <li>{__('hwmb_colorss')} <span>{$hwmb.colors|count}</span></li>
            <li>{__('hwmb_bgss')} <span>{$hwmb.bgs|count}</span></li>
            <li>{__('hwmb_fontss')} <span>{$hwmb.fonts|count}</span></li>
        </ul>
    </div>
{/capture}

{include file="common/mainbox.tpl" title=__('hw_modern_backend') sidebar=$smarty.capture.sidebar content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons}
