<?php
/* Smarty version 4.3.0, created on 2024-11-14 02:32:04
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/modifier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6735d1a49ed189_26009440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8ffbdb4e645431cf61c75feb46c241ecf899c5e' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/modifier.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_6735d1a49ed189_26009440 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_integer']->value == true) {
$_smarty_tpl->_assignInScope('mod_value', round((float) $_smarty_tpl->tpl_vars['mod_value']->value, (int) 0, (int) 1));
}
if ($_smarty_tpl->tpl_vars['display_sign']->value) {
if ($_smarty_tpl->tpl_vars['mod_value']->value > 0) {?>+<?php } else { ?>-<?php }
}
if ($_smarty_tpl->tpl_vars['mod_type']->value == "A" || $_smarty_tpl->tpl_vars['mod_type']->value == "F") {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>abs($_smarty_tpl->tpl_vars['mod_value']->value)), 0, false);
} else {
if ($_smarty_tpl->tpl_vars['span_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) {?><span id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['span_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) abs($_smarty_tpl->tpl_vars['mod_value']->value), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['span_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) {?></span><?php }?>%<?php }
}
}
