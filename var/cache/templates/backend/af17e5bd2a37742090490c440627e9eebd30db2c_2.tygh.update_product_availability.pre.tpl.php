<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:36
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/price_per_unit/hooks/products/update_product_availability.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406760f26068_87085906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af17e5bd2a37742090490c440627e9eebd30db2c' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/price_per_unit/hooks/products/update_product_availability.pre.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:components/append_language.tpl' => 1,
  ),
),false)) {
function content_67406760f26068_87085906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('price_per_unit','unit_name','unit_name_field_description','units_in_product','units_in_product_field_description','show_price_per_x_units','show_price_per_x_units_field_description'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <hr>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("price_per_unit"),'target'=>"#acc_price_per_unit"), 0, false);
?>

    <div id="acc_price_per_unit" class="collapse in">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_unit_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_unit_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit",'field'=>"unit_name"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit",'field'=>"unit_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="control-group">
                <label class="control-label" for="elm_product_unit_name"><?php echo $_smarty_tpl->__("unit_name");?>
:</label>
                <div class="controls">
                    <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input type="text"
                            name="product_data[unit_name]"
                            id="elm_product_unit_name"
                            value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['unit_name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                            class="input-long"
                        />
                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, false);
?>
                    </div>
                    <p class="muted description"><?php echo $_smarty_tpl->__("unit_name_field_description");?>
</p>
                </div>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit",'field'=>"unit_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_unit_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_units_in_product"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_units_in_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit",'field'=>"units_in_product"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit",'field'=>"units_in_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="control-group">
                <label class="control-label" for="elm_product_units_in_product"><?php echo $_smarty_tpl->__("units_in_product");?>
:</label>
                <div class="controls">
                    <input type="text" name="product_data[units_in_product]" id="elm_product_units_in_product" size="55" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['units_in_product'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long" />
                    <p class="muted description"><?php echo $_smarty_tpl->__("units_in_product_field_description");?>
</p>
                </div>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit",'field'=>"units_in_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_units_in_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_show_price_per_x_units"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_show_price_per_x_units"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit",'field'=>"show_price_per_x_units"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit",'field'=>"show_price_per_x_units"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="control-group">
                <label class="control-label" for="elm_product_show_price_per_x_units"><?php echo $_smarty_tpl->__("show_price_per_x_units");?>
:</label>
                <div class="controls">
                    <input type="text" name="product_data[show_price_per_x_units]" id="elm_product_show_price_per_x_units" size="55" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['show_price_per_x_units'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long" />
                    <p class="muted description"><?php echo $_smarty_tpl->__("show_price_per_x_units_field_description");?>
</p>
                </div>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit",'field'=>"show_price_per_x_units"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_show_price_per_x_units"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"products",'tab'=>"detailed",'section'=>"price_per_unit"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <?php }
}
