<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:49:11
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/search_filters/products_filter_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731fd47d74bf6_44667156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e750ebda74c85b36b1fb69fdf7d90052d8616a8' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/search_filters/products_filter_items.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/advanced_search_form.tpl' => 1,
  ),
),false)) {
function content_6731fd47d74bf6_44667156 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['filter_items']->value) {?>
    <div class="group form-horizontal">
        <div class="control-group">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/advanced_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_features'=>$_smarty_tpl->tpl_vars['filter_items']->value,'prefix'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)."_filter_",'data_name'=>"filter_variants"), 0, false);
?>
        </div>
    </div>
<?php }
}
}
