{capture name="mainbox_title"}
{__("ab__category_banners.help")} {__("ab__category_banners")}
{/capture}
{capture name="mainbox"}
{** Основная справка **}
<p>{__('ab__cb_help.docs')}</p>
{** Крон-задание **}
{assign var="links" value=''|fn_ab__cb_cron_links}
{include file="common/subheader.tpl" meta="" title="{__('ab__cb.help.cron.title')}" target="#ab__cb.help.cron"}
<div id="ab__cb.help.cron" class="in collapse" style="padding: 0 20px">{$links nofilter}</div>
{/capture}
{include file="common/mainbox.tpl" title=$smarty.capture.mainbox_title content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar}