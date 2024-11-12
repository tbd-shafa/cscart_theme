<?php
/* Smarty version 4.3.0, created on 2024-11-11 21:11:05
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/store_locator/hooks/orders/customer_shot_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6732e3695d0e29_46409428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9db39d0e1e2d46557d9063ef527e5e973ef6ddb' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/store_locator/hooks/orders/customer_shot_info.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_6732e3695d0e29_46409428 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('store_locator.pickup','store_locator.work_time'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping', false, 'shipping_id', 'f_shipp', array (
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_id']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['module'] == 'store_locator' && $_smarty_tpl->tpl_vars['shipping']->value['store_data']) {?>
        <div class="well orders-right-pane form-horizontal">
            <div class="control-group shift-top">
                <div class="control-label">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("store_locator.pickup")), 0, true);
?>
                </div>
            </div>

            <p class="strong">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['store_data']['name'], ENT_QUOTES, 'UTF-8');?>

            </p>
            <p class="muted">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['store_data']['city'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_address'], ENT_QUOTES, 'UTF-8');?>
<br />
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
<br />
            <?php echo $_smarty_tpl->__("store_locator.work_time");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_time'], ENT_QUOTES, 'UTF-8');?>
<br />
            </p>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
