<?php
/* Smarty version 4.3.0, created on 2024-11-19 04:04:31
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673c7ecf4b4680_38835210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e8db8dcf414feeaea58c39e11f008eb56fcdecb' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_images.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/previewer.tpl' => 1,
    'tygh:common/image.tpl' => 1,
  ),
),false)) {
function content_673c7ecf4b4680_38835210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>

<?php if ($_smarty_tpl->tpl_vars['product_review_images']->value) {?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('preview_id', uniqid($_smarty_tpl->tpl_vars['product_review']->value['product_review_id']));?>
    <?php if ($_smarty_tpl->tpl_vars['size']->value === "large") {?>
        <?php $_smarty_tpl->_assignInScope('image_width', (intval($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'])*2));?>
        <?php $_smarty_tpl->_assignInScope('image_height', (intval($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'])*2));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('image_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width']);?>
        <?php $_smarty_tpl->_assignInScope('image_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height']);?>
    <?php }?>

    <section class="flex flex-wrap spaced-child">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_review_images']->value, 'image', false, NULL, 'post_images', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_post_images']->value['index']++;
?>
            <div class="cs-product-reviews-reviews-review-images">

                <div class="cs-product-reviews-reviews-review-images__toolbar">
                    <?php if ($_smarty_tpl->tpl_vars['show_delete']->value) {?>
                        <label class="cs-product-reviews-reviews-review-images__delete-label">
                            <input type="checkbox"
                                name="product_review_data[delete_images][]"
                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['pair_id'], ENT_QUOTES, 'UTF-8');?>
"
                                class="cs-product-reviews-reviews-review-images__delete-checkbox"
                            />
                            <div class="cs-product-reviews-reviews-review-images__delete-btn">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-trash cs-product-reviews-reviews-review-images__delete-icon"),$_smarty_tpl);?>

                            </div>
                        </label>
                    <?php }?>
                </div>


                <a id="image_preview_product_review_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-image-id="preview_product_review_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-image-order=<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_post_images']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_post_images']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>

                    class="cm-previewer cs-product-reviews-reviews-review-images__link"
                >
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image']->value,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'show_detailed_link'=>false,'image_css_class'=>"cs-product-reviews-reviews-review-images__image"), 0, true);
?>
                </a>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </section>
<?php }
}
}
