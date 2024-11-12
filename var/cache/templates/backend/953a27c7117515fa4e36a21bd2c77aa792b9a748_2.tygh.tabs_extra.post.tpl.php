<?php
/* Smarty version 4.3.0, created on 2024-11-11 21:11:05
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_communication/hooks/orders/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6732e3696362f0_18617718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953a27c7117515fa4e36a21bd2c77aa792b9a748' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_communication/hooks/orders/tabs_extra.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/thread_view.tpl' => 2,
  ),
),false)) {
function content_6732e3696362f0_18617718 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/thread_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value,'is_user_can_manage_order_thread'=>$_smarty_tpl->tpl_vars['is_user_can_manage_customer_order_thread']->value,'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0, false);
}
if ($_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/thread_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread'=>$_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value,'is_user_can_manage_order_thread'=>$_smarty_tpl->tpl_vars['is_user_can_manage_vendor_order_thread']->value,'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0, true);
}
}
}
