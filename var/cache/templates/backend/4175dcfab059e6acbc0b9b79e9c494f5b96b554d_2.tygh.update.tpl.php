<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_options/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676166bcd7_45734314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4175dcfab059e6acbc0b9b79e9c494f5b96b554d' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_options/update.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/copy_on_type.tpl' => 1,
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:views/product_options/components/option_types.tpl' => 1,
    'tygh:views/product_options/components/variants_add.tpl' => 1,
    'tygh:buttons/update_for_all.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:buttons/multiple_buttons.tpl' => 1,
    'tygh:common/attach_images.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_6740676166bcd7_45734314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','variants','modifiers','modifiers','variants','position','type','description','comment','comment_hint','required','missing_variants_handling','display_message','hide_option_completely','regexp','regexp_hint','inner_hint','tt_views_product_options_update_inner_hint','incorrect_filling_message','tt_views_product_options_update_incorrect_filling_message','allowed_extensions','allowed_extensions_hint','max_uploading_file_size','max_uploading_file_size_hint','multiupload','add_variant','position_short','name','modifier','type','status','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','position_short','name','modifier','type','status','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','icon','weight_modifier','type'));
if ($_smarty_tpl->tpl_vars['option_data']->value['option_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['option_data']->value['option_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['shared_product']->value == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('show_update_for_all', true);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['shared_product']->value == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('cm_no_hide_input', "cm-no-hide-input");?>
    <?php }
}?>

<?php $_smarty_tpl->_assignInScope('action_context', (($tmp = $_smarty_tpl->tpl_vars['action_context']->value ?? null)===null||$tmp==='' ? $_REQUEST['_action_context'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['option_data']->value,"product_options") && fn_check_permissions("product_options","update","admin","POST"));
$_smarty_tpl->_assignInScope('tabs_count', $_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP") || $_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX") || !$_smarty_tpl->tpl_vars['option_data']->value || !$_smarty_tpl->tpl_vars['option_data']->value['option_type'] ? 2 : 1);?>
<div id="content_group_product_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" 
    method="post" 
    name="option_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" 
    class="<?php if ($_smarty_tpl->tpl_vars['ajax_mode']->value) {?>cm-ajax <?php }?>form-horizontal form-edit form-highlight cm-disable-empty-files <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-hide-inputs<?php }?>" 
    enctype="multipart/form-data"
    <?php if ($_smarty_tpl->tpl_vars['action_context']->value) {?>data-ca-ajax-done-event="ce.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['action_context']->value, ENT_QUOTES, 'UTF-8');?>
.product_option_save"<?php }?>
>
<input type="hidden" name="option_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cm_no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
        <?php $_smarty_tpl->_assignInScope('disable_company_picker', true);?>
    <?php }
}?>

<?php if ($_REQUEST['product_id']) {?>
    <input class="cm-no-hide-input" type="hidden" name="option_data[product_id]" value="<?php echo htmlspecialchars((string) $_REQUEST['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <input class="cm-no-hide-input" type="hidden" name="option_data[is_global]" value="1">
    <?php if (fn_allowed_for("ULTIMATE")) {?>
        <?php $_smarty_tpl->_assignInScope('disable_company_picker', true);?>
        <?php if (!$_smarty_tpl->tpl_vars['company_id']->value) {?>
            <?php $_smarty_tpl->_assignInScope('company_id', $_smarty_tpl->tpl_vars['product_company_id']->value);?>
        <?php }?>
    <?php }
}?>

<div class="tabs cm-j-tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <li id="tab_option_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP") || $_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX") || !$_smarty_tpl->tpl_vars['option_data']->value || !$_smarty_tpl->tpl_vars['option_data']->value['option_type']) {?>
            <li id="tab_option_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js">
                <a data-ca-variants-text="<?php echo $_smarty_tpl->__("variants");?>
"
                    data-ca-modifiers-text="<?php echo $_smarty_tpl->__("modifiers");?>
"
                >
                    <?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] === smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?>
                        <?php echo $_smarty_tpl->__("modifiers");?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->__("variants");?>

                    <?php }?>
                </a>
            </li>
        <?php }?>
    </ul>
</div>
<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div id="content_tab_option_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <fieldset>
        <input class="cm-no-hide-input" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value, ENT_QUOTES, 'UTF-8');?>
" name="object">
        <?php $_smarty_tpl->_subTemplateRender("tygh:components/copy_on_type.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('source_value'=>$_smarty_tpl->tpl_vars['option_data']->value['internal_option_name'],'source_name'=>"option_data[internal_option_name]",'target_value'=>$_smarty_tpl->tpl_vars['option_data']->value['option_name'],'target_name'=>"option_data[option_name]",'type'=>"option_name"), 0, false);
?>

        <div class="control-group">
            <label class="control-label" for="elm_position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("position");?>
</label>
            <div class="controls">
                <input type="text" name="option_data[position]" id="elm_position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_data']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-small" />
            </div>
        </div>

        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <?php $_smarty_tpl->_assignInScope('zero_company_id_name_lang_var', "none");?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"option_data[company_id]",'id'=>"elm_option_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'disable_company_picker'=>$_smarty_tpl->tpl_vars['disable_company_picker']->value,'selected'=>(($tmp = $_smarty_tpl->tpl_vars['option_data']->value['company_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company_id']->value ?? null : $tmp),'zero_company_id_name_lang_var'=>$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value), 0, false);
?>

        <?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['shared_product']->value == "Y") {?>
            <input type="hidden" name="option_data[option_type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_data']->value['option_type'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input" />
        <?php }?>
        <div class="control-group">
            <label class="control-label" for="elm_option_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("type");?>
</label>
            <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_options/components/option_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"option_data[option_type]",'option_id'=>$_smarty_tpl->tpl_vars['id']->value,'value'=>$_smarty_tpl->tpl_vars['option_data']->value['option_type'],'display'=>"select",'tag_id'=>"elm_option_type_".((string)$_smarty_tpl->tpl_vars['id']->value),'check'=>true), 0, false);
?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_option_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
</label>
            <div class="controls">
            <textarea id="elm_option_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="option_data[description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_option_comment_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("comment");?>
</label>
            <div class="controls">
            <input type="text" name="option_data[comment]" id="elm_option_comment_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_data']->value['comment'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
            <p class="muted description"><?php echo $_smarty_tpl->__("comment_hint");?>
</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_option_file_required_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("required");?>
</label>
            <div class="controls">
            <label class="checkbox">
            <input type="hidden" name="option_data[required]" value="N" /><input type="checkbox" id="elm_option_file_required_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="option_data[required]" value="Y" <?php if ($_smarty_tpl->tpl_vars['option_data']->value['required'] == "Y") {?>checked="checked"<?php }?>  />
            </label>
            </div>
        </div>

        <?php if (!$_smarty_tpl->tpl_vars['option_data']->value['option_type'] || ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP") || $_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX"))) {?>
            <div class="control-group">
                <label class="control-label" for="elm_option_missing_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("missing_variants_handling");?>
</label>
                <div class="controls">
                    <?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] && ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX") || $_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP") || $_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX"))) {?>
                    <select id="elm_option_missing_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="option_data[missing_variants_handling]">
                        <option value="M" <?php if ($_smarty_tpl->tpl_vars['option_data']->value['missing_variants_handling'] == "M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("display_message");?>
</option>
                        <option value="H" <?php if ($_smarty_tpl->tpl_vars['option_data']->value['missing_variants_handling'] == "H") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("hide_option_completely");?>
</option>
                    </select>
                <?php } else { ?>
                <p>-</p>
                <?php }?>
                </div>
            </div>
        <?php }?>

        <div id="extra_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] != smarty_modifier_enum("ProductOptionTypes::INPUT") && $_smarty_tpl->tpl_vars['option_data']->value['option_type'] != smarty_modifier_enum("ProductOptionTypes::TEXT")) {?>class="hidden"<?php }?>>
            <div class="control-group">
                <label class="control-label" for="elm_option_regexp_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("regexp");?>
</label>
                <div class="controls">
                    <input type="text" name="option_data[regexp]" id="elm_option_regexp_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo $_smarty_tpl->tpl_vars['option_data']->value['regexp'];?>
" class="input-large" />
                    <p class="description"><?php echo $_smarty_tpl->__("regexp_hint");?>
</p>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_option_inner_hint_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("inner_hint");?>
</label>
                <div class="controls">
                    <input type="text" name="option_data[inner_hint]" id="elm_option_inner_hint_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_data']->value['inner_hint'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                    <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_product_options_update_inner_hint");?>
</p>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_option_incorrect_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("incorrect_filling_message");?>
</label>
                <div class="controls">
                    <input type="text" name="option_data[incorrect_message]" id="elm_option_incorrect_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_data']->value['incorrect_message'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                    <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_product_options_update_incorrect_filling_message");?>
</p>
                </div>
            </div>
        </div>

        <div id="file_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] != smarty_modifier_enum("ProductOptionTypes::FILE")) {?>class="hidden"<?php }?>>
            <div class="control-group">
                <label class="control-label" for="elm_option_allowed_extensions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("allowed_extensions");?>
</label>
                <div class="controls">
                <input type="text" name="option_data[allowed_extensions]" id="elm_option_allowed_extensions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_data']->value['allowed_extensions'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                <p class="muted description"><?php echo $_smarty_tpl->__("allowed_extensions_hint");?>
</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="elm_option_max_uploading_file_size_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("max_uploading_file_size");?>
</label>
                <div class="controls">
                <input type="text" name="option_data[max_file_size]" id="elm_option_max_uploading_file_size_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_data']->value['max_file_size'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                <p class="muted description"><?php echo $_smarty_tpl->__("max_uploading_file_size_hint");?>
</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="elm_option_multiupload_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("multiupload");?>
</label>
                <div class="controls">
                <label class="checkbox">
                <input type="hidden" name="option_data[multiupload]" value="N" /><input type="checkbox" id="elm_option_multiupload_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="option_data[multiupload]" value="Y" <?php if ($_smarty_tpl->tpl_vars['option_data']->value['multiupload'] == "Y") {?>checked="checked"<?php }?>/>
                </label>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_options:properties"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_options:properties"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_options:properties"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </fieldset>
    <!--content_tab_option_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

     <div class="hidden" data-ca-variants-list="container" id="content_tab_option_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
     <fieldset>

        <?php if ($_smarty_tpl->tpl_vars['id']->value && !fn_check_form_permissions('') && $_smarty_tpl->tpl_vars['allow_save']->value && $_smarty_tpl->tpl_vars['option_data']->value['variants'] && $_smarty_tpl->tpl_vars['option_data']->value['option_type'] !== smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?>
            <div class="control-toolbar cm-toggle-button">
                <div class="control-toolbar__btns">
                    <div class="control-toolbar__btns-right">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"button",'text'=>$_smarty_tpl->__("add_variant"),'icon_first'=>true,'icon'=>"icon-plus icon__open-rotate",'class'=>"btn variants-list__btn-add",'data'=>array("data-ca-variants-list"=>"btnAdd","data-ca-variants-list-is-show-add-variants"=>"false")), true);?>

                    </div>
                </div>
            </div>
        <?php }?>

        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative table-responsive">
            <thead>
            <tr class="first-sibling"><th class="cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>"><?php echo $_smarty_tpl->__("position_short");?>
</th><th class="cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
width="60%"><?php echo $_smarty_tpl->__("name");?>
</th><th><?php echo $_smarty_tpl->__("modifier");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("type");?>
</th><th class="cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>"><?php echo $_smarty_tpl->__("status");?>
</th><th><div class="btn-expand-wrapper"><div id="on_st_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="hand cm-combinations-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
 btn-expand btn-expand--header"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_right",'class'=>"events-none"),$_smarty_tpl);?>
</div><div id="off_st_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="hand hidden cm-combinations-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
 btn-expand btn-expand--header"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_down",'class'=>"events-none"),$_smarty_tpl);?>
</div></div></th><th class="cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>">&nbsp;</th></tr>
            </thead>

            <?php if (($_smarty_tpl->tpl_vars['id']->value && !fn_check_form_permissions('') && $_smarty_tpl->tpl_vars['allow_save']->value && $_smarty_tpl->tpl_vars['option_data']->value['option_type'] !== smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) || !$_smarty_tpl->tpl_vars['id']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_options/components/variants_add.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option_type'=>$_smarty_tpl->tpl_vars['option_data']->value['option_type'],'id'=>$_smarty_tpl->tpl_vars['id']->value,'num'=>smarty_modifier_count($_smarty_tpl->tpl_vars['option_data']->value['variants'])), 0, false);
?>
            <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option_data']->value['variants'], 'vr', false, NULL, 'fe_v', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['vr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vr']->value) {
$_smarty_tpl->tpl_vars['vr']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fe_v']->value['iteration']++;
?>
            <?php $_smarty_tpl->_assignInScope('num', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_fe_v']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fe_v']->value['iteration'] : null));?>
            <tbody class="hover cm-row-item" id="option_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
">
            <tr><td class="cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-th="<?php echo $_smarty_tpl->__("position_short");?>
"><input type="text" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][position]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['position'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
size="3" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="input-micro" /></td><td class="cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-th="<?php echo $_smarty_tpl->__("name");?>
"><input type="text" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variant_name]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="input-full" /></td><td class="nowrap <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['shared_product']->value == "Y") {?> cm-no-hide-input<?php }?>" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-th="<?php echo $_smarty_tpl->__("modifier");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("type");?>
"><input type="text" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][modifier]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['modifier'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
size="5" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="input-mini cm-numeric" data-a-sep/>&nbsp;/&nbsp;<select class="input-xsmall" name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][modifier_type]"><option value="A" <?php if ($_smarty_tpl->tpl_vars['vr']->value['modifier_type'] == "A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</option><option value="P" <?php if ($_smarty_tpl->tpl_vars['vr']->value['modifier_type'] == "P") {?>selected="selected"<?php }?>>%</option></select><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>$_smarty_tpl->tpl_vars['vr']->value['variant_id'],'name'=>"update_all_vendors[".((string)$_smarty_tpl->tpl_vars['num']->value)."]",'component'=>"product_options.".((string)$_smarty_tpl->tpl_vars['num']->value)), 0, true);
?></td><td class="cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-th="<?php echo $_smarty_tpl->__("status");?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"option_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."][status]",'display'=>"select",'obj'=>$_smarty_tpl->tpl_vars['vr']->value,'meta'=>"input-mini"), 0, true);
?></td><td class="nowrap"><span id="on_extra_option_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="btn btn-expand hand cm-combination-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_right",'class'=>"events-none"),$_smarty_tpl);?>
</span><span id="off_extra_option_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="btn btn-expand hand hidden cm-combination-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret_down",'class'=>"events-none"),$_smarty_tpl);?>
</span><input type="hidden" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][variant_id]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cm_no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
"/></td><td class="right cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"option_variants_".((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['num']->value),'tag_level'=>"3",'only_delete'=>"Y"), 0, true);
?></td></tr>
            <tr id="extra_option_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-ex-op hidden"><td colspan="7"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_options:edit_product_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_options:edit_product_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="control-group cm-non-cb<?php if ($_smarty_tpl->tpl_vars['option_data']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> hidden<?php }?>"><label class="control-label"><?php echo $_smarty_tpl->__("icon");?>
</label><div class="controls"><?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"variant_image",'image_key'=>$_smarty_tpl->tpl_vars['num']->value,'hide_titles'=>true,'no_detailed'=>true,'image_object_type'=>"variant_image",'image_type'=>"V",'image_pair'=>$_smarty_tpl->tpl_vars['vr']->value['image_pair'],'prefix'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?></div></div><div class="control-group"><label class="control-label"><?php echo $_smarty_tpl->__("weight_modifier");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("type");?>
:</label><div class="controls flex-vertical-centered--on-mobile"><input type="text" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][weight_modifier]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['weight_modifier'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
size="5" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="input-mini" />&nbsp;/&nbsp;<select name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][weight_modifier_type]"><option value="A" <?php if ($_smarty_tpl->tpl_vars['vr']->value['weight_modifier_type'] == "A") {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
</option><option value="P" <?php if ($_smarty_tpl->tpl_vars['vr']->value['weight_modifier_type'] == "P") {?>selected="selected"<?php }?>>%</option></select></div></div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_options:edit_product_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td></tr>
            </tbody>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </table>
        </div>
     </fieldset>
     <!--content_tab_option_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
</div>

<div class="buttons-container">
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value && $_smarty_tpl->tpl_vars['shared_product']->value != "Y") {?>
            <?php $_smarty_tpl->_assignInScope('hide_first_button', true);?>
        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[product_options.update]",'cancel_action'=>"close",'extra'=>'','hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
</div>

</form>

<!--content_group_product_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
