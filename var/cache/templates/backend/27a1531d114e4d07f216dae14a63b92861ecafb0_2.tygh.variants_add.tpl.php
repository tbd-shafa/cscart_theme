<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_options/components/variants_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067616b25e6_01963395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27a1531d114e4d07f216dae14a63b92861ecafb0' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_options/components/variants_add.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_status.tpl' => 1,
    'tygh:buttons/multiple_buttons.tpl' => 1,
    'tygh:common/attach_images.tpl' => 1,
  ),
),false)) {
function content_674067616b25e6_01963395 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('position','name','type_to_create','modifier','type','status','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','extra','icon','weight_modifier','type'));
echo smarty_function_script(array('src'=>"js/tygh/backend/variants_add.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('highlight_variants_add', (($tmp = $_smarty_tpl->tpl_vars['highlight_variants_add']->value ?? null)===null||$tmp==='' ? (!!$_smarty_tpl->tpl_vars['id']->value && ($_smarty_tpl->tpl_vars['num']->value !== 0)) ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_variants_add', (($tmp = $_smarty_tpl->tpl_vars['show_variants_add']->value ?? null)===null||$tmp==='' ? (!$_smarty_tpl->tpl_vars['id']->value || ($_smarty_tpl->tpl_vars['num']->value === 0)) ?? null : $tmp));
$_smarty_tpl->_assignInScope('vr', '');
echo smarty_function_math(array('equation'=>"x + 1",'assign'=>"num",'x'=>(($tmp = $_smarty_tpl->tpl_vars['num']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)),$_smarty_tpl);?>


<tbody class="hover cm-row-item
        <?php if ($_smarty_tpl->tpl_vars['highlight_variants_add']->value) {?>well<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['option_type']->value === smarty_modifier_enum("ProductOptionTypes::CHECKBOX") || !$_smarty_tpl->tpl_vars['show_variants_add']->value) {?> hidden<?php }?>"
    data-ca-variants-list="containerAdd"
    id="box_add_variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <tr><td class="cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_type']->value === smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>"data-th="<?php echo $_smarty_tpl->__("position");?>
"><input type="text" name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][position]"value="" size="3" class="input-micro" /></td><td class="cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_type']->value === smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>"data-th="<?php echo $_smarty_tpl->__("name");?>
"><input type="text" name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variant_name]"value=""placeholder="<?php echo $_smarty_tpl->__("type_to_create");?>
"class="input-full" /></td><td class="nowrap" data-th="<?php echo $_smarty_tpl->__("modifier");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("type");?>
"><input type="text" name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][modifier]"value="" size="5" class="input-mini cm-numeric" data-a-sep/>&nbsp;/&nbsp;<select class="input-xsmall" name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][modifier_type]"><option value="A"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</option><option value="P">%</option></select></td><td class="cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_type']->value === smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>"data-th="<?php echo $_smarty_tpl->__("status");?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"option_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."][status]",'display'=>"select",'meta'=>"input-mini"), 0, false);
?></td><td class="nowrap"><span id="on_extra_option_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"class="btn btn-expand hand cm-combination-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_right",'class'=>"events-none"),$_smarty_tpl);?>
</span><span id="off_extra_option_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
"alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"class="btn btn-expand hand hidden cm-combination-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_down",'class'=>"events-none"),$_smarty_tpl);?>
</span></td><td class="right cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_type']->value === smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"add_variant_".((string)$_smarty_tpl->tpl_vars['id']->value),'tag_level'=>"2"), 0, false);
?></td></tr>
    <tr id="extra_option_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-ex-op hidden"><td colspan="7" data-th="<?php echo $_smarty_tpl->__("extra");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_options:edit_product_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_options:edit_product_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="control-group cm-non-cb"><label class="control-label"><?php echo $_smarty_tpl->__("icon");?>
</label><div class="controls"><?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"variant_image",'image_key'=>$_smarty_tpl->tpl_vars['num']->value,'hide_titles'=>true,'no_detailed'=>true,'image_object_type'=>"variant_image",'image_type'=>"V",'prefix'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?></div></div><div class="control-group"><label class="control-label"><?php echo $_smarty_tpl->__("weight_modifier");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("type");?>
:</label><div class="controls flex-vertical-centered--on-mobile"><input type="text" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][weight_modifier]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
size="5" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="input-mini" />&nbsp;/&nbsp;<select name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][weight_modifier_type]"><option value="A"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
</option><option value="P">%</option></select></div></div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_options:edit_product_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td></tr>
</tbody>
<?php }
}
