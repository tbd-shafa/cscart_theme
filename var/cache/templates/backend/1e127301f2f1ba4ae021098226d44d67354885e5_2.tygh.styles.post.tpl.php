<?php
/* Smarty version 4.3.0, created on 2024-12-11 00:08:00
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6759486044d3e8_03623645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e127301f2f1ba4ae021098226d44d67354885e5' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/index/styles.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6759486044d3e8_03623645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/vendor_data_premoderation/styles.less"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['addon']->value['addon'] == "vendor_data_premoderation") {?>
    <?php echo smarty_function_style(array('src'=>"addons/vendor_data_premoderation/vendor_data_premoderation.less"),$_smarty_tpl);?>

<?php }
}
}
