<?php
/* Smarty version 4.3.0, created on 2025-01-20 20:52:53
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/store_locator/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_678f2825983813_88513576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a4d3118152f391f380f4c4088b016a1a1380da0' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/store_locator/hooks/index/scripts.post.tpl',
      1 => 1735120883,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678f2825983813_88513576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/store_locator/configure_shipping.js"),$_smarty_tpl);?>

<?php }
}
