<?php
/* Smarty version 4.3.0, created on 2024-11-11 03:08:21
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/menu/get_secondary_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731e5a5146627_51461200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bf117ab29182348a24dd31a7583fcbe0db65955' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/menu/get_secondary_items.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6731e5a5146627_51461200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "get_items", null, null);?>
        <?php if ((defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null)) {?>
        <?php $_smarty_tpl->_assignInScope('items', array());?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('items', $_smarty_tpl->tpl_vars['navigation']->value['static']['secondary']);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('secondary_items', $_smarty_tpl->tpl_vars['items']->value ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
