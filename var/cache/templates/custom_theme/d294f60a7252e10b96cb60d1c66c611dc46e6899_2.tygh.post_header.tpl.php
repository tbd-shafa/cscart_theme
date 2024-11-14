<?php
/* Smarty version 4.3.0, created on 2024-11-13 21:33:43
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/post_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67358bb734f389_17371076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd294f60a7252e10b96cb60d1c66c611dc46e6899' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/post_header.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl' => 2,
    'tygh:common/options_info.tpl' => 2,
  ),
),false)) {
function content_67358bb734f389_17371076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<header class="ty-product-review-post-header">

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['product_review']->value['rating_value']), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['product_review']->value['product_options']) {?>
        <div class="ty-product-review-post-header__product-options">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product_review']->value['product_options'],'no_block'=>true), 0, false);
?>
        </div>
    <?php }?>

</header>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_header.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_header.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<header class="ty-product-review-post-header">

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['product_review']->value['rating_value']), 0, true);
?>

    <?php if ($_smarty_tpl->tpl_vars['product_review']->value['product_options']) {?>
        <div class="ty-product-review-post-header__product-options">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product_review']->value['product_options'],'no_block'=>true), 0, true);
?>
        </div>
    <?php }?>

</header>
<?php }
}
}
