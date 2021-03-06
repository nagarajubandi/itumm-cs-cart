{hook name="index:ab__so_noindex"}
{if !$smarty.request|fn_seo_is_indexed_page}
{hook name="index:ab__seo_filters_meta_indexed_page"}
<meta name="robots" content="noindex{if $settings.Security.secure_storefront == "partial" && 'HTTPS'|defined},nofollow{/if}" />
{/hook}
{else}
{if $seo_canonical.current}
    <link rel="canonical" href="{$seo_canonical.current}" />
{/if}

{if $seo_canonical.prev}
    <link rel="prev" href="{$seo_canonical.prev}" />
{/if}

{if $seo_canonical.next}
    <link rel="next" href="{$seo_canonical.next}" />
{/if}
{/if}
{/hook}

{foreach $seo_alt_hreflangs_list as $seo_alt_lang_code => $seo_alt_lang}
    <link title="{$seo_alt_lang.name}" dir="{$seo_alt_lang.direction}" type="text/html" rel="alternate" hreflang="{$seo_alt_lang_code}" href="{$seo_alt_lang.href}" />
{/foreach}

