<?php
/* Smarty version 4.3.0, created on 2024-11-13 02:52:40
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/object_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673484f8b7f056_19792017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb1de5c273eba159d8f4cb59b39351124a37dd9f' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/object_group.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
  ),
),false)) {
function content_673484f8b7f056_19792017 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('view','edit','delete'));
$_smarty_tpl->_assignInScope('is_responsive_table_without_title', (($tmp = $_smarty_tpl->tpl_vars['is_responsive_table_without_title']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if (!$_smarty_tpl->tpl_vars['no_table']->value) {?>
<div class="<?php if ($_smarty_tpl->tpl_vars['is_responsive_table']->value) {?>table-responsive-wrapper<?php } else { ?>table-wrapper<?php }?>">
    <table width="100%" class="table table-middle table--relative table-objects <?php if ($_smarty_tpl->tpl_vars['is_responsive_table']->value) {?>table-responsive <?php if ($_smarty_tpl->tpl_vars['is_responsive_table_without_title']->value) {?>table-responsive-w-titles<?php }
}?> <?php if ($_smarty_tpl->tpl_vars['table_striped']->value) {?> table-striped<?php }?>">
        <tbody>
    <?php }?>
        <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower((($tmp = $_smarty_tpl->tpl_vars['status']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-row-item <?php if ($_smarty_tpl->tpl_vars['bulkedit_disabled_notice']->value) {?>longtap-selection-disable<?php }?>"
                <?php if ($_smarty_tpl->tpl_vars['row_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                data-ct-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['is_bulkedit_menu']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['bulkedit_menu_category_ids']->value) {?>
                        data-ca-category-ids="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bulkedit_menu_category_ids']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['bulkedit_disabled_notice']->value) {?>
                        data-ca-bulkedit-disabled-notice="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bulkedit_disabled_notice']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                <?php }?>
            >
            <?php if ($_smarty_tpl->tpl_vars['checkbox_name']->value && $_smarty_tpl->tpl_vars['show_checkboxes']->value) {?>
                <td 
                    <?php if ($_smarty_tpl->tpl_vars['checkbox_col_width']->value) {?> width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkbox_col_width']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                    data-th="&nbsp;"
                    class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkbox_col_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                >
                    <input type="checkbox" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['checkbox_value']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['checked']->value) {?> checked="checked"<?php }?> class="cm-item<?php if ($_smarty_tpl->tpl_vars['hidden_checkbox']->value) {?> hidden<?php }?> cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
                </td>
            <?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['no_padding']->value) {?>
                <td width="1%" class="no-padding-td" data-th="&nbsp;">
                    <?php if ($_smarty_tpl->tpl_vars['draggable']->value) {?>
                        <span class="handler cm-sortable-handle"></span>
                    <?php }?>
                </td>
                <?php }?>

                <td width="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['href_col_width']->value ?? null)===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['href_desc']->value ? "77%" : "28%") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['href_desc_row_hint']->value) {?>data-th="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href_desc_row_hint']->value, ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>data-th="&nbsp;"<?php }?>>
                    <div class="object-group-link-wrap">
                    <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                        <a <?php if ($_smarty_tpl->tpl_vars['no_popup']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
" class="row-status link--monochrome <?php if (!$_smarty_tpl->tpl_vars['main_link']->value) {?>cm-external-click<?php }
if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> no-underline<?php }
if ($_smarty_tpl->tpl_vars['main_link']->value) {?> link<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_meta']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['is_promo']->value) {?>cm-promo-popup<?php }?> <?php if ($_smarty_tpl->tpl_vars['text_wrap']->value) {?>row-status--text-wrap<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['non_editable']->value && !$_smarty_tpl->tpl_vars['not_clickable']->value) {?> data-ca-external-click-id="opener_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['main_link']->value) {?> <?php if (!$_smarty_tpl->tpl_vars['is_promo']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['main_link']->value), ENT_QUOTES, 'UTF-8');
}?>"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php } else { ?>
                        <span class="unedited-element block <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_meta']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("view") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_id']->value) {?>
                        <span class="muted"><small> #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
</small></span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['href_desc']->value) {?><small><?php echo $_smarty_tpl->tpl_vars['href_desc']->value;?>
</small><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['storefront_name']->value) {?><div><small><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_name']->value, ENT_QUOTES, 'UTF-8');?>
</small></div><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['company_object']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['company_object']->value), 0, false);
?>
                    <?php }?>
                    </div>
                </td>
                <td width="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['details_col_width']->value ?? null)===null||$tmp==='' ? ($_smarty_tpl->tpl_vars['href_desc']->value ? "0%" : "50%") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" data-th="&nbsp;">
                    <span class="row-status object-group-details"><?php echo $_smarty_tpl->tpl_vars['details']->value;?>
</span>
                </td>

                <?php if ($_smarty_tpl->tpl_vars['extra_data']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['extra_data']->value;?>

                <?php }?>

                <td width="10%" class="right nowrap" data-th="&nbsp;">

                    <div class="pull-right hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "items_tools", null, null);?>
                        <?php if ($_smarty_tpl->tpl_vars['tool_items']->value) {?>
                            <?php echo $_smarty_tpl->tpl_vars['tool_items']->value;?>

                        <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value || $_smarty_tpl->tpl_vars['is_view_link']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['no_popup']->value) {?>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>(($tmp = $_smarty_tpl->tpl_vars['link_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("edit") ?? null : $tmp),'href'=>$_smarty_tpl->tpl_vars['href']->value), true);?>
</li>
                                <?php } else { ?>
                                   <li><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['id_prefix']->value).((string)$_smarty_tpl->tpl_vars['id']->value),'edit_onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'text'=>$_smarty_tpl->tpl_vars['header_text']->value,'act'=>(($tmp = $_smarty_tpl->tpl_vars['act']->value ?? null)===null||$tmp==='' ? "edit" ?? null : $tmp),'picker_meta'=>$_smarty_tpl->tpl_vars['picker_meta']->value,'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'is_promo'=>$_smarty_tpl->tpl_vars['is_promo']->value,'no_icon_link'=>true), 0, false);
?></li>
                                <?php }?>
                            <?php }?>

                            <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['href_delete']->value && !$_smarty_tpl->tpl_vars['skip_delete']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['is_promo']->value) {?>
                                        <?php $_smarty_tpl->_assignInScope('class', "cm-promo-popup");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('class', "cm-delete-row");?>
                                        <?php $_smarty_tpl->_assignInScope('href', $_smarty_tpl->tpl_vars['href_delete']->value);?>
                                    <?php }?>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->__("delete"),'href'=>$_smarty_tpl->tpl_vars['href']->value,'class'=>"cm-confirm cm-ajax cm-ajax-force cm-ajax-full-render ".((string)$_smarty_tpl->tpl_vars['class']->value),'data'=>array("data-ca-target-id"=>$_smarty_tpl->tpl_vars['delete_target_id']->value,"data-ca-params"=>$_smarty_tpl->tpl_vars['delete_data']->value),'method'=>"POST"), true);?>
</li>
                                <?php }?>
                            <?php }?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'items_tools'),'class'=>"dropleft"), true);?>

                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['links']->value;?>

                </td>
                <?php if (!$_smarty_tpl->tpl_vars['nostatus']->value) {?>
                    <td width="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['last_col_width']->value ?? null)===null||$tmp==='' ? "12%" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['status_row_hint']->value) {?>data-th="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_row_hint']->value, ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>data-th="&nbsp;"<?php }?>>
                        <div class="pull-right nowrap">
                            <?php if ($_smarty_tpl->tpl_vars['non_editable']->value == true || $_smarty_tpl->tpl_vars['is_promo']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('display', "text");?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['can_change_status']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('non_editable', false);?>
                                <?php $_smarty_tpl->_assignInScope('display', '');?>
                            <?php }?>

                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['table']->value,'popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['id']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'hidden'=>$_smarty_tpl->tpl_vars['hidden']->value,'object_id_name'=>$_smarty_tpl->tpl_vars['object_id_name']->value,'table'=>$_smarty_tpl->tpl_vars['table']->value,'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value,'display'=>$_smarty_tpl->tpl_vars['display']->value,'non_editable'=>$_smarty_tpl->tpl_vars['non_editable']->value,'update_controller'=>$_smarty_tpl->tpl_vars['update_controller']->value,'st_result_ids'=>$_smarty_tpl->tpl_vars['st_result_ids']->value), 0, false);
?>
                        </div>
                    </td>
                <?php }?>
            <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row_id']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
    <?php if (!$_smarty_tpl->tpl_vars['no_table']->value) {?>
        </tbody>
    </table>
</div>
<?php }
}
}
