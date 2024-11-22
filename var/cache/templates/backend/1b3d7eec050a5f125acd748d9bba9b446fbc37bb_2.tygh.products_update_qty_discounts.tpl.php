<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/products_update_qty_discounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740676115d5e5_05425360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b3d7eec050a5f125acd748d9bba9b446fbc37bb' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/products_update_qty_discounts.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tooltip.tpl' => 1,
    'tygh:buttons/update_for_all.tpl' => 2,
    'tygh:buttons/clone_delete.tpl' => 1,
    'tygh:buttons/multiple_buttons.tpl' => 1,
  ),
),false)) {
function content_6740676115d5e5_05425360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
\Tygh\Languages\Helper::preloadLangVars(array('quantity','value','type','qty_discount_type_tooltip','usergroup','quantity','value','type','absolute','percent','absolute','percent','usergroup','all','quantity','value','type','absolute','percent','usergroup'));
$_smarty_tpl->_assignInScope('usergroups', fn_get_usergroups(array("type"=>"C","status"=>array("A","H"))));?>

<div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "qty_discounts") {?>hidden<?php }?>" id="content_qty_discounts">
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive" width="100%">
        <thead class="cm-first-sibling">
        <tr>
            <th width="5%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th width="20%"><?php echo $_smarty_tpl->__("value");?>
</th>
            <th width="25%"><?php echo $_smarty_tpl->__("type");
$_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->__("qty_discount_type_tooltip")), 0, false);
?></th>
            <th width="25%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
            <th width="15%">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_data']->value['prices'], 'price', false, '_key', 'prod_prices', array (
));
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_key']->value => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
        <tr class="cm-row-item">
            <td width="5%" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("quantity");?>
">
                <?php if ($_smarty_tpl->tpl_vars['price']->value['lower_limit'] == "1" && $_smarty_tpl->tpl_vars['price']->value['usergroup_id'] == "0") {?>
                    &nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['lower_limit'], ENT_QUOTES, 'UTF-8');?>

                <?php } else { ?>
                <input type="text" name="product_data[prices][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][lower_limit]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['lower_limit'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro cm-value-decimal" />
                <?php }?></td>
            <td width="20%" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("value");?>
">
                <?php if ($_smarty_tpl->tpl_vars['price']->value['lower_limit'] == "1" && $_smarty_tpl->tpl_vars['price']->value['usergroup_id'] == "0") {?>
                    &nbsp;<?php if ($_smarty_tpl->tpl_vars['price']->value['percentage_discount'] == 0) {
echo htmlspecialchars((string) fn_format_price((($tmp = $_smarty_tpl->tpl_vars['price']->value['price'] ?? null)===null||$tmp==='' ? "0.00" ?? null : $tmp),$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['percentage_discount'], ENT_QUOTES, 'UTF-8');
}?>
                <?php } else { ?>
                <input type="text" name="product_data[prices][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][price]" value="<?php if ($_smarty_tpl->tpl_vars['price']->value['percentage_discount'] == 0) {
echo htmlspecialchars((string) fn_format_price((($tmp = $_smarty_tpl->tpl_vars['price']->value['price'] ?? null)===null||$tmp==='' ? "0.00" ?? null : $tmp),$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['percentage_discount'], ENT_QUOTES, 'UTF-8');
}?>" size="10" class="input-medium cm-numeric" data-a-sep />
                <?php }?></td>
            <td width="25%" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("type");?>
">
                <?php if ($_smarty_tpl->tpl_vars['price']->value['lower_limit'] == "1" && $_smarty_tpl->tpl_vars['price']->value['usergroup_id'] == "0") {?>
                    &nbsp;<?php if ($_smarty_tpl->tpl_vars['price']->value['percentage_discount'] == 0) {
echo $_smarty_tpl->__("absolute");
} else {
echo $_smarty_tpl->__("percent");
}?>
                <?php } else { ?>
                <select class="span3" name="product_data[prices][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][type]">
                    <option value="A" <?php if ($_smarty_tpl->tpl_vars['price']->value['percentage_discount'] == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</option>
                    <option value="P" <?php if ($_smarty_tpl->tpl_vars['price']->value['percentage_discount'] != 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
                </select>
                <?php }?></td>
            <td width="25%" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("usergroup");?>
">
                <?php if ($_smarty_tpl->tpl_vars['price']->value['lower_limit'] == "1" && $_smarty_tpl->tpl_vars['price']->value['usergroup_id'] == "0") {?>
                    &nbsp;<?php echo $_smarty_tpl->__("all");?>

                <?php } else { ?>
                    <select id="usergroup_id" name="product_data[prices][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][usergroup_id]" class="span3">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_default_usergroups(), 'usergroup');
$_smarty_tpl->tpl_vars['usergroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['price']->value['usergroup_id'] != $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']) {?>
                                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } else { ?>
                                                                <?php $_smarty_tpl->_assignInScope('default_usergroup_name', $_smarty_tpl->tpl_vars['usergroup']->value['usergroup']);?>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usergroups']->value, 'usergroup');
$_smarty_tpl->tpl_vars['usergroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['price']->value['usergroup_id'] != $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']) {?>
                                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" selected="selected"><?php if ($_smarty_tpl->tpl_vars['default_usergroup_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_usergroup_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_get_usergroup_name($_smarty_tpl->tpl_vars['price']->value['usergroup_id']), ENT_QUOTES, 'UTF-8');
}?></option>
                    </select>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"price_".((string)$_smarty_tpl->tpl_vars['_key']->value),'name'=>"update_all_vendors[prices][".((string)$_smarty_tpl->tpl_vars['_key']->value)."]",'component'=>"products.price_".((string)$_smarty_tpl->tpl_vars['_key']->value)), 0, true);
?>
                    <?php $_smarty_tpl->_assignInScope('default_usergroup_name', '');?>
                <?php }?>
            </td>
            <td width="15%" class="nowrap <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
 right">
                <?php if ($_smarty_tpl->tpl_vars['price']->value['lower_limit'] == "1" && $_smarty_tpl->tpl_vars['price']->value['usergroup_id'] == "0") {?>
                &nbsp;<?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/clone_delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dummy_href'=>true,'microformats'=>"cm-delete-row",'no_confirm'=>true), 0, true);
?>
                <?php }?>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php echo smarty_function_math(array('equation'=>"x+1",'x'=>(($tmp = $_smarty_tpl->tpl_vars['_key']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),'assign'=>"new_key"),$_smarty_tpl);?>

        <tr class="<?php echo smarty_function_cycle(array('values'=>"table-row , ",'reset'=>1),$_smarty_tpl);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" id="box_add_qty_discount">
            <td width="5%" data-th="<?php echo $_smarty_tpl->__("quantity");?>
">
                <input type="text" name="product_data[prices][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][lower_limit]" value="" class="input-micro cm-value-decimal" /></td>
            <td width="20%" data-th="<?php echo $_smarty_tpl->__("value");?>
">
                <input type="text" name="product_data[prices][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][price]" value="0.00" size="10" class="input-medium cm-numeric" data-a-sep /></td>
            <td width="25%" data-th="<?php echo $_smarty_tpl->__("type");?>
">
            <select class="span3" name="product_data[prices][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][type]">
                <option value="A" selected="selected"><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</option>
                <option value="P"><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
            </select></td>
            <td width="25%" data-th="<?php echo $_smarty_tpl->__("usergroup");?>
">
                <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <select id="usergroup_id" name="product_data[prices][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][usergroup_id]" class="input-long">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_default_usergroups(), 'usergroup');
$_smarty_tpl->tpl_vars['usergroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usergroups']->value, 'usergroup');
$_smarty_tpl->tpl_vars['usergroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"price_".((string)$_smarty_tpl->tpl_vars['new_key']->value),'name'=>"update_all_vendors[prices][".((string)$_smarty_tpl->tpl_vars['new_key']->value)."]",'component'=>"products.price_".((string)$_smarty_tpl->tpl_vars['new_key']->value),'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, true);
?>
                </div>
            </td>
            <td width="15%" class="right">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"add_qty_discount"), 0, false);
?>
            </td>
        </tr>
        </tbody>
        </table>
    </div>

</div>
<?php }
}
