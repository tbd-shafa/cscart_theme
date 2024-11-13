<?php
/* Smarty version 4.3.0, created on 2024-11-12 22:22:40
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/wishlist/views/wishlist/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673445b0662dc6_58412830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0001fed3395e75fb3ae09fdaf2061d713ad9ecc' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/addons/wishlist/views/wishlist/view.tpl',
      1 => 1730268018,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/grid_list.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
    'tygh:buttons/continue_shopping.tpl' => 4,
  ),
),false)) {
function content_673445b0662dc6_58412830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('empty','clear_wishlist','wishlist_content','empty','clear_wishlist','wishlist_content'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('columns', 4);
if (!$_smarty_tpl->tpl_vars['wishlist_is_empty']->value) {?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_assignInScope('show_hr', false);?>
    <?php $_smarty_tpl->_assignInScope('location', "cart");
}?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['columns']->value,'show_empty'=>true,'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'no_pagination'=>true,'no_sorting'=>true,'show_features'=>true,'show_add_to_cart'=>false,'is_wishlist'=>true), 0, false);
} else { ?>
    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>

    <div class="ty-grid-list<?php if ($_smarty_tpl->tpl_vars['wishlist_is_empty']->value) {?> ty-wish-list-empty<?php }?>">
        <?php $_smarty_tpl->_assignInScope('iteration', 0);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wishlist:view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wishlist:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wishlist:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->_assignInScope('iteration', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'iteration'));?>
        <?php if ($_smarty_tpl->tpl_vars['iteration']->value == 0 || $_smarty_tpl->tpl_vars['iteration']->value%$_smarty_tpl->tpl_vars['columns']->value != 0) {?>
            <?php echo smarty_function_math(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->tpl_vars['iteration']->value,'c'=>$_smarty_tpl->tpl_vars['columns']->value),$_smarty_tpl);?>

            <?php
$__section_empty_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['empty_count']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_empty_rows_0_total = $__section_empty_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_empty_rows'] = new Smarty_Variable(array());
if ($__section_empty_rows_0_total !== 0) {
for ($__section_empty_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index'] = 0; $__section_empty_rows_0_iteration <= $__section_empty_rows_0_total; $__section_empty_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index']++){
?>
                <div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-product-empty">
                        <span class="ty-product-empty__text"><?php echo $_smarty_tpl->__("empty");?>
</span>
                    </div>
                </div>
            <?php
}
}
?>
        <?php }?>
    </div>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['wishlist_is_empty']->value) {?>
    <div class="buttons-container ty-wish-list__buttons">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("clear_wishlist"),'but_href'=>"wishlist.clear",'but_meta'=>"ty-btn__tertiary"), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0, false);
?>
    </div>
<?php } else { ?>
    <div class="buttons-container ty-wish-list__buttons ty-wish-list__continue">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0, true);
?>
    </div>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("wishlist_content");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/views/wishlist/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/views/wishlist/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('columns', 4);
if (!$_smarty_tpl->tpl_vars['wishlist_is_empty']->value) {?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_assignInScope('show_hr', false);?>
    <?php $_smarty_tpl->_assignInScope('location', "cart");
}?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['columns']->value,'show_empty'=>true,'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'no_pagination'=>true,'no_sorting'=>true,'show_features'=>true,'show_add_to_cart'=>false,'is_wishlist'=>true), 0, true);
} else { ?>
    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>

    <div class="ty-grid-list<?php if ($_smarty_tpl->tpl_vars['wishlist_is_empty']->value) {?> ty-wish-list-empty<?php }?>">
        <?php $_smarty_tpl->_assignInScope('iteration', 0);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"wishlist:view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"wishlist:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"wishlist:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->_assignInScope('iteration', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'iteration'));?>
        <?php if ($_smarty_tpl->tpl_vars['iteration']->value == 0 || $_smarty_tpl->tpl_vars['iteration']->value%$_smarty_tpl->tpl_vars['columns']->value != 0) {?>
            <?php echo smarty_function_math(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->tpl_vars['iteration']->value,'c'=>$_smarty_tpl->tpl_vars['columns']->value),$_smarty_tpl);?>

            <?php
$__section_empty_rows_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['empty_count']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_empty_rows_1_total = $__section_empty_rows_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_empty_rows'] = new Smarty_Variable(array());
if ($__section_empty_rows_1_total !== 0) {
for ($__section_empty_rows_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index'] = 0; $__section_empty_rows_1_iteration <= $__section_empty_rows_1_total; $__section_empty_rows_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index']++){
?>
                <div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-product-empty">
                        <span class="ty-product-empty__text"><?php echo $_smarty_tpl->__("empty");?>
</span>
                    </div>
                </div>
            <?php
}
}
?>
        <?php }?>
    </div>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['wishlist_is_empty']->value) {?>
    <div class="buttons-container ty-wish-list__buttons">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("clear_wishlist"),'but_href'=>"wishlist.clear",'but_meta'=>"ty-btn__tertiary"), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0, true);
?>
    </div>
<?php } else { ?>
    <div class="buttons-container ty-wish-list__buttons ty-wish-list__continue">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"text"), 0, true);
?>
    </div>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("wishlist_content");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
