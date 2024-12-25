<?php
/* Smarty version 4.3.0, created on 2024-12-12 02:24:20
  from '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/common/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_675ab9d4bf73f7_72675180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df0c421159f2cb4995b81ac93b03b548657e26e5' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/themes/custom_theme/templates/common/search.tpl',
      1 => 1730293063,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/magnifier.tpl' => 4,
  ),
),false)) {
function content_675ab9d4bf73f7_72675180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('storefront_search_general','search_products','storefront_search_button','storefront_search_button','storefront_search_general','search_products','storefront_search_button','storefront_search_button'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="hero__search__form">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
     
       <div class="hero__search__categories hero__categories__alls">
        All Categories
        <span class="arrow_carrot-down"></span>
    </div>

    <!-- Dropdown for categories -->
    <div class="category-dropdown" style="display: none;">>
       <select name="category_id" class="form-control" id="category_select">
        <option value="">Select a category</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top_level_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_link'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_name'], ENT_QUOTES, 'UTF-8');?>

            </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    </div>
    
    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $('.hero__categories__alls').on('click', function() {
                $('.category-dropdown').slideToggle(400);
                $('#category_select').on('change', function() {
                var selectedValue = $(this).val();
                if (selectedValue) {
                    window.location.href = selectedValue; // Redirect to the selected category link
                }
            });
            });
        });
    <?php echo '</script'; ?>
> 

        <input type="hidden" name="match" value="all" />
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"search:additional_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
$_smarty_tpl->_assignInScope('search_title', $_smarty_tpl->__("storefront_search_general"));
} else {
$_smarty_tpl->_assignInScope('search_title', $_smarty_tpl->__("search_products"));
}?><input type="text" name="q" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" id="search_input<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'search_input_id'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-search-block__input cm-hint" /><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"search.results",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0, false);
} else {
$_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"products.search",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0, true);
}?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "search_input_id", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    </form>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="hero__search__form">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
     
       <div class="hero__search__categories hero__categories__alls">
        All Categories
        <span class="arrow_carrot-down"></span>
    </div>

    <!-- Dropdown for categories -->
    <div class="category-dropdown" style="display: none;">>
       <select name="category_id" class="form-control" id="category_select">
        <option value="">Select a category</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top_level_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_link'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['category_name'], ENT_QUOTES, 'UTF-8');?>

            </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    </div>
    
    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $('.hero__categories__alls').on('click', function() {
                $('.category-dropdown').slideToggle(400);
                $('#category_select').on('change', function() {
                var selectedValue = $(this).val();
                if (selectedValue) {
                    window.location.href = selectedValue; // Redirect to the selected category link
                }
            });
            });
        });
    <?php echo '</script'; ?>
> 

        <input type="hidden" name="match" value="all" />
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"search:additional_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
$_smarty_tpl->_assignInScope('search_title', $_smarty_tpl->__("storefront_search_general"));
} else {
$_smarty_tpl->_assignInScope('search_title', $_smarty_tpl->__("search_products"));
}?><input type="text" name="q" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" id="search_input<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'search_input_id'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-search-block__input cm-hint" /><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['search_objects']) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"search.results",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0, true);
} else {
$_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"products.search",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0, true);
}?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "search_input_id", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    </form>
</div>
<?php }
}
}
