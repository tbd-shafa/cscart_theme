<?php
/* Smarty version 4.3.0, created on 2024-11-13 02:52:46
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/lite_checkout/customer_billing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673484fedc6249_45072880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbbe5cfe838fbb102fe521f42e8476f557151b2a' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/lite_checkout/customer_billing.tpl',
      1 => 1731410720,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/customer/billing.tpl' => 2,
  ),
),false)) {
function content_673484fedc6249_45072880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="checkout__form">
                <h4>Billing address</h4>
                        <div class="col-lg-12 col-md-12">
                         <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer/billing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->tpl_vars['items']->value), 0, false);
?>
                       </div>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/customer_billing.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/customer_billing.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="checkout__form">
                <h4>Billing address</h4>
                        <div class="col-lg-12 col-md-12">
                         <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer/billing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->tpl_vars['items']->value), 0, true);
?>
                       </div>
</div><?php }
}
}
