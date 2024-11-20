{capture name="val_hide_form"}{/capture}
{capture name="val_capture_options_vs_qty"}{/capture}
{capture name="val_capture_buttons"}{/capture}
{capture name="val_no_ajax"}{/capture}
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery-3.3.1.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/bootstrap.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery.nice-select.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery-ui.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery.slicknav.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/mixitup.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/owl.carousel.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/main.js"></script>
{hook name="products:layout_content"}
 <style>
.custom_breadcome {
    width: calc(100vw - 8px);
    margin-left: calc((1170px - 100vw) / 2);
} 
</style>
 <div class="custom_breadcome">
 <section class="breadcrumb-section set-bg" data-setbg="{$product.main_pair.detailed.image_path|default:"{$config.current_location}/design/themes/custom_theme/img/breadcrumb.jpg"}">
	
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <!-- Display Product Title -->
                    <h2>{$product.product}</h2>

                    <!-- Dynamic Breadcrumb Navigation -->
                    <div class="breadcrumb__option" style="color:Black !important;">
                        <a href="{$config.current_location}" style="color:Black !important;">Home</a>
                        
                        {if $product.main_category}
                            <a href="{$config.current_location}/categories/{$product.main_category}/" style="color:Black !important;">{$product.main_category_name}</a>
                        {/if}
                        
                        <span>{$product.product}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
 </div>

   
{* NOTE: One of the selected product templates will be connected, depending on the 'Product details view' setting.
	You can find product templates in the following directory: responsive/templates/blocks/product_templates/
	Below are the display parameters we send to the product template.
*}
{include 
	file=$product.product_id|fn_get_product_details_view
	product=$product
	show_sku=true
	show_rating=true
	show_old_price=true
	show_price=true
	show_list_discount=true
	show_clean_price=true
	details_page=true
	show_product_labels=true
	show_discount_label=true
	show_shipping_label=true
	show_product_amount=true
	show_product_options=true
	hide_form=$smarty.capture.val_hide_form
	min_qty=true
	show_edp=true
	capture_buttons=$smarty.capture.val_capture_buttons
	capture_options_vs_qty=$smarty.capture.val_capture_options_vs_qty
	separate_buttons=$smarty.capture.val_separate_buttons
	show_add_to_cart=$show_add_to_cart|default:true
	show_list_buttons=true
	but_role="action"
	block_width=true
	no_ajax=$smarty.capture.val_no_ajax
	show_product_tabs=true
}
{/hook}