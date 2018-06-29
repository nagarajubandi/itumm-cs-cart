{if $runtime.controller == 'addons' && $runtime.mode == 'manage' && !$smarty.capture.ecl_icon}
<script type="text/javascript" class="cm-ajax-force">
(function(_, $) {
    $(document).ready(function(){
            $('[id^="addon_lh_"] .bg-icon').css('background-image', 'url(https://itumm.com/images/logos/3/iTumm_Final_logo_small-01-color_modified.png)').css('background-size', 'cover');
            $('[id^="addonn_lh_"] .bg-icon i').css('display', 'none');
    });
}(Tygh, Tygh.$));
</script>
{capture name="lh_icon"}Y{/capture}
{/if}