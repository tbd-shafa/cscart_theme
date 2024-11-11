<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:42:30
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731fbb642d0e6_17509300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a0746901492490d1d06dd40fd6909165b5aa20' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6731fbb642d0e6_17509300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value && $_smarty_tpl->tpl_vars['shipping']->value['company_id'] == 0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }
}
}
