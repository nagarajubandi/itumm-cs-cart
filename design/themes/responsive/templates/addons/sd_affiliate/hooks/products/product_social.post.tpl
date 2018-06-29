{if $auth['user_type'] == 'P' }
{* FleAffair - FB Share code *}
    {assign var="approved" value=$auth.user_id|fn_sd_affiliate_get_affiliate}
    {if $approved}
{assign var="url" value="products.view?product_id=`$product.product_id`&aff_id=`$auth['user_id']`"|fn_url}
{*
<div class="add-buttons-wrap no-margin" data-layout="button">
<a href="whatsapp://send?text={$url}" data-action="share/whatsapp/share" class="wa_btn wa_btn_l" onClick="ga('send', 'event', { eventCategory: 'Social', eventAction: 'Share', eventLabel: 'WhatsAppShare', eventValue: 0});" >Share on WhatsApp</a>
</div>
<div class="fb-share-button" data-href="{$url}" data-layout="button" data-size="large" data-mobile-iframe="true">
   <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={$url};src=sdkpreparse">Share as Affiliate</a>
</div>
*}
<!-- AddToAny BEGIN -->
<div class="float-center space-top">
<div class="float-left "><b>SHARING LINKS FOR AFFILIATES: &nbsp; </b></div>
<div class="float-center space-top">
<a href="https://www.addtoany.com/add_to/facebook?linkurl={$url}&amp;linkname=FleAffair: " target="_blank"><img src="https://static.addtoany.com/buttons/facebook.svg" width="32" height="32"></a>
<a href="https://www.addtoany.com/add_to/twitter?linkurl={$url}&amp;linkname=FleAffair: " target="_blank"><img src="https://static.addtoany.com/buttons/twitter.svg" width="32" height="32"></a>
<a href="https://www.addtoany.com/add_to/google_plus?linkurl={$url}&amp;linkname=FleAffair: " target="_blank"><img src="https://static.addtoany.com/buttons/google_plus.svg" width="32" height="32"></a>
<a href="https://www.addtoany.com/add_to/whatsapp?linkurl={$url}&amp;linkname=FleAffair: " target="_blank"><img src="https://static.addtoany.com/buttons/whatsapp.svg" width="32" height="32"></a>
<a href="https://www.addtoany.com/add_to/pinterest?linkurl={$url}&amp;linkname=FleAffair: " target="_blank"><img src="https://static.addtoany.com/buttons/pinterest.svg" width="32" height="32"></a>
<a href="https://www.addtoany.com/add_to/linkedin?linkurl={$url}&amp;linkname=FleAffair: " target="_blank"><img src="https://static.addtoany.com/buttons/linkedin.svg" width="32" height="32"></a>
</div>
</div>
<!-- AddToAny END -->
{/if}
{* FleAffair - code end *}
{/if}