<?php
/* Smarty version 4.3.0, created on 2024-11-11 05:17:36
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/wishlist/view.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673203f047fb12_13273194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90a585a490f3fea51697535fd7da94bfab2990b9' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/gift_certificates/hooks/wishlist/view.post.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl' => 4,
    'tygh:common/price.tpl' => 10,
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/options_info.tpl' => 2,
    'tygh:buttons/add_to_cart.tpl' => 2,
  ),
),false)) {
function content_673203f047fb12_13273194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove','gift_certificate','free_products','quick_view','gift_certificate','edit','gift_certificate','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free_products','product','price','quantity','subtotal','price_summary','remove','remove','gift_certificate','free_products','quick_view','gift_certificate','edit','gift_certificate','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free_products','product','price','quantity','subtotal','price_summary'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['wishlist']->value['gift_certificates']) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlist']->value['gift_certificates'], 'gift', false, 'gift_key', 'gift_certificates', array (
));
$_smarty_tpl->tpl_vars['gift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gift_key']->value => $_smarty_tpl->tpl_vars['gift']->value) {
$_smarty_tpl->tpl_vars['gift']->do_else = false;
echo smarty_function_math(array('equation'=>"it + 1",'assign'=>"iteration",'it'=>$_smarty_tpl->tpl_vars['iteration']->value),$_smarty_tpl);?>


    <div class="ty-gift-certificate-wishlist ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
">

            <div class="ty-grid-list__item ty-quick-view-button__wrapper">
                <div class="ty-twishlist-item">
                    <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.wishlist_delete?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="cm-post ty-twishlist-item__remove ty-remove" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-remove__icon"),$_smarty_tpl);?>
<span class="ty-remove__txt ty-twishlist-item__txt"><?php echo $_smarty_tpl->__("remove");?>
</span></a>
                </div>
                <div class="ty-grid-list__image">
                    <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0, true);
?></a>
                </div>
                <div class="ty-grid-list__item-name">
                    <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("gift_certificate");
if ($_smarty_tpl->tpl_vars['gift']->value['products']) {?> + <?php echo $_smarty_tpl->__("free_products");
}?></a>
                </div>
                <div class="ty-grid-list__price">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0, true);
?>
                </div>

                <div class="ty-grid-list__control">
                    <div class="ty-quick-view-button">
                        <a id="opener_gift_cert_picker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="gift_cert_quick_view_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("quick_view");?>
</a>
                    </div>
                </div>
            </div>

            <div class="hidden" id="gift_cert_quick_view_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("gift_certificate");?>
">
                <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-form-dialog-closer"<?php }?> method="post" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_prefix']->value, ENT_QUOTES, 'UTF-8');?>
gift_cert_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
">

                <input type="hidden" value="cart_status*,wish_list*" name="result_ids" />
                <input type="hidden" name="gift_cert_data[send_via]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['send_via'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="gift_cert_data[amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="gift_cert_data[correct_amount]" value="N" />
                <input type="hidden" name="gift_cert_data[recipient]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="gift_cert_data[sender]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="gift_cert_data[message]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['message'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['email']) {?><input type="hidden" name="gift_cert_data[email]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['email'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['title']) {?><input type="hidden" name="gift_cert_data[title]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['firstname']) {?><input type="hidden" name="gift_cert_data[firstname]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['lastname']) {?><input type="hidden" name="gift_cert_data[lastname]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['address']) {?><input type="hidden" name="gift_cert_data[address]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['address'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['city']) {?><input type="hidden" name="gift_cert_data[city]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['city'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['country']) {?><input type="hidden" name="gift_cert_data[country]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['country'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['state']) {?><input type="hidden" name="gift_cert_data[state]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['state'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['zipcode']) {?><input type="hidden" name="gift_cert_data[zipcode]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>

                <div class="ty-quick-view__wrapper ty-product-block">
                    <div class="ty-product-block__img-wrapper">
                        <div class="ty-product-block__img">
                            <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>"150",'height'=>"150"), 0, true);
?></a>

                            <div class="ty-mtb-xs ty-center"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("edit"),'but_href'=>"gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_role'=>"text"), 0, true);
?></div>
                        </div>
                    </div>
                    <div class="ty-product-block__left">
                        <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a>
                        <div class="ty-control-group product-list-field">
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label>
                            <span class="ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <div class="ty-control-group product-list-field">
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label>
                            <span class="ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <div class="ty-control-group product-list-field">
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("amount");?>
:</label>
                            <span class="ty-control-group__item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0, true);
?></span>
                        </div>
                        <div class="ty-control-group product-list-field">
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("send_via");?>
:</label>
                            <span class="ty-control-group__item"><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via'] == "E") {
echo $_smarty_tpl->__("email");
} else {
echo $_smarty_tpl->__("postal_mail");
}?></span>
                        </div>

                        <div class="clearfix"></div>
                        <?php if ($_smarty_tpl->tpl_vars['gift']->value['products'] && $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
                        <div class="clearfix">

                            <p><strong><?php echo $_smarty_tpl->__("free_products");?>
:</strong></p>

                            <?php $_smarty_tpl->_assignInScope('gift_price', '');?>
                            <table class="ty-table">
                            <tr>
                                <th style="width: 50%"><?php echo $_smarty_tpl->__("product");?>
</th>
                                <th style="width: 10%"><?php echo $_smarty_tpl->__("price");?>
</th>
                                <th style="width: 10%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                                <th class="ty-right" style="width: 10%"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra_products']->value, '_product', false, 'key_cert_prod');
$_smarty_tpl->tpl_vars['_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_cert_prod']->value => $_smarty_tpl->tpl_vars['_product']->value) {
$_smarty_tpl->tpl_vars['_product']->do_else = false;
?>

                                <?php if ($_smarty_tpl->tpl_vars['wishlist']->value['products'][$_smarty_tpl->tpl_vars['key_cert_prod']->value]['extra']['parent']['certificate'] == $_smarty_tpl->tpl_vars['gift_key']->value) {?>

                                <input type="hidden" name="gift_cert_data[products][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key_cert_prod']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist']->value['products'][$_smarty_tpl->tpl_vars['key_cert_prod']->value]['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                <input type="hidden" name="gift_cert_data[products][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key_cert_prod']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist']->value['products'][$_smarty_tpl->tpl_vars['key_cert_prod']->value]['amount'], ENT_QUOTES, 'UTF-8');?>
" class="cm-value-decimal" />

                                <?php echo smarty_function_math(array('equation'=>"item_price + gift_",'item_price'=>(($tmp = $_smarty_tpl->tpl_vars['_product']->value['subtotal'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->tpl_vars['gift_price']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"),$_smarty_tpl);?>

                                <tr>
                                    <td>
                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a>
                                        <?php if ($_smarty_tpl->tpl_vars['_product']->value['product_options']) {?>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['_product']->value['product_options'],'fields_prefix'=>"gift_cert_data[products][".((string)$_smarty_tpl->tpl_vars['key_cert_prod']->value)."][product_options]"), 0, true);
?>
                                        <?php }?>
                                    </td>
                                    <td class="ty-center">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['price']), 0, true);
?></td>
                                    <td class="ty-center ty-nowrap">
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['products'][$_smarty_tpl->tpl_vars['key_cert_prod']->value]['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                    <td class="ty-right ty-nowrap">
                                        <?php echo smarty_function_math(array('equation'=>"item_price*amount",'item_price'=>(($tmp = $_smarty_tpl->tpl_vars['_product']->value['price'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"subtotal",'amount'=>$_smarty_tpl->tpl_vars['gift']->value['products'][$_smarty_tpl->tpl_vars['key_cert_prod']->value]['amount']),$_smarty_tpl);?>

                                        <?php echo smarty_function_math(array('equation'=>"subtotal + gift_",'subtotal'=>(($tmp = $_smarty_tpl->tpl_vars['subtotal']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->tpl_vars['gift_price']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"),$_smarty_tpl);?>

                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['subtotal']->value), 0, true);
?></td>
                                </tr>
                                <?php }?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </table>

                            <div class="ty-control-group product-list-field ty-float-right">
                                <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("price_summary");?>
:</label>
                                <span class="ty-control-group__item">
                                    <?php echo smarty_function_math(array('equation'=>"item_price + gift_",'item_price'=>(($tmp = $_smarty_tpl->tpl_vars['gift_price']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->tpl_vars['gift']->value['amount'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"),$_smarty_tpl);?>

                                    <strong><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift_price']->value), 0, true);
?></strong>
                                </span>
                            </div>
                        </div>
                        <?php }?>

                        <div class="ty-product-block__button">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"big",'but_name'=>"dispatch[gift_certificates.add]"), 0, true);
?>
                        </div>
                    </div>
                </div>
            </form>
       </div>
    </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/wishlist/view.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/wishlist/view.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['wishlist']->value['gift_certificates']) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlist']->value['gift_certificates'], 'gift', false, 'gift_key', 'gift_certificates', array (
));
$_smarty_tpl->tpl_vars['gift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gift_key']->value => $_smarty_tpl->tpl_vars['gift']->value) {
$_smarty_tpl->tpl_vars['gift']->do_else = false;
echo smarty_function_math(array('equation'=>"it + 1",'assign'=>"iteration",'it'=>$_smarty_tpl->tpl_vars['iteration']->value),$_smarty_tpl);?>


    <div class="ty-gift-certificate-wishlist ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
">

            <div class="ty-grid-list__item ty-quick-view-button__wrapper">
                <div class="ty-twishlist-item">
                    <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.wishlist_delete?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="cm-post ty-twishlist-item__remove ty-remove" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-remove__icon"),$_smarty_tpl);?>
<span class="ty-remove__txt ty-twishlist-item__txt"><?php echo $_smarty_tpl->__("remove");?>
</span></a>
                </div>
                <div class="ty-grid-list__image">
                    <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0, true);
?></a>
                </div>
                <div class="ty-grid-list__item-name">
                    <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("gift_certificate");
if ($_smarty_tpl->tpl_vars['gift']->value['products']) {?> + <?php echo $_smarty_tpl->__("free_products");
}?></a>
                </div>
                <div class="ty-grid-list__price">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0, true);
?>
                </div>

                <div class="ty-grid-list__control">
                    <div class="ty-quick-view-button">
                        <a id="opener_gift_cert_picker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="gift_cert_quick_view_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("quick_view");?>
</a>
                    </div>
                </div>
            </div>

            <div class="hidden" id="gift_cert_quick_view_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("gift_certificate");?>
">
                <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>class="cm-ajax cm-form-dialog-closer"<?php }?> method="post" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_prefix']->value, ENT_QUOTES, 'UTF-8');?>
gift_cert_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
">

                <input type="hidden" value="cart_status*,wish_list*" name="result_ids" />
                <input type="hidden" name="gift_cert_data[send_via]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['send_via'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="gift_cert_data[amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="gift_cert_data[correct_amount]" value="N" />
                <input type="hidden" name="gift_cert_data[recipient]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="gift_cert_data[sender]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="gift_cert_data[message]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['message'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['email']) {?><input type="hidden" name="gift_cert_data[email]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['email'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['title']) {?><input type="hidden" name="gift_cert_data[title]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['firstname']) {?><input type="hidden" name="gift_cert_data[firstname]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['lastname']) {?><input type="hidden" name="gift_cert_data[lastname]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['address']) {?><input type="hidden" name="gift_cert_data[address]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['address'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['city']) {?><input type="hidden" name="gift_cert_data[city]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['city'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['country']) {?><input type="hidden" name="gift_cert_data[country]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['country'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['state']) {?><input type="hidden" name="gift_cert_data[state]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['state'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['gift']->value['zipcode']) {?><input type="hidden" name="gift_cert_data[zipcode]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>

                <div class="ty-quick-view__wrapper ty-product-block">
                    <div class="ty-product-block__img-wrapper">
                        <div class="ty-product-block__img">
                            <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>"150",'height'=>"150"), 0, true);
?></a>

                            <div class="ty-mtb-xs ty-center"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("edit"),'but_href'=>"gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_role'=>"text"), 0, true);
?></div>
                        </div>
                    </div>
                    <div class="ty-product-block__left">
                        <a href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.update?gift_cert_wishlist_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="product-title"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a>
                        <div class="ty-control-group product-list-field">
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label>
                            <span class="ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <div class="ty-control-group product-list-field">
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label>
                            <span class="ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <div class="ty-control-group product-list-field">
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("amount");?>
:</label>
                            <span class="ty-control-group__item"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0, true);
?></span>
                        </div>
                        <div class="ty-control-group product-list-field">
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("send_via");?>
:</label>
                            <span class="ty-control-group__item"><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via'] == "E") {
echo $_smarty_tpl->__("email");
} else {
echo $_smarty_tpl->__("postal_mail");
}?></span>
                        </div>

                        <div class="clearfix"></div>
                        <?php if ($_smarty_tpl->tpl_vars['gift']->value['products'] && $_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow'] == "Y") {?>
                        <div class="clearfix">

                            <p><strong><?php echo $_smarty_tpl->__("free_products");?>
:</strong></p>

                            <?php $_smarty_tpl->_assignInScope('gift_price', '');?>
                            <table class="ty-table">
                            <tr>
                                <th style="width: 50%"><?php echo $_smarty_tpl->__("product");?>
</th>
                                <th style="width: 10%"><?php echo $_smarty_tpl->__("price");?>
</th>
                                <th style="width: 10%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                                <th class="ty-right" style="width: 10%"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra_products']->value, '_product', false, 'key_cert_prod');
$_smarty_tpl->tpl_vars['_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_cert_prod']->value => $_smarty_tpl->tpl_vars['_product']->value) {
$_smarty_tpl->tpl_vars['_product']->do_else = false;
?>

                                <?php if ($_smarty_tpl->tpl_vars['wishlist']->value['products'][$_smarty_tpl->tpl_vars['key_cert_prod']->value]['extra']['parent']['certificate'] == $_smarty_tpl->tpl_vars['gift_key']->value) {?>

                                <input type="hidden" name="gift_cert_data[products][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key_cert_prod']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist']->value['products'][$_smarty_tpl->tpl_vars['key_cert_prod']->value]['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                <input type="hidden" name="gift_cert_data[products][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key_cert_prod']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist']->value['products'][$_smarty_tpl->tpl_vars['key_cert_prod']->value]['amount'], ENT_QUOTES, 'UTF-8');?>
" class="cm-value-decimal" />

                                <?php echo smarty_function_math(array('equation'=>"item_price + gift_",'item_price'=>(($tmp = $_smarty_tpl->tpl_vars['_product']->value['subtotal'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->tpl_vars['gift_price']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"),$_smarty_tpl);?>

                                <tr>
                                    <td>
                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a>
                                        <?php if ($_smarty_tpl->tpl_vars['_product']->value['product_options']) {?>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['_product']->value['product_options'],'fields_prefix'=>"gift_cert_data[products][".((string)$_smarty_tpl->tpl_vars['key_cert_prod']->value)."][product_options]"), 0, true);
?>
                                        <?php }?>
                                    </td>
                                    <td class="ty-center">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['price']), 0, true);
?></td>
                                    <td class="ty-center ty-nowrap">
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gift']->value['products'][$_smarty_tpl->tpl_vars['key_cert_prod']->value]['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                    <td class="ty-right ty-nowrap">
                                        <?php echo smarty_function_math(array('equation'=>"item_price*amount",'item_price'=>(($tmp = $_smarty_tpl->tpl_vars['_product']->value['price'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"subtotal",'amount'=>$_smarty_tpl->tpl_vars['gift']->value['products'][$_smarty_tpl->tpl_vars['key_cert_prod']->value]['amount']),$_smarty_tpl);?>

                                        <?php echo smarty_function_math(array('equation'=>"subtotal + gift_",'subtotal'=>(($tmp = $_smarty_tpl->tpl_vars['subtotal']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->tpl_vars['gift_price']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"),$_smarty_tpl);?>

                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['subtotal']->value), 0, true);
?></td>
                                </tr>
                                <?php }?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </table>

                            <div class="ty-control-group product-list-field ty-float-right">
                                <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("price_summary");?>
:</label>
                                <span class="ty-control-group__item">
                                    <?php echo smarty_function_math(array('equation'=>"item_price + gift_",'item_price'=>(($tmp = $_smarty_tpl->tpl_vars['gift_price']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'gift_'=>(($tmp = $_smarty_tpl->tpl_vars['gift']->value['amount'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp),'assign'=>"gift_price"),$_smarty_tpl);?>

                                    <strong><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['gift_price']->value), 0, true);
?></strong>
                                </span>
                            </div>
                        </div>
                        <?php }?>

                        <div class="ty-product-block__button">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"big",'but_name'=>"dispatch[gift_certificates.add]"), 0, true);
?>
                        </div>
                    </div>
                </div>
            </form>
       </div>
    </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
}
