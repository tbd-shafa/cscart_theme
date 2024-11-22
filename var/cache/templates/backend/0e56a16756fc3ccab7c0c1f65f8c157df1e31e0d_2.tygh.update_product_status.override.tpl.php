<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:36
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406760b75455_65637369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e56a16756fc3ccab7c0c1f65f8c157df1e31e0d' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status.override.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67406760b75455_65637369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('status','vendor_data_premoderation.approve_product_btn','vendor_data_premoderation.disapprove_product_btn','vendor_data_premoderation.disapproval_reason','vendor_data_premoderation.enter_disapproval_reason'));
$_smarty_tpl->_assignInScope('show_premoderation_reason', !$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product_data']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"));?>

<?php if ($_smarty_tpl->tpl_vars['show_premoderation_reason']->value && fn_check_permissions("premoderation","m_approve","admin")) {?>
    <?php $_smarty_tpl->_assignInScope('status', (($tmp = $_smarty_tpl->tpl_vars['obj']->value['status'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('items_status', (($tmp = $_smarty_tpl->tpl_vars['items_status']->value ?? null)===null||$tmp==='' ? (fn_get_product_statuses($_smarty_tpl->tpl_vars['status']->value,$_smarty_tpl->tpl_vars['hidden']->value)) ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('non_editable', (($tmp = $_smarty_tpl->tpl_vars['non_editable_status']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_status_container"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_status_container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div data-ca-product-status-container="true">
            <div class="control-group">
                <label class="control-label cm-required"><?php echo $_smarty_tpl->__("status");?>
:</label>
                <div class="controls">
                    <input
                        type="hidden"
                        name="product_data[status]"
                        class="product__status-switcher"
                        id="elm_product_status_0_<?php echo htmlspecialchars((string) smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');?>
"
                        value=<?php echo htmlspecialchars((string) smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');?>

                        data-ca-product-status-switcher="true"
                        disabled
                    >
                    <div class="btn-group" id="product_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_select">
                        <?php $_smarty_tpl->_assignInScope('current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'id'=>"premoderation_approve",'text'=>$_smarty_tpl->__("vendor_data_premoderation.approve_product_btn"),'href'=>"premoderation.m_approve?product_ids[]=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value),'icon'=>"icon-thumbs-up",'icon_first'=>true,'class'=>"btn",'method'=>"POST"), true);?>

                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'id'=>"premoderation_disapprove",'text'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_product_btn"),'icon'=>"icon-thumbs-down",'icon_first'=>true,'class'=>"btn",'data'=>array("data-ca-premoderation-disapprove"=>"true")), true);?>

                    </div>
                </div>
            </div>

            <div
                class="control-group <?php if (!$_smarty_tpl->tpl_vars['show_premoderation_reason']->value || !$_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason']) {?>hidden<?php }?>"
                data-ca-product-disapproval-reason-section="false">
                <label for="elm_disapproval_reason"
                    class="control-label"
                >
                    <?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproval_reason");?>
:
                </label>
                <div class="controls">
                    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['show_premoderation_reason']->value && fn_check_permissions("premoderation","m_approve","admin")) {?>
                        <textarea class="input-large 
                            <?php if ($_smarty_tpl->tpl_vars['show_premoderation_reason']->value) {?>hidden<?php }?>"
                            rows="5"
                            name="product_data[premoderation_reason]"
                            placeholder="<?php echo $_smarty_tpl->__("vendor_data_premoderation.enter_disapproval_reason");?>
"
                            disabled="disabled"
                            data-ca-product-disapproval-reason="true"
                        ></textarea>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_premoderation_reason']->value) {?>
                        <p data-ca-product-disapproval-reason-text="true"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason'], ENT_QUOTES, 'UTF-8');?>
</p>
                    <?php }?>
                </div>
            </div>
        </div>

    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_status_container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
