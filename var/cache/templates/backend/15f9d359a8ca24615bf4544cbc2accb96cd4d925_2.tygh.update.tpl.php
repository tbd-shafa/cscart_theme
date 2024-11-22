<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_bundles/views/product_bundles/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067613bbc55_63826676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15f9d359a8ca24615bf4544cbc2accb96cd4d925' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_bundles/views/product_bundles/update.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/copy_on_type.tpl' => 1,
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:common/attach_images.tpl' => 1,
    'tygh:common/calendar.tpl' => 2,
    'tygh:common/select_status.tpl' => 1,
    'tygh:common/subheader.tpl' => 1,
    'tygh:views/products/components/picker/picker.tpl' => 1,
    'tygh:pickers/products/picker.tpl' => 1,
    'tygh:common/price.tpl' => 2,
    'tygh:buttons/save_cancel.tpl' => 2,
  ),
),false)) {
function content_674067613bbc55_63826676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','products','description','product_bundles.display_in_promotions','product_bundles.promo_image','use_avail_period','avail_from','avail_till','product_bundles.bundle_products','recalculate','product_bundles.total_cost','product_bundles.price_for_all','product_bundles.share_discount','apply','product_bundles.confirm_text_on_empty_bundle','product_bundles.confirm_text_with_one_product_bundle','product_bundles.confirm_text_on_empty_bundle','product_bundles.confirm_text_with_one_product_bundle'));
if ($_smarty_tpl->tpl_vars['item']->value['bundle_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['item']->value['bundle_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', '');?>
    <?php $_smarty_tpl->_assignInScope('extra_mode', "product_bundles");
}?>

<?php echo smarty_function_script(array('src'=>"js/addons/product_bundles/backend/func.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('allow_save', fn_check_view_permissions("product_bundles.update","POST"));
$_smarty_tpl->_assignInScope('product_id', (($tmp = $_smarty_tpl->tpl_vars['product_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
if (empty($_smarty_tpl->tpl_vars['product_options']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('aoc', smarty_modifier_enum("YesNo::NO"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('aoc', smarty_modifier_enum("YesNo::YES"));
}
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['price'], ENT_QUOTES, 'UTF-8');
$_prefixVariable20 = ob_get_clean();
$_smarty_tpl->_assignInScope('item_product', $_smarty_tpl->tpl_vars['product_data']->value ? (array(array("product_id"=>$_smarty_tpl->tpl_vars['product_id']->value,"product"=>((string)$_smarty_tpl->tpl_vars['product_data']->value['product']),"price"=>$_prefixVariable20,"amount"=>"1","aoc"=>((string)$_smarty_tpl->tpl_vars['aoc']->value)))) : (array()));
$_smarty_tpl->_assignInScope('bundle_products', (($tmp = $_smarty_tpl->tpl_vars['item']->value['products'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item_product']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('return_url', (($tmp = $_smarty_tpl->tpl_vars['return_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('tabs_count', 2);?>

<div class="content-product-bundle" id="content_group_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="item_update_form_product_bundle" id="item_update_form_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-hide-inputs<?php }?>" enctype="multipart/form-data">
        <input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
        <input type="hidden" class="cm-no-hide-input" name="item_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" class="cm-no-hide-input" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" class="cm-no-hide-input" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
">

        <div class="tabs cm-j-tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
            <ul class="nav nav-tabs">
                <li id="tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
                <li id="tab_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("products");?>
</a></li>
            </ul>
        </div>

        <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <fieldset>
                <div id="content_tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:components/copy_on_type.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('source_value'=>$_smarty_tpl->tpl_vars['item']->value['name'],'source_name'=>"item_data[name]",'target_value'=>$_smarty_tpl->tpl_vars['item']->value['storefront_name'],'target_name'=>"item_data[storefront_name]",'type'=>"bundle_name"), 0, false);
?>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"item_data[company_id]",'id'=>"product_bundle_company_id_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'tooltip'=>$_smarty_tpl->tpl_vars['companies_tooltip']->value,'disable_company_picker'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>

                    <div class="control-group">
                        <label class="control-label" for="elm_product_bundle_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
:</label>
                        <div class="controls">
                            <textarea id="elm_product_bundle_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="item_data[description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        </div>
                    </div>
                    <?php if (fn_check_permissions("promotions","manage","admin","POST")) {?>
                        <div class="control-group">
                            <label class="control-label" for="elm_product_bundle_promotions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("product_bundles.display_in_promotions");?>
:</label>
                            <div class="controls">
                                <input type="hidden" name="item_data[display_in_promotions]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
">
                                <input type="checkbox" name="item_data[display_in_promotions]" id="elm_product_bundle_promotions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNO::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNO::YES"), ENT_QUOTES, 'UTF-8');
$_prefixVariable21=ob_get_clean();
if ($_smarty_tpl->tpl_vars['item']->value['display_in_promotions'] == $_prefixVariable21) {?>checked="checked"<?php }?>>
                            </div>
                        </div>
                    <?php }?>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("product_bundles.promo_image");?>
</label>
                        <div class="controls">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"bundle_main",'image_object_type'=>"product_bundle",'image_pair'=>$_smarty_tpl->tpl_vars['item']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'image_key'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>true), 0, false);
?>
                        </div>
                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['item']->value['date_from'] && !$_smarty_tpl->tpl_vars['item']->value['date_to']) {?>
                        <?php $_smarty_tpl->_assignInScope('date_disabled', 'disabled="disabled"');?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('date_disabled', false);?>
                    <?php }?>
                    <div class="control-group">
                        <label class="control-label" for="elm_use_avail_period"><?php echo $_smarty_tpl->__("use_avail_period");?>
:</label>
                        <div class="controls">
                            <input type="checkbox" name="avail_period" class="use_avail_period" data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['date_disabled']->value) {?> checked="checked"<?php }?> value="Y"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="elm_product_bundle_avail_from_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("avail_from");?>
:</label>
                        <div class="controls">
                            <input type="hidden" name="item_data[date_from]" value="0" />
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_product_bundle_avail_from_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"item_data[date_from]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['date_from'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>$_smarty_tpl->tpl_vars['date_disabled']->value), 0, false);
?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="elm_product_bundle_avail_till_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("avail_till");?>
:</label>
                        <div class="controls">
                            <input type="hidden" name="item_data[date_to]" value="0" />
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_product_bundle_avail_till_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"item_data[date_to]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['date_to'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>$_smarty_tpl->tpl_vars['date_disabled']->value), 0, true);
?>
                        </div>
                    </div>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"item_data[status]",'id'=>"elm_product_bundle_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['item']->value,'hidden'=>false), 0, false);
?>
                </div>

                <div id="content_tab_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>class="cm-hide-inputs"<?php }?>>
                <?php if (fn_check_permissions('products','get_products_list','admin')) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("product_bundles.bundle_products")), 0, false);
?>

                    <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum('YesNo::YES'), ENT_QUOTES, 'UTF-8');
$_prefixVariable22=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum('YesNo::YES'), ENT_QUOTES, 'UTF-8');
$_prefixVariable23=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['exclude_pid']->value) {
echo "&exclude_pid=";
echo (string)$_smarty_tpl->tpl_vars['exclude_pid']->value;
}
$_prefixVariable24=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('multiple'=>true,'select_group_class'=>"btn-toolbar",'display'=>"options",'advanced_picker_id'=>"add_new_bundles_".((string)$_smarty_tpl->tpl_vars['id']->value)."_",'select_class'=>"cm-object-product-add--product-bundles",'aoc'=>true,'additional_query_params'=>"product_type=P&aoc=".$_prefixVariable22."&any_variation=".$_prefixVariable23.$_prefixVariable24,'segment'=>"product_bundles"), 0, false);
?>
                <?php }?>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('picker_id'=>"add_new_bundles_".((string)$_smarty_tpl->tpl_vars['id']->value)."_",'input_name'=>"item_data[products]",'item_ids'=>$_smarty_tpl->tpl_vars['bundle_products']->value,'get_option_info'=>false,'view_mode'=>"list",'type'=>"table",'table_meta'=>"product-bundles-table",'colspan'=>"8"), 0, false);
?>

                    <ul class="pull-right unstyled right span6">
                        <li>
                            <a class="btn" onclick="fn_product_bundles_recalculate('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');"><?php echo $_smarty_tpl->__("recalculate");?>
</a><br><br>
                        </li>
                        <li>
                            <input id="elm_product_bundle_total_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="hidden" name="item_data[total_price]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['total_price'], ENT_QUOTES, 'UTF-8');?>
" />
                            <em><?php echo $_smarty_tpl->__("product_bundles.total_cost");?>
:</em>
                            <strong><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['item']->value['total_price'],'span_id'=>"total_price_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0, false);
?></strong>
                        </li>
                        <li>
                            <input id="elm_product_bundle_price_for_all_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"  type="hidden" name="item_data[price_for_all]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['discounted_price'], ENT_QUOTES, 'UTF-8');?>
" />
                            <em><?php echo $_smarty_tpl->__("product_bundles.price_for_all");?>
:</em>
                            <strong><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['item']->value['discounted_price'],'span_id'=>"price_for_all_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0, true);
?></strong>
                        </li>
                        <li><br>
                            <label for="elm_product_bundle_global_discount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <em><?php echo $_smarty_tpl->__("product_bundles.share_discount");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
):</em>&nbsp;
                                <input type="text" class="input-mini" size="4"
                                       id="elm_product_bundle_global_discount_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                       onkeypress="fn_product_bundles_share_discount(event, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');" />&nbsp;
                                <a onclick="fn_product_bundles_apply_discount('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="btn"><?php echo $_smarty_tpl->__("apply");?>
</a>
                            </label>
                        </li>
                    </ul>
                </div>
            </fieldset>
        </div>

        <div class="buttons-container">
            <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                <?php ob_start();
echo $_smarty_tpl->__("product_bundles.confirm_text_on_empty_bundle");
$_prefixVariable25 = ob_get_clean();
ob_start();
echo $_smarty_tpl->__("product_bundles.confirm_text_with_one_product_bundle");
$_prefixVariable26 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[product_bundles.update]",'cancel_action'=>"close",'but_confirm_text'=>smarty_modifier_to_json(array("emptyProductBundle"=>$_prefixVariable25,"withOneProductBundle"=>$_prefixVariable26))), 0, false);
?>
            <?php } else { ?>
                <?php ob_start();
echo $_smarty_tpl->__("product_bundles.confirm_text_on_empty_bundle");
$_prefixVariable27 = ob_get_clean();
ob_start();
echo $_smarty_tpl->__("product_bundles.confirm_text_with_one_product_bundle");
$_prefixVariable28 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[product_bundles.update]",'but_confirm_text'=>smarty_modifier_to_json(array("emptyProductBundle"=>$_prefixVariable27,"withOneProductBundle"=>$_prefixVariable28)),'cancel_action'=>"close",'hide_first_button'=>false,'hide_second_button'=>false,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
            <?php }?>
        </div>

    </form>

    <!--content_group_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
