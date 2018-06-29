<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<style type="text/css">
    .commommmn
    {
        display: none;
    }
</style>
<div class="control-group" style="margin-left: 130px; float:left;">
<label class="control-label">{__("choose_condition")}:{include file="common/tooltip.tpl" tooltip=__("choose_condition_tooltip")}</label>
 <div class="controls">
   <input id="time_ch" type="checkbox" value="1" name="order_cancelation_data[time_c]" {if isset($order_cancelation_data.time_c)}checked{/if} />&nbsp&nbsp{__("time")}
 </div>
</div>
<div class="control-group commommmn" style="float:left" id="time_part">
            <label class="control-label">{include file="common/tooltip.tpl" tooltip=__("enter_time_tooltip")}</label>
            <div class="controls">
            <select name="order_cancelation_data[days]" style="width: 60px;">
            {section name="days" loop=15}
                <option value="{$smarty.section.days.index}" {if $order_cancelation_data.days == $smarty.section.days.index}selected="selected"{/if}>
                {$smarty.section.days.index}
                </option>
            {/section}
            </select>&nbsp;{__("days")}
            <select name="order_cancelation_data[hours]" style="width: 60px;">
            {section name="hours" loop=24}
                <option value="{$smarty.section.hours.index}" {if $order_cancelation_data.hours == $smarty.section.hours.index}selected="selected"{/if}>
                {$smarty.section.hours.index}
                </option>
            {/section}
            </select>&nbsp;{__("hours")}
            <select name="order_cancelation_data[minute]" style="width: 60px;">
            {section name="hours" loop=12}
            {assign var="minutes" value=5*$smarty.section.hours.index}
                <option value="{$minutes}" {if $order_cancelation_data.minute == $minutes}selected="selected"{/if}>
                {$minutes}
                </option>
            {/section}
            </select>&nbsp;{__("minutes")}
            </div>
</div> 
<div class="control-group" style="margin-left: 130px;clear:left;">
  <div class="controls"  style="float:left;">
  <input id="price_ch" type="checkbox" value="1" name="order_cancelation_data[price]" {if isset($order_cancelation_data.price)}checked{/if}/>&nbsp&nbsp{__("price")}
 </div>
 <div class="commommmn" style="float:left;" id="price_part">
    <label class="control-label">{include file="common/tooltip.tpl" tooltip=__("enter_price_tooltip")}</label>
    <div class="controls">
       <input  name="order_cancelation_data[minimum_price]" value="{$order_cancelation_data.minimum_price}"/>
    </div>
</div>
</div>
<div class="control-group" style="margin-left: 130px;" id="choose_condition">
<div class="controls" style="float:left;">
 <input id="product_ch" type="checkbox" value="1" name="order_cancelation_data[product]" {if isset($order_cancelation_data.product)}checked{/if}/>&nbsp&nbsp{__("product")}
 </div>
 <div class="commommmn" style="float:left; width:75%;" id="product_part">
    <label class="control-label"style="margin-left:-13px;">{include file="common/tooltip.tpl" tooltip=__("enter_product_tooltip")}</label>
    <div class="controls">
        {include file="pickers/products/picker.tpl" data_id="objects_`$id`_" input_name="order_cancelation_data[product_ids]" item_ids=$order_cancelation_data.product_ids type="links" colspan="5"}
    </div>
</div>
</div>
{assign var=wk_order_status value=fn_get_statuses()}
<div class="control-group" style="margin-left: 130px; float:left;" id="choose_condition">
<div class="controls">
 <input id="status_ch" type="checkbox" value="1" name="order_cancelation_data[status_c]" {if isset($order_cancelation_data.status_c)}checked{/if}/>&nbsp&nbsp{__("status")}
 </div>
</div>
<div class="control-group commommmn" style="float:left;" id="status_part">
    <label class="control-label" for="elm_select_status">{include file="common/tooltip.tpl" tooltip=__("enter_status_tooltip")}</label>
    <div class="controls">
        <select name="order_cancelation_data[order_status][]" id="elm_select_status" multiple="multiple">
            {foreach from=$wk_order_status item=order_status}
              {if $order_status.status != 'N' && $order_status.status != 'D' && $order_status.status != 'I' && $order_status.status != 'F'}
                <option value="{$order_status.status}" {if isset($order_cancelation_data.order_status) && in_array($order_status.status,$order_cancelation_data.order_status)}selected{/if}>{$order_status.description}</option>
              {/if}
            {/foreach}
        </select>
    </div>
</div>
<script>
    $(document).ready(function(){
    $("#time_ch").click(function(){
         if($("#time_ch").prop("checked") == true){
                $('#time_part').show();
                $('#time_part').removeClass('commommmn');
            }
          else
          {
                $('#time_part').hide();
                $('#time_part').addClass('.commommmn');
          }
    });
     if($("#time_ch").prop("checked") == true){
                $('#time_part').show();
                $('#time_part').removeClass('commommmn');
            }
          else
          {
                $('#time_part').hide();
                $('#time_part').addClass('.commommmn');
          }
    $("#product_ch").click(function(){
         if($("#product_ch").prop("checked") == true){
                $('#product_part').show();
                $('#product_part').removeClass('commommmn');
            }
          else
          {
                $('#product_part').hide();
                $('#product_part').addClass('.commommmn');
          }
    });
        if($("#product_ch").prop("checked") == true){
                $('#product_part').show();
                $('#product_part').removeClass('commommmn');
            }
          else
          {
                $('#product_part').hide();
                $('#product_part').addClass('.commommmn');
          }
    $("#status_ch").click(function(){
         if($("#status_ch").prop("checked") == true){
                $('#status_part').show();
                $('#status_part').removeClass('commommmn');
            }
          else
          {
                $('#status_part').hide();
                $('#status_part').addClass('.commommmn');
          }
    });
    if($("#status_ch").prop("checked") == true){
                $('#status_part').show();
                $('#status_part').removeClass('commommmn');
            }
          else
          {
                $('#status_part').hide();
                $('#status_part').addClass('.commommmn');
          }
    $("#price_ch").click(function(){
         if($("#price_ch").prop("checked") == true){
                $('#price_part').show();
                $('#price_part').removeClass('commommmn');
            }
          else
          {
                $('#price_part').hide();
                $('#price_part').addClass('.commommmn');
          }
    });
    if($("#price_ch").prop("checked") == true){
                $('#price_part').show();
                $('#price_part').removeClass('commommmn');
            }
          else
          {
                $('#price_part').hide();
                $('#price_part').addClass('.commommmn');
          }


});
</script>