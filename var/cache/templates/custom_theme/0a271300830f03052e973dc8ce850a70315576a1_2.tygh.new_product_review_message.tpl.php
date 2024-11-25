<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:05:04
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467f09b4430_09516030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a271300830f03052e973dc8ce850a70315576a1' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl' => 6,
  ),
),false)) {
function content_674467f09b4430_09516030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.write_your_review','product_reviews.advantages','product_reviews.disadvantages','product_reviews.comment','product_reviews.write_your_review','product_reviews.advantages','product_reviews.disadvantages','product_reviews.comment'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('is_advanced', ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_fields'] === "advanced"));?>

<section class="ty-product-review-new-product-review-message">
    <div class="ty-control-group ty-product-review-new-product-review-message__title">
        <label class="ty-control-group__title ty-product-review-new-product-review-message__title-label
            <?php if (!$_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                cm-required cm-trim
            <?php }?>
        "
            <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                for="product_review_advantages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php } else { ?>
                for="product_review_comment_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        >
            <?php echo $_smarty_tpl->__("product_reviews.write_your_review");?>

        </label>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.advantages"),'id'=>"product_review_advantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[advantages]"), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.disadvantages"),'id'=>"product_review_disadvantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[disadvantages]"), 0, true);
?>

    <?php }?>

    <?php ob_start();
echo $_smarty_tpl->__("product_reviews.comment");
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>($_smarty_tpl->tpl_vars['is_advanced']->value ? $_prefixVariable3." *" : false),'id'=>"product_review_comment_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[comment]",'required'=>$_smarty_tpl->tpl_vars['is_advanced']->value), 0, true);
?>

</section>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('is_advanced', ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_fields'] === "advanced"));?>

<section class="ty-product-review-new-product-review-message">
    <div class="ty-control-group ty-product-review-new-product-review-message__title">
        <label class="ty-control-group__title ty-product-review-new-product-review-message__title-label
            <?php if (!$_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                cm-required cm-trim
            <?php }?>
        "
            <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                for="product_review_advantages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php } else { ?>
                for="product_review_comment_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        >
            <?php echo $_smarty_tpl->__("product_reviews.write_your_review");?>

        </label>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.advantages"),'id'=>"product_review_advantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[advantages]"), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->__("product_reviews.disadvantages"),'id'=>"product_review_disadvantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[disadvantages]"), 0, true);
?>

    <?php }?>

    <?php ob_start();
echo $_smarty_tpl->__("product_reviews.comment");
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>($_smarty_tpl->tpl_vars['is_advanced']->value ? $_prefixVariable4." *" : false),'id'=>"product_review_comment_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[comment]",'required'=>$_smarty_tpl->tpl_vars['is_advanced']->value), 0, true);
?>

</section>
<?php }
}
}
