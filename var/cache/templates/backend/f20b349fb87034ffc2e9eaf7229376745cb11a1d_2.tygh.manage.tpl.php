<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/attachments/views/attachments/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406761381a99_05698893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f20b349fb87034ffc2e9eaf7229376745cb11a1d' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/attachments/views/attachments/manage.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/attachments/views/components/add_new_attachments_files.tpl' => 1,
    'tygh:addons/attachments/views/attachments/update.tpl' => 1,
    'tygh:common/object_group.tpl' => 1,
  ),
),false)) {
function content_67406761381a99_05698893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('view','editing_attachment','no_data'));
if (fn_allowed_for("ULTIMATE")) {?>
    <?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product_data']->value['shared_product'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product_data']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
        <?php $_smarty_tpl->_assignInScope('hide_for_vendor', true);?>
        <?php $_smarty_tpl->_assignInScope('skip_delete', true);?>
        <?php $_smarty_tpl->_assignInScope('hide_inputs', "cm-hide-inputs");?>
        <?php $_smarty_tpl->_assignInScope('edit_link_text', $_smarty_tpl->__("view"));?>
    <?php }
}?>

<?php $_smarty_tpl->_assignInScope('redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->_assignInScope('hide_add_new_attachments', (($tmp = $_smarty_tpl->tpl_vars['hide_add_new_attachments']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<div class="items-container cm-sortable" data-ca-sortable-table="attachments" data-ca-sortable-id-name="attachment_id" id="attachments_list">

<?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value && !$_smarty_tpl->tpl_vars['hide_add_new_attachments']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/attachments/views/components/add_new_attachments_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attachment'=>array(),'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['attachments']->value) {?>
<div class="table-responsive-wrapper">
    <table class="table table-middle table--relative table-objects table-responsive table-responsive-w-titles">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attachments']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "object_group", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/attachments/views/attachments/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attachment'=>$_smarty_tpl->tpl_vars['a']->value,'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value,'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, true);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php ob_start();
echo $_smarty_tpl->__("editing_attachment");
$_prefixVariable18=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'object_group'),'id'=>$_smarty_tpl->tpl_vars['a']->value['attachment_id'],'text'=>$_smarty_tpl->tpl_vars['a']->value['description'],'status'=>$_smarty_tpl->tpl_vars['a']->value['status'],'object_id_name'=>"attachment_id",'table'=>"attachments",'href_delete'=>"attachments.delete?attachment_id=".((string)$_smarty_tpl->tpl_vars['a']->value['attachment_id'])."&object_id=".((string)$_smarty_tpl->tpl_vars['object_id']->value)."&object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['redirect_url']->value),'delete_target_id'=>"attachments_list",'header_text'=>$_prefixVariable18.": ".((string)$_smarty_tpl->tpl_vars['a']->value['description']),'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['a']->value['attachment_id']),'id_prefix'=>"_attachments_",'prefix'=>"attachments",'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value,'skip_delete'=>$_smarty_tpl->tpl_vars['skip_delete']->value,'no_table'=>"true",'link_text'=>$_smarty_tpl->tpl_vars['edit_link_text']->value,'draggable'=>true), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<!--attachments_list--></div><?php }
}
