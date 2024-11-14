<?php
/* Smarty version 4.3.0, created on 2024-11-13 21:33:09
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/search_filters/products_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67358b953e4761_94893609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba7492a081e1c03820335eeb9e7db7c3b764f69f' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/search_filters/products_category.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/categories/components/picker/picker.tpl' => 2,
  ),
),false)) {
function content_67358b953e4761_94893609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('all_categories','all_categories'));
if (is_array($_smarty_tpl->tpl_vars['search']->value['cid']) && smarty_modifier_count($_smarty_tpl->tpl_vars['search']->value['cid']) === 1) {?>
    <?php $_smarty_tpl->_assignInScope('s_cid', reset($_smarty_tpl->tpl_vars['search']->value['cid']));
} elseif (is_array($_smarty_tpl->tpl_vars['search']->value['cid']) && smarty_modifier_count($_smarty_tpl->tpl_vars['search']->value['cid']) !== 1) {?>
    <?php $_smarty_tpl->_assignInScope('s_cid', 0);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('s_cid', $_smarty_tpl->tpl_vars['search']->value['cid']);
}?>

<?php if (fn_show_picker("categories",(defined('CATEGORY_THRESHOLD') ? constant('CATEGORY_THRESHOLD') : null))) {?>
    <div class="controls">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"cid",'show_advanced'=>true,'multiple'=>false,'show_empty_variant'=>true,'item_ids'=>array($_smarty_tpl->tpl_vars['s_cid']->value),'empty_variant_text'=>$_smarty_tpl->__("all_categories"),'dropdown_css_class'=>"object-picker__dropdown--categories",'object_picker_advanced_btn_class'=>"cm-dialog-destroy-on-close",'attributes'=>array("data-ca-search-filters"=>"field")), 0, false);
?>
    </div>
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"cid",'show_advanced'=>true,'multiple'=>false,'show_empty_variant'=>true,'item_ids'=>array($_smarty_tpl->tpl_vars['s_cid']->value),'empty_variant_text'=>$_smarty_tpl->__("all_categories"),'dropdown_css_class'=>"object-picker__dropdown--categories",'object_picker_advanced_btn_class'=>"cm-dialog-destroy-on-close",'attributes'=>array("data-ca-search-filters"=>"field")), 0, true);
}
}
}
