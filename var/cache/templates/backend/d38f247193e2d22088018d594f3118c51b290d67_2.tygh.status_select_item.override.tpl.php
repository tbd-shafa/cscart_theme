<?php
/* Smarty version 4.3.0, created on 2024-11-13 21:33:06
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_select_item.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67358b92995b91_66770906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd38f247193e2d22088018d594f3118c51b290d67' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_select_item.override.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67358b92995b91_66770906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
if ($_smarty_tpl->tpl_vars['status_id']->value === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <a data-ca-target-id="disapproval_reason_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
       href="#"
       class="cm-dialog-opener cm-dialog-auto-height status-link status-link-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 status-link--type status-link--type-products-manage <?php if ($_smarty_tpl->tpl_vars['product']->value['status'] === $_smarty_tpl->tpl_vars['status_id']->value) {?>active<?php }?>"
       onclick="if (Tygh.$(this).parent().hasClass('disabled')) { Tygh.$(this).removeClass('cm-dialog-opener'); return false} else { Tygh.$(this).addClass('cm-dialog-opener'); }"
    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
<?php }
}
}
