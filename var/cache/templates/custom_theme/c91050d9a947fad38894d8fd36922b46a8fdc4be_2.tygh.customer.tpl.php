<?php
/* Smarty version 4.3.0, created on 2024-11-15 03:08:19
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/steps/customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67372ba3b3ff42_50800368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c91050d9a947fad38894d8fd36922b46a8fdc4be' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/steps/customer.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/customer/title.tpl' => 2,
    'tygh:views/checkout/components/customer/address.tpl' => 2,
    'tygh:views/checkout/components/customer/information.tpl' => 2,
    'tygh:views/checkout/components/customer_notes.tpl' => 2,
  ),
),false)) {
function content_67372ba3b3ff42_50800368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['show_title']->value || $_smarty_tpl->tpl_vars['show_address']->value || $_smarty_tpl->tpl_vars['show_information']->value || $_smarty_tpl->tpl_vars['show_notes']->value) {?>
    <div class="litecheckout__container litecheckout__step">
        <div class="litecheckout__section">
            <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_address']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer/address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_information']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_notes']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer_notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/steps/customer.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/steps/customer.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_title']->value || $_smarty_tpl->tpl_vars['show_address']->value || $_smarty_tpl->tpl_vars['show_information']->value || $_smarty_tpl->tpl_vars['show_notes']->value) {?>
    <div class="litecheckout__container litecheckout__step">
        <div class="litecheckout__section">
            <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_address']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer/address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_information']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['show_notes']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/customer_notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        </div>
    </div>
<?php }
}
}
}
