<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:04:21
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/profiles/components/profiles_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467c5442bc9_63243439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbb8d1ff03d97c1199d9109f0b8273acc93c25c1' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/profiles/components/profiles_info.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:views/profiles/components/profile_fields_info.tpl' => 6,
  ),
),false)) {
function content_674467c5442bc9_63243439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('customer_information','billing_address','billing_address','shipping_address','shipping_address','contact_information','contact_information','customer_information','billing_address','billing_address','shipping_address','shipping_address','contact_information','contact_information'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("customer_information")), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('profile_fields', fn_get_profile_fields($_smarty_tpl->tpl_vars['location']->value));
$_smarty_tpl->_assignInScope('contact_fields', $_smarty_tpl->tpl_vars['profile_fields']->value['C']);?>

<div class="ty-profiles-info">
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
        <div id="tygh_order_billing_adress" class="ty-profiles-info__item ty-profiles-info__billing">
            <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("billing_address");?>
</h5>
            <div class="ty-profiles-info__field"><?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['B'],'title'=>$_smarty_tpl->__("billing_address")), 0, false);
?></div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
        <div id="tygh_order_shipping_adress" class="ty-profiles-info__item ty-profiles-info__shipping">
            <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("shipping_address");?>
</h5>
            <div class="ty-profiles-info__field"><?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['S'],'title'=>$_smarty_tpl->__("shipping_address")), 0, true);
?></div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_fields']->value) {?>
        <div class="ty-profiles-info__item">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "contact_information", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields'=>$_smarty_tpl->tpl_vars['contact_fields']->value,'title'=>$_smarty_tpl->__("contact_information")), 0, true);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'contact_information')) != '') {?>
                <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("contact_information");?>
</h5>
                <div class="ty-profiles-info__field"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'contact_information');?>
</div>
            <?php }?>
        </div>
    <?php }?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/components/profiles_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/profiles/components/profiles_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("customer_information")), 0, true);
?>

<?php $_smarty_tpl->_assignInScope('profile_fields', fn_get_profile_fields($_smarty_tpl->tpl_vars['location']->value));
$_smarty_tpl->_assignInScope('contact_fields', $_smarty_tpl->tpl_vars['profile_fields']->value['C']);?>

<div class="ty-profiles-info">
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
        <div id="tygh_order_billing_adress" class="ty-profiles-info__item ty-profiles-info__billing">
            <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("billing_address");?>
</h5>
            <div class="ty-profiles-info__field"><?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['B'],'title'=>$_smarty_tpl->__("billing_address")), 0, true);
?></div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
        <div id="tygh_order_shipping_adress" class="ty-profiles-info__item ty-profiles-info__shipping">
            <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("shipping_address");?>
</h5>
            <div class="ty-profiles-info__field"><?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['S'],'title'=>$_smarty_tpl->__("shipping_address")), 0, true);
?></div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_fields']->value) {?>
        <div class="ty-profiles-info__item">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "contact_information", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields'=>$_smarty_tpl->tpl_vars['contact_fields']->value,'title'=>$_smarty_tpl->__("contact_information")), 0, true);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'contact_information')) != '') {?>
                <h5 class="ty-profiles-info__title"><?php echo $_smarty_tpl->__("contact_information");?>
</h5>
                <div class="ty-profiles-info__field"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'contact_information');?>
</div>
            <?php }?>
        </div>
    <?php }?>
</div>
<?php }
}
}
