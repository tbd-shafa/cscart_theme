<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_bundles/addons/product_variations/hooks/product_picker/table_rows.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406761468981_69249623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06e2c5fc3cbfce713bbc318d874095b7cad6b2d6' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_bundles/addons/product_variations/hooks/product_picker/table_rows.override.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/options_info.tpl' => 2,
    'tygh:pickers/products/js.tpl' => 1,
  ),
),false)) {
function content_67406761468981_69249623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('options','any_option_combinations','product_bundles.any_variation','deleted_product'));
if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'product', false, 'product_id');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_id']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['display']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);?>
                <?php $_smarty_tpl->_assignInScope('prod_opts', fn_get_product_options($_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_prefixVariable29=ob_get_clean();
if ($_smarty_tpl->tpl_vars['prod_opts']->value && $_smarty_tpl->tpl_vars['product']->value['aoc'] == $_prefixVariable29) {?>
                    <span><?php echo $_smarty_tpl->__("options");?>
: </span>&nbsp;<?php echo $_smarty_tpl->__("any_option_combinations");?>

                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options_value']) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options_value']), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('product_options', $_smarty_tpl->tpl_vars['get_option_info']->value ? (fn_get_selected_product_options_info($_smarty_tpl->tpl_vars['product']->value['product_options'])) : $_smarty_tpl->tpl_vars['product']->value['product_options']);?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product_options']->value), 0, true);
?>
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['any_variation']) {?>
                    <?php echo $_smarty_tpl->__("product_bundles.any_variation");?>

                    <input type="hidden" name="item_data[products][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
][any_variation]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
">
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('product_name', (($tmp = fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) ?? null)===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") ?? null : $tmp));?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_name']->value,'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'delete_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['product_id']->value)."]",'amount'=>$_smarty_tpl->tpl_vars['product']->value['amount'],'amount_input'=>"text",'type'=>"options",'options'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options'),'options_array'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'product_info'=>$_smarty_tpl->tpl_vars['product']->value,'aoc'=>$_smarty_tpl->tpl_vars['product']->value['aoc']), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
