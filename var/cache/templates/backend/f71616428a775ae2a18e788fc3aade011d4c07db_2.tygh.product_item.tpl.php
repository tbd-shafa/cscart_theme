<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:39
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/views/product_variations/components/product_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676394b695_32684448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f71616428a775ae2a18e788fc3aade011d4c07db' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/views/product_variations/components/product_item.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:buttons/update_for_all.tpl' => 1,
    'tygh:views/products/components/status_on_manage.tpl' => 1,
  ),
),false)) {
function content_6740676394b695_32684448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_collapse_list','expand_collapse_list','name','sku','price','quantity','product_variations.mark_main_product','edit','product_variations.remove_variation','product_variations.delete_product','status'));
?>
<tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['product']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
    data-ca-longtap-action="setCheckBox"
    data-ca-longtap-target="input.cm-item"
    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_variations:manage_body"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_variations:manage_body"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if (fn_allowed_for("ULTIMATE")) {?>
        <?php $_smarty_tpl->_assignInScope('show_update_for_all', !$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product']->value['shared_product'] === smarty_modifier_enum("YesNo::YES"));?>
    <?php }?>

    <td>
        <input type="checkbox" name="product_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['product']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
    </td>
    <td>
        <?php if (!$_smarty_tpl->tpl_vars['product']->value['parent_product_id'] && $_smarty_tpl->tpl_vars['product']->value['has_children']) {?>
            <button alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="sw_product_variations_group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" aaaid="on_variations" class="cm-combinations cm-product-variations__collapse product-variations__collapse-btn product-variations__collapse-btn--collapsed" type="button">
                <span class="icon-caret-down" data-ca-switch-id="product_variations_group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"> </span>
                <span class="icon-caret-right hidden" data-ca-switch-id="product_variations_group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"> </span>
            </button>
        <?php } else { ?>
            &nbsp;
        <?php }?>
    </td>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['parent_product_id']) {?>
        <td>
            <div class="product-variations__table-img product-variations__table-img--main">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'] ?? null : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['image_id'],'image_width'=>40,'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']))), 0, false);
?>
            </div>
        </td>
    <?php } else { ?>
        <td>
            <div class="product-variations__table-img product-variations__table-img--main">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'] ?? null : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['image_id'],'image_width'=>70,'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']))), 0, true);
?>
            </div>
        </td>
    <?php }?>

    <td class="product-variations__table-name" data-th="<?php echo $_smarty_tpl->__("name");?>
">
        <input type="hidden" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
"/>

        <?php if ($_smarty_tpl->tpl_vars['product_id']->value == $_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
            <strong class="product-variations__table-name--text"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</strong>
        <?php } else { ?>
            <a class="product-variations__table-name--link link--monochrome" href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
    </td>

    <td data-th="<?php echo $_smarty_tpl->__("sku");?>
">
        <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value || !$_smarty_tpl->tpl_vars['product']->value['product_type_instance']->isFieldAvailable("product_code")) {?>
            <div class="product-variations__table-code"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</div>
        <?php } else { ?>
            <input type="text" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_code]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden product-variations__table-code" />
        <?php }?>
    </td>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value || !$_smarty_tpl->tpl_vars['product']->value['product_type_instance']->isFieldAvailable("variation_features")) {?>
            <td data-th="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['variation_features'][$_smarty_tpl->tpl_vars['feature']->value['feature_id']]['variant'], ENT_QUOTES, 'UTF-8');?>
</span></td>
        <?php } else { ?>
            <td data-th="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
"><select
                        name="products_variation_feature_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]"
                        class="input-hidden product-variations__table-select js-product-variation-feature-item"
                        data-ca-feature-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features'][$_smarty_tpl->tpl_vars['feature']->value['feature_id']]['variant_id'] == $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" selected><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select></td>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <td class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" width="16%" data-th="<?php echo $_smarty_tpl->__("price");?>
">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"price_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'name'=>"update_all_vendors[price][".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'component'=>"products.price_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), 0, false);
?>
        <input type="text" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][price]" value="<?php echo htmlspecialchars((string) fn_format_price($_smarty_tpl->tpl_vars['product']->value['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>input-mini<?php } else { ?>input-small<?php }?> input-hidden product-variations__table-price"/>
    </td>
    <td data-th="<?php echo $_smarty_tpl->__("quantity");?>
">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_variations:list_quantity"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_variations:list_quantity"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>
                <div class="product-variations__table-quantity"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</div>
            <?php } else { ?>
                <input type="text" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="6" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" class="input-full input-hidden product-variations__table-quantity cm-value-decimal" />
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_variations:list_quantity"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </td>
    <td class="nowrap mobile-hide">
        <div class="hidden-tools cm-hide-with-inputs">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                <?php if (!$_smarty_tpl->tpl_vars['is_form_readonly']->value && $_smarty_tpl->tpl_vars['product']->value['parent_product_id'] && $_smarty_tpl->tpl_vars['product']->value['status'] === "A") {?>
                    <li><?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['redirect_url']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'id'=>"mark_main_product_product_from_group_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'text'=>$_smarty_tpl->__("product_variations.mark_main_product"),'class'=>"cm-post cm-confirm",'href'=>"product_variations.mark_main_product?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".$_prefixVariable3,'method'=>"POST"), true);?>
</li>
                <?php }?>
                <li><?php ob_start();
echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>$_prefixVariable4), true);?>
</li>
                <?php if (!$_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>
                    <li><?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['redirect_url']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'id'=>"remove_product_from_group_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'text'=>$_smarty_tpl->__("product_variations.remove_variation"),'class'=>"cm-post cm-confirm",'href'=>"product_variations.delete_product?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".$_prefixVariable5,'method'=>"POST"), true);?>
</li>
                    <li class="divider"></li>
                    <li><?php ob_start();
if ($_smarty_tpl->tpl_vars['product_id']->value == $_smarty_tpl->tpl_vars['product']->value['product_id']) {
echo "products.manage";
} else {
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['redirect_url']->value), ENT_QUOTES, 'UTF-8');
}
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'id'=>"delete_product_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'text'=>$_smarty_tpl->__("product_variations.delete_product"),'class'=>"cm-post cm-confirm",'href'=>"products.delete?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".$_prefixVariable6,'method'=>"POST"), true);?>
</li>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        </div>
    </td>
    <td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/status_on_manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popup_additional_status_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'status'=>$_smarty_tpl->tpl_vars['product']->value['status'],'hidden'=>true,'object_id_name'=>"product_id",'table'=>"products",'st_return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url'],'st_result_ids'=>"content_variations"), 0, false);
?>
    </td>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_variations:manage_body"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</tr>
<?php }
}
