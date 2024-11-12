<?php
/* Smarty version 4.3.0, created on 2024-11-11 21:09:16
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/lite_checkout/payment_methods.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6732e2fccd84c6_82943516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df2b6e5b7e2e4c0d08bceea9059fb3b1f0baeda5' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/lite_checkout/payment_methods.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/steps/payment.tpl' => 2,
  ),
),false)) {
function content_6732e2fccd84c6_82943516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/steps/payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_title'=>false), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/payment_methods.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/payment_methods.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/steps/payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_title'=>false), 0, true);
}
}
}
