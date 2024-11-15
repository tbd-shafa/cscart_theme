<?php
/* Smarty version 4.3.0, created on 2024-11-15 05:12:09
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/reward_points/hooks/checkout/discount_summary.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673748a9a09054_41846015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b65164d8a0821a97ca663126fea9cabf1bd4c644' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/reward_points/hooks/checkout/discount_summary.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_673748a9a09054_41846015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('points_in_use','points_lowercase','points_in_use','points_lowercase'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']) {
$_smarty_tpl->_assignInScope('_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <tr class="ty-checkout-summary__order_discount">
        <td class="ty-checkout-summary__item">
            <?php echo $_smarty_tpl->__("points_in_use");?>
 (<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
)
        </td>
        <td class="ty-checkout-summary__item ty-right discount-price">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout_totals,subtotal_price_in_points,checkout_steps,litecheckout_form".((string)$_smarty_tpl->tpl_vars['additional_ids']->value)), 0, false);
?>
        </td>
    </tr>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/discount_summary.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/discount_summary.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']) {
$_smarty_tpl->_assignInScope('_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <tr class="ty-checkout-summary__order_discount">
        <td class="ty-checkout-summary__item">
            <?php echo $_smarty_tpl->__("points_in_use");?>
 (<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
)
        </td>
        <td class="ty-checkout-summary__item ty-right discount-price">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout_totals,subtotal_price_in_points,checkout_steps,litecheckout_form".((string)$_smarty_tpl->tpl_vars['additional_ids']->value)), 0, true);
?>
        </td>
    </tr>
<?php }
}
}
}
