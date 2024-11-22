<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/buttons/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067614f1ec0_92465054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '721642010f5390a61f376ca8e0265fcebc25b40c' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/buttons/create.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_674067614f1ec0_92465054 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('create'));
if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
	<?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->tpl_vars['but_text']->value);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('_but_text', $_smarty_tpl->__("create"));
}
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0, false);
}
}
