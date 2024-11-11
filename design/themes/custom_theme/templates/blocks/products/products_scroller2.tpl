{** block-description:custom_scroller **}

{if $items}
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                {foreach from=$items item=product}
                    <div class="col-lg-3">

                   {foreach from=$all_products_with_images item=all_product}
                        {if $product.product_id == $all_product.product_id}
                           
                             <div class="categories__item set-bg" 
                             data-setbg="{$all_product.image_path}">
                            <h5>
                                <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">
                                    {$product.product}
                                </a>
                            </h5>
                        </div>
                        {/if}
                    {/foreach}

                       
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
</section>
{/if}

<script src="{$config.current_location}/design/themes/custom_theme/js/jquery-3.3.1.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/bootstrap.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery.nice-select.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery-ui.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery.slicknav.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/mixitup.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/owl.carousel.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/main.js"></script>