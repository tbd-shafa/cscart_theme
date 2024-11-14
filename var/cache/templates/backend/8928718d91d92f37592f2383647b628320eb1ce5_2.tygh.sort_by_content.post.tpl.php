<?php
/* Smarty version 4.3.0, created on 2024-11-13 21:33:09
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/bestsellers/hooks/products/sort_by_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67358b9540aed5_56331943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8928718d91d92f37592f2383647b628320eb1ce5' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/bestsellers/hooks/products/sort_by_content.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67358b9540aed5_56331943 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('bestsellers'));
$_tmp_array = isset($_smarty_tpl->tpl_vars['sort_by_content']) ? $_smarty_tpl->tpl_vars['sort_by_content']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['bestsellers'] = array('id'=>"bestsellers",'label'=>$_smarty_tpl->__("bestsellers"),'selected'=>($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "bestsellers"));
$_smarty_tpl->_assignInScope('sort_by_content', $_tmp_array);?>

<?php $_smarty_tpl->_assignInScope('sort_by_content', $_smarty_tpl->tpl_vars['sort_by_content']->value ,false ,2);?>

<?php }
}
