<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:36
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406760ab3848_58627841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4afce87968fb39e1f97fbd85e79b8850cbb660be' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/update.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 6,
    'tygh:components/append_language.tpl' => 8,
    'tygh:buttons/update_for_all.tpl' => 9,
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:views/categories/components/picker/picker.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:views/products/components/status_on_update.tpl' => 1,
    'tygh:common/form_file_uploader.tpl' => 1,
    'tygh:common/adaptive_object_selection.tpl' => 1,
    'tygh:common/select_usergroups.tpl' => 1,
    'tygh:common/calendar.tpl' => 2,
    'tygh:views/products/components/products_shipping_settings.tpl' => 1,
    'tygh:views/products/components/products_update_qty_discounts.tpl' => 1,
    'tygh:views/products/components/products_update_features.tpl' => 1,
    'tygh:common/view_tools.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:views/products/components/products_update_options.tpl' => 1,
    'tygh:views/products/components/products_update_files.tpl' => 1,
    'tygh:views/products/components/product_subscribers.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_67406760ab3848_58627841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),5=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),6=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),7=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('information','name','text_ult_product_store_field_tooltip','categories','tt_views_products_update_categories','price','full_description','edit_content_on_site','images','tt_views_products_update_images','simultaneous','sequential','simultaneous','sequential','options_type','simultaneous','sequential','forbidden','allowed','forbidden','allowed','exceptions_type','forbidden','allowed','options_settings','pricing_inventory','sku','list_price','tt_views_products_update_list_price','in_stock','zpa_refuse','zpa_permit','zpa_ask_price','zpa_refuse','zpa_permit','zpa_ask_price','zero_price_action','zpa_refuse','zpa_permit','zpa_ask_price','yes','no','yes','no','track_inventory','track_inventory_tooltip','yes','no','min_order_qty','max_order_qty','quantity_step','list_quantity_count','taxes','availability','usergroups','creation_date','available_since','out_of_stock_actions','none','buy_in_advance','sign_up_for_notification','tt_views_products_update_out_of_stock_actions','product_details_view','downloadable','edp_enable_shipping','time_unlimited_download','short_description','popularity','ttc_popularity','search_words','ttc_search_words','promo_text','extra','global_individual.additional_settings','seo_meta_data','page_title','meta_description','meta_keywords','preview','clone','delete','new_product'));
echo smarty_function_script(array('src'=>"js/tygh/backend/categories.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
    <?php $_smarty_tpl->_assignInScope('direction', "right");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('direction', "left");
}
$_smarty_tpl->_assignInScope('page_title_seo_length', 60);
$_smarty_tpl->_assignInScope('description_seo_length', 145);
$_smarty_tpl->_assignInScope('has_global_individual_settings_permission', ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['config']->value['tweaks']['allow_global_individual_settings'] && fn_check_permissions("settings","update","admin","POST") && !fn_allowed_for("ULTIMATE:FREE")));
$_smarty_tpl->_assignInScope('allow_negative_amount', $_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount'] === smarty_modifier_enum("YesNo::YES"));
$_smarty_tpl->_assignInScope('cm_value_decimal_class', $_smarty_tpl->tpl_vars['allow_negative_amount']->value ? "cm-value-decimal-signed" : "cm-value-decimal");?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
        
        <?php $_smarty_tpl->_assignInScope('categories_company_id', $_smarty_tpl->tpl_vars['product_data']->value['company_id']);?>
        <?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['product_data']->value,"product"));?>

        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php $_smarty_tpl->_assignInScope('categories_company_id', '');?>
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product_data']->value['shared_product'] == "Y" && $_smarty_tpl->tpl_vars['product_data']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <?php $_smarty_tpl->_assignInScope('no_hide_input_if_shared_product', "cm-no-hide-input");?>
                <?php $_smarty_tpl->_assignInScope('is_shared_product', true);?>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product_data']->value['shared_product'] == "Y") {?>
                <?php $_smarty_tpl->_assignInScope('show_update_for_all', true);?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_id']) {?>
            <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['product_data']->value['product_id']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('id', 0);?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('is_form_readonly', fn_check_form_permissions('') || ($_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && (fn_allowed_for("MULTIVENDOR") || $_smarty_tpl->tpl_vars['product_data']->value['shared_product'] == "Y") && $_smarty_tpl->tpl_vars['product_data']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id']));?>
        <?php $_smarty_tpl->_assignInScope('hide_inputs', $_smarty_tpl->tpl_vars['is_form_readonly']->value);?>
        <?php $_smarty_tpl->_assignInScope('hide_inputs_if_shared_product', $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value === "cm-no-hide-input" ? false : $_smarty_tpl->tpl_vars['is_form_readonly']->value);?>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === "update" && !$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
            <?php $_smarty_tpl->_assignInScope('input_append', "input-append");?>
            <?php $_smarty_tpl->_assignInScope('input_append_wysiwyg', "input-append input-append--wysiwyg");?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === "update" && (!$_smarty_tpl->tpl_vars['hide_inputs']->value || !$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('input_append_if_shared_product', "input-append");?>
            <?php $_smarty_tpl->_assignInScope('input_append_wysiwyg_if_shared_product', "input-append input-append--wysiwyg");?>
        <?php }?>

        <form id="form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="product_update_form" class="form-horizontal form-edit  cm-disable-empty-files <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>cm-hide-inputs<?php }?>" enctype="multipart/form-data">             <input type="hidden" name="fake" value="1" />
            <input type="hidden" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

            
            <div class="product-manage <?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "detailed") {?>hidden<?php }?>" id="content_detailed"> 
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"information"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("information"),'target'=>"#acc_information"), 0, false);
?>

                    <div id="acc_information" class="collapse in collapse-visible">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"product"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <label for="product_description_product" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
                                    <div class="controls">
                                        <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <input class="input-large"
                                                form="form"
                                                type="text"
                                                name="product_data[product]"
                                                id="product_description_product"
                                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product'], ENT_QUOTES, 'UTF-8');?>
"
                                            />
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value), 0, false);
?>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"product",'name'=>"update_all_vendors[product]",'component'=>"products.product",'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, false);
?>
                                        </div>
                                    </div>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:categories_section"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:categories_section"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:product_details_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:product_details_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"company_id"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"company_id"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                                        <?php $_smarty_tpl->_assignInScope('result_ids', "product_categories");?>

                                        <?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['mode']->value != "add") {?>
                                            <?php $_smarty_tpl->_assignInScope('js_action', "fn_change_vendor_for_product();");?>
                                        <?php }?>

                                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                                            <?php $_smarty_tpl->_assignInScope('companies_tooltip', $_smarty_tpl->__("text_ult_product_store_field_tooltip"));?>
                                        <?php }?>

                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"product_data[company_id]",'id'=>"product_data_company_id",'selected'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'tooltip'=>$_smarty_tpl->tpl_vars['companies_tooltip']->value), 0, false);
?>
                                    <?php }?>
                                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"company_id"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:product_details_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"category_ids"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"category_ids"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" name="result_ids">

                                <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
 product-category" id="product_categories">
                                    <?php $_smarty_tpl->_assignInScope('rnd', rand());?>
                                    <?php $_smarty_tpl->_assignInScope('request_category_id', '');?>
                                    <?php if ($_REQUEST['category_id']) {?>
                                        <?php $_smarty_tpl->_assignInScope('request_category_id', smarty_modifier_explode(",",$_REQUEST['category_id']));?>
                                    <?php }?>
                                    <label for="product_categories_add_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required control-label--product-categories"><?php echo $_smarty_tpl->__("categories");?>
</label>
                                    <div class="controls">
                                        <?php $_smarty_tpl->_assignInScope('company_id', (($tmp = (($tmp = $_REQUEST['product_data']['company_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['company_id'] ?? null : $tmp));?>
                                        <?php if (!$_smarty_tpl->tpl_vars['company_id']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('company_id', $_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value ? 0 : fn_get_default_company_id());?>
                                        <?php }?>

                                        <input type="hidden" name="product_data[add_new_category][]" value=""/>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"product_data[category_ids][]",'simple_class'=>"cm-field-container",'multiple'=>true,'id'=>"product_categories_add_".((string)$_smarty_tpl->tpl_vars['rnd']->value),'tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'item_ids'=>$_smarty_tpl->tpl_vars['product_data']->value['category_ids'],'meta'=>"input-large object-categories-add object-categories-add--multiple",'show_advanced'=>true,'allow_add'=>fn_check_permissions("categories","update","admin","POST"),'allow_sorting'=>true,'result_class'=>"object-picker__result--inline",'selection_class'=>"object-picker__selection--product-categories",'required'=>true,'close_on_select'=>false,'allow_multiple_created_objects'=>true,'created_object_holder_selector'=>"[name='product_data[add_new_category][]']",'query_params'=>array("company_id"=>$_smarty_tpl->tpl_vars['company_id']->value)), 0, false);
?>
                                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_products_update_categories");?>
</p>
                                    </div>
                                <!--product_categories--></div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"category_ids"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:categories_section"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_update_price"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_update_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"price"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <label for="elm_price_price" class="control-label cm-required"><?php echo $_smarty_tpl->__("price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
):</label>
                                    <div class="controls">
                                        <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <input type="text"
                                                name="product_data[price]"
                                                id="elm_price_price"
                                                value="<?php echo htmlspecialchars((string) fn_format_price((($tmp = $_smarty_tpl->tpl_vars['product_data']->value['price'] ?? null)===null||$tmp==='' ? "0.00" ?? null : $tmp),$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
"
                                                class="input-long cm-numeric"
                                                data-a-sep
                                            />
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"price",'name'=>"update_all_vendors[price]",'component'=>"products.price",'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, true);
?>
                                        </div>
                                    </div>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_update_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_full_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_full_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"full_description"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"full_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group cm-no-hide-input">
                                    <label class="control-label" for="elm_product_full_descr"><?php echo $_smarty_tpl->__("full_description");?>
:</label>
                                    <div class="controls">
                                        <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_wysiwyg_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <?php $_smarty_tpl->_assignInScope('is_block_manager_available', $_smarty_tpl->tpl_vars['runtime']->value['company_id'] || (fn_allowed_for("MULTIVENDOR")));?>
                                            <textarea id="elm_product_full_descr"
                                                    name="product_data[full_description]"
                                                    cols="55"
                                                    rows="8"
                                                    class="cm-wysiwyg input-large"
                                                    data-ca-is-block-manager-enabled="<?php echo htmlspecialchars((string) intval(fn_check_view_permissions("block_manager.block_selection","GET")), ENT_QUOTES, 'UTF-8');?>
"
                                                    data-ca-is-block-manager-available="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_block_manager_available']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['full_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'simple_tooltip'=>true), 0, true);
?>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"full_description",'name'=>"update_all_vendors[full_description]",'component'=>"products.full_description",'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, true);
?>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['view_uri']->value) {?>
                                            <?php ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['view_uri']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
ob_start();
if (fn_allowed_for("ULTIMATE")) {
echo "&switch_company_id=";
echo (string)$_smarty_tpl->tpl_vars['product_data']->value['company_id'];
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=live_editor&status=enable&frontend_url=".$_prefixVariable1.$_prefixVariable2,'but_text'=>$_smarty_tpl->__("edit_content_on_site"),'but_role'=>"action",'but_meta'=>"btn-small btn-live-edit cm-post",'but_target'=>"_blank"), 0, false);
?>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"full_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_full_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_status"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"status"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/status_on_update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"product_data[status]",'id'=>"elm_product_status",'obj'=>$_smarty_tpl->tpl_vars['product_data']->value,'hidden'=>true), 0, false);
?>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_detailed_images"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_detailed_images"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"images"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"images"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group">
                                    <label class="control-label"><?php echo $_smarty_tpl->__("images");?>
:</label>
                                    <div class="controls">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/form_file_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('existing_pairs'=>($_smarty_tpl->tpl_vars['product_data']->value['main_pair'] ? array($_smarty_tpl->tpl_vars['product_data']->value['main_pair']) : array())+(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['image_pairs'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'file_name'=>"file",'image_pair_types'=>array('N'=>'product_add_additional_image','M'=>'product_main_image','A'=>'product_additional_image'),'allow_update_files'=>!$_smarty_tpl->tpl_vars['is_shared_product']->value && (($tmp = $_smarty_tpl->tpl_vars['allow_update_files']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)), 0, false);
?>
                                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_products_update_images",array("[file_size]"=>$_smarty_tpl->tpl_vars['image_file_size']->value));?>
</p>
                                    </div>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"images"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_detailed_images"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_options_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_options_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "select_options_type", null, null);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['options_type_raw'],'field_name'=>"options_type",'variants'=>array(smarty_modifier_enum("ProductOptionsApplyOrder::SIMULTANEOUS")=>$_smarty_tpl->__("simultaneous"),smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL")=>$_smarty_tpl->__("sequential")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['options_type_raw'],'field_name'=>"options_type",'variants'=>array(smarty_modifier_enum("ProductOptionsApplyOrder::SIMULTANEOUS")=>$_smarty_tpl->__("simultaneous"),smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL")=>$_smarty_tpl->__("sequential")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promo_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <label class="control-label" for="elm_options_type"><?php echo $_smarty_tpl->__("options_type");?>
:</label>
                                <div class="controls">
                                    #INPUT#
                                </div>
                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['options_type_raw'],'field_name'=>"options_type",'variants'=>array(smarty_modifier_enum("ProductOptionsApplyOrder::SIMULTANEOUS")=>$_smarty_tpl->__("simultaneous"),smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL")=>$_smarty_tpl->__("sequential")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "select_exceptions_type", null, null);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['exceptions_type_raw'],'field_name'=>"exceptions_type",'variants'=>array(smarty_modifier_enum("ProductOptionsExceptionsTypes::FORBIDDEN")=>$_smarty_tpl->__("forbidden"),smarty_modifier_enum("ProductOptionsExceptionsTypes::ALLOWED")=>$_smarty_tpl->__("allowed")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['exceptions_type_raw'],'field_name'=>"exceptions_type",'variants'=>array(smarty_modifier_enum("ProductOptionsExceptionsTypes::FORBIDDEN")=>$_smarty_tpl->__("forbidden"),smarty_modifier_enum("ProductOptionsExceptionsTypes::ALLOWED")=>$_smarty_tpl->__("allowed")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promo_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <label class="control-label" for="elm_exceptions_type"><?php echo $_smarty_tpl->__("exceptions_type");?>
:</label>
                                <div class="controls">
                                    #INPUT#
                                </div>
                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['exceptions_type_raw'],'field_name'=>"exceptions_type",'variants'=>array(smarty_modifier_enum("ProductOptionsExceptionsTypes::FORBIDDEN")=>$_smarty_tpl->__("forbidden"),smarty_modifier_enum("ProductOptionsExceptionsTypes::ALLOWED")=>$_smarty_tpl->__("allowed")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'select_options_type')) && smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'select_exceptions_type'))) {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"options_settings"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"options_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <hr>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("options_settings"),'target'=>"#acc_options"), 0, true);
?>

                            <div id="acc_options" class="collapse in">
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_options_type"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_options_type"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"options_settings",'field'=>"options_type"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"options_settings",'field'=>"options_type"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'select_options_type');?>

                                    <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"options_settings",'field'=>"options_type"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_options_type"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_exceptions_type"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_exceptions_type"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"options_settings",'field'=>"exceptions_type"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"options_settings",'field'=>"exceptions_type"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'select_exceptions_type');?>

                                    <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"options_settings",'field'=>"exceptions_type"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_exceptions_type"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"options_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>                    <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_options_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <hr>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("pricing_inventory"),'target'=>"#acc_pricing_inventory"), 0, true);
?>
                    <div class="collapse in" id="acc_pricing_inventory">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_code"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_code"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"product_code"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"product_code"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group">
                                    <label class="control-label" for="elm_product_code"><?php echo $_smarty_tpl->__("sku");?>
:</label>
                                    <div class="controls">
                                        <input type="text" name="product_data[product_code]" id="elm_product_code" size="20" maxlength=<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFieldsLength::PRODUCT_CODE"), ENT_QUOTES, 'UTF-8');?>
  value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                                    </div>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"product_code"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_code"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_list_price"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_list_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"list_price"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"list_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group">
                                    <label class="control-label" for="elm_list_price"><?php echo $_smarty_tpl->__("list_price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
) :</label>
                                    <div class="controls">
                                        <input type="text" name="product_data[list_price]" id="elm_list_price" size="10" value="<?php echo htmlspecialchars((string) fn_format_price((($tmp = $_smarty_tpl->tpl_vars['product_data']->value['list_price'] ?? null)===null||$tmp==='' ? "0.00" ?? null : $tmp),$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
" class="input-long cm-numeric" data-a-sep />
                                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_products_update_list_price");?>
</p>
                                    </div>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"list_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_list_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"amount"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"amount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div id="product_amount">
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_amount"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_amount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <label class="control-label" for="elm_in_stock"><?php echo $_smarty_tpl->__("in_stock");?>
:</label>
                                        <div class="controls">
                                            <input type="text" name="product_data[amount]" id="elm_in_stock" size="10" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['amount'] ?? null)===null||$tmp==='' ? "1" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-small <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cm_value_decimal_class']->value, ENT_QUOTES, 'UTF-8');?>
" />
                                        </div>
                                    </div>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_amount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <!--product_amount--></div>
                        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"amount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_zero_price_action"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_zero_price_action"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"zero_price_action"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"zero_price_action"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['zero_price_action_raw'],'field_name'=>"zero_price_action",'variants'=>array(smarty_modifier_enum("ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART")=>$_smarty_tpl->__("zpa_refuse"),smarty_modifier_enum("ProductZeroPriceActions::ALLOW_ADD_TO_CART")=>$_smarty_tpl->__("zpa_permit"),smarty_modifier_enum("ProductZeroPriceActions::ASK_TO_ENTER_PRICE")=>$_smarty_tpl->__("zpa_ask_price")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['zero_price_action_raw'],'field_name'=>"zero_price_action",'variants'=>array(smarty_modifier_enum("ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART")=>$_smarty_tpl->__("zpa_refuse"),smarty_modifier_enum("ProductZeroPriceActions::ALLOW_ADD_TO_CART")=>$_smarty_tpl->__("zpa_permit"),smarty_modifier_enum("ProductZeroPriceActions::ASK_TO_ENTER_PRICE")=>$_smarty_tpl->__("zpa_ask_price")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <label class="control-label" for="elm_zero_price_action"><?php echo $_smarty_tpl->__("zero_price_action");?>
:</label>
                                        <div class="controls">
                                            #INPUT#
                                        </div>
                                    </div>
                                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['zero_price_action_raw'],'field_name'=>"zero_price_action",'variants'=>array(smarty_modifier_enum("ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART")=>$_smarty_tpl->__("zpa_refuse"),smarty_modifier_enum("ProductZeroPriceActions::ALLOW_ADD_TO_CART")=>$_smarty_tpl->__("zpa_permit"),smarty_modifier_enum("ProductZeroPriceActions::ASK_TO_ENTER_PRICE")=>$_smarty_tpl->__("zpa_ask_price")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"zero_price_action"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_zero_price_action"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_tracking"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_tracking"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"tracking"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"tracking"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['tracking_raw'],'field_name'=>"tracking",'variants'=>array(smarty_modifier_enum("ProductTracking::TRACK")=>$_smarty_tpl->__("yes"),smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")=>$_smarty_tpl->__("no")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value || $_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] === smarty_modifier_enum("YesNo::NO"),'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['tracking_raw'],'field_name'=>"tracking",'variants'=>array(smarty_modifier_enum("ProductTracking::TRACK")=>$_smarty_tpl->__("yes"),smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")=>$_smarty_tpl->__("no")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value || $_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] === smarty_modifier_enum("YesNo::NO"),'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <label class="control-label" for="elm_tracking"><?php echo $_smarty_tpl->__("track_inventory");?>
:</label>
                                        <div class="controls">
                                            #INPUT#
                                            <p class="muted description"><?php echo $_smarty_tpl->__("track_inventory_tooltip");?>
</p>
                                        </div>
                                    </div>
                                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::SELECTBOX"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['tracking_raw'],'field_name'=>"tracking",'variants'=>array(smarty_modifier_enum("ProductTracking::TRACK")=>$_smarty_tpl->__("yes"),smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")=>$_smarty_tpl->__("no")),'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value || $_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] === smarty_modifier_enum("YesNo::NO"),'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"tracking"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_tracking"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_min_qty"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_min_qty"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"min_qty"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"min_qty"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['min_qty_raw'],'field_name'=>"min_qty",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['min_qty_raw'],'field_name'=>"min_qty",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <label class="control-label" for="elm_min_qty"><?php echo $_smarty_tpl->__("min_order_qty");?>
:</label>
                                        <div class="controls">
                                            #INPUT#
                                        </div>
                                    </div>
                                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['min_qty_raw'],'field_name'=>"min_qty",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"min_qty"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_min_qty"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_max_qty"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_max_qty"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"max_qty"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"max_qty"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['max_qty_raw'],'field_name'=>"max_qty",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['max_qty_raw'],'field_name'=>"max_qty",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <label class="control-label" for="elm_max_qty"><?php echo $_smarty_tpl->__("max_order_qty");?>
:</label>
                                        <div class="controls">
                                            #INPUT#
                                        </div>
                                    </div>
                                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['max_qty_raw'],'field_name'=>"max_qty",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"max_qty"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_max_qty"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_qty_step"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_qty_step"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"qty_step"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"qty_step"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['qty_step_raw'],'field_name'=>"qty_step",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['qty_step_raw'],'field_name'=>"qty_step",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <label class="control-label" for="elm_qty_step"><?php echo $_smarty_tpl->__("quantity_step");?>
:</label>
                                        <div class="controls">
                                            #INPUT#
                                        </div>
                                    </div>
                                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['qty_step_raw'],'field_name'=>"qty_step",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"qty_step"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_qty_step"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_list_qty_count"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_list_qty_count"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"list_qty_count"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"list_qty_count"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['list_qty_count_raw'],'field_name'=>"list_qty_count",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['list_qty_count_raw'],'field_name'=>"list_qty_count",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <label class="control-label" for="elm_list_qty_count"><?php echo $_smarty_tpl->__("list_quantity_count");?>
:</label>
                                        <div class="controls">
                                            #INPUT#
                                        </div>
                                    </div>
                                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"product.overridable_field_input",'type'=>smarty_modifier_enum("SettingTypes::INPUT"),'value'=>$_smarty_tpl->tpl_vars['product_data']->value['list_qty_count_raw'],'field_name'=>"list_qty_count",'disable_inputs'=>$_smarty_tpl->tpl_vars['disable_selectors']->value,'company_id'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['company_id'] ?? null)===null||$tmp==='' ? null ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>array("data-m-dec"=>"0")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"list_qty_count"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_list_qty_count"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_tax_ids"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_tax_ids"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"tax_ids"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"tax_ids"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group">
                                    <label class="control-label"><?php echo $_smarty_tpl->__("taxes");?>
:</label>
                                    <div class="controls">
                                        <input type="hidden" name="product_data[tax_ids]" value="" />
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"product_data[tax_ids]",'input_id'=>"elm_taxes",'item_ids'=>$_smarty_tpl->tpl_vars['product_data']->value['tax_ids'],'items'=>$_smarty_tpl->tpl_vars['taxes']->value,'id_field'=>"tax_id",'name_field'=>"tax",'type'=>"taxes",'class_prefix'=>"taxes",'close_on_select'=>"false",'list_mode'=>false), 0, false);
?>
                                    </div>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory",'field'=>"tax_ids"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_tax_ids"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"pricing_inventory"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> 
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_availability"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_availability"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"availability"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"availability"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <hr>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("availability"),'target'=>"#acc_availability"), 0, true);
?>

                        <div id="acc_availability" class="collapse in">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_usergroup_ids"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_usergroup_ids"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"usergroup_ids"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"usergroup_ids"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <label class="control-label"><?php echo $_smarty_tpl->__("usergroups");?>
:</label>
                                        <div class="controls">
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"ug_id",'name'=>"product_data[usergroup_ids]",'usergroups'=>fn_get_usergroups(array("type"=>"C","status"=>array("A","H")),(defined('DESCR_SL') ? constant('DESCR_SL') : null)),'usergroup_ids'=>$_smarty_tpl->tpl_vars['product_data']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>false), 0, false);
?>
                                        </div>
                                    </div>
                                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"usergroup_ids"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_usergroup_ids"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_timestamp"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_timestamp"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"timestamp"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"timestamp"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <label class="control-label" for="elm_date_holder"><?php echo $_smarty_tpl->__("creation_date");?>
:</label>
                                        <div class="controls">
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_date_holder",'date_name'=>"product_data[timestamp]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['timestamp'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, false);
?>
                                        </div>
                                    </div>
                                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"timestamp"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_timestamp"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_avail_since"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_avail_since"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"avail_since"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"avail_since"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <label class="control-label" for="elm_date_avail_holder"><?php echo $_smarty_tpl->__("available_since");?>
:</label>
                                        <div class="controls">
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_date_avail_holder",'date_name'=>"product_data[avail_since]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['avail_since'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, true);
?>
                                        </div>
                                    </div>
                                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"avail_since"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_avail_since"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_out_of_stock_actions"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_out_of_stock_actions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"out_of_stock_actions"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"out_of_stock_actions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <div class="control-group">
                                        <label class="control-label" for="elm_out_of_stock_actions"><?php echo $_smarty_tpl->__("out_of_stock_actions");?>
:</label>
                                        <div class="controls">
                                            <select class="span3" name="product_data[out_of_stock_actions]" id="elm_out_of_stock_actions">
                                                <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['out_of_stock_actions'] == "N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("none");?>
</option>
                                                <option value="B" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['out_of_stock_actions'] == "B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("buy_in_advance");?>
</option>
                                                <option value="S" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['out_of_stock_actions'] == "S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("sign_up_for_notification");?>
</option>
                                            </select>
                                            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_products_update_out_of_stock_actions");?>
</p>
                                        </div>
                                    </div>
                                <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"availability",'field'=>"out_of_stock_actions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_out_of_stock_actions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                    <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"availability"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>                 <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_availability"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_extra", null, null);?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_details_layout"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_details_layout"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"details_layout"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"details_layout"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product.layout_input",'id'=>(($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'value'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['details_layout'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'category_id'=>$_REQUEST['category_id']));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product.layout_input",'id'=>(($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'value'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['details_layout'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'category_id'=>$_REQUEST['category_id']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group">
                                    <label class="control-label" for="elm_details_layout"><?php echo $_smarty_tpl->__("product_details_view");?>
:</label>
                                    <div class="controls">
                                        #INPUT#
                                    </div>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"product.layout_input",'id'=>(($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'value'=>(($tmp = $_smarty_tpl->tpl_vars['product_data']->value['details_layout'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'category_id'=>$_REQUEST['category_id']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"details_layout"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_details_layout"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_edp_section"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_edp_section"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_edp'] === smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"is_edp"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"is_edp"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group">
                                    <label class="control-label" for="elm_product_is_edp"><?php echo $_smarty_tpl->__("downloadable");?>
:</label>
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="hidden" name="product_data[is_edp]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />
                                            <input type="checkbox"
                                                   name="product_data[is_edp]"
                                                   id="elm_product_is_edp"
                                                   value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                                                   <?php if ($_smarty_tpl->tpl_vars['product_data']->value['is_edp'] === smarty_modifier_enum("YesNo::YES")) {?>
                                                       checked="checked"
                                                   <?php }?>
                                                   onclick="Tygh.$('#edp_shipping').toggleBy(); Tygh.$('#edp_unlimited').toggleBy();"
                                            />
                                        </label>
                                    </div>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"is_edp"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"edp_shipping"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"edp_shipping"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group <?php if ($_smarty_tpl->tpl_vars['product_data']->value['is_edp'] !== smarty_modifier_enum("YesNo::YES")) {?>hidden<?php }?>" id="edp_shipping">
                                    <label class="control-label" for="elm_product_edp_shipping"><?php echo $_smarty_tpl->__("edp_enable_shipping");?>
:</label>
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="hidden" name="product_data[edp_shipping]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />
                                            <input type="checkbox"
                                                   name="product_data[edp_shipping]" id="elm_product_edp_shipping"
                                                   value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                                                   <?php if ($_smarty_tpl->tpl_vars['product_data']->value['edp_shipping'] === smarty_modifier_enum("YesNo::YES")) {?>
                                                       checked="checked"
                                                   <?php }?>
                                            />
                                        </label>
                                    </div>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"edp_shipping"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"unlimited_download"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"unlimited_download"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="control-group <?php if ($_smarty_tpl->tpl_vars['product_data']->value['is_edp'] !== smarty_modifier_enum("YesNo::YES")) {?>hidden<?php }?>" id="edp_unlimited">
                                    <label class="control-label" for="elm_product_edp_unlimited"><?php echo $_smarty_tpl->__("time_unlimited_download");?>
:</label>
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="hidden" name="product_data[unlimited_download]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />
                                            <input type="checkbox"
                                                   name="product_data[unlimited_download]"
                                                   id="elm_product_edp_unlimited"
                                                   value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                                                   <?php if ($_smarty_tpl->tpl_vars['product_data']->value['unlimited_download'] === smarty_modifier_enum("YesNo::YES")) {?>
                                                       checked="checked"
                                                   <?php }?>
                                            />
                                        </label>
                                    </div>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"unlimited_download"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_edp_section"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_short_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_short_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"short_description"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"short_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <label class="control-label" for="elm_product_short_descr"><?php echo $_smarty_tpl->__("short_description");?>
:</label>
                                <div class="controls">
                                    <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_wysiwyg_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <textarea id="elm_product_short_descr"
                                                name="product_data[short_description]"
                                                cols="55"
                                                rows="2"
                                                class="cm-wysiwyg input-large"
                                        ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['short_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'simple_tooltip'=>true), 0, true);
?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"short_description",'name'=>"update_all_vendors[short_description]",'component'=>"products.short_description",'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, true);
?>
                                    </div>
                                </div>
                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"short_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_short_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_popularity"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_popularity"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"popularity"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"popularity"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="control-group">
                                <label class="control-label" for="elm_product_popularity"><?php echo $_smarty_tpl->__("popularity");?>
:</label>
                                <div class="controls">
                                    <input type="text" <?php if ($_smarty_tpl->tpl_vars['disable_edit_popularity']->value) {?>disabled="disabled"<?php }?> name="product_data[popularity]" id="elm_product_popularity" size="55" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['popularity'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long" />
                                    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_popularity");?>
</p>
                                </div>
                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"popularity"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_popularity"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_search_words"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_search_words"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"search_words"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"search_words"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <label class="control-label" for="elm_product_search_words"><?php echo $_smarty_tpl->__("search_words");?>
:</label>
                                <div class="controls">
                                    <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <textarea name="product_data[search_words]" id="elm_product_search_words" cols="55" rows="2" class="input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['search_words'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value), 0, true);
?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"search_words",'name'=>"update_all_vendors[search_words]",'component'=>"products.search_words",'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, true);
?>
                                    </div>
                                    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_search_words");?>
</p>
                                </div>
                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"search_words"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_search_words"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_promo_text"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_promo_text"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"promo_text"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"promo_text"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <label class="control-label" for="elm_product_promo_text"><?php echo $_smarty_tpl->__("promo_text");?>
:</label>
                                <div class="controls">
                                    <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_wysiwyg_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <textarea id="elm_product_promo_text" name="product_data[promo_text]" cols="55" rows="2" class="cm-wysiwyg input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['promo_text'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'simple_tooltip'=>true), 0, true);
?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"promo_text",'name'=>"update_all_vendors[promo_text]",'component'=>"products.promo_text",'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, true);
?>
                                    </div>
                                </div>
                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"extra",'field'=>"promo_text"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_promo_text"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php if (smarty_modifier_trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_extra') ?: ''))) {?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"extra"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <hr>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("extra"),'target'=>"#acc_extra"), 0, true);
?>
                        <div id="acc_extra" class="collapse in">
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_extra');?>

                        </div>
                    <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>                 <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['has_global_individual_settings_permission']->value) {?>
                    <hr>
                    <div class="well well-small help-block">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"sitemap",'class'=>"flex-inline top",'assign'=>"icon_global_setting"),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->__("global_individual.additional_settings",array("[settings_url]"=>fn_url("settings.manage&section_id=Checkout"),"[icon]"=>$_smarty_tpl->tpl_vars['icon_global_setting']->value));?>

                        </a>
                    </div>
                <?php }?>
                <!--content_detailed--></div> 
            
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_seo_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_seo_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "seo") {?>hidden<?php }?>" id="content_seo">

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_seo"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_seo"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("seo_meta_data"),'target'=>"#acc_seo_meta"), 0, true);
?>
                <div id="acc_seo_meta" class="collapse in">
                    <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <label class="control-label" for="elm_product_page_title"><?php echo $_smarty_tpl->__("page_title");?>
:</label>
                        <div class="controls">
                            <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="text"
                                    name="product_data[page_title]"
                                    id="elm_product_page_title"
                                    size="55"
                                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['page_title'], ENT_QUOTES, 'UTF-8');?>
"
                                    class="input-large"
                                    data-ca-seo-length="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_title_seo_length']->value, ENT_QUOTES, 'UTF-8');?>
"
                                />
                                <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value), 0, true);
?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"page_title",'name'=>"update_all_vendors[page_title]",'component'=>"products.page_title",'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, true);
?>
                            </div>
                        </div>
                    </div>

                    <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <label class="control-label" for="elm_product_meta_descr"><?php echo $_smarty_tpl->__("meta_description");?>
:</label>
                        <div class="controls">
                            <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <textarea name="product_data[meta_description]"
                                    id="elm_product_meta_descr"
                                    cols="55"
                                    rows="2"
                                    class="input-large"
                                    data-ca-seo-length="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['description_seo_length']->value, ENT_QUOTES, 'UTF-8');?>
"
                                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['meta_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value), 0, true);
?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"meta_description",'name'=>"update_all_vendors[meta_description]",'component'=>"products.meta_description",'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, true);
?>
                            </div>
                        </div>
                    </div>

                    <div class="control-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <label class="control-label" for="elm_product_meta_keywords"><?php echo $_smarty_tpl->__("meta_keywords");?>
:</label>
                        <div class="controls">
                            <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <textarea name="product_data[meta_keywords]" id="elm_product_meta_keywords" cols="55" rows="2" class="input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['meta_keywords'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value), 0, true);
?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"meta_keywords",'name'=>"update_all_vendors[meta_keywords]",'component'=>"products.meta_keywords",'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, true);
?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_seo"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_seo_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_shipping_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_shipping_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "shippings") {?>hidden<?php }?>" id="content_shippings">                 <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_shipping_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>                         <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_shipping_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_qty_discounts"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_qty_discounts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_update_qty_discounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_qty_discounts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_features"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_features"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_update_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'allow_save'=>$_smarty_tpl->tpl_vars['allow_save_feature']->value), 0, false);
?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_features"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_addons_section"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_addons_section"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "addons") {?>hidden<?php }?>" id="content_addons">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:detailed_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:detailed_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:detailed_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_addons_section"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
            <?php $_smarty_tpl->_assignInScope('allow_clone', true);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>"products.update?product_id="), 0, false);
?>

                <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['view_uri']->value) {?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'target'=>"_blank",'text'=>$_smarty_tpl->__("preview"),'href'=>$_smarty_tpl->tpl_vars['view_uri']->value), true);?>
</li>
                                <li class="divider"></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['allow_clone']->value) {?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("clone"),'href'=>"products.clone?product_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"), true);?>
</li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"products.delete?product_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"), true);?>
</li>
                            <?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                <?php }?>
                <!-- the button goes here -->
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"cm-product-save-buttons",'but_role'=>"submit-link",'but_name'=>"dispatch[products.update]",'but_target_form'=>"product_update_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
                <!-- the button goes there -->
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            
            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <input type="hidden" name="switch_company_id" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            <input type="hidden" name="descr_sl" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (defined('DESCR_SL') ? constant('DESCR_SL') : null), ENT_QUOTES, 'UTF-8');?>
" />
        </form> 
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                        <div class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "options") {?>hidden<?php }?>" id="content_options">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_update_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('enable_search'=>true), 0, false);
?>
            </div>
            
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_edp'] == "Y") {?>
            <div class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "files") {?>hidden<?php }?>" id="content_files">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:content_files"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:content_files"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_update_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:content_files"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
            <?php }?>
            
                        <div class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "subscribers") {?>hidden<?php }?>" id="content_subscribers">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_subscribers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
            </div>
                    <?php }?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_smarty_tpl->tpl_vars['selected_section']->value,'track'=>true,'meta_tabs'=>"tabs--product-update tabs--sm",'show_tabs_navigation'=>false), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_mainbox_params"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_mainbox_params"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('title', preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product_data']->value['product'] ?: ''));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("new_product"));
}?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_mainbox_params"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>(bool) $_smarty_tpl->tpl_vars['id']->value,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'tabs_navigation'=>$_smarty_tpl->tpl_vars['tabs_navigation']->value), 0, false);
?>

<?php if (fn_allowed_for("MULTIVENDOR")) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
  var fn_change_vendor_for_product = function(){
    $.ceAjax('request', Tygh.current_url, {
      data: {
        product_data: {
          company_id: $('[name="product_data[company_id]"]').val(),
          category_ids: $('[name="product_data[category_ids]"]').val()
        }
      },
      result_ids: 'product_amount,product_categories'
    });
  };
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
