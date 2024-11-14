<?php
/* Smarty version 4.3.0, created on 2024-11-14 05:28:28
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/products_to_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6735fafc2e0a21_89570273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9de7eca27b37b484fe2ca865cfcbb5f93a58ff52' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/common/products_to_search.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/products/picker.tpl' => 1,
  ),
),false)) {
function content_6735fafc2e0a21_89570273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/lib/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),));
\Tygh\Languages\Helper::preloadLangVars(array('add','or_saved_search'));
if ($_smarty_tpl->tpl_vars['search']->value['p_ids']) {?>
    <?php $_smarty_tpl->_assignInScope('product_ids', smarty_modifier_explode(",",$_smarty_tpl->tpl_vars['search']->value['p_ids']));
}?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"added_products",'but_text'=>$_smarty_tpl->__("add"),'item_ids'=>$_smarty_tpl->tpl_vars['product_ids']->value,'input_name'=>"p_ids",'type'=>"links",'no_container'=>true,'picker_view'=>true), 0, false);
?>
    <?php $_smarty_tpl->_assignInScope('views', fn_get_views("products"));?>
    <?php if ($_smarty_tpl->tpl_vars['views']->value) {?>
    <?php echo $_smarty_tpl->__("or_saved_search");?>
:&nbsp;
    <select name="product_view_id">
        <option value="0">--</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f']->value['view_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_view_id'] == $_smarty_tpl->tpl_vars['f']->value['view_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['f']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <?php }
}
}
