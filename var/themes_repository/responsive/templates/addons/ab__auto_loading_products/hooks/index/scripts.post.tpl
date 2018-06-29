{if $runtime.controller == "categories"}{strip}
<script type="text/javascript">
var ab__alp = {literal}{}{/literal};
ab__alp = {literal}{{/literal}
config : {literal}{{/literal}
type_loading : "{$addons.ab__auto_loading_products.type_loading|escape:"javascript"|default:"auto"}",
before_end : "{$addons.ab__auto_loading_products.before_end|escape:"javascript"|default:"100"}",
animation : "{$addons.ab__auto_loading_products.animation|escape:"javascript"|default:"css"}",
troubleshooting_products_without_options : "{$addons.ab__auto_loading_products.troubleshooting_products_without_options|escape:"javascript"|default:"N"}",
{literal}}{/literal},
blocks : {literal}{{/literal}
products : "",
last_product : "",
template : false,
pagination : false,
button_state : 'delete'
{literal}}{/literal},
params : {literal}{{/literal}
page : "{$search.page|escape:"javascript"|default:1}",
features_hash : "{$search.features_hash|escape:"javascript"|default:""}",
items_per_page : "{$search.items_per_page|escape:"javascript"|default:12}",
dispatch : "{$search.dispatch|escape:"javascript"|default:""}",
category_id : "{$search.category_id|escape:"javascript"|default:0}",
sort_by : "{$search.sort_by|escape:"javascript"|default:""}",
sort_order : "{$search.sort_order|escape:"javascript"|default:""}",
subcats : "{$search.subcats|escape:"javascript"|default:"Y"}",
total_items : "{$search.total_items|escape:"javascript"|default:"Y"}",
current_url : "{"categories.view&category_id=`$search.category_id`"|fn_url}",
loading : false,
{literal}}{/literal},
texts : {literal}{{/literal}
t1 : "{__('ab__alp_texts_t1')|escape:"javascript"|default:"Show another "}",
t2 : "{__('ab__alp_texts_t2')|escape:"javascript"|default:". Showing "}",
t3 : "{__('ab__alp_texts_t3')|escape:"javascript"|default:" from "}",
t4 : "{__('ab__alp_texts_t4')|escape:"javascript"|default:"Showing all "}",
p1 : "{__('ab__alp_texts_p1')|escape:"javascript"|default:"product"}",
p2 : "{__('ab__alp_texts_p2')|escape:"javascript"|default:"products"}",
p3 : "{__('ab__alp_texts_p3')|escape:"javascript"|default:"products"}",
{literal}}{/literal},
{literal}}{/literal};
</script>
{script src="js/addons/ab__auto_loading_products/func.js"}
{/strip}{/if}
