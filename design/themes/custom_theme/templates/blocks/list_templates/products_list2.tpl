
<style>
.featured__item__pic.set-bg {
    width: 270px !important;
    height: 270px !important;
    background-size: contain;
}

</style>

{if $items}
{script src="js/tygh/exceptions.js"}
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
                                {assign var="obj_id" value=$product.product_id}
                                {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
                                {include file="common/product_data.tpl" product=$product min_qty=true}

                                <div class="">

                                    {assign var="form_open" value="form_open_`$obj_id`"}
                                    {$smarty.capture.$form_open nofilter}
                                

                                    <div class="">
                                
                                        <div class="">
                                            {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                                                <li>
                                                        <form
                                                        action="{fn_url('checkout.add')}"
                                                        method="post"
                                                        name="product_form_{$product.product_id}"
                                                        enctype="multipart/form-data"
                                                        class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form"
                                                        >
                                                        <input
                                                            type="hidden"
                                                            name="result_ids"
                                                            value="cart_status*,wish_list*,checkout*,account_info*"
                                                        />
                                                        <input type="hidden" name="redirect_url" value="index.php" />
                                                        <input type="hidden" name="product_data[{$product.product_id}][amount]" value="1" />
                                                    
                                                        <div class="">
                                                            <div class="">
                                                            <div class="cm-reload-{$product.product_id}" id="add_to_cart_update_{$product.product_id}">
                                                                <input type="hidden" name="appearance[show_add_to_cart]" value="1" />
                                                                <input type="hidden" name="appearance[show_list_buttons]" value="1" />
                                                                <input type="hidden" name="appearance[but_role]" value="action" />
                                                                <input type="hidden" name="appearance[quick_view]" value="" />
                                                    
                                                            
                                                    <button 
                                                        id="button_cart_{$product.product_id}"
                                                        class="ty-btn ty-btn__add-to-cart ty-btn__primary cm-form-dialog-closer ty-btn"
                                                    type="submit"
                                                        name="dispatch[checkout.add..{$product.product_id}]"
                                                    >
                                                                                                    <i class="fa fa-shopping-cart"></i>
                                                                                                </button>
                                                                
                                                    
                                                            
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </form>
                                            </li>


                                                        <li>
                                                            <a href="{"product_features.add_product?product_id=`$product.product_id`"|fn_url}" class="cm-ajax cm-ajax-full-render" data-ca-target-id="comparison_list,content_compare">
                                                                <i class="fa fa-retweet"></i>
                                                            </a>
                                                        </li>
                                                        <!-- Add to Wishlist -->
                                                        <li>
                                                            <form action="{"wishlist.add"|fn_url}" method="post" class="cm-ajax cm-ajax-full-render">
                                                                <input type="hidden" name="product_data[{$product.product_id}][product_id]" value="{$product.product_id}">
                                                                <input type="hidden" name="product_data[{$product.product_id}][amount]" value="1">
                                                                <input type="hidden" name="dispatch" value="wishlist.add">
                                                                <button type="submit" class="ty-btn ty-btn__tertiary ty-btn-icon">
                                                                    <i class="fa fa-heart"></i>
                                                                </button>
                                                            </form>
                                                        </li>
                                        </div>
                                    
                                    </div>
                                
                                </div>
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


