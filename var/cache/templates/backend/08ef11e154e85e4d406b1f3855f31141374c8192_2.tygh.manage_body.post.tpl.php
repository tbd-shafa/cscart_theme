<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:49:09
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_body.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731fd452ff547_01405317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08ef11e154e85e4d406b1f3855f31141374c8192' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_body.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_data_premoderation/components/disapproval_popup.tpl' => 1,
  ),
),false)) {
function content_6731fd452ff547_01405317 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.disapprove_product'));
$_smarty_tpl->_subTemplateRender("tygh:addons/vendor_data_premoderation/components/disapproval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'title'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_product",array("[product]"=>$_smarty_tpl->tpl_vars['product']->value['product']))), 0, false);
}
}
