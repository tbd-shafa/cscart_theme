<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:49:11
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731fd47ba3b43_53327219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4c385c77daa4435be19c8257231eb3e7eafcfb3' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6731fd47ba3b43_53327219 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('sales_amount'));
?>
<div class="control-group">
    <label class="control-label" for="sales_amount_from"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
    <div class="controls">
        <input type="text" name="sales_amount_from" id="sales_amount_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sales_amount_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="sales_amount_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sales_amount_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
    </div>
</div><?php }
}
