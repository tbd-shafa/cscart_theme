<?php
/* Smarty version 4.3.0, created on 2024-11-15 05:12:43
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/orders/extra_list.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673748cb6a98c5_10456431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbd2df1daafe23ca8281bc0bc3f7009a8a94eb26' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/orders/extra_list.pre.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/price.tpl' => 8,
  ),
),false)) {
function content_673748cb6a98c5_10456431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('print_card','gift_certificate','code','text_click_here','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free','free','print_card','gift_certificate','code','text_click_here','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free','free'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['gift_certificates'], 'gift', false, 'gift_key');
$_smarty_tpl->tpl_vars['gift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gift_key']->value => $_smarty_tpl->tpl_vars['gift']->value) {
$_smarty_tpl->tpl_vars['gift']->do_else = false;
?>
<tr>
    <td>
        <div class="ty-float-right"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"gift_certificates.print?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&gift_cert_cart_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_text'=>$_smarty_tpl->__("print_card"),'but_role'=>"text",'but_meta'=>"cm-new-window"), 0, true);
?></div>
        <span><?php echo $_smarty_tpl->__("gift_certificate");?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code']) {?>
         <div class="ty-orders-detail__table-code"><?php echo $_smarty_tpl->__("code");?>
: <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</a></div>
        <?php }?>
        <div class="ty-gift-certificate-order">
            <a id="sw_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination"><?php echo $_smarty_tpl->__("text_click_here");?>
</a>
            <div id="options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-discount-info hidden">
                <span class="ty-caret-info"> <span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("amount");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0, true);
?></span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("send_via");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via'] == "E") {
echo $_smarty_tpl->__("email");
} else {
echo $_smarty_tpl->__("postal_mail");
}?></span>
                </div>
            </div>
        </div>
    </td>
    
    <td><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0, true);
} else {
echo $_smarty_tpl->__("free");
}?></td>
    <td class="ty-center">&nbsp;1</td>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] !== "subtotal") {?>
        <td class="ty-center">
            <?php if (floatval($_smarty_tpl->tpl_vars['gift']->value['tax_value'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['tax_value']), 0, true);
} else { ?>-<?php }?>
        </td>
    <?php }?>
    <td><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0, true);
} else {
echo $_smarty_tpl->__("free");
}?></td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/orders/extra_list.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/orders/extra_list.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['gift_certificates'], 'gift', false, 'gift_key');
$_smarty_tpl->tpl_vars['gift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gift_key']->value => $_smarty_tpl->tpl_vars['gift']->value) {
$_smarty_tpl->tpl_vars['gift']->do_else = false;
?>
<tr>
    <td>
        <div class="ty-float-right"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"gift_certificates.print?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&gift_cert_cart_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_text'=>$_smarty_tpl->__("print_card"),'but_role'=>"text",'but_meta'=>"cm-new-window"), 0, true);
?></div>
        <span><?php echo $_smarty_tpl->__("gift_certificate");?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code']) {?>
         <div class="ty-orders-detail__table-code"><?php echo $_smarty_tpl->__("code");?>
: <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</a></div>
        <?php }?>
        <div class="ty-gift-certificate-order">
            <a id="sw_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination"><?php echo $_smarty_tpl->__("text_click_here");?>
</a>
            <div id="options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-discount-info hidden">
                <span class="ty-caret-info"> <span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("amount");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0, true);
?></span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("send_via");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via'] == "E") {
echo $_smarty_tpl->__("email");
} else {
echo $_smarty_tpl->__("postal_mail");
}?></span>
                </div>
            </div>
        </div>
    </td>
    
    <td><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0, true);
} else {
echo $_smarty_tpl->__("free");
}?></td>
    <td class="ty-center">&nbsp;1</td>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] !== "subtotal") {?>
        <td class="ty-center">
            <?php if (floatval($_smarty_tpl->tpl_vars['gift']->value['tax_value'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['tax_value']), 0, true);
} else { ?>-<?php }?>
        </td>
    <?php }?>
    <td><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0, true);
} else {
echo $_smarty_tpl->__("free");
}?></td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
}
}
