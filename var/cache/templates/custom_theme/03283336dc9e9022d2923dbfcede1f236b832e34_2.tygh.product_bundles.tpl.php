<?php
/* Smarty version 4.3.0, created on 2024-11-22 01:30:33
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_bundles/blocks/product_bundles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67404f39308db8_43518915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03283336dc9e9022d2923dbfcede1f236b832e34' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_bundles/blocks/product_bundles.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67404f39308db8_43518915 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['product_bundles']['show_bundles'] === "in_a_product_tab") {?>
    <?php $_smarty_tpl->_assignInScope('show_on_tab', false);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['block_id'] === $_smarty_tpl->tpl_vars['block']->value['block_id']) {?>
            <?php $_smarty_tpl->_assignInScope('show_on_tab', true);?>
            <?php $_smarty_tpl->_assignInScope('show_in_popup', ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup'] === smarty_modifier_enum("YesNo::YES")));?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/blocks/product_bundles.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/blocks/product_bundles.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['product_bundles']['show_bundles'] === "in_a_product_tab") {?>
    <?php $_smarty_tpl->_assignInScope('show_on_tab', false);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['block_id'] === $_smarty_tpl->tpl_vars['block']->value['block_id']) {?>
            <?php $_smarty_tpl->_assignInScope('show_on_tab', true);?>
            <?php $_smarty_tpl->_assignInScope('show_in_popup', ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup'] === smarty_modifier_enum("YesNo::YES")));?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_REQUEST['product_id'],'show_on_tab'=>$_smarty_tpl->tpl_vars['show_on_tab']->value,'show_in_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'enable_padding'=>false,'show_on_products_page'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
