<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676158f460_13753896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f41ebea1942f0277f897a33765638913be3e2da' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740676158f460_13753896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.verified_purchase','anonymous'));
?>

<?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer'] || $_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?><span class="flex-inline top"><?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer'] === smarty_modifier_enum("YesNo::YES")) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-ok-sign muted",'title'=>$_smarty_tpl->__("product_reviews.verified_purchase")),$_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['user_data']->value['is_anon']) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-eye-close muted",'title'=>$_smarty_tpl->__("anonymous")),$_smarty_tpl);
}?></span><?php }
}
}
