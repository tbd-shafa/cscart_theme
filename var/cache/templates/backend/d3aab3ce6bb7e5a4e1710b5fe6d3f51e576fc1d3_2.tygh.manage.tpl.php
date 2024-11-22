<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_options/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676160d580_13940592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3aab3ce6bb7e5a4e1710b5fe6d3f51e576fc1d3' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_options/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:views/product_options/update.tpl' => 2,
    'tygh:views/product_options/components/picker/picker.tpl' => 1,
    'tygh:common/popupbox.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/table_col_head.tpl' => 3,
    'tygh:common/tooltip.tpl' => 1,
    'tygh:common/object_group.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6740676160d580_13940592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('create_or_link_an_existing_option','new_option','add_option','new_option','add_option','add_option','name','internal_option_name_tooltip','storefront_name','individual','edit','view','view','storefront_name','name','status','product_options_are_not_selectable_for_context_menu','no_data','options'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/product_options_manage.js"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['enable_search']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/backend/products/products_update_options.js"),$_smarty_tpl);?>

<?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    function fn_check_option_type(value, tag_id)
    {
        var id = tag_id.replace('option_type_', '').replace('elm_', '');
        var tabLink = Tygh.$('#tab_option_variants_' + id + ' a');

        Tygh.$('#tab_option_variants_' + id).toggleBy(!(value == 'S' || value == 'R' || value == 'C'));
        Tygh.$('#required_options_' + id).toggleBy(!(value == 'I' || value == 'T' || value == 'F'));
        Tygh.$('#extra_options_' + id).toggleBy(!(value == 'I' || value == 'T'));
        Tygh.$('#file_options_' + id).toggleBy(!(value == 'F'));

        value === 'C'
            ? tabLink.text(tabLink.data('caModifiersText'))
            : tabLink.text(tabLink.data('caVariantsText'));

        if (value === 'C') {
            var t = Tygh.$('table', '#content_tab_option_variants_' + id);
            Tygh.$('.cm-non-cb', t).switchAvailability(true); // hide obsolete columns
            Tygh.$('tbody:gt(1)', t).switchAvailability(true); // hide obsolete rows

        } else if (value === 'S' || value === 'R') {
            var t = Tygh.$('table', '#content_tab_option_variants_' + id);
            Tygh.$('.cm-non-cb', t).switchAvailability(false); // show all columns
            Tygh.$('tbody', t).switchAvailability(false); // show all rows
            Tygh.$('#box_add_variant_' + id).show(); // show "add new variants" box

        } else if (value === 'I' || value === 'T') {
            Tygh.$('#extra_options_' + id).show(); // show "add new variants" box
        }
    }
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('allow_add_option', fn_check_permissions("product_options","quick_add","admin","POST"));
$_smarty_tpl->_assignInScope('is_global', $_smarty_tpl->tpl_vars['object']->value === "global");
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php if ($_smarty_tpl->tpl_vars['is_global']->value) {?>
        <?php $_smarty_tpl->_assignInScope('select_languages', true);?>
        <?php $_smarty_tpl->_assignInScope('delete_target_id', "pagination_contents");?>
        <?php $_smarty_tpl->_assignInScope('show_checkboxes', true);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('delete_target_id', "product_options_list");?>
        <?php $_smarty_tpl->_assignInScope('show_checkboxes', false);?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if (!($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && ((fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['is_global']->value) || $_smarty_tpl->tpl_vars['product_data']->value['shared_product'] == "Y") && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] != $_smarty_tpl->tpl_vars['product_data']->value['company_id'])) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "toolbar", null, null);?>
            <div class="control-toolbar__btns-center">
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
                    <?php if ($_smarty_tpl->tpl_vars['product_data']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_options/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option_id'=>"0",'company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'disable_company_picker'=>true), 0, false);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_options/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option_id'=>"0"), 0, true);
?>
                    <?php }?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php if ($_smarty_tpl->tpl_vars['object']->value == "product") {?>
                    <?php $_smarty_tpl->_assignInScope('position', "pull-right");?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "embed" && $_smarty_tpl->tpl_vars['enable_search']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('enable_add', (($tmp = $_smarty_tpl->tpl_vars['enable_add']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

                    <?php if ($_smarty_tpl->tpl_vars['object']->value == "product" && fn_check_view_permissions("products.update")) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_options/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_id'=>"option_add",'input_name'=>"product_data[linked_option_ids][]",'multiple'=>true,'meta'=>"control-toolbar__select",'select_class'=>"cm-object-product-options-add",'autofocus'=>$_smarty_tpl->tpl_vars['autofocus']->value,'empty_variant_text'=>$_smarty_tpl->__("create_or_link_an_existing_option"),'allow_add'=>$_smarty_tpl->tpl_vars['enable_add']->value && $_smarty_tpl->tpl_vars['allow_add_option']->value,'create_option_to_end'=>"true",'form'=>"form"), 0, false);
?>
                    <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['view_mode']->value == "embed" && !$_smarty_tpl->tpl_vars['enable_search']->value && $_smarty_tpl->tpl_vars['allow_add_option']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_option",'text'=>$_smarty_tpl->__("new_option"),'link_text'=>$_smarty_tpl->__("add_option"),'act'=>"general",'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'meta'=>$_smarty_tpl->tpl_vars['position']->value,'icon'=>"icon-plus"), 0, false);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['allow_add_option']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_option",'text'=>$_smarty_tpl->__("new_option"),'title'=>$_smarty_tpl->__("add_option"),'link_text'=>$_smarty_tpl->__("add_option"),'act'=>"general",'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'meta'=>$_smarty_tpl->tpl_vars['position']->value,'icon'=>"icon-plus",'link_class'=>"btn-primary nav__actions-btn-primary"), 0, true);
?>
                <?php }?>

            <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

        </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['object']->value != "global" && $_smarty_tpl->tpl_vars['allow_add_option']->value) {?>
            <div class="control-toolbar cm-toggle-button">
                <div class="control-toolbar__btns">
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'toolbar');?>

                </div>
                <div class="control-toolbar__panel">
                    <div id="product_options_quick_add_option"
                        data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-target-id="product_options_list"
                        data-ca-inline-dialog-action-context="products_update_options"
                        data-ca-inline-dialog-url="<?php echo htmlspecialchars((string) fn_url("product_options.quick_add"), ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'toolbar');?>

            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('product_option_statuses', fn_get_default_statuses('',false));?>
        <?php $_smarty_tpl->_assignInScope('has_permissions', fn_check_permissions("product_options","update","admin","POST"));?>
        <?php $_smarty_tpl->_assignInScope('has_available_options', empty($_smarty_tpl->tpl_vars['runtime']->value['company_id']) || in_array($_smarty_tpl->tpl_vars['runtime']->value['company_id'],array_column($_smarty_tpl->tpl_vars['product_options']->value,'company_id')));?>

        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_product_options_form" id="manage_product_options_form">
            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options_table", null, null);?>
                <div class="items-container <?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>" id="product_options_list">
                    <?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
                        <div class="table-responsive-wrapper longtap-selection">
                            <table width="100%" class="table table-middle table--relative table-objects table-responsive table--overflow-hidden">
                                <?php if ($_smarty_tpl->tpl_vars['is_global']->value) {?>
                                    <thead
                                            data-ca-bulkedit-default-object="true"
                                            data-ca-bulkedit-component="defaultObject"
                                        >
                                        <tr>
                                            <th class="left mobile-hide table__check-items-column">
                                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['has_permissions']->value ? ($_smarty_tpl->tpl_vars['product_option_statuses']->value) : '','is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_available_options']->value,'meta'=>"table__check-items"), 0, false);
?>

                                                <input type="checkbox"
                                                    class="bulkedit-toggler hide"
                                                    data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                                    data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                                />
                                            </th>
                                            <th>
                                                <div class="th-text-overflow-wrapper">
                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"internal_option_name",'text'=>$_smarty_tpl->__("name")), 0, false);
?>
                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->__("internal_option_name_tooltip")), 0, false);
?>
                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"option_name",'text'=>$_smarty_tpl->__("storefront_name")), 0, true);
?>
                                                </div>
                                            </th>
                                            <th width="10%"></th>
                                            <th width="10%"></th>
                                            <th width="20%" class="right">
                                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"status"), 0, true);
?>
                                            </th>
                                        </tr>
                                    </thead>
                                <?php }?>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'product_option');
$_smarty_tpl->tpl_vars['product_option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_option']->value) {
$_smarty_tpl->tpl_vars['product_option']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['object']->value == "product" && $_smarty_tpl->tpl_vars['product_option']->value['product_id']) {?>
                                            <?php ob_start();
echo $_smarty_tpl->__("individual");
$_prefixVariable31=ob_get_clean();
$_smarty_tpl->_assignInScope('details', "(".$_prefixVariable31.")");?>
                                            <?php $_smarty_tpl->_assignInScope('query_product_id', '');?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('details', '');?>
                                            <?php $_smarty_tpl->_assignInScope('query_product_id', "&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['object']->value == "product") {?>
                                            <?php if (!$_smarty_tpl->tpl_vars['product_option']->value['product_id']) {?>
                                                <?php $_smarty_tpl->_assignInScope('query_product_id', "&object=".((string)$_smarty_tpl->tpl_vars['object']->value));?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('query_product_id', "&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&object=".((string)$_smarty_tpl->tpl_vars['object']->value));?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_assignInScope('query_delete_product_id', "&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
                                            <?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['product_data']->value,"products"));?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('query_product_id', '');?>
                                            <?php $_smarty_tpl->_assignInScope('query_delete_product_id', '');?>
                                            <?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['product_option']->value,"product_options"));?>
                                        <?php }?>

                                        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value && ($_smarty_tpl->tpl_vars['product_option']->value['company_id'] || !$_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
                                                <?php $_smarty_tpl->_assignInScope('link_text', $_smarty_tpl->__("edit"));?>
                                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['product_option']->value['company_id'] && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {
echo "cm-vendor-product-option";
}
$_prefixVariable32=ob_get_clean();
$_smarty_tpl->_assignInScope('additional_class', "cm-no-hide-input cm-longtap-target ".$_prefixVariable32);?>
                                                <?php $_smarty_tpl->_assignInScope('hide_for_vendor', false);?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('link_text', $_smarty_tpl->__("view"));?>
                                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['product_option']->value['company_id'] && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {
echo "cm-vendor-product-option";
}
$_prefixVariable33=ob_get_clean();
$_smarty_tpl->_assignInScope('additional_class', "cm-longtap-target ".$_prefixVariable33);?>
                                                <?php $_smarty_tpl->_assignInScope('hide_for_vendor', true);?>
                                            <?php }?>
                                        <?php }?>

                                        <?php $_smarty_tpl->_assignInScope('status', $_smarty_tpl->tpl_vars['product_option']->value['status']);?>
                                        <?php $_smarty_tpl->_assignInScope('href_delete', "product_options.delete?option_id=".((string)$_smarty_tpl->tpl_vars['product_option']->value['option_id']).((string)$_smarty_tpl->tpl_vars['query_delete_product_id']->value));?>

                                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                                            <?php $_smarty_tpl->_assignInScope('non_editable', false);?>
                                            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && (($_smarty_tpl->tpl_vars['product_data']->value['shared_product'] == "Y" && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] != $_smarty_tpl->tpl_vars['product_data']->value['company_id']) || ($_smarty_tpl->tpl_vars['object']->value == "global" && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] != $_smarty_tpl->tpl_vars['product_option']->value['company_id']))) {?>
                                                <?php $_smarty_tpl->_assignInScope('link_text', $_smarty_tpl->__("view"));?>
                                                <?php $_smarty_tpl->_assignInScope('href_delete', false);?>
                                                <?php $_smarty_tpl->_assignInScope('non_editable', true);?>
                                                <?php $_smarty_tpl->_assignInScope('is_view_link', true);?>
                                            <?php }?>
                                        <?php }?>

                                        <?php $_smarty_tpl->_assignInScope('option_name', $_smarty_tpl->tpl_vars['product_option']->value['option_name']);?>

                                        <?php ob_start();
echo $_smarty_tpl->__("storefront_name");
$_prefixVariable34=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("name");
$_prefixVariable35=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("status");
$_prefixVariable36=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("product_options_are_not_selectable_for_context_menu");
$_prefixVariable37=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_table'=>true,'no_padding'=>true,'id'=>$_smarty_tpl->tpl_vars['product_option']->value['option_id'],'id_prefix'=>"_product_option_",'details'=>$_smarty_tpl->tpl_vars['details']->value,'text'=>$_smarty_tpl->tpl_vars['product_option']->value['internal_option_name'],'href_desc'=>"<br />".((string)$_smarty_tpl->tpl_vars['product_option']->value['option_name']),'href_col_width'=>"70%",'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'table'=>"product_options",'object_id_name'=>"option_id",'href'=>"product_options.update?option_id=".((string)$_smarty_tpl->tpl_vars['product_option']->value['option_id']).((string)$_smarty_tpl->tpl_vars['query_product_id']->value),'href_delete'=>$_smarty_tpl->tpl_vars['href_delete']->value,'delete_target_id'=>$_smarty_tpl->tpl_vars['delete_target_id']->value,'header_text'=>$_smarty_tpl->tpl_vars['product_option']->value['option_name'],'skip_delete'=>!$_smarty_tpl->tpl_vars['allow_save']->value,'additional_class'=>$_smarty_tpl->tpl_vars['additional_class']->value,'prefix'=>"product_options",'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'non_editable'=>$_smarty_tpl->tpl_vars['non_editable']->value,'company_object'=>$_smarty_tpl->tpl_vars['product_option']->value,'href_desc_row_hint'=>$_prefixVariable34." / ".$_prefixVariable35,'status_row_hint'=>$_prefixVariable36,'checkbox_name'=>"option_ids[]",'show_checkboxes'=>$_smarty_tpl->tpl_vars['show_checkboxes']->value,'hidden_checkbox'=>true,'checkbox_col_width'=>"0",'checkbox_col_class'=>"table__check-items-cell",'last_col_width'=>"20%",'is_bulkedit_menu'=>($_smarty_tpl->tpl_vars['is_global']->value && $_smarty_tpl->tpl_vars['has_permissions']->value),'bulkedit_disabled_notice'=>$_smarty_tpl->tpl_vars['non_editable']->value ? $_prefixVariable37 : '','link_meta'=>"bulkedit-deselect"), 0, true);
?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                    <?php } else { ?>
                        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                    <?php }?>
                <!--product_options_list--></div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_product_options_form",'object'=>"product_options",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options_table'),'has_permissions'=>$_smarty_tpl->tpl_vars['is_global']->value && $_smarty_tpl->tpl_vars['has_permissions']->value), 0, false);
?>
        </form>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['object']->value == "product") {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox');?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("options"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_language'=>$_smarty_tpl->tpl_vars['select_language']->value), 0, false);
}
}
}
