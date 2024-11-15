<?php
/* Smarty version 4.3.0, created on 2024-11-14 20:17:42
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/common/status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6736cb66786c28_57777614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cb69879cfbe6b1fa0801c5c5ff7115a1392e6ec' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/common/status.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6736cb66786c28_57777614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->tpl_vars['order_status_descr']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['status_type']->value) {
$_smarty_tpl->_assignInScope('status_type', (defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null));
}?>
    <?php $_smarty_tpl->_assignInScope('order_status_descr', fn_get_simple_statuses($_smarty_tpl->tpl_vars['status_type']->value,true,true));
}?>

<?php if ($_smarty_tpl->tpl_vars['display']->value == "view") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_status_descr']->value[$_smarty_tpl->tpl_vars['status']->value], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['display']->value == "select") {
echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'id'=>$_smarty_tpl->tpl_vars['select_id']->value),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['display']->value == "checkboxes") {?><div class="ty-status-info"><?php echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'columns'=>4,'class'=>$_smarty_tpl->tpl_vars['checkboxes_meta']->value),$_smarty_tpl);?>
</div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/status.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/status.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->tpl_vars['order_status_descr']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['status_type']->value) {
$_smarty_tpl->_assignInScope('status_type', (defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null));
}?>
    <?php $_smarty_tpl->_assignInScope('order_status_descr', fn_get_simple_statuses($_smarty_tpl->tpl_vars['status_type']->value,true,true));
}?>

<?php if ($_smarty_tpl->tpl_vars['display']->value == "view") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_status_descr']->value[$_smarty_tpl->tpl_vars['status']->value], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['display']->value == "select") {
echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'id'=>$_smarty_tpl->tpl_vars['select_id']->value),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['display']->value == "checkboxes") {?><div class="ty-status-info"><?php echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'columns'=>4,'class'=>$_smarty_tpl->tpl_vars['checkboxes_meta']->value),$_smarty_tpl);?>
</div><?php }
}
}
}
