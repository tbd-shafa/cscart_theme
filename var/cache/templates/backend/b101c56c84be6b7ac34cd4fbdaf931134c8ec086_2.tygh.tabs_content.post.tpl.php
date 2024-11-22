<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/reward_points/hooks/products/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067612802f4_42232608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b101c56c84be6b7ac34cd4fbdaf931134c8ec086' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/reward_points/hooks/products/tabs_content.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
  ),
),false)) {
function content_674067612802f4_42232608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points','pay_by_points','override_per','price_in_points','earned_points','override_gc_points','usergroup','amount','amount_type','usergroup','amount','amount_type','absolute','points_lower','percent'));
$_smarty_tpl->_assignInScope('data', $_smarty_tpl->tpl_vars['product_data']->value);?>

<div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "reward_points") {?>hidden<?php }?>" id="content_reward_points">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("price_in_points"),'target'=>"#reward_points_products_hook"), 0, false);
?>
    <div id="reward_points_products_hook" class="in collapse">
        <fieldset>
        <?php $_smarty_tpl->_assignInScope('is_auto', $_smarty_tpl->tpl_vars['addons']->value['reward_points']['auto_price_in_points']);?>
            <div class="control-group">
                <label class="control-label" for="pd_is_pbp"><?php echo $_smarty_tpl->__("pay_by_points");?>
</label>
                <div class="controls">
                    <input type="hidden" name="product_data[is_pbp]" value="N" />
                    <input type="checkbox" name="product_data[is_pbp]" id="pd_is_pbp" value="Y" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_pbp'] == "Y" || $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "add") {?>checked="checked"<?php }?> onclick="<?php if ($_smarty_tpl->tpl_vars['is_auto']->value != 'Y') {?>Tygh.$.disable_elms(['price_in_points'], !this.checked);<?php } else { ?>Tygh.$.disable_elms(['is_oper'], !this.checked); Tygh.$.disable_elms(['price_in_points'], !this.checked || !Tygh.$('#is_oper').prop('checked'));<?php }?>">
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['is_auto']->value == "Y") {?>
            <div class="control-group">
                <label class="control-label" for="is_oper"><?php echo $_smarty_tpl->__("override_per");?>
</label>
                <div class="controls">
                    <?php echo smarty_function_math(array('equation'=>"x*y",'x'=>(($tmp = $_smarty_tpl->tpl_vars['data']->value['price'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'y'=>$_smarty_tpl->tpl_vars['addons']->value['reward_points']['point_rate'],'assign'=>"rate_pip"),$_smarty_tpl);?>

                    <input type="hidden" id="price_in_points_exchange" value="<?php echo htmlspecialchars((string) ceil($_smarty_tpl->tpl_vars['rate_pip']->value), ENT_QUOTES, 'UTF-8');?>
" />
                    <input type="hidden" name="product_data[is_oper]" value="N" />
                    <input type="checkbox" id="is_oper" name="product_data[is_oper]" value="Y" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_oper'] == "Y") {?>checked="checked"<?php }?> onclick="Tygh.$.disable_elms(['price_in_points'], !this.checked);" <?php if ((isset($_smarty_tpl->tpl_vars['data']->value['is_pbp'])) && $_smarty_tpl->tpl_vars['data']->value['is_pbp'] != "Y") {?> disabled="disabled"<?php }?>>
                </div>
            </div>
            <?php }?>

            <div class="control-group">
                <label class="control-label" for="price_in_points"><?php echo $_smarty_tpl->__("price_in_points");?>
</label>
                <div class="controls">
                    <input type="text" id="price_in_points" name="product_data[point_price]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['data']->value['point_price'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" size="10"  <?php if ($_smarty_tpl->tpl_vars['data']->value['is_pbp'] != "Y" || ($_smarty_tpl->tpl_vars['is_auto']->value == "Y" && $_smarty_tpl->tpl_vars['data']->value['is_oper'] != "Y")) {?>disabled="disabled"<?php }?>>
                </div>
            </div>
        </fieldset>
    </div>

    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
">
            
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("earned_points"),'target'=>"#reward_points_products_earned_hook"), 0, true);
?>
    <div id="reward_points_products_earned_hook" class="in collapse">
        <fieldset>
            <input type="hidden" name="product_data[is_op]" value="N">
            <label for="rp_is_op" class="checkbox">
                <input type="checkbox" name="product_data[is_op]" id="rp_is_op" value="Y" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_op'] == "Y") {?>checked="checked"<?php }?> onclick="Tygh.$.disable_elms([<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reward_usergroups']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>'earned_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
',<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reward_usergroups']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>'points_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
',<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>], !this.checked);">
                <?php echo $_smarty_tpl->__("override_gc_points");?>

            </label>
            
            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-responsive">
                <thead class="cm-first-sibling">
                    <tr>
                        <th width="20%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
                        <th width="40%"><?php echo $_smarty_tpl->__("amount");?>
</th>
                        <th width="40%"><?php echo $_smarty_tpl->__("amount_type");?>
</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reward_usergroups']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                    <tr>
                        <td data-th="<?php echo $_smarty_tpl->__("usergroup");?>
">
                            <input type="hidden" name="product_data[reward_points][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
][usergroup_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td data-th="<?php echo $_smarty_tpl->__("amount");?>
">
                            <input type="text" id="earned_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[reward_points][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['reward_points']->value[$_smarty_tpl->tpl_vars['m']->value['usergroup_id']]['amount'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_op'] != "Y") {?>disabled="disabled"<?php }?>></td>
                        <td data-th="<?php echo $_smarty_tpl->__("amount_type");?>
">
                            <select id="points_type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[reward_points][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
][amount_type]" <?php if ($_smarty_tpl->tpl_vars['object_type']->value == (defined('PRODUCT_REWARD_POINTS') ? constant('PRODUCT_REWARD_POINTS') : null) && $_smarty_tpl->tpl_vars['data']->value['is_op'] != 'Y') {?>disabled="disabled"<?php }?>>
                                <option value="A" <?php if ($_smarty_tpl->tpl_vars['reward_points']->value[$_smarty_tpl->tpl_vars['m']->value['usergroup_id']]['amount_type'] == "A") {?>selected<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->__("points_lower");?>
)</option>
                                <option value="P" <?php if ($_smarty_tpl->tpl_vars['reward_points']->value[$_smarty_tpl->tpl_vars['m']->value['usergroup_id']]['amount_type'] == "P") {?>selected<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
                            </select>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
                </table>
            </div>
        </fieldset>
    </div>
</div><?php }
}
