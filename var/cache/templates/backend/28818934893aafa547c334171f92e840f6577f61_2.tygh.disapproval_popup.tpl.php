<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:18
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/components/disapproval_popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740674e1d2fc2_29829780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28818934893aafa547c334171f92e840f6577f61' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/vendor_data_premoderation/components/disapproval_popup.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740674e1d2fc2_29829780 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('disapprove_products','vendor_data_premoderation.disapproval_reason','cancel','disapprove'));
$_smarty_tpl->_assignInScope('product_id', (($tmp = $_smarty_tpl->tpl_vars['product_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
$_smarty_tpl->_assignInScope('title', (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("disapprove_products") ?? null : $tmp));?>
<div class="hidden" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" id="disapproval_reason_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="form-horizontal form-edit">
        <div class="control-group">
            <label class="control-label">
                <?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproval_reason");?>
:
            </label>
            <div class="controls">
                <textarea class="input-textarea-long premoderation-reason"
                          name="product_approval[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
][reason]"
                          cols="55"
                          rows="8"
                ></textarea>
            </div>
        </div>
    </div>
    <div class="buttons-container">
        <a class="cm-dialog-closer cm-cancel tool-link btn">
            <?php echo $_smarty_tpl->__("cancel");?>

        </a>
        <input type="submit"
               class="btn btn-primary"
               name="dispatch[premoderation.m_decline.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
               value="<?php echo $_smarty_tpl->__("disapprove");?>
"
        />
    </div>
    <!--disapproval_reason_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
