<div class="sidebar-row" id="views">
    <h6>{__("type")}</h6>
        <ul class="nav nav-list saved-search">
           <li {if $runtime.mode=="view_words"}class="active"{/if}>
                <a href="{"search_history.view_words"|fn_url}">{__("ls.per_word")}</a>
            </li>  
            <li {if $runtime.mode=="view"}class="active"{/if}>
                <a href="{"search_history.view"|fn_url}">{__("ls.per_request")}</a>
            </li>                    
        </ul>
</div>

<div class="sidebar-row">
<form action="{""|fn_url}" method="get" name="report_form">
<h6>{__("search")}</h6>
    {capture name="simple_search"}
        <input type="hidden" name="report_id" value="{$report.report_id}">
        <input type="hidden" name="selected_section" value="">
        <div class="sidebar-field">
            <label for="q">{__("ls.search_word")}</label>
            <input type="text" name="q" id="q" value="{$search.q}" size="30" />
        </div>
        {assign var=langs value=""|fn_get_translation_languages}      
        <div class="sidebar-field">
            <label for="lang_code">{__("language")}</label>
            <select name="lang_code" id="lang_code">
            	<option value="">{__('all')}</option>
            	{foreach from=$langs item=lang key=k}
            	<option value="{$k}" {if $search.lang_code==$k} selected="selected"{/if}>{$lang.name}</option>
                {/foreach}
            </select>            
        </div>
        
        {if $runtime.mode=="view"}
         <div class="sidebar-field">
            <label for="ip">{__("ip_address")}</label>
            <input type="text" name="ip" id="ip" value="{$search.ip}" size="30" />
        </div>
        {/if}
        
        {include file="common/period_selector.tpl" period=$period display="form"}
    {/capture}
    {include file="common/advanced_search.tpl" no_adv_link=true simple_search=$smarty.capture.simple_search not_saved=true dispatch=$dispatch}
</form>
</div>