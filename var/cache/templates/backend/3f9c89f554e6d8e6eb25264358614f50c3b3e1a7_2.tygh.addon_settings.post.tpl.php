<?php
/* Smarty version 4.3.0, created on 2024-11-13 04:58:20
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6734a26ce99389_08256621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f9c89f554e6d8e6eb25264358614f50c3b3e1a7' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6734a26ce99389_08256621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ($_smarty_tpl->tpl_vars['_addon']->value === "reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }
}
}
