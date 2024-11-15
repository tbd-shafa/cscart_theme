<?php
/* Smarty version 4.3.0, created on 2024-11-15 05:13:29
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/gift_certificates/hooks/orders/search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673748f938ab47_14531869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa0a8a19fafc694a0e3d52214a62644c4425c5d7' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/gift_certificates/hooks/orders/search_form.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673748f938ab47_14531869 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('gift_cert_code','purchased','used'));
?>
<label class="control-label" for="gift_cert_code"><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</label>
<div class="controls search-field">
    <input type="text" name="gift_cert_code" id="gift_cert_code" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
" size="30" class="input-text" />
    <select name="gift_cert_in">
        <option value="B|U">--</option>
        <option value="B" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in'] == "B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("purchased");?>
</option>
        <option value="U" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in'] == "U") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("used");?>
</option>
    </select>
</div><?php }
}
