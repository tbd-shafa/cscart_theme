<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:50:57
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_communication/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731fdb1cef776_28986153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '831d7b132445f4b8996dd23d0c7fbf435c1f9ab4' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_communication/hooks/index/scripts.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6731fdb1cef776_28986153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/vendor_communication/backend/vendor_communication.js"),$_smarty_tpl);
}
}
