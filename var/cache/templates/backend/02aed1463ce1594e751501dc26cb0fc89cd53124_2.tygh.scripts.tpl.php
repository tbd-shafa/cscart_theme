<?php
/* Smarty version 4.3.0, created on 2024-11-26 21:41:24
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/geo_maps/components/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6746b1045de569_94642777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02aed1463ce1594e751501dc26cb0fc89cd53124' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/geo_maps/components/scripts.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6746b1045de569_94642777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_field','geo_maps.cannot_select_location'));
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

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
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
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
