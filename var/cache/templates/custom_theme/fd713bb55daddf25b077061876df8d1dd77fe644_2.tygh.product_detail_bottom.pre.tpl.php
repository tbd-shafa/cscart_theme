<?php
/* Smarty version 4.3.0, created on 2024-11-19 04:04:04
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673c7eb4398e71_78591457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd713bb55daddf25b077061876df8d1dd77fe644' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl' => 2,
  ),
),false)) {
function content_673c7eb4398e71_78591457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_shipping_estimation', (($tmp = $_smarty_tpl->tpl_vars['show_shipping_estimation']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping_methods'=>null,'product_id'=>(($tmp = $_smarty_tpl->tpl_vars['shipping_estimation_product_id']->value ?? null)===null||$tmp==='' ? null ?? null : $tmp)), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_shipping_estimation', (($tmp = $_smarty_tpl->tpl_vars['show_shipping_estimation']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping_methods'=>null,'product_id'=>(($tmp = $_smarty_tpl->tpl_vars['shipping_estimation_product_id']->value ?? null)===null||$tmp==='' ? null ?? null : $tmp)), 0, true);
}
}
}
}
