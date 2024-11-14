<?php
/* Smarty version 4.3.0, created on 2024-11-14 02:30:58
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6735d162100f00_81039059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32e69082c3ba0cf1f566186c5a902155e692d2f4' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/checkout/cart.tpl',
      1 => 1731322061,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/cart_content.tpl' => 2,
    'tygh:buttons/continue_shopping.tpl' => 2,
  ),
),false)) {
function content_6735d162100f00_81039059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_cart_empty','text_cart_empty'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/cart_content.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/js/main.js"><?php echo '</script'; ?>
>
 <style>
 .hero.hero-normal .hero__categories ul {
   
    width: 90% !important;
    padding-left:50px;
 }
 
.custom_breadcome {
    width: calc(100vw - 8px);
    margin-left: calc((1170px - 100vw) / 2);
} 
</style>
 <div class="custom_breadcome">
     <section class="breadcrumb-section set-bg" data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="">Home</a>
                            Shopping Cart
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
<div id="cart_main">
    <?php if (!fn_cart_is_empty($_smarty_tpl->tpl_vars['cart']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_cart_empty");?>
</p>

        <div class="buttons-container wrap">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"submit"), 0, false);
?>
        </div>
    <?php }?>
<!--cart_main--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/cart_content.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/js/main.js"><?php echo '</script'; ?>
>
 <style>
 .hero.hero-normal .hero__categories ul {
   
    width: 90% !important;
    padding-left:50px;
 }
 
.custom_breadcome {
    width: calc(100vw - 8px);
    margin-left: calc((1170px - 100vw) / 2);
} 
</style>
 <div class="custom_breadcome">
     <section class="breadcrumb-section set-bg" data-setbg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/custom_theme/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="">Home</a>
                            Shopping Cart
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
<div id="cart_main">
    <?php if (!fn_cart_is_empty($_smarty_tpl->tpl_vars['cart']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_cart_empty");?>
</p>

        <div class="buttons-container wrap">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"submit"), 0, true);
?>
        </div>
    <?php }?>
<!--cart_main--></div>
<?php }
}
}
