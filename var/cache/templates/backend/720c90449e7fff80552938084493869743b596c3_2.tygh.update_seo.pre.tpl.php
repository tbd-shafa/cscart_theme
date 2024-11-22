<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/seo/hooks/products/update_seo.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067610cf461_82285444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '720c90449e7fff80552938084493869743b596c3' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/seo/hooks/products/update_seo.pre.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/seo/common/seo_name_field.tpl' => 1,
  ),
),false)) {
function content_674067610cf461_82285444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),));
if ($_smarty_tpl->tpl_vars['view_uri']->value && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"seo",'section'=>"main",'field'=>"seo_name_field"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"seo",'section'=>"main",'field'=>"seo_name_field"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_data'=>$_smarty_tpl->tpl_vars['product_data']->value,'object_name'=>"product_data",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'object_type'=>"p",'share_dont_hide'=>true), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"seo",'section'=>"main",'field'=>"seo_name_field"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
