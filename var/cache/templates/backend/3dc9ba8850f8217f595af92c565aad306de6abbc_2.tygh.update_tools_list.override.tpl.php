<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_debt_payout/hooks/products/update_tools_list.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676131a8b5_12622668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dc9ba8850f8217f595af92c565aad306de6abbc' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_debt_payout/hooks/products/update_tools_list.override.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740676131a8b5_12622668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
if ($_smarty_tpl->tpl_vars['product_data']->value['product_type'] == smarty_modifier_enum("Addons\\VendorDebtPayout\\ProductTypes::DEBT_PAYOUT")) {?>
    <!-- empty -->
<?php }
}
}
