<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:04:59
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/social_buttons/hooks/products/product_detail_bottom.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467eb419139_84249854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b070005ee71b1036b2f93675f148172394513dd' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/social_buttons/hooks/products/product_detail_bottom.post.tpl',
      1 => 1730382234,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674467eb419139_84249854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['display_button_block']->value) {?>
    <div class="ty-social-buttons">
      Share on
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provider_settings']->value, 'provider_data');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['provider_data']->value && $_smarty_tpl->tpl_vars['provider_data']->value['template'] && $_smarty_tpl->tpl_vars['provider_data']->value['data']) {?>
            <li class="ty-social-buttons__inline"><?php $_smarty_tpl->_subTemplateRender("addons/social_buttons/providers/".((string)$_smarty_tpl->tpl_vars['provider_data']->value['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/hooks/products/product_detail_bottom.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/hooks/products/product_detail_bottom.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['display_button_block']->value) {?>
    <div class="ty-social-buttons">
      Share on
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provider_settings']->value, 'provider_data');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['provider_data']->value && $_smarty_tpl->tpl_vars['provider_data']->value['template'] && $_smarty_tpl->tpl_vars['provider_data']->value['data']) {?>
            <li class="ty-social-buttons__inline"><?php $_smarty_tpl->_subTemplateRender("addons/social_buttons/providers/".((string)$_smarty_tpl->tpl_vars['provider_data']->value['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}
