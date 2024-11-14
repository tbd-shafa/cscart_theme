<?php
/* Smarty version 4.3.0, created on 2024-11-13 21:33:09
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/products_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67358b951d9533_31049377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd239f8ec438708d6cd5abe366878dac1dadd27a0' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/products_search_form.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/categories/components/picker/picker.tpl' => 2,
    'tygh:views/products/components/advanced_search_form.tpl' => 2,
    'tygh:common/select_vendor.tpl' => 1,
    'tygh:pickers/orders/picker.tpl' => 1,
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_67358b951d9533_31049377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.array_to_fields.php','function'=>'smarty_function_array_to_fields',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','find_results_with','price','search_in_category','all_categories','all_categories','search_in','product_name','short_description','full_description','keywords','search_by_product_filters','search_by_product_features','error_features_too_many_variants','search_by_sku','popularity','ttc_popularity','subcategories','shipping_freight','weight','quantity','free_shipping','yes','no','status','purchased_in_orders','no_items','sort_by','list_price','name','price','sku','quantity','status','desc','asc','creation_date','updated_last','hour_or_hours'));
$_smarty_tpl->_assignInScope('type', (($tmp = $_smarty_tpl->tpl_vars['type']->value ?? null)===null||$tmp==='' ? "default" ?? null : $tmp));
$_smarty_tpl->_assignInScope('autofocus', $_smarty_tpl->tpl_vars['autofocus']->value === false ? false : true);
if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value !== "search_filters") {?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page_part']->value) {?>
    <?php $_smarty_tpl->_assignInScope('_page_part', "#".((string)$_smarty_tpl->tpl_vars['page_part']->value));
}?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_page_part']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_search_form_prefix']->value, ENT_QUOTES, 'UTF-8');?>
search_form" method="get" class="cm-disable-empty-all <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
" id="search_form">
<input type="hidden" name="type" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['search_type']->value ?? null)===null||$tmp==='' ? "simple" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['autofocus']->value) {?>autofocus="autofocus"<?php }?> />
<?php if ($_REQUEST['redirect_url']) {?>
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['selected_section']->value != '') {?>
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<input type="hidden" name="pcode_from_q" value="Y" />

<?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
    <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback"),'escape_all'=>true),$_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", "simple_search", null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:simple_search"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:simple_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="sidebar-field">
        <label><?php echo $_smarty_tpl->__("find_results_with");?>
</label>
        <input type="text" name="q" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>

    <div class="sidebar-field">
        <label><?php echo $_smarty_tpl->__("price");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
        <input type="text" name="price_from" size="1" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['price_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-small" /> - <input type="text" size="1" name="price_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['price_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-small" />
    </div>

    <div class="sidebar-field">
        <label><?php echo $_smarty_tpl->__("search_in_category");?>
</label>
        <?php if (is_array($_smarty_tpl->tpl_vars['search']->value['cid'])) {?>
            <?php $_smarty_tpl->_assignInScope('s_cid', (smarty_modifier_count($_smarty_tpl->tpl_vars['search']->value['cid'])) === 1 ? (reset($_smarty_tpl->tpl_vars['search']->value['cid'])) : (0));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('s_cid', ($_smarty_tpl->tpl_vars['search']->value['cid']));?>
        <?php }?>

        <?php if (fn_show_picker("categories",(defined('CATEGORY_THRESHOLD') ? constant('CATEGORY_THRESHOLD') : null))) {?>
            <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"cid",'show_advanced'=>true,'multiple'=>false,'show_empty_variant'=>true,'item_ids'=>array($_smarty_tpl->tpl_vars['s_cid']->value),'empty_variant_text'=>$_smarty_tpl->__("all_categories"),'dropdown_css_class'=>"object-picker__dropdown--categories",'object_picker_advanced_btn_class'=>"cm-dialog-destroy-on-close"), 0, false);
?>
            </div>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"cid",'show_advanced'=>true,'multiple'=>false,'show_empty_variant'=>true,'item_ids'=>array($_smarty_tpl->tpl_vars['s_cid']->value),'empty_variant_text'=>$_smarty_tpl->__("all_categories"),'dropdown_css_class'=>"object-picker__dropdown--categories",'object_picker_advanced_btn_class'=>"cm-dialog-destroy-on-close"), 0, true);
?>
        <?php }?>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:simple_search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>

<?php if ($_smarty_tpl->tpl_vars['type']->value === "search_filters") {?>
    <div class="group form-horizontal">
        <?php echo $_smarty_tpl->tpl_vars['simple_search']->value;?>

        <?php $_smarty_tpl->_assignInScope('simple_search', false);?>
    </div>
<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:advanced_search"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:advanced_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="group form-horizontal">
    <div class="control-group">
    <label><?php echo $_smarty_tpl->__("search_in");?>
</label>
    <div class="table-wrapper">
        <table width="100%">
            <tr class="nowrap">
                <td><label for="pname" class="checkbox inline"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pname'] == "Y") {?>checked="checked"<?php }?> name="pname" id="pname" /><?php echo $_smarty_tpl->__("product_name");?>
</label></td>
                <td><label for="pshort" class="checkbox inline"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pshort'] == "Y") {?>checked="checked"<?php }?> name="pshort" id="pshort"  /><?php echo $_smarty_tpl->__("short_description");?>
</label></td>
                <td><label for="pfull" class="checkbox  inline"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pfull'] == "Y") {?>checked="checked"<?php }?> name="pfull" id="pfull" /><?php echo $_smarty_tpl->__("full_description");?>
</label></td>
                <td><label for="pkeywords" class="checkbox  inline"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['pkeywords'] == "Y") {?>checked="checked"<?php }?> name="pkeywords" id="pkeywords"  /><?php echo $_smarty_tpl->__("keywords");?>
</label></td>
            </tr>
        </table>
    </div>
    </div>
</div>

<div class="group form-horizontal">
<?php if ($_smarty_tpl->tpl_vars['filter_items']->value) {?>
    <div class="control-group">

        <a href="#" class="search-link cm-combination open cm-save-state link--monochrome" id="sw_filter">
        <span id="on_filter" class="icon-caret-right cm-save-state <?php if ($_COOKIE['filter']) {?>hidden<?php }?>"> </span>
        <span id="off_filter" class="icon-caret-down cm-save-state <?php if (!$_COOKIE['filter']) {?>hidden<?php }?>"></span>
        <?php echo $_smarty_tpl->__("search_by_product_filters");?>
</a>

        <div id="filter"<?php if (!$_COOKIE['filter']) {?> class="hidden"<?php }?>>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/advanced_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_features'=>$_smarty_tpl->tpl_vars['filter_items']->value,'prefix'=>"filter_",'data_name'=>"filter_variants"), 0, false);
?>
        </div>
    </div>
<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['feature_items']->value) {?>
<div class="group form-horizontal">
    <div class="control-group">

        <a class="search-link cm-combination nowrap open cm-save-state link--monochrome" id="sw_feature"><span id="on_feature" class="cm-combination cm-save-state <?php if ($_COOKIE['feature']) {?>hidden<?php }?>"><span class="icon-caret-right"></span></span><span id="off_feature" class="cm-combination cm-save-state <?php if (!$_COOKIE['feature']) {?>hidden<?php }?>"><span class="icon-caret-down"></span></span><?php echo $_smarty_tpl->__("search_by_product_features");?>
</a>

        <div id="feature"<?php if (!$_COOKIE['feature']) {?> class="hidden"<?php }?>>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/advanced_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_features'=>$_smarty_tpl->tpl_vars['feature_items']->value,'prefix'=>"feature_",'data_name'=>"feature_variants"), 0, true);
?>
        </div>
    </div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['feature_items_too_many']->value) {?>
<div class="group form-horizontal">
    <?php echo $_smarty_tpl->__("error_features_too_many_variants");?>

</div>
<?php }?>

<div class="row-fluid">
<div class="group span6">
    <div class="form-horizontal">
        <div class="control-group">
            <label for="pcode" class="control-label"><?php echo $_smarty_tpl->__("search_by_sku");?>
</label>
            <div class="controls">
                <input type="text" name="pcode" id="pcode" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['pcode'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="popularity_from"><?php echo $_smarty_tpl->__("popularity");?>
</label>
            <div class="controls">
                <input type="text" name="popularity_from" id="popularity_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['popularity_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="popularity_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['popularity_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
                <p class="muted description"><?php echo $_smarty_tpl->__("ttc_popularity");?>
</p>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="subcats"><?php echo $_smarty_tpl->__("subcategories");?>
</label>
            <div class="controls">
                <input type="hidden" name="subcats" value="N" />
                <input type="checkbox" value="Y"<?php if ($_smarty_tpl->tpl_vars['search']->value['subcats'] == "Y" || !$_smarty_tpl->tpl_vars['search']->value['subcats']) {?> checked="checked"<?php }?> name="subcats"  id="subcats" />
            </div>
        </div>
    </div>
</div>

<div class="group span6 form-horizontal">
    <div class="control-group">
        <label class="control-label" for="shipping_freight_from"><?php echo $_smarty_tpl->__("shipping_freight");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
        <div class="controls">
            <input type="text" name="shipping_freight_from" id="shipping_freight_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['shipping_freight_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="shipping_freight_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['shipping_freight_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="weight_from"><?php echo $_smarty_tpl->__("weight");?>
&nbsp;(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
)</label>
        <div class="controls">
            <input type="text" name="weight_from" id="weight_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['weight_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="weight_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['weight_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
        </div>
    </div>

    <?php $_smarty_tpl->_assignInScope('have_amount_filter', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_items']->value, 'ff');
$_smarty_tpl->tpl_vars['ff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ff']->value) {
$_smarty_tpl->tpl_vars['ff']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['ff']->value['field_type'] == "A") {?>
            <?php $_smarty_tpl->_assignInScope('have_amount_filter', 1);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if (!$_smarty_tpl->tpl_vars['have_amount_filter']->value) {?>
    <div class="control-group">
        <label class="control-label" for="amount_from"><?php echo $_smarty_tpl->__("quantity");?>
:</label>
        <div class="controls">
            <input type="text" name="amount_from" id="amount_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['amount_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="amount_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['amount_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
        </div>
    </div>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:products_advanced_search"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:products_advanced_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if (fn_string_not_empty((($tmp = $_smarty_tpl->tpl_vars['picker_selected_company']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>
        <input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_selected_company']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:products_advanced_search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</div>
</div>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label" for="free_shipping"><?php echo $_smarty_tpl->__("free_shipping");?>
</label>
            <div class="controls">
            <select name="free_shipping" id="free_shipping">
                <option value="">--</option>
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['free_shipping'] == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['search']->value['free_shipping'] == "N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
            </select>
            </div>
        </div>

        <div class="control-group">
            <label for="status" class="control-label"><?php echo $_smarty_tpl->__("status");?>
</label>
            <div class="controls">
            <select name="status" id="status">
                <option value="">--</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_all_product_statuses(), 'status_name', false, 'status_id');
$_smarty_tpl->tpl_vars['status_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status_id']->value => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] === $_smarty_tpl->tpl_vars['status_id']->value) {?>
                                selected="selected"
                            <?php }?>
                    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            </div>
        </div>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:search_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <div class="group span6 form-horizontal">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:search_in_orders"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:search_in_orders"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="control-group">
            <label class="control-label" for="popularity_from"><?php echo $_smarty_tpl->__("purchased_in_orders");?>
</label>
            <div class="right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/orders/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_ids'=>$_smarty_tpl->tpl_vars['search']->value['order_ids'],'no_item_text'=>$_smarty_tpl->__("no_items"),'data_id'=>"order_ids",'input_name'=>"order_ids",'view_mode'=>"simple"), 0, false);
?>
            </div>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:search_in_orders"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <div class="control-group">
            <label class="control-label" for="sort_by"><?php echo $_smarty_tpl->__("sort_by");?>
</label>
            <div class="controls">
            <select class="select-mini" name="sort_by" id="sort_by">
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "list_price") {?>selected="selected"<?php }?> value="list_price"><?php echo $_smarty_tpl->__("list_price");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "product") {?>selected="selected"<?php }?> value="product"><?php echo $_smarty_tpl->__("name");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "price") {?>selected="selected"<?php }?> value="price"><?php echo $_smarty_tpl->__("price");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "code") {?>selected="selected"<?php }?> value="code"><?php echo $_smarty_tpl->__("sku");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "amount") {?>selected="selected"<?php }?> value="amount"><?php echo $_smarty_tpl->__("quantity");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "status") {?>selected="selected"<?php }?> value="status"><?php echo $_smarty_tpl->__("status");?>
</option>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:select_search"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:select_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:select_search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </select> -
            <select class="select-mini" name="sort_order" id="sort_order">
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == "asc") {?>selected="selected"<?php }?> value="desc"><?php echo $_smarty_tpl->__("desc");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == "desc") {?>selected="selected"<?php }?> value="asc"><?php echo $_smarty_tpl->__("asc");?>
</option>
            </select>
            </div>
        </div>
    </div>
</div>

<div class="group form-horizontal">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("creation_date");?>
</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>((string)$_smarty_tpl->tpl_vars['product_search_form_prefix']->value)."search_form"), 0, false);
?>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label" for="updated_in_hours"><?php echo $_smarty_tpl->__("updated_last");?>
</label>
            <div class="controls">
                <input type="text" name="updated_in_hours" id="updated_in_hours" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['updated_in_hours'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />&nbsp;&nbsp;<?php echo $_smarty_tpl->__("hour_or_hours");?>

            </div>
        </div>
    </div>
</div>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:advanced_search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->tpl_vars['simple_search']->value,'advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"products",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value,'is_order_management'=>$_smarty_tpl->tpl_vars['is_order_management']->value,'show_search_button'=>$_smarty_tpl->tpl_vars['show_search_button']->value,'advanced_search_button_class'=>$_smarty_tpl->tpl_vars['advanced_search_button_class']->value,'show_advanced_search_button_icon'=>$_smarty_tpl->tpl_vars['show_advanced_search_button_icon']->value,'show_advanced_search_button_text'=>$_smarty_tpl->tpl_vars['show_advanced_search_button_text']->value), 0, false);
?>

<!--search_form--></form>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value !== "search_filters") {?>
    </div><hr>
<?php }
}
}
