<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/product_assign_feature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067611be2b5_43792456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d1c4946614fb8983f8cd25e3d00f10cef018280' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/product_assign_feature.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/product_features/components/variants_picker/picker.tpl' => 2,
    'tygh:common/calendar.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_674067611be2b5_43792456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('none','none','delete'));
$_smarty_tpl->_assignInScope('allow_enter_variant', $_smarty_tpl->tpl_vars['allow_add_feature']->value && fn_allow_save_object($_smarty_tpl->tpl_vars['feature']->value,"product_features"));
$_smarty_tpl->_assignInScope('product_id', (($tmp = $_smarty_tpl->tpl_vars['product_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] == smarty_modifier_enum("ProductFeatureStyles::COLOR") || $_smarty_tpl->tpl_vars['feature']->value['filter_style'] == smarty_modifier_enum("ProductFilterStyles::COLOR")) {?>
    <?php $_smarty_tpl->_assignInScope('template_type', "color");?>
    <?php $_smarty_tpl->_assignInScope('enable_images', false);
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] == smarty_modifier_enum("ProductFeatureStyles::BRAND")) {?>
    <?php $_smarty_tpl->_assignInScope('template_type', "image");?>
    <?php $_smarty_tpl->_assignInScope('enable_images', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('template_type', "text");?>
    <?php $_smarty_tpl->_assignInScope('enable_images', false);
}?>

<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] != smarty_modifier_enum("ProductFeatures::GROUP")) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_feature"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_feature"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="control-group">
            <label class="control-label" for="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <a href="<?php echo htmlspecialchars((string) fn_url("product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['feature_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>

                </a>
                <div>
                    <small>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>

                    </small>
                </div>
            </label>
            <div class="controls">
                <div class="product-assign-features__row">
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>
                        <?php $_smarty_tpl->_assignInScope('value_selected', false);?>
                        <input type="hidden"
                               name="product_data[product_features][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                               id="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                               value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['selected']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['feature']->value['variant_id'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                        />
                        <input type="hidden"
                               name="product_data[add_new_variant][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
][variant]"
                               id="product_feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
_add_new_variant"
                               value=""
                        />
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['variants'][$_smarty_tpl->tpl_vars['feature']->value['variant_id']]) {?>
                            <?php $_smarty_tpl->_assignInScope('item_ids', array($_smarty_tpl->tpl_vars['feature']->value['variant_id']=>$_smarty_tpl->tpl_vars['feature']->value['variants'][$_smarty_tpl->tpl_vars['feature']->value['variant_id']]));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('item_ids', $_smarty_tpl->tpl_vars['feature']->value['variants']);?>
                        <?php }?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature_id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'input_name'=>"product_data[product_features][".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."]",'item_ids'=>(($tmp = $_smarty_tpl->tpl_vars['item_ids']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'multiple'=>false,'template_type'=>$_smarty_tpl->tpl_vars['template_type']->value,'allow_clear'=>true,'allow_add'=>$_smarty_tpl->tpl_vars['allow_enter_variant']->value,'new_value_holder_selector'=>"#product_feature_".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."_add_new_variant",'enable_image'=>$_smarty_tpl->tpl_vars['enable_images']->value), 0, false);
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")) {?>
                        <input type="hidden"
                               name="product_data[product_features][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                               value=""
                        />
                        <input type="hidden"
                               name="product_data[add_new_variant][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
][variant][]"
                               class="product_feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
_add_new_variant"
                               value=""
                        />
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_features/components/variants_picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('multiple'=>true,'feature_id'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id'],'input_name'=>"product_data[product_features][".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."][]",'item_ids'=>(($tmp = $_smarty_tpl->tpl_vars['feature']->value['variants'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'template_type'=>$_smarty_tpl->tpl_vars['template_type']->value,'allow_clear'=>false,'allow_add'=>$_smarty_tpl->tpl_vars['allow_enter_variant']->value,'new_value_holder_selector'=>".product_feature_".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."_add_new_variant",'enable_image'=>$_smarty_tpl->tpl_vars['enable_images']->value), 0, true);
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {?>
                        <label class="checkbox">
                            <input type="hidden" name="product_data[product_features][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                            <input type="checkbox" name="product_data[product_features][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" id="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['value'] == "Y") {?>checked="checked"<?php }?> /></label>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {?>
                        <?php ob_start();
echo $_smarty_tpl->__("none");
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"date_".((string)$_smarty_tpl->tpl_vars['feature_id']->value),'date_name'=>"product_data[product_features][".((string)$_smarty_tpl->tpl_vars['feature_id']->value)."]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['feature']->value['value_int'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'extra'=>"placeholder=\"-".$_prefixVariable5."-\""), 0, false);
?>
                    <?php } else { ?>
                        <input type="text"
                            name="product_data[product_features][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            value="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
if ($_smarty_tpl->tpl_vars['feature']->value['value_int'] != '') {
echo htmlspecialchars((string) floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']), ENT_QUOTES, 'UTF-8');
}
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');
}?>"
                            id="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {?> cm-value-decimal<?php }?> input-large"
                            placeholder="-<?php echo $_smarty_tpl->__("none");?>
-"/>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                    <?php if (empty($_smarty_tpl->tpl_vars['product_id']->value)) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"button-icon",'but_meta'=>"btn cm-assign-features_delete-item",'but_icon'=>"icon-trash product-update-features_delete-icon",'title'=>$_smarty_tpl->__("delete")), 0, false);
?>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_feature"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
