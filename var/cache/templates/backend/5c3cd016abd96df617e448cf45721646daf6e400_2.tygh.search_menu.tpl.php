<?php
/* Smarty version 4.3.0, created on 2024-11-11 05:17:17
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/menu/search_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673203dde6c6f5_84968279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c3cd016abd96df617e448cf45721646daf6e400' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/components/menu/search_menu.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673203dde6c6f5_84968279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_general'));
?>
<!--quick search-->
<div class="search nav__search">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:global_search"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:global_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <form id="global_search" method="get" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="search__form" data-ca-search-menu="form">
            <input type="hidden" name="dispatch" value="search.results" />
            <input type="hidden" name="compact" value="Y" />
            <label for="gs_text" class="search__group">
                <input type="text"
                    class="cm-autocomplete-off search__input"
                        id="gs_text"
                        name="q"
                        placeholder="<?php echo $_smarty_tpl->__("admin_search_general");?>
"
                        value="<?php echo htmlspecialchars((string) $_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-search-menu="input"
                    />
                <button class="btn search__button" type="submit" id="search_button"></button>
            </label>
        </form>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:global_search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</div>
<!--end quick search--><?php }
}
