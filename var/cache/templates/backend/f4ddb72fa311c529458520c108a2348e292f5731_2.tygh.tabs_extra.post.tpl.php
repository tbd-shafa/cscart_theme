<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_bundles/hooks/products/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406761392524_74414256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4ddb72fa311c529458520c108a2348e292f5731' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_bundles/hooks/products/tabs_extra.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_bundles/views/product_bundles/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/object_group.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
  ),
),false)) {
function content_67406761392524_74414256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.add_new_bundle','product_bundles.add_new_bundle','product_bundles.add_new_bundle','edit','no_data'));
$_smarty_tpl->_assignInScope('hide_controls', !$_smarty_tpl->tpl_vars['product_data']->value['company_id']);?>

<div id="content_product_bundles" class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "product_bundles") {?>hidden<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value && $_smarty_tpl->tpl_vars['is_allowed_to_create_product_bundles']->value) {?>
    <div class="clearfix">
        <div class="pull-right">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
                <div id="add_new_bundle">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/views/product_bundles/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'item'=>array("company_id"=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'])), 0, false);
?>
                </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_bundle",'text'=>$_smarty_tpl->__("product_bundles.add_new_bundle"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'link_text'=>$_smarty_tpl->__("product_bundles.add_new_bundle"),'title'=>$_smarty_tpl->__("product_bundles.add_new_bundle"),'act'=>"general",'icon'=>"icon-plus"), 0, false);
?>
        </div>
    </div><br>
    <?php }?>

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_product_bundle_form" class="form-horizontal form-edit cm-ajax" id="manage_product_bundles_form">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=product_bundles"), ENT_QUOTES, 'UTF-8');?>
" />
        <div id="update_bundles_list">
        <?php if ($_smarty_tpl->tpl_vars['bundles']->value) {?>
            <?php ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable19=ob_get_clean();
$_smarty_tpl->_assignInScope('context_menu_id', "context_menu_".$_prefixVariable19);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_bundles_table", null, null);?>
                <div class="items-container">
                    <div class="table-responsive-wrapper longtap-selection">
                        <table class="table table-middle table--relative table-objects table-responsive">
                            <thead
                                    data-ca-bulkedit-default-object="true"
                                    data-ca-bulkedit-component="defaultObject"
                            >
                            <tr>
                                <th class="left" width="6%">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elms_container'=>"#".((string)$_smarty_tpl->tpl_vars['context_menu_id']->value)), 0, false);
?>

                                    <input type="checkbox"
                                           class="bulkedit-toggler hide"
                                           data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                           data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                </th>
                                <th width="1%"></th>
                                <th width="28%"></th>
                                <th width="50%"></th>
                                <th width="10%"></th>
                                <th width="12%"></th>
                            </tr>
                            </thead>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundles']->value, 'bundle');
$_smarty_tpl->tpl_vars['bundle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->do_else = false;
?>
                                <?php $_smarty_tpl->_assignInScope('link_text', $_smarty_tpl->__("edit"));?>
                                <?php $_smarty_tpl->_assignInScope('return_url', rawurlencode((string)((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])."&selected_section=product_bundles"));?>
                                
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'],'id_prefix'=>"_product_bundle_",'text'=>$_smarty_tpl->tpl_vars['bundle']->value['name'],'status'=>$_smarty_tpl->tpl_vars['bundle']->value['status'],'hidden'=>false,'href'=>"product_bundles.update?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'object_id_name'=>"bundle_id",'table'=>"product_bundles",'href_delete'=>"product_bundles.delete?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'delete_target_id'=>"update_bundles_list",'header_text'=>$_smarty_tpl->tpl_vars['bundle']->value['name'],'skip_delete'=>false,'no_table'=>true,'hide_for_vendor'=>false,'is_bulkedit_menu'=>true,'checkbox_col_width'=>"6%",'checkbox_name'=>"bundle_ids[]",'show_checkboxes'=>true,'hidden_checkbox'=>true), 0, true);
?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </table>
                    </div>
                </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['context_menu_id']->value,'form'=>"manage_product_bundles_form",'object'=>"product_bundles",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_bundles_table')), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_bundles_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_bundles_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_bundles_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
        <!--update_bundles_list--></div>
    </form>
    <!--content_product_bundles--></div><?php }
}
