<div class="control-group">
    <label class="control-label" for="elm_payment_limit_{$id}">{_("Order Total Limit")}:</label>
    <div class="controls">
        <input id="elm_payment_limit_{$id}" type="text" name="payment_data[min_order_limit]" class="input-mini" value="{$payment.min_order_limit}" size="4"> {$currencies.$primary_currency.symbol nofilter} - <input type="text" name="payment_data[max_order_limit]" value="{$payment.max_order_limit}" class="input-mini" size="4"> {$currencies.$primary_currency.symbol nofilter}
    </div>
</div>