<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:36
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/update_product_list_price.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406760ea3751_42996222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c77b0e3bd72adaf2c5c98ce4a802f346f81213' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/update_product_list_price.override.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67406760ea3751_42996222 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("list_price")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
