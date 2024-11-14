<?php
/* Smarty version 4.3.0, created on 2024-11-14 02:32:04
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/buttons/save_changes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6735d1a4bcfd34_01181444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51e1c4fe93678cae11314ca743b8ae2fac2b28e3' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/buttons/save_changes.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6735d1a4bcfd34_01181444 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('save'));
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("save"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0, false);
}
}
