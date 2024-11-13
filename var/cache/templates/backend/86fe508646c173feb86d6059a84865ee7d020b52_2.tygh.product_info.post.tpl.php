<?php
/* Smarty version 4.3.0, created on 2024-11-13 05:00:55
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/reward_points/hooks/orders/product_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6734a307732d02_54004865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86fe508646c173feb86d6059a84865ee7d020b52' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/reward_points/hooks/orders/product_info.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6734a307732d02_54004865 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points'));
?>
<!-- Hook Reward points start -->
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price'] && $_smarty_tpl->tpl_vars['oi']->value) {?>
<p><strong><?php echo $_smarty_tpl->__("price_in_points");?>
:</strong> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<!-- Hook Reward points end --><?php }
}
