{assign var="discussion" value=$subpage.page_id|fn_get_discussion:"A":true:$smarty.request}

{if $discussion.type == "R" || $discussion.type == "B"}
    <div class="ty-discussion-post__rating">
        {include file="addons/discussion/views/discussion/components/stars.tpl" stars=$discussion.average_rating|default:0|fn_get_discussion_rating}
    </div>
{/if}

{if $discussion && $discussion.type != "D" && $discussion.search.total_items > 0}
<div class="ty-discussion-post__count">
<i class="ty-icon-uni-comment"></i> {$discussion.search.total_items}
</div>
{/if}
