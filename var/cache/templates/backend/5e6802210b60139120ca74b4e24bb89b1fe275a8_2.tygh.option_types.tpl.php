<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_options/components/option_types.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676168cdb7_77698366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e6802210b60139120ca74b4e24bb89b1fe275a8' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_options/components/option_types.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740676168cdb7_77698366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('selectbox','radiogroup','checkbox','text','textarea','file','selectbox','radiogroup','checkbox','text','textarea','file'));
$_smarty_tpl->_assignInScope('selectbox', smarty_modifier_enum("ProductOptionTypes::SELECTBOX"));
$_smarty_tpl->_assignInScope('radio_group', smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP"));
$_smarty_tpl->_assignInScope('checkbox', smarty_modifier_enum("ProductOptionTypes::CHECKBOX"));
$_smarty_tpl->_assignInScope('input', smarty_modifier_enum("ProductOptionTypes::INPUT"));
$_smarty_tpl->_assignInScope('text', smarty_modifier_enum("ProductOptionTypes::TEXT"));
$_smarty_tpl->_assignInScope('file', smarty_modifier_enum("ProductOptionTypes::FILE"));?>

<?php if ($_smarty_tpl->tpl_vars['display']->value == "view") {
if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['selectbox']->value) {
echo $_smarty_tpl->__("selectbox");
} elseif ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['radio_group']->value) {
echo $_smarty_tpl->__("radiogroup");
} elseif ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['checkbox']->value) {
echo $_smarty_tpl->__("checkbox");
} elseif ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['input']->value) {
echo $_smarty_tpl->__("text");
} elseif ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['text']->value) {
echo $_smarty_tpl->__("textarea");
} elseif ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['file']->value) {
echo $_smarty_tpl->__("file");
}
} else {
if ($_smarty_tpl->tpl_vars['value']->value && $_smarty_tpl->tpl_vars['option_id']->value) {
if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['selectbox']->value || $_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['radio_group']->value) {
$_smarty_tpl->_assignInScope('app_types', ((string)$_smarty_tpl->tpl_vars['selectbox']->value).((string)$_smarty_tpl->tpl_vars['radio_group']->value));
} elseif ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['input']->value || $_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->_assignInScope('app_types', ((string)$_smarty_tpl->tpl_vars['input']->value).((string)$_smarty_tpl->tpl_vars['text']->value));
} elseif ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['checkbox']->value) {
$_smarty_tpl->_assignInScope('app_types', ((string)$_smarty_tpl->tpl_vars['checkbox']->value));
} else {
$_smarty_tpl->_assignInScope('app_types', ((string)$_smarty_tpl->tpl_vars['file']->value));
}
} else {
$_smarty_tpl->_assignInScope('app_types', '');
}?><select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['check']->value) {?>onchange="fn_check_option_type(this.value, this.id);"<?php }?>><?php if (!$_smarty_tpl->tpl_vars['app_types']->value || ($_smarty_tpl->tpl_vars['app_types']->value && strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['selectbox']->value) !== false)) {?><option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selectbox']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['selectbox']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("selectbox");?>
</option><?php }
if (!$_smarty_tpl->tpl_vars['app_types']->value || ($_smarty_tpl->tpl_vars['app_types']->value && strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['radio_group']->value) !== false)) {?><option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['radio_group']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['radio_group']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("radiogroup");?>
</option><?php }
if (!$_smarty_tpl->tpl_vars['app_types']->value || ($_smarty_tpl->tpl_vars['app_types']->value && strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['checkbox']->value) !== false)) {?><option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkbox']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['checkbox']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("checkbox");?>
</option><?php }
if (!$_smarty_tpl->tpl_vars['app_types']->value || ($_smarty_tpl->tpl_vars['app_types']->value && strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['input']->value) !== false)) {?><option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['input']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("text");?>
</option><?php }
if (!$_smarty_tpl->tpl_vars['app_types']->value || ($_smarty_tpl->tpl_vars['app_types']->value && strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['text']->value) !== false)) {?><option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['text']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("textarea");?>
</option><?php }
if (!$_smarty_tpl->tpl_vars['app_types']->value || ($_smarty_tpl->tpl_vars['app_types']->value && strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['file']->value) !== false)) {?><option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['file']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("file");?>
</option><?php }?></select><?php }
}
}
