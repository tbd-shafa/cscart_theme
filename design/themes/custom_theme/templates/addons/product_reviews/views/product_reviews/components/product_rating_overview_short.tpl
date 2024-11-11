{*
    $average_rating
    $total_product_reviews
    $obj_prefix
    $obj_id
    $button
    $link
    $locate_to_product_review_tab
    $product
*}

<section class="ty-product-review-product-rating-overview-short" id="product_review_product_rating_overview_short_{$obj_prefix}{$obj_id}">

    <div class="product__details__rating">
    {for $i = 1 to 5}
        {if $i <= floor($product.average_rating)}
            <i class="fa fa-star"></i>
        {elseif $i == ceil($product.average_rating) && $product.average_rating != floor($product.average_rating)}
            <i class="fa fa-star-half-o"></i>
        {else}
            <i class="fa fa-star-o"></i>
        {/if}
    {/for}
    <span>({$product.product_reviews_count} reviews)</span>
     {include
        file="addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl"
        name=__("product_reviews.write_review")
        product_id=$product.product_id
        locate_to_product_review_tab=$locate_to_product_review_tab
        but_meta="ty-btn__text"
    }
</div>


   

<!--product_review_product_rating_overview_short_{$obj_prefix}{$obj_id}--></section>
