<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:04:21
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/store_locator/hooks/orders/totals_shipping.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467c55b5ff2_85542514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbc77ea705f7acc9f4da57d85179043ee06c071f' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/store_locator/hooks/orders/totals_shipping.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674467c55b5ff2_85542514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('phone','store_locator.work_time','phone','store_locator.work_time'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping_method');
$_smarty_tpl->tpl_vars['shipping_method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_method']->value) {
$_smarty_tpl->tpl_vars['shipping_method']->do_else = false;
?>
	<?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']) {?>
        <p class="ty-strong">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['name'], ENT_QUOTES, 'UTF-8');?>

        </p>
        <p class="ty-muted">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['city'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_address']) {?>, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_address'], ENT_QUOTES, 'UTF-8');
}?></br>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_phone']) {?>
                <?php echo $_smarty_tpl->__("phone");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
</br>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_time']) {?>
                <?php echo $_smarty_tpl->__("store_locator.work_time");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_time'], ENT_QUOTES, 'UTF-8');?>
</br>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['description'];?>

        </p>

        <?php $_smarty_tpl->_assignInScope('store', $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']);?>
        <?php $_smarty_tpl->_assignInScope('map_container_id', "sl_pickup_order_map");?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:store_locator_orders_map"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:store_locator_orders_map"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:store_locator_orders_map"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/addons/store_locator/pickup.js"),$_smarty_tpl);?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/orders/totals_shipping.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/hooks/orders/totals_shipping.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping_method');
$_smarty_tpl->tpl_vars['shipping_method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_method']->value) {
$_smarty_tpl->tpl_vars['shipping_method']->do_else = false;
?>
	<?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']) {?>
        <p class="ty-strong">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['name'], ENT_QUOTES, 'UTF-8');?>

        </p>
        <p class="ty-muted">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['city'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_address']) {?>, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_address'], ENT_QUOTES, 'UTF-8');
}?></br>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_phone']) {?>
                <?php echo $_smarty_tpl->__("phone");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
</br>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_time']) {?>
                <?php echo $_smarty_tpl->__("store_locator.work_time");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_time'], ENT_QUOTES, 'UTF-8');?>
</br>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['description'];?>

        </p>

        <?php $_smarty_tpl->_assignInScope('store', $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']);?>
        <?php $_smarty_tpl->_assignInScope('map_container_id', "sl_pickup_order_map");?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:store_locator_orders_map"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:store_locator_orders_map"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:store_locator_orders_map"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/addons/store_locator/pickup.js"),$_smarty_tpl);?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
