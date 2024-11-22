<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars_with_text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067614fb9d2_74694115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92aad0a0bc3b4a966db06c3064660f5edfb9beda' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars_with_text.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/rating/stars.tpl' => 1,
  ),
),false)) {
function content_674067614fb9d2_74694115 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.out_of_five'));
?>

<?php if ($_smarty_tpl->tpl_vars['rating']->value > 0) {?>
    <?php $_smarty_tpl->_assignInScope('accurate_rating', round((float) $_smarty_tpl->tpl_vars['rating']->value, (int) 1, (int) 1));?>

    <section>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['rating']->value,'size'=>$_smarty_tpl->tpl_vars['size']->value), 0, false);
?>

        <div>
            <strong class="text-larger">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['accurate_rating']->value, ENT_QUOTES, 'UTF-8');?>

            </strong>
            <span>
                <?php echo $_smarty_tpl->__("product_reviews.out_of_five");?>

            </span>
        </div>
    </section>
<?php }
}
}
