{** block-description:featured_product **}
<style>
.featured__item__pic.set-bg {
    width: 270px !important;
    height: 270px !important;
    background-size: contain;
}

</style>

{if $items}
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        {assign var="displayed_categories" value=[]}
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            {foreach from=$items item=product}
                                {foreach from=$categories item=category}
                                    {if in_array($category.category_id, $product.category_ids) && !in_array($category.category_id, $displayed_categories)}
                                        <li data-filter=".category_{$category.category_id}">{$category.category}</li>
                                        {assign var="displayed_categories" value=$displayed_categories|@array_merge:[$category.category_id]}
                                    {/if}
                                {/foreach}
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                {foreach from=$items item=product}
                    {assign var="filter_classes" value=""}
                    {foreach from=$product.category_ids item=cat_id}
                        {foreach from=$categories item=category}
                            {if $category.category_id == $cat_id}
                                {assign var="filter_classes" value="{$filter_classes} category_{$cat_id}"}
                            {/if}
                        {/foreach}
                    {/foreach}

                    <div class="col-lg-3 col-md-4 col-sm-6 mix {$filter_classes}">
                        <div class="featured__item">
                          {foreach from=$all_products_with_images item=all_product}
                          {if $product.product_id == $all_product.product_id}
                            <div class="featured__item__pic set-bg" data-setbg="{$all_product.image_path}" height="270px;" width="270px;">
                                <ul class="featured__item__pic__hover">
                                   
 
                                   <!-- Add to Wishlist -->
                                    <li>
                                        <a href="{"wishlist.add?product_id=`$product.product_id`"|fn_url}" class="cm-ajax cm-ajax-full-render" data-ca-target-id="wishlist_count,content_wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                        
                                        
                                    </li>

                                    <!-- Add to Compare -->
                                    <li>
                                        <a href="{"product_features.add_product?product_id=`$product.product_id`"|fn_url}" class="cm-ajax cm-ajax-full-render" data-ca-target-id="comparison_list,content_compare">
                                            <i class="fa fa-retweet"></i>
                                        </a>
                                    </li>

                                    <!-- Add to Cart -->
                                    <li>
                                        <form action="{"checkout.add"|fn_url}" method="post" class="cm-ajax cm-ajax-full-render" data-ca-target-id="cart_status,cart_content">
                                            <input type="hidden" name="product_data[{$product.product_id}][amount]" value="1" />
                                            <button type="submit"><i class="fa fa-shopping-cart"></i></button>
                                        </form>
                                    </li>

                                </ul>
                            </div>
                           {/if}
                           {/foreach}
                            <div class="featured__item__text">
                                <h6><a href="{"products.view?product_id=`$product.product_id`"|fn_url}">{$product.product}</a></h6>
                                <h5>${$product.price|number_format:2}</h5>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </section>
{/if}