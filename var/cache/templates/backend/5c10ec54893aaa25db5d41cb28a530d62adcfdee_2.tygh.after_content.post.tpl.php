<?php
/* Smarty version 4.3.0, created on 2025-01-20 20:52:53
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_panel_configurator/hooks/index/after_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_678f2825903038_70997996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c10ec54893aaa25db5d41cb28a530d62adcfdee' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_panel_configurator/hooks/index/after_content.post.tpl',
      1 => 1735120883,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/theme_editor.tpl' => 1,
  ),
),false)) {
function content_678f2825903038_70997996 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/theme_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
