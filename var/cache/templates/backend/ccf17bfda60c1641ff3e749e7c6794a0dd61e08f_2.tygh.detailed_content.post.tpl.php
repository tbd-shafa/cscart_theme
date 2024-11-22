<?php
/* Smarty version 4.3.0, created on 2024-11-22 03:13:37
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/discussion/hooks/products/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67406761249d90_47342239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccf17bfda60c1641ff3e749e7c6794a0dd61e08f' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/discussion/hooks/products/detailed_content.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:addons/discussion/views/discussion_manager/components/allow_discussion.tpl' => 1,
  ),
),false)) {
function content_67406761249d90_47342239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('comments_and_reviews','discussion_title_product'));
if (($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] !== smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("comments_and_reviews"),'target'=>"#discussion_product_setting"), 0, false);
?>
    <div id="discussion_product_setting" class="in collapse">
    	<fieldset>
			<?php $_smarty_tpl->_assignInScope('no_hide_input', false);?>
			<?php if (fn_allowed_for("ULTIMATE")) {?>
				<?php $_smarty_tpl->_assignInScope('no_hide_input', true);?>
			<?php }?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"product_data",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'title'=>$_smarty_tpl->__("discussion_title_product"),'no_hide_input'=>$_smarty_tpl->tpl_vars['no_hide_input']->value,'discussion_default_type'=>$_smarty_tpl->tpl_vars['addons']->value['discussion']['product_discussion_type']), 0, false);
?>
    	</fieldset>
    </div>
<?php }
}
}
