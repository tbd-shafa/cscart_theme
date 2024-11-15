<?php
/* Smarty version 4.3.0, created on 2024-11-15 05:12:43
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/views/orders/components/order_details_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673748cb624434_37337938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f4bca9ea4cccc27af987b7a378e65306bcbdc89' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/views/orders/components/order_details_body.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673748cb624434_37337938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','gift_certificate'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['extra']['in_use_certificate']) {?>
<div>(<?php echo $_smarty_tpl->__("gift_certificate");?>
:<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extra']['in_use_certificate'], 'c', false, 'c_key', 'f_fciu', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_key']->value => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['total'];
?>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c_key']->value, ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['last'] : null)) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>)</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/views/orders/components/order_details_body.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/views/orders/components/order_details_body.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['extra']['in_use_certificate']) {?>
<div>(<?php echo $_smarty_tpl->__("gift_certificate");?>
:<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extra']['in_use_certificate'], 'c', false, 'c_key', 'f_fciu', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_key']->value => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['total'];
?>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c_key']->value, ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_fciu']->value['last'] : null)) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>)</div>
<?php }
}
}
}
