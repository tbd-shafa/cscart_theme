<?php
/* Smarty version 4.3.0, created on 2024-11-20 20:31:46
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/categories/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673eb7b2bd3777_23400756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a7f322cea20d8d7ee445155ce84901a612702c2' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/categories/view.tpl',
      1 => 1732106881,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
    'tygh:views/categories/components/subcategories.tpl' => 2,
    'tygh:common/no_items.tpl' => 4,
  ),
),false)) {
function content_673eb7b2bd3777_23400756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_no_products_found','text_no_products','text_no_products_found','text_no_products'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['products']->value) {?>
<div class="product__discount">
  <div class="section-title product__discount__title">
    <h2>Sale Off</h2>
  </div>
  <div class="row">
    <div class="product__discount__slider owl-carousel">
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['list_price'] > 0.00) {?>
      <div class="col-lg-4">
        <div class="product__discount__item">
          <div
            class="product__discount__item__pic set-bg"
            data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
"
          >
            <div class="product__discount__percent">
            -<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['list_price'], ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['list_price'], ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
echo htmlspecialchars((string) round((($_prefixVariable4-$_prefixVariable5)/$_prefixVariable6)*100), ENT_QUOTES, 'UTF-8');?>
%
            </div>
            <ul class="product__item__pic__hover">
             
               <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                                <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'min_qty'=>true), 0, true);
?>

                                <div class="">

                                    <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

                                

                                    <div class="">
                                
                                        <div class="">
                                            <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                                <li>
                                                        <form
                                                        action="<?php echo htmlspecialchars((string) fn_url('checkout.add'), ENT_QUOTES, 'UTF-8');?>
"
                                                        method="post"
                                                        name="product_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                        enctype="multipart/form-data"
                                                        class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form"
                                                        >
                                                        <input
                                                            type="hidden"
                                                            name="result_ids"
                                                            value="cart_status*,wish_list*,checkout*,account_info*"
                                                        />
                                                        <input type="hidden" name="redirect_url" value="index.php" />
                                                        <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="1" />
                                                    
                                                        <div class="">
                                                            <div class="">
                                                            <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="add_to_cart_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
                                                                <input type="hidden" name="appearance[show_add_to_cart]" value="1" />
                                                                <input type="hidden" name="appearance[show_list_buttons]" value="1" />
                                                                <input type="hidden" name="appearance[but_role]" value="action" />
                                                                <input type="hidden" name="appearance[quick_view]" value="" />
                                                    
                                                            
                                                    <button 
                                                        id="button_cart_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                        class="ty-btn ty-btn__add-to-cart ty-btn__primary cm-form-dialog-closer ty-btn"
                                                    type="submit"
                                                        name="dispatch[checkout.add..<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
]"
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
                                        <a href="<?php echo htmlspecialchars((string) fn_url("product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax cm-ajax-full-render" data-ca-target-id="comparison_list,content_compare">
                                            <i class="fa fa-retweet"></i>
                                        </a>
                                    </li>

                                                        <!-- Add to Wishlist -->
                                    <li>
                                        <form action="<?php echo htmlspecialchars((string) fn_url("wishlist.add"), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax cm-ajax-full-render">
                                            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
                                            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="1">
                                            <input type="hidden" name="dispatch" value="wishlist.add">
                                            <button type="submit" class="ty-btn ty-btn__tertiary ty-btn-icon">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </form>
                                    </li>


                                   <!-- Add to Cart -->
                                    
                                    
                                        </div>
                                    
                                    </div>
                                
                                </div>
            </ul>
          </div>
          <div class="product__discount__item__text">
            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['company_name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <h5>
             <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>

              </a>
            </h5>
        
            <div class="product__item__price">
                $<?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['product']->value['price'],2), ENT_QUOTES, 'UTF-8');?>
 <span>$<?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['product']->value['list_price'],2), ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
          </div>
        </div>
      </div>
       <?php }?>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</div>


<?php }?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div id="category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:view_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['category_data']->value['description'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
    <div class="ty-wysiwyg-content ty-mb-s" <?php echo smarty_function_live_edit(array('name'=>"category:description:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/subcategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));
if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
    <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['category_data']->value['product_columns']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']);
}
$_smarty_tpl->_assignInScope('is_selected_filters', $_REQUEST['features_hash']);?>

<?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value), 0, true);
}?>

<?php } elseif (!$_smarty_tpl->tpl_vars['show_not_found_notification']->value && $_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_products_found"),'no_items_extended'=>true,'reset_url'=>fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"features_hash")), 0, false);
} elseif (!$_smarty_tpl->tpl_vars['subcategories']->value || $_smarty_tpl->tpl_vars['show_no_products_block']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_products")), 0, true);
} else { ?>
<div class="cm-pagination-container"></div>
<?php }?>
<!--category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/categories/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/categories/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['products']->value) {?>
<div class="product__discount">
  <div class="section-title product__discount__title">
    <h2>Sale Off</h2>
  </div>
  <div class="row">
    <div class="product__discount__slider owl-carousel">
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['list_price'] > 0.00) {?>
      <div class="col-lg-4">
        <div class="product__discount__item">
          <div
            class="product__discount__item__pic set-bg"
            data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
"
          >
            <div class="product__discount__percent">
            -<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['list_price'], ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');
$_prefixVariable8 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['list_price'], ENT_QUOTES, 'UTF-8');
$_prefixVariable9 = ob_get_clean();
echo htmlspecialchars((string) round((($_prefixVariable7-$_prefixVariable8)/$_prefixVariable9)*100), ENT_QUOTES, 'UTF-8');?>
%
            </div>
            <ul class="product__item__pic__hover">
             
               <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                                <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'min_qty'=>true), 0, true);
?>

                                <div class="">

                                    <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

                                

                                    <div class="">
                                
                                        <div class="">
                                            <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                                <li>
                                                        <form
                                                        action="<?php echo htmlspecialchars((string) fn_url('checkout.add'), ENT_QUOTES, 'UTF-8');?>
"
                                                        method="post"
                                                        name="product_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                        enctype="multipart/form-data"
                                                        class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form"
                                                        >
                                                        <input
                                                            type="hidden"
                                                            name="result_ids"
                                                            value="cart_status*,wish_list*,checkout*,account_info*"
                                                        />
                                                        <input type="hidden" name="redirect_url" value="index.php" />
                                                        <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="1" />
                                                    
                                                        <div class="">
                                                            <div class="">
                                                            <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="add_to_cart_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
                                                                <input type="hidden" name="appearance[show_add_to_cart]" value="1" />
                                                                <input type="hidden" name="appearance[show_list_buttons]" value="1" />
                                                                <input type="hidden" name="appearance[but_role]" value="action" />
                                                                <input type="hidden" name="appearance[quick_view]" value="" />
                                                    
                                                            
                                                    <button 
                                                        id="button_cart_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                        class="ty-btn ty-btn__add-to-cart ty-btn__primary cm-form-dialog-closer ty-btn"
                                                    type="submit"
                                                        name="dispatch[checkout.add..<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
]"
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
                                        <a href="<?php echo htmlspecialchars((string) fn_url("product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax cm-ajax-full-render" data-ca-target-id="comparison_list,content_compare">
                                            <i class="fa fa-retweet"></i>
                                        </a>
                                    </li>

                                                        <!-- Add to Wishlist -->
                                    <li>
                                        <form action="<?php echo htmlspecialchars((string) fn_url("wishlist.add"), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax cm-ajax-full-render">
                                            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
                                            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="1">
                                            <input type="hidden" name="dispatch" value="wishlist.add">
                                            <button type="submit" class="ty-btn ty-btn__tertiary ty-btn-icon">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </form>
                                    </li>


                                   <!-- Add to Cart -->
                                    
                                    
                                        </div>
                                    
                                    </div>
                                
                                </div>
            </ul>
          </div>
          <div class="product__discount__item__text">
            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['company_name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <h5>
             <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>

              </a>
            </h5>
        
            <div class="product__item__price">
                $<?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['product']->value['price'],2), ENT_QUOTES, 'UTF-8');?>
 <span>$<?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['product']->value['list_price'],2), ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
          </div>
        </div>
      </div>
       <?php }?>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</div>


<?php }?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div id="category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"categories:view_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['category_data']->value['description'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
    <div class="ty-wysiwyg-content ty-mb-s" <?php echo smarty_function_live_edit(array('name'=>"category:description:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:view_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/subcategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));
if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
    <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['category_data']->value['product_columns']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('product_columns', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']);
}
$_smarty_tpl->_assignInScope('is_selected_filters', $_REQUEST['features_hash']);?>

<?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value), 0, true);
}?>

<?php } elseif (!$_smarty_tpl->tpl_vars['show_not_found_notification']->value && $_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_products_found"),'no_items_extended'=>true,'reset_url'=>fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"features_hash")), 0, true);
} elseif (!$_smarty_tpl->tpl_vars['subcategories']->value || $_smarty_tpl->tpl_vars['show_no_products_block']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_products")), 0, true);
} else { ?>
<div class="cm-pagination-container"></div>
<?php }?>
<!--category_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"categories:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
><?php }
}
}
