<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676151c964_58306027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d0a3d8a0c625100e7739e48f1b916a5f83a9e9a' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740676151c964_58306027 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.n_reviews','product_reviews.show_reviews','product_reviews.scroll_to_reviews'));
?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value > 0) {?>

    <?php $_smarty_tpl->_assignInScope('scroll_to_elm', (($tmp = $_smarty_tpl->tpl_vars['scroll_to_elm']->value ?? null)===null||$tmp==='' ? "content_product_reviews" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('external_click_id', (($tmp = $_smarty_tpl->tpl_vars['external_click_id']->value ?? null)===null||$tmp==='' ? "reviews" ?? null : $tmp));?>
    <?php ob_start();
echo $_smarty_tpl->__("product_reviews.n_reviews",array($_smarty_tpl->tpl_vars['total_product_reviews']->value));
$_prefixVariable30=ob_get_clean();
$_smarty_tpl->_assignInScope('total_product_reviews_text', ((string)$_smarty_tpl->tpl_vars['total_product_reviews']->value)." ".$_prefixVariable30);?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value === true) {?>
        <?php $_smarty_tpl->_assignInScope('link', "products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&selected_section=product_reviews");?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("product_reviews.show_reviews");?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['total_product_reviews_text']->value;?>

        </a>

    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="cm-external-click <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-scroll="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("product_reviews.scroll_to_reviews");?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['total_product_reviews_text']->value;?>

        </button>
    <?php } else { ?>
        <span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['total_product_reviews_text']->value;?>

        </span>
    <?php }?>

<?php }
}
}
