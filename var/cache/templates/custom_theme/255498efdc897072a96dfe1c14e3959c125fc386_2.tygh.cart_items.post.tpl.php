<?php
/* Smarty version 4.3.0, created on 2024-11-14 05:27:20
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6735fab83e3771_89295362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '255498efdc897072a96dfe1c14e3959c125fc386' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_6735fab83e3771_89295362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','gift_certificate','gift_certificate','gift_certificate'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['cart']->value['gift_certificates']) {?>

<?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['gift_certificates'], 'gift', false, 'gift_key', 'f_gift_certificates', array (
));
$_smarty_tpl->tpl_vars['gift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gift_key']->value => $_smarty_tpl->tpl_vars['gift']->value) {
$_smarty_tpl->tpl_vars['gift']->do_else = false;
?>
        <li class="ty-order-products__item">
            <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-order-products__a"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value),'but_meta'=>"ty-order-products__item-delete cm-post delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0, true);
?>
            <?php } else { ?>
                <strong><?php echo $_smarty_tpl->__("gift_certificate");?>
</strong>
            <?php }?>
            <div class="ty-order-products__price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0, true);
?></div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['gift_certificates']) {?>

<?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['gift_certificates'], 'gift', false, 'gift_key', 'f_gift_certificates', array (
));
$_smarty_tpl->tpl_vars['gift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gift_key']->value => $_smarty_tpl->tpl_vars['gift']->value) {
$_smarty_tpl->tpl_vars['gift']->do_else = false;
?>
        <li class="ty-order-products__item">
            <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-order-products__a"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value),'but_meta'=>"ty-order-products__item-delete cm-post delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0, true);
?>
            <?php } else { ?>
                <strong><?php echo $_smarty_tpl->__("gift_certificate");?>
</strong>
            <?php }?>
            <div class="ty-order-products__price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0, true);
?></div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
