<?php
/* Smarty version 4.3.0, created on 2024-11-19 20:52:21
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673d6b05e64360_84192318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33b1ef60112acce40afc1b27d378edbad383ded9' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673d6b05e64360_84192318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/manage.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/help_center_popup.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_block.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_nav_chapter.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_nav_item.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_section.less"),$_smarty_tpl);?>

<?php }
}
}
