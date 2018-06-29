{if $user.user_type == "P"}
    <li><a href="{"orders.manage?user_id=`$user.user_id`"|fn_url}">{__("view_all_orders")}</a></li>
{/if}