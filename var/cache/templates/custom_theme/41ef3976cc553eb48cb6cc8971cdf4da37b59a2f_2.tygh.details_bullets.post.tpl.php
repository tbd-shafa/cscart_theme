<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:04:21
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/discussion/hooks/orders/details_bullets.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467c5422fa3_70284918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41ef3976cc553eb48cb6cc8971cdf4da37b59a2f' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/discussion/hooks/orders/details_bullets.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_674467c5422fa3_70284918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('start_communication','start_communication'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion($_smarty_tpl->tpl_vars['order_info']->value['order_id'],"O"));
if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['order_initiate'] == "Y" && !$_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['config']->value['discussion']['enable_order_communication']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__text",'but_role'=>"text",'but_text'=>$_smarty_tpl->__("start_communication"),'but_href'=>"orders.initiate_discussion?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-chat"), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/orders/details_bullets.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/orders/details_bullets.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion($_smarty_tpl->tpl_vars['order_info']->value['order_id'],"O"));
if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['order_initiate'] == "Y" && !$_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['config']->value['discussion']['enable_order_communication']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__text",'but_role'=>"text",'but_text'=>$_smarty_tpl->__("start_communication"),'but_href'=>"orders.initiate_discussion?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-chat"), 0, true);
}
}
}
}
