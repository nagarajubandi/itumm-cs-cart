{capture name="mainbox_title"}
{__("abt__ut.help")} {__("abt__unitheme")}
{/capture}
{capture name="mainbox"}
<p>{__('abt__ut.help.docs')}</p>
{/capture}
{include file="common/mainbox.tpl" title=$smarty.capture.mainbox_title content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar}
