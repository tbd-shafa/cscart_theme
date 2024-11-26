<?php
/* Smarty version 4.3.0, created on 2024-11-26 01:30:49
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/hidpi/hooks/common/image.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674595495910e3_84384545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fa8b6f559fff98e9344fdd4b91f00ed64824ebe' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/hidpi/hooks/common/image.pre.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674595495910e3_84384545 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['image_data']->value['is_thumbnail']) {?>
    <?php $_smarty_tpl->_assignInScope('width', $_smarty_tpl->tpl_vars['image_data']->value['width']*2);?>
    <?php $_smarty_tpl->_assignInScope('height', $_smarty_tpl->tpl_vars['image_data']->value['height']*2);?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['width']->value,$_smarty_tpl->tpl_vars['height']->value));
} elseif ($_smarty_tpl->tpl_vars['image']->value['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['image_data']->value);?>
    <?php $_smarty_tpl->_assignInScope('image_data', fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image']->value['image_x'],$_smarty_tpl->tpl_vars['image']->value['image_y']) ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['image']->value['original_image_path']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['image']->value);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_data2x']) ? $_smarty_tpl->tpl_vars['image_data2x']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["image_path"] = $_smarty_tpl->tpl_vars['image']->value['original_image_path'];
$_smarty_tpl->_assignInScope('image_data2x', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_data2x']->value['image_path']) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["srcset"] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array ,false ,2);
}
}
}
