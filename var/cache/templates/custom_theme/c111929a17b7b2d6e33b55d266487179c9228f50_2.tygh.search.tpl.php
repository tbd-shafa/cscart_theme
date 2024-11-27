<?php
/* Smarty version 4.3.0, created on 2024-11-26 21:41:26
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/products/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6746b106f3c151_11237689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c111929a17b7b2d6e33b55d266487179c9228f50' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/products/search.tpl',
      1 => 1732685544,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_list_templates/products_multicolumns2.tpl' => 2,
    'tygh:common/no_items.tpl' => 4,
  ),
),false)) {
function content_6746b106f3c151_11237689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('products_found','text_no_products_found','text_no_matching_products_found','search_results','products_found','text_no_products_found','text_no_matching_products_found','search_results'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="products_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">

<?php $_smarty_tpl->_assignInScope('products_search', "Y");
$_smarty_tpl->_assignInScope('is_selected_filters', $_REQUEST['features_hash']);?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php ob_start();
echo $_smarty_tpl->__("products_found");
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('title_extra', $_prefixVariable4.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']));?>
    <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>

    <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template'] == "blocks/product_list_templates/products_multicolumns.tpl") {?>
         <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/products_multicolumns2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'],'show_qty'=>true), 0, false);
?>
         <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'],'show_qty'=>true), 0, true);
?>
         <?php }?>
    <?php }?>
    
<?php } else { ?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:search_results_no_matching_found"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (!$_smarty_tpl->tpl_vars['show_not_found_notification']->value && $_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_products_found"),'no_items_extended'=>true,'reset_url'=>fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"features_hash")), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_matching_products_found")), 0, true);
?>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<!--products_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:search_results_mainbox_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span class="ty-mainbox-title__left"><?php echo $_smarty_tpl->__("search_results");?>
</span><span class="ty-mainbox-title__right" id="products_search_total_found_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>
<!--products_search_total_found_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="products_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">

<?php $_smarty_tpl->_assignInScope('products_search', "Y");
$_smarty_tpl->_assignInScope('is_selected_filters', $_REQUEST['features_hash']);?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php ob_start();
echo $_smarty_tpl->__("products_found");
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('title_extra', $_prefixVariable5.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']));?>
    <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>

    <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
        <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template'] == "blocks/product_list_templates/products_multicolumns.tpl") {?>
         <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_list_templates/products_multicolumns2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'],'show_qty'=>true), 0, true);
?>
         <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'],'show_qty'=>true), 0, true);
?>
         <?php }?>
    <?php }?>
    
<?php } else { ?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:search_results_no_matching_found"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (!$_smarty_tpl->tpl_vars['show_not_found_notification']->value && $_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_products_found"),'no_items_extended'=>true,'reset_url'=>fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"features_hash")), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/no_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text_no_found'=>$_smarty_tpl->__("text_no_matching_products_found")), 0, true);
?>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:search_results_no_matching_found"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<!--products_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:search_results_mainbox_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span class="ty-mainbox-title__left"><?php echo $_smarty_tpl->__("search_results");?>
</span><span class="ty-mainbox-title__right" id="products_search_total_found_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>
<!--products_search_total_found_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:search_results_mainbox_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
