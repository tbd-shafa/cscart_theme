<?php
/* Smarty version 4.3.0, created on 2024-11-19 20:52:40
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/products/products_small_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673d6b18216d96_44651700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af97b688d9b3c37040ce2e53cf3bd005a0009b7c' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/blocks/products/products_small_items.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/small_items.tpl' => 2,
  ),
),false)) {
function content_673d6b18216d96_44651700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}?>

<?php $_smarty_tpl->_assignInScope('_show_name', "true");?>

<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/small_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number'],'show_name'=>$_smarty_tpl->tpl_vars['_show_name']->value,'show_trunc_name'=>$_smarty_tpl->tpl_vars['_show_trunc_name']->value,'show_price'=>false,'show_rating'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'show_list_buttons'=>false,'add_to_cart_meta'=>"text-button-add",'but_role'=>"text"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_small_items.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_small_items.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}?>

<?php $_smarty_tpl->_assignInScope('_show_name', "true");?>

<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/small_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number'],'show_name'=>$_smarty_tpl->tpl_vars['_show_name']->value,'show_trunc_name'=>$_smarty_tpl->tpl_vars['_show_trunc_name']->value,'show_price'=>false,'show_rating'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'show_list_buttons'=>false,'add_to_cart_meta'=>"text-button-add",'but_role'=>"text"), 0, true);
}
}
}
