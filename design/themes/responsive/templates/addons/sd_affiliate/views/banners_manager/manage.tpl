{* FleAffair - FB Code for Sharing *}

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1599666500312849";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

{* FB Code End *}

{include file="addons/sd_affiliate/common/affiliate_menu.tpl"}

{capture name="tabsbox"}

<div id="content_{$selected_section}">
{include file="addons/sd_affiliate/views/banners_manager/components/banners_list.tpl" prefix=$selected_section}
<!--content_{$selected_section}--></div>

{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$selected_section}

{capture name="mainbox_title"}
    {__(affiliates_partnership)} <span class="subtitle">/ {$mainbox_title}</span>
{/capture}