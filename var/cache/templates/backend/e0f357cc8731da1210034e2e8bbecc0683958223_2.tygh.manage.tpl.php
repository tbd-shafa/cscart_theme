<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:39
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/views/product_variations/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406763908181_83638355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0f357cc8731da1210034e2e8bbecc0683958223' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/views/product_variations/manage.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/group_code.tpl' => 1,
    'tygh:addons/product_variations/views/product_variations/components/link_to_group.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/check_items.tpl' => 1,
    'tygh:addons/product_variations/views/product_variations/components/product_item.tpl' => 2,
    'tygh:common/context_menu_wrapper.tpl' => 1,
  ),
),false)) {
function content_67406763908181_83638355 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.manage','product_variations.edit_features','product_variations.delete','actions','product_variations.add_variations','product_variations.add_variations','warning','product_variations.warning.before_edit_variations_save_product','name','sku','price','quantity','product_variations.add_variations_description'));
$_smarty_tpl->_assignInScope('is_form_readonly', ($_smarty_tpl->tpl_vars['product']->value['product_id'] && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && (fn_allowed_for("MULTIVENDOR") || $_smarty_tpl->tpl_vars['product']->value['shared_product'] == "Y") && $_smarty_tpl->tpl_vars['product']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id']));?>

<?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>
    <?php $_smarty_tpl->_assignInScope('hide_inputs_if_shared_product', "cm-hide-inputs");?>
    <?php $_smarty_tpl->_assignInScope('no_hide_input_if_shared_product', "cm-no-hide-input");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('hide_inputs_if_shared_product', '');?>
    <?php $_smarty_tpl->_assignInScope('no_hide_input_if_shared_product', '');
}?>

<?php $_smarty_tpl->_assignInScope('redirect_url', "products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&selected_section=variations");?>

<div id="content_variations">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_variation_products_form" data-ca-main-content-selector="[data-ca-main-content]" class="js-manage-variation-products-form" id="manage_variation_products_form">
        <input type="hidden" value="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['redirect_url']->value), ENT_QUOTES, 'UTF-8');?>
" name="redirect_url" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="from_product_id">

        <div class="product-variations__toolbar">
            <div class="product-variations__toolbar-left">
                <?php if ($_smarty_tpl->tpl_vars['group']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/group_code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('group'=>$_smarty_tpl->tpl_vars['group']->value), 0, false);
?>
                <?php } elseif (!$_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/link_to_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
            </div>
            <div class="product-variations__toolbar-right cm-hide-with-inputs">
                <?php if ($_smarty_tpl->tpl_vars['group']->value) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <?php if ($_smarty_tpl->tpl_vars['group']->value) {?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'id'=>"manage_variations",'text'=>$_smarty_tpl->__("product_variations.manage"),'href'=>"products.manage?variation_group_id=".((string)$_smarty_tpl->tpl_vars['group']->value->getId())."&is_search=Y"), true);?>
</li>
                            <li><?php ob_start();
echo htmlspecialchars((string) http_build_query(array("feature_id"=>array_keys($_smarty_tpl->tpl_vars['selected_features']->value))), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'id'=>"edit_variations_features",'text'=>$_smarty_tpl->__("product_variations.edit_features"),'href'=>"product_features.manage?".$_prefixVariable1), true);?>
</li>

                            <?php if (!$_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'id'=>"delete_variations",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("product_variations.delete"),'href'=>"product_variations.delete?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value),'method'=>"POST"), true);?>
</li>
                            <?php }?>
                        <?php }?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'icon'=>" ",'text'=>$_smarty_tpl->__("actions")), true);?>

                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"update_product_group",'text'=>$_smarty_tpl->__("product_variations.add_variations"),'href'=>"product_variations.create_variations?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value),'link_text'=>$_smarty_tpl->__("product_variations.add_variations"),'link_class'=>"cm-dialog-destroy-on-close",'act'=>"general",'icon'=>"icon-plus",'meta'=>"shift-left"), 0, false);
?>
                <?php }?>
            </div>
        </div>

        <div class="product-variations__notification hidden" data-ca-product-variations="beforeEditNotification">
            <div class="alert alert-warning">
                <strong><?php echo $_smarty_tpl->__("warning");?>
</strong>
                <?php echo $_smarty_tpl->__("product_variations.warning.before_edit_variations_save_product");?>

            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <?php ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('context_menu_id', "context_menu_".$_prefixVariable2);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "manage_variation_products_table", null, null);?>
                <div class="product-variations__container table-responsive-wrapper longtap-selection">
                    <table width="100%" class="table table-middle table--relative table-responsive product-variations__table" data-ca-main-content>
                        <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                        >
                        <tr>
                            <th width="1%">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"cm-no-hide-input",'check_statuses'=>fn_get_default_status_filters('',true),'elms_container'=>"#".((string)$_smarty_tpl->tpl_vars['context_menu_id']->value)), 0, false);
?>

                                <input type="checkbox"
                                       class="bulkedit-toggler hide"
                                       data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                       data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                />
                            </th>
                            <th width="40">&nbsp;</th>
                            <th width="70" class="product-variations__th-img">&nbsp;</th>
                            <th width="30%" class="nowrap"><span><?php echo $_smarty_tpl->__("name");?>
</span></th>
                            <th width="15%" class="nowrap"><?php echo $_smarty_tpl->__("sku");?>
</th>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                                <th><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>
</span></th>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <th width="10%" class="nowrap"><?php echo $_smarty_tpl->__("price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</th>
                            <th width="10%" class="nowrap"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                            <th width="60" class="mobile-hide">&nbsp;</th>
                            <th width="9%" class="right"></th>
                        </tr>
                        </thead>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->first = !$_smarty_tpl->tpl_vars['product']->index;
$__foreach_product_1_saved = $_smarty_tpl->tpl_vars['product'];
?>
                            <?php if (!$_smarty_tpl->tpl_vars['product']->value['parent_product_id']) {?>
                                <?php if (!$_smarty_tpl->tpl_vars['product']->first) {?>
                                    </tbody>
                                <?php }?>

                                <tbody>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/product_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                </tbody>
                                <tbody data-ca-switch-id="product_variations_group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php } else { ?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/product_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>

                <div class="hidden">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                        <select class="js-product-variation-feature" data-ca-feature-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['context_menu_id']->value,'form'=>"manage_variation_products_form",'object'=>"product_variations",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'manage_variation_products_table')), 0, false);
?>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("product_variations.add_variations_description");?>
</p>
        <?php }?>
    </form>
<!--content_variations--></div>
<?php }
}
