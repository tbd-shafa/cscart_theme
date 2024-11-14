<?php
/* Smarty version 4.3.0, created on 2024-11-13 21:33:09
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/pickers/orders/js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67358b952a0a72_35348284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1935516507e5d41230c4e54a2c5de486be1e9c' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/pickers/orders/js.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/status.tpl' => 1,
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_67358b952a0a72_35348284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('id','status','customer','date','total','edit','remove'));
if ($_smarty_tpl->tpl_vars['view_mode']->value == "simple") {?>
<span <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone<?php }
if ($_smarty_tpl->tpl_vars['clone']->value || $_smarty_tpl->tpl_vars['hidden']->value) {?> hidden<?php }?>"><?php if (!$_smarty_tpl->tpl_vars['first_item']->value) {?><span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">, </span><?php }?>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
</span>
<?php } else { ?>
<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <td data-th="<?php echo $_smarty_tpl->__("id");?>
">
        <a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_id']->value)), ENT_QUOTES, 'UTF-8');?>
">&nbsp;<span>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;</a></td>
    <td data-th="<?php echo $_smarty_tpl->__("status");?>
"><?php if ($_smarty_tpl->tpl_vars['clone']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');
} else {
$_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['status']->value,'display'=>"view",'name'=>"order_statuses[".((string)$_smarty_tpl->tpl_vars['order_id']->value)."]"), 0, false);
}?></td>
    <td data-th="<?php echo $_smarty_tpl->__("customer");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value, ENT_QUOTES, 'UTF-8');?>
</td>
    <td data-th="<?php echo $_smarty_tpl->__("date");?>
">
        <a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php if ($_smarty_tpl->tpl_vars['clone']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['timestamp']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['timestamp']->value,((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');
}?></a></td>
    <td class="right" data-th="<?php echo $_smarty_tpl->__("total");?>
">
        <?php if ($_smarty_tpl->tpl_vars['clone']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');
} else {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['total']->value), 0, false);
}?></td>
    <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
    <td class="nowrap" data-th="&nbsp;">
        <div class="hidden-tools">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order_id']->value)), true);?>
</li>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['order_id']->value)."', 'o'); return false;"), true);?>
</li>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        </div>
    </td>
    <?php }?>
</tr>
<?php }
}
}
