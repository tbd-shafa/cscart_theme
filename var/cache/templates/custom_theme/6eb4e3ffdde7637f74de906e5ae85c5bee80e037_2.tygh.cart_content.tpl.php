<?php
/* Smarty version 4.3.0, created on 2024-11-11 21:31:34
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/cart_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6732e836415ee9_43710285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eb4e3ffdde7637f74de906e5ae85c5bee80e037' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/cart_content.tpl',
      1 => 1730264710,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 4,
    'tygh:common/image.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
    'tygh:buttons/proceed_to_checkout.tpl' => 2,
  ),
),false)) {
function content_6732e836415ee9_43710285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('items','for','cart_is_empty','cart_is_empty','view_cart','checkout','items','for','cart_is_empty','cart_is_empty','view_cart','checkout'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('dropdown_id', $_smarty_tpl->tpl_vars['block']->value['snapping_id']);
$_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ty-dropdown-box top-cart-contents" id="cart_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="padding-top: 24px !important;">
     
         <div id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination">
        <a href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:dropdown_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_SESSION['cart']['amount']) {?>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cart ty-minicart__icon filled"),$_smarty_tpl);?>

                    <span class="ty-minicart-title ty-hand"><?php echo htmlspecialchars((string) $_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>
 <?php echo $_smarty_tpl->__("for");?>
&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_SESSION['cart']['display_subtotal']), 0, false);
?></span>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro"),$_smarty_tpl);?>

                <?php } else { ?>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cart ty-minicart__icon empty"),$_smarty_tpl);?>

                    <span class="ty-minicart-title empty-cart ty-hand"><?php echo $_smarty_tpl->__("cart_is_empty");?>
</span>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro"),$_smarty_tpl);?>

                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </a>
        </div>
        <div id="dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content ty-dropdown-box__content--cart hidden">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="cm-cart-content <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>cm-cart-content-thumb<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons'] == "Y") {?>cm-cart-content-delete<?php }?>">
                        <div class="ty-cart-items">
                            <?php if ($_SESSION['cart']['amount']) {?>
                                <ul class="ty-cart-items__list">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:cart_status"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->_assignInScope('_cart_products', array_reverse($_SESSION['cart']['products'],true));?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_cart_products']->value, 'product', false, 'key', 'cart_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart_product"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['parent']) {?>
                                                <li class="ty-cart-items__list-item">
                                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart_product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>
                                                        <div class="ty-cart-items__list-item-image">
                                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0, true);
?>
                                                        </div>
                                                    <?php }?>
                                                    <div class="ty-cart-items__list-item-desc">
                                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value['product'] ?? null)===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null : $tmp);?>
</a>
                                                    <p>
                                                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0, true);
?>
                                                    </p>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons'] == "Y") {?>
                                                        <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
                                                            <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout'] || $_smarty_tpl->tpl_vars['force_items_deletion']->value) && !$_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {?>
                                                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0, true);
?>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </li>
                                            <?php }?>
                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:cart_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </ul>
                            <?php } else { ?>
                                <div class="ty-cart-items__empty ty-center"><?php echo $_smarty_tpl->__("cart_is_empty");?>
</div>
                            <?php }?>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_bottom_buttons'] == "Y") {?>
                        <div class="cm-cart-buttons ty-cart-content__buttons buttons-container<?php if ($_SESSION['cart']['amount']) {?> full-cart<?php } else { ?> hidden<?php }?>">
                            <div class="ty-float-left">
                                <a href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->__("view_cart");?>
</a>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['checkout_redirect'] != "Y") {?>
                            <div class="ty-float-right">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("checkout")), 0, false);
?>
                            </div>
                            <?php }?>
                        </div>
                        <?php }?>

                </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <!--cart_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
     <a href="<?php echo htmlspecialchars((string) fn_url('wishlist.view'), ENT_QUOTES, 'UTF-8');?>
"  style="color:black !important;">
    <i class="fa fa-heart" style="color:black !important;"></i>
   <?php $_smarty_tpl->_assignInScope('wishlist_count', smarty_modifier_count($_SESSION['wishlist']['products']));
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['wishlist_count']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

</a>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/cart_content.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/cart_content.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('dropdown_id', $_smarty_tpl->tpl_vars['block']->value['snapping_id']);
$_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:cart_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:cart_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="ty-dropdown-box top-cart-contents" id="cart_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="padding-top: 24px !important;">
     
         <div id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination">
        <a href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:dropdown_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_SESSION['cart']['amount']) {?>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cart ty-minicart__icon filled"),$_smarty_tpl);?>

                    <span class="ty-minicart-title ty-hand"><?php echo htmlspecialchars((string) $_SESSION['cart']['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>
 <?php echo $_smarty_tpl->__("for");?>
&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_SESSION['cart']['display_subtotal']), 0, true);
?></span>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro"),$_smarty_tpl);?>

                <?php } else { ?>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cart ty-minicart__icon empty"),$_smarty_tpl);?>

                    <span class="ty-minicart-title empty-cart ty-hand"><?php echo $_smarty_tpl->__("cart_is_empty");?>
</span>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro"),$_smarty_tpl);?>

                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </a>
        </div>
        <div id="dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content ty-dropdown-box__content--cart hidden">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="cm-cart-content <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>cm-cart-content-thumb<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons'] == "Y") {?>cm-cart-content-delete<?php }?>">
                        <div class="ty-cart-items">
                            <?php if ($_SESSION['cart']['amount']) {?>
                                <ul class="ty-cart-items__list">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:cart_status"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->_assignInScope('_cart_products', array_reverse($_SESSION['cart']['products'],true));?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_cart_products']->value, 'product', false, 'key', 'cart_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart_product"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['parent']) {?>
                                                <li class="ty-cart-items__list-item">
                                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:minicart_product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type'] == "thumb") {?>
                                                        <div class="ty-cart-items__list-item-image">
                                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0, true);
?>
                                                        </div>
                                                    <?php }?>
                                                    <div class="ty-cart-items__list-item-desc">
                                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value['product'] ?? null)===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null : $tmp);?>
</a>
                                                    <p>
                                                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0, true);
?>
                                                    </p>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons'] == "Y") {?>
                                                        <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
                                                            <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout'] || $_smarty_tpl->tpl_vars['force_items_deletion']->value) && !$_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {?>
                                                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0, true);
?>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </li>
                                            <?php }?>
                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:cart_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </ul>
                            <?php } else { ?>
                                <div class="ty-cart-items__empty ty-center"><?php echo $_smarty_tpl->__("cart_is_empty");?>
</div>
                            <?php }?>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_bottom_buttons'] == "Y") {?>
                        <div class="cm-cart-buttons ty-cart-content__buttons buttons-container<?php if ($_SESSION['cart']['amount']) {?> full-cart<?php } else { ?> hidden<?php }?>">
                            <div class="ty-float-left">
                                <a href="<?php echo htmlspecialchars((string) fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->__("view_cart");?>
</a>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['checkout_redirect'] != "Y") {?>
                            <div class="ty-float-right">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("checkout")), 0, true);
?>
                            </div>
                            <?php }?>
                        </div>
                        <?php }?>

                </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:minicart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <!--cart_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
     <a href="<?php echo htmlspecialchars((string) fn_url('wishlist.view'), ENT_QUOTES, 'UTF-8');?>
"  style="color:black !important;">
    <i class="fa fa-heart" style="color:black !important;"></i>
   <?php $_smarty_tpl->_assignInScope('wishlist_count', smarty_modifier_count($_SESSION['wishlist']['products']));
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['wishlist_count']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

</a>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:cart_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
