<?php
/* Smarty version 4.3.0, created on 2024-11-18 04:29:28
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/reward_points/hooks/checkout/payment_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673b3328b9b159_71864947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ee8e310d701ec0fa5d5b46b0e5db0b41c616c32' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/reward_points/hooks/checkout/payment_extra.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/reward_points/hooks/checkout/payment_options.post.tpl' => 2,
  ),
),false)) {
function content_673b3328b9b159_71864947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout" && $_smarty_tpl->tpl_vars['cart_products']->value && $_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'] && $_smarty_tpl->tpl_vars['user_info']->value['points'] > 0) {?>
<div class="ty-right">
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/reward_points/hooks/checkout/payment_options.post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/payment_extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/payment_extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] == "checkout" && $_smarty_tpl->tpl_vars['cart_products']->value && $_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'] && $_smarty_tpl->tpl_vars['user_info']->value['points'] > 0) {?>
<div class="ty-right">
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/reward_points/hooks/checkout/payment_options.post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
}
}
