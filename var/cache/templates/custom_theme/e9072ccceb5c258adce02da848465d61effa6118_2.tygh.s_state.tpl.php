<?php
/* Smarty version 4.3.0, created on 2024-11-15 05:12:09
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/profile_fields/s_state.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673748a93b1d79_22005024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9072ccceb5c258adce02da848465d61effa6118' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/components/profile_fields/s_state.tpl',
      1 => 1731408631,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673748a93b1d79_22005024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('select_state','state','select_state','state'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('state_descr', $_smarty_tpl->tpl_vars['user_data']->value['s_state_descr']);
$_smarty_tpl->_assignInScope('state', $_smarty_tpl->tpl_vars['user_data']->value['s_state']);
$_smarty_tpl->_assignInScope('country', $_smarty_tpl->tpl_vars['user_data']->value['s_country']);?>
<div class="col-lg-12 col-md-12">
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:location_state"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:location_state"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="litecheckout__field litecheckout__field--xsmall cm-field-container"
    data-ca-error-message-target-method="append">
    <p style="font-size: 16px;">State<span style="color:red;">*</span></p>   
    <select data-ca-lite-checkout-field="user_data.s_state"
            class="cm-state cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
            data-ca-lite-checkout-element="state"
            data-ca-lite-checkout-is-state-code-container="true"
            data-ca-lite-checkout-last-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
            id="litecheckout_state"
    >
        <option disabled data-ca-rebuild-states="skip" <?php if (!$_smarty_tpl->tpl_vars['state']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->__("select_state");?>
</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['country']->value], 'country_state');
$_smarty_tpl->tpl_vars['country_state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country_state']->value) {
$_smarty_tpl->tpl_vars['country_state']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country_state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['country_state']->value['code'] === $_smarty_tpl->tpl_vars['state']->value) {?>selected<?php }?>
            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country_state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <input type="text"
           data-ca-lite-checkout-field="user_data.s_state"
           id="litecheckout_state_d"
           data-ca-lite-checkout-element="state"
           data-ca-lite-checkout-is-state-code-container="false"
           data-ca-lite-checkout-last-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
           placeholder=" "
           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="cm-state cm-location-shipping litecheckout__input hidden"
           disabled
    />

    <label class="litecheckout__label <?php if ($_smarty_tpl->tpl_vars['profile_required']->value === smarty_modifier_enum("YesNo::YES")) {?>cm-required<?php }?>" for="litecheckout_state<?php if ((isset($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['country']->value]))) {?>_d<?php }?>"><?php echo $_smarty_tpl->__("state");?>
 </label>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:location_state"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields/s_state.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/profile_fields/s_state.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('state_descr', $_smarty_tpl->tpl_vars['user_data']->value['s_state_descr']);
$_smarty_tpl->_assignInScope('state', $_smarty_tpl->tpl_vars['user_data']->value['s_state']);
$_smarty_tpl->_assignInScope('country', $_smarty_tpl->tpl_vars['user_data']->value['s_country']);?>
<div class="col-lg-12 col-md-12">
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"checkout:location_state"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"checkout:location_state"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="litecheckout__field litecheckout__field--xsmall cm-field-container"
    data-ca-error-message-target-method="append">
    <p style="font-size: 16px;">State<span style="color:red;">*</span></p>   
    <select data-ca-lite-checkout-field="user_data.s_state"
            class="cm-state cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
            data-ca-lite-checkout-element="state"
            data-ca-lite-checkout-is-state-code-container="true"
            data-ca-lite-checkout-last-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
            id="litecheckout_state"
    >
        <option disabled data-ca-rebuild-states="skip" <?php if (!$_smarty_tpl->tpl_vars['state']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->__("select_state");?>
</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['country']->value], 'country_state');
$_smarty_tpl->tpl_vars['country_state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country_state']->value) {
$_smarty_tpl->tpl_vars['country_state']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country_state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['country_state']->value['code'] === $_smarty_tpl->tpl_vars['state']->value) {?>selected<?php }?>
            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country_state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <input type="text"
           data-ca-lite-checkout-field="user_data.s_state"
           id="litecheckout_state_d"
           data-ca-lite-checkout-element="state"
           data-ca-lite-checkout-is-state-code-container="false"
           data-ca-lite-checkout-last-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
           placeholder=" "
           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="cm-state cm-location-shipping litecheckout__input hidden"
           disabled
    />

    <label class="litecheckout__label <?php if ($_smarty_tpl->tpl_vars['profile_required']->value === smarty_modifier_enum("YesNo::YES")) {?>cm-required<?php }?>" for="litecheckout_state<?php if ((isset($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['country']->value]))) {?>_d<?php }?>"><?php echo $_smarty_tpl->__("state");?>
 </label>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"checkout:location_state"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div><?php }
}
}
