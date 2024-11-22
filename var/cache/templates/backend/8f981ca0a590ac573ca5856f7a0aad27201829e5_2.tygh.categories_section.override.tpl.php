<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:36
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/categories_section.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406760b07615_25698704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f981ca0a590ac573ca5856f7a0aad27201829e5' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/categories_section.override.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67406760b07615_25698704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("categories")) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:categories_section"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:categories_section"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <!-- Overridden by the Product Variations add-on -->
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:categories_section"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
