<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676150c032_88713499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c05c14d46d95566331eef7f3b4abb306c0b3a00' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740676150c032_88713499 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.product_is_rated_n_out_of_five_stars','product_reviews.show_n_reviews','product_reviews.show_review','product_reviews.scroll_to_reviews'));
?>

<?php if ($_smarty_tpl->tpl_vars['rating']->value > 0) {?>
    <?php $_smarty_tpl->_assignInScope('integer_rating', floor($_smarty_tpl->tpl_vars['rating']->value));?>
    <?php $_smarty_tpl->_assignInScope('accurate_rating', round((float) $_smarty_tpl->tpl_vars['rating']->value, (int) 1, (int) 1));?>
    <?php $_smarty_tpl->_assignInScope('is_half_rating', (($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value) >= 0.25 && ($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value) < 0.75));?>
    <?php $_smarty_tpl->_assignInScope('integer_rating_math', round((float) $_smarty_tpl->tpl_vars['rating']->value, (int) 0, (int) 1));?>
    <?php $_smarty_tpl->_assignInScope('full_stars_count', $_smarty_tpl->tpl_vars['is_half_rating']->value ? $_smarty_tpl->tpl_vars['integer_rating']->value : $_smarty_tpl->tpl_vars['integer_rating_math']->value);?>
    <?php $_smarty_tpl->_assignInScope('scroll_to_elm', (($tmp = $_smarty_tpl->tpl_vars['scroll_to_elm']->value ?? null)===null||$tmp==='' ? "content_product_reviews" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('external_click_id', (($tmp = $_smarty_tpl->tpl_vars['external_click_id']->value ?? null)===null||$tmp==='' ? "reviews" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("product_reviews.product_is_rated_n_out_of_five_stars",array("[n]"=>$_smarty_tpl->tpl_vars['accurate_rating']->value)));?>

    <?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
        <?php $_smarty_tpl->_assignInScope('show_reviews_text', $_smarty_tpl->__("product_reviews.show_n_reviews",array($_smarty_tpl->tpl_vars['total_product_reviews']->value)));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('show_reviews_text', $_smarty_tpl->__("product_reviews.show_review"));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value === true) {?>
        <?php $_smarty_tpl->_assignInScope('link', "products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id'])."&selected_section=product_reviews");?>
    <?php }?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "stars", null, null);?>
        <span class="cs-product-reviews-rating-stars
            <?php if ($_smarty_tpl->tpl_vars['size']->value === "small") {?>
                cs-product-reviews-rating-stars--small
            <?php } elseif ($_smarty_tpl->tpl_vars['size']->value === "large") {?>
                cs-product-reviews-rating-stars--large
            <?php } elseif ($_smarty_tpl->tpl_vars['size']->value === "xlarge") {?>
                cs-product-reviews-rating-stars--xlarge
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['type']->value === "secondary") {?>
                cs-product-reviews-rating-stars--secondary
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['without_empty_stars']->value) {?>
                cs-product-reviews-rating-stars--without-empty-stars
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['flip']->value) {?>
                cs-product-reviews-rating-stars--flip
            <?php }?>
            "
            data-ca-product-review-reviews-stars-rating="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['accurate_rating']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-full="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['full_stars_count']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-is-half="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_half_rating']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if (!$_smarty_tpl->tpl_vars['link']->value && !$_smarty_tpl->tpl_vars['button']->value) {?>
                title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        ></span>        
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a class="cs-product-reviews-rating-stars__link <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
. <?php echo $_smarty_tpl->tpl_vars['show_reviews_text']->value;?>
"
        >
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'stars');?>

        </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="cs-product-reviews-rating-stars__button cs-btn-reset cm-external-click <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-scroll="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
. <?php echo $_smarty_tpl->__("product_reviews.scroll_to_reviews");?>
"
        >
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'stars');?>

        </button>
    <?php } else { ?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'stars');?>

    <?php }?>

<?php }
}
}
