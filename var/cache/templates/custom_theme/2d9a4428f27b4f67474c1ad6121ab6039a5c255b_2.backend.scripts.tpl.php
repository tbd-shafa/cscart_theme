<?php
/* Smarty version 4.3.0, created on 2024-11-22 01:29:28
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/geo_maps/components/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67404ef85f02d1_24235756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d9a4428f27b4f67474c1ad6121ab6039a5c255b' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/geo_maps/components/scripts.tpl',
      1 => 1728377995,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67404ef85f02d1_24235756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_field','geo_maps.cannot_select_location','admin_search_field','geo_maps.cannot_select_location'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/addons/geo_maps/maps.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/code.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/locate.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('provider', $_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider']);?>

<?php if ($_smarty_tpl->tpl_vars['provider']->value == "yandex") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/index.js",'cookie-name'=>"yandex_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/maps.js",'cookie-name'=>"yandex_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/code.js",'cookie-name'=>"yandex_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/locate.js",'cookie-name'=>"yandex_maps"),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['provider']->value == "google") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/index.js",'cookie-name'=>"google_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/maps.js",'cookie-name'=>"google_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/code.js",'cookie-name'=>"google_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/locate.js",'cookie-name'=>"google_maps"),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/func.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('api_key', $_smarty_tpl->tpl_vars['settings']->value['geo_maps'][$_smarty_tpl->tpl_vars['provider']->value][((string)$_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'])."_api_key"]);
if ($_smarty_tpl->tpl_vars['provider']->value === 'yandex') {?>
    <?php $_smarty_tpl->_assignInScope('suggest_api_key', $_smarty_tpl->tpl_vars['settings']->value['geo_maps'][$_smarty_tpl->tpl_vars['provider']->value][((string)$_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'])."_suggest_api_key"]);
}?>

<?php echo '<script'; ?>
>
    (function (_, $) {
        _.geo_maps = {
            provider: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
            api_key: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['api_key']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
            <?php if ($_smarty_tpl->tpl_vars['provider']->value === 'yandex') {?>
                suggest_api_key: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['suggest_api_key']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
            <?php }?>
            yandex_commercial: <?php if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['yandex']['yandex_commercial'] == "Y") {?>true<?php } else { ?>false<?php }?>,
            language: "<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
",
        };

        _.tr({
            geo_maps_google_search_bar_placeholder: '<?php echo strtr((string)$_smarty_tpl->__("admin_search_field"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            geo_maps_cannot_select_location: '<?php echo strtr((string)$_smarty_tpl->__("geo_maps.cannot_select_location"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:addons/geo_maps/components/scripts.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:addons/geo_maps/components/scripts.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/geo_maps/maps.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/code.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/locate.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('provider', $_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider']);?>

<?php if ($_smarty_tpl->tpl_vars['provider']->value == "yandex") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/index.js",'cookie-name'=>"yandex_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/maps.js",'cookie-name'=>"yandex_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/code.js",'cookie-name'=>"yandex_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/locate.js",'cookie-name'=>"yandex_maps"),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['provider']->value == "google") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/index.js",'cookie-name'=>"google_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/maps.js",'cookie-name'=>"google_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/code.js",'cookie-name'=>"google_maps"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/locate.js",'cookie-name'=>"google_maps"),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/func.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('api_key', $_smarty_tpl->tpl_vars['settings']->value['geo_maps'][$_smarty_tpl->tpl_vars['provider']->value][((string)$_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'])."_api_key"]);
if ($_smarty_tpl->tpl_vars['provider']->value === 'yandex') {?>
    <?php $_smarty_tpl->_assignInScope('suggest_api_key', $_smarty_tpl->tpl_vars['settings']->value['geo_maps'][$_smarty_tpl->tpl_vars['provider']->value][((string)$_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'])."_suggest_api_key"]);
}?>

<?php echo '<script'; ?>
>
    (function (_, $) {
        _.geo_maps = {
            provider: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
            api_key: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['api_key']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
            <?php if ($_smarty_tpl->tpl_vars['provider']->value === 'yandex') {?>
                suggest_api_key: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['suggest_api_key']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
            <?php }?>
            yandex_commercial: <?php if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['yandex']['yandex_commercial'] == "Y") {?>true<?php } else { ?>false<?php }?>,
            language: "<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
",
        };

        _.tr({
            geo_maps_google_search_bar_placeholder: '<?php echo strtr((string)$_smarty_tpl->__("admin_search_field"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            geo_maps_cannot_select_location: '<?php echo strtr((string)$_smarty_tpl->__("geo_maps.cannot_select_location"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }
}
}
