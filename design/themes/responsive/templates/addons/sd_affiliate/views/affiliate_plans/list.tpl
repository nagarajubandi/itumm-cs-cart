{include file="addons/sd_affiliate/common/affiliate_menu.tpl"}
<div class="affiliate">
    {if $affiliate_plan}
        <div class="buttons-container">
            <div class="ty-input-append">
                {assign var="href" value="https://www.fleaffair.com/profiles-add.html?user_type=P&aff_id=`$auth.user_id`"|fn_url:'C':'http'}
                {__("your_aff_id")} <b>{$auth.user_id}</b>. {__("add_parameter_id")} <b>?aff_id={$auth.user_id}</b> {__("to_any_link")} <b>&aff_id={$auth.user_id}</b>{__("for_example_link")} </br>
                
                <div class="control-group">
                {__("for_example_link_register")}

                    <input type="text" value="{$href}" onclick="this.select();" readonly="readonly" class="ty-input-display" >
                    
                </div>{__("for_example_link_description1")}  
 
</br>
                {assign var="phref" value="https://www.fleaffair.com/ganesha-sitting-posture.html?aff_id=`$auth.user_id`"|fn_url:'C':'http'}

                <div class="control-group">
                {__("for_example_link_product")}
                    <input type="text" value="{$phref}" onclick="this.select();" readonly="readonly" class="ty-input-display" >

                </div>    
                                    {__("for_example_link_description2")}             
            </div>
            </br>
  
</br>         
        </div>
        <div class="clearfix affiliate-plan-block">
            <div class="ty-affiliate-table-wrapper">
                {include file="common/subheader.tpl" title=__("affiliate_plan")}
                <table class="ty-affiliate-summary__table">
                    <tr class="ty-affiliate-summary__row">
                        {if $affiliate_plan.description}
                            <td>{$affiliate_plan.description nofilter}:</td>
                            <td>{$affiliate_plan.name}</td>
                        {/if}
                    </tr>

                    <tr class="ty-affiliate-summary__row">
                        <td>{__("aff_cookie_expiration")}:</td>
                        <td>{$affiliate_plan.cookie_expiration|default:0}</td>
                    </tr>

                    <tr class="ty-affiliate-summary__row">
                        {if $affiliate_plan.payout_types.init_balance.value}
                            <td>{__("set_initial_balance")}:</td>
                            <td>{include file="common/price.tpl" value=$affiliate_plan.payout_types.init_balance.value}</td>
                        {/if}
                    </tr>

                    <tr class="ty-affiliate-summary__row">
                        {if $affiliate_plan.min_payment}
                            <td>{__("minimum_commission_payment")}:</td>
                            <td>{include file="common/price.tpl" value=$affiliate_plan.min_payment}</td>
                        {/if}
                    </tr>
                </table>
            </div>

            {if $affiliate_plan.payout_types}
                <div class="affiliate-rates float-left ty-affiliate-table-wrapper">
                    {include file="common/subheader.tpl" title=__("commission_rates")}
                    <table class="ty-affiliate-summary__table">
                        {foreach from=$payout_types key="payout_id" item=payout_data name=payout_type}
                            {if $payout_data.default=="Y" && $affiliate_plan.payout_types.$payout_id.value}
                                <tr class="ty-affiliate-summary__row">
                                    {assign var="lang_var" value=$payout_data.title}
                                    <td {if $smarty.foreach.payout_type.first}class="no-border"{/if}>{__($lang_var)}:</td>
                                    <td {if $smarty.foreach.payout_type.first}class="no-border"{/if}>{include file="common/modifier.tpl" mod_value=$affiliate_plan.payout_types.$payout_id.value mod_type=$affiliate_plan.payout_types.$payout_id.value_type}</td>
                                </tr>
                            {/if}
                        {/foreach}
                    </table>
                </div>
            {/if}
        </div>

    {if $linked_products}
        {include file="common/subheader.tpl" title=__("linked_products")}
        <table class="table ty-table table-width">
            <thead>
                <tr>
                    <th style="width: 70%">{__("product_name")}</th>
                    <th style="width: 30%">{__("sales_commission")}</th>
                </tr>
            </thead>
            {foreach from=$linked_products item=product}
                <tr {cycle values=" ,class=\"table-row\""}>
                    <td>{include file="common/popupbox.tpl" id="product_`$product.product_id`" link_text=$product.product text=__("product") href="banner_products.view?product_id=`$product.product_id`" content=""}</td>
                    <td>{include file="common/modifier.tpl" mod_value=$product.sale.value mod_type=$product.sale.value_type}</td>
                </tr>
            {/foreach}
        </table>
    {/if}

    {if $linked_categories}
        {include file="common/subheader.tpl" title=__("linked_categories")}
        <table class="table ty-table table-width">
            <thead>
                <tr>
                    <th style="width: 70%">{__("category_name")}</th>
                    <th style="width: 30%">{__("sales_commission")}</th>
                </tr>
            </thead>
            {foreach from=$linked_categories item=category}
                <tr {cycle values=" ,class=\"table-row\""}>
                    <td><a href="{"categories.view?category_id=`$category.category_id`"|fn_url}" class="manage-root-item" target="_blank">{$category.category}</a></td>
                    <td>{include file="common/modifier.tpl" mod_value=$category.sale.value mod_type=$category.sale.value_type}</td>
                </tr>
            {/foreach}
        </table>
    {/if}

    {if $coupons}
        {include file="common/subheader.tpl" title=__("coupons")}
        <table class="table ty-table table-width">
            <thead>
                <tr>
                    <th style="width: 35%">{__("coupon_code")}</th>
                    <th style="width: 15%">{__("valid")}</th>
                    <th style="width: 30%">{__("use_coupons_commission")}</th>
                </tr>
            </thead>
            {foreach from=$coupons item=coupon}
                <tr {cycle values=" ,class=\"table-row\""}>
                    <td>{$coupon.coupon_code}</td>
                    <td class="nowrap{if (($coupon.from_date <= $coupon.current_date)&&($coupon.to_date>=$coupon.current_date))} strong{/if}">{$coupon.from_date|date_format:"`$settings.Appearance.date_format`"} - {$coupon.to_date|date_format:"`$settings.Appearance.date_format`"}</td>
                    <td>{include file="common/modifier.tpl" mod_value=$coupon.use_coupon.value mod_type=$coupon.use_coupon.value_type}</td>
                </tr>
            {/foreach}
        </table>
    {/if}

    {if $affiliate_plan.commissions}
        {include file="common/subheader.tpl" title=__("commissions")}
        <table class="table ty-table table-width">
            <thead>
                <tr>
                    <th style="width: 70%">{__("multi_tier_affiliates")}</th>
                    <th style="width: 30%">{__("commission")}</th>
                </tr>
            </thead>
            {foreach from=$affiliate_plan.commissions key="com_id" item="commission"}
                <tr {cycle values=" ,class=\"table-row\""}>
                    <td>{__("level")} {$com_id+1}</td>
                    <td>{include file="common/modifier.tpl" mod_value=$commission mod_type="P"}</td>
                </tr>
            {/foreach}
        </table>
    {/if}
    {else}
        <p>{__("text_no_affiliate_assigned")}.</p>
    {/if}

</div>

{capture name="mainbox_title"}
    {__(affiliates_partnership)} <span class="subtitle">/ {__("affiliate_plan")}</span>
{/capture}