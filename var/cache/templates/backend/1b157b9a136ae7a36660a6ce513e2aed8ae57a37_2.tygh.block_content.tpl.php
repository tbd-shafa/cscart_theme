<?php
/* Smarty version 4.3.0, created on 2024-11-20 02:32:48
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/block_manager/components/block_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673dbad007a826_29397515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b157b9a136ae7a36660a6ce513e2aed8ae57a37' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/block_manager/components/block_content.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/block_manager/components/setting_element.tpl' => 1,
  ),
),false)) {
function content_673dbad007a826_29397515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('apply_to_all_languages','block_smarty_block_deprecated_notice'));
$_smarty_tpl->_assignInScope('is_smarty_block', $_smarty_tpl->tpl_vars['block']->value['type'] === 'smarty_block' && $_smarty_tpl->tpl_vars['block']->value['properties']['template'] === 'blocks/smarty_block.tpl');
if ($_smarty_tpl->tpl_vars['block_scheme']->value['content']) {
if ($_smarty_tpl->tpl_vars['block_scheme']->value['multilanguage'] && $_smarty_tpl->tpl_vars['block']->value['block_id'] && smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="control-group"><div class="controls <?php if ($_smarty_tpl->tpl_vars['editable']->value) {?>cm-no-hide-input<?php }?>"><label class="checkbox"><input type="hidden" name="block_data[apply_to_all_langs]" value="N" /><input type="checkbox" id="apply_to_all_languages_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" name="block_data[apply_to_all_langs]" value="Y" /><?php echo $_smarty_tpl->__("apply_to_all_languages");?>
</label></div></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_scheme']->value['content'], 'setting_data', false, 'name');
$_smarty_tpl->tpl_vars['setting_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['setting_data']->value) {
$_smarty_tpl->tpl_vars['setting_data']->do_else = false;
if ($_smarty_tpl->tpl_vars['setting_data']->value['type'] != "function") {
if ((isset($_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value]))) {
$_smarty_tpl->_assignInScope('block_content_name', $_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value]);
} else {
$_smarty_tpl->_assignInScope('block_content_name', '');
}
$_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/setting_element.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>$_smarty_tpl->tpl_vars['setting_data']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value,'html_id'=>"block_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_content_".((string)$_smarty_tpl->tpl_vars['name']->value),'html_name'=>"block_data[content][".((string)$_smarty_tpl->tpl_vars['name']->value)."]",'editable'=>$_smarty_tpl->tpl_vars['editable']->value,'value'=>$_smarty_tpl->tpl_vars['block_content_name']->value,'readonly'=>$_smarty_tpl->tpl_vars['is_smarty_block']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['is_smarty_block']->value) {?><div class="alert alert-warning"><?php echo $_smarty_tpl->__("block_smarty_block_deprecated_notice");?>
</div><?php }
}
}
