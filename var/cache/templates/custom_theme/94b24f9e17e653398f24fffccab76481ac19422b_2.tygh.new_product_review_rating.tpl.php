<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:05:04
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467f0935cb2_11803491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94b24f9e17e653398f24fffccab76481ac19422b' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/rate.tpl' => 2,
  ),
),false)) {
function content_674467f0935cb2_11803491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.your_rating','product_reviews.your_rating'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<section class="ty-product-review-new-product-review-rating">
    <div class="ty-control-group">
        <?php $_smarty_tpl->_assignInScope('rate_id', "rating_".((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-multiple-radios">
            <?php echo $_smarty_tpl->__("product_reviews.your_rating");?>

        </label>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rate_id'=>$_smarty_tpl->tpl_vars['rate_id']->value,'rate_name'=>"product_review_data[rating_value]",'product_reviews_ratings'=>$_smarty_tpl->tpl_vars['product_reviews_ratings']->value,'size'=>"xlarge"), 0, false);
?>
    </div>
</section>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<section class="ty-product-review-new-product-review-rating">
    <div class="ty-control-group">
        <?php $_smarty_tpl->_assignInScope('rate_id', "rating_".((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-multiple-radios">
            <?php echo $_smarty_tpl->__("product_reviews.your_rating");?>

        </label>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rate_id'=>$_smarty_tpl->tpl_vars['rate_id']->value,'rate_name'=>"product_review_data[rating_value]",'product_reviews_ratings'=>$_smarty_tpl->tpl_vars['product_reviews_ratings']->value,'size'=>"xlarge"), 0, true);
?>
    </div>
</section>
<?php }
}
}
