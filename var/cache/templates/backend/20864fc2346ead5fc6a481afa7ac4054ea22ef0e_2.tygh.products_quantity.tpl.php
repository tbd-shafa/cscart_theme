<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:20
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/search_filters/products_quantity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406750a29783_03063287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20864fc2346ead5fc6a481afa7ac4054ea22ef0e' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/search_filters/products_quantity.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67406750a29783_03063287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('have_amount_filter', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_items']->value, 'ff');
$_smarty_tpl->tpl_vars['ff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ff']->value) {
$_smarty_tpl->tpl_vars['ff']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['ff']->value['field_type'] == "A") {?>
        <?php $_smarty_tpl->_assignInScope('have_amount_filter', 1);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_assignInScope('have_amount_filter', $_smarty_tpl->tpl_vars['have_amount_filter']->value ,false ,2);
}
}
