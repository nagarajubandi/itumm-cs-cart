{capture name="mainbox_title"}
{__("ab__dotd.help")} {__("ab__deal_of_the_day")}
{/capture}
{capture name="mainbox"}
<p>{__('ab__dotd_help.docs')}</p>
{/capture}
{include file="common/mainbox.tpl" title=$smarty.capture.mainbox_title content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar}