<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676159e103_78016313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f6092b126d2ac53aba3c47e05db0d41adf1262c' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_status.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_popup.tpl' => 1,
  ),
),false)) {
function content_6740676159e103_78016313 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product_review_status']->value) {?>
    <?php $_smarty_tpl->_assignInScope('return_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"product_reviews",'prefix'=>"product_review",'id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'status'=>$_smarty_tpl->tpl_vars['product_review_status']->value,'items_status'=>$_smarty_tpl->tpl_vars['product_review_status_descr']->value,'object_id_name'=>"product_review_id",'table'=>"product_reviews",'st_result_ids'=>$_smarty_tpl->tpl_vars['rev']->value,'btn_meta'=>"nowrap cs-product-reviews-reviews-review-status__btn",'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'ajax_full_render'=>true), 0, false);
?>

<?php }
}
}
