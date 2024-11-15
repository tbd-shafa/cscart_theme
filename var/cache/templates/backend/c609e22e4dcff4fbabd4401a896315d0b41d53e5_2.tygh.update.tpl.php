<?php
/* Smarty version 4.3.0, created on 2024-11-15 05:11:42
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/payments/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6737488ea02db0_11670734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c609e22e4dcff4fbabd4401a896315d0b41d53e5' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/payments/update.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:common/attach_images.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:common/select_usergroups.tpl' => 1,
    'tygh:common/adaptive_object_selection.tpl' => 1,
    'tygh:pickers/storefronts/picker.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_6737488ea02db0_11670734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','configure','storefronts','processor','offline','tools_addons_additional_payment_methods','template','none','tt_views_payments_update_template','name','icon','description','payment_instructions','usergroups','taxes','tt_views_payments_update_taxes','surcharge','surcharge_title','tt_views_payments_update_surcharge_title','add_storefronts','all_storefronts'));
echo smarty_function_script(array('src'=>"js/tygh/backend/payment.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['payment']->value ? $_smarty_tpl->tpl_vars['payment']->value['payment_id'] : "0");
$_smarty_tpl->_assignInScope('storefront_owner_id', (($tmp = $_smarty_tpl->tpl_vars['payment']->value['storefront_owner_id'] ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['payment']->value,"payments"));
$_smarty_tpl->_assignInScope('tabs_count', fn_allowed_for("MULTIVENDOR:ULTIMATE") || $_smarty_tpl->tpl_vars['is_sharing_enabled']->value ? 3 : 2);?>

<div id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        name="payments_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        enctype="multipart/form-data"
        class="form-horizontal<?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>"
        data-ca-payment="paymentsForm"
    >
        <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <div class="tabs cm-j-tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
            <ul class="nav nav-tabs">
                <li id="tab_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active">
                    <a><?php echo $_smarty_tpl->__("general");?>
</a>
                </li>
                <li id="tab_conf_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js cm-ajax <?php if (!$_smarty_tpl->tpl_vars['payment']->value['processor_id']) {?>hidden<?php }?>">
                    <a <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']) {?>href="<?php echo htmlspecialchars((string) fn_url("payments.processor?payment_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                        <?php echo $_smarty_tpl->__("configure");?>

                    </a>
                </li>
                <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE") || $_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
                    <li id="tab_storefronts_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js">
                        <a><?php echo $_smarty_tpl->__("storefronts");?>
</a>
                    </li>
                <?php }?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"payments:tabs_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"payments:tabs_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"payments:tabs_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </ul>
        </div>

        <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div data-ca-payment="tabDetails" id="content_tab_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <fieldset>

                                <div class="control-group">
                    <label class="control-label" for="elm_payment_processor_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->__("processor");?>
:
                    </label>
                    <div class="controls">
                        <select id="elm_payment_processor_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            class="cm-object-picker"
                            name="payment_data[processor_id]"
                            onchange="fn_switch_processor(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
, this.value);"
                            data-ca-payment="processor_id"
                        >
                            <option value="0"><?php echo $_smarty_tpl->__("offline");?>
</option>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"payments:processors_optgroups"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"payments:processors_optgroups"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_processors']->value, 'payment_procs', false, 'category_name');
$_smarty_tpl->tpl_vars['payment_procs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category_name']->value => $_smarty_tpl->tpl_vars['payment_procs']->value) {
$_smarty_tpl->tpl_vars['payment_procs']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['payment_procs']->value) {?>
                                    <optgroup label="<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['category_name']->value);?>
">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_procs']->value, 'processor');
$_smarty_tpl->tpl_vars['processor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['processor']->value) {
$_smarty_tpl->tpl_vars['processor']->do_else = false;
?>
                                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['processor']->value['processor_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id'] === $_smarty_tpl->tpl_vars['processor']->value['processor_id']) {?>
                                                    selected="selected"
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['processor']->value['processor_status'] === "D") {?>
                                                    disabled="disabled"
                                                <?php }?>
                                                data-ca-payment-addon="<?php if ($_smarty_tpl->tpl_vars['processor']->value['addon']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['processor']->value['addon'], ENT_QUOTES, 'UTF-8');
} else { ?>core<?php }?>"
                                            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['processor']->value['processor'], ENT_QUOTES, 'UTF-8');?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </optgroup>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"payments:processors_optgroups"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </select>
                        
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <?php if (fn_check_permissions("addons","manage","admin")) {?>
                            <div class="well well-small help-block">
                                <?php echo $_smarty_tpl->__("tools_addons_additional_payment_methods",array("[url]"=>fn_url("addons.manage?type=not_installed")));?>

                            </div>
                        <?php }?>
                        <p id="elm_processor_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            class="muted description <?php if (!$_smarty_tpl->tpl_vars['payment_processors']->value[$_smarty_tpl->tpl_vars['payment']->value['processor_id']]['description']) {?>hidden<?php }?>"
                        >
                            <?php echo $_smarty_tpl->tpl_vars['payment_processors']->value[$_smarty_tpl->tpl_vars['payment']->value['processor_id']]['description'];?>

                        </p>
                    </div>
                </div>

                                <div class="control-group <?php if (!empty($_smarty_tpl->tpl_vars['payment']->value['processor_id'])) {?>hidden<?php }?>"
                    data-ca-payment="templateControlGroup"
                >
                    <label class="control-label" for="elm_payment_tpl_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->__("template");?>
:
                    </label>
                    <div class="controls">
                        <select id="elm_payment_tpl_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            name="payment_data[template]"
                            <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']) {?>disabled="disabled"<?php }?>
                            data-ca-payment="template"
                        >
                            <option value="views/orders/components/payments/empty.tpl"><?php echo $_smarty_tpl->__("none");?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'full_path', false, 'template');
$_smarty_tpl->tpl_vars['full_path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value => $_smarty_tpl->tpl_vars['full_path']->value) {
$_smarty_tpl->tpl_vars['full_path']->do_else = false;
?>
                                <?php if (!strpos($_smarty_tpl->tpl_vars['full_path']->value,"empty.tpl")) {?>
                                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['full_path']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['payment']->value['template'] === $_smarty_tpl->tpl_vars['full_path']->value) {?>selected="selected"<?php }?>
                                    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_payments_update_template");?>
</p>
                    </div>
                </div>

                                <div class="control-group">
                    <label for="elm_payment_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required control-label">
                        <?php echo $_smarty_tpl->__("name");?>
:
                    </label>
                    <div class="controls">
                        <input id="elm_payment_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            type="text"
                            name="payment_data[payment]"
                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-payment="name"
                        >
                    </div>
                </div>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"payments:name_post"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"payments:name_post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"payments:name_post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                <?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"payment_data[company_id]",'id'=>"payment_data_".((string)$_REQUEST['payment_id']),'selected'=>$_smarty_tpl->tpl_vars['payment']->value['company_id']), 0, false);
?>
                <?php }?>

                                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("icon");?>
:</label>
                    <div class="controls"
                        data-ca-payment="iconWrapper"
                    >
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"payment_image",'image_key'=>$_smarty_tpl->tpl_vars['id']->value,'image_object_type'=>"payment",'image_pair'=>$_smarty_tpl->tpl_vars['payment']->value['icon'],'no_detailed'=>"Y",'hide_titles'=>"Y",'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
                    </div>
                </div>

                                <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"payment_data[status]",'id'=>"elm_payment_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['payment']->value), 0, false);
?>
                <?php }?>

                                <div class="control-group">
                    <label class="control-label" for="elm_payment_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->__("description");?>
:
                    </label>
                    <div class="controls">
                        <input id="elm_payment_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            type="text"
                            name="payment_data[description]"
                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                    </div>
                </div>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"payments:update"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"payments:update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"payments:update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                <div class="control-group">
                    <label class="control-label" for="elm_payment_instructions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->__("payment_instructions");?>
:
                    </label>
                    <div class="controls">
                        <textarea id="elm_payment_instructions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            name="payment_data[instructions]"
                            cols="55"
                            rows="8"
                            class="cm-wysiwyg input-textarea-long"
                        ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['instructions'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>
                </div>

                                <div class="control-group">
                    <label class="control-label">
                        <?php echo $_smarty_tpl->__("usergroups");?>
:
                    </label>
                    <div class="controls">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"elm_payment_usergroup_".((string)$_smarty_tpl->tpl_vars['id']->value),'name'=>"payment_data[usergroup_ids]",'usergroups'=>$_smarty_tpl->tpl_vars['usergroups']->value,'usergroup_ids'=>$_smarty_tpl->tpl_vars['payment']->value['usergroup_ids'],'list_mode'=>false), 0, false);
?>
                    </div>
                </div>

                                <div class="control-group">
                <label class="control-label">
                    <?php echo $_smarty_tpl->__("taxes");?>
:
                </label>
                    <div class="controls">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"payment_data[tax_ids]",'input_id'=>"elm_payment_taxes",'item_ids'=>$_smarty_tpl->tpl_vars['payment']->value['tax_ids'],'items'=>$_smarty_tpl->tpl_vars['taxes']->value,'id_field'=>"tax_id",'name_field'=>"tax",'type'=>"taxes",'class_prefix'=>"taxes",'close_on_select'=>"false",'list_mode'=>false), 0, false);
?>
                        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_payments_update_taxes");?>
</p>
                        <?php }?>
                    </div>
                </div>

                                <div class="control-group">
                    <label class="control-label" for="elm_payment_surcharge_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->__("surcharge");?>
:
                    </label>
                        <div class="controls">
                            <input id="elm_payment_surcharge_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                type="text"
                                name="payment_data[p_surcharge]"
                                class="input-mini cs-payments-update__surcharge-input"
                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['p_surcharge'], ENT_QUOTES, 'UTF-8');?>
"
                                size="4">
                            % +
                            <input type="text"
                                name="payment_data[a_surcharge]"
                                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['a_surcharge'], ENT_QUOTES, 'UTF-8');?>
"
                                class="input-mini cs-payments-update__surcharge-input"
                                size="4">
                            <?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>

                        </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_payment_surcharge_title_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->__("surcharge_title");?>
:
                    </label>
                    <div class="controls">
                        <input id="elm_payment_surcharge_title_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            type="text"
                            name="payment_data[surcharge_title]"
                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['surcharge_title'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_payments_update_surcharge_title");?>
</p>
                    </div>
                </div>

                <div id="content_tab_details_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"payments:properties"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"payments:properties"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"payments:properties"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <!--content_tab_details_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            </fieldset>
            <!--content_tab_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

                        <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE") || $_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
                <div class="hidden" id="content_tab_storefronts_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_assignInScope('add_storefront_text', $_smarty_tpl->__("add_storefronts"));?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('multiple'=>true,'input_name'=>"payment_data[storefront_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['payment']->value['storefront_ids'],'data_id'=>"storefront_ids",'but_meta'=>"pull-right",'no_item_text'=>$_smarty_tpl->__("all_storefronts"),'but_text'=>$_smarty_tpl->tpl_vars['add_storefront_text']->value,'view_only'=>($_smarty_tpl->tpl_vars['is_sharing_enabled']->value && $_smarty_tpl->tpl_vars['runtime']->value['company_id'])), 0, false);
?>
                <!--content_tab_storefronts_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php }?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"payments:tabs_extra_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"payments:tabs_extra_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div id="content_tab_conf_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"payments:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"payments:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"payments:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <!--content_tab_conf_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
-->
                </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"payments:tabs_extra_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>

        <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
            <div class="buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[payments.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value,'cancel_meta'=>"bulkedit-unchanged"), 0, false);
?>
            </div>
        <?php }?>

    </form>
<!--content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
