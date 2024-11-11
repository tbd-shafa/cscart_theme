<?php
/* Smarty version 4.3.0, created on 2024-11-11 04:49:11
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/search_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6731fd47d98730_21622273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4873a6bbab641e88aa3c4f1c3615549ca08b47f3' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_variations/hooks/products/search_data.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/products/picker.tpl' => 1,
  ),
),false)) {
function content_6731fd47d98730_21622273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.product_type','product_variations.belongs_to_catalog_item','product_variations.variations'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_variations", null, null);?>
    <?php $_smarty_tpl->_assignInScope('show_product_type_filter', (($tmp = $_smarty_tpl->tpl_vars['show_product_type_filter']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_product_parent_filter', (($tmp = $_smarty_tpl->tpl_vars['show_product_parent_filter']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <div class="row-fluid">
        <div class="group span6 form-horizontal">
            <?php if ($_smarty_tpl->tpl_vars['show_product_type_filter']->value) {?>
                <div class="control-group">
                    <label class="control-label" for="product_type"><?php echo $_smarty_tpl->__("product_variations.product_type");?>
</label>
                    <div class="controls">
                        <?php $_smarty_tpl->_assignInScope('product_types', $_smarty_tpl->tpl_vars['app']->value["addons.product_variations.product.type.type_collection"]->getTypeNames());?>

                        <input type="hidden" name="product_type">
                        <select name="product_type[]" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
_product_type" multiple>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_types']->value, 'product_type_name', false, 'product_type');
$_smarty_tpl->tpl_vars['product_type_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_type']->value => $_smarty_tpl->tpl_vars['product_type_name']->value) {
$_smarty_tpl->tpl_vars['product_type_name']->do_else = false;
?>
                                <option <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['product_type']->value,$_smarty_tpl->tpl_vars['search']->value['product_type'])) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_product_parent_filter']->value) {?>
                <div class="control-group">
                    <label class="control-label" for="parent_product_id"><?php echo $_smarty_tpl->__("product_variations.belongs_to_catalog_item");?>
</label>
                    <div class="controls">
                        <?php if ($_smarty_tpl->tpl_vars['search']->value['parent_product_id']) {?>
                            <?php $_smarty_tpl->_assignInScope('item_ids', $_smarty_tpl->tpl_vars['search']->value['parent_product_id']);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('item_ids', null);?>
                        <?php }?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"parent_product_id",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['item_ids']->value,'type'=>"links",'no_container'=>true,'picker_view'=>true,'dialog_opener_meta'=>"cm-dialog-destroy-nested-on-close"), 0, false);
?>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['search_filters']) ? $_smarty_tpl->tpl_vars['search_filters']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data']['product_variations'] = array('id'=>"product_variations",'type'=>"popup",'category'=>"secondary",'label'=>$_smarty_tpl->__("product_variations.variations"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_variations'));
$_smarty_tpl->_assignInScope('search_filters', $_tmp_array);?>

<?php $_smarty_tpl->_assignInScope('search_filters', $_smarty_tpl->tpl_vars['search_filters']->value ,false ,2);
}
}
