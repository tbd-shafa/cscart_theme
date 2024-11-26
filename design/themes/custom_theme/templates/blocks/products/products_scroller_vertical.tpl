{** block-description:vertical_scroller **}
<style>
.latest-product__item__pic {
    width: 110px !important;
    height: 110px !important;
}
</style>
                    {if $items}
<div class="latest-product__text">
    <h4></h4>
    <div class="latest-product__slider owl-carousel">
        
        {foreach from=$items item=product name=productLoop}
            {if $smarty.foreach.productLoop.index % 3 == 0}
                {if !$smarty.foreach.productLoop.first}</div>{/if}
                <div class="latest-prdouct__slider__item">
            {/if}

            {foreach from=$all_products_with_images item=all_product}
                {if $product.product_id == $all_product.product_id}
                    <a href="{"products.view?product_id=`$product.product_id`"|fn_url}" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="{$all_product.image_path}" width="110" height="110"  alt="{$product.product|escape}">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>{$product.product}</h6>
                            <span> {$currencies.$primary_currency.symbol}{$product.price|number_format:2}</span>
                        </div>
                    </a>
                {/if}
            {/foreach}
            
            {if $smarty.foreach.productLoop.last}</div>{/if}
        {/foreach}
    </div>
</div>
{/if}
