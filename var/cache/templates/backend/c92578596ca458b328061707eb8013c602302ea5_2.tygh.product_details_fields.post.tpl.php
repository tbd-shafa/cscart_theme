<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:36
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406760b2ad96_16546720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c92578596ca458b328061707eb8013c602302ea5' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67406760b2ad96_16546720 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('approved','yes','pending','no'));
if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation'] == "Y" || $_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation_edit'] == "Y")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("approved");?>
:</label>
        <div class="controls">
        	<div class="text-type-value">
        		<?php if ($_smarty_tpl->tpl_vars['product_data']->value['approved'] == "Y") {
echo $_smarty_tpl->__("yes");
} elseif ($_smarty_tpl->tpl_vars['product_data']->value['approved'] == "P") {
echo $_smarty_tpl->__("pending");
} else {
echo $_smarty_tpl->__("no");
}?>
        	</div>
        </div>
    </div>
<?php }
}
}
