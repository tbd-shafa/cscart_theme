<?php
/* Smarty version 4.3.0, created on 2024-11-21 00:19:23
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_variations/hooks/products/add_to_cart.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673eed0bcc7e45_33892025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07215840a3346bb25e8d558847285bec51a38752' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_variations/hooks/products/add_to_cart.override.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_673eed0bcc7e45_33892025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.select_variation','product_variations.select_variation'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_select_variations_button', (($tmp = $_smarty_tpl->tpl_vars['show_select_variations_button']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['has_child_variations'] && $_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:add_to_cart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php ob_start();
echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable24=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_text'=>$_smarty_tpl->__("product_variations.select_variation"),'but_name'=>'','but_href'=>$_prefixVariable24,'but_role'=>$_smarty_tpl->tpl_vars['opt_but_role']->value,'but_meta'=>"ty-btn__primary ty-btn__big"), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/add_to_cart.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/add_to_cart.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_select_variations_button', (($tmp = $_smarty_tpl->tpl_vars['show_select_variations_button']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['has_child_variations'] && $_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:add_to_cart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php ob_start();
echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable25=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_text'=>$_smarty_tpl->__("product_variations.select_variation"),'but_name'=>'','but_href'=>$_prefixVariable25,'but_role'=>$_smarty_tpl->tpl_vars['opt_but_role']->value,'but_meta'=>"ty-btn__primary ty-btn__big"), 0, true);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
