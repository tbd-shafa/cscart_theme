<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:04:21
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/vendor_communication/hooks/orders/details_bullets.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467c5401581_68797648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb073f0a97ee5d44a0b7f5090e7ae35e98d88aff' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/vendor_communication/hooks/orders/details_bullets.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 2,
  ),
),false)) {
function content_674467c5401581_68797648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.start_communication','vendor_communication.start_communication'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_order'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("vendor_communication.start_communication"),'object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'meta'=>"ty-btn ty-btn__text",'show_form'=>false), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/orders/details_bullets.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/orders/details_bullets.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_order'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("vendor_communication.start_communication"),'object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'meta'=>"ty-btn ty-btn__text",'show_form'=>false), 0, true);
}
}
}
}
