<?php
/* Smarty version 4.3.0, created on 2024-11-20 05:21:11
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/pickers/orders/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673de24781f5d1_34134162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8679f399308e44b6f993fb7434d1ae0c1d021888' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/pickers/orders/picker.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:pickers/orders/js.tpl' => 5,
  ),
),false)) {
function content_673de24781f5d1_34134162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_orders','clear','add_orders','id','status','customer','date','total','no_items'));
$_smarty_tpl->_assignInScope('rnd', rand());
$_smarty_tpl->_assignInScope('data_id', ((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value));
$_smarty_tpl->_assignInScope('view_mode', (($tmp = $_smarty_tpl->tpl_vars['view_mode']->value ?? null)===null||$tmp==='' ? "mixed" ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "simple") {?>
    <?php $_smarty_tpl->_assignInScope('display', "simple");?>
    <?php $_smarty_tpl->_assignInScope('max_displayed_qty', "50");
}?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value && !is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('item_ids', smarty_modifier_explode(",",$_smarty_tpl->tpl_vars['item_ids']->value));
}?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>
    <div class="clearfix">
        <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
            <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="buttons-container pull-right"><?php }
if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>[<?php }?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("orders.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&aoc=".((string)$_smarty_tpl->tpl_vars['aoc']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)."&max_displayed_qty=".((string)$_smarty_tpl->tpl_vars['max_displayed_qty']->value)),'but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_orders") ?? null : $tmp),'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"btn cm-dialog-opener",'but_icon'=>"icon-plus"), 0, false);
?>

            <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "simple") {?>
                <span id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_clear" class="reload-container<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> hidden<?php }?>">
                    <?php ob_start();
echo htmlspecialchars((string) fn_url("orders.manage?order_id="), ENT_QUOTES, 'UTF-8');
$_prefixVariable13=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['data_id']->value)."', 'delete_all', 'o'); Tygh."."$".".cePicker('check_items_qty', '".((string)$_smarty_tpl->tpl_vars['data_id']->value)."', '".$_prefixVariable13."', ".((string)$_smarty_tpl->tpl_vars['max_displayed_qty']->value)."); return false;",'but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("clear") ?? null : $tmp),'but_role'=>"action",'but_icon'=>"icon-repeat",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value)), 0, true);
?>
                </span>
            <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>]<?php }
if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
        <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_orders") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "simple") {?>
    <input id="o<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids" type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" />
    <span id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/orders/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('order_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."order_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'clone'=>true), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'o', false, NULL, 'items', array (
  'iteration' => true,
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['index'];
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['iteration'] : null) <= $_smarty_tpl->tpl_vars['max_displayed_qty']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/orders/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('order_id'=>$_smarty_tpl->tpl_vars['o']->value,'first_item'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] : null),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value), 0, true);
?>
            <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/orders/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('order_id'=>$_smarty_tpl->tpl_vars['o']->value,'first_item'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_items']->value['first'] : null),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'hidden'=>true), 0, true);
?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </span>
    <span id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_details"<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item_ids']->value) <= $_smarty_tpl->tpl_vars['max_displayed_qty']->value) {?> class="hidden"<?php }?>><a href="<?php echo htmlspecialchars((string) fn_url("orders.manage?order_id="), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars((string) implode(',',$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>">..</a></span>
    <span id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>><?php echo $_smarty_tpl->tpl_vars['no_item_text']->value;?>
</span>

<?php } elseif ($_smarty_tpl->tpl_vars['view_mode']->value != "button") {?>

    <input id="o<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids" type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars((string) implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" />
    <div class="clearfix"></div>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive">
            <thead>
                <tr>
                    <th width="10%"><?php echo $_smarty_tpl->__("id");?>
</th>
                    <th width="15%"><?php echo $_smarty_tpl->__("status");?>
</th>
                    <th width="25%"><?php echo $_smarty_tpl->__("customer");?>
</th>
                    <th width="25%"><?php echo $_smarty_tpl->__("date");?>
</th>
                    <th width="24%" class="right"><?php echo $_smarty_tpl->__("total");?>
</th>
                    <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?><th>&nbsp;</th><?php }?>
                </tr>
            </thead>
            <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/orders/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('order_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."order_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'status'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."status".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'customer'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."customer".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'timestamp'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."timestamp".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'total'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."total".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'clone'=>true), 0, true);
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('order_info', fn_get_order_short_info($_smarty_tpl->tpl_vars['o']->value));?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/orders/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('order_id'=>$_smarty_tpl->tpl_vars['o']->value,'status'=>$_smarty_tpl->tpl_vars['order_info']->value['status'],'customer'=>((string)$_smarty_tpl->tpl_vars['order_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['order_info']->value['lastname']),'timestamp'=>$_smarty_tpl->tpl_vars['order_info']->value['timestamp'],'total'=>$_smarty_tpl->tpl_vars['order_info']->value['total'],'holder'=>$_smarty_tpl->tpl_vars['data_id']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
            <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
            <tr>
                <td colspan="<?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>6<?php } else { ?>5<?php }?>" data-th="&nbsp;" class="table-responsive__td--hide-th-mobile"><p class="no-items">§12<?php echo (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp);?>
</p></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php }
}
}
