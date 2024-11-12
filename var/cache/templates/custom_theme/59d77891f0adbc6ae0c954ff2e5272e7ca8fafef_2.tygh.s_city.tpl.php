<?php
/* Smarty version 4.3.0, created on 2024-11-11 21:09:16
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/profile_fields/s_city.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6732e2fc99a127_74421827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d77891f0adbc6ae0c954ff2e5272e7ca8fafef' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/profile_fields/s_city.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6732e2fc99a127_74421827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('city','city'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('city', $_smarty_tpl->tpl_vars['user_data']->value['s_city']);
$_smarty_tpl->_assignInScope('state_descr', $_smarty_tpl->tpl_vars['user_data']->value['s_state_descr']);
$_smarty_tpl->_assignInScope('state', $_smarty_tpl->tpl_vars['user_data']->value['s_state']);
$_smarty_tpl->_assignInScope('zipcode', $_smarty_tpl->tpl_vars['user_data']->value['s_zipcode']);
$_smarty_tpl->_assignInScope('country', $_smarty_tpl->tpl_vars['user_data']->value['s_country']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:location_city"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:location_city"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="litecheckout__field litecheckout__field--fill cm-field-container"
    data-ca-error-message-target-method="append">
    <input type="text"
           data-ca-lite-checkout-field="user_data.s_city"
           id="litecheckout_city"
           data-ca-lite-checkout-element="city"
           data-ca-lite-checkout-last-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
           placeholder=" "
           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="litecheckout__input"
    />
    <label class="litecheckout__label cm-required" for="litecheckout_city"><?php echo $_smarty_tpl->__("city");?>
 </label>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:location_city"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields/s_city.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/profile_fields/s_city.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('city', $_smarty_tpl->tpl_vars['user_data']->value['s_city']);
$_smarty_tpl->_assignInScope('state_descr', $_smarty_tpl->tpl_vars['user_data']->value['s_state_descr']);
$_smarty_tpl->_assignInScope('state', $_smarty_tpl->tpl_vars['user_data']->value['s_state']);
$_smarty_tpl->_assignInScope('zipcode', $_smarty_tpl->tpl_vars['user_data']->value['s_zipcode']);
$_smarty_tpl->_assignInScope('country', $_smarty_tpl->tpl_vars['user_data']->value['s_country']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:location_city"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:location_city"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="litecheckout__field litecheckout__field--fill cm-field-container"
    data-ca-error-message-target-method="append">
    <input type="text"
           data-ca-lite-checkout-field="user_data.s_city"
           id="litecheckout_city"
           data-ca-lite-checkout-element="city"
           data-ca-lite-checkout-last-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
           placeholder=" "
           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="litecheckout__input"
    />
    <label class="litecheckout__label cm-required" for="litecheckout_city"><?php echo $_smarty_tpl->__("city");?>
 </label>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:location_city"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
