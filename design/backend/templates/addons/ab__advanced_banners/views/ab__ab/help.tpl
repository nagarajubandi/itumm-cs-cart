{capture name="mainbox_title"}
{__("ab__ab.help")} {__("ab__advanced_banners")}
{/capture}
{capture name="mainbox"}
{** Завершение установки **}
{include file="common/subheader.tpl" meta="" title="{__('ab__ab.help.installation_completion.title')}" target="#ab__ab_help_installation_completion"}
<div id="ab__ab_help_installation_completion" class="in collapse" style="padding: 0 20px">{__('ab__ab.help.installation_completion.text')}</div>
{** создание баннера**}
{include file="common/subheader.tpl" meta="" title="{__('ab__ab.help.create_banner.title')}" target="#ab__ab_help_create_banner"}
<div id="ab__ab_help_create_banner" class="in collapse" style="padding: 0 20px">{__('ab__ab.help.create_banner.text')}</div>
{** вывод баннера**}
{include file="common/subheader.tpl" meta="" title="{__('ab__ab.help.show_banner.title')}" target="#ab__ab_help_show_banner"}
<div id="ab__ab_help_show_banner" class="in collapse" style="padding: 0 20px">{__('ab__ab.help.show_banner.text')}</div>
{/capture}
{include file="common/mainbox.tpl" title=$smarty.capture.mainbox_title content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar}
