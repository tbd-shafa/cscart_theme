      <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    
<link rel="stylesheet" type="text/css" href="{$config.current_location}/design/themes/custom_theme/styles/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="{$config.current_location}/design/themes/custom_theme/styles/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="{$config.current_location}/design/themes/custom_theme/styles/css/elegant-icons.css" />
<link rel="stylesheet" type="text/css" href="{$config.current_location}/design/themes/custom_theme/styles/css/nice-select.css" />
<link rel="stylesheet" type="text/css" href="{$config.current_location}/design/themes/custom_theme/styles/css/jquery-ui.min.css" />
<link rel="stylesheet" type="text/css" href="{$config.current_location}/design/themes/custom_theme/styles/css/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="{$config.current_location}/design/themes/custom_theme/styles/css/slicknav.min.css" />
<link rel="stylesheet" type="text/css" href="{$config.current_location}/design/themes/custom_theme/styles/css/style.css" />
<link rel="stylesheet" type="text/css" href="{$config.current_location}/design/themes/custom_theme/styles/css/custom.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <section class="breadcrumb-section set-bg" data-setbg="{$config.current_location}/design/themes/custom_theme/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                    
                                        <img src="{$config.current_location}/design/themes/custom_theme/img/cart/cart-1.jpg" alt="">
                                        <h5>Vegetable’s Package</h5>
                                    </td>
                                    
                                    <td class="shoping__cart__price">
                                        $55.00
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                            
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        $110.00
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{$config.current_location}/design/themes/custom_theme/img/cart/cart-2.jpg" alt="">
                                        <h5>Fresh Garden Vegetable</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        $39.00
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        $39.99
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{$config.current_location}/design/themes/custom_theme/img/cart/cart-3.jpg" alt="">
                                        <h5>Organic Bananas</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        $69.00
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        $69.99
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Clear Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>$454.98</span></li>
                            <li>Total <span>$454.98</span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 

    {** Link JS Files **}
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery-3.3.1.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/bootstrap.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery.nice-select.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery-ui.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/jquery.slicknav.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/mixitup.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/owl.carousel.min.js"></script>
<script src="{$config.current_location}/design/themes/custom_theme/js/main.js"></script>