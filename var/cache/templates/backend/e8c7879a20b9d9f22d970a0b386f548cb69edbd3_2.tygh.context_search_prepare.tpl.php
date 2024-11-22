<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:20
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/search_filters/context_search_prepare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406750b453e5_60144273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c7879a20b9d9f22d970a0b386f548cb69edbd3' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/search_filters/context_search_prepare.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67406750b453e5_60144273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.unset_key.php','function'=>'smarty_modifier_unset_key',),));
if ($_smarty_tpl->tpl_vars['search_filters']->value) {?>
        <?php $_smarty_tpl->_assignInScope('context_search', array());?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_filters']->value['data'], 'search_filter', false, 'search_filter_key');
$_smarty_tpl->tpl_vars['search_filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['search_filter_key']->value => $_smarty_tpl->tpl_vars['search_filter']->value) {
$_smarty_tpl->tpl_vars['search_filter']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['priority'] && $_smarty_tpl->tpl_vars['search_filter']->value['type'] === "input" && (empty($_smarty_tpl->tpl_vars['context_search']->value) || $_smarty_tpl->tpl_vars['search_filter']->value['priority'] >= $_smarty_tpl->tpl_vars['context_search']->value['priority'])) {?>
            <?php $_smarty_tpl->_assignInScope('context_search', $_smarty_tpl->tpl_vars['search_filter']->value);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['context_search']) ? $_smarty_tpl->tpl_vars['context_search']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['form_id'] = $_smarty_tpl->tpl_vars['form_id']->value;
$_smarty_tpl->_assignInScope('context_search', $_tmp_array);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if ($_smarty_tpl->tpl_vars['context_search']->value && $_smarty_tpl->tpl_vars['context_search']->value['id']) {?>
        <?php $_smarty_tpl->_assignInScope('search_filters_without_context_search', $_smarty_tpl->tpl_vars['search_filters']->value);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['search_filters_without_context_search']) ? $_smarty_tpl->tpl_vars['search_filters_without_context_search']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data'] = smarty_modifier_unset_key($_smarty_tpl->tpl_vars['search_filters']->value['data'],$_smarty_tpl->tpl_vars['context_search']->value['id']);
$_smarty_tpl->_assignInScope('search_filters_without_context_search', $_tmp_array);?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['context_search']->value) {?>
        <?php $_smarty_tpl->_assignInScope('search_filters_without_context_search', $_smarty_tpl->tpl_vars['search_filters_without_context_search']->value ,false ,2);?>
        <?php $_smarty_tpl->_assignInScope('context_search', $_smarty_tpl->tpl_vars['context_search']->value ,false ,2);?>
    <?php }
}
}
}
