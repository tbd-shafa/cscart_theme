<?php
/* Smarty version 4.3.0, created on 2024-11-13 04:58:20
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6734a26ceef401_97073382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bd114249117352a985270d1bebd780ca0def8e0' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/rating/stars_with_text.tpl' => 1,
    'tygh:views/addons/components/rating/stars_details.tpl' => 1,
    'tygh:views/addons/components/rating/total_reviews.tpl' => 1,
  ),
),false)) {
function content_6734a26ceef401_97073382 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['total_addon_reviews']->value) {?>
    <section class="cs-addons-rating-addon-rating-overview well">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_addon_reviews']->value), 0, false);
?>

    </section>
<?php }
}
}
