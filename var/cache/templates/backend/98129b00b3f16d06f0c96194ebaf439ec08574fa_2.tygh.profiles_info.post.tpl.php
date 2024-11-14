<?php
/* Smarty version 4.3.0, created on 2024-11-14 02:32:04
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/geo_maps/hooks/order_management/profiles_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6735d1a4b95920_24111830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98129b00b3f16d06f0c96194ebaf439ec08574fa' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/geo_maps/hooks/order_management/profiles_info.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6735d1a4b95920_24111830 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.shipping_address_on_map','store_locator.use_two_fingers_for_move_map','no_data'));
if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'] === "yandex") {?>
    <?php $_smarty_tpl->_assignInScope('show_move_map_mobile_hint', true);
}?>
<div class="sidebar-row" id="om_ajax_location_map">
    <h6><?php echo $_smarty_tpl->__("geo_maps.shipping_address_on_map");?>
</h6>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'] || $_smarty_tpl->tpl_vars['user_data']->value['s_city'] || $_smarty_tpl->tpl_vars['user_data']->value['s_address']) {?>
        <div class="geo-map__map-container">
            <div class="cm-geo-map-container cm-aom-map-container"
                data-ca-geo-map-language="<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-aom-country="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
"
                data-ca-aom-city="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
"
                data-ca-aom-address="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
"
                data-ca-geo-map-controls-enable-search="false"
                data-ca-geo-map-behaviors-enable-drag="true"
                data-ca-geo-map-behaviors-enable-drag-on-mobile="false"
                data-ca-geo-map-behaviors-enable-smart-drag="true"
                data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
                data-ca-geo-map-behaviors-enable-multi-touch="true"
            ></div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['show_move_map_mobile_hint']->value) {?>
            <div class="mobile-visible muted"><?php echo $_smarty_tpl->__("store_locator.use_two_fingers_for_move_map");?>
</div>
        <?php }?>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--om_ajax_location_map--></div>
<?php }
}
