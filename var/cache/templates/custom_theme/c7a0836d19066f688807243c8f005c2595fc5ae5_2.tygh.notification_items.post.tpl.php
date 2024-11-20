<?php
/* Smarty version 4.3.0, created on 2024-11-20 03:10:26
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/products/notification_items.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673dc3a2675c27_95549379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7a0836d19066f688807243c8f005c2595fc5ae5' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/products/notification_items.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl' => 2,
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_673dc3a2675c27_95549379 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','gift_certificate'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['gift_cert']->value) {?>
    <div class="ty-product-notification__item clearfix">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>"50",'height'=>"50",'class'=>"ty-product-notification__image"), 0, false);
?>
        <div class="ty-product-notification__content clearfix">
            <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_cert']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a>
            <div class="ty-product-notification__price">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift_cert']->value['display_subtotal'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['gift_cert']->value['gift_cert_id']),'class'=>"none"), 0, false);
?>
            </div>
        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/products/notification_items.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/products/notification_items.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['gift_cert']->value) {?>
    <div class="ty-product-notification__item clearfix">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>"50",'height'=>"50",'class'=>"ty-product-notification__image"), 0, true);
?>
        <div class="ty-product-notification__content clearfix">
            <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_cert']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a>
            <div class="ty-product-notification__price">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift_cert']->value['display_subtotal'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['gift_cert']->value['gift_cert_id']),'class'=>"none"), 0, true);
?>
            </div>
        </div>
    </div>
<?php }
}
}
}
