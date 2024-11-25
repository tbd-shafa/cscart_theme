<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:04:21
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/vendor_communication/hooks/orders/details.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467c567bd60_86627230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '605cb31b6b96fddb683da0c59c3a172c200d7c6b' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/vendor_communication/hooks/orders/details.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl' => 2,
    'tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl' => 2,
  ),
),false)) {
function content_674467c567bd60_86627230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->_assignInScope('vendor_name', fn_get_company_name($_smarty_tpl->tpl_vars['order_info']->value['company_id'],'',(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),array("use_i18n_fields"=>true)));?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null),'object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id'],'vendor_name'=>(($tmp = $_smarty_tpl->tpl_vars['vendor_name']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'redirect_url'=>((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])."&selected_section=vendor_communication",'no_ajax'=>true,'product'=>false), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/orders/details.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/orders/details.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->_assignInScope('vendor_name', fn_get_company_name($_smarty_tpl->tpl_vars['order_info']->value['company_id'],'',(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),array("use_i18n_fields"=>true)));?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null),'object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id'],'vendor_name'=>(($tmp = $_smarty_tpl->tpl_vars['vendor_name']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'redirect_url'=>((string)$_smarty_tpl->tpl_vars['config']->value['current_url'])."&selected_section=vendor_communication",'no_ajax'=>true,'product'=>false), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
}
