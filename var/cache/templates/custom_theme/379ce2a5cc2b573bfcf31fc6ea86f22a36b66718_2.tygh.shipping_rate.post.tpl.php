<?php
/* Smarty version 4.3.0, created on 2024-11-14 22:17:58
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/store_locator/hooks/checkout/shipping_rate.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6736e796195792_05288331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '379ce2a5cc2b573bfcf31fc6ea86f22a36b66718' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/store_locator/hooks/checkout/shipping_rate.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 4,
  ),
),false)) {
function content_6736e796195792_05288331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('store_locator.shipping_price_from','store_locator.shipping_price_from_to','store_locator.shipping_price_from','store_locator.shipping_price_from_to'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ((isset($_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_from'])) && !(isset($_smarty_tpl->tpl_vars['shipping']->value['free_shipping']))) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "formatted_min_rate", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_from'],'class'=>"ty-nowrap"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_to']))) {?>
        <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->__("store_locator.shipping_price_from",array('[price]'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'formatted_min_rate'))) ,false ,2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "formatted_max_rate", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_to'],'class'=>"ty-nowrap"), 0, true);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->__("store_locator.shipping_price_from_to",array('[from_price]'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'formatted_min_rate'),'[to_price]'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'formatted_max_rate'))) ,false ,2);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/checkout/shipping_rate.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/hooks/checkout/shipping_rate.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ((isset($_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_from'])) && !(isset($_smarty_tpl->tpl_vars['shipping']->value['free_shipping']))) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "formatted_min_rate", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_from'],'class'=>"ty-nowrap"), 0, true);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_to']))) {?>
        <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->__("store_locator.shipping_price_from",array('[price]'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'formatted_min_rate'))) ,false ,2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "formatted_max_rate", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['pickup_rate_to'],'class'=>"ty-nowrap"), 0, true);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_assignInScope('rate', $_smarty_tpl->__("store_locator.shipping_price_from_to",array('[from_price]'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'formatted_min_rate'),'[to_price]'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'formatted_max_rate'))) ,false ,2);?>
    <?php }
}
}
}
}
