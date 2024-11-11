<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:08:24
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/product_templates/default_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731f3b88a2bf5_57222442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffc94140c1411388632f07d0f2b243487a351ab2' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/product_templates/default_template.tpl',
      1 => 1731326891,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
    'tygh:views/products/components/product_features_short_list.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
    'tygh:views/tabs/components/product_popup_tabs.tpl' => 2,
    'tygh:views/tabs/components/product_tabs.tpl' => 2,
  ),
),false)) {
function content_6731f3b88a2bf5_57222442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','view_details','description','add_to_cart','view_details','description'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<style>
.product__details__pic__item--large {
    width: 555px; 
   
    height: 576px;
}
</style>
<section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large"
                                    src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" 
                                    alt="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
                                    width="555" height="576">
                            </div>
                        <?php }?>

                        <div class="product__details__pic__slider owl-carousel">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                                <img data-imgbigurl="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
"
                                    src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" 
                                    alt="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
">
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                   
                        <div class="">
                            <div class="clearfix">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:view_main_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart")), 0, false);
?>
                                    <div class="">
                                        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:main_info_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:main_info_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                                                <h3 class="" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></h3>
                                            <?php }?>

                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:brand"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:brand_default"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:brand_default"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <div class="brand">
                                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0, false);
?>
                                                    </div>
                                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:brand_default"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:main_info_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('discount_label', "discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                         <div class="product__details__price">
                                            <div class="<?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>prices-container <?php }?>price-wrap">
                                                <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>
                                                    <div class="ty-product-prices">
                                                        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>
                                                <?php }?>

                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:main_price"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:main_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value))) {?>
                                                        <div class="ty-product-block__price-actual">
                                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>

                                                        </div>
                                                    <?php }?>
                                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:main_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                                <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>
                                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                                                    </div>
                                                <?php }?>
                                            </div>
                                         </div>
                                       <?php echo $_smarty_tpl->tpl_vars['product']->value['full_description'];?>

                                       
                                       <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                                        <div class="ty-product-block__field-group">
                                            <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


                                            <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>


                                            <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['min_qty']->value);?>

                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                                        
                                       <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);
}?>
                                        <div class="ty-product-block__button">
                                            <?php if ($_smarty_tpl->tpl_vars['show_details_button']->value) {?>
                                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>$_smarty_tpl->__("view_details"),'but_role'=>"submit"), 0, false);
?>
                                            <?php }?>

                                            <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>


                                            <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>

                                            
                                        </div>
                                        <ul>
                                        </ul>
                                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                                        <div class="ty-product-block__option">
                                            <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value);?>

                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

                                        <div class="ty-product-block__advanced-option clearfix">
                                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                                            <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_options']->value);?>

                                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                                        </div>

                                        <div class="ty-product-block__sku">
                                            <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                                        </div>

                                        

                                        <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_edp']->value);?>


                                        <?php if ($_smarty_tpl->tpl_vars['show_descr']->value) {?>
                                        <?php $_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <h3 class="ty-product-block__description-title"><?php echo $_smarty_tpl->__("description");?>
</h3>
                                            <div class="ty-product-block__description"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);?>
</div>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:promo_text"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['promo_text']) {?>
                                             <li><b>Shipping</b> <span><?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>
</span></li>
                                              
                                           
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:promo_text"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_detail_bottom"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popupsbox_content');?>

                                        <?php }?>
                                    </div>
                                <?php }?>

                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:view_main_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </div>

                            <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'hide_form_changed') == "Y") {?>
                                <?php $_smarty_tpl->_assignInScope('hide_form', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'orig_val_hide_form'));?>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                    <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
                                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content'),'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0, true);
?>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content');?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                </div>
            </div>
        </div>
</section>



<div class="product-details">
</div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
$_smarty_tpl->_assignInScope('details_page', true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_templates/default_template.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_templates/default_template.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<style>
.product__details__pic__item--large {
    width: 555px; 
   
    height: 576px;
}
</style>
<section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large"
                                    src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" 
                                    alt="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
                                    width="555" height="576">
                            </div>
                        <?php }?>

                        <div class="product__details__pic__slider owl-carousel">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                                <img data-imgbigurl="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
"
                                    src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" 
                                    alt="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
">
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                   
                        <div class="">
                            <div class="clearfix">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:view_main_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart")), 0, true);
?>
                                    <div class="">
                                        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:main_info_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:main_info_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                                                <h3 class="" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></h3>
                                            <?php }?>

                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:brand"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:brand_default"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:brand_default"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <div class="brand">
                                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0, true);
?>
                                                    </div>
                                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:brand_default"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:main_info_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('discount_label', "discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                         <div class="product__details__price">
                                            <div class="<?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>prices-container <?php }?>price-wrap">
                                                <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>
                                                    <div class="ty-product-prices">
                                                        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>
                                                <?php }?>

                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:main_price"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:main_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value))) {?>
                                                        <div class="ty-product-block__price-actual">
                                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>

                                                        </div>
                                                    <?php }?>
                                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:main_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                                <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value)) || smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value))) {?>
                                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                                                    </div>
                                                <?php }?>
                                            </div>
                                         </div>
                                       <?php echo $_smarty_tpl->tpl_vars['product']->value['full_description'];?>

                                       
                                       <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                                        <div class="ty-product-block__field-group">
                                            <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


                                            <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>


                                            <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['min_qty']->value);?>

                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                                        
                                       <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);
}?>
                                        <div class="ty-product-block__button">
                                            <?php if ($_smarty_tpl->tpl_vars['show_details_button']->value) {?>
                                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>$_smarty_tpl->__("view_details"),'but_role'=>"submit"), 0, true);
?>
                                            <?php }?>

                                            <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>


                                            <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>

                                            
                                        </div>
                                        <ul>
                                        </ul>
                                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                                        <div class="ty-product-block__option">
                                            <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value);?>

                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

                                        <div class="ty-product-block__advanced-option clearfix">
                                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                                            <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_options']->value);?>

                                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                                        </div>

                                        <div class="ty-product-block__sku">
                                            <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                                        </div>

                                        

                                        <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_edp']->value);?>


                                        <?php if ($_smarty_tpl->tpl_vars['show_descr']->value) {?>
                                        <?php $_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <h3 class="ty-product-block__description-title"><?php echo $_smarty_tpl->__("description");?>
</h3>
                                            <div class="ty-product-block__description"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);?>
</div>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:promo_text"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['promo_text']) {?>
                                             <li><b>Shipping</b> <span><?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>
</span></li>
                                              
                                           
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:promo_text"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_detail_bottom"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popupsbox_content');?>

                                        <?php }?>
                                    </div>
                                <?php }?>

                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:view_main_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </div>

                            <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'hide_form_changed') == "Y") {?>
                                <?php $_smarty_tpl->_assignInScope('hide_form', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'orig_val_hide_form'));?>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                    <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
                                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content'),'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0, true);
?>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content');?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                </div>
            </div>
        </div>
</section>



<div class="product-details">
</div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
$_smarty_tpl->_assignInScope('details_page', true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
