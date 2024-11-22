<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:20
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/search_filters/search_filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406750b2b960_26212386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab48559262fed5595539c42a2a5753c49e9ddd8f' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/search_filters/search_filters.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/search_filters/hidden_inputs.tpl' => 1,
    'tygh:buttons/search.tpl' => 1,
    'tygh:components/search_filters/context_search_prepare.tpl' => 1,
    'tygh:components/search_filters/search_save.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_67406750b2b960_26212386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('close','search_range_from','search_range_to','search_add_filter'));
?>

<?php if ($_smarty_tpl->tpl_vars['search_filters']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/search_filters.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_assignInScope('form_id', (($tmp = $_smarty_tpl->tpl_vars['search_filters']->value['form_id'] ?? null)===null||$tmp==='' ? "search_filters_form" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('add_filter_variant_item_state', array());?>
    <?php if ($_smarty_tpl->tpl_vars['search_filters']->value['page_part']) {?>
        <?php $_smarty_tpl->_assignInScope('form_action_suffix', "#".((string)$_smarty_tpl->tpl_vars['page_part']->value));?>
    <?php }?>

    <div class="search-filters-wrapper__form-wrapper">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_action_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filters']->value['search_form_prefix'], ENT_QUOTES, 'UTF-8');?>
search_filters_form"
            method="get"
            class="cm-disable-empty-all search-filters-wrapper__form" 
            data-ca-target-id="pagination_contents,content_top_navigation"
            data-ca-search-filters="form"
        id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/search_filters/hidden_inputs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('search_filters'=>$_smarty_tpl->tpl_vars['search_filters']->value,'search'=>$_smarty_tpl->tpl_vars['search']->value,'put_request_vars'=>$_smarty_tpl->tpl_vars['put_request_vars']->value), 0, false);
?>

                        <?php if ($_smarty_tpl->tpl_vars['search_filters']->value['dispatch']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['search_filters']->value['dispatch'])."]",'method'=>"GET",'but_meta'=>"hidden",'but_id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)."_search_filters_submit"), 0, false);
?>
            <?php }?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/search_filters/context_search_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('search_filters'=>$_smarty_tpl->tpl_vars['search_filters']->value), 0, false);
?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/search_filters/search_save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('not_saved'=>$_smarty_tpl->tpl_vars['not_saved']->value,'form_id'=>$_smarty_tpl->tpl_vars['form_id']->value,'views'=>$_smarty_tpl->tpl_vars['views']->value,'search'=>$_smarty_tpl->tpl_vars['search']->value,'search_filters'=>$_smarty_tpl->tpl_vars['search_filters']->value), 0, false);
?>

                        <div class="search-filters" data-ca-search-filters="main">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_filters_without_context_search']->value['data'], 'search_filter');
$_smarty_tpl->tpl_vars['search_filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['search_filter']->value) {
$_smarty_tpl->tpl_vars['search_filter']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['search_filter']->value['is_enabled'])) && !$_smarty_tpl->tpl_vars['search_filter']->value['is_enabled'] || !$_smarty_tpl->tpl_vars['search_filter']->value['id']) {?>
                        <?php continue 1;?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('search_filter_item_class', '');?>
                    <?php $_smarty_tpl->_assignInScope('is_show', false);?>
                    <?php $_smarty_tpl->_assignInScope('is_has_value', false);?>
                    <?php $_smarty_tpl->_assignInScope('is_show_clear_filter_btn', false);?>
                    <?php $_smarty_tpl->_assignInScope('field_id', ((string)$_smarty_tpl->tpl_vars['form_id']->value)."_".((string)$_smarty_tpl->tpl_vars['search_filter']->value['id']));?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['add_filter_variant_item_state']) ? $_smarty_tpl->tpl_vars['add_filter_variant_item_state']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['field_id']->value] = array('show'=>false);
$_smarty_tpl->_assignInScope('add_filter_variant_item_state', $_tmp_array);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "search_filters_item", null, null);?>
                                        <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['is_hidden']) {?>
                        <?php $_smarty_tpl->_assignInScope('search_filter_item_attributes', array("data-ca-search-filters-is-hidden"=>"true"));?>
                        <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['type'] === "hidden") {?>
                            <input type="hidden"
                                name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                                id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-search-filters="field"
                            />
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['search_filter']->value['content'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['search_filter']->value['type'] === "popup") {?>
                        <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['content'] && smarty_modifier_trim($_smarty_tpl->tpl_vars['search_filter']->value['content']) !== '') {?>
                            <?php $_smarty_tpl->_assignInScope('search_filter_item_class', "search-filters__popup");?>
                            <?php $_smarty_tpl->_assignInScope('is_has_value', true);?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popup_content", null, null);?>
                                <?php echo $_smarty_tpl->tpl_vars['search_filter']->value['content'];?>

                                <div class="modal-footer buttons-container">
                                    <div class="pull-right">
                                        <a class="cm-dialog-closer btn btn-primary"
                                            data-dismiss="modal"
                                            data-ca-search-filters="closePopup"
                                        ><?php echo $_smarty_tpl->__("close");?>
</a>
                                    </div>
                                </div>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['field_id']->value,'text'=>$_smarty_tpl->tpl_vars['search_filter']->value['label'],'link_text'=>$_smarty_tpl->tpl_vars['search_filter']->value['label'],'act'=>"button",'but_meta'=>"search-filters__button-popup cm-search-filters-button",'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popup_content')), 0, true);
$_smarty_tpl->assign('popupbox_content', ob_get_clean());
?>
                            <?php if (!$_smarty_tpl->tpl_vars['popupbox_content']->value || $_smarty_tpl->tpl_vars['popupbox_content']->value && smarty_modifier_trim($_smarty_tpl->tpl_vars['popupbox_content']->value) === '') {?>
                                                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php continue 1;?>
                            <?php }?>

                            <?php echo $_smarty_tpl->tpl_vars['popupbox_content']->value;?>

                        <?php }?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"button",'raw'=>true,'text'=>((string)$_smarty_tpl->tpl_vars['search_filter']->value['label'])." <span class=\"caret\"></span>",'class'=>"btn dropdown-toggle search-filters__dropdown-toggle cm-search-filters-button",'data'=>array("data-toggle"=>"dropdown")), true);?>

                        <ul class="dropdown-menu search-filters__dropdown-menu
                                <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['size'] === "large") {?>search-filters__dropdown-menu--large<?php }?>"
                            data-ca-search-filters="dropdownMenu">
                                                        <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['type'] === "checkbox") {?>
                                <?php $_smarty_tpl->_assignInScope('search_filter_item_class', "btn-group search-filters__dropdown");?>
                                <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['nested_data']) {?>
                                    <?php $_smarty_tpl->_assignInScope('is_show_clear_filter_btn', true);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_filter']->value['nested_data'], 'item');
$_smarty_tpl->tpl_vars['item']->index = -1;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->index++;
$__foreach_item_32_saved = $_smarty_tpl->tpl_vars['item'];
?>
                                        <?php $_smarty_tpl->_assignInScope('item_id', ((string)$_smarty_tpl->tpl_vars['field_id']->value)."_".((string)$_smarty_tpl->tpl_vars['item']->value['key']));?>
                                        <?php if ($_smarty_tpl->tpl_vars['_REQUEST']->value[$_smarty_tpl->tpl_vars['item']->value['key']]) {?>
                                            <?php $_smarty_tpl->_assignInScope('is_show', true);?>
                                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['add_filter_variant_item_state']) ? $_smarty_tpl->tpl_vars['add_filter_variant_item_state']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['field_id']->value] = array('show'=>true);
$_smarty_tpl->_assignInScope('add_filter_variant_item_state', $_tmp_array);?>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['is_checked']) {?>
                                            <?php $_smarty_tpl->_assignInScope('is_has_value', true);?>
                                        <?php }?>
                                        <li>
                                            <div class="search-filters__variant-item">
                                                <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                                                    <input type="checkbox"
                                                        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value === false ? '' : (($tmp = $_smarty_tpl->tpl_vars['item']->value['value'] ?? null)===null||$tmp==='' ? (smarty_modifier_enum("YesNo::YES")) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['is_checked']) {?>checked="checked"<?php }?>
                                                        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['key'], ENT_QUOTES, 'UTF-8');?>
"
                                                        id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                        data-ca-search-filters="field"
                                                    />
                                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                                </label>
                                            </div>
                                        </li>
                                    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_32_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['search_filter']->value['type'] === "radio") {?>
                                <?php $_smarty_tpl->_assignInScope('search_filter_item_class', "btn-group search-filters__dropdown");?>
                                <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['nested_data']) {?>
                                    <?php $_smarty_tpl->_assignInScope('is_show_clear_filter_btn', true);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_filter']->value['nested_data'], 'item');
$_smarty_tpl->tpl_vars['item']->index = -1;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->index++;
$__foreach_item_33_saved = $_smarty_tpl->tpl_vars['item'];
?>
                                        <?php $_smarty_tpl->_assignInScope('item_id', ((string)$_smarty_tpl->tpl_vars['field_id']->value)."_".((string)$_smarty_tpl->tpl_vars['item']->value['key']));?>
                                        <?php if ($_smarty_tpl->tpl_vars['_REQUEST']->value[$_smarty_tpl->tpl_vars['search_filter']->value['id']]) {?>
                                            <?php $_smarty_tpl->_assignInScope('is_show', true);?>
                                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['add_filter_variant_item_state']) ? $_smarty_tpl->tpl_vars['add_filter_variant_item_state']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['field_id']->value] = array('show'=>true);
$_smarty_tpl->_assignInScope('add_filter_variant_item_state', $_tmp_array);?>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['is_checked'] && $_smarty_tpl->tpl_vars['item']->index !== 0) {?>
                                            <?php $_smarty_tpl->_assignInScope('is_has_value', true);?>
                                        <?php }?>
                                        <li>
                                            <div class="search-filters__variant-item">
                                                <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio">
                                                    <input type="radio"
                                                        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['value'] === false ? '' : (($tmp = $_smarty_tpl->tpl_vars['item']->value['value'] ?? null)===null||$tmp==='' ? (smarty_modifier_enum("YesNo::YES")) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['is_checked']) {?>checked="checked"<?php }?>
                                                        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                                                        id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                        data-ca-search-filters="field"
                                                    />
                                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                                </label>
                                            </div>
                                        </li>
                                    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_33_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['search_filter']->value['type'] === "range") {?>
                                <?php $_smarty_tpl->_assignInScope('search_filter_item_class', "btn-group search-filters__dropdown");?>
                                <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['data']) {?>
                                    <?php $_smarty_tpl->_assignInScope('item_id_from', ((string)$_smarty_tpl->tpl_vars['field_id']->value)."_".((string)$_smarty_tpl->tpl_vars['search_filter']->value['data']['name_from']));?>
                                    <?php $_smarty_tpl->_assignInScope('item_id_to', ((string)$_smarty_tpl->tpl_vars['field_id']->value)."_".((string)$_smarty_tpl->tpl_vars['search_filter']->value['data']['name_to']));?>
                                    <?php $_smarty_tpl->_assignInScope('is_show_clear_filter_btn', true);?>
                                    <?php if ($_smarty_tpl->tpl_vars['_REQUEST']->value[$_smarty_tpl->tpl_vars['search_filter']->value['data']['name_from']] || $_smarty_tpl->tpl_vars['_REQUEST']->value[$_smarty_tpl->tpl_vars['search_filter']->value['data']['name_to']]) {?>
                                        <?php $_smarty_tpl->_assignInScope('is_show', true);?>
                                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['add_filter_variant_item_state']) ? $_smarty_tpl->tpl_vars['add_filter_variant_item_state']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['field_id']->value] = array('show'=>true);
$_smarty_tpl->_assignInScope('add_filter_variant_item_state', $_tmp_array);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['data']['value_from'] || $_smarty_tpl->tpl_vars['search_filter']->value['data']['value_to']) {?>
                                        <?php $_smarty_tpl->_assignInScope('is_has_value', true);?>
                                    <?php }?>
                                    <li>
                                        <div class="search-filters__item">
                                            <div>
                                                <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id_from']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                    <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['search_filter']->value['data']['label_from'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("search_range_from") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                </label>
                                                <input type="text"
                                                    class="input-fill"
                                                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['data']['name_from'], ENT_QUOTES, 'UTF-8');?>
"
                                                    id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id_from']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['data']['value_from'], ENT_QUOTES, 'UTF-8');?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['data']['placeholder_from']) {?>
                                                        placeholder=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['data']['placeholder_from'], ENT_QUOTES, 'UTF-8');?>

                                                    <?php }?>
                                                    data-ca-search-filters="field"
                                                />
                                            </div>
                                            <div>
                                                <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id_to']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                    <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['search_filter']->value['data']['label_to'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("search_range_to") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                </label>
                                                <input type="text"
                                                    class="input-fill"
                                                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['data']['name_to'], ENT_QUOTES, 'UTF-8');?>
"
                                                    id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id_to']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['data']['value_to'], ENT_QUOTES, 'UTF-8');?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['data']['placeholder_to']) {?>
                                                        placeholder=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['data']['placeholder_to'], ENT_QUOTES, 'UTF-8');?>

                                                    <?php }?>
                                                    data-ca-search-filters="field"
                                                />
                                            </div>
                                        </div>
                                    </li>
                                <?php }?>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['search_filter']->value['type'] === "dropdown") {?>
                                <?php $_smarty_tpl->_assignInScope('search_filter_item_class', "btn-group search-filters__dropdown");?>
                                <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['content'] && smarty_modifier_trim($_smarty_tpl->tpl_vars['search_filter']->value['content']) !== '') {?>
                                    <li>
                                        <div class="search-filters__item-raw">
                                            <?php echo $_smarty_tpl->tpl_vars['search_filter']->value['content'];?>

                                        </div>
                                    </li>
                                <?php }?>
                                                        <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('search_filter_item_class', "btn-group search-filters__dropdown");?>
                                <?php $_smarty_tpl->_assignInScope('is_show_clear_filter_btn', true);?>
                                <?php if ($_smarty_tpl->tpl_vars['_REQUEST']->value[$_smarty_tpl->tpl_vars['search_filter']->value['id']]) {?>
                                    <?php $_smarty_tpl->_assignInScope('is_show', true);?>
                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['add_filter_variant_item_state']) ? $_smarty_tpl->tpl_vars['add_filter_variant_item_state']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['field_id']->value] = array('show'=>true);
$_smarty_tpl->_assignInScope('add_filter_variant_item_state', $_tmp_array);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['value']) {?>
                                    <?php $_smarty_tpl->_assignInScope('is_has_value', true);?>
                                <?php }?>
                                <li>
                                    <div class="search-filters__item">
                                        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label>
                                        <input type="text"
                                            class="input-fill"
                                            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                                            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                                            placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['placeholder'], ENT_QUOTES, 'UTF-8');?>
"
                                            data-ca-search-filters="field"
                                        />
                                    </div>
                                </li>
                            <?php }?>
                        </ul>
                    <?php }?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                                        <?php $_smarty_tpl->_assignInScope('clear_filter_btn_class', $_smarty_tpl->tpl_vars['is_has_value']->value ? '' : "hidden");?>
                    <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter_item_class']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php if (!$_smarty_tpl->tpl_vars['is_show']->value && $_smarty_tpl->tpl_vars['search_filter']->value['category'] !== "primary") {?>hidden<?php }?>"
                        data-ca-search-filters="item"
                        data-ca-search-filters-item-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-search-filters-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['search_filter_item_attributes']->value) {?>
                            <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['search_filter_item_attributes']->value);?>

                        <?php }?>
                    >
                        <?php if ($_smarty_tpl->tpl_vars['is_show_clear_filter_btn']->value) {?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"button",'icon'=>"icon-remove",'class'=>"btn search-filters__clear-filter-btn ".((string)$_smarty_tpl->tpl_vars['clear_filter_btn_class']->value),'data'=>array("data-ca-search-filters"=>"clearFilterBtn")), true);?>

                        <?php }?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'search_filters_item');?>

                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"plus",'class'=>"search-filters__add-filter-icon",'assign'=>"add_filter_icon"),$_smarty_tpl);?>

                <div class="dropdown search-filters__add-filter"
                    data-ca-search-filters="addFilter"
                >
                    <?php ob_start();
echo $_smarty_tpl->__("search_add_filter");
$_prefixVariable30=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"button",'raw'=>true,'text'=>"<span class=\"mobile-hidden\">".$_prefixVariable30."</span>".((string)$_smarty_tpl->tpl_vars['add_filter_icon']->value),'class'=>"btn dropdown-toggle search-filters__add-filter-dropdown-toggle",'data'=>array("data-toggle"=>"dropdown","data-ca-search-filters"=>"addFilterBtn")), true);?>

                    <ul class="dropdown-menu search-filters__add-filter-dropdown-menu"
                        data-ca-search-filters="addFilterDropdownMenu"
                    >
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_filters_without_context_search']->value['data'], 'search_filter');
$_smarty_tpl->tpl_vars['search_filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['search_filter']->value) {
$_smarty_tpl->tpl_vars['search_filter']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['search_filter']->value['category'] === "primary" || (isset($_smarty_tpl->tpl_vars['search_filter']->value['is_enabled'])) && !$_smarty_tpl->tpl_vars['search_filter']->value['is_enabled'] || (isset($_smarty_tpl->tpl_vars['search_filter']->value['is_hidden'])) && $_smarty_tpl->tpl_vars['search_filter']->value['is_hidden']) {?>
                                <?php continue 1;?>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('field_id', ((string)$_smarty_tpl->tpl_vars['form_id']->value)."_".((string)$_smarty_tpl->tpl_vars['search_filter']->value['id']));?>
                            <?php $_smarty_tpl->_assignInScope('is_show', $_smarty_tpl->tpl_vars['add_filter_variant_item_state']->value[$_smarty_tpl->tpl_vars['field_id']->value]['show']);?>
                            <li data-ca-search-filters="addFilterVariantItem" <?php if ($_smarty_tpl->tpl_vars['is_show']->value) {?>class="hidden"<?php }?>>
                                <label for="search_filters_add_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    class="checkbox search-filters__add-filter-content-variant-item-label"
                                >
                                    <input type="checkbox"
                                        form="search_filters_add_filter"
                                        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_show']->value ? (smarty_modifier_enum("YesNo::YES")) : (smarty_modifier_enum("YesNo::NO")), ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['is_show']->value) {?>checked="checked"<?php }?>
                                        name="search_filters_add_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        id="search_filters_add_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-search-filters-add-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-search-filters-add-filter-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_filter']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-search-filters-update="ignore"
                                        class="hidden"
                                    />
                                    <?php echo $_smarty_tpl->tpl_vars['search_filter']->value['label'];?>

                                </label>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>

        <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
--></form>
    </div>

        <?php if ($_smarty_tpl->tpl_vars['search_filters']->value['advanced_search']) {?>
        <div class="search-filters-advanced-search">
            <?php echo $_smarty_tpl->tpl_vars['search_filters']->value['advanced_search'];?>

        </div>
    <?php }?>

        <?php $_smarty_tpl->_assignInScope('context_search', $_smarty_tpl->tpl_vars['context_search']->value ,false ,2);
}
}
}
