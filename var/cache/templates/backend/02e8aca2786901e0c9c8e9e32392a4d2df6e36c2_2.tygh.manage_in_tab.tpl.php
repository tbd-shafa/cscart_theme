<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:38
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/block_manager/manage_in_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406762d3a821_26659591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02e8aca2786901e0c9c8e9e32392a4d2df6e36c2' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/views/block_manager/manage_in_tab.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 1,
    'tygh:views/block_manager/manage.tpl' => 1,
  ),
),false)) {
function content_67406762d3a821_26659591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('switch_layout'));
?>
<div id="content_blocks">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['layouts']->value) > 1) {?>
        <div class="content-variant-wrap content-variant-wrap--layout">
            <h6 class="muted"><?php echo $_smarty_tpl->__("switch_layout");?>
:</h6>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"s_layout="),'items'=>$_smarty_tpl->tpl_vars['layouts']->value,'selected_id'=>$_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id'],'key_name'=>"name",'display_icons'=>false,'target_id'=>"content_blocks"), 0, false);
?>
        </div>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('storefront_selector_submit_form_class'=>"cm-ajax",'storefront_selector_submit_form_result_ids'=>"content_blocks",'storefront_selector_submit_form_params'=>$_smarty_tpl->tpl_vars['dynamic_object_params']->value), 0, false);
?>
<!--content_blocks--></div>
<?php }
}
