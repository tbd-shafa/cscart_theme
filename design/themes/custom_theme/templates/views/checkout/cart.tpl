{script src="js/tygh/exceptions.js"}
{script src="js/tygh/checkout.js"}
{script src="js/tygh/cart_content.js"}

<script src="{$config.current_location}/design/themes/custom_theme/js/main.js"></script>
 <style>
 .hero.hero-normal .hero__categories ul {
   
    width: 90% !important;
    padding-left:50px;
 }
 
.custom_breadcome {
    width: calc(100vw - 8px);
    margin-left: calc((1170px - 100vw) / 2);
} 
</style>
 <div class="custom_breadcome">
     <section class="breadcrumb-section set-bg" data-setbg="{$config.current_location}/design/themes/custom_theme/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="">Home</a>
                            Shopping Cart
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
<div id="cart_main">
    {if !$cart|fn_cart_is_empty}
        {include file="views/checkout/components/cart_content.tpl"}
    {else}
        <p class="ty-no-items">{__("text_cart_empty")}</p>

        <div class="buttons-container wrap">
            {include file="buttons/continue_shopping.tpl" but_href=$continue_url|fn_url but_role="submit"}
        </div>
    {/if}
<!--cart_main--></div>
