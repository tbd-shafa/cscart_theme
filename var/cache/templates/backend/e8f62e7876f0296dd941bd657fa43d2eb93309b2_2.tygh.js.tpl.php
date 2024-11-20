<?php
/* Smarty version 4.3.0, created on 2024-11-20 02:32:48
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/pickers/filters/js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673dbad00e3500_13191893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8f62e7876f0296dd941bd657fa43d2eb93309b2' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/pickers/filters/js.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673dbad00e3500_13191893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('remove'));
if ($_smarty_tpl->tpl_vars['filter_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('filter', (($tmp = fn_get_product_filter_name($_smarty_tpl->tpl_vars['filter_id']->value) ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."filter".((string)$_smarty_tpl->tpl_vars['rdelim']->value) ?? null : $tmp));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('filter', $_smarty_tpl->tpl_vars['default_name']->value);
}?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>
<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?><td data-th="&nbsp;"><input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-micro"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> /></td><?php }?>
    <td data-th="&nbsp;"><a href="<?php echo htmlspecialchars((string) fn_url("product_filters.update?filter_id=".((string)$_smarty_tpl->tpl_vars['filter_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value, ENT_QUOTES, 'UTF-8');?>
</a></td>
    <td data-th="&nbsp;">
        <div class="hidden-tools">
        <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value && !$_smarty_tpl->tpl_vars['view_only']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['filter_id']->value)."', 'f'); return false;"), true);?>
</li>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        <?php }?>
        </div>
    </td>
    <?php if (!$_smarty_tpl->tpl_vars['hide_input']->value) {?>
        <input <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
</tr>
<?php } else { ?>
    <span <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item no-margin<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['first_item']->value && $_smarty_tpl->tpl_vars['single_line']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">,&nbsp;&nbsp;</span><?php }?>
    <input class="cm-picker-value-description <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> size="10" name="filter_name" readonly="readonly" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
>&nbsp;
    </span>
<?php }
}
}
