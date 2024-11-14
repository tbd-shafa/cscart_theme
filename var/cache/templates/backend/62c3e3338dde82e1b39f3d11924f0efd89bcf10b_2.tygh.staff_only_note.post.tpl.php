<?php
/* Smarty version 4.3.0, created on 2024-11-14 02:32:04
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6735d1a4a111f1_21722310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62c3e3338dde82e1b39f3d11924f0efd89bcf10b' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6735d1a4a111f1_21722310 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="center">
    <img src="<?php echo htmlspecialchars((string) fn_url("image.barcode?id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&type=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['type'])."&width=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['width'])."&height=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['height'])."&xres=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['resolution'])."&font=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['text_font'])."&no_session=Y"), ENT_QUOTES, 'UTF-8');?>
" alt="BarCode" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['barcode']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['barcode']['height'], ENT_QUOTES, 'UTF-8');?>
">
</div><?php }
}
