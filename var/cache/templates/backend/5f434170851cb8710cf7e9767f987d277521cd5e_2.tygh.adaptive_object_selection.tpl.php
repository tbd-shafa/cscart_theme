<?php
/* Smarty version 4.3.0, created on 2024-11-13 02:52:40
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/adaptive_object_selection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673484f8d8f015_07324723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f434170851cb8710cf7e9767f987d277521cd5e' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/adaptive_object_selection.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/multiple_select_picker.tpl' => 1,
    'tygh:common/multiple_checkboxes.tpl' => 1,
  ),
),false)) {
function content_673484f8d8f015_07324723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<?php $_smarty_tpl->_assignInScope('items_limit', (($tmp = $_smarty_tpl->tpl_vars['items_limit']->value ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));?>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value) > $_smarty_tpl->tpl_vars['items_limit']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/multiple_select_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'item_ids'=>$_smarty_tpl->tpl_vars['item_ids']->value,'storefront_id'=>$_smarty_tpl->tpl_vars['storefront_id']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value,'id_field'=>$_smarty_tpl->tpl_vars['id_field']->value,'name_field'=>$_smarty_tpl->tpl_vars['name_field']->value,'load_items_url'=>$_smarty_tpl->tpl_vars['load_items_url']->value,'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[]",'class_prefix'=>$_smarty_tpl->tpl_vars['class_prefix']->value,'close_on_select'=>$_smarty_tpl->tpl_vars['close_on_select']->value,'is_disabled'=>$_smarty_tpl->tpl_vars['is_disabled']->value,'template_result_selector'=>$_smarty_tpl->tpl_vars['template_result_selector']->value,'template_result_new_selector'=>$_smarty_tpl->tpl_vars['template_result_new_selector']->value,'allow_add'=>$_smarty_tpl->tpl_vars['allow_add']->value), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/multiple_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'input_id'=>$_smarty_tpl->tpl_vars['input_id']->value,'item_ids'=>$_smarty_tpl->tpl_vars['item_ids']->value,'items'=>$_smarty_tpl->tpl_vars['items']->value,'id_field'=>$_smarty_tpl->tpl_vars['id_field']->value,'name_field'=>$_smarty_tpl->tpl_vars['name_field']->value), 0, false);
}
}
}
