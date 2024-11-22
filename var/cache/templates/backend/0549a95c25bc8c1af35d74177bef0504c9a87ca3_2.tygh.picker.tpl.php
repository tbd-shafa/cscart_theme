<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_options/components/picker/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067616e9990_62343488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0549a95c25bc8c1af35d74177bef0504c9a87ca3' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/product_options/components/picker/picker.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/product_options/components/picker/item.tpl' => 1,
  ),
),false)) {
function content_674067616e9990_62343488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),));
\Tygh\Languages\Helper::preloadLangVars(array('none','add'));
?>

<?php $_smarty_tpl->_assignInScope('picker_id', (($tmp = $_smarty_tpl->tpl_vars['picker_id']->value ?? null)===null||$tmp==='' ? uniqid() ?? null : $tmp));
$_smarty_tpl->_assignInScope('input_id', (($tmp = $_smarty_tpl->tpl_vars['input_id']->value ?? null)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('multiple', (($tmp = $_smarty_tpl->tpl_vars['multiple']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('autofocus', (($tmp = $_smarty_tpl->tpl_vars['autofocus']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_clear', (($tmp = $_smarty_tpl->tpl_vars['allow_clear']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('create_option_to_end', (($tmp = $_smarty_tpl->tpl_vars['create_option_to_end']->value ?? null)===null||$tmp==='' ? "false" ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_ids', array_filter((($tmp = $_smarty_tpl->tpl_vars['item_ids']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)));
$_smarty_tpl->_assignInScope('dropdown_css_class', (($tmp = "object-picker__dropdown object-picker__dropdown--product-options ".((string)$_smarty_tpl->tpl_vars['dropdown_css_class']->value) ?? null)===null||$tmp==='' ? "object-picker__dropdown object-picker__dropdown--product-options" ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('empty_variant_text', (($tmp = $_smarty_tpl->tpl_vars['empty_variant_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('meta', "cm-object-product-options-add-container ".((string)$_smarty_tpl->tpl_vars['meta']->value));?>

<div class="object-picker object-picker--product-options <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--product-options <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_group_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value == "list") {?>object-picker__simple--list<?php }?> object-picker__simple--product-options <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select
                    <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
                        multiple
                    <?php }?>
                    id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
                        form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    class="cm-object-picker object-picker__select object-picker__select--product-options <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="product_options"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php echo fn_url("product_options.get_available_options_list?product_id=".((string)$_REQUEST['product_id']));?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['autoopen']->value) {?>
                        data-ca-object-picker-autoopen="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['submit_url']->value) {?>
                        data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['submit_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['submit_form']->value) {?>
                        data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['submit_form']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    data-ca-object-picker-placeholder="<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['empty_variant_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder-value=""
                    <?php if ($_smarty_tpl->tpl_vars['width']->value) {?>
                        data-ca-object-picker-width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    data-ca-object-picker-dropdown-css-class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_css_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
                        data-ca-object-picker-allow-clear="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['allow_clear']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-predefined-variants="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['empty_variant_text']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable38 = ob_get_clean();
echo htmlspecialchars((string) smarty_modifier_to_json(array(array("id"=>0,"text"=>$_prefixVariable38))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
                        data-ca-object-picker-enable-create-object="true"
                        data-ca-object-picker-template-result-new-selector="#product_options_picker_result_new_selector_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
            >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'item_id');
$_smarty_tpl->tpl_vars['item_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
    <?php echo '<script'; ?>
 type="text/template" id="product_options_picker_result_new_selector_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
        <div class="object-picker__results object-picker__results--options object-picker__results--new">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_options/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title_pre'=>$_smarty_tpl->__("add")), 0, false);
?>
        </div>
    <?php echo '</script'; ?>
>
<?php }
}
}
