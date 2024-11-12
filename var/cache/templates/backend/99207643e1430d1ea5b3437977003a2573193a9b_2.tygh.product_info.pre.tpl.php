<?php
/* Smarty version 4.3.0, created on 2024-11-11 21:11:05
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/orders/product_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6732e36943c875_93158900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99207643e1430d1ea5b3437977003a2573193a9b' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/orders/product_info.pre.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/variation_features.tpl' => 1,
  ),
),false)) {
function content_6732e36943c875_93158900 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cp']->value['variation_features']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variation_features'=>$_smarty_tpl->tpl_vars['cp']->value['variation_features'],'features_secondary'=>true), 0, false);
}
}
}
