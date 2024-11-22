<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/product_assign_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067611a41d3_96786969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3d752f10f4a9c6b110b1e0bf2e45fd5b38224f0' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/product_assign_features.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/product_assign_feature.tpl' => 1,
    'tygh:common/subheader.tpl' => 1,
    'tygh:views/products/components/product_assign_features.tpl' => 2,
  ),
),false)) {
function content_674067611a41d3_96786969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value, 'feature', false, 'feature_id');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_id']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_assign_feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->tpl_vars['feature']->value,'feature_id'=>$_smarty_tpl->tpl_vars['feature_id']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value, 'feature', false, 'feature_id');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_id']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::GROUP") && $_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'additional_id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'target'=>"#acc_feature_".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id'])), 0, true);
?>
        <div id="acc_feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
" class="collapse in">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->tpl_vars['feature']->value['subfeatures']), 0, true);
?>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
