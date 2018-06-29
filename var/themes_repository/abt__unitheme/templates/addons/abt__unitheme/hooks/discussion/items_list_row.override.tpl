<div class="ty-discussion-post {cycle values=", ty-discussion-post_even"}" id="post_{$post.post_id}">
    <span itemscope itemtype="http://schema.org/Review">
        <span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
            <meta itemprop="ratingValue" content="{$post.rating_value}">
        </span>
        {if $discussion.object_type == 'P'}
            <meta itemprop="itemReviewed" content="{$product.product|escape}">
        {elseif $discussion.object_type == 'C'}
            <meta itemprop="itemReviewed" content="{$category_data.category|escape}">
        {elseif $discussion.object_type == 'A'}
            <meta itemprop="itemReviewed" content="{$page.page|escape}">
        {elseif $discussion.object_type == 'E'}
            <meta itemprop="itemReviewed" content="{$runtime.company_data.company|escape}">
        {/if}
        <span itemprop="author" itemscope itemtype="http://schema.org/Person">
            <meta itemprop="name" content="{$post.name}">
        </span>
        <meta itemprop="datePublished" content="{$post.timestamp|date_format:"%Y-%m-%d"}">
        <meta itemprop="reviewBody" content="{$post.message|escape}">
    </span>
    <div class="row-fluid">
	<div class="span3">
	<span class="ty-discussion-post__author">{$post.name}</span>
	{if $discussion.type == "R" || $discussion.type == "B" && $post.rating_value > 0}
	    <div class="clearfix ty-discussion-post__rating">
	        {include file="addons/discussion/views/discussion/components/stars.tpl" stars=$post.rating_value|fn_get_discussion_rating}
	    </div>
	{/if}
	<p><span class="ty-discussion-post__date">{$post.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</span></p>
	</div>
	<div class="span13">	
    {if $discussion.type == "C" || $discussion.type == "B"}
        <div class="ty-discussion-post__message">{$post.message|escape|nl2br nofilter}</div>
    {/if}
	</div>
    </div>
</div>
