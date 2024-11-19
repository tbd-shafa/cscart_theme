<?php
/* Smarty version 4.3.0, created on 2024-11-19 04:04:31
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/vendor_name.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673c7ecf668a97_79370404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c2ce704c2ef7115b408dc5a77bd1a6537615f55' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/vendor_name.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c7ecf668a97_79370404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
\Tygh\Languages\Helper::preloadLangVars(array('administrator'));
?>

<?php $_smarty_tpl->_assignInScope('NAME_CHARACTERS_THRESHOLD', 30);
if ($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company']) {?><a href="<?php echo htmlspecialchars((string) fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company_id'])), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_review_reply']->value['reply_company'],$_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD']->value,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?><span><?php echo $_smarty_tpl->__("administrator");?>
</span><?php }
}
}
