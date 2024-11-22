<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:36
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/product_update_price.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406760b53767_59983734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c19ebb3d7fa6f4a822da8a4d5c4948557927d42' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/product_update_price.override.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67406760b53767_59983734 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("prices")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
