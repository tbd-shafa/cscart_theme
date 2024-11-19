<?php
/* Smarty version 4.3.0, created on 2024-11-19 04:03:59
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/help_center/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673c7eaff1ccc6_03220435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cae0c6416224db75a307f85c2e41d8b6327fda8' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/help_center/hooks/index/scripts.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c7eaff1ccc6_03220435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/help_center/help_center_background.js"),$_smarty_tpl);?>

<?php }
}
}
