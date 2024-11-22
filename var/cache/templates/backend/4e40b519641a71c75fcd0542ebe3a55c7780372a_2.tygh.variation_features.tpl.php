<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:32
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/views/product_variations/components/variation_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740675c174906_88005218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e40b519641a71c75fcd0542ebe3a55c7780372a' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/views/product_variations/components/variation_features.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740675c174906_88005218 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['variation_features']->value) {
$_smarty_tpl->_assignInScope('variant_names', array());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variation_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM")) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['variant_names']) ? $_smarty_tpl->tpl_vars['variant_names']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['feature']->value['variant'];
$_smarty_tpl->_assignInScope('variant_names', $_tmp_array);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['variant_names']->value) {
$_smarty_tpl->_assignInScope('features_secondary', (($tmp = $_smarty_tpl->tpl_vars['features_secondary']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('features_brackets', (($tmp = $_smarty_tpl->tpl_vars['features_brackets']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('features_separator', (($tmp = $_smarty_tpl->tpl_vars['features_separator']->value ?? null)===null||$tmp==='' ? " • " ?? null : $tmp));
$_smarty_tpl->_assignInScope('features_split', $_smarty_tpl->tpl_vars['features_split']->value === true ? "—" : $_smarty_tpl->tpl_vars['features_split']->value);
$_smarty_tpl->_assignInScope('features_inline', (($tmp = $_smarty_tpl->tpl_vars['features_inline']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('features_mini', (($tmp = $_smarty_tpl->tpl_vars['features_mini']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('features_tags', (($tmp = $_smarty_tpl->tpl_vars['features_tags']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('features_clearfix', (($tmp = $_smarty_tpl->tpl_vars['features_clearfix']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['features_tags']->value) {?><div class="product-variations__variation-features<?php if ($_smarty_tpl->tpl_vars['features_secondary']->value) {?> product-variations__variation-features--secondary<?php }
if ($_smarty_tpl->tpl_vars['features_inline']->value) {?> product-variations__variation-features--inline<?php }
if ($_smarty_tpl->tpl_vars['features_mini']->value) {?> product-variations__variation-features--mini<?php }
if ($_smarty_tpl->tpl_vars['features_clearfix']->value) {?> product-variations__variation-features--clearfix<?php }?>"><?php }
if ($_smarty_tpl->tpl_vars['features_brackets']->value) {?>(<?php }
echo htmlspecialchars((string) implode($_smarty_tpl->tpl_vars['features_separator']->value,$_smarty_tpl->tpl_vars['variant_names']->value), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['features_brackets']->value) {?>)<?php }
if ($_smarty_tpl->tpl_vars['features_split']->value) {?>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['features_split']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['features_tags']->value) {?></div><?php }
}
}
}
}
