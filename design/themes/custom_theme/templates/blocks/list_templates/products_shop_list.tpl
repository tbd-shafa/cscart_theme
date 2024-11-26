<style>
img.sp-img {
    height: 270px;
    width: 270px;
}
</style>
{if $products}

    {script src="js/tygh/exceptions.js"}

    {if !$no_pagination}
        {include file="common/pagination.tpl"}
    {/if}

    {if !$no_sorting}
        {include file="views/products/components/sorting.tpl"}
    {/if}
 <div class="row">
    {foreach from=$products item=product key=key name="products"}
        {capture name="capt_options_vs_qty"}{/capture}
        {hook name="products:product_block"}
            {assign var="obj_id" value=$product.product_id}
            {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
            {include file="common/product_data.tpl" product=$product min_qty=true}

            <div class="clearfix col-lg-4 col-md-6 col-sm-6 mb-4">

                {assign var="form_open" value="form_open_`$obj_id`"}
                {$smarty.capture.$form_open nofilter}
                {if $bulk_addition}
                    <input class="cm-item ty-float-right ty-product-list__bulk" type="checkbox" id="bulk_addition_{$obj_prefix}{$product.product_id}" name="product_data[{$product.product_id}][amount]" value="{if $js_product_var}{$product.product_id}{else}1{/if}" {if ($product.zero_price_action == "R" && $product.price == 0)}disabled="disabled"{/if} />
                {/if}

                
                <div class="">
                {hook name="products:product_block_content"}
                    {if $js_product_var}
                        <input type="hidden" id="product_{$obj_prefix}{$product.product_id}" value="{$product.product}" />
                    {/if}
                    {* res_delete_1 *}
                    {if $item_number == "Y"}<strong>{$smarty.foreach.products.iteration}.&nbsp;</strong>{/if}
                    {assign var="sku" value="sku_$obj_id"}{$smarty.capture.$sku nofilter}
                    {* /res_delete_1 *}
                        {assign var="name" value="name_$obj_id"}
                            
                        {hook name="products:list_price_block"}
                                {$old_price="old_price_`$obj_id`"}
                                {$price="price_`$obj_id`"}
                        {/hook}

                        {if !$smarty.capture.capt_options_vs_qty}
                        {assign var="product_options" value="product_options_`$obj_id`"}
                            {assign var="product_amount" value="product_amount_`$obj_id`"}
                            {assign var="qty" value="qty_`$obj_id`"}
                        {/if}

                        {assign var="advanced_options" value="advanced_options_`$obj_id`"}
                        {assign var="min_qty" value="min_qty_`$obj_id`"}
                        {assign var="product_edp" value="product_edp_`$obj_id`"}
                        <div class="product__item">
                                <div class="product__item__pic set-bg">
                                   
                                  <img class="sp-img" src="{$product.main_pair.detailed.image_path}"  alt="{$product.product}">
                        
                                    <ul class="product__item__pic__hover">

                                     <!-- Add to Cart -->
                                    <li>
                                        <div class="cm-reload-{$product.product_id}" id="add_to_cart_update_{$product.product_id}">
                                            <input type="hidden" name="appearance[show_add_to_cart]" value="1" />
                                            <input type="hidden" name="appearance[show_list_buttons]" value="1" />
                                            <input type="hidden" name="appearance[but_role]" value="action" />
                                            <input type="hidden" name="appearance[quick_view]" value="" />

                                            <button
                                                id="button_cart_{$product.product}"
                                                class="primary-btn ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer ty-btn"
                                                type="submit"
                                                name="dispatch[checkout.add..{$product.product_id}]"
                                            >
                                              <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </div>
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
                                      
                                        
                                        
                                    </ul>
                                </div>
  
                                <div class="product__item__text">
                                    <h6><a href="{"products.view?product_id=`$product.product_id`"|fn_url}">{$product.product}</a></h6>
                                    <h5> {$currencies.$primary_currency.symbol}{$product.price|number_format:2}</h5>
                                </div>
                            </div>
                    
                {/hook}
                
                </div>
                {hook name="products:product_list_form_close_tag"}
                    {$form_close="form_close_`$obj_id`"}
                    {$smarty.capture.$form_close nofilter}
                {/hook}
            </div>
            {if !$smarty.foreach.products.last}
            <hr />
            {/if}
        {/hook}
    {/foreach}
</div>
    {if $bulk_addition}
        <script>
            (function(_, $) {

                $(document).ready(function() {

                    $.ceEvent('on', 'ce.commoninit', function(context) {
                        if (context.find('input[type=checkbox][id^=bulk_addition_]').length) {
                            context.find('.cm-picker-product-options').switchAvailability(true, false);
                        }
                    });

                    $(_.doc).on('click', '.cm-item', function() {
                        $('#opt_' + $(this).prop('id').replace('bulk_addition_', '')).switchAvailability(!this.checked, false);
                    });
                });

            }(Tygh, Tygh.$));
        </script>
    {/if}

    {if !$no_pagination}
        {include file="common/pagination.tpl" force_ajax=$force_ajax}
    {/if}

{/if}

{capture name="mainbox_title"}{$title}{/capture}
