<?php
/* Smarty version 4.3.0, created on 2024-11-20 05:21:11
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/components/context_menu/products/product_approval.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673de2476e3f81_00746836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac39a90c26674a2dbe83145ce0896eadc864ade4' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/components/context_menu/products/product_approval.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_data_premoderation/components/disapproval_popup.tpl' => 1,
  ),
),false)) {
function content_673de2476e3f81_00746836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_approval','approve_selected','disapprove_selected','vendor_data_premoderation.disapprove_products'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:bulk_edit_items_product_approval"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:bulk_edit_items_product_approval"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <li class="btn bulk-edit__btn bulk-edit__btn--actions dropleft-mod">
        <span class="bulk-edit__btn-content dropdown-toggle"
              data-toggle="dropdown"
        >
            <?php echo $_smarty_tpl->__("product_approval");?>

            <span class="caret mobile-hide"></span>
        </span>

        <ul class="dropdown-menu">
            <li>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("approve_selected"),'dispatch'=>"dispatch[premoderation.m_approve]",'form'=>"manage_products_form"), true);?>

            </li>

            <li>
                <a data-ca-target-id="disapproval_reason_0"
                   class="cm-dialog-opener cm-dialog-auto-size"
                >
                    <?php echo $_smarty_tpl->__("disapprove_selected");?>

                </a>
            </li>
        </ul>
    </li>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_data_premoderation/components/disapproval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>0,'title'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_products")), 0, false);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:bulk_edit_items_product_approval"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
