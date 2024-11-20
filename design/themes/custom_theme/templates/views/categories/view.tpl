{if $products}
<div class="product__discount">
  <div class="section-title product__discount__title">
    <h2>Sale Off</h2>
  </div>
  <div class="row">
    <div class="product__discount__slider owl-carousel">
     {foreach from=$products item=product}
      {if $product.list_price > 0.00}
      <div class="col-lg-4">
        <div class="product__discount__item">
          <div
            class="product__discount__item__pic set-bg"
            data-setbg="{$product.main_pair.detailed.image_path}"
          >
            <div class="product__discount__percent">
            -{round((({$product.list_price} - {$product.price}) / {$product.list_price}) * 100)}%
            </div>
            <ul class="product__item__pic__hover">
             
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

                                    <!-- Add to Compare -->
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


                                   <!-- Add to Cart -->
                                   {* 
                                   <li>
                                        <form action="{"checkout.add"|fn_url}" method="post" class="cm-ajax cm-ajax-full-render" data-ca-target-id="cart_status,cart_content">
                                            <input type="hidden" name="product_data[{$product.product_id}][amount]" value="1" />
                                            <button type="submit"><i class="fa fa-shopping-cart"></i></button>
                                        </form>
                                    </li>
                                     <li>
                                        <form action="{fn_url('checkout.add')}" method="post" class="cm-disable-empty-files cm-ajax cm-ajax-full-render  cm-processed-form">
                                            <!-- Add hidden fields to ensure correct AJAX targeting and redirect behavior -->
                                            <input type="hidden" name="result_ids" value="cart_status,cart_content" />
                                            <input type="hidden" name="redirect_url" value="index.php" />
                                            
                                            <input type="hidden" name="product_data[{$product.product_id}][amount]" value="1" />
                                            
                                            <button type="submit" class="ty-btn ty-btn__add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </form>
                                    </li>
                                   *} 
                                    
                                        </div>
                                    
                                    </div>
                                
                                </div>
            </ul>
          </div>
          <div class="product__discount__item__text">
            <span>{$product.company_name}</span>
            <h5>
             <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                    {$product.product}
              </a>
            </h5>
        
            <div class="product__item__price">
                ${number_format($product.price, 2)} <span>${number_format($product.list_price, 2)}</span>
            </div>
          </div>
        </div>
      </div>
       {/if}
       {/foreach}
    </div>
  </div>
</div>

<script src="{$config.current_location}/design/themes/custom_theme/js/jquery-3.3.1.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/bootstrap.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery.nice-select.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery-ui.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery.slicknav.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/mixitup.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/owl.carousel.min.js"></script>

<script>
  (function ($) {
     /*--------------------------
        Latest Product Slider
    ----------------------------*/
    $(".latest-product__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: false,
        nav: true,
        navText: ["<span class='fa fa-angle-left'><span/>", "<span class='fa fa-angle-right'><span/>"],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });
    /*-----------------------------
Product Discount Slider
-------------------------------*/
    $(".product__discount__slider").owlCarousel({
      loop: true,
      margin: 0,
      items: 3,
      dots: true,
      smartSpeed: 1200,
      autoHeight: false,
      autoplay: true,
      responsive: {
        320: {
          items: 1,
        },

        480: {
          items: 2,
        },

        768: {
          items: 2,
        },

        992: {
          items: 3,
        },
      },
    });
  })(jQuery);
</script>
{/if}


{hook name="categories:view"}
<div id="category_products_{$block.block_id}">

{hook name="categories:view_description"}
{if $category_data.description || $runtime.customization_mode.live_editor}
    <div class="ty-wysiwyg-content ty-mb-s" {live_edit name="category:description:{$category_data.category_id}"}>{$category_data.description nofilter}</div>
{/if}
{/hook}

{include file="views/categories/components/subcategories.tpl"}

{if $products}
{assign var="layouts" value=""|fn_get_products_views:false:0}
{if $category_data.product_columns}
    {assign var="product_columns" value=$category_data.product_columns}
{else}
    {assign var="product_columns" value=$settings.Appearance.columns_in_products_list}
{/if}
{$is_selected_filters = $smarty.request.features_hash}

{if $layouts.$selected_layout.template}
    {include file="`$layouts.$selected_layout.template`" columns=$product_columns}
{/if}

{elseif !$show_not_found_notification && $is_selected_filters}
    {include file="common/no_items.tpl"
        text_no_found=__("text_no_products_found")
        no_items_extended=true
        reset_url=$config.current_url|fn_query_remove:"features_hash"
    }
{elseif !$subcategories || $show_no_products_block}
    {include file="common/no_items.tpl"
        text_no_found=__("text_no_products")
    }
{else}
<div class="cm-pagination-container"></div>
{/if}
<!--category_products_{$block.block_id}--></div>

{capture name="mainbox_title"}<span {live_edit name="category:category:{$category_data.category_id}"}>{$category_data.category}</span>{/capture}
{/hook}
