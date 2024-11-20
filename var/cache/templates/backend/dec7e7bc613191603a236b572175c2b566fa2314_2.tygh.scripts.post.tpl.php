<?php
/* Smarty version 4.3.0, created on 2024-11-19 20:48:51
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_panel_configurator/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673d6a3341c5d5_47758903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dec7e7bc613191603a236b572175c2b566fa2314' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_panel_configurator/hooks/index/scripts.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673d6a3341c5d5_47758903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/vendor_panel_configurator/vendor_panel_configurator.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_panel_configurator/colors.js"),$_smarty_tpl);?>

<?php }
}
