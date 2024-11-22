<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/products_update_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067611934e2_37485842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e687817bc900c783507dde658c2a952537ce9146' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/products_update_features.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:views/products/components/product_assign_features.tpl' => 1,
  ),
),false)) {
function content_674067611934e2_37485842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_feature','no_items'));
?>
<div class="products__features <?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "features") {?>hidden<?php }?> <?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?>cm-hide-inputs<?php }?>" id="content_features">
    <?php echo smarty_function_script(array('src'=>"js/tygh/backend/products/products_update_features.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_assignInScope('allow_add_feature', (($tmp = $_smarty_tpl->tpl_vars['allow_save_feature']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <?php if (fn_check_permissions("products","update_feature","admin","POST") && fn_check_permissions("product_features","quick_add","admin","POST")) {?>
        <div class="control-toolbar cm-toggle-button">
            <div class="control-toolbar__btns">
                <div class="control-toolbar__btns-right">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'id'=>"add_feature_".((string)$_smarty_tpl->tpl_vars['id']->value),'text'=>$_smarty_tpl->__("add_feature"),'icon_first'=>true,'icon'=>"icon-plus",'class'=>"btn cm-inline-dialog-opener cm-hide-with-inputs",'data'=>array("data-ca-inline-dialog-container"=>"product_features_quick_add_feature")), true);?>

                </div>
            </div>
            <div class="control-toolbar__panel">
                <div id="product_features_quick_add_feature"
                     data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                     data-ca-target-id="products_update_features_content"
                     data-ca-return-url="<?php echo htmlspecialchars((string) rawurlencode((string)fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page']))), ENT_QUOTES, 'UTF-8');?>
"
                     data-ca-inline-dialog-action-context="products_update_features"
                     data-ca-inline-dialog-url="<?php ob_start();
echo htmlspecialchars((string) http_build_query(array("category_ids"=>array_values((($tmp = $_smarty_tpl->tpl_vars['product_data']->value['category_ids'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp)))), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
echo htmlspecialchars((string) fn_url("product_features.quick_add?category_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['main_category'])."&".$_prefixVariable4), ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>
        </div>
    <?php }?>
    <div id="products_update_features_content">
        <?php if ($_smarty_tpl->tpl_vars['product_features']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('search'=>$_smarty_tpl->tpl_vars['features_search']->value,'div_id'=>"product_features_pagination_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'current_url'=>fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page'])),'disable_history'=>true), 0, false);
?>

            <div class="product-features__group">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->tpl_vars['product_features']->value), 0, false);
?>
            </div>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('search'=>$_smarty_tpl->tpl_vars['features_search']->value,'div_id'=>"product_features_pagination_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'current_url'=>fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page'])),'disable_history'=>true), 0, true);
?>

        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
        <?php }?>
    <!--products_update_features_content--></div>
</div><?php }
}
