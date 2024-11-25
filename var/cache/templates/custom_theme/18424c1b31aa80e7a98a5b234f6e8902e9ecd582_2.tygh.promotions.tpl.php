<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:04:21
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/orders/components/promotions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467c55f9493_83908803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18424c1b31aa80e7a98a5b234f6e8902e9ecd582' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/orders/components/promotions.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
  ),
),false)) {
function content_674467c55f9493_83908803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('promotions','coupon_code','promotions','coupon_code'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-orders-promotion">
<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("promotions")), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotions']->value, 'promotion', false, 'promotion_id', 'pfe', array (
));
$_smarty_tpl->tpl_vars['promotion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promotion_id']->value => $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->do_else = false;
?>
<h5 class="ty-orders-promotion__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h5>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['promotions'][$_smarty_tpl->tpl_vars['promotion_id']->value]['bonuses'], 'bonus');
$_smarty_tpl->tpl_vars['bonus']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bonus']->value) {
$_smarty_tpl->tpl_vars['bonus']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['bonus']->value['bonus'] == "give_coupon") {?>
    <div class="ty-control-group">
        <label class="ty-orders-promotion__coupon-title"><?php echo $_smarty_tpl->__("coupon_code");?>
:</label>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bonus']->value['coupon_code'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div class="ty-orders-promotion__description"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/promotions.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/promotions.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-orders-promotion">
<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("promotions")), 0, true);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotions']->value, 'promotion', false, 'promotion_id', 'pfe', array (
));
$_smarty_tpl->tpl_vars['promotion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promotion_id']->value => $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->do_else = false;
?>
<h5 class="ty-orders-promotion__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h5>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['promotions'][$_smarty_tpl->tpl_vars['promotion_id']->value]['bonuses'], 'bonus');
$_smarty_tpl->tpl_vars['bonus']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bonus']->value) {
$_smarty_tpl->tpl_vars['bonus']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['bonus']->value['bonus'] == "give_coupon") {?>
    <div class="ty-control-group">
        <label class="ty-orders-promotion__coupon-title"><?php echo $_smarty_tpl->__("coupon_code");?>
:</label>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bonus']->value['coupon_code'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div class="ty-orders-promotion__description"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
}
