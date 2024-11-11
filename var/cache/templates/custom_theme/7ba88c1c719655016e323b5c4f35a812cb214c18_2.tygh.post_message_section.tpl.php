<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:15:33
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/post_message_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731f565b5f190_16420769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ba88c1c719655016e323b5c4f35a812cb214c18' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_reviews/views/product_reviews/components/post_message_section.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/content_more.tpl' => 2,
  ),
),false)) {
function content_6731f565b5f190_16420769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['message_title']->value && $_smarty_tpl->tpl_vars['message_body']->value) {?>

    <dl class="ty-product-review-post-message-section ty-dl" data-ca-product-review="postMessageSection">

        <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
            <dt class="ty-product-review-post-message-section__title ty-dt ty-strong">
                <?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>

            </dt>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['message_body']->value) {?>
            <dd class="ty-product-review-post-message-section__body ty-dd">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/content_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['message_body']->value, ENT_QUOTES, 'UTF-8', true), (bool) 1)), 0, false);
?>
            </dd>
        <?php }?>

    </dl>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_message_section.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_message_section.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['message_title']->value && $_smarty_tpl->tpl_vars['message_body']->value) {?>

    <dl class="ty-product-review-post-message-section ty-dl" data-ca-product-review="postMessageSection">

        <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
            <dt class="ty-product-review-post-message-section__title ty-dt ty-strong">
                <?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>

            </dt>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['message_body']->value) {?>
            <dd class="ty-product-review-post-message-section__body ty-dd">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/content_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['message_body']->value, ENT_QUOTES, 'UTF-8', true), (bool) 1)), 0, true);
?>
            </dd>
        <?php }?>

    </dl>
<?php }
}
}
}
