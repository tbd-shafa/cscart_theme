<?php
/* Smarty version 4.3.0, created on 2024-11-20 04:35:51
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/seo/hooks/index/meta_description.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673dd7a787ffc7_55371703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec140980232e06da52a9bf7382f0aaaf4fc4b7df' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/seo/hooks/index/meta_description.override.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673dd7a787ffc7_55371703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['search']->value && ($_smarty_tpl->tpl_vars['meta_description']->value || $_smarty_tpl->tpl_vars['location_data']->value['meta_description'])) {?>
<meta name="description" content="<?php echo htmlspecialchars((string) (($tmp = html_entity_decode($_smarty_tpl->tpl_vars['meta_description']->value,(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8") ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) fn_get_seo_page_title($_smarty_tpl->tpl_vars['search']->value), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/index/meta_description.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/hooks/index/meta_description.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['search']->value && ($_smarty_tpl->tpl_vars['meta_description']->value || $_smarty_tpl->tpl_vars['location_data']->value['meta_description'])) {?>
<meta name="description" content="<?php echo htmlspecialchars((string) (($tmp = html_entity_decode($_smarty_tpl->tpl_vars['meta_description']->value,(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8") ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) fn_get_seo_page_title($_smarty_tpl->tpl_vars['search']->value), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
}
}
}
