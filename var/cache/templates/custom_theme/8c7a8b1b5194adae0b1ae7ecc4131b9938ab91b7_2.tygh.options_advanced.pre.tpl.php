<?php
/* Smarty version 4.3.0, created on 2024-12-02 21:53:18
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/required_products/hooks/products/options_advanced.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674e9cce859d62_11428453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c7a8b1b5194adae0b1ae7ecc4131b9938ab91b7' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/required_products/hooks/products/options_advanced.pre.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674e9cce859d62_11428453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('bought','bought'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['show_product_status']->value && $_smarty_tpl->tpl_vars['product']->value['bought'] == "Y") {?>
<p><strong><?php echo $_smarty_tpl->__("bought");?>
</strong></p>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/required_products/hooks/products/options_advanced.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/required_products/hooks/products/options_advanced.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_product_status']->value && $_smarty_tpl->tpl_vars['product']->value['bought'] == "Y") {?>
<p><strong><?php echo $_smarty_tpl->__("bought");?>
</strong></p>
<?php }
}
}
}
