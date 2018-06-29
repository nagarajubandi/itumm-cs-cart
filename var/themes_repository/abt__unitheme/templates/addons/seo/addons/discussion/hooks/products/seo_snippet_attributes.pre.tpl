{if $product.discussion.search.total_items && $product.discussion.average_rating}
    <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
        <meta itemprop="reviewCount" content="{$product.discussion.search.total_items}">
        <meta itemprop="ratingValue" content="{$product.discussion.average_rating}">
        <meta itemprop="bestRating" content="5">
        <meta itemprop="worstRating" content="1">
    </div>
{/if}