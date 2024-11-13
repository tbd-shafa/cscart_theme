<?php
/* Smarty version 4.3.0, created on 2024-11-13 04:58:21
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/help_center/hooks/menu/top_bar_right.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6734a26d2639f4_31180628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f3ebf12d09dc5cef8fdb8e5c925574f9aad1ef7' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/help_center/hooks/menu/top_bar_right.pre.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/component/help_center_popup.tpl' => 1,
  ),
),false)) {
function content_6734a26d2639f4_31180628 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <div class="top-bar__btn-wrapper dropdown dropdown-top-menu-item cm-dropdown-skip-processing help-center-menu">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php }
}
}
