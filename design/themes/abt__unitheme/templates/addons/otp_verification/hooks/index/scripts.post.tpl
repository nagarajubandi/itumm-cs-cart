{script src="js/lib/maskedinput/jquery.maskedinput.min.js"}
{script src="js/addons/otp_verification/flipclock.js"}
{script src="js/lib/inputmask/jquery.inputmask.min.js"}
{script src="js/lib/jquery-bind-first/jquery.bind-first-0.2.3.js"}
{script src="js/lib/inputmask-multi/jquery.inputmask-multi.js"}

<script type="text/javascript">
    (function(_, $) {
        _.otp_verification_phone_masks_list = {$otp_verification_phone_mask_codes nofilter};
        {if $addons.otp_verification.otp_phone_mask}
            _.otp_phone_mask = '{$addons.otp_verification.otp_phone_mask}'
        {/if}
    }(Tygh, Tygh.$));
</script>

{script src="js/addons/otp_verification/otp_phone_verify.js"}