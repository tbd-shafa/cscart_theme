<?php
/* Smarty version 4.3.0, created on 2024-11-24 21:30:45
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_variations/components/variation_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67440b853021d7_05968843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36a2c680007a5edf00bd7e6e00bef79c7744320' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_variations/components/variation_features.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67440b853021d7_05968843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
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
if ($_smarty_tpl->tpl_vars['features_tags']->value) {?><div class="ty-product-variations__variation-features<?php if ($_smarty_tpl->tpl_vars['features_secondary']->value) {?> ty-product-variations__variation-features--secondary<?php }
if ($_smarty_tpl->tpl_vars['features_inline']->value) {?> ty-product-variations__variation-features--inline<?php }
if ($_smarty_tpl->tpl_vars['features_mini']->value) {?> ty-product-variations__variation-features--mini<?php }
if ($_smarty_tpl->tpl_vars['features_clearfix']->value) {?> ty-product-variations__variation-features--clearfix<?php }?>"><?php }
if ($_smarty_tpl->tpl_vars['features_brackets']->value) {?>(<?php }
echo htmlspecialchars((string) implode($_smarty_tpl->tpl_vars['features_separator']->value,$_smarty_tpl->tpl_vars['variant_names']->value), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['features_brackets']->value) {?>)<?php }
if ($_smarty_tpl->tpl_vars['features_split']->value) {?>&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['features_split']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['features_tags']->value) {?></div><?php }
}
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/components/variation_features.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/components/variation_features.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
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
if ($_smarty_tpl->tpl_vars['features_tags']->value) {?><div class="ty-product-variations__variation-features<?php if ($_smarty_tpl->tpl_vars['features_secondary']->value) {?> ty-product-variations__variation-features--secondary<?php }
if ($_smarty_tpl->tpl_vars['features_inline']->value) {?> ty-product-variations__variation-features--inline<?php }
if ($_smarty_tpl->tpl_vars['features_mini']->value) {?> ty-product-variations__variation-features--mini<?php }
if ($_smarty_tpl->tpl_vars['features_clearfix']->value) {?> ty-product-variations__variation-features--clearfix<?php }?>"><?php }
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
}
