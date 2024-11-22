<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/hooks/products/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067614ec0e3_75928218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf292a6f810f055ff14d369811042f0bb597283f' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/hooks/products/tabs_extra.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/create.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/rating/product_rating_overview.tpl' => 1,
    'tygh:addons/product_reviews/views/product_reviews/components/manage/reviews_table.tpl' => 1,
  ),
),false)) {
function content_674067614ec0e3_75928218 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.write_review','product_reviews.write_review'));
?>

<?php if ($_smarty_tpl->tpl_vars['is_allowed_to_view_product_reviews']->value) {?>

    <div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "product_reviews") {?>hidden<?php }?>" id="content_product_reviews">
        <?php if ($_smarty_tpl->tpl_vars['is_allowed_to_add_product_reviews']->value) {?>
            <div class="clearfix">
                <div class="pull-right">
                    <div id="add_new_review">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"product_reviews.add&product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'allow_href'=>true,'but_role'=>"action",'but_text'=>$_smarty_tpl->__("product_reviews.write_review"),'but_icon'=>"icon-plus"), 0, false);
?>
                    </div>
                </div>
            </div><br>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/rating/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['product_reviews_rating_stats']->value['ratings'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews_rating_stats']->value['total'],'average_rating'=>$_smarty_tpl->tpl_vars['product_data']->value['average_rating']), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/manage/reviews_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value,'object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'show_product'=>false), 0, false);
?>
    </div>

<?php } elseif ($_smarty_tpl->tpl_vars['is_allowed_to_add_product_reviews']->value) {?>

    <div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "product_reviews") {?>hidden<?php }?>" id="content_product_reviews">
        <div class="clearfix">
            <div class="pull-right">
                <div id="add_new_review">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"product_reviews.add&product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'allow_href'=>true,'but_role'=>"action",'but_text'=>$_smarty_tpl->__("product_reviews.write_review"),'but_icon'=>"icon-plus"), 0, true);
?>
                </div>
            </div>
        </div><br>
    </div>

<?php }?>

<?php }
}
