<?php
/* Smarty version 4.3.0, created on 2024-11-21 05:22:42
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/paypal_checkout/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673f34225fb003_08583146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50a7bc178751183d00327cd73936880d0d4039e5' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/paypal_checkout/hooks/index/scripts.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673f34225fb003_08583146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/paypal_checkout/configure.js"),$_smarty_tpl);?>

<?php }
}
