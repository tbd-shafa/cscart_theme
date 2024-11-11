<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:08:25
  from '59850798c0a3889f64980164f5da7051c783276a' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731f3b91066f8_83515935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6731f3b91066f8_83515935 (Smarty_Internal_Template $_smarty_tpl) {
?>
                            <ul id="customer_service_links">
                            <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars((string) fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
">About your order</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist'] && $_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == 'A') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars((string) fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
">Wishlist</a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
">Comparison list</a></li>
                            <?php }?>
                            </ul><?php }
}
