<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:39
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/tabs/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406763383c84_59588959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '987b56037c3d42b4a720ab2b8a8be825b803d75c' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/tabs/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
    'tygh:common/object_group.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_67406763383c84_59588959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('block_settings','block_settings','block','no_data','new_tab','add_tab','add_tab','product_tabs'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
if (fn_check_view_permissions("tabs.update")) {?>
    <?php $_smarty_tpl->_assignInScope('non_editable', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('non_editable', true);
}
$_smarty_tpl->_assignInScope('draggable', !$_smarty_tpl->tpl_vars['non_editable']->value);?>
<div class="items-container <?php if ($_smarty_tpl->tpl_vars['draggable']->value) {?>cm-sortable<?php }?>" data-ca-sortable-table="product_tabs" data-ca-sortable-id-name="tab_id"  id="manage_tabs_list">

    <div class="table-responsive-wrapper">
        <table width="100%" class="table table-middle table--relative table-objects table-responsive table-responsive-w-titles">
            <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['tab']->value['is_primary'] === smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['dynamic_object']->value || $_smarty_tpl->tpl_vars['non_editable']->value) {?>
                <?php $_smarty_tpl->_assignInScope('_href_delete', '');?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('_href_delete', "tabs.delete?tab_id=".((string)$_smarty_tpl->tpl_vars['tab']->value['tab_id']));?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['dynamic_object']->value) {?>
                <?php $_smarty_tpl->_assignInScope('dynamic_object_href', "&dynamic_object[object_type]=".((string)$_smarty_tpl->tpl_vars['dynamic_object']->value['object_type'])."&dynamic_object[object_id]=".((string)$_smarty_tpl->tpl_vars['dynamic_object']->value['object_id'])."&selected_location=".((string)$_smarty_tpl->tpl_vars['location']->value['location_id'])."&hide_status=1");?>
                <?php $_smarty_tpl->_assignInScope('r_url', urlencode("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['dynamic_object']->value['object_id'])."&selected_section=product_tabs"));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('dynamic_object_href', '');?>
                <?php $_smarty_tpl->_assignInScope('r_url', "tabs.manage");?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('additional_class', $_smarty_tpl->tpl_vars['draggable']->value ? "cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['tab']->value['tab_id']) : '');?>
            <?php $_smarty_tpl->_assignInScope('_href_update', "tabs.update?tab_data[tab_id]=".((string)$_smarty_tpl->tpl_vars['tab']->value['tab_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value));?>

            <?php if ($_smarty_tpl->tpl_vars['tab']->value['product_ids']) {?>
                <?php $_smarty_tpl->_assignInScope('confirm', true);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('confirm', '');?>
            <?php }?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tool_items", null, null);
if ($_smarty_tpl->tpl_vars['tab']->value['tab_type'] == "B") {?><span class="small-note lowercase">(<?php if ($_smarty_tpl->tpl_vars['tab']->value['block_id'] && $_smarty_tpl->tpl_vars['dynamic_object']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"edit_block_properties_".((string)$_smarty_tpl->tpl_vars['tab']->value['block_id'])."_tab_".((string)$_smarty_tpl->tpl_vars['tab']->value['tab_id']),'text'=>$_smarty_tpl->__("block_settings"),'link_text'=>$_smarty_tpl->__("block_settings"),'act'=>"link",'href'=>"block_manager.update_block?block_data[block_id]=".((string)$_smarty_tpl->tpl_vars['tab']->value['block_id'])."&r_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value)."&html_id=tab_".((string)$_smarty_tpl->tpl_vars['tab']->value['tab_id']).((string)$_smarty_tpl->tpl_vars['dynamic_object_href']->value),'action'=>"block_manager.update_block",'opener_ajax_class'=>"cm-ajax",'link_class'=>"cm-ajax-force",'content'=>''), 0, true);
} else {
echo $_smarty_tpl->__("block");
}?>)</span>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['tab']->value['tab_id'],'text'=>$_smarty_tpl->tpl_vars['tab']->value['name'],'href'=>$_smarty_tpl->tpl_vars['_href_update']->value,'href_delete'=>$_smarty_tpl->tpl_vars['_href_delete']->value,'delete_target_id'=>"pagination_contents",'header_text'=>$_smarty_tpl->tpl_vars['tab']->value['name'],'table'=>"product_tabs",'object_id_name'=>"tab_id",'draggable'=>$_smarty_tpl->tpl_vars['draggable']->value,'update_controller'=>'tabs','dynamic_object'=>$_smarty_tpl->tpl_vars['dynamic_object_href']->value,'status'=>$_smarty_tpl->tpl_vars['tab']->value['status'],'additional_class'=>$_smarty_tpl->tpl_vars['additional_class']->value,'href_desc'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tool_items'),'non_editable'=>$_smarty_tpl->tpl_vars['non_editable']->value,'no_table'=>true,'can_change_status'=>true), 0, true);
?>
        <?php
}
if ($_smarty_tpl->tpl_vars['tab']->do_else) {
?>

            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
<!--manage_tabs_list--></div>

<div class="buttons-container">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "extra_tools", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"currencies:import_rates"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"currencies:import_rates"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"currencies:import_rates"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
</div>

<?php if (!$_smarty_tpl->tpl_vars['dynamic_object']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('act'=>"general",'id'=>"add_tab",'text'=>$_smarty_tpl->__("new_tab"),'title'=>$_smarty_tpl->__("add_tab"),'link_text'=>$_smarty_tpl->__("add_tab"),'icon'=>"icon-plus",'href'=>"tabs.update",'action'=>"tabs.update",'opener_ajax_class'=>"cm-ajax",'link_class'=>"btn-primary cm-ajax-force nav__actions-btn-primary",'content'=>''), 0, true);
?>
        <?php }?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (!$_smarty_tpl->tpl_vars['dynamic_object']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("product_tabs"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>true), 0, false);
} else { ?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox');?>

<?php }?>

<?php }
}
