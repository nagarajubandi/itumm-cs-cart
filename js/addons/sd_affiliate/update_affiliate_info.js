(function(_, $) {
    $(document).ready(function(){
        var aff_status = $('#elm_affiliate_status'),
            aff_plan = $('#elm_affiliate_plan');
        aff_status.on('change', function(){
            if (aff_status.val() == 'N' || aff_status.val() == 'D') {
                aff_plan.attr("disabled", "true");
                $("#elm_affiliate_plan :selected").removeAttr("selected");
                $('#affiliate_plan_0').attr("selected", "selected");
            } else {
                aff_plan.removeAttr("disabled");
            }
        });
    });
}(Tygh, Tygh.$));