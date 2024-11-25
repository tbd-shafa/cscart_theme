<?php
/* Smarty version 4.3.0, created on 2024-11-25 04:04:21
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/orders/details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674467c53b3932_99571011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f564b0470e6a05e75449eb3e46893a8e6a0b7cf6' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/orders/details.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 4,
    'tygh:views/profiles/components/profiles_info.tpl' => 2,
    'tygh:common/subheader.tpl' => 8,
    'tygh:common/image.tpl' => 2,
    'tygh:common/options_info.tpl' => 4,
    'tygh:common/price.tpl' => 22,
    'tygh:common/modifier.tpl' => 2,
    'tygh:views/orders/components/promotions.tpl' => 2,
    'tygh:views/orders/components/order_repay.tpl' => 2,
    'tygh:common/group.tpl' => 2,
    'tygh:common/tabsbox.tpl' => 2,
    'tygh:common/status.tpl' => 2,
  ),
),false)) {
function content_674467c53b3932_99571011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('print_invoice','print_credit_memo','print_order_details','re_order','products_information','product','price','quantity','discount','tax','subtotal','download','sku','free','free','customer_notes','summary','payment_method','shipping_method','tracking_number','tracking_number','carrier','subtotal','shipping_cost','including_discount','order_discount','coupon','taxes','included','tax_exempt','payment_surcharge','total','shipment','carrier','tracking_number','product','quantity','download','sku','comments','text_no_shipments_found','order','status','print_invoice','print_credit_memo','print_order_details','re_order','products_information','product','price','quantity','discount','tax','subtotal','download','sku','free','free','customer_notes','summary','payment_method','shipping_method','tracking_number','tracking_number','carrier','subtotal','shipping_cost','including_discount','order_discount','coupon','taxes','included','tax_exempt','payment_surcharge','total','shipment','carrier','tracking_number','product','quantity','download','sku','comments','text_no_shipments_found','order','status'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-orders-detail">

    <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "order_actions", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['view_only']->value != "Y") {?>
                <div class="ty-orders__actions">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:details_tools"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:details_tools"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_assignInScope('print_order', $_smarty_tpl->__("print_invoice"));?>
                        <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type'] == "C" && $_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
                            <?php $_smarty_tpl->_assignInScope('print_order', $_smarty_tpl->__("print_credit_memo"));?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type'] == "O") {?>
                            <?php $_smarty_tpl->_assignInScope('print_order', $_smarty_tpl->__("print_order_details"));?>
                        <?php }?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"text",'but_text'=>$_smarty_tpl->tpl_vars['print_order']->value,'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_meta'=>"cm-new-window ty-btn__text",'but_icon'=>"ty-icon-print orders-print__icon"), 0, false);
?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:details_tools"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <div class="ty-orders__actions-right">
                        <?php if ($_smarty_tpl->tpl_vars['view_only']->value != "Y") {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:details_bullets"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:details_bullets"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:details_bullets"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__text",'but_role'=>"text",'but_text'=>$_smarty_tpl->__("re_order"),'but_href'=>"orders.reorder?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-cw"), 0, true);
?>
                    </div>

                </div>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

        <div id="content_general" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value && $_smarty_tpl->tpl_vars['selected_section']->value != "general") {?>hidden<?php }?>">

            <?php if ($_smarty_tpl->tpl_vars['without_customer']->value != "Y") {?>
                            <div class="orders-customer">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['order_info']->value,'location'=>"I"), 0, false);
?>
                </div>
                        <?php }?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "group", null, null);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("products_information")), 0, false);
?>

            <table class="ty-orders-detail__table ty-table">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:items_list_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:items_list_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <thead>
                        <tr>
                            <th class="ty-orders-detail__table-product"><?php echo $_smarty_tpl->__("product");?>
</th>
                            <th class="ty-orders-detail__table-price"><?php echo $_smarty_tpl->__("price");?>
</th>
                            <th class="ty-orders-detail__table-quantity"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                                <th class="ty-orders-detail__table-discount"><?php echo $_smarty_tpl->__("discount");?>
</th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
                                <th class="ty-orders-detail__table-tax"><?php echo $_smarty_tpl->__("tax");?>
</th>
                            <?php }?>
                            <th class="ty-orders-detail__table-subtotal"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                        </tr>
                    </thead>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:items_list_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['products'], 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['parent']) {?>
                            <tr class="ty-valign-top">
                                <td>
                                    <div class="clearfix">
                                        <div class="ty-float-left ty-orders-detail__table-image">
                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:product_icon"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:product_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['key']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, true);
?>
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?></a><?php }?>
                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:product_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        </div>

                                        <div class="ty-overflow-hidden ty-orders-detail__table-description-wrapper">
                                            <div class="ty-ml-s ty-orders-detail__table-description">
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?></a><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['is_edp'] == "Y") {?>
                                                    <div class="ty-right">
                                                        <a href="<?php echo htmlspecialchars((string) fn_url("orders.order_downloads?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
">[<?php echo $_smarty_tpl->__("download");?>
]</a>
                                                    </div>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                                                    <div class="ty-orders-detail__table-code"><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</div>
                                                <?php }?>
                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {
$_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'inline_option'=>true), 0, true);
}?>
                                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="ty-right">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price']), 0, true);
}?>
                                </td>
                                <td class="ty-center">&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                                    <td class="ty-right">
                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['extra']['discount'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['extra']['discount']), 0, true);
} else { ?>-<?php }?>
                                    </td>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
                                    <td class="ty-center">
                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['tax_value'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_value']), 0, true);
} else { ?>-<?php }?>
                                    </td>
                                <?php }?>
                                <td class="ty-right">
                                     &nbsp;<?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal']), 0, true);
}?>
                                 </td>
                            </tr>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:extra_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:extra_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_assignInScope('colsp', 5);?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {
$_smarty_tpl->_assignInScope('colsp', $_smarty_tpl->tpl_vars['colsp']->value+1);
}?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {
$_smarty_tpl->_assignInScope('colsp', $_smarty_tpl->tpl_vars['colsp']->value+1);
}?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:extra_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </table>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['notes']) {?>
                <div class="ty-orders-notes">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("customer_notes")), 0, true);
?>
                    <div class="ty-orders-notes__body">
                        <span class="ty-caret"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                        <?php echo nl2br((string) $_smarty_tpl->tpl_vars['order_info']->value['notes'], (bool) 1);?>

                    </div>
                </div>
                <?php }?>
            
            <div class="ty-orders-summary clearfix">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("summary")), 0, true);
?>

                <div class="ty-orders-summary__right">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>

                <div class="ty-orders-summary__wrapper">
                    <table class="ty-orders-summary__table">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:totals"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:totals"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id']) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("payment_method");?>
:</td>
                                    <td style="width: 57%" data-ct-orders-summary="summary-payment">
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:totals_payment"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:totals_payment"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['payment'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description']) {?>(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:totals_payment"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </td>
                                </tr>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['shipping']) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("shipping_method");?>
:</td>
                                    <td data-ct-orders-summary="summary-ship">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:totals_shipping"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:totals_shipping"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['use_shipments']->value) {?>
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping_method');
$_smarty_tpl->tpl_vars['shipping_method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_method']->value) {
$_smarty_tpl->tpl_vars['shipping_method']->do_else = false;
?>
                                                <li><?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['shipping']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php } else { ?> – <?php }?></li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php } else { ?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping', false, NULL, 'f_shipp', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['total'];
?>

                                            <?php if ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier_info']['tracking_url'] && $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number']) {?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo $_smarty_tpl->__("tracking_number");?>
: <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier_info']['tracking_url'];?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number'], ENT_QUOTES, 'UTF-8');?>
</a>)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number']) {?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo $_smarty_tpl->__("tracking_number");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number'], ENT_QUOTES, 'UTF-8');?>
)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier']) {?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo $_smarty_tpl->__("carrier");?>
: <?php echo $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier_info']['name'];?>
)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>

                                            <?php }?>
                                            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] : null)) {?><br><?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:totals_shipping"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </td>
                                </tr>
                            <?php }?>

                            <tr class="ty-orders-summary__row">
                                <td><?php echo $_smarty_tpl->__("subtotal");?>
:&nbsp;</td>
                                <td data-ct-orders-summary="summary-subtotal"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_subtotal']), 0, true);
?></td>
                            </tr>
                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost'])) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("shipping_cost");?>
:&nbsp;</td>
                                    <td data-ct-orders-summary="summary-shipcost"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost']), 0, true);
?></td>
                                </tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['discount'])) {?>
                            <tr class="ty-orders-summary__row">
                                <td class="ty-strong"><?php echo $_smarty_tpl->__("including_discount");?>
:</td>
                                <td class="ty-nowrap" data-ct-orders-summary="summary-discount">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['discount']), 0, true);
?>
                                </td>
                            </tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount'])) {?>
                                <tr class="ty-orders-summary__row">
                                    <td class="ty-strong"><?php echo $_smarty_tpl->__("order_discount");?>
:</td>
                                    <td class="ty-nowrap" data-ct-orders-summary="summary-sub-discount">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount']), 0, true);
?>
                                    </td>
                                </tr>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['coupons']) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['coupons'], 'coupon', false, 'key');
$_smarty_tpl->tpl_vars['coupon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['coupon']->value) {
$_smarty_tpl->tpl_vars['coupon']->do_else = false;
?>
                                    <tr class="ty-orders-summary__row">
                                        <td class="ty-nowrap"><?php echo $_smarty_tpl->__("coupon");?>
:</td>
                                        <td data-ct-orders-summary="summary-coupons"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']) {?>
                                <tr class="taxes">
                                    <td><strong><?php echo $_smarty_tpl->__("taxes");?>
:</strong></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['taxes'], 'tax_data');
$_smarty_tpl->tpl_vars['tax_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax_data']->value) {
$_smarty_tpl->tpl_vars['tax_data']->do_else = false;
?>
                                    <tr class="ty-orders-summary__row">
                                        <td class="ty-orders-summary__taxes-description">
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax_data']->value['description'], ENT_QUOTES, 'UTF-8');?>

                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->tpl_vars['tax_data']->value['rate_value'],'mod_type'=>$_smarty_tpl->tpl_vars['tax_data']->value['rate_type']), 0, true);
?>
                                            <?php if ($_smarty_tpl->tpl_vars['tax_data']->value['price_includes_tax'] == "Y" && ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] != "Y" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] == "subtotal")) {?>
                                                <?php echo $_smarty_tpl->__("included");?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['tax_data']->value['regnumber']) {?>
                                                (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax_data']->value['regnumber'], ENT_QUOTES, 'UTF-8');?>
)
                                            <?php }?>
                                        </td>
                                        <td class="ty-orders-summary__taxes-description" data-ct-orders-summary="summary-tax-sub"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['tax_data']->value['tax_subtotal']), 0, true);
?></td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['tax_exempt'] == "Y") {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("tax_exempt");?>
</td>
                                    <td>&nbsp;</td>
                                <tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge']) && !$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
:&nbsp;</td>
                                    <td data-ct-orders-summary="summary-surchange"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge']), 0, true);
?></td>
                                </tr>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:order_total"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:order_total"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <tr class="ty-orders-summary__row">
                                    <td class="ty-orders-summary__total"><?php echo $_smarty_tpl->__("total");?>
:&nbsp;</td>
                                    <td class="ty-orders-summary__total" data-ct-orders-summary="summary-total"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['total']), 0, true);
?></td>
                                </tr>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:order_total"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:totals"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </table>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['promotions']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/orders/components/promotions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('promotions'=>$_smarty_tpl->tpl_vars['order_info']->value['promotions']), 0, false);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['view_only']->value != "Y") {?>
                <div class="ty-orders-repay litecheckout">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:repay"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:repay"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['repay'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/orders/components/order_repay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:repay"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
            <?php }?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <div class="ty-orders-detail__products orders-product">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'group')), 0, false);
?>
        </div>
        </div><!-- main order info -->

        <?php if ($_smarty_tpl->tpl_vars['use_shipments']->value) {?>
            <div id="content_shipment_info" class="ty-orders-shipment <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "shipment_info") {?>hidden<?php }?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipments']->value, 'shipment');
$_smarty_tpl->tpl_vars['shipment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipment']->value) {
$_smarty_tpl->tpl_vars['shipment']->do_else = false;
?>
                    <?php ob_start();
echo $_smarty_tpl->__("shipment");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable1." #".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])), 0, true);
?>
                    <div class="ty-orders-shipment__info">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:shipment_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:shipment_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
</p>
                            <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier']) {?>
                                <p><?php echo $_smarty_tpl->__("carrier");?>
: <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['name'];
if ($_smarty_tpl->tpl_vars['shipment']->value['tracking_number']) {?> (<?php echo $_smarty_tpl->__("tracking_number");?>
: <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url']) {?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url'];?>
"><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url']) {?></a><?php }?>)<?php }?></p>

                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                            <?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:shipment_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>

                    <table class="ty-orders-shipment__table ty-table">
                        <thead>
                            <tr>
                                <th style="width: 90%"><?php echo $_smarty_tpl->__("product");?>
</th>
                                <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
                            </tr>
                        </thead>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipment']->value['products'], 'amount', false, 'product_hash');
$_smarty_tpl->tpl_vars['amount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_hash']->value => $_smarty_tpl->tpl_vars['amount']->value) {
$_smarty_tpl->tpl_vars['amount']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['product_hash']->value]) {?>
                                <?php $_smarty_tpl->_assignInScope('product', $_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['product_hash']->value]);?>
                                <tr style="vertical-align: top;">
                                    <td><?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?></a><?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['is_edp'] == "Y") {?>
                                            <div class="ty-right">
                                                <a href="<?php echo htmlspecialchars((string) fn_url("orders.order_downloads?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
">[<?php echo $_smarty_tpl->__("download");?>
]</a>
                                            </div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                                        <p><?php echo $_smarty_tpl->__("sku");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {
$_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'inline_option'=>true), 0, true);
}?>
                                    </td>
                                    <td class="ty-center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                                </tr>
                            <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>

                    <?php if ($_smarty_tpl->tpl_vars['shipment']->value['comments']) {?>
                        <div class="ty-orders-shipment-notes__info">
                            <h4 class="ty-orders-shipment-notes__header"><?php echo $_smarty_tpl->__("comments");?>
: </h4>
                            <div class="ty-orders-shipment-notes__body">
                                <span class="caret"> <span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></span>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['comments'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                        </div>
                    <?php }?>

                <?php
}
if ($_smarty_tpl->tpl_vars['shipment']->do_else) {
?>
                    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_shipments_found");?>
</p>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('top_order_actions'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'order_actions'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section']), 0, false);
?>

    <?php }?>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:details"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:details"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:details"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?>
    <?php echo $_smarty_tpl->__("order");?>
&nbsp;<bdi>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</bdi>
    <em class="ty-date">(<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
)</em>
    <em class="ty-status"><?php echo $_smarty_tpl->__("status");?>
: <?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['order_info']->value['status'],'display'=>"view",'name'=>"update_order[status]"), 0, false);
?></em>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/details.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/details.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-orders-detail">

    <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "order_actions", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['view_only']->value != "Y") {?>
                <div class="ty-orders__actions">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:details_tools"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:details_tools"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_assignInScope('print_order', $_smarty_tpl->__("print_invoice"));?>
                        <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type'] == "C" && $_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
                            <?php $_smarty_tpl->_assignInScope('print_order', $_smarty_tpl->__("print_credit_memo"));?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type'] == "O") {?>
                            <?php $_smarty_tpl->_assignInScope('print_order', $_smarty_tpl->__("print_order_details"));?>
                        <?php }?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"text",'but_text'=>$_smarty_tpl->tpl_vars['print_order']->value,'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_meta'=>"cm-new-window ty-btn__text",'but_icon'=>"ty-icon-print orders-print__icon"), 0, true);
?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:details_tools"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <div class="ty-orders__actions-right">
                        <?php if ($_smarty_tpl->tpl_vars['view_only']->value != "Y") {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:details_bullets"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:details_bullets"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:details_bullets"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__text",'but_role'=>"text",'but_text'=>$_smarty_tpl->__("re_order"),'but_href'=>"orders.reorder?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-cw"), 0, true);
?>
                    </div>

                </div>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

        <div id="content_general" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value && $_smarty_tpl->tpl_vars['selected_section']->value != "general") {?>hidden<?php }?>">

            <?php if ($_smarty_tpl->tpl_vars['without_customer']->value != "Y") {?>
                            <div class="orders-customer">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['order_info']->value,'location'=>"I"), 0, true);
?>
                </div>
                        <?php }?>


        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "group", null, null);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("products_information")), 0, true);
?>

            <table class="ty-orders-detail__table ty-table">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:items_list_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:items_list_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <thead>
                        <tr>
                            <th class="ty-orders-detail__table-product"><?php echo $_smarty_tpl->__("product");?>
</th>
                            <th class="ty-orders-detail__table-price"><?php echo $_smarty_tpl->__("price");?>
</th>
                            <th class="ty-orders-detail__table-quantity"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                                <th class="ty-orders-detail__table-discount"><?php echo $_smarty_tpl->__("discount");?>
</th>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
                                <th class="ty-orders-detail__table-tax"><?php echo $_smarty_tpl->__("tax");?>
</th>
                            <?php }?>
                            <th class="ty-orders-detail__table-subtotal"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                        </tr>
                    </thead>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:items_list_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['products'], 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['parent']) {?>
                            <tr class="ty-valign-top">
                                <td>
                                    <div class="clearfix">
                                        <div class="ty-float-left ty-orders-detail__table-image">
                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:product_icon"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:product_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['key']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_cart_thumbnail_height']), 0, true);
?>
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?></a><?php }?>
                                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:product_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        </div>

                                        <div class="ty-overflow-hidden ty-orders-detail__table-description-wrapper">
                                            <div class="ty-ml-s ty-orders-detail__table-description">
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>

                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?></a><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['is_edp'] == "Y") {?>
                                                    <div class="ty-right">
                                                        <a href="<?php echo htmlspecialchars((string) fn_url("orders.order_downloads?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
">[<?php echo $_smarty_tpl->__("download");?>
]</a>
                                                    </div>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                                                    <div class="ty-orders-detail__table-code"><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</div>
                                                <?php }?>
                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {
$_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'inline_option'=>true), 0, true);
}?>
                                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="ty-right">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['original_price']), 0, true);
}?>
                                </td>
                                <td class="ty-center">&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                                    <td class="ty-right">
                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['extra']['discount'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['extra']['discount']), 0, true);
} else { ?>-<?php }?>
                                    </td>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {?>
                                    <td class="ty-center">
                                        <?php if (floatval($_smarty_tpl->tpl_vars['product']->value['tax_value'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['tax_value']), 0, true);
} else { ?>-<?php }?>
                                    </td>
                                <?php }?>
                                <td class="ty-right">
                                     &nbsp;<?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_subtotal']), 0, true);
}?>
                                 </td>
                            </tr>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:extra_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:extra_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_assignInScope('colsp', 5);?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {
$_smarty_tpl->_assignInScope('colsp', $_smarty_tpl->tpl_vars['colsp']->value+1);
}?>
                    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] != "subtotal") {
$_smarty_tpl->_assignInScope('colsp', $_smarty_tpl->tpl_vars['colsp']->value+1);
}?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:extra_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </table>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['notes']) {?>
                <div class="ty-orders-notes">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("customer_notes")), 0, true);
?>
                    <div class="ty-orders-notes__body">
                        <span class="ty-caret"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                        <?php echo nl2br((string) $_smarty_tpl->tpl_vars['order_info']->value['notes'], (bool) 1);?>

                    </div>
                </div>
                <?php }?>
            
            <div class="ty-orders-summary clearfix">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("summary")), 0, true);
?>

                <div class="ty-orders-summary__right">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>

                <div class="ty-orders-summary__wrapper">
                    <table class="ty-orders-summary__table">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:totals"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:totals"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id']) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("payment_method");?>
:</td>
                                    <td style="width: 57%" data-ct-orders-summary="summary-payment">
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:totals_payment"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:totals_payment"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['payment'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description']) {?>(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['description'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:totals_payment"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </td>
                                </tr>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['shipping']) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("shipping_method");?>
:</td>
                                    <td data-ct-orders-summary="summary-ship">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:totals_shipping"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:totals_shipping"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['use_shipments']->value) {?>
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping_method');
$_smarty_tpl->tpl_vars['shipping_method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_method']->value) {
$_smarty_tpl->tpl_vars['shipping_method']->do_else = false;
?>
                                                <li><?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['shipping']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping_method']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 <?php } else { ?> – <?php }?></li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php } else { ?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['shipping'], 'shipping', false, NULL, 'f_shipp', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['total'];
?>

                                            <?php if ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier_info']['tracking_url'] && $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number']) {?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo $_smarty_tpl->__("tracking_number");?>
: <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier_info']['tracking_url'];?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number'], ENT_QUOTES, 'UTF-8');?>
</a>)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number']) {?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo $_smarty_tpl->__("tracking_number");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['tracking_number'], ENT_QUOTES, 'UTF-8');?>
)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier']) {?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo $_smarty_tpl->__("carrier");?>
: <?php echo $_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['carrier_info']['name'];?>
)
                                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>

                                            <?php }?>
                                            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_shipp']->value['last'] : null)) {?><br><?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:totals_shipping"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </td>
                                </tr>
                            <?php }?>

                            <tr class="ty-orders-summary__row">
                                <td><?php echo $_smarty_tpl->__("subtotal");?>
:&nbsp;</td>
                                <td data-ct-orders-summary="summary-subtotal"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_subtotal']), 0, true);
?></td>
                            </tr>
                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost'])) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("shipping_cost");?>
:&nbsp;</td>
                                    <td data-ct-orders-summary="summary-shipcost"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['display_shipping_cost']), 0, true);
?></td>
                                </tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['discount'])) {?>
                            <tr class="ty-orders-summary__row">
                                <td class="ty-strong"><?php echo $_smarty_tpl->__("including_discount");?>
:</td>
                                <td class="ty-nowrap" data-ct-orders-summary="summary-discount">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['discount']), 0, true);
?>
                                </td>
                            </tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount'])) {?>
                                <tr class="ty-orders-summary__row">
                                    <td class="ty-strong"><?php echo $_smarty_tpl->__("order_discount");?>
:</td>
                                    <td class="ty-nowrap" data-ct-orders-summary="summary-sub-discount">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['subtotal_discount']), 0, true);
?>
                                    </td>
                                </tr>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['coupons']) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['coupons'], 'coupon', false, 'key');
$_smarty_tpl->tpl_vars['coupon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['coupon']->value) {
$_smarty_tpl->tpl_vars['coupon']->do_else = false;
?>
                                    <tr class="ty-orders-summary__row">
                                        <td class="ty-nowrap"><?php echo $_smarty_tpl->__("coupon");?>
:</td>
                                        <td data-ct-orders-summary="summary-coupons"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']) {?>
                                <tr class="taxes">
                                    <td><strong><?php echo $_smarty_tpl->__("taxes");?>
:</strong></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_info']->value['taxes'], 'tax_data');
$_smarty_tpl->tpl_vars['tax_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax_data']->value) {
$_smarty_tpl->tpl_vars['tax_data']->do_else = false;
?>
                                    <tr class="ty-orders-summary__row">
                                        <td class="ty-orders-summary__taxes-description">
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax_data']->value['description'], ENT_QUOTES, 'UTF-8');?>

                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_value'=>$_smarty_tpl->tpl_vars['tax_data']->value['rate_value'],'mod_type'=>$_smarty_tpl->tpl_vars['tax_data']->value['rate_type']), 0, true);
?>
                                            <?php if ($_smarty_tpl->tpl_vars['tax_data']->value['price_includes_tax'] == "Y" && ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] != "Y" || $_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation'] == "subtotal")) {?>
                                                <?php echo $_smarty_tpl->__("included");?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['tax_data']->value['regnumber']) {?>
                                                (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tax_data']->value['regnumber'], ENT_QUOTES, 'UTF-8');?>
)
                                            <?php }?>
                                        </td>
                                        <td class="ty-orders-summary__taxes-description" data-ct-orders-summary="summary-tax-sub"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['tax_data']->value['tax_subtotal']), 0, true);
?></td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['tax_exempt'] == "Y") {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo $_smarty_tpl->__("tax_exempt");?>
</td>
                                    <td>&nbsp;</td>
                                <tr>
                            <?php }?>

                            <?php if (floatval($_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge']) && !$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
                                <tr class="ty-orders-summary__row">
                                    <td><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['order_info']->value['payment_method']['surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("payment_surcharge") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
:&nbsp;</td>
                                    <td data-ct-orders-summary="summary-surchange"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['payment_surcharge']), 0, true);
?></td>
                                </tr>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:order_total"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:order_total"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <tr class="ty-orders-summary__row">
                                    <td class="ty-orders-summary__total"><?php echo $_smarty_tpl->__("total");?>
:&nbsp;</td>
                                    <td class="ty-orders-summary__total" data-ct-orders-summary="summary-total"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['total']), 0, true);
?></td>
                                </tr>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:order_total"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:totals"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </table>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['promotions']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/orders/components/promotions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('promotions'=>$_smarty_tpl->tpl_vars['order_info']->value['promotions']), 0, true);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['view_only']->value != "Y") {?>
                <div class="ty-orders-repay litecheckout">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:repay"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:repay"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['repay'] == smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/orders/components/order_repay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:repay"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
            <?php }?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <div class="ty-orders-detail__products orders-product">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'group')), 0, true);
?>
        </div>
        </div><!-- main order info -->

        <?php if ($_smarty_tpl->tpl_vars['use_shipments']->value) {?>
            <div id="content_shipment_info" class="ty-orders-shipment <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != "shipment_info") {?>hidden<?php }?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipments']->value, 'shipment');
$_smarty_tpl->tpl_vars['shipment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipment']->value) {
$_smarty_tpl->tpl_vars['shipment']->do_else = false;
?>
                    <?php ob_start();
echo $_smarty_tpl->__("shipment");
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable2." #".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])), 0, true);
?>
                    <div class="ty-orders-shipment__info">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:shipment_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:shipment_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
</p>
                            <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier']) {?>
                                <p><?php echo $_smarty_tpl->__("carrier");?>
: <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['name'];
if ($_smarty_tpl->tpl_vars['shipment']->value['tracking_number']) {?> (<?php echo $_smarty_tpl->__("tracking_number");?>
: <?php if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url']) {?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url'];?>
"><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['tracking_number'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['tracking_url']) {?></a><?php }?>)<?php }?></p>

                                <?php echo $_smarty_tpl->tpl_vars['shipment']->value['carrier_info']['info'];?>

                            <?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:shipment_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>

                    <table class="ty-orders-shipment__table ty-table">
                        <thead>
                            <tr>
                                <th style="width: 90%"><?php echo $_smarty_tpl->__("product");?>
</th>
                                <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
                            </tr>
                        </thead>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipment']->value['products'], 'amount', false, 'product_hash');
$_smarty_tpl->tpl_vars['amount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_hash']->value => $_smarty_tpl->tpl_vars['amount']->value) {
$_smarty_tpl->tpl_vars['amount']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['product_hash']->value]) {?>
                                <?php $_smarty_tpl->_assignInScope('product', $_smarty_tpl->tpl_vars['order_info']->value['products'][$_smarty_tpl->tpl_vars['product_hash']->value]);?>
                                <tr style="vertical-align: top;">
                                    <td><?php if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['product']->value['is_accessible']) {?></a><?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['extra']['is_edp'] == "Y") {?>
                                            <div class="ty-right">
                                                <a href="<?php echo htmlspecialchars((string) fn_url("orders.order_downloads?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
">[<?php echo $_smarty_tpl->__("download");?>
]</a>
                                            </div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                                        <p><?php echo $_smarty_tpl->__("sku");?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']) {
$_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'inline_option'=>true), 0, true);
}?>
                                    </td>
                                    <td class="ty-center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                                </tr>
                            <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>

                    <?php if ($_smarty_tpl->tpl_vars['shipment']->value['comments']) {?>
                        <div class="ty-orders-shipment-notes__info">
                            <h4 class="ty-orders-shipment-notes__header"><?php echo $_smarty_tpl->__("comments");?>
: </h4>
                            <div class="ty-orders-shipment-notes__body">
                                <span class="caret"> <span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></span>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['comments'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                        </div>
                    <?php }?>

                <?php
}
if ($_smarty_tpl->tpl_vars['shipment']->do_else) {
?>
                    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_shipments_found");?>
</p>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('top_order_actions'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'order_actions'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section']), 0, true);
?>

    <?php }?>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:details"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:details"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:details"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?>
    <?php echo $_smarty_tpl->__("order");?>
&nbsp;<bdi>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</bdi>
    <em class="ty-date">(<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_info']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
)</em>
    <em class="ty-status"><?php echo $_smarty_tpl->__("status");?>
: <?php $_smarty_tpl->_subTemplateRender("tygh:common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['order_info']->value['status'],'display'=>"view",'name'=>"update_order[status]"), 0, true);
?></em>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
