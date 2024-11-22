<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/products_shipping_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676112a4a8_98650102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd00b57f07cfb1b99b4d9b8630bece544c182f552' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/products_shipping_settings.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_6740676112a4a8_98650102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','weight','tt_views_products_components_products_shipping_settings_weight','free_shipping','tt_views_products_components_products_shipping_settings_free_shipping','shipping_freight','items_in_box','tt_views_products_components_products_shipping_settings_items_in_box','box_length','box_width','box_height'));
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("general")), 0, false);
?>

<div class="control-group">
    <label class="control-label" for="product_weight"><?php echo $_smarty_tpl->__("weight");?>
 (<?php echo $_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'];?>
):</label>
    <div class="controls">
        <input type="text" name="product_data[weight]" id="product_weight" size="10" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['weight'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long" />
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_products_components_products_shipping_settings_weight");?>
</p>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_free_shipping"><?php echo $_smarty_tpl->__("free_shipping");?>
:</label>
    <div class="controls">
        <input type="hidden" name="product_data[free_shipping]" value="N" />
        <input type="checkbox" name="product_data[free_shipping]" id="product_free_shipping" value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['free_shipping'] == "Y") {?>checked="checked"<?php }?> />
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_products_components_products_shipping_settings_free_shipping");?>
</p>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_shipping_freight"><?php echo $_smarty_tpl->__("shipping_freight");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
):</label>
    <div class="controls">
        <input type="text" name="product_data[shipping_freight]" id="product_shipping_freight" size="10" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['shipping_freight'] ?? null)===null||$tmp==='' ? "0.00" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long cm-numeric" data-a-sep />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_items_in_box"><?php echo $_smarty_tpl->__("items_in_box");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[min_items_in_box]" id="product_items_in_box" size="5" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['min_items_in_box'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-micro" onkeyup="fn_product_shipping_settings(this);" />
        &nbsp;-&nbsp;
        <input type="text" name="product_data[max_items_in_box]" size="5" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['max_items_in_box'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-micro" onkeyup="fn_product_shipping_settings(this);" />
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_products_components_products_shipping_settings_items_in_box");?>
</p>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['product_data']->value['min_items_in_box'] > 0 || $_smarty_tpl->tpl_vars['product_data']->value['max_items_in_box']) {?>
        <?php $_smarty_tpl->_assignInScope('box_settings', true);?>
    <?php }?>
</div>

<div class="control-group">
    <label class="control-label" for="product_box_length"><?php echo $_smarty_tpl->__("box_length");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[box_length]" id="product_box_length" size="10" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['box_length'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long shipping-dependence" <?php if (!$_smarty_tpl->tpl_vars['box_settings']->value) {?>disabled="disabled"<?php }?> />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_box_width"><?php echo $_smarty_tpl->__("box_width");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[box_width]" id="product_box_width" size="10" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['box_width'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long shipping-dependence" <?php if (!$_smarty_tpl->tpl_vars['box_settings']->value) {?>disabled="disabled"<?php }?> />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_box_height"><?php echo $_smarty_tpl->__("box_height");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[box_height]" id="product_box_height" size="10" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['box_height'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long shipping-dependence" <?php if (!$_smarty_tpl->tpl_vars['box_settings']->value) {?>disabled="disabled"<?php }?> />
    </div>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>

function fn_product_shipping_settings(elm)
{
    var jelm = Tygh.$(elm);
    var available = false;

    Tygh.$('input', jelm.parent()).each(function() {
        if (parseInt(Tygh.$(this).val()) > 0) {
            available = true;
        }
    });

    Tygh.$('input.shipping-dependence').prop('disabled', (available ? false : true));

}


<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
