<?php
/* Smarty version 4.3.0, created on 2024-11-22 05:11:34
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_variations/blocks/products/variations_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6740830671eac9_55756995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c56f4b4e301e1528656214d86c130d3b9bc784bf' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/product_variations/blocks/products/variations_list.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6740830671eac9_55756995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sku','availability','price','text_out_of_stock','sku','availability','price','text_out_of_stock'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.hide_add_to_wishlist_button"] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_wishlist', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_wishlist', true);?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('products', $_smarty_tpl->tpl_vars['items']->value);?>
    <?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_wishlist', (($tmp = $_smarty_tpl->tpl_vars['_show_add_to_wishlist']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_sku', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.show_product_code"] ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp) == "Y");?>
    <?php $_smarty_tpl->_assignInScope('show_variation_thumbnails', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.show_variation_thumbnails"] ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp) == "Y");?>
    <?php $_smarty_tpl->_assignInScope('show_price', true);?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_cart', (($tmp = $_smarty_tpl->tpl_vars['_show_add_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_role', "action");?>
    <?php $_smarty_tpl->_assignInScope('hide_form', true);?>
    <?php $_smarty_tpl->_assignInScope('show_product_amount', $_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] !== smarty_modifier_enum("YesNo::NO"));?>
    <?php $_smarty_tpl->_assignInScope('hide_stock_info', false);?>
    <?php $_smarty_tpl->_assignInScope('show_out_of_stock', true);?>
    <?php $_smarty_tpl->_assignInScope('show_amount_label', false);?>
    <?php $_smarty_tpl->_assignInScope('show_variations', true);?>
    <?php $_smarty_tpl->_assignInScope('show_sku_label', false);?>
    <?php $_smarty_tpl->_assignInScope('image_width', (($tmp = $_smarty_tpl->tpl_vars['image_width']->value ?? null)===null||$tmp==='' ? 40 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('image_height', (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? 40 ?? null : $tmp));?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_variations_list_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_variations_list_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_variations_list_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>


    <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
        <?php $_smarty_tpl->_assignInScope('first_product', reset($_smarty_tpl->tpl_vars['products']->value));?>
    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <div class="ty-variations-list__wrapper">
    <table class="ty-variations-list ty-table ty-table--sorter" data-ca-sortable="true" data-ca-sort-list="[[1, 0]]">
        <thead>
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['show_variation_thumbnails']->value) {?>
                    <th class="ty-variations-list__title ty-left cm-tablesorter" data-ca-sortable-column="false">&nbsp;</th>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                    <th class="ty-variations-list__title ty-left cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("sku");?>
</th>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['first_product']->value['variation_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                        <th class="ty-variations-list__title ty-left cm-tablesorter" data-ca-sortable-column="true"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</th>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>
                    <th class="ty-variations-list__title ty-right cm-tablesorter" data-ca-sortable-column="true" width="15%"><?php echo $_smarty_tpl->__("availability");?>
</th>
                <?php }?>
                <th class="ty-variations-list__title ty-variations-list__title--right cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("price");?>
</th>
                <th class="ty-variations-list__title cm-tablesorter" data-ca-sortable-column="false">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key', 'variations_list', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

                <?php $_smarty_tpl->_assignInScope('variation_link', fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])));?>
                <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_select_variations_button'=>false), 0, true);
?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_variations_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_variations_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <tr class="ty-variations-list__item">
                        <?php if ($_smarty_tpl->tpl_vars['show_variation_thumbnails']->value) {?>
                            <td class="ty-variations-list__product-elem ty-variations-list__image">
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation_link']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0, true);
?>
                                </a>
                            </td>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                            <td class="ty-variations-list__product-elem ty-variations-list__product-elem-options ty-variations-list__sku">
                                <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation_link']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                                </a>
                            </td>
                        <?php }?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                            <td class="ty-variations-content__product-elem ty-variations-content__product-elem-options">
                                <bdi>
                                    <span class="ty-product-options">
                                        <span class="ty-product-options-content">
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                        </span>
                                    </span>
                                </bdi>
                            </td>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>
                            <td class="ty-variations-list__product-elem ty-variations-list__product-elem-options">
                                <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


                                <?php if (!$_smarty_tpl->tpl_vars['product']->value['company_id'] && !((($tmp = $_smarty_tpl->tpl_vars['product']->value['inventory_amount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] ?? null : $tmp))) {?>
                                    <span class="ty-qty-out-of-stock ty-control-group__item"
                                        id="out_of_stock_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    >
                                        <?php echo $_smarty_tpl->__("text_out_of_stock");?>

                                    </span>
                                <?php }?>
                            </td>
                        <?php }?>

                        <td class="ty-variations-list__product-elem ty-variations-list__price">
                            <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>

                        </td>

                        <td class="ty-variations-list__product-elem ty-variations-list__controls">
                            <form
                                <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
                                    class="cm-ajax cm-ajax-full-render"
                                <?php }?>
                                action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="variations_list_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">

                                <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*" />
                                <input type="hidden" name="redirect_url" value="<?php if ($_REQUEST['redirect_url']) {
echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');
}?>" />
                                <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"variations_list:list_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>

                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </form>
                        </td>
                    </tr>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_variations_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/blocks/products/variations_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/blocks/products/variations_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.hide_add_to_wishlist_button"] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_wishlist', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_wishlist', true);?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('products', $_smarty_tpl->tpl_vars['items']->value);?>
    <?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_wishlist', (($tmp = $_smarty_tpl->tpl_vars['_show_add_to_wishlist']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_sku', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.show_product_code"] ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp) == "Y");?>
    <?php $_smarty_tpl->_assignInScope('show_variation_thumbnails', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["product_variations.show_variation_thumbnails"] ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp) == "Y");?>
    <?php $_smarty_tpl->_assignInScope('show_price', true);?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_cart', (($tmp = $_smarty_tpl->tpl_vars['_show_add_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_role', "action");?>
    <?php $_smarty_tpl->_assignInScope('hide_form', true);?>
    <?php $_smarty_tpl->_assignInScope('show_product_amount', $_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] !== smarty_modifier_enum("YesNo::NO"));?>
    <?php $_smarty_tpl->_assignInScope('hide_stock_info', false);?>
    <?php $_smarty_tpl->_assignInScope('show_out_of_stock', true);?>
    <?php $_smarty_tpl->_assignInScope('show_amount_label', false);?>
    <?php $_smarty_tpl->_assignInScope('show_variations', true);?>
    <?php $_smarty_tpl->_assignInScope('show_sku_label', false);?>
    <?php $_smarty_tpl->_assignInScope('image_width', (($tmp = $_smarty_tpl->tpl_vars['image_width']->value ?? null)===null||$tmp==='' ? 40 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('image_height', (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? 40 ?? null : $tmp));?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_variations_list_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_variations_list_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_variations_list_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>


    <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
        <?php $_smarty_tpl->_assignInScope('first_product', reset($_smarty_tpl->tpl_vars['products']->value));?>
    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    <div class="ty-variations-list__wrapper">
    <table class="ty-variations-list ty-table ty-table--sorter" data-ca-sortable="true" data-ca-sort-list="[[1, 0]]">
        <thead>
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['show_variation_thumbnails']->value) {?>
                    <th class="ty-variations-list__title ty-left cm-tablesorter" data-ca-sortable-column="false">&nbsp;</th>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                    <th class="ty-variations-list__title ty-left cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("sku");?>
</th>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['show_variations']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['first_product']->value['variation_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                        <th class="ty-variations-list__title ty-left cm-tablesorter" data-ca-sortable-column="true"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</th>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>
                    <th class="ty-variations-list__title ty-right cm-tablesorter" data-ca-sortable-column="true" width="15%"><?php echo $_smarty_tpl->__("availability");?>
</th>
                <?php }?>
                <th class="ty-variations-list__title ty-variations-list__title--right cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("price");?>
</th>
                <th class="ty-variations-list__title cm-tablesorter" data-ca-sortable-column="false">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key', 'variations_list', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

                <?php $_smarty_tpl->_assignInScope('variation_link', fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])));?>
                <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_select_variations_button'=>false), 0, true);
?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_variations_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_variations_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <tr class="ty-variations-list__item">
                        <?php if ($_smarty_tpl->tpl_vars['show_variation_thumbnails']->value) {?>
                            <td class="ty-variations-list__product-elem ty-variations-list__image">
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation_link']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value), 0, true);
?>
                                </a>
                            </td>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
                            <td class="ty-variations-list__product-elem ty-variations-list__product-elem-options ty-variations-list__sku">
                                <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation_link']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                                </a>
                            </td>
                        <?php }?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                            <td class="ty-variations-content__product-elem ty-variations-content__product-elem-options">
                                <bdi>
                                    <span class="ty-product-options">
                                        <span class="ty-product-options-content">
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                        </span>
                                    </span>
                                </bdi>
                            </td>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php if ($_smarty_tpl->tpl_vars['show_product_amount']->value) {?>
                            <td class="ty-variations-list__product-elem ty-variations-list__product-elem-options">
                                <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


                                <?php if (!$_smarty_tpl->tpl_vars['product']->value['company_id'] && !((($tmp = $_smarty_tpl->tpl_vars['product']->value['inventory_amount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] ?? null : $tmp))) {?>
                                    <span class="ty-qty-out-of-stock ty-control-group__item"
                                        id="out_of_stock_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    >
                                        <?php echo $_smarty_tpl->__("text_out_of_stock");?>

                                    </span>
                                <?php }?>
                            </td>
                        <?php }?>

                        <td class="ty-variations-list__product-elem ty-variations-list__price">
                            <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>

                        </td>

                        <td class="ty-variations-list__product-elem ty-variations-list__controls">
                            <form
                                <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
                                    class="cm-ajax cm-ajax-full-render"
                                <?php }?>
                                action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="variations_list_form<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">

                                <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*" />
                                <input type="hidden" name="redirect_url" value="<?php if ($_REQUEST['redirect_url']) {
echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');
}?>" />
                                <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">

                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"variations_list:list_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>

                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"variations_list:list_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </form>
                        </td>
                    </tr>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_variations_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>
<?php }
}
}
}
