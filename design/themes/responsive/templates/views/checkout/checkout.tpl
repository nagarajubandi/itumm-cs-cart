{*<script type="text/javascript">
	
$('a.ty-btn__secondary').each(function(){
	var href=$(this).attr('href');
	if(href !== 'undefined')
    if (href.indexOf('step_two') > -1 && !$('#step_two').hasClass('ty-step__container-active')) {
		$(this).attr(href+'&result_ids=checkout_*&is_ajax=1')
		this.click();
    }
	
	  
});</script>*}
{script src="js/tygh/exceptions.js"}
{script src="js/tygh/checkout.js"}

{$smarty.capture.checkout_error_content nofilter}
{include file="views/checkout/components/checkout_steps.tpl"}

{capture name="mainbox_title"}<span class="ty-checkout__title">{__("secure_checkout")}&nbsp;<i class="ty-checkout__title-icon ty-icon-lock"></i></span>{/capture}
