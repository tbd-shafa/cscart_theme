<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:39
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/tabs/manage_in_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406763361f82_93485083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8acfeb1df93283ecfe3a721f96aa194e902f7e40' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/tabs/manage_in_tab.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/tabs/manage.tpl' => 1,
  ),
),false)) {
function content_67406763361f82_93485083 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--content_product_tabs--></div>
<?php }
}
