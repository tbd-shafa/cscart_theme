<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:04:21
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/vendor_communication/hooks/orders/tabs.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467c5630a12_61898109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8091b2a0a79e704c9d37ebfa721146a8754cfe49' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/vendor_communication/hooks/orders/tabs.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/view.tpl' => 2,
  ),
),false)) {
function content_674467c5630a12_61898109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value) {?>
    <div id="content_vendor_communication" data-ca-accordion-is-active-scroll-to-elm="0">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread_id'=>$_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value['thread_id'],'messages'=>$_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value['messages'],'redirect_url'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=vendor_communication"),'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0, false);
?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/orders/tabs.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/orders/tabs.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value) {?>
    <div id="content_vendor_communication" data-ca-accordion-is-active-scroll-to-elm="0">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('thread_id'=>$_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value['thread_id'],'messages'=>$_smarty_tpl->tpl_vars['vendor_communication_order_thread']->value['messages'],'redirect_url'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=vendor_communication"),'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0, true);
?>
    </div>
<?php }
}
}
}
