<?php
/* Smarty version 4.3.0, created on 2025-01-20 20:52:56
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/previewer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_678f2828e6f737_88122059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62db84217f78104aa71b65f5797143125e9b7ad4' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/previewer.tpl',
      1 => 1735120883,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678f2828e6f737_88122059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);
}
}
