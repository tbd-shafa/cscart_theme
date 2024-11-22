<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:36
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/update_product_name.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406760ae5022_86661794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb84cc0294c4016bfc2c4dc67130052d0d39536a' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/update_product_name.override.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67406760ae5022_86661794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("product")) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <!-- Overridden by the Product Variations add-on -->
    <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[product]" class="cm-no-hide-input">
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
