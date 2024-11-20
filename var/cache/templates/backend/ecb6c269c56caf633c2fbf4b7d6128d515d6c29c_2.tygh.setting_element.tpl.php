<?php
/* Smarty version 4.3.0, created on 2024-11-20 02:32:48
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/block_manager/components/setting_element.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673dbad00a4d99_40444066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecb6c269c56caf633c2fbf4b7d6128d515d6c29c' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/block_manager/components/setting_element.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/block_manager/components/setting_element.tpl' => 3,
  ),
),false)) {
function content_673dbad00a4d99_40444066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('filling'));
$_smarty_tpl->_assignInScope('readonly', (($tmp = $_smarty_tpl->tpl_vars['readonly']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['option']->value['force_open']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
Tygh.$(document).ready(function() {
    Tygh.$('#additional_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['set_id']->value, ENT_QUOTES, 'UTF-8');?>
').show();
});
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if (!$_smarty_tpl->tpl_vars['option']->value['remove_indent']) {?>
<div class="control-group">
<?php if (!$_smarty_tpl->tpl_vars['option']->value['hide_label']) {?>
    <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['option']->value['required']) {?> cm-required<?php }?>"><?php if ($_smarty_tpl->tpl_vars['option']->value['option_name']) {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['option']->value['option_name']);
} else {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['name']->value);
}?></label>
<?php }?>
<div class="controls <?php if ($_smarty_tpl->tpl_vars['editable']->value) {?>cm-no-hide-input<?php }?>">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['option']->value['type'] == "checkbox") {?>
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="N" />
    <input type="checkbox" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value && $_smarty_tpl->tpl_vars['value']->value == "Y" || !$_smarty_tpl->tpl_vars['value']->value && $_smarty_tpl->tpl_vars['option']->value['default_value'] == "Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>readonly="readonly"<?php }?> />
<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == "selectbox") {?>
    <?php $_smarty_tpl->_assignInScope('value', (($tmp = $_smarty_tpl->tpl_vars['value']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] ?? null : $tmp));?>

    <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['values_settings']) {?>class="cm-reload-form"<?php }?> <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>readonly="readonly"<?php }?>>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['values'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php if ($_smarty_tpl->tpl_vars['option']->value['no_lang']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v']->value);
}?></option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <?php $_smarty_tpl->_assignInScope('values_settings', $_smarty_tpl->tpl_vars['option']->value['values_settings'][$_smarty_tpl->tpl_vars['value']->value]);?>

    <?php if ($_smarty_tpl->tpl_vars['values_settings']->value) {?>
        <div class="setting-select-values">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['values_settings']->value['settings'], 'setting_data', false, 'setting_name');
$_smarty_tpl->tpl_vars['setting_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting_name']->value => $_smarty_tpl->tpl_vars['setting_data']->value) {
$_smarty_tpl->tpl_vars['setting_data']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/setting_element.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>$_smarty_tpl->tpl_vars['setting_data']->value,'name'=>$_smarty_tpl->tpl_vars['setting_name']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value,'html_id'=>"block_".((string)$_smarty_tpl->tpl_vars['html_id']->value)."_properties_".((string)$_smarty_tpl->tpl_vars['name']->value)."_".((string)$_smarty_tpl->tpl_vars['setting_name']->value),'html_name'=>"block_data[properties][".((string)$_smarty_tpl->tpl_vars['name']->value)."][".((string)$_smarty_tpl->tpl_vars['value']->value)."][".((string)$_smarty_tpl->tpl_vars['setting_name']->value)."]",'editable'=>$_smarty_tpl->tpl_vars['editable']->value,'value'=>$_smarty_tpl->tpl_vars['block']->value['properties'][$_smarty_tpl->tpl_vars['name']->value][$_smarty_tpl->tpl_vars['value']->value][$_smarty_tpl->tpl_vars['setting_name']->value],'readonly'=>$_smarty_tpl->tpl_vars['readonly']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }
} elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == "input" || $_smarty_tpl->tpl_vars['option']->value['type'] == "input_long") {?>
    <input type="text" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-medium" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['value']->value || $_smarty_tpl->tpl_vars['value']->value === "0") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option']->value['default_value'], ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>readonly="readonly"<?php }?>/>

<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == "multiple_checkboxes") {?>

    <?php echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['html_name']->value,'options'=>$_smarty_tpl->tpl_vars['option']->value['values'],'columns'=>4,'selected'=>$_smarty_tpl->tpl_vars['value']->value,'readonly'=>$_smarty_tpl->tpl_vars['readonly']->value),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == "text" || $_smarty_tpl->tpl_vars['option']->value['type'] == "simple_text") {?>
    <textarea id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" cols="55" rows="8" class="<?php if ($_smarty_tpl->tpl_vars['option']->value['type'] == "text") {?>cm-wysiwyg<?php }?> input-textarea-long" <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>readonly="readonly"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
    <?php if ($_smarty_tpl->tpl_vars['option']->value['type'] == "text") {?>
                <!--processForm-->
    <?php }
} elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == "picker") {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['picker_params'], 'picker_param_value', false, 'picker_param_key');
$_smarty_tpl->tpl_vars['picker_param_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['picker_param_key']->value => $_smarty_tpl->tpl_vars['picker_param_value']->value) {
$_smarty_tpl->tpl_vars['picker_param_value']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope($_smarty_tpl->tpl_vars['picker_param_key']->value, $_smarty_tpl->tpl_vars['picker_param_value']->value);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['option']->value['picker'],'checkbox_name'=>"block_items",'data_id'=>"objects_".((string)$_smarty_tpl->tpl_vars['item']->value['chain_id'])."_",'input_name'=>((string)$_smarty_tpl->tpl_vars['html_name']->value),'item_ids'=>$_smarty_tpl->tpl_vars['value']->value,'params_array'=>$_smarty_tpl->tpl_vars['option']->value['picker_params']),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == "enum") {?>
    <?php if ($_smarty_tpl->tpl_vars['option']->value['fillings']) {?>
        <div class="control-group <?php if ($_smarty_tpl->tpl_vars['editable']->value) {?>cm-no-hide-input<?php }?>">
            <label class="control-label" for="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_filling"><?php echo $_smarty_tpl->__("filling");?>
</label>
            <div class="controls">
            <select id="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_filling" name="block_data[content][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][filling]" class="cm-reload-form" <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>readonly="readonly"<?php }?>>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['fillings'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value]['filling'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['k']->value);?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <?php $_smarty_tpl->_assignInScope('filling', $_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value]['filling']);?>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['filling']->value == 'manually') {?>
            <div class="control-group <?php if ($_smarty_tpl->tpl_vars['editable']->value) {?>cm-no-hide-input<?php }?>">
                <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['option']->value['fillings']['manually']['picker'],'checkbox_name'=>"block_items",'data_id'=>"objects_".((string)$_smarty_tpl->tpl_vars['item']->value['chain_id'])."_",'input_name'=>((string)$_smarty_tpl->tpl_vars['html_name']->value)."[item_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value]['item_ids'],'params_array'=>$_smarty_tpl->tpl_vars['option']->value['fillings']['manually']['picker_params'],'placement'=>"right"),$_smarty_tpl);?>

            </div>
        <?php }?>
        <?php if (is_array($_smarty_tpl->tpl_vars['option']->value['fillings'][$_smarty_tpl->tpl_vars['filling']->value]['settings'])) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['fillings'][$_smarty_tpl->tpl_vars['filling']->value]['settings'], 'setting_data', false, 'setting_name');
$_smarty_tpl->tpl_vars['setting_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting_name']->value => $_smarty_tpl->tpl_vars['setting_data']->value) {
$_smarty_tpl->tpl_vars['setting_data']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/setting_element.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>$_smarty_tpl->tpl_vars['setting_data']->value,'name'=>$_smarty_tpl->tpl_vars['setting_name']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value,'html_id'=>"block_".((string)$_smarty_tpl->tpl_vars['html_id']->value)."_properties_".((string)$_smarty_tpl->tpl_vars['name']->value)."_".((string)$_smarty_tpl->tpl_vars['setting_name']->value),'html_name'=>"block_data[content][".((string)$_smarty_tpl->tpl_vars['name']->value)."][".((string)$_smarty_tpl->tpl_vars['setting_name']->value)."]",'editable'=>$_smarty_tpl->tpl_vars['editable']->value,'value'=>$_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value][$_smarty_tpl->tpl_vars['setting_name']->value],'readonly'=>$_smarty_tpl->tpl_vars['readonly']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    <?php }
} elseif ($_smarty_tpl->tpl_vars['option']->value['type'] == "template") {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['option']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['value']->value), 0, true);
}?>

<?php if (!$_smarty_tpl->tpl_vars['option']->value['remove_indent']) {
if ($_smarty_tpl->tpl_vars['option']->value['tooltip']) {?>
    <p class="muted description"><?php echo $_smarty_tpl->tpl_vars['option']->value['tooltip'];?>
</p>
<?php }?>
</div></div>
<?php }
}
}
