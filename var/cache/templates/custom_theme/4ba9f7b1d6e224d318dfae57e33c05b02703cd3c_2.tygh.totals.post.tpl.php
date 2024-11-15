<?php
/* Smarty version 4.3.0, created on 2024-11-15 05:12:43
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/orders/totals.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673748cb73dd26_37847199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ba9f7b1d6e224d318dfae57e33c05b02703cd3c' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/orders/totals.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_673748cb73dd26_37847199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('payment_method','gift_certificate','payment_method','gift_certificate'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates'], 'certificate', false, 'code', 'certs', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['certificate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['certificate']->value) {
$_smarty_tpl->tpl_vars['certificate']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_certs']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_certs']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_certs']->value['index'];
?>
        <tr class="ty-orders-summary__row">
            <td><?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id'] == 0 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_certs']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_certs']->value['first'] : null)) {?><strong><?php echo $_smarty_tpl->__("payment_method");?>
:</strong><?php }?>&nbsp;</td>
            <td>
            <?php echo $_smarty_tpl->__("gift_certificate");?>
: <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['code']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
</a> (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['certificate']->value['cost']), 0, true);
?>)
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/orders/totals.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/orders/totals.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates'], 'certificate', false, 'code', 'certs', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['certificate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['certificate']->value) {
$_smarty_tpl->tpl_vars['certificate']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_certs']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_certs']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_certs']->value['index'];
?>
        <tr class="ty-orders-summary__row">
            <td><?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id'] == 0 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_certs']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_certs']->value['first'] : null)) {?><strong><?php echo $_smarty_tpl->__("payment_method");?>
:</strong><?php }?>&nbsp;</td>
            <td>
            <?php echo $_smarty_tpl->__("gift_certificate");?>
: <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['code']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
</a> (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['certificate']->value['cost']), 0, true);
?>)
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
