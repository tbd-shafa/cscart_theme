<?php
/* Smarty version 4.3.0, created on 2024-11-19 04:04:31
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673c7ecf3f5a25_06124331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '239a71ea545546d84050ea28125b8d705931e4ef' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/manage.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/manage/reviews_table.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:addons/product_reviews/views/product_reviews/components/sidebar/sidebar_review_search.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_673c7ecf3f5a25_06124331 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.title'));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/manage/reviews_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value,'product_reviews_search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"product_reviews.manage",'view_type'=>"product_reviews"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/sidebar/sidebar_review_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value,'available_message_types'=>$_smarty_tpl->tpl_vars['available_message_types']->value,'product_reviews_search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("product_reviews.title"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'select_storefront'=>$_smarty_tpl->tpl_vars['select_storefront']->value,'show_all_storefront'=>fn_allowed_for("MULTIVENDOR"),'storefront_switcher_param_name'=>"storefront_id"), 0, false);
}
}
