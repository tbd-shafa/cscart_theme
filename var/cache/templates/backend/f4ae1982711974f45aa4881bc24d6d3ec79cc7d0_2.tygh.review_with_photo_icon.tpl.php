<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_with_photo_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676156c485_68357181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4ae1982711974f45aa4881bc24d6d3ec79cc7d0' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_with_photo_icon.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740676156c485_68357181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.with_photo','product_reviews.show_review_images','product_reviews.scroll_to_review_images'));
?>

<?php if ($_smarty_tpl->tpl_vars['product_review_images']->value) {?>

    <?php $_smarty_tpl->_assignInScope('scroll_to_elm', (($tmp = $_smarty_tpl->tpl_vars['scroll_to_elm']->value ?? null)===null||$tmp==='' ? "content_product_reviews" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('external_click_id', (($tmp = $_smarty_tpl->tpl_vars['external_click_id']->value ?? null)===null||$tmp==='' ? "reviews" ?? null : $tmp));?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value === true) {?>
        <?php $_smarty_tpl->_assignInScope('link', "product_reviews.update?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value));?>
    <?php }?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "with_photo_icon", null, null);?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-picture muted",'title'=>$_smarty_tpl->__("product_reviews.with_photo")),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("product_reviews.show_review_images");?>
"
        >
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'with_photo_icon');?>

        </a>

    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="cm-external-click <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-scroll="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("product_reviews.scroll_to_review_images");?>
"
        >
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'with_photo_icon');?>

        </button>
    <?php } else { ?>
        <span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'with_photo_icon');?>

        </span>
    <?php }?>

<?php }
}
}
