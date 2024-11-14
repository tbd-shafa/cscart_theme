<?php
/* Smarty version 4.3.0, created on 2024-11-14 02:32:04
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/gift_certificates/hooks/orders/totals_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6735d1a49fd711_36233373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5368f9f52d000b72e2b16f236eec2c5bd0197c67' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/gift_certificates/hooks/orders/totals_content.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_6735d1a49fd711_36233373 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('payment_information','gift_certificate'));
if ($_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']) {
if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id'] == 0) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("payment_information")), 0, false);
}?>
    <tr>
        <td class="right muted strong"><?php echo $_smarty_tpl->__("gift_certificate");?>
</td>
        <td>&nbsp;</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates'], 'certificate', false, 'code');
$_smarty_tpl->tpl_vars['certificate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['certificate']->value) {
$_smarty_tpl->tpl_vars['certificate']->do_else = false;
?>
        <tr>
            <td><a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['certificate']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td class="right text-success"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>"-".((string)$_smarty_tpl->tpl_vars['certificate']->value['cost'])), 0, true);
?></td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
