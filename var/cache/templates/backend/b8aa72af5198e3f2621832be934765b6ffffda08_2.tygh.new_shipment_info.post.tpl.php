<?php
/* Smarty version 4.3.0, created on 2024-11-17 22:56:36
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/paypal_checkout/hooks/shipments/new_shipment_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673ae5243cfef3_72750820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8aa72af5198e3f2621832be934765b6ffffda08' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/paypal_checkout/hooks/shipments/new_shipment_info.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673ae5243cfef3_72750820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('paypal_checkout.send_shipment_info'));
if ((isset($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['processor_params']['is_paypal_checkout'])) && $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['processor_params']['is_paypal_checkout'] === smarty_modifier_enum("YesNo::YES")) {?>
    <div class="cm-toggle-button">
        <div class="control-group select-field">
            <div class="controls">
                <label for="paypal_checkout_send_shipment_info" class="checkbox">
                    <input type="checkbox"
                           id="paypal_checkout_send_shipment_info"
                           name="shipment_data[paypal_checkout_send_shipment_info]"
                           value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                           checked
                    />
                    <?php echo $_smarty_tpl->__("paypal_checkout.send_shipment_info");?>

                </label>
            </div>
        </div>
    </div>
<?php }
}
}
