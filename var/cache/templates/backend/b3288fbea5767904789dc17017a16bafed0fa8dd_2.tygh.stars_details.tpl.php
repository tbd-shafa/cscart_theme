<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406761513184_21575714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3288fbea5767904789dc17017a16bafed0fa8dd' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars_details.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/rating/stars.tpl' => 1,
  ),
),false)) {
function content_67406761513184_21575714 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ratings_stats']->value) {?>    
    <section class="cs-product-reviews-rating-stars-details">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ratings_stats']->value, 'rating', false, 'quantity');
$_smarty_tpl->tpl_vars['rating']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quantity']->value => $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->do_else = false;
?>
            <div class="cs-product-reviews-rating-stars-details__row">

                <div class="cs-product-reviews-rating-stars-details__quantity">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['quantity']->value,'size'=>"small",'type'=>"secondary",'without_empty_stars'=>true,'flip'=>true), 0, true);
?>
                </div>

                <progress
                    class="cs-product-reviews-rating-stars-details__line"
                    max="100"
                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rating']->value['percentage'], ENT_QUOTES, 'UTF-8');?>
"
                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rating']->value['percentage'], ENT_QUOTES, 'UTF-8');?>
</progress>


                <div class="cs-product-reviews-rating-stars-details__percentage">
                    <?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['rating']->value['percentage'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
%
                </div>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </section>
<?php }
}
}
