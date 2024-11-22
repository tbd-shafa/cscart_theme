<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_features/components/variants_picker/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067611f88b4_57186699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '879c2aba05446866d673f96afa52f58797d25c27' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_features/components/variants_picker/picker.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/product_features/components/variants_picker/lazy_load.tpl' => 1,
    'tygh:views/product_features/components/variants_picker/item_color.tpl' => 4,
    'tygh:views/product_features/components/variants_picker/item_image.tpl' => 4,
    'tygh:views/product_features/components/variants_picker/item.tpl' => 4,
  ),
),false)) {
function content_674067611f88b4_57186699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),));
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search','none','none','add','add','add'));
?>

<?php $_smarty_tpl->_assignInScope('picker_id', (($tmp = $_smarty_tpl->tpl_vars['picker_id']->value ?? null)===null||$tmp==='' ? uniqid() ?? null : $tmp));
$_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('group_id', (($tmp = $_smarty_tpl->tpl_vars['group_id']->value ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['input_name']->value)."_group" ?? null : $tmp));
$_smarty_tpl->_assignInScope('multiple', (($tmp = $_smarty_tpl->tpl_vars['multiple']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_advanced', (($tmp = $_smarty_tpl->tpl_vars['show_advanced']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('autofocus', (($tmp = $_smarty_tpl->tpl_vars['autofocus']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('autoopen', (($tmp = $_smarty_tpl->tpl_vars['autoopen']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('close_on_select', (($tmp = $_smarty_tpl->tpl_vars['close_on_select']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_clear', (($tmp = $_smarty_tpl->tpl_vars['allow_clear']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_ids', array_filter((($tmp = $_smarty_tpl->tpl_vars['item_ids']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)));
$_smarty_tpl->_assignInScope('search_data', (($tmp = $_smarty_tpl->tpl_vars['search_data']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_tmp_array = isset($_smarty_tpl->tpl_vars['search_data']) ? $_smarty_tpl->tpl_vars['search_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['feature_id'] = $_smarty_tpl->tpl_vars['feature_id']->value;
$_smarty_tpl->_assignInScope('search_data', $_tmp_array);
$_smarty_tpl->_assignInScope('allow_add', (($tmp = $_smarty_tpl->tpl_vars['allow_add']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('template_type', (($tmp = $_smarty_tpl->tpl_vars['template_type']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('unremovable_item_ids', (($tmp = $_smarty_tpl->tpl_vars['unremovable_item_ids']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('enable_color', (($tmp = $_smarty_tpl->tpl_vars['enable_color']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('disabled', (($tmp = $_smarty_tpl->tpl_vars['disabled']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('lazy_load', (($tmp = $_smarty_tpl->tpl_vars['lazy_load']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('predefined_variants', (($tmp = $_smarty_tpl->tpl_vars['predefined_variants']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('predefined_variant_items', array());?>

<?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['predefined_variants']) ? $_smarty_tpl->tpl_vars['predefined_variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["0"] = $_smarty_tpl->tpl_vars['empty_variant_text']->value;
$_smarty_tpl->_assignInScope('predefined_variants', $_tmp_array);
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['predefined_variants']->value, 'variant', false, 'id');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['predefined_variant_items']) ? $_smarty_tpl->tpl_vars['predefined_variant_items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array("id"=>$_smarty_tpl->tpl_vars['id']->value,"text"=>$_smarty_tpl->tpl_vars['variant']->value,"data"=>array("name"=>$_smarty_tpl->tpl_vars['variant']->value));
$_smarty_tpl->_assignInScope('predefined_variant_items', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value && $_smarty_tpl->tpl_vars['show_advanced']->value) {?>
    <?php $_smarty_tpl->_assignInScope('empty_variant_text', (($tmp = $_smarty_tpl->tpl_vars['empty_variant_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search") ?? null : $tmp));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('empty_variant_text', (($tmp = $_smarty_tpl->tpl_vars['empty_variant_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp));
}?>

<?php $_smarty_tpl->_assignInScope('url', fn_url("product_features.get_variants_list"));
$_smarty_tpl->_assignInScope('meta', "cm-object-feature-variants-add-container ".((string)$_smarty_tpl->tpl_vars['meta']->value));?>

<div class="object-picker object-picker--feature-variants <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--feature-variants <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_group_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value == "list") {?>object-picker__simple--list<?php }?> <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> object-picker__simple--feature-variants <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>
                    class="cm-object-picker object-picker__select object-picker__select--feature-variants <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="product_feature_variants"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-close-on-select="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['close_on_select']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autoopen="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['empty_variant_text']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder-value=""
                    data-ca-object-picker-search-request-data="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['search_data']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-unremovable-item-ids="<?php echo htmlspecialchars((string) smarty_modifier_to_json(array_values($_smarty_tpl->tpl_vars['unremovable_item_ids']->value)), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-allow-clear="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['allow_clear']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-result-selector="#product_feature_picker_result_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-selector="#product_feature_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-load-selector="#product_feature_picker_selection_load_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-allow-multiple-created-objects="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['multiple']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
                        data-ca-object-picker-enable-create-object="true"
                        data-ca-object-picker-template-result-new-selector="#product_feature_picker_result_new_selector_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-template-selection-new-selector="#product_feature_picker_selection_new_selector_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-created-object-holder-selector="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['new_value_holder_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['dropdown_parent_selector']->value) {?>
                        data-ca-object-picker-dropdown-parent-selector="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_parent_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['enable_permanent_placeholder']->value) {?>
                        data-ca-object-picker-enable-permanent-placeholder="true"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['predefined_variant_items']->value) {?>
                        data-ca-object-picker-predefined-variants="<?php echo htmlspecialchars((string) smarty_modifier_to_json(array_reverse($_smarty_tpl->tpl_vars['predefined_variant_items']->value)), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>
                        data-ca-object-picker-lazy-load="true"
                    <?php }?>
            >
                <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'item_id');
$_smarty_tpl->tpl_vars['item_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['template_type']->value == "color" || $_smarty_tpl->tpl_vars['template_type']->value == "image" || $_smarty_tpl->tpl_vars['template_type']->value == "text") {?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" 
                            <?php if ($_smarty_tpl->tpl_vars['item_id']->value['selected']) {?> selected="selected"<?php }?>
                            data-data="<?php echo htmlspecialchars((string) smarty_modifier_to_json(array("id"=>$_smarty_tpl->tpl_vars['item_id']->value['variant_id'],"loaded"=>"true","data"=>array("name"=>$_smarty_tpl->tpl_vars['item_id']->value['variant'],"color"=>$_smarty_tpl->tpl_vars['item_id']->value['color']))), ENT_QUOTES, 'UTF-8');?>
">
                        </option>
                    <?php } else { ?> 
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/lazy_load.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_ids'=>$_smarty_tpl->tpl_vars['item_ids']->value,'template_type'=>$_smarty_tpl->tpl_vars['template_type']->value,'empty_variant_text'=>$_smarty_tpl->tpl_vars['empty_variant_text']->value,'group_id'=>$_smarty_tpl->tpl_vars['group_id']->value,'input_id'=>$_smarty_tpl->tpl_vars['input_id']->value), 0, false);
?>
            <?php }?>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/template" id="product_feature_picker_result_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result-product-feature">
        <?php if ($_smarty_tpl->tpl_vars['template_type']->value == "color") {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item_color.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('help'=>false,'enable_color'=>$_smarty_tpl->tpl_vars['enable_color']->value), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['template_type']->value == "image") {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('enable_image'=>$_smarty_tpl->tpl_vars['enable_images']->value), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>           
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="product_feature_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-product-feature">
        <?php if ($_smarty_tpl->tpl_vars['template_type']->value == "color") {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item_color.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('help'=>false,'enable_color'=>$_smarty_tpl->tpl_vars['enable_color']->value), 0, true);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['template_type']->value == "image") {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('enable_image'=>false), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="product_feature_picker_result_new_selector_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result-product-feature object-picker__result-product-feature--new">
        <?php if ($_smarty_tpl->tpl_vars['template_type']->value == "color") {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item_color.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title_pre'=>$_smarty_tpl->__("add"),'help'=>true,'enable_color'=>$_smarty_tpl->tpl_vars['enable_color']->value), 0, true);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['template_type']->value == "image") {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('enable_image'=>false,'title_pre'=>$_smarty_tpl->__("add")), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title_pre'=>$_smarty_tpl->__("add")), 0, true);
?>
        <?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="product_feature_picker_selection_new_selector_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-product-feature object-picker__selection-product-feature--new">
        <?php if ($_smarty_tpl->tpl_vars['template_type']->value == "color") {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item_color.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('help'=>false,'enable_color'=>$_smarty_tpl->tpl_vars['enable_color']->value), 0, true);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['template_type']->value == "image") {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('enable_image'=>false), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="product_feature_picker_selection_load_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton-product-feature">...</div>
<?php echo '</script'; ?>
><?php }
}
