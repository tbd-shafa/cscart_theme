<?php
/* Smarty version 4.3.0, created on 2024-11-18 04:29:28
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/cart_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673b332854a398_34238864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c379f1ebc36733d169842f8db1fa1679b1a8cd30' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/cart_content.tpl',
      1 => 1730207888,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/continue_shopping.tpl' => 4,
    'tygh:buttons/update_cart.tpl' => 2,
    'tygh:buttons/proceed_to_checkout.tpl' => 4,
    'tygh:common/image.tpl' => 2,
    'tygh:views/products/components/product_options.tpl' => 2,
    'tygh:common/price.tpl' => 26,
    'tygh:views/companies/components/product_company_data.tpl' => 2,
    'tygh:common/mainbox_cart.tpl' => 2,
    'tygh:buttons/clear_cart.tpl' => 2,
    'tygh:views/checkout/components/shipping_estimation.tpl' => 2,
    'tygh:views/checkout/components/promotion_coupon.tpl' => 2,
    'tygh:common/modifier.tpl' => 2,
  ),
),false)) {
function content_673b332854a398_34238864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),5=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sku','free','discount','taxes','price','quantity','discount','tax','subtotal','remove','cart_items','calculate_shipping_cost','change','calculate','calculate_shipping_cost','subtotal','shipping_cost','including_discount','order_discount','taxes','included','payment_surcharge','total_cost','or_use','sku','free','discount','taxes','price','quantity','discount','tax','subtotal','remove','cart_items','calculate_shipping_cost','change','calculate','calculate_shipping_cost','subtotal','shipping_cost','including_discount','order_discount','taxes','included','payment_surcharge','total_cost','or_use'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('result_ids', "cart*,checkout*");?>

<div id="checkout_form_wrapper">
<form name="checkout_form" class="cm-check-changes cm-ajax cm-ajax-full-render" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" id="checkout_form">
<input type="hidden" name="redirect_mode" value="cart" />
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />


<div class="buttons-container ty-cart-content__top-buttons clearfix"  style="display:none;">
    <div class="ty-float-left ty-cart-content__left-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_top_left_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_left_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_left_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <div class="ty-float-right ty-cart-content__right-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_top_right_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_right_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart",'but_meta'=>"ty-btn--recalculate-cart hidden hidden-phone hidden-tablet",'but_name'=>"dispatch[checkout.update]"), 0, false);
?>
            <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_right_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
</div> 

<?php $_smarty_tpl->_assignInScope('default_minimal_qty', 1);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cartbox", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
    <?php if (floatval($_smarty_tpl->tpl_vars['cart']->value['coupons'])) {?><input type="hidden" name="c_id" value="" /><?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:form_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:form_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:form_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<div id="cart_items">
  <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                       <table class="ty-cart-content">

                         <?php $_smarty_tpl->_assignInScope('prods', false);?>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                     <th class=""></th>
                                    <th class="">Price</th>
                                    <th class="">Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                           
                             <tbody>
                                <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_products']->value, 'product', false, 'key', 'cart_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                        <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['product']->value['object_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value ?? null : $tmp));?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:items_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:items_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                                            <?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']) {?>
                                                <tr>
                                                    <td class="shoping__cart__item" style="width:15%;">
                                                        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "cart" || $_smarty_tpl->tpl_vars['show_images']->value) {?>
                                                            <div class="ty-cart-content__image cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_icon"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                    <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['key']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, true);
?></a>
                                                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <!--product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                                        <?php }?>
                                                    </td>

                                                    <td class="shoping__cart__item" style="width:35%; color:black !important">
                                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-cart-content__product-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
                                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                            <div class="ty-cart-content__sku ty-sku cm-hidden-wrapper<?php if (!$_smarty_tpl->tpl_vars['product']->value['product_code']) {?> hidden<?php }?>" id="sku_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                                <?php echo $_smarty_tpl->__("sku");?>
: <span class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_code_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
<!--product_code_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
                                                            </div>
                                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                                                                    <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 ty-cart-content__options" id="options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                                        <input type="hidden" name="no_cache" value="no_cache" />
                                                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'product'=>$_smarty_tpl->tpl_vars['product']->value,'name'=>"cart_products",'id'=>$_smarty_tpl->tpl_vars['key']->value,'location'=>"cart",'disable_ids'=>$_smarty_tpl->tpl_vars['disable_ids']->value,'form_name'=>"checkout_form"), 0, true);
?>
                                                                    <!--options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                                                <?php }?>
                                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                                        <?php $_smarty_tpl->_assignInScope('name', "product_options_".((string)$_smarty_tpl->tpl_vars['key']->value));?>
                                                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value, null, null);?>

                                                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_info_update", null, null);?>
                                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                                                    <strong><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span></strong>
                                                                <?php } elseif (floatval($_smarty_tpl->tpl_vars['product']->value['discount']) || ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal")) {?>
                                                                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?>
                                                                        <?php $_smarty_tpl->_assignInScope('price_info_title', $_smarty_tpl->__("discount"));?>
                                                                    <?php } else { ?>
                                                                        <?php $_smarty_tpl->_assignInScope('price_info_title', $_smarty_tpl->__("taxes"));?>
                                                                    <?php }?>
                                                                    <p><a data-ca-target-id="discount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
</a></p>

                                                                    <div class="ty-group-block hidden" id="discount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                                        <table class="ty-cart-content__more-info ty-table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("price");?>
</th>
                                                                                    <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                                                                                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("discount");?>
</th><?php }?>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?><th><?php echo $_smarty_tpl->__("tax");?>
</th><?php }?>
                                                                                    <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price'],'span_id'=>"original_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td>
                                                                                    <td class="ty-center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                                                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount'],'span_id'=>"discount_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td><?php }?>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?><td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_summary']['total'],'span_id'=>"tax_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td><?php }?>
                                                                                    <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('span_id'=>"product_subtotal_2_".((string)$_smarty_tpl->tpl_vars['key']->value),'value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'class'=>"none"), 0, true);
?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                <?php }?>
                                                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0, true);
?>
                                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                                        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_info_update'))) {?>
                                                            <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_info_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_info_update');?>

                                                            <!--product_info_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                                                        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value))) {?>
                                                        <div id="options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-options ty-group-block">
                                                            <div class="ty-group-block__arrow">
                                                                <span class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                                                            </div>
                                                            <bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi>
                                                        </div>
                                                        <?php }?>
                                                    </td>

                                                    <td class="shoping__cart__price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"ty-sub-price"), 0, true);
?>
                                                    <!--price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>

                                                    <td class="shoping__cart__quantity ty-cart-content__qty <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?> quantity-disabled<?php }?>">
                                                        <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value == true && $_smarty_tpl->tpl_vars['cart']->value['amount'] != 1) {?>
                                                            <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");?>
                                                        <?php }?>

                                                        <div class="quantity cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?> changer<?php }?>" id="quantity_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                            <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][extra][exclude_from_calculate]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>

                                                            <label for="amount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"></label>
                                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>

                                                            <?php } else { ?>
                                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                                                                    <div class="ty-center ty-value-changer cm-value-changer">
                                                                    <a class="cm-increase ty-value-changer__increase">&#43;</a>
                                                                <?php }?>
                                                                <input type="text" size="3" id="amount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="ty-value-changer__input cm-amount cm-value-decimal"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step'] > 1) {?> data-ca-step="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-min-qty="<?php if (!$_smarty_tpl->tpl_vars['product']->value['min_qty']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_minimal_qty']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['min_qty'], ENT_QUOTES, 'UTF-8');
}?>" />
                                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                                                                    <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                                                                    </div>
                                                                <?php }?>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                                                <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y") {?>
                                                                <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][is_edp]" value="Y" />
                                                            <?php }?>
                                                        <!--quantity_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                                    </td>
                                                    

                                                    <td class="shoping__cart__total  cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'span_id'=>"product_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"price"), 0, true);
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A") {?>
                                                            <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][price]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['base_price'], ENT_QUOTES, 'UTF-8');?>
" />
                                                        <?php }?>
                                                    <!--price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
                                                    <td class="shoping__cart__item__close">
                                                    <?php if (!$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-cart-content__product-delete ty-delete-big" href="<?php echo htmlspecialchars((string) fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" title="<?php echo $_smarty_tpl->__("remove");?>
"><span class="icon_close"></span></a><?php }?>
                                                                  
                                                     </td>
                                                </tr>
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:items_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>

                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:extra_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:extra_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:extra_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
<!--cart_items--></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("cart_items"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cartbox')), 0, false);
?>


</form>
<!--checkout_form_wrapper--></div>
<div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                       <div class="ty-float-left ty-cart-content__left-buttons">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_bottom_left_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_left_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0, true);
?>
                              
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_left_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                         <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/clear_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.clear",'but_role'=>"text",'but_meta'=>"cm-confirm ty-cart-content__clear-button"), 0, false);
?>
                       
                    </div>
                </div>
                 <div class="col-lg-12">
                    <?php if ($_smarty_tpl->tpl_vars['location']->value == "cart" && $_smarty_tpl->tpl_vars['cart']->value['shipping_required'] == true && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['estimate_shipping_cost'] == smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "shipping_estimation", null, null);?>
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-flight ty-cart-total__icon-estimation"),$_smarty_tpl);?>
<a id="opener_shipping_estimation_block" class="cm-dialog-opener cm-dialog-auto-size ty-cart-total__a-estimation" data-ca-target-id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
" href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {
echo $_smarty_tpl->__("change");
} else {
echo $_smarty_tpl->__("calculate");
}?></a>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <div class="hidden" id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
">
                                <div class="ty-cart-content__estimation">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"popup",'result_ids'=>"shipping_estimation_link"), 0, false);
?>
                                </div>
                            </div>
                        <?php }?>
                        
                 </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            
                            
                            <div class="" id="checkout_totals">
                                <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
                                    <div class="">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/promotion_coupon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        </div>
                                <?php }?>

                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li><?php echo $_smarty_tpl->__("subtotal");?>
 <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_subtotal']), 0, true);
?></span></li>
                           
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:checkout_totals"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:checkout_totals"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_assignInScope('show_shipping_estimation', ($_smarty_tpl->tpl_vars['location']->value != "cart" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['estimate_shipping_cost'] == smarty_modifier_enum("YesNo::YES")));?>
                                <?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping_required'] == true) {?>
                                    <li>
                                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {?>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['shipping'], 'shipping', false, 'shipping_id', 'f_shipp', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['total'];
?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] : null)) {?>, <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                       
                                            <?php if ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
                                               (<?php echo smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_estimation'));?>
)
                                            <?php }?>
                                      
                                        
                                    <?php } elseif ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
                                        <?php echo $_smarty_tpl->__("shipping_cost");?>

                                        <span class=""><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_estimation');?>
</span>
                                    <?php }?>
                                      <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost']), 0, true);
?><span>
                                    </li>
                                <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:checkout_totals"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
      
    
                            <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['discount']))) {?>
                            <li class="">
                                <?php echo $_smarty_tpl->__("including_discount");?>

                                <span class=""><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['discount'])), 0, true);
?></span>
                            </li>
                            
                            <?php }?>

                            <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['subtotal_discount']))) {?>
                            <li class="">
                                 <?php echo $_smarty_tpl->__("order_discount");?>

                                <span class=""><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['subtotal_discount'])), 0, true);
?></span>
                            </li>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:checkout_discount"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:checkout_discount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:checkout_discount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes']) {?>
                            <li class="">
                                <?php echo $_smarty_tpl->__("taxes");?>

                            </li>
                            
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['taxes'], 'tax');
$_smarty_tpl->tpl_vars['tax']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->do_else = false;
?>
                            <li class="">
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->tpl_vars['tax']->value['rate_value'],'mod_type'=>$_smarty_tpl->tpl_vars['tax']->value['rate_type']), 0, true);
if ($_smarty_tpl->tpl_vars['tax']->value['price_includes_tax'] == "Y" && ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] != "Y" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] == "subtotal")) {?>&nbsp;<?php echo $_smarty_tpl->__("included");
}?>)
                                <span class=""><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['tax']->value['tax_subtotal']), 0, true);
?></span>
                            </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'] && !$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
                            <li class="" id="payment_surcharge_line">
                                <?php $_smarty_tpl->_assignInScope('payment_data', fn_get_payment_method_data($_smarty_tpl->tpl_vars['cart']->value['payment_id']));?>
                                <span class=""><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cart']->value['payment_surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['payment_data']->value['payment']) {?>&nbsp;(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment_data']->value['payment'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>:</span>
                                <span class=""><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'],'span_id'=>"payment_surcharge_value"), 0, true);
?></span>
                            </li>
                            <?php echo smarty_function_math(array('equation'=>"x+y",'x'=>$_smarty_tpl->tpl_vars['cart']->value['total'],'y'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'],'assign'=>"_total"),$_smarty_tpl);?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "_total", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_total']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php }?>
                            <li class="">
                                <?php echo $_smarty_tpl->__("total_cost");?>

                                <span>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = (($tmp = $_smarty_tpl->tpl_vars['_total']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, '_total') ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] ?? null : $tmp),'span_id'=>"cart_total",'class'=>''), 0, true);
?>
                                </span>
                            </li>
                        </ul>
                        
                       <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_bottom_right_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_right_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('link_href', "checkout.checkout");?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_right_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                </div>
            </div>



<?php if ($_smarty_tpl->tpl_vars['checkout_add_buttons']->value) {?>
    <div class="ty-cart-content__payment-methods payment-methods" id="payment-methods">
        <span class="ty-cart-content__payment-methods-title payment-metgods-or"><?php echo $_smarty_tpl->__("or_use");?>
</span>
        <table class="ty-cart-content__payment-methods-block">
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['checkout_add_buttons']->value, 'checkout_add_button');
$_smarty_tpl->tpl_vars['checkout_add_button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['checkout_add_button']->value) {
$_smarty_tpl->tpl_vars['checkout_add_button']->do_else = false;
?>
                    <td class="ty-cart-content__payment-methods-item"><?php echo $_smarty_tpl->tpl_vars['checkout_add_button']->value;?>
</td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
    </table>
    <!--payment-methods--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/cart_content.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/cart_content.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('result_ids', "cart*,checkout*");?>

<div id="checkout_form_wrapper">
<form name="checkout_form" class="cm-check-changes cm-ajax cm-ajax-full-render" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" id="checkout_form">
<input type="hidden" name="redirect_mode" value="cart" />
<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />


<div class="buttons-container ty-cart-content__top-buttons clearfix"  style="display:none;">
    <div class="ty-float-left ty-cart-content__left-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_top_left_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_left_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0, true);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_left_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <div class="ty-float-right ty-cart-content__right-buttons">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_top_right_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_right_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart",'but_meta'=>"ty-btn--recalculate-cart hidden hidden-phone hidden-tablet",'but_name'=>"dispatch[checkout.update]"), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_top_right_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
</div> 

<?php $_smarty_tpl->_assignInScope('default_minimal_qty', 1);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cartbox", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout") {?>
    <?php if (floatval($_smarty_tpl->tpl_vars['cart']->value['coupons'])) {?><input type="hidden" name="c_id" value="" /><?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:form_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:form_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:form_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<div id="cart_items">
  <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                       <table class="ty-cart-content">

                         <?php $_smarty_tpl->_assignInScope('prods', false);?>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                     <th class=""></th>
                                    <th class="">Price</th>
                                    <th class="">Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                           
                             <tbody>
                                <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_products']->value, 'product', false, 'key', 'cart_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                        <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['product']->value['object_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value ?? null : $tmp));?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:items_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:items_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                                            <?php if (!$_smarty_tpl->tpl_vars['cart']->value['products'][$_smarty_tpl->tpl_vars['key']->value]['extra']['parent']) {?>
                                                <tr>
                                                    <td class="shoping__cart__item" style="width:15%;">
                                                        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "cart" || $_smarty_tpl->tpl_vars['show_images']->value) {?>
                                                            <div class="ty-cart-content__image cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_icon"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                    <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['key']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, true);
?></a>
                                                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <!--product_image_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                                        <?php }?>
                                                    </td>

                                                    <td class="shoping__cart__item" style="width:35%; color:black !important">
                                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-cart-content__product-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
                                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                            <div class="ty-cart-content__sku ty-sku cm-hidden-wrapper<?php if (!$_smarty_tpl->tpl_vars['product']->value['product_code']) {?> hidden<?php }?>" id="sku_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                                <?php echo $_smarty_tpl->__("sku");?>
: <span class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_code_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
<!--product_code_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
                                                            </div>
                                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                                                                    <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 ty-cart-content__options" id="options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                                        <input type="hidden" name="no_cache" value="no_cache" />
                                                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'product'=>$_smarty_tpl->tpl_vars['product']->value,'name'=>"cart_products",'id'=>$_smarty_tpl->tpl_vars['key']->value,'location'=>"cart",'disable_ids'=>$_smarty_tpl->tpl_vars['disable_ids']->value,'form_name'=>"checkout_form"), 0, true);
?>
                                                                    <!--options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                                                <?php }?>
                                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                                        <?php $_smarty_tpl->_assignInScope('name', "product_options_".((string)$_smarty_tpl->tpl_vars['key']->value));?>
                                                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value, null, null);?>

                                                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_info_update", null, null);?>
                                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                                                    <strong><span class="price"><?php echo $_smarty_tpl->__("free");?>
</span></strong>
                                                                <?php } elseif (floatval($_smarty_tpl->tpl_vars['product']->value['discount']) || ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal")) {?>
                                                                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?>
                                                                        <?php $_smarty_tpl->_assignInScope('price_info_title', $_smarty_tpl->__("discount"));?>
                                                                    <?php } else { ?>
                                                                        <?php $_smarty_tpl->_assignInScope('price_info_title', $_smarty_tpl->__("taxes"));?>
                                                                    <?php }?>
                                                                    <p><a data-ca-target-id="discount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size" rel="nofollow"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
</a></p>

                                                                    <div class="ty-group-block hidden" id="discount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price_info_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                                        <table class="ty-cart-content__more-info ty-table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("price");?>
</th>
                                                                                    <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                                                                                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("discount");?>
</th><?php }?>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?><th><?php echo $_smarty_tpl->__("tax");?>
</th><?php }?>
                                                                                    <th class="ty-cart-content__more-info-title"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price'],'span_id'=>"original_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td>
                                                                                    <td class="ty-center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                                                    <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['discount'])) {?><td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount'],'span_id'=>"discount_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td><?php }?>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?><td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_summary']['total'],'span_id'=>"tax_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"none"), 0, true);
?></td><?php }?>
                                                                                    <td><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('span_id'=>"product_subtotal_2_".((string)$_smarty_tpl->tpl_vars['key']->value),'value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'class'=>"none"), 0, true);
?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                <?php }?>
                                                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0, true);
?>
                                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                                        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_info_update'))) {?>
                                                            <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_info_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_info_update');?>

                                                            <!--product_info_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                                                        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value))) {?>
                                                        <div id="options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-options ty-group-block">
                                                            <div class="ty-group-block__arrow">
                                                                <span class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                                                            </div>
                                                            <bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi>
                                                        </div>
                                                        <?php }?>
                                                    </td>

                                                    <td class="shoping__cart__price cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"ty-sub-price"), 0, true);
?>
                                                    <!--price_display_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>

                                                    <td class="shoping__cart__quantity ty-cart-content__qty <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?> quantity-disabled<?php }?>">
                                                        <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value == true && $_smarty_tpl->tpl_vars['cart']->value['amount'] != 1) {?>
                                                            <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");?>
                                                        <?php }?>

                                                        <div class="quantity cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?> changer<?php }?>" id="quantity_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                            <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][extra][exclude_from_calculate]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>

                                                            <label for="amount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"></label>
                                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>

                                                            <?php } else { ?>
                                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                                                                    <div class="ty-center ty-value-changer cm-value-changer">
                                                                    <a class="cm-increase ty-value-changer__increase">&#43;</a>
                                                                <?php }?>
                                                                <input type="text" size="3" id="amount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="ty-value-changer__input cm-amount cm-value-decimal"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step'] > 1) {?> data-ca-step="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-min-qty="<?php if (!$_smarty_tpl->tpl_vars['product']->value['min_qty']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_minimal_qty']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['min_qty'], ENT_QUOTES, 'UTF-8');
}?>" />
                                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                                                                    <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                                                                    </div>
                                                                <?php }?>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y" || $_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?>
                                                                <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y") {?>
                                                                <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][is_edp]" value="Y" />
                                                            <?php }?>
                                                        <!--quantity_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                                    </td>
                                                    

                                                    <td class="shoping__cart__total  cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal'],'span_id'=>"product_subtotal_".((string)$_smarty_tpl->tpl_vars['key']->value),'class'=>"price"), 0, true);
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A") {?>
                                                            <input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][price]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['base_price'], ENT_QUOTES, 'UTF-8');?>
" />
                                                        <?php }?>
                                                    <!--price_subtotal_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></td>
                                                    <td class="shoping__cart__item__close">
                                                    <?php if (!$_smarty_tpl->tpl_vars['product']->value['exclude_from_calculate']) {?><a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 ty-cart-content__product-delete ty-delete-big" href="<?php echo htmlspecialchars((string) fn_url("checkout.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_mode=".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart" title="<?php echo $_smarty_tpl->__("remove");?>
"><span class="icon_close"></span></a><?php }?>
                                                                  
                                                     </td>
                                                </tr>
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:items_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>

                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:extra_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:extra_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:extra_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
<!--cart_items--></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("cart_items"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cartbox')), 0, true);
?>


</form>
<!--checkout_form_wrapper--></div>
<div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                       <div class="ty-float-left ty-cart-content__left-buttons">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_bottom_left_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_left_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0, true);
?>
                              
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_left_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                         <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/clear_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.clear",'but_role'=>"text",'but_meta'=>"cm-confirm ty-cart-content__clear-button"), 0, true);
?>
                       
                    </div>
                </div>
                 <div class="col-lg-12">
                    <?php if ($_smarty_tpl->tpl_vars['location']->value == "cart" && $_smarty_tpl->tpl_vars['cart']->value['shipping_required'] == true && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['estimate_shipping_cost'] == smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "shipping_estimation", null, null);?>
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-flight ty-cart-total__icon-estimation"),$_smarty_tpl);?>
<a id="opener_shipping_estimation_block" class="cm-dialog-opener cm-dialog-auto-size ty-cart-total__a-estimation" data-ca-target-id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
" href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {
echo $_smarty_tpl->__("change");
} else {
echo $_smarty_tpl->__("calculate");
}?></a>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <div class="hidden" id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
">
                                <div class="ty-cart-content__estimation">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"popup",'result_ids'=>"shipping_estimation_link"), 0, true);
?>
                                </div>
                            </div>
                        <?php }?>
                        
                 </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            
                            
                            <div class="" id="checkout_totals">
                                <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
                                    <div class="">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/promotion_coupon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        </div>
                                <?php }?>

                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:payment_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:payment_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:payment_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li><?php echo $_smarty_tpl->__("subtotal");?>
 <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_subtotal']), 0, true);
?></span></li>
                           
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:checkout_totals"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:checkout_totals"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_assignInScope('show_shipping_estimation', ($_smarty_tpl->tpl_vars['location']->value != "cart" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['estimate_shipping_cost'] == smarty_modifier_enum("YesNo::YES")));?>
                                <?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping_required'] == true) {?>
                                    <li>
                                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {?>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['shipping'], 'shipping', false, 'shipping_id', 'f_shipp', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['total'];
?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] : null)) {?>, <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                       
                                            <?php if ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
                                               (<?php echo smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_estimation'));?>
)
                                            <?php }?>
                                      
                                        
                                    <?php } elseif ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
                                        <?php echo $_smarty_tpl->__("shipping_cost");?>

                                        <span class=""><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_estimation');?>
</span>
                                    <?php }?>
                                      <span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_shipping_cost']), 0, true);
?><span>
                                    </li>
                                <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:checkout_totals"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
      
    
                            <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['discount']))) {?>
                            <li class="">
                                <?php echo $_smarty_tpl->__("including_discount");?>

                                <span class=""><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['discount'])), 0, true);
?></span>
                            </li>
                            
                            <?php }?>

                            <?php if ((floatval($_smarty_tpl->tpl_vars['cart']->value['subtotal_discount']))) {?>
                            <li class="">
                                 <?php echo $_smarty_tpl->__("order_discount");?>

                                <span class=""><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['cart']->value['subtotal_discount'])), 0, true);
?></span>
                            </li>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:checkout_discount"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:checkout_discount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:checkout_discount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['taxes']) {?>
                            <li class="">
                                <?php echo $_smarty_tpl->__("taxes");?>

                            </li>
                            
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['taxes'], 'tax');
$_smarty_tpl->tpl_vars['tax']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->do_else = false;
?>
                            <li class="">
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->tpl_vars['tax']->value['rate_value'],'mod_type'=>$_smarty_tpl->tpl_vars['tax']->value['rate_type']), 0, true);
if ($_smarty_tpl->tpl_vars['tax']->value['price_includes_tax'] == "Y" && ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] != "Y" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] == "subtotal")) {?>&nbsp;<?php echo $_smarty_tpl->__("included");
}?>)
                                <span class=""><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['tax']->value['tax_subtotal']), 0, true);
?></span>
                            </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'] && !$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
                            <li class="" id="payment_surcharge_line">
                                <?php $_smarty_tpl->_assignInScope('payment_data', fn_get_payment_method_data($_smarty_tpl->tpl_vars['cart']->value['payment_id']));?>
                                <span class=""><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cart']->value['payment_surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['payment_data']->value['payment']) {?>&nbsp;(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment_data']->value['payment'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>:</span>
                                <span class=""><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'],'span_id'=>"payment_surcharge_value"), 0, true);
?></span>
                            </li>
                            <?php echo smarty_function_math(array('equation'=>"x+y",'x'=>$_smarty_tpl->tpl_vars['cart']->value['total'],'y'=>$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'],'assign'=>"_total"),$_smarty_tpl);?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "_total", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_total']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php }?>
                            <li class="">
                                <?php echo $_smarty_tpl->__("total_cost");?>

                                <span>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = (($tmp = $_smarty_tpl->tpl_vars['_total']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, '_total') ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] ?? null : $tmp),'span_id'=>"cart_total",'class'=>''), 0, true);
?>
                                </span>
                            </li>
                        </ul>
                        
                       <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content_bottom_right_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_right_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('link_href', "checkout.checkout");?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content_bottom_right_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                </div>
            </div>



<?php if ($_smarty_tpl->tpl_vars['checkout_add_buttons']->value) {?>
    <div class="ty-cart-content__payment-methods payment-methods" id="payment-methods">
        <span class="ty-cart-content__payment-methods-title payment-metgods-or"><?php echo $_smarty_tpl->__("or_use");?>
</span>
        <table class="ty-cart-content__payment-methods-block">
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['checkout_add_buttons']->value, 'checkout_add_button');
$_smarty_tpl->tpl_vars['checkout_add_button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['checkout_add_button']->value) {
$_smarty_tpl->tpl_vars['checkout_add_button']->do_else = false;
?>
                    <td class="ty-cart-content__payment-methods-item"><?php echo $_smarty_tpl->tpl_vars['checkout_add_button']->value;?>
</td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
    </table>
    <!--payment-methods--></div>
<?php }
}
}
}
