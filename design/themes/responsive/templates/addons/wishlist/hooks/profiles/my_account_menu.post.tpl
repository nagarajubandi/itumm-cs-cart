{if $auth.user_id}
<li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a" href="{"wishlist.view"|fn_url}" rel="nofollow">{__("wishlist")}{if $wishlist_count > 0} ({$wishlist_count}){/if}</a></li>	{else}
	 <li class="ty-account-info__item ty-dropdown-box__item"><a class="cm-dialog-opener cm-dialog-auto-size" href="{if $runtime.controller == "auth" && $runtime.mode == "login_form"}{$config.current_url|fn_url}{else}{"auth.login_form?return_url=`$return_current_url`"|fn_url}{/if}" data-ca-target-id="login_block789"   rel="nofollow">{__("wishlist")}</a></li>
	{/if}
