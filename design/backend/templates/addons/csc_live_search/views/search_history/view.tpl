{capture name="mainbox"}
   <form class="form-horizontal form-edit" action="{""|fn_url}" method="post" name="requests_form">
    {include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id="search_history"}    
    {if $search_history}      
      <table width="100%" class="table table-sort table-middle">
        <thead>
        <tr>
            <th class="left" width="1%">{include file="common/check_items.tpl"}</th>
            <th class="left" >{__('id')}</th>  
            <th width="40%">{__('ls.search_word')}</th>
            <th  class="center">{__('time')}</th>
            <th  class="center">{__('ip_address')}</th>
            <th class="center" >{__("ls.products_clicks")}</a></th>
            <th class="center" >{__("language")}</a></th>
        </tr>
        </thead>
        {foreach from=$search_history item="i"}
        <tbody>
            <tr>
                <td class="left"><input type="checkbox" name="rids[]" value="{$i.request_id}" class="checkbox cm-item" /></td>
                <td class="left">{$i.request_id}</td>
                <td>{$i.q}</td>  
                 <td class="center">{$i.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</td>  
                  <td class="center">{$i.user_ip}</td>         
                <td class="center">
                    {if $i.count>0}
                        <a title="{__('ls.search_word')}: {$i.q}" class="cm-ajax cm-dialog-opener" href="{"search_history.products?pid=`$i.pids`&rid=`$i.request_id`"|fn_url}" data-ca-target-id="clicked_products" data-ca-view-id="{$i.request_id}">{$i.count}</a>
                    {else}
                        0
                    {/if}
                </td>
                <td class="center">{$i.lang_code}</td>          
            </tr>
        {/foreach}
        </tbody>
        </table>
    {else}
        <p class="no-items">{__("no_data")}</p>
    {/if}    
    {include file="common/pagination.tpl" div_id="search_history"}    
    </form>
{/capture}

{capture name="buttons"}
    {capture name="tools_list"}
    	<li>{btn type="list" class="cm-confirm cm-post" text=__("delete_selected") dispatch="dispatch[search_history.m_delete]" form="requests_form" }</li>
        <li>{btn type="list" class="cm-confirm cm-post" text=__("cleanup_history") href="search_history.delete_all"}</li>        
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
{/capture}

{capture name="sidebar"} 
    {include file="addons/csc_live_search/views/components/sales_reports_search_form.tpl" period=$search.period search=$search dispatch="search_history.view"}
{/capture}

{include file="common/mainbox.tpl" title=__("cls.search_history") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar}
