<?php
/* Smarty version 4.3.0, created on 2024-11-18 04:29:28
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673b3328b0ac94_51922255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d55396750693407d0539d4956b6cf11101ac20' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/go.tpl' => 2,
  ),
),false)) {
function content_673b3328b0ac94_51922255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('promo_code','promo_code_or_certificate','apply','apply','promo_code','promo_code_or_certificate','apply','apply'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-gift-certificate-coupon ty-discount-coupon__control-group ty-input-append">
    <label for="coupon_field<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-required"><?php echo $_smarty_tpl->__("promo_code");?>
</label>
    <input type="text" class="ty-input-text cm-hint" id="coupon_field<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" name="coupon_code" size="40" value="<?php echo $_smarty_tpl->__("promo_code_or_certificate");?>
" />
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.apply_coupon",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0, false);
?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/checkout/discount_coupons.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-gift-certificate-coupon ty-discount-coupon__control-group ty-input-append">
    <label for="coupon_field<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-required"><?php echo $_smarty_tpl->__("promo_code");?>
</label>
    <input type="text" class="ty-input-text cm-hint" id="coupon_field<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
" name="coupon_code" size="40" value="<?php echo $_smarty_tpl->__("promo_code_or_certificate");?>
" />
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"checkout.apply_coupon",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0, true);
?>
</div><?php }
}
}
