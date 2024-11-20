<?php
/* Smarty version 4.3.0, created on 2024-11-20 05:21:11
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/search_filters/context_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673de247ace7d4_90290829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ea0a751bd1fd4e8205e17564861da107ae80598' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/search_filters/context_search.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673de247ace7d4_90290829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('search'));
if ($_smarty_tpl->tpl_vars['context_search']->value) {
$_smarty_tpl->_assignInScope('label', (($tmp = $_smarty_tpl->tpl_vars['context_search']->value['label'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("search") ?? null : $tmp));
$_smarty_tpl->_assignInScope('form_id', (($tmp = $_smarty_tpl->tpl_vars['context_search']->value['form_id'] ?? null)===null||$tmp==='' ? "search_form" ?? null : $tmp));
$_smarty_tpl->_assignInScope('name', (($tmp = $_smarty_tpl->tpl_vars['context_search']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['context_search']->value['id'] ?? null : $tmp));?><div class="context-search"><label class="context-search__label input-prepend"><input type="search" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['context_search']->value['id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="input-fill context-search__input" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['context_search']->value['value']) {?>value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['context_search']->value['value'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
"/><span class="add-on context-search__addon"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"search"),$_smarty_tpl);?>
</span></label></div><?php }
}
}
