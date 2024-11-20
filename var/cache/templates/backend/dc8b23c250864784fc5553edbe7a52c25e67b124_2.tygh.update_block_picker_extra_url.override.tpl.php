<?php
/* Smarty version 4.3.0, created on 2024-11-20 02:32:48
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/blog/hooks/block_manager/update_block_picker_extra_url.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673dbad010a827_99387583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc8b23c250864784fc5553edbe7a52c25e67b124' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/blog/hooks/block_manager/update_block_picker_extra_url.override.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673dbad010a827_99387583 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch'] == "pages.view?page_type=".((string)(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null))) {?>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'UTF-8');?>
&page_type=<?php echo htmlspecialchars((string) (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null), ENT_QUOTES, 'UTF-8');?>

<?php }
}
}
