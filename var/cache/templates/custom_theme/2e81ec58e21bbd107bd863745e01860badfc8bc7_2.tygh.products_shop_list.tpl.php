<?php
/* Smarty version 4.3.0, created on 2024-11-21 05:22:43
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/list_templates/products_shop_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673f3423dc78a2_67420955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e81ec58e21bbd107bd863745e01860badfc8bc7' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/list_templates/products_shop_list.tpl',
      1 => 1732186279,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 4,
    'tygh:views/products/components/sorting.tpl' => 2,
    'tygh:common/product_data.tpl' => 2,
  ),
),false)) {
function content_673f3423dc78a2_67420955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><style>
img.sp-img {
    height: 270px;
    width: 270px;
}
</style>
<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
 <div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key', 'products', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'];
?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "capt_options_vs_qty", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
            <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'min_qty'=>true), 0, true);
?>

            <div class="clearfix col-lg-4 col-md-6 col-sm-6 mb-4">

                <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

                <?php if ($_smarty_tpl->tpl_vars['bulk_addition']->value) {?>
                    <input class="cm-item ty-float-right ty-product-list__bulk" type="checkbox" id="bulk_addition_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php if ($_smarty_tpl->tpl_vars['js_product_var']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" <?php if (($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "R" && $_smarty_tpl->tpl_vars['product']->value['price'] == 0)) {?>disabled="disabled"<?php }?> />
                <?php }?>

                
                <div class="">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_block_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_block_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['js_product_var']->value) {?>
                        <input type="hidden" id="product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" />
                    <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['item_number']->value == "Y") {?><strong><?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
.&nbsp;</strong><?php }?>
                    <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                                            <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_price_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php if (!$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'capt_options_vs_qty')) {?>
                        <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php }?>

                        <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <div class="product__item">
                                <div class="product__item__pic set-bg">
                                   
                                  <img class="sp-img" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
"  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
">
                        
                                    <ul class="product__item__pic__hover">
                                    
                                    <li>
                                        <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="add_to_cart_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
                                            <input type="hidden" name="appearance[show_add_to_cart]" value="1" />
                                            <input type="hidden" name="appearance[show_list_buttons]" value="1" />
                                            <input type="hidden" name="appearance[but_role]" value="action" />
                                            <input type="hidden" name="appearance[quick_view]" value="" />

                                            <button
                                                id="button_cart_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
"
                                                class="primary-btn ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer ty-btn"
                                                type="submit"
                                                name="dispatch[checkout.add..<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                            >
                                              <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </div>
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
                                      
                                        
                                        
                                    </ul>
                                </div>
  
                                <div class="product__item__text">
                                    <h6><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a></h6>
                                    <h5>$<?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['product']->value['price'],2), ENT_QUOTES, 'UTF-8');?>
</h5>
                                </div>
                            </div>
                    
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_block_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                
                </div>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] : null)) {?>
            <hr />
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['bulk_addition']->value) {?>
        <?php echo '<script'; ?>
>
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
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('force_ajax'=>$_smarty_tpl->tpl_vars['force_ajax']->value), 0, true);
?>
    <?php }?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/products_shop_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/products_shop_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><style>
img.sp-img {
    height: 270px;
    width: 270px;
}
</style>
<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>
 <div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key', 'products', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'];
?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "capt_options_vs_qty", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
            <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'min_qty'=>true), 0, true);
?>

            <div class="clearfix col-lg-4 col-md-6 col-sm-6 mb-4">

                <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

                <?php if ($_smarty_tpl->tpl_vars['bulk_addition']->value) {?>
                    <input class="cm-item ty-float-right ty-product-list__bulk" type="checkbox" id="bulk_addition_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php if ($_smarty_tpl->tpl_vars['js_product_var']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" <?php if (($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "R" && $_smarty_tpl->tpl_vars['product']->value['price'] == 0)) {?>disabled="disabled"<?php }?> />
                <?php }?>

                
                <div class="">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_block_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_block_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['js_product_var']->value) {?>
                        <input type="hidden" id="product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" />
                    <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['item_number']->value == "Y") {?><strong><?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
.&nbsp;</strong><?php }?>
                    <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                                            <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_price_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php if (!$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'capt_options_vs_qty')) {?>
                        <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php }?>

                        <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <div class="product__item">
                                <div class="product__item__pic set-bg">
                                   
                                  <img class="sp-img" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
"  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
">
                        
                                    <ul class="product__item__pic__hover">
                                    
                                    <li>
                                        <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="add_to_cart_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
                                            <input type="hidden" name="appearance[show_add_to_cart]" value="1" />
                                            <input type="hidden" name="appearance[show_list_buttons]" value="1" />
                                            <input type="hidden" name="appearance[but_role]" value="action" />
                                            <input type="hidden" name="appearance[quick_view]" value="" />

                                            <button
                                                id="button_cart_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
"
                                                class="primary-btn ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer ty-btn"
                                                type="submit"
                                                name="dispatch[checkout.add..<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                            >
                                              <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </div>
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
                                      
                                        
                                        
                                    </ul>
                                </div>
  
                                <div class="product__item__text">
                                    <h6><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a></h6>
                                    <h5>$<?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['product']->value['price'],2), ENT_QUOTES, 'UTF-8');?>
</h5>
                                </div>
                            </div>
                    
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_block_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                
                </div>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] : null)) {?>
            <hr />
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['bulk_addition']->value) {?>
        <?php echo '<script'; ?>
>
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
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('force_ajax'=>$_smarty_tpl->tpl_vars['force_ajax']->value), 0, true);
?>
    <?php }?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
