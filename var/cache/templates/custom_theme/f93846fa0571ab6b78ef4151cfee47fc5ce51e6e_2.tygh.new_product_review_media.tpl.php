<?php
/* Smarty version 4.3.0, created on 2024-12-02 21:53:59
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674e9cf77d0484_04398516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f93846fa0571ab6b78ef4151cfee47fc5ce51e6e' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl' => 2,
  ),
),false)) {
function content_674e9cf77d0484_04398516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.add_images','product_reviews.max_number_image_message','product_reviews.add_images','product_reviews.max_number_image_message'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product_reviews_images_upload_allowed']->value === smarty_modifier_enum("YesNo::YES")) {?>

    <?php $_smarty_tpl->_assignInScope('max_images_upload', (($tmp = $_smarty_tpl->tpl_vars['config']->value['tweaks']['product_reviews']['max_images_upload'] ?? null)===null||$tmp==='' ? 10 ?? null : $tmp));?>

    <section class="ty-product-review-new-product-review__media" data-ca-product-review="newProductReviewMedia">
        <div class="ty-control-group">
            <?php echo $_smarty_tpl->__("product_reviews.add_images");?>
:
            <div>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"product_review_data[0]",'multiupload'=>"Y"), 0, false);
?>

                <div class="ty-product-review-new-product-review__media-info hidden"
                    data-ca-product-review="newProductReviewMediaInfo"
                >
                    <small class="ty-product-review-new-product-review__media-info-text ty-muted">
                        <?php echo $_smarty_tpl->__("product_reviews.max_number_image_message",array('[max_image_number]'=>$_smarty_tpl->tpl_vars['max_images_upload']->value));?>

                    </small>
                </div>
            </div>
        </div>
    </section>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product_reviews_images_upload_allowed']->value === smarty_modifier_enum("YesNo::YES")) {?>

    <?php $_smarty_tpl->_assignInScope('max_images_upload', (($tmp = $_smarty_tpl->tpl_vars['config']->value['tweaks']['product_reviews']['max_images_upload'] ?? null)===null||$tmp==='' ? 10 ?? null : $tmp));?>

    <section class="ty-product-review-new-product-review__media" data-ca-product-review="newProductReviewMedia">
        <div class="ty-control-group">
            <?php echo $_smarty_tpl->__("product_reviews.add_images");?>
:
            <div>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"product_review_data[0]",'multiupload'=>"Y"), 0, true);
?>

                <div class="ty-product-review-new-product-review__media-info hidden"
                    data-ca-product-review="newProductReviewMediaInfo"
                >
                    <small class="ty-product-review-new-product-review__media-info-text ty-muted">
                        <?php echo $_smarty_tpl->__("product_reviews.max_number_image_message",array('[max_image_number]'=>$_smarty_tpl->tpl_vars['max_images_upload']->value));?>

                    </small>
                </div>
            </div>
        </div>
    </section>

<?php }
}
}
}
