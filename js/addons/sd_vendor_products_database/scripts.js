(function(_, $) {
    fn_sd_vendor_products_database_enable_price = function(object, product_id) {
        if (object.checked) {
            $('#span_price_' + product_id).addClass('hidden');
            $('#price_' + product_id).removeClass('hidden');
            $('#span_amount_' + product_id).addClass('hidden');
            $('#amount_' + product_id).removeClass('hidden');
            $('#disbaled_sell_button_' + product_id).addClass('hidden');
            $('#sell_button_' + product_id).removeClass('hidden');
        } else {
            $('#span_price_' + product_id).removeClass('hidden');
            $('#price_' + product_id).addClass('hidden');
            $('#span_amount_' + product_id).removeClass('hidden');
            $('#amount_' + product_id).addClass('hidden');
            $('#disbaled_sell_button_' + product_id).removeClass('hidden');
            $('#sell_button_' + product_id).addClass('hidden');
        }
    }
})(Tygh, Tygh.$);