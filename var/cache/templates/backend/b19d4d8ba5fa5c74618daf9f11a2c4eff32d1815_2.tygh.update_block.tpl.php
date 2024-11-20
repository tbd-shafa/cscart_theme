<?php
/* Smarty version 4.3.0, created on 2024-11-20 02:32:48
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/block_manager/update_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673dbad0067b35_07291119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b19d4d8ba5fa5c74618daf9f11a2c4eff32d1815' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/block_manager/update_block.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/block_manager/components/block_content.tpl' => 1,
    'tygh:views/block_manager/components/setting_element.tpl' => 2,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 2,
  ),
),false)) {
function content_673dbad0067b35_07291119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','content','block_settings','status','name','template','settings','wrapper','user_class','block_manager.availability.show_on','block_manager.availability.','dynamic_content','override_by_this','tt_views_block_manager_update_block_override_by_this','content_changed_for','global_status','active','disabled','disable_for','enable_for'));
if ($_smarty_tpl->tpl_vars['block']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['block']->value['block_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php $_smarty_tpl->_assignInScope('uid', uniqid(4));
$_smarty_tpl->_assignInScope('snapping_id', (($tmp = $_smarty_tpl->tpl_vars['snapping_data']->value['snapping_id'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp));
$_smarty_tpl->_assignInScope('html_id', ((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['snapping_id']->value)."_".((string)$_smarty_tpl->tpl_vars['block']->value['type']));?>

<?php if ($_smarty_tpl->tpl_vars['id']->value == 0) {?>
    <?php $_smarty_tpl->_assignInScope('hide_status', true);
}?>

<?php if ($_REQUEST['active_tab']) {?>
    <?php $_smarty_tpl->_assignInScope('active_tab', $_REQUEST['active_tab']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('active_tab', 'block_general');
}?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php if ($_REQUEST['dynamic_object']['object_id'] > 0) {?>
    <?php $_smarty_tpl->_assignInScope('dynamic_object', $_REQUEST['dynamic_object']);
}
$_smarty_tpl->_assignInScope('tabs_count', 1);
$_smarty_tpl->_assignInScope('tabs_count', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'block_content') && smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'block_content')) ? $_smarty_tpl->tpl_vars['tabs_count']->value+1 : $_smarty_tpl->tpl_vars['tabs_count']->value);
$_smarty_tpl->_assignInScope('tabs_count', $_smarty_tpl->tpl_vars['block_scheme']->value['settings'] ? $_smarty_tpl->tpl_vars['tabs_count']->value+1 : $_smarty_tpl->tpl_vars['tabs_count']->value);
$_smarty_tpl->_assignInScope('tabs_count', $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value && !$_smarty_tpl->tpl_vars['hide_status']->value ? $_smarty_tpl->tpl_vars['tabs_count']->value+1 : $_smarty_tpl->tpl_vars['tabs_count']->value);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "block_content", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['block_scheme']->value['content']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/block_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content_type'=>$_smarty_tpl->tpl_vars['block']->value['properties']['content_type'],'block_scheme'=>$_smarty_tpl->tpl_vars['block_scheme']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value,'editable'=>$_smarty_tpl->tpl_vars['editable_content']->value,'tab_id'=>((string)$_smarty_tpl->tpl_vars['html_id']->value)), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal form-edit cm-skip-check-items <?php if ($_smarty_tpl->tpl_vars['dynamic_object']->value) {?>cm-hide-inputs<?php }?>  <?php if ($_REQUEST['ajax_update']) {?>cm-ajax cm-form-dialog-closer<?php }?>" name="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_update_form">
<div id="block_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_REQUEST['dynamic_object']['object_id'] > 0) {?>
        <input type="hidden" name="dynamic_object[object_id]" value="<?php echo htmlspecialchars((string) $_REQUEST['dynamic_object']['object_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>
        <input type="hidden" name="dynamic_object[object_type]" value="<?php echo htmlspecialchars((string) $_REQUEST['dynamic_object']['object_type'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>
    <?php }?>
    <input type="hidden" id="s_layout" name="s_layout" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="block_data[type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['type'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>
    <input type="hidden" name="block_data[block_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>
    <input type="hidden" name="block_data[content_data][snapping_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snapping_data']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>

    <?php if (!$_smarty_tpl->tpl_vars['block_scheme']->value['multilanguage']) {?>
        <input type="hidden" name="block_data[apply_to_all_langs]" value="Y" class="cm-no-hide-input"/>
    <?php }?>

    <input type="hidden" name="snapping_data[snapping_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snapping_data']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>
    <input type="hidden" name="snapping_data[grid_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snapping_data']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>
    <input type="hidden" name="selected_location" value="<?php echo htmlspecialchars((string) (($tmp = $_REQUEST['selected_location'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input" />
    <?php if ($_REQUEST['assign_to']) {?>
        <input type="hidden" name="assign_to" value="<?php echo htmlspecialchars((string) $_REQUEST['assign_to'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>
    <?php }?>
    <input type="hidden" name="result_ids" value="<?php if ($_REQUEST['r_result_ids']) {
echo htmlspecialchars((string) $_REQUEST['r_result_ids'], ENT_QUOTES, 'UTF-8');?>
,<?php }?>block_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
,block_selection" class="cm-no-hide-input"/>


        <?php if ($_REQUEST['r_url']) {?>
        <input type="hidden" name="r_url" value="<?php echo htmlspecialchars((string) $_REQUEST['r_url'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input"/>
    <?php }?>
    <div class="tabs cm-j-tabs cm-track tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
        <ul class="nav nav-tabs">
            <li id="block_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js <?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "block_general_".((string)$_smarty_tpl->tpl_vars['html_id']->value)) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
            <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'block_content') && smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'block_content'))) {?><li id="block_contents_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "block_contents_".((string)$_smarty_tpl->tpl_vars['html_id']->value)) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("content");?>
</a></li><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['block_scheme']->value['settings']) {?>
                <li id="block_settings_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "block_settings_".((string)$_smarty_tpl->tpl_vars['html_id']->value)) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("block_settings");?>
</a></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value && !$_smarty_tpl->tpl_vars['hide_status']->value) {?>
                <li id="block_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "block_status_".((string)$_smarty_tpl->tpl_vars['html_id']->value)) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("status");?>
</a></li>
            <?php }?>
        </ul>
    </div>

    <div class="cm-tabs-content" id="tabs_content_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="content_block_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="control-group <?php if ($_smarty_tpl->tpl_vars['editable_template_name']->value) {?>cm-no-hide-input<?php }?>">
                <label for="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
                <div class="controls">
                <?php if ($_REQUEST['html_id'] && $_smarty_tpl->tpl_vars['id']->value > 0) {?>
                    <div class="text-type-value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
                <?php } else { ?>
                    <input type="text" name="block_data[description][name]" id="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_name" class="span9" size="25" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['block_scheme']->value['templates']) {?>
                <div class="control-group <?php if ($_smarty_tpl->tpl_vars['editable_template_name']->value) {?>cm-no-hide-input<?php }?>">
                    <label class="control-label" for="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_template"><?php echo $_smarty_tpl->__("template");?>
</label>
                    <div class="controls">
                    <?php if (is_array($_smarty_tpl->tpl_vars['block_scheme']->value['templates'])) {?>
                        <select id="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_template" name="block_data[properties][template]"  class="cm-reload-form">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_scheme']->value['templates'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['template'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php if ($_smarty_tpl->tpl_vars['v']->value['name']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');
}?></option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['dynamic_object']->value) {?>
                        <input type="hidden" name="block_data[properties][template]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['template'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input" />
                    <?php }?>
                    <?php if (is_array($_smarty_tpl->tpl_vars['block_scheme']->value['templates'][$_smarty_tpl->tpl_vars['block']->value['properties']['template']]['settings'])) {?>
                        <a href="#" id="sw_case_settings_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="open cm-combination" onclick="return false">
                            <?php echo $_smarty_tpl->__("settings");?>

                            <span class="combo-arrow"></span>
                        </a>
                    <?php }?>
                    </div>
                </div>
            <?php }?>

            <?php if (is_array($_smarty_tpl->tpl_vars['block_scheme']->value['templates'][$_smarty_tpl->tpl_vars['block']->value['properties']['template']]['settings'])) {?>
                <div id="case_settings_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_scheme']->value['templates'][$_smarty_tpl->tpl_vars['block']->value['properties']['template']]['settings'], 'setting_data', false, 'name');
$_smarty_tpl->tpl_vars['setting_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['setting_data']->value) {
$_smarty_tpl->tpl_vars['setting_data']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/setting_element.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>$_smarty_tpl->tpl_vars['setting_data']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value,'html_id'=>"block_".((string)$_smarty_tpl->tpl_vars['html_id']->value)."_properties_".((string)$_smarty_tpl->tpl_vars['name']->value),'html_name'=>"block_data[properties][".((string)$_smarty_tpl->tpl_vars['name']->value)."]",'editable'=>$_smarty_tpl->tpl_vars['editable_template_name']->value,'value'=>$_smarty_tpl->tpl_vars['block']->value['properties'][$_smarty_tpl->tpl_vars['name']->value]), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['editable_wrapper']->value) {?>
                <div class="control-group">
                    <label class="control-label" for="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_wrapper"><?php echo $_smarty_tpl->__("wrapper");?>
</label>
                    <div class="controls">
                    <select name="snapping_data[wrapper]" id="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_wrapper">
                        <option value="">--</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_scheme']->value['wrappers'], 'w', false, 'k');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['block']->value['wrapper'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['w']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_user_class"><?php echo $_smarty_tpl->__("user_class");?>
</label>
                    <div class="controls">
                    <input type="text" name="snapping_data[user_class]" id="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_user_class" size="25" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label cm-required cm-multiple-checkboxes"
                           for="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_availability"
                    ><?php echo $_smarty_tpl->__("block_manager.availability.show_on");?>
</label>
                    <div class="controls" id="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_availability">
                        <div class="btn-group btn-group-checkbox">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['availability'], 'is_available', false, 'device');
$_smarty_tpl->tpl_vars['is_available']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device']->value => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->do_else = false;
?>

                                <?php if ($_smarty_tpl->tpl_vars['device']->value == "phone") {?>
                                    <?php $_smarty_tpl->_assignInScope('devices_icon', "icon-mobile-phone");?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['device']->value == "tablet") {?>
                                    <?php $_smarty_tpl->_assignInScope('devices_icon', "icon-tablet");?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['device']->value == "desktop") {?>
                                    <?php $_smarty_tpl->_assignInScope('devices_icon', "icon-desktop");?>
                                <?php }?>

                                <input type="checkbox"
                                    id="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_show_on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    class="cm-text-toggle btn-group-checkbox__checkbox"
                                    <?php if ($_smarty_tpl->tpl_vars['is_available']->value) {?>checked="checked"<?php }?>
                                    data-ca-toggle-text="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_availability_instance']->value->getHiddenClass($_smarty_tpl->tpl_vars['device']->value), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-toggle-text-mode="onDisable"
                                    data-ca-toggle-text-target-elem-id="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_user_class"
                                />
                                <label class="btn btn-group-checkbox__label" for="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_show_on_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['devices_icon']->value),$_smarty_tpl);?>

                                    <?php echo $_smarty_tpl->__("block_manager.availability.".((string)$_smarty_tpl->tpl_vars['device']->value));?>

                                </label>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            <?php }?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_manager:settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_manager:settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_manager:settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'block_content')) {?>
            <div id="content_block_contents_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" >
                <?php if ($_smarty_tpl->tpl_vars['dynamic_object']->value['object_id'] > 0) {?>
                    <input type="hidden" name="block_data[content_data][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input" />
                    <input type="hidden" name="block_data[content_data][object_type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input" />
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['object_id'] > 0) {?>
                    <div class="text-tip">
                        <?php $_smarty_tpl->_assignInScope('url', fn_url(((string)$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch'])."&".((string)$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['key'])."=".((string)$_smarty_tpl->tpl_vars['dynamic_object']->value['object_id']),'C','http',(defined('DESCR_SL') ? constant('DESCR_SL') : null)));?>
                        <?php echo $_smarty_tpl->__("dynamic_content",array("[url]"=>$_smarty_tpl->tpl_vars['url']->value));?>

                    </div>
                <?php }?>

                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'block_content');?>


                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "content_stat", null, null);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['changed_content_stat']->value, 'stat');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
if ($_smarty_tpl->tpl_vars['stat']->value['object_type'] != '') {?><div><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"show_objects_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['stat']->value['object_type']),'text'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['stat']->value['object_type']),'link_text'=>((string)$_smarty_tpl->tpl_vars['stat']->value['contents_count']),'act'=>"link",'href'=>"block_manager.show_objects?object_type=".((string)$_smarty_tpl->tpl_vars['stat']->value['object_type'])."&block_id=".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'opener_ajax_class'=>"cm-ajax",'link_class'=>"cm-ajax-force",'content'=>''), 0, true);
?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stat']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
</div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content_stat')) {?>
                <div class="control-group">
                    <label class="control-label" for="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_override_by_this"><?php echo $_smarty_tpl->__("override_by_this");?>
</label>
                    <div class="controls">
                        <input type="hidden" class="cm-no-hide-input" name="block_data[content_data][override_by_this]" value="N" />
                        <input id="block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_override_by_this" type="checkbox" class="cm-no-hide-input" name="block_data[content_data][override_by_this]" value="Y" />
                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_block_manager_update_block_override_by_this");?>
</p>
                    </div>
                </div>
                <div class="statistics-box">
                    <div class="statistics-body">
                        <p class="strong"><?php echo $_smarty_tpl->__("content_changed_for");?>
</p>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content_stat');?>

                    </div>
                </div>
                <?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['block_scheme']->value['settings']) {?>
            <div id="content_block_settings_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_scheme']->value['settings'], 'setting_data', false, 'name');
$_smarty_tpl->tpl_vars['setting_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['setting_data']->value) {
$_smarty_tpl->tpl_vars['setting_data']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/setting_element.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>$_smarty_tpl->tpl_vars['setting_data']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value,'html_id'=>"block_".((string)$_smarty_tpl->tpl_vars['html_id']->value)."_properties_".((string)$_smarty_tpl->tpl_vars['name']->value),'html_name'=>"block_data[properties][".((string)$_smarty_tpl->tpl_vars['name']->value)."]",'editable'=>$_smarty_tpl->tpl_vars['editable_template_name']->value,'value'=>$_smarty_tpl->tpl_vars['block']->value['properties'][$_smarty_tpl->tpl_vars['name']->value]), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value && !$_smarty_tpl->tpl_vars['hide_status']->value) {?>
        <div id="content_block_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" >
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("global_status");?>
:</label>
                <div class="controls">
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['block']->value['status'] == 'A') {
echo $_smarty_tpl->__("active");
} else {
echo $_smarty_tpl->__("disabled");
}?>
                    </p>
                </div>
            </div>
            <input type="hidden" class="cm-no-hide-input" name="snapping_data[object_type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
" />
            <div class="control-group cm-no-hide-input">
                <label class="control-label"><?php if ($_smarty_tpl->tpl_vars['block']->value['status'] == 'A') {
echo $_smarty_tpl->__("disable_for");
} else {
echo $_smarty_tpl->__("enable_for");
}?></label>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "picker_extra_url", null, null);?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_manager:update_block_picker_extra_url"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_manager:update_block_picker_extra_url"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'UTF-8');?>

                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_manager:update_block_picker_extra_url"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['dynamic_object_scheme']) ? $_smarty_tpl->tpl_vars['dynamic_object_scheme']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['picker_params']['extra_url'] = $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'picker_extra_url') && smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'picker_extra_url'));
$_smarty_tpl->_assignInScope('dynamic_object_scheme', $_tmp_array);?>
                <div class="controls">
                <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker'],'data_id'=>"block_".((string)$_smarty_tpl->tpl_vars['html_id']->value)."_object_ids_d",'input_name'=>"snapping_data[object_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['block']->value['object_ids'],'view_mode'=>"links",'params_array'=>$_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params'],'start_pos'=>$_smarty_tpl->tpl_vars['start_position']->value),$_smarty_tpl);?>

                </div>
            </div>
        </div>
        <?php }?>
    </div>
    <!--block_properties_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <div class="buttons-container">
        <?php if ($_REQUEST['force_close']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[block_manager.update_block]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[block_manager.update_block]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
        <?php }?>
    </div>
    <?php if (fn_allowed_for("ULTIMATE")) {?>
        <input type="hidden" name="switch_company_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['runtime']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input" />
    <?php }?>
    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <input type="hidden" name="s_storefront" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id, ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input" />
    <?php }?>
    <input type="hidden" name="descr_sl" value="<?php echo htmlspecialchars((string) (defined('DESCR_SL') ? constant('DESCR_SL') : null), ENT_QUOTES, 'UTF-8');?>
" class="cm-no-hide-input" />
</form>
<?php }
}
