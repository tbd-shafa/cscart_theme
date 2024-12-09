<?php
/* Smarty version 4.3.0, created on 2024-12-09 03:42:17
  from '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/tbd_admin_report/views/settings/components/analytics_section/analytics_card/graph.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6756d79964d811_30132967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c74ee7a365839be7b921bada1ab80d83e438548d' => 
    array (
      0 => '/opt/lampp/htdocs/cs-cart/design/backend/templates/addons/tbd_admin_report/views/settings/components/analytics_section/analytics_card/graph.tpl',
      1 => 1733735082,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6756d79964d811_30132967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/cs-cart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('current_previous_period'));
if ($_smarty_tpl->tpl_vars['graph']->value && $_smarty_tpl->tpl_vars['graph']->value['content']) {
echo smarty_function_script(array('src'=>"js/tygh/backend/dashboard/graph.js"),$_smarty_tpl);?>
<div class="analytics-card-graph" data-ca-analytics-card="graph" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['graph']->value['id'], ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-is-day="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_day']->value, ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-previous-period-text="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['data_1'], ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-current-period-text="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['data_2'], ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-current-previous-period-text="<?php echo htmlspecialchars((string) htmlentities(mb_convert_encoding((string)$_smarty_tpl->__("current_previous_period",array("[date]"=>"MMM d, yyyy")), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-content="<?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['graph']->value['content']), ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-graph__view spinner" data-ca-analytics-card="graphView"></div></div><?php }
}
}
