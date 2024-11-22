<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_tools_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_674067615a8356_65203344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5639ff25e51926b0c7c39876e2a9bf2e84bcb6d' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_tools_list.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674067615a8356_65203344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('edit','delete'));
?>

<?php if ($_smarty_tpl->tpl_vars['product_review_id']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"product_reviews.update?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)), true);?>
</li>
    <?php if ($_smarty_tpl->tpl_vars['is_allowed_to_delete_product_reviews']->value && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"product_reviews.delete?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value),'method'=>"POST"), true);?>

        </li>
    <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

<?php }
}
}
