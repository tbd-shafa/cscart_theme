<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:50:02
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_bundles/components/common/bundle_scroller_init.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731fd7a047d03_89330134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aa2e1bf3f5e8f1e471f9e967e6a9e38214c13a2' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_bundles/components/common/bundle_scroller_init.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6731fd7a047d03_89330134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('bundle_count', smarty_modifier_count($_smarty_tpl->tpl_vars['bundle']->value['products']));
if ($_smarty_tpl->tpl_vars['bundle_count']->value <= 4) {
$_smarty_tpl->_assignInScope('item_quantity', $_smarty_tpl->tpl_vars['bundle_count']->value);
}
$_smarty_tpl->_assignInScope('item_quantity', (($tmp = $_smarty_tpl->tpl_vars['item_quantity']->value ?? null)===null||$tmp==='' ? 4 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_responsive', array("desktop"=>$_smarty_tpl->tpl_vars['item_quantity']->value,"desktop_small"=>$_smarty_tpl->tpl_vars['item_quantity']->value-1,"tablet"=>$_smarty_tpl->tpl_vars['item_quantity']->value-1,"mobile"=>1));
if ($_smarty_tpl->tpl_vars['item_quantity']->value > 3) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['item_quantity_responsive']) ? $_smarty_tpl->tpl_vars['item_quantity_responsive']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["desktop_small"] = $_smarty_tpl->tpl_vars['item_quantity']->value-1;
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['item_quantity_responsive']) ? $_smarty_tpl->tpl_vars['item_quantity_responsive']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["tablet"] = $_smarty_tpl->tpl_vars['item_quantity']->value-2;
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_tmp_array);
} elseif ($_smarty_tpl->tpl_vars['item_quantity']->value === 1) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['item_quantity_responsive']) ? $_smarty_tpl->tpl_vars['item_quantity_responsive']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["desktop_small"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['item_quantity_responsive']) ? $_smarty_tpl->tpl_vars['item_quantity_responsive']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["tablet"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['item_quantity_responsive']) ? $_smarty_tpl->tpl_vars['item_quantity_responsive']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["mobile"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_tmp_array);
}
$_smarty_tpl->_assignInScope('scroller_item_attrs', array("data-ca-scroller-item"=>$_smarty_tpl->tpl_vars['item_quantity']->value,"data-ca-scroller-item-desktop"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop"],"data-ca-scroller-item-desktop-small"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop_small"],"data-ca-scroller-item-tablet"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["tablet"],"data-ca-scroller-item-mobile"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["mobile"]));
$_smarty_tpl->_assignInScope('bundle_block', array('block_id'=>"product_bundle_".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id']),'properties'=>array('item_quantity'=>$_smarty_tpl->tpl_vars['item_quantity']->value,'not_scroll_automatically'=>smarty_modifier_enum("YesNo::YES"),'outside_navigation'=>true)));
$_smarty_tpl->_assignInScope('item_quantity', $_smarty_tpl->tpl_vars['item_quantity']->value ,false ,2);
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_smarty_tpl->tpl_vars['item_quantity_responsive']->value ,false ,2);
$_smarty_tpl->_assignInScope('scroller_item_attrs', $_smarty_tpl->tpl_vars['scroller_item_attrs']->value ,false ,2);
$_smarty_tpl->_assignInScope('bundle_block', $_smarty_tpl->tpl_vars['bundle_block']->value ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/common/bundle_scroller_init.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/common/bundle_scroller_init.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('bundle_count', smarty_modifier_count($_smarty_tpl->tpl_vars['bundle']->value['products']));
if ($_smarty_tpl->tpl_vars['bundle_count']->value <= 4) {
$_smarty_tpl->_assignInScope('item_quantity', $_smarty_tpl->tpl_vars['bundle_count']->value);
}
$_smarty_tpl->_assignInScope('item_quantity', (($tmp = $_smarty_tpl->tpl_vars['item_quantity']->value ?? null)===null||$tmp==='' ? 4 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_responsive', array("desktop"=>$_smarty_tpl->tpl_vars['item_quantity']->value,"desktop_small"=>$_smarty_tpl->tpl_vars['item_quantity']->value-1,"tablet"=>$_smarty_tpl->tpl_vars['item_quantity']->value-1,"mobile"=>1));
if ($_smarty_tpl->tpl_vars['item_quantity']->value > 3) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['item_quantity_responsive']) ? $_smarty_tpl->tpl_vars['item_quantity_responsive']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["desktop_small"] = $_smarty_tpl->tpl_vars['item_quantity']->value-1;
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['item_quantity_responsive']) ? $_smarty_tpl->tpl_vars['item_quantity_responsive']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["tablet"] = $_smarty_tpl->tpl_vars['item_quantity']->value-2;
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_tmp_array);
} elseif ($_smarty_tpl->tpl_vars['item_quantity']->value === 1) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['item_quantity_responsive']) ? $_smarty_tpl->tpl_vars['item_quantity_responsive']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["desktop_small"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['item_quantity_responsive']) ? $_smarty_tpl->tpl_vars['item_quantity_responsive']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["tablet"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['item_quantity_responsive']) ? $_smarty_tpl->tpl_vars['item_quantity_responsive']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["mobile"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_tmp_array);
}
$_smarty_tpl->_assignInScope('scroller_item_attrs', array("data-ca-scroller-item"=>$_smarty_tpl->tpl_vars['item_quantity']->value,"data-ca-scroller-item-desktop"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop"],"data-ca-scroller-item-desktop-small"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop_small"],"data-ca-scroller-item-tablet"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["tablet"],"data-ca-scroller-item-mobile"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["mobile"]));
$_smarty_tpl->_assignInScope('bundle_block', array('block_id'=>"product_bundle_".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id']),'properties'=>array('item_quantity'=>$_smarty_tpl->tpl_vars['item_quantity']->value,'not_scroll_automatically'=>smarty_modifier_enum("YesNo::YES"),'outside_navigation'=>true)));
$_smarty_tpl->_assignInScope('item_quantity', $_smarty_tpl->tpl_vars['item_quantity']->value ,false ,2);
$_smarty_tpl->_assignInScope('item_quantity_responsive', $_smarty_tpl->tpl_vars['item_quantity_responsive']->value ,false ,2);
$_smarty_tpl->_assignInScope('scroller_item_attrs', $_smarty_tpl->tpl_vars['scroller_item_attrs']->value ,false ,2);
$_smarty_tpl->_assignInScope('bundle_block', $_smarty_tpl->tpl_vars['bundle_block']->value ,false ,2);
}
}
}
