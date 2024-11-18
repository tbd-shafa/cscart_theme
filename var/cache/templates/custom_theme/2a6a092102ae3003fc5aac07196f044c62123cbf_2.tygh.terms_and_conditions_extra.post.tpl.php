<?php
/* Smarty version 4.3.0, created on 2024-11-17 23:25:22
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673aebe20b6394_43033584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a6a092102ae3003fc5aac07196f044c62123cbf' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673aebe20b6394_43033584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_terms.checkout_terms_and_conditions_name','vendor_terms.checkout_terms_and_conditions','vendor_terms.checkout_terms_and_conditions_name','vendor_terms.checkout_terms_and_conditions'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['vendor_terms']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vendor_terms']->value, 'vendor');
$_smarty_tpl->tpl_vars['vendor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vendor']->value) {
$_smarty_tpl->tpl_vars['vendor']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('const_suffix', (($tmp = $_smarty_tpl->tpl_vars['const_suffix']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('is_accept_product_agreements_checked', ($_smarty_tpl->tpl_vars['user_data']->value["product_agreements_".((string)$_smarty_tpl->tpl_vars['const_suffix']->value)."_".((string)$_smarty_tpl->tpl_vars['vendor']->value['company_id'])] === "Y"));?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <label for="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-check-agreement checkbox"><input type="hidden" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="agreements[]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="N" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><input type="checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="agreements[]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="Y" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-agreement checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['is_accept_product_agreements_checked']->value) {?>checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
');"<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "vendor_terms_href", null, null);?><a id="sw_elm_vendor_terms_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions_name");?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><span><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions",array("[vendor]"=>$_smarty_tpl->tpl_vars['vendor']->value['company'],"[terms_href]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'vendor_terms_href')));?>
</span></label>
        </div>
        <div class="hidden" id="elm_vendor_terms_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['vendor']->value['terms'];?>

        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_terms/hooks/checkout/terms_and_conditions_extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['vendor_terms']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vendor_terms']->value, 'vendor');
$_smarty_tpl->tpl_vars['vendor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vendor']->value) {
$_smarty_tpl->tpl_vars['vendor']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('const_suffix', (($tmp = $_smarty_tpl->tpl_vars['const_suffix']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('is_accept_product_agreements_checked', ($_smarty_tpl->tpl_vars['user_data']->value["product_agreements_".((string)$_smarty_tpl->tpl_vars['const_suffix']->value)."_".((string)$_smarty_tpl->tpl_vars['vendor']->value['company_id'])] === "Y"));?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <label for="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-check-agreement checkbox"><input type="hidden" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="agreements[]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="N" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><input type="checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="agreements[]" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="Y" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-agreement checkbox" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['is_accept_product_agreements_checked']->value) {?>checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>onclick="fn_check_agreements('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
');"<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="user_data.product_agreements_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['const_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
/><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "vendor_terms_href", null, null);?><a id="sw_elm_vendor_terms_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions_name");?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><span><?php echo $_smarty_tpl->__("vendor_terms.checkout_terms_and_conditions",array("[vendor]"=>$_smarty_tpl->tpl_vars['vendor']->value['company'],"[terms_href]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'vendor_terms_href')));?>
</span></label>
        </div>
        <div class="hidden" id="elm_vendor_terms_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vendor']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['vendor']->value['terms'];?>

        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
