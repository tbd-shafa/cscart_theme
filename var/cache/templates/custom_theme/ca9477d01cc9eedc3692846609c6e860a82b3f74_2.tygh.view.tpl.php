<?php
/* Smarty version 4.3.0, created on 2024-12-02 21:51:23
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/sitemap/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674e9c5b6c9197_82061028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca9477d01cc9eedc3692846609c6e860a82b3f74' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/views/sitemap/view.tpl',
      1 => 1729847847,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/pages/components/pages_tree.tpl' => 2,
    'tygh:views/sitemap/components/categories_tree.tpl' => 2,
  ),
),false)) {
function content_674e9c5b6c9197_82061028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cart_info','information','catalog','sitemap','cart_info','information','catalog','sitemap'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
    <?php $_smarty_tpl->_assignInScope('direction', "right");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('direction', "left");
}?>

<div class="ty-sitemap">
    <div class="ty-sitemap__section">
        <h2 class="ty-sitemap__section-title"><?php echo $_smarty_tpl->__("cart_info");?>
</h2>
        <div class="ty-sitemap__section-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['show_site_info'] == "Y") {?>
                <h3 class="ty-sitemap__section-sub-title"><?php echo $_smarty_tpl->__("information");?>
</h3>
                <ul>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/pages_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tree'=>$_smarty_tpl->tpl_vars['sitemap']->value['pages_tree'],'root'=>true,'no_delim'=>true,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, false);
?>
                </ul>
            <?php }?>
        </div>
            <div class="ty-sitemap__section-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['custom']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sitemap']->value['custom'], 'section', false, 'name');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                    <h3 class="ty-sitemap__section-sub-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</h3>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                            <li><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['link']->value['link_href']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['link'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="ty-sitemap__section">
        <h2 class="ty-sitemap__section-title"><?php echo $_smarty_tpl->__("catalog");?>
</h2>
        <div class="ty-sitemap__tree">
            <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories'] || $_smarty_tpl->tpl_vars['sitemap']->value['categories_tree']) {?>
                <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories']) {?>
                    <ul class="ty-sitemap__tree-list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sitemap']->value['categories'], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <li class="ty-sitemap__tree-list-item"><a class="ty-sitemap__tree-list-a ty-strong" href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories_tree']) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/sitemap/components/categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('all_categories_tree'=>$_smarty_tpl->tpl_vars['sitemap']->value['categories_tree'],'background'=>"white",'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, false);
?>
                <?php }?>
            <?php }?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("sitemap");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/sitemap/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/sitemap/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
    <?php $_smarty_tpl->_assignInScope('direction', "right");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('direction', "left");
}?>

<div class="ty-sitemap">
    <div class="ty-sitemap__section">
        <h2 class="ty-sitemap__section-title"><?php echo $_smarty_tpl->__("cart_info");?>
</h2>
        <div class="ty-sitemap__section-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['show_site_info'] == "Y") {?>
                <h3 class="ty-sitemap__section-sub-title"><?php echo $_smarty_tpl->__("information");?>
</h3>
                <ul>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/pages_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tree'=>$_smarty_tpl->tpl_vars['sitemap']->value['pages_tree'],'root'=>true,'no_delim'=>true,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, true);
?>
                </ul>
            <?php }?>
        </div>
            <div class="ty-sitemap__section-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['custom']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sitemap']->value['custom'], 'section', false, 'name');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                    <h3 class="ty-sitemap__section-sub-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</h3>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                            <li><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['link']->value['link_href']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['link'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="ty-sitemap__section">
        <h2 class="ty-sitemap__section-title"><?php echo $_smarty_tpl->__("catalog");?>
</h2>
        <div class="ty-sitemap__tree">
            <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories'] || $_smarty_tpl->tpl_vars['sitemap']->value['categories_tree']) {?>
                <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories']) {?>
                    <ul class="ty-sitemap__tree-list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sitemap']->value['categories'], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <li class="ty-sitemap__tree-list-item"><a class="ty-sitemap__tree-list-a ty-strong" href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories_tree']) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/sitemap/components/categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('all_categories_tree'=>$_smarty_tpl->tpl_vars['sitemap']->value['categories_tree'],'background'=>"white",'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, true);
?>
                <?php }?>
            <?php }?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("sitemap");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
