<?php
/* Smarty version 4.3.0, created on 2025-01-20 20:52:53
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/companies/components/picker/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_678f28256f9a35_96540849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a8e7e9ee0a10b9cbfcdf7271bb68814af904d23' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/companies/components/picker/item.tpl',
      1 => 1735120883,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678f28256f9a35_96540849 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="object-picker__companies-main">
    <div class="object-picker__companies-name">
        <div class="object-picker__companies-name-content"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 <span>${data.name}</span> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }
}
