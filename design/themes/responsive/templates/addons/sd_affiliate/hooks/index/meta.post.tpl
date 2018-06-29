{* FleAffair - FB Share code *}
{if $smarty.request.dispatch eq 'aff_banners.view'}
<meta property="og:url"           content="{$banner_detail.url}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{$banner_detail.title}" />
<meta property="og:description"   content="{$banner_detail.content }" />
<meta property="og:image" content="{$banner_detail.icon.image_path}" />

{elseif $smarty.request.dispatch eq 'profiles.add' &&  $smarty.server.REQUEST_URI|strstr:'?user_type=P'}
{assign var="url" value="`$config.current_location`/`$config.current_url`"|fn_url}

<meta property="og:url"           content="{$url}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="FleAffair Affiliate Registration" />
<meta property="og:description"   content="Register as an Affiliate with FleAffair.com and Earn Extra Cash by Working from Home." />
<meta property="og:image" content="https://www.fleaffair.com/images/aff_images/111/Affiliates-work-from-Home.jpg?t=1489660340" />

{/if}
{* FleAffair - code end *}