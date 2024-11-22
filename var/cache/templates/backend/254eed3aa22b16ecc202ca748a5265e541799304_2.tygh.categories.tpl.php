<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:20
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/context_menu/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067506fb4a6_69430105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '254eed3aa22b16ecc202ca748a5265e541799304' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/context_menu/categories.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select2/categories_bulkedit.tpl' => 1,
  ),
),false)) {
function content_674067506fb4a6_69430105 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('category','categories','bulk_edit.what_do_these_checkboxes_mean','show','bulk_edit.what_do_these_checkboxes_mean_checked','bulk_edit.what_do_these_checkboxes_mean_unchecked','bulk_edit.what_do_these_checkboxes_mean_indeterminate','reset','apply'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--category dropleft-mod">
    <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--category" data-toggle=".bulk-edit__content--categories"><?php echo $_smarty_tpl->__("category");?>
 <span class="caret mobile-hide"></span></span>

    <div class="bulk-edit--reset-dropdown-menu  bulk-edit__content bulk-edit__content--categories">
        <div class="bulk-edit-inner bulk-edit-inner--categories">
            <div class="bulk-edit-inner__header">
                <span><?php echo $_smarty_tpl->__("categories");?>
</span>
            </div>

            <div class="bulk-edit-inner__body" id="bulk_edit_categories_list">

                <div class="bulk-edit-inner__hint">
                    <p><strong><?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean");?>
 (<a href="#" class="cm-toggle" data-toggle=".bulk-edit-inner--categories .bulk-edit-inner__hint > .bulk-edit--category-hint-wrapper" data-show-text="<?php echo $_smarty_tpl->__('show');?>
" data-hide-text="<?php echo $_smarty_tpl->__('hide');?>
" data-state="show"><?php echo $_smarty_tpl->__("show");?>
</a>)</strong></p>

                    <div class="bulk-edit--category-hint-wrapper hidden">
                        <span><input type="checkbox" class="cm-readonly no-margin" checked="checked" /> <?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean_checked");?>
</span> <br />
                        <span><input type="checkbox" class="cm-readonly no-margin" /> <?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean_unchecked");?>
</span> <br />
                        <span><input type="checkbox" class="cm-readonly no-margin" data-set-indeterminate="true" /> <?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean_indeterminate");?>
</span>

                        <hr>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls" id="bulk_edit_categories_list_content">
                        <?php ob_start();
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['rnd']->value ?? null)===null||$tmp==='' ? uniqid() ?? null : $tmp), ENT_QUOTES, 'UTF-8');
$_prefixVariable12=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/select2/categories_bulkedit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('select2_multiple'=>true,'select2_select_id'=>"product_categories_add_".$_prefixVariable12,'select2_name'=>"product_data[category_ids]",'select2_allow_sorting'=>true,'select2_dropdown_parent'=>"#bulk_edit_categories_list_content",'select2_category_ids'=>$_smarty_tpl->tpl_vars['bulk_edit_ids_flat']->value,'select2_bulk_edit_mode'=>true,'select2_bulk_edit_mode_category_ids'=>$_smarty_tpl->tpl_vars['bulk_edit_ids']->value,'disable_categories'=>true,'select2_wrapper_meta'=>"cm-field-container",'select2_select_meta'=>"input-large"), 0, false);
?>
                    <!--bulk_edit_categories_list_content--></div>
                </div>
            <!--bulk_edit_categories_list--></div>

            <div class="bulk-edit-inner__footer">
                <button class="btn bulk-edit-inner__btn"
                        role="button"
                        data-ca-bulkedit-mod-cat-cancel
                ><?php echo $_smarty_tpl->__("reset");?>
</button>
                <button class="btn btn-primary bulk-edit-inner__btn"
                        role="button"
                        data-ca-bulkedit-mod-object-type="products"
                        data-ca-bulkedit-mod-cat-update
                        data-ca-bulkedit-mod-target-form="[name=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
]"
                        data-ca-bulkedit-mod-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                        data-ca-bulkedit-mod-dispatch="products.m_update_categories"
                ><?php echo $_smarty_tpl->__("apply");?>
</button>
            </div>
        </div>
    </div>

    <div class="bulk-edit--overlay"></div>
</li>
<?php }
}
