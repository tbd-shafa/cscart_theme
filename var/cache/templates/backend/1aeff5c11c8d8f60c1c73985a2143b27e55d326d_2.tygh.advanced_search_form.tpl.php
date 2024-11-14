<?php
/* Smarty version 4.3.0, created on 2024-11-13 21:33:09
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/advanced_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67358b95220330_34161766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aeff5c11c8d8f60c1c73985a2143b27e55d326d' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/advanced_search_form.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/calendar.tpl' => 2,
  ),
),false)) {
function content_67358b95220330_34161766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_field','none','your_range','none','yes','no'));
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['filter_features']->value,'size'=>"2",'assign'=>"splitted_filter",'preverse_keys'=>true),$_smarty_tpl);?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_filter']->value, 'filters_row', false, NULL, 'filters_row', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['filters_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filters_row']->value) {
$_smarty_tpl->tpl_vars['filters_row']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_filters_row']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_filters_row']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_filters_row']->value['index'];
?>

<div class="table-wrapper table-responsive-wrapper">
    <table class="table-responsive table-responsive--nopadding table-responsive--centered">
    <thead>
        <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters_row']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value && $_smarty_tpl->tpl_vars['filter']->value['feature_type']) {?>
            <td><strong><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['filter']->value['filter'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['description'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</strong></td>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
    </thead>

    <tbody>
        <tr valign="top" <?php if ((smarty_modifier_sizeof($_smarty_tpl->tpl_vars['splitted_filter']->value) > 1) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_filters_row']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_filters_row']->value['first'] : null)) {?>class="delim"<?php }?>>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters_row']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>

            <?php if ($_smarty_tpl->tpl_vars['filter']->value && $_smarty_tpl->tpl_vars['filter']->value['feature_type']) {?>
                <?php $_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['filter']->value['filter_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['feature_id'] ?? null : $tmp));?>
                <td width="350px" data-th="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['filter']->value['filter'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['description'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX") || $_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::EXTENDED") || $_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX") || $_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX") && !$_smarty_tpl->tpl_vars['id']->value) {?>
                        <div class="object-selector object-selector--mobile-full-width object-selector--half-width">
                            <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    class="cm-object-selector"
                                    multiple
                                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][]"
                                    data-ca-placeholder=<?php echo $_smarty_tpl->__("admin_search_field");?>

                                    data-ca-enable-images="true"
                                    data-ca-image-width="30"
                                    data-ca-image-height="30"
                                    data-ca-enable-search="true"
                                    data-ca-page-size="10"
                                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_id']) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['use_variant_picker']) {?>
                                    data-ca-load-via-ajax="true"
                                    <?php }?>
                                    data-ca-data-url="<?php echo fn_url("product_features.get_variants_list?feature_id=".((string)$_smarty_tpl->tpl_vars['filter']->value['feature_id']));?>
"
                                    <?php }?>
                                    data-ca-close-on-select="false">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['variants'], 'variant', false, 'variant_id');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant_id']->value => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['variant_id']->value,$_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['data_name']->value][$_smarty_tpl->tpl_vars['id']->value])) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD") || $_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX") && $_smarty_tpl->tpl_vars['id']->value || $_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE") || $_smarty_tpl->tpl_vars['filter']->value['condition_type'] == "D") {?>
                        <div>
                            <label class="radio"><input class="cm-switch-availability cm-switch-inverse" type="radio" name="range_selected[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
select_custom_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_N" value="" checked="checked" /><?php echo $_smarty_tpl->__("none");?>

                            </label>
                        </div>

                        <?php $_smarty_tpl->_assignInScope('disable', true);?>
                        <label class="radio"><input class="cm-switch-availability" type="radio" name="range_selected[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
select_custom_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_Y" value="1" <?php if ($_smarty_tpl->tpl_vars['search']->value['range_selected'][$_smarty_tpl->tpl_vars['id']->value]) {
$_smarty_tpl->_assignInScope('disable', false);?>checked="checked"<?php }?>  /><?php echo $_smarty_tpl->__("your_range");?>
</label>

                        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
select_custom_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {?>
                                <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('date_extra', "disabled=\"disabled\"");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('date_extra', '');?>
                                <?php }?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."range_".((string)$_smarty_tpl->tpl_vars['id']->value)."_from",'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['id']->value)."][0]",'date_val'=>$_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['data_name']->value][$_smarty_tpl->tpl_vars['id']->value][0],'extra'=>$_smarty_tpl->tpl_vars['date_extra']->value,'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, true);
?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."range_".((string)$_smarty_tpl->tpl_vars['id']->value)."_to",'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['id']->value)."][1]",'date_val'=>$_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['data_name']->value][$_smarty_tpl->tpl_vars['id']->value][1],'extra'=>$_smarty_tpl->tpl_vars['date_extra']->value,'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, true);
?>

                            <?php } else { ?>

                                <?php $_smarty_tpl->_assignInScope('from_value', $_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['data_name']->value][$_smarty_tpl->tpl_vars['id']->value][0]);?>
                                <?php $_smarty_tpl->_assignInScope('to_value', $_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['data_name']->value][$_smarty_tpl->tpl_vars['id']->value][1]);?>

                                <input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][0]" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
range_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_from" size="3" class="input-mini" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['from_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled="disabled"<?php }?> />-<input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][1]" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
range_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_to" size="3" class="input-mini" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['to_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled="disabled"<?php }?> />
                            <?php }?>
                        </div>

                    <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX") || $_smarty_tpl->tpl_vars['filter']->value['condition_type'] == "C") {?>
                            <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_none" class="radio">
                            <input type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][]" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_none" value="" <?php if (!$_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['data_name']->value][$_smarty_tpl->tpl_vars['id']->value][0]) {?>checked="checked"<?php }?> />
                            <?php echo $_smarty_tpl->__("none");?>
</label>

                            <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_yes" class="radio">
                            <input type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][]" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_yes" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['data_name']->value][$_smarty_tpl->tpl_vars['id']->value][0] == "Y") {?>checked="checked"<?php }?> />
                            <?php echo $_smarty_tpl->__("yes");?>
</label>

                            <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_no" class="radio">
                            <input type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][]" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
ranges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_no" value="N" <?php if ($_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['data_name']->value][$_smarty_tpl->tpl_vars['id']->value][0] == "N") {?>checked="checked"<?php }?> />
                            <?php echo $_smarty_tpl->__("no");?>
</label>

                    <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::TEXT_FIELD")) {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
<input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][]" class="input-mini" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['data_name']->value][$_smarty_tpl->tpl_vars['id']->value][0], ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>

                    <?php }?>
                </td>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
    </tbody>
    </table>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
