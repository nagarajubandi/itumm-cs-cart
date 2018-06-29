(function(_, $){
    $.ceEvent('on', 'ce.commoninit', function(context) {
        // inputmask-multi
        var mask_elements = $('.cm-otp-mask-phone', context);
        if (mask_elements.length && _.otp_verification_phone_masks_list) {
            var maskList = $.masksSort(_.otp_verification_phone_masks_list, ['#'], /[0-9]|#/, "mask");
            var maskOpts = {
                inputmask: {
                    definitions: {
                        '#': {
                            validator: "[0-9]",
                            cardinality: 1
                        }
                    },
                    showMaskOnHover: false,
                    autoUnmask: false,
                },
                match: /[0-9]/,
                replace: '#',
                list: maskList,
                listKey: "mask"
            };

            mask_elements.each(function() {
                if (_.otp_phone_mask) {
                    $(this).inputmask({
                        mask: _.otp_phone_mask,
                        showMaskOnHover: false,
                        autoUnmask: false
                    });

                } else {
                    $(this).inputmasks(maskOpts);
                }

            });
        }

    });

    

    // $.ceEvent('on', 'ce.formpre_otp_verification_from', function(form, elm) {
    //     // var val_email = form.find('[name="call_data[email]"]').val(),
    //     var val_phone = form.find('[name="call_data[phone]"]').val(),
    //         allow = !!(val_email || val_phone),
    //         error_box = form.find('.cm-otp-error-box'),
    //         dlg = $.ceDialog('get_last');

    //     error_box.toggle(!allow);
    //     dlg.ceDialog('reload');

    //     if (allow) {
    //         var product_data = $('[name="' + form.data('caProductForm') + '"]').serializeObject();

    //         $.each(product_data, function(key, value){
    //             if (key.match(/product_data/)) {
    //                 form.append('<input type="hidden" name="' + key + '" value="' + value + '" />');
    //             }
    //         });
    //     }

    //     return allow;
    // });

})(Tygh, Tygh.$);

