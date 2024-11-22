<?php
/* Smarty version 4.3.0, created on 2024-11-22 05:11:35
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/tags/blocks/product_tabs/tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67408307608642_44373968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ac3af9476f2bb29ea5fa4f62d89ba539dc3124' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/tags/blocks/product_tabs/tags.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/tags/views/tags/components/tags.tpl' => 2,
  ),
),false)) {
function content_67408307608642_44373968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products'] == "Y") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['product']->value,'object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'object_type'=>"P"), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/blocks/product_tabs/tags.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/blocks/product_tabs/tags.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products'] == "Y") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['product']->value,'object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'object_type'=>"P"), 0, true);
}
}
}
}
