<?php
/* Smarty version 4.3.0, created on 2024-11-13 21:33:09
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/products_select_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67358b95144812_68169626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c8fec535f3e1552d313bbb001a3f759ee834d95' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/products_select_fields.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
  ),
),false)) {
function content_67358b95144812_68169626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.sort_by.php','function'=>'smarty_modifier_sort_by',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),));
?>
<input type="hidden" name="selected_fields[object]" value="product" />
<?php echo smarty_function_math(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>smarty_modifier_count($_smarty_tpl->tpl_vars['selected_fields']->value),'c'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "4" ?? null : $tmp)),$_smarty_tpl);?>


<?php echo smarty_function_split(array('data'=>smarty_modifier_sort_by($_smarty_tpl->tpl_vars['selected_fields']->value,"text"),'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_selected_fields",'vertical_delimition'=>false,'size_is_horizontal'=>true),$_smarty_tpl);?>


<p>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_target'=>"s",'style'=>"links"), 0, false);
?>
</p>
<div class="table-wrapper">
    <table cellpadding="10" width="100%">
    <tr valign="top">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_selected_fields']->value, 'sfs');
$_smarty_tpl->tpl_vars['sfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sfs']->value) {
$_smarty_tpl->tpl_vars['sfs']->do_else = false;
?>
            <td class="products-select-fields__column">
            <ul class="unstyled">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sfs']->value, 'sf', false, NULL, 'foreach_sfs', array (
));
$_smarty_tpl->tpl_vars['sf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sf']->value) {
$_smarty_tpl->tpl_vars['sf']->do_else = false;
?>
                    <li>
                        <?php if ($_smarty_tpl->tpl_vars['sf']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['sf']->value['disabled'] == "Y") {?><input type="hidden" value="Y" name="selected_fields<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sf']->value['name'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                            <label class="checkbox" for="elm_<?php echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['sf']->value['name']), ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" value="Y" name="selected_fields<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sf']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="elm_<?php echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['sf']->value['name']), ENT_QUOTES, 'UTF-8');?>
" checked="checked" <?php if ($_smarty_tpl->tpl_vars['sf']->value['disabled'] == "Y") {?>disabled="disabled"<?php }?> class="cm-item-s" />
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sf']->value['text'], ENT_QUOTES, 'UTF-8');?>
</label>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            </td>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr></table>
</div><?php }
}
