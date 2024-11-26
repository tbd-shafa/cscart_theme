<?php
/* Smarty version 4.3.0, created on 2024-11-26 01:31:48
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/buttons/sign_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67459584b7e257_85661083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23c979c9a7688b9d98a70c8f1850baef67cdfca3' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/buttons/sign_in.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_67459584b7e257_85661083 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('sign_in'));
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0, false);
}
}
