<?php
/* Smarty version 4.3.0, created on 2024-11-20 05:21:11
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/search_filters/products_sort_by.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_673de247988498_06522842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31b2bea02a947d48a89baccc5fd1351c45550aea' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/products/components/search_filters/products_sort_by.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673de247988498_06522842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','sku','price','list_price','quantity','status','sort_by','asc','desc'));
$_smarty_tpl->_assignInScope('sort_by_content', array());
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:sort_by_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:sort_by_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('sort_by_content', array_merge($_smarty_tpl->tpl_vars['sort_by_content']->value,array('product'=>array('id'=>"product",'label'=>$_smarty_tpl->__("name"),'selected'=>($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "product")),'code'=>array('id'=>"code",'label'=>$_smarty_tpl->__("sku"),'selected'=>($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "code")),'price'=>array('id'=>"price",'label'=>$_smarty_tpl->__("price"),'selected'=>($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "price")),'list_price'=>array('id'=>"list_price",'label'=>$_smarty_tpl->__("list_price"),'selected'=>($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "list_price")),'amount'=>array('id'=>"amount",'label'=>$_smarty_tpl->__("quantity"),'selected'=>($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "amount")),'status'=>array('id'=>"status",'label'=>$_smarty_tpl->__("status"),'selected'=>($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status")))));
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:sort_by_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<div>
    <label for="sort_by"><?php echo $_smarty_tpl->__("sort_by");?>
</label>
    <select name="sort_by" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
_sort_by" class="input-fill">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort_by_content']->value, 'sort_by_item');
$_smarty_tpl->tpl_vars['sort_by_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_by_item']->value) {
$_smarty_tpl->tpl_vars['sort_by_item']->do_else = false;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['sort_by_item']->value['selected']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_by_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sort_by_item']->value['label'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>
<div>
    <select name="sort_order" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
_sort_order" class="input-fill">
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] === "desc") {?>selected="selected"<?php }?> value="asc"><?php echo $_smarty_tpl->__("asc");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] === "asc") {?>selected="selected"<?php }?> value="desc"><?php echo $_smarty_tpl->__("desc");?>
</option>
    </select>
</div><?php }
}
