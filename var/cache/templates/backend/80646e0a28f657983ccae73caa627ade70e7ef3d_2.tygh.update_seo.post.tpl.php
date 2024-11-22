<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/seo/hooks/products/update_seo.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067610eb4c1_85156644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80646e0a28f657983ccae73caa627ade70e7ef3d' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/seo/hooks/products/update_seo.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_674067610eb4c1_85156644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('seo.rich_snippets','in_stock'));
if ($_smarty_tpl->tpl_vars['view_uri']->value && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {
$_smarty_tpl->_assignInScope('protocol', $_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront'] === smarty_modifier_enum("YesNo::YES") ? "https" : "http");
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("seo.rich_snippets"),'target'=>"#acc_addon_seo_richsnippets",'meta'=>"mobile-hidden"), 0, false);
?>
<div id="acc_addon_seo_richsnippets" class="collapsed in mobile-hidden">

<div class="seo-rich-snippet">

    <h3>
        <?php $_smarty_tpl->_assignInScope('page_title', (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['page_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_data']->value['product'] ?? null : $tmp));?>
        <a class="srs-title cm-seo-srs-title" href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),"C",$_smarty_tpl->tpl_vars['protocol']->value), ENT_QUOTES, 'UTF-8');?>
" target="_blank">
            <?php echo htmlspecialchars((string) smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['page_title']->value ?: ''),$_smarty_tpl->tpl_vars['page_title_seo_length']->value,"..."), ENT_QUOTES, 'UTF-8');?>

        </a>
    </h3>
    <div>
        <div>
            <cite class="srs-url"><?php echo htmlspecialchars((string) fn_url('',"C",$_smarty_tpl->tpl_vars['protocol']->value), ENT_QUOTES, 'UTF-8');?>
</cite>
        </div>

        <div class="srs-price"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:seo_snippet_attributes"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:seo_snippet_attributes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product_data']->value['price'],'span_id'=>"elm_seo_srs_price"), 0, false);
?> - <?php echo $_smarty_tpl->__("in_stock");
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:seo_snippet_attributes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div>

        <?php $_smarty_tpl->_assignInScope('description', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['meta_description'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_data']->value['full_description'] ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_data']->value['short_description'] ?? null : $tmp));?>
        <span class="srs-description cm-seo-srs-description">
            <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['description']->value ?: ''),$_smarty_tpl->tpl_vars['description_seo_length']->value,"...");?>

        </span>
    </div>
</div>

</div>
<?php }
}
}
