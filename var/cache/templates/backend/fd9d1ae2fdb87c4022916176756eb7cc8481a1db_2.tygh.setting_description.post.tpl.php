<?php
/* Smarty version 4.3.0, created on 2024-11-26 02:41:26
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/seo/hooks/settings_fields/setting_description.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6745a5d6c83e72_24848770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd9d1ae2fdb87c4022916176756eb7cc8481a1db' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/seo/hooks/settings_fields/setting_description.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745a5d6c83e72_24848770 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('warning','seo.storefront_frontend_default_language_warning','seo.default_storefront_frontend_default_language_warning','seo.secondary_storefront_frontend_default_language_warning'));
if ($_smarty_tpl->tpl_vars['item']->value['name'] === "frontend_default_language" && $_smarty_tpl->tpl_vars['show_language_warning']->value) {?>
    <div class="text-warning">
        <strong><?php echo $_smarty_tpl->__("warning");?>
!</strong>
        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php echo $_smarty_tpl->__("seo.storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php } elseif ($_smarty_tpl->tpl_vars['is_default_storefront_affected']->value) {?>
            <?php echo $_smarty_tpl->__("seo.default_storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("seo.secondary_storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php }?>
    </div>
<?php }
}
}
