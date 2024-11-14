<?php
/* Smarty version 4.3.0, created on 2024-11-13 21:33:06
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_name_container.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67358b92980fb5_65510043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dcf16556f69fb2f604668555e2cc53c27e9a720' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_name_container.pre.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tooltip.tpl' => 1,
  ),
),false)) {
function content_67358b92980fb5_65510043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('approved_status', $_smarty_tpl->tpl_vars['product']->value['status'] !== smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED") && $_smarty_tpl->tpl_vars['product']->value['status'] !== smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && !$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->_assignInScope('non_editable', true ,false ,2);
}
if ($_smarty_tpl->tpl_vars['product']->value['premoderation_reason'] && !$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->_assignInScope('popup_additional_class', "dropdown--inline" ,false ,2);?>

    <?php ob_start();
echo nl2br((string) $_smarty_tpl->tpl_vars['product']->value['premoderation_reason'], (bool) 1);
$_prefixVariable28=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_prefixVariable28,'position'=>"middle"), 0, false);
}
}
}
