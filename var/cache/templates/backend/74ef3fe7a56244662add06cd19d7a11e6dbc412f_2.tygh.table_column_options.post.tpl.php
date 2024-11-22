<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_bundles/hooks/product_picker/table_column_options.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067614a0474_95938818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74ef3fe7a56244662add06cd19d7a11e6dbc412f' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_bundles/hooks/product_picker/table_column_options.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 4,
  ),
),false)) {
function content_674067614a0474_95938818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('absolute','percent','absolute','percent'));
if (($_smarty_tpl->tpl_vars['runtime']->value['controller'] === "product_bundles" || $_smarty_tpl->tpl_vars['extra_mode']->value === "product_bundles") && $_smarty_tpl->tpl_vars['product_info']->value) {?>
    <td>
        <input type="hidden" id="item_price_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_info']->value['price'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product_info']->value['price']), 0, false);
?>
    </td>
    <td>
        <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier_type]" class="input-medium" id="item_modifier_type_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <option value="by_fixed" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['modifier_type'] == "by_fixed") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
  (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</option>
            <option value="by_percentage" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['modifier_type'] == "by_percentage") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
        </select>
    </td>
    <td>
        <input type="hidden" class="cm-bundle-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier]" id="item_modifier_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" size="4" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_info']->value['modifier'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-mini">
    </td>
    <td>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['product_info']->value['discounted_price'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_info']->value['price'] ?? null : $tmp),'span_id'=>"item_discounted_price_product_bundle_".((string)$_smarty_tpl->tpl_vars['item']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['delete_id']->value)."_"), 0, true);
?>
    </td>
    <td>
        <input type="hidden" id="item_show_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_product_bundle_id" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[show_on_product_page]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
">
        <input type="checkbox" id="item_show_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_product_bundle_id" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[show_on_product_page]" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['show_on_product_page'] !== smarty_modifier_enum("YesNo::NO")) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
">
    </td>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller'] === "product_bundles" || $_smarty_tpl->tpl_vars['extra_mode']->value === "product_bundles") && $_smarty_tpl->tpl_vars['clone']->value) {?>
    <td>
        <input type="text" class="hidden" id="item_price_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
price<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('span_id'=>"item_display_price_product_bundle_".((string)$_smarty_tpl->tpl_vars['item']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product_bundle_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value)."_"), 0, true);
?>
    </td>
    <td>
        <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier_type]" class="input-medium" id="item_modifier_type_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
">
            <option value="by_fixed"><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</option>
            <option value="by_percentage"><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
        </select>
    </td>
    <td>
        <input type="text" class="cm-bundle-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
 hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="text" class="hidden" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[modifier]" id="item_modifier_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" size="4" value="0" class="input-mini">
    </td>
    <td>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('span_id'=>"item_discounted_price_product_bundle_".((string)$_smarty_tpl->tpl_vars['item']->value['bundle_id'])."_".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product_bundle_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value)."_"), 0, true);
?>
    </td>
    <td>
        <input type="checkbox" id="item_show_product_bundle_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
product_bundle_id<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[show_on_product_page]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" checked="checked">
    </td>
<?php }
}
}
